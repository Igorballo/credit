@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="container-fluid content-top-gap">

        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                <li class="breadcrumb-item"><a href="operation.html">Opérations</a></li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->

        <div class="flex justify-center my-12">
            <div class="w-2/3 bg-white border border-green-600">
                <div class="h-16 border border-b-2 flex items-center md:text-2xl uppercase justify-center text-green-600 font-semibold">Virement éffectué avec succes</div>
                <div class="p-6 text-2xl text-gray-600 space-y-8">
                    <h1>Mlle. {{ $customer  }}: <span class="text-green-600 font-medium">N°000720740 03</span></h1>
                    <h3>Dernière connexion: <span class="text-green-600 font-medium"> {{ now() }}/span></h3>
                </div>
            </div>
        </div>

        <div>
            <p class="text-4xl font-semibold text-black-50 underline text-center">Dernière transactions</p>
            <div class="mt-8 bg-gray-200 p-4 w-full">
                <div class="flex">
                    <form action="w-full border border-gray-500 h-12">
                        <div class="flex text-lg">
                            <input class="p-2 text-sm focus:outline-none focus:border focus:border-purple-600 rounded" type="Saisissez une enseigne, un montant ou un type d'opération" name="search" id="">
                            <button class=" p-2 bg-white hover:bg-purple-300 border border-l-2 border-gray-600 text-white">Sur les trois derniers mois</button>
                            <button class="p-2 bg-purple-400 hover:bg-purple-300 text-white">Rechercher</button>
                        </div>
                    </form>
                </div>

                <div class="mt-8 space-y-6">
                    <div class="">
                        <label for="">Jeudi 07 avril 2022</label>
                        <div class="mt-1 bg-white w-full p-4 text-xl font-medium flex shadow-xl">
                            <div class="w-4/12">
                                <div class="inline-flex">
                                    <h3>HABITAT IM09391773222222</h3>
                                </div>
                            </div>
                            <div class="w-8/12 text-right text-green-600 font-medium">-150,00 € </div>
                        </div>
                    </div>

                    <div class="">
                        <label for="">Jeudi 10 Janvier 2020</label>
                        <div class="mt-1 bg-white w-full p-4 text-xl font-medium flex shadow-xl">
                            <div class="w-4/12">
                                <div class="inline-flex">
                                    <h3>PAYEMENT CB 3954</h3>
                                </div>
                            </div>
                            <div class="w-8/12 text-right text-green-600 font-medium">-750,00 € </div>
                        </div>
                    </div>

                    <div class="">
                        <label for="">Vendredi 13 mars 2020</label>
                        <div class="mt-1 bg-white w-full p-4 text-xl font-medium flex shadow-xl">
                            <div class="w-4/12">
                                <div class="inline-flex">
                                    <h3>VIREMENT RECU DE: MATHILDE VEROGNE</h3>
                                </div>
                            </div>
                            <div class="w-8/12 text-right text-green-600 font-medium">-150,00 € </div>
                        </div>
                    </div>

                    <div class="">
                        <label for="">Lundi 07 Octobre 2020</label>
                        <div class="mt-1 bg-white w-full p-4 text-xl font-medium flex shadow-xl">
                            <div class="w-4/12">
                                <div class="inline-flex">
                                    <h3>VIREMENT RECU DE: LUC PERCEVAL</h3>
                                </div>
                            </div>
                            <div class="w-8/12 text-right text-green-600 font-medium">-150,00 € </div>
                        </div>
                    </div>

                    <div class="">
                        <label for="">Mardi 24 Juin 2020</label>
                        <div class="mt-1 bg-white w-full p-4 text-xl font-medium flex shadow-xl">
                            <div class="w-4/12">
                                <div class="inline-flex">
                                    <h3>COTIS CP.GLOBAL </h3>
                                </div>
                            </div>
                            <div class="w-8/12 text-right text-green-600 font-medium">+49,75 € </div>
                        </div>
                    </div>

                    <div class="">
                        <label for="">Jeudi 07 avril 2020</label>
                        <div class="mt-1 bg-white w-full p-4 text-xl font-medium flex shadow-xl">
                            <div class="w-4/12">
                                <div class="inline-flex">
                                    <h3>VIREMENT RECU DE: CLAIRE BONEVALE</h3>
                                </div>
                            </div>
                            <div class="w-8/12 text-right text-green-600 font-medium">+950,00 € </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- //content -->
@endsection
