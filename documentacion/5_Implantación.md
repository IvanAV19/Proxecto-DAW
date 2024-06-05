# FASE DE IMPLANTACIÓN

- [FASE DE IMPLANTACIÓN](#fase-de-implantación)
  - [1- Manual técnico](#1--manual-técnico)
    - [1.1- Instalación](#11--instalación)
    - [1.2- Administración do sistema](#12--administración-do-sistema)
  - [2- Manual de usuario](#2--manual-de-usuario)
  - [3- Melloras futuras](#3--melloras-futuras)

## 1- Manual técnico

### 1.1- Instalación

#### 1.1.1-**Requisitos**
- Disponer de Docker y Docker Compose instalado en el equipo.

#### 1.1.2-**Arranque de aplicación**
- Ejecutar el comando `docker compose up -d`

#### 1.1.2-**Carga inicial en la base de datos**
- Ejecutar los siguientes comandos:
  `docker compose exec app php artisan migrate`
  `docker compose exec app php artisan db:seed`

#### 1.1.2-**Usuario admin**
- Nombre de usuario: **admin@devicecare.com**.
- Contraseña de usuario: **secret123**.

### 1.2- Administración do sistema

Una vez que la aplicación esté en funcionamiento, es crucial realizar tareas regulares de administración del sistema para asegurar su correcto funcionamiento y la integridad de los datos. A continuación, se detallan las principales tareas de administración que deben llevarse a cabo:

#### 1.3.1- Copias de seguridad del sistema

Para garantizar la recuperación de datos en caso de fallos, es necesario realizar copias de seguridad periódicas tanto del sistema como de la base de datos.

- **Frecuencia:** Diaria
- **Procedimiento:** 
  - Utilizar scripts automatizados para crear copias de seguridad de los contenedores Docker.
  - Guardar las copias de seguridad en un almacenamiento seguro y redundante.

#### 1.3.2- Copias de seguridad de la base de datos

Las copias de seguridad de la base de datos son esenciales para preservar los datos de la aplicación.

- **Frecuencia:** Diaria
- **Procedimiento:** 
  - Ejecutar el siguiente comando para hacer una copia de seguridad de la base de datos:
    ```sh
    docker exec devicecaredb-1 pg_dump -U admin devicecaredb > backup.sql
    ```
  - Almacenar el archivo `backup.sql` en un lugar seguro.

#### 1.3.3- Gestión de usuarios

La gestión de usuarios incluye la creación, modificación y eliminación de cuentas de usuario.

- **Procedimiento:**
  - Acceder al panel de administración de la aplicación.
  - Utilizar las opciones disponibles para añadir nuevos usuarios, modificar permisos o eliminar usuarios existentes.

#### 1.3.4- Gestión de seguridad

Mantener la seguridad del sistema es fundamental para proteger los datos y la integridad de la aplicación.

- **Procedimiento:**
  - Implementar autenticación de dos factores (2FA) para los usuarios.
  - Realizar auditorías de seguridad periódicas.
  - Mantener el software y las dependencias actualizadas para mitigar vulnerabilidades conocidas.

#### 1.3.5- Gestión de incidencias

Las incidencias pueden ser de dos tipos: de sistema y de software. Es importante gestionarlas de manera eficiente para minimizar el impacto en el servicio.

- **Incidencias de sistema:**
  - **Accesos no autorizados a la base de datos:**
    - Monitorizar los logs de acceso para detectar actividades sospechosas.
    - Configurar alertas automáticas para accesos no autorizados.
  - **Procedimiento:**
    - Investigar cualquier acceso no autorizado y tomar medidas correctivas.
    - Informar a los usuarios afectados y realizar un análisis de las brechas de seguridad.

- **Incidencias de software:**
  - **Fallo en el software:**
    - Monitorizar el rendimiento de la aplicación y los logs de errores.
    - Configurar alertas automáticas para fallos críticos.
  - **Procedimiento:**
    - Diagnosticar y resolver los errores de software lo antes posible.
    - Realizar pruebas exhaustivas antes de aplicar cualquier corrección al sistema en producción.

## 2- Manual de usuario

> *EXPLICACIÓN:* Neste apartado fara
>
> - Indicar se será necesario formar ós usuarios. En caso afirmativo planificar.
> - Manual de usuario, FAQ ou outro xeito que sexa o máis adecuado para que os usuarios saiban usar a nosa aplicación informática.
>
> Todo esto se a aplicación require de manual de usuario.

## 3- Melloras futuras

> *EXPLICACIÓN:* Neste apartado incluiranse as posibilidades de mellora da aplicación no futuro.
