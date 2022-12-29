<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div id="topBar" class="w-full h-13 bg-secondary-500">
      <div class="grid items-center grid-cols-6 gap-2 innerContainer h-13">
        <div class="flex justify-center col-span-2 ">
          <picture>
            <source media="(min-width:820px)" srcset="<?php bloginfo('template_directory'); ?>/custom/img/linehaberlogo_md.png">
            <img class="w-20 h-l15 md:w-logomd" id="logo" src="<?php bloginfo('template_directory'); ?>/custom/img/linehaberlogo80.png" alt="<?php bloginfo( 'name' ); ?>">
          </picture>
        </div>
        <div class="flex items-center justify-center col-span-2 mt-1">
          <button class="flex items-center gap-1 pl-2 pr-2 text-white rounded-xl btn-canli bg-primary-500">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path fill="currentColor"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm-2-3.5l6-4.5l-6-4.5z" />
            </svg>
            <span class="text-sm">CANLI İZLE</span>
          </button>
        </div>
        <div class="flex items-center justify-center mt-1 ">
          <button class="flex items-center gap-1 pl-2 pr-2 text-black bg-white rounded-xl btn-canli">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path fill="currentColor"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm-2-3.5l6-4.5l-6-4.5z" />
            </svg>
            <span class="text-sm">RADYO</span>
          </button>
        </div>
        <div class="flex items-center justify-center mt-1 text-white">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="m18.9 20.3l-5.6-5.6q-.75.6-1.725.95Q10.6 16 9.5 16q-2.725 0-4.612-1.887Q3 12.225 3 9.5q0-2.725 1.888-4.613Q6.775 3 9.5 3t4.613 1.887Q16 6.775 16 9.5q0 1.1-.35 2.075q-.35.975-.95 1.725l5.625 5.625q.275.275.275.675t-.3.7q-.275.275-.7.275q-.425 0-.7-.275ZM9.5 14q1.875 0 3.188-1.312Q14 11.375 14 9.5q0-1.875-1.312-3.188Q11.375 5 9.5 5Q7.625 5 6.312 6.312Q5 7.625 5 9.5q0 1.875 1.312 3.188Q7.625 14 9.5 14Z" />
          </svg>
        </div>
      </div>
    </div>
  </header>