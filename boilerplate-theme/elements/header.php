<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Header element for all pages
 * @author Oliver Green <green2go@gmail.com>
 * @license http://www.gnu.org/licenses/gpl.html GPL
 */

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <?php Loader::element('header_required'); ?>
    <link rel="stylesheet" media="all" href="<?php  echo $this->getThemePath(); ?>/css/styles.css" />
</head>
<body>