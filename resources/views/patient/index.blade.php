@extends('layouts.app')

@section('template_title')
    Pacientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pacientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('patients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Correo electronico</th>
										<th>Edad</th>
										<th>Nota</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $patient->name }}</td>
											<td>{{ $patient->last_name }}</td>
											<td>{{ $patient->email }}</td>
											<td>{{ $patient->age }}</td>
											<td>{{ $patient->note }}</td>

                                            <td>
                                                <form class="gap-1 flex-wrap d-flex justify-content-center align-items-center" action="{{ route('patients.destroy',$patient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('patients.show',$patient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver mas') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('patients.edit',$patient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                    {!! $patients->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
