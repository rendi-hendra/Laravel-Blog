@php
// $judul = $posting->author->name;
@endphp

@section('title')
    {{ Request::is('dashboard') ? 'BLOG | | DASHBOARD' : 'BLOG | | AUTHOR' }}
@endsection
<x-app-layout>
    @if ($postingan->count())
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-10 mt-5">
                <div class=" overflow-hidden mx-5 rounded-md">
                    @foreach ($postingan as $ps)
                        {{-- Postingan --}}
                        <div
                            class="rounded-md p-6 px-5 m-5 md:mt-10 sm:px-10 sm:m-5 sm:mx-10 bg-[#12141D] border border-black">
                            <div class="inline-block text-3xl font-serif text-[#E7E8F2] hover:text-[#b1b2bc]">
                                <a href="/posting/{{ $ps->slug }}" class="inline-block">
                                    {{ $ps->judul }}
                                </a>
                            </div>
                            {{-- Category --}}
                            <div class="text-[#E7E8F2]">
                                <p class="mt-1">By : <a href="/authors/{{ $ps->author->username }}"
                                        class="text-[#EB4432] hover:font-semibold">{{ $ps->author->name }}</a>
                                </p>
                                <p class="">
                                    Category :
                                    <a href="/category/{{ $ps->category->slug }}"
                                        class="text-[#EB4432] hover:font-semibold">
                                        {{ $ps->category->name }}
                                    </a>
                                </p>
                            </div>
                            {{-- isi --}}
                            <div class="text-[#E7E8F2]">
                                <p class="mt-2">{{ $ps->sort }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Button Scroll --}}
                <a href="#home" class="hidden sup sdown sd smp ease-in">
                    <div
                        class="fixed animate-bounce opacity-0 sd ease-out bottom-5 right-2 md:right-2 w-12 h-12 bg-zinc-800 rounded-full md:hover:bg-black">
                        <div class="mt-3 ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                class="bi bi-arrow-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @else
        <p class="text-center text-2xl mt-64 text-gray-500 font-semibold">No Post Found.</p>
    @endif

</x-app-layout>
