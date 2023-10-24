 <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> Sistem Informasi Masjid Az-Zubair Rahandouna</li>
                            <li><span class="icon_phone"></span>+62 823-1896-1769</li>
                        </ul>                               
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.html"><img src="<?= base_url() ?>template/front-end/img/mosque.png" width ="40px"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li class="active"><a href="<?= base_url()?>">Home</a></li>
                                    <li><a href="#">Profil</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('home/visimisi') ?>">Visi Misi</a></li>
                                            <li><a href="<?= base_url('home/struktur') ?>">Struktur Organisasi</a></li>
                                            <li><a href="<?= base_url('home/sapra') ?>">Sarana Dan Prasarana</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('home/pengumuman') ?>">Pengumuman</a></li>
                                    <li><a href="<?= base_url('home/transaksi') ?>">Keuangan</a></li>
                                    <li><a href="<?= base_url('home/kajian') ?>">Kajian</a></li>
                                    <li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
                                    <li><a href="<?= base_url('home/contact') ?>">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->