<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InitiativeRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
                  'initiative_key' => 'required'
              ];
          }
          case 'PUT':
          case 'PATCH':
          {
              return [];
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
            'initiative_key' => '"Initiative Unique ID"',
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
