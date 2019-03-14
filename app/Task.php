<?php

namespace App;

use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//use TimestampsTrait;
    protected $table='tasks';
}
