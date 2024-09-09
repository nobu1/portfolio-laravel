<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
        <h2 class="font-semibold text-sm text-white leading-tight">
            自己紹介
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-center py-6">
                        <img class="block h-20 w-auto fill-current" src="{{ asset('img/shinji_image.jpg') }}" alt="shinji nobuhara picture">
                    </div>
                    <dl>
                        <dt class="text-base md:text-lg font-semibold">職歴</dt>
                        <dd class="text-sm md:text-base pl-2">セキュリティエンジニア(2021年3月～2024年7月)</dd>
                        <dd class="text-sm md:text-base pl-4">Securonixを用いたSIEM構築・運用とアラート分析(リーダ)</dd>
                        <dd class="text-sm md:text-base pl-4">Microsoft Defender for
                            Endpointを用いたEDR運用と<br class="md:hidden">アラート分析(リーダ)</dd>
                        <dd class="text-sm md:text-base pl-4 text-pretty">Sentinel,
                            Splunkを用いたSIEM運用とCrowdStrike, CarbonBlackを<br class="md:hidden">用いたEDR運用</dd>
                        <dd class="text-sm md:text-base pl-4">NISTセキュリティフレームワークを活用した社内規定の整備</dd>
                        <dd class="text-sm md:text-base pl-4">AppScan,
                            NessusProfessionalを活用した脆弱性検証の実施</dd>
                        <br />
                        <dd class="text-sm md:text-base pl-2">プログラマ(2019年7月～2021年2月)</dd>
                        <dd class="text-sm md:text-base pl-4">VB.NET, SQL
                            Serverを利用した訪問看護システムのバックエンド<br class="md:hidden">開発</dd>
                        <dd class="text-sm md:text-base pl-4">
                            PowerShellを利用した電子カルテシステムのキッティング<br class="md:hidden">プログラムの開発</dd>
                        <hr class="w-full py-2">
                        <dt class="text-base md:text-lg font-semibold">学歴</dt>
                        <dd class="text-sm md:text-base pl-2">オレゴン州立大学　コンピュータサイエンス　入学(2023年9月～)</dd>
                        <dd class="text-sm pl-4 text-balance">
                            オレゴン州立大学はNVIDIAのCEOであるジェン・スン・フアンが卒業した大学です。現在、特待生として選任され勉強しています
                        <dd>
                            <br>
                        <dd class="text-sm md:text-base pl-2">九州工業大学大学院　生命体工学研究科　修了(2008年3月)</dd>
                        <hr class="w-full py-2">
                        <dt class="text-base md:text-lg font-semibold">資格</dt>
                        <dd class="text-sm md:text-base pl-2">オラクル Java SE11 Gold (2022年11月)</dd>
                        <dd class="text-sm md:text-base pl-2">認定ホワイトハッカーCEH (2022年8月)</dd>
                        <dd class="text-sm md:text-base pl-2">AWSセキュリティ (2022年5月)</dd>
                        <dd class="text-sm md:text-base pl-2">LPIC レベル304 (2020年5月)</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
