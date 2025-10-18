<?php
/**
 * Landing conversion block pattern registration.
 *
 * @package ysq-lp-theme
 */

if ( ! function_exists( 'register_block_pattern' ) ) {
    return;
}

$ysq_lp_pattern_content = <<<'HTML'
<!-- wp:group {"tagName":"section","className":"lp-section lp-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-hero" id="hero">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h1>Raih Masa Depan Cerah Bersama YSQ</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Belajar dalam ekosistem islami modern dengan pengajar terbaik dan kurikulum yang relevan untuk generasi masa depan.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"lp-cta-group"} -->
        <div class="wp-block-buttons lp-cta-group">
            <!-- wp:button {"className":"btn btn-primary","metadata":{"name":"Form CTA"}} -->
            <div class="wp-block-button btn btn-primary"><a class="wp-block-button__link wp-element-button cta-form-button" href="#lp-form" data-scroll="smooth" data-cta-target="form">Isi Form Minat</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"btn btn-outline","metadata":{"name":"WhatsApp CTA"}} -->
            <div class="wp-block-button btn btn-outline"><a class="wp-block-button__link wp-element-button cta-wa-button" href="#lp-whatsapp" data-scroll="smooth" data-cta-target="whatsapp">Konsultasi WA</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"lp-section lp-benefit","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-benefit" id="benefit">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h2>Keunggulan Utama</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"grid-3"} -->
        <div class="wp-block-columns grid-3">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"card","layout":{"type":"constrained"}} -->
                <div class="wp-block-group card">
                    <!-- wp:heading {"level":3} -->
                    <h3>Guru Profesional</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Pengajar tersertifikasi dengan pendekatan personal sehingga setiap siswa mendapatkan perhatian penuh.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"card","layout":{"type":"constrained"}} -->
                <div class="wp-block-group card">
                    <!-- wp:heading {"level":3} -->
                    <h3>Kurikulum Terpadu</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Integrasi kurikulum nasional, keislaman, dan teknologi sehingga siswa siap menghadapi tantangan masa depan.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"card","layout":{"type":"constrained"}} -->
                <div class="wp-block-group card">
                    <!-- wp:heading {"level":3} -->
                    <h3>Lingkungan Islami</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Pembiasaan ibadah dan karakter islami dalam setiap aktivitas harian siswa.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"lp-section lp-program","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-program" id="program">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h2>Program &amp; Kurikulum</h2>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"lp-program-list"} -->
        <ul class="lp-program-list"><li>Program Tahfidz harian dengan target hafalan realistis.</li><li>Kelas STEAM berbasis proyek untuk melatih kolaborasi.</li><li>Pembinaan karakter dan leadership melalui kegiatan komunitas.</li><li>Bahasa asing intensif (Arab &amp; Inggris) untuk kesiapan global.</li></ul>
        <!-- /wp:list -->
        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"className":"btn btn-outline"} -->
            <div class="wp-block-button btn btn-outline"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noopener">Lihat Silabus</a></div>
            <!-- /wp:button --></div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"lp-section lp-gallery","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-gallery" id="gallery">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h2>Fasilitas &amp; Aktivitas</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"lp-media-gallery","layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group lp-media-gallery">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="https://placehold.co/600x400" alt="Kegiatan belajar interaktif" loading="lazy" decoding="async"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="https://placehold.co/600x400" alt="Fasilitas sekolah modern" loading="lazy" decoding="async"/></figure>
            <!-- /wp:image -->

            <!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"className":"is-type-video lp-video-embed"} -->
            <figure class="wp-block-embed is-type-video"><div class="wp-block-embed__wrapper">
https://www.youtube.com/watch?v=dQw4w9WgXcQ
</div></figure>
            <!-- /wp:embed -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"lp-section lp-testimonials","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-testimonials" id="testimoni">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h2>Apa Kata Orang Tua &amp; Alumni</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"lp-testimonials"} -->
        <div class="wp-block-columns lp-testimonials-grid">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"lp-testimonial","layout":{"type":"constrained"}} -->
                <div class="wp-block-group lp-testimonial">
                    <!-- wp:quote -->
                    <blockquote class="wp-block-quote"><p>"Anak saya menjadi lebih percaya diri dan disiplin setelah belajar di YSQ."</p><cite>Rina • Orang Tua Siswa</cite></blockquote>
                    <!-- /wp:quote -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"lp-testimonial","layout":{"type":"constrained"}} -->
                <div class="wp-block-group lp-testimonial">
                    <!-- wp:quote -->
                    <blockquote class="wp-block-quote"><p>"Lingkungan Islami dan fasilitas digitalnya sangat menunjang pengembangan bakat."</p><cite>Ahmad • Alumni</cite></blockquote>
                    <!-- /wp:quote -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"lp-section lp-faq","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-faq" id="faq">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h2>Pertanyaan Umum</h2>
        <!-- /wp:heading -->

        <!-- wp:group -->
        <div class="wp-block-group">
            <!-- wp:html -->
            <details>
                <summary>Bagaimana proses pendaftaran?</summary>
                <p>Isi form minat atau hubungi kami via WhatsApp. Tim admission akan menghubungi untuk jadwal observasi.</p>
            </details>
            <details>
                <summary>Apakah tersedia beasiswa?</summary>
                <p>Tersedia kuota beasiswa prestasi dan keringanan biaya dengan syarat tertentu.</p>
            </details>
            <details>
                <summary>Apakah program boarding tersedia?</summary>
                <p>Kami menyediakan opsi boarding untuk jenjang tertentu dengan pendampingan ustadz/ustadzah profesional.</p>
            </details>
            <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"lp-section lp-cta-final","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-cta-final" id="lp-form">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h2>Langkah Selanjutnya</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Isi form minat atau hubungi tim kami untuk konsultasi program terbaik sesuai kebutuhan putra-putri Anda.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"btn btn-primary"} -->
            <div class="wp-block-button btn btn-primary"><a class="wp-block-button__link wp-element-button cta-form-button" href="#" target="_blank" rel="noopener" data-cta-target="form" onclick="window.ysqLpLead && window.ysqLpLead()">Isi Form Sekarang</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"lp-section lp-cta-final","layout":{"type":"constrained"}} -->
<section class="wp-block-group lp-section lp-cta-final" id="lp-whatsapp">
    <!-- wp:group {"className":"lp-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group lp-container">
        <!-- wp:heading -->
        <h2>Butuh Konsultasi?</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Kami siap membantu menjawab pertanyaan Anda mengenai TTSQ, SDITTSQ, dan PTSQ.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"btn btn-outline"} -->
            <div class="wp-block-button btn btn-outline"><a class="wp-block-button__link wp-element-button cta-wa-button" href="#" target="_blank" rel="noopener" data-cta-target="whatsapp">Hubungi via WhatsApp</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->
HTML;

if ( ! function_exists( 'ysq_lp_get_landing_pattern_content' ) ) {
    /**
     * Retrieve the landing pattern markup.
     *
     * @return string
     */
    function ysq_lp_get_landing_pattern_content() {
        global $ysq_lp_pattern_content;

        return $ysq_lp_pattern_content;
    }
}

register_block_pattern(
    'ysq-lp-theme/landing-conversion',
    [
        'title'         => __( 'YSQ Landing Conversion', 'ysq-lp-theme' ),
        'description'   => __( 'Hero, benefit, program, gallery, testimonial, FAQ, and CTA blocks for YSQ landing pages.', 'ysq-lp-theme' ),
        'categories'    => [ 'ysq-lp-theme' ],
        'content'       => $ysq_lp_pattern_content,
        'viewportWidth' => 1280,
    ]
);
