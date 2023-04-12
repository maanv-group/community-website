<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/media/png/maanv-logo-white.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Become&nbsp;a&nbsp;Seller</a>
                    </li>
                    <?php if (isset($_SESSION["username"])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Actions/logout") ?>">Logout</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Pages/login") ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sign-up" href="<?= base_url("Pages/enroll") ?>">Sign&nbsp;Up</a>
                        </li>
                    <?php  } ?>
                </ul> -->
            </div>
        </div>
    </nav>
</header>