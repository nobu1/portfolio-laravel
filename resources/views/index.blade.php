<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
        <h1 class="font-semibold text-sm text-white leading-tight">
            ポートフォリオ
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- main picture -->
                    <div class="relative">
                        <img class="w-auto" src="{{ asset('img/main_image.jpg') }}" alt="main picture">
                        <p
                            class="font-arial text-white text-center text-xs md:text-lg absolute top-2 left-1/2 -translate-x-2/4">
                            Shinji Nobuhara<br>
                            Freelance Web application portfolio
                        </p>
                    </div>
                    <!-- main contents -->
                    <div class="flex justify-center py-6">
                        <table class="border-2 border-collapse">
                            <caption class="py-2 text-base md:text-lg font-semibold">
                                使用技術
                            </caption>
                            <tr class="border-2">
                                <th scope="row" class="border-2 text-left p-3 text-base md:text-lg bg-gray-300">フロントエンド</th>
                                <td class="text-left p-3 text-base md:text-lg">Tailwind CSS</td>
                            </tr>
                            <tr class="border-2">
                                <th rowspan="2" scope="row" class="border-2 text-left p-3 text-base md:text-lg bg-gray-300">バックエンド</th>
                                <td class="text-left p-3 text-base md:text-lg">PHP</td>
                            </tr>
                            <tr>
                                <td class="text-left p-3 text-base md:text-lg">MySQL</td>
                            </tr>
                            <tr class="border-2">
                                <th scope="row" class="border-2 text-left p-3 text-base md:text-lg bg-gray-300">フレームワーク</th>
                                <td class="text-left p-3 text-base md:text-lg">Laravel Version 11</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
