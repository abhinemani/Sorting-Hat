<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

    <meta
        http-equiv="Content-Type"
        content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"
    />

    <title>
        <?php bloginfo('name'); ?>
        <?php if ( is_single() ) { ?>
            &raquo; Blog Archive
        <?php } ?>
        <?php wp_title(); ?>
    </title>

    <meta
        name="generator"
        content="WordPress <?php bloginfo('version'); ?>"
    /> <!-- leave this for stats -->

    <link
        rel="stylesheet"
        href="<?php bloginfo('stylesheet_url'); ?>"
        type="text/css" media="screen"
    />
<link rel="SHORTCUT ICON" href="http://codeforamerica.org/wp-content/themes/cfawp2012/images/favicon.ico"/> 

<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin:300,400,700' rel='stylesheet' type='text/css'>

    <link
        rel="alternate"
        type="application/rss+xml"
        title="<?php bloginfo('name'); ?> RSS Feed"
        href="<?php bloginfo('rss2_url'); ?>"
    />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php
        if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
        wp_head();
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script>

   <!-- <script type="text/javascript" src="<?php print get_bloginfo('template_url').'/jquery-min.js'; ?>"></script>
    <script type="text/javascript" src="<?php print get_bloginfo('template_url').'/tanish.js'; ?>"></script> -->

    <!-- load shortcode handlers -->
    <?php include_once("shortcodes.php"); ?>

    <!-- set backgrounds, credits, etc based on user preference -->

 <script type="text/javascript" charset="utf-8">
       $(function() {
            
            
            var feedbackTab = {
                
                speed:300,
                containerWidth:$('.feedback-panel').outerWidth(),
                containerHeight:$('.feedback-panel').outerHeight(),
                tabWidth:$('.feedback-tab').outerWidth(),
                
                init:function(){
                    $('.feedback-panel').css('height',feedbackTab.containerHeight + 'px');
                    
                    $('a.feedback-tab').click(function(event){

                        if ($('.feedback-panel').hasClass('open')) {
                            $('.feedback-panel').animate({left:'-' + feedbackTab.containerWidth}, feedbackTab.speed)
                            .removeClass('open');
                        } else {
                            $('.feedback-panel').animate({left:'0'},  feedbackTab.speed)
                            .addClass('open');
                        }
                        event.preventDefault();
                    });
                }
            };
            
            feedbackTab.init();
            
        });
    </script>

<style type="text/css" media="screen">
   
	</style>
    <style type='text/css'>

        <?php print bg_images_css("#bgtilediv", 'mainbgtile', 'bgtile', "repeat top left"); ?>
        <?php print bg_images_css("#container", 'mainbgimage', 'bgimage', "no-repeat 80% 2%"); ?>

    </style>

    <?php print comments_hide_html(); ?>

    <?php

        // Load custom stylesheet
        if( file_exists(TEMPLATEPATH . "/custom.css") )
        {
            $customstylesheet = get_bloginfo('template_url') . "/custom.css";
            print "<link rel='stylesheet' href='$customstylesheet' type='text/css' media='screen'>\n";
        }

    ?>

</head>

<body>

<?php if( $options['iewarn'] == 1 ) : ?>
    <div id='upgrademsie'>
        <a href='http://apple.com/safari/'>
        <img
            border=0
            src='http://dl.getdropbox.com/u/1547415/general/icons/safari.png'
            alt='Safari'
            title='Safari'
        />
        <a href='http://getfirefox.com/'>
        <img
            border=0
            src='http://dl.getdropbox.com/u/1547415/general/icons/firefox.png'
            alt='Firefox'
            title='Firefox'
        />
        </a>
        <a href='http://apple.com/safari/'>
        <img
            border=0
            src='http://dl.getdropbox.com/u/1547415/general/icons/chrome.png'
            alt='Chrome'
            title='Chrome'
        />
        </a>
        You are using Internet Explorer. Have you considered upgrading?
        <br clear='all' />
    </div>
<?php endif; ?>

<!--
    without this extra wrapper div, setting background seems impossible. Setting
    background for BODY causes incomplete tiling at the bottom when a post title
    is clicked and the post expands down.
-->

<div id='bgtilediv'>
<div id='container'>

    

    <div id='header'>
        <div id='title' class='heading'>
            <a href="<?php echo get_option('home'); ?>/"><img src="/wp-content/uploads/2011/04/sortinghatheader.png"></a>
        </div>

    </div>


