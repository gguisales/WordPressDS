<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'banco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HiuvbUyPF}5~a;TLjvKmY6vVj%o3<%XA&^4V{{ejvq4_T~%hqr IjG?fThe|]OdZ' );
define( 'SECURE_AUTH_KEY',  'tY)~4ol<L3261mq/B:{#*eh*wr=q&G|M16G[&.l#8[R66~)X6>)d,)3SL>m.p&Ww' );
define( 'LOGGED_IN_KEY',    'gjtUWB?iVDKdez<cAD[Uj}.W(khxHD+|}L$YdfJ%,JyQ#+TCHPN.h7Zh-e?F6pYh' );
define( 'NONCE_KEY',        's6A,DDNg4 udyWFg0I2smuuXuqlip[O$~Z%t^4+5ibv25Sfw8h@59x@D#ff%-m1 ' );
define( 'AUTH_SALT',        'eNL^6<;eGN.$w.q[q-DGOIJK^it;MWAi1^M|GvUcbE^/_@[*Zk/E_D.taD?G|g]6' );
define( 'SECURE_AUTH_SALT', 'G%D t9(x1q6<y|bg]Zy<O[F*!>PVfi%fyc}#7-?3L*O8~z?un}7e?=Iw#Rs>A#uY' );
define( 'LOGGED_IN_SALT',   'L0nvx7%nm{e=/G!:UMmNuXFKL5^k1`3,6<n5gYtm;YSSH]dFdbuLl,@n$|q8!Lz?' );
define( 'NONCE_SALT',       '1x+7V<zhcT@`/@BahD&pwBpeim9:sB9i8Vs}g:Ut# IMwmKZ?dnYQ8*q]IF,bY<Z' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
