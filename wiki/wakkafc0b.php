<?xml version="1.0" encoding="windows-1251"?>
<rss version="2.0">
<channel>
<title>IpstudioWiki - НастройкаСкриптаПроверкиСостоянияRadiusа</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=НастройкаСкриптаПроверкиСостоянияRadiusа</link>
<description>History/revisions of IpstudioWiki/НастройкаСкриптаПроверкиСостоянияRadiusа</description>
<language>en-us</language>
<item>
<title>2009-09-24 14:43:22</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa/show&amp;time=2009-09-24+14%3A43%3A22</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a name=".nastrojjkaskriptaproverkisostojanijaradiusa" href="http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa&amp;amp;v=4mq" class="">/Настройка&amp;nbsp;Скрипта&amp;nbsp;Проверки&amp;nbsp;Состояния&amp;nbsp;Radiusа&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa&amp;amp;time=2009-09-24+14%3A43%3A22">2009-09-24 14:43:22&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa">2009-10-16 17:34:14&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">4. Отредактировать скрипт указать почтовый адрес куда скрипт будет присылать письма в&amp;nbsp;случае возникновения ошибок.&lt;br />
&lt;div class="indent">vi /usr/local/billing/scripts/check.sh&lt;br />
исправить значение строки: &lt;br />
MAIL_TO='admin@mydomain.com'&lt;/div>
Cервер будет регулярно выполнять скрипт &amp;laquo;billing/scripts/check.sh&amp;raquo; каждые 15 минут в&amp;nbsp;течении суток. &lt;br />
&lt;ul>&lt;li> Результаты проверки скрипт будет записывать в&amp;nbsp;лог-файл &amp;laquo;billing/logs/defradpwtst.log&amp;raquo;&lt;/li>&lt;/ul>&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">После этого сервер начнет выполнять скрипт &amp;laquo;billing/scripts/check.sh&amp;raquo; каждые 15 минут в&amp;nbsp;течении суток. &lt;br />
&lt;ul>&lt;li> Результаты проверки скрипт будет записывать в&amp;nbsp;лог-файл &amp;laquo;billing/scripts/check.sh&amp;raquo;&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2009-09-15 10:34:21</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa/show&amp;time=2009-09-15+10%3A34%3A21</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa&amp;amp;v=4mq" class="">/Настройка&amp;nbsp;Скрипта&amp;nbsp;Проверки&amp;nbsp;Состояния&amp;nbsp;Radiusа&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa&amp;amp;time=2009-09-15+10%3A34%3A21">2009-09-15 10:34:21&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=NastrojjkaSkriptaProverkiSostojanijaRadiusa&amp;amp;time=2009-09-24+14%3A43%3A22">2009-09-24 14:43:22&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;div class="indent">&lt;div class="indent">chmod +x /usr/local/billing/scripts/* &lt;/div>&lt;/div>&lt;/div>&lt;/div>
</description>
</item>
</channel>
</rss>
