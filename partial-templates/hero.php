<?php
    $hero_heading      =  get_field('homepage_hero__heading');
    $hero_sub_heading  =  get_field('homepage_hero__sub-heading');
    $hero_cta          =  get_field('homepage_hero__cta');
    $hero_img          =  get_field('homepage_hero__img');
?>
    
    <!-- Hero -->
    <header class="hero">
        <div class="container">

            <a href="#" class="hero__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/af-logo.svg" alt="">
            </a>

            <div class="hero__inner">
                <div class="hero__content">
                    <h1><?php echo $hero_heading; ?></h1>
                    <p>
                        <?php echo $hero_sub_heading; ?>
                    </p>

                    <ul>
                        <li>
                            <a href="<?php echo $hero_cta['the_demo_btn']['url']; ?>" class="btn btn--cta">
                                <?php echo $hero_cta['the_demo_btn']['title']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $hero_cta['the_link_btn']['url']; ?>" class="btn btn--link">
                            <?php echo $hero_cta['the_link_btn']['title']; ?>
                            </a>
                        </li>
                    </ul>
    
                </div>

                <div class="hero__img">
                    <img src="<?php echo $hero_img['url']; ?>" alt="<?php echo $hero_img['alt']; ?>">
                </div>
            </div>
        </div>
    </header>