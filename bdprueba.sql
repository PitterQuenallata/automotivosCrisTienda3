-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 06:32:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `rol_admin` text DEFAULT NULL,
  `name_admin` text DEFAULT NULL,
  `name_login_admin` text DEFAULT NULL,
  `email_admin` text DEFAULT NULL,
  `password_admin` text DEFAULT NULL,
  `token_admin` text DEFAULT NULL,
  `token_exp_admin` text DEFAULT NULL,
  `date_created_admin` date DEFAULT NULL,
  `date_updated_admin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `rol_admin`, `name_admin`, `name_login_admin`, `email_admin`, `password_admin`, `token_admin`, `token_exp_admin`, `date_created_admin`, `date_updated_admin`) VALUES
(1, 'Administrador', 'Pitter Quenallata', 'pitter123', 'quenallatapitter@gmail.com', '$2a$07$azybxcags23425sdg23sdemfC0c36zEVPKLDMP7sTYYm6xar3895u', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3MTIxMTc2NjksImV4cCI6MTcxMjIwNDA2OSwiZGF0YSI6eyJpZCI6MSwiZW1haWwiOiJxdWVuYWxsYXRhcGl0dGVyQGdtYWlsLmNvbSJ9fQ.dXxHgEFx5qNWsnli_brcN0FpRsbr6z8DPgc0aU1bfYo', '1712204069', '2024-03-21', '2024-04-03 04:14:29'),
(2, 'Administrador', 'Benjamin Canaviri', 'benjito123', 'benjo@gmail.com', '$2a$07$azybxcags23425sdg23sdeVe3HhqcSnVPNgrC9sxImblGZtScJe/y', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE3MTE0NTUzNjAsImV4cCI6MTcxMTU0MTc2MCwiZGF0YSI6eyJpZCI6MiwiZW1haWwiOiJiZW5qb0BnbWFpbC5jb20ifX0.5w4jEhEW3PFOk7ZZjFidSLMRimVbqj89ywQnUYpcVCg', '1711541760', '2024-03-24', '2024-03-26 12:16:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
