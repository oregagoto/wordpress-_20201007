<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uhiS<V:bLjPW[g[+cx?k%j9!p4)0B$]u!hqe|NgR&(X&ib? |f*=spz4$k,BvA+P' );
define( 'SECURE_AUTH_KEY',  ' rLzH]:)D?dh IxVH]I^zIr,%mcSYy_cS^?bV$H0X<>(~g0a#_1ohoPey, :pEoa' );
define( 'LOGGED_IN_KEY',    '^]dJy()FW78N(?G)}4soH6B{|PU<9s]_-PNw%~m%{~Cq:2vn:BC$5Nblm@<njn$_' );
define( 'NONCE_KEY',        'VP.cUJS @A]q-vOT7sV(40YNpB9V<K&VmiLKD<Zb. 0!V$T0ek5a`eKodA|+-N4<' );
define( 'AUTH_SALT',        '>BOxyc.+K$Lg*iy.]f:)xt$zY0a:]d;q+I=pq }sk!8V0=lD{;*3VyGHOc7?gOgP' );
define( 'SECURE_AUTH_SALT', '(HUQ0]RSkuMZtR%3!2a$iGG4~g?Rru`=It`WRR[~$#*~-6Qka =BT7Lp72q1z#1+' );
define( 'LOGGED_IN_SALT',   '3/1?0YoO*[,G~S@+ aaDUxLWecmN(k]S~&S?VfganufRyHdN_#uppJ?&be]d&OAr' );
define( 'NONCE_SALT',       'U q#,4M=vdi/m_|woK;R_XoYN3mge$a^hUhO))a4X2j^YMvPTCa-+s73Qsu6VJlA' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
