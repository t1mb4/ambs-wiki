<?xml version="1.0" encoding="windows-1251"?>
<rss version="2.0">
<channel>
<title>IpstudioWiki - ДокументацияIPStudioAMBS/РазделPartners/ФормаClientRates</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ДокументацияIPStudioAMBS/РазделPartners/ФормаClientRates</link>
<description>History/revisions of IpstudioWiki/ДокументацияIPStudioAMBS/РазделPartners/ФормаClientRates</description>
<language>en-us</language>
<item>
<title>2007-07-19 19:03:42</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates/show&amp;time=2007-07-19+19%3A03%3A42</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a name=".dokumentacijaipstudioambs.razdelpartners.formaclientrates" href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates&amp;amp;v=ql2" class="">/Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Раздел&amp;nbsp;Partners&amp;nbsp;/&amp;nbsp;Форма&amp;nbsp;Client&amp;nbsp;Rates&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates&amp;amp;time=2007-07-19+19%3A03%3A42">2007-07-19 19:03:42&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates">2007-08-17 14:13:58&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">Данная форма предназначена для&amp;nbsp;просмотра тарифных планов доступных операторов.&lt;br />
Внешний вид&amp;nbsp;формы представлен на&amp;nbsp;следующем рисунке:&lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer49.png" alt=" (2&amp;nbsp;Кб)" title=" (2&amp;nbsp;Кб)" width='737' height='116' />&lt;br />
Описание полей формы:&lt;br />
||**Поле**|**Назначение**||&lt;br />
||----||&lt;br />
||**Select a&amp;nbsp;rate name**|
Позволяет выбрать из&amp;nbsp;списка тарифный план доступного оператора.
||&lt;br />
||**Rates list rows count**|
Количество выводимых направлений тарифного плана на&amp;nbsp;дисплей ПК, за&amp;nbsp;один раз. Может принимать следующие значения:10, 20, 30, 50, 100 или&amp;nbsp;All (все).
||&lt;br />
||**Dest number**|	
Фильтр цифр кода направления. В&amp;nbsp;листе направлений тарифного плана будут показаны только те&amp;nbsp;направления, код&amp;nbsp;которых начинается (или соответствует) с&amp;nbsp;указанных цифр.
''''''''
||&lt;br />
В&amp;nbsp;форме присутствуют следующие кнопки управления:&lt;br />
||**Кнопка**|**Назначение**||&lt;br />
||----||&lt;br />
||**Filter**|	
Осуществляет поиск по&amp;nbsp;цифрам кода направления.
''''''''
||&lt;br />
||**Current**|
Активные направления. Будут показаны только активные на&amp;nbsp;данный момент времени направления. Под&amp;nbsp;активными направлениями понимаются все&amp;nbsp;направления, у&amp;nbsp;которых текущая дата попадает в&amp;nbsp;период между «Start date» и&amp;nbsp;«Stop date» этих направлений.
''''''''
||&lt;br />
||**History**|
Полный список направлений. Будут показаны все&amp;nbsp;направления, включая записи, которые работали в&amp;nbsp;прошлом, и&amp;nbsp;будут работать в&amp;nbsp;будущем.
''''''''
||&lt;br />
||**Format_string**|
Система будет экспортировать все&amp;nbsp;записи направлений с&amp;nbsp;учетом регулярных выражений системы (коды направлений будут записаны в&amp;nbsp;универсальной форме с&amp;nbsp;сокращениями).
''''''''
||&lt;br />
||**Comma delimited**|
Все&amp;nbsp;коды направлений будут записаны через запятую.
''''''''
||&lt;br />
После выбора тарифного плана из&amp;nbsp;списка, будет показан лист с&amp;nbsp;его направлениями с&amp;nbsp;учетом всех установленных фильтров:&lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer19.png" alt=" (6&amp;nbsp;Кб)" title=" (6&amp;nbsp;Кб)" width='1012' height='198' />&lt;br />
В&amp;nbsp;данном случае был&amp;nbsp;использован фильтр активных направлений &amp;ndash; «current», этот фильтр используется по&amp;nbsp;умолчанию, чтобы не&amp;nbsp;загружать экран лишней информацией &amp;ndash; направлениями, которые в&amp;nbsp;данный момент не&amp;nbsp;активны.&lt;br />
Если изменить значение фильтра активности на&amp;nbsp;«history», система покажет полный список направлений в&amp;nbsp;тарифном плане: направления, которые работали раньше, работают сейчас и&amp;nbsp;будут работать в&amp;nbsp;будущем. Например, предположим, что&amp;nbsp;сегодня &amp;ndash; &lt;span class="nobr">12&amp;ndash;02&amp;ndash;20&lt;/span>07, тогда при&amp;nbsp;просмотре выше показанного тарифного плана с&amp;nbsp;использованием фильтра активности «history», мы&amp;nbsp;получим следующий вид:&lt;br />
&lt;img src="http://78.46.73.113/wiki/files/primer18.png" alt=" (7&amp;nbsp;Кб)" title=" (7&amp;nbsp;Кб)" width='1012' height='256' />&lt;br />
Как&amp;nbsp;видно из&amp;nbsp;рисунка, в&amp;nbsp;данном случае направлений больше. Следует обратить внимание на&amp;nbsp;даты активности направлений. Разберем их&amp;nbsp;по порядку:&lt;br />
&lt;ul>&lt;li>Kyrgyzstan Bishkek (996312) &amp;ndash; Направление закрыто галочкой Closed и&amp;nbsp;имеет цену 0 &amp;ndash; так&amp;nbsp;добавляется в&amp;nbsp;тарифный план единичное направление. После добавления такое направление следует отредактировать с&amp;nbsp;учетом его&amp;nbsp;цены и&amp;nbsp;периода активности. На&amp;nbsp;данный момент на&amp;nbsp;это направление трафик проходить не&amp;nbsp;будет; &lt;/li>&lt;/ul>
||**Примечание:** Для&amp;nbsp;дилерской группы редактирование направления недоступно.||&lt;br />
&lt;!--notypo-->&lt;textarea class="code" rows="5" readonly="readonly">*Russia Moscow (7495) - Для этого направления присутствуют две записи: первая с периодом работы «2006-02-10» - «2007-06-10» будет активна на данный момент времени. Текущая дата 2007-02-12 попадает в интервал между «Start» и «Stop»-датами работы направления. Вторая запись «2007-06-10» - «9999-01-01» с новой ценой будет активна в будущем, с 2007-06-10;
  
  *Russia st.Petersburg(7812) - Также имеем две записи: первая с периодом работы «2005-01-01» - «2006-02-10» - прошедший период работы, по которому направление работало раньше со старой ценой. Вторая запись «2007-02-10» - «9999-01-01» активна на данный момент времени - запись с текущей ценой.
||**Примечание:** Дата вида «9999-01-01» означает в системе открытую дату, без конкретного срока завершения работы.||&lt;/textarea>&lt;!--/notypo-->&lt;br />
При&amp;nbsp;необходимости выбранный тарифный план можно сохранить в&amp;nbsp;файл формата .csv, воспользовавшись кнопкой «Excel version» внизу листа направлений. При&amp;nbsp;этом все&amp;nbsp;направления в&amp;nbsp;файле будут записаны с&amp;nbsp;учетом выбранного вами формата записи кодов: format_string или&amp;nbsp;comma_delimited.&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;img src="http://78.46.73.113/wiki/files/uncon.jpg" alt=" (22&amp;nbsp;Кб)" title=" (22&amp;nbsp;Кб)" width='339' height='258' />&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-07-19 19:00:27</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates/show&amp;time=2007-07-19+19%3A00%3A27</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates&amp;amp;v=ql2" class="">/Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Раздел&amp;nbsp;Partners&amp;nbsp;/&amp;nbsp;Форма&amp;nbsp;Client&amp;nbsp;Rates&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates&amp;amp;time=2007-07-19+19%3A00%3A27">2007-07-19 19:00:27&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelPartners/FormaClientRates&amp;amp;time=2007-07-19+19%3A03%3A42">2007-07-19 19:03:42&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;a href="#ФормаClientRates" name="oФормаClientRates">Форма &amp;#147;Client Rates&amp;#148;&lt;/a>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="ФормаClientRates" href="#ФормаClientRates" title="">&lt;/a>
&lt;!--/notypo-->&lt;a name="h194-1">&lt;/a>&lt;h2>Форма &amp;#147;Client Rates&amp;#148;&lt;/h2>
||**((ФормаDetailStatistic &amp;lt;&amp;lt; Назад))**| **((#PageTopLink &amp;lt; Наверх &amp;gt;))**|**((/ДокументацияIPStudioAMBS Вперед &amp;gt;&amp;gt;))**||&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">Форма &amp;#147;Client Rates&amp;#148;&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ФормаClientRates/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="1" href="#1" title="">&lt;/a>
&lt;!--/notypo-->&lt;a name="h194-1">&lt;/a>&lt;h2>Форма&lt;/h2>
||**((/ДокументацияIPStudioAMBS &amp;lt;&amp;lt; Назад))**| **((#PageTopLink &amp;lt; Наверх &amp;gt;))**|**((!/ФормаUsers Вперед &amp;gt;&amp;gt;))**||&lt;/div>&lt;/div>
</description>
</item>
</channel>
</rss>
