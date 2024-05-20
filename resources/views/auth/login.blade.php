<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="corporate">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajement Asset Diskominfo Sulteng</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link nonce="{{ csp_nonce() }}" href="https://fonts.bunny.net/css?family=raleway:200,400,600,800"
        rel="stylesheet" />

    {{-- CSS --}}
    @vite(['resources/css/login.css'])
</head>

<body class="antialiased min-h-screen w-full flex flex-col justify-between">
    <div class="flex-1 w-full grid place-content-center">
        <div class="card w-96 bg-base-100">
            <form action="{{ route('login') }}" method="POST" class="card-body">
                @csrf

                <h2 class="card-title">Login :)</h2>
                <p>welcome back</p>

                <div class="space-y-2 mt-6">
                    <label class="input input-bordered flex items-center gap-2">
                        <x-icons.user class="w-5 h-5 text-base-content/70" />
                        <input type="text" class="grow" name="username" value="{{ old('username') }}"
                            placeholder="username" />
                    </label>

                    <label class="input input-bordered flex items-center gap-2">
                        <x-icons.lock class="w-5 h-5 text-base-content/70" />
                        <input type="password" class="grow" name="password" placeholder="***" />
                    </label>

                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text">Remember me</span>
                            <input type="checkbox" checked="checked" class="checkbox" />
                        </label>
                    </div>
                </div>

                <div class="card-actions justify-end !mt-4">
                    <button class="btn btn-block btn-primary">Login Now!</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer footer-center p-4">
        <aside>
            <p>Copyright © 2024 - All right reserved by Diskominfo Sulteng</p>
        </aside>
    </footer>

    @if ($errors->any())
        <div class="toast">
            <div class="alert alert-error font-normal">
                <x-icons.bug class="h-6 w-6" />
                <span><span class="font-bold">Error!</span> {{ $errors->all()[0] }}</span>
            </div>
        </div>
    @endif
</body>

</html>
