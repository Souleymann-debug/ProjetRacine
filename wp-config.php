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
define( 'DB_NAME', 'Projet_racine' );

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
define( 'AUTH_KEY',         'VFwepi,Yn5P`JdD2Kt&<|uUIEXR|$&!m,}In^w<CyW7ZRm&~39fDpPr[mlIj/i87' );
define( 'SECURE_AUTH_KEY',  'r.]GooI<85,kp.comgH)m-(Z$wUY`hkEiyzQ>qFKRx~H?X(jD8=x7qMvbPt|:9V)' );
define( 'LOGGED_IN_KEY',    '!eaKlBzKsR(iGj8pFd5LKjubgK8p7Bw+Yt&{)_L0=t|Y>1^X+&?qytTXIcp(mCPG' );
define( 'NONCE_KEY',        'hCoNf7+_{F@v/z~>O~,KLOW=TdfE RkwCNl+&]TfP!q^e1vA?Y5oH:`;PZ+)!r1#' );
define( 'AUTH_SALT',        '9#Y.bT:J 3#>LgU M:QJRd-).l<5`Q-A(Zkn9`99o8Ml9g{a5]WO]83t8|L!! K_' );
define( 'SECURE_AUTH_SALT', 'yLTSbCml`)K3q`9OIN/w:`c$AgPO5*O)+U]H):)xz]e~(4I<-)[ J2zS8-}(>G= ' );
define( 'LOGGED_IN_SALT',   'tO@JAGf)uo+;HPM[nDRj!dw1{$eT*W3O;<fcf3DrGSY<g8ay>cP)~E&@gjuj-T7E' );
define( 'NONCE_SALT',       '<Oj{`BrdB;F]M7|}u+*Z5?=fip0R)Q`oI~()sD:A/I.SRCo#waj)/v<K4H#31pq9' );
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
