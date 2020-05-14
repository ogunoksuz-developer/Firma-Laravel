@extends('backend.app')
@section('icerik')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>BLOG SAYFASI</h3>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form id="form" method="post" data-parsley-validate
                                  class="form-horizontal form-label-left">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Başlık</th>
                                        <th>Yazar</th>
                                        <th>Kategorilers</th>
                                        <th>Hit</th>
                                        <th>Yorum Sayısı</th>
                                        <th>Ekleme Tarih</th>
                                        <th>Düzenleme Tarih</th>
                                        <th>Sil</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @php
                                        $sira=1;
                                    @endphp
                                    @foreach($bloglar as $blog)
                                        <tr>
                                            <td>{{$blog->baslik}}</td>
                                            <td>{{$blog->yazar}}</td>
                                            <td>{{$blog->etiketler}}</td>
                                            <td>Hit</td>
                                            <td>Yorum Sayısı</td>
                                            <td>{{$blog->created_at}}</td>
                                            <td>{{$blog->update_at}}</td>
                                            <td>
                                                <form action="" method="post" id="form_sil" name="form_sil">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="slug" value="{{$blog->slug}}">
                                                    <input type="hidden" name="sira" id="sira"
                                                           value="{{$sira}}">
                                                    <input type="submit" value="Sil" class="btn btn-danger">
                                                </form>
                                            </td>
                                            <td>

                                                <a href="blog/blog-duzenle/{{$blog->slug}}" class="btn btn-primary">Düzenle</a>
                                            </td>
                                        </tr>
                                        @php
                                            $sira++;
                                        @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
@section('css')
    <link href="/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/backend/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/backend/vendors/pdfmake/build/vfs_fonts.js"></script>

    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.min.js"></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="/js/ckeditor/ckeditor.js"></script>
    <script src="/js/ckeditor/config.js"></script>

    <script>
        $(document).ready(function () {
            $('form').validate();
            $('form').ajaxForm({
                success: function (response) {
                    Swal.fire(
                        response.baslik,
                        response.icerik,
                        response.durum
                    )
                    if (response.durum == 'success') {
                        var form = document.getElementById("form_sil");
                        var sira = form.elements[2].value;
                        document.getElementById("datatable-buttons").deleteRow(sira);
                    }
                }
            });
        });
    </script>

@endsection
