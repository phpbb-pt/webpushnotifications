<?php
/**
 *
 * phpBB Browser Push Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'ACP_WEBPUSH_EXT_SETTINGS'			=> 'Web Push configurações',
	'ACP_WEBPUSH_PWA_SETTINGS'			=> 'PWA configurações',
	'ACP_WEBPUSH_REMOVE_WARNING'		=> 'Web Push estão agora integradas no phpBB.',
	'ACP_WEBPUSH_REMOVE_NOTICE'			=> 'A extensão “phpBB Browser Web Push” já não é necessária e deve ser desinstalada e removida.<br>Todas as definições e preferências do utilizador associadas à extensão serão migradas para as notificações push integradas do phpBB quando desinstalar a extensão.',
	'LOG_CONFIG_WEBPUSH'				=> '<strong>Definições alteradas da Web Push</strong>',
	'LOG_WEBPUSH_MESSAGE_FAIL'			=> '<strong>Não foi possível enviar a mensagem Web Push.:</strong><br>» %s',
	'LOG_WEBPUSH_SUBSCRIPTION_REMOVED'	=> '<strong>Subscrição de push da Web removida.:</strong><br>» %s',
	'LOG_WEBPUSH_ICON_DIR_FAIL'			=> '<strong>As notificações Webpush não conseguiram migrar o seguinte item no diretório de imagens do phpBB.:</strong><br>» %1$s » %2$s',
	'LOG_WEBPUSH_ICON_DIR_SUCCESS'		=> '<strong>As notificações Webpush adicionaram o seguinte diretório:</strong><br>» <samp>%s</samp>',
	'LOG_WEBPUSH_ICON_COPY_SUCCESS'		=> '<strong>As notificações Webpush copiaram os ícones de toque PWA existentes para:</strong><br>» <samp>%s</samp>',
]);
