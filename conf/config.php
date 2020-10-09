<?php

/**
 * Config for the project
 *
 * EDIT ONLY AS PART OF GIT REPOSITORY
 * FOR LOCAL CHANGES USE config.local.php
 *
 */

$debugIpArray = [];

if (file_exists(__DIR__ . '/config.local.php')) {
    include_once __DIR__ . '/config.local.php'; // use config.local.dist.php as specimen
}
