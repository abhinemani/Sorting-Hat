<div id="comments">
   <a href='<?php print get_post_comments_feed_link(); ?>'>
        <img border=0 align='right' width='32' height='32'
            src='<?php print bloginfo('template_directory') . "/images/rssorange.png"; ?>'></a>

        <div id='commentsheader' class='heading'>
            Application Review and Feedback
        </div>
        <br />
<p style="line-height: 150%">
After reading the application and additional supporting information, please take a moment to review the applicant. We'd appreciate it if you could both score the applicant on the listed categories (1-5, 5 being the best) and provide general comments and feedback in the textbox on the right: e.g. what did you like about the candidate in particular, what are you concerned about, and what should we follow up about.<br /><br />And yes, we deliberately put the form before the reviews, so you <i>should</i> comment before biasing your opinion.</p>
	
	<?php if ('open' == $post->comment_status) : ?>
		
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>
		
 <div id="respond">

                <div class='heading'>

                    <?php comment_form_title( 'Review and Rate this application', 'Leave a Reply to %s' ); ?>

                    <span class="cancel-comment-reply">
                        <?php cancel_comment_reply_link(); ?>
                    </span>

                </div>

                <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

                    <div class='responduser'>
                        You must be
                        <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a>
                        to post a comment.
                    </div>

                <?php else : ?>

                    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php"
                        method="post" id="commentform">
<div style="display: block; width: 100%; height: 270px;">



<div style="float: left; width: 30%; height: 270px;">
                    

                        <p class='respondfield'>
                            <input type="text" name="author" id="author"
                                value=""
                                size="22" tabindex="1"
                                <?php if ($req) echo "aria-required='true'"; ?> />
                            <label for="author">
                                Name <?php if ($req) echo "*"; ?>
                            </label>
                        </p>

                        <p class='respondfield'>
                            <input type="text" name="email" id="email"
                                "
                                    <?php
                                        // TODO: remove when 2.7 obsolete
                                        if( function_exists(esc_attr) )
                                            echo @esc_attr($comment_author_email);
                                        else
                                            echo $comment_author_email;
                                    ?>
                                "
                                size="22" tabindex="2"
                                <?php if ($req) echo "aria-required='true'"; ?> />
                            <label for="email">
                                    Mail 
                                    <?php if ($req) echo "*"; ?>
                            </label>
                        </p>


<?php if (function_exists('ratings_input_table')) ratings_input_table(); ?>
                    <p>
                        <input name="submit" type="submit" id="submit" tabindex="5"
                        value="Submit" />
                        <?php comment_id_fields(); ?>
                    </p>

                    <!--
                    <p>
                    <small>
                        <strong>XHTML:</strong> You can use these tags:
                        <code><?php //echo allowed_tags(); ?></code>
                    </small>
                    </p>
                    -->
</div>

<div style="float: left; width: 70%; height: 270px;">

                    <p>
 <textarea name="comment" id="comment" type="text" rows="15" tabindex="4"></textarea>


                    </p>


                    <?php do_action('comment_form', $post->ID); ?>
</div>
</div>
                </form>

                <?php endif; // If registration required and not logged in ?>

            </div> <!-- id=respond -->
		<?php endif; ?>
		
	<?php endif; ?>
</div>
<div id="comments">

<h2><?php comments_number('No Reviews', 'Only One Review', '% Reviews' );?> of &#8220;<?php the_title(); ?>&#8221; So Far...</h2>

<?php if ($comments) : ?>

						
		
			
						
	
<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					wp_list_comments( array( 'callback' => 'twentyten_comment' ) );
				?>
			</ol>	
							
			

	<?php endif; ?>
	
</div>

