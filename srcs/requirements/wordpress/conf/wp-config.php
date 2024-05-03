<?php

define( 'DB_NAME', getenv( 'SQL_NAME' ) );
define( 'DB_USER', getenv( 'SQL_USER' ) );
define( 'DB_PASSWORD', getenv( 'SQL_USER_PWD' ) );
define( 'DB_HOST', getenv('WP_SQL_HOST') . ':' . getenv('SQL_PORT')); 
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_bin' );

define('WP_SITEURL', 'https://' . getenv('DOMAIN_NAME'));
define('WP_HOME', 'https://' . getenv('DOMAIN_NAME'));

define('AUTH_KEY',         'RDr^<+WULE$wLNj`{m[la_5y!.xMS|KRF~s;j;bjgYO?V=x&IY1Su+X$M+s-NM]F');
define('SECURE_AUTH_KEY',  'BSL<gUrzT{YSWpN0!NMzB#)pxYvJMHygpx-EN05`GKhf P7.HnwgSmxN*={>rb5J');
define('LOGGED_IN_KEY',    'JLR+IN3b 7-#|/^fu;==;;-zFo[SfBsLgA Xq9bY!S=i|0igOtdVi0>?{y&I1s) ');
define('NONCE_KEY',        'h2J.D+^|q8dz;HP;)Z_Of&3PKf@QTaIp~MK7&4cwY*g?AhOt5zfCZwq!4qGW%QWv');
define('AUTH_SALT',        'IL ,ruQDPxf$A^x5UGE%0Cdu1K18|5&91kxZa3 (z2h1 z~b8_Yy>:SCZ(NYY|=V');
define('SECURE_AUTH_SALT', 'j{u]w8ac5oC1t?(/&w-LCG+cy!tq.p}W( |Z^e;a4a!gvdY%wZ0NZ@p<-=ZMHH~r');
define('LOGGED_IN_SALT',   'TZhF-;3YBJ&ulWvbszZ@~8bV]Tr#d+r4/|P,j9d%jCoI~XB],E+aGzNnt?zQt[|)');
define('NONCE_SALT',       '[H+x X DbBl(=yt,O!O?{ QU$),wW-`GfToiyU,%x<TITJ)+ByoDK$-Y{O2HZAuK');

	$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';