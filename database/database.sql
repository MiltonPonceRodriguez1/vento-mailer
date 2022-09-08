
-- TABLAS EN PRODUCCIÓN CON TOKENS

DROP TABLE IF EXISTS `developers`;
CREATE TABLE IF NOT EXISTS `developers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(250) DEFAULT NULL,
  `EMAIL` varchar(250) DEFAULT NULL,
  `TOKEN` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2682 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `developers`
--

INSERT INTO `developers` (`ID`, `NOMBRE`, `EMAIL`, `TOKEN`) VALUES
(null, 'Milton Dev', 'miltonponceipn@gmail.com', '62f6b91855e03'),
(null, 'Javier Dev', 'ja.1999.ga@gmail.com', '62f6b91856413'),
(null, 'Humano Dev', 'humano.test.2233@gmail.com', '62f6b918566cd'),
(null, 'Hector Dev', 'hector.poncevna@gmail.com', '62f6b91856913'),
(null, 'Hector Dev', 'hectorponce1im2@gmail.com', '62f6b91856baf'),
(null, 'Dokken Dev', 'xxd39933@gmail.com', '62f6b91856df3');