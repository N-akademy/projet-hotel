<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function clients()
    {
        return $this->hasMany('App\Clients');
    }

    public function staffs()
    {
        return $this->hasMany('App\Staffs');
    }
}
