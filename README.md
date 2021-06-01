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

| Label | Código | Tipo | Valor | Requerido | Default |  Instrucciones | 
| ------------- | ------------- |------------- |------------- |------------- | ------------- | -------------------------- |
| Mostrar  | mostrar  | True/False  |   | NO | True | Indica si este ítem se muestra o no en la página |
| Orden  | orden  | Número  | 0,1,2,3,..  | SI | 1 | Este dato permite ordenar en la página el 1 siempre se muestra primero |
| Icono  | icono  | Cadena  | fa-desktop,fa-camera-retro | SI |  fa-desktop | Debe ingresar el nombre del icono y lo puede encontrar en el siguiente link https://fontawesome.com/v4.7/icons/ |
| Sección Id  | id_seccion  | Combo  | Revizar Sección Ids | SI |   | Indica a que sección se mueve la página cuando haga clic |
| Indicaciones  |   | Message  | En caso que el ítem necesite una imagen la puede cargar desde el botón "Imagen Destacada" cuyas dimensiones son 432px x 432px |  |   |  |

> El nombre de los iconos los peude encontrar ene l siguiente link [FontAsome 4.7.0](https://fontawesome.com/v4.7.0/icons/)


### Para Los Tipos que son Cursos, Carreras entre otros

| Label | Código | Tipo | Valor | Requerido | Default |  Instrucciones | 
| ------------- | ------------- |------------- |------------- |------------- | ------------- | -------------------------- |
| Mostrar  | mostrar  |  Boolean | True/False | NO | True | Indica si este ítem se muestra o no en la página |
| Orden  | orden  | Número  | 0,1,2,3,..  | SI | 1 | Este dato permite ordenar en la página el 1 siempre se muestra primero |
| Mostrar Inicio  | True/False  | True/False  | 0,1 | NO | True | Indica si este ítem se muestra o no en el banner de la página |
| Tipo Duración  | tipo_duracion  | Select  | horas,días,semanas,meses,años |  SI | días | Indica la forma de duración del curso |
| Duración  | duracion  | Número  | minimo 1 |  SI | 1 | Indica el tiempo que durara el curso |
| Modalidad  | modalidad  | Select  | Presencial, Distancia, Virtual |  SI | Virtual | Indica la modalidad del curso |
| Titulo  | titulo  | Cadena  |  |  SI | | Indica el título a obtener al finalizar el curso |
| Campo Ocupacional  | ambito_ocupacional  | Cadena  |  |  NO | | Indica en campo ocupacional al finalizar el curso |
| Perfil Egresado  | perfil_egresado  | WysingEditor  |  |  NO | | Indica que perfil de ingresado al terminar el curso |
| Requisitos  | requisitos  | Cadena  |  |  SI | | Indica los requisitos del estudiante para ingresar |
| Código Convenios  | codigo_convenio  | Cadena  | Separado por Comas |  NO | | Ingresa el código de los convenios |

### Para Los Tipos que son Convenios

| Label | Código | Tipo | Valor | Requerido | Default |  Instrucciones | 
| ------------- | ------------- |------------- |------------- |------------- |------------- |-------------------------- |
| Mostrar  | mostrar  |  Boolean | True/False  |  NO |  |  Indica si este ítem se muestra o no en la página |
| Orden  | orden  | Número  | 0,1,2,3,..  |  SI | 1 | Este dato permite ordenar en la página el 1 siempre se muestra primero |
| Mostrar Inicio  | True/False  | True/False  | 0,1 | NO | True | Indica si este ítem se muestra o no en el banner de la página |
| Código Convenio  | codigo_convenio  | Cadena  |  | NO | CON01, |  Código del Curso que debe ser único |


```sh
Paso 4. Crear Registros en cada uno de las entidades con los nuevos metadas
```

```sh
Paso 5. Crear el menu con las secciones activas de la plantillas, la referencia o el id de las secciones son las siguientes
```
- Inicio -> "inicio"
- Sección Cursos -> "curso"
- Sección Talleres -> "taller"
- Sección Pretgrados -> "pregrado"
- Sección Postgrados -> "postgrado"
- Sección Maestrias -> "maestria"
- Sección Doctorados -> "doctorado"
- Sección Diplomados -> "diplomado"
- Sección Convenios -> "convenio"

- Ninguno -> "#"
- Contactos -> "contactanos"
- Equipo -> "equipo"
- Testimonios -> "testimonios"
- Acerca de Nosotros -> "acercanosotros"
- Blogs -> "blogs"
- Caracteristicas -> "caracteristicas"
- Servicios -> "servicios"


```sh
Paso 6. Debemos crear una pagina y en la opción "Ajustes de portada" de la plantilla seleccionamos pagina estatica y en "Página de inicio" selecioanmos la pagina creada
```
```sh
Paso 7. Con el plugin "Contact Form 7" creamso el formulario apra envio de sugerencias
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

## Links de Interes
- https://wpmailsmtp.com/contact-form-7-not-sending-emails/
- https://www.smarterasp.net/support/kb/a341/how-to-configure-smtp-authentication-in-wordpress-site-to-send-emails.aspx
