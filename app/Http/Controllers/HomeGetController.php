<?php

namespace App\Http\Controllers;

use App\AyarlarModel;
use App\HakkimizdaModel;
use Illuminate\Http\Request;

class HomeGetController extends HomeController
{
  public  function get_index(){
      return view('frontend.index');
  }
    public  function get_iletisim(){
        $ayarlar=AyarlarModel::where('id',1)->select('ayarlar.*')->first();
        return view('frontend.iletisim')->with('ayarlar',$ayarlar);
    }

    public  function get_hakkimizda(){
      $hakkimizda=HakkimizdaModel::where('id',1)->select('hakkimizda.*')->first();
      return view('frontend.hakkimizda')->with('hakkimizda',$hakkimizda);
    }

    public  function get_blog(){
        return view('frontend.blog');
    }
    public  function get_blog_detay(){
        return view('frontend.blog_detay');
    }
}
