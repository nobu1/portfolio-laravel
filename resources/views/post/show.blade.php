<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation-post')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
            個別記事
        </h2>
    </x-slot>

    <x-message :message="session('message')" />
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white w-full  rounded-2xl">
            <div class="mt-4 p-4">
                <h2 class="text-lg font-semibold">
                    {{ $post->title }}
                </h2>
                <div class="text-right flex p-2">
                    <a href="{{ route('post.edit', $post) }}" class="flex-1">
                        <x-blue-button>
                            編集
                        </x-blue-button>
                    </a>

                    <form method="POST" action="{{ route('post.destroy', $post) }}" class="flex-2 pl-2">
                        @csrf
                        @method('delete')
                        <x-red-button>
                            削除
                        </x-red-button>
                    </form>
                </div>
                <hr class="w-full">
                <p class="mt-4 whitespace-pre-line">
                    {{ $post->body }}
                </p>
                <div class="text-sm font-semibold flex flex-row-reverse">
                    <p> {{ $post->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
