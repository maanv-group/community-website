<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head") ?>
    <title>We are Under Maintenance</title>
</head>

<body>
    <?php $this->load->view("components/header_nonav"); ?>
    <main class="status_maintenance">
        <div class="row m-0 justify-content-center">
            <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11 col-12">
                <div class="row flex-row-reverse">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="media-content"></div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="text-content">
                            <div class="title mb-4">
                                <h1 class="text-theme-01-white"><span>We Are</span> Under Maintenance</h1>
                            </div>
                            <div class="desc">
                                <p>We are improving our website!</p>
                                <p>
                                    We'll back on May 31, 2023.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <?php $this->load->view("components/footer") ?> -->
</body>

</html>