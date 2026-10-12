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
	'NOTIFICATION_METHOD_PHPBB_WPN_WEBPUSH'	=> 'Web Push',
	'NOTIFY_WEBPUSH_NOTIFICATIONS'	=> 'Notificações push da web',
	'NOTIFY_WEBPUSH_DISABLE'		=> 'Desativar notificações push',
	'NOTIFY_WEBPUSH_ENABLE'			=> 'Ativar notificações push',
	'NOTIFY_WEBPUSH_ENABLE_SLIDER'	=> 'Ativar notificações push',
	'NOTIFY_WEBPUSH_ENABLE_EXPLAIN'	=> 'Ativar as notificações push irá habilitá-las apenas neste dispositivo. Você pode desativar as notificações a qualquer momento nas configurações do seu navegador ou clicando no botão acima. Além disso, se nenhum tipo de notificação web push for selecionado abaixo, você não receberá nenhuma notificação desse tipo.',
	'NOTIFY_WEBPUSH_SUBSCRIBE'		=> 'Permitir a assinatura',
	'NOTIFY_WEBPUSH_UNSUBSCRIBE'	=> 'Desative para cancelar a inscrição',
	'NOTIFY_WEBPUSH_DROPDOWN_TITLE'	=> 'Visite as configurações de notificações para definir suas notificações push preferidas.',
	'NOTIFY_WEBPUSH_DENIED'			=> 'Você recusou as notificações deste site. Para ativar as notificações push, permita as notificações deste site nas configurações do seu navegador.',
	'NOTIFY_WEBPUSH_NOT_SUPPORTED'	=> 'Notificações push não suportadas',
	'NOTIFY_WEBPUSH_POPUP_TITLE'	=> 'Permitir notificações do navegador',
	'NOTIFY_WEBPUSH_POPUP_MESSAGE'	=> 'Gostaríamos de enviar notificações do navegador sobre respostas, mensagens privadas e atividades relevantes no fórum. Opcional — você pode gerenciar essas configurações a qualquer momento.',
	'NOTIFY_WEBPUSH_POPUP_ALLOW'	=> 'Permitir',
	'NOTIFY_WEBPUSH_POPUP_DENY'		=> 'Negar',
	'NOTIFY_WEBPUSH_POPUP_DISABLE'	=> 'Pop-ups de lembrete de notificação',
	'NOTIFY_WEBPUSH_POPUP_DISABLE_EXPLAIN'	=> 'Mostramos um lembrete solicitando que você permita notificações do navegador quando elas não estiverem ativadas no momento ou quando não conseguirmos detectá-las. Desative esta opção para interromper permanentemente esses pop-ups de lembrete em todos os seus dispositivos. Se você desligar esta opção, você não será avisado se as notificações do seu navegador pararem de funcionar no futuro.',
	'NOTIFY_WEBPUSH_POPUP_ENABLER'	=> 'Ativar lembretes',
	'NOTIFY_WEBPUSH_POPUP_DISABLER'	=> 'Desativar lembretes',
]);
