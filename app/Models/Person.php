<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['shoes'];

    //
    public function shoes()
    {
        return $this->hasMany(Shoes::class, 'person_id', 'id');
    }
}
