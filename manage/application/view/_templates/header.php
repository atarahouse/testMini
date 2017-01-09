<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Set Meta Description & Keywords-->
    <meta name="description" content=<?php  if (isset($this->metaDescription)) echo '"' . $this->metaDescription . '"' ;?> >
    <meta name="keywords" content=<?php  if (isset($this->metaKeyword)) echo '"' . $this->metaKeyword . '"' ;?>>

    <!-- JS -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL; ?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="css/plugins/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="<?php echo URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Page Title -->
    <title>ADMIN <?php  if (isset($this->titlePage)) echo ' | ' . $this->titlePage ; ?> </title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- CKeditor -->
    <script src="//cdn.ckeditor.com/4.6.1/basic/ckeditor.js"></script>

</head>

<body>
   <!-- Navigation -->
   <header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">myMini</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="<?php echo URL; ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>services"><i class="fa fa-fw fa-tasks"></i> Services</a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>aboutus"><i class="fa fa-fw fa-building"></i> About Us</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    </header>