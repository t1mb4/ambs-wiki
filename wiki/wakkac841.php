<?xml version="1.0" encoding="windows-1251"?>
<rss version="2.0">
<channel>
<title>IpstudioWiki - ЧастыеВопросыИответыПоАМБС/MvtsВопросы</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ЧастыеВопросыИответыПоАМБС/MvtsВопросы</link>
<description>History/revisions of IpstudioWiki/ЧастыеВопросыИответыПоАМБС/MvtsВопросы</description>
<language>en-us</language>
<item>
<title>2010-05-11 14:13:49</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+14%3A13%3A49</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a name=".chastyevoprosyiotvetypoambs.mvtsvoprosy" href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A13%3A49">2010-05-11 14:13:49&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy">2010-09-17 14:35:10&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT6" name="oMVTSTT6">Обновленный файл gateway.cfg записывается в&amp;nbsp;папку Меры, но&amp;nbsp;при этом сама Мера не&amp;nbsp;принимает изменения в&amp;nbsp;работу автоматически, почему?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT6" href="#MVTSTT6" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>Вопрос: Обновленный файл gateway.cfg записывается в&amp;nbsp;папку Меры, но&amp;nbsp;при этом сама Мера не&amp;nbsp;принимает изменения в&amp;nbsp;работу автоматически, почему?&lt;/strong>&lt;br />
Проверьте лог&amp;nbsp;АМБС в&amp;nbsp;который записывает результат последнего обращения к&amp;nbsp;Мере &amp;ndash; &amp;laquo;billing/logs/mera.log&amp;raquo;,&lt;br />
если Мера удаленная лог&amp;nbsp;стоит искать на&amp;nbsp;сервере Меры.&lt;br />
Проверьте, если в&amp;nbsp;логе присутствуют ошибки процесса перезапуска Меры, типа:&lt;br />
&lt;!--notypo-->&lt;div class="code">&lt;pre>&lt;span style="color:#226622"># cat mera.log &lt;/span>
Start
Fri Sep 17 14:11:23 MSD 2010
Update gatekeeper.cfg
/usr/local/mvts/bin/mp_shell.x reload config -d
Non-existent command
#
значит настройки сервера мешают выполнению команды от демона АМБС.
Демон выполняет команду на обновление конфигов Меры от пользователя&lt;span style="color:#4400DD">,&lt;/span> под которым он запущен (&amp;quot;ps aux &lt;span style="color:#4400DD">|&lt;/span> grep billi_sig_svr.pl&amp;quot;).
В приведенном выше примере&lt;span style="color:#4400DD">,&lt;/span> мешали настройки групп пользователей самой Меры(cекция [Console]):&lt;/pre>&lt;/div>&lt;!--/notypo-->(ini)&lt;br />
# grep -ri &amp;#147;gid&amp;#148; mvts/cfg/meraproxy.cfg  &lt;br />
admin_gid=503&lt;br />
billing_gid=504&lt;br />
support_gid=504&lt;br />
#&lt;br />
для&amp;nbsp;примера, если полностью сбросить эти&amp;nbsp;группы и&amp;nbsp;руками обновить рабочие конфиги:&lt;br />
&lt;!--notypo-->&lt;div class="code">&lt;pre>&lt;span style="color:#226622"># grep -ri &amp;quot;gid&amp;quot; mvts/cfg/meraproxy.cfg  &lt;/span>
admin_gid&lt;span style="color:#4400DD">=&lt;/span>0
billing_gid&lt;span style="color:#4400DD">=&lt;/span>0
support_gid&lt;span style="color:#4400DD">=&lt;/span>0
&lt;span style="color:#226622"># mvts/bin/mp_shell.x re co -d&lt;/span>
АМБС уже сможет автоматически выполнять команду на обновление рабочих конфигов Меры:&lt;/pre>&lt;/div>&lt;!--/notypo-->(ini)&lt;br />
# cat&amp;nbsp;mera.log                      &lt;br />
Start&lt;br />
Fri&amp;nbsp;Sep 17 14:12:19 MSD&amp;nbsp;2010&lt;br />
Update gatekeeper.cfg&lt;br />
/usr/local/mvts/bin/mp_shell.x reload config -d&lt;br />
Loading /usr/local/mvts/./cfg/meraproxy.cfg...&lt;br />
Loading gatekeepers...&lt;br />
Loading RAS&amp;nbsp;users...&lt;br />
Loading gateways...&lt;br />
Loading dialpeers...&lt;br />
Reloading successful&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 14:05:31</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+14%3A05%3A31</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A31">2010-05-11 14:05:31&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A13%3A49">2010-05-11 14:13:49&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">Для&amp;nbsp;случая когда Мера используется в&amp;nbsp;режиме &amp;laquo;Маршрутизации&amp;raquo;.&lt;br />
На&amp;nbsp;сервере АМБС, в&amp;nbsp;&amp;laquo;/usr/local/billing/radius/radius.cfg&amp;raquo; проверьте следующие параметры:&lt;br />
Номера портов должны соответствовать портам указанным для&amp;nbsp;этой Меры в&amp;nbsp;форме &amp;#147;Equipments &amp;ndash; MVTS Servers&amp;#148;&lt;br />
Далее на&amp;nbsp;сервере Меры, секция [Radius] в&amp;nbsp;"&lt;em>&amp;lt;MVTS_dir&amp;gt;&lt;/em>/cfg/meraproxy.cfg" должна выглядеть следующим образом(&lt;em>пример&lt;/em>):&lt;br />
secret=&amp;lt;пароль_амбс_радиуса&amp;gt;&lt;br />
Секция [Radius] дописывается автоматически &lt;u>всегда в&amp;nbsp;конец файла&lt;/u>, поэтому она&amp;nbsp;должна быть всегда последней.&lt;br />
В&amp;nbsp;файле "&lt;em>&amp;lt;MVTS_dir&amp;gt;&lt;/em>/cfg/dialpeer.cfg":&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">Прежде всего нужно завести MVTS в&amp;nbsp;AMBS, в&amp;nbsp;форме &lt;u>&lt;a name=".dokumentacijaipstudioambs.razdelequipments.formamvtsservers" href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelEquipments/FormaMvtsServers&amp;amp;v=219" class="" title="Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Раздел&amp;nbsp;Equipments&amp;nbsp;/&amp;nbsp;Форма&amp;nbsp;Mvts&amp;nbsp;Servers">&amp;#147;MVTS Servers&amp;#148;&lt;/a>&lt;/u>.&lt;br />
На&amp;nbsp;втором рисунке показан рабочий пример, можете заполнить форму по&amp;nbsp;аналогии изменив адреса на&amp;nbsp;реальные.&lt;br />
Далее на&amp;nbsp;сервере АМБС, в&amp;nbsp;&amp;laquo;/usr/local/billing/radius/radius.cfg&amp;raquo; проверьте следующие параметры:&lt;br />
Секция [Radius] в&amp;nbsp;&amp;laquo;&lt;em>MVTS&lt;/em>/cfg/meraproxy.cfg&amp;raquo; должна выглядеть следующим образом(&lt;em>пример&lt;/em>):&lt;br />
secret=testing123&lt;br />
Секция радиус дописывается &lt;u>всегда в&amp;nbsp;конец файла&lt;/u>, поэтому она&amp;nbsp;должна быть последней.&lt;br />
И&amp;nbsp;файл &amp;laquo;&lt;em>MVTS&lt;/em>/cfg/dialpeer.cfg&amp;raquo;:&lt;br />
Подключение к&amp;nbsp;удаленной MVTS нужно организовывать по&amp;nbsp;протоколу &amp;#147;sftp&amp;#148;, это&amp;nbsp;гарантирует стабильность и&amp;nbsp;безопасность.&lt;br />
Инструкцию по&amp;nbsp;организации подключения можно прочитать &lt;u>&lt;a name=".dokumentacijaipstudioambs.ustanovkanastrojjkaipstudioambs.podkljuchenieudalennojjmery" href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/UstanovkaNastrojjkaIPStudioAMBS/PodkljuchenieUdalennojjMery&amp;amp;v=n1v" class="" title="Документация&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Установка&amp;nbsp;Настройка&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;Подключение&amp;nbsp;Удаленной&amp;nbsp;Меры">&amp;gt;Здесь&amp;lt;&lt;/a>&lt;/u>.&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 14:05:10</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+14%3A05%3A10</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A10">2010-05-11 14:05:10&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A31">2010-05-11 14:05:31&lt;/a>&lt;/b>&lt;br />
&lt;br />
No differences.&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 13:36:31</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+13%3A36%3A31</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+13%3A36%3A31">2010-05-11 13:36:31&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A10">2010-05-11 14:05:10&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT5" name="oMVTSTT5">В АМБС не&amp;nbsp;поступают данные по&amp;nbsp;онлайн звонкам с&amp;nbsp;Меры. Что&amp;nbsp;делать?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT5" href="#MVTSTT5" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>Вопрос: В&amp;nbsp;АМБС не&amp;nbsp;поступают данные по&amp;nbsp;онлайн звонкам с&amp;nbsp;Меры. Что&amp;nbsp;делать?&lt;/strong>&lt;br />
На&amp;nbsp;MVTS-сервере:&lt;br />
&lt;ul>&lt;li> Проверить свободное место в&amp;nbsp;&amp;laquo;/usr/local/billing/&amp;raquo;
&lt;/li>&lt;li> Сбросить (через kill -9)  и&amp;nbsp;перезапустить демона АМБС &amp;laquo;/usr/local/billing/bin/bill_sig_svr.pl&amp;raquo;&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 12:38:48</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+12%3A38%3A48</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+12%3A38%3A48">2010-05-11 12:38:48&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+13%3A36%3A31">2010-05-11 13:36:31&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">Общие вопросы по&amp;nbsp;работе с&amp;nbsp;системой&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=HowTo/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 11:46:41</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+11%3A46%3A41</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+11%3A46%3A41">2010-05-11 11:46:41&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+12%3A38%3A48">2010-05-11 12:38:48&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;span class="missingpage">Тарифные планы, валюты, цены и&amp;nbsp;направления&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=РаботаСтарифами/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">Тарифные планы, цены и&amp;nbsp;направления&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=РаботаСтарифами/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-04-16 13:36:07</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-04-16+13%3A36%3A07</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-04-16+13%3A36%3A07">2010-04-16 13:36:07&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+11%3A46%3A41">2010-05-11 11:46:41&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;span class="missingpage">Тарифные планы, цены и&amp;nbsp;направления&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=РаботаСтарифами/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">Тарифные платны, цены и&amp;nbsp;направления&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=РаботаСтарифами/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-03-19 15:17:29</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-03-19+15%3A17%3A29</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-03-19+15%3A17%3A29">2010-03-19 15:17:29&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-04-16+13%3A36%3A07">2010-04-16 13:36:07&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;span class="missingpage">Радиус: шлюзы, маршрутизация, трансляция&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=РаботаСшлюзами/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> &lt;/li>&lt;/ul>&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">Шлюзы, маршрутизация и&amp;nbsp;трансляция&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=РаботаСшлюзами/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> &lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-03-19 15:14:48</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-03-19+15%3A14%3A48</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/Частые&amp;nbsp;Вопросы&amp;nbsp;Иответы&amp;nbsp;По&amp;nbsp;АМБС&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;Вопросы&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-03-19+15%3A14%3A48">2010-03-19 15:14:48&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-03-19+15%3A17%3A29">2010-03-19 15:17:29&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT1" name="oMVTSTT1">Что должно быть в&amp;nbsp;конфигах MVTS при&amp;nbsp;добавлении ее&amp;nbsp;в АМБС?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT1" href="#MVTSTT1" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>Вопрос: Что&amp;nbsp;должно быть в&amp;nbsp;конфигах MVTS при&amp;nbsp;добавлении ее&amp;nbsp;в АМБС?&lt;/strong>&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT1" name="oMVTSTT1">Что должно в&amp;nbsp;конфигах MVTS при&amp;nbsp;добавлении ее&amp;nbsp;в АМБС?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT1" href="#MVTSTT1" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>Вопрос: Что&amp;nbsp;должно в&amp;nbsp;конфигах MVTS при&amp;nbsp;добавлении ее&amp;nbsp;в АМБС?&lt;/strong>&lt;/div>&lt;/div>
</description>
</item>
</channel>
</rss>
