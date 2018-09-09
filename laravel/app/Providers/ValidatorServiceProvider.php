<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
            return validar_cpf($value);
        });

        Validator::extend('cnpj', function ($attribute, $value, $parameters, $validator) {
            return validar_cnpj($value);
        });

        Validator::extend('cep', function ($attribute, $value, $parameters, $validator) {
            return validar_cep($value);
        });

        Validator::extend('percent', function ($attribute, $value, $parameters, $validator) {
            return only_number($value) >= 0 && only_number($value) <= 100;
        });

        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return \Hash::check($value, \Auth::user()->password);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
