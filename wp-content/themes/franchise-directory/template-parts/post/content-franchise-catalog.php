
<article class="franchise-article" style="">
            <a href="<?php the_permalink();?>"><img width="160px" height="120px" src="<?php echo get_field( 'image' )['url']; ?>"/></a>
            <div class="franchise-descr" >
                <a href="<?php the_permalink();?>"><?php the_field('franchise_name', $post->ID);?></a>
                <span>Инвестиции:  <?php
                    the_field('price_min', $post->ID);

                    echo ' - '; the_field('price_max', $post->ID)?>  грн.</span>
                <p id="fr-descr" style="height: 95px; width: 95%; overflow-y: hidden"><?php the_field('description', $post->ID)?></p>
            </div>
            <div class="more" style="">
                <a href="<?php the_permalink();?>" class="more-link">Подробнее</a>
                				<?php efav_link();?>
            </div>
        </article>

