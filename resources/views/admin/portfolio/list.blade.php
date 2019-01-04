@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10 col-xl-8">
        <div class="py-4 px-0">
            <h1>References</h1>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="text-nowrap">Title</th>
                        <th class="text-nowrap">Active</th>
                        <th class="text-center" style="width: 100px;"><a href="{{ route('admin.portfolio.create') }}"><i class="fas fa-plus-circle"></i> <span>Add</span></a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolio as $p)
                        <tr>
                            <td class="text-nowrap">{{ $p->title }}</td>
                            <td class="text-nowrap">@if($p->active) <a href="{{ route('admin.portfolio.set_status', ['id' => $p->id, 'status' => 0]) }}"><i class="far fa-check-circle green"></i></a> @else <a href="{{ route('admin.portfolio.set_status', ['id' => $p->id, 'status' => 1]) }}"><i class="far fa-check-circle"></i></a> @endif</td>
                            <td class="text-center"><a href="{{ route('admin.portfolio.edit', $p) }}" class="d-inline-block mr-2"><i class="fas fa-edit"></i></a> <a href="{{ route('admin.portfolio.destroy', $p) }}" class="d-inline-block delete"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection