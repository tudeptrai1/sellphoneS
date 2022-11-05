<!DOCTYPE html>

<html lang="en" class="light" id="theme11">

<head>
    <meta charset="utf-8">
    <link href="{{asset('images/logo.svg')}}" rel="shortcut icon">
    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    @vite('resources/css/app.css')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="py-5 md:py-0">
@include('layouts.inc.mobile-menu')
@include('layouts.inc.top-bar')
<div class="flex overflow-hidden">
@include('layouts.inc.sidemenu')
    <div class="content">
{{--        <div class="grid grid-cols-12 gap-6">--}}
{{--            <div class="col-span-12 2xl:col-span-9">--}}
{{--                <div class="grid grid-cols-12 gap-6">--}}
                    @yield('content')
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@include('layouts.inc.dark-mode-switcher')



<!-- BEGIN: JS Assets-->
@vite('resources/js/app.js')
@vite('resources/js/ckeditor-classic.js')
<!-- END: JS Assets-->
</body>
</html>
<script>
    function changeColor(){
        const element = document.querySelector("#theme11");
        element.classList.toggle("dark");
    }
</script>
