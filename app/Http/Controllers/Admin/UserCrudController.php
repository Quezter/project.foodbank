<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\User as User;
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;
use Illuminate\Support\Facades\DB;

class UserCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/user');
        $this->crud->setEntityNameStrings('user', 'users');
        $this->crud->enableAjaxTable();
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // firstname, lastname, email, password, password repeat

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        $this->crud->addField([
            'name' => 'firstname',
            'label' => "First Name",
            'type' => 'text',
        ], 'update/create/both');
        $this->crud->addField([
            'name' => 'lastname',
            'label' => "Last Name",
            'type' => 'text',
        ], 'update/create/both');
        $this->crud->addField([
            'name' => 'email',
            'label' => "Email",
            'type' => 'disabled_if_exists',
        ], 'update/create/both');
        $this->crud->addField([   // Password
            'name' => 'password',
            'label' => 'Password',
            'type' => 'password'
        ], 'update/create/both');
        $this->crud->addField([   // Password
            'name' => 'passwordConfirm',
            'label' => 'Confirm Password',
            'type' => 'password'
        ], 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        $this->crud->addColumn([
            'name' => 'firstname',
            'label' => 'First Name'
        ]);
        $this->crud->addColumn([
            'name' => 'lastname',
            'label' => 'Last Name'
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email'
        ]);
    }

    public function store(StoreRequest $request)
    {
        $password = $request->input('password');
        $passwordConfirm = $request->input('passwordConfirm');
        
        $request->merge(['password' => bcrypt($password)]);
      
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;  
    }

    public function update(UpdateRequest $request)
    {
        $request->replace($request->except(['email']));
        $password = $request->input('password');
        if (!$password) {
            $request->replace($request->except(['password']));
        } else {
            $request->merge(['password' => bcrypt($password)]);
        }
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
