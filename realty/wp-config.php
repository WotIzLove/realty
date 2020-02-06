<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'id12493586_vlad_kurenkov_realty' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'id12493586_vlad_realty' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'password' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?/rY?goD.<eQMm`{#Ftf`M>?u|5ET/_S:w|-Y9f!VY,]E_L_)(NEt Y+oa)j`gwa' );
define( 'SECURE_AUTH_KEY',  '^Q?d%Zi9k#1DURY Mfdw!M|(KBTS3<6h(GM$WW6k_=pDQ:(&&RT] sz0PGo@Ozd0' );
define( 'LOGGED_IN_KEY',    ';z$%z=<b=}yqV_F/>3!RW$S7;DDyXY>5brd?/-HPz{P%&lC.HD66RgNq5c~9E8&c' );
define( 'NONCE_KEY',        'YM[%5o7^;b8Nxf5i~aKIaP,Y!E)6cy3-38+{n{bRQ)bDwlcyem[5;`*R?!P$;j7V' );
define( 'AUTH_SALT',        '0:<!~<N`/=1YCF9=Ad%|02Re~(-tK4N;_8Tb+2j,Q>7(}djb}%._sA{~$Mf?]2s%' );
define( 'SECURE_AUTH_SALT', 'dy>Knc=<UFcr]GLV7>yv;9YF,T/;m7@Zvi++rfakf)[X9$PWU;9OR#/wjWG~oC!p' );
define( 'LOGGED_IN_SALT',   'E!PI`&|:~9D!)H3Tr*P3cDOEm28#,CW$$Qo81]|F+ZzED]FudI,DLfVh$S[8F:e,' );
define( 'NONCE_SALT',       '|)25 f=TB#P+nJrYgeI0g Z.aiHB;0`8l1RP:^=B8>wYjAYx+i(9X55eV.Nv9}(A' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
