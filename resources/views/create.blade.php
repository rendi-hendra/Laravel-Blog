@section('title')
    {{ 'BLOG | | CREATE NEW POST' }}
@endsection
<x-app-layout>

    <div
        class="block p-6 rounded-lg shadow-lg bg-white max-w-full px-5 mx-8 md:px-14 md:pr-72 md:py-10 md:mx-14 mt-10 m-auto">
        <form method="post" action="/dashboard/posts">
            @csrf
            <div class="form-group mb-6">
                <label for="title" class="form-label inline-block mb-2 text-gray-700">Judul</label>
                <input type="text"
                    class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-500
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="title" name="title" placeholder="Judul">
            </div>
            <div class="form-group mb-6">
                <label for="exampleInputText" class="form-label inline-block mb-2 text-gray-700">Isi</label>
                <input type="text"
                    class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-500
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInputPassword1" placeholder="Isi">
            </div>
            <button type="submit"
                class="
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Submit</button>
        </form>
    </div>
</x-app-layout>
