
{{-- TABLA --}}
<div class="block w-full overflow-x-auto">

    <table id="tabla_empleados" class="items-center bg-transparent w-full border-collapse overflow-hidden">
    
        <thead class="bg-gray-100">
            <tr>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Número
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Nombre
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Correo
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    DPI
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Puesto
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Rol
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody id="tbodyusuarios" class="text-center mb-5">

            @php
                $i=0;
                $empresa="";
            @endphp

            @foreach ($usuarios as $usuario)
                @php
                    $i+=1;

                    if ($usuario->rol == 1){
                        $rol="Super Administrador";
                    }elseif ($usuario->rol == 2) {
                        $rol="Administrador";
                    }elseif ($usuario->rol == 3) {
                        $rol="Usuario";
                    }
                @endphp
                
                <tr>
                    <td class="border px-4 py-2">{{$i}}</td>
                    <td class="border px-4 py-2">{{$usuario->name}}</td>
                    <td class="border px-4 py-2">{{$usuario->email}}</td>
                    <td class="border px-4 py-2">{{$usuario->dpi}}</td>
                    <td class="border px-4 py-2">{{$usuario->puesto}}</td>
                    <td class="border px-4 py-2">{{$rol}}</td>
                    <td class="border px-4 py-2">
                        <button title="Editar Usuario" wire:click="editar({{$usuario->id}})"><i class="text-2xl text-blue-700 fas fa-user-edit"></i></button>&nbsp;|
                        {{-- @if ($modalAlta)
                            @include('livewire.crear')
                        @endif --}}
                        
                        <button title="Dar de baja" wire:click="borrar({{$usuario->id}})"><i class="text-2xl text-red-700 fas fa-user-times"></i></button>
                        {{-- @if ($modalBaja)
                            @include('livewire.baja')
                        @endif --}}
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>




