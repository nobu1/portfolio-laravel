<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
            お問い合わせ
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-message :message="session('message')" />
        <form method="POST" action="{{ route('inquiry.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">お名前</label>
                    <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="name" value="{{ $inquiry['name'] }}" readonly>
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">メールアドレス</label>
                    <input type="text" name="email" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="email" value="{{ $inquiry['email'] }}" readonly>
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">電話番号</label>
                    <x-input-error :messages="$errors->get('tell')" class="mt-2" />
                    <input type="text" name="tell" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="tell" value="{{ $inquiry['tell'] }}" readonly>
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold mt-4">お問い合わせ内容</label>
                    <textarea name="content" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30"
                        rows="5" readonly>{{ $inquiry['content'] }}</textarea>
                </div>
            </div>

            <x-blue-button class="mt-4">
                送信
            </x-blue-button>
        </form>
    </div>
</x-app-layout>
