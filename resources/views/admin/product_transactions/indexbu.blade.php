//menampilkan data transaksi sebagai pembeli atau pemilik apotek

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row w-full justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{  Auth::user()->hasRole('owner') ? __('Apotek Orders') : __('My Transactions')}}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <div>
                        <p class="text-base text-slate-500">
                            Total Transaksi
                        </p>
                        <h3 class="text-xl font-bold text-indigo-950">
                            Rp 19.000.000
                        </h3>
                        </div>
                    </div>
                <div>
                        <p class="text-base text-slate-500">
                            Date
                        </p>
                        <h3 class="text-xl font-bold text-indigo-950">
                            25 januari 2025
                        </h3>
                </div>
                        <span class="py-1 px-3 rounded-full bg-orange-500">
                            <p class="text-white font-bold text-sm">
                                PENDING
                            </p>
                        </span>
                        <div class="flex flex-row items-center gap-x-3">
                            <a href="{{ route('product_transaction.show', $productTransaction) }}" class="font-bold py-3 px-5 rounded-full text-white bg-indigo-700">View Details</a>
                        </div>
                    </div>
                <hr class="my-3">
                <h3 class="text-xl font-bold text-indigo-950">
                        List of Items
                </h3>
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="#" alt="" class="w-[50px] h-[50px]">
                        <div>
                            <h3 class="text-xl font-bold text-indigo-950">
                                panado
                            </h3>
                            <p class="text-base text-slate-500">
                                Rp 200.000
                            </p>
                        </div>
                    </div>
               <p class="text-base text-slate-500">
                vitamins
               </p>
                </div>
           </div>
            </div>
        </div>
    </div>
</x-app-layout>
