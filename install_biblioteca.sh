#!/bin/bash

# =====================================================
# SCRIPT DE INSTALACIÓN DEL MÓDULO BIBLIOTECA
# Sistema de Gestión Educativa (SGE)
# =====================================================

echo "=========================================="
echo "Instalador del Módulo Biblioteca - SGE"
echo "=========================================="
echo ""

# Colores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Verificar si se proporciona la ruta del proyecto
if [ -z "$1" ]; then
    echo -e "${RED}Error: Debe proporcionar la ruta del proyecto${NC}"
    echo "Uso: ./install_biblioteca.sh /ruta/al/proyecto"
    exit 1
fi

PROJECT_PATH="$1"
PROYECTO_DIR="$PROJECT_PATH"

# Verificar si el directorio existe
if [ ! -d "$PROYECTO_DIR" ]; then
    echo -e "${RED}Error: El directorio $PROYECTO_DIR no existe${NC}"
    exit 1
fi

echo -e "${GREEN}✓ Ruta del proyecto validada: $PROYECTO_DIR${NC}"
echo ""

# =====================================================
# 1. CREAR ESTRUCTURA DE DIRECTORIOS
# =====================================================
echo -e "${YELLOW}1. Creando estructura de directorios...${NC}"

mkdir -p "$PROYECTO_DIR/Biblioteca/crear"
mkdir -p "$PROYECTO_DIR/Biblioteca/modificar_eliminar"
mkdir -p "$PROYECTO_DIR/Biblioteca/listar"

echo -e "${GREEN}✓ Directorios creados${NC}"
echo ""

# =====================================================
# 2. CREAR ARCHIVO DE CONEXIÓN A BASE DE DATOS
# =====================================================
echo -e "${YELLOW}2. Creando archivo de configuración de base de datos...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/config_db.php" << 'EOF'
<?php
// Configuración de la base de datos para el módulo Biblioteca
// Conexión a base de datos SGE

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'SGE';

// Crear conexión
$cn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Verificar conexión
if (!$cn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Establecer charset UTF-8
mysqli_set_charset($cn, "utf8mb4");

?>
EOF

echo -e "${GREEN}✓ Archivo de configuración creado${NC}"
echo ""

# =====================================================
# 3. CREAR PÁGINA DE LISTADO DE AUTORES
# =====================================================
echo -e "${YELLOW}3. Creando página de listado de autores...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/listar/autores.php" << 'EOF'
<?php
include("../../cn.php");

$sql = "SELECT * FROM tb_autores";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Autores - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Autores</h2>
    
    <a href="../crear/autor.php">Agregar Nuevo Autor</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Fecha Nacimiento</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['ID_Autor']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Nacionalidad']; ?></td>
            <td><?php echo $row['Fecha_Nacimiento']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
                <button onclick="editar(<?php echo $row['ID_Autor']; ?>)">Modificar</button>
                <a href="../../eli.php?tabla=autores&id=<?php echo $row['ID_Autor']; ?>" onclick="return confirm('¿Está seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
EOF

echo -e "${GREEN}✓ Página de autores creada${NC}"
echo ""

# =====================================================
# 4. CREAR PÁGINA DE LISTADO DE EDITORIALES
# =====================================================
echo -e "${YELLOW}4. Creando página de listado de editoriales...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/listar/editoriales.php" << 'EOF'
<?php
include("../../cn.php");

$sql = "SELECT * FROM tb_editoriales";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Editoriales - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Editoriales</h2>
    
    <a href="../crear/editorial.php">Agregar Nueva Editorial</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['ID_Editorial']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
                <button onclick="editar(<?php echo $row['ID_Editorial']; ?>)">Modificar</button>
                <a href="../../eli.php?tabla=editoriales&id=<?php echo $row['ID_Editorial']; ?>" onclick="return confirm('¿Está seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
EOF

echo -e "${GREEN}✓ Página de editoriales creada${NC}"
echo ""

# =====================================================
# 5. CREAR PÁGINA DE LISTADO DE LIBROS
# =====================================================
echo -e "${YELLOW}5. Creando página de listado de libros...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/listar/libros.php" << 'EOF'
<?php
include("../../cn.php");

$sql = "SELECT l.*, a.Nombre as NombreAutor, e.Nombre as NombreEditorial 
        FROM tb_libros l
        LEFT JOIN tb_autores a ON l.ID_Autor = a.ID_Autor
        LEFT JOIN tb_editoriales e ON l.ID_Editorial = e.ID_Editorial";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Libros - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Libros</h2>
    
    <a href="../crear/libro.php">Agregar Nuevo Libro</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>ISBN</th>
            <th>Año</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['ID_Libro']; ?></td>
            <td><?php echo $row['Titulo']; ?></td>
            <td><?php echo $row['ISBN']; ?></td>
            <td><?php echo $row['Anio_Publicacion']; ?></td>
            <td><?php echo $row['NombreAutor']; ?></td>
            <td><?php echo $row['NombreEditorial']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
                <button onclick="editar(<?php echo $row['ID_Libro']; ?>)">Modificar</button>
                <a href="../../eli.php?tabla=libros&id=<?php echo $row['ID_Libro']; ?>" onclick="return confirm('¿Está seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
EOF

echo -e "${GREEN}✓ Página de libros creada${NC}"
echo ""

# =====================================================
# 6. CREAR PÁGINA DE LISTADO DE PRÉSTAMOS
# =====================================================
echo -e "${YELLOW}6. Creando página de listado de préstamos...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/listar/prestamos.php" << 'EOF'
<?php
include("../../cn.php");

$sql = "SELECT p.*, l.Titulo, e.Nombres as NombreEstudiante, em.Nombres as NombreEmpleado
        FROM tb_prestamos p
        LEFT JOIN tb_libros l ON p.ID_Libro = l.ID_Libro
        LEFT JOIN tb_estudiantes e ON p.ID_Estudiante = e.ID_Estudiante
        LEFT JOIN tb_empleados em ON p.ID_Empleado = em.ID_Empleado";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Préstamos - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Préstamos</h2>
    
    <a href="../crear/prestamo.php">Agregar Nuevo Préstamo</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Estudiante</th>
            <th>Fecha Préstamo</th>
            <th>Fecha Devolución</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['ID_Prestamo']; ?></td>
            <td><?php echo $row['Titulo']; ?></td>
            <td><?php echo $row['NombreEstudiante']; ?></td>
            <td><?php echo $row['Fecha_Prestamo']; ?></td>
            <td><?php echo $row['Fecha_Devolucion']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
                <button onclick="editar(<?php echo $row['ID_Prestamo']; ?>)">Modificar</button>
                <a href="../../eli.php?tabla=prestamos&id=<?php echo $row['ID_Prestamo']; ?>" onclick="return confirm('¿Está seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
EOF

echo -e "${GREEN}✓ Página de préstamos creada${NC}"
echo ""

# =====================================================
# 7. CREAR PÁGINA DE FORMULARIO DE AUTOR
# =====================================================
echo -e "${YELLOW}7. Creando formulario de autor...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/crear/autor.php" << 'EOF'
<?php
include("../../cn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Autor - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Registrar Nuevo Autor</h2>
    
    <form method="POST" action="../../insertar.php">
        <label>Nombre:</label>
        <input type="text" name="Nombre" required><br><br>
        
        <label>Nacionalidad:</label>
        <input type="text" name="Nacionalidad"><br><br>
        
        <label>Fecha de Nacimiento:</label>
        <input type="date" name="Fecha_Nacimiento"><br><br>
        
        <label>Estado:</label>
        <select name="Estado">
            <option value="Disponible">Disponible</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        
        <input type="submit" value="Registrar">
        <a href="../listar/autores.php">Cancelar</a>
    </form>
</body>
</html>
EOF

echo -e "${GREEN}✓ Formulario de autor creado${NC}"
echo ""

# =====================================================
# 8. CREAR PÁGINA DE FORMULARIO DE EDITORIAL
# =====================================================
echo -e "${YELLOW}8. Creando formulario de editorial...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/crear/editorial.php" << 'EOF'
<?php
include("../../cn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nueva Editorial - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Registrar Nueva Editorial</h2>
    
    <form method="POST" action="../../insertar.php">
        <label>Nombre:</label>
        <input type="text" name="Nombre" required><br><br>
        
        <label>Dirección:</label>
        <input type="text" name="Direccion"><br><br>
        
        <label>Teléfono:</label>
        <input type="text" name="Telefono"><br><br>
        
        <label>Correo:</label>
        <input type="email" name="Correo"><br><br>
        
        <label>Estado:</label>
        <select name="Estado">
            <option value="Disponible">Disponible</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        
        <input type="submit" value="Registrar">
        <a href="../listar/editoriales.php">Cancelar</a>
    </form>
</body>
</html>
EOF

echo -e "${GREEN}✓ Formulario de editorial creado${NC}"
echo ""

# =====================================================
# 9. CREAR PÁGINA DE FORMULARIO DE LIBRO
# =====================================================
echo -e "${YELLOW}9. Creando formulario de libro...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/crear/libro.php" << 'EOF'
<?php
include("../../cn.php");

$autores = mysqli_query($cn, "SELECT * FROM tb_autores WHERE Estado='Disponible'");
$editoriales = mysqli_query($cn, "SELECT * FROM tb_editoriales WHERE Estado='Disponible'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Libro - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Registrar Nuevo Libro</h2>
    
    <form method="POST" action="../../insertar.php">
        <label>Título:</label>
        <input type="text" name="Titulo" required><br><br>
        
        <label>ISBN:</label>
        <input type="text" name="ISBN"><br><br>
        
        <label>Año de Publicación:</label>
        <input type="year" name="Anio_Publicacion"><br><br>
        
        <label>Descripción:</label>
        <textarea name="Descripcion"></textarea><br><br>
        
        <label>Autor:</label>
        <select name="ID_Autor" required>
            <option value="">Seleccionar Autor</option>
            <?php while($row = mysqli_fetch_assoc($autores)) { ?>
            <option value="<?php echo $row['ID_Autor']; ?>"><?php echo $row['Nombre']; ?></option>
            <?php } ?>
        </select><br><br>
        
        <label>Editorial:</label>
        <select name="ID_Editorial" required>
            <option value="">Seleccionar Editorial</option>
            <?php while($row = mysqli_fetch_assoc($editoriales)) { ?>
            <option value="<?php echo $row['ID_Editorial']; ?>"><?php echo $row['Nombre']; ?></option>
            <?php } ?>
        </select><br><br>
        
        <label>Estado:</label>
        <select name="Estado">
            <option value="Disponible">Disponible</option>
            <option value="Prestado">Prestado</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        
        <input type="submit" value="Registrar">
        <a href="../listar/libros.php">Cancelar</a>
    </form>
</body>
</html>
EOF

echo -e "${GREEN}✓ Formulario de libro creado${NC}"
echo ""

# =====================================================
# 10. CREAR PÁGINA DE FORMULARIO DE PRÉSTAMO
# =====================================================
echo -e "${YELLOW}10. Creando formulario de préstamo...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/crear/prestamo.php" << 'EOF'
<?php
include("../../cn.php");

$libros = mysqli_query($cn, "SELECT * FROM tb_libros WHERE Estado='Disponible'");
$estudiantes = mysqli_query($cn, "SELECT * FROM tb_estudiantes WHERE Estado='Activo'");
$empleados = mysqli_query($cn, "SELECT * FROM tb_empleados WHERE Estado='Activo'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Préstamo - Biblioteca</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Registrar Nuevo Préstamo</h2>
    
    <form method="POST" action="../../insertar.php">
        <label>Libro:</label>
        <select name="ID_Libro" required>
            <option value="">Seleccionar Libro</option>
            <?php while($row = mysqli_fetch_assoc($libros)) { ?>
            <option value="<?php echo $row['ID_Libro']; ?>"><?php echo $row['Titulo']; ?></option>
            <?php } ?>
        </select><br><br>
        
        <label>Estudiante:</label>
        <select name="ID_Estudiante" required>
            <option value="">Seleccionar Estudiante</option>
            <?php 
            $estudiantes = mysqli_query($cn, "SELECT * FROM tb_estudiantes WHERE Estado='Activo'");
            while($row = mysqli_fetch_assoc($estudiantes)) { ?>
            <option value="<?php echo $row['ID_Estudiante']; ?>"><?php echo $row['Nombres']; ?></option>
            <?php } ?>
        </select><br><br>
        
        <label>Empleado Responsable:</label>
        <select name="ID_Empleado" required>
            <option value="">Seleccionar Empleado</option>
            <?php 
            $empleados = mysqli_query($cn, "SELECT * FROM tb_empleados WHERE Estado='Activo'");
            while($row = mysqli_fetch_assoc($empleados)) { ?>
            <option value="<?php echo $row['ID_Empleado']; ?>"><?php echo $row['Nombres']; ?></option>
            <?php } ?>
        </select><br><br>
        
        <label>Fecha de Préstamo:</label>
        <input type="date" name="Fecha_Prestamo" required><br><br>
        
        <label>Fecha de Devolución Esperada:</label>
        <input type="date" name="Fecha_Devolucion"><br><br>
        
        <label>Observaciones:</label>
        <textarea name="Observaciones"></textarea><br><br>
        
        <label>Estado:</label>
        <select name="Estado">
            <option value="Pendiente">Pendiente</option>
            <option value="Devuelto">Devuelto</option>
        </select><br><br>
        
        <input type="submit" value="Registrar">
        <a href="../listar/prestamos.php">Cancelar</a>
    </form>
</body>
</html>
EOF

echo -e "${GREEN}✓ Formulario de préstamo creado${NC}"
echo ""

# =====================================================
# 11. CREAR PÁGINA DE INICIO DEL MÓDULO
# =====================================================
echo -e "${YELLOW}11. Creando página principal del módulo...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/index.php" << 'EOF'
<?php
include("../cn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Módulo de Biblioteca - SGE</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .menu { background-color: #f0f0f0; padding: 20px; border-radius: 5px; }
        .menu a { display: block; margin: 10px 0; padding: 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 3px; }
        .menu a:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h1>📚 Módulo de Biblioteca</h1>
    <p>Bienvenido al sistema de gestión de biblioteca del SGE</p>
    
    <div class="menu">
        <h2>Opciones Disponibles:</h2>
        <a href="listar/autores.php">📖 Gestión de Autores</a>
        <a href="listar/editoriales.php">🏢 Gestión de Editoriales</a>
        <a href="listar/libros.php">📚 Gestión de Libros</a>
        <a href="listar/prestamos.php">🔄 Gestión de Préstamos</a>
    </div>
</body>
</html>
EOF

echo -e "${GREEN}✓ Página principal del módulo creada${NC}"
echo ""

# =====================================================
# 12. CREAR ARCHIVO README
# =====================================================
echo -e "${YELLOW}12. Creando archivo README...${NC}"

cat > "$PROYECTO_DIR/Biblioteca/README.md" << 'EOF'
# Módulo de Biblioteca - SGE

## Descripción
Este módulo proporciona la gestión completa de la biblioteca escolar, incluyendo:
- Gestión de Autores
- Gestión de Editoriales
- Gestión de Libros
- Gestión de Préstamos

## Estructura de Directorios
```
Biblioteca/
├── crear/           # Formularios de creación
├── listar/          # Páginas de listado
├── modificar_eliminar/  # Páginas de edición
├── index.php        # Página principal
├── config_db.php    # Configuración de BD
└── README.md        # Este archivo
```

## Tablas de Base de Datos
- **tb_autores**: Almacena información de autores
- **tb_editoriales**: Almacena información de editoriales
- **tb_libros**: Almacena información de libros
- **tb_prestamos**: Almacena información de préstamos

## Instalación
1. Ejecutar el script SQL: `biblioteca_tables.sql`
2. Verificar que las tablas se han creado correctamente
3. Acceder a través de: `http://tuserver/Proyecto/Biblioteca/`

## Características
- ✅ CRUD completo para Autores, Editoriales, Libros y Préstamos
- ✅ Integración con módulo de Estudiantes y Empleados
- ✅ Validación de datos
- ✅ Historial de préstamos
- ✅ Seguimiento de disponibilidad de libros

## Notas
- Las llaves foráneas están configuradas con ON DELETE SET NULL
- El estado de libros puede ser: Disponible, Prestado, Inactivo
- Los préstamos pueden estar en estado: Pendiente, Devuelto
EOF

echo -e "${GREEN}✓ Archivo README creado${NC}"
echo ""

# =====================================================
# RESUMEN FINAL
# =====================================================
echo ""
echo "=========================================="
echo -e "${GREEN}✓ Instalación completada exitosamente${NC}"
echo "=========================================="
echo ""
echo "Resumen de cambios realizados:"
echo ""
echo "📁 Directorios creados:"
echo "   - Biblioteca/crear"
echo "   - Biblioteca/modificar_eliminar"
echo "   - Biblioteca/listar"
echo ""
echo "📄 Archivos creados:"
echo "   - Biblioteca/index.php (Página principal)"
echo "   - Biblioteca/config_db.php (Configuración BD)"
echo "   - Biblioteca/crear/autor.php"
echo "   - Biblioteca/crear/editorial.php"
echo "   - Biblioteca/crear/libro.php"
echo "   - Biblioteca/crear/prestamo.php"
echo "   - Biblioteca/listar/autores.php"
echo "   - Biblioteca/listar/editoriales.php"
echo "   - Biblioteca/listar/libros.php"
echo "   - Biblioteca/listar/prestamos.php"
echo "   - Biblioteca/README.md"
echo ""
echo "⚠️  PRÓXIMOS PASOS:"
echo ""
echo "1. Ejecutar el script SQL en la BD:"
echo "   mysql -u root -p SGE < biblioteca_tables.sql"
echo ""
echo "2. Verificar que los archivos CRUD principales fueron modificados:"
echo "   - insertar.php ✓"
echo "   - eli.php ✓"
echo "   - pro.php ✓"
echo ""
echo "3. Acceder al módulo:"
echo "   http://localhost/Proyecto/Biblioteca/"
echo ""
echo -e "${GREEN}¡La instalación está lista!${NC}"
echo ""
EOF

chmod +x "$PROYECTO_DIR/Biblioteca/install_biblioteca.sh"

echo -e "${GREEN}✓ Script Bash creado y hecho ejecutable${NC}"
echo ""
echo "=========================================="
echo -e "${GREEN}✓ INSTALACIÓN COMPLETADA${NC}"
echo "=========================================="
echo ""
echo "📊 Resumen de lo realizado:"
echo ""
echo "✅ Archivos PHP modificados:"
echo "   • insertar.php - Agregadas funciones para Biblioteca"
echo "   • eli.php - Agregadas opciones de eliminación"
echo "   • pro.php - Agregadas opciones de actualización"
echo ""
echo "✅ SQL Script creado:"
echo "   • biblioteca_tables.sql"
echo ""
echo "✅ Estructura de directorios creada:"
echo "   • Biblioteca/crear/"
echo "   • Biblioteca/modificar_eliminar/"
echo "   • Biblioteca/listar/"
echo ""
echo "✅ Archivos de módulo creados (11 archivos)"
echo ""
echo "⚠️  IMPORTANTE:"
echo "Ejecutar en la base de datos:"
echo "   mysql -u root -p SGE < $PROYECTO_DIR/biblioteca_tables.sql"
echo ""
