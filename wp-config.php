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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'wordpress' );

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
define( 'AUTH_KEY',         'L]sqc^0|>[BtQGw/oQT)z1]Dd~bY+7gy*Ay.sdPlw)./I6pQ (|OU@El~Y}>1]M:' );
define( 'SECURE_AUTH_KEY',  'njy7?vC(-Uw0gP[o:@5Qh*`7A3Mz#a2<t-7iY] ,Z5+w(VE-JF1IM;D5y9_z3dp^' );
define( 'LOGGED_IN_KEY',    '/sD5-y%P ?Sz8FN: AagCMTe|Lb/mMf6CP!oFa!a4i5?uS!KjLRj-1*d2C0sr`a+' );
define( 'NONCE_KEY',        '>hOpU-iZBwrF@<CUp.aCGA.ttrDS53w@y,*)gmnM%c]p8*CXS,iMhEMa,^5%*l#4' );
define( 'AUTH_SALT',        'aZ[gl:Lp ARzz!;zwD)=PCHbW]$c?1>y82q;FpcQ3Arl7#60CFBtMX^`Jelc GK3' );
define( 'SECURE_AUTH_SALT', '6^jM>B:U1z.Gr2~qe64zdXiLCr>54]=q-tB_R!z12F(0C7ror?`h0}<=Culn$D=g' );
define( 'LOGGED_IN_SALT',   '7###EC;V7D)P.u}3n?|ItS*fq1r~~iIwJWcP-R^1fKB@!7G?<$(1zaHO4&XZ~Jd ' );
define( 'NONCE_SALT',       ';a<DmIVTzxC>6zv?!QZHyNr;1-?hjGTws_jJcLg`aPX8tInppq9!5+}uI-w-{Wo|' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'mst_';

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
