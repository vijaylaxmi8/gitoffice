@extends('layouts.custom-master')

@section('styles')

@endsection

@section('custom-body')
<body class="authentication-page">
@endsection

@section('content')

            <main id="content"  class="w-full max-w-md mx-auto p-6">
                <a href="{{url('index')}}" class="header-logo">
                    <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="mx-auto block dark:hidden">
                    <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="mx-auto hidden dark:block">
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                    <div class="p-4 sm:p-7">
                        <!--div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                            <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                Don't have an account yet?
                                <a class="text-primary decoration-2 hover:underline font-medium"
                                    href="url('signup')*/">
                                    Sign up here
                                </a>
                            </p>
                        </div-->

                        <div class="mt-5">
                            <!--button type="button"
                                class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                <img src="{{asset('build/assets/img/authentication/social/1.png')}}" class="w-4 h-4" alt="google-img">Sign in with Google
                            </button>

                            <div
                                class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 ltr:before:mr-6 rtl:before:ml-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:after:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
                                Or</div-->

                            <!-- Form -->
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                            <div>
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <label for="email" class="block text-sm mb-2 dark:text-white font-bold">Email address</label>
                                        <div class="relative">
                                            <input type="email" id="email" name="email"
                                                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                required>
                                                @if ($errors->has('email'))
                                                <span class="text-red">{{ $errors->first('email') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label for="password" class="block text-sm mb-2 dark:text-white font-bold">Password</label>
                                            <a class="text-sm text-primary decoration-2 hover:underline font-medium"
                                                href="{{url('forgot_password')}}">Forgot password?</a>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="password" name="password"
                                                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                required>
                                                @if ($errors->has('password'))
                                                <span class="text-red">{{ $errors->first('password') }}</span>
                                                @endif
                                                <div id="togglePassword" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                        <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                    </svg>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Checkbox -->
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <input id="remember-me" name="remember-me" type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-white/10">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <label for="remember-me" class="text-sm dark:text-white font-bold">Remember me</label>
                                        </div>
                                    </div>
                                    <!-- End Checkbox -->

                                    <x-primary-button
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Sign
                                        in</x-primary-button>
                                </div>
                            </div>
                        </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

@endsection

@section('scripts')
<script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        // Toggle password visibility
        $("#togglePassword").click(function () {
            var passwordInput = $("#password");
            var type = passwordInput.attr("type") === "password" ? "text" : "password";
            passwordInput.attr("type", type);
        });
    });
</script>
@endsection