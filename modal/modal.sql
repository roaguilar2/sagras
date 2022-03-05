-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2022 a las 01:09:00
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modal`
--

CREATE TABLE `modal` (
  `modalId` int(11) NOT NULL,
  `modalName` varchar(50) DEFAULT NULL,
  `modalStatus` int(11) NOT NULL DEFAULT 1,
  `moduleId` int(11) DEFAULT NULL,
  `moduleName` varchar(100) DEFAULT NULL,
  `moduleController` varchar(100) DEFAULT NULL,
  `moduleTest1` text DEFAULT NULL,
  `moduleTest2` text NOT NULL,
  `moduleTest3` text NOT NULL,
  `moduleTest4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modal`
--

INSERT INTO `modal` (`modalId`, `modalName`, `modalStatus`, `moduleId`, `moduleName`, `moduleController`, `moduleTest1`, `moduleTest2`, `moduleTest3`, `moduleTest4`) VALUES
(1, 'notification', 1, 1, 'Notificaciones', 'notification', 'texto1', 'texto2', 'texto3', 'texto4'),
(2, 'access', 1, 2, 'Permisos Usuarios Sagra GP', 'access', 'texto1', 'texto2', 'texto3', 'texto4'),
(3, 'accessSubscriber', 1, 3, 'Permisos Usuarios Suscriptores', 'accessSubscriber', 'texto1', 'texto2', 'texto3', 'texto4'),
(4, 'subscriber', 1, 4, 'Suscriptores', 'subscriber', 'texto1', 'texto2', 'texto3', 'texto4'),
(5, NULL, 1, 5, 'Soporte TI', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(6, 'trace', 1, 6, 'Traza Usuarios', 'trace', 'texto1', 'texto2', 'texto3', 'texto4'),
(7, 'user', 1, 7, 'Usuarios Sagra GP', 'user', 'texto1', 'texto2', 'texto3', 'texto4'),
(8, 'userSubscriber', 1, 8, 'Usuarios Suscriptores', 'userSubscriber', 'texto1', 'texto2', 'texto3', 'texto4'),
(9, 'economicArea', 1, 9, '&Aacute;reas Econ&oacute;micas', 'economicArea', 'texto1', 'texto2', 'texto3', 'texto4'),
(10, 'division', 1, 10, 'Divisiones', 'division', 'texto1', 'texto2', 'texto3', 'texto4'),
(11, 'department', 1, 11, 'Departamentos', 'department', 'texto1', 'texto2', 'texto3', 'texto4'),
(12, 'civilStatus', 1, 12, 'Estados Civiles', 'civilStatus', 'texto1', 'texto2', 'texto3', 'texto4'),
(13, 'status', 1, 13, 'Estatus de Clientes', 'status', 'texto1', 'texto2', 'texto3', 'texto4'),
(14, 'gender', 1, 14, 'G&eacute;neros', 'gender', 'texto1', 'texto2', 'texto3', 'texto4'),
(15, 'currency', 1, 15, 'Monedas', 'currency', 'texto1', 'texto2', 'texto3', 'texto4'),
(16, 'level', 1, 16, 'Niveles Educativos', 'level', 'texto1', 'texto2', 'texto3', 'texto4'),
(17, 'nature', 1, 17, 'Naturaleza de Servicios', 'nature', 'texto1', 'texto2', 'texto3', 'texto4'),
(18, 'office', 1, 18, 'Oficinas', 'office', 'texto1', 'texto2', 'texto3', 'texto4'),
(19, 'country', 1, 19, 'Paises', 'country', 'texto1', 'texto2', 'texto3', 'texto4'),
(20, 'role', 1, 20, 'Roles', 'role', 'texto1', 'texto2', 'texto3', 'texto4'),
(21, 'service', 1, 21, 'Servicios', 'service', 'texto1', 'texto2', 'texto3', 'texto4'),
(22, 'risk', 1, 22, 'Tipos de Riesgo', 'risk', 'texto1', 'texto2', 'texto3', 'texto4'),
(23, 'subscription', 1, 23, 'Tipos de Suscripci&oacute;n', 'subscription', 'texto1', 'texto2', 'texto3', 'texto4'),
(24, 'myUser', 1, 24, 'Usuarios', 'myUser', 'texto1texto2', 'texto3', 'texto4', ''),
(25, 'client', 1, 25, 'Clientes', 'client', 'texto1', 'texto2', 'texto3', 'texto4'),
(26, NULL, 1, 26, 'Permisos Usuarios', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(27, 'ac', 1, 27, 'Aceptaci&oacute;n y Continuidad', 'ac', 'texto1', 'texto2', 'texto3', 'texto4'),
(28, 'project', 1, 28, 'Proyectos', 'project', 'texto1', 'texto2', 'texto3', 'texto4'),
(29, NULL, 1, 29, 'Calidad', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(30, NULL, 1, 30, 'Contratos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(31, NULL, 1, 31, 'Comunicaciones', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(32, NULL, 1, 32, 'Informes', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(33, NULL, 1, 33, 'Propuestas', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(34, NULL, 1, 34, 'Puntos de Control', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(35, NULL, 1, 35, 'Presupuestos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(36, NULL, 1, 36, 'Requerimientos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(37, NULL, 1, 37, 'Reportes', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(38, NULL, 1, 38, 'Cuentas por Cobrar', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(39, NULL, 1, 39, 'Cuentas por Pagar', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(40, NULL, 1, 40, 'Caja', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(41, NULL, 1, 41, 'Compras', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(42, NULL, 1, 42, 'Facturacion', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(43, NULL, 1, 43, 'Gastos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(44, NULL, 1, 44, 'Suministros', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(45, NULL, 1, 45, 'Desarrollo Profesional', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(46, NULL, 1, 46, 'Evaluaciones', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(47, NULL, 1, 47, 'Ficha del Trabajador', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(48, NULL, 1, 48, 'Reporte de Tiempo', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(49, NULL, 1, 49, 'Reporte de Gastos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(50, NULL, 1, 50, 'Compliance', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(51, NULL, 1, 51, 'Metodolog&iacute;a', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(52, NULL, 1, 52, 'Riesgos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(53, NULL, 1, 53, 'Consultas T&eacute;nicas', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(54, NULL, 1, 54, 'Modelos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(55, NULL, 1, 55, 'Notificaciones / Tareas', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(56, NULL, 1, 56, 'Estados Financieros', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(57, NULL, 1, 57, 'Indicadores de Gesti&oacute;n', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(58, NULL, 1, 58, 'Cursos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(59, NULL, 1, 59, 'Plan de Carrera', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(60, NULL, 1, 60, 'Planificaci&oacute;n de Personal', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(61, NULL, 1, 61, 'Tickets', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(62, NULL, 1, 62, 'Tutoriales', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(63, NULL, 1, 63, 'Boletines', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(64, NULL, 1, 64, 'Consultas', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(65, NULL, 1, 65, 'C&oacute;digo de Conducta y &Eacute;tica', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(66, NULL, 1, 66, 'Normas y Procedimientos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(67, NULL, 1, 67, 'Pol&iacute;ticas', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(68, NULL, 1, 68, 'Pruebas', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(69, NULL, 1, 69, 'Tareas', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(70, NULL, 1, 70, 'Desarrollos', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(71, NULL, 1, 71, 'Documentaci&oacute;n', NULL, 'texto1', 'texto2', 'texto3', 'texto4'),
(72, 'questionnaire', 1, 72, 'Cuestionarios', 'questionnaire', 'texto1', 'texto2', 'texto3', 'texto4'),
(73, 'blog', 1, 73, 'Blog', 'blog', 'texto1', 'texto2', 'texto3', 'texto4'),
(74, 'ticket', 1, 74, 'Ticket', 'ticket', 'texto1', 'texto2', 'texto3', 'texto4'),
(75, 'consulta', 1, 75, 'Consulta', 'consulta', 'texto1', 'texto2', 'texto3', 'texto4'),
(77, 'permiso', 1, 77, 'Permiso', 'permiso', 'texto1', 'texto2', 'texto3', 'texto4'),
(78, 'diagnostico', 1, 78, 'Diagn&oacute;stico', 'diagnostico', 'texto1', 'texto2', 'texto3', 'texto4'),
(79, 'categoriaD', 1, 79, 'Categor&iacute;a diagn&oacute;stico', 'categoriaD', 'texto1', 'texto2', 'texto3', 'texto4'),
(80, 'preguntaD', 1, 80, 'Preguntas Diagn&oacute;stico', 'preguntaD', 'texto1', 'texto2', 'texto3', 'texto4'),
(81, 'formulario', 1, 81, 'formulario', 'formulario', 'texto1', 'texto2', 'texto3', 'texto4'),
(82, 'formulario', 1, 82, 'suscriptor en Perspectiva', 'formulario', 'texto1', 'texto2', 'texto3', 'texto4'),
(83, 'puser', 1, 83, 'Planilla contacto', 'puser', 'texto1', 'texto2', 'texto3', 'texto4'),
(84, 'plan', 1, 84, 'Plan de Suscripci&oacute;n', 'plan', 'texto1', 'texto2', 'texto3', 'texto4'),
(85, 'modal', 1, 85, 'Modales', 'modal', 'texto1', 'texto2', 'texto3', 'texto4'),
(86, 'cuestionario', 1, 86, 'Cuestionario', 'cuestionario', 'texto1', 'texto2', 'texto3', 'texto4'),
(87, 'clientPrev', 1, 87, 'Cliente en perspectiva', 'clientPrev', 'texto1', 'texto2', 'texto3', 'texto4'),
(88, 'sp', 1, 88, 'Selecci&oacute;n de Personal', 'sp', 'texto1', 'texto2', 'texto3', 'texto4'),
(89, 'dformulario', 1, 89, 'Diagn&oacute;stico', 'dformulario', 'texto1', 'texto2', 'texto3', 'texto4'),
(90, 'requerimiento', 1, 90, 'Requerimiento', 'requerimiento', 'texto1', 'texto2', 'texto3', 'texto4'),
(91, 'cDesk', 1, 91, 'Categor&iacute;a Escritorio', 'cDesk', 'texto1', 'texto2', 'texto3', 'texto4'),
(92, 'quest', 1, 92, 'Cuestionario', 'quest', 'texto1', 'texto2', 'texto3', 'texto4'),
(93, 'qitem', 1, 93, 'Preguntas Cuestionario', 'qitem', 'texto1', 'texto2', 'texto3', 'texto4'),
(94, 'ntrabajador', 1, 98, 'Nro Trabajadores', 'ntrabajador', 'texto1', 'texto2', 'texto3', 'texto4'),
(95, 'ningreso', 1, 99, 'Nivel de ingreso anual en $', 'ningreso', 'texto1', 'texto2', 'texto3', 'texto4'),
(96, 'homework', 1, 101, 'Tareas', 'homework', 'texto1', 'texto2', 'texto3', 'texto4'),
(97, 'legends', 1, 102, 'Leyenda', 'legends', 'texto1', 'texto2', 'texto3', 'texto4'),
(98, 'instructions', 1, 103, 'instruciones', 'instructions', 'texto1', 'texto2', 'texto3', 'texto4'),
(99, 'request', 1, 104, 'Requisitos', 'request', 'texto1', 'texto2', 'texto3', 'texto4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`modalId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `modal`
--
ALTER TABLE `modal`
  MODIFY `modalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
