<?php
// Detect protocol and domain
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
  ? "https://" : "http://";

// Adjust this if your project is inside a subfolder locally
// Example: /company-projects/cybertron-new/
$project_folder = '/company-projects/cybertron-new';

// Base URL (works locally + live)
$base_url = $protocol . $_SERVER['HTTP_HOST'] . $project_folder . '/';

// Root path for includes
$root_path = $_SERVER['DOCUMENT_ROOT'] . $project_folder;
?>
