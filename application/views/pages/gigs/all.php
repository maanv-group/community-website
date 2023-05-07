<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head") ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view("components/basenav"); ?>
    <main class="gig_Detailed">
        <div class="row m-0 justify-content-center">
            <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11 col-12">
                <header>
                    <div class="row justify-content-between">
                        <div class="col-md-auto col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gigs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </header>
                <div class="row m-0">
                    <?php
                    foreach ($gigs["top"] as $gig) { ?>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="gig__single">
                                <div class="gig__banner">
                                    <img src="" alt="">
                                </div>
                                <div class="text-content">
                                    <div class="gig__title">
                                        <h3><a href="#"><?= $gig->title; ?></a></h3>
                                    </div>
                                    <div class="gig__reach">
                                        <div class="row justify-content-between">
                                            <div class="col-md-auto col-12">
                                                <div class="gig__ratings">⭐&nbsp;<?= $gig->avg_rating; ?></div>
                                            </div>
                                            <div class="col-md-auto col-12">
                                                <div class="gig__reviews"><?= $gig->reviews_count; ?>&nbsp;Reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gig__price">
                                        Starting at&nbsp;&#8377;<span><?= substr($gig->price, 0, 4); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php $this->load->view("components/footer") ?>
</body>

</html>
</body>

</html>

</html>

</html>

</html>