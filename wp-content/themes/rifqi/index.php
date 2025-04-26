<?php get_header(); ?>

    <main class="container">
        <div class="grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="card-deck" style="padding:10px; width:300px">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-img">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                            </div>
                        <?php else : ?>
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrYFKpU5Ck7HruDrOYGIkDeLOmFvI2BbfVbg&s" alt="SHIFTBRAIN">
                        <?php endif; ?>
                    
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-text"><small class="text-muted">Diposting oleh <?php the_author(); ?></small></p>
                        </div>
                    </div>
                </div>

                <div class="card-deck" style="padding:10px; width:300px">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-img">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                            </div>
                        <?php else : ?>
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrYFKpU5Ck7HruDrOYGIkDeLOmFvI2BbfVbg&s" alt="SHIFTBRAIN">
                        <?php endif; ?>
                    
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-text"><small class="text-muted">Diposting oleh <?php the_author(); ?></small></p>
                        </div>
                    </div>
                </div>

                <div class="card-deck" style="padding:10px; width:300px">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-img">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                            </div>
                        <?php else : ?>
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrYFKpU5Ck7HruDrOYGIkDeLOmFvI2BbfVbg&s" alt="SHIFTBRAIN">
                        <?php endif; ?>
                    
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-text"><small class="text-muted">Diposting oleh <?php the_author(); ?></small></p>
                        </div>
                    </div>
                </div>

                <div class="card-deck" style="padding:10px; width:300px">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-img">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                            </div>
                        <?php else : ?>
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrYFKpU5Ck7HruDrOYGIkDeLOmFvI2BbfVbg&s" alt="SHIFTBRAIN">
                        <?php endif; ?>
                    
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-text"><small class="text-muted">Diposting oleh <?php the_author(); ?></small></p>
                        </div>
                    </div>
                </div>

                <div class="card-deck" style="padding:10px; width:300px">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-img">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                            </div>
                        <?php else : ?>
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrYFKpU5Ck7HruDrOYGIkDeLOmFvI2BbfVbg&s" alt="SHIFTBRAIN">
                        <?php endif; ?>
                    
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-text"><small class="text-muted">Diposting oleh <?php the_author(); ?></small></p>
                        </div>
                    </div>
                </div>

                <div class="card-deck" style="padding:10px; width:300px">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-img">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                            </div>
                        <?php else : ?>
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrYFKpU5Ck7HruDrOYGIkDeLOmFvI2BbfVbg&s" alt="SHIFTBRAIN">
                        <?php endif; ?>
                    
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="card-link"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-text"><small class="text-muted">Diposting oleh <?php the_author(); ?></small></p>
                        </div>
                    </div>
                </div>

                

                            
                <?php endwhile; else : ?>
                    <p>Tidak ada postingan ditemukan.</p>
                <?php endif; ?>

            </div>
        </div>
    </main>

<?php get_footer(); ?>

