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
define( 'DB_NAME', 'supmti' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '[6nBkAx#^#L7r#n*Fn#Ei5Bz{H?r5-^T*&RCcd/l0c%X/0;5$:4mt7=zxHh>K_wR' );
define( 'SECURE_AUTH_KEY',  '!+FXaynzCyxB@V{PdqEuw;Ymx=Nq_CqyKa>wj#8M2Ap8Yiot9C^FDR.P1J!WH;re' );
define( 'LOGGED_IN_KEY',    '$%)%OP4s<o_~17m@HHcMY %>m-Q tRB_O1e~Yk>KCZ8k$.{2:Si9TrmOMb|IRfT2' );
define( 'NONCE_KEY',        '<c0f(i)I79)ag8pbLP)0f*_Qt,WIR#ah#r~z.`L)(?P#q+TK~=+&>4~w&V~odhgb' );
define( 'AUTH_SALT',        '#vUxH@ w,j;r:YhTyO1xI7nZ-R!YaFJg3Avtqa@~>tx$k5(,~x`G1^`a*4Bf,(H.' );
define( 'SECURE_AUTH_SALT', ']90>pUc|U:Ok2. @KB?C1h-G;UVkq$d)@)~3w[_BkE]yW`%Hll/<OkA!FKcM9bB(' );
define( 'LOGGED_IN_SALT',   'Y$CK|}r8vY8ar3hA{qsN>L^npMIzP^)hbUzZ)lC}3,%Yug4Y4dXb/B*!~UNb 7d)' );
define( 'NONCE_SALT',       'z&VKn6r_*xqtg&Dswn#W?_|v{@*ROi&_;GQK$&kK:3/P4jMF]j#;t&G^YsM?N #x' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
