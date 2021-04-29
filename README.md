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

| Label | Código | Tipo | Valor |
| ------------- | ------------- |------------- |------------- |
| Activo  | activo  | Select  | 0,1  |
| Orden  | orden  | Número  | 0,1,2,3,..  |
| Icono  | icono  | Cadena  | fa-desktop,fa-camera-retro |

> El nombre de los iconos los peude encontrar ene l siguiente link [FontAsome 4.7.0](https://fontawesome.com/v4.7.0/icons/)


### Para Los Tipos que son Cursos, Carreras entre otros

| Label | Código | Tipo | Valor |
| ------------- | ------------- |------------- |------------- |
| Activo  | activo  | Select  | 0,1  |
| Orden  | orden  | Número  | 0,1,2,3,..  |
| Mostrar Inicio  | mostrar_inicio  | Select  | 0,1 |
| Duración  | duracion  | Número  | minimo 1 |
| Tipo Duración  | tipo_duracion  | Select  | horas,días,semanas,meses,años |
| Modalidad  | modalidad  | Select  | Presencial, Distancia, Virtual |
| Titulo  | titulo  | Cadena  |  |
| Campo Ocupacional  | campo_ocupacional  | Cadena  |  |
| Perfil Egresado  | perfil_egresado  | Cadena  |  |
| Ambito Desempeño  | ambito_desempenio  | Cadena  |  |
| Requisitos  | requisitos  | Cadena  |  |
| Código Convenios  | codigo_convenio  | Cadena  | Separado por Comas |

### Para Los Tipos que son Convenios

| Label | Código | Tipo | Valor |
| ------------- | ------------- |------------- |------------- |
| Activo  | activo  | Select  | 0,1  |
| Orden  | orden  | Número  | 0,1,2,3,..  |
| Mostrar Inicio  | mostrar_inicio  | Select  | 0,1 |
| Código Convenio  | codigo_convenio  | Cadena  |  |



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
