<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'date' => 'required',
        'time' => 'required',
        'location' => 'required',
        'temperature' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'Tanggal wajib diisi',
            'time.required' => 'Waktu wajib diisi',
            'location.required' => 'Lokasi wajib diisi',
            'temperature.required' => 'Suhu wajib diisi',
        ];
    }
}

