<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InitiativeDetailsRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
        // extends Validator only for this request
        \Validator::extend( 'composite_unique', function ( $attribute, $value, $parameters, $validator ) {
            // remove first parameter and assume it is the table name
            $table = array_shift( $parameters ); 

            // start building the conditions
            $fields = [ $attribute => $value ]; // current field, company_code in your case

            // iterates over the other parameters and build the conditions for all the required fields
            while ( $field = array_shift( $parameters ) ) {
                $fields[ $field ] = $this->get( $field );
            }

            // query the table with all the conditions
            $result = \DB::table( $table )->select( \DB::raw( 1 ) )->where( $fields )->first();

            return empty( $result ); // edited here
        }, 'You cannot have two event details for the same initiative/language combination!' );
        
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
                  'initiative_key' => 'required|composite_unique:initiative_details,lang',
                  'lang' => 'required|composite_unique:initiative_details,initiative_key',
                  'title' => 'required',
                  'body' => 'required'
              ];
          }
          case 'PUT':
          case 'PATCH':
          {
              return [
                  'title' => 'required',
                  'body' => 'required'
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
            'initiative_key' => '"Unique Initiative ID"',
            'lang' => '"Language"',
            'title' => '"Title"',
            'body' => '"Description"'        
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
