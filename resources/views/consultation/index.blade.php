@extends('layouts.app')

@section('template_title')
    Consultas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consultas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consultations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear una consulta') }}
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
										<th>Nota</th>
										<th>Fecha</th>
										<th>Paciente ID</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultations as $consultation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $consultation->note }}</td>
											<td>{{ \Carbon\Carbon::parse($consultation->date)->format('d-m-Y H:i') }}</td>
											<td> <a href="{{ route('patients.show',$consultation->patient->id) }}">{{ $consultation->patient->name }}</a></td>

                                            <td>
                                                <form class="gap-1 flex-wrap d-flex justify-content-center align-items-center" action="{{ route('consultations.destroy',$consultation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consultations.show',$consultation->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver mas') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consultations.edit',$consultation->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $consultations->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
