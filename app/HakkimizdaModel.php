<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HakkimizdaModel extends Model
{
    protected $table='hakkimizda';
    protected $fillable=['vizyon','misyon','icerik','kisa_yazi'];
}
