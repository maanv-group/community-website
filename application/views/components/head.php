<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>assets/media/favicon_io_2/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>assets/media/favicon_io_2/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/media/favicon_io_2/favicon-16x16.png">
<link rel="manifest" href="<?= base_url()?>assets/media/favicon_io_2/site.webmanifest">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">

<script src="https://kit.fontawesome.com/a0b438cfb9.js" crossorigin="anonymous"></script>

<?php
foreach ($meta["page"] as $key => $value) {?>
<meta name="<?= $key ?>" content="<?= $value ?>">
<?php 
}
?>

<title><?= $meta["page"]["title"]; ?></title>