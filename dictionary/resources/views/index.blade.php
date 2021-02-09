@extends('head')

@section('content')

    <a href="/add-item"><button
        class="p-2 my-2 bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 ring-blue-300 ring-offset-2 w-full">
        NEW ITEM
    </button></a>

    @if(!empty($data))
        <table id="item-table" class="min-w-full table-auto">
            <thead class="justify-between">
            <tr class="bg-gray-800">
                @foreach ($data[0] as $key => $item)
                    <th class="px-16 py-2">
                        <span class="text-gray-300">{{ $key }}</span>
                    </th>
                @endforeach
                <th class="px-16 py-2">
                    <span class="text-gray-300">ACTIONS</span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-gray-200">
            @foreach ($data as $item)
                <tr class="bg-white border-4 border-gray-200">
                    @foreach ($item as $value)
                        <td class="px-16 py-2">{{ $value }}</td>
                    @endforeach
                    <td class="px-42">
                        <button onclick="edit(this, {{$item->id}})"
                                class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black inline-block">
                            EDIT
                        </button>
                        <button onclick="remove(this, {{$item->id}})"
                                class="p-2 my-2 px-4 py-2 bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 inline-block">
                            Erase
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    <script>
        async function remove(item, id) {
            const response = await fetch('/api/dictionary-item/delete/' + id, {method: "DELETE"});
            item.parentElement.parentElement.style.display = "none"
        }
    </script>
@endsection
