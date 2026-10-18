<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_portfolio_page_shows_the_expected_sections_and_contact(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('href="#top"', false)
            ->assertSee('href="#about"', false)
            ->assertSee('href="#skills"', false)
            ->assertSee('href="#experience"', false)
            ->assertSee('href="#projects"', false)
            ->assertSee('href="#contact"', false)
            ->assertSee('id="about"', false)
            ->assertSee('id="skills"', false)
            ->assertSee('id="experience"', false)
            ->assertSee('id="projects"', false)
            ->assertSee('id="contact"', false)
            ->assertSee('Achmad Haitsam')
            ->assertSee('Universitas Bina Sarana Informatika (UBSI)')
            ->assertSee('Virtual UCP (VUCP)')
            ->assertSee('Sistem Booking Lapangan Futsal')
            ->assertSee('Aplikasi Absensi ITCOMM')
            ->assertSee('SoundWave Music Store')
            ->assertSee('mailto:achmadhaitsam76@gmail.com', false)
            ->assertSee('Dalam pengembangan');
    }
}
