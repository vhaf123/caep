<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Home
        </h2>
    </x-slot>


    <div class="container py-12">

        {{-- Tabla --}}

        <x-table-responsive>

            <div class="px-6 py-4 flex items-center">
                <input wire:model="search" class="form-control flex-1 shadow-sm" placeholder="Busque el prestamo que está buscando ...">
                
                <a href="{{route('prestamos.create')}}" class="btn btn-primary ml-2">
                    Nueva solicitud
                <a>
                
            </div>


            @if ($solicitudes->count())

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo Prestamo
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Saldos
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Fecha cierre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Monto cuota
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                N° Cuotas
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($solicitudes as $solicitud)
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-600 font-bold">
                                        {{$solicitud->prestamo->name}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            $/ {{$solicitud->saldos}}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{parse($solicitud->fecha_cierre)->format('d/m/Y')}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{$solicitud->monto_cuota}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{$solicitud->numero_cuotas}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                        <!-- More items... -->
                    </tbody>
                </table>

                @if ($solicitudes->hasPages())
                    <div class="px-6 py-4">
                        {{$solicitudes->links()}}
                    </div>    
                @endif
                

            @else

                <div class="px-6 py-4">
                    No hay ningún registro coincidente 
                </div>

            @endif

        </x-table-responsive>



    </div>


</div>
