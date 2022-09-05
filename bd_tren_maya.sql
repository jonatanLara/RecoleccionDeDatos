-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2022 a las 00:26:07
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tren_maya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_tm_cae`
--

CREATE TABLE `bd_tm_cae` (
  `bd_tm_car_id` int(11) NOT NULL,
  `bd_tm_car_calve` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bd_tm_cae`
--

INSERT INTO `bd_tm_cae` (`bd_tm_car_id`, `bd_tm_car_calve`) VALUES
(1, 'Arqueólogo de prospección'),
(2, 'Arqueólogo de excavación'),
(3, 'Topógrafos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_tm_cdg`
--

CREATE TABLE `bd_tm_cdg` (
  `bd_tm_cdg_id` int(11) NOT NULL,
  `bd_tm_cdg_nombre` varchar(50) NOT NULL,
  `bd_tm_cdg_codigo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bd_tm_cdg`
--

INSERT INTO `bd_tm_cdg` (`bd_tm_cdg_id`, `bd_tm_cdg_nombre`, `bd_tm_cdg_codigo`) VALUES
(1, 'Cerámica', 'CERA'),
(2, 'Lítica', 'LITI'),
(3, 'Malacológico', 'EMAL'),
(4, 'Metal', 'META'),
(5, 'Elemento histórico (S.XVI-XIX)', 'HIST'),
(6, 'Elemento moderno (S.XX-XXI)', 'ELMO'),
(7, 'Escultura exenta', 'ESCU'),
(8, 'Fósil', 'FOSI'),
(9, 'Madera', 'MADE'),
(10, 'Vidrio', 'VIDR'),
(11, 'Resto botánico', 'RBOT'),
(12, 'Resto de estuco', 'ESTU'),
(13, 'Resto óseo', 'REOS'),
(14, 'Objeto cerámico', 'OCER'),
(15, 'Objeto lítico', 'OLIT'),
(16, 'Objeto óseo', 'OBSO'),
(17, 'Objeto de vidrio', 'OVID'),
(18, 'Objeto de metal', 'OMET'),
(19, 'Objeto malacológico', 'OMAL'),
(20, 'Objeto de estuco', 'OBES'),
(21, 'Muestra', 'MTRA'),
(22, 'Otro', 'OTRO'),
(23, 'Entierro', 'ENTI'),
(24, 'Contexto espacial', 'CESP'),
(25, 'Cista', 'CIST'),
(26, 'Saqueo', 'SAQO'),
(27, 'Banco de material', 'BAMA'),
(28, 'Rasgo natual asociado', 'RNAS'),
(29, 'Metate', 'METE'),
(30, 'Chultún', 'CHLT'),
(31, 'Elemento arquitectónico', 'ELAR'),
(32, 'Topografía de capa', 'TOCA'),
(33, 'Piso de estuco', 'PIES'),
(34, 'Piso de piedra', 'PPIE'),
(35, 'Apisonado de tierra', 'APIT'),
(36, 'Punto de retícula', 'RETI'),
(37, 'Tipografía de perfil', 'TOPE'),
(38, 'Topografía de planta', 'TOPA'),
(39, 'Línea arquitectónica', 'LARQ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_tm_ett`
--

CREATE TABLE `bd_tm_ett` (
  `bd_tm_ett_id` int(11) NOT NULL,
  `bd_tm_ett_estatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bd_tm_ett`
--

INSERT INTO `bd_tm_ett` (`bd_tm_ett_id`, `bd_tm_ett_estatus`) VALUES
(1, 'Activo'),
(2, 'Baja'),
(3, 'Cambio de tramo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_tm_pro`
--

CREATE TABLE `bd_tm_pro` (
  `bd_tm_pro_id` int(11) NOT NULL,
  `bd_tm_pro_nombre` varchar(50) NOT NULL,
  `bd_tm_pro_apellido_p` varchar(45) NOT NULL,
  `bd_tm_pro_apellido_m` varchar(45) NOT NULL,
  `bd_tm_pro_edad` int(11) NOT NULL,
  `bd_tm_pro_genero` varchar(10) NOT NULL,
  `bd_tm_pro_origen` varchar(50) NOT NULL,
  `bd_tm_pro_matricula` varchar(8) NOT NULL,
  `bd_tm_pro_correo` varchar(50) NOT NULL,
  `bd_tm_pro_telefono` varchar(10) NOT NULL,
  `bd_tm_pro_estudio` varchar(50) NOT NULL,
  `bd_tm_pro_pass` varchar(10) NOT NULL,
  `bd_tm_pro_id_usuario` int(11) NOT NULL,
  `bd_tm_pro_id_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bd_tm_pro`
--

INSERT INTO `bd_tm_pro` (`bd_tm_pro_id`, `bd_tm_pro_nombre`, `bd_tm_pro_apellido_p`, `bd_tm_pro_apellido_m`, `bd_tm_pro_edad`, `bd_tm_pro_genero`, `bd_tm_pro_origen`, `bd_tm_pro_matricula`, `bd_tm_pro_correo`, `bd_tm_pro_telefono`, `bd_tm_pro_estudio`, `bd_tm_pro_pass`, `bd_tm_pro_id_usuario`, `bd_tm_pro_id_estatus`) VALUES
(1, 'Ángel Juventino', 'García', 'Uitz', 0, 'Hombre', 'Mérida', 'DSA22001', 'angelgu_93@hotmail.com', '9999583298', '', 'DSA22001', 1, 1),
(2, 'Eyden Jesús ', 'Navarro', 'Martínez', 0, 'Hombre', 'Campeche', 'DSA22002', 'nameye_aei@hotmail.com', '9811597266', '', 'DSA22002', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_tm_tao`
--

CREATE TABLE `bd_tm_tao` (
  `bd_tm_tao_id` int(11) NOT NULL,
  `bd_tm_tao_tramo` varchar(2) NOT NULL,
  `bd_tm_tao_codigo` varchar(5) NOT NULL,
  `bd_tm_tao_id_matricula` varchar(8) NOT NULL,
  `bd_tm_tao_id_tipo_clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bd_tm_tao`
--

INSERT INTO `bd_tm_tao` (`bd_tm_tao_id`, `bd_tm_tao_tramo`, `bd_tm_tao_codigo`, `bd_tm_tao_id_matricula`, `bd_tm_tao_id_tipo_clave`) VALUES
(1, 'T2', '03', 'DSA22001', 1),
(2, 'T2', '203', 'DSA22001', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_tm_uur`
--

CREATE TABLE `bd_tm_uur` (
  `bd_tm_uur_id` int(11) NOT NULL,
  `bd_tm_uur_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bd_tm_uur`
--

INSERT INTO `bd_tm_uur` (`bd_tm_uur_id`, `bd_tm_uur_usuario`) VALUES
(1, 'Arqueólogo'),
(2, 'Coordinador'),
(3, 'Topógrafo'),
(4, 'Enlace'),
(5, 'Dibujante'),
(6, 'Procesador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bd_tm_cae`
--
ALTER TABLE `bd_tm_cae`
  ADD PRIMARY KEY (`bd_tm_car_id`);

--
-- Indices de la tabla `bd_tm_cdg`
--
ALTER TABLE `bd_tm_cdg`
  ADD PRIMARY KEY (`bd_tm_cdg_id`);

--
-- Indices de la tabla `bd_tm_ett`
--
ALTER TABLE `bd_tm_ett`
  ADD PRIMARY KEY (`bd_tm_ett_id`);

--
-- Indices de la tabla `bd_tm_pro`
--
ALTER TABLE `bd_tm_pro`
  ADD PRIMARY KEY (`bd_tm_pro_id`),
  ADD UNIQUE KEY `bd_tm_prn_matricula` (`bd_tm_pro_matricula`);

--
-- Indices de la tabla `bd_tm_tao`
--
ALTER TABLE `bd_tm_tao`
  ADD PRIMARY KEY (`bd_tm_tao_id`);

--
-- Indices de la tabla `bd_tm_uur`
--
ALTER TABLE `bd_tm_uur`
  ADD PRIMARY KEY (`bd_tm_uur_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bd_tm_cae`
--
ALTER TABLE `bd_tm_cae`
  MODIFY `bd_tm_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `bd_tm_cdg`
--
ALTER TABLE `bd_tm_cdg`
  MODIFY `bd_tm_cdg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `bd_tm_ett`
--
ALTER TABLE `bd_tm_ett`
  MODIFY `bd_tm_ett_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `bd_tm_pro`
--
ALTER TABLE `bd_tm_pro`
  MODIFY `bd_tm_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `bd_tm_tao`
--
ALTER TABLE `bd_tm_tao`
  MODIFY `bd_tm_tao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `bd_tm_uur`
--
ALTER TABLE `bd_tm_uur`
  MODIFY `bd_tm_uur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
