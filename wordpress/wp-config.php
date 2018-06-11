<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'zt}Ki^;LS:-#-u]}Ah%}rP;q6~UD8.TLI]<;SIB4NS%i-dvTf}Uzm% u$$x?}b;R');
define('SECURE_AUTH_KEY', '(~c)%]{5,.+ T>W_k3hw=Y;n45UJjuml8V].1E/tmA0jv*m>7;QbP 4=%HoAZ9v6');
define('LOGGED_IN_KEY', '-cWB7``zH`y=V,*D1RV pr21U-0={ZaS+&@2-[SuJf5nsNX3%/I:hdV?BU&jtEin');
define('NONCE_KEY', 'Wiecyf%h+0@f!Ei/,}k% %2cmT|jK+#qy)ku$NOSw&eLl<Vcd:5MB!F9,Gcj;*Pq');
define('AUTH_SALT', '/RQ;Gi[!pl~/W8*2g[z/lQ37EQBK-8D[sZ{1fKNl^3>iIyH*t,fn+U;fJfNx&]9&');
define('SECURE_AUTH_SALT', 'Dc[vG#%9=4Kv[*yed ~h>C^(VU`s;wO@sL+,gGWKzMz7yp;Xr>c7e*3cD(,t;k5w');
define('LOGGED_IN_SALT', '0 Y~?*J3Pr2v+&)RV6c;Ygxe4@U&hE#6|D2TKeV]JNRYkAEbWT{]p/*;x,l1*f],');
define('NONCE_SALT', '5E09nSbxT36fe5n3RZ zlfs@OuH/EagLn HJ8%Y,v@*d]5KOuRJ<RteTP<n>ql$4');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_lp';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

