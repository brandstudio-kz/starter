<?php

namespace BrandStudio\Starter\Console\Commands;

use Backpack\Generators\Console\Commands\CrudControllerBackpackCommand as ParentCrudController;

class CrudControllerBackpackCommand extends ParentCrudController
{
    protected function getStub()
    {
        return __DIR__.'/../stubs/crud-controller.stub';
    }
}
