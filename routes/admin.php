<?php

// Backpack\CRUD: Define the resources for the entities you want to CRUD.
CRUD::resource('user', 'UserCrudController');
CRUD::resource('initiative', 'InitiativeCrudController');
CRUD::resource('initiative-details', 'InitiativeDetailsCrudController');
CRUD::resource('event', 'EventCrudController');
CRUD::resource('event-details', 'EventDetailsCrudController');
CRUD::resource('config', 'ConfigCrudController');
