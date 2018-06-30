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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'YrJ^[G*Bf{B51J]QAvlO~,]P q&3TMaSh{,8_GoZ%]G: 4x.A(TGH(YnB$}_f?^j');
define('SECURE_AUTH_KEY',  'eW*aV#Lx? l`Ed|P_qQ^7x+!|,pXy>k$8]`:_77]4WBif@h/z%>vi$8>m*ca%YB-');
define('LOGGED_IN_KEY',    'ha$:_Fq5~hS8<ILdA847l1$g(#H4Z1VRTNh;!)X-p2m5)gn?B1e61o,H;s!*5Ec]');
define('NONCE_KEY',        'w+.[;h]YcYC?I;57| yY@tGCUx$3^jz/v_VH:tG uC S.3_j8M8Qe-#&^Is@]mx#');
define('AUTH_SALT',        ':HF<w.L2~IqT@mM{]%MTI8|0TM.Kl;D0@jVJ_.aWd~9kuNeeE;bN{M3%=w7}O=uj');
define('SECURE_AUTH_SALT', 'mdfz@wtGnMlC-[Ru(m?!v(qyV?-78a!.[]GJgulVNLmrLK>;FIg8pM9l(rzt4w>z');
define('LOGGED_IN_SALT',   'w.6u8i@eeNP*9O_4V#*<Dyb1kbGa*FV;fD| `f,?O,-wh[(0]zAL%[(?xg4&zFES');
define('NONCE_SALT',       '?rtw^4P0~>4;sj7mT2;T`A|xtHN,(<SC([YaOGxgXF3Bs.W{2qoo6eJMy %5^[hH');

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
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
