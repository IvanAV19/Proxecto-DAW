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

1. **Inicio de Sesión**
   - **Descripción**: Permite a los usuarios iniciar sesión en la plataforma utilizando sus credenciales.
   - **Actores Involucrados**: Usuarios, Sistema.
   - **Datos de Entrada**: Correo electrónico del usuario, contraseña.
   - **Proceso**: El sistema verifica la autenticidad de las credenciales ingresadas y otorga acceso si son válidas.
   - **Datos de Salida**: Sesión iniciada, acceso a funciones del usuario.

2. **Registro de Clientes**
   - **Descripción**: Permite registrar nuevos clientes en la aplicación.
   - **Actores Involucrados**: Técnicos, Sistema.
   - **Datos de Entrada**: Datos del cliente.
   - **Proceso**: El técnico registra al cliente en la aplicación.
   - **Datos de Salida**: Cliente registrado.

3. **Registro de Dispositivos**
   - **Descripción**: Permite registrar nuevos dispositivos detallado de los mantenimientos a realizar en cada equipo y asocia el cliente al dispositivo.
   - **Actores Involucrados**: Técnicos, Sistema.
   - **Datos de Entrada**: Detalles del mantenimiento, información del equipo, cliente asociado.
   - **Proceso**: El técnico registra los detalles de cada dispositivo, incluyendo cliente, tipo de mantenimiento y descripción de este mismo.
   - **Datos de Salida**: Dispositivo registrado.

4. **Registro de Mantenimientos**
   - **Descripción**: Permite registrar nuevos mantenimientos en la aplicación.
   - **Actores Involucrados**: Administrador, Sistema.
   - **Datos de Entrada**: Nombre del mantenimiento, precio.
   - **Proceso**: El sistema verifica la validez de los datos ingresados y los almacena en la base de datos.
   - **Datos de Salida**: Mantenimiento Registrado.

5. **Registro de Técnicos**
   - **Descripción**: Permite registrar nuevos técnicos en la aplicación.
   - **Actores Involucrados**: Administrador, Sistema.
   - **Datos de Entrada**: Nombre de usuario, correo electrónico, contraseña.
   - **Proceso**: El sistema verifica la validez de los datos ingresados y los almacena en la base de datos.
   - **Datos de Salida**: Técnico registrado.

## 3- Tipos de usuarios
   
1. **Usuario Técnico**
   - **Descripción**: Los usuarios técnicos han sido creados por el usuario administrador en el sistema y tienen acceso a las funcionalidades del mismo, como registrar clientes o dispositivos.

2. **Usuario Administrador**
   - **Descripción**: Los administradores tienen privilegios ampliados en el sistema y pueden acceder a todas las funcionalidades de administración. Tienen la capacidad de gestionar técnicos, configurar nuevos tipos de mantenimientos.

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

- **Responsable del Tratamiento de Datos**: Empresa adquisidora del producto
- **Finalidad del Tratamiento**: Los datos proporcionados por los usuarios se utilizan exclusivamente para el funcionamiento de la plataforma "DeviceCare" y la mejora de la experiencia del usuario.

### Aviso Legal

#### Propiedad Intelectual e Industrial

Todos los derechos de propiedad intelectual e industrial del sitio web y sus contenidos son propiedad de Iván Alonso Vidal. Queda prohibida cualquier reproducción, distribución, comunicación pública o transformación sin la autorización expresa del titular.

#### Licencia de Software

El software utilizado en este sitio web se distribuye bajo los términos de la Licencia Apache versión 2.0. Puede consultar los términos completos de la licencia en el siguiente enlace: [Apache v2.0](https://www.apache.org/licenses/LICENSE-2.0).

#### Limitación de Responsabilidad

El titular del sitio web no se hace responsable de los daños y perjuicios derivados del uso de la información y los contenidos del sitio web. Tampoco se responsabiliza de los contenidos de los enlaces externos que puedan incluirse en el sitio.

#### Legislación Aplicable

La utilización de este sitio web se rige por la legislación española.

#### Contacto

Para cualquier consulta o reclamación relacionada con el sitio web, por favor, contáctenos a través de soporte@devicecare.com.

### Política de Privacidad

#### 1. Responsable del Tratamiento de Datos

- El responsable del tratamiento de los datos personales recabados a través de este sitio web es Iván Alonso Vidal.

#### 2. Finalidad del Tratamiento de Datos

- Los datos personales proporcionados por los usuarios a través de este sitio web serán tratados exclusivamente para el funcionamiento de la plataforma "DeviceCare" y la mejora de la experiencia del usuario.

#### 3. Base Jurídica del Tratamiento de Datos

El tratamiento de los datos personales se basa en el consentimiento del usuario y la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDGDD). Al proporcionar sus datos personales a través de este sitio web y aceptar esta política de privacidad, el usuario otorga su consentimiento para el tratamiento de sus datos con las finalidades descritas anteriormente.

El usuario tiene derecho a retirar su consentimiento en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada. Para ejercer este derecho, el usuario puede ponerse en contacto con nosotros a través de los medios indicados en el apartado de Contacto de esta política.

#### 4. Categorías de Datos Personales

Los datos personales que recopilamos pueden incluir, entre otros:

- Datos de identificación: nombre, apellidos, dirección, número de teléfono, dirección de correo electrónico, etc.
- Datos de contacto: dirección postal, dirección de correo electrónico, número de teléfono, etc.
- Datos de localización: ubicación geográfica obtenida a través de dispositivos móviles o navegadores web.
- Datos de perfil: información sobre preferencias, intereses, historial de compras, etc.
- Datos técnicos: dirección IP, tipo de navegador, sistema operativo, etc.

#### 5. Destinatarios de los Datos

Los datos personales recopilados pueden ser compartidos con las siguientes categorías de destinatarios:

- Proveedores de servicios: empresas que prestan servicios en nuestro nombre, como proveedores de alojamiento web, servicios de análisis, servicios de marketing, etc.
- Autoridades competentes: en cumplimiento de obligaciones legales o para proteger nuestros derechos, intereses o seguridad, podemos compartir datos personales con autoridades competentes, como fuerzas del orden, autoridades judiciales, agencias gubernamentales, etc.
- Terceros con consentimiento del usuario: en caso de obtener el consentimiento del usuario, podemos compartir datos personales con terceros, como socios comerciales, patrocinadores, etc.

#### 6. Derechos de los Usuarios

- Los usuarios tienen derecho a acceder, rectificar, suprimir, limitar u oponerse al tratamiento de sus datos personales, así como a la portabilidad de los mismos.
- Para ejercer dichos derechos, los usuarios pueden ponerse en contacto con el responsable del tratamiento a través de soporte@devicecare.com.
- Los usuarios también tienen derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (AEPD) si consideran que sus derechos han sido vulnerados.

#### 7. Conservación de los Datos

- Los datos personales se conservarán durante el tiempo necesario para cumplir con la finalidad para la que fueron recabados, así como para cumplir con las obligaciones legales aplicables.

#### 8. Modificaciones de la Política de Privacidad

- El responsable del tratamiento se reserva el derecho de modificar la presente política de privacidad para adaptarla a novedades legislativas o jurisprudenciales, así como a prácticas de la industria. Cualquier modificación será publicada en este sitio web.

### Política de Cookies

#### 1. ¿Qué son las cookies?

Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo (ordenador, teléfono móvil, tableta) cuando visitas nuestro sitio web. Se utilizan para registrar cierta información sobre tu visita y mejorar tu experiencia de usuario.

#### 2. Tipos de cookies que utilizamos

##### Cookies esenciales

Estas cookies son necesarias para el funcionamiento básico de nuestro sitio web y nos permiten gestionar la entrega de contenido y la navegación por el sitio. No requieren tu consentimiento.

##### Cookies de rendimiento

Estas cookies recopilan información sobre cómo los visitantes utilizan nuestro sitio web, como qué páginas visitan con más frecuencia y si encuentran algún error. Nos ayudan a mejorar el rendimiento del sitio web.

##### Cookies de funcionalidad

Estas cookies permiten que nuestro sitio web recuerde las elecciones que realizas (como tu nombre de usuario, idioma o región) y proporciona características mejoradas y más personalizadas. También pueden ser utilizadas para proporcionar servicios que has solicitado.

##### Cookies de marketing

Estas cookies se utilizan para rastrear tus hábitos de navegación y ofrecerte anuncios personalizados según tus intereses. También pueden ser utilizadas para limitar el número de veces que ves un anuncio y para medir la efectividad de una campaña publicitaria.

#### 3. Control de cookies

Puedes controlar y/o eliminar las cookies según tus preferencias. Para más información, consulta la sección de ayuda de tu navegador o visita www.aboutcookies.org, que proporciona detalles sobre cómo hacerlo en una amplia variedad de navegadores.

#### 4. Cambios en nuestra política de cookies

Nos reservamos el derecho de realizar cambios en nuestra política de cookies en cualquier momento. Cualquier cambio se publicará en esta página y entrará en vigor inmediatamente después de su publicación.


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

7. **Soporte Multilingüe**:
   - Incorporar soporte para múltiples idiomas para adaptar la aplicación a las necesidades de clientes internacionales.

8. **Integración con IoT**:
    - Explorar la integración con dispositivos IoT para monitorear el estado de los equipos de forma remota y anticipar posibles problemas.

Estas son solo algunas ideas de posibles mejoras que podrían considerarse para ampliar y enriquecer la funcionalidad de la aplicación.
