<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head") ?>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/company-profile.min.css">
	<title><?= $page['title'] ?></title>
</head>
<main>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<div class="row g-3">
							<div class="col-12">
								<div class="brand-logo">
									<div class="rounded-circle icon">
										<img src="<?= base_url("assets/media/companies/" . $data['id'] .  "/") ?>logo.jpg" alt="Company Logo" width="80">
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="company-brief">
									<h4>Digital Room</h4>
									<p class="text-muted">Since 2019.</p>
								</div>
							</div>
							<div class="col-12">
								<div class="social-links">
									<ul class="nav justify-content-center gap-3">
										<li class="nav-item">
											<a href="" class="btn btn-light"><i class="fa-brands fa-instagram"></i></a>
										</li>
										<li class="nav-item">
											<a href="" class="btn btn-light"><i class="fa-brands fa-facebook-f"></i></a>
										</li>
										<li class="nav-item">
											<a href="" class="btn btn-light"><i class="fa-brands fa-linkedin-in"></i></a>
										</li>
										<li class="nav-item">
											<a href="" class="btn btn-light"><i class="fa-brands fa-x-twitter"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view("components/footer") ?>
</body>

</body>

</html>
