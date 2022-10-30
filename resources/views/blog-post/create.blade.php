<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{route('blog-post.store')}}" method="POST">
                    @csrf
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" placeholder="Enter title">

                    <br><br>

                    <label for="body">Body:</label>
                    <input type="text" id="body" name="body" placeholder="Enter body">

                    <br><br>

                    <button type="submit">Create Post</button>


            </div>
        </div>
    </div>
</x-app-layout>
