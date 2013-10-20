#Documentacion de la Practica1#
=================================

## ¿Que aplicacion se ha realizado? ##

Se ha realizado una aplicación sencilla que calcula el IVA de un producto. Se introduce el precio del producto sin IVA y el porcentaje de IVA que se le aplica y devuelve el precio final con el IVA incluido.

La aplicación se ha realizado en HTML y Javascript.
Una vez realizada la aplicación la desplegamos de un PaaS


## OpenShift ##

El PaaS usado para la realización de esta práctica es OpenShift. He elegido OpenShift porque ya me había familiarizado un poco con el haciendo el ejercicio 14.

Lo primero de todo creamos una aplicación PHP 5.3 porque pese a estar la aplicación hecha en HTML y javascrip era la opcion que mas se amoldaba a la aplicacion que he realizado.

En configurar una aplicación seleccionamos una URL pública y la creamos.

Despues de crearla lo descargamos en nuestro pc. Para ello antes tenemos que crear la clave RSA para poder usar el GIT. Una vez hecho nos saldrá un ssh para poder hacer git.

Hacemos Git de la siguiente forma:

 <pre> git clone ssh://526423f05004461c9c000107@practica1-juandavarju.rhcloud.com/~/git/practica1.git/ </pre>
 

Después vamos a la carpeta clonada y realizamos los cambios. En mi caso ha sido cambiar el index.php por el de mi aplicación.
Una vez modificados tenemos que actualizar la aplicacion en OpenShift.
Lo hacemos de la siguiente forma:

<pre>git add .
git commit -m 'Cambios que he realizado'
git push
</pre>

y listo, ya está la aplicacion funcionando.

## Aplicacion ##

Se puede ver la aplicación realizada aquí: http://practica1-juandavarju.rhcloud.com/
