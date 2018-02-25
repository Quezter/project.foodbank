<?php

namespace App\Http\Requests;

use App\User;
use App\Http\Requests\Request;

class UserRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = User::find($this->users);

        switch($this->method())
        {
          case 'GET':
          case 'DELETE':
          {
              return [];
          }
          case 'POST':
          {
              return [
                  'firstname' => 'required',
                  'lastname' => 'required',
                  'email' => 'required|unique:users,email|email',
                  'password' => 'same:passwordConfirm'
              ];
          }
          case 'PUT':
          case 'PATCH':
          {
              return [
                  'firstname' => 'required',
                  'lastname' => 'required',
                  'password' => 'same:passwordConfirm'
              ];
          }
          default:
              break;
        }
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
          'firstname' => '"First Name"',
          'lastname' => '"Last Name"',
          'email' => '"Email"',
          'password' => '"Password"'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
