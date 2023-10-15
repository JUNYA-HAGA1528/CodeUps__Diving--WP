<?php get_header() ;?>        
    <!-- fv -->
    <section class="fv">
        <div class="swiper js-fv-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_pc_1.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_sp_1.jpg" alt="ウミガメ単体">
                        </picture>
                    </div>
                </div>   
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_pc_2.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_sp_2.jpg" alt="ウミガメとダイバー">
                        </picture>
                    </div>
                </div>  
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_pc_3.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_sp_3.jpg" alt="海上の船">
                        </picture>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_pc_4.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_sp_4.jpg" alt="浜辺">
                        </picture>
                    </div>
                </div>   
            </div>
            <div class="fv__heading heading">
                <h2 class="heading__title">diving</h2>
                <p class="heading__subtitle">into&nbsp;the&nbsp;ocean</p>
            </div>
        </div>
    </section>
    
    
    <main>
        <!-- campaign -->
        <section class="top-campaign campaign">
            <div class="campaign__inner inner">

                <!-- タイトル 再利用 -->
                <div class="campaign__title section-title">
                    <p class="section-title__en">campaign</p>
                    <h2 class="section-title__jp">キャンペーン</h2>
                </div>
                <!-- タイトル 再利用 -->

                <div class="campaign__slider campaign-cards swiper js-campaign-swiper">
                    <ul class="campaign-cards__items swiper-wrapper">
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign1.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">ライセンス講習</p>
                                    </div>
                                    <h3 class="campaign-card__title">ライセンス取得</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;56&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;46&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign2.jpg" alt="波辺と船">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">体験ダイビング</p>
                                    </div>
                                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;24&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;18&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign3.jpg" alt="クラゲの大群">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">体験ダイビング</p>
                                    </div>
                                    <h3 class="campaign-card__title">体験ダイビング</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;10&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;8&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign4.jpg" alt="水面にいるダイバー">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">ファンダイビング</p>
                                    </div>
                                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;20&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;16&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign1.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">ライセンス講習</p>
                                    </div>
                                    <h3 class="campaign-card__title">ライセンス取得</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;56&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;46&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign2.jpg" alt="波辺と船">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">体験ダイビング</p>
                                    </div>
                                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;24&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;18&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign3.jpg" alt="クラゲの大群">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">体験ダイビング</p>
                                    </div>
                                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;10&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;8&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign4.jpg" alt="水面にいるダイバー">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">ファンダイビング</p>
                                    </div>
                                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">&yen;20&#44;000</div>
                                            <div class="campaign-card__price-after">&yen;16&#44;000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="swiper-button">
                    <div class="swiper-button-prev js-campaign-button-prev u-desktop"></div>
                    <div class="swiper-button-next js-campaign-button-next u-desktop"></div>
                </div>
                <div class="campaign__button">
                    <a href="campaign.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>

        <!-- about -->
        <section class="top-about about">
            <div class="about__inner inner">

                <div class="about__title section-title">
                    <p class="section-title__en">About us</p>
                    <h2 class="section-title__jp">私たちについて</h2>
                </div>
                
                <div class="about__img">
                    <div class="about__img-left">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about1.jpg" alt="シーサーが屋根の上にいる">
                    </div>
                    <div class="about__img-right">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about2.jpg" alt="黄色い魚が泳ぐ">
                    </div>
                </div>
                <div class="about__content">
                    <div class="about__heading">
                        <h3 class="about__heading-title">Dive&nbsp;into<br>the&nbsp;Ocean</h3>
                    </div>
                    <div class="about__sentence">
                        <p class="about__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                        <div class="about__button">
                            <a href="about.html" class="button"><span>View&nbsp;more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- information -->
        <section class="top-information information">
            <div class="information__inner inner">

                <div class="information__title section-title">
                    <p class="section-title__en">Information</p>
                    <h2 class="section-title__jp">ダイビング情報</h2>
                </div>
                
                <div class="information__flex">
                    <div class="information__img colorbox js-colorbox">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/imformation1.jpg" alt="イソギンチャクとオレンジの魚">
                    </div>
                    
                    <div class="information__content">
                        <h3 class="information__content-title">ライセンス講習</h3>
                        <p class="information__text">
                            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                        </p>
                        <div class="information__button">
                            <a href="information.html" class="button"><span>View&nbsp;more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog -->
        <section class="top-blog blog">
            <div class="blog__bg u-desktop">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog1.jpg" alt="水面のアップ">
            </div>
            <div class="blog__inner inner">

                <div class="blog__title section-title">
                    <p class="section-title__en section-title__en--white">Blog</p>
                    <h2 class="section-title__jp section-title__jp--white">ブログ</h2>
                </div>
            
                <ul class="blog__list blog-cards">
                    <li class="blog-cards__item blog-card">
                        <a href="" class="blog-card__link">
                            <div class="blog-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_card_1.jpg" alt="海中にある珊瑚">
                            </div>
                            <div class="blog-card__content">
                                <time class="blog-card__data">2023.11/17</time>
                                <h3 class="blog-card__title">ライセンス取得</h3>
                                <p class="blog-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="blog-cards__item blog-card">
                        <a href="" class="blog-card__link">
                            <div class="blog-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_card_2.jpg" alt="ウミガメのアップ">
                            </div>

                            <div class="blog-card__content">
                                <time class="blog-card__data">2023.11/17</time>
                                <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                                <p class="blog-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="blog-cards__item blog-card">
                        <a href="" class="blog-card__link">
                            <div class="blog-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_card_3.jpg" alt="イソギンチャクとカクレクマノミ">
                            </div>

                            <div class="blog-card__content">
                                <time class="blog-card__data">2023.11/17</time>
                                <h3 class="blog-card__title">カクレクマノミ</h3>
                                <p class="blog-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="blog__button">
                    <a href="blog.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>

        <!-- voice -->
        <section class="top-voice voice">
        <div class="voice-picture"></div>
            <div class="voice__inner inner">

                <div class="voice__title section-title">
                    <p class="section-title__en">Voice</p>
                    <h2 class="section-title__jp">お客様の声</h2>
                </div>
                
                <ul class="voice__list voice-cards">
                    <li class="voice-cards__item voice-card">
                        <a href="" class="voice-card__link">
                            <div class="voice-card__head">
                                <div class="voice-card__head-left">
                                    <div class="voice-card__head-flex">
                                        <p class="voice-card__gender">20代(女性)</p>
                                        <h3 class="voice-card__meta">ライセンス講習</h3>
                                    </div>
                                    <p class="voice-card__title">
                                        ここにタイトルが入ります。ここにタイトル
                                    </p>
                                </div>
                                <div class="voice-card__head-right colorbox js-colorbox">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice1.jpg" alt="女性">
                                </div>
                            </div>
                            <div class="voice-card__sentence">
                                <p class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="voice-cards__item voice-card">
                        <a href="" class="voice-card__link">
                            <div class="voice-card__head">
                                <div class="voice-card__head-left">
                                    <div class="voice-card__head-flex">
                                        <p class="voice-card__gender">30代(男性)</p>
                                        <h3 class="voice-card__meta">ファンダイビング</h3>
                                    </div>
                                    <p class="voice-card__title">
                                        ここにタイトルが入ります。ここにタイトル
                                    </p>
                                </div>
                                <div class="voice-card__head-right colorbox js-colorbox">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice2.jpg" alt="男性">
                                </div>
                            </div>
                            <div class="voice-card__sentence">
                                <p class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="voice__button">
                    <a href="voice.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>

        <!-- price -->
        <section class="top-price price">
            <div class="price__inner inner">

                <div class="price-title section-title">
                    <p class="section-title__en">Price</p>
                    <h2 class="section-title__jp">料金一覧</h2>
                </div>

                <div class="price__body">
                    <div class="price__img colorbox js-colorbox">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_pc.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_sp.jpg" alt="スマホ時の画像">
                        </picture>
                    </div>
                    <div class="price__menu">
                        <dl class="price__items">
                            <h3 class="price__title">ライセンス講習</h3>
                            <div class="price__item">
                                <dt>オープンウォーターダイバーコース</dt>
                                <dd>¥50,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>アドバンスドオープンウォーターコース</dt>
                                <dd>¥60,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>レスキュー＋EFRコース</dt>
                                <dd>¥70,000</dd>
                            </div>
                        </dl>
                        <dl class="price__items">
                            <h3 class="price__title">体験ダイビング</h3>
                            <div class="price__item">
                                <dt>ビーチ体験ダイビング(半日)</dt>
                                <dd>¥7,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>ビーチ体験ダイビング(1日)</dt>
                                <dd>¥14,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>ボート体験ダイビング(半日)</dt>
                                <dd>¥10,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>ボート体験ダイビング(半日)</dt>
                                <dd>¥18,000</dd>
                            </div>
                        </dl>
                        <dl class="price__items">
                            <h3 class="price__title">ファンダイビング</h3>
                            <div class="price__item">
                                <dt>ビーチダイビング(2ダイブ)</dt>
                                <dd>¥14,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>ボートダイビング(2ダイブ)</dt>
                                <dd>¥18,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>スペシャルダイビング(2ダイブ)</dt>
                                <dd>¥24,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>ナイトダイビング(1ダイブ)</dt>
                                <dd>¥10,000</dd>
                            </div>
                        </dl>
                        <dl class="price__items">
                            <h3 class="price__title">スペシャルダイビング</h3>
                            <div class="price__item">
                                <dt>貸切ダイビング(2ダイブ)</dt>
                                <dd>¥24,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>1日ダイビング(3ダイブ)</dt>
                                <dd>¥32,000</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="price__button">
                    <a href="price.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>
<?php get_footer() ;?>