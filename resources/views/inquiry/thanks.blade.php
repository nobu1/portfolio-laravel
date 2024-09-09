<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
            お問い合わせ完了
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="p-2 text-gray-900">
                    <p class="text-lg text-center">お問い合わせありがとうございます。</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
