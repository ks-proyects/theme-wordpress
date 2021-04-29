# Theme-Keysist
>Es un tema desarollado por KeySist, que permite gestionar información dinámica como **"Servicios, Testimonios, Cursos, Carreras"**

# Dependecias

Para el correcto funcionamiento del tema dependera de los siguientes Plugins

> Advanced Custom Fields [Link](https://www.advancedcustomfields.com/)

>Datos Dinámicos KeySist [Repositorio Git](https://github.com/ks-proyects/keysist_post_types)

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
### Para Los Tipos Servicios, Caracteristicas, Testimonios y Equipo de Trabajo

Label | Código | Tipo | Valor 
--- | --- | --- | --- |--- 
Activo | activo | Select | 0,1 

| Primer encabezado | Segundo encabezado |
| ------------- | ------------- |
| Contenido de la celda  | Contenido de la celda  |
| Contenido de la celda  | Contenido de la celda  |


- Activo Código-->activo, Tipo--> Select, Valores--> 0,1
- Orden Código-->orden, TipO--> Número, Valores--> 0,1,2,..
- Icono Código-->icono, TipO--> Select, Valores--> **fa-desktop**,**fa-camera-retro**,**fa-rocket**,...
> Se puede usar los siguientes iconos [FontAsome 4.7.0](https://fontawesome.com/v4.7.0/icons/)


### Para Los Tipos que son Cursos Carreras
- Activo-->activo, Tipo--> Select, Valores--> 0,1
- Orden-->orden, TipO--> Número, Valores--> 0,1,2,..
- Icono-->icono, TipO--> Select, Valores--> **fa-desktop**,**fa-camera-retro**,**fa-rocket**,...
> Se puede usar los siguientes iconos [FontAsome 4.7.0](https://fontawesome.com/v4.7.0/icons/)

- Mostrar Inicio -->mostrar_inicio Tipo--> Select, Valores--> 0,1



```sh
Paso 4. Crear Registros en cada uno de las entidades con los nuevos metadas
```

```sh
Paso 5. Crear el menu con las secciones activas de la plantillas, la referencia o el id de las secciones son las siguientes
```
- Contactos -> "contact"
- Equipo -> "team"
- Testimonios -> "testimonios"
- Acerca de Nosotros -> "aboutus"
- Blogs -> "blogs"
- Caracteristicas -> "caracteristic"
- Servicios -> "services"

```sh
Paso 6. Debemos crear una pagina y en la opción "Ajustes de portada" de la plantilla seleccionamos pagina estatica y en "Página de inicio" selecioanmos la pagina creada
```

# Secciones

## Identidad del sitio
Permite configurar la información de la página

## Colores Generales
Permite Modificar los colores de la página

## Configuración de Letra
Permite Modificar el tipo de letra de la página

## Imagen de cabecera

## Imagen de fondo

## Configuración de Tema

### Layout Options

Configuramos la forma de mostrar el contenido de los blogs

### Sección Footer
Permite Configurar la sección del Footer, para mostrar las redes sociales de debe de activar la opcion y luego crear un menu de tipo red social con los links respectivos
