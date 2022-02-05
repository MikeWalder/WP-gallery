<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wptest' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3308' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1RJfKU%2gtr[}u]epKY=uBS``]EHxoC?*z@lQh1DdHJpNYf$Ah]4bs5sIc4Yn~~i' );
define( 'SECURE_AUTH_KEY',  ';FV%+H?eCf6SJYAiJNAd@u$VbpRAI18(1xc3pf}fRWZ*z<r2nXc%TRjhHAt/w8Jn' );
define( 'LOGGED_IN_KEY',    '5)D^=u$bJxz;p!^1NU%?p2Rn@2G7jp)[]#cL26{7n[|eFC<+2dRzBt9Z4]`Y:;lD' );
define( 'NONCE_KEY',        'F2$*^4F$|y{$^V8Hu!u[Rlw)ze(GgAD|;egU?f8DaSoeS;2Hyl^.-A}^^Rp?w!5a' );
define( 'AUTH_SALT',        'k4Y4R@XTZ}wI5Y+Tn eS+CkY/-iIMqEO@kUmB$h.{O-FFa~A<NVHRc_w;HZoO<Pj' );
define( 'SECURE_AUTH_SALT', '|[-]9g9Sm1RO61ybByE;Pl5VzgsG.Tv*@912f%>0u[4BM2lh(tHwMrRM:`8gq|&-' );
define( 'LOGGED_IN_SALT',   'yqb5ouK(j<{.(3lQm7_ NxB^!$k<ka#Snb{{dFS8tzYcCY&+F>|:B}DMqk;/%6:s' );
define( 'NONCE_SALT',       'M#Qbp:;hXFLZaUB|J7&66vtfDQNLm*114xZ*zFCv3.I$IY<tL/rCa,NVIxMeT@7?' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
