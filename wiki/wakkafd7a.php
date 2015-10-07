<?xml version="1.0" encoding="windows-1251"?>
<rss version="2.0">
<channel>
<title>IpstudioWiki - ДокументацияIPStudioAMBS/РазделPartners/ФормаDetailStatistic</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ДокументацияIPStudioAMBS/РазделPartners/ФормаDetailStatistic</link>
<description>History/revisions of IpstudioWiki/ДокументацияIPStudioAMBS/РазделPartners/ФормаDetailStatistic</description>
<language>en-us</language>
<item>
<title>2007-07-19 19:02:42</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic/show&amp;time=2007-07-19+19%3A02%3A42</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a name=".dokumentacijaipstudioambs.razdelpartners.formadetailstatistic" href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic&amp;amp;v=pvq" class="">/Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Раздел&amp;nbsp;Partners&amp;nbsp;/&amp;nbsp;Форма&amp;nbsp;Detail&amp;nbsp;Statistic&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic&amp;amp;time=2007-07-19+19%3A02%3A42">2007-07-19 19:02:42&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic">2007-08-17 14:12:55&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">Форма предназначена для&amp;nbsp;просмотра детальной статистики по&amp;nbsp;прошедшим звонкам за&amp;nbsp;выбранный период времени.&lt;br />
Внешний вид&amp;nbsp;формы показан на&amp;nbsp;следующем рисунке: &lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer46.png" alt=" (6&amp;nbsp;Кб)" title=" (6&amp;nbsp;Кб)" width='1141' height='203' />&lt;br />
Левая часть формы служит для&amp;nbsp;выбора доступных операторов и&amp;nbsp;установки фильтров для&amp;nbsp;получения детальной статистики.&lt;br />
Правая часть позволяет выбрать период времени, за&amp;nbsp;который будете показана статистика и&amp;nbsp;тип статистики. &lt;br />
Описание полей формы:&lt;br />
||**Поле**|**Назначение**||&lt;br />
||----||&lt;br />
||**Select operator**|
Позволяет выбрать для&amp;nbsp;просмотра доступного оператора по&amp;nbsp;нескольким параметрам: 
**Originate** &amp;ndash; просмотр доступного оператора только по&amp;nbsp;оригинации;
**Terminate** &amp;ndash; просмотр доступного оператора только по&amp;nbsp;терминации;
**All ip** &amp;ndash; просмотр статистики по&amp;nbsp;звонкам от&amp;nbsp;доступного оператора по&amp;nbsp;всем или&amp;nbsp;по&amp;nbsp;конкретному MTVS-серверам. Значение по&amp;nbsp;умолчанию &amp;ndash; all&amp;nbsp;ip;
**All sites** &amp;ndash; просмотр статистики звонков по&amp;nbsp;всем или&amp;nbsp;по&amp;nbsp;отдельно взятому сайтам доступного оператора. Значение по&amp;nbsp;умолчанию &amp;ndash; all&amp;nbsp;sites.
||&lt;br />
||**Destination code**|
Фильтр по&amp;nbsp;номеру. Если требуется получить список звонков, начинающихся на&amp;nbsp;определенные цифры номера, их&amp;nbsp;следует ввести в&amp;nbsp;этом поле.
||&lt;br />
||**Source number**|
Фильтр по&amp;nbsp;шлюзу. Адрес исходящего шлюза, с&amp;nbsp;которого поступает звонок.
||&lt;br />
||**Used currency**|
Тип&amp;nbsp;валюты, которая будет использоваться для&amp;nbsp;вывода результатов.
||&lt;br />
||**Records count**|
Количество строк, которые будут показаны на&amp;nbsp;дисплее ПК&amp;nbsp;за один раз. Может принимать следующие значения: 10, 20, 30, 50, 100 или&amp;nbsp;All (все).
||&lt;br />
||**Show**|
Тип&amp;nbsp;звонков, показываемых на&amp;nbsp;дисплее ПК. 
Может принимать следующие значения:
**All** &amp;ndash; показать все&amp;nbsp;звонки;
**Not zero calls** &amp;ndash; показать только ненулевые звонки;
**Zero calls only** &amp;ndash; показать только нулевые звонки;
**Not calculated calls** &amp;ndash; показать не&amp;nbsp;тарифицированные звонки. Звонки, для&amp;nbsp;которых система не&amp;nbsp;может найти тарифные планы для&amp;nbsp;их&amp;nbsp;тарификации;
**Not calculated calls (term)** &amp;ndash; все&amp;nbsp;звонки, не&amp;nbsp;тарифицированные оригинирующим оператором;
**Not calculated calls (orig)** &amp;ndash; все&amp;nbsp;звонки, не&amp;nbsp;тарифицированные терминирующим оператором;
Значение по&amp;nbsp;умолчанию &amp;ndash; All.
||&lt;br />
||**Output to**|
Фильтр отображения. Куда будет выведен результат.
Может принимать следующие значения: 
**Display** &amp;ndash; вывести на&amp;nbsp;дисплей ПК;
**File** &amp;ndash; записать в&amp;nbsp;файл. Система сформирует файл формата .scv, совместимого с&amp;nbsp;программой «Excel».
Значение по&amp;nbsp;умолчанию: display
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
Значение по&amp;nbsp;умолчанию &amp;ndash; Today.
||&lt;br />
||**Period from**|
Дата начала периода, за&amp;nbsp;который будет выбираться статистика – задается вручную.
||&lt;br />
||**Period to**|
Дата окончания периода, за&amp;nbsp;который будет выбираться статистика – задается вручную.
||&lt;br />
||**Select time from-to**|
Часовой интервал. Если необходимо просмотреть статистику за&amp;nbsp;конкретный интервал времени в&amp;nbsp;течение дня, например, с&amp;nbsp;14:00 до&amp;nbsp;18:00, в&amp;nbsp;этих полях следует указать период, за&amp;nbsp;который будет выводиться статистика.
||&lt;br />
||**Time difference (hours)**|
Сдвиг часового пояса в&amp;nbsp;часах. Используется при&amp;nbsp;сверке статистик звонков с&amp;nbsp;другими операторами. 
Значение по&amp;nbsp;умолчанию: 0 часов.
||&lt;br />
В&amp;nbsp;форме присутствуют следующие кнопки управления:&lt;br />
||**Кнопка**|**Назначение**||&lt;br />
||----||&lt;br />
||**Show calls**|
Показать статистику по&amp;nbsp;звонкам с&amp;nbsp;учетом заданных в&amp;nbsp;форме раздела параметров. 
||&lt;br />
||**Parameters list**|
Форма полей отображения. Открывает окно с&amp;nbsp;полями,  которые будут показаны в&amp;nbsp;статистике для&amp;nbsp;каждого звонка. Поля соответствуют полям логов MVTS-сервера.
||&lt;br />
При&amp;nbsp;просмотре детальной статистики, отображаемые поля с&amp;nbsp;параметрами  звонков можно регулировать в&amp;nbsp;секции «Operators parameters», которая вызывается кнопкой «Parameters list»:&lt;br />
||**Поле**|**Назначение**||&lt;br />
||----||&lt;br />
||**Ip**|
Адрес шлюза оператора.
||&lt;br />
||**User**|
Пользователь, зарегистрированный на&amp;nbsp;MVTS-сервере.
||&lt;br />
||**Bytes in**|
Количество байт, принятых от&amp;nbsp;оператора.
||&lt;br />
||**Bytes out**|
Количество байт, отправленных оператору.
||&lt;br />
||**Number in**|
Входящий номер, с&amp;nbsp;которого был&amp;nbsp;отправлен звонок на&amp;nbsp;входе.
||&lt;br />
||**Number bill**|
Входящий номер, с&amp;nbsp;которого был&amp;nbsp;отправлен звонок.
||&lt;br />
||**DST_NAME**|
Название направления, через которое проходят звонки.
||&lt;br />
||**Cost**|
Стоимость звонка.
||&lt;br />
||**Price**|
Цена единицы времени звонка.
||&lt;br />
||**Client_price**|
Цена единицы времени звонка оператора, доступного для&amp;nbsp;просмотра.
||&lt;br />
||**Client_cost**|
Стоимость звонка по&amp;nbsp;цене оператора, доступного для&amp;nbsp;просмотра.
||&lt;br />
||**Connection time**|
Время начала звонка.
||&lt;br />
||**Disconnection time**|
Время окончания звонка.
||&lt;br />
||**Session time**|
Продолжительность сессии звонка.
||&lt;br />
||**Setup time**|
Время установки соединения.
||&lt;br />
||**Bill date**|
Дата прохождения звонка.
||&lt;br />
||**Bill time**|
Время прохождения звонка.
||&lt;br />
||**Local time**|
Локальное время оператора, доступного для&amp;nbsp;просмотра. Если будет задан параметр «Time difference», время в&amp;nbsp;этом поле будет отображаться с&amp;nbsp;учетом заданной разницы во&amp;nbsp;времени.
||&lt;br />
||**Confid**|
Идентификатор конфигурации, которая использовалась для&amp;nbsp;звонков.
||&lt;br />
||**Callid**|
Идентификатор звонка.
||&lt;br />
||**Disconnect code**|
Код&amp;nbsp;MVTS-сервера при&amp;nbsp;завершении звонка, показывает сторону, инициализировавшую разрыв.
||&lt;br />
||**Q931 code**|
Код, генерируемый MVTS-сервером при&amp;nbsp;завершении звонка. Детальнее коды описаны в&amp;nbsp;**((/РазделПриложений/ПриложениеQ931#ПриложениеQ931 «Приложении А»))** данного руководства.
||&lt;br />
||**Codec**|
Кодек, использованный при&amp;nbsp;прохождении звонка (входящий и&amp;nbsp;исходящий).
||&lt;br />
||**Route retries**|
Количество попыток маршрутизации звонка.
||&lt;br />
||**QOS**|
Параметр качества сервиса. Берется с&amp;nbsp;MVTS-сервера.
||&lt;br />
||**Lar fault reason**|
Поле MVTS-сервера, коды причин отказа.
||&lt;br />
По&amp;nbsp;умолчанию детальная статистика выводится с&amp;nbsp;такими полями, см.&amp;nbsp;рис.:&lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer47.png" alt=" (5&amp;nbsp;Кб)" title=" (5&amp;nbsp;Кб)" width='770' height='212' />&lt;br />
Также, наряду с&amp;nbsp;детальной статистикой выводится суммарная статистика, в&amp;nbsp;таблице которой отображается следующая сводная информация:&lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer48.png" alt=" (2&amp;nbsp;Кб)" title=" (2&amp;nbsp;Кб)" width='191' height='97' />&lt;br />
||**Поле**|**Назначение**||&lt;br />
||----||&lt;br />
||**All rings**|
Общее количество звонков по&amp;nbsp;направлениям.
||&lt;br />
||**Success rings**|
Количество успешных звонков, у&amp;nbsp;которых код&amp;nbsp;возврата – 16, 17 и&amp;nbsp;19.
||&lt;br />
||**ASR**|
Процент успешных дозвонов.
||&lt;br />
||**ACD**|
Средняя продолжительность разговора в&amp;nbsp;минутах.
||&lt;br />
||**Short calls**|
Процент коротких звонков, у&amp;nbsp;которых продолжительность меньше 30 секунд.
||&lt;br />
||**All minutes**|
Общее количество минут.
||&lt;br />
||**Clients sum**|
Сумма денежных средств на&amp;nbsp;балансе оператора.
||&lt;br />
||**SUM Terminate (Originate) (у.е.)**|
Сумма терминации (оригинации) за&amp;nbsp;прошедший объем трафика.
||&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;img src="http://78.46.73.113/wiki/files/uncon.jpg" alt=" (22&amp;nbsp;Кб)" title=" (22&amp;nbsp;Кб)" width='339' height='258' />&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-07-19 19:00:21</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic/show&amp;time=2007-07-19+19%3A00%3A21</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic&amp;amp;v=pvq" class="">/Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Раздел&amp;nbsp;Partners&amp;nbsp;/&amp;nbsp;Форма&amp;nbsp;Detail&amp;nbsp;Statistic&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic&amp;amp;time=2007-07-19+19%3A00%3A21">2007-07-19 19:00:21&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaDetailStatistic&amp;amp;time=2007-07-19+19%3A02%3A42">2007-07-19 19:02:42&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;a href="#ФормаDetailStatistic" name="oФормаDetailStatistic">Форма &amp;#147;Detailed Statistic&amp;#148;&lt;/a>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="ФормаDetailStatistic" href="#ФормаDetailStatistic" title="">&lt;/a>
&lt;!--/notypo-->&lt;a name="h193-1">&lt;/a>&lt;h2>Форма &amp;#147;Detailed Statistic&amp;#148;&lt;/h2>
||**((ФормаStatisticByDestinations &amp;lt;&amp;lt; Назад))**| **((#PageTopLink &amp;lt; Наверх &amp;gt;))**|**((ФормаClientRates Вперед &amp;gt;&amp;gt;))**||&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">Форма &amp;#147;Detailed Statistic&amp;#148;&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ФормаDetailStatistic/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="1" href="#1" title="">&lt;/a>
&lt;!--/notypo-->&lt;a name="h193-1">&lt;/a>&lt;h2>Форма&lt;/h2>
||**((/ДокументацияIPStudioAMBS &amp;lt;&amp;lt; Назад))**| **((#PageTopLink &amp;lt; Наверх &amp;gt;))**|**((!/ФормаUsers Вперед &amp;gt;&amp;gt;))**||&lt;/div>&lt;/div>
</description>
</item>
</channel>
</rss>
