<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?> <!-- write at the end of the head tag -->
</head>
<body <?php body_class('example'); ?>>
    <?php wp_body_open(); ?>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque laboriosam enim debitis porro ipsa voluptates veniam dicta velit optio rerum perspiciatis, ipsum perferendis neque laborum culpa eius, voluptate quaerat ad!</p>

    <?php wp_footer(); ?>
</body>
</html>