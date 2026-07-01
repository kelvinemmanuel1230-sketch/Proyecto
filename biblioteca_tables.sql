-- =====================================================
-- SCRIPT SQL PARA MÓDULO DE BIBLIOTECA
-- Base de datos: SGE
-- =====================================================

-- Tabla de Autores
CREATE TABLE IF NOT EXISTS `tb_autores` (
  `ID_Autor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Nacionalidad` varchar(50) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Disponible',
  PRIMARY KEY (`ID_Autor`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabla de Editoriales
CREATE TABLE IF NOT EXISTS `tb_editoriales` (
  `ID_Editorial` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Disponible',
  PRIMARY KEY (`ID_Editorial`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabla de Libros
CREATE TABLE IF NOT EXISTS `tb_libros` (
  `ID_Libro` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(255) NOT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `Anio_Publicacion` year(4) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Disponible',
  `ID_Autor` int(11) DEFAULT NULL,
  `ID_Editorial` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Libro`),
  KEY `ID_Autor` (`ID_Autor`),
  KEY `ID_Editorial` (`ID_Editorial`),
  CONSTRAINT `tb_libros_ibfk_1` FOREIGN KEY (`ID_Autor`) REFERENCES `tb_autores` (`ID_Autor`) ON DELETE SET NULL,
  CONSTRAINT `tb_libros_ibfk_2` FOREIGN KEY (`ID_Editorial`) REFERENCES `tb_editoriales` (`ID_Editorial`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabla de Préstamos
CREATE TABLE IF NOT EXISTS `tb_prestamos` (
  `ID_Prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Prestamo` date DEFAULT NULL,
  `Fecha_Devolucion` date DEFAULT NULL,
  `Observaciones` text DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Pendiente',
  `ID_Libro` int(11) DEFAULT NULL,
  `ID_Estudiante` int(11) DEFAULT NULL,
  `ID_Empleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Prestamo`),
  KEY `ID_Libro` (`ID_Libro`),
  KEY `ID_Estudiante` (`ID_Estudiante`),
  KEY `ID_Empleado` (`ID_Empleado`),
  CONSTRAINT `tb_prestamos_ibfk_1` FOREIGN KEY (`ID_Libro`) REFERENCES `tb_libros` (`ID_Libro`) ON DELETE SET NULL,
  CONSTRAINT `tb_prestamos_ibfk_2` FOREIGN KEY (`ID_Estudiante`) REFERENCES `tb_estudiantes` (`ID_Estudiante`) ON DELETE SET NULL,
  CONSTRAINT `tb_prestamos_ibfk_3` FOREIGN KEY (`ID_Empleado`) REFERENCES `tb_empleados` (`ID_Empleado`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- =====================================================
-- FIN DEL SCRIPT SQL PARA MÓDULO DE BIBLIOTECA
-- =====================================================
