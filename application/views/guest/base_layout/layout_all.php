<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="description" content="<?php echo $description; ?>"/>
    <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>"/>
    <link type="image/x-icon" href="<?php echo $favicon; ?>" rel="shortcut icon"/>
    <?php echo $assets_header; ?>
</head>
<body>
<?php echo $content; ?>
<?php echo $assets_footer; ?>
</body>
</html>