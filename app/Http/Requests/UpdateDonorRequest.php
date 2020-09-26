<?php

namespace App\Http\Requests;

use App\Models\Donor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDonorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('donor_edit');
    }

    public function rules()
    {
        return [
            'donor_name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
