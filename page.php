<?php get_header(); ?>

<div id='single'>


    <?php while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">

            <div class='posttitlebar'>


        <div class='heading'><?php the_title(); ?><?php
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
                            ?> -->

            </div>

      
            <div class='entry'>

<?php the_content(); ?> 
               <strong> <a
                        class='morelink'
                        title='Click to view post and comments'
                        href='<?php the_permalink(); ?>'>Review the full application and score &raquo;</a></strong>

                <br clear='all' />
<?php wp_delete_post_link('(trash)', '<div class="post-edit">', '</div>'); ?>
 <?php edit_post_link( $link, $before, $after, $id ); ?> 
            </div> <!-- entry -->

<div id="nav-below">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>

<br /><br />
Status: <?php the_tags( $before, $separator, $after ); ?> 


				</div><!-- #nav-below -->
        </div> <!-- post -->



    <?php endwhile; ?>




<br clear='all' />

    <?php
        wp_link_pages(
                array
                (
                    'before' => '<div id="subpagelinks"><span>Pages:</span> ',
                    'after' => '</div>',
                    'next_or_number' => 'number'
                )
        );
    ?>

</div>


<?php get_footer(); ?>
