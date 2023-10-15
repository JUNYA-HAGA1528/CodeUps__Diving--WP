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

    <!-- breadcrumb -->
    <div class="top-breadcrumb top-breadcrumb--margin breadcrumb breadcrumb--padding">
        <div class="breadcrumb__inner inner">
            <ol class="breadcrumb__items">
                <!-- 1つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb__item breadcrumb__item--white">
                    <a itemprop="item" href="<?php echo $top ?>" class="breadcrumb__link breadcrumb__link--white">
                        <span itemprop="name">TOP</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
    
                <!-- 2つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb__item breadcrumb__item--white">
                    <span itemprop="item" href="campaign.html" class="breadcrumb__link breadcrumb__link--white">
                        <span itemprop="name">404</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    
    
    
    <section class="top-contact-error contact-error">
        <div class="contact-error__inner inner">
            <h2 class="contact-error_title">404</h2>
            <p class="contact-error_text">
                申し訳ありません。<br>
                お探しのページが見つかりません。
            </p>
            <div class="contact-error__button">
                <a href="<?php echo $top ?>" class="contact-error__button-white"><span>Page&nbsp;TOP</span></a>
            </div>
        </div>
    </section>
<?php get_footer() ;?>