<?php

namespace BrandStudio\Starter\Console\Commands;

use Backpack\Generators\Console\Commands\CrudModelBackpackCommand as ParentCrudModel;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class CrudModelBackpackCommand extends ParentCrudModel
{
    protected function getStub()
    {
        return __DIR__.'/../stubs/crud-model.stub';
    }
}
