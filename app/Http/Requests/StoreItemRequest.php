<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item.item_name'=>'required',
            'item.image'=>'required|mimes:jpeg,bmp,png',
            'item.file'=>'required|mimes:pdf,docx',
            'item.item_head'=>'required',
            'item.item_body'=>'required',
            //'item.company_id'=>'required',
        ];
    }
}
