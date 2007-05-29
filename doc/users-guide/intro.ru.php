<?
$title = "Руководство пользователя - Введение";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2007/05/29 03:58:51';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Руководство пользователя Contents"><link rel="next" href="install.php?phpLang=ru" title="Первоначальная инсталляция"><link rel="prev" href="index.php?phpLang=ru" title="Руководство пользователя Contents">';


include_once "header.ru.inc";
?>
<h1>Руководство пользователя - 1. Введение</h1>
        
        
        <h2><a name="what">1.1 Что такое Fink?</a></h2>
            
            <p> Fink - дистрибутив ПО с открытым исходным кодом Unix  для Mac OS X и Darwin. 
                Он обеспечивает большое разнообразие свободных инструментов в командной строке и
                графического ПО, которые разработаны для Linux и аналогичных операционных
                систем вашего Mac.</p>
        
        <h2><a name="req">1.2 Требования</a></h2>
            
            <p> В любом случае вам понадобятся:</p>
            <ul>
                <li>
                    <p> Инсталлированная система Mac OS X, версия 10.2 или более поздняя, либо
                        эквивалентные версии Darwin. Более ранние версии
                        <b>не</b> будут работать. См. ниже информацию
                        о поддерживаемых системах.</p>
                </li>
                <li>
                    <p> Доступ к Интернету. Исходный код и бинарные пакеты
                        загружаются с сайтов скачивания Интернета.</p>
                </li>
            </ul>
            <p> Если вы намерены использовать дистрибутив исходного кода (см. ниже), вам также
                понадобятся:</p>
            <ul>
                <li>
                    <p> Инструменты разработки. В Mac OS X надо инсталлировать
                        пакет Developer.pkg с компакт-диска Developer Tools. Имейте в виду, что
                        инструменты должны соответствовать вашей версии Mac OS X. В
                        Darwin инструменты инсталлируются по умолчанию.</p>
                    <p> Идея инсталлировать Developer Tools хороша,
                        даже если вы не намерены строить пакеты от исходного кода.
                        Некоторые программы, инсталлированные пакетом,
                        являются инструментами общего назначения в командной строке. Некоторые
                        пакеты могут зависеть от них в своей работе.</p>
                </li>
                <li>
                    <p> Терпение. Компиляция нескольких больших пакетов требует времени.
                        Во время этого процесса можно болтать в течение часов и даже дней.</p>
                </li>
            </ul>
        
        <h2><a name="supported-os">1.3 Поддерживаемые системы</a></h2>
            
      
      <p><b>Mac OS X 10.4</b> is the leading-edge platform, and is considered to be <q>fully supported and tested</q>, though as a newer operating system there are still some issues.  Most of the developers run it, and those who are running 10.3 have 10.4 users test their work.  Note, however, that
fink on intel hardware is still considered to be of <b>beta</b> quality.</p>
      <p>
        <b>Mac OS X 10.3</b> is considered to be <q>fully supported and tested</q>, although there may still be stray compile problems with single packages. Many of the developers run it, and those who don't have 10.3 users test their work.
</p>
      <p><b>Mac OS X 10.2</b> is still supported to some extent.  Fink 0.6.4 is the last distribution to suppport this OS.</p>
      
            <p>
                <b>Mac OS X 10.1</b> все еще поддерживается до некоторой степени. В этом случае надо
                использовать Fink 0.4.1, но не более поздние версии.</p>
            <p>
            <b>Darwin 8.x</b> - версия Darwin, соответствующая Mac OS X 10.4,
            <b>Darwin 7.x</b> - версия Darwin, соответствующая Mac OS X 10.3, а 
            <b>Darwin 6.x</b> - версия Darwin,
                соответствующая Mac OS X 10.2. Вообще они должны работать, но
                не столь хорошо проверены, т.к. вместо них большинство пользователей просто применяет саму Mac OS X.
                Могут возникнуть проблемы с пакетами, использующими
                параметры, присущие Mac OS X; в число таких пакетов входят
                XFree86 и, возможно, esound.</p>
        
        <h2><a name="src-vs-bin">1.4 Дистрибутив исходного кода и бинарный дистрибутив</a></h2>
            
            <p> ПО пишется ("разрабатывается") на языках программирования,
                доступных для человеческого понимания; эта форма называется "исходным кодом".
                Прежде, чем компьютер сможет использовать программу, ее необходимо преобразовать
                в инструкции машинного кода низкого уровня (которые большинство людей не могут прочитать).
                Это процесс называется "компиляцией", а конечная программа
                называется "выполняемой" или "бинарной". (Процесс также называется
                "построением", т.к. обычно включает больше действий, чем
                просто компиляция.)</p>
            <p> При приобретении коммерческого ПО вы не можете видеть его
                исходный код, который компании считают своей коммерческой тайной. Вы можете
                получить только готовый выполняемый материал, а это значит, что
                вы никак не сможете модифицировать программу или хотя бы узнать,
                что она делает во время своей работы.</p>
            <p> Программное обеспечение с <a href="http://www.opensource.org/">открытым исходным
                кодом</a> совсем иное. Как видно из названия, исходный код
                открыт каждому для просмотра и модификации. На деле, большинство ПО
                с открытым исходным кодом распространяется авторами только в виде открытого кода,
                который вы сами должны скомпилировать на своем компьютере для получения рабочей программы.
                </p>
            <p> Fink предоставляет выбор между двумя моделями. При использовании дистрибутива
                исходного кода первоначальный исходный код скачивается, адаптируется к политике Mac
                OS X и Fink и компилируется на вашем компьютере. Процесс полностью автоматизирован,
                но занимает некоторое время. При использовании бинарного дистрибутива
                предварительно скомпилированные пакеты скачиваются 
                с сайта Fink и затем инсталлируются, что экономит ваше время, необходимое на
                компиляцию. При желании можно совместить обе модели.
                Далее в Руководстве рассказывается, как это сделать.</p>
        
    <p align="right"><? echo FINK_NEXT ; ?>:
<a href="install.php?phpLang=ru">2. Первоначальная инсталляция</a></p>
<? include_once "../../footer.inc"; ?>


