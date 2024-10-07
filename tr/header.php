    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.php" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <img class="headerlogo" src="img/YUVEN WORLD CARGO COMPANY2_page-000.png" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
    <a href="index.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active';} ?>">Anasayfa</a>
    <a href="about.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'about.php'){echo 'active';} ?>">Hakkımızda</a>
    <a href="service.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'service.php'){echo 'active';} ?>">Hizmetlerimiz</a>
    <a href="tracking.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'tracking.php'){echo 'active';} ?>">Takip</a>
    <a href="contact.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){echo 'active';} ?>">İletişim</a>
</div>

            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+90 000 00 00</h4>
        </div>
    </nav>
    <!-- Navbar End -->
     
    <style>
        .headerlogo{
            width: 70px;
            vertical-align: middle;
        }
    </style>

