#!/bin/bash

print_section() {
    echo
    echo "======================================"
    echo " $1"
    echo "======================================"
    echo
}

print_section "Deploying build..."

date=$(date '+%Y_%m_%d_%H_%M_%S')
TMP_BUILD_DIR="public/build_$date"

print_section "Actualizando el repositorio..."
git pull origin main || { echo "Error: No se pudo actualizar el repositorio."; exit 1; }

print_section "Instalando dependencias..."
npm install || { echo "Error: No se pudieron instalar las dependencias."; exit 1; }

print_section "Generando build en $TMP_BUILD_DIR..."
npm run build -- --outDir $TMP_BUILD_DIR || { echo "Error: No se pudo generar el build."; exit 1; }

print_section "Build generado en $TMP_BUILD_DIR."
echo "Puedes crear el enlace simbólico con uno de los siguientes comandos:"
echo
echo "```"
echo "ln -s $(pwd)/$TMP_BUILD_DIR $(pwd)/public/build"
echo "sudo ln -s $(pwd)/$TMP_BUILD_DIR $(pwd)/public/build"
echo "ln -s \$(pwd)/$TMP_BUILD_DIR \$(pwd)/public/build (para ejecutar en otro servidor)"
echo "```"
echo

print_section "Borrar otros builds"
read -p "¿Quieres borrar otros builds en la carpeta 'public'? (y/n): " borrar

if [ "$borrar" = "y" ]; then
    find public -type d -name 'build_*' -not -name "build_$date" -exec rm -rf {} +
    echo "Otros builds han sido borrados."
else
    echo "No se han borrado otros builds."
fi

print_section "Despliegue completado exitosamente."
exit 0
