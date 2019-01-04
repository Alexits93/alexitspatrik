<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('sort')->get();
        return view('admin.pages.list', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add');
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
            'text' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $page = new Page();
            $page->fill($request->except('_token', 'active', 'files'));
            $page->slug = str_slug($request->get('title'));
            $page->active = $request->get('active')? 1 : 0;
            $page->save();

            Cache::forget('pages');
            return redirect()->back()->with('successful', 'Page has been successfully created.');
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
        $page = Page::findOrfail($id);
        return view('admin.pages.edit', compact('page'));
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
            'text' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $page = Page::findOrfail($id);
            $page->fill($request->except('_token', 'active', 'files'));
            $page->slug = str_slug($request->get('title'));
            $page->active = $request->get('active')? 1 : 0;
            $page->save();

            Cache::forget('pages');
            return redirect()->back()->with('successful', 'Page has been successfully updated.');
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
        Page::findOrfail($id)->delete();

        Cache::forget('pages');
        return response(['status' => 1]);
    }

    public function set_status($id, $status)
    {
        $page = Page::findOrfail($id);
        $page->active = $status;
        $page->save();

        Cache::forget('pages');
        return redirect()->back()->with('successful', 'The status has been changed.');
    }
}
