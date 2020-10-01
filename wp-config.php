<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

//Begin Really Simple SSL Load balancing fix
#$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "https", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"https", "HTTP_X_FORWARDED_SSL"=>"on", "HTTP_X_PROTO"=>"SSL", "HTTP_X_FORWARDED_SSL"=>"1");
#foreach( $server_opts as $option => $value ) {
# if ((isset($_ENV["HTTPS"]) && ( "on" == $_ENV["HTTPS"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
#  $_SERVER[ "HTTPS" ] = "on";
#  break;
# }
#}
//END Really Simple SSL 



// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'e3m');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');
/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n2]<PNh Q5bY^]L-wMKa ]x-Qx{T+@a f+L.7Pi#S8/22(di1rSO3DuY4l+LrS !');
define('SECURE_AUTH_KEY',  'P!zI+[T QIP>SFD(,iGm5!;96:%$EVrU5P#;cw/^J@C3qS_d^JyAjS/r2GX6hPfB');
define('LOGGED_IN_KEY',    '!8)njgh](~`>{ZaYqEqAW!{pia^e#(YH?ePEn0Dfb^Z<M-9=eQxBBbIRv#t_pXL7');
define('NONCE_KEY',        '_D)O%%:|n(goZH`B+BW23OWxr}^z ^_mVp]it&*Cu3S&P$z|_,!GbR9FR-x(Zt/ ');
define('AUTH_SALT',        'jV?I[q5IMcHeO3pec/hG+,l!`Oiy&>A=q#a3sOS/r+7xJ%/5`Jt?|hY7;(8)i1la');
define('SECURE_AUTH_SALT', '*#PM|6f0jX2lwcAIneJDm%Yakh4GIcig$yj*$N|.f#]DKjnEi-K,%&2Gxi2N+4Z]');
define('LOGGED_IN_SALT',   'y+6&vW=QT@c-|WFa!qKsh&/[!_kMf#g)Lr0!LUk`q2l7s=Ue nVCJALN!.[ad+XJ');
define('NONCE_SALT',       'Gu9tuDZ@M[nM)`p=q$Gp{.P}jn7CWLh98;+[@K&,e.<nf:D >i7tnK{2G@>H0f6{');
/**#@-*/
    
define('ALLOW_UNFILTERED_UPLOADS', true);
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';
/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define( 'WP_DEBUG_LOG', true);
define('WP_MEMORY_LIMIT', '256M');
/* C’est tout, ne touchez pas à ce qui suit ! */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');