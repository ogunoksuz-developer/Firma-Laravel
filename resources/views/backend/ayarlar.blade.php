@extends('backend.app')
@section('icerik')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Site Ayarları</h3>
                </div>
            </div>

            <div class="">
                <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <form id="form" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Genel Ayarlar</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">İletişim</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sosyal Medya</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Google Api</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Mail Ayarları</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mevcut Logo</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="/uploads/img/{{$ayarlar->logo}}" alt="Logo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Site Logo</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="logo" name="logo"  class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" name="eski_logo" value="{{$ayarlar->logo}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Site Başlığı</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="title" name="title" value="{{$ayarlar->title}}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Anahtar Kelimeler</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="keywords" name="keywords" value="{{$ayarlar->keywords}}"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Site Açıklaması</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="descreption" value="{{$ayarlar->descreption}}" class="form-control col-md-7 col-xs-12" type="text" name="descreption">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Site Adresi</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="url" value="{{$ayarlar->url}}" class="form-control col-md-7 col-xs-12" type="text" name="url">
                                    </div>
                                </div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="telefon"  value="{{$ayarlar->telefon}}" name="telefon" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">GSM</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="gsm" name="gsm" value="{{$ayarlar->gsm}}"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fax</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="fax" value="{{$ayarlar->fax}}" class="form-control col-md-7 col-xs-12" type="text" name="fax">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="adres" value="{{$ayarlar->adres}}" class="form-control col-md-7 col-xs-12" type="text" name="adres">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İl</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="il" value="{{$ayarlar->il}}" class="form-control col-md-7 col-xs-12" type="text" name="il">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İlçe</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="ilce" value="{{$ayarlar->ilce}}" class="form-control col-md-7 col-xs-12" type="text" name="ilce">
                                    </div>
                                </div>

                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="facebook" name="facebook" value="{{$ayarlar->facebook}}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Youtube</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="youtube" name="youtube" value="{{$ayarlar->youtube}}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="twitter" value="{{$ayarlar->twitter}}" class="form-control col-md-7 col-xs-12" type="text" name="twitter">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">İnstegram</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="instegram" value="{{$ayarlar->instegram}}" class="form-control col-md-7 col-xs-12" type="text" name="instegram">
                                    </div>
                                </div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab2">
                             <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Hesabı</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="google" name="google" value="{{$ayarlar->google}}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Google Recaptcha</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="recaptcha" name="recaptcha" value="{{$ayarlar->recaptcha}}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Google Maps</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="maps" value="{{$ayarlar->maps}}" class="form-control col-md-7 col-xs-12" type="text" name="maps">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Google Analystic</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="analystic" value="{{$ayarlar->analystic}}" class="form-control col-md-7 col-xs-12" type="text" name="analystic">
                                    </div>
                                </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab2">
                              <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="smtp_user" name="smtp_user" value="{{$ayarlar->smtp_user}}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Şifre</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="smtp_password" name="smtp_password"  value="{{$ayarlar->smtp_password}}"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Host</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="smtp_host" value="{{$ayarlar->smtp_host}}" class="form-control col-md-7 col-xs-12" type="text" name="smtp_host">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Port</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="smtp_port" value="{{$ayarlar->smtp_port}}" class="form-control col-md-7 col-xs-12" type="text" name="smtp_port">
                                    </div>
                                </div>

                        </div>

                    </div>
                </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="btn_kaydet" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
@endsection
@section('js')

    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.min.js"></script>
    <script src="/js/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function (){
          $('form').validate();
          $('form').ajaxForm({
             beforeSubmit:function () {
             },
             success:function (response) {
                     Swal.fire(
                         response.baslik,
                         response.icerik,
                         response.durum
                     )
             }
          });
        });
    </script>

@endsection
