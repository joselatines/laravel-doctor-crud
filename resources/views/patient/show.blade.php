@extends('layouts.app')

@section('template_title')
    {{ $patient->name ?? __('Ver') . " " . __('paciente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('patients.index') }}"> {{ __('Ver pacientes') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $patient->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido:</strong>
                            {{ $patient->last_name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Correo:</strong>
                            {{ $patient->email }}
                        </div>
                        @if ($patient->note)
                            <div class="form-group mb-2 mb20">
                                <strong>Nota:</strong>
                                {{ $patient->note }}
                            </div>
                        @endif
                        
                        @if (!$consultations->isEmpty())
                            <div class="form-group mb-2 mb20">
                                <strong>Consultas:</strong>
                                @foreach ($consultations as $consultant)
                                    <ul>
                                        <li>
                                            <span><strong>Fecha</strong> {{ $consultant->date }}</span>
                                            <a class="link" href="{{ route('consultations.show', $consultant->id) }}">{{ __('Ver consulta') }}</a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif
                        <div class="form-group mb-2 mb20">
                            <strong>Edad:</strong>
                            {{ $patient->age }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
