# Requerimientos do sistema

- [Requerimientos do sistema](#requerimientos-do-sistema)
  - [1- Descrición Xeral](#1--descrición-xeral)
  - [2- Funcionalidades](#2--funcionalidades)
  - [3- Tipos de usuarios](#3--tipos-de-usuarios)
  - [4- Contorno operacional](#4--contorno-operacional)
  - [5- Normativa](#5--normativa)
  - [6- Melloras futuras](#6--melloras-futuras)

## 1- Descrición Xeral

DeviceCare es una aplicación destinada a la gestión de mantenimientos de equipos, dirigida principalmente a empresas especializadas en este ámbito. El propósito principal de la aplicación es proporcionar una plataforma centralizada que simplifique la gestión de clientes, dispositivos y mantenimientos.

**Funcionalidades Principales:**
- Registro de nuevos clientes y asociación de dispositivos a cada uno de ellos.
- Creación de un historial detallado de los mantenimientos realizados en cada equipo.
- Asignación de técnicos a las solicitudes de servicio y seguimiento exhaustivo de las intervenciones realizadas.

**Objetivo:**
El objetivo principal de DeviceCare es optimizar y agilizar el proceso de gestión de mantenimientos, permitiendo a las empresas ofrecer un servicio más eficiente y de mayor calidad a sus clientes. Además, se considera que esta solución tiene potencial para convertirse en una herramienta comercializable, ya que muchas empresas requieren herramientas eficientes para gestionar sus operaciones de mantenimiento.

DeviceCare representa una solución integral para las empresas del sector, brindando una gestión más efectiva de los mantenimientos de equipos y contribuyendo al crecimiento y la eficiencia de las mismas.

## 2- Funcionalidades

1. **Registro de Usuarios**
   - **Descripción**: Permite a los usuarios registrarse en la plataforma proporcionando su información personal.
   - **Actores Involucrados**: Usuarios, Sistema.
   - **Datos de Entrada**: Nombre de usuario, correo electrónico, contraseña.
   - **Proceso**: El sistema verifica la validez de los datos ingresados y los almacena en la base de datos.
   - **Datos de Salida**: Confirmación de registro.

2. **Inicio de Sesión**
   - **Descripción**: Permite a los usuarios iniciar sesión en la plataforma utilizando sus credenciales.
   - **Actores Involucrados**: Usuarios, Sistema.
   - **Datos de Entrada**: Correo electrónico del usuario, contraseña.
   - **Proceso**: El sistema verifica la autenticidad de las credenciales ingresadas y otorga acceso si son válidas.
   - **Datos de Salida**: Sesión iniciada, acceso a funciones del usuario.

3. **Registro de Clientes**
   - **Descripción**: Permite registrar nuevos clientes en la aplicación.
   - **Actores Involucrados**: Técnicos, Sistema.
   - **Datos de Entrada**: Datos del cliente.
   - **Proceso**: El técnico registra al cliente en la aplicación.
   - **Datos de Salida**: Cliente registrado.

4. **Registro de Dispositivos**
   - **Descripción**: Permite registrar nuevos dispositivos detallado de los mantenimientos a realizar en cada equipo y asocia el cliente al dispositivo.
   - **Actores Involucrados**: Técnicos, Sistema.
   - **Datos de Entrada**: Detalles del mantenimiento, información del equipo, cliente asociado.
   - **Proceso**: El técnico registra los detalles de cada dispositivo, incluyendo cliente, tipo de mantenimiento y descripción de este mismo.
   - **Datos de Salida**: Dispositivo registrado.

## 3- Tipos de usuarios
   
1. **Usuario Registrado**
   - **Descripción**: Los usuarios registrados han creado una cuenta en el sistema y tienen acceso a las funcionalidades del mismo, como registrar clientes o dispositivos.

2. **Usuario Administrador**
   - **Descripción**: Los administradores tienen privilegios ampliados en el sistema y pueden acceder a todas las funcionalidades de administración. Tienen la capacidad de gestionar usuarios, configurar ajustes del sistema, y moderar contenidos y actividades.

## 4- Contorno operacional

Los usuarios solo necesitan disponer de:

- **Navegador Web Actualizado**: Se requiere un navegador web moderno y actualizado, como Google Chrome, Mozilla Firefox, Microsoft Edge o Safari, para acceder a la plataforma y disfrutar de todas sus funcionalidades.

- **Conexión a Internet**: Es imprescindible contar con una conexión a internet estable y de calidad para acceder a la aplicación y cargar todos los contenidos de manera óptima.

No se necesitan otros recursos adicionales de hardware o software para utilizar la aplicación, lo que garantiza una experiencia de usuario accesible.

## 5- Normativa

En este apartado, se detalla cómo el proyecto cumple con la normativa vigente relacionada con la protección de datos y otros aspectos legales relevantes.

### Cumplimiento de la Ley Orgánica 3/2018

El proyecto "DeviceCare" cumple con la normativa nacional en materia de protección de datos. Se hace referencia a la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDPGDD).

### Información sobre el Tratamiento de Datos

En cumplimiento de la normativa, se proporciona la siguiente información sobre el tratamiento de datos en la plataforma:

- **Responsable del Tratamiento de Datos**: Iván Alonso Vidal
- **Finalidad del Tratamiento**: Los datos proporcionados por los usuarios se utilizan exclusivamente para el funcionamiento de la plataforma "DeviceCare" y la mejora de la experiencia del usuario.
- **Aviso Legal**: Se incluye un aviso legal detallado que informa a los usuarios sobre sus derechos y obligaciones al utilizar la plataforma.
- **Política de Privacidad**: Se proporciona una política de privacidad que explica cómo se recopilan, utilizan, almacenan y protegen los datos personales de los usuarios.
- **Política de Cookies**: Se presenta una política de cookies que informa a los usuarios sobre el uso de cookies en la plataforma y cómo pueden gestionar sus preferencias de cookies.

El proyecto "DeviceCare" se compromete a cumplir con todas las obligaciones legales establecidas en la normativa vigente para garantizar la protección de los datos personales de los usuarios y proporcionar un entorno seguro y transparente para su uso.

## 6- Melloras futuras

La aplicación web "DeviceCare" se encuentra en una etapa prematura de su desarrollo, por lo cual aún no dispone de todo el potencial que podría llegar a alcanzar en un futuro con mejoras y posibles ampliaciones.

Algunas de las nuevas funcionalidades que podrían considerarse son las siguientes:

1. **Notificaciones Automatizadas**:
   - Desarrollar un sistema de notificaciones automatizadas para alertar a los clientes sobre el estado de sus equipos y los próximos mantenimientos programados.

2. **Gestión de Inventario**:
   - Agregar funcionalidades para gestionar el inventario de piezas y repuestos, facilitando la gestión de pedidos de suministros y el seguimiento de productos disponibles.

3. **Programación de Mantenimientos Periódicos**:
   - Permitir a los clientes programar mantenimientos periódicos para sus equipos, con recordatorios automáticos para garantizar un servicio preventivo constante.

4. **Integración de Facturación**:
   - Integrar un sistema de facturación para generar automáticamente facturas detalladas de los servicios prestados, simplificando la gestión financiera de la empresa.

5. **Análisis de Datos y Reportes**:
   - Incorporar herramientas de análisis de datos y generación de reportes para visualizar métricas clave y tomar decisiones informadas basadas en datos.

6. **Gestión de Personal y Horarios**:
   - Desarrollar un módulo para gestionar el personal técnico, asignar horarios de trabajo y planificar rutas de servicio de manera eficiente.

7. **Interfaz Móvil**:
   - Desarrollar una aplicación móvil complementaria para que los técnicos puedan acceder a la información de los mantenimientos y actualizar el estado de los equipos desde cualquier lugar.

8. **Soporte Multilingüe**:
   - Incorporar soporte para múltiples idiomas para adaptar la aplicación a las necesidades de clientes internacionales.

9. **Integración con IoT**:
    - Explorar la integración con dispositivos IoT para monitorear el estado de los equipos de forma remota y anticipar posibles problemas.

Estas son solo algunas ideas de posibles mejoras que podrían considerarse para ampliar y enriquecer la funcionalidad de la aplicación.
