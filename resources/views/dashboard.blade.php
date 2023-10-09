<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session()->has('status'))
            <div class="px-4 py-2 mt-5 font-bold text-white bg-purple-500 rounded shadow">
                {{ session('status') }}
            </div>
        @endif
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Body
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $post->user->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $post->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $post->body }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('post_edit', $post->id) }}"
                                                class="p-2 font-medium text-white bg-yellow-500 rounded-sm dark:text-blue-500 hover:underline ">Edit</a>
                                            <a href="{{route('post_delete',$post->id)}}"
                                                class="p-2 font-medium text-white bg-red-500 rounded-sm dark:text-blue-500 hover:underline">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
