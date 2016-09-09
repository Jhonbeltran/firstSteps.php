# Colecciones

Es un objeto que va a contener otros objetos (por lo genieral del mismo
tipo) 

Una colección nos permite:

- Buscar entre la colección
- Agregar y quitar de la colección
- Filtrar la colección
- etc.

Laravel trae una coleccion que se descarga cuando instalamos composer,
el cual requiere de illuminate.

## Conceptos:

* Dependencia: Puede significar que requerimos este elemento en el 
constructor

creamos la coleccion como:

use Illuminate\Suport
new Collection([]) 


en las colecciones encontramos muchos metodos para manejar lo que queremos
hacer con el grupo de objetos, podemos promediarlos, ordenarlos, obtenerlos
todos o una parte de ellos, saber si la colección contiene algun objeto en 
especifico entre otras varias cosas.

si deseamos podríamos usar una colleccion para modelar un acceso a base de
datos.