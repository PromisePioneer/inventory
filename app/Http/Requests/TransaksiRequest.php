<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'barang_id' => 'required',
            'qty' => 'required',
            'harga_satuan' => 'required',
            'tanggal' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'barang_id.required' => 'barang tidak boleh kosong',
            'qty.required' => 'kuantitas tidak boleh kosong',
            'harga_satuan.required' => 'harga satuan tidak boleh kosong',
            'tanggal.required' => 'tanggal tidak boleh kosong'
        ];
    }
}
