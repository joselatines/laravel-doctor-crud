<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="note" class="form-label">{{ __('Note') }}</label>
            <input type="text" name="note" class="form-control @error('note') is-invalid @enderror" value="{{ old('note', $consultation?->note) }}" id="note" placeholder="Note">
            {!! $errors->first('note', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Date') }}</label>
            <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $consultation?->date) }}" id="date" placeholder="Date">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="patient_id" class="form-label">{{ __('Patient Id') }}</label>
            <input type="text" name="patient_id" class="form-control @error('patient_id') is-invalid @enderror" value="{{ old('patient_id', $consultation?->patient_id) }}" id="patient_id" placeholder="Patient Id">
            {!! $errors->first('patient_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>