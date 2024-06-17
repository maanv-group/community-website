<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/media/favicon_io_2/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/media/favicon_io_2/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/media/favicon_io_2/favicon-16x16.png">
<link rel="manifest" href="<?= base_url() ?>assets/media/favicon_io_2/site.webmanifest">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://kit.fontawesome.com/a0b438cfb9.js" crossorigin="anonymous"></script> -->

<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
<?php
if (!is_null($meta)) {
	foreach ($meta["page"] as $key => $value) { ?>
		<meta name="<?= $key ?>" content="<?= $value ?>">
<?php
	}
}
?>

<title><?= $meta["page"]["title"]; ?></title>
