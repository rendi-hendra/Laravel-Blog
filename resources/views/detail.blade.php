@section('title')
    {{ $posting->judul }}
@endsection
<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto px-5 sm:px-14 mt-5">
            <div class="bg-[#12141D] border border-black overflow-hidden shadow-xl p-5 rounded-md px-10 text-[#E7E8F2]">
                <h1 class="text-4xl mb-4 font-serif shadow-md">
                    {{ $posting->judul }}
                </h1>
                <p class="mt-1">By : <a href="/authors/{{ $posting->author->username }}"
                        class="text-[#EB4432] hover:font-semibold">{{ $posting->author->name }}</a>
                </p>
                <p class="">
                    Category :
                    <a href="/category/{{ $posting->category->slug }}" class="text-[#EB4432] hover:font-semibold">
                        {{ $posting->category->name }}
                    </a>
                </p>
                <p class="mt-4">{!! $posting->body !!}</p>
            </div>
        </div>
    </div>
    <div class="ml-16 text-zinc-300 hover:text-zinc-500 duration-300 inline-block mb-10">
        <a href="/dashboard" class="inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
        </a>
    </div>
</x-app-layout>
