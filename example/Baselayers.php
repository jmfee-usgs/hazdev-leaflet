<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Baselayers Example';
  $HEAD = '<link rel="stylesheet" href="hazdev-leaflet.css"/>' .
      '<link rel="stylesheet" href="css/index.css" />';
  $FOOT = '<script src="hazdev-leaflet.js"></script>' .
      '<script src="Baselayers.js"></script>';
}
include '_example.inc.php';
?>

<div class="map"></div>
