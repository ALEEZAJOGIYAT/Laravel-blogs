<!DOCTYPE html>
<html lang="en">
    <head>
        @include('./user/layouts/head')
    </head>
    <body>
        <!-- Navigation-->
        @include('./user/layouts/header')
            @section('main-content')
                @show
        <!-- Main Content-->
        <!-- Footer-->
        @include('./user/layouts/footer')
    </body>
</html>
