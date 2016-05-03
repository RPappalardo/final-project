SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--

CREATE TABLE `nul_users` (
  `user_id` int(255) NOT NULL auto_increment,
  `fname` varchar(25) collate utf8_unicode_ci NOT NULL default '',
  `lname` varchar(25) collate utf8_unicode_ci NOT NULL default '',
  `email` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `username` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  `hash` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `username` (`username`)

) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
