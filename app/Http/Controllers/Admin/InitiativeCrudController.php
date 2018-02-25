<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\InitiativeRequest as StoreRequest;
use App\Http\Requests\InitiativeRequest as UpdateRequest;
use Illuminate\Support\Facades\DB;

class InitiativeCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Initiative');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/initiative');
        $this->crud->setEntityNameStrings('initiative', 'initiatives');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'title',
            'label' => "Region Name*",
            'type' => 'text',
        ], 'update/create/both');

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'code',
            'label' => 'Region Code'
        ]);
    }

    public function store(StoreRequest $request)
    { 
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;            
    }
    
    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
    
}
