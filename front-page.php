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

    <!-- fv -->
    <section class="fv">
        <div class="swiper js-fv-swiper">
            <div class="swiper-wrapper">
                <?php
                    $group_name = get_field('group1');	
                    if( $group_name ): 
                ?>
                    <div class="swiper-slide">
                        <div class="fv__slide">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo $group_name['mv_img1']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                                <img src="<?php echo $group_name['mv_img2']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                            </picture>
                        </div>
                    </div>   
                <?php endif; ?>

                <?php
                    $group_name = get_field('group2');	
                    if( $group_name ): 
                ?>
                    <div class="swiper-slide">
                        <div class="fv__slide">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo $group_name['mv_img1']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                                    <img src="<?php echo $group_name['mv_img2']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                            </picture>
                        </div>
                    </div> 
                <?php endif; ?> 
                
                <?php
                    $group_name = get_field('group3');	
                    if( $group_name ): 
                ?>
                    <div class="swiper-slide">
                        <div class="fv__slide">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo $group_name['mv_img1']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                                    <img src="<?php echo $group_name['mv_img2']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                            </picture>
                        </div>
                    </div> 
                <?php endif; ?> 

                <?php
                    $group_name = get_field('group4');	
                    if( $group_name ): 
                ?>
                    <div class="swiper-slide">
                        <div class="fv__slide">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo $group_name['mv_img1']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                                    <img src="<?php echo $group_name['mv_img2']; ?>" alt="<?php echo $group_name['mv_img_alt']; ?>">
                            </picture>
                        </div>
                    </div> 
                <?php endif; ?> 
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
                    <?php
                        $args = array('post_type' => 'campaign',
                        'posts_per_page' => -1); 
                        $the_query = new WP_Query($args); 
                    ?>
                    <ul class="campaign-cards__items swiper-wrapper">
                        <?php if($the_query->have_posts()): ?>
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <li class="campaign-cards__item  swiper-slide">
                                    <div class="campaign-card">
                                        <div class="campaign-card__img">
                                            <?php if ( get_the_post_thumbnail() ) : ?>
                                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                            <?php else: ?>
                                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                            <?php endif; ?>                                    
                                        </div>
                                        <div class="campaign-card__body">
                                            <div class="campaign-card__heading">
                                                <?php
                                                    $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                                                    if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                                                        $term = array_shift($terms); // 最初のタームを取得
                                                        $cat_name = $term->name; // ターム名を取得
                                                        echo '<span class="page-campaign-card__meta">' . $cat_name . '</span>'; // ターム名を表示
                                                    }
                                                ?>
                                            </div>
                                            <h3 class="campaign-card__title">
                                                <?php the_title(); ?>
                                            </h3>
                                            <div class="campaign-card__wrapper">
                                                <p class="campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                                <div class="page-campaign-card__price">
                                                    <?php if( have_rows('campaign_price-group') ): the_row(); ?>
                                                        <?php $campaign_price1 = get_sub_field('campaign_price1'); ?>
                                                        <?php $campaign_price2 = get_sub_field('campaign_price2'); ?>

                                                        <div class="page-campaign-card__price-before"><?php echo $campaign_price1; ?></div>
                                                        <div class="page-campaign-card__price-after"><?php echo $campaign_price2; ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); endif; ?>
                    </ul>
                </div>
                <div class="swiper-button">
                    <div class="swiper-button-prev js-campaign-button-prev u-desktop"></div>
                    <div class="swiper-button-next js-campaign-button-next u-desktop"></div>
                </div>
                <div class="campaign__button">
                    <a href="<?php echo $campaign ?>" class="button"><span>View&nbsp;more</span></a>
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
                            <a href="<?php echo $about ?>" class="button"><span>View&nbsp;more</span></a>
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
                            <a href="<?php echo $information ?>" class="button"><span>View&nbsp;more</span></a>
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
                    <?php
                        $args = array('post_type' => 'post',
                        'posts_per_page' => 3); 
                        $the_query = new WP_Query($args); 
                    ?>
                    <?php if($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <li class="blog-cards__item blog-card">
                                <a href="<?php the_permalink(); ?>" class="blog-card__link">
                                    <div class="blog-card__img">
                                        <?php if ( get_the_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                        <?php else: ?>
                                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                        <?php endif; ?>                                    
                                    </div>
                                    <div class="blog-card__content">
                                        <time datetime="<?php the_time("c"); ?>" class="blog-card__data"><?php the_time("Y.m.d"); ?></time>
                                        <h3 class="blog-card__title"><?php the_title(); ?></h3>
                                        <p class="blog-card__text">
                                            <?php echo wp_trim_words( get_the_content(), 100, '…' ); ?>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); endif; ?>        
                </ul>
                <div class="blog__button">
                    <a href="<?php echo $blog ?>" class="button"><span>View&nbsp;more</span></a>
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
                    <?php
                        $args = array('post_type' => 'voice',
                        'posts_per_page' => 2); 
                        $the_query = new WP_Query($args); 
                    ?>
                    <?php if($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <li class="voice-cards__item voice-card">
                                <div class="voice-card__head">
                                    <div class="voice-card__head-left">
                                        <div class="voice-card__head-flex">
                                            <div class="voice-card__head-flex--flex">
                                                <p class="voice-card__gender"><?php the_field('voice_1'); ?></p>
                                                <p class="voice-card__gender">(<?php the_field('voice_2'); ?>)</p>
                                            </div>
                                            <?php
                                                $terms = get_the_terms(get_the_ID(), 'voice_category'); // カスタムタクソノミーのタームを取得
                                                if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                                                    $term = array_shift($terms); // 最初のタームを取得
                                                    $cat_name = $term->name; // ターム名を取得
                                                    echo '<span class="voice-card__meta">' . $cat_name . '</span>'; // ターム名を表示
                                                }
                                            ?>
                                        </div>
                                        <p class="voice-card__title">
                                            <?php the_title(); ?>
                                        </p>
                                    </div>
                                    <div class="voice-card__head-right colorbox js-colorbox">
                                        <?php if ( get_the_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                        <?php else: ?>
                                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                        <?php endif; ?>                                    
                                    </div>
                                </div>
                                <div class="voice-card__sentence">
                                    <p class="voice-card__text">
                                        <?php echo wp_trim_words( get_the_content(), 150, '…' ); ?>
                                    </p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); endif; ?>
                </ul>
                <div class="voice__button">
                    <a href="<?php echo $voice ?>" class="button"><span>View&nbsp;more</span></a>
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
                            <?php
                                $price_item = SCF::get_option_meta('theme-options-pricing' ,'license');
                                foreach ($price_item as $fields):
                            ?>
                                <div class="price__item">
                                    <dt>
                                        <?php echo $fields['course1']; ?>
                                    </dt>
                                    <dd>
                                        <?php echo '¥'.$fields['price1']; ?>
                                    </dd>
                                </div>
                            <?php endforeach; ?>
                        </dl>
                        
                        <dl class="price__items">
                            <h3 class="price__title">体験ダイビング</h3>
                            <?php
                                $price_item = SCF::get_option_meta('theme-options-pricing' ,'experience');
                                foreach ($price_item as $fields):
                            ?>
                                <div class="price__item">
                                    <dt>
                                        <?php echo $fields['course2']; ?>
                                    </dt>
                                    <dd>
                                        <?php echo '¥'.$fields['price2']; ?>
                                    </dd>
                                </div>
                            <?php endforeach; ?>
                        </dl>

                        <dl class="price__items">
                            <h3 class="price__title">ファンダイビング</h3>
                            <?php
                                $price_item = SCF::get_option_meta('theme-options-pricing' ,'fun');
                                foreach ($price_item as $fields):
                            ?>
                                <div class="price__item">
                                    <dt>
                                        <?php echo $fields['course3']; ?>
                                    </dt>
                                    <dd>
                                        <?php echo '¥'.$fields['price3']; ?>
                                    </dd>
                                </div>
                            <?php endforeach; ?>
                        </dl>

                        <dl class="price__items">
                            <h3 class="price__title">スペシャルダイビング</h3>
                            <?php
                                $price_item = SCF::get_option_meta('theme-options-pricing' ,'special');
                                foreach ($price_item as $fields):
                            ?>
                                <div class="price__item">
                                    <dt>
                                        <?php echo $fields['course4']; ?>
                                    </dt>
                                    <dd>
                                        <?php echo '¥'.$fields['price4']; ?>
                                    </dd>
                                </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                </div>
                <div class="price__button">
                    <a href="<?php echo $price ?>" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>
<?php get_footer() ;?>