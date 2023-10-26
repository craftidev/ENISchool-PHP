<?php
# PHP errors config
ini_set('display_errors', 1);
error_reporting(E_ALL);

# Constantes
define('VIEWS_DIR', dirname(__DIR__) . '/app/views/');
define('CONTROLLERS_DIR', dirname(__DIR__) . '/app/controllers/');

# Root display
require_once(VIEWS_DIR . 'main.template.php');
