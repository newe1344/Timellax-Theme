<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.qtip.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/scroll.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.qtip.pack.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/parallax.js"></script>

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<?php //wp_head(); ?>
<script type="text/javascript">
    $(document).ready(function() {
       // Match all <Article/> links with a title tag and use it as the content (default).
       $('article[title]').qtip({
           position : {
               my : 'bottom left',
               at : 'top center'
           },
           style : {
               classes : 'ui-tooltip-shadow ui-tooltip-jtools'
           }
       });

       $("article img").fancybox({
                'transitionIn'	: 'none',
                'transitionOut'	: 'none'	
       });
       
       $('nav a').fancybox({
           'width': 600
       });
       
//       alert("worked");
        
    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21950939-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21950939-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
</head>
<body id="background">
    <div id="wrap">
        
    
