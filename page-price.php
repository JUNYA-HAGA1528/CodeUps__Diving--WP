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
    <section class="price-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_fv_sp.jpg" alt="浜辺">
            </picture>
            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Price</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <?php get_template_part('parts/breadcrumb') ?>     
    
    

    <div class="top-page-price page-price fish-logo">
        <div class="page-price__inner inner">

            <ul class="page-price__items">
                <li id="price1" class="page-price__item">
                    <h3 class="page-price__title">
                        <span class="page-price__img u-desktop">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_icon.png" alt=""/>
                        </span>
                        <span>ライセンス講習</span>
                    </h3>
                    <dl class="page-price__list">
                        <?php
                            $price_item = SCF::get_option_meta('theme-options-pricing' ,'license');
                            foreach ($price_item as $fields):
                        ?>
                            <div>
                                <dt>
                                    <?php echo $fields['course1']; ?>
                                </dt>
                                <dd>
                                    <?php echo '¥'.$fields['price1']; ?>
                                </dd>
                            </div>
                        <?php endforeach; ?>
                    </dl>
                </li>

                <li id="price2" class="page-price__item">
                    <h3 class="page-price__title">
                        <span class="page-price__img u-desktop">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_icon.png" alt=""/>
                        </span>
                        <span>体験ダイビング</span>
                    </h3>
                    <dl class="page-price__list">
                        <?php
                            $price_item = SCF::get_option_meta('theme-options-pricing' ,'experience');
                            foreach ($price_item as $fields):
                        ?>
                            <div>
                                <dt>
                                    <?php echo $fields['course2']; ?>
                                </dt>
                                <dd>
                                    <?php echo '¥'.$fields['price2']; ?>
                                </dd>
                            </div>
                        <?php endforeach; ?>
                    </dl>
                </li>
                <li id="price3" class="page-price__item">
                    <h3 class="page-price__title">
                        <span class="page-price__img u-desktop">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_icon.png" alt=""/>
                        </span>
                        <span>ファンダイビング</span>
                    </h3>
                    <dl class="page-price__list">
                        <?php
                            $price_item = SCF::get_option_meta('theme-options-pricing' ,'fun');
                            foreach ($price_item as $fields):
                        ?>
                            <div>
                                <dt>
                                    <?php echo $fields['course3']; ?>
                                </dt>
                                <dd>
                                    <?php echo '¥'.$fields['price3']; ?>
                                </dd>
                            </div>
                        <?php endforeach; ?>
                    </dl>
                </li>
                <li class="page-price__item">
                    <h3 id="price4" class="page-price__title">
                        <span class="page-price__img u-desktop">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_icon.png" alt=""/>
                        </span>
                        <span>スペシャルダイビング</span>
                    </h3>
                    <dl class="page-price__list">
                        <?php
                            $price_item = SCF::get_option_meta('theme-options-pricing' ,'special');
                            foreach ($price_item as $fields):
                        ?>
                            <div>
                                <dt>
                                    <?php echo $fields['course4']; ?>
                                </dt>
                                <dd>
                                    <?php echo '¥'.$fields['price4']; ?>
                                </dd>
                            </div>
                        <?php endforeach; ?>
                    </dl>
                </li>
            </ul>
    
        </div>
    </div>
<?php get_footer() ;?>