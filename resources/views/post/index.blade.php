<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation-post')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
            記事一覧
        </h2>
    </x-slot>

    <div class="mx-auto px-6">
        {{-- <x-message :message="session('message')" /> --}}
        @foreach ($posts as $post)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
                <h2 class="p-4 text-lg font-semibold">
                    件名：
                    <a href="{{ route('post.show', $post) }}" class="text-blue-600">
                        {{ $post->title }}
                    </a>
                </h2>
                <hr class="w-full">
                <p class="mt-4 p-4">
                    {{ $post->body }}
                </p>
                <div class="p-4 text-sm font-semibold">
                    <p>
                        {{ $post->created_at }} / {{ $post->user->name??'Anonymous' }}
                    </p>
                </div>
            </div>
        @endforeach

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
