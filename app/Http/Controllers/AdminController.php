<?php

namespace App\Http\Controllers;

use App\AyarlarModel;
use App\BlogModel;
use App\HakkimizdaModel;
use Carbon\Carbon;
use Image;
use Input;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function get_index()
    {
        return view('backend.index');
    }

    public function get_ayarlar()
    {
        $ayarlar = AyarlarModel::where('id', 1)->select('ayarlar.*')->first();
        return view('backend.ayarlar')->with('ayarlar', $ayarlar);
    }

    public function post_ayarlar(Request $request)
    {
        if (isset($request->logo)) {
            $validator = Validator::make($request->all(), [
                'logo' => 'mimes:jpg,jpeg,png,gif',
            ]);

            if ($validator->fails()) {
                return response(['durum' => 'error', 'baslik' => 'Başarısız', 'icerik' => 'Lütfen jpg,jpeg,png,gif bu uzantılara sahip bir dosya yükleyin']);
            }
            $logo = Input::file('logo');
            $uzanti = Input::file('logo')->getClientOriginalExtension();
            $logo_name = 'logo.' . $uzanti;
            Storage::disk('uploads')->makeDirectory('img');
            Image::make($logo->getRealPath())->resize(222, 188)->save('uploads/img/' . $logo_name);
        }
        try {

            if (isset($request->logo)) {
                unset($request['eski_logo']);
                $data = $request->all();
                AyarlarModel::where('id', 1)->update([
                    'logo' => $data['logo'],
                    'title' => $data['title'],
                    'keywords' => $data['keywords'],
                    'descreption' => $data['descreption'],
                    'url' => $data['url'],
                    'telefon' => $data['telefon'],
                    'gsm' => $data['gsm'],
                    'fax' => $data['fax'],
                    'adres' => $data['adres'],
                    'il' => $data['il'],
                    'ilce' => $data['ilce'],
                    'facebook' => $data['facebook'],
                    'youtube' => $data['youtube'],
                    'twitter' => $data['twitter'],
                    'instegram' => $data['instegram'],
                    'google' => $data['google'],
                    'recaptcha' => $data['recaptcha'],
                    'maps' => $data['maps'],
                    'analystic' => $data['analystic'],
                    'smtp_user' => $data['smtp_user'],
                    'smtp_password' => $data['smtp_password'],
                    'smtp_host' => $data['smtp_host'],
                    'smtp_port' => $data['smtp_port'],
                ]);
                AyarlarModel::where('id', 1)->update(['logo' => $logo_name]);

            } else {
                $eski_logo = $request->eski_logo;
                unset($request['eski_logo']);
                $data = $request->all();
                AyarlarModel::where('id', 1)->update([
                    'logo' => $data['logo'],
                    'title' => $data['title'],
                    'keywords' => $data['keywords'],
                    'descreption' => $data['descreption'],
                    'url' => $data['url'],
                    'telefon' => $data['telefon'],
                    'gsm' => $data['gsm'],
                    'fax' => $data['fax'],
                    'adres' => $data['adres'],
                    'il' => $data['il'],
                    'ilce' => $data['ilce'],
                    'facebook' => $data['facebook'],
                    'youtube' => $data['youtube'],
                    'twitter' => $data['twitter'],
                    'instegram' => $data['instegram'],
                    'google' => $data['google'],
                    'recaptcha' => $data['recaptcha'],
                    'maps' => $data['maps'],
                    'analystic' => $data['analystic'],
                    'smtp_user' => $data['smtp_user'],
                    'smtp_password' => $data['smtp_password'],
                    'smtp_host' => $data['smtp_host'],
                    'smtp_port' => $data['smtp_port'],
                ]);
                AyarlarModel::where('id', 1)->update(['logo' => $eski_logo]);
            }
            return response(['durum' => 'success', 'baslik' => 'Basarılı', 'icerik' => 'Kayıt Başarılı']);

        } catch (\Exception $exception) {
            return response(['durum' => 'error', 'baslik' => 'Başarısız', 'icerik' => 'Kayıt Başarısız']);
        }
    }

    public function get_hakkimizda()
    {
        $hakkimizda = HakkimizdaModel::where('id', 1)->select('hakkimizda.*')->first();
        return view('backend.hakkimizda')->with('hakkimizda', $hakkimizda);

    }

    public function post_hakkimizda(Request $request)
    {
        unset($request['_token']);
        try {
            $data = $request->all();
            HakkimizdaModel::where('id', 1)->update([
                'vizyon' => $data['vizyon'],
                'misyon' => $data['misyon'],
                'icerik' => $data['icerik'],
                'kisa_yazi' => $data['kisa_yazi'],
            ]);
            return response(['durum' => 'success', 'baslik' => 'Basarılı', 'icerik' => 'Kayıt Başarılı']);
        } catch (\Exception $exception) {
            return response(['durum' => 'error', 'baslik' => 'Başarısız', 'icerik' => 'Kayıt Başarısız']);
        }
    }

    public function get_blogEkle()
    {
        return view('backend.blogEkle2');
    }

    public function post_blogEkle(Request $request)
    {
        $slug = str_slug($request->baslik) . '-' . str_slug(Carbon::now());
        $resimler = $request->file('resimler');
        if (!empty($resimler)) {
            $i = 0;
            foreach ($resimler as $resim) {
                $uzanti = $resim->getClientOriginalExtension();
                $resim_name = $i . '.' . $uzanti;
                Storage::disk('uploads')->makeDirectory('img/blog' . $slug);
                Storage::disk('uploads')->put('img/blog' . $slug . '/' . $resim_name, file_get_contents($resim));

                $i++;
            }
        }

        unset($request['_token']);
        try {
            $request->merge(['slug' => $slug]);
            BlogModel::create($request->all());
            return response(['durum' => 'success', 'baslik' => 'Basarılı', 'icerik' => 'Kayıt Başarılı']);
        } catch (\Exception $exception) {
            return response(['durum' => 'error', 'baslik' => 'Başarısız', 'icerik' => 'Kayıt Başarısız' . $exception->getTrace()]);
        }
    }

    public function get_blog()
    {
        $bloglar = BlogModel::all();
        return view('backend.yazilar')->with('bloglar', $bloglar);
    }

    public function post_blog_sil(Request $request)
    {
        try {

            BlogModel::where('slug', $request->slug)->delete();
            Storage::disk('uploads')->deleteDirectory('img/blog' . $request->slug);

            return response(['durum' => 'success', 'baslik' => 'Basarılı', 'icerik' => 'Silme İşlemi Başarılı']);
        } catch (\Exception $exception) {
            return response(['durum' => 'error', 'baslik' => 'Başarısız', 'icerik' => 'Silme İşlemi Başarısız' . $exception->getTrace()]);
        }


    }

    public function get_blog_duzenle($slug)
    {
        $blog=BlogModel::where('slug',$slug)->first();
        return view('backend.blog-duzenle')->with('blog', $blog);
    }

    public function get_kategori()
    {
        return view('backend.kategori');
    }

}
