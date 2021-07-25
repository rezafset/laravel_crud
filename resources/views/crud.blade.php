<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>Laravel Crud Operation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card vh-100">
                <div class="card-header bg-primary">
                    @include('partials._header')
                </div>
                <div class="card-body">
                    <main>
                        @yield('main')
                    </main>
                </div>
                <div class="card-footer bg-primary">

                        @include('partials._footer')

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
