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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gracadina');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'i,N*2>&3U3fI:z(QlYb}^ouT(! 8)2_d3N:9l+]6{ID<a:V31Jgs)?|1R$s>I2F&');
define('SECURE_AUTH_KEY',  'S5/s{z@0wSRMv )/AF65p1+V/l+XI&AH{p n*h+%D04F-8g,rbzjCidZNg~)XG[~');
define('LOGGED_IN_KEY',    'v<ylOoswkrLp/mofpT50T>&-K<enWXu:!XYU^3|kmDPo|_pUl>n(fX>zr;D.4m>d');
define('NONCE_KEY',        'NBPhm8 PrEi:rc8;$Fg5~Zsj0-?5@FU%A[yE%KQ<oYObM]0Ly)OO7apliE59`:-C');
define('AUTH_SALT',        '|m4cxc;q7E?=?L;wEc(&?Ojb1_Yk)ASQ#<^)U5G+p:.OYmlMa9|D([4r}->S9rjo');
define('SECURE_AUTH_SALT', 'vlbv~.*F,^:t6:%r^cVDCAm&#zrbkE^X=Q(LPKNj/<PL0wa3Gq0Oo#{v%SEAqoT`');
define('LOGGED_IN_SALT',   '>ZZ!&rYlr.}`|G,P.6SZJ8pho><6I:u3q a{vCx`8ndp?Yo VJ:i6%KE,{;`J<&*');
define('NONCE_SALT',       '7F!,2qsTm@$dI%ggZ^Cz6Ow2s]jHsuz+nuKSN=a^^hhc]shJTe <L:B9SQi)oA=z');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
