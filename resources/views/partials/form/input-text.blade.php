<div class="form-group row @if ($errors->has($name)) has-error @endif">
    <label for="{{ $name }}"
           class="col-md-4 col-form-label text-md-right">{{ __("{$label}") }}</label>
    <div class="col-md-6">
        <input id="{{ $name }}" type="text"
               class="form-control {{ $errors->has($name) ? ' is-invalid' : '' }}"
               name="{{ $name }}"
               value="@if($model && old($name) == ''){{ $model->$name }}@else{{ old($name) }}@endif"
               required>

        @if ($errors->has($name))
            <span class="text-danger" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>