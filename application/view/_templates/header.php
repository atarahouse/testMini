<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php  if (isset($this->titlePage)) echo $this->titlePage . " | "; ?> myMini</title>

    <!-- Set Meta Description & Keywords-->
    <meta name="description" content=<?php  if (isset($this->metaDescription)) echo '"' . $this->metaDescription . '"' ;?> >
    <meta name="keywords" content=<?php  if (isset($this->metaKeyword)) echo '"' . $this->metaKeyword . '"' ;?>>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- logo -->
        <div class="logo">
            myMINI
        </div>

        <!-- navigation -->
        <div class="navigation">
            <a href="<?php echo URL; ?>">home</a>
            <a href="<?php echo URL; ?>home/exampleone">subpage</a>
            <a href="<?php echo URL; ?>home/exampletwo">subpage 2</a>
            <a href="<?php echo URL; ?>songs">songs</a>
            <a href="<?php echo URL; ?>services">Services</a>
            <a href="<?php echo URL; ?>aboutus">About Us</a>
        </div>
   </header>
