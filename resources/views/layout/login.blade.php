@extends('../layout/base')

@section('body')
    <body class="login">
        @yield('content')
        @include('../layout/components/dark-mode-switcher')
        @include('../layout/components/main-color-switcher')

        <!-- BEGIN: JS Assets-->
        @vite('resources/js/app.js')
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
