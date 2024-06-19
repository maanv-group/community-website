<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head") ?>

	<!-- Plugin: LightGallery -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery-bundle.min.css" integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js" integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.umd.min.js" integrity="sha512-VOQBxCIgNssJrB8+irZF7L8MvfpAshegc36C3H5QD7vmibXM4uCNaqJIaSNatD2z2ZQQJSx0k+q+m+xsSPp4Xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js" integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js" integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/company-profile.min.css">
	<title><?= $page['title'] ?></title>
</head>

<body>
	<?php $this->load->view("components/basenav"); ?>
	<main class="company-profile">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row g-3">
								<div class="col-12">
									<div class="brand-logo">
										<div class="rounded-circle icon">
											<img src="<?= base_url("assets/media/companies/" . $data['id'] .  "/") ?>logo.jpg" alt="Company Logo" width="80">
										</div>
									</div>
								</div>
								<div class="col-12 text-center">
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
								<hr class="mb-0">
								<div class="col-12">
									<div class="profile-title mb-3">
										<h5>Profile Overview</h5>
									</div>
									<div class="row gx-0 gy-2">
										<div class="col-12">
											<strong class="text-uppercase"><small>Owner Name</small></strong><br>
											Divya Tamhane
										</div>
										<div class="col-12">
											<strong class="text-uppercase"><small>Location</small></strong><br>
											Mumbai, Maharashtra. India
										</div>
										<div class="col-12">
											<strong class="text-uppercase"><small>Established</small></strong><br>
											February 2019
										</div>
										<div class="col-12">
											<a href="" class="btn btn-theme-01 w-100">Contact</a>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="profile-title mb-3">
										<h5>Location</h5>
									</div>
									<div class="">
										<iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.6727381178794!2d72.96132828594276!3d19.165797402898875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b98a9d7a1af9%3A0x954db4c09383f9b3!2sMaanv%20Group!5e0!3m2!1sen!2sin!4v1718691794894!5m2!1sen!2sin" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="card mb-2">
						<div class="card-body">
							<ul class="nav nav-pills" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">About</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services-tab-pane" type="button" role="tab" aria-controls="services-tab-pane" aria-selected="false">Services</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery-tab-pane" type="button" role="tab" aria-controls="gallery-tab-pane" aria-selected="false">Photo Gallery</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact Details</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
							<div class="card">
								<div class="card-body">
									<div class="row g-3">
										<div class="col-12">
											<div class="mb-3">
												<h5>About Company</h5>
											</div>
											<div class="">
												<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque quo in nesciunt officia, inventore vel voluptatum saepe adipisci et debitis unde voluptates, maiores laudantium repellendus provident excepturi labore. Officia doloremque velit, commodi voluptate assumenda saepe laudantium minus excepturi! Eligendi voluptatum deleniti minima officiis deserunt reiciendis at optio, dolorem commodi accusamus, accusantium numquam consequuntur aliquid amet cupiditate tempore. Voluptate tempore, commodi fugit consequatur nihil, vero voluptates quo harum eos modi necessitatibus earum a sit distinctio consequuntur expedita, non error magnam. Soluta asperiores, possimus iusto optio molestiae veniam, distinctio harum nihil dolorem fuga vitae aut odio! Ex veritatis soluta perspiciatis quod quibusdam?</p>
												<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum debitis delectus maiores totam, quia deleniti quo corporis porro assumenda ullam.</p>
												<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nisi consequatur impedit natus ex dolore numquam aut? Quae consectetur adipisci distinctio enim aspernatur in. Repudiandae culpa, qui voluptates exercitationem libero, esse neque sed illum repellat nostrum veniam consequuntur, blanditiis nihil.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
							<div class="card">
								<div class="card-body">
									<div class="row g-3">
										<div class="col-12">
											<div class="mb-3">
												<h5>About Company</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="gallery-tab-pane" role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
							<div class="card">
								<div class="card-body">
									<div class="row g-3">
										<div class="col-12">
											<div class="mb-3">
												<h5>Gallery</h5>
											</div>
											<div class="row g-3" id="lightgallery">
												<?php for ($i = 0; $i < 10; $i++) : ?>
													<a class="col-lg-4 col-md-6 col-12" href="https://placehold.co/1500x2125/jpg">
														<picture>
															<source srcset="https://placehold.co/500x300/webp" type="image/webp">
															<source srcset="https://placehold.co/500x300/jpg" type="image/jpg">
															<img src="https://placehold.co/500x300/jpg" alt="" class="w-100">
														</picture>
													</a>
												<?php endfor ?>
											</div>
											<script type="text/javascript">
												lightGallery(document.getElementById('lightgallery'), {
													plugins: [lgZoom, lgThumbnail],
													speed: 500,
												});
											</script>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
							<div class="card">
								<div class="card-body">
									<div class="row g-3">
										<div class="col-12">
											<div class="mb-3">
												<h5>About Company</h5>
											</div>
											<div class="">
												<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque quo in nesciunt officia, inventore vel voluptatum saepe adipisci et debitis unde voluptates, maiores laudantium repellendus provident excepturi labore. Officia doloremque velit, commodi voluptate assumenda saepe laudantium minus excepturi! Eligendi voluptatum deleniti minima officiis deserunt reiciendis at optio, dolorem commodi accusamus, accusantium numquam consequuntur aliquid amet cupiditate tempore. Voluptate tempore, commodi fugit consequatur nihil, vero voluptates quo harum eos modi necessitatibus earum a sit distinctio consequuntur expedita, non error magnam. Soluta asperiores, possimus iusto optio molestiae veniam, distinctio harum nihil dolorem fuga vitae aut odio! Ex veritatis soluta perspiciatis quod quibusdam?</p>
												<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum debitis delectus maiores totam, quia deleniti quo corporis porro assumenda ullam.</p>
												<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nisi consequatur impedit natus ex dolore numquam aut? Quae consectetur adipisci distinctio enim aspernatur in. Repudiandae culpa, qui voluptates exercitationem libero, esse neque sed illum repellat nostrum veniam consequuntur, blanditiis nihil.</p>
											</div>
										</div>
										<div class="col-12">
											<div class="mb-3">
												<h5>Gallery</h5>
											</div>

										</div>
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
