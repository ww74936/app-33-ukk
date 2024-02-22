@extends('layout.template')
@section('konten')
    
<!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb__links">
                     <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                     <a href="{{ url('kategori') }}">Categories</a>
                     <span>Romance</span>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Breadcrumb End -->

 <!-- Product Section Begin -->
 <section class="product-page spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="product__page__content">
                     <div class="product__page__title">
                         <div class="row">
                             <div class="col-lg-8 col-md-8 col-sm-6">
                                 <div class="section-title">
                                     <h4>Romance</h4>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                    <a href="{{ url('detail-buku') }}">
                                        <div class="product__item__pic set-bg" data-setbg="img/popular/popular-1.jpg">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="#">Sen to Chihiro no Kamikakushi</a></h5>
                                        </div>
                                    </a>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/popular/popular-2.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/popular/popular-3.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/popular/popular-4.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Rurouni Kenshin: Meiji Kenkaku Romantan</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/popular/popular-5.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/popular/popular-6.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Monogatari Series: Second Season</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/recent/recent-1.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Great Teacher Onizuka</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/recent/recent-2.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/recent/recent-3.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/recent/recent-4.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Fate/Zero 2nd Season</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/recent/recent-5.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Kizumonogatari II: Nekket su-hen</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/recent/recent-6.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/trending/trend-1.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/trending/trend-2.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/trending/trend-3.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/trending/trend-4.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/trending/trend-5.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="img/trending/trend-6.jpg">
                                     <div class="ep">18 / 18</div>
                                     <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                     <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                 </div>
                                 <div class="product__item__text">
                                     <ul>
                                         <li>Active</li>
                                         <li>Movie</li>
                                     </ul>
                                     <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="product__pagination">
                     <a href="#" class="current-page">1</a>
                     <a href="#">2</a>
                     <a href="#">3</a>
                     <a href="#">4</a>
                     <a href="#">5</a>
                     <a href="#"><i class="fa fa-angle-double-right"></i></a>
                 </div>
             </div>
</div>
</div>
</div>
</div>
</section>
@endsection
<!-- Product Section End -->