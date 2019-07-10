<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mine.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{--ckeditor--}}
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

{{--    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">--}}

<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}"/>
{{--    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.css')}}"/>--}}


    @yield('css')


</head>
<body>
@include('pages.seller.layout.includes.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-lg-2">
            @include('pages.seller.layout.includes.sidenav')
        </div>
        <div class="col-sm-5 col-lg-9 col-md-offset-5">
            @yield('content')
        </div>
    </div>
</div>
{{--<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5 col-md-6">

            <div class="page-content">
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif

                <div class="row">

                    <div class="col-md-10 display-area">
                        <div class="row text-center">
                            <div class="col-md-10 col-md-offset-5">
                                <div class="content-box-large">


                                </div>
                            </div>
                        </div>
                    </div><!--/Display area after sidenav-->
                </div>
            </div><!--/Page Content-->
        </div>
    </div>
</div>--}}
</body>

{{--<script type="text/javascript" src="{{asset('DataTables/datatables.js')}}"></script>--}}
<script src="{{asset('js/mine.js')}}"></script>

{{--<script src="{{asset('js/jquery.js')}}"></script>--}}

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


{{--<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

</script>

@yield('js')

<script src="https://kit.fontawesome.com/40f4086384.js"></script>

</html>