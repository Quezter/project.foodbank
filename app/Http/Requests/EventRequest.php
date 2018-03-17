<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
                  'date' => 'required',
                  'url_fb' => 'required',
                  'url_instagram' => 'required',
                  'email' => 'required',
                  'event_key' => 'required|unique:events,event_key',
              ];
          }
          case 'PUT':
          case 'PATCH':
          {
              return [
                  'date' => 'required',
                  'url_fb' => 'required',
                  'url_instagram' => 'required',
                  'email' => 'required',
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
            'date' => '"Date"',
            'url_fb' => '"Facebook Event"',
            'url_instagram' => '"Instagram Page"',
            'email' => '"Contact Email"',
            'event_key' => '"Event Unique ID"'            
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
