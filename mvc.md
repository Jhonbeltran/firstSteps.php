# Arquitectura Modelo Vista Controlador

Comunicacion de objetos o grupos de ellos

Con esta Arquitectura se buscan separar responsabilidades:

* Modelo: Lógica del negocio (Modelo de dominio)
* Vista: Presentación visual. En nuestro caso usaremos un montor de 
templates que se encuentra fuera de larabel llamado: Illuminate/view
* Controlador: Coordina las acciones del usuario. El controlador 
coordina acciones, conoce al que pide y conocer al que lo hace, es un 
mediador entre la logica y la vista. Se asocia a uno o más pedidos HTTP, 
traduce el pedido HTTP en un mensaje de dominio y por ultimo arma la 
respuesta al pedido.
