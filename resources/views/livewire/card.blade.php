@foreach ($post as $ps)
    <div
        class="rounded-md p-6 px-5 m-5 sm:px-10 sm:m-5 bg-white border border-gray-400 mb-10 md:mb-8 md:hover:bg-gray-50">
        <div class="text-3xl font-serif hover:text-gray-500">
            <a href="/posting/{{ $ps->slug }}">
                <h1>{{ $ps->judul }}</h1>
            </a>
        </div>
        <div class="">
            <p class="mt-2">{{ $ps->sort }}</p>
        </div>
    </div>
@endforeach
