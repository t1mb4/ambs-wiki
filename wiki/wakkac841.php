<?xml version="1.0" encoding="windows-1251"?>
<rss version="2.0">
<channel>
<title>IpstudioWiki - ��������������������������/Mvts�������</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=��������������������������/Mvts�������</link>
<description>History/revisions of IpstudioWiki/��������������������������/Mvts�������</description>
<language>en-us</language>
<item>
<title>2010-05-11 14:13:49</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+14%3A13%3A49</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a name=".chastyevoprosyiotvetypoambs.mvtsvoprosy" href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A13%3A49">2010-05-11 14:13:49&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy">2010-09-17 14:35:10&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>���������:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT6" name="oMVTSTT6">����������� ���� gateway.cfg ������������ �&amp;nbsp;����� ����, ��&amp;nbsp;��� ���� ���� ���� ��&amp;nbsp;��������� ��������� �&amp;nbsp;������ �������������, ������?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT6" href="#MVTSTT6" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>������: ����������� ���� gateway.cfg ������������ �&amp;nbsp;����� ����, ��&amp;nbsp;��� ���� ���� ���� ��&amp;nbsp;��������� ��������� �&amp;nbsp;������ �������������, ������?&lt;/strong>&lt;br />
��������� ���&amp;nbsp;���� �&amp;nbsp;������� ���������� ��������� ���������� ��������� �&amp;nbsp;���� &amp;ndash; &amp;laquo;billing/logs/mera.log&amp;raquo;,&lt;br />
���� ���� ��������� ���&amp;nbsp;����� ������ ��&amp;nbsp;������� ����.&lt;br />
���������, ���� �&amp;nbsp;���� ������������ ������ �������� ����������� ����, ����:&lt;br />
&lt;!--notypo-->&lt;div class="code">&lt;pre>&lt;span style="color:#226622"># cat mera.log &lt;/span>
Start
Fri Sep 17 14:11:23 MSD 2010
Update gatekeeper.cfg
/usr/local/mvts/bin/mp_shell.x reload config -d
Non-existent command
#
������ ��������� ������� ������ ���������� ������� �� ������ ����.
����� ��������� ������� �� ���������� �������� ���� �� ������������&lt;span style="color:#4400DD">,&lt;/span> ��� ������� �� ������� (&amp;quot;ps aux &lt;span style="color:#4400DD">|&lt;/span> grep billi_sig_svr.pl&amp;quot;).
� ����������� ���� �������&lt;span style="color:#4400DD">,&lt;/span> ������ ��������� ����� ������������� ����� ����(c����� [Console]):&lt;/pre>&lt;/div>&lt;!--/notypo-->(ini)&lt;br />
# grep -ri &amp;#147;gid&amp;#148; mvts/cfg/meraproxy.cfg  &lt;br />
admin_gid=503&lt;br />
billing_gid=504&lt;br />
support_gid=504&lt;br />
#&lt;br />
���&amp;nbsp;�������, ���� ��������� �������� ���&amp;nbsp;������ �&amp;nbsp;������ �������� ������� �������:&lt;br />
&lt;!--notypo-->&lt;div class="code">&lt;pre>&lt;span style="color:#226622"># grep -ri &amp;quot;gid&amp;quot; mvts/cfg/meraproxy.cfg  &lt;/span>
admin_gid&lt;span style="color:#4400DD">=&lt;/span>0
billing_gid&lt;span style="color:#4400DD">=&lt;/span>0
support_gid&lt;span style="color:#4400DD">=&lt;/span>0
&lt;span style="color:#226622"># mvts/bin/mp_shell.x re co -d&lt;/span>
���� ��� ������ ������������� ��������� ������� �� ���������� ������� �������� ����:&lt;/pre>&lt;/div>&lt;!--/notypo-->(ini)&lt;br />
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
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A31">2010-05-11 14:05:31&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A13%3A49">2010-05-11 14:13:49&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>���������:&lt;/b>&lt;br />
&lt;div class="additions">���&amp;nbsp;������ ����� ���� ������������ �&amp;nbsp;������ &amp;laquo;�������������&amp;raquo;.&lt;br />
��&amp;nbsp;������� ����, �&amp;nbsp;&amp;laquo;/usr/local/billing/radius/radius.cfg&amp;raquo; ��������� ��������� ���������:&lt;br />
������ ������ ������ ��������������� ������ ��������� ���&amp;nbsp;���� ���� �&amp;nbsp;����� &amp;#147;Equipments &amp;ndash; MVTS Servers&amp;#148;&lt;br />
����� ��&amp;nbsp;������� ����, ������ [Radius] �&amp;nbsp;"&lt;em>&amp;lt;MVTS_dir&amp;gt;&lt;/em>/cfg/meraproxy.cfg" ������ ��������� ��������� �������(&lt;em>������&lt;/em>):&lt;br />
secret=&amp;lt;������_����_�������&amp;gt;&lt;br />
������ [Radius] ������������ ������������� &lt;u>������ �&amp;nbsp;����� �����&lt;/u>, ������� ���&amp;nbsp;������ ���� ������ ���������.&lt;br />
�&amp;nbsp;����� "&lt;em>&amp;lt;MVTS_dir&amp;gt;&lt;/em>/cfg/dialpeer.cfg":&lt;/div>&lt;br />
&lt;b>�������:&lt;/b>&lt;br />
&lt;div class="deletions">������ ����� ����� ������� MVTS �&amp;nbsp;AMBS, �&amp;nbsp;����� &lt;u>&lt;a name=".dokumentacijaipstudioambs.razdelequipments.formamvtsservers" href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/RazdelEquipments/FormaMvtsServers&amp;amp;v=219" class="" title="������������&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;������&amp;nbsp;Equipments&amp;nbsp;/&amp;nbsp;�����&amp;nbsp;Mvts&amp;nbsp;Servers">&amp;#147;MVTS Servers&amp;#148;&lt;/a>&lt;/u>.&lt;br />
��&amp;nbsp;������ ������� ������� ������� ������, ������ ��������� ����� ��&amp;nbsp;�������� ������� ������ ��&amp;nbsp;��������.&lt;br />
����� ��&amp;nbsp;������� ����, �&amp;nbsp;&amp;laquo;/usr/local/billing/radius/radius.cfg&amp;raquo; ��������� ��������� ���������:&lt;br />
������ [Radius] �&amp;nbsp;&amp;laquo;&lt;em>MVTS&lt;/em>/cfg/meraproxy.cfg&amp;raquo; ������ ��������� ��������� �������(&lt;em>������&lt;/em>):&lt;br />
secret=testing123&lt;br />
������ ������ ������������ &lt;u>������ �&amp;nbsp;����� �����&lt;/u>, ������� ���&amp;nbsp;������ ���� ���������.&lt;br />
�&amp;nbsp;���� &amp;laquo;&lt;em>MVTS&lt;/em>/cfg/dialpeer.cfg&amp;raquo;:&lt;br />
����������� �&amp;nbsp;��������� MVTS ����� �������������� ��&amp;nbsp;��������� &amp;#147;sftp&amp;#148;, ���&amp;nbsp;����������� ������������ �&amp;nbsp;������������.&lt;br />
���������� ��&amp;nbsp;����������� ����������� ����� ��������� &lt;u>&lt;a name=".dokumentacijaipstudioambs.ustanovkanastrojjkaipstudioambs.podkljuchenieudalennojjmery" href="http://78.46.73.113/wiki/wakka.php?wakka=DokumentacijaIPStudioAMBS/UstanovkaNastrojjkaIPStudioAMBS/PodkljuchenieUdalennojjMery&amp;amp;v=n1v" class="" title="������������&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;���������&amp;nbsp;���������&amp;nbsp;IP&amp;nbsp;Studio&amp;nbsp;AMBS&amp;nbsp;/&amp;nbsp;�����������&amp;nbsp;���������&amp;nbsp;����">&amp;gt;�����&amp;lt;&lt;/a>&lt;/u>.&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 14:05:10</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+14%3A05%3A10</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A10">2010-05-11 14:05:10&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A31">2010-05-11 14:05:31&lt;/a>&lt;/b>&lt;br />
&lt;br />
No differences.&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 13:36:31</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+13%3A36%3A31</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+13%3A36%3A31">2010-05-11 13:36:31&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+14%3A05%3A10">2010-05-11 14:05:10&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>���������:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT5" name="oMVTSTT5">� ���� ��&amp;nbsp;��������� ������ ��&amp;nbsp;������ ������� �&amp;nbsp;����. ���&amp;nbsp;������?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT5" href="#MVTSTT5" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>������: �&amp;nbsp;���� ��&amp;nbsp;��������� ������ ��&amp;nbsp;������ ������� �&amp;nbsp;����. ���&amp;nbsp;������?&lt;/strong>&lt;br />
��&amp;nbsp;MVTS-�������:&lt;br />
&lt;ul>&lt;li> ��������� ��������� ����� �&amp;nbsp;&amp;laquo;/usr/local/billing/&amp;raquo;
&lt;/li>&lt;li> �������� (����� kill -9)  �&amp;nbsp;������������� ������ ���� &amp;laquo;/usr/local/billing/bin/bill_sig_svr.pl&amp;raquo;&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 12:38:48</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+12%3A38%3A48</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+12%3A38%3A48">2010-05-11 12:38:48&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+13%3A36%3A31">2010-05-11 13:36:31&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>�������:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">����� ������� ��&amp;nbsp;������ �&amp;nbsp;��������&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=HowTo/edit&amp;amp;add=1" title="������� ��� ��������">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-05-11 11:46:41</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-05-11+11%3A46%3A41</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+11%3A46%3A41">2010-05-11 11:46:41&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+12%3A38%3A48">2010-05-11 12:38:48&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>���������:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;span class="missingpage">�������� �����, ������, ���� �&amp;nbsp;�����������&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=���������������/edit&amp;amp;add=1" title="������� ��� ��������">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;br />
&lt;b>�������:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">�������� �����, ���� �&amp;nbsp;�����������&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=���������������/edit&amp;amp;add=1" title="������� ��� ��������">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-04-16 13:36:07</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-04-16+13%3A36%3A07</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-04-16+13%3A36%3A07">2010-04-16 13:36:07&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-05-11+11%3A46%3A41">2010-05-11 11:46:41&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>���������:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;span class="missingpage">�������� �����, ���� �&amp;nbsp;�����������&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=���������������/edit&amp;amp;add=1" title="������� ��� ��������">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;br />
&lt;b>�������:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">�������� ������, ���� �&amp;nbsp;�����������&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=���������������/edit&amp;amp;add=1" title="������� ��� ��������">?&lt;/a>&lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-03-19 15:17:29</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-03-19+15%3A17%3A29</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-03-19+15%3A17%3A29">2010-03-19 15:17:29&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-04-16+13%3A36%3A07">2010-04-16 13:36:07&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>���������:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;span class="missingpage">������: �����, �������������, ����������&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=��������������/edit&amp;amp;add=1" title="������� ��� ��������">?&lt;/a> &lt;/li>&lt;/ul>&lt;/div>&lt;br />
&lt;b>�������:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;span class="missingpage">�����, ������������� �&amp;nbsp;����������&lt;/span>&lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=��������������/edit&amp;amp;add=1" title="������� ��� ��������">?&lt;/a> &lt;/li>&lt;/ul>&lt;/div>&lt;/div>
</description>
</item>
<item>
<title>2010-03-19 15:14:48</title>
<link>http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy/show&amp;time=2010-03-19+15%3A14%3A48</link>
<description>&lt;div class="pageBefore">&lt;img src="http://78.46.73.113/wiki/images/z.gif" width="1" height="1" border="0" alt="" style="display:block" align="top" />&lt;/div>&lt;div class="page">
&lt;b>��������� ������ &lt;a  href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;v=61q" class="">/������&amp;nbsp;�������&amp;nbsp;�������&amp;nbsp;��&amp;nbsp;����&amp;nbsp;/&amp;nbsp;Mvts&amp;nbsp;�������&lt;/a> �� &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-03-19+15%3A14%3A48">2010-03-19 15:14:48&lt;/a> � &lt;a href="http://78.46.73.113/wiki/wakka.php?wakka=ChastyeVoprosyIotvetyPoAMBS/MvtsVoprosy&amp;amp;time=2010-03-19+15%3A17%3A29">2010-03-19 15:17:29&lt;/a>&lt;/b>&lt;br />
&lt;br />
&lt;b>���������:&lt;/b>&lt;br />
&lt;div class="additions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT1" name="oMVTSTT1">��� ������ ���� �&amp;nbsp;�������� MVTS ���&amp;nbsp;���������� ��&amp;nbsp;� ����?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT1" href="#MVTSTT1" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>������: ���&amp;nbsp;������ ���� �&amp;nbsp;�������� MVTS ���&amp;nbsp;���������� ��&amp;nbsp;� ����?&lt;/strong>&lt;/div>&lt;br />
&lt;b>�������:&lt;/b>&lt;br />
&lt;div class="deletions">&lt;ul>&lt;li> &lt;u>&lt;a href="#MVTSTT1" name="oMVTSTT1">��� ������ �&amp;nbsp;�������� MVTS ���&amp;nbsp;���������� ��&amp;nbsp;� ����?&lt;/a>&lt;/u>&lt;/li>&lt;/ul>
&lt;!--notypo-->&lt;a name="MVTSTT1" href="#MVTSTT1" title="">&lt;/a>
&lt;!--/notypo-->&lt;strong>������: ���&amp;nbsp;������ �&amp;nbsp;�������� MVTS ���&amp;nbsp;���������� ��&amp;nbsp;� ����?&lt;/strong>&lt;/div>&lt;/div>
</description>
</item>
</channel>
</rss>
