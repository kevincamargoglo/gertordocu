<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carpetas') }}
        </h2>
    </x-slot>
    
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  
{{--             @livewire('uploadfile',['folder' => request()->route()->parameters['id']])
 --}}
                @livewire('newsubfolder', ['folder' => request()->route()->parameters['id']])        

            <div class="bg-white overflow-hidden h-3/4	 shadow-xl sm:rounded-lg py-3 px-3">                                
     
                {{-- @livewire('viewer', ['folder' => request()->route()->parameters['id']])                 --}}

                @livewire('showsubfolder', ['folder' => request()->route()->parameters['id']])
            </div>
        </div>
    </div>    
    @section('script')        

    @endsection

</x-app-layout>