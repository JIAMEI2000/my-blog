<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @foreach ($blogPosts as $blogPost)
                    <a href="{{route('blog-post.show',[$blogPost->id])}}">{{$blogPost->title}}</a><br>
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
</x-app-layout>
