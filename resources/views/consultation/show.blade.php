@extends('layouts.app')

@section('template_title')
    {{ $consultation->name ?? __('Ves') . " " . __('consulta') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('consultations.index') }}"> {{ __('Ver todas las consultas') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nota:</strong>
                            {{ $consultation->note }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $consultation->date }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Paciente:</strong>
                            <a class="link" href="{{ route('patients.show', $consultation->patient_id) }}">{{ $patient->name }} {{ $patient->last_name }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
