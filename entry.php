<?php 

     $posts = query_posts($query_string . '&orderby=title comment_count&order=asc&caller_get_posts=1&tag__not_in=31');


if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
<?php $stripe = ($stripe == 'dark') ? 'bright' : 'dark'; ?>

        <div  <?php post_class($stripe); ?> id="post-<?php the_ID(); ?>" >


 <div class='posttitlebar' onclick="location.href='<?php the_permalink(); ?>';" style="cursor:pointer;">

              

               <div class='heading'>         
<?php the_title(); ?><?php
if (is_sticky()) echo '<small style="color: #C33;">  !</small>';
?></div>

<div class='dateauthor'>
                   <!-- <?php the_time('M jS, Y') ?> by <?php the_author() ?> --><?php
                                foreach((get_the_category()) as $cat)
                                {
                                    print
                                        "<a href='" . get_category_link($cat->cat_ID) . "'>" .
                                        "$cat->cat_name, </a>";
                                }
                            ?><!-- | Reviewers: <?php
                                print
                                    get_the_tag_list(
                                            $before = ' ',
                                            $sep = ', ',
                                            $after = '');
                            ?> --><div class='review-count'>Reviews: <strong><?php comments_number('0', '1', '%' );?></strong><?php wp_delete_post_link('(trash)', ' ', ''); ?></div>
                </div>

            </div>


</div>

    <?php endwhile; ?>

    <?php endif; ?>



<br clear='all' />
