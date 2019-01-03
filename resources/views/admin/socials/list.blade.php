@extends('layouts.admin')

@section('content')
    <div class="col-12 col-lg-10 col-xl-8">
        <div class="py-4 px-0">
            <h1>Social</h1>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Link</th>
                        <th class="text-center" style="width: 100px;"><a href="{{ route('admin.socials.create') }}"><i class="fas fa-plus-circle"></i> <span>Add</span></a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($socials as $social)
                        <tr>
                            <td class="text-nowrap"><i class="{{ $social->icon }} mr-1"></i> {{ $social->name }}</td>
                            <td class="text-nowrap"><a href="{{ $social->target_url }}" target="_blank"><i class="fas fa-link"></i> <span class="d-none d-md-inline-block">{{ $social->link1 }}/{{ $social->link2 }}</span></a></td>
                            <td class="text-center"><a href="{{ route('admin.socials.edit', $social) }}" class="d-inline-block mr-2"><i class="fas fa-edit"></i></a> <a href="{{ route('admin.socials.destroy', $social) }}" class="d-inline-block delete"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection