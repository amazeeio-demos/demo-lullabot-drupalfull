<?php

// phpcs:ignoreFile
// See /assets/all.settings.php for Lagoon's default settings.

$databases['default']['default'] = array (
  'database' => 'tugboat',
  'username' => 'tugboat',
  'password' => 'tugboat',
  'prefix' => '',
  'host' => 'database',   // Ensure this matches the name of the service in .tugboat/settings.tugboat.php
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
// Use the TUGBOAT_REPO_ID to generate a hash salt for Tugboat sites.
$settings['hash_salt'] = hash('sha256', getenv('TUGBOAT_REPO_ID'));


$settings['update_free_access'] = FALSE;

$settings['file_public_path'] = 'sites/default/files';

$settings['file_private_path'] = getenv('TUGBOAT_ROOT') . '/files-private';

// Set this to the public URL for the environment you want to sync file assets from.
$config['stage_file_proxy.settings']['use_imagecache_root'] = TRUE;
$config['stage_file_proxy.settings']['hotlink'] = FALSE;
