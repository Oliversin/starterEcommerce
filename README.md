# Desarrollo de un proyecto inicial de un ecommerce con Laravel

El objetivo de este proyecto es la creación de un proyecto inicial de ecommerce utilizando Laravel, en un inicio se estructuro MVC, pero despues se adapto para Livewire

Para ejecutar este proyecto:
	1- git clone https://github.com/Oliversin/starterEcommerce.git
	2- ejecuta composer update para las dependencias
	3- genera un .env haciendo una copia: 
		cp .env.example .env
		php artisan key:generate
	4- actuliza la llave: php artisan key:generate
	5- asumiendo que se use sqlite: php artisan migrate --seed. Dara un prompt para la creacion de la BD
	6- registrar un usuario via navbar, se muestran ejemplos: https://prnt.sc/zDoRYBpDNpf2, https://prnt.sc/6V0J1gdyebB9 
	7- para agregar un producto al carrito se da click en 'Add to cart' https://prnt.sc/_YTd-KWH5EPY
	8- para aumentar, decrementar y eliminar del carrito se usan los botones

Para correr las pruebas basta con correr el comando php artisan test

Nota: este es un proyecto inicial.