<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-dycian</title>

<!-- CSS -->
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url() . CSS . "bootstrap.min.css"; ?>" />

<!-- Admin Core -->
<link href="<?php echo base_url() . CSS . "nifty.min.css"; ?>" rel="stylesheet">
<!-- Demo CSS -->
<link href="<?php echo base_url() . CSS . "demo/nifty-demo.min.css"; ?>" rel="stylesheet">
<!-- Plugins CSS -->
<link href="<?php echo base_url() . CSS . "plugins.min.css"; ?>" rel="stylesheet">

<!-- Roboto Font -->
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,100,300,500" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() . CSS . "font-awesome.min.css"; ?>" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url() . IMG . "dyci.ico"; ?>" type="image/x-icon" />

<!--Page load progress bar -->
<script src="<?php echo base_url() . JS . "pace.min.js"; ?>"></script>
        
<!-- Custom for Pages -->
<?php foreach ($css as $c): ?>
    <link rel="stylesheet" href="<?php echo base_url() . CSS . $c; ?>">
<?php endforeach; ?>