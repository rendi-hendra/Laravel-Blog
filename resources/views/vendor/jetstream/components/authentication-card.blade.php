<div class="lg:min-h-screen lg:grid lg:grid-cols-2 lg:box-border min-h-screen grid grid-cols-1 box-border">
    <div class="w-full px-20 py-2 bg-zinc-800 overflow-hidden">
        {{ $slot }}
    </div>
    <div class="hidden lg:block lg:bg-cover lg:overflow-hidden" style="background-image: url('/img/nature.jpg')">
        <div class="text-white flex justify-center mt-5 uppercase font-bold underline"
            style="font-family: 'Noto Sans', sans-serif;">
            <div class="">
                <a href="/" class="mr-7">Home</a>
                <a href="{{ Request::is('login') ? 'register' : 'login' }}"
                    class="">{{ Request::is('login') ? 'Register' : 'Login' }}</a>
            </div>
        </div>
    </div>
</div>
