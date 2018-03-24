<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ConfigRequest as UpdateRequest;

class ConfigCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Config');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/config');
        $this->crud->setEntityNameStrings('config', 'configurations');
        $this->crud->removeButton('create');
        $this->crud->removeButton('delete');
        $this->crud->enableAjaxTable();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'name',
            'label' => 'Configuration Key',
            'attributes' => ['disabled' => 'disabled']
        ], 'update');
        
        $this->crud->addField([
            'name' => 'value',
            'label' => 'Configuration Value'
        ], 'update');

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Key'
        ]);
        
        $this->crud->addColumn([
           'name' => 'value',
           'label' => "Value"
        ]);
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
