@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="container-fluid content-top-gap">

        <!-- breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                <li class="breadcrumb-item"><a href="index.html">Virement</a></li>

            </ol>
        </nav>
        <!-- //breadcrumbs -->

        <div>
            <div class="flex justify-center mb-16">
                <div class="px-6 py-8 mx-20 text-2xl font-semibold mx-auto bg-white">Faire un virement</div>
            </div>

            <div class="bg-white p-4">
                <form action="">
                    <div class="flex flex-col">
                        <label for="">Virement unique</label>
                        <select class="text-gray-700 text-lg h-12 border-red-600 border ring-2 ring-red-300 focus:outline-none" name="" id="">
                            <option value="">LIVRET A GUIMBERT CECILE</option>
                            <option value="">COMPTE GLOBAL- GUIMBERT CECILE</option>
                        </select>
                    </div>

                    <div class="mt-6">
                        <p class="text-2xl  font-semibold ">Informations bénéficiaire</p>
                        <div class="space-y-8">
                            <div class="flex flex-col">
                                <label for="">Genre*</label>
                                <select class="w-full mt-3 text-gray-700 text-lg h-12 border-red-600 border ring-2 ring-red-300 focus:outline-none" name="" id="">
                                    <option value="">Masculin</option>
                                    <option value="">Féminin</option>
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="">Nom/Prénom*</label>
                                <input type="text" placeholder="tapez ici..." class="w-full mt-3 text-gray-700 text-lg h-12 border-red-600 border ring-2 ring-red-300 focus:outline-none">
                            </div>

                            <div class="flex flex-col">
                                <label for="">Adresse*</label>
                                <input type="text" placeholder="tapez ici..." class="w-full mt-3 text-gray-700 text-lg h-12 border-red-600 border ring-2 ring-red-300 focus:outline-none">
                            </div>

                            <div class="flex flex-col">
                                <label for="">Raison social*</label>
                                <input type="text" placeholder="tapez ici..." class="w-full mt-3 text-gray-700 text-lg h-12 border-red-600 border ring-2 ring-red-300 focus:outline-none">
                            </div>

                            <div class="flex flex-col">
                                <label for="">Date d'envoie*</label>
                                <input type="date" placeholder="Votre nom" class="w-full mt-3 text-gray-700 text-lg h-12 border-red-600 border ring-2 ring-red-300 focus:outline-none">
                            </div>

                            <div class="flex flex-col">
                                <label for="">Pays du bénéficiare*</label>
                                <select class="w-full mt-3 text-gray-700 text-lg h-12 border-red-600 border ring-2 ring-red-300 focus:outline-none" name="" id="">
                                    <option value="">France</option>
                                </select>
                            </div>

                            <button class="bg-purple-600 py-2 px-6 w-full rounded text-white font-semibold">Soumettre</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>


        <!--BLOCK ROW START-->

        </section>
        <!-- //pricing -->

    </div>
    <!-- //content -->
@endsection
