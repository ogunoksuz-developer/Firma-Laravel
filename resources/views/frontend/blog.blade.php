@extends('frontend.app')
@section('icerik')
    <div class="container" style="margin-top: 20px;" >
        <h4>BLOG</h4>
        <div class="site-pagination">
            <a href="/">Anasayfa</a> /
            <a href="">Blog</a>
        </div>
    </div>
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="/uploads/img/company01.jpg">

            </div>
            <div class="hs-item set-bg" data-setbg="/uploads/img/company01.jpg">

            </div>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>

    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>YENİ BLOGLAR</h2>
            </div>
            <div class="product-slider owl-carousel">
                <div class="product-item" >
                    <div>
                        <h3>Deneme Baslık</h3>
                    </div>
                    <div class="pi-pic">
                        <img src="/uploads/product/1.jpg" alt="">
                    </div>
                    <div class="pi-text">
                        <h5>Ogün ÖKSÜZ</h5>
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        <h6>March 15, 2018</h6>
                        <p>Black and White Stripes Dres</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>EN ÇOK OKUNAN BLOGLAR</h2>
            </div>
            <ul class="product-filter-menu">
                <li><a href="#">TOPS</a></li>
                <li><a href="#">JUMPSUITS</a></li>
                <li><a href="#">LINGERIE</a></li>
                <li><a href="#">JEANS</a></li>
                <li><a href="#">DRESSES</a></li>
                <li><a href="#">COATS</a></li>
                <li><a href="#">JUMPERS</a></li>
                <li><a href="#">LEGGINGS</a></li>
            </ul>
            <div class="row">
                <div>
                    <div class="product-item" style="width: 288px; float:left; padding: 20px;">
                        <div>
                            <h3>Deneme Baslık</h3>
                        </div>
                        <div class="pi-pic">
                            <img src="/uploads/product/1.jpg" style="width: 100%;" alt="">
                        </div>
                        <div class="pi-text">
                            <h5>Ogün ÖKSÜZ</h5>
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            <h6>March 15, 2018</h6>
                            <p>Black and White Stripes Dres</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark">DAHA FAZLA</button>
            </div>
        </div>
    </section>

@endsection
@section('css')

@endsection

@section('js')

@endsection
