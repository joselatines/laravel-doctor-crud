@extends('layouts.app')

@section('template_title')
    {{ $patient->name ?? __('Show') . " " . __('Patient') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Patient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('patients.index') }}"> {{ __('Ver pacientes') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Name:</strong>
                            {{ $patient->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Last Name:</strong>
                            {{ $patient->last_name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $patient->email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Note:</strong>
                            {{ $patient->note }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Age:</strong>
                            {{ $patient->age }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
