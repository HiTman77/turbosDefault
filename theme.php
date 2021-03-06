<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?= $Wcms->css() ?>
<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>?v<?php echo(rand(1,33));?><?php echo(rand(1,20));?>">
</head>
<body>
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<nav class="navbar navbar-default"><div class="container"><div class="navbar-header"><a href="<?= $Wcms->url() ?>"><h3><a class="navbar-brand" href="/"><img src="/data/files/logo.png" alt="<?= $Wcms->siteTitle() ?>"></h3></a></div>
<div class="collapse navbar-collapse" id="menu-collapse">
<ul class="nav navbar-nav navbar-right">
<?= $Wcms->menu() ?></ul></div></div></nav>
<div class="container"><div class="row opacity-50"><div class="col-lg-12 text-left padding40">
<h3 align="center"><?= $Wcms->page('keywords') ?></h3>
<h4 align="center"><?= $Wcms->page('description') ?></h4>
<?= $Wcms->page('content') ?>
</div></div></div>
<div class="container-fluid blueBackground whiteFont"><div class="row"><div class="col-lg-12 text-left padding40">
<?= $Wcms->block('subside') ?>
<br /></div></div></div>
<footer class="container-fluid"><div class="text-left padding100"><?= $Wcms->footer() ?></div></footer>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?= $Wcms->js() ?>
<div id="scroller" class="b-top" style="display: none;"><span class="b-top-but"><p style="color:#000">Top</p></span></div>
<script type="text/javascript">
$(document).ready(function(){
$(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
$('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
});
</script>
<div style="position: fixed; top: 0px; left: 0px; width: 1423px; height: 649px; display: none;" class="QOverlay">
<div style="overflow: hidden; position: relative; top: 0px; width: 100%; display: block; height: 500px;" class="QLoader"></div>
</div>
<video autoplay muted loop id="myVideo"><source src="/data/files/video.mp4" type="video/mp4"></video>
</body>
</html>