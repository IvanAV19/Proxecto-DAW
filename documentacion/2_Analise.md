# Requerimientos do sistema

- [Requerimientos do sistema](#requerimientos-do-sistema)
  - [1- Descrición Xeral](#1--descrición-xeral)
  - [2- Funcionalidades](#2--funcionalidades)
  - [3- Tipos de usuarios](#3--tipos-de-usuarios)
  - [4- Contorno operacional](#4--contorno-operacional)
  - [5- Normativa](#5--normativa)
  - [6- Melloras futuras](#6--melloras-futuras)

> *EXPLICACION*: Este documento describe os requirimentos para "nome do proxecto" especificando que funcionalidade ofrecerá e de que xeito.

## 1- Descrición Xeral

"BIOS Simulator" se concibe como un sistema educativo basado en una página web con el aspecto y la funcionalidad de una BIOS, diseñado específicamente para profesores que buscan un método efectivo de enseñar el funcionamiento de una BIOS.

"BIOS Simulator" permite a los profesores cargar plantillas de ejercicios sobre las diversas funciones de las que dispone una BIOS. El sistema automatiza la corrección de estos ejercicios, permitiendo que los alumnos vean de inmediato si sus respuestas son correctas tras enviarlas. Además, la plataforma web ofrece un entorno interactivo y amigable tanto para profesores como para alumnos.

Al ser una aplicación web, "BIOS Simulator" garantiza un acceso fácil para los usuarios, ya que solo necesitan un navegador para conectarse al servidor que aloja el proyecto, sin necesidad de instalar software adicional. Todos los recursos necesarios, como plantillas de ejercicios, base de datos y copias de seguridad, están almacenados en el servidor.

El éxito de la aplicación depende de la correcta configuración de los parámetros del sistema, que incluyen las plantillas de ejercicios, las soluciones correspondientes, actividades asociadas por el profesor que crea la plantilla. Con la combinación correcta de los valores de estas variables, puede asegurarse de que se crea la plantilla correcta de acuerdo con los requisitos establecidos en las soluciones.

Destinado a profesores del ámbito de la informática, "BIOS Simulator" ofrece una alternativa eficaz para enseñar a los alumnos el funcionamiento de una BIOS. Con esta aplicación, los docentes tienen la capacidad de impartir conocimientos sobre la BIOS sin la necesidad de agrupar a los alumnos en un solo ordenador, evitando así preocupaciones por posibles problemas que puedan surgir en el equipo.

Con este sistema, cada alumno tiene la oportunidad de aprender a utilizar una BIOS desde su propio ordenador de manera segura. La aplicación está diseñada de tal manera que, en caso de elegir una opción incorrecta, no se produce ningún fallo en el ordenador, ya que en ningún momento se trabaja directamente sobre la BIOS, sino sobre la aplicación web.

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

3. **Realización de Ejercicios**
   - **Descripción**: Permite a los alumnos realizar los ejercicios cargados en la aplicación.
   - **Actores Involucrados**: Alumnos, Sistema.
   - **Datos de Entrada**: Ejercicio seleccionado, respuestas proporcionadas por el alumno.
   - **Proceso**: El sistema evalúa las respuestas del alumno y proporciona retroalimentación sobre su desempeño.
   - **Datos de Salida**: Resultado del ejercicio, retroalimentación.

## 3- Tipos de usuarios
   
1. **Usuario Registrado**
   - **Descripción**: Los usuarios registrados han creado una cuenta en el sistema y tienen acceso a las funcionalidades del mismo, como realizar actividades.

2. **Usuario Administrador**
   - **Descripción**: Los administradores tienen privilegios ampliados en el sistema y pueden acceder a todas las funcionalidades de administración. Tienen la capacidad de gestionar usuarios, configurar ajustes del sistema, y moderar contenidos y actividades.

3. **Usuario Premium**
   - **Descripción**: Los usuarios premium tienen acceso a características exclusivas y funcionalidades avanzadas del sistema. Pueden disfrutar de beneficios adicionales, como contenido exclusivo, soporte prioritario y funciones avanzadas.

## 4- Contorno operacional

Los usuarios solo necesitan disponer de:

- **Navegador Web Actualizado**: Se requiere un navegador web moderno y actualizado, como Google Chrome, Mozilla Firefox, Microsoft Edge o Safari, para acceder a la plataforma y disfrutar de todas sus funcionalidades.

- **Conexión a Internet**: Es imprescindible contar con una conexión a internet estable y de calidad para acceder a la aplicación y cargar todos los contenidos de manera óptima.

No se necesitan otros recursos adicionales de hardware o software para utilizar la aplicación, lo que garantiza una experiencia de usuario accesible.

## 5- Normativa

En este apartado, se detalla cómo el proyecto cumple con la normativa vigente relacionada con la protección de datos y otros aspectos legales relevantes.

### Cumplimiento de la Ley Orgánica 3/2018

El proyecto "BIOS Simulator" cumple con la normativa nacional en materia de protección de datos. Se hace referencia a la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDPGDD).

### Información sobre el Tratamiento de Datos

En cumplimiento de la normativa, se proporciona la siguiente información sobre el tratamiento de datos en la plataforma:

- **Responsable del Tratamiento de Datos**: Iván Alonso Vidal
- **Finalidad del Tratamiento**: Los datos proporcionados por los usuarios se utilizan exclusivamente para el funcionamiento de la plataforma "BIOS Simulator" y la mejora de la experiencia del usuario.
- **Aviso Legal**: Se incluye un aviso legal detallado que informa a los usuarios sobre sus derechos y obligaciones al utilizar la plataforma.
- **Política de Privacidad**: Se proporciona una política de privacidad que explica cómo se recopilan, utilizan, almacenan y protegen los datos personales de los usuarios.
- **Política de Cookies**: Se presenta una política de cookies que informa a los usuarios sobre el uso de cookies en la plataforma y cómo pueden gestionar sus preferencias de cookies.

El proyecto "BIOS Simulator" se compromete a cumplir con todas las obligaciones legales establecidas en la normativa vigente para garantizar la protección de los datos personales de los usuarios y proporcionar un entorno seguro y transparente para su uso.

## 6- Melloras futuras

La aplicación web "BIOS Simulator" se encuentra en una etapa prematura de su desarrollo, por lo cual aún no dispone de todo el potencial que podría llegar a alcanzar en un futuro con mejoras y posibles ampliaciones.

Algunas de las nuevas funcionalidades que podrían considerarse son las siguientes:

- **Creación de tablas en la base de datos**: Permitir que los profesores creen sus propias preguntas y respuestas para sus alumnos, almacenándolas en la base de datos.

- **Panel de control para profesores**: Creación de una sección exclusiva para los profesores, desde la cual puedan gestionar sus preguntas, ejercicios enlazados y subirlos directamente a la base de datos.

- **Plantillas de ejercicios personalizadas**: Permitir a los profesores subir plantillas de ejercicios para sus clases, de modo que los alumnos solo puedan acceder a las plantillas activadas por el profesor.

- **Relación entre formularios**: Permitir que los ejercicios contengan preguntas de distintas secciones de la BIOS, desafiando a los alumnos a buscar las opciones correctas entre todas las disponibles.

- **Ampliación de secciones de la BIOS**: Añadir más secciones de la BIOS con sus diferentes valores y opciones, para proporcionar una experiencia más completa de aprendizaje.

- **Funcionalidad de guía de teclas**: Hacer funcional la sección de guía de teclas, permitiendo a los usuarios avanzar entre las distintas opciones de la BIOS y seleccionar valores como si estuvieran interactuando con una BIOS real.

Estas mejoras potenciales pueden mejorar significativamente la experiencia de aprendizaje de los usuarios y añadir valor al proyecto en el futuro.
