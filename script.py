#!/usr/bin/env python3
"""
fix_divs.py
-----------
Corrige el patrón roto:

    <input ... value="<?= $row['Campo'] ?>
    </div>
    " >

y lo convierte en:

    <input ... value="<?= $row['Campo'] ?>" >
    </div>

Recorre recursivamente una carpeta buscando archivos .php y aplica el
reemplazo. Crea una copia de respaldo (.bak) de cada archivo modificado
antes de tocarlo.

USO:
    python3 fix_divs.py /ruta/a/SGE
    python3 fix_divs.py /ruta/a/SGE --dry-run   (solo muestra qué cambiaría, no escribe nada)
"""

import re
import sys
import os
import argparse
import shutil

# Patrón: value="<?= $row['Campo'] ?>" (con o sin espacios) seguido de salto de línea,
# luego </div>, salto de línea, luego " > (con espacios variables antes del >)
PATTERN = re.compile(
    r'(value\s*=\s*"<\?=\s*\$row\[[\'"][^\'"]+[\'"]\]\s*\?>)'   # grupo 1: value="<?= $row['Campo'] ?>
    r'\s*\n'
    r'(\s*)</div>\s*\n'                                          # grupo 2: indentación previa al </div>
    r'\s*"\s*>',
    re.MULTILINE
)

def fix_content(content):
    """Devuelve (nuevo_contenido, num_reemplazos)."""
    def repl(m):
        value_part = m.group(1)
        indent = m.group(2)
        # Reconstruye: value="...?>" >   luego en la línea siguiente </div>
        return f'{value_part}" >\n{indent}</div>'

    new_content, count = PATTERN.subn(repl, content)
    return new_content, count

def process_file(path, dry_run=False):
    with open(path, "r", encoding="utf-8", errors="surrogateescape") as f:
        original = f.read()

    new_content, count = fix_content(original)

    if count > 0:
        print(f"[{count} corrección(es)] {path}")
        if not dry_run:
            backup_path = path + ".bak"
            shutil.copy2(path, backup_path)
            with open(path, "w", encoding="utf-8", errors="surrogateescape") as f:
                f.write(new_content)
    return count

def main():
    parser = argparse.ArgumentParser(description="Corrige el patrón roto de </div> en inputs de SGE")
    parser.add_argument("ruta", help="Carpeta raíz del proyecto (ej: /home/kelvin/Documents/SGE)")
    parser.add_argument("--dry-run", action="store_true", help="Solo mostrar qué se cambiaría, sin escribir archivos")
    parser.add_argument("--ext", default=".php", help="Extensión de archivos a procesar (default: .php)")
    args = parser.parse_args()

    if not os.path.isdir(args.ruta):
        print(f"Error: la ruta '{args.ruta}' no existe o no es una carpeta.")
        sys.exit(1)

    total_files = 0
    total_fixes = 0

    for root, _, files in os.walk(args.ruta):
        for name in files:
            if name.endswith(args.ext):
                full_path = os.path.join(root, name)
                count = process_file(full_path, dry_run=args.dry_run)
                if count > 0:
                    total_files += 1
                    total_fixes += count

    print("\n--- Resumen ---")
    print(f"Archivos modificados: {total_files}")
    print(f"Total de correcciones: {total_fixes}")
    if args.dry_run:
        print("(modo --dry-run: no se escribió ningún archivo)")
    else:
        print("Se creó un .bak junto a cada archivo modificado, por si necesitas revertir.")

if __name__ == "__main__":
    main()