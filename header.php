<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="bg-gray-300">
      <div class="max-w-4xl px-4 mx-auto mb-5">
        <h1 class="py-10 text-3xl"><a href="<?php echo get_home_url(); ?>" class="hover:text-blue-500">Welcome To Our Header!</a></h1>
      </div>
    </div>