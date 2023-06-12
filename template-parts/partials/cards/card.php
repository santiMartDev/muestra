<a class="card" href="<?php the_permalink(); ?>">
    <figure>
        <picture>
            <img src="<?php echo $thumb_url[0]; ?>" alt="">
        </picture>
    </figure>
    <figcaption>
        <p><?php the_title(); ?></p>
        <small><?php echo $location; ?></small>
    </figcaption>
</a>