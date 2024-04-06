<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="underline" href="{{ route('dashboard.patients.create') }}">Crear un paciente</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Edad</th>
                            <th>Nota</th>
                            <th>Editar</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($patients as $patient )
                          <tr>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->last_name }}</td>
                            <td>{{ $patient->email }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ $patient->note }}</td>
                            <td>{{ $patient->note }}</td>
                            <td>
                              <a class="underline" href="{{ route('dashboard.patients.edit', ['id' => $patient->id]) }}">Editar</a>
                              <form class="underline" action="{{ route('dashboard.patients.destroy', ['id' => $patient->id]) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                        
                        </tbody>
                      </table>

                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>