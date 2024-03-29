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
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $slug ?></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-auto col-12">
                            <div class="share_Save">
                                <button>
                                    <span class="icon"></span>
                                    <span class="label">Share</span>
                                </button>
                                <button>
                                    <span class="icon"></span>
                                    <span class="label">Save</span>
                                </button>
                                <button title="Report this Gig">
                                    <span class="icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
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