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

> *EXPLICACION* Investigarase que normativa vixente afecta ao desenvolvemento do proxecto e de que maneira. O proxecto debe adaptarse ás esixencias legais dos territorios onde vai operar.
> 
> Pola natureza dos sistema de información, unha lei que se vai a ter que mencionar de forma obrigatoria é la [Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDPGDD)](https://www.boe.es/buscar/act.php?id=BOE-A-2018-16673). O ámbito da LOPDPGDD é nacional. Se a aplicación está pensada para operar a nivel europeo, tamén se debe facer referencia á [General Data Protection Regulation (GDPR)](https://eur-lex.europa.eu/eli/reg/2016/679/oj). Na documentación debe afirmarse que o proxecto cumpre coa normativa vixente.
>
> Para cumplir a LOPDPGDD e/ou GDPR debe ter un apartado na web onde se indique quen é a persoa responsable do tratamento dos datos e para que fins se van utilizar. Habitualmente esta información estructúrase nos seguintes apartados:
>
> - Aviso legal.
> - Política de privacidade.
> - Política de cookies.
>
> É acosenllable ver [exemplos de webs](https://www.spotify.com/es/legal/privacy-policy/) que conteñan textos legais referenciando a LOPDPGDD ou GDPR.

## 6- Melloras futuras

> *EXPLICACION* É posible que o noso proxecto se centre en resolver un problema concreto que se poderá ampliar no futuro con novas funcionalidades, novas interfaces, etc.
