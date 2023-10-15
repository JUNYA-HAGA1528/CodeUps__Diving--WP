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
    <section class="voice-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice_fv_sp.jpg" alt="浜辺">
            </picture>
            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Voice</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <?php get_template_part('parts/breadcrumb') ?>     
    
    
    
    <section class="top-page-voice page-voice fish-logo">
        <div class="page-voice__inner inner">
            <div class="page-voice__tabs tab-parts">
                <ul class="tab-parts__flex">
                    <li class="tab-parts__tab"><a href="<?php echo $voice; ?>">ALL</a></li>
                    <?php
                        $terms = get_terms('voice_category');
                        foreach ($terms as $term):
                            $term_link = get_term_link($term);
                            $term_name = esc_html($term->name);
                            $active_class = (is_tax('voice_category', $term->slug)) ? 'current' : '';
                        ?>

                    <li class="tab-parts__tab <?= $active_class ?>">
                        <a href="<?= $term_link ?>"><?= $term_name ?></a>
                    </li>

                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="page-voice__container">
                <!-- ALL -->
                <div class="page-voice__wrapper">
                    <ul class="page-voice__list voice-cards">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
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
                                            <?php the_content(); ?>
                                        </p>
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