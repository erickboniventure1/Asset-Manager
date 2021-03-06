@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.supplier.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.suppliers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="supplier_name">{{ trans('cruds.supplier.fields.supplier_name') }}</label>
                <input class="form-control {{ $errors->has('supplier_name') ? 'is-invalid' : '' }}" type="text" name="supplier_name" id="supplier_name" value="{{ old('supplier_name', '') }}" required>
                @if($errors->has('supplier_name'))
                    <span class="text-danger">{{ $errors->first('supplier_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.supplier.fields.supplier_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="supplier_email">{{ trans('cruds.supplier.fields.supplier_email') }}</label>
                <input class="form-control {{ $errors->has('supplier_email') ? 'is-invalid' : '' }}" type="email" name="supplier_email" id="supplier_email" value="{{ old('supplier_email') }}" required>
                @if($errors->has('supplier_email'))
                    <span class="text-danger">{{ $errors->first('supplier_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.supplier.fields.supplier_email_helper') }}</span>
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