{{-- <div>
    <h2>Users</h2>
    
    @foreach ($data as $item)
        <p>{{$item->id}}</p>
        
    @endforeach
    
</div>
 --}}

 
<div class="container ">
    @if (session()->has('message'))              
        <div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
          <p class="font-bold">
              Notificación
          </p>
          <p>
            {{ session('message') }}
          </p>
        </div>
          @endif  
    @if ($openModal)        
        <x-jet-dialog-modal maxWidth="lg" wire:model="openModal">
            <x-slot name="title">
                Crear Usuario
            </x-slot>        
            <x-slot name="content">                               
                    <div class="mt-6">
                        <div class=" space-y-6"  >
                            <div class="w-full">
                                <div class=" relative ">
                                    <input wire:model="name" type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent" placeholder="Nombre y apellido"/>
                                    @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="w-full">
                                <div class=" relative ">
                                    <input wire:model="email" type="text" id="search-form-location" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent" placeholder="Correo electronico"/>
                                    @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="w-full">
                                <div class=" relative ">
                                    <input wire:model="password" type="password" id="search-form-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent" placeholder="Contraseña"/>
                                    @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            {{-- <div class="w-full">
                                <div class=" relative ">
                                    <input wire:model="passwordtemp" type="password" id="search-form-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent" placeholder="Confirmar contraseña"/>
                                    @error('passwordtemp') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div> --}}
                            <div class="w-full">
                                <div class=" relative text-gray-700 placeholder-gray-400 shadow-sm text-base">
                                    <select wire:model="role" id="Currency" name="currency" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent">                                        
                                        
                                        <option value="" hidden >
                                            Rol del usuario
                                        </option>
                                        <option value="admin">
                                            Administrador
                                        </option>
                                        <option value="manager">
                                            Manager
                                        </option>
                                        <option value="cenabast">
                                            Cenabast
                                        </option>
                                    </select>
                                    @error('role') <span class="text-red-500">{{ $message }}</span>@enderror

                                </div>
                            </div>                                        
                        </div>
                    </div>                                       
            </x-slot>
        
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="openModal" wire:loading.attr="disabled">
                    Cancelar
                </x-jet-secondary-button>
                @if($modeUpdate)
                    <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                        Modificar Usuario
                    </x-jet-button>                                    
                @else
                    <x-jet-button class="ml-2" wire:click="store" wire:loading.attr="disabled">
                        Crear Usuario
                    </x-jet-button>
                @endif
            </x-slot>
        </x-jet-dialog-modal>
    @endif
    
    <div class="py-2">
        <div class="flex  mb-1 sm:mb-0 justify-end ">            
            
                <div>                    
                    <button type="button" wire:model="openModal" wire:click="openModal" class="py-2 px-4 flex justify-center items-center  bg-green-500 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                         Agregar usuario
                    </button>
                </div>
                <form class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                    <div class=" relative ">
                        <input wire:model="user" type="text" id="&quot;form-subscribe-Filter" class="rounded-lg border-solid flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent" placeholder="Buscar por nombre"/>
                    </div>
                       {{--  <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-lime-600 rounded-lg shadow-md hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 focus:ring-offset-lime-200" type="submit">
                            Buscar 
                        </button> --}}
                </form>
            
        </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Usuario
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Email
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Rol
                                </th>
                               {{--  <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    status
                                </th> --}}
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $item)                                                            
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                  </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$item->name}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$item->email}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                       <p class="text-gray-900 whitespace-no-wrap">                                           
                                            {{$item->getRoleNames()}}                                             
                                        </p>
                                    </td>
                                    {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                            </span>
                                            <span class="relative">
                                                active
                                            </span>
                                        </span>
                                    </td> --}}
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        @role('admin')
                                            <a wire:click="edit({{$item->id}})" href="#" class="text-indigo-600 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>                                            
                                        @endrole
                                    </td>
                                </tr>
                            @endforeach

                            {{ $data->links() }}
                           
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
