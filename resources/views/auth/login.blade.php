<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/logo.png') }}" sizes="60X60"/>
    <title>Sign In✨</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="flex items-center mb-6 text-4xl font-semibold text-primary-dark dark:text-white">
            <img class="w-14 h-14 mr-2" src="{{ Vite::asset('resources/images/logo.png') }}"
                 alt="logo">
            Si-Klinik
        </div>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-primary-dark md:text-2xl dark:text-white">
                    Masuk Ke Akun Anda
                </h1>
                @if(session('status'))
                    <div class="bg-red-100 mb-5  border-l-4 border-danger text-danger p-4" role="alert">
                        <p class="font-bold">{{session('status')}}</p>
                    </div>
                @endif
                <form class="space-y-4 md:space-y-6" action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300
                        text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                        dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@example.com">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50
                         border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <x-button-primary>Sign In</x-button-primary>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>