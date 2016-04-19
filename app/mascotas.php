<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mascotas extends Model
{
    protected $table="mascotas";
    protected $primaryKey="id";
    protected $filable=['nombre','edad','tipo','color'];
}
