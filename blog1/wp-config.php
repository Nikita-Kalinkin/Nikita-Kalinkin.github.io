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
define('DB_NAME', 'blog1');

/** Имя пользователя базы данных */
define('DB_USER', 'root');

/** Пароль к базе данных */
define('DB_PASSWORD', '');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'e]B4 d6I@<~W}B=]=Aw sFbNzM@mv^FL0|D%|YOD9y:vRC?&-ay729EI2DbCiKR}');
define('SECURE_AUTH_KEY',  'TszB9St#UtGq;u2_)c FrV&=<D+b=i-$C-)?=GK|rtC`ec}n_jOmAvqKaFaH(FqJ');
define('LOGGED_IN_KEY',    'd +mw<&OE|/?:!cSOOs-T+f.@CKtR:<^c8t{bz8p{Z13k6x7> Dh{J e]7y<fov0');
define('NONCE_KEY',        '=nJhdi}W6-,9r=dheU&bs]~jc<!c<v}[-5:@- ;V#]&M^DW;6Kc0k0wgJiyMtHh%');
define('AUTH_SALT',        '4|4!AS1Y$Y?Y+=a=*tA(YOogK%@.%i2TptZ}O^:TSA/63aGh;0pScU5AlH!Xf%6@');
define('SECURE_AUTH_SALT', '0x_4+/vr tk7|!ZjO?,dP|mdEmmRbnK|bqKtnT{Je{|}JH+:*o/+}7G[+A1*{mUl');
define('LOGGED_IN_SALT',   'fX*T~J-hTO%)V|QRO8xD;(F~e?5HQv~,l(:@+%Ak}=~6-Sv)(>l^4bt_&Cn%wbnn');
define('NONCE_SALT',       '`|<F;8Yc]YjadG_J,p(4u4P+EnQHvrj/:>=`Q=L420MFGhi]4+z}*wF{sBClD]}{');

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
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
