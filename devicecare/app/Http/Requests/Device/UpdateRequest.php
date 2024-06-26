<?php

namespace App\Http\Requests\Device;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'customer_id' => 'required|exists:customers,id',
            'user_id' => [Rule::requiredIf(function() {
                return (auth()->user()->isAdmin()) ? true : false;
                }), 'exists:users,id'], //exists:nombreTabla,nombreCampo
            'maintenances' => 'required|exists:maintenances,id',
            'description' => 'required|string',
            'status' => 'required|string|in:Recibido,Procesando,Terminado,Entregado'
        ];
    }
}
