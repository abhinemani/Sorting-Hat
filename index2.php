<?php get_header(); ?>
<div id='indexpage'>


<p style="margin-top: -10px; margin-bottom: 20px; padding-left: 15px; line-height: 180%;"><img src="http://codeforamerica.org/wp/apps/img/rotunda.png" align="right">Thank you for agreeing to help us select the 2011 Code for America Fellows. With your input, we have taken the pool of over 360 down to a group of around 40 finalists. We'd like you to review 5-8 finalists, if possible, and rate them on a scale of 1-5 stars keeping in mind their initial application, as well as their new materials: an answer to the <a href="http://codeforamerica.org/finalists-problem/">Case Problem</a> and their Video Submission, using a third-party solution, HireHire.<br /><br /> 

<strong>To view their video interviews on HireHive, you'll need to login after you click the link with username "info@codeforamerica.org" and password "code4america".</strong> HireHive experienced some technical issues during our submission period, so some video responses are in a different format -- but there should be functioning links for all applications.<br /><br />

If you've previously reviewed this applicant, you are welcome to add an additional rating after evaluating their Case Problem response and video submission. Feel free to select any which you're interested in or relate to your area of expertise, beginning with those marked as urgent with an exclamation point ("!"), indicating either our uncertainty or a lack of review. Thanks so much for your help!<br /><br />
<strong>Skillset Groups:</strong> <a href="http://codeforamerica.org/wp/apps/?cat=8" title="View all posts filed under Community Manager">Community Manager</a>, <a href="http://codeforamerica.org/wp/apps/?cat=4" title="View all posts filed under Designer">Designer</a>, <a href="http://codeforamerica.org/wp/apps/?cat=3" title="View all posts filed under Developer">Developer</a>, <a href="http://codeforamerica.org/wp/apps/?cat=5" title="View all posts filed under Project Manager">Project Manager</a>, <a href="http://codeforamerica.org/wp/apps/?cat=6" title="View all posts filed under Researcher">Researcher</a>.
<!--<br /><br />
<strong>Selection Committee:</strong>
<?php wp_tag_cloud('format=flat&orderby=name&smallest=9&largest=9&separator=, '); ?>
<br /><br />
To get started, just select your name from above or scroll down to select an applicant. We really appreciate your help!-->

</p>

    <?php include("entry.php"); ?>
</div>

<div class="navigation">
    <?php previous_posts_link("<span style='float: right;'>Newer Entries &raquo;</span>"); ?>
    <?php next_posts_link("<span>&laquo; Older Entries</span>"); ?>
</div>

<?php global $options; if( $options['expandfirst'] == 1 ) : ?>

    <script language='JavaScript'>

        showIndexPost.call($('#indexpage > .post:first .posttitlebar'));

    </script>

<?php endif; ?>

<?php get_footer(); ?>

