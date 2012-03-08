<?php global $options; ?>

<link
    rel='stylesheet'
    href='<?php bloginfo('template_url'); ?>/shortcodes.css'
    type='text/css'
    media='screen' />

<?php

// [qfgallery]
// add if for option check for qfgallery activation

?>

<link
    rel='stylesheet'
    href='<?php bloginfo('template_url'); ?>/jquery.fancybox/jquery.fancybox.css'
    type='text/css'
    media='screen' />

<script
    type="text/javascript"
    src="<?php bloginfo('template_url'); ?>/jquery.fancybox/jquery.easing.1.3.js">
</script>

<script
    type="text/javascript"
    src="<?php bloginfo('template_url'); ?>/jquery.fancybox/jquery.fancybox-1.2.1.js">
</script>

<?php

$galleryctr = 0;

function qfgallery_handler($atts, $content)
{
    global $galleryctr;

    extract
    (
        shortcode_atts
        (
            array
            (
                'title' => '',
                'scale' => '',
                'float' => ''
            ),
            $atts
        )
    );

    $newcontent =
    "
        <div
            class='qfcontainer' " .
            (
                $float != "" ?
                "style=
                '
                    float: $float;
                    margin: 5px 15px;
                    margin-$float: 0px;
                    padding: 3px;
                '"
                :
                ""
            ) . "
        >
    ";

    if( $title != "" ) $newcontent .= "<h2>$title</h2>\n";
    foreach( explode("\n", $content) as $line )
    {
        // strip the <br /> tag added by wpautop et al
        $line = preg_replace("/\s*\<br.*/", "", $line);

        $matches = preg_split("/\s*\|\s*/", $line);
        if( sizeof($matches) <= 1 )
            continue;

        $newcontent .=
        "
            <div class='qfgallerytnail'>
            <a class='qfgallery' rel='qfgallery$galleryctr' href='$matches[0]' title='$matches[1]'>
            <img
                src='$matches[0]' " . ($scale == 1 ? "width='128' height='128' " : "") . "
                alt='$matches[1]' />
            </a>
            </div>
        ";
    }

    $newcontent .= "<br clear='all' /></div>\n";
    $galleryctr++;

    return($newcontent);
}
add_shortcode('qfgallery', 'qfgallery_handler');

?>

<script language='JavaScript'>

$(document).ready(
    function()
    {
	    $("a.qfgallery").
            fancybox
            ({
                'imageScale':   true,
                'zoomOpacity':  true,
                'overlayShow':  true,
                'easingIn':     'easeInElastic',
                'easingOut':    'easeOutBounce',
                'easingChange': 'easeInOutSine'
            });
    }
);

</script>
