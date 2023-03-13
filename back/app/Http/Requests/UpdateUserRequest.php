<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateUserRequest extends FormRequest
{
    // use User;
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
        // dd($this);
        $user = User::where('id', $this->id)->get();
        return [
            'name' => ['string', 'max:50'],
            'surname' => ['string', 'max:50'],
            'address' => ['string', 'max:200'],
            'phone_number' => ['string', 'max:20'],
            'role' => [],
        ];

    }
}
