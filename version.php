<?php // $Id: version.php 228 2013-03-01 06:17:08Z malu $

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2013061800;
$plugin->release   = '2.3, release 2';
$plugin->requires  = 2012062500.00; // Moodle 2.3.0
$plugin->component = 'block_majhub_points';

$plugin->dependencies = array(
    'local_majhub' => 2013030101,
);
