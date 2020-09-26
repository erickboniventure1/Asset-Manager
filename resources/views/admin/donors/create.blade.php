@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.donor.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.donors.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="donor_name">{{ trans('cruds.donor.fields.donor_name') }}</label>
                <input class="form-control {{ $errors->has('donor_name') ? 'is-invalid' : '' }}" type="text" name="donor_name" id="donor_name" value="{{ old('donor_name', '') }}">
                @if($errors->has('donor_name'))
                    <span class="text-danger">{{ $errors->first('donor_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.donor.fields.donor_name_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection