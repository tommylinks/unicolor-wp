<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title><?php wp_title() ?></title>
  <meta name="author" content="tommylinks">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="shortcut icon" href="favicon.ico">-->
  <style>
    /* font-family: "GothamProRegular"; */
    @font-face {
        font-family: "GothamProRegular";
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProRegular/GothamProRegular.eot");
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProRegular/GothamProRegular.eot?#iefix")format("embedded-opentype"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProRegular/GothamProRegular.woff") format("woff"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProRegular/GothamProRegular.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    /* font-family: "GothamProBold"; */
    @font-face {
        font-family: "GothamProBold";
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProBold/GothamProBold.eot");
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProBold/GothamProBold.eot?#iefix")format("embedded-opentype"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProBold/GothamProBold.woff") format("woff"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProBold/GothamProBold.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }

    /* font-family: "GothamProItalic"; */
    @font-face {
        font-family: "GothamProItalic";
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProItalic/GothamProItalic.eot");
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProItalic/GothamProItalic.eot?#iefix")format("embedded-opentype"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProItalic/GothamProItalic.woff") format("woff"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProItalic/GothamProItalic.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    /* font-family: "GothamProMedium"; */
    @font-face {
        font-family: "GothamProMedium";
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProMedium/GothamProMedium.eot");
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProMedium/GothamProMedium.eot?#iefix")format("embedded-opentype"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProMedium/GothamProMedium.woff") format("woff"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProMedium/GothamProMedium.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    /* font-family: "GothamProLight"; */
    @font-face {
        font-family: "GothamProLight";
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProLight/GothamProLight.eot");
        src: url("<?php echo get_template_directory_uri() ?>/fonts/GothamProLight/GothamProLight.eot?#iefix")format("embedded-opentype"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProLight/GothamProLight.woff") format("woff"),
        url("<?php echo get_template_directory_uri() ?>/fonts/GothamProLight/GothamProLight.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }

  </style>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
  <?php wp_head(); ?>
</head>
<body >
  <div class="overflow">
    <header id="header">
    
    </header>
    
    