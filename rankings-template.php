<?php
/*
Template Name: Rankings
*/
?>

<?php get_header(); ?>

<div id='single' style="clear: both;">
<h1>Highest Rated Applicants</h1>
<div style="width: 70%; float: left;">
<?php rs_comparison_table(180); ?>
</div><div style="width: 25%; float: right; margin-left: 15px;">
<h3>Superstar Reviewers</h3>
<ol><?php get_commentmembersstats(); ?></ol>
</div>

<style>ul#post-categories li {list-style: none;}</style>
<div style="clear: both;">
</div>
</div>
<?php get_footer(); ?>


 
