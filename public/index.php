<?php
# Display errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('VIEWS_DIR', dirname(__DIR__) . '/app/views/');

require_once(VIEWS_DIR . 'main.template.php');
