<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wptheme' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}_[o}xfX9e;[}g^yO]gCLLpU>Cf6V-HAOnFgarGF <Q@@pQ01Tt$z+z+!`NJ{2.=' );
define( 'SECURE_AUTH_KEY',  '&sH=Ib-X2mvvbRbok3YoZibOnzRI>27}I43}4X@DlwXe911h^>ei^;Jtn*~+RsbY' );
define( 'LOGGED_IN_KEY',    'V`kQ,;p@CczR{z5y.R}rmO`ER}@,4p;KTd^3%xF($f;:^GWA:F,HS8H/6@Jhqi<9' );
define( 'NONCE_KEY',        '5dbv{HrUn ?2+e/su^AbptrD:F-Hl.K7}skasjN0Vme7F8B>ZVy2+L[5U.4oycA=' );
define( 'AUTH_SALT',        ';{/9Y},MUq(!@9)48rm.sf}$!cAN3x5g`W7[m^F}L~4$qCK5vxH2%t.RH3|5aCOC' );
define( 'SECURE_AUTH_SALT', 'vC;,lJiVHvJP96:ryD4M| ;]oiQ]cra(%@g;/T;0N5N7cj0`u,<waQfKM y3hp_C' );
define( 'LOGGED_IN_SALT',   'Jpvi%4Q-@LK|^@-X#:b[FiSpSQ{E^/U$t%{zx0g-HxZv3;,)ijoC>uZ!+$5^t}7G' );
define( 'NONCE_SALT',       '&B&}WsYHN3?:T/;2Jcp]m^&D;T W;|>|fpiAQkp-y~X%d 6@qoY%<i[WM6|`q5,l' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
