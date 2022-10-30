<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Post List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @foreach ($blogPosts as $blogPost)
                    <a href="{{route('blog-post.show',[$blogPost->id])}}">{{$blogPost->title}}</a>
                    <a href="{{route('blog-post.edit',[$blogPost->id])}}">Edit</a>
                @endforeach


                {{-- <table class="table table-bordered">
                    <tr class="text-center">
                        <th>Blog</th>
                    </tr>
                    @forelse ($blogPosts as $post)
                    <tr>
                        <td><a href="{{route('blog-post.show',[$post->id])}}">{{$post->title}}</td>
                    </tr>
                    @empty
                    <p class="text-warning">No blog Posts available</p>
                    @endforelse
                </table> --}}

            </div>
        </div>
    </div>

    <a href="{{route('blog-post.create')}}">ADD POST</a>

</x-app-layout>
