<?php
/*
Template Name: Splash page
*/

define('CDN_BASE_URL', '//webcdn.art.istic.net/files/');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" type="text/css" media="screen" />
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
    <!--[if IE 7]>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <!--[if IE 6]>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie6.css" type="text/css" media="screen" />
    <![endif]-->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_enqueue_script('jquery'); ?>
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <script src="<?php bloginfo('template_url'); ?>/js/columnizer.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/columnize.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/animatedcollapse.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/collapse.js"></script>


<style type="text/css">
body {
    /*color: #000;
    background: #FFD300;*/
    background: #000;
    color: #FFD300;
    font-family: 'Comfortaa', cursive;
}

h1 {
    font-size: 128pt;
    width: 100%;
    text-align: center;
    line-height: 130pt;
    padding-bottom: .3em;
}

p {
    text-align: center;
    line-height: 200%;

}

p.lastword {
    padding-top: 2em;

}

a {
    color: #A90DFF;
}

#prefix {
}
</style>

</head>
<body>
            <div id="main">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
               
                      <?php the_content(); ?>
                      <?php edit_post_link(__('[Edit this page]'), '<br />', ''); ?>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>
            </div>
<?php wp_footer(); ?>
</body>
</html>
