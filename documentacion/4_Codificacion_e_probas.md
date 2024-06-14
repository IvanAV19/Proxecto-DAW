# FASE DE CODIFICACIÓN E PROBAS

- [FASE DE CODIFICACIÓN E PROBAS](#fase-de-codificación-e-probas)
  - [1- Codificación](#1--codificación)
  - [2- Prototipos](#2--prototipos)
  - [3- Innovación](#3--innovación)
  - [4- Probas](#4--probas)

> Este documento explica como se debe realizar a fase de codificación e probas.

## 1- Codificación

[Abrir carpeta de la aplicación](../devicecare)

Dispone de la carpeta de la aplicación comprimida con todos los archivos necesarios en la raiz del repositorio con el nombre de **"devicecare_aplicacionCompleta.7z"**.

## 2- Prototipos

**[Enlace Prototipo Figma](https://www.figma.com/file/rbDqwp6vh9sb7bchPQLAXS/Prototipo-Proyecto_DAW?type=design&node-id=6%3A5&mode=design&t=gNMUbXMOF43fSmmP-1)**

## 3- Innovación

En este proyecto, he optado por utilizar tecnologías que van más allá de las estudiadas en el ciclo formativo, con el objetivo de explorar nuevas herramientas y ampliar mis conocimientos en el desarrollo de aplicaciones web.

1. **Descripción de las tecnologías utilizadas**:
   - **Laravel**: He elegido Laravel como framework para el desarrollo del backend de la aplicación. Laravel es conocido por su elegancia, simplicidad y potencia, lo que lo convierte en una excelente opción para construir aplicaciones web robustas y escalables.
   - **Bootstrap**: Para el frontend, he utilizado Bootstrap, un framework de diseño web que facilita la creación de interfaces modernas y responsivas. Bootstrap ofrece una amplia variedad de componentes y estilos predefinidos, lo que agiliza el proceso de desarrollo y garantiza una apariencia consistente en diferentes dispositivos y navegadores.
   - **Node.js y Composer**: Además de Laravel y Bootstrap, he integrado Node.js y Composer en el proyecto para gestionar las dependencias y mejorar la eficiencia del desarrollo. Node.js proporciona un entorno de ejecución para JavaScript del lado del servidor, mientras que Composer es un administrador de paquetes para PHP que simplifica la gestión de bibliotecas y componentes.

2. **Retos asumidos**:
   - Adaptarme a un nuevo framework como Laravel implicó enfrentar el desafío de comprender su arquitectura y su ecosistema de herramientas y convenciones.
   - Integrar Bootstrap en el frontend requirió familiarizarme con su sistema de rejillas, componentes y clases de estilo, así como asegurar la coherencia visual de la interfaz de usuario.
   - La utilización de Node.js y Composer agregó complejidad al proceso de desarrollo al introducir nuevas tecnologías y flujos de trabajo.

3. **Soluciones aplicadas**:
   - Para superar estos retos, he dedicado tiempo a estudiar la documentación oficial, seguir tutoriales e investigar en foros.
   - He realizado pruebas y experimentos en un entorno de desarrollo local para familiarizarme con las funcionalidades y características de cada tecnología.
   - También he aprovechado recursos educativos en línea para adquirir conocimientos adicionales y mejorar mis habilidades en el uso de estas tecnologías.

4. **Beneficios de la innovación**:
   - La adopción de Laravel, Bootstrap, Node.js y Composer ha permitido mejorar la eficiencia y la productividad en el desarrollo del proyecto.
   - Estas tecnologías ofrecen un conjunto robusto de herramientas y funcionalidades que han facilitado la implementación de características avanzadas y la creación de una experiencia de usuario atractiva.
   - Además, explorar nuevas tecnologías ha ampliado mi conjunto de habilidades y me ha brindado una comprensión más profunda del desarrollo web moderno.

## 4- Probas

En este apartado se describen las pruebas realizadas durante el desarrollo del proyecto, las conclusiones obtenidas, los problemas encontrados y las soluciones aplicadas.

### 1. Tipos de pruebas realizadas

**Pruebas Funcionales:**
- **Descripción:** Se verificaron todas las funcionalidades principales de la aplicación para asegurar que cumplan con los requisitos especificados. Estas pruebas incluyeron la creación y gestión de clientes, dispositivos, técnicos y mantenimientos.
- **Conclusión:** Las pruebas funcionales confirmaron que todas las funcionalidades de la aplicación operan correctamente. Las acciones de crear, visualizar, editar y asignar clientes, dispositivos, técnicos y mantenimientos funcionan según lo esperado.

### 2. Detalle de las pruebas realizadas

- **Crear Clientes:**
  - **Descripción:** Se probó la funcionalidad de creación de nuevos clientes en el sistema.
  - **Resultado:** Los clientes se crean correctamente y se almacenan en la base de datos.
- **Crear Dispositivos y Asignar Clientes:**
  - **Descripción:** Se probó la funcionalidad de creación de dispositivos y la asignación de estos a clientes específicos.
  - **Resultado:** Los dispositivos se crean correctamente y se asignan a los clientes seleccionados sin problemas.
- **Crear Técnicos:**
  - **Descripción:** Se probó la funcionalidad de creación de nuevos técnicos en el sistema.
  - **Resultado:** Los técnicos se crean correctamente y se almacenan en la base de datos.
- **Crear y Gestionar Mantenimientos:**
  - **Descripción:** Se probó la funcionalidad de creación de mantenimientos y la asignación de estos a técnicos.
  - **Resultado:** Los mantenimientos se crean correctamente, se asignan a los técnicos y se registran adecuadamente.
- **Visualizar Información:**
  - **Descripción:** Se probó la funcionalidad de visualización de información de clientes, dispositivos, técnicos y mantenimientos.
  - **Resultado:** La información se muestra correctamente en la interfaz de usuario.
- **Editar Información:**
  - **Descripción:** Se probó la funcionalidad de edición de la información existente en el sistema.
  - **Resultado:** La información se edita y se actualiza correctamente en la base de datos.

### 3. Problemas encontrados y soluciones aplicadas

- **Problema:** Al visualizar la información de los clientes y dispositivos, a veces aparecía un error de `NullPointerException`.
  - **Solución:** Se implementó una comprobación para verificar la existencia de valores nulos antes de mostrar la información de los clientes y/o dispositivos.
- **Problema:** Los iconos de diseño en los botones no se mostraban correctamente.
  - **Solución:** Se actualizó la URL de la página desde la que se accedía a esos logos, ya que durante el desarrollo se cambió la URL del sitio web.
- **Problema:** Incorrecta visualización de los elementos en la interfaz de usuario.
  - **Solución:** Se cambiaron los estilos CSS de la web para asegurar una correcta visualización de todos los elementos.
- **Problema:** Al seleccionar un técnico para asignarlo a un dispositivo, la funcionalidad fallaba debido a un error en la ruta referenciada en las solicitudes del dispositivo.
  - **Solución:** Se actualizó el nombre de la ruta en las solicitudes del dispositivo, asegurando que se use la ruta correcta.

En resumen, se realizaron pruebas exhaustivas de todas las funcionalidades clave de la aplicación, y se resolvieron los problemas encontrados de manera efectiva, garantizando que la aplicación funcione de manera óptima y sin errores.
