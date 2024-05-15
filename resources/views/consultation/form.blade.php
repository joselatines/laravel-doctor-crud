<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="note" class="form-label">{{ __('Nota') }}</label>
            <input type="text" name="note" class="form-control @error('note') is-invalid @enderror" value="{{ old('note', $consultation?->note ?? 'Sin nota') }}" id="note" placeholder="Paciente viene referido del Dr. Juean">
            {!! $errors->first('note', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">Selecciona una fecha</label>
            <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $consultation->date ?? '') }}" id="date" placeholder="Selecciona una fecha">    
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>La fecha es requerida</strong></div>') !!}
        </div>
       
        <div class="form-group mb-2 mb20">
            <label for="patient_id" class="form-label">Selecciona un paciente</label>
            <select class="form-select" name="patient_id" id="patient_id">
                @foreach ($patients as $patient)
                <option value="{{$patient->id}}">{{$patient->name}} {{$patient->last_name}}</option>
                @endforeach
            </select>

            {!! $errors->first('patient_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>