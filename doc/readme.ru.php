<?php
$title = "Ознакомительный файл";
$cvs_author = 'Author: gecko2';
$cvs_date = 'Date: 2012/11/11 15:20:15';
$metatags = '';


include_once "header.inc";
?>
<h1>Ознакомительный файл Fink</h1>
<!--Generated from $Fink: readme.ru.xml,v 1.3 2012/11/11 15:20:15 gecko2 Exp $-->
        <p> Система управления пакетами Fink предназначена для переноса
            всего мира ПО с открытым исходным кодом в Darwin и Mac OS X.</p>
        <p> При помощи dpkg она поддерживает отдельную иерархию каталогов.
            Fink скачивает версии оригинального исходного кода, при необходимости делает в них патчи,
            конфигурирует эти версии для Darwin, затем компилирует и инсталлирует.
            Информация об имеющихся пакетах и необходимых патчах
            ("описание пакетов") поддерживается отдельно, но обычно входит
            в состав дистрибуции. Реальный исходный код скачивается
            по мере необходимости из Internet.</p>
        <p> Хотя Fink не может считаться "зрелой" системой и имеет определенные жесткие ограничения
            и недостающие параметры, она успешно используется большим количеством людей.
            Просим внимательно прочитать инструкции и не удивляться, если
            что-то будет работать не так, как вы ожидали. Для большинства
            сбоев существует обоснованное объяснение; если потребуется помощь, посетите наш веб-сайт.</p>
        <p> Fink выпускается на условиях Общей публичной лицензии GNU.
            См. файл COPYING для получения более подробной информации.</p>
    <h2><a name="req">Требования</a></h2>
        
        <p> Вам необходимо иметь следующее:</p>
        <ul>
            <li>
                <p> Инсталлированная система Mac OS X, версия 10.0 или более поздняя. (Иногда
                    все еще могут возникать проблемы с 10.1 из-за компоновщика.)
                    Darwin 1.3.1 также должна работать, но это не проверено.
                    Более ранние версии обеих систем <b>не</b> будут работать.</p>
            </li>
            <li>
                <p> Компакт-диск инструментов разработки. Надо инсталлировать пакет Developer.pkg в Mac OS X с компакт-диска Developer Tools.
                    Надо убедиться, что инсталлируемые вами инструменты соответствуют версии вашей Mac OS X. В Darwin
                    инструменты уже есть по умолчанию после инсталляции. </p>
            </li>
            <li>
                <p> Доступ в Internet. Весь исходный код скачивается с зеркальных сайтов.</p>
            </li>
            <li>
                <p> Терпение. Компиляция нескольких больших пакетов занимает время. Я в это время
                    болтаю часами и даже днями.</p>
            </li>
        </ul>
    <h2><a name="install">Инсталляция</a></h2>
        
        <p>Процесс инсталляции подробно описан  в файле "Инсталляция".
            Просим сначала ознакомиться с текстом, т.к. процесс необычен. Здесь же описывается процедура
            обновления.</p>
    <h2><a name="usage">Использование Fink</a></h2>
        
        <p> Файл "Использование" описывает, как настраивать маршруты, инсталлировать и
            удалять пакеты. Кроме того, он включает полный список имеющихся команд.</p>
    <h2><a name="questions">Другие вопросы?</a></h2>
        
        <p> Если в предлагаемой документации нет ответа на ваш вопрос,
            перейдите с веб-сайта Fink на <a href="/">/</a>
            и посмотрите там страницу Help:<a href="/help/">/help/</a>.
            На ней вы найдете сведения обо всей другой имеющейся документации и источниках
            необходимой вам поддержки.</p>
        <p> Если вы хотите внести свой вклад в развитие Fink,  вышеуказанная страница Help также
            содержит список того, что вы можете сделать - например, тестирование или создание пакетов.</p>
    <h2><a name="uptodate">Регулярное получение информации</a></h2>
        
        <p> Адрес веб-сайта проекта: <a href="/">/</a>.</p>
        <p> Для регулярного получения информации о новых версиях можно подписаться на список рассылки fink-announce на <a href="/lists/fink-announce.php">/lists/fink-announce.php</a>.
            Это умеренный список с низким уровнем трафика.
            </p>
    
<?php include_once "../footer.inc"; ?>


