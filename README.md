# Proyecto CRUD para Gestión de Pacientes
Este proyecto es un sistema CRUD (Crear, Leer, Actualizar, Eliminar) diseñado como parte de una entrega universitaria. El objetivo principal es proporcionar a los médicos un dashboard intuitivo y eficiente para la gestión de pacientes y sus respectivas consultas médicas.

## Características Principales

- **Gestión de Pacientes:** Permite al médico añadir nuevos pacientes, ver detalles de pacientes existentes, editar su información y eliminar registros obsoletos.
- **Control de Consultas:** Facilita la organización de las consultas médicas, con la capacidad de programar, actualizar y cancelar citas.
- **Interfaz Amigable:** Diseñada para ser utilizada con facilidad por el personal médico, con un enfoque en la claridad y accesibilidad de la información.

## Instrucciones de Instalación

0. Clonar el repositorio en su máquina local.
1. Ejecutar `npm install && npm run dev` para instalar los estilos necesarios.
2. Ejecutar `php artisan migrate` para preparar la base de datos.
2. Ejecutar `php artisan db:seed` para llenar la base de datos con dummy data.
3. Ejecutar `php artisan serve` para correr aplicación en el localhost.