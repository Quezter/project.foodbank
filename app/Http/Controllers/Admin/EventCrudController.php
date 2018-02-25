<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EventRequest as StoreRequest;
use App\Http\Requests\EventRequest as UpdateRequest;
use Illuminate\Support\Facades\DB;

class EventCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Event');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/event');
        $this->crud->setEntityNameStrings('event', 'events');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'id_key',
            'label' => "Short Event ID"
        ], 'update/create/both');
        
        $this->crud->addField([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'datetime'
        ], 'update/create/both');
        
        $this->crud->addField([
            'name' => 'url_fb',
            'label' => 'Facebook Event'
        ]);
        
        $this->crud->addField([
            'name' => 'url_instagram',
            'label' => 'Instagram Address'
        ]);
        
        $this->crud->addField([
            'name' => 'email',
            'label' => 'Contact Email'
        ]);
        
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title'
        ]);
        
        $this->crud->addColumn([
            'name' => 'date',
            'label' => "Date",
            'type' => 'datetime'
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
