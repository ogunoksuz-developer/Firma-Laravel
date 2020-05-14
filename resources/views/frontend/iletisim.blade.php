@extends('frontend.app')
@section('icerik')

    <div class="container" style="margin-top: 20px;" >
        <h4>BİZE ULAŞIN</h4>
        <div class="site-pagination">
            <a href="">Anasayfa</a> /
            <a href="">Bize Ulaşın</a>
        </div>
    </div>

<!-- Page info end -->


<!-- Contact section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <form class="contact-form">
                    <input type="text" placeholder="İsminiz">
                    <input type="text" placeholder="E-Mail Adresiniz">
                    <input type="text" placeholder="Konu">
                    <textarea placeholder="Mesajınız"></textarea>
                    <button class="site-btn" style="background-color: lightgreen;">İletin</button>
                </form>
            </div>

            <div class="col-lg-6 contact-info">
                <form class="contact-form">
                    <h3>Bize Ulaşmak İçin</h3>
                    <p> {{$ayarlar->adres}} {{$ayarlar->ilce}} /{{$ayarlar->il}}</p>
                    <p>{{$ayarlar->telefon}}</p>
                    <p>{{$ayarlar->smtp_host}}</p>
                    <div class="contact-social">
                        <a href={{$ayarlar->youtube}}><i class="fa fa-youtube-play"></i></a>
                        <a href="{{$ayarlar->facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{$ayarlar->twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="{{$ayarlar->instagram}}"><i class="fa fa-instagram"></i></a>
                        <a href="{{$ayarlar->google}}"><i class="fa fa-google"></i></a>
                        <a href="{{$ayarlar->google}}"><i class="fa fa-linkedin"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
<!-- Contact section end -->
<section>
    <br>
</section>
@endsection
