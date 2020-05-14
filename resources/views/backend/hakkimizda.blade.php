@extends('backend.app2')
@section('icerik')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>HAKKIMIZDA SAYFASI</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form id="form" method="post" data-parsley-validate class="form-horizontal form-label-left">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Vizyon</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="vizyon" name="vizyon" value="{{$hakkimizda->vizyon}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Misyon</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="misyon" name="misyon" value="{{$hakkimizda->misyon}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">İçerik</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="icerik" id="icerik"  rows="10"  class="form-control col-md-7 col-xs-12">
                                                {{$hakkimizda->icerik}}
                                            </textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kısa Yazı</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="kisa_yazi" name="kisa_yazi" value="{{$hakkimizda->kisa_yazi}}" class="form-control col-md-7 col-xs-12">
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
