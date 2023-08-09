
<div class="relative overflow-x-auto shadow-md sm:rounded-lg w-4/5 mx-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Edad
                </th>
                <th scope="col" class="px-6 py-3">
                    Genero
                </th>
                <th scope="col" class="px-6 py-3">
                    Matricula
                </th>
                <th scope="col" class="px-6 py-3">
                    Cargo
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>                
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                @php $datos=[] @endphp
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                @php $datos=$empleado @endphp
                    {{$empleado["nombre"]}}
                </th>
                <td class="px-6 py-4">
                    {{$empleado["edad"]}}
                </td>
                <td class="px-6 py-4">
                    {{$empleado["genero"]}}
                </td>
                <td class="px-6 py-4">
                    {{$empleado["matricula"]}}
                </td>
                <td class="px-6 py-4">
                    {{$empleado['cargo']}}
                </td>
                <td class="px-6 py-4 flex">
                @csrf
                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2"><i class="fa-solid fa-pen-to-square fa-xl"></i></a>                                                 -->
                <button data-modal-target="defaultModalEdit" data-modal-toggle="defaultModalEdit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-3" type="button"><i class="fa-solid fa-pen-to-square fa-xl"></i></button>
                @include("partials.modalEdit")
                <form method="POST" action='{{ url("delete/{$empleado->id}") }}'>
                    @csrf
                    @method('DELETE')
                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" type="submit"><i class="fa-solid fa-trash fa-xl"></i></button>
                </form>             
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
