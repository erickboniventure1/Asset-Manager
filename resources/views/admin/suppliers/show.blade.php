@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.supplier.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.suppliers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.supplier.fields.id') }}
                        </th>
                        <td>
                            {{ $supplier->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supplier.fields.supplier_name') }}
                        </th>
                        <td>
                            {{ $supplier->supplier_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supplier.fields.supplier_email') }}
                        </th>
                        <td>
                            {{ $supplier->supplier_email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.suppliers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection