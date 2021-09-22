<?php
/**
 * Plugin Name: Astra E2E Helper
 * Plugin URI:  https://github.com/brainstormforce/astra
 * Description: Helper REST API endpoints for the Astra E2E testing framework.
 * Author:      Brainstorm Force
 * Author URI:  https://brainstormforce.com
 *
 * @package Astra
 */

namespace Astra\E2E;

require_once __DIR__ . '/rest-api/namespace.php';
require_once __DIR__ . '/customizer-settings/namespace.php';

REST\bootstrap();
Customizer_Settings\bootstrap();
