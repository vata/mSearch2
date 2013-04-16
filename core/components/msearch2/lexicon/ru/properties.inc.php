<?php
/**
 * Properties Russian Lexicon Entries for mSearch2
 *
 * @package msearch2
 * @subpackage lexicon
 */

$_lang['mse2_prop_tpl'] = 'Чанк оформления для каждого результата';
$_lang['mse2_prop_limit'] = 'Лимит выборки результатов';
$_lang['mse2_prop_offset'] = 'Пропуск результатов с начала выборки';
$_lang['mse2_prop_outputSeparator'] = 'Необязательная строка для разделения результатов работы.';
$_lang['mse2_prop_toPlaceholder'] = 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.';

$_lang['mse2_prop_returnIds'] = 'Вернуть только список id подходящих страниц, через запятую.';
$_lang['mse2_prop_showLog'] = 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".';
$_lang['mse2_prop_fastMode'] = 'Если включено - в чанк результата будут подставлены только значения из БД. Все необработанные теги MODX, такие как фильтры, вызов сниппетов и другие - будут вырезаны.';

$_lang['mse2_prop_parents'] = 'Список категорий, через запятую, для ограничения вывода результатов. По умолчанию, нет.';
$_lang['mse2_prop_depth'] = 'Глубина поиска товаров от каждого родителя.';

$_lang['mse2_prop_includeTVs'] = 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].';
$_lang['mse2_prop_tvPrefix'] = 'Префикс для ТВ плейсхолдеров, например "tv.". По умолчанию параметр пуст.';

$_lang['mse2_prop_where'] = 'Дополнительные параметры выборки, закодированные в JSON.';
$_lang['mse2_prop_showUnpublished'] = 'Показывать неопубликованные товары.';
$_lang['mse2_prop_showDeleted'] = 'Показывать удалённые товары.';
$_lang['mse2_prop_showHidden'] = 'Показывать товары, скрытые в меню.';