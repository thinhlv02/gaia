<meta charset="UTF-8">
<title><?php echo isset($title) && $title ? $title : 'GAIA - Ứng dụng đặt Dịch vụ gia đình: điện nước, điện lạnh, giúp việc'?></title>
<link rel="shortcut icon" type="image/png" href="<?php echo public_url('images/favicon.png')?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo isset($description) && $description ? $description : 'GAIA là cầu nối giữa các gia đình và những Kỹ Thuật viên sửa chữa. Nhanh chóng, đảm bảo với đặt dịch vụ sửa chữa điện nước, điện lạnh, giúp việc'?>">
<meta name="apple-itunes-app" content="app-id=1455427957">
<?php echo isset($robots) && $robots ? '<meta name="robots" content="'.$robots.'">' : ''?>
<?php echo isset($keywords) && $keywords ? '<meta name="keywords" content="'.$keywords.'"/>' : ''?>
<?php echo isset($canonical) && $canonical ? '<link rel="canonical" href="'.$canonical.'"/>' : ''?>

<meta property="og:title" content="<?php echo isset($title) && $title ? $title : 'GAIA - Ứng dụng đặt Dịch vụ gia đình: điện nước, điện lạnh, giúp việc'?>" />
<meta property="og:description" content="<?php echo isset($description) && $description ? $description : 'GAIA là cầu nối giữa các gia đình và những Kỹ Thuật viên sửa chữa. Nhanh chóng, đảm bảo với đặt dịch vụ sửa chữa điện nước, điện lạnh, giúp việc'?>" />
<meta property="og:url" content="<?php echo isset($page_url) ? $page_url : base_url();?>" />
<meta property="og:site_name" content="GAIA - Ứng dụng đặt Dịch vụ gia đình: điện nước, điện lạnh, giúp việc" />
<meta property="og:image" content="<?php echo isset($image) ? $image : public_url('images/og_image.png')?>" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="200" />
<meta property="og:type" content="website" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
<link href="<?php echo base_url('public/css/responsive.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<script src="<?php echo public_url('js/jquery.min.js')?>"></script>
<script src="<?php echo public_url('js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('public/js/page.js'); ?>"></script>