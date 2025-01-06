<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrinterRequest extends FormRequest
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
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|numeric',
            'build_volume_width' => 'required|integer',
            'build_volume_depth' => 'required|integer',
            'build_volume_height' => 'required|integer',
            'technology' => 'required|string|max:255',
            'features' => 'required|string',
            'filament_support' => 'required|string',
            'connectivity' => 'required|string',
            'layer_resolution' => 'required|string',
            'nozzle_diameter' => 'required|string',
        ];
    }
}
