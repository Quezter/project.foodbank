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
        $this->crud->enableAjaxTable();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'event_key',
            'label' => 'Unique ID (E.g. "launch")',
            'type' => 'event_key'
        ], 'create');
        
        $this->crud->addField([
            'name' => 'event_key',
            'label' => 'Unique ID (E.g. "launch")',
            'type' => 'event_key',
            'attributes' => ['disabled' => 'disabled']
        ], 'update');
        
        $this->crud->addField([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'datetime',
            'default' => date("Y/m/d", mktime(0,0,0,date("m"),date("d"),date("Y")))
        ]);
        
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
            'name' => 'event_key',
            'label' => 'Event ID',
            'type' => 'text'
        ]);
        
        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Date',
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
        $password = $request->input('date');
        $url_fb = $request->input('url_fb');
        $url_instagram = $request->input('url_instagram');
        $email = $request->input('email');
        $event_key = $request->input('event_key');
        
        foreach ($request->all() as $field_key => $field_value) {
            if (!$field_value) {
                $request->replace($request->except([$field_key]));
            }
        }
        
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
