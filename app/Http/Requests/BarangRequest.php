<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'dist_id' => 'required',
            'qty' => 'required',
            'harga_satuan' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
          'nama.required' => 'nama tidak boleh kosong',
          'dist_id.required' => 'distributor tidak boleh kosong',
          'qty.required' => 'kuantitas tidak boleh kosong',
          'harga_satuan.required' => 'harga satuan tidak boleh kosong'
        ];
    }
}
