<?php


require_once('pages/init.php');

require_once('pages/header.php');

require_once('pages/body_dump.php');

require_once('pages/footer.php');

$DB->query("CREATE TABLE IF NOT EXISTS `fruit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");

   
?>