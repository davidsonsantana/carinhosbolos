<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'carinhosErick');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5kVHl,dKf|vUO>4ty>,,4S{%BE-,+]y5aabP;-qT7fIT>j_FBFtq- N2`S)_7m4u');
define('SECURE_AUTH_KEY',  '`~!Dt4.Y@o$g/KQ$I)eq9I,2* +RYMiq;i<+@ou|5HLrNXk@*Je-#Y44APwH_16*');
define('LOGGED_IN_KEY',    '`:UT]q%t 7KG{[1FnlnMSY+y++)_ |QLLO^J<M8]Ad(lPJXji-L3*C]2XPPQ?e0Q');
define('NONCE_KEY',        'j%=k|$l^=QyJ<c:|;{*VUc+3KC}BDA_xmQ*6>6tSGTS6rf2an6}4vGjC.GD5k9Bw');
define('AUTH_SALT',        '[][+/-d[sAgd;Gi(e6[dLYfO7C~(Vr629aeV=z].NGo0^AK4DMYtk h+zmgxQKL~');
define('SECURE_AUTH_SALT', 'UR0)f._@(&q>:h[1VyL,#q*G4si{ZimUT#$NshL:%CVOl,{OL:ZGi*VJ~_YX_~C@');
define('LOGGED_IN_SALT',   'RA99y)J^eJ;Qsa?<V0[Er{Mm.&[2w*oSG1BLBh+aYY*.+p|OtiMC11pJ)X)Kn?C-');
define('NONCE_SALT',       'W t$O.4i5.`AgHgAfO2&9+{&uF4VjXllpFxhRQTnX1e{dO-($h&WI&N>vJy2zcJ;');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
