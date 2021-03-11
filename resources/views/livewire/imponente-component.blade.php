<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Imponente
        </h2>
    </x-slot>


    <div class="container py-12">

        <x-jet-form-section submit="updateImponente">
            <x-slot name="title">
                Información del imponente
            </x-slot>

            <x-slot name="description">
                La información colocada en esta sección se tomará en las solicitudes
            </x-slot>


            <x-slot name="form">
                <div class="col-span-3">
                    <x-jet-label for="rut" value="RUT" />
                    <x-jet-input id="rut" type="text" class="mt-1 block w-full" wire:model.defer="imponente.rut" />
                    <x-jet-input-error for="rut" class="mt-2" />
                </div>

                <div class="col-span-3">
                    <x-jet-label for="fecha_nacimiento" value="Fecha nacimiento" />
                    <x-jet-input id="fecha_nacimiento" type="text" class="mt-1 block w-full" wire:model.defer="imponente.fecha_nacimiento" />
                    <x-jet-input-error for="rut" class="mt-2" />
                </div>

                <div class="col-span-6">
                    <x-jet-label for="domicilio_particular" value="Domicilio particular" />
                    <x-jet-input id="domicilio_particular" type="text" class="mt-1 block w-full" wire:model.defer="imponente.domicilio_particular" />
                    <x-jet-input-error for="rut" class="mt-2" />
                </div>

                <div class="col-span-6">
                    <x-jet-label for="domicilio_comercial" value="Domicilio comercial" />
                    <x-jet-input id="domicilio_comercial" type="text" class="mt-1 block w-full" wire:model.defer="imponente.domicilio_comercial" />
                    <x-jet-input-error for="rut" class="mt-2" />
                </div>

                <div class="col-span-3">
                    <x-jet-label for="ciudad_id" value="Domicilio comercial" />

                    <select wire:model.defer="imponente.ciudad_id" class="form-select w-full">
                        @foreach ($ciudades as $ciudad)
                            <option value="{{$ciudad->id}}">{{$ciudad->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-span-3">
                    <x-jet-label for="comuna_id" value="Comuna" />

                    <select wire:model.defer="imponente.comuna_id" class="form-select w-full">
                        @foreach ($comunas as $comuna)
                            <option value="{{$comuna->id}}">{{$comuna->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-span-3">
                    <x-jet-label for="celular" value="Celular" />
                    <x-jet-input id="celular" type="text" class="mt-1 block w-full" wire:model.defer="imponente.celular" />
                    <x-jet-input-error for="rut" class="mt-2" />
                </div>

                <div class="col-span-3">
                    <x-jet-label for="numero_imponente" value="Numero de imponente" />
                    <x-jet-input id="numero_imponente" type="text" class="mt-1 block w-full" wire:model.defer="imponente.numero_imponente" />
                    <x-jet-input-error for="rut" class="mt-2" />
                </div>

                <div class="col-span-6">
                    <x-jet-label for="cargo_id" value="Cargos" />

                    <select wire:model.defer="imponente.cargo_id" class="form-select w-full">
                        @foreach ($cargos as $cargo)
                            <option value="{{$cargo->id}}">{{$cargo->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-span-6">
                    <p class="form-label">Estado civil</p>
                    @foreach ($civiles as $civil)
                        <label class="ml-4">
                            <input class="mr-1" name="civil_id" type="radio" value="{{$civil->id}}" wire:model.defer="imponente.civil_id">
                            {{$civil->name}}
                        </label>
                    @endforeach
                </div>

                <div class="col-span-3">
                    <p class="form-label">Sexo</p>
                    @foreach ($sexos as $sexo)
                        <label class="ml-4">
                            <input class="mr-1" name="sexo_id" type="radio" value="{{$sexo->id}}" wire:model.defer="imponente.sexo_id">
                            {{$sexo->name}}
                        </label>
                    @endforeach
                </div>

                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="saved">
                        Actualizar
                    </x-jet-action-message>
            
                    <x-jet-button>
                        Actualizar
                    </x-jet-button>
                </x-slot>
            </x-slot>

        </x-jet-form-section>

    </div>

</div>
