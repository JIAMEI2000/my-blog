<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                Title: {{$blogPost->title}}
                <br>
                Body: {{$blogPost->body}}
                <br>
                Answer: {{$answer}}



            </div>
        </div>
    </div>
</x-app-layout>
