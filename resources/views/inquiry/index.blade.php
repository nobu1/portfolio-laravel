<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
            お問い合わせ
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-message :message="session('message')" />
        <form method="POST" action="{{ route('inquiry.confirm') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">お名前<span class="pl-2 text-red-300">必須</span></label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="name" value="{{ old('name'), $inquiry['name'] }}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">メールアドレス<span
                            class="pl-2 text-red-300">必須</span></label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <input type="text" name="email" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="email" value="{{ old('email'), $inquiry['email'] }}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">電話番号<span
                            class="pl-2 text-red-300">必須</span></label>
                    <x-input-error :messages="$errors->get('tell')" class="mt-2" />
                    <input type="text" name="tell" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="tell" value="{{ old('tell'), $inquiry['tell'] }}">
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold mt-4">お問い合わせ内容</label>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    <textarea name="content" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30"
                        rows="5">{{ old('content'), $inquiry['content'] }}</textarea>
                </div>
            </div>

            <x-blue-button class="mt-4">
                確認
            </x-blue-button>
        </form>
    </div>
</x-app-layout>
