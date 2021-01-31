<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">@lang('Description')</label>
    <div class="col-md-6">
        {!! Form::text('description', isset($role) ? $role->description : null, array('name' => 'description', 'class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'required' => 'required', 'autofocus' => 'autofocus')) !!}
        @error('description')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Save') }}
        </button>
    </div>
</div>
