--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_min` double NOT NULL,
  `base_max` double NOT NULL,
  `base_efectiva` float NOT NULL,
  `base_nomina` float NOT NULL,
  `simple_min` double NOT NULL,
  `simple_max` double NOT NULL,
  `simple_efectiva` float NOT NULL,
  `simple_nomina` float NOT NULL,
  `ampliada_min` double NOT NULL,
  `ampliada_max` double NOT NULL,
  `ampliada_efectiva` float NOT NULL,
  `ampliada_nomina` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `base_min`, `base_max`, `base_efectiva`, `base_nomina`, `simple_min`, `simple_max`, `simple_efectiva`, `simple_nomina`, `ampliada_min`, `ampliada_max`, `ampliada_efectiva`, `ampliada_nomina`) VALUES
(1, 0, 1000, 30.4, 26.84, 1001, 10000, 27.4, 24.46, 10001, 0, 25.4, 22.85);
