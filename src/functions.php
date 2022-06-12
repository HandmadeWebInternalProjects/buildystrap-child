<?php

use BuildystrapChild\Theme;

// Enqueue scripts and styles from the Theme
add_action('wp_enqueue_scripts', [Theme::class, 'enqueue_styles']);
add_action('wp_enqueue_scripts', [Theme::class, 'enqueue_scripts']);
