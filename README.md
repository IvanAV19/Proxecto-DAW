# DeviceCare

- [Proxecto fin de ciclo](#proxecto-fin-de-ciclo)
  - [Taboleiro do proyecto](#taboleiro-do-proyecto)
  - [Descrición](#descrición)
  - [Instalación / Posta en marcha](#instalación--posta-en-marcha)
  - [Uso](#uso)
  - [Sobre o autor](#sobre-o-autor)
  - [Licenza](#licenza)
  - [Índice](#índice)
  - [Guía de contribución](#guía-de-contribución)
  - [Links](#links)

## Taboleiro do proyecto

> Este proyecto se encuentra en desarrollo en estos momentos.

## Descrición

La aplicación está destinada a la gestión de mantenimientos de equipos, dirigida principalmente a empresas especializadas en este ámbito. El propósito principal de la aplicación es proporcionar una plataforma centralizada que simplifique la gestión de clientes, dispositivos y mantenimientos.

Con esta aplicación, las empresas podrán registrar nuevos clientes y asociar dispositivos a cada uno de ellos, lo que facilitará la creación de un historial detallado de los mantenimientos realizados en cada equipo. Además, la plataforma permitirá asignar técnicos a las solicitudes de servicio y llevar un seguimiento exhaustivo de las intervenciones realizadas.

El objetivo principal de esta aplicación es optimizar y agilizar el proceso de gestión de mantenimientos, permitiendo a las empresas ofrecer un servicio más eficiente y de mayor calidad a sus clientes. Además, se considera que esta solución tiene potencial para convertirse en una herramienta comercializable ya que muchas empresas requieren de herramientas eficientes para gestionar sus operaciones de mantenimiento.

## Instalación / Posta en marcha

### 1.1- Instalación

#### 1.1.1- Requisitos

Para poner en marcha esta aplicación en un ambiente local, asegúrate de que tu equipo cumple con los siguientes requisitos:

- Docker instalado
- Docker Compose instalado

#### 1.1.2- Arranque de la aplicación

Una vez que tengas Docker y Docker Compose instalados, sigue estos pasos para arrancar la aplicación:

1. Abre una terminal en la raíz del proyecto.
2. Ejecuta el siguiente comando para construir y arrancar los contenedores en segundo plano:
   `docker compose up -d`

#### 1.1.3- Carga inicial en la base de datos
Después de arrancar los contenedores, necesitas preparar la base de datos. Ejecuta los siguientes comandos en la terminal:

1. Ejecuta las migraciones para crear las tablas en la base de datos:
   `docker compose exec app php artisan migrate`
   
2. Ejecuta los seeders para poblar la base de datos con datos iniciales:
   `docker compose exec app php artisan db:seed`

#### 1.1.4- Usuario admin
Para acceder a la aplicación con privilegios de administrador, utiliza las siguientes credenciales:

- Nombre de usuario: **admin@devicecare.com**.
- Contraseña de usuario: **secret123**.

## Uso

Podrá acceder a la aplicación web a través de su navegador buscando por el nombre “devicecare.com”. Al iniciar sesión, el técnico aparecerá directamente en la página principal de la aplicación web:

En esta ventana dispondrá de un menú en la parte superior para acceder a las distintas secciones de la app. Estas secciones son "Dispositivos", "Clientes" y "Mantenimientos". Después en cada sección habrá información expecífica.

- **Dispositivos**: En está sección el técnico podrá crear un nuevo dispositivo y asociarlo al mantenimiento o mantenimientos que necesite y a un cliente dado de alta en la aplicación. Podrá filtrar entre los diferentes dispositivos y editar la información asociada al dispositivo y ver información más detallada sobre el.
- **Clientes**: En está sección el técnico podrá crear un nuevo cliente dandolo de alta así al sistema con toda la información necesaria. Podrá filtrar entre los diferentes clientes y editar la información asociada al mismo y ver información más detallada sobre el.
- **Mantenimientos**: En está sección el técnico podrá ver los distintos tipos de mantenimientos y podrá filtrarlos.

## Sobre o autor

Soy un desarrollador de software con experiencia en el diseño e implementación de aplicaciones web. Mi enfoque principal se centra en el desarrollo frontend utilizando tecnologías como HTML, CSS, JavaScript. Además, tengo experiencia en el desarrollo backend con PHP, frameworks como Laravel y bases de datos relacionales como MySQL y MariaDB.

Entre mis puntos fuertes se incluyen la comprensión de los principios de diseño y desarrollo de software, así como habilidades para resolver problemas de manera eficiente y creativa. Tengo una pasión por aprender y mantenerme al día con las últimas tendencias y tecnologías en el campo de la programación.

Mi motivación para este proyecto surge de la identificación de un nicho de mercado sin explotar en el sector educativo. Observé una falta de herramientas interactivas y accesibles para enseñar conceptos técnicos complejos de una manera intuitiva y atractiva. Por lo tanto, mi objetivo es desarrollar una plataforma educativa innovadora que combine la facilidad de uso con un enfoque práctico para ayudar a los estudiantes a comprender mejor temas difíciles.

Puedes contactarme de forma fiable a través de mi correo electrónico: ivanalonsov1@gmail.com.

Estaré disponible para responder cualquier pregunta o discutir ideas durante todo el proceso de creación del proyecto.

## Licenza

Este proyecto está licenciado bajo los términos de la Licencia Apache versión 2.0. Puedes encontrar una copia de la licencia en el archivo [LICENSE](LICENSE) de este repositorio o en el siguiente enlace: [Apache v2.0](https://www.apache.org/licenses/LICENSE-2.0).

Bajo los términos de esta licencia, estás autorizado a usar, modificar y distribuir este software de acuerdo con los términos y condiciones establecidos en la Licencia Apache versión 2.0.

## Índice

1. [Anteproyecto](documentacion/1_Anteproxecto.md)
2. [Análise](documentacion/2_Analise.md)
3. [Deseño](documentacion/3_Deseño.md)
4. [Codificación e probas](documentacion/4_Codificacion_e_probas.md)
5. [Implantación](documentacion/5_Implantación.md)
6. [Referencias](documentacion/6_Referencias.md)
7. [Incidencias](documentacion/7_Incidencias.md)

## Guía de contribución

¡Gracias por considerar contribuir a DeviceCare! Tu ayuda es invaluable para hacer que nuestro proyecto sea aún mejor. Antes de comenzar, asegúrate de leer y seguir estas pautas para que tu contribución sea efectiva con la comunidad de desarrollo.

### Objetivo del Proyecto

DeviceCare tiene como objetivo principal optimizar y agilizar el proceso de gestión de mantenimientos, permitiendo a las empresas ofrecer un servicio más eficiente y de mayor calidad a sus clientes.

### Valores y Normas

Valoramos la inclusión, el respeto, la transparencia y la colaboración en nuestra comunidad de desarrollo. Todas las contribuciones deben estar alineadas con estos valores.

### Procedimiento de Contribución

1. Crea un problema describiendo el cambio propuesto o la adición que deseas realizar.
2. Fork el repositorio principal a tu cuenta de GitHub.
3. Realiza tus cambios en una nueva rama con un nombre descriptivo.
4. Envía una solicitud de extracción y vincúlala al problema que creaste.
5. Participa en la revisión del código y realiza los ajustes necesarios según las sugerencias del equipo.

### Normas de Codificación

- Sigue las convenciones de estilo de código establecidas en el proyecto.
- Utiliza nombres descriptivos para variables, funciones y clases.
- Indenta tu código correctamente y utiliza espacios en lugar de tabulaciones.

### Pruebas y Revisiones

- Escribe pruebas para tu código siempre que sea posible.
- Participa activamente en la revisión del código de otros contribuyentes, ofreciendo comentarios constructivos y sugerencias para mejorar.

### Licencia y Derechos de Autor

Todos los contribuyentes deben aceptar los términos de la licencia de código abierto del proyecto y otorgar los derechos de autor correspondientes a la organización DeviceCare.

### Comunicación y Colaboración

Únete a nuestra sala de chat en Discord y participa en nuestras discusiones y actividades. Si tienes preguntas o necesitas ayuda, no dudes en preguntar en el canal correspondiente.

### Reconocimiento y Agradecimiento

Agradecemos sinceramente todas las contribuciones a DeviceCare y reconocemos el esfuerzo y la dedicación de nuestros contribuyentes. ¡Gracias por ser parte de nuestra comunidad!

### Política de Resolución de Conflictos

En caso de conflictos o desacuerdos, comunícate con un miembro del equipo de moderación para recibir orientación y apoyo en la resolución del problema.

### Actualización y Mantenimiento

Esta guía de contribución se mantendrá actualizada con los cambios en el proyecto y en la comunidad de desarrollo. Agradecemos cualquier comentario o sugerencia para mejorar esta guía.

## Links

> EXPLICACIÓN*: Ligazóns externas e descipciones destas ligazóns que creas conveniente indicar aquí. Xeralmente xa van estar integrados coa túa documentación, pero se requires realizar unha listaxe deles, leste é o lugar.
