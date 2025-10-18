# ysq-lp-theme

Tema WordPress ringan untuk landing page konversi Yayasan Syiar Qurani. Optimalkan untuk LP TTSQ, SDITTSQ, dan PTSQ dengan fokus mobile-first dan CTA jelas.

## Instalasi
1. Unduh atau clone repositori ini, lalu pastikan folder utamanya bernama `ysq-lp-theme/`.
2. Salin folder tersebut ke direktori `wp-content/themes/` pada instalasi WordPress Anda.
3. Aktifkan tema **ysq-lp-theme** melalui menu *Appearance → Themes*.

## Membuat Landing Page
1. Buat halaman baru (Pages → Add New) dan pilih template **YSQ Landing – Conversion (No Header/Footer)** pada panel *Page Attributes*.
2. Klik tombol **Patterns → YSQ Landing Patterns → YSQ Landing Conversion** untuk mengisi kerangka halaman secara otomatis.
3. Ganti teks, gambar, dan tautan sesuai kebutuhan tiga LP (TTSQ, SDITTSQ, PTSQ). Pastikan gambar diunggah dengan ukuran optimal dan sudah terkompresi.

## Mengatur CTA & Footer
Buka menu *Appearance → Customize → Landing Page Settings* untuk mengisi:
- **CTA WhatsApp URL**: tautan WA resmi (gunakan format `https://wa.me/` atau `https://api.whatsapp.com/`).
- **CTA Form URL**: tautan form pendaftaran/minat.
- **Video URL** *(opsional)*: tautan video highlight (YouTube, Vimeo, dll) yang akan digunakan di blok galeri.
- **Footer Address**: alamat singkat kampus.
- **Footer Logo URL**: URL logo yang tampil di footer mini.

## Sticky CTA Mobile
- Bilah CTA otomatis muncul saat pengguna scroll di perangkat < 992px.
- Tombol menggunakan tautan dari pengaturan Customizer.
- Fungsi `window.ysqLpLead()` tersedia untuk dipanggil pada event `onSubmit` form atau klik CTA guna integrasi analitik.

## Best Practice Media
- Gunakan format gambar modern (WebP) dengan ukuran maksimum lebar 1600px.
- Terapkan atribut `alt` deskriptif dan aktifkan lazy loading (sudah default pada pola).
- Untuk video, gunakan embed responsif YouTube/Vimeo atau unggah file ringan (< 5 MB) pada hosting sendiri.
