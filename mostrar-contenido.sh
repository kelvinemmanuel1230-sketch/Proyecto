#!/bin/bash

# Define el directorio base y el archivo donde se guardará todo
DIRECTORIO="/home/kelvin/Documents/SGE"
ARCHIVO_SALIDA="codigo_completo_sistema.txt"

# Crea o vacía el archivo de salida si ya existe
> "$ARCHIVO_SALIDA"

echo "Iniciando la lectura de archivos en $DIRECTORIO..."

# Busca todos los archivos (-type f) excluyendo (! -name) los .html.bak
find "$DIRECTORIO" -type f ! -name "*.html.bak" | while read -r archivo; do
    echo "Procesando: $archivo"
    
    # Agrega un separador y el nombre del archivo al documento final
    echo "==========================================================" >> "$ARCHIVO_SALIDA"
    echo "ARCHIVO: $archivo" >> "$ARCHIVO_SALIDA"
    echo "==========================================================" >> "$ARCHIVO_SALIDA"
    echo "" >> "$ARCHIVO_SALIDA"
    
    # Extrae el contenido del archivo y lo anexa al documento
    cat "$archivo" >> "$ARCHIVO_SALIDA"
    
    # Agrega saltos de línea para separar del siguiente archivo
    echo -e "\n\n" >> "$ARCHIVO_SALIDA"
done

echo "¡Completado! Todo el contenido se ha guardado en: $ARCHIVO_SALIDA"