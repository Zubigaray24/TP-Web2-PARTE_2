ENDPOINTS PARA LOS JUEGOS:

GET api/juegos ; Devuelve todos los juegos

GET api/juegos?sort=nombre&order=desc ; Devuelve todos los juegos ordenados alfabeticamente descendentemente

GET api/juegos?sort=nombre&order=asc ; Devuelve todos los juegos ordenados alfabeticamente ascendentemente

POST api/juegos ; Crea un juego nuevo

GET api/juegos/:ID ; Devuelve un juego segun su ID, por ejemplo api/juegos/1

PUT api/juegos/:ID ; Edita el juego, por ejemplo api/juegos/1

DELETE api/juegos/:ID ; Elimina un juego segun su ID, por ejemplo api/juegos/1

ENDPOINTS PARA LOS GENEROS:

GET api/generos ; Devuelve todos los generos

GET api/generos?sort=nombre&order=desc ; Devuelve todos los generos ordenados alfabeticamente descendentemente

GET api/generos?sort=nombre&order=asc ; Devuelve todos los generos ordenados alfabeticamente ascendentemente

POST api/generos ; Crea un genero nuevo

GET api/generos/:ID ; Devuelve un genero segun su ID, por ejemplo api/generos/1

DELETE api/generos/:ID ; Elimina un genero segun su ID, por ejemplo api/generos/1