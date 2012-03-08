<?php get_header(); ?>
<div id='indexpage'>


<p style="margin-top: -10px; margin-bottom: 20px; padding-left: 15px; padding-right: 15px; line-height: 180%;">Thank you for agreeing to help us select the 2012 Code for America Fellows. Your input is critical to our success next year. For a fair decision, we'd like at least 4-5 reviews per candidate, so <strong>please review as many candidates as you can, rating them on a scale of 1-5 stars.</strong> (Some have reviewed over 20!) Feel free to select any which you're interested in or relate to your area of expertise, as listed below. If you have any questions, please don't hesitate to <a href="mailto:info@codeforamerica.org">get in touch</a>.<br /><br />

Before you review candidates, it may be helpful to review our brief <strong><a href="http://sortinghat.codeforamerica.org/how-the-teams-work/">descriptions of the team roles</a></strong> and <strong><a href="http://sortinghat.codeforamerica.org/what-were-looking-for/">what we’re looking for</a></strong>.<br /><br />

<strong>Skillset Groups:</strong> <?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>, ';  } 
?>

<!--<br /><br />
<strong>Selection Committee:</strong>
<?php wp_tag_cloud('format=flat&orderby=name&smallest=9&largest=9&separator=, '); ?>
<br /><br />
To get started, just select your name from above or scroll down to select an applicant. We really appreciate your help!-->

</p>

<?php include_once("entry.php"); ?>

<div class="navigation">
    <?php previous_posts_link("<span style='float: right;'>Newer Entries &raquo;</span>"); ?>
    <?php next_posts_link("<span>&laquo; Older Entries</span>"); ?>
</div>
</div>



<?php global $options; if( $options['expandfirst'] == 1 ) : ?>

    <script language='JavaScript'>

        showIndexPost.call($('#indexpage > .post:first .posttitlebar'));

    </script>

<?php endif; ?>

<?php get_footer(); ?>

