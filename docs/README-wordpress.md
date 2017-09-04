WordPress
=========


Terrific Module Helper
----------------------

Module können mittels PHP eingebunden werden. Die Syntax sieht wie folgt aus:

<?= module('example') ?>

Wie gewohnt können Skins, Template, Attribute etc. an die Modul Funktion übergeben werden. Speziell an dieser Terrific Module Implementation ist, dass es eine Controller Funktion gibt. Mit dieser Funktion können Daten für die Modul View bereitgestellt werden. 

Für Details, siehe die Kommentare in wp-theme/vendor/Nx/TerrificModule.php


Multilanguage
-------------

## Select Language

Since WordPress 4.1  there is a dropdown to select the language of the website in the WP Admin General settings. More WordPress translation files can be found here: http://i18n.svn.wordpress.org

## Translation Management

To translate the Theme, use PO Edit (see wp-theme/languages/info.md) or a Translation Plugin like Loco Translate (Favorite Plugin).

### PO Edit

* Open *.po files in Poedit (>=1.5.4): http://www.poedit.net

* Add  *.php and *.phtml to your parser:
  [PoEdit] > Preferences > Parsers --> PHP > [Edit]

  - List of extensions...:
    *.php;*.phtml

  - Check Parser command:
    xgettext --language=PHP --force-po -o %o %C %K %F

### Loco Translate

Translate the Theme Strings via WP Admin. Add the translation files in wp-theme/languages to .gitignore. 

 
## German URL Sanitizing

WordPress uses an internal URL function which rewrites German Umlauts like ö to oe.
This only works when WPLANG is set to de_DE, and not if it is set so something else like de_CH.

In wp-config.php:

	define ('WPLANG', 'de_DE');

In wp-content/languages:

	wp-content/languages/de_DE.mo
	wp-content/languages/de_DE.po

## In your Theme

<?= sprintf('<span class="author-link">%1$s</span>', __('Go to the authors page', 'nxtheme')); ?>