<?php get_header(); ?>
        
        <div id="parallax">
            <nav>
                <?php wp_nav_menu( array( 'container' => '' ) ); ?>
                <div id="counter">1999</div>
            </nav>
            <section>
        <?php 
            $mikes = array(
                            "1924" => array(), "1948" => array(), "1953" => array(), 
                            "1956" => array(), "1959" => array(), "1962" => array(), 
                            "1971" => array(), "1990" => array(), "1995" => array()
                        );
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
                
                    
                    <?php 
                        
                        $post_tags = get_the_tags();
                        
                        if ($post_tags) {
                            
                            //global $mikes;
                            
                            foreach($post_tags as $tag) {
                                
                                $time = intval($tag->name);
                                
                                //echo "tag: " . $tag->name;
                                
                                //echo "time: " . $time;
                                
                                switch ($tag->name) {
                                    
                                    case $time >= 1924 && $time <= 1944:
                                        // store the post attributs under posts['1924']
                                        $mikes['1924'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time >= 1948 && $time <= 1952:
                                        // store the post attributs under posts['1948']
                                        $mikes['1948'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time >= 1953 && $time <= 1956:
                                        // store the post attributs under posts['1953']
                                        $mikes['1953'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time > 1956 && $time <= 1959:
                                        // store the post attributs under posts['1956']
                                        $mikes['1956'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time > 1959 && $time <= 1962:
                                        // store the post attributs under posts['1959']
                                        $mikes['1959'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time > 1962 && $time <= 1970:
                                        // store the post attributs under posts['1962']
                                        $mikes['1962'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time >= 1971 && $time <= 1989:
                                        // store the post attributs under posts['1971']
                                        $mikes['1971'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time >= 1990 && $time <= 1995:
                                        // store the post attributs under posts['1990']
                                        $mikes['1990'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                    case $time > 1995:
                                        // store the post attributs under posts['1995']
                                        $mikes['1995'][] = array(   "title" => get_the_title(), 
                                                                    "content" => get_the_content(), 
                                                                    "excerpt" => get_the_excerpt(), 
                                                                    "thumbnail" => get_the_post_thumbnail($post->ID, 'medium'), 
                                                                    "media" => get_post_meta($post->ID, "media", true),
                                                                    "tag" => $tag->name
                                                                );
                                        break;
                                }
                            }
                        }
                    
                    ?>
                    
                
        
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <?php
            
//            echo "<pre>";
//            print_r($mikes);
//            echo "</pre>";
            
            
            $years = array();
            
            foreach($mikes as $key => $timeframe) {
//                
                $countTimeframe = count($timeframe);
//                
                // order the years
                for($x = 0; $x < $countTimeframe; $x++) {
                    for($y = 0; $y < $countTimeframe; $y++) {
                        if($timeframe[$x]['tag'] < $timeframe[$y]['tag'] && $timeframe[$x]['tag'] != $timeframe[$y]['tag']) {
                            $hold = $timeframe[$x];
                            $timeframe[$x] = $timeframe[$y];
                            $timeframe[$y] = $hold;
                        } elseif ($timeframe[$x]['tag'] == $timeframe[$y]['tag']) {
                            $timeframe[$x] = $timeframe[$x];
                            $timeframe[$y] = $timeframe[$y];
                        }
                    }
                }
                
                $mikes[$key] = $timeframe;
//                
            }
            
            foreach($mikes as $timeframe) {
                
                // add each year to the years array
                for($i = 0; $i < count($timeframe); $i++) {
                    $years[] = $timeframe[$i]['tag'];
                }
            }
            
            $highest_year = intval(end($years));
            
            $beginning_year = intval($years[0]);
            
            $number_of_years = $highest_year - $beginning_year;
            
            $per_year = 36000 / $number_of_years;
            
            $counter = 0;
            
            foreach($mikes as $timeframe) {
                
                
                $countTimeframe = count($timeframe);
                
                
                $positionTop = 50;
                
                for($t = 0; $t < $countTimeframe; $t++) {
                    
                    $current_year = intval($timeframe[$t]['tag']);
                    
                    
                    $positionLeft = floor(($current_year - $beginning_year) * $per_year);
                    
                    $plus_or_minus = floor(rand(1, 10));
                    
                    $exacerbate = ($plus_or_minus > 5) ? floor(rand(50, 100)) : (floor(rand(50, 100))) * (0 - 1);
                    
                    if($current_year <= ($beginning_year + 2)) {
                        $exacerbate += 100;
                    }
                    
                    $border = ($plus_or_minus > 6) ? "border: none;" : "";
                    
                    $positionLeft += $exacerbate;
                    
                    $positionTopRand = $positionTop * floor(rand(3, 4));
                    
                    $title = $timeframe[$t]['title'];
                    
                    $content = $timeframe[$t]['content'];
                    
                    $excerpt = $timeframe[$t]['excerpt'];
                    
                    $thumbnail = $timeframe[$t]['thumbnail'];
                    
                    $media = $timeframe[$t]['media'];
                    
                    $tag = $timeframe[$t]['tag'];
                    
                    if(empty($thumbnail) && empty($media)) {
                        // post with text output
                        $output = <<<TEXT
                        <div class="mover text" style="left: {$positionLeft}px; top: {$positionTopRand}px;">
                            <article>
                                <h3>
                                    $title
                                </h3>
                                <p>
                                    $content
                                </p>
                            </article>

                        </div>
TEXT;
                    } else if (!empty($thumbnail) && empty($media) && !empty($content)) {
                        // post with image
                        
//                        $content = preg_replace($content);
                        
                        $pattern = '/^title="(.*)"/';
                        $replacement = $content;
                        $subject = $thumbnail;
                        $thumbnail = preg_replace($pattern, $replacement, $subject);
                        
                        $output = <<<IMAGE
                        <div class="mover thumbnail" style="left: {$positionLeft}px; top: {$positionTop}px; $border">
                            <article title="$content">
                                    $thumbnail
                            </article>

                        </div>
IMAGE;
                    } else if (empty($thumbnail) && !empty($media)) {
                        // post with video
//                        $media = strstr($media, '<p>', true);
                        
                        $output = <<<MEDIA
                        <div class="mover media" style="left: {$positionLeft}px; top: {$positionTop}px;">
                            <article>
                                    $media
                            </article>

                        </div>
MEDIA;
                    } else if (empty($content) && empty($media) && !empty($thumbnail)) {
                        // cutout image so no background
                        $output = <<<CUT_OUT
                        <div class="mover cutout" style="left: {$positionLeft}px; top: {$positionTop}px;">
                            <article>
                                <p>
                                    $thumbnail
                                </p>
                            </article>

                        </div>
CUT_OUT;
                    }
                    
                    
                    
                    echo $output;
                    
//                    $positionTop = 100;
                    
                    $counter++;
                    
                    
                } // end for loop
                
                //$spacing += 500;
                
            } // end foreach
            
            
        ?>
            </section>
        
        
        </div>

<?php get_footer(); ?>