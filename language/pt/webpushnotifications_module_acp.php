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
	// Web push settings
	'ACP_WEBPUSH_SETTINGS_EXPLAIN'	=> 'Aqui pode ativar o Web Push para notificações do fórum. O Web Push é um protocolo para o envio de eventos em tempo real para agentes de utilizador, normalmente designados por mensagens push. É compatível com a maioria dos browsers modernos, tanto em computadores como em dispositivos móveis. Os utilizadores podem optar por receber alertas Web Push nos seus browsers, subscrevendo e ativando as notificações da sua preferência no Painel de Controlo do Utilizador (UCP). <br><br>Para suportar as notificações push nos dispositivos móveis da Apple, o seu website deve funcionar como uma Aplicação Web Progressiva (PWA). A Apple exige que os utilizadores adicionem o site ao ecrã inicial dos seus dispositivos antes que as notificações push possam ser ativadas. Configure a aparência da aplicação em <strong>Definições de PWA</strong>.',
	'WEBPUSH_ENABLE'				=> 'Ativar notificações web',
	'WEBPUSH_ENABLE_EXPLAIN'		=> 'Permita que os utilizadores recebam notificações nos seus browsers ou dispositivos via Web Push. Para utilizar o Web Push, deve introduzir ou gerar chaves de identificação VAPID válidas..',
	'WEBPUSH_GENERATE_VAPID_KEYS'	=> 'Gerar chaves de identificação',
	'WEBPUSH_VAPID_PUBLIC'			=> 'Chave pública de identificação do servidor',
	'WEBPUSH_VAPID_PUBLIC_EXPLAIN'	=> 'A chave pública de identificação voluntária do servidor de aplicações (VAPID) é partilhada para autenticar as mensagens push do seu website. <br><em><strong>Atenção:</strong> a modificação da chave pública VAPID tornará automaticamente inválidas todas as subscrições do Web Push.</em>',
	'WEBPUSH_VAPID_PRIVATE'			=> 'Chave privada de identificação do servidor',
	'WEBPUSH_VAPID_PRIVATE_EXPLAIN'	=> 'A chave privada de identificação voluntária do servidor de aplicações (VAPID) é utilizada para gerar mensagens push autenticadas enviadas a partir do seu website. A chave privada VAPID <strong>deve</strong> formar um par de chaves pública-privada válido juntamente com a chave pública VAPID. <br><em><strong>Atenção:</strong> a modificação da chave privada VAPID tornará automaticamente inválidas todas as assinaturas Web Push.</em>',
	'WEBPUSH_METHOD_ENABLED'		=> 'Ative as notificações push da Web baseadas no utilizador por predefinição.',
	'WEBPUSH_METHOD_ENABLED_EXPLAIN'=> 'Quando esta definição estiver ativada, os utilizadores que também tiverem ativado e permitido as notificações do browser começarão a recebê-las automaticamente. Podem aceder às definições de Notificações do UCP para desativar quaisquer notificações indesejadas. <br><br>Se esta definição estiver desativada, os utilizadores não receberão qualquer notificação, mesmo que tenham ativado as notificações push, até acederem às definições de Notificações do UCP para permitir as notificações específicas que desejam receber.',
	'WEBPUSH_DROPDOWN_SUBSCRIBE'	=> 'Exibir as definições de notificações push na lista suspensa de notificações.',
	'WEBPUSH_DROPDOWN_SUBSCRIBE_EXPLAIN'=> 'Mostrar ou ocultar o botão de alternância “Ativar Web Push” no menu suspenso de notificações. Isto permite que os utilizadores ativem ou desativem facilmente as notificações push em qualquer página do fórum.',
	'WEBPUSH_POPUP_PROMPT'			=> 'Exibir aviso pop-up para membros que cancelaram a subscrição',
	'WEBPUSH_POPUP_PROMPT_EXPLAIN'	=> 'Apresente uma mensagem pop-up a perguntar aos membros registados se desejam receber notificações push. O pop-up só aparecerá para os membros que não estão inscritos no momento e não negaram anteriormente.',
	'WEBPUSH_INSECURE_SERVER_ERROR' => 'Esta placa não está a utilizar um protocolo SSL/HTTPS seguro, necessário para ativar as notificações push na web. Em alternativa, o ambiente do servidor pode estar configurado incorretamente. Certifique-se de que as variáveis ​​de ambiente do servidor <em>HTTPS</em> e <em>HEADER_CLIENT_PROTO</em> estão configuradas corretamente.',

	// PWA Settings
	'ACP_PWA_SETTINGS_EXPLAIN'	=> 'Os Progressive Web Apps (PWAs) permitem que os usuários instalem seu fórum no dispositivo móvel e o utilizem como um aplicativo. Estas configurações controlam o nome do aplicativo, os ícones, as cores e os avisos de instalação exibidos aos usuários.',
	'PWA_SHORT_NAME'			=> 'Nome curto do site',
	'PWA_SHORT_NAME_EXPLAIN'	=> 'O nome do seu site em 12 caracteres ou menos, que pode ser usado como rótulo para um ícone na tela inicial de um dispositivo móvel. (Se este campo for deixado em branco, serão usados ​​os primeiros 12 caracteres do <samp>Nome do site</samp>.)',
	'PWA_SHORT_NAME_INVALID'	=> '“Nome abreviado do site” excede o limite de 12 caracteres.',
	'PWA_ICON_SMALL'			=> 'Ícone pequeno de dispositivo móvel',
	'PWA_ICON_SMALL_EXPLAIN'	=> 'Nome do arquivo de uma imagem PNG de 192px x 192px. Este arquivo deve ser enviado para o diretório <samp>%s</samp> do seu fórum.',
	'PWA_ICON_LARGE'			=> 'Ícone grande de dispositivo móvel',
	'PWA_ICON_LARGE_EXPLAIN'	=> 'Nome de arquivo de uma imagem PNG de 512px x 512px. Este arquivo deve ser enviado para o diretório <samp>%s</samp> do seu fórum.',
	'PWA_ICON_SIZE_INVALID'		=> '“%s” não tem as dimensões de imagem corretas.',
	'PWA_ICON_MIME_INVALID'		=> '“%s” deve ser um arquivo de imagem PNG.',
	'PWA_ICON_INVALID'			=> '“%s” não é um arquivo de imagem válido ou não está no local esperado. Verifique se o nome e o local do arquivo estão corretos.',
	'PWA_ICON_NOT_PROVIDED'		=> '%s field must not be empty. All icon fields must contain an image.',
	'PWA_THEME_COLOURS'			=> 'Tema &amp; cores de fundo (opcional)',
	'PWA_THEME_COLOURS_EXPLAIN'	=> 'Usado para especificar a cor padrão da interface do usuário do seu aplicativo web. As cores do tema podem ser aplicadas a vários elementos da interface do navegador, como barra de ferramentas, barra de endereço e barra de status. As cores de fundo aparecem na janela do aplicativo antes que as folhas de estilo do seu aplicativo sejam carregadas.',
	'PWA_COLOURS'				=> 'Cores',
	'PWA_THEME_COLOUR'			=> 'Cor do tema',
	'PWA_BACKGROUND_COLOUR'		=> 'Cor de fundo',
	'PWA_INVALID_COLOUR'		=> 'O código de cor “<samp>%s</samp>” não é um código hexadecimal válido.',
	'PWA_SHOW_INSTALL_BANNER'	=> 'Mostrar banner de instalação do aplicativo',
	'PWA_SHOW_INSTALL_BANNER_EXPLAIN'	=> 'Exiba um aviso em dispositivos móveis compatíveis convidando os usuários a instalar seu fórum como um aplicativo.',
]);
