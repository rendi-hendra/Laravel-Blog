@section('title')
    {{ "CATEGORY | | $category" }}
@endsection
<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-10 mt-5">
            <div class="overflow-hidden shadow-xl mx-5 rounded-md">
                <div class="p-4 m-5 md:ml-10 mb-10 md:mb-8">
                    <h1 class="text-3xl font-serif uppercase text-[#E7E8F2]">Post Category : {{ $category }}</h1>
                </div>
                @foreach ($postingan as $ps)
                    <div
                        class="rounded-md p-6 px-5 m-5 md:mt-10 sm:px-10 sm:m-5 sm:mx-10 bg-[#12141D] border border-black text-[#E7E8F2]">
                        <div class="inline-block text-3xl font-serif text-[#E7E8F2] hover:text-[#b1b2bc]">
                            <a href="/posting/{{ $ps->slug }}" class="inline-block">
                                {{ $ps->judul }}
                            </a>
                        </div>
                        {{-- Category --}}
                        <div class="text-[#E7E8F2]">
                            <p class="mt-1">By : <a href="/authors/{{ $ps->author->username }}"
                                    class="text-[#EB4432] hover:font-semibold">{{ $ps->author->name }}</a></p>
                            <p class="">
                                Category :
                                <a href="/category/{{ $ps->category->slug }}"
                                    class="text-[#EB4432] hover:font-semibold">
                                    {{ $ps->category->name }}
                                </a>
                            </p>
                        </div>
                        {{-- isi --}}
                        <div class="">
                            <p class="mt-2">{{ $ps->sort }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
