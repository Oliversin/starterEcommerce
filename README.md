# Desarrollo de un proyecto inicial de un ecommerce con Laravel

El objetivo de este proyecto es la creación de un proyecto inicial de ecommerce utilizando Laravel, en un inicio se estructuró MVC, pero después se adaptó para Livewire

## Para ejecutar este proyecto:
	
	1. ** git clone https://github.com/Oliversin/starterEcommerce.git ** 
	2. ** - Ejecuta composer update para las dependencias ** 
	3. ** - Genera un .env haciendo una copia:  ** 
		cp .env.example .env 
		php artisan key:generate
	4. ** - Actualizá la llave: php artisan key:generate  ** 
	5. ** - Asumiendo que se use sqlite: php artisan migrate --seed. Dara un prompt para la creación de la BD ** 
	6. ** - registrar un usuario vía navbar, se muestran ejemplos: https://prnt.sc/zDoRYBpDNpf2, https://prnt.sc/6V0J1gdyebB9  ** 
	7. ** - para agregar un producto al carrito se da click en 'Add to cart' https://prnt.sc/_YTd-KWH5EPY ** 
	8. ** - para aumentar, decrementar y eliminar del carrito se usan los botones  ** 

Para correr las pruebas basta con correr el comando php artisan test

_Nota: **este es un proyecto inicial._ 