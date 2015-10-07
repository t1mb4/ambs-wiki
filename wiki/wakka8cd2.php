<?xml version="1.0" encoding="windows-1251"?>
<rss version="2.0">
<channel>
<title>IpstudioWiki - ДокументацияIPStudioAMBS/РазделPartners/ФормаStatisticByDestinations</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ДокументацияIPStudioAMBS/РазделPartners/ФормаStatisticByDestinations</link>
<description>History/revisions of IpstudioWiki/ДокументацияIPStudioAMBS/РазделPartners/ФормаStatisticByDestinations</description>
<language>en-us</language>
<item>
<title>2007-07-19 19:01:51</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations/show&amp;time=2007-07-19+19%3A01%3A51</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a name=".dokumentacijaipstudioambs.razdelpartners.formastatisticbydestinations" href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations&amp;amp;v=18vo" class="">/Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Раздел&amp;nbsp;Partners&amp;nbsp;/&amp;nbsp;Форма&amp;nbsp;Statistic&amp;nbsp;By&amp;nbsp;Destinations&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations&amp;amp;time=2007-07-19+19%3A01%3A51">2007-07-19 19:01:51&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations">2007-08-17 14:11:34&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">Форма предназначена для&amp;nbsp;просмотра суммарной статистики по&amp;nbsp;прошедшим звонкам, по&amp;nbsp;направлениям, за&amp;nbsp;выбранный период времени.&lt;br />
Внешний вид&amp;nbsp;формы представлен на&amp;nbsp;следующем рисунке:&lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer44.png" alt=" (5&amp;nbsp;Кб)" title=" (5&amp;nbsp;Кб)" width='710' height='199' />&lt;br />
Описание полей формы:&lt;br />
||**Поле**|**Назначение**||&lt;br />
||----||&lt;br />
||**Select operator**|
Позволяет выбрать для&amp;nbsp;просмотра конкретного оператора, по&amp;nbsp;которому необходима статистика звонков по&amp;nbsp;направлениям.
||&lt;br />
||**Select server Mera**|
Позволяет выводить статистику прошедших звонков по&amp;nbsp;направлениям через конкретный адрес MTVS-сервера.
Значение по&amp;nbsp;умолчанию – All&amp;nbsp;(все MTVS-серверы).
||&lt;br />
||**Destination type**|
Тип&amp;nbsp;статистики по&amp;nbsp;направлениям. Может принимать следующие значения:
**Terminate** – на&amp;nbsp;дисплей ПК&amp;nbsp;будет выводиться статистика по&amp;nbsp;прошедшим звонкам, только по&amp;nbsp;терминационным направлениям;
**Originate** &amp;ndash; на&amp;nbsp;дисплей ПК&amp;nbsp;будет выводиться статистика по&amp;nbsp;прошедшим звонкам, только по&amp;nbsp;оригинационным направлениям;
**All** &amp;ndash; на&amp;nbsp;дисплей ПК&amp;nbsp;будет выводиться статистика по&amp;nbsp;прошедшим звонкам,  по&amp;nbsp;оригинационным и&amp;nbsp;терминационным направлениям.
Значение по&amp;nbsp;умолчанию – All.
''''''''
||&lt;br />
||**Time period**|
Период времени, за&amp;nbsp;который будут показаны звонки.
Может принимать следующие значения:
**Today** &amp;ndash; сегодня;
**Yesterday** &amp;ndash; вчера;
**3 days** &amp;ndash; три&amp;nbsp;дня;
**7 days** &amp;ndash; семь дней, не&amp;nbsp;включая текущий день;
**Month** &amp;ndash; текущий месяц;
**Last month** &amp;ndash; предыдущий месяц;
**Period** &amp;ndash; период, заданный вручную полями From-To.  
Значение по&amp;nbsp;умолчанию: Today.
||&lt;br />
||**Period from**|
Дата начала периода, за&amp;nbsp;который будет выбираться статистика &amp;ndash; задается вручную.
||&lt;br />
||**Period to**|
Дата окончания периода, за&amp;nbsp;который будет выбираться статистика &amp;ndash; задается вручную.
||&lt;br />
||**Last 24 hour**|
Дополнительный фильтр, позволяющий выставлять временной интервал в&amp;nbsp;часах за&amp;nbsp;определенный период времени.
''''''''
||&lt;br />
||**First numbers of&amp;nbsp;destination**|
Позволяет выводить статистику по&amp;nbsp;прошедшим звонкам по&amp;nbsp;конкретному направлению, код&amp;nbsp;которого задается в&amp;nbsp;ручную.
''''''''
||&lt;br />
||**Graph type**|
Графическое отображение статистики по&amp;nbsp;прошедшим звонкам. График может строиться по&amp;nbsp;следующим значениям:
**Calls count** &amp;ndash; на&amp;nbsp;графике будет показана диаграмма успешных звонков по&amp;nbsp;отношению к&amp;nbsp;общему количеству звонков за&amp;nbsp;определенный период времени;
**Minutes** &amp;ndash; на&amp;nbsp;графике будет показана диаграмма средней продолжительности звонков в&amp;nbsp;минутах за&amp;nbsp;определенный период времени;
''''''''
||&lt;br />
В&amp;nbsp;форме присутствуют следующие кнопки управления:&lt;br />
||**Кнопка**|**Назначение**||&lt;br />
||----||&lt;br />
||**Show stat**|
Показать статистику по&amp;nbsp;прошедшим звонкам.
||&lt;br />
||**Show graph**|
Показать статистику по&amp;nbsp;прошедшим звонкам в&amp;nbsp;виде графического отображения. 
||&lt;br />
В&amp;nbsp;таблице статистики звонков по&amp;nbsp;направлениям отображается следующая сводная информация:&lt;br />
||**Поле**|**Назначение**||&lt;br />
||----||&lt;br />
||**Destination**|
Название направления.
''''''''
||&lt;br />
||**All Minutes**|
Общее количество минут.
''''''''
||&lt;br />
||**All calls**|
Общее количество звонков.
''''''''
||&lt;br />
||**Success calls**|
Количество успешных звонков, у&amp;nbsp;которых код&amp;nbsp;возврата – 16, 17 и&amp;nbsp;19.
''''''''
||&lt;br />
||**Short calls**|
Процент коротких звонков, у&amp;nbsp;которых продолжительность меньше 30 секунд.
''''''''
||&lt;br />
||**Cost**|
Стоимость общего количества минут.
''''''''
||&lt;br />
||**ASR**|
Процент успешных дозвонов.
''''''''
||&lt;br />
||**Complete Calls**|
Процент ненулевых звонков.
''''''''
||&lt;br />
||**ACD**|
Средняя продолжительность разговора в&amp;nbsp;минутах.
''''''''
||&lt;br />
||**Percent**|
Процент нулевых звонков.
''''''''
||&lt;br />
||**Summary**|
Общий результат сводной информации по&amp;nbsp;всем направлениям, на&amp;nbsp;которые проходили звонки.
''''''''
||&lt;br />
См.&amp;nbsp;рис.:&lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer45.png" alt=" (6&amp;nbsp;Кб)" title=" (6&amp;nbsp;Кб)" width='1257' height='211' />&lt;br />
||**Примечание:** При&amp;nbsp;необходимости данные статистики звонков по&amp;nbsp;направлениям можно сохранить в&amp;nbsp;файл формата .csv, воспользовавшись ссылкой «Excel version».||&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;img src="http://78.46.73.113/wiki/files/uncon.jpg" alt=" (22&amp;nbsp;Кб)" title=" (22&amp;nbsp;Кб)" width='339' height='258' />&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-07-19 18:59:48</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations/show&amp;time=2007-07-19+18%3A59%3A48</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations&amp;amp;v=18vo" class="">/Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Раздел&amp;nbsp;Partners&amp;nbsp;/&amp;nbsp;Форма&amp;nbsp;Statistic&amp;nbsp;By&amp;nbsp;Destinations&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations&amp;amp;time=2007-07-19+18%3A59%3A48">2007-07-19 18:59:48&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaStatisticByDestinations&amp;amp;time=2007-07-19+19%3A01%3A51">2007-07-19 19:01:51&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;a href="#ФормаStatisticByDestinations" name="oФормаStatisticByDestinations">Форма &amp;#147;Statistic by&amp;nbsp;Destinations&amp;#148;&lt;/a>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="ФормаStatisticByDestinations" href="#ФормаStatisticByDestinations" title="">&lt;/a>
&lt;!--/notypo-->&lt;a name="h192-1">&lt;/a>&lt;h2>Форма &amp;#147;Statistic by&amp;nbsp;Destinations&amp;#148;&lt;/h2>
||**((/ДокументацияIPStudioAMBS &amp;lt;&amp;lt; Назад))**| **((#PageTopLink &amp;lt; Наверх &amp;gt;))**|**((ФормаDetailStatistic Вперед &amp;gt;&amp;gt;))**||&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">Форма &amp;#147;Statistic by&amp;nbsp;Destinations&amp;#148;&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ФормаStatisticByDestinations/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="1" href="#1" title="">&lt;/a>
&lt;!--/notypo-->&lt;a name="h192-1">&lt;/a>&lt;h2>Форма&lt;/h2>
||**((/ДокументацияIPStudioAMBS &amp;lt;&amp;lt; Назад))**| **((#PageTopLink &amp;lt; Наверх &amp;gt;))**|**((!/ФормаUsers Вперед &amp;gt;&amp;gt;))**||&lt;/div>&lt;/div>
</description>
</item>
</channel>
</rss>
