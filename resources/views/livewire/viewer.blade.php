<div>
    @if($modal)
    
        
     <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">
            
            {{$currentData["file_name"]}}
        </x-slot>
    
        <x-slot name="content">
            <p>
                Descripción: {{$currentData["description"]}}
            </p>
            <p>
                Área: {{$currentData["file_departamento"]}}
            </p>
            <h2>Links:</h2>           
                
                <ul class="flex justify-center	 ">
                    @foreach(json_decode($currentData["file_url"]) as $url)
                        <li >                            
                            <a href="{{asset('storage/'.$url)}}" target="_blank">                                            
                                <img src="{{asset('storage/'.$url)}}" alt="photo" class="mx-auto object-content rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800">
                            </a>
                        </li>
                        {{-- <a href="{{asset('storage/'.$url)}}" download>Download File</a>                         --}}
                    @endforeach
                </ul>
            </x-slot>
    
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="closemodal" wire:loading.attr="disabled">
                Cerrar
            </x-jet-secondary-button>
    
           {{--  <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                Cerrar
            </x-jet-danger-button> --}}
        </x-slot>
    </x-jet-dialog-modal>
    
          @endif 
          
<div class="container mx-auto w-full h-full px-4 sm:px-8">    
    <div class="py-8">
        @if (session()->has('message'))              
        <div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
          <p class="font-bold">
              Success
          </p>
          <p>
            {{ session('message') }}
          </p>
        </div>
    @endif
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Archivo
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                links
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Creado en
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#" class="block relative">
                                            @if($item->file_departamento == "Cenabast" )                                            
                                             <img alt="profil" src="{{asset('img/Cenabast.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>                                                                                           
                                            @elseif($item->file_departamento == "Qualimed")
                                            <img alt="profil" src="{{asset('img/qualimed.jpg')}}" class="mx-auto object-contain rounded-full h-10 w-10 	"/>                                                                                            
                                            @else
                                            <img alt="profil" src="{{asset('img/salco.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>                                                                                            

                                            @endif
                                            
                                        </a>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                           {{$item->file_name}}                     
                                        </p>
                                        <em class="text-gray-600 whitespace-no-wrap">{{$item->description}}</em>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <ul class="list-disc">
                                        @foreach(json_decode($item->file_url) as $url)
                                            <li>
                                                <a href="{{asset('storage/'.$url)}}" target="_blank">
                                                    {{$url}}            
                                                </a>

                                            </li>
                                            {{-- <a href="{{asset('storage/'.$url)}}" download>Download File</a>                         --}}
                                        @endforeach
                                    </ul>
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$item->created_at}}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                   
                                    <span class="relative">
                                        <button wire:click="openmodal({{$item->id}})" type="button" class="px-2 py-2  text-base rounded-full text-blue-600  bg-red-200">
                                            Ver
                                        </button>                                       
                                       {{--  @can('admin')
                                        <button>
                                            Borrar
                                        </button>
                                        <button>
                                            Editar
                                        </button>
                                        @endcan  --}}        
                                        @role('admin')
                                        {{-- <button wire:click="download({{$item->file_url}})" class="px-4 py-2  text-base rounded-full text-yellow-600  bg-yellow-200">
                                            Descargar
                                        </button> --}}
                                        <button wire:click="delete({{$item->id}})" class="btn px-2 py-2  text-base rounded-full text-red-600  bg-red-200">
                                            Borrar
                                        </button>
                                        @endrole                                
                                    </span>
                                        
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>
</div>
