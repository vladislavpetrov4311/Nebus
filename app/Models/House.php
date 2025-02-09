<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class House extends Model
{
    public function company() {
        return $this->hasMany(Company::class, 'house_id' , 'id');
    }
}
