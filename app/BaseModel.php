<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class BaseModel extends Model
{
    use Uuids;

    public $incrementing = false;
}
