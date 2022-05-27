

    
<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Subida de archivo</h3>
        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">      
      <form wire:submit.prevent="save">
         <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block text-sm font-medium text-gray-700"> Nombre del archivo </label>
                <div class="mt-1 flex rounded-md shadow-sm">                  
                  <input required wire:model="file_name" type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Nombre de archivo">
                </div>
              </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block text-sm font-medium text-gray-700"> Área </label>
                <div class="mt-1 flex rounded-md shadow-sm">                                    
                  <select wire:model="file_departamento" class="block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="animals">
                    <option value="">
                        Selecciona una opción
                    </option>
                    <option value="Qualimed">
                        Qualimed
                    </option>
                    <option value="Cenabast">
                        Cenabast
                    </option>
                    <option value="SB">
                        SB
                    </option>
                  </select>
                </div>
              </div>
            </div>

            <div>
              <label for="about" class="block text-sm font-medium text-gray-700"> Descripción </label>
              <div class="mt-1">
                <textarea wire:model="description" id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Asociado a you@example.com"></textarea>
              </div>
              
            </div>

           {{--  <div>
              <label class="block text-sm font-medium text-gray-700"> File </label>
              <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </span>
                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change</button>
              </div>
            </div> --}}

            <div>
              <label class="block text-sm font-medium text-gray-700"> Subir archivos </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Subir archivo</span>
                      <input multiple wire:model="file_urls" id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <div wire:loading wire:target="file_urls">Subiendo...</div>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
                {{-- @if ($file_url)
                    Photo Preview:
                    <img src="{{ $file_url->temporaryUrl() }}">
                @endif --}}
              </div>
              <div>
                <div wire:loading wire:target="file_urls">Subiendo...</div>
                <div class="row flex flex-wrap">
                    @if ($file_urls)
                    Previsualización:
                      <div class="row flex flex-wrap ">
                          @foreach ($file_urls as $images)
                          <div class="col-3 card me-1 mb-1 mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800">
                              <img src="{{ $images->temporaryUrl() }}">
                          </div>
                          @endforeach
                      </div>
                    @endif
                </div>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            @error('file_urls') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Guardar</button>
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
          </div>
        </div> 
      </form>
    </div>
  </div>
  
</div>


