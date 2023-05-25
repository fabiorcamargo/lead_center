<x-app-layout>
    <x-slot name="">
        {{--<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>--}}
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    </x-slot>

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div
            class="relative mb-10 isolate overflow-hidden bg-green-950/90 dark:bg-green-800/50 px-6 pt-16 shadow-xl rounded-lg sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">

            <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                <div class="flex items-center justify-center lg:justify-start">
                <img src="{{asset('storage/img/logo.svg')}}" class="h-8 mr-3" alt="{{$page->name}}" />
                <h2
                    class="text-3xl font-bold tracking-tight sm:text-4xl block bg-gradient-to-r from-yellow-600 via-yellow-300 to-yellow-200 bg-clip-text text-transparent">
                    Pré-Militar</h2>
                </div>
                <p class="mt-6 text-xl leading-8 text-gray-200 dark:text-white">Inscreva-se para o processo seletivo Pré-Militar 2023.</p>
                <p class="mt-6 text-md leading-8 text-gray-200 dark:text-white"></p>
                <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                    <a href="#cadastro"
                        class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Inscrever-se</a>
                    <a href="#info" class="text-sm font-semibold leading-6 text-white">Saiba mais <span
                            aria-hidden="true">→</span></a>
                </div>
                <div class="h-50 w-50 flex items-center justify-center rounded-full">
                    {{--<img class="rounded-md" src="{{asset('storage/img/logo-militar.png')}}" alt="App screenshot"
                        width="500" height="500">--}}
                </div>
            </div>

            <div class="relative mt-16 h-80 lg:mt-8">

                <img class="absolute left-0 top-0 w-[40rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10"
                    src="{{asset('storage/img/bg-militar.jpg')}}" alt="App screenshot"  height="500">
            </div>
        </div>















        <section id="info" class="">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                <a href="#cadastro"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-gray-500">
                    <div class="grid grid-rows-1">
                        <div class="row">
                            <div class="h-50 w-50 flex items-center justify-center rounded-full">
                                <img class="rounded-md bg-white/5 ring-1 ring-white/10"
                                    src="{{asset('storage/img/PM COLOR.jpg')}}" alt="App screenshot" 
                                    height="500">
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Processo Seletivo etapa
                                {{ json_decode($page->body)->city . " - " .
                                json_decode($page->body)->state }}</h2>

                            <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                O Programa Pré-Militar estará em <b>{{ json_decode($page->body)->city . " - " .
                                    json_decode($page->body)->state }}</b> realizando Processo Seletivo para os jovens que
                                desejam ingressar na carreira militar,
                                explicando como funciona o ingresso nas instituições e orientações de preparo do
                                Candidato.
                            </p>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Inscreva-se clicando aqui!
                            </p>
                        </div>
                        {{--<div class="row-end-4">
                            <x-card.like-footer q="8.127" l="#cadastro" />
                        </div>--}}
                    </div>


                </a>

                <a href="#cadastro"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-gray-500">
                    <div class="grid grid-rows-1">
                        <div class="row">
                            <div class="h-50 w-50 flex items-center justify-center rounded-full">
                                <img class="rounded-md bg-white/5 ring-1 ring-white/10"
                                    src="{{asset('storage/img/exercito-jovens.webp')}}" alt="App screenshot" 
                                    height="500">
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Ingresso nas Academias
                                e
                                Colégios Militares</h2>

                            <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Anualmente as Forças Armadas recebem em torno 4.500 novos alunos, são vagas disponíveis
                                para
                                canditados em todos os estados.
                            </p>
                            {{--<p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Atualente as formas de ingressar pod....
                            </p>--}}
                        </div>
                        {{--<div class="row-end-4">
                            <x-card.like-footer q="4.712" l="#cadastro" />
                        </div>--}}
                    </div>


                </a>

                <a href="#cadastro"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-gray-500">
                    <div class="grid grid-rows-1">
                        <div class="row">
                            <div class="h-50 w-50 flex items-center justify-center rounded-full">
                                <img class="rounded-md bg-white/5 ring-1 ring-white/10"
                                    src="{{asset('storage/img/atletas.png')}}" alt="App screenshot" 
                                    height="500">
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Programa atletas de
                                alto rendimento</h2>

                            <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Hoje as Forças Armadas representam 35% dos atletas olímpicos Brasileiros, o programa de
                                atletas de Alto Rendimento visa descobrir talentos com equipe técnica, centros de
                                treinamento e equipamentos de alto nível.
                            </p>
                            {{--<p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Nas últimas olímpiadas os Militares fiz....
                            </p>--}}
                        </div>
                        {{--<div class="row-end-4">

                            <x-card.like-footer q="7.521" l="#cadastro" />
                        </div>--}}
                    </div>


                </a>

                <a href="#cadastro"
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-gray-500">
                    <div class="grid grid-rows-1">
                        <div class="row">
                            <div class="h-50 w-50 flex items-center justify-center rounded-full">
                                <img class="rounded-md bg-white/5 ring-1 ring-white/10"
                                    src="{{asset('storage/img/hospital.webp')}}" alt="App screenshot" 
                                    height="500">
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Benefícios</h2>

                            <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                As Forças armadas possuem diversos benefícios fizemos uma lista para mostrar os
                                principais:
                                <li class="mt-4 text-gray-500 text-sm dark:text-gray-400 ">
                                    Remuneração Aluno R$1.100
                                </li>
                                <li class="mt-1 text-gray-500 text-sm dark:text-gray-400 ">
                                    Remuneração após formado de R$3.825 a R$7.490
                                </li>
                                <li class="mt-1 text-gray-500 text-sm dark:text-gray-400 ">
                                    Assistencia Médica de alto nível
                                </li>
                                <li class="mt-1 text-gray-500 text-sm dark:text-gray-400 ">
                                    Estabilitade
                                </li>
                            </p>
                            <div class=" inline-flex"></div>
                            {{--<p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Lista completa....
                            </p>--}}

                        </div>
                       {{--}} <div class="row-end-4">
                            <x-card.like-footer q="6.910" l="#cadastro" />
                        </div>--}}
                    </div>


                </a>


            </div>
        </section>

    </div>

    {{--}}
    <section class="">
        <div class="isolate bg-white dark:bg-gray-900 px-6 py-10 sm:py-12 lg:px-8">
            <div class="relative isolate px-6 pt-14 lg:px-8">

                <div class="mx-auto max-w-2xl py-10 sm:py-12 lg:py-15">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div
                            class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 dark:text-gray-200 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Announcing our next round of funding. <a href="#"
                                class="font-semibold text-indigo-600 dark:text-indigo-400"><span
                                    class="absolute inset-0" aria-hidden="true"></span>Read more <span
                                    aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-6xl">Data
                            to
                            enrich your online business</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-200">Anim aute id magna aliqua ad
                            ad
                            non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam
                            occaecat
                            fugiat aliqua.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                started</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Learn
                                more
                                <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>--}}
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <section id="cadastro" name="cadastro" class="font-sans text-gray-900 antialiased">
            <div
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none  motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-gray-500">

                <form action="{{route('lead.create')}}" method="post" enctype="multipart/form-data" name="form"
                    id="form">
                    @csrf
                    <div>
                        <h1 class="text-3xl ml-2 font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">
                            {{ __("Inscrição para etapa " . json_decode($page->body)->city . " - " .
                            json_decode($page->body)->state) }}
                        </h1>
                        <p class="mt-4 mx-2 text-gray-500 dark:text-gray-400 text-md leading-relaxed">
                            Preencha corretamente os dados do Adolescente/Jovem que deseja participar.
                        </p>
                    </div>
                    <div class="grid gap-2 pt-6 mb-6 md:grid-cols-2">

                        <input type="text" id="page_id" name="page_id" value="{{$page->id}}" hidden>
                        <input type="text" id="state1" name="state1" value="{{(json_decode($states1)[0]->id)}}" hidden>
                        <input type="text" id="city1" name="city1" value="{{(json_decode($city)[0]->id)}}" hidden>
                        <div class="mx-2 pt-2">
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" placeholder="Ex. Maria Eduarda" required
                                autocomplete="given-name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        {{--<div class="mx-2 pt-2">
                            <x-input-label for="lastname" :value="__('Sobrenome')" />
                            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                                :value="old('lastname')" placeholder="Gonçalves" required autocomplete="family-name" />
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>--}}


                        <div class="mx-2 pt-2">
                            <x-input-label for="tel" :value="__('Celular')" />
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-700 dark:text-gray-400 dark:border-gray-600">
                                    <img src="{{asset('/storage/img/flag-brazil.svg')}}" width="40px" alt="Brasil">
                                    <h4 class="mr-8 ml-2">+55 </h4>
                                </span>
                                <input type="tel" id="tel" name="tel" minlength="10" maxlength="15"
                                    placeholder="(99) 9 9999-9999"
                                    title="(99) 9 9999-9999 (Coloque seu telefone nesse formato)" required="required"
                                    onkeyup="handlePhone(event)"
                                    class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-r-lg shadow-sm"
                                    required autocomplete="tel">
                            </div>
                        </div>

                        {{--<div class="mx-2 pt-2">
                            <x-input-label for="email" :value="__('Email (Caso não possua deixe em branco)')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>--}}


                        <div class="mx-2 pt-2">
                            <x-input-label for="age" :value="__('Idade')"/>
                            <select id="age" name="age"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-lg shadow-sm"
                                required>
                                <option value="">Selecione sua Idade</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="18">19</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid gap-5 mb-6 md:grid-cols-2">

                        {{--<div class="mx-2 pt-1">
                            <x-input-label for="age" :value="__('Estado')" />
                            <select id="state" name="state"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-lg shadow-sm"
                                required autocomplete="state">
                                <option value="{{(json_decode($states1)[0]->id)}}">
                                    {{(json_decode($states1)[0]->abbr)}}</option>

                                @foreach ($states as $key => $value)
                                <option value="{{ $value['id'] }}" {{ old('state')==$value['id'] ? 'selected' : '' }}>{{
                                    $value['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mx-2 pt-1">
                            <x-input-label for="age" :value="__('Cidade')" />
                            <select id="city" name="city"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-lg shadow-sm"
                                required autocomplete="city">
                                <option value="{{(json_decode($city)[0]->id)}}">{{(json_decode($city)[0]->name)}}
                                </option>
                                @if(old('city') != null)
                                <option value="{{old('city')}} 'selected'">
                                    {{App\Models\City::find(old('city'))->name}}</option>
                                @else
                                @endif
                            </select>
                        </div>--}}

                        <div class="mx-2 pt-2">
                            <x-input-label for="City" :value="__('Cidade')" />
                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city"
                                :value="old('city')" placeholder="{{(json_decode($city)[0]->name)}}" required
                                autocomplete="city" />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>

                    </div>
                    <div class="pt-6">
                        <x-primary-button class="ml-3">
                            {{ __('Enviar') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </section>
    </div>



    <footer class="pt-20">
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="#cadastro" class="flex items-center">
                            <img src="{{asset('storage/img/logo.svg')}}" class="h-8 mr-3" alt="{{$page->name}}" />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pré-Militar</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Sobre</h2>
                            <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#cadastro" class="hover:underline">Quem Somos</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                            <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#cadastro" class="hover:underline">Política de Privacidade</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Pré-Militar™ Todos os
                        direitos resevados.
                    </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <x-ri-youtube-line class="w-5 h-5" />
                            <span class="sr-only">Instagram page</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        $(document).ready(function() {
            
            $('select[name="state"]').on('change', function() {
                var stateID = $(this).val();
                if(stateID) {
                    $.ajax({
                        url: '/city/'+stateID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {   
                            console.log("teste");   
                            var city = "1";                
                            $('select[name="city"]').empty();
                            $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    $('select[name="city"]').empty();
                }
            });
        });
    </script>

    <script>
        const handlePhone = (event) => {
        let input = event.target
        input.value = phoneMask(input.value)
        }

        const phoneMask = (value) => {
        if (!value) return ""
        value = value.replace(/\D/g,'')
        value = value.replace(/(\d{2})(\d)/,"($1) $2")
        value = value.replace(/(\d)(\d{4})$/,"$1-$2")
        return value
        }
    </script>

    @if(env('APP_DEBUG') == false)
    <script>
        fbq("track", "ViewContent",
    {
        "event": "ViewContent",
        "event_time": "{{ Cookie::get('fbtime') }}",
        "action_source": "website",
        "event_source_url": "{{ url()->current() }}",
        "eventID": "{{ Cookie::get('fbid') }}",
        "user_data": {
            "client_ip_address": "{{isset($_SERVER['HTTP_CF_CONNECTING_IP']) ?  $_SERVER['HTTP_CF_CONNECTING_IP'] : ''}}",
            "client_user_agent": "{{$_SERVER['HTTP_USER_AGENT']}}"
            @isset($_COOKIE['_fbp'])
            ,"fbp": "{{$_COOKIE['_fbp']}}",
            "fbc": "{{$_COOKIE['_fbp']}}.{{ Cookie::get('fbid') }}"
            @endisset
        },
        "custom_data": {
            "content_ids": "{{$page->slug}}",
            "content_category": "{{$page->name}}",
            "content_name": "{{$page->title}}"
        }
    }
    )
    </script>
    @endif

    <x-fb-event :event="__('ViewContent')" :page="$page" />

</x-app-layout>