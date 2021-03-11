<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nueva solicitud
        </h2>
    </x-slot>

    <div class="container py-12">
        {!! Form::open() !!}


            <article class="mb-16">
                <h1 class="text-gray-700 font-bold text-lg mb-2">Solicitud de prestamo</h1>

                <div class="card">
                    <div class="card-body">
                        <div class="grid grid-cols-2 gap-24">
                            <div class="flex items-center justify-between">
                                <label class="block uppercase tracking-wide text-gray-600 font-bold">Prestamo:</label>
                            
                                <input class="form-control w-3/4 ml-2" type="text" placeholder="Monto solicitado">
                                
                            </div>

                            <div class="flex items-center justify-between">
                                <label class="block uppercase tracking-wide text-gray-600 font-bold">Cuotas:</label>
                            
                                <input class="form-control w-3/4 ml-2" type="text" placeholder="Numero de cuotas">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </article>


            <article class="mb-16">
                <h1 class="text-gray-700 font-bold text-lg mb-2">Identificación del imponente</h1>

                <div class="card">
                    <div class="card-body">

                        <div class="grid grid-cols-5 gap-6">
                            <div class="col-span-4">
                                <label class="form-label">Nombre completo</label>
                                <p class="form-control">{{auth()->user()->name}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">RUT</label>
                                <p class="form-control">{{auth()->user()->imponente->rut}}</p>
                            </div>

                            <div class="col-span-3">
                                <label class="form-label">Domicilio</label>
                                <p class="form-control">{{auth()->user()->imponente->domicilio_particular}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Comuna</label>
                                <p class="form-control">{{auth()->user()->imponente->comuna->name}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">ciudad</label>
                                <p class="form-control">{{auth()->user()->imponente->ciudad->name}}</p>
                            </div>
                            {{-- ------------------- --}}
                            <div class="col-span-1">
                                <label class="form-label">Fecha Nacimiento</label>
                                <p class="form-control">{{auth()->user()->imponente->fecha_nacimiento}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Sexo</label>
                                <p class="form-control">{{auth()->user()->imponente->sexo->name}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Estado civil</label>
                                <p class="form-control">{{auth()->user()->imponente->civil->name}}</p>
                            </div>

                            <div class="col-span-2">
                                <label class="form-label">Comuna</label>
                                <p class="form-control">{{auth()->user()->imponente->celular}}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </article>

            <article class="mb-16">
                <h1 class="text-gray-700 font-bold text-lg mb-2">Datos lugar de trabajo</h1>

                <div class="card">
                    <div class="card-body">

                        <div class="grid grid-cols-5 gap-6">

                            <div class="col-span-3">
                                <label class="form-label">Reparticion</label>
                                <p class="form-control"><span class="text-gray-100">Reparticion</span></p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Cargo</label>
                                <p class="form-control">{{auth()->user()->imponente->cargo->name}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Antiguedad</label>
                                <p class="form-control"><span class="text-gray-100">Antiguedad</span></p>
                            </div>
                            {{-- ------------------- --}}

                            <div class="col-span-3">
                                <label class="form-label">Domicilio</label>
                                <p class="form-control">{{auth()->user()->imponente->domicilio_comercial}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Comuna</label>
                                <p class="form-control">{{auth()->user()->imponente->comuna->name}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">ciudad</label>
                                <p class="form-control">{{auth()->user()->imponente->ciudad->name}}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </article>


            <article class="mb-16">
                <h1 class="text-gray-700 font-bold text-lg mb-2">Enviar cheque a</h1>

                <div class="card">
                    <div class="card-body">
                        @foreach ($cheques as $cheque)
                            <label class="mr-4">
                                {!! Form::radio('cheque_id', $cheque->id, null, ['class' => 'mr-1']) !!}
                                {{$cheque->name}}
                            </label>
                        @endforeach
                    </div>
                </div>
            </article>

            <article class="mb-16">
                <h1 class="text-gray-700 font-bold text-lg mb-2">Datos bancarios</h1>

                <div class="card">
                    <div class="card-body">
                        @foreach ($bancarios as $bancario)
                            <label class="mr-4">
                                {!! Form::radio('bancario_id', $bancario->id, null, ['class' => 'mr-1']) !!}
                                {{$bancario->name}}
                            </label>
                        @endforeach

                        <div class="grid grid-cols-2 gap-6 mt-6">

                            <div>
                                <label class="form-label">Banco</label>
                                <input type="text" class="form-control w-full" placeholder="Ingrese el nombre de tu banco">
                            </div>

                            <div>
                                <label class="form-label">N° Cuenta</label>
                                <input type="text" class="form-control w-full" placeholder="Ingrese su número de cuenta">
                            </div>

                        </div>
                    </div>
                </div>
            </article>

            <article class="mb-16">
                <h1 class="text-gray-700 font-bold text-lg mb-2">Bienes raices</h1>

                <div class="card">
                    <div class="card-body">

                        <div class="grid grid-cols-5 gap-6">

                            <div class="col-span-4">
                                <label class="form-label">Domicilio</label>
                                {!! Form::text("", null, ['class' => 'form-control w-full', 'placeholder' => 'Ingrese una dirección']) !!}
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Comuna</label>
                                {!! Form::select('$name', $comunas, null, ['class' => 'form-select w-full']) !!}
                                {{-- <p class="form-control">{{auth()->user()->imponente->comuna->name}}</p> --}}
                            </div>
                            
                            {{-- ------------------- --}}
                            <div class="col-span-1">
                                <label class="form-label">Hipoteca</label>
                                <div>
                                    <label class="mr-4">
                                        {!! Form::radio('hipoteca', true, null, ['class' => 'mr-1']) !!}
                                        Si
                                    </label>

                                    <label>
                                        {!! Form::radio('hipoteca', false, null, ['class' => 'mr-1']) !!}
                                        No
                                    </label>
                                </div>
                                
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Seguro</label>
                                <div>
                                    <label class="mr-4">
                                        {!! Form::radio('seguro', true, null, ['class' => 'mr-1']) !!}
                                        Si
                                    </label>

                                    <label>
                                        {!! Form::radio('seguro', false, null, ['class' => 'mr-1']) !!}
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Rol contribuciones</label>
                                <p class="form-control">{{auth()->user()->imponente->fecha_nacimiento}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Avaluo fiscal</label>
                                <p class="form-control">{{auth()->user()->imponente->fecha_nacimiento}}</p>
                            </div>

                            <div class="col-span-1">
                                <label class="form-label">Valor comercial</label>
                                <p class="form-control">{{auth()->user()->imponente->fecha_nacimiento}}</p>
                            </div>
                           

                        </div>

                    </div>
                </div>
            </article>

            <article class="mb-16">
                <h1 class="text-gray-700 font-bold text-lg mb-2">Tipo de prestamo</h1>

                <div class="card">
                    <div class="card-body grid grid-cols-3 gap-4">
                        @foreach ($prestamos as $prestamo)
                            <label>
                                {!! Form::radio('prestamo_id', $prestamo->id, null, ['class' => 'mr-1']) !!}
                                {{$prestamo->name}}
                            </label>
                        @endforeach
                    </div>
                </div>
                
            </article>

            <div class="flex justify-end mt-8">
                {!! Form::submit('Crear nueva solicitud', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

    </div>

</x-app-layout>