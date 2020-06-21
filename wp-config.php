<?php
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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_ttf');

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'lioneldev');

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'GooD4ttf_!4');

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql:3306');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8');

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
define( 'AUTH_KEY',         'Yd14>8%Re[1c]fr9qkhd7/KcQr3;CB#n%mO5clO>O#O!VqKK!aJ%.Q-P4!Ky;)Qi' );
define( 'SECURE_AUTH_KEY',  'Ks-K^kc5*T_c]XQq/5=^?2ZgEs^-:in8**BmO<+>k,cRZ06k?j!5x</~YukJ}qOf' );
define( 'LOGGED_IN_KEY',    '6j^ef3D`y@?-lIc&u4Q7nzA)AGg<W=BA:[.e(Rw3eC#C)7=0u5oQ$=5Gm0[CrR~J' );
define( 'NONCE_KEY',        '3 LSiUCk>Gb*B5ldDd&M[j.Dh7~jXG=Z~3!$^8Jz?$^fCQ_qn?lOb)-|E4p;kT!b' );
define( 'AUTH_SALT',        ' mf8}BmtsG<6FG~i]{J)?2`ixqfFs6]>p/#wT,:t1%1P*v?3o`PKhAa]UnOlKi~+' );
define( 'SECURE_AUTH_SALT', 'Y;Dg6:3M#e*f/-6Z*s>X(:>a<IIZQ},YofIw(@7z4{w~HmN[AIGaVVEG*.p_4Em3' );
define( 'LOGGED_IN_SALT',   ' %h|><*nkn3$UwF=8GN/zKK>M>p I3/MTT)$bn[U}BdjPqtaM@RJ:Fspt|S1nsl#' );
define( 'NONCE_SALT',       'WF:[B292HA RF5C?B^z/}-v$CZpT2%}{aj$pX#GC7{z&M4I=H#]WJ%yl8J-46{07' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
