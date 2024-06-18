<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="<?= base_url() ?>assets/media/png/maanv-logo-white.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
                <ul class="navbar-nav d-none">
                    <li class="nav-item dropdown categories">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url() ?>Gigs/all?orderby=views">All Gigs</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>Gigs/detail/test">Gig Detailed</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="javascript:void(0)">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Landing Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url()?>Marketing/freelancer">Landing Page 1</a></li>
                        </ul>
                    </li>
                    <!-- 
                    <li class="nav-item">
                        <a class="nav-link" disabled href="javascript:void(0)">Browse Gigs</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" disabled href="javascript:void(0)">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" disabled >Blogs</a>
                    </li> -->
                </ul>
                <ul class="navbar-nav d-none">
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
                </ul>
            </div>
        </div>
    </nav>
</header>
