file_search
===========

A Symfony project created on July 20, 2015, 4:23 pm.


Структура проекта
=================

Вся реализация находится в бандле AnytFileSearchBundle,
Один контроллер для поиска, форма поиска сделана на html, поскольку не вижу тут необходимости использовать симфонийские формы

Во главе всего один сервис FileSearch, который принимает в параметры конструктора engine и путь к папке для поиска, которые можно настроить в конфиге,

Engine для поиска сразу сделал один FinderEngine на основе симфонийского компонента Finder, он очень простой в реализации и использует оптимальный метод для поиска файлов (консольную команду find)

Но для усложнения логики позже добавил другие engine: 
- GrepEngine - использует консольную команду grep для поиска

AbstractReadFileEngine используется для выноса логики работы с файлами по одному с помощью php
- ReadFileByLineEngine - открывает все файлы и ищет построчно (удобен если файлы большого объема, не занимает всю память)
- ReadFileContentsEngine - открывает файл полностью и ищет сразу во всем файле (удобен с файлами малого объема где построчное чтение только замедлит поиск)

Все engine описываются EngineInterface

P.S.
Не уверен был куда ложить файлы для тестов, положил их в web/tests_files
Верстка минималистичная, не зацикливался на ней
Первую реализацию с Finder написал за пару часов, на общую реализацию ушло около одного - двух дней. 
Сложности вызвала необходимость реализации неоптимальных методов поиска, не уверен был в их необходимости, а совета не спрашивал, поскольку задание подразумевает самостоятельную работу и unit тесты ранее я не писал, такчто коечто дочитывал.

