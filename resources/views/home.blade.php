@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Consultorio Medico System | Dashboard') }}</div>
                <img src="/images/medical-banner.jpg" alt="Medicine Banner">
                <div class="card-body fs-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('patients.index') }}" class="btn btn-primary btn-lg float-right"  data-placement="left">
                        Ver pacientes <i class="fa-solid fa-user-injured"></i>
                    </a>
                    <a href="{{ route('consultations.index') }}" class="btn btn-primary btn-lg float-right"  data-placement="left">
                        Ver consultas <i class="fa-solid fa-user-doctor"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
