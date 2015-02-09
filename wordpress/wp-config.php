<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~J1bT|u04kf+-07VeX7U<d`^r|0G&?i!N}9]L-Irl}T:g6$pR&8iD%Ys~h5Q3a^)');
define('SECURE_AUTH_KEY',  '_h#z(D!P8wwXr7T#SSXqnI.L2hE-/a%.]9k*DA2Ul]8PwY:{*b#i/?-M)+0|Q#P ');
define('LOGGED_IN_KEY',    'o@OKp0-Dk1Xb=PB%i+s*s|bR2@8_;vq+YNK+K!;>l|mdguRZ!ts-H7tH9mV@SGW)');
define('NONCE_KEY',        'r{Fz6| y/kieY*KR,0*i^y?|}5+[Bf>r4w`&il{*tjcAf)+`UIugkC?1O7Wzf{h{');
define('AUTH_SALT',        '~4kM*x2hOYAI)w=w)a6+.Uk_2D/I5u#3dWAA8`@8Z[pSaUQ]Rydhz;QS-@jBz*+#');
define('SECURE_AUTH_SALT', 'lLQa;(fWF#<.Um^1vQHdN%OE?dacI<Oxp<X%4CALQ$+&:CR@%Om7Vm?7PX]&15$K');
define('LOGGED_IN_SALT',   '.~fx]DK@c4};#:Wj#cP;]<F<tRQl4{S uZDd`%5m6P{apyT<*.s-;`i_a Q%%OV%');
define('NONCE_SALT',       '4xTv<E|R7_eG,S^AH7P(W.ya.%,Y+t_%5stfQb8n|tJ/)y6}z`|KeTp7A5Qk]Su/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');