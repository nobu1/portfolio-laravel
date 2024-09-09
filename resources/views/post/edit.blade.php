<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation-post')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
            記事編集
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-message :message="session('message')" />
        <form method="POST" action="{{ route('post.update', $post) }}">
            @csrf
            @method('patch')
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="title" value="{{ old('title', $post->title) }}">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold mt-4">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30"
                    rows="5">{{ old('body', $post->body) }}</textarea>
            </div>

            <x-blue-button class="mt-4">
                送信
            </x-blue-button>
        </form>
    </div>
</x-app-layout>