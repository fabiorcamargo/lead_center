<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead
        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Nome
            </th>
            <th scope="col" class="px-6 py-3">
                Telefone
            </th>
            <th scope="col" class="px-6 py-3">
                Idade
            </th>
            {{--<th scope="col" class="px-6 py-3">
                UF
            </th>
            <th scope="col" class="px-6 py-3">
                Cidade
            </th>--}}
            <th scope="col" class="px-20 py-3">
                Data
            </th>
            {{--<th scope="col" class="px-6 py-3">
                <span class="sr-only">Edit</span>
            </th>--}}
        </tr>
    </thead>
    <tbody>
        @foreach ($pages as $page)
        <tr
            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row"
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$page->name}} {{$page->lastname}}
            </th>
            <td class="px-6 py-4">
                {{$page->phone}}
            </td>
            <td class="px-6 py-4">
                {{$page->age}}
            </td>
            {{--<td class="px-6 py-4">
                {{($page->State)->abbr}}
            </td>
            <td class="px-6 py-4">
                {{($page->City)->name}}
            </td>--}}
            <td class="px-6 py-4">
                {{$page->updated_at->format('d-m-y H:i')}}
            </td>
            {{--<td class="px-6 py-4 text-right">
                <a href="route('page.show', ['slug' => $page->slug])"
                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
                <a href="#"
                    class="font-medium text-yellow-400 dark:text-yellow-400 hover:underline">Editar</a>   
                <a href="#"
                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Excluir</a>
                    
            </td>--}}
        </tr>

        @endforeach
    </tbody>
</table>