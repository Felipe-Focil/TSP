# Inicializar proyecto

Con el objetivo de incentivar el trabajo colaborativo y tener los documentos centralizados en un solo lugar, se utiliza la plataforma de GitHub.

A continuación se describirá acerca del uso de esta plataforma.

## Instalacion
Primero que nada tendrás que instalar [Git](https://git-scm.com/downloads) en tu computadora, para posteriormente abrir la terminal de Git (Git Bash).

Para verificar que Git esté funcionando correctamente ingresa el siguiente comando para ver la versión actual de Git.

    git --version

## Configuración de Usuario

Deberás configurar la información básica de tu usuario y tu editor de código predeterminado (Visual Studio Code)

(No es necesario que sea exactamente la misma información de tu usuario de Github).

    git config --global user.name "Inserta Tu Nombre"
    git config --global user.email "Inserta tu Correo"
    git config --global core.editor "code --wait"

Dependiendo de tu Sistema Operativo deberás ingresar el siguiente comando para establecer el estándar para el salto de línea a la hora de trabajar en el repositorio. Se trabajar con LF.

### Windows
    git config --global core.autocrlf true
### Linux / Mac
    git config --global core.autocrlf input

# Inicializar Repositorio

## Crear carpeta :file_folder:

Deberá crear una carpeta en cualquier locación que desees en tu computadora, sin embargo que sea fácilmente accesible; y empezaras a mover desde la terminal hacia la carpeta que hayas con el comando cd. Un ejemplo de esto seria:

    cd Universidad/Primavera2023/TSP

Si no recuerdas el nombre exacto de la carpeta o de los archivos que quieres acceder, puedes colocar el comando ls, para que estos se muestren en la terminal.

## Crear repositorio local 

Para crear el repositorio local, deberán usar el siguiente comando.

    git init

Para conectar tu repositorio local con el repositorio remoto de GitHub, deberás usar el siguiente de comando seguido de la liga del repositorio.

    git remote add origin https://github.com/Felipe-Focil/TSP.git

Finalmente usaras el comando pull para actualizar tu repositorio local con los cambios más recientes de cierta rama, en este caso, la rama principal.

    git pull origin main

# Uso de Git

Ahora ya podrás contribuir con el repositorio añadiendo, eliminando o modificando archivos, pero para esto hay que tomar algunas consideraciones.

# **Nunca trabajes en la rama principal**

No quieres por error modificar el trabajo de alguien más, así que deberás crear una rama por cada funcionalidad que agregues.

Para nombrar la ramas, serán por el nombre de la funcionalidad seguido de una diagonal y la fase de la funcionalidad.

Por ejemplo, imagina que quieres generar un problema que sea de sumar dos números A y B, pero cómo es demasiado trabajo para una sola persona o piensas que no puedes acabarlo de una sola vez, solo trabajaras en la especificación del problema.

Para movernos a una rama usaremos el comando checkout

    git checkout [Nombre de la rama]

En caso que la rama no exista en el repositorio remoto, crearemos la rama agregando como parámetro el comando *-b* seguido de la rama.

    git checkout -b A+B/Especificacion

## Añadiendo cambios :pencil:

Una vez estando en la subrama, podremos empezar todos los cambios que queramos, agregar, modificar o eliminar archivos en nuestro repositorio local, pero estos no se verán reflejados en el mismo hasta que explícitamente los añadamos.

Para ver cuál es el estado actual de nuestro repositorio, usaremos el comando status, en este caso, para saber cuáles archivos no han sido añadidos al repositorio.

    git status

Para añadir un archivo al repositorio se usará el comando add seguido del nombre del archivo.

    git add archivoEjemplo.txt

También puedes agregar todos los archivos que hayan sido añadidos o hayan recibido cambios colocando un punto en lugar del nombre del archivo. 

**Esto se considera una mala práctica, así que solo úsalo cuando esté completamente seguro que quieres agregar todos los archivos que hayas usado**

    git add .

## Comprometer cambios 💭

Una vez hayas realizado todos los cambios que consideres prudentes, te tienes que comprometer que estás de acuerdo con los cambios y que se va a guardar el estado actual de tu repositorio.

Esto se consigue mediante el comando commit seguido de un mensaje el cual explique los cambios realizados.

**💭Recuerda que este mensaje lo verán otras personas, así que intenta que este sea claro,corto y conciso acerca de los cambios que realizaste💭**

    git commit -m "Actualizar readme"

## Subir cambios :arrow_up_small:

Puedes hacer varios commits antes de decidir subir los cambios a la nube, **Recuerda trabajar en tu rama**, pero cuando creas prudente, usa el comando push para empujar el estado de tu repositorio local con el remoto, el cual tiene acceso las demas personas.

    git push

En caso de que la rama en la que estés trabajando no exista en el repositorio remoto, deberás especificar que esta rama es el origen de lo que quieres hacer push.

    git push -u origin A+B/Especificacion

## Pull Request :thumbsup:

Una vez subiendo tu intención de agregar tu estado de tu repositorio local a la nube, debes de realizar una intención para que los demas puedan jalar tus cambios a sus respectivos repositorios.

Es importante que estés constantemente actualizando tu repositorio local, en caso de que haya habidos cambios, en la rama que estés trabajando, así como en la rama principal.

Para actualizar la rama en la cual te encuentres ubicado en ese momento, basta con usar el comando
    
    git pull

En caso de querer actualizar una rama en concreto, se establecera que el origen deberá ser dicha rama.

    git pull origin main

Para esto en GitHub deberás ir a la pestaña de Pull Request (PR) y debera aparecer tu intención de hacer un push, deberar nombrar este PR bajo la siguiente notación [Funcionalidad] Fase; Puedes agregar una descripción detallada si consideras pertinente.

Ahora solo debes de esperar a que alguien más revise tu PR y corregir los cambios, en caso de ser necesarios. Una vez todo este en orden, se podra fusionar la rama con la rama principal.✅ 

# Comentarios Finales :raising_hand:

Git es una herramienta que se domina con la práctica, recuerda que siempre puedes buscar en internet o preguntarle a alguien en caso de que tengas dudas.