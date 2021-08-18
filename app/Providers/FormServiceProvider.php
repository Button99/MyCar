<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]); // model, mileage, condition, category, fuel_type, type, engine
        Form::component('number', 'components.form.number', ['name', 'value' => null, 'attributes' => []]); // Doors, seats
        Form::component('year', 'components.form.year', ['name', 'value' => null, 'attributes' => []]);
        // TODO:: CREATE RESOURCES->COMP->FORM
    }
}
