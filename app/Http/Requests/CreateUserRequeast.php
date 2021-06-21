<?php


namespace App\Http\Controllers;
namespace App\Http\Requests;
//use App\Http\Controllers;;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Http\Request;


class CreateUserRequeast extends FormRequest
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
            'group_id'=>'required',
            'name'=>'required|string',
            'phone'=>'required|numeric',
            'email'=>'nullable|email|unique:users'
        ];
    }
}