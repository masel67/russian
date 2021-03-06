<?php
// $Id: welcome.php 5529 2010-10-18 02:16:05Z beckmi $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2010-10-18 andrey3761

$content .='
<u><b>Что это?</b></u>
<p>
<abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> - это динамический OO (Объектно-Ориентированный) основанный на открытом исходном коде скрипт портала, написанный на PHP.

XOOPS поддерживает различные базы данных,
XOOPS - это идеальный инструмент для создания небольших высоко-динамичных сообществ вэб-сайтов,
внутренних порталов компании, корпоративных порталов, web-публикаторов и многого другого.
</p>
<p>
XOOPS распространяется по условиям лицензии <a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a> 
и свободен для использования и изменения.
Это свободно распространяемое программное обеспечение при условии сохранения требований лицензии GPL.
</p>
<h3>Технические требования</h3>
<ul>
<li>WWW сервер (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
<li><a href="http://www.php.net/" rel="external">PHP</a> 5.2 или выше</li>
<li><a href="http://www.mysql.com/" rel="external">База данных  MySQL</a> 5.1 или выше</li>
</ul>

<h3>Перед установкой</h3>
<ol>
<li>Правильно установите WWW сервер, PHP и сервер баз данных.</li>
<li>Подготовьте базу данных для Вашего XOOPS сайта.</li>
<li>Подготовьте учетную запись и права пользователя для доступа к базе данных.</li>
<li>Следующие дериктории сделайте доступными для записи на сервере: %s</li>
<li>По соображениям безопасности, рекомендуется переместить из <a href="http://phpsec.org/projects/guide/3.html" rel="external">корня сайта</a> и изменить названия следующих папок: %s</li>
<li>Создайте (если их нет) и сделайте следующие директории записываемые сервером: %s</li>
<li>Включите в браузере поддержку cookie и JavaScript.</li>
</ol>
<h3>Установка</h3>

Следуйте рекомендациям мастера установки.
';
