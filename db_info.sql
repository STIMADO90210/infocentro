-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2016 a las 17:39:59
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_info`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_info`
--

CREATE TABLE `blog_info` (
  `id_art` int(11) NOT NULL,
  `fec_art` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_art` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cont_art` longtext COLLATE utf8_spanish_ci NOT NULL,
  `img_art` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog_info`
--

INSERT INTO `blog_info` (`id_art`, `fec_art`, `titulo_art`, `cont_art`, `img_art`) VALUES
(1, '01-12-2016', 'Sistema de Registro de Visiitas Terminado ', '                        EL PROGRAMADOR RAFAEL OROZCO Y EL LIDEL DE PROYECTO  MERVIN VILLALOBOS CULMINARON LA VERSION 1.0 DEL ISSITEMA DE REGISTRO DE VISITAS\r\n                        ', 'rafa.jpg'),
(2, '02-12-2016', 'sueÃ±os de gigantes', '                                                \r\n                        nuevo infocentro hubicado en el barrio el gaitero de la parroquia luishurtado higuera                        ', 'panfleto2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comenta`
--

CREATE TABLE `comenta` (
  `id_come` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nick` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `id_art` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comenta`
--

INSERT INTO `comenta` (`id_come`, `fecha`, `hora`, `nick`, `comentario`, `id_art`) VALUES
(1, '05-12-2016', '05-41-51 p', 'rafael', '                        \r\n                        esto esta xuxa madre buco atalado manso', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont`
--

CREATE TABLE `cont` (
  `id_cont` int(11) NOT NULL,
  `dia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `cont_nuevos` int(9) NOT NULL,
  `cont_regulo` int(9) NOT NULL,
  `cont_indio` int(9) NOT NULL,
  `cont_desc` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cont`
--

INSERT INTO `cont` (`id_cont`, `dia`, `fecha`, `cont_nuevos`, `cont_regulo`, `cont_indio`, `cont_desc`) VALUES
(1, 'jueves', '2016-12-01', 1, -1, 0, 0),
(2, 'domingo', '2016-12-04', 3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discap`
--

CREATE TABLE `discap` (
  `id_disc` int(11) NOT NULL,
  `discapacida` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `discap`
--

INSERT INTO `discap` (`id_disc`, `discapacida`) VALUES
(1, 'visual'),
(2, 'auditiva'),
(3, 'connigtiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disc_user`
--

CREATE TABLE `disc_user` (
  `id_disc_user` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `disc_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `disc_user`
--

INSERT INTO `disc_user` (`id_disc_user`, `id_user`, `disc_user`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 1),
(5, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equip` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `horent` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `horsal` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `nro_equip` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indigena`
--

CREATE TABLE `indigena` (
  `id_ind` int(11) NOT NULL,
  `comunidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `indigena`
--

INSERT INTO `indigena` (`id_ind`, `comunidad`) VALUES
(1, 'gocho'),
(2, 'guajiro'),
(3, 'yanomami');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indigena_user`
--

CREATE TABLE `indigena_user` (
  `id_ind_user` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `indi_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `indigena_user`
--

INSERT INTO `indigena_user` (`id_ind_user`, `id_user`, `indi_user`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 2),
(5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mot_visita`
--

CREATE TABLE `mot_visita` (
  `id_mot` int(11) NOT NULL,
  `motivo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mot_visita`
--

INSERT INTO `mot_visita` (`id_mot`, `motivo`) VALUES
(1, 'usar equipo'),
(2, 'reunion consejo comunal'),
(3, 'imprimir documento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id_niv` int(11) NOT NULL,
  `nombre_niv` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_niv`, `nombre_niv`, `email`, `password`, `nivel`) VALUES
(1, 'rafael orozco', 'equintero171@gmail.com', 'alfa3000', 0),
(2, 'mervin villalobos', 'm_villalobos@hotmail.com', 'gigante', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_mot_vis`
--

CREATE TABLE `reg_mot_vis` (
  `id_reg_vis` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `mot_visita` int(9) NOT NULL,
  `fecha_visita` date NOT NULL,
  `dia_visita` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reg_mot_vis`
--

INSERT INTO `reg_mot_vis` (`id_reg_vis`, `id_user`, `mot_visita`, `fecha_visita`, `dia_visita`) VALUES
(1, 1, 1, '2016-12-01', 'jueves'),
(2, 2, 2, '2016-12-04', 'domingo'),
(3, 3, 3, '2016-12-04', 'domingo'),
(4, 4, 2, '2016-12-04', 'domingo'),
(5, 5, 3, '2016-12-04', 'domingo'),
(6, 2, 3, '2016-12-04', 'domingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_user`
--

CREATE TABLE `reg_user` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula_user` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono_user` varchar(14) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo_user` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_inscrip` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Volcado de datos para la tabla `reg_user`
--

INSERT INTO `reg_user` (`id_user`, `nombre_user`, `cedula_user`, `telefono_user`, `fecha_nac`, `sexo_user`, `fecha_inscrip`, `tiempo`, `cont_vis`, `id_info`) VALUES
(1, 'laura bueno', '11391187', '02612116255', '1969-02-23', 'f', '2016-12-01 19:49:43.146381', 0, 1, 0),
(2, 'blanca bueno', '1519636', '02612116255', '1939-01-04', 'f', '2016-12-04 14:23:56.384706', 1, 2, 0),
(3, 'luz bueno', '10101010', '02612116255', '1972-08-09', 'f', '2016-12-04 14:24:58.866294', 0, 1, 0),
(4, 'jose bueno', '20202020', '02612116255', '1965-00-17', 'm', '2016-12-04 14:39:05.433335', 0, 1, 0),
(5, 'eduardo bueno', '30303030', '02612116255', '1967-02-22', 'm', '2016-12-04 14:44:48.934975', 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `img_slider` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slider`, `img_slider`) VALUES
(1, 'coworkers.jpg'),
(2, 'desktop.jpg'),
(3, 'infocentro1.jpg'),
(4, 'HTML5.jpg'),
(5, 'iphone.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`id_art`);

--
-- Indices de la tabla `comenta`
--
ALTER TABLE `comenta`
  ADD PRIMARY KEY (`id_come`);

--
-- Indices de la tabla `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indices de la tabla `discap`
--
ALTER TABLE `discap`
  ADD PRIMARY KEY (`id_disc`);

--
-- Indices de la tabla `disc_user`
--
ALTER TABLE `disc_user`
  ADD PRIMARY KEY (`id_disc_user`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equip`);

--
-- Indices de la tabla `indigena`
--
ALTER TABLE `indigena`
  ADD PRIMARY KEY (`id_ind`);

--
-- Indices de la tabla `indigena_user`
--
ALTER TABLE `indigena_user`
  ADD PRIMARY KEY (`id_ind_user`);

--
-- Indices de la tabla `mot_visita`
--
ALTER TABLE `mot_visita`
  ADD PRIMARY KEY (`id_mot`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_niv`);

--
-- Indices de la tabla `reg_mot_vis`
--
ALTER TABLE `reg_mot_vis`
  ADD PRIMARY KEY (`id_reg_vis`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `comenta`
--
ALTER TABLE `comenta`
  MODIFY `id_come` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cont`
--
ALTER TABLE `cont`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `discap`
--
ALTER TABLE `discap`
  MODIFY `id_disc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `disc_user`
--
ALTER TABLE `disc_user`
  MODIFY `id_disc_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equip` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `indigena`
--
ALTER TABLE `indigena`
  MODIFY `id_ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `indigena_user`
--
ALTER TABLE `indigena_user`
  MODIFY `id_ind_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mot_visita`
--
ALTER TABLE `mot_visita`
  MODIFY `id_mot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id_niv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `reg_mot_vis`
--
ALTER TABLE `reg_mot_vis`
  MODIFY `id_reg_vis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
