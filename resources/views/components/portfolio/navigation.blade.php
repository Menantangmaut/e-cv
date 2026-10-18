@props(['profile'])

<header class="site-header">
    <nav class="site-nav wrap" aria-label="Navigasi utama">
        <a class="wordmark" href="#top" aria-label="Achmad Haitsam — kembali ke beranda"><span class="wordmark__seal" aria-hidden="true">A</span><span>Achmad Haitsam</span></a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav-links" data-nav-toggle><span class="nav-toggle__label">Menu</span><span class="nav-toggle__icon" aria-hidden="true"><i></i><i></i></span></button>
        <ul class="site-nav__links" id="site-nav-links" data-nav-links>
            <li><a href="#top">Beranda</a></li><li><a href="#about">Tentang</a></li><li><a href="#skills">Keahlian</a></li><li><a href="#experience">Pengalaman</a></li><li><a href="#projects">Proyek</a></li><li><a class="nav-contact" href="#contact">Kontak <span aria-hidden="true">↘</span></a></li>
        </ul>
    </nav>
</header>
