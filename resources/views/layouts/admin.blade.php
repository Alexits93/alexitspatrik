<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.admin.head')
</head>
<body>

@include('layouts.admin.header')

<div class="row mx-0">
    @include('layouts.admin.sidemenu')
    @yield('content')
</div>

@include('layouts.admin.footer')
@include('layouts.admin.mobile-menu')

</body>
</html>
@yield('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    @if(count($errors) > 0)
        var message = '';
        @foreach ($errors->all() as $error)
            message += '{{ $error }}\n';
        @endforeach
        swal({
            title: 'Hiba',
            text: message,
            type: 'error'
        });
    @endif

    @if(Session::get('successful'))
        swal({
            title: 'Státusz',
            text: '{!! Session::get('successful') !!}',
            type: 'success'
        });
    @endif

    @if(Session::get('not_successful'))
        swal({
            title: 'Hiba',
            text: '{!! Session::get('not_successful') !!}',
            type: 'error'
        });
    @endif

    $('body').on('click', '.delete', function (e) {
        var link = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: "Do you want to delete it?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'green',
            cancelButtonColor: 'red',
            confirmButtonText: 'Yes, I do!',
            cancelButtonText: "No, I don't.",
            preConfirm: function () {
                return new Promise(function (resolve) {
                    $.ajax({
                        url: link,
                        type: 'DELETE',
                        success: function () {
                            swal({
                                title: 'Status',
                                text: 'Record was deleted succesfully!',
                                type: 'success'
                            }).then((result) => {
                                location.reload();
                            });
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Error deleting!", "Please try again", "error");
                        }
                    });
                })
            }
        });
        e.preventDefault();
    });
</script>