<div class="hidden lg:block absolute overflow-x-auto -right-0 mr-7">
    <table class="border-collapse border border-gray-400 bg-gray-400 text-center rounded-md">
        <thead>
            <tr>
                <th class="border border-gray-400 bg-gray-300 px-20 py-3 uppercase rounded-t-md">Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $ct)
                <tr>
                    <td class="border border-gray-400 py-3 bg-white hover:bg-gray-200">
                        <a href="/category/{{ $ct->slug }}" class="block font-semibold">{{ $ct->name }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
