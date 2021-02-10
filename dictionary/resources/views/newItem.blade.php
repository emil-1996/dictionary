@extends('head')

@section('content')

    <a href="/">
        <button
            class="p-2 my-2 bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 ring-blue-300 ring-offset-2 w-full">
            BACK TO DICTIONARY
        </button>
    </a>


    <div id="add-item">
        <form action="/api/dictionary-item/add/" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
              id="addTask">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="value">Value</label>
            <input type="text" name="value" placeholder="Get a value"
                   class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"/>

            <label class="block text-gray-700 text-sm font-bold mb-2" for="lang_id">Lang ID</label>
            <input type="text" name="lang_id" placeholder="Get lang id"
                   class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"/>
            <input type="button" onclick="createDictionaryItem();" value="Create new dictionary item"
                   class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black"/>
        </form>
    </div>
@endsection
