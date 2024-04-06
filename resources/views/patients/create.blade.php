<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Crear paciente') }}
      </h2>
  </x-slot>

  

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 ">
                <form class="grid gap-4" action="{{ route('dashboard.patients.create') }}" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-4">
                 @csrf
                  {{-- NAME --}}
                  <div>
                      <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                          </div>
                      </div>
                  </div>
              
                  {{-- LAST NAME --}}
                  <div>
                      <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                      <div class="mt-2">
                          <input type="text" name="last_name" id="last_name" autocomplete="last_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                      </div>
                  </div>
              
                  {{-- EMAIL --}}
                  <div>
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
                      <div class="mt-2">
                          <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                  </div>
              
                  {{-- AGE --}}
                  <div>
                      <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                              <input type="number" name="age" id="age" autocomplete="age" class="block w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                          </div>
                      </div>
                  </div>
              
                  {{-- NOTE --}}
                  <div class="col-span-full">
                      <label for="note" class="block text-sm font-medium leading-6 text-gray-900">Nota</label>
                      <div class="mt-2">
                          <textarea id="note" name="note" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                      </div>
                      <p class="mt-3 text-sm leading-6 text-gray-600">Escribe aspectos acerca del paciente</p>
                  </div>
              
                  <div class="sm:col-span-4">
                      <button type="submit" class="btn">Crear paciente</button>
                  </div>
              </form>
              
              
              </div>
          </div>

        
      </div>
  </div>
</x-app-layout>

