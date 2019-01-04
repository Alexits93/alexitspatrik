<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::orderBy('sort')->get();
        return view('admin.portfolio.list', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'color_code' => 'required',
            'sort' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $reference = new Portfolio();
            $reference->fill($request->except('_token', 'pic_path', 'active'));
            if($request->hasFile('pic_path')) $reference->pic_path = 'images/portfolio/'.$request->file('pic_path')->getClientOriginalName();
            $reference->active = $request->get('active') ? 1 : 0;
            $reference->save();

            if($request->hasFile('pic_path')) {
                $image = $request->file('pic_path');
                $imageName = $image->getClientOriginalName();

                $directory = public_path('images/portfolio/');
                $imageUrl = $directory.$imageName;
                Image::make($image)->save($imageUrl);
            }

            Cache::forget('portfolio');
            return redirect()->back()->with('successful', 'Reference was successfully created.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reference = Portfolio::findOrfail($id);
        return view('admin.portfolio.edit', compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'color_code' => 'required',
            'sort' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $reference = Portfolio::findOrfail($id);
            $reference->fill($request->except('_token', 'pic_path', 'active'));
            if($request->hasFile('pic_path')) $reference->pic_path = 'images/portfolio/'.$request->file('pic_path')->getClientOriginalName();
            $reference->active = $request->get('active') ? 1 : 0;
            $reference->save();

            if($request->hasFile('pic_path')) {
                if ($reference->pic_path){
                    unlink(public_path('images/portfolio/').$reference->pic_path);
                }
                $image = $request->file('pic_path');
                $imageName = $image->getClientOriginalName();

                $directory = public_path('images/portfolio/');
                $imageUrl = $directory.$imageName;
                Image::make($image)->save($imageUrl);
            }

            Cache::forget('portfolio');
            return redirect()->back()->with('successful', 'Reference was successfully created.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::findOrfail($id)->delete();

        Cache::forget('portfolio');
        return response(['status' => 1]);
    }

    public function set_status($id, $status)
    {
        $reference = Portfolio::findOrfail($id);
        $reference->active = $status;
        $reference->save();

        Cache::forget('portfolio');
        return redirect()->back()->with('successful', 'The status has been changed.');
    }
}
