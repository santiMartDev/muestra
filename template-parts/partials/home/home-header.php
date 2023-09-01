<?php

// get_fields
$template = get_field('template', apply_filters('wpml_object_id', 670, 'page'));

if (!empty($template['home']['title'])) :  ?>
<article class="pageHeader">

    <section>
        <h1><?php echo $template['home']['title']; ?></h1>
    </section>

    <?php if (!empty($template['home']['text'])) : ?>
    <section>
        <p><?php echo $template['home']['text']; ?></p>
    </section>
    <?php endif; ?>

</article>
<?php endif; ?>