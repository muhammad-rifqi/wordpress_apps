<?php
/* Template Name: Halaman Galeri */
get_header(); ?>

<div id="gallery-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>

        <div class="gallery-grid">
            <?php
            // Query gambar dari media library atau custom post type
            $args = array(
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'posts_per_page' => -1,
                'post_status'    => 'inherit',
            );
            $images = get_posts($args);

            if ($images) {
                foreach ($images as $image) {
                    $img_url = wp_get_attachment_url($image->ID);
                    echo '<div class="gallery-item">';
                    echo '<img src="' . esc_url($img_url) . '" alt="">';
                    echo '</div>';
                }
            } else {
                echo '<p>Tidak ada gambar ditemukan.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
