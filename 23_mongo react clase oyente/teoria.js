/*
clase oyente MongoDb pdf 20 Mongo

BD no sql. NO hacemos querys sql para pedir info.
Es utilizada con node, express
Optimizada para guardar volumen de info

Colecciones: parecido a tablas de MySQL
Los registros, son documentos.

Facilmente escalable. 
En MySQL teniamos que armar las tablas de antemano.
En MongoDB, a este JSON, guardalo en esta coleccion (tabla), no tengo que armar previamente.
Voy a tener diferentes "cajas"

En la misma cajita de papeles, puedo tener facturas, contratos, ... etc. 
Es como una carpeta Documentos de Windows (puedo poner imagenes, .doc, excel, etc)

ejemplo:

id
nombre 
apellido

id
nambre
apellido

En ambos ambas estructuras, mongo los va agregar y no va saltar error.
Si en el dia de mañana. tengo que agregar email, los puedo agregar sin problemas-

id
nombre 
apellido
email

En sql, cuando en un campo no habia datos, poniamos NULL. Pero en Mongo, el
campo puede no existir.

La PK, la asigan automaticamente el motor de base de datos. _id


Instalacion

npm install --save moongoose

IMPORTANTE
EN CASO DE NO PODER INICIAR EL MONGO
Crear una carpeta en la raiz de C una carpeta llamada data/db

Vamos al postman
y pasamos datos como json (en caso de Post)






*/