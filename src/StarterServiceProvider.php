<?php

namespace BrandStudio\Starter;

use Illuminate\Support\ServiceProvider;
use BrandStudio\Starter\Console\Commands\CrudControllerBackpackCommand;
use BrandStudio\Starter\Console\Commands\CrudModelBackpackCommand;

class StarterServiceProvider extends ServiceProvider
{
    protected $commands = [
        CrudControllerBackpackCommand::class,
        CrudModelBackpackCommand::class,
    ];

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'brandstudio');
    }

    public function register()
    {
        $this->commands($this->commands);
    }

}
