<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffMasterNatureOfEmployment extends Model
{
    use HasFactory;
    protected $fillable=['name','status','order'];
}
