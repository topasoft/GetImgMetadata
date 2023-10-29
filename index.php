<!DOCTYPE html>
<html lang="hu">

<?php
error_reporting(E_ALL);
?>

<head>
    <meta charset="UTF-8">
    <title>GetImgMetadata</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="php javascript exif, iptc">
    <meta name="description" content="Author: ToPa">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#317EFB" >

    <link rel="apple-touch-icon" href="assets/images/booty15.jpg">
    <link href="assets/css/main.css?<?php echo filemtime('assets/css/main.css'); ?>" rel="stylesheet">
    <link href="assets/css/GetImgMetadata.css?<?php echo filemtime('assets/css/GetImgMetadata.css'); ?>" rel="stylesheet">
    <link href="assets/css/ToPaTools.css?<?php echo filemtime('assets/css/ToPaTools.css'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/images/favicon.png" >

</head>


<body>
    <div id="main">
        <header id="header">header</header>
        <?php include_once "assets/php/GetImgMetadata.php"; ?>
    </div>
</body>

</html>