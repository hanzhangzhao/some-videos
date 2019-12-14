<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Validator;
use Hash;

class ChangePasswordPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('admin')->check();
    }

    public function addValidator() {
        Validator::extend('check_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, Auth::guard('admin')->user()->password);
        });
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this -> addValidator();
        // NOTE: it has to be exact "password" and "password_confirmation"!!!! according to laravel validation doc
        return [
            'original_password' => 'sometimes|required|check_password',
            'password' => 'sometimes|required|confirmed',
            'password_confirmation' => 'sometimes|required',
        ];
    }

    /**
     * customized error messages
     */
    public function messages()
    {
        return [
            'original_password.required' => 'Old password cannot be empty',
            'password.required' => 'New password cannot be empty',
            'password_confirmation.required' => 'Confirmation password cannot be empty',
            'password_confirmed' => 'Confirmation password isn\'t matching',
            'original_password.check_password' => 'Incorrect old password',
        ];
    }
}
