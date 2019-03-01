<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * Wfdownloads module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         wfdownload
 * @since           3.23
 * @author          Xoops Development Team
 */

$moduleDirName      = basename(dirname(dirname(__DIR__)));
$moduleDirNameUpper = strtoupper($moduleDirName);

define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', 'Поддержка библиотеки GD: ');
define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', 'Версия библиотеки GD: ');
define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>Отключено</span> (Не доступны миниатюры)");
define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>Включено</span> (Миниатюры доступны)");
define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', 'Статус сервера');
define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', 'Максимальный размер сообщения (директива post_max_size в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', 'Максимальный разрешенный размер загрузки (директива upload_max_filesize в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', 'Ограничение памяти (директива memory_limit в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>Загрузка мета версии:</span> ");
define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>ВЫКЛ</span>");
define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>ВКЛ</span>");
define('CO_' . $moduleDirNameUpper . '_SERVERPATH', 'Путь сервера к корню XOOPS: ');
define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', 'Состояние сервера загрузки: ');
define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>Информация взята из PHP ini-файла:</span>");
define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', 'Заметка. Путь загрузки *ДОЛЖЕН* содержать полный путь к серверу Вашей папки загрузки.');

define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>Печать</span>");
define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>Создать PDF</span>");


define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "Обновление не удалось - не удалось переименовать поле '%s'");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "Обновление не удалось - не удалось добавить новые поля");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "Обновление не удалось - не удалось переименовать таблицу '%s'");
define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', 'Не удалось создать столбец в базе данных: %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлен)');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлен)');
define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');

define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Папки были удалены');

// Error Msgs
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', 'Не удалось удалить каталог %s ');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', 'Не удалось удалить %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', 'Невозможно загрузить плагин');


//Help
define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(dirname(__DIR__))));
define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__.'/help/helpheader.tpl');
define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', 'Назад в настройки ');
define('CO_' . $moduleDirNameUpper . '_OVERVIEW', 'Обзор');

//define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//help multi-page
define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', 'Отказ от ответственности');
define('CO_' . $moduleDirNameUpper . '_LICENSE', 'Лицензия');
define('CO_' . $moduleDirNameUpper . '_SUPPORT', 'Поддержка');

//Sample Data
define('CO_' . $moduleDirNameUpper . '_' . 'ADD_SAMPLEDATA', 'Добавить пример данных (удалит ВСЕ текущие данные)');
define('CO_' . $moduleDirNameUpper . '_' . 'SAMPLEDATA_SUCCESS', 'Пример данных успешно загружены');
define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA', 'Экспорт таблиц в YAML');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON', 'Добавить пример данных?');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC', 'Если да, кнопка "Добавить пример данных" будет видна администратору. По умолчанию для первой установки');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA', 'Экспорт схемы БД в YAML');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_SUCCESS', 'Экспорт схемы БД в YAML прошел успешно');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_ERROR', 'ОШИБКА: Не удалось экспортировать схему БД в YAML');

//letter choice
define('CO_'.$moduleDirNameUpper.'_'.'BROWSETOTOPIC', "<span style='font-weight: bold;'>Просмотр в алфавитном порядке</span>");
define('CO_'.$moduleDirNameUpper.'_'.'OTHER', 'Другой');
define('CO_'.$moduleDirNameUpper.'_'.'ALL', 'Все');

// block defines
define('CO_' . $moduleDirNameUpper . '_' . 'ACCESSRIGHTS', 'Права доступа');
define('CO_' . $moduleDirNameUpper . '_' . 'ACTION', 'Действие');
define('CO_' . $moduleDirNameUpper . '_' . 'ACTIVERIGHTS', 'Активные права');
define('CO_' . $moduleDirNameUpper . '_' . 'BADMIN', 'Управление блоками');
define('CO_' . $moduleDirNameUpper . '_' . 'BLKDESC', 'Описание');
define('CO_' . $moduleDirNameUpper . '_' . 'CBCENTER', 'Центр средний');
define('CO_' . $moduleDirNameUpper . '_' . 'CBLEFT', 'Левый центр');
define('CO_' . $moduleDirNameUpper . '_' . 'CBRIGHT', 'Правый центр');
define('CO_' . $moduleDirNameUpper . '_' . 'SBLEFT', 'Лево');
define('CO_' . $moduleDirNameUpper . '_' . 'SBRIGHT', 'Право');
define('CO_' . $moduleDirNameUpper . '_' . 'SIDE', 'Центровка');
define('CO_' . $moduleDirNameUpper . '_' . 'TITLE', 'Название');
define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLE', 'Видимый');
define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLEIN', 'Видимый в');
define('CO_' . $moduleDirNameUpper . '_' . 'WEIGHT', 'Вес');

define('CO_' . $moduleDirNameUpper . '_' . 'PERMISSIONS', 'Права доступа');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS', 'Настройка блоков');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_DESC', 'Настройка блоков/групп');

define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_MANAGMENT', 'Управление');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADDBLOCK', 'Добавить новый блок');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_EDITBLOCK', 'Редактировать блок');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_CLONEBLOCK', 'Клонировать блок');

//myblocksadmin
define('CO_' . $moduleDirNameUpper . '_' . 'AGDS', 'Административные группы');
define('CO_' . $moduleDirNameUpper . '_' . 'BCACHETIME', 'Время кэширования');

//Template Admin
define('CO_' . $moduleDirNameUpper . '_' . 'TPLSETS', 'Управление шаблонами');
define('CO_' . $moduleDirNameUpper . '_' . 'GENERATE', 'Генерировать');
define('CO_' . $moduleDirNameUpper . '_' . 'FILENAME', 'Имя файла');

//Menu
define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE', 'Миграция');
