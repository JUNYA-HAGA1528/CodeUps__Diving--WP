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
    <section class="campaign-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign_fv_sp.jpg" alt="浜辺">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Campaign</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <?php get_template_part('parts/breadcrumb') ?>     
    
    
    
    <section id="campaign"  class="layout-campaign page-campaign fish-logo">
        <div class="page-campaign__inner inner">
            <div class="page-campaign__tabs tab-parts">
                <ul class="tab-parts__flex">
                    <li class="tab-parts__tab"><a href="<?php echo $campaign; ?>">ALL</a></li>
                    <?php
                        $terms = get_terms('campaign_category');
                        foreach ($terms as $term):
                            $term_link = get_term_link($term);
                            $term_name = esc_html($term->name);
                            $active_class = (is_tax('campaign_category', $term->slug)) ? 'current' : '';
                        ?>

                    <li class="tab-parts__tab <?= $active_class ?>">
                        <a href="<?= $term_link ?>"><?= $term_name ?></a>
                    </li>

                    <?php endforeach; ?>
                </ul>
            </div>




            <div class="page-campaign__container">
                <!-- ALL -->
                <div class="page-campaign__wrapper">
                    <ul class="page-campaign__items">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
                            
                            
                                <li class="page-campaign__item page-campaign-card">
                                    <div class="page-campaign-card__img">
                                        <?php if ( get_the_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                        <?php else: ?>
                                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                        <?php endif; ?>                                    
                                    </div>
                                    <div class="page-campaign-card__body">
                                        <div class="page-campaign-card__heading">
                                            <?php
                                                $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                                                if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                                                    $term = array_shift($terms); // 最初のタームを取得
                                                    $cat_name = $term->name; // ターム名を取得
                                                    echo '<span class="page-campaign-card__meta">' . $cat_name . '</span>'; // ターム名を表示
                                                }
                                            ?>
                                        </div>
                                        <h3 class="page-campaign-card__title"><?php the_title(); ?></h3>
                                        <div class="page-campaign-card__wrapper">
                                            <p class="page-campaign-card__subtitle">全部コミコミ(お一人様)</p>
                                            <div class="page-campaign-card__price">
                                                <?php if( have_rows('campaign_price-group') ): the_row(); ?>
                                                    <?php $campaign_price1 = get_sub_field('campaign_price1'); ?>
                                                    <?php $campaign_price2 = get_sub_field('campaign_price2'); ?>

                                                    <div class="page-campaign-card__price-before"><?php echo $campaign_price1; ?></div>
                                                    <div class="page-campaign-card__price-after"><?php echo $campaign_price2; ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="page-campaign-card__text u-desktop">
                                            <?php the_content(); ?>
                                        </div>
                                        <p class="page-campaign-card__period u-desktop">
                                            <?php the_field('campaign_1'); ?>
                                        </p>
                                        <p class="page-campaign-card__inquiry u-desktop">ご予約・お問い合わせはコチラ</p>
                                        <div class="page-campaign-card__button u-desktop">
                                            <a href="<?php echo $contact ?>" class="button"><span>Contact&nbsp;as</span></a>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pagenavi">
            <div class="pagenavi__inner">
                <?php wp_pagenavi(); ?>            
            </div>
        </div>
    </section>
<?php get_footer() ;?>