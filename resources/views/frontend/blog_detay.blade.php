@extends('frontend.app')
@section('icerik')
    <div class="page-top-info">
        <div class="container">
            <h4>Category PAge</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Shop</a>
            </div>
        </div>
    </div>

    <section class="product-section">
        <div class="container">
            <div class="back-link">
                <a href="./category.html"> &lt;&lt; Back to Category</a>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-pic-zoom">
                        <img class="product-big-img" style="width:100%;" src="/uploads/product/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-9 product-details">
                    <h2 class="p-title">Deneme Başlık</h2>
                    <h4 class="p-stock">Yazar: <span>Ogün ÖKSÜZ</span></h4>
                    <div class="p-rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o fa-fade"></i>
                    </div>
                    <div class="p-review">
                        <a href="">3 Yorum</a>|<a href="">Yorum Ekleyin</a>
                    </div>

                    <div class="social-sharing">
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                    </div>
                    <div id="accordion" class="accordion-area">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">İÇERİK</button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body">
                                    <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"Mixed fibres Approx length 66cm/26" (Based on a UK size 8 sample) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingTwo">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Yorumlar</button>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="panel-body">
                                    <div class="comment-list">
                                        <div class="comment">
                                            <div class="vcard">
                                                <img src="images/person_1.jpg" alt="resim">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="vcard">
                                                <img src="images/person_1.jpg" alt="resim">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="vcard">
                                                <img src="images/person_1.jpg" alt="resim">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 contact-info" style="margin-bottom:20px;  ">
                                        <form class="contact-form" style="width: 830px;">
                                            <textarea placeholder="Yorum Yazınız...." style="width: 100%;"></textarea>
                                            <button class="site-btn" style="background-color: lightgreen; text-align: center; " >Yorumlayın</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>BENZER YAZILAR</h2>
            </div>
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
        </div>
    </section>

@endsection
@section('css')

@endsection

@section('js')

@endsection
