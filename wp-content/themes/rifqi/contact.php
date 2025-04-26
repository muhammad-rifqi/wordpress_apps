<?php get_header(); ?>

<div id="contact-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        
        <!-- Konten Halaman -->
        <div class="contact-info">
            <p>Silakan isi formulir di bawah ini untuk menghubungi kami.</p>
        </div>

        <!-- Form Kontak -->
        <form action="" method="post" id="contact-form">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" name="submit_contact">Kirim Pesan</button>
        </form>

        <?php
        // Jika form dikirim, tampilkan pesan sukses (atau gagal)
        if ( isset( $_POST['submit_contact'] ) ) {
            $name = sanitize_text_field( $_POST['name'] );
            $email = sanitize_email( $_POST['email'] );
            $message = sanitize_textarea_field( $_POST['message'] );

            // Kirim email (atau bisa disesuaikan dengan metode pengiriman lainnya)
            $to = 'email@example.com'; // Ganti dengan email tujuan
            $subject = 'Pesan Kontak dari ' . $name;
            $body = "Nama: $name\nEmail: $email\nPesan: $message";
            $headers = array( 'Content-Type: text/plain; charset=UTF-8' );

            wp_mail( $to, $subject, $body, $headers );

            echo '<p>Terima kasih, pesan Anda telah terkirim!</p>';
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
