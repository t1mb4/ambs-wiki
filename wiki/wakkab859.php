<?xml version="1.0" encoding="windows-1251"?>
<rss version="2.0">
<channel>
<title>IpstudioWiki - AmbsCardsManual/CardsRadiusStart</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart</link>
<description>History/revisions of IpstudioWiki/AmbsCardsManual/CardsRadiusStart</description>
<language>en-us</language>
<item>
<title>2008-06-11 16:52:55</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2008-06-11+16%3A52%3A55</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a name=".ambscardsmanual.cardsradiusstart" href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2008-06-11+16%3A52%3A55">2008-06-11 16:52:55&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart">2008-06-11 16:57:14&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">При&amp;nbsp;необходимости можно добавить ссылку на&amp;nbsp;скрипт запуска карточного радиуса для&amp;nbsp;автоматического старта радиуса при&amp;nbsp;запуске сервера:&lt;br />
&lt;div class="indent">cd /etc/rc3.d&lt;br />
ln&amp;nbsp;-s /etc/init.d/card.sh /etc/rc3.d/S98card.sh&lt;br />
ls&amp;nbsp;-la&lt;/div>
Результат должен иметь вид:&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->lrwxrwxrwx   1 root root   20 Jun&amp;nbsp;9 07:41 S98billing.sh -&amp;gt; ../init.d/billing.sh&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->lrwxrwxrwx   1 root root   20 Jun&amp;nbsp;11 08:52 S98card.sh -&amp;gt; /etc/init.d/card.sh&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
Скрипт запуска радиуса должен обязательно идти после основного скрипта запуска АМБС.&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2008-06-11 16:52:28</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2008-06-11+16%3A52%3A28</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2008-06-11+16%3A52%3A28">2008-06-11 16:52:28&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2008-06-11+16%3A52%3A55">2008-06-11 16:52:55&lt;/a>&lt;/b>&lt;br />
&lt;br />
No differences.&lt;/div>
</description>
</item>
<item>
<title>2007-09-04 13:43:02</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2007-09-04+13%3A43%3A02</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+13%3A43%3A02">2007-09-04 13:43:02&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2008-06-11+16%3A52%3A28">2008-06-11 16:52:28&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">создайте файл “card.sh”, например, выполнив следующую команду:&lt;br />
&lt;div class="indent">vi card.sh&lt;/div>
3. После того как&amp;nbsp;стартовый скрипт будет создан, его&amp;nbsp;нужно сделать исполняемым:&lt;br />
&lt;div class="indent">chmod 755 /etc/init.d/card.sh&lt;/div>
4. Нужно будет перезапустить радиус на&amp;nbsp;AMBS-сервере, выполнив следующие команды:&lt;br />
&lt;div class="indent">/etc/init.d/card.sh start&lt;/div>
5. После запуска в&amp;nbsp;списке запущенных радиус-процессов у&amp;nbsp;вас должен появится карточный радиус процесс:&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->14895?         S&amp;lt;     1:17 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/radius.cfg -pid_file /usr/local/billing/radius/radius.pid&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->14896?         S&amp;lt;     1:24 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/radius.cfg -pid_file /usr/local/billing/radius/radius.pid&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->14897?         S&amp;lt;     1:22 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/radius.cfg -pid_file /usr/local/billing/radius/radius.pid&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->14898?         S&amp;lt;     1:18 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/radius.cfg -pid_file /usr/local/billing/radius/radius.pid&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->16011?         S&amp;lt;s    0:00 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/card.cfg -pid_file /usr/local/billing/radius/rad_card.pid -log_file /usr/local/billing/radius/card.log&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->&lt;!--/notypo-->16014 pts/1    S+     0:00 grep rad&lt;!--notypo-->&lt;!--/notypo-->&lt;br />
Теперь можно приступать к&amp;nbsp;настройке карточной платформы непосредственно в&amp;nbsp;самом IP&amp;nbsp;Studio AMBS.&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">создайте файл “card”, например, выполнив следующую команду:&lt;br />
&lt;div class="indent">vi card&lt;/div>
Когда вы&amp;nbsp;произведете все&amp;nbsp;необходимые изменения, нужно будет перезапустить радиус на&amp;nbsp;AMBS-сервере, выполнив следующие команды:&lt;br />
&lt;div class="indent">/etc/init.d/card start&lt;/div>
После этого в&amp;nbsp;списке запущенных процессов у&amp;nbsp;вас должно быть три&amp;nbsp;радиус-процесса, как&amp;nbsp;это показано ниже:&lt;br />
&lt;div class="indent">21658?  S&amp;lt; 6:48 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/auth.cfg -pid_file /usr/local/billing/radius/rad_auth.pid&lt;br />
21672?  S&amp;lt; 10:43 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/acct.cfg -pid_file /usr/local/billing/radius/rad_acct.pid&lt;br />
21675?  S&amp;lt; 0:45 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/card.cfg -pid_file /usr/local/billing/radius/rad_card.pid&lt;br />
8203 pts/0 S&amp;nbsp;0:00 grep radius&lt;/div>
Если вы&amp;nbsp;выполнили аналогичную команду у&amp;nbsp;себя на&amp;nbsp;сервере и&amp;nbsp;получили такие же&amp;nbsp;результаты, вы&amp;nbsp;все сделали верно. После этого можете приступить к&amp;nbsp;настройке карточной платформы непосредственно в&amp;nbsp;самом модуле IP&amp;nbsp;Studio AMBS.&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-09-04 13:42:05</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2007-09-04+13%3A42%3A05</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+13%3A42%3A05">2007-09-04 13:42:05&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+13%3A43%3A02">2007-09-04 13:43:02&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">и&amp;nbsp;внесите в&amp;nbsp;этот файл следующие данные:&lt;br />
Когда вы&amp;nbsp;произведете все&amp;nbsp;необходимые изменения, нужно будет перезапустить радиус на&amp;nbsp;AMBS-сервере, выполнив следующие команды:&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">после этого внесите в&amp;nbsp;этот файл следующие данные:&lt;br />
После того, как&amp;nbsp;вы&amp;nbsp;произведете все&amp;nbsp;необходимые изменения, нужно будет перезапустить радиус на&amp;nbsp;AMBS-сервере, выполнив следующие команды:&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-09-04 13:41:38</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2007-09-04+13%3A41%3A38</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+13%3A41%3A38">2007-09-04 13:41:38&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+13%3A42%3A05">2007-09-04 13:42:05&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;div class="indent">/etc/init.d/radius.sh stop&lt;br />
/etc/init.d/radius.sh start&lt;br />
/etc/init.d/card start&lt;/div>&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">/etc/init.d/radius.sh stop&lt;br />
/etc/init.d/radius.sh start&lt;br />
/etc/init.d/card start&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-09-04 11:16:36</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2007-09-04+11%3A16%3A36</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+11%3A16%3A36">2007-09-04 11:16:36&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+13%3A41%3A38">2007-09-04 13:41:38&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">&lt;div class="indent">cd /usr/local/billing/radius/&lt;br />
vi&amp;nbsp;card.cfg&lt;br />
&lt;!--notypo-->DBSource dbi:mysql:database=voip;host=ХХХ.ХХХ.ХХХ.ХХХ;port=3306&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->AuthPort 1912&lt;!--/notypo-->&lt;br />
&lt;!--notypo-->AcctPort 1913&lt;!--/notypo-->&lt;br />
cd&amp;nbsp;/etc/init.d/&lt;br />
vi&amp;nbsp;card&lt;br />
ps&amp;nbsp;ax | grep radius&lt;br />
21658?  S&amp;lt; 6:48 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/auth.cfg -pid_file /usr/local/billing/radius/rad_auth.pid&lt;br />
21672?  S&amp;lt; 10:43 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/acct.cfg -pid_file /usr/local/billing/radius/rad_acct.pid&lt;br />
21675?  S&amp;lt; 0:45 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/card.cfg -pid_file /usr/local/billing/radius/rad_card.pid&lt;br />
8203 pts/0 S&amp;nbsp;0:00 grep radius&lt;/div>&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">cd&amp;nbsp;/usr/local/billing/radius/&lt;br />
vi&amp;nbsp;card.cfg&lt;br />
DBSource dbi:mysql:database=voip;host=ХХХ.ХХХ.ХХХ.ХХХ;port=3306&lt;br />
cd&amp;nbsp;/etc/init.d/&lt;br />
vi&amp;nbsp;card&lt;br />
[root@ХХХ.ХХХ.ХХХ.ХХХ root]# ps&amp;nbsp;ax | grep radius&lt;br />
21658?  S&amp;lt; 6:48 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/auth.cfg -pid_file /usr/local/billing/radius/rad_auth.pid&lt;br />
21672?  S&amp;lt; 10:43 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/acct.cfg -pid_file /usr/local/billing/radius/rad_acct.pid&lt;br />
21675?  S&amp;lt; 0:45 /usr/local/billing/bin/radiusd -config_file /usr/local/billing/radius/card.cfg -pid_file /usr/local/billing/radius/rad_card.pid&lt;br />
8203 pts/0 S&amp;nbsp;0:00 grep radius&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-09-04 11:14:41</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2007-09-04+11%3A14%3A41</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+11%3A14%3A41">2007-09-04 11:14:41&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+11%3A16%3A36">2007-09-04 11:16:36&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-09-03 18:14:11</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2007-09-03+18%3A14%3A11</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-03+18%3A14%3A11">2007-09-03 18:14:11&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-04+11%3A14%3A41">2007-09-04 11:14:41&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
после этого, внесите в&amp;nbsp;этот файл следующие данные:&lt;br />
%&lt;br />
&lt;span class="missingpage">Log&amp;nbsp;Dir&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=LogDir/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> /usr/local/billing/radius/&lt;br />
&lt;span class="missingpage">Db&amp;nbsp;Dir&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DbDir/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> /usr/local/billing/radius/&lt;br />
&lt;span class="missingpage">Auth&amp;nbsp;Port&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AuthPort/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> 1912&lt;br />
&lt;span class="missingpage">Acct&amp;nbsp;Port&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AcctPort/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> 1913&lt;br />
&lt;span class="missingpage">Dup&amp;nbsp;Interval&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=DupInterval/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> 0&lt;br />
&amp;lt;&lt;span class="missingpage">Auth&amp;nbsp;By&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AuthBy/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> CARD&amp;gt;&lt;br />
DBSource dbi:mysql:database=voip;host=ххх.ххх.ххх.ххх;port=3306&lt;br />
DBUsername voip&lt;br />
DBAuth djbg123&lt;br />
LOCK_FILE %&lt;span class="missingpage">Lradius.lock&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=Lradius/lock/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&lt;br />
&amp;lt;&lt;span class="missingpage">/Auth&amp;nbsp;By&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AuthBy/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a>&amp;gt;&lt;br />
%&lt;br />
%&lt;br />
DBSource dbi:mysql:database=voip;host=ХХХ.ХХХ.ХХХ.ХХХ;port=3306&lt;br />
%&lt;br />
%&lt;br />
&lt;span class="missingpage">Auth&amp;nbsp;Port&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AuthPort/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> 1912&lt;br />
&lt;span class="missingpage">Acct&amp;nbsp;Port&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AcctPort/edit&amp;amp;add=1" title="Создать эту страницу">?&lt;/a> 1913&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
echo &amp;laquo;Usage: radiusd {start|stop|restart}"&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;br />
%&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;!--notypo-->LogDir&lt;!--/notypo--> /usr/local/billing/radius/&lt;br />
&lt;!--notypo-->DbDir&lt;!--/notypo--> /usr/local/billing/radius/&lt;br />
&lt;!--notypo-->AuthPort&lt;!--/notypo--> 1912&lt;br />
&lt;!--notypo-->AcctPort&lt;!--/notypo--> 1913&lt;br />
&lt;!--notypo-->DupInterval&lt;!--/notypo--> 0&lt;br />
&amp;lt;&lt;!--notypo-->AuthBy&lt;!--/notypo--> CARD&amp;gt;&lt;br />
&lt;!--notypo-->DBSource&lt;!--/notypo--> dbi:mysql:database=voip;host=ххх.ххх.ххх.ххх;port=3306&lt;br />
&lt;!--notypo-->DBUsername&lt;!--/notypo--> voip&lt;br />
&lt;!--notypo-->DBAuth&lt;!--/notypo--> djbg123&lt;br />
LOCK_FILE %&lt;!--notypo-->Lradius.lock&lt;!--/notypo-->&lt;br />
&amp;lt;/&lt;!--notypo-->AuthBy&lt;!--/notypo-->&amp;gt;&lt;br />
&lt;!--notypo-->DBSource&lt;!--/notypo--> dbi:mysql:database=voip;host=ХХХ.ХХХ.ХХХ.ХХХ;port=3306&lt;br />
&lt;!--notypo-->AuthPort&lt;!--/notypo--> 1912&lt;br />
&lt;!--notypo-->AcctPort&lt;!--/notypo--> 1913&lt;br />
echo Usage: radiusd {start|stop|restart}&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2007-09-03 18:13:34</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart/show&amp;time=2007-09-03+18%3A13%3A34</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>Сравнение версий &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;v=1br" class="">/Ambs&amp;nbsp;Cards&amp;nbsp;Manual&amp;nbsp;/&amp;nbsp;Cards&amp;nbsp;Radius&amp;nbsp;Start&lt;/a> за &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-03+18%3A13%3A34">2007-09-03 18:13:34&lt;/a> и &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=AmbsCardsManual/CardsRadiusStart&amp;amp;time=2007-09-03+18%3A14%3A11">2007-09-03 18:14:11&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>Добавлено:&lt;/b>&lt;br />
&lt;div class="additions">echo -n &amp;laquo;Shutting down authorize radiusd: $rad_pid&amp;raquo;&lt;/div>&lt;br />
&lt;b>Удалено:&lt;/b>&lt;br />
&lt;div class="deletions">echo -n &lt;!--notypo-->&lt;!--/notypo-->&amp;laquo;Shutting down authorize radiusd: $rad_pid&lt;!--notypo-->&lt;!--/notypo-->&amp;raquo;&lt;/div>&lt;/div>
</description>
</item>
</channel>
</rss>
