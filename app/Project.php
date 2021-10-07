<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //con guarded se definen los datos que no queremos asignar masivamente
    //con fillable se definen los datos que si queremos asignar masivamente
    protected $guarded=[];
    
    public function getRouteKeyName()
    {
        return 'url';
    }
}
