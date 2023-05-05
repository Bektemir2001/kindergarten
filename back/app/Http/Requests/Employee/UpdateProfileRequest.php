<?php

namespace App\Http\Requests\Employee;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $user = User::where('id', $this->id)->get();
        return [
            'name' => ['string', 'max:50'],
            'surname' => ['string', 'max:50'],
            'address' => ['string', 'max:200'],
            'phone_number' => ['string', 'max:20'],
            'passport_front' => 'mimes:jpg,bmp,png,jpeg',
            'passport_back' => 'mimes:jpg,bmp,png,jpeg',
        ];
    }
}
