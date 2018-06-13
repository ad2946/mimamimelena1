-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2018 a las 22:19:32
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mimamimelena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_Carrito` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `importePedido` double NOT NULL,
  `Direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `FechaPedido` date NOT NULL,
  `Estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Poblacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `CodigoPostal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_Categoria` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_Categoria`, `Nombre`, `Descripcion`) VALUES
(1, 'cepillo', ''),
(2, 'champu', ''),
(3, 'acondicionador', ''),
(4, 'PACK', 'Conjunto de productos'),
(5, 'tratamiento', ''),
(6, 'peinado', 'productos para el peinado del cabello, despues del lavado'),
(7, 'mascarilla', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecarrito`
--

CREATE TABLE `detallecarrito` (
  `idDetalle` int(11) NOT NULL,
  `id_Carrito` int(11) NOT NULL,
  `id_Producto` int(11) NOT NULL,
  `id_Marca` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `id_Categoria` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_Marca` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Sector` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_Marca`, `Nombre`, `Sector`) VALUES
(1, 'Moroccanoil', 'peluqueria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_Producto` int(11) NOT NULL,
  `id_Marca` int(11) NOT NULL,
  `id_Categoria` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` double NOT NULL,
  `Imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Subcategoria` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_Producto`, `id_Marca`, `id_Categoria`, `Nombre`, `Precio`, `Imagen`, `Descripcion`, `Subcategoria`) VALUES
(1, 1, 1, 'Cepillo Redondo de Cerdas de Jabalí 25 mm', 55.5, 'images/hair-boarbrush-25.jpg', 'Sin Descripción', ''),
(2, 1, 1, 'Cepillo Redondo de Cerdas de Jabalí 35 mm', 64.5, 'images/hair-boarbrush-35.jpg', 'Sin Descripción', ''),
(3, 1, 1, 'Cepillo Redondo de Cerdas de Jabalí 45 mm', 70, 'images/hair-boarbrush-45.jpg', 'Sin Descripción', ''),
(4, 1, 1, 'Cepillo Plano de Cerámica', 27, 'images/hair_ceramicbrush_paddle.jpg', 'Sin Descripción', ''),
(5, 1, 1, 'Cepillo Redondo de Cerámica 35 mm', 27, 'images/hair_ceramicbrush_35.jpg', 'Sin Descripción', ''),
(6, 1, 1, 'Cepillo Redondo de Cerámica 55 mm', 32.5, 'images/hair_ceramicbrush_55.jpg', 'Sin Descripción', ''),
(7, 1, 1, 'Cepillo Térmico Cerámica Iónica Redondo 25mm.', 19.5, 'images/hair_ceramicbrush_25.jpg', 'Sin Descripción', ''),
(8, 1, 1, 'Cepillo clásico de cerdas de jabalí', 55.5, 'images/hair_boarbrush_paddle.jpg', 'Sin Descripción', ''),
(9, 1, 4, 'PACK HIDRATACIÓN', 81.5, 'images/moroccanoil_hydrating_champ_-_acond_-_tratanmieto_hydrating.jpg', 'Para cabellos que necesitan un extra de hidratación…', 'hidratacion'),
(10, 1, 4, 'PACK REPAIR', 75, 'images/pack-morocanoil-reparador3.jpg', 'Esta caja de regalo no necesita envoltorio. ¡Es el regalo perfecto!', 'reparacion'),
(11, 1, 4, 'PACK VOLUMEN', 93.5, 'images/pack-morocanoil-volumen3.jpg', 'Esta caja de regalo no necesita envoltorio. ¡Es el regalo perfecto!', 'volumen'),
(12, 1, 3, 'SMOOTH CONDITIONER REDUCTOR VOLUMEN', 28.5, 'images/hair_smoothing_conditioner.jpg', 'PARA TODO TIPO DE CABELLO : Esta fórmula acondiciona, desenreda, suaviza y controla el cabello rebelde y encrespado. El Acondicionador Suavizante Moroccanoil®, incluye nuestro ingrediente exclusivo AminoRenew™, que restaura los aminoácidos vencidos para fortalecer y alinear la estructura de la queratina natural del cabello.', 'volumen'),
(13, 1, 2, 'SMOOTH SHAMPOO REDUCTOR VOLUMEN.', 26.5, 'images/hair_smoothing_shampoo.jpg', 'PARA TODO TIPO DE CABELLO: Suavice y controle el cabello rebelde y encrespado con esta suave fórmula limpiadora. El Champú Suavizante Moroccanoil®, con nuestro exclusivo ingrediente AminoRenew™, restaura los aminoácidos vencidos para fortalecer y alinear la estructura de la queratina natural del cabello.', 'volumen'),
(14, 1, 2, 'CHAMPÚ SECO TONOS CLAROS', 27, 'images/dryshampoolight.png', 'Para Todo Tipo de Cabello:  Dry Shampoo está enriquecido con Aceite de Argán ,El Champú Seco Tonos Claros Moroccanoil® contiene almidones ultra finos de arroz que absorben la grasa y los olores dejando el cabello renovado, fresco y con volumen. La fórmula, impregnada con aceite de argán, provee protección UV y contiene matices violetas para equilibrar los tonos cobrizos en cabellos rubios, y resaltar lo mejor en cabellos con tonos claros.', 'claro'),
(15, 1, 2, 'CHAMPÚ SECO TONOS OSCUROS', 27, 'images/dryshampoodark.png', 'Para Todo Tipo de Cabello : Dry Shampoo está enriquecido con Aceite de Argán ,El Champú Seco Oscuros Moroccanoil® contiene almidones ultra finos de arroz que absorben la grasa y los olores dejando el cabello limpio y fresco. La fórmula, impregnada con aceite de argán, provee protección UV y actúa de inmediato sin dejar residuos opacos mientras mantiene la riqueza natural de los tonos de cabellos oscuros y morenos.', 'oscuro'),
(16, 1, 2, 'Clarifying Shampoo', 24.5, 'images/hair_clarifying_shampoo.jpg', 'PARA CABELLO SOBRECARGADO POR LA ACUMULACIÓN DE PRODUCTOS :  Champú Purificante nutre su cabello mientras limpia y elimina suavemente las impurezas. No altera el color. Sin sulfatos, fosfatos ni parabenos. Puede ser usado antes de un tratamiento de color, permanente, o tratamientos químicos y obtener mejores resultados.', ''),
(17, 1, 3, 'Extra Volume Conditioner', 26.5, 'images/hair_extravolume_conditioner.jpg', 'PARA CABELLO FINO : Desenreda suavemente su cabello mientras añade volumen. El Acondicionador Extra Volumen Moroccanoil® provee volumen, cuerpo, brillo, y manejabilidad al cabello fino sin hacerlo más pesado o comprimido.', 'volumen'),
(18, 1, 2, 'Extra Volume Shampoo', 24.5, 'images/extra_volume.jpg', 'PARA CABELLO FINO  : ¡Añada volumen y llene de vida el cabello fino y apagado! El Champú Extra Volumen Moroccanoil® actúa sin añadir peso, limpia suavemente, y añade volumen al cabello fino y sin vida. Impregnado con aceite de argán rico en antioxidantes y nutrientes revitalizantes', 'volumen'),
(19, 1, 3, 'Hydrating Conditioner', 24.5, 'images/Hydrating_Conditioner.png', 'PARA TODO TIPO DE CABELLO : Acondicione y desenrede el cabello deshidratado con el Acondicionador Hidratante Moroccanoil® . Esta fórmula suave de uso diario deja el cabello más suave, manejable, y facilita la creación de estilos y peinados.', 'hidratacion'),
(20, 1, 2, 'Hydrating Shampoo', 22, 'images/hair_hydrating_shampoo.jpg', 'PARA TODO TIPO DE CABELLO : Aporte al cabello seco y deshidratado toda la hidración que tanto necesita. El Champú Hidratante Moroccanoil® acondiciona el cabello con aceite de argán rico en antioxidantes, vitamina A, vitamina E, y algas rojas para lograr un cabello que se ve y se siente más saludable.', 'hidratacion'),
(21, 1, 3, 'Moisture Repair Conditioner', 22.05, 'images/acond._reparador.jpg', 'PARA EL CABELLO DEBILITADO O DAÑADO : Recupere el cabello dañado a causa de los tintes, procesos químicos, o el uso del calor para peinados y estilismos. El Acondicionador Reparador Hidratante Moroccanoil® acondiciona y desenreda suave y efectivamente el cabello dejándolo hidratado, fuerte y manejable.', 'reparacion'),
(23, 1, 5, 'Dry Scalp Treatment', 37, 'images/dry_scalp.png', 'PARA CUERO CABELLUDO SECO :  Nuestro tratamiento profesional para el cuero cabelludo cubre las necesidades del cuero cabelludo seco y escamoso, aliviando inmediatamente la irritación, resequedad, y picazón.', 'seco'),
(24, 1, 5, 'Oily Scalp Treatment', 37, 'images/oily_scalp.png', 'PARA CUERO CABELLUDO GRASO : Un cuero cabelludo graso puede dejar el cabello sin vida. El Tratamiento Cuero Cabelludo Graso Moroccanoil® es un tratamiento profesional para el cuero cabelludo diseñado para controlar la producción excesiva de aceite y revivir el cabello.', 'graso'),
(25, 1, 6, 'SMOOTH CONCENTRADO PARA EL SECADO', 28.5, 'images/smooth_secado.png', 'PARA CUERO CABELLUDO GRASO : Un cuero cabelludo graso puede dejar el cabello sin vida. El Tratamiento Cuero Cabelludo Graso Moroccanoil® es un tratamiento profesional para el cuero cabelludo diseñado para controlar la producción excesiva de aceite y revivir el cabello.', 'graso'),
(26, 1, 6, 'Volumizing Mousse', 28.5, 'images/hair_volumizingmousse.jpg', 'PARA CABELLO FINO A MEDIO : Dé a su cabello volumen y realce inmediato con la Espuma Voluminizadora Moroccanoil®, ideal para cabello medio o fino. Este voluminizador para crear estilos y peinados, provee cuerpo y volumen al cabello sin resultados pegajosos.', 'mousse'),
(27, 1, 6, 'Gel para peinar', 19.8, 'images/gelPeinado.png', 'PARA TODO TIPO DE CABELLO: Use este gel flexible e hidratante para peinar y crear looks elegantes y estructurados con fijación media. El Gel para Peinar Medium Moroccanoil® es un moldeador sin alcohol versátil que puede ser usado en cabellos largos o cortos para proveer definición y optimizar el secado con secador.', 'gel'),
(28, 1, 6, 'CREMA MOLDEADORA', 28.5, 'images/hair_moldingcream.jpg', 'Crema moldeadora para todo tipo de cabello :  Ideal para moldear, esculpir, y crear diseños y estilos en cabellos texturizados. La Crema Moldeadora Moroccanoil® es una crema flexible a base de fibras para engrosar y crear múltiples estilos de cabello con textura natural y definición.', 'crema'),
(29, 1, 6, 'Crema para peinar Hidratante', 34.5, 'images/crema-para-peinar-hidratante.jpg', 'PARA TODO TIPO DE CABELLO : Acondiciona, hidrata y combate el encrespamiento en todo tipo de cabello, especialmente en grueso y seco. Proporciona definición con una suave fijación y es perfecta para crear peinados con secador. También es fabulosa para dominar el cabello electrizado y revitalizar el cabello que ha perdido su frescura y naturalidad.', 'crema'),
(30, 1, 6, 'Curl Control Mousse', 19.8, 'images/control_mousse.jpg', 'PARA CABELLO RIZADO O ENSORTIJADO : Controle el cabello rizado o muy rizado sin problemas: La Espuma Control de Rizos Moroccanoil® controla, define, y provee fijación durante horas, mientras sella la humedad y previene el cabello encrespado en cualquier tipo de clima.', 'mousse rizos'),
(31, 1, 6, 'Curl Defining Cream', 35.5, 'images/MOLDEADORA_RIZOS.jpg', 'PARA CABELLO ONDULADO A RIZADO : Dé forma y active fácilmente sus rizos mientras hidrata su cabello. La Crema Moldeadora de Rizos Moroccanoil® es uno de nuestros productos más populares para el cabello rizado.', 'crema rizos'),
(32, 1, 6, 'DRY TEXTURE SPRAY', 28.5, 'images/drytexturespray_stylistfave.jpg', 'PARA TODO TIPO DE CABELLO: Utilice Moroccanoil® textura seca en spray como un spray de terminación de estilos con volumen sin preocupaciones, con textura. También se puede utilizar como un spray de preparación para proveer agarre fundamental necesario para trenzas no deslizante y peinados de salón.', 'spray'),
(33, 1, 6, 'Beach Waves Mousse', 28.5, 'images/hair_texture_beachwavemousse.jpg', 'PARA TODO TIPO DE CABELLO: Consiga un cabello con textura de playa durante todo el año con la Espuma Ondas de Playa Moroccanoil®, la versión avanzada del tradicional spray de agua de mar. La fórmula única de la Espuma Ondas de Playa Moroccanoil® proporciona textura y estilo sin deshidratar el cabello.', 'mousse rizos'),
(34, 1, 6, 'Fijador Luminoso Strong', 24.5, 'images/us.can_luminoushairspraystrong.png', 'PARA TODO TIPO DE CABELLO :  El Fijador Luminoso Fuerte Moroccanoil® es un spray para crear estilos duraderos con fijación flexible y fuerte. Su fórmula liviana y flexible envuelve el cabello en un reluciente escudo protector contra el encrespamiento y la humedad, a la vez que se cepilla fácilmente sin dejar residuos pegajosos.', 'fijador'),
(35, 1, 6, 'Frizz Control', 27.5, 'images/frizz.jpg', 'PARA TODO TIPO DE CABELLO : ¡Controle el cabello encrespado y la estática en cualquier clima! El Control del Encrespamiento Moroccanoil® está formulado para todo tipo de cabello propenso al encrespamiento incluyendo cabello saludable, seco, rizado, o liso.', 'frizz'),
(36, 1, 6, 'Glimmer Shine', 27.5, 'images/brillo_intenso.jpg', 'PARA TODO TIPO DE CABELLO : Añada el toque final perfecto a cualquier estilo o peinado y logre un cabello hermoso y brillante. El Brillo Intenso Moroccanoil® es un spray para dar acabado final que atrae y refleja la luz dando un hermoso brillo al cabello.', ''),
(37, 1, 6, 'Intense Curl Cream', 34.5, 'images/crema_rizos.png', 'PARA CABELLO ONDULADO A RIZADO : Para rizos naturales y ondas que lucen brillantes, con forma, y hermosamente frescos. La Crema Intensa para Rizos Moroccanoil® es un acondicionador sin enjuague que define, hidrata los rizos, y combate el encrespamiento sin dejar residuos pegajosos.', 'crema rizos'),
(38, 1, 6, 'Loción Voluminizadora', 29, 'images/Locionmoro.jpg', 'Indicado parara cabellos finos o medios,  ¡Vía rápida hacia la plenitud instantánea! La Loción Voluminizadora Moroccanoil® fortalece el cabello con proteínas restauradoras a la vez que aporta grosor a las fibras capilares para mayor cuerpo y volumen duradero. La mezcla de vitaminas y aceite de argán hidrata obteniendo un cabello brillante sin residuos pegajosos.', 'volumen'),
(39, 1, 6, 'Luminous Hair Spray Medium', 24.5, 'images/hair_hairspray_medium.jpg', 'PARA TODO TIPO DE CABELLO : Este spray con fijación media y flexible provee soporte duradero para estilos suaves y naturales. El Fijador Luminoso Medio Moroccanoil® es un spray liviano y flexible que envuelve el cabello en un reluciente escudo protector contra el encrespamiento y la humedad, a la vez que se cepilla fácilmente sin dejar residuos pegajosos.', ''),
(40, 1, 6, 'PROTECTOR DE CALOR PARA PEINAR', 28.5, 'images/hair_heatstylingprotection.jpg', 'Proteja su cabello de la creación de estilos y peinados con calor, lo cual es parte de la rutina diaria de cualquier mujer. El Protector de Calor para Peinar Moroccanoil® crea un escudo térmico protector que le permite al cabello resistir altas temperaturas de hasta 430˚F – 221˚C.', 'protector'),
(41, 1, 6, 'Root Boost Voluminizador raíces', 28.5, 'images/vol_raices.png', 'PARA CABELLO FINO A MEDIO : Para el máximo cabello con pleno volumen, el estimulador de raíces está diseñado para ofrecer volumen y movimiento al preparar las raíces con una potente base texturizada antes de peinar con calor. Fórmula nutritiva de alto rendimiento que amplifica el volumen de inmediato en las raíces y engrosa cada hebra para darle textura y forma, de manera que el volumen nunca se pierda.', 'volumen'),
(42, 1, 6, 'SMOOTH LOTION REDUCTOR VOLUMEN', 35, 'images/hair_smoothinglotion.jpg', 'PARA CABELLO REBELDE Y ENCRESPADO: Loción multiuso para el secado con secador que deja el cabello suave y sedoso. Permite crear estilos y peinados fácilmente y sin esfuerzo. La Loción Suavizante Moroccanoil® combina los beneficios de los productos de mayor venta incluyendo el nutritivo aceite de argán, mantequilla de argán, Vitamina E, y ácidos grasos esenciales que dejan el cabello acariciable, suave y manejable.', 'volumen'),
(43, 1, 6, 'TEXTURE CLAY', 26, 'images/textureclay.jpg', 'PARA TODO TIPO DE CABELLO: Consiga estilos versátiles a su medida con esta herramienta unisex, ideal tanto para cabello corto como largo, que le permitirá jugar con su cabello antes de fijar el nivel de textura deseado. Controla el encrespamiento durante todo el día y proporciona un acabado no grasoso o pegajoso.', 'cera'),
(44, 1, 7, 'MASCARILLA HIDRATANTE INTENSA', 37, 'images/hair_intensehydratingmask.jpg', 'PARA CABELLO SECO DE MEDIO A GRUESO : Disfrute de un tratamiento que en cinco minutos revitaliza su cabello. La Mascarilla Hidratante Intensa Moroccanoil® aporta un acondicionamiento profundo para cabello seco, de medio a grueso.', 'hidratacion'),
(45, 1, 7, 'MASCARILLA HIDRATANTE ULTRALIGERA', 42.5, 'images/hair_weightlesshydratingmask.jpg', 'PARA CABELLO FINO Y SECO : Reviva el cabello seco y sin vida con esta mascarilla capilar que en cinco minutos hidrata su cabello. La Mascarilla Hidratante Ultraligera Moroccanoil® es un tratamiento acondicionador profundo, cremoso, y ligero formulado a base de aceite de argán e ingredientes nutritivos.', 'hidratacion'),
(46, 1, 7, 'Repair Hair Mask', 45.5, 'images/hair_restorativemask.jpg', 'PARA CABELLO DEBILITADO Y DAÑADO : La Mascarilla Capilar Reconstituyente Moroccanoil® está formulada para el cabello que necesita reparación inmediata. Este tratamiento revitalizador capilar renueva el cabello en tan solo 5-7 minutos, restaurando las proteínas de la fibra capilar que han sido dañadas por procesos químicos o por el uso de herramientas térmicas para realizar peinados y estilismos.', 'reparador'),
(47, 1, 7, 'SMOOTH MASK REDUCTORA VOLUMEN', 45.5, 'images/hair_smoothingmask.jpg', 'PARA CABELLO REBELDE Y ENCRESPADO: Esta mascarilla altamente altamente concentrada con mantecaa de argán, suaviza y controla el cabello rebelde y encrespado. La Mascarilla Suavizante Moroccanoil® está enriquecida con manteca de argán, aceite de argán y ácidos grasos derivados del coco para hidratar y nutrir profunda e intensamente.', 'volumen'),
(48, 1, 4, 'Pack Intense Hydrating Mask', 40.4, 'images/set_azul.jpg', 'Intense Hydrating Mask. Hidratante intensa para cabello medio, seco y áspero.', 'hidratacion'),
(49, 1, 4, 'Pack Restorative Hair Mask', 49.7, 'images/set_naranja.jpeg', 'Set formado por dos Marcarillas Restorative Hair Mask de 75 ml. y 250 ml. ideal para tener una en casa y otra en el neceser de viaje.', 'reparador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `numero` int(13) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellidos`, `usuario`, `password`, `email`, `numero`, `id_usuario`) VALUES
('Sofia', 'Lopez Fernandez', 'salf1997', '$2y$10$/G/s6ZRWWy6.D9W/YSenLeeT5JJ7znFZXjtms6Q9UaDv6dhkMsIka', 'salf@gmail.com', 689399943, 1),
('Adrian', 'Garcia', 'adri94', '$2y$10$EiSvMFDVo2EJ/1Roly.v/eFQViabnZbQx1EYTayrdSwCr/GuSwKbi', 'agri@example.es', 123456, 2),
('Noemi', 'Luengo', 'noemi', '$2y$10$zZyT4VxtIj2DW4bUwM5L8eXfFayI7YD9RM4hppP0LTWrrS0Kq0z0K', 'noe@gmail.com', 956321478, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_Carrito`,`id_Usuario`),
  ADD KEY `fkIdx_172` (`id_Usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_Categoria`);

--
-- Indices de la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD PRIMARY KEY (`idDetalle`,`id_Carrito`,`id_Producto`,`id_Marca`,`id_Usuario`,`id_Categoria`),
  ADD KEY `fkIdx_168` (`id_Carrito`,`id_Usuario`),
  ADD KEY `fkIdx_177` (`id_Producto`,`id_Marca`,`id_Categoria`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_Marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_Producto`,`id_Marca`,`id_Categoria`),
  ADD KEY `fkIdx_158` (`id_Marca`),
  ADD KEY `fkIdx_192` (`id_Categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_Carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_Marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FK_172` FOREIGN KEY (`id_Usuario`) REFERENCES `usuario` (`id_Usuario`);

--
-- Filtros para la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD CONSTRAINT `FK_168` FOREIGN KEY (`id_Carrito`,`id_Usuario`) REFERENCES `carrito` (`id_Carrito`, `id_Usuario`),
  ADD CONSTRAINT `FK_177` FOREIGN KEY (`id_Producto`,`id_Marca`,`id_Categoria`) REFERENCES `producto` (`id_Producto`, `id_Marca`, `id_Categoria`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_158` FOREIGN KEY (`id_Marca`) REFERENCES `marca` (`id_Marca`),
  ADD CONSTRAINT `FK_192` FOREIGN KEY (`id_Categoria`) REFERENCES `categoria` (`id_Categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
