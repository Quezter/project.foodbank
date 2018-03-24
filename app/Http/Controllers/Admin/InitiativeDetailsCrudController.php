<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\InitiativeDetailsRequest as StoreRequest;
use App\Http\Requests\InitiativeDetailsRequest as UpdateRequest;
use Illuminate\Support\Facades\DB;

class InitiativeDetailsCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\InitiativeDetails');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/initiative-details');
        $this->crud->setEntityNameStrings('initiative details', 'initiative details');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD FIELDS
        $this->crud->addField([  // Select2
           'label' => "Initiative ID",
           'type' => 'select2',
           'name' => 'initiative_key', // the db column for the foreign key
           'entity' => 'initiative', // the method that defines the relationship in your Model
           'attribute' => 'initiative_key', // foreign key attribute that is shown to user
           'model' => "App\Models\Initiative" // foreign key model
        ], 'create');
        
        $this->crud->addField([  // Select2
           'label' => "Initiative ID",
           'type' => 'select2',
           'name' => 'initiative_key', // the db column for the foreign key
           'entity' => 'initiative', // the method that defines the relationship in your Model
           'attribute' => 'initiative_key', // foreign key attribute that is shown to user
           'model' => "App\Models\Initiative", // foreign key model
           'attributes' => ['disabled' => 'disabled']
       ], 'update');
        
        $this->crud->addField([
            'name' => 'lang',
            'label' => 'Language Code',
            'type' => 'select2_from_array',
            'options' => ['en' => 'EN', 'nl' => 'NL'],
            'allows_null' => false,
            'default' => 'en',
        ], 'create');
        
        $this->crud->addField([
            'name' => 'lang',
            'label' => 'Language Code',
            'type' => 'select2_from_array',
            'options' => ['en' => 'EN', 'nl' => 'NL'],
            'allows_null' => false,
            'default' => 'en',
            'attributes' => ['disabled' => 'disabled']
        ], 'update');
        
        $this->crud->addField([
            'name' => 'title',
            'label' => 'Title'
        ], 'update/create/both');
        
        $this->crud->addField([
            'name' => 'body',
            'label' => 'Description',
            'type' => 'textarea'
        ], 'update/create/both');

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'initiative_key', // the method that defines the relationship in your Model
            'type' => 'select',
            'label' => 'Initiative ID', // Table column heading
            'entity' => 'initiative', // the method that defines the relationship in your Model
            'attribute' => 'initiative_key', // foreign key attribute that is shown to user
            'model' => 'App\Models\Initiative' // foreign key model
        ]);
    
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title'
        ]);
        
        $this->crud->addColumn([
            'name' => 'lang',
            'label' => 'Language Code',
            'type' => 'select_from_array',
            'options' => ['en' => 'EN', 'nl' => 'NL']
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
