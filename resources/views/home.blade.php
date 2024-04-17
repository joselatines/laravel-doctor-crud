@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('patients.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        Ver pacientes
                    </a>
                    <a href="{{ route('consultations.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        Ver consultas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
