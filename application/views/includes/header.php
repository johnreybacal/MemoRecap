<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css'); ?>">

  	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('css/images/logo_sana.ico'); ?>" />
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

    <title>MemoRecap</title>
    <?php
        if(isset($Error)){
            echo '<script>alert("'.$Error.'");</script>';
        }
    ?>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- fonts (???) --><!-- 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- styles (!!!) -->
    <link href="<?php echo base_url('css/memstyle.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/modal.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/w3.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/w3-theme-black.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('fonts/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('fonts/font-awesome.min.css'); ?>" rel="stylesheet">
    
   <style type="text/css">
@font-face {
    font-family: "Black Tear Script";
    src: url(../fonts/Brody.ttf) format("truetype");
    src: url(../fonts/Black.ttf) format("truetype");
}
.blacktear { 
    font-family: "My Custom Font", Verdana, Tahoma;
}
</style>

    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 -->


</head>
<body style="margin: 0 0 0 0 ; padding: 0 0 0 0; top:0; bottom:0; left: 0; right: 0; box-sizing:0;">
