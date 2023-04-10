<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head") ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view("components/basenav"); ?>
    <main class="">
        <section id="hero">
            <div class="row m-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11 col-12">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-7 col-lg-6 col-12">
                            <div class="text-content">
                                <div class="hero-text">
                                    <div class="row">
                                        <div class="col-xl-8 col-md-11 col-12">
                                            <div class="title">
                                                <h1>Find the perfect freelance services for your business, online!</h1>
                                                <p>
                                                    Work with talented people at the most affordable price to get the most out of your time and cost.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-engine">
                                    <?php $this->elements->loadElement("search-engine") ?>
                                </div>
                                <div class="counter">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-12">
                                            <div class="count-card">
                                                <div class="count">
                                                    <h3>190+</h3>
                                                </div>
                                                <div class="count-label">
                                                    <label for="">Countries</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12">
                                            <div class="count-card">
                                                <div class="count">
                                                    <h3>50+</h3>
                                                </div>
                                                <div class="count-label">
                                                    <label for="">Categories</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12">
                                            <div class="count-card">
                                                <div class="count">
                                                    <h3>1000+</h3>
                                                </div>
                                                <div class="count-label">
                                                    <label for="">Talents</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12">
                                            <div class="count-card">
                                                <div class="count">
                                                    <h3>1000+</h3>
                                                </div>
                                                <div class="count-label">
                                                    <label for="">Opportunities</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-12"></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row m-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11 col-12">
                    <div class="section-title">
                        <h2>Need something done?</h2>
                        <p>
                            Most-viewed and all-time top-selling services
                        </p>
                    </div>
                    <div class="steps">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="step">
                                    <div class="icon">
                                        <img src="" alt="">
                                    </div>
                                    <div class="desc">
                                        <h4>Post a Job</h4>
                                        <p>It's free and easy to post a job. Simply fill in a title, description.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="step">
                                    <div class="icon">
                                        <img src="" alt="">
                                    </div>
                                    <div class="desc">
                                        <h4>Post a Job</h4>
                                        <p>It's free and easy to post a job. Simply fill in a title, description.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="step">
                                    <div class="icon">
                                        <img src="" alt="">
                                    </div>
                                    <div class="desc">
                                        <h4>Post a Job</h4>
                                        <p>It's free and easy to post a job. Simply fill in a title, description.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="step">
                                    <div class="icon">
                                        <img src="" alt="">
                                    </div>
                                    <div class="desc">
                                        <h4>Post a Job</h4>
                                        <p>It's free and easy to post a job. Simply fill in a title, description.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="row m-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11 col-12">
                    <div class="services-title">
                        <div class="title">
                            <h2>Popular Services</h2>
                            <p>
                                Most-viewed and all-time top-selling services
                            </p>
                        </div>
                        <div class="categories">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="services_List">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row g-3">
                                    <?php for ($i = 0; $i < 8; $i++) { ?>
                                        <div class="col-xl-3 col-md-6 col-12">
                                            <div class="service_Single">
                                                <div class="service_Body">
                                                    <div class="media-content">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="like_Button"></div>
                                                    </div>
                                                    <div class="text-content">
                                                        <div class="service_category_Label">Category 1</div>
                                                        <div class="service_Heading">
                                                            <h6><a href="<?= base_url()?>Gigs/detail/test">Post a Job</a></h6>
                                                        </div>
                                                        <div class="service_Reviews">
                                                            <span>Star</span>
                                                            <span>4.5</span>
                                                            <span class="reviewDescription">(10 Reviews)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service_Footer">
                                                    <div class="service_Profile">
                                                        <a href="">
                                                            <img src="" alt="">
                                                            <span>John Powell</span>
                                                        </a>
                                                    </div>
                                                    <div class="service_Pricerange">
                                                        Starting at: <b>$340</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-3">
                                    <?php for ($i = 0; $i < 4; $i++) { ?>
                                        <div class="col-xl-3 col-md-6 col-12">
                                            <div class="service_Single">
                                                <div class="service_Body">
                                                    <div class="media-content">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="like_Button"></div>
                                                    </div>
                                                    <div class="text-content">
                                                        <div class="service_category_Label">Category 1</div>
                                                        <div class="service_Heading">
                                                            <h6><a href="">Post a Job</a></h6>
                                                        </div>
                                                        <div class="service_Reviews">
                                                            <span>Star</span>
                                                            <span>4.5</span>
                                                            <span class="reviewDescription">(10 Reviews)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service_Footer">
                                                    <div class="service_Profile">
                                                        <a href="">
                                                            <img src="" alt="">
                                                            <span>John Powell</span>
                                                        </a>
                                                    </div>
                                                    <div class="service_Pricerange">
                                                        Starting at: <b>$340</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row g-3">
                                    <?php for ($i = 0; $i < 6; $i++) { ?>
                                        <div class="col-xl-3 col-md-6 col-12">
                                            <div class="service_Single">
                                                <div class="service_Body">
                                                    <div class="media-content">
                                                        <div class="image">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="like_Button"></div>
                                                    </div>
                                                    <div class="text-content">
                                                        <div class="service_category_Label">Category 1</div>
                                                        <div class="service_Heading">
                                                            <h6><a href="">Post a Job</a></h6>
                                                        </div>
                                                        <div class="service_Reviews">
                                                            <span>Star</span>
                                                            <span>4.5</span>
                                                            <span class="reviewDescription">(10 Reviews)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service_Footer">
                                                    <div class="service_Profile">
                                                        <a href="">
                                                            <img src="" alt="">
                                                            <span>John Powell</span>
                                                        </a>
                                                    </div>
                                                    <div class="service_Pricerange">
                                                        Starting at: <b>$340</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="all_Services">
                            <a href="<?= base_url()?>Gigs/all?orderby=views">All&nbsp;Serices<span class="icon icon-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view("components/footer") ?>
</body>

</html>
</body>

</html>