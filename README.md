# Theme-Keysist
>Es un tema desarollado por KeySist, que permite gestionar información dinámica como **"Servicios, Testimonios, Cursos, Carreras"**

# Dependecias

Para el correcto funcionamiento del tema dependera de los siguientes Plugins
```sh
Advanced Custom Fields [Link](https://www.advancedcustomfields.com/)
```
```sh
Datos Dinámicos KeySist [Repositorio Git](https://github.com/ks-proyects/keysist_post_types)
```

# Configuracion
```sh
Paso 1. Instalar el plugin Advanced Custom Fields
```
```sh
Paso 2. Comprimir el repositorio descargado en .zip y cargar como un plugin a WordPres Y ACTIVARLO
```
```sh
Paso 3. Con el plugin "Advanced Custom Fields" crear atributos dinamicos para las entidades creadas con el plugin anterior
```
- Activo-->activo, Tipo-->Número, Valores-->0,1
- Orden-->orden, TipO-->Número, Valores-->0,1,2,..
- Icono-->icono, TipO-->Cadena, Valores-->**fa-desktop**,**fa-camera-retro**,**fa-rocket**,...

```sh
Paso 4. Crear Registros en cada uno de las entidades con los nuevos metadas
```

```sh
Paso 5. Crear el menu con las secciones activas de la plantillas, la referencia o el id de las secciones son las siguientes
```
- Contactos -> "contact"
- Equipo -> "team"
- testimonios -> "testimonios"
- Acerca de Nosotros -> "aboutus"
- Blogs -> "blogs"
- Caracteristicas -> "caracteristic"
- Servicios -> "services"

```sh
Paso 6. Debemos crear una pagina y en la opción "Ajustes de portada" de la plantilla seleccionamos pagina estatica y en "Página de inicio" selecioanmos la pagina creada

# Secciones

## Identidad del sitio
Permite configurar la información de la página

## Colores Generales
Permite Modificar los colores de la página

## Configuración de Letra
Permite Modificar el tipo de letra de la página

## Imagen de cabecera

## Imagen de fondo
