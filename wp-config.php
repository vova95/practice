<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'surfing');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3~uPfhggx%YhnCS#AVt-n9V1Zs`hGfS+Wwzc,=|W+ATq~aKr<5r#VL#685yqB()!');
define('SECURE_AUTH_KEY',  'Et^yxHwAP`oS~!$8wMaw|VHFf(Er;_SFD+$ND=,gEW~!AR<`613Cw-iwl[nlY#QL');
define('LOGGED_IN_KEY',    '?uZp{`3Js3SqiHw!gvY`e0Kw)=Z|#aLKN=k}lG(C bnRZP/LaL|Gh#0?(P=>BZv&');
define('NONCE_KEY',        '@gl-X.V-FyqW`s&I:QY*`k(<#r@yt~vl=l+lY:}O@`jbb_-B]WG7h|t]Ux,7e/K?');
define('AUTH_SALT',        'jy?]7Y1uym$(? /x| VmRtHzCsN+W]}k^+|<0R@eBmh2x-]+=q/KfA]IsHWM> l5');
define('SECURE_AUTH_SALT', '{0eT_-4QQF|$-!e5lI&.>Yo,)xG3$:`^wcE<W{?l!kdp5j {Q0xi0-Xuy| nw|x_');
define('LOGGED_IN_SALT',   '[?<AlMGzgdb6T]U02I1$+[cQM_qf@+)^By ^)T0zJS^|L-QU,wNSw(G|h~)u=HLK');
define('NONCE_SALT',       'Ch0,E9D!~!p~5R,A,+Qt7:!^z[+r&ka9Zz;-KKh6Z!-)-q*<rEj3:f8J&t~BD%mo');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
