<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// Include Credentials (don't store them in VCS)
require __dir__ . '/wp-credentials.php';


/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '._=ZgQA/TP/{e,Z^ UW*0><]_S`QpgKI?TF0Q^pVLv@_@6-L~vpc||iVq#a#[Erl');
define('SECURE_AUTH_KEY',  ':vob}(%RNj%_jNmQYeJ5SCOSUo_Fx<U[yITs$d^A6jv&PsVL1Umlt.xP`.h|<$(X');
define('LOGGED_IN_KEY',    'A}{dm-@Zz>9VaaWzO=5bcTX^GXzocl>}&<RT?w+XLfgX|s#6>aNSL]b>f~^!d(Jk');
define('NONCE_KEY',        'A((9wBG3vA6~$q|_Ns~U76$F~V+8I`RVI{KZ#v=rde CJ?Mb6lS`TJx<%6GB(B&d');
define('AUTH_SALT',        'S94IgS_iH4`KD3YUzt^^?|T):}Z[<|?l+}VGe_08EP0o]YqW%{: >+CeQ@E!wuj-');
define('SECURE_AUTH_SALT', '>@s*L|g(B|WF1ly]3}}gTay9M*91`UQ/( 498QQB 8`^{i^yv4Z#Jrv{Id15v(IC');
define('LOGGED_IN_SALT',   '~p8b?u]+~kJl4oR7Q)Cp?6(f3;H1!Br8BBD;hKf<8orZ~O9K-/V%aB_bKAd6$A4k');
define('NONCE_SALT',       'ObqfS-x|`)sa[;WC!p Yk3xYz:X[GJ!gB,Kx1<;!u?E%ESuDTxdZfq%~9tw(Bxy1');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
