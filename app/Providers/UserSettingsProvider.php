<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class UserSettingsProvider extends ServiceProvider
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
        Form::component('password', 'components.form.password', ['name', 'value' => null, 'attributes' => []]);
    }
}
