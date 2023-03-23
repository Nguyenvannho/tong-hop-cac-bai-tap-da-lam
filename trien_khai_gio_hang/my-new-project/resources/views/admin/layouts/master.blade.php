<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/favicon.ico')}}" />
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

</head>

<body>

    @include('admin.includes.header')
    <div class="container">
        <div class="row">
            @yield('content')
            @include('admin.includes.sidebar')
        </div>
    </div>
    @include('admin.includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
</body>

</html>