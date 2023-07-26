<?php

$page_sub_title = (!empty($theme['extra']['subtitle'])) ?  $theme['extra']['subtitle'] : NULL;

if (!empty($page_title) || !empty($page_description)) :  ?>
    <article class="pageHeader">

        <section>
            <h1><?php echo $page_title; ?></h1>
        </section>

        <?php if (!empty($page_sub_title)) : ?>
            <section>
                <p><?php echo $page_sub_title; ?></p>
            </section>
        <?php endif; ?>

        <?php if (!empty($page_description)) : ?>
            <section>
                <p><?php echo $page_description; ?></p>
            </section>
        <?php endif; ?>

    </article>
<?php endif; ?>