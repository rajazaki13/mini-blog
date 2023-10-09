<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="container px-4 py-8 mx-auto">
        <form class="p-6 bg-gray-800 rounded-lg" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-300" for="">
                    Title
                </label>
                <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="" name="title" type="text" placeholder="Title Plzz..." value="{{$post->title}}">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-300" for="">
                    Body
                </label>
                <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="" type="text" name="body" placeholder="What's in your Mind..." rows="4">{{$post->body}}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit" value="Update">
                    Submit
                </button>
            </div>
        </form>
        @if (session()->has('status'))
        <div class="px-4 py-2 mt-5 font-bold text-white bg-purple-500 rounded shadow">
            {{session('status')}}
        </div>
        @endif
    </div>

</x-app-layout>
