<?php

namespace App\Model;

use App\Http\Traits\TimestampTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use TimestampTrait;

    //tables
    protected $table = 'tasks';

    public function users(){

        return $this->hasMany(User::class);
    }
}
