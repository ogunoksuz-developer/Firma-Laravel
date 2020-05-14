<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table='bloglar';
    protected $fillable=['baslik','icerik','yazar','etiketler','slug'];
}
