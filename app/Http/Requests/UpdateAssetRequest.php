<?php

namespace App\Http\Requests;

use App\Models\Asset;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAssetRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('asset_edit');
    }

    public function rules()
    {
        return [
            'category_id'   => [
                'required',
                'integer',
            ],
            'serial_number' => [
                'string',
                'required',
                'unique:assets,serial_number,' . request()->route('asset')->id,
            ],
            'name'          => [
                'string',
                'required',
            ],
            'status_id'     => [
                'required',
                'integer',
            ],
            'location_id'   => [
                'required',
                'integer',
            ],
            'model'         => [
                'string',
                'required',
            ],
            'supplier'      => [
                'string',
                'required',
            ],
        ];
    }
}
