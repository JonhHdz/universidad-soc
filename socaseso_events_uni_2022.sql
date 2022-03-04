-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-03-2022 a las 01:28:05
-- Versión del servidor: 10.3.32-MariaDB-cll-lve
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `socaseso_events_uni_2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id_event` int(10) UNSIGNED NOT NULL,
  `id_institution` int(11) DEFAULT NULL,
  `enable_event` tinyint(1) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speakers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `schedule_from` time DEFAULT NULL,
  `schedule_to` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id_event`, `id_institution`, `enable_event`, `category`, `type`, `name`, `description`, `video`, `speakers`, `appointment`, `date_start`, `date_end`, `schedule_from`, `schedule_to`, `created_at`, `updated_at`) VALUES
(3, 3, 1, 'Hipotecario', 'Webinar', 'Ajuste en modelo de riesgos, check list para 1ra y 2da etapa.', 'Ven y conoce los ajustes implementados por Banorte en su modelo de riesgos. Actualízate', NULL, 'a:1:{i:0;s:11:\"Rosy Ortega\";}', 'a:1:{i:0;s:51:\"Subdirector de Estratégia Hipotecaria canal Broker\";}', '2022-02-15', NULL, '09:30:00', '10:30:00', '2022-02-11 22:13:55', '2022-02-15 23:25:10'),
(4, 19, 1, 'Hipotecario', 'Webinar', 'Campañas SOC', 'Mantente al día con als campañas que tenemos para tus clientes y socios comerciales.', NULL, 'a:0:{}', 'a:0:{}', '2022-02-22', NULL, '09:00:00', '10:30:00', '2022-02-11 22:15:03', '2022-02-15 23:25:10'),
(5, 17, 1, 'Hipotecario', 'Cursos', 'Curso de Inducción asistido para nuevos asesores', 'Universidad SOC te ayudará a maximizar el potencial de los asesores de nuevo ingreso, mostrándoles los conocimientos necesarios para convertirse en asesores de excelencia.', NULL, 'a:0:{}', 'a:0:{}', '2022-03-07', '2022-02-14', '10:00:00', '15:00:00', NULL, '2022-02-26 20:50:17'),
(6, 17, 1, 'Hipotecario', 'Cursos', 'Curso de Inducción asistido para nuevos asesores', 'Universidad SOC te ayudará a maximizar el potencial de los asesores de nuevo ingreso, mostrándoles los conocimientos necesarios para convertirse en asesores de excelencia.', NULL, 'Evelyn Sánchez', 'Ejecutivo de capacitación', '2022-02-07', '2022-03-14', '10:00:00', '15:00:00', NULL, '2022-02-15 23:25:10'),
(7, 17, 1, 'Hipotecario', 'Certificaciones', 'Certificación SOC', 'Distingamos a la red como profesionistas hipotecarios que cuentan con los elementos necesarios para otorgar un servicio de calidad.', NULL, 'x', 'x', '2022-02-02', NULL, '11:00:00', '15:00:00', NULL, '2022-02-15 23:25:10'),
(9, 17, 1, 'Hipotecario', 'Promoción y Capacitación', 'Inicia este mes conociendo las herramientas digitales que SOC tiene para ti.', 'Fortalece tus estrategias de venta para mejorar el alcance de tus objetivos. Te mostraremos parte del valor agregado SOC.', NULL, 'Alejandra Torres Torres', 'Implementador de Herramientas', '2022-02-02', NULL, '11:00:00', '12:30:00', NULL, '2022-02-15 23:25:10'),
(10, 17, 1, 'Hipotecario', 'Promoción y Capacitación', 'Brinda más opciones a tu cliente para cotizar su crédito con nuestro Comparador SOC.', 'Cotiza, compara y llena la solicitud de crédito todo en una misma plataforma ¡Optimizarás tu tiempo!', NULL, 'Roberto Cordero', 'Implementador de Herramientas', '2022-02-09', NULL, '11:00:00', '12:30:00', NULL, '2022-02-16 15:40:33'),
(11, 17, 1, 'Hipotecario', 'Promoción y Capacitación', 'Planifica los objetivos de tu equipo para obtener mejores resultados y continúa alcanzando el éxito con tu oficina.', 'Te presentamos la Reporteria SOC cómo una de las mejores herramientas para poder medir con  mayor eficacia  el seguimiento y control de tu equipo.', NULL, 'César Herrera', 'Implementador de Herramientas', '2022-02-16', NULL, '11:00:00', '12:30:00', NULL, '2022-02-15 23:25:10'),
(12, 17, 1, 'Hipotecario', 'Promoción y Capacitación', 'Atrae más socios comerciales para aumentar tus ventas con estas increíbles herramientas.', 'Tenemos para tus asesores SOC herramientas digitales que les ayudarán a consolidar más relaciones comerciales.', NULL, 'Manuel Aniceto', 'Implementador de Herramientas', '2022-02-23', NULL, '11:00:00', '12:30:00', NULL, '2022-02-15 23:25:10'),
(16, 2, 1, 'Empresarial', 'Webinar', 'Ofertas 2022', 'Semana empresarial', NULL, 'Juan Fernandez', 'Fundador', '2022-02-08', NULL, '11:00:00', NULL, NULL, '2022-02-16 15:40:07'),
(17, 4, 1, 'Empresarial', 'Webinar', 'Arranque 2022', 'Semana empresarial', NULL, 'Samantha Lechuga', 'Gerente Comercial', '2022-02-09', NULL, '11:00:00', NULL, NULL, '2022-02-15 23:25:10'),
(18, 21, 1, 'Empresarial', 'Webinar', 'SOC Racing', 'Semana empresarial', NULL, 'Leticia Rojas', 'Gerente de Promoción', '2022-02-10', NULL, '11:00:00', NULL, NULL, '2022-02-15 23:25:10'),
(19, 14, 1, 'Empresarial', 'Webinar', 'Productos y Herramientas', 'Semana empresarial', NULL, 'Francisco Araiza \r\nFederico Fernandez \r\nCarla Ibañez', 'Gerente de alianzas & Vendors\r\nDirector de alianzas \r\nGerente de Alianzas', '2022-02-14', NULL, '11:00:00', NULL, NULL, '2022-02-15 23:25:10'),
(24, 23, 0, 'Seguros', 'Webinar', 'Webinar Skandia', NULL, NULL, 'a:0:{}', 'a:0:{}', '2022-02-02', NULL, '04:00:00', '05:30:00', NULL, '2022-03-01 15:51:02'),
(25, 24, 1, 'Seguros', 'Webinar', 'Webinar Networking', 'https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09', NULL, 'Arturo Galvan', '-', '2022-02-03', NULL, '09:00:00', '10:30:00', NULL, '2022-02-15 23:25:10'),
(26, 23, 0, 'Seguros', 'Webinar', 'Webinar Skandia', NULL, NULL, 'Skandia', '-', '2022-02-09', NULL, '04:00:00', '05:30:00', NULL, '2022-03-01 15:51:05'),
(27, 25, 1, 'Seguros', 'Webinar', 'Webinar Cita de cierre', 'https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09', NULL, 'Rogelio Martinez', '-', '2022-02-10', NULL, '09:00:00', '10:30:00', NULL, '2022-02-15 23:25:10'),
(28, 23, 0, 'Seguros', 'Webinar', 'Webinar Skandia', NULL, NULL, 'Skandia', '-', '2022-02-16', NULL, '04:00:00', '05:30:00', NULL, '2022-03-01 15:51:08'),
(29, 26, 1, 'Seguros', 'Webinar', 'Webinar Importancia del Seguro de Vida', 'https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09', NULL, 'Brayan Hernandez', '-', '2022-02-17', NULL, '09:00:00', '10:30:00', NULL, '2022-02-15 23:25:10'),
(30, 23, 0, 'Seguros', 'Webinar', 'Webinar Skandia', NULL, NULL, 'Skandia', '-', '2022-02-23', NULL, '04:00:00', '05:30:00', NULL, '2022-03-01 15:51:12'),
(31, 27, 1, 'Seguros', 'Webinar', 'Webinar Cultura del Ahorro', 'https://us02web.zoom.us/j/81962170630?pwd=U292TFNadWtJTWkyMkVXMWpjS3IvZz09', NULL, 'Pedro Chavelas', '-', '2022-02-24', NULL, '09:00:00', '10:30:00', NULL, '2022-02-15 23:25:10'),
(32, 28, 1, 'Seguros', 'Capacitación', 'Capacitación Manejo de objeciones', 'https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09', NULL, 'Montserrat Sanchez', '-', '2022-02-07', NULL, '09:00:00', '10:00:00', NULL, '2022-02-15 23:25:10'),
(33, 28, 1, 'Seguros', 'Capacitación', 'Capacitación Sensibilización', 'https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09', NULL, 'Selene Garibay', '-', '2022-02-14', NULL, '09:00:00', '10:00:00', NULL, '2022-02-15 23:25:10'),
(34, 28, 1, 'Seguros', 'Capacitación', 'Capacitación Entrega de póliza', 'https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09', NULL, 'Sharon Ovando', '-', '2022-02-21', NULL, '09:00:00', '10:00:00', NULL, '2022-02-15 23:25:10'),
(35, 28, 1, 'Seguros', 'Capacitación', 'Capacitación Clinica Telefonica', 'https://us02web.zoom.us/j/88655299837?pwd=YlptWEVPY0Q4cWJyWW8xOTdFREp0dz09', NULL, 'Diego Olivares', '-', '2022-02-28', NULL, '09:00:00', '10:00:00', NULL, '2022-02-15 23:25:10'),
(37, 6, 0, 'Hipotecario', 'Webinar', 'Prueba', 'Prueba', NULL, 'a:1:{i:0;s:6:\"Prueba\";}', 'a:0:{}', '2022-02-16', NULL, '12:00:00', NULL, '2022-02-15 23:17:05', '2022-02-23 19:56:02'),
(38, 16, 0, 'Hipotecario', 'Webinar', 'prueba', 'Prueba', NULL, 'a:1:{i:0;s:6:\"Prueba\";}', 'a:1:{i:0;s:6:\"Prueba\";}', '2022-02-16', NULL, '12:00:00', NULL, '2022-02-16 14:57:20', '2022-02-23 19:56:06'),
(40, 9, 1, 'Hipotecario', 'Webinar', 'Ofrecemos flexibilidad de financiamiento, rapidez en procesos y soluciones ágiles mediante el uso de tecnología', 'Conoce nuestra oferta y producto estrella de liquidez, el cual es una excelente opción para perfiles o garantías que no acepta la banca tradicional', NULL, 'a:1:{i:0;s:12:\"Ali Bautista\";}', 'a:1:{i:0;s:17:\"Gerente Comercial\";}', '2022-03-01', NULL, '09:00:00', NULL, '2022-02-26 19:16:30', '2022-02-26 20:26:10'),
(41, 31, 1, 'Hipotecario', 'Webinar', 'Nueva Oferta Hipotecaria y nuestro compromiso con SOC', NULL, NULL, 'a:1:{i:0;s:25:\"Sandra Symonds Velázquez\";}', 'a:1:{i:0;s:32:\"Subdirector Crédito Hipotecario\";}', '2022-03-08', NULL, '09:00:00', NULL, '2022-02-26 19:24:25', '2022-03-03 17:47:38'),
(42, 29, 1, 'Hipotecario', 'Webinar', 'Mantente al día con HSBC', 'Conoce todo lo nuevo y las bondades que tiene nuestra oferta. Tenemos información importante para ti.', NULL, 'a:1:{i:0;s:15:\"Enrique Margain\";}', 'a:1:{i:0;s:42:\"Director ejecutivo de crédito hipotecario\";}', '2022-03-15', NULL, '09:00:00', NULL, '2022-02-26 19:34:06', '2022-03-03 17:45:08'),
(43, 30, 1, 'Hipotecario', 'Webinar', 'Mantente al día con Santander', 'Tenemos grandiosas noticias que te ayudaran a aumentar tu colocación. ¡No olvides apartar la fecha!', NULL, 'a:1:{i:0;s:15:\"Mariano Noriega\";}', 'a:1:{i:0;s:49:\"Director comercial crédito hipotecario Santander\";}', '2022-03-22', NULL, '09:00:00', NULL, '2022-02-26 20:21:58', '2022-03-03 17:45:35'),
(44, 17, 1, 'Hipotecario', 'Webinar', 'Herramienta', 'En SOC buscamos generar valor agregado para nuestros clientes. Hazlo tú también con las herramientas que ponemos a tu dispoción.¡Que no te la cuenten, asiste a nuestro espacio webinar hipotecario!', NULL, 'a:1:{i:0;s:16:\"Lizbeth Elizalde\";}', 'a:1:{i:0;s:25:\"Coordinación Universidad\";}', '2022-03-29', NULL, '09:00:00', NULL, '2022-02-26 20:23:32', '2022-02-26 20:23:32'),
(45, 17, 1, 'Hipotecario', 'Certificaciones', 'Certificación SOC', 'Distingamos a la red como profesionistas hipotecarios que cuentan con los elementos necesarios para otorgar un servicio de calidad', NULL, 'a:0:{}', 'a:0:{}', '2022-03-02', NULL, '11:00:00', NULL, '2022-02-26 20:47:22', '2022-02-26 20:48:39'),
(46, 17, 1, 'Empresarial', 'Certificaciones', 'Certificación nivel A venta cruzada', 'Esta certificación va dirigido a la red hipotecaria, aquí aprenderán los conceptos básicos y el entorno del negocio empresarial.', NULL, 'a:1:{i:0;s:14:\"Mariana Rangel\";}', 'a:1:{i:0;s:26:\"Ejecutivo de capacitación\";}', '2022-03-02', '2022-03-04', '10:00:00', '13:00:00', '2022-02-27 21:50:54', '2022-02-27 22:59:59'),
(48, 17, 1, 'Empresarial', 'Certificaciones', 'Certificación Konfío', 'Esta certificación se compone de diferentes módulos donde encontraras todo lo que necesitas saber para la comercialización de las opciones de financiamiento que Konfío maneja.', NULL, 'a:1:{i:0;s:14:\"Mariana Rangel\";}', 'a:1:{i:0;s:26:\"Ejecutivo de capacitación\";}', '2022-03-28', NULL, '10:00:00', '13:00:00', '2022-02-27 23:08:46', '2022-02-27 23:08:46'),
(49, 17, 1, 'Empresarial', 'Certificaciones', 'Certificación Unifin', 'En esta certificación podrás identificar las características particulares del producto Unifin /Arrendamiento, así como el paso a paso de como operarlo hasta llegar al fondeo de esta y las diferentes herramientas que te ayudaran agilizar tu respuesta.', NULL, 'a:1:{i:0;s:14:\"Mariana Rangel\";}', 'a:1:{i:0;s:26:\"Ejecutivo de capacitación\";}', '2022-03-23', NULL, '10:00:00', NULL, '2022-02-27 23:13:39', '2022-02-27 23:13:39'),
(51, 17, 1, 'Empresarial', 'Certificaciones', 'Certificación Uniclick', 'A través de esta certificación podrás especializarte y conocer el detalle del producto que Uniclick tiene para nuestro mercado así como el proceso que llevaras acabo para operar a tu cliente.', NULL, 'a:1:{i:0;s:14:\"Mariana Rangel\";}', 'a:1:{i:0;s:26:\"Ejecutivo de capacitación\";}', '2022-03-25', NULL, '10:00:00', NULL, '2022-02-27 23:17:01', '2022-02-27 23:17:01'),
(53, 17, 1, 'Seguros', 'Promoción y Capacitación', 'Oferta de valor Gastos Médicos Mayores', ' https://us02web.zoom.us/j/84942988972?pwd=MU5vdHFNbnJ4Y0MrejhNb1NEWkx6UT09', NULL, 'a:1:{i:0;s:20:\"Eduardo Cordero Lugo\";}', 'a:1:{i:0;s:27:\"Director General de Seguros\";}', '2022-03-02', '2022-03-02', '10:00:00', '11:00:00', '2022-02-28 13:26:39', '2022-02-28 13:27:13'),
(54, 17, 1, 'Seguros', 'Webinar', 'Retiro Seguro', ' https://us02web.zoom.us/j/86021126236?pwd=c3NGK0QycUZjV2Uyc3Q2eTdmdXpEZz09', NULL, 'a:1:{i:0;s:19:\"Juan Carlos Herrera\";}', 'a:1:{i:0;s:21:\"JOB MUTUAL CONSULTING\";}', '2022-03-03', '2022-03-03', '08:45:00', '10:00:00', '2022-02-28 13:31:10', '2022-02-28 14:08:41'),
(55, 17, 1, 'Seguros', 'Webinar', 'Planeación', 'https://us02web.zoom.us/j/85186753819?pwd=NXRNUGNDcnNqL2dkS1BwcEpTNyttdz09', NULL, 'a:1:{i:0;s:20:\"Eduardo Cordero Lugo\";}', 'a:1:{i:0;s:27:\"Director General de Seguros\";}', '2022-03-07', '2022-03-07', '08:45:00', '10:00:00', '2022-02-28 13:35:56', '2022-02-28 14:06:21'),
(56, 17, 1, 'Seguros', 'Webinar', 'Salud Financiera', ' https://us02web.zoom.us/j/86021126236?pwd=c3NGK0QycUZjV2Uyc3Q2eTdmdXpEZz09', NULL, 'a:1:{i:0;s:19:\"Araceli Guzman Mora\";}', 'a:1:{i:0;s:18:\"INTEGRALIA SEGUROS\";}', '2022-03-10', '2022-03-10', '20:45:00', '10:00:00', '2022-02-28 13:42:44', '2022-02-28 13:42:44'),
(57, 17, 1, 'Seguros', 'Webinar', 'Manejo de agenda', 'https://us02web.zoom.us/j/85186753819?pwd=NXRNUGNDcnNqL2dkS1BwcEpTNyttdz09', NULL, 'a:1:{i:0;s:18:\"Jaime Maximo Reyes\";}', 'a:1:{i:0;s:31:\"Coordinador Universidad Seguros\";}', '2022-03-14', '2022-03-14', '08:45:00', '10:00:00', '2022-02-28 13:45:11', '2022-02-28 14:06:53'),
(58, 17, 1, 'Seguros', 'Webinar', 'Gastos médicos sin tus Gastos Médicos Mayores', ' https://us02web.zoom.us/j/86021126236?pwd=c3NGK0QycUZjV2Uyc3Q2eTdmdXpEZz09', NULL, 'a:1:{i:0;s:15:\"Luis Larrainzar\";}', 'a:1:{i:0;s:10:\"TEASEGUROS\";}', '2022-03-17', '2022-03-17', '08:45:00', '10:00:00', '2022-02-28 13:49:05', '2022-02-28 13:49:05'),
(59, 17, 1, 'Seguros', 'Capacitación', 'Psicología en tus finanzas', ' https://us02web.zoom.us/j/86021126236?pwd=c3NGK0QycUZjV2Uyc3Q2eTdmdXpEZz09', NULL, 'a:1:{i:0;s:40:\"MARIA DE LA LUZ CAMARENA PALACIOS MACEDO\";}', 'a:1:{i:0;s:19:\"LUZ EN TUS FINANZAS\";}', '2022-03-24', '2022-03-24', '08:45:00', '10:00:00', '2022-02-28 13:51:37', '2022-02-28 13:51:37'),
(60, 17, 1, 'Seguros', 'Webinar', 'Segmentación de mercado', 'https://us02web.zoom.us/j/85186753819?pwd=NXRNUGNDcnNqL2dkS1BwcEpTNyttdz09', NULL, 'a:1:{i:0;s:18:\"Montserrat Sanchez\";}', 'a:1:{i:0;s:21:\"Gerente de desarrollo\";}', '2022-03-28', '2022-03-28', '08:45:00', '10:00:00', '2022-02-28 13:58:10', '2022-02-28 14:07:42'),
(61, 17, 1, 'Seguros', 'Webinar', 'Cierres exitosos', ' https://us02web.zoom.us/j/86021126236?pwd=c3NGK0QycUZjV2Uyc3Q2eTdmdXpEZz09', NULL, 'a:1:{i:0;s:20:\"Eduardo Cordero Lugo\";}', 'a:1:{i:0;s:27:\"Director General de Seguros\";}', '2022-03-31', '2022-03-31', '08:45:00', '10:00:00', '2022-02-28 13:59:39', '2022-02-28 13:59:39'),
(62, 17, 1, 'Seguros', 'Cursos', 'Curso de Inducción Franquicias', NULL, NULL, 'a:1:{i:0;s:19:\"Universidad Seguros\";}', 'a:0:{}', '2022-03-07', '2022-03-11', '08:45:00', '16:00:00', '2022-02-28 14:24:31', '2022-02-28 14:24:31'),
(63, 17, 1, 'Seguros', 'Cursos', 'Escuela para asesores', NULL, NULL, 'a:1:{i:0;s:19:\"Universidad Seguros\";}', 'a:0:{}', '2022-03-15', '2022-03-17', '08:45:00', '14:00:00', '2022-02-28 14:27:35', '2022-02-28 14:27:35'),
(66, 23, 1, 'Seguros', 'Webinar', 'Skandia GO!', 'https://us02web.zoom.us/j/86467020298?pwd=Sml4ZVBlMGFBdWVRdE4yemNVY3VRZz09', NULL, 'a:1:{i:0;s:15:\"Nicolás Lesmes\";}', 'a:0:{}', '2022-03-02', '2022-03-02', NULL, NULL, '2022-03-01 15:54:44', '2022-03-01 15:54:44'),
(67, 23, 1, 'Seguros', 'Webinar', 'Beneficios Fiscales', 'https://us02web.zoom.us/j/86467020298?pwd=Sml4ZVBlMGFBdWVRdE4yemNVY3VRZz09', NULL, 'a:1:{i:0;s:18:\"Viridiana Santiago\";}', 'a:0:{}', '2022-03-09', '2022-03-09', '16:00:00', NULL, '2022-03-01 15:56:11', '2022-03-01 15:56:11'),
(68, 23, 1, 'Seguros', 'Webinar', 'Skandia Crea', 'https://us02web.zoom.us/j/86467020298?pwd=Sml4ZVBlMGFBdWVRdE4yemNVY3VRZz09', NULL, 'a:1:{i:0;s:14:\"Rocio Arellano\";}', 'a:0:{}', '2022-03-16', '2022-03-16', '16:00:00', NULL, '2022-03-01 16:00:10', '2022-03-01 16:00:10'),
(69, 23, 1, 'Seguros', 'Webinar', 'Llenado de Solicitudes', 'https://us02web.zoom.us/j/86467020298?pwd=Sml4ZVBlMGFBdWVRdE4yemNVY3VRZz09', NULL, 'a:1:{i:0;s:15:\"Gabriela Bernal\";}', 'a:0:{}', '2022-03-23', '2022-03-23', '16:00:00', NULL, '2022-03-01 16:02:32', '2022-03-01 16:02:32'),
(70, 23, 1, 'Seguros', 'Webinar', 'Siniestros', 'https://us02web.zoom.us/j/86467020298?pwd=Sml4ZVBlMGFBdWVRdE4yemNVY3VRZz09', NULL, 'a:1:{i:0;s:15:\"Gabriela Bernal\";}', 'a:0:{}', '2022-03-30', '2022-03-30', '16:00:00', NULL, '2022-03-01 16:03:22', '2022-03-01 16:03:22'),
(71, 17, 1, 'Empresarial', 'Cursos', 'Curso de inducción para nuevos asesores', 'Dentro de este curso aprenderán los conocimientos necesarios para profundizar en el entorno empresarial. Hablaremos de cuales son los puntos fundamentales que se tienen que analizar en el perfil del cliente y los diferentes tipos de crédito que tendrás a disponibilidad para ofrecer.', NULL, 'a:1:{i:0;s:14:\"Mariana Rangel\";}', 'a:1:{i:0;s:50:\"Ejecutiva de capacitación universidad empresarial\";}', '2022-03-14', '2022-03-18', '09:00:00', '16:00:00', '2022-03-01 17:08:34', '2022-03-01 17:08:34'),
(72, 17, 1, 'Empresarial', 'Aula SOC', 'Innovación con tecnología', 'La innovación con responsabilidad social y el uso de la tecnología para ayudar a la humanidad son los grandes motores de Vivian Lan, quien ademas de estudiar diseño gráfico en CDMX, especializarse en artes plásticas en New York y ser guía Montessori, siempre ha estado involucrada en proyectos de impacto social.', NULL, 'a:1:{i:0;s:16:\"Vivian Lan Agami\";}', 'a:1:{i:0;s:41:\"Directora del SingularityU México Summit\";}', '2022-03-11', NULL, '10:00:00', NULL, '2022-03-01 17:15:37', '2022-03-01 17:15:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institutions`
--

CREATE TABLE `institutions` (
  `id_institution` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `institutions`
--

INSERT INTO `institutions` (`id_institution`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Afirme', NULL, 'Afirme.png', NULL, NULL),
(2, 'Anticipa', NULL, 'Anticipa.png', NULL, NULL),
(3, 'Banorte', NULL, 'banorte.png', NULL, NULL),
(4, 'Bien para Bien', NULL, 'Logo-BPBP-Verde.png', NULL, NULL),
(5, 'Billpocket', NULL, 'Billpocket.png', NULL, NULL),
(6, 'Credijusto', NULL, 'Credijusto_NW_RGB.png', NULL, NULL),
(7, 'Crédito Real', NULL, 'CreditoReal.png', NULL, NULL),
(8, 'Creze', NULL, 'Logo_Creze_2019_Azul.png', NULL, NULL),
(9, 'iBan', NULL, 'iban.png', NULL, NULL),
(10, 'Konfío', NULL, 'Konfio.png', NULL, NULL),
(11, 'Portafolio de negocios', NULL, 'Portafolio-de-negocios.png', NULL, NULL),
(12, 'Tu casa express', NULL, 'tu-casa-express.png', NULL, NULL),
(13, 'Uniclick', NULL, 'uniclick.png', NULL, NULL),
(14, 'Unifin', NULL, 'unifin.png', NULL, NULL),
(15, 'ION Tu solución Hipotecaria', NULL, 'ION.png', NULL, NULL),
(16, 'Bx+', NULL, 'bxm.png', NULL, NULL),
(17, 'SOC', NULL, 'soc.png', NULL, NULL),
(18, 'Citibanamex', NULL, 'citibanamex.png', NULL, NULL),
(19, 'Coorporativo', NULL, '', NULL, NULL),
(20, 'BpB', NULL, '', NULL, NULL),
(21, 'Promoción SOC', NULL, '', NULL, NULL),
(22, 'Universidad Empresarial', NULL, '', NULL, NULL),
(23, 'Skandia', NULL, 'Skandia.png', NULL, NULL),
(24, 'LIBERI', NULL, '', NULL, NULL),
(25, 'AVANTI Asesores Financieros y de Seguros', NULL, 'avanti.png', NULL, NULL),
(26, 'Capital City MX', NULL, 'Capital-city-mx.png', NULL, NULL),
(27, 'Seguros por Ti', NULL, 'sporti.png', NULL, NULL),
(28, 'Gerente de Desarrollo', NULL, '', NULL, NULL),
(29, 'HSBC', NULL, 'hsbc.png', NULL, NULL),
(30, 'Santader', NULL, 'santander.png', NULL, NULL),
(31, 'Banca Mifel', NULL, 'banca-mifiel.png', NULL, NULL),
(32, 'Hey, banco', NULL, 'hey-banco.png', NULL, NULL),
(33, 'Infonavit', NULL, 'infonavit.png', NULL, NULL),
(34, 'Scotiabank', NULL, 'scotianbank.png', NULL, NULL),
(35, 'Smartlending', NULL, 'smartlending.png', NULL, NULL),
(36, 'Qualitas', NULL, 'qualitas.png', NULL, NULL),
(37, 'ANA', NULL, 'ana.png', NULL, NULL),
(38, 'Zurich', NULL, 'zurich.png', NULL, NULL),
(39, 'AXA', NULL, 'axa.png', NULL, NULL),
(40, 'Metlife', NULL, 'metlife.png', NULL, NULL),
(41, 'GNP Seguros', NULL, 'gnp-seguros.png', NULL, NULL),
(42, 'Sura', NULL, 'sura.png', NULL, NULL),
(43, 'GMX', NULL, 'gmx.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_10_000810_create_events_table', 1),
(6, '2022_02_10_000810_create_institutions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jonhhdz', 'jonhhdz18@gmail.com', NULL, '123', NULL, NULL, NULL),
(2, 'universidad', 'universidad@socasesores.com', NULL, 'bj$DJ7+H!R', NULL, NULL, NULL),
(3, 'universidadempresarial', 'universidadempresarial@socasesores.com', NULL, 'ATg7&e%2X&', NULL, NULL, NULL),
(4, 'universidadseguros', 'universidadseguros@socasesores.com', NULL, 'jV2kyaLP*S', NULL, NULL, NULL),
(5, 'iarroyo', 'iarroyo@socasesores.com', NULL, 'dv@+DZL55z', NULL, NULL, NULL),
(6, 'lauvega', 'lauvega@socasesores.com.mx', NULL, 'k%43@YQ7zx', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id_institution`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id_institution` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
