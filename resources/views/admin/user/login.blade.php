<html lang="en" class="light">
@include('admin.user.head')

<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img src="{{ Vite::asset('public/images/security.png') }}">
                <span class="text-white text-lg ml-3"> Admin </span>

            </a>
            <div class="my-auto">
                <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                     src="{{ Vite::asset('public/images/illustration.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to
                    <br>
                    sign in to your account.
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your
                    e-commerce accounts in one place
                </div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->

        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">

            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign In
                </h2>
                @include('admin.user.alert')
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your
                    account. Manage all your e-commerce accounts in one place
                </div>
                <form action="{{route('store')}}" method="post">
                    @csrf
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email"
                               name="email">
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                               placeholder="Password" name="password">
                    </div>
                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4 flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2" name="remember">
                            <label class="cursor-pointer select-none" for="remember-me" >Remember me</label>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit">Login
                        </button>

                    </div>
                </form>
            </div>

        </div>

        <!-- END: Login Form -->
    </div>
</div>
@include('admin.user.footer')
</body>
</html>
