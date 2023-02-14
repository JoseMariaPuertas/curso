<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
$config->set('dbhost', 'containers-us-west-72.railway.app:7332');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'DXBytBRQHYD8NwDbjetu');
?>
mysql://root:DXBytBRQHYD8NwDbjetu@containers-us-west-72.railway.app:7332/railway
mysql -hcontainers-us-west-72.railway.app -uroot -pDXBytBRQHYD8NwDbjetu --port 7332 --protocol=TCP railway