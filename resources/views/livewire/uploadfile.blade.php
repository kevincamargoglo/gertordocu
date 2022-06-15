<div>
    <div class="flex justify-end">
        <button type="button" wire:model="openModal" wire:click="openModal">
            <img src="{{ asset('img/resource/upload.png') }}" alt="">
        </button>
    </div>
    @if($openModal)
    <x-jet-dialog-modal maxWidth="xl" wire:model="openModal">
        <x-slot name="title">
            Subir archivos
        </x-slot>
    
        <x-slot name="content">
            @livewire('form',['folder' => $folder, 'subfolder' => $subfolder])
        </x-slot>
    
        <x-slot name="footer">
           {{--  <x-jet-secondary-button wire:click="openModal" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
    
            <x-jet-button class="ml-2" wire:click="saveFolder" wire:loading.attr="disabled">
                Crear Carpeta
            </x-jet-button> --}}
        </x-slot>
    </x-jet-dialog-modal>
    
    @endif
</div>