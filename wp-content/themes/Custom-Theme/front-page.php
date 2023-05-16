<?php
    $args = array(
        'post_type' => 'story',
        'posts_per_page' => 5,
    );
    $story_title_args = array(
        'post_type' => 'story-title',
        'posts_per_page' => 1,
    );
    $hero_args = array(
        'post_type' => 'hero',
        'posts_per_page' => 1,
    );
    $sustainability_args = array(
        'post_type' => 'sustainability-eff',
        'posts_per_page' => 3,
    );
    $sustainability_title_args = array(
        'post_type' => 'sustainability-title',
        'posts_per_page' => 1,  
    );
    $franchise_args = array(
        'post_type' => 'open-franchise',
        'post_per_page' => 1,
    );
    $explore_args = array(
        'post_type' => 'explore-links',
        'post_per_page' => 2,
    );
    $trivia_args = array(
        'post_type' => 'trivia',
        'post_per_page' => 5,
    );
    $featured_articles_args = array(
        'post_type' => 'featured-articles',
        'post_per_page' => 4,
    );
    $galleries_args = array(
        'post_type' => 'gallery',
        'post_per_page' => 5,
    );
    $hero_query = new WP_Query ( $hero_args );
    $story_query = new WP_Query( $args );
    $story_title_query = new WP_Query ( $story_title_args );
    $sustainability_query = new WP_Query( $sustainability_args );
    $sustainability_title_query = new WP_Query( $sustainability_title_args ); 
    $franchise_query = new WP_Query( $franchise_args );
    $explore_query = new WP_Query( $explore_args );
    $trivia_query = new WP_Query( $trivia_args );
    $featured_articles_query = new WP_Query( $featured_articles_args );
    $galleries_query = new WP_Query( $galleries_args );
    get_header(); 
?>
<div class="front-page">
    <div class="hero-container">
        <div class="hero-container-row">
            <div class="hero-content">
                <?php if ( $hero_query->have_posts() ) : $hero_query->the_post(); ?>
                    <?php
                        $value = get_field( "title" );
                        if( $value ) {
                            echo '<h1>' . $value . '</h1>';
                        } else {
                            echo 'empty'; 
                        }
                        $value = get_field( "content" );
                        if( $value ) {
                            echo '<p>' . $value . '</p>';
                        } else {
                            echo 'empty'; 
                        }
                        $value = get_field( "button_1" );
                        if( $value ) {
                            echo '<div class="hero-content-footer"> <button class="general_button transparent_button">' . $value . '</button>';
                        } else {
                            echo 'empty'; 
                        }
                        $value = get_field( "button_2" );
                        if( $value ) {
                            echo '<button class="general_button blue_button">' . $value . '</button></div></div>';
                        } else {
                            echo 'empty'; 
                        }
                        $value = get_field( "image", false, false );
                        if( $value ) {
                            echo '<div class="hero-image><img class="hero-image-file">' . wp_get_attachment_image( $value, array(600, 600) ) . '</img></div>';
                        } else {
                            echo 'empty'; 
                        } 
                    ?>
                <?php endif; ?>
            <!-- <div class="hero-content">
                <div class="hero-content-body"> 
                    <h1>CREATING<br> DUNKIN'-FILLED MEMORIES FOR GENERATIONS</h1>
                    <p>For over 40 years, we have been creating lasting memories with the Filipinos the way only Dunkin' can.</p>
                </div>
                <div class="hero-content-footer">
                    <button class="general_button transparent_button">FRANCHISE WITH US</button>
                    <button class="general_button blue_button">EXPLORE MENU</button>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://dev-api.dunkindonuts.ph/storage/uploads/banner/2023-02-13/dunkinhomepage-mini_15-18-16-035132.png" width="100%" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page">
            </div> -->
        </div>
    </div>
    <div class="hero-container-footer">
            <img src="https://dev-api.dunkindonuts.ph/storage/uploads/Banner/2022-12-20/bg-drip-1_15-45-44-181169.png" width="100%" alt="test" loading="lazy" title="test">
        </div>
    <div class="cards-container">
        <?php if ( $story_title_query->have_posts() ) : $story_title_query->the_post(); ?>
            <div class="cards-header">
                <?php 
                    $value = get_field( "title" );
                    if( $value ) {
                        echo '<h1>' . $value . '</h1>';
                    } else {
                        echo 'empty'; 
                    }
                    $value = get_field( "content" );
                    if( $value ) {
                        echo '<p>' . $value . '</p>';
                    } else {
                        echo 'empty'; 
                    }
                    $value = get_field( "button" );
                    if( $value ) {
                        echo '<button class="general_button blue_button2">' . $value . '</button>';
                    } else {
                        echo 'empty'; 
                    }
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <!-- <div class="cards-header">
            <h1>THE DUNKIN STORY</h1>
            <p>It's a success that started in 1950 as a single donut shop in <br>Massachusetts, and now includes over 9,800 shops.</p>
            <button class="general_button blue_button2">ABOUT US</button>
        </div> -->
        <?php if ( $story_query->have_posts() ) : ?>
            <div class="cards-content">
                <?php while ( $story_query->have_posts() ) : $story_query->the_post(); ?>
                    <div class="cards-content-body-container">
                        <div class="cards-content-body">
                            <?php
                                $value = get_field( "image", false, false );
                                    if( $value ) {
                                        echo '<picture class="cards-content-img">' . wp_get_attachment_image( $value ) . '</picture>';
                                    } else {
                                        echo 'empty'; 
                                    } 
                                $value = get_field( "title" );
                                    if( $value ) {
                                        echo '<h1>' . $value . '</h1>';
                                    } else {
                                        echo 'empty'; 
                                    }
                                $value = get_field( "sub-title" );
                                    if( $value ) {
                                        echo '<h2>' . $value . '</h2>';
                                    } else {
                                        echo 'empty'; 
                                    } 
                                $value = get_field( "content" );
                                    if( $value ) {
                                        echo '<p>' . $value . '</p>';
                                    } else {
                                        echo 'empty'; 
                                    }
                            ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
        <!-- <div class="cards-content">
            <div class="cards-content-body-container">
                <div class="cards-content-body">
                    <picture class="cards-content-img"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" alt=""></picture>
                    <h1>73</h1>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
            <div class="cards-content-body-container">
                <div class="cards-content-body">
                    <picture class="cards-content-img"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon2-svg_15-18-52-017391.svg" alt=""></picture>
                    <h1>73</h1>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
            <div class="cards-content-body-container">
                <div class="cards-content-body">
                <picture class="cards-content-img"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon3-svg_15-19-13-858622.svg" alt=""></picture>
                    <h1>73</h1>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
            <div class="cards-content-body-container">
                <div class="cards-content-body">
                    <picture class="cards-content-img"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon4-svg_15-19-46-594458.svg" alt=""></picture>
                    <h1>73</h1>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
            <div class="cards-content-body-container">
                <div class="cards-content-body">
                    <picture class="cards-content-img"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon5-svg_15-20-09-394143.svg" alt=""></picture>
                    <h1>73</h1>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
        </div> -->
    </div>
    <div class="swiper-container">
        <div class="swiper-header">
            <h1>A DOZEN THINGS YOU DIDN'T<br>KNOW ABOUT DUNKIN'</h1>
        </div>
        <?php if ( $trivia_query->have_posts() ) : ?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php while ( $trivia_query->have_posts() ) : $trivia_query->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="swipe_container">
                                <div class="swipe_left_container">
                                    <?php
                                        $value = get_field( "trivia" );
                                            if( $value ) {
                                                echo '<p class="swipe_subhead">' . $value . '</p>';
                                            } else {
                                                echo 'empty'; 
                                            }
                                        $value = get_field( "title" );
                                            if( $value ) {
                                                echo '<p class="swipe_header">' . $value . '</p>';
                                            } else {
                                                echo 'empty'; 
                                            } 
                                        $value = get_field( "content" );
                                            if( $value ) {
                                                echo '<p class="swipe_text">' . $value . '</p></div>';
                                            } else {
                                                echo 'empty'; 
                                            }
                                        $value = get_field( "image", false, false );
                                            if( $value ) {
                                                echo '<div class="swipe_right_container"><picture class="cards-content-img">' . wp_get_attachment_image( $value, array(600, 600) ) . '</picture>';
                                            } else {
                                                echo 'empty'; 
                                            } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        <?php endif; ?>
        <!-- <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-color:#FF6E0E">
                    <div class="swipe_container">
                        <div class="swipe_left_container">
                            <p class="swipe_subhead">TRIVIA</p>
                            <p class="swipe_header">CHOCO BUTTERNUT IS PROUDLY PINOY!!!</p>
                            <p class="swipe_text">The iconic Choco Butternut is a proudly a product of Filipino ingenuity. For the longest time, this Filipino favorite is only available in the Philippines. It has become a classic treat loved by people of all ages.</p>
                        </div>
                        <div class="swipe_right_container">
                            <img src="https://dev-api.dunkindonuts.ph/storage/uploads/banner/2023-02-13/dunkinhomepage-mini_15-18-16-035132.png" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page" class="swipe_image">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <div class="swipe_container">
                        <div class="swipe_left_container">
                            <p class="swipe_subhead">TRIVIA</p>
                            <p class="swipe_header">MANY THOUGHT DUNKIN' IS A LOCAL BRAND</p>
                            <p class="swipe_text">Dunkin' has been bringing smiles to Filipinos for four decades. Filipinos love DUnkin' so much that they believe it is a local brand. This only shows how deeply ingrained the brand is in our culture.</p>
                        </div>
                        <div class="swipe_right_container">
                            <img src="https://dev-api.dunkindonuts.ph/storage/uploads/trivia/2023-03-21/dunkintrivia2-img-revised2_10-55-59-723320.webp" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page" class="swipe_image">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#FF6E0E">
                    <div class="swipe_container">
                        <div class="swipe_left_container">
                            <p class="swipe_subhead">TRIVIA</p>
                            <p class="swipe_header">DUNKIN' STARTED BIG WITH 52 DONUT VARIETIES!</p>
                            <p class="swipe_text">Dunkin' shot to fame in the 1950s when it did something unheard of at the time-offering 42 different varieties of donuts. The wide range of offerings allowed the brand to highlight one variety of donut every week.</p>
                        </div>
                        <div class="swipe_right_container">
                            <img src="https://dev-api.dunkindonuts.ph/storage/uploads/trivia/2023-03-21/dunkintrivia3-img-revised_10-59-04-096176.webp" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page" class="swipe_image">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#f20c90">
                    <div class="swipe_container">
                        <div class="swipe_left_container">
                            <p class="swipe_subhead">TRIVIA</p>
                            <p class="swipe_header">DUNKIN' STARTED AS A FOOD TRUCK BUSINESS</p>
                            <p class="swipe_text">Before the coffee and the donuts, Bill Rosenberg started a food truck business named Industrial Luncheon Services Company, designed to feed workers during World War II. At the height of its operations, Bill noticed that almost half of his company's sales came from coffee and donuts. The inspired him to start a restaurant called the Open Kettle, which offered his best-sellers. After two years, it became the DUnkin' we all know and love.</p>
                        </div>
                        <div class="swipe_right_container">
                            <img src="https://dev-api.dunkindonuts.ph/storage/uploads/trivia/2023-03-21/dunkintrivia4-img-revised3_11-09-11-806163.webp" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page" class="swipe_image">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <div class="swipe_container">    
                        <div class="swipe_left_container">
                            <p class="swipe_subhead">TRIVIA</p>
                            <p class="swipe_header">DUNKIN' HAD ITS OWN ICONIC CHARACTER</p>
                            <p class="swipe_text">In 1982, Dunkin' was represented by its longtime sleepy-eyed ambassador, Fred the Baker. He starred in one of the brand's most popular ad campaigns and became famous for his catchphrase. "Time to make donuts!" He was well-loved by Dunkin's patrons until his retirement in 1997.</p>
                        </div>
                        <div class="swipe_right_container">
                            <img src="https://dev-api.dunkindonuts.ph/storage/uploads/trivia/2023-03-21/dunkintrivia5-img-revised2_11-08-33-525738.webp" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page" class="swipe_image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> -->
    </div>
    <div class="divider-container">
    </div>
    <div class="cards-container2">
    <?php if ( $sustainability_title_query->have_posts() ) : $sustainability_title_query->the_post(); ?>
        <div class="cards-header2">
            <?php 
                $value = get_field( "title" );
                if( $value ) {
                    echo '<h1>' . $value . '</h1>';
                } else {
                    echo 'empty'; 
                }
                $value = get_field( "content" );
                if( $value ) {
                    echo '<p>' . $value . '</p>';
                } else {
                    echo 'empty'; 
                }
                $value = get_field( "button" );
                if( $value ) {
                    echo '<button class="general_button blue_button2">' . $value . '</button>';
                } else {
                    echo 'empty'; 
                }
            ?>
        </div>
    <?php endif; ?>
            <!-- <h1>SUSTAINABILITY EFFORTS</h1>
            <p>We unify our practices, partnerships, and products around a single<br>mission - to foster sustainability at scale.</p>
            <button class="general_button blue_button2">LEARN MORE</button> -->
        
        <?php if ( $sustainability_query->have_posts() ) : ?>
            <div class="cards-content2">
                <?php while ( $sustainability_query->have_posts() ) : $sustainability_query->the_post(); ?>
                    <div class="cards-content-body-container2">
                        <div class="cards-content-body2">
                        <?php
                            $value = get_field( "image", false, false );
                                if( $value ) {
                                    echo '<picture class="cards-content-img2">' . wp_get_attachment_image( $value, array(600, 440) ) . '</picture>';
                                } else {
                                    echo 'empty'; 
                                } 
                            $value = get_field( "title" );
                                if( $value ) {
                                    echo '<h2>' . $value . '</h2>';
                                } else {
                                    echo 'empty'; 
                                }
                            $value = get_field( "content" );
                                if( $value ) {
                                    echo '<p>' . $value . '</p>';
                                } else {
                                    echo 'empty'; 
                                }
                        ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
        <!-- <div class="cards-content2">
            <div class="cards-content-body-container2">
                <div class="cards-content-body2">
                    <picture class="cards-content-img2"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/sustainability-effort/2022-12-19/sustainability-1_14-34-25-139198.jpg"></picture>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
            <div class="cards-content-body-container2">
                <div class="cards-content-body2">
                    <picture class="cards-content-img2"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/sustainability-effort/2022-12-19/sustainability-1_14-34-25-139198.jpg"></picture>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
            <div class="cards-content-body-container2">
                <div class="cards-content-body2">
                    <picture class="cards-content-img2"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/sustainability-effort/2022-12-19/sustainability-1_14-34-25-139198.jpg"></picture>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
            <div class="cards-content-body-container2">
                <div class="cards-content-body2">
                    <picture class="cards-content-img2"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/sustainability-effort/2022-12-19/sustainability-1_14-34-25-139198.jpg"></picture>
                    <h2>Years of Service</h2>
                    <p>In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                </div>
            </div>
        </div> -->
    </div>
    <section class="floating_window">
        <div class="floating_container">
            <?php if ( $franchise_query->have_posts() ) : $franchise_query->the_post(); ?>
                <div class="floating_content">
                    <?php
                        $value = get_field( "title" );
                            if( $value ) {
                                echo '<div class="floating_content_left"> <div class="floating_content_text"> <h1 class="floating_header">' . $value . '</h1>';
                            } else {
                                echo 'empty'; 
                            }
                        $value = get_field( "content" );
                            if( $value ) {
                                echo '<p class="floating_text">' . $value . '</p>';
                            } else {
                                echo 'empty'; 
                            }
                        $value = get_field( "button" );
                            if( $value ) {
                                echo '<button class="general_button blue_button">' . $value . '</button> </div>';
                            } else {
                                echo 'empty'; 
                            }
                        $value = get_field( "image_1", false, false );
                            if( $value ) {
                                echo '<picture>' . wp_get_attachment_image( $value, array(650, 600) ) . '</picture> </div>';
                            } else {
                                echo 'empty'; 
                            }
                        $value = get_field( "image_2", false, false );
                            if( $value ) {
                                echo 
                                    '<div class="floating_content_right"> 
                                        <picture>' . wp_get_attachment_image( $value, array(500, 500) ) . '</picture> 
                                    </div>';
                            } else {
                                echo 'empty'; 
                            } 
                    ?>
                </div>
            <?php endif; ?>
            <!-- <div class="floating_content">
                <div class="floating_content_left">
                    <div class="floating_content_text">
                        <h1 class="floating_header">OPEN A FRANCHISE <br>WITH US</h1>
                        <p class="floating_text">Open your business under a world-famous brand,<br>becoming part of the DUnkin' Donuts family!</p>
                        <button class="general_button blue_button">LEARN MORE</button>
                    </div>   
                    <picture><img src="https://dev.dunkindonuts.ph/_ipx/s_4336x2000/assets/cta/franchise-background.jpg" width="600px" class="floating_image1"></picture>
                </div>
                <div class="floating_content_right">
                    <picture><img src="https://dev.dunkindonuts.ph/_ipx/f_webp,s_1000x1000/assets/cta/franchise-image.jpg" width="500px" class="floating_image2"></picture>
                </div>
            </div> -->
        </div>
    </section>
        <?php if ( $explore_query->have_posts() ) : ?>
            <?php while ( $explore_query->have_posts() ) : $explore_query->the_post(); ?>
                <div class="alternate-container">
                    <?php
                        $value = get_field( "title" );
                            if( $value ) {
                                echo ' <div class="alternate-content-body"> <h1>' . $value . '</h1>';
                            } else {
                                echo 'empty'; 
                            }
                        $value = get_field( "content" );
                            if( $value ) {
                                echo '<p>' . $value . '</p>';
                            } else {
                                echo 'empty'; 
                            }
                        $value = get_field( "button" );
                            if( $value ) {
                                echo '<button class="general_button blue_button">' . $value . '</button> </div>';
                            } else {
                                echo 'empty'; 
                            }
                        $value = get_field( "image", false, false );
                            if( $value ) {
                                echo '<picture>' . wp_get_attachment_image( $value, array(600, 440) ) . '</picture> </div>';
                            } else {
                                echo 'empty'; 
                            } 
                    ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
            <!-- <div class="alternate-content-body">
                <h1>JOIN THE TEAM</h1>
                <p>We work together, we love to serve the neighborhood and we<br>want to help you grow. Check out the opportuinities at Dunkin'</p>
                <button class="general_button blue_button2">VIEW CAREERS</button>
            </div>
            <div class="alternate-content-body2">
                <picture><img src="https://dev.dunkindonuts.ph/_ipx/s_880x880/assets/cta/home-join-the-team.jpg" width="100%" class="alternating_picture"></picture>
            </div> -->
    </div>
    <!-- <div class="alternate-container">
            <div class="alternate-content-body2">
                <picture><img src="https://dev.dunkindonuts.ph/_ipx/s_880x880/assets/cta/home-join-the-team.jpg" width="100%" class="alternating_picture"></picture>
            </div>
            <div class="alternate-content-body">
            <h1>DUNKIN' MENU</h1>
                <p>Our menu is full of great-tasting items that will get you going throughout your day.</p>
                <button class="general_button blue_button2">EXPLORE MENU</button>
        </div>
    </div> -->
    <section class="article-container" style="background-color: rgb(245, 245, 245);">
        <div class="article_main">
            <div class="article_header">
                <h1 class="cards-h1">FEATURED ARTICLES</h1>
                <button class="general_button blue_button2">VIEW MORE</button>
            </div>
            <div class="article-content">
                <?php if ( $featured_articles_query->have_posts() ) : ?>
                    <?php while ( $featured_articles_query->have_posts() ) : $featured_articles_query->the_post(); ?>
                        <div class="articles">
                            <div class="article_item">
                                <?php
                                    $value = get_field( "image", false, false );
                                        if( $value ) {
                                            echo '<picture class="article-img">' . wp_get_attachment_image( $value, array(280, 280) ) . '</picture> ';
                                        } else {
                                            echo 'empty'; 
                                        } 
                                    $value = get_field( "category" );
                                        if( $value ) {
                                            echo '<p class="article_category">' . $value . '</p>';
                                        } else {
                                            echo 'empty'; 
                                        }
                                    $value = get_field( "content" );
                                        if( $value ) {
                                            echo ' <a href="/" class="article_item_link"><p class="article_description">' . $value . '</p>';
                                        } else {
                                            echo 'empty'; 
                                        }
                                    $value = get_field( "date" );
                                        if( $value ) {
                                            echo '<p class="article_date">' . $value . '</p></a>';
                                        } else {
                                            echo 'empty'; 
                                        }
                                ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <!-- <div class="article_content">
                <div class="articles">
                    <div class="article_item">
                    <picture><img src="https://dev-api.dunkindonuts.ph/storage/uploads/article/2023-03-22/maxresdefault-2_13-18-04-301063.jpg" class="article_img"></picture>
                    <p class="article_category">Videos</p>
                    <a href="#" class="article_play_button fa fa-play"></a>
                        <a href="/" class="article_item_link">
                            <p class="article_description">What is Lorem Ipsum?</p>
                            <p class="article_date">December 22, 2022</p>
                        </a>
                    </div>
                </div>
                <div class="articles">
                    <div class="article_item">
                    <picture><img src="https://dev-api.dunkindonuts.ph/storage/uploads/article/2023-03-22/maxresdefault-2_13-18-04-301063.jpg" class="article_img"></picture>
                    <p class="article_category">Videos</p>
                    <a href="#" class="article_play_button fa fa-play"></a>
                        <a href="/" class="article_item_link">
                        <p class="article_description">What is Lorem Ipsum?</p>
                            <p class="article_date">December 22, 2022</p>
                        </a>
                    </div>
                </div>
                <div class="articles">
                    <div class="article_item">
                    <picture><img src="https://dev-api.dunkindonuts.ph/storage/uploads/article/2023-03-22/maxresdefault-2_13-18-04-301063.jpg" class="article_img"></picture>
                    <p class="article_category">Videos</p>
                    <a href="#" class="article_play_button fa fa-play"></a>
                        <a href="/" class="article_item_link">
                            <p class="article_description">What is Lorem Ipsum?</p>
                            <p class="article_date">December 22, 2022</p>
                        </a>
                    </div>
                </div>
                <div class="articles">
                    <div class="article_item">
                    <picture><img src="https://dev-api.dunkindonuts.ph/storage/uploads/article/2023-03-22/maxresdefault-2_13-18-04-301063.jpg" class="article_img"></picture>
                    <p class="article_category">Videos</p>
                        <a href="/" class="article_item_link">
                            <p class="article_description">What is Lorem Ipsum?</p>
                            <p class="article_date">December 22, 2022</p>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <div class="bottom-container">
        <div class="bottom-header">
            <h1 class="">KEEP DUNKIN'</h1>
            <div class="bottom-header-content">
                <a href="#" class="fa fa-instagram socials_link"><p>@dunkin_ph </p></a>
            </div>
        </div>
        <div class="filled-swiper">
            <div class="filled-swiper-button-container">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-color:#FF6E0E" href="">
                <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-2.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-3.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#FF6E0E">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-4.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#f20c90">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-5.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-1.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#FF6E0E">
                <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-2.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-3.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#FF6E0E">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-4.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#f20c90">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-5.jpg" alt="" class="swiper-image">
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <img src="https://dev.dunkindonuts.ph/_ipx/s_512x512/placeholders/ig/ig-1.jpg" alt="" class="swiper-image">
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>