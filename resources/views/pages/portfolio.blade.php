@extends('layouts.portfolio')

@section('content')
    <x-portfolio.navigation :profile="$portfolio['profile']" />

    <main id="main-content">
        <section class="hero section-dark" id="top" aria-labelledby="hero-title">
            <div class="hero__inner wrap">
                <div class="hero__copy">
                    <p class="eyebrow hero__edition"><span class="eyebrow__number">E-CV</span>PORTOFOLIO PERSONAL · 2026</p>
                    <p class="hero__intro">SISTEM INFORMASI <span aria-hidden="true">/</span> UBSI</p>
                    <h1 id="hero-title">Achmad<br>Haitsam<span class="hero__period">.</span></h1>
                    <div class="hero__headline-row"><span class="hero__rule" aria-hidden="true"></span><p class="hero__headline">{{ $portfolio['profile']['role'] }}</p></div>
                    <p class="hero__description">{{ $portfolio['profile']['intro'] }}</p>
                    <div class="hero__actions">
                        <a class="button button--primary" href="#projects">Lihat Proyek <span aria-hidden="true">↓</span></a>
                        <a class="button button--outline" href="#contact">Hubungi Saya <span aria-hidden="true">↗</span></a>
                    </div>
                </div>
                <div class="hero-art" aria-hidden="true">
                    <span class="hero-art__orbit hero-art__orbit--one"></span><span class="hero-art__orbit hero-art__orbit--two"></span>
                    <span class="hero-art__sun"></span><span class="hero-art__center">AH</span>
                    <span class="hero-art__label">SISI A <b>—</b> 01</span><span class="hero-art__note">BELAJAR<br>·<br>MEMBANGUN</span>
                </div>
                <span class="hero__vertical-label" aria-hidden="true">CATATAN PERJALANAN · SISTEM INFORMASI</span>
            </div>
            <a class="hero__scroll" href="#about"><span>TELUSURI</span><span aria-hidden="true">↓</span></a>
        </section>

        <section class="about section-cream section-pad" id="about" aria-labelledby="about-heading">
            <div class="wrap">
                <x-portfolio.section-heading number="01" eyebrow="CATATAN PERSONAL" title="Tentang Saya" id="about-heading" />
                <div class="about__grid">
                    <div class="about__opening"><p class="about__lead">Rasa ingin tahu, lalu mencoba.</p><p class="about__byline">SISTEM INFORMASI <span aria-hidden="true">/</span> UBSI</p></div>
                    <div class="about__copy"><p>{{ $portfolio['profile']['about'] }}</p><p class="about__signature">{{ $portfolio['profile']['name'] }}<span>{{ $portfolio['profile']['role'] }}</span></p></div>
                </div>
                <div class="education-card">
                    <p class="eyebrow"><span class="eyebrow__number">PENDIDIKAN</span>PERJALANAN AKADEMIK</p>
                    <div><h3>{{ $portfolio['education']['program'] }}</h3><p>{{ $portfolio['education']['institution'] }}</p></div>
                    <p class="education-card__period">{{ $portfolio['education']['period'] }}<span>{{ $portfolio['education']['semester'] }}</span></p>
                </div>
            </div>
        </section>

        <section class="skills section-olive section-pad" id="skills" aria-labelledby="skills-title">
            <div class="wrap">
                <x-portfolio.section-heading number="02" eyebrow="PERANGKAT & KEMAMPUAN" title="Keahlian" id="skills-title" />
                <div class="skills__grid">
                    @foreach ($portfolio['skills'] as $category => $items)
                        <article class="skill-group"><p class="skill-group__label">{{ str_pad((string) ($loop->index + 1), 2, '0', STR_PAD_LEFT) }} / {{ $category }}</p><ul>@foreach ($items as $skill)<li>{{ $skill }}</li>@endforeach</ul></article>
                    @endforeach
                </div>
                <div class="skills__footnote"><span>TINGKAT PEMROGRAMAN</span><strong>Dasar</strong><span class="skills__divider" aria-hidden="true"></span><span>ARAH BELAJAR</span><strong>Data Analyst tingkat lanjut</strong></div>
            </div>
        </section>

        <section class="experience section-cream section-pad" id="experience" aria-labelledby="experience-heading">
            <div class="wrap">
                <x-portfolio.section-heading number="03" eyebrow="PENGALAMAN LAPANGAN" title="Pengalaman" id="experience-heading" />
                <article class="experience-card">
                    <div class="experience-card__meta"><p>{{ $portfolio['experience']['period'] }}</p><span>MAGANG</span></div>
                    <div class="experience-card__main"><h3>{{ $portfolio['experience']['role'] }}</h3><p class="experience-item__organization">{{ $portfolio['experience']['organization'] }}</p>
                        <ul>@foreach ($portfolio['experience']['activities'] as $activity)<li>{{ $activity }}</li>@endforeach</ul>
                    </div><span class="experience-card__mark" aria-hidden="true">✳</span>
                </article>
            </div>
        </section>

        <section class="projects section-burgundy section-pad" id="projects" aria-labelledby="projects-heading">
            <div class="wrap">
                <x-portfolio.section-heading number="04" eyebrow="KARYA TERPILIH" title="Proyek" theme="dark" id="projects-heading" />
                <p class="projects__intro">Tiga proyek praktik yang sedang dikembangkan dengan bantuan Codex dan tools pengembangan berbasis AI.</p>
                <div class="project-grid">
                    @foreach ($portfolio['projects'] as $project)
                        <x-portfolio.project-card :project="$project" />
                    @endforeach
                </div>
            </div>
        </section>

        <section class="contact section-dark section-pad" id="contact" aria-labelledby="contact-title">
            <div class="wrap contact__inner">
                <div><x-portfolio.section-heading number="05" eyebrow="TERHUBUNG" title="Mari berbincang" theme="dark" id="contact-title" /><p class="contact__copy">Untuk pertanyaan, kolaborasi, atau kesempatan yang sesuai, silakan hubungi saya melalui email.</p><a class="contact__email" href="mailto:{{ $portfolio['profile']['email'] }}">{{ $portfolio['profile']['email'] }} <span aria-hidden="true">↗</span></a></div>
                <div class="contact__seal" aria-hidden="true"><span>ACHMAD</span><b>AH</b><span>HAITSAM · 2026</span></div>
            </div>
        </section>
    </main>

    <footer class="site-footer"><div class="wrap site-footer__inner"><a class="wordmark wordmark--footer" href="#top"><span class="wordmark__seal" aria-hidden="true">A</span><span>{{ $portfolio['profile']['name'] }}</span></a><p>{{ $portfolio['profile']['role'] }} · © {{ date('Y') }} {{ $portfolio['profile']['name'] }}</p><a class="site-footer__top" href="#top">Kembali ke atas ↑</a></div></footer>
@endsection
