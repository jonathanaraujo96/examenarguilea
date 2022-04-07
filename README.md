# examenPHP
examen Fonf

Para instalar esta app es necesario:

1.- Instalar Xampp y activar las opciones de "Apache" y "MySQL"
2.- Hacer git clon 
3.-Se anexa archivo .sql para crear base de datos en carpeta raiz se llama examenAGUILERA.sql

4.- la bd que te va a crear tiene los siguientes datos:
    **tabla  "menus" con las siguientes columnas:
        ->id int(11)    AUTO_INCREMENT	PK
		->id_fonda	varchar(10)	utf8mb4_general_ci index		
        ->nomPlatillo	varchar(250)	utf8mb4_general_ci		
	    ->descripcion	longtext	utf8mb4_general_ci		
	    ->ingredientes	longtext	utf8mb4_general_ci	
	    ->costo	varchar(250)	utf8mb4_general_ci
    
    ****tabla llamada "servicios" con las siguientes columnas:
        ->id int(11) AUTO_INCREMENT	PK
        ->nombreFonda	varchar(250)	utf8mb4_general_ci	
        ->calle	varchar(100)	utf8mb4_general_ci	
        ->numeroExterior	varchar(100)   utf8mb4_general_ci	
        ->numeroInterior	varchar(50)    utf8mb4_general_ci
        ->cp	varchar(50)	utf8mb4_general_ci	
        ->colonia	varchar(50)	utf8mb4_general_ci	
        ->municipio	varchar(50)	utf8mb4_general_ci	
        ->ciudad	varchar(50)	utf8mb4_general_ci
        ->estado	varchar(50)	utf8mb4_general_ci	
        ->pais	varchar(50)	utf8mb4_general_ci	

4.- Si tu usuario de Mysql no es "root" y tu password no es "", en el archivo de modelo.php en la carpeta de models coloca tu configuracion de usuario y password personalizada
5.-Ejecutar en el navegador localhost/examenPHP