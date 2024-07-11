# Configuración para Múltiples Dominios y CSS Modularizado en Laravel

## Índice
1. [Estructura del Proyecto](#estructura-del-proyecto)
2. [Configuración de Vite](#configuración-de-vite)
3. [Configuración de TailwindCSS](#configuración-de-tailwindcss)
4. [Plantillas Blade](#plantillas-blade)
5. [Comandos de Gestión de Dominios](#comandos-de-gestión-de-dominios)

## Estructura del Proyecto

```plaintext
project-root/
├── resources/
│   ├── css/
│   │   ├── app.css
│   │   ├── domain1/
│   │   │   ├── styles.css
│   │   ├── domain2/
│   │   │   ├── styles.css
│   ├── js/
│   │   ├── app.js
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   ├── domain1/
│   │   │   ├── home.blade.php
│   │   ├── domain2/
│   │   │   ├── home.blade.php
├── vite.config.js
├── tailwind.config.js
└── package.json
