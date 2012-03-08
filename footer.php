</div> <!-- container -->
</div> <!-- bgtilediv -->

<div align="center"><?php $search_text = "Search"; ?> 
<form method="get" id="searchform"  
action="<?php bloginfo('home'); ?>/"> 
<input type="text" value="<?php echo $search_text; ?>"  
name="s" id="s"  
onblur="if (this.value == '')  
{this.value = '<?php echo $search_text; ?>';}"  
onfocus="if (this.value == '<?php echo $search_text; ?>')  
{this.value = '';}" /> 
<input type="hidden" id="searchsubmit" /> 
</form><br /></div>


<?php wp_footer(); ?>
<div class="feedback-panel">
    <a class="feedback-tab" href="http://sortinghat.codeforamerica.org">Leaderboard</a>
 
    <h3>Superstar Reviewers</h3>
<ol><?php get_commentmembersstats(); ?></ol>
 
    </div>    
</div>


</body>

</html>

