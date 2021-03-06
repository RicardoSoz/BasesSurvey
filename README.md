# Arquitectura de software MVC (Modelo, vista y controlador)
Es un patr贸n de arquitectura de software, se encarga de separar los datos y la l贸gica de negocio de
un software.

Para esto se utilizan tres componentes principales que son los Modelos, las Vistas y los
Controladores.
   
<p align="center"> 
    <img src="https://udemy-images.s3.amazonaws.com/redactor/raw/2017-09-26_04-11-36-6792e3e35f38e376cbf40cf0303af0d5.png">
</p>


## 馃搶 驴Porque utilizar esto?
  * Principalmente es una arquitectura dise帽ada por expertos.
  * La mayor铆a de las grandes plataformas la utiliza (con versiones mejoradas).
  * Permite el desarrollo 谩gil, modular, mantenible y escalable.
  * Facilita el trabajo en equipo.

## 馃搶 驴C贸mo funciona?
Este patr贸n se basa en las ideas de reutilizaci贸n de c贸digo, separaci贸n de conceptos. 
B谩sicamente
incluye algunos de los pilares de la programaci贸n orientada a objetos por ejemplo la abstracci贸n,
encapsulamiento, herencia y polimorfismo.
  
### 馃搷 Modelo
Es una representaci贸n de la l贸gica del software con la cual se administrar谩 todos los datos de un
software. 
``` 
    Toda la gesti贸n de accesos, permisos y manipulaci贸n de los datos se debe controlar
    desde los modelos. 
``` 
Adem谩s de ello se encarga de retornar informaci贸n a las vistas por medio de los controladores.

### 馃搷 Vista
El componente mas cercano al usuario final y no menos importante, este se encarga de presentar
la informaci贸n en una interfaz gr谩fica adecuada para presentarse como salida de informaci贸n.
No siempre requiere datos de los modelos puede ser vistas con informaci贸n est谩tica o din谩mica.

### 馃搷 Controlador
Es el intermediario entre la vista y el modelo, se encarga de recibir las peticiones de los usuarios
para gestionar el flujo del software retornando al cliente una respuesta.

```
    Pensemos que Google esta desarrollado con la arquitectura de software (MVC).
    Un usuario hace una petici贸n desde el navegador a la siguiente URL: "www.google.com"
```

Seg煤n esa petici贸n el controlador valida que hacer, luego retorna un respuesta que en este caso es
una simple vista sin informaci贸n de una base de datos, una vista est谩tica.

![Buscador de google](https://upload.wikimedia.org/wikipedia/commons/9/96/Google_web_search.png)

```
    Otro ejemplo podr铆a ser hacer una b煤squeda en Google, por ejemplo, busquemos 鈥淧HP鈥?.
    "https://www.google.com/search?q=PHP"
```
Con la arquitectura MVC el controlador recibe la petici贸n en este caso recibe un par谩metro 鈥渜鈥?
con el valor a consultar 鈥淧HP鈥?.
Ahora el controlador debe hacer una solicitud a la base de datos para ello debe interactuar con
alg煤n Modelo en este caso supongamos el modelo 鈥淕oogle鈥? que tiene unos m茅todos establecidos
para retornar informaci贸n, este retorna los datos al controlador luego el controlador retorna una
vista con la informaci贸n y esta ser谩 presentado por medio del navegador al usuario.


## 馃搶 Glosario de t茅rminos
* **Patr贸n:** Conjunto de elementos o reglas que son repetitivas en diferentes aspectos.
* **Arquitectura de software:** Son gu铆as generales con base a las cuales se pueden resolver los
problemas, por ejemplo, los planos de un edificio en construcci贸n; busca proporcionar un marco
definido de trabajo.

## 馃搶 驴C贸mo instalar este software de ejemplo? 
Hace unos a帽os hab铆a creado un CRUD que se encuentra en el este repositorio [PHP-CRUD-MVC-PDO](https://github.com/ofaaoficial/PHP-CRUD-MVC-PDO/) hay puede ver el paso a paso para instalar adem谩s un ejemplo m谩s b谩sico de esta arquitectura.

_Un concejo es que revise ese repositorio, adem谩s compare los cambio que le he hecho a la arquitectura y as铆 pueda comprender mejor, buenas practicas que he implementado._

## 馃搻 Trabajo final a aprendices

### Planteamiento del problema

Se encuentran problemas de comunicaci贸n en la comunidad que
integra el _Colegio Pepito P茅rez_ es de vital importancia, debido a que
se necesita que tanto los estudiantes, docentes, obreros y personal
administrativo conozcan la filosof铆a del Colegio y tambi茅n los procesos
que se est谩n llevando a cabo, que son de inter茅s para los que hacen
vida en el mismo.

**Debe desarrollar un sistema administrable** en el cual se podr谩n ver
todas las _publicaciones_, _noticias_ o _eventos_ importantes para el colegio.
Se debe hacer un buen an谩lisis de la informaci贸n ya que en el futuro
se requiere tener la _informaci贸n para reportes_.

* 驴Cuantas publicaciones se han realizado, quien las ha realizado?
* 驴En qu茅 rango de fechas se hicieron m谩s publicaciones?
* 驴Cu谩les son las publicaciones con m谩s vistas?

Adem谩s, el dise帽o a nivel visual debe contar con experiencia de
usuario, usabilidad y dise帽o atractivo para el p煤blico objetivo
incorporando buenas pr谩cticas de modelado y desarrollo del sistema.

Los usuarios se podr谩n registrar para opinar las publicaciones.
Entregables:
* Diagrama de clases.
* Diccionario de datos.
* Sistema desarrollado con la arquitectura MVC con programaci贸n orientada a objetos.

## 馃懆馃徎鈥嶐煉? Soluciones de aprendices
* https://github.com/JeniferTriana/CMS_JENIFERTRIANA_1821630
* https://github.com/royjuni/cms_royer_guerrero_1821630
* https://github.com/MarioSkate12/CMS_MarioBeltran_1821630_G3.git
* https://github.com/Jhounk/CMS_JohanCasallas-MarioBeltran
* https://github.com/Andres-talero/CRUD-CMS  
* https://github.com/yeimy1721/CMS_YeimyTorres_1821630-.git
* https://github.com/DaladierU16/CMD_Daladier_Uribe_1821630

## License 馃敟
Copyright 漏 2019-present [Oscar Amado](https://github.com/ofaaoficial) 馃
