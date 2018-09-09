<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component('bsText', 'components.form.text', ['name', 'label' => null, 'value' => null, 'attributes' => []]);
        \Form::component('bsTextarea', 'components.form.textarea', ['name', 'label' => null, 'value' => null, 'attributes' => []]);
        \Form::component('bsEmail', 'components.form.email', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        \Form::component('bsPassword', 'components.form.password', ['name', 'label' => null, 'attributes' => []]);        
        \Form::component('bsDate', 'components.form.date', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        \Form::component('bsDatetime', 'components.form.datetime', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        \Form::component('bsTime', 'components.form.time', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        \Form::component('bsSearch', 'components.form.search', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        \Form::component('bsNumber', 'components.form.number', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        \Form::component('bsSelect', 'components.form.select', ['name', 'label' => null, 'items' => [], 'value' => null, 'attributes' => []]);
        \Form::component('bsSelectMultiple', 'components.form.select-multiple', ['name', 'label', 'items', 'model', 'properties']);
        \Form::component('bsSubmit', 'components.form.submit', ['label', 'attributes' => []]);
        \Form::component('iCheckRadio', 'components.form.radio', ['name', 'label', 'attributes' => []]);
        \Form::component('iCheckCheckbox', 'components.form.checkbox', ['name', 'label', 'attributes' => []]);
        \Form::component('iCheckCheckboxOne', 'components.form.checkboxone', ['name', 'label']);
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
