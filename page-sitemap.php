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
    <section class="site-map-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/site-map_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/site-map_fv_sp.jpg" alt="浜辺">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Site MAP</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <div class="top-breadcrumb breadcrumb" >
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </div>
    
    

    <section class="top-site-map site-map fish-logo fish-logo--padding">
        <div class="site-map__inner inner">

            <div class="site-map__body">
                <div class="site-map__wrapper">
                    <div class="site-map__container nav-list">
                        <ul class="nav-list__items">
                            <li class="nav-list__item">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $campaign ?>">キャンペーン</a>
                                </div>
                                <div class="nav-list__item-normal">
                                    <?php
                                        $terms = get_terms('campaign_category');
                                        foreach ( $terms as $term ) {
                                        echo '<a href="'.get_term_link($term).'">'.esc_html($term->name).'</a>';
                                        }
                                    ?>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $about ?>">私たちについて</a>
                                </div>
                            </li>
                        </ul>
                    </div>






                    <div class="site-map__container site-map__container--space nav-list">
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $information ?>">ダイビング情報</a>
                                </div>
                                <ul class="nav-list__item js-tab-link-footer nav-list__item-normal">
                                    <li>
                                        <a href="<?php echo esc_url( home_url( '/information#info1' ) ); ?>">ライセンス講習</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo esc_url( home_url( '/information#info2' ) ); ?>">体験ダイビング</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo esc_url( home_url( '/information#info3' ) ); ?>">ファンダイビング</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $blog ?>">ブログ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>







                <div class="site-map__wrapper site-map__wrapper--space">
                    <div class="site-map__container site-map__container--space nav-list">
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $voice ?>">お客様の声</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $price ?>">料金一覧</a>
                                </div>
                                <div class="nav-list__item-normal">
                                    <a href="<?php echo esc_url( home_url( '/price#price1' ) ); ?>">ライセンス講習</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price2' ) ); ?>">体験ダイビング</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price3' ) ); ?>">ファンダイビング</a>
                                </div>
                            </li>
                        </ul>
                    </div>







                    <div class="site-map__container site-map__container--space nav-list">
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $faq ?>">よくある質問</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $privacy ?>">プライバシー<br class="u-mobile">ポリシー</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $termsofservise ?>">利用規約</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $contact ?>">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-list__items">
                            <li class="nav-list__item nav-list__item--black">
                                <div class="nav-list__item-title nav-list__item-title--logo">
                                    <a href="<?php echo $sitemap ?>">Site MAP</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ;?>