<?php get_header() ;?>
<?php
    $top = esc_url( home_url( '/' ) );
    $campaign = esc_url( home_url( '/campaign/' ) );
    $about = esc_url( home_url( '/about/' ) );
    $information = esc_url( home_url( '/information/' ) );
    $blog = esc_url( home_url( '/blog/' ) );
    $voice = esc_url( home_url( '/voice/' ) );
    $price = esc_url( home_url( '/price/' ) );
    $faq = esc_url( home_url( '/faq/' ) );
    $privacy = esc_url( home_url( '/privacy/' ) );
    $termsofservise = esc_url( home_url( '/terms-of-service/' ) );
    $contact = esc_url( home_url( '/contact/' ) );
    $sitemap = esc_url( home_url( '/sitemap/' ) );
?> 


    <!-- sub-fv -->
    <section class="page-imformation-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/imformation_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/imformation_fv_sp.jpg" alt="浜辺">
            </picture>
            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Information</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <div class="top-breadcrumb breadcrumb" >
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </div>

    
    
    <section id="page-imformation" class="page-imformation layout-information fish-logo">
        <div class="page-imformation__inner inner">
            <div class="page-imformation__contents">
                <ul class="page-imformation__tab js-tab-info">
                    <li class="page-imformation__tab-label">
                        <a href="#info1">
                            <span class="u-desktop"></span>
                            <span>ライセンス</span><br class="u-mobile" />
                            <span>講習</span>
                        </a>
                    </li>
                    <li class="page-imformation__tab-label page-imformation__tab-label--2">
                        <a href="#info2">
                            <span class="u-desktop"></span>
                            <span>体験</span><br class="u-mobile" />
                            <span>ダイビング</span>
                        </a>
                    </li>
                    <li class="page-imformation__tab-label page-imformation__tab-label--3">
                        <a href="#info3">
                            <span class="u-desktop"></span>
                            <span>ファン</span><br class="u-mobile" />
                            <span>ダイビング</span>
                        </a>
                    </li>
                </ul>
    
                <ul class="page-imformation__tab-cards">
                    <li class="page-imformation__card">
                        <div class="page-imformation__body">
                            <h3 class="page-imformation__title">ライセンス講習</h3>
                            <p class="page-imformation__text">
                            泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                            </p>
                        </div>
                        <div class="page-imformation__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-information1.jpg" alt="" />
                        </div>
                    </li>
    
                    <li class="page-imformation__card">
                        <div class="page-imformation__body">
                            <h3 class="page-imformation__title">体験ダイビング</h3>
                            <p class="page-imformation__text">
                            ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <div class="page-imformation__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-informatio3.jpg" alt="" />
                        </div>
                    </li>

                    <li class="page-imformation__card">
                        <div class="page-imformation__body">
                            <h3 class="page-imformation__title">ファンダイビング</h3>
                            <p class="page-imformation__text">
                            ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <div class="page-imformation__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-informatio2.jpg" alt="" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php get_footer() ;?> 