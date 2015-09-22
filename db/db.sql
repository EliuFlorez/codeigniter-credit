--
-- Table structure for table `settings`
--


CREATE TABLE IF NOT EXISTS `credit_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `credit_users`
--

INSERT INTO `credit_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

CREATE TABLE IF NOT EXISTS `credit_settings` (
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
  `credit_1_mmin` double NOT NULL,
  `credit_1_mmax` double NOT NULL,
  `credit_1_pmin` double NOT NULL,
  `credit_1_pmax` double NOT NULL,
  `credit_1_seguro` float NOT NULL,
  `credit_2_mmin` double NOT NULL,
  `credit_2_mmax` double NOT NULL,
  `credit_2_pmin` double NOT NULL,
  `credit_2_pmax` double NOT NULL,
  `credit_2_seguro` float NOT NULL,
  `credit_3_mmin` double NOT NULL,
  `credit_3_mmax` double NOT NULL,
  `credit_3_pmin` double NOT NULL,
  `credit_3_pmax` double NOT NULL,
  `credit_3_seguro` float NOT NULL,
  `credit_4_mmin` double NOT NULL,
  `credit_4_mmax` double NOT NULL,
  `credit_4_pmin` double NOT NULL,
  `credit_4_pmax` double NOT NULL,
  `credit_4_seguro` float NOT NULL,
  `credit_5_mmin` double NOT NULL,
  `credit_5_mmax` double NOT NULL,
  `credit_5_pmin` double NOT NULL,
  `credit_5_pmax` double NOT NULL,
  `credit_5_seguro` float NOT NULL,
  `credit_6_mmin` double NOT NULL,
  `credit_6_mmax` double NOT NULL,
  `credit_6_pmin` double NOT NULL,
  `credit_6_pmax` double NOT NULL,
  `credit_6_seguro` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `credit_settings` (`id`, `base_min`, `base_max`, `base_efectiva`, `base_nomina`, `simple_min`, `simple_max`, `simple_efectiva`, `simple_nomina`, `ampliada_min`, `ampliada_max`, `ampliada_efectiva`, `ampliada_nomina`,
  `credit_1_mmin`,
  `credit_1_mmax`,
  `credit_1_pmin`,
  `credit_1_pmax`,
  `credit_1_seguro`,
  `credit_2_mmin`,
  `credit_2_mmax`,
  `credit_2_pmin`,
  `credit_2_pmax`,
  `credit_2_seguro`,
  `credit_3_mmin`,
  `credit_3_mmax`,
  `credit_3_pmin`,
  `credit_3_pmax`,
  `credit_3_seguro`,
  `credit_4_mmin`,
  `credit_4_mmax`,
  `credit_4_pmin`,
  `credit_4_pmax`,
  `credit_4_seguro`,
  `credit_5_mmin`,
  `credit_5_mmax`,
  `credit_5_pmin`,
  `credit_5_pmax`,
  `credit_5_seguro`,
  `credit_6_mmin`,
  `credit_6_mmax`,
  `credit_6_pmin`,
  `credit_6_pmax`,
  `credit_6_seguro`
) VALUES
(1,0,1000,30.4,26.84,1001,10000,27.4,24.46,10001,0,25.4,22.85,800,20000,8,36,2.5,800,20000,8,36,2.5,1000,2000,6,12,2.5,3000,20000,12,36,2.5,4000,6000,24,24,2.5,800,5000,8,24,2.5);
