<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AyarlarModel extends Model
{
    protected $table='ayarlar';
    protected $fillable=['title','keywords','descreption','url','telefon','gsm','fax','adres','il','ilce','facebook','youtube','twitter','instegram','google','recaptcha',
        'maps','analystic','smtp_user','smtp_password','smtp_host','smtp_port'];
}
