<?php
    $features_heading = get_field('homepage_features__heading');

    $features_item_1  = get_field('homepage_features__item-1');
    $features_item_2  = get_field('homepage_features__item-2');
    $features_item_3  = get_field('homepage_features__item-3');
    $features_item_3  = get_field('homepage_features__item-3');
    $features_item_4  = get_field('homepage_features__item-4');
?>
       
   <!-- Features -->
    <section class="features">
        <div class="container">

            <h2><?php echo $features_heading; ?></h2>

            <div class="features__inner">
                <!-- Feature item -->
                <figure class="features__item">
                    <img src="<?php echo $features_item_1['the_icon']; ?>" alt="icon 1">
                    <figcaption>
                        <h4><?php echo $features_item_1['the_title']; ?></h4>
                        <p>
                            <?php echo $features_item_1['the_text']; ?>
                        </p>
                    </figcaption>
                </figure>
                <!-- Feature item -->
                <figure class="features__item">
                    <img src="<?php echo $features_item_2['the_icon']; ?>" alt="icon 2">
                    <figcaption>
                        <h4><?php echo $features_item_2['the_title']; ?></h4>
                        <p>
                            <?php echo $features_item_2['the_text']; ?>
                        </p>
                    </figcaption>
                </figure>
                <!-- Feature item -->
                <figure class="features__item">
                    <img src="<?php echo $features_item_3['the_icon']; ?>" alt="icon 3">
                    <figcaption>
                        <h4><?php echo $features_item_3['the_title']; ?></h4>
                        <p>
                            <?php echo $features_item_3['the_text']; ?>
                        </p>
                    </figcaption>
                </figure>
                <!-- Feature item -->
                <figure class="features__item">
                    <img src="<?php echo $features_item_4['the_icon']; ?>" alt="icon 4">
                    <figcaption>
                        <h4><?php echo $features_item_4['the_title']; ?></h4>
                        <p>
                            <?php echo $features_item_4['the_text']; ?>
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>