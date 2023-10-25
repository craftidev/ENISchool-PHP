<?php
define('VIEWS_DIR', dirname(__DIR__) . '/app/views/');

$menu_display = file_get_contents(VIEWS_DIR . 'menu.php');
$main_display = file_get_contents(VIEWS_DIR . 'createRestaurant.template.php');

require_once(VIEWS_DIR . 'main.template.php');
