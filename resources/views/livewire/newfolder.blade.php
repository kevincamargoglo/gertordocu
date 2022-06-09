<div>
    <div class="flex justify-end">
        <button type="button" wire:model="openModal" wire:click="openModal">
            <img src="{{ asset('img/resource/plus.png') }}" alt="">
        </button>
    </div>
    @if($openModal)
    <x-jet-dialog-modal maxWidth="md" wire:model="openModal">
        <x-slot name="title">
            Crear carpeta
        </x-slot>
    
        <x-slot name="content">
            <div class=" relative ">
                <input wire:model="nameFolder" type="text" id="rounded-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nombre de la carpeta"/>
                @error('nameFolder') <span class="error">{{ $message }}</span> @enderror

            </div>            
        </x-slot>
    
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="openModal" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
    
            <x-jet-button class="ml-2" wire:click="saveFolder" wire:loading.attr="disabled">
                Crear Carpeta
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
    
    @endif
</div>
