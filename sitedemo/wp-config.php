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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sitedemo' );

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
define( 'AUTH_KEY',         'N~4#pW3ybaX_:[UmM3&$yypwU.`j(SRhZ@s?;zHAP)liv$=!~!j}#BHAu6Fp!cb.' );
define( 'SECURE_AUTH_KEY',  'KCecs_TEF0*TA&c[*i]:XJ)I(nR{|qYW{^g{/1^[1O3Cy[YnAHy &*N6&8PIA(Uq' );
define( 'LOGGED_IN_KEY',    'Ht]_MfPDhoBFUm$Wn)nD#oCkoD/#]}/T xt@x?hxoio/%b0z[=fl963k>FrpyvD|' );
define( 'NONCE_KEY',        'I=`]5X-$QAp{bFN5Za>T:mmv_0@MB/(=6NEr>L?x,3-tonCRe&akbFm|7s;/0:S2' );
define( 'AUTH_SALT',        '?1Y7/UX;Y^0f?Ids(-V-bStE@s?iKyIiFOOY0z>Gr;,tpU0vKt8mI?`-uu8-olZ>' );
define( 'SECURE_AUTH_SALT', ' }lZuN#CV6E1wN#`O/Awy`%]|JHhGzL[{c{l)6_S0&[|iD0~sT2^x*AHTf7c=ArH' );
define( 'LOGGED_IN_SALT',   ':oURXs|^|)C4Y$L,s_qPp`X(u@sZ$q5l#fh,m$])R>El@snp|#/:zH`W)ro7[n[W' );
define( 'NONCE_SALT',       '=%q06RV9)TIvX=MCm1)LR7neYp/_1TA2$janh&PW+lXgYCUCy7:T71:RTJ7WF!F<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'sd_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
