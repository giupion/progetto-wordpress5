<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_tre' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K;n?#[_hyGpI[H7Kb4C#c:eqhA)N[oU9V)p*zAnQ`+vES;l~,6?`+R)+g:aVt_1X' );
define( 'SECURE_AUTH_KEY',  'l/85--m^1((r&m!dG0s$Np}OoNimi(_px}b>!u$^O:qzjg;awaF|. ez&b(n5)sw' );
define( 'LOGGED_IN_KEY',    'XEaAp7K$Rqhl]t}GsKOY9~I#6+wb)T6[IB;*wvxsq;$f3%d$Mc_!Q>;Ig=vd!qZd' );
define( 'NONCE_KEY',        '+r2zXo%JN_?`/C_E7jQOCW8pvxe<Cn|7W.A(&2kCMP>m$rIc9UIJ9NbAti/^ZQ@=' );
define( 'AUTH_SALT',        'u# 9yoQnX4rzL<s9KWO]C~4eaO#VbwpC-7BURMr&{?@$mdiK~m-)9Xryg2aX;=fy' );
define( 'SECURE_AUTH_SALT', 'WsGG3/swjEpUC&:#:`(I+ZT~ASq.QlGl<wVjsI`}BX$&s?byo z)9Zq[hU*J&=;}' );
define( 'LOGGED_IN_SALT',   'k&1xt(s@#6iLLIFo1=(!TBU,k&9`9Z1UZ`ynzI-A@2/~^LswpiAi5Zg8XoOUsO!&' );
define( 'NONCE_SALT',       'U}]qqq9xx2?St(9@P2^Yg5mIg70!gVvC`KBRPR[m4ZSZiL)*;Dt3#:oe8?Y7deUW' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
