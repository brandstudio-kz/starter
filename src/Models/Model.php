<?php

namespace BrandStudio\Starter\Models;

use Illuminate\Database\Eloquent\Model as OriginalModel;
use BrandStudio\Publishable\Interfaces\Publishable;
use BrandStudio\Identifiable\Interfaces\Identifiable;

class Model extends OriginalModel implements Publishable, Identifiable
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use \BrandStudio\File\Traits\HasFile;
    use \BrandStudio\Publishable\Traits\Publishable;
    use \BrandStudio\Identifiable\Traits\Identifiable;

}
