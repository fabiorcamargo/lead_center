<x-app-layout>
    <x-slot name="header">
        {{--<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>--}}
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



<div class="bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-10 lg:px-8">
      <div class="relative isolate overflow-hidden dark:shadow-gray-700/40 bg-green-950 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
        <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
          <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
          <defs>
            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
              <stop stop-color="#7775D6" />
              <stop offset="1" stop-color="#fbbf24" />
            </radialGradient>
          </defs>
        </svg>
        <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
          <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Pré-Militar</h2>
          <p class="mt-6 text-lg leading-8 text-gray-300">As Escolas Preparatórias das Forças Armadas selecionam anualmente milhares de Jovens e Adolescentes de ambos os Sexos para incorporar como Cadetes, após o período de instrução esses serão os Próximos Tenentes, Coroneis, Generais...</p>
          <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
            <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Cadastre-se</a>
            <a href="#" class="text-sm font-semibold leading-6 text-white">Saiba mais <span aria-hidden="true">→</span></a>
          </div>
        </div>
        <div class="relative mt-16 h-80 lg:mt-8">
          <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="{{asset('storage/img/bg-militar.jpg')}}" alt="App screenshot" width="1824" height="1080">
        </div>
      </div>
    </div>
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
                                class="font-semibold text-indigo-600 dark:text-indigo-400"><span class="absolute inset-0"
                                    aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-6xl">Data to
                            enrich your online business</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-200">Anim aute id magna aliqua ad ad
                            non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat
                            fugiat aliqua.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                started</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Learn more
                                <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>--}}

    <section id="cadastro" name="cadastro" class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col sm:justify-center items-center py-10 bg-white dark:bg-zinc-950">
            

            <div class="w-full lg:w-10/12  md:w-11/12 sm:w-full mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-2xl dark:shadow-gray-700/40 overflow-hidden sm:rounded-lg">
                <div class="pt-10 pb-10">
                    <div>
                        <h1 class="text-3xl ml-2 font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">
                            {{ __("Cadastro região de ....") }}
                        </h1>
                    </div>
                    <div class="grid gap-6 pt-10 mb-6 md:grid-cols-2">
                        
                        <div class="mx-2 pt-1">
                            <x-input-label for="given-name" :value="__('Nome')" />
                            <x-text-input id="given-name" class="block mt-1 w-full" type="text" name="given-name" :value="old('given-name')" required autocomplete="given-name" />
                            <x-input-error :messages="$errors->get('given-name')" class="mt-2" />
                        </div>
                        
                        <div class="mx-2 pt-1">
                            <x-input-label for="family-name" :value="__('Sobrenome')" />
                            <x-text-input id="family-name" class="block mt-1 w-full" type="text" name="family-name" :value="old('family-name')" required autocomplete="family-name" />
                            <x-input-error :messages="$errors->get('family-name')" class="mt-2" />
                        </div>

                        
                        <div class="mx-2 pt-1">
                        <x-input-label for="tel" :value="__('Celular')" />
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-700 dark:text-gray-400 dark:border-gray-600">
                                    <img src="{{asset('/storage/img/flag-brazil.svg')}}" width="40px" alt="Brasil">
                                    <h4 class="mr-8 ml-2">+55 </h4>
                                </span>
                                <input type="text" class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-r-lg shadow-sm">
                            </div>
                        </div>

                        <div class="mx-2 pt-1">
                            <x-input-label for="email" :value="__('Email (Caso não possua deixe em branco)')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  autocomplete="email"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        
                       
                        <div class="mx-2 pt-1">
                        <x-input-label for="age" :value="__('Idade')" />
                        <select id="age" name="age" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-lg shadow-sm">
                          <option selected>Choose a country</option>
                          <option value="US">United States</option>
                          <option value="CA">Canada</option>
                          <option value="FR">France</option>
                          <option value="DE">Germany</option>
                        </select>
                        </div>
                    </div>

                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mx-2 pt-1">
                            <x-input-label for="age" :value="__('Estado')" />
                            <select id="age" name="age" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-lg shadow-sm">
                              <option selected>Choose a country</option>
                              <option value="US">United States</option>
                              <option value="CA">Canada</option>
                              <option value="FR">France</option>
                              <option value="DE">Germany</option>
                            </select>
                        </div>

                        <div class="mx-2 pt-1">
                            <x-input-label for="age" :value="__('Cidade')" />
                            <select id="age" name="age" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-lg shadow-sm">
                              <option selected>Choose a country</option>
                              <option value="US">United States</option>
                              <option value="CA">Canada</option>
                              <option value="FR">France</option>
                              <option value="DE">Germany</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="pt-8">
                        <x-primary-button class="ml-3">
                            {{ __('Enviar') }}
                        </x-primary-button>
                    </div>
                </div>  
                
            </div>
            
        </div>

        
    </section>

    
<footer class="bg-white dark:bg-zinc-950 pt-40">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                  <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pré-Militar</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Sobre</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Quem Somos</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Política de Privacidade</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Pré-Militar™ Todos os direitos resevados.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Instagram page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <x-ri-youtube-line class="w-5 h-5"/>
                <span class="sr-only">Instagram page</span>
              </a>
          </div>
      </div>
    </div>
</footer>
</x-app-layout>