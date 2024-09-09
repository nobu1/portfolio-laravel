<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation-post')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
            記事検索
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('post.find', $post) }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名検索</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="title" value="{{ old('title', $post->title) }}">
                </div>
            </div>

            <x-blue-button class="mt-4">
                検索
            </x-blue-button>
        </form>
    </div>
</x-app-layout>
