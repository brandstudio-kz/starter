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

    }

    public function register()
    {
        $this->commands($this->commands);
    }
}
