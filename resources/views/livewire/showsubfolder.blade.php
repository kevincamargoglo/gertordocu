<div class="container mx-auto w-full  px-4 sm:px-8">    
    <div class="py-8">
        @if (session()->has('message'))              
        <div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
          <p class="font-bold">
              Success
          </p>
          <p>
            {{ session('message') }}
          </p>
          @endif   
    </div>
            
            <div class="h-5/6 overflow-y-scroll  w-full rounded-lg flex justify-center flex-wrap gap-4">
                @foreach ($data as $item)                        
                    <a href="{{route('subfolderdetail', ['id'=>$folder,'subid'=>$item->id])}}" class="border shadow-lg rounded-2xl w-64 p-4 folderAnimation bg-white flex justify-between items-center" >
                        <div class="w-2/6">
                            <img src="{{ asset('img/resource/folder.png') }}" alt="">
                        </div>
                        <div class="w-3/6">
                            <p class="text-gray-600 text-base ">
                                {{$item->name}}
                            </p>
                        </div>
                        <div class="w-1/6 text-right">
                            {{-- <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" class="text-indigo-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
                                </path>
                            </svg> --}}
                        </div>
                    </a>
                @endforeach
                {{-- <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Carpeta
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Creado en:
                            </th>                            
                            <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Opciones
                            </th>
                        </tr>                        
                    </thead>
                    <tbody>
                        
                        
                    </tbody>
                </table> --}}
            </div>
        
    </div>    
</div>