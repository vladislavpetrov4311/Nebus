<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\House;

class Company extends Model
{
    public function house() {
        return $this->belongsTo(House::class, 'house_id' , 'id');
    }
}
