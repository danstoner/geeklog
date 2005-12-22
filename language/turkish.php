<?php

###############################################################################
# turkish.php
# This is the turkish language page for GeekLog!
# Special thanks to Mischa Polivanov for his work on this project
#
# Copyright (C) 2003 ScriptEvi.com
# webmaster@scriptevi.com
# http://www.scriptevi.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
# - root (user)
###############################################################################

$LANG_CHARSET = 'iso-8859-9';

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# lib-common.php

$LANG01 = array(
    1 => 'Ekleyen:',
    2 => 'devam�',
    3 => 'yorum',
    4 => 'De�i�tir',
    5 => 'Oy Kullan',
    6 => 'Sonu�lar',
    7 => 'Anket Sonu�lar�',
    8 => 'oy',
    9 => 'Y�netici kontrolleri:',
    10 => 'G�nderilenler',
    11 => 'Yaz�lar',
    12 => 'Bloklar',
    13 => 'Konular',
    14 => 'Internet Adresleri',
    15 => 'Etkinlikler',
    16 => 'Anketler',
    17 => 'Kullan�c�lar',
    18 => 'SQL Sorgusu',
    19 => 'Sistemden ��k',
    20 => 'Kullan�c� Bilgileri:',
    21 => 'Kullan�c� Ad�',
    22 => 'Kullan�c� Tan�mlay�c�s�',
    23 => 'G�venlik Seviyesi',
    24 => '�simsiz Kullan�c�',
    25 => 'Yorum Ekle',
    26 => 'A�a��daki yorumlar�n sorumlulu�u g�nderene aittir. Sitemiz herhangi bir sorumluluk kabul etmez.',
    27 => 'En Son',
    28 => 'Sil',
    29 => 'Hi� yorum yap�lmam��.',
    30 => 'Eski Yaz�lar',
    31 => 'Kabul edilen HTML komutlar�:',
    32 => 'Kullan�c� ad�n�z yanl��',
    33 => 'Hata, kay�t dosyas�na yaz�lam�yor',
    34 => 'Hata',
    35 => '��k�� Yap',
    36 => 'on',
    37 => 'Kullan�c�lardan hi� bir yaz� gelmemi�',
    38 => 'Content Syndication',
    39 => 'Yenile',
    40 => 'You have <tt>register_globals = Off</tt> in your <tt>php.ini</tt>. However, Geeklog requires <tt>register_globals</tt> to be <strong>on</strong>. Before you continue, please set it to <strong>on</strong> and restart your web server.',
    41 => 'Misafirler',
    42 => 'Yazar:',
    43 => 'Cevap Ver',
    44 => '�st',
    45 => 'MySQL Hata Numaras�',
    46 => 'MySQL Hata Mesaj�',
    47 => 'Kullan�c�',
    48 => 'Kay�t Bilgileriniz',
    49 => 'G�r�n�m �zellikleri',
    50 => 'SQL komutunda hata var',
    51 => 'yard�m',
    52 => 'Yeni',
    53 => 'Kontrol Ana Sayfas�',
    54 => 'Dosya a��lam�yor.',
    55 => 'Hata',
    56 => 'Oy kullan',
    57 => '�ifre',
    58 => 'Sisteme Gir',
    59 => "Hala �ye de�ilmisiniz?<br><a href=\"{$_CONF['site_url']}/users.php?mode=new\">�ye olun</a>",
    60 => 'Yorum G�nder',
    61 => 'Yeni ',
    62 => 'kelime',
    63 => 'Yorum Ayarlar�',
    64 => 'Bu Yaz�y� bir Arkada��na G�nder',
    65 => 'Bas�labilir Hali',
    66 => 'Takvimim',
    67 => ' ne Ho� Geldiniz',
    68 => 'ana Sayfa',
    69 => 'ileti�im',
    70 => 'ara',
    71 => 'yaz� ekle',
    72 => 'web kaynaklar�',
    73 => 'ge�mi� anketler',
    74 => 'takvim',
    75 => 'geli�mi� arama',
    76 => 'site istatistikleri',
    77 => 'Eklentiler',
    78 => 'Gelecek Etkinlikler',
    79 => 'Yenilikler',
    80 => 'hikaye son',
    81 => 'hikaye son',
    82 => 'saat',
    83 => 'Yorumlar',
    84 => 'Adresler',
    85 => 'son 48 saat',
    86 => 'Hi� yeni yorum yok',
    87 => 'son 2 hafta',
    88 => 'Hi� yeni adres yok',
    89 => 'Hi� etkinlik yok',
    90 => 'Ana Sayfa',
    91 => 'Yarat�lma s�resi:',
    92 => 'saniye',
    93 => 'Copyright',
    94 => 'Bu sayfalarda yay�mlanan materyalin t�m haklar� sahiplerine aittir.',
    95 => 'Powered By:',
    96 => 'Gruplar',
    97 => 'Kelime Listesi',
    98 => 'Eklentiler',
    99 => 'Yaz�lar',
    100 => 'Hi� yeni yaz� yok',
    101 => 'Etkinliklerim',
    102 => 'Site Etkinlikleri',
    103 => 'Veritaban� Yedekleri',
    104 => 'ta. G�nderen:',
    105 => 'Kullan�c�lara Mesaj',
    106 => 'Okunma',
    107 => 'GL S�r�m Testi',
    108 => '�nbelle�i Temizle',
    109 => 'Report abuse',
    110 => 'Report this post to the site admin',
    111 => 'View PDF Version',
    112 => 'Registered Users',
    113 => 'Documentation',
    114 => 'TRACKBACKS',
    115 => 'No new trackback comments',
    116 => 'Trackback',
    117 => 'Directory',
    118 => 'Please continue reading on the next page:',
    119 => "Lost your <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">password</a>?",
    120 => 'Permanent link to this comment',
    121 => 'Comments (%d)',
    122 => 'Trackbacks (%d)',
    123 => 'All HTML is allowed'
);

###############################################################################
# calendar.php

$LANG02 = array(
    1 => 'Etkinlik Takvimi',
    2 => '�zg�n�m, g�sterilebilinecek etkinlik yok.',
    3 => 'Ne Zaman',
    4 => 'Nerede',
    5 => 'A��klama',
    6 => 'Etkinlik Ekle',
    7 => 'gelecek Etkinlikler',
    8 => 'Bu etkinli�i ekleyerek ileride sadece ilgilendi�iniz etkinlikleri "Takvimim" d��mesine basarak izleyebilirsiniz.',
    9 => 'Takvimime Ekle',
    10 => 'Takvimimden ��kar',
    11 => "Etkinlik {$_USER['username']} Takvimine ekleniyor",
    12 => 'Etkinlik',
    13 => 'Ba�lang��',
    14 => 'Biti�',
    15 => 'Takvime Geri D�n'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => 'Yorum ekle',
    2 => 'Bi�im Methodu',
    3 => 'Sistemden ��k',
    4 => 'Sisteme �ye ol',
    5 => 'Kullan�c� Ad�',
    6 => 'Yorum koyabilmeniz i�in sisteme giri� yapman�z gerekiyor. E�er bir kullan�c� ad�n�z yoksa a�a��daki formu kullanarak kendinize bir tane yarat�n.',
    7 => 'Son yorumunuz ',
    8 => " saniye �nceydi.  Bu sitede iki yorum aras�nda minimum {$_CONF['commentspeedlimit']} saniye olmal�d�r.",
    9 => 'Yorum',
    10 => 'Send Report',
    11 => 'Yorumu Ekle',
    12 => 'L�tfen Ba�l�k ve Yorum bloklar�n� doldurunuz.',
    13 => 'Bilgileriniz',
    14 => '�n �zleme',
    15 => 'Report this post',
    16 => 'Ba�l�k',
    17 => 'Hata',
    18 => '�nemli Bilgiler',
    19 => 'Yorumlar�n�z�n konuyla ilgili olmas�na dikkat ediniz.',
    20 => 'Yeni bir yorum ba�l��� a�maktansa ba�ka insanlar�n yorumlar�na cevap vermeyi tercih ediniz.',
    21 => 'Ba�ka insanlar�n yorumlar�n� okuyunuz ki ayn� �eyleri bir de siz s�ylememi� olun.',
    22 => 'Yorumunuzun konusunu i�eri�ini iyi anlatan bir �ekilde se�iniz.',
    23 => 'Email adresiniz di�er kullan�c�lara G�STER�LMEYECEKT�R.',
    24 => 'Herhangi Kullan�c�',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Kullan�c� Profili:',
    2 => 'Kullan�c� Ad�',
    3 => 'Ger�ek Ad',
    4 => '�ifre',
    5 => 'Email',
    6 => 'Web Sitesi',
    7 => 'Hakk�nda',
    8 => 'PGP Anahtar�',
    9 => 'Kaydet',
    10 => 'Bu kullan�c� i�in son 10 yorum -',
    11 => 'Hi� Yorum Yok',
    12 => 'Kullan�c� �zellikleri:',
    13 => 'Her Gece �zet Email',
    14 => 'Bu �ifre rastgele yatar�lm��t�r. Bu �ifreyi olabildi�ince �abuk de�i�tirmeniz �nerilir. �ifrenizi de�i�tirmek i�in sisteme giri� yap�p Kullan�c� men�s�nden Kay�t Bilgilerine gidiniz.',
    15 => "{$_CONF['site_name']} sitesindeki kullan�c� hesab�n�z ba�ar�yla yarat�ld�. Bu hesab� kullanmak i�in sitemize a�a��daki bilgiler dahilinde giri� yap�n�z. Bu maili ileride referans olarak kullanmak i�in kaydediniz.",
    16 => 'Kullan�c� Hesap Bilgileriniz',
    17 => 'Hesap yok',
    18 => 'Belirtti�iniz email adresi ger�ek bir email adresine benzemiyor',
    19 => 'Kullan�c� ad�n�z veye email adresiniz sistemde kullan�l�yor',
    20 => 'Belirtti�iniz email adresi ger�ek bir email adresine benzemiyor',
    21 => 'Hata',
    22 => "{$_CONF['site_name']} �ye ol!",
    23 => "Bir kullan�c� hesab� yaratman�z size {$_CONF['site_name']} �yeli�i sa�lar. Bu sayede siteye kendinize ait yorumlar�n�z� g�nderebilir ve kendi i�eri�inizi d�zenleyebilirsiniz. E�er kullan�c� hesab�n�z yoksa sadece Herhangi Birisi-�simsiz Kullan�c� olarak i�erik ve yorum g�nderebilirsiniz. Sistemimize verdi�iniz email adresi <b><i>hi� bir zaman</i></b> sitede g�r�nt�lenmeyecektir.",
    24 => '�ifreniz verdi�iniz email adresinize g�nderilecektir.',
    25 => '�ifrenizi mi unuttunuz?',
    26 => 'Kullan�c� ad�n�z� girin ve �ifremi G�nder tu�una bas�n. Yeni yarat�lacak bir �ifre sistemimize kay�tl� olan email adresinize g�nderilecektir.',
    27 => '�ye Ol!',
    28 => '�ifremi G�nder',
    29 => 'Sistemden ��kt�n�z:',
    30 => 'Sisteme girdiniz:',
    31 => 'Se�ti�ini bu kontrol sisteme giri� yapm�� olman�z� gerektirmektedir',
    32 => '�mza',
    33 => 'Site misafirlerine asla g�sterilmeyecektir',
    34 => 'Ad�n�z ve soyad�n�z',
    35 => '�ifrenizi de�i�tirmek i�in',
    36 => 'http:// ile ba�lamal�',
    37 => 'Yorumlar�n�za uygulan�r',
    38 => 'Hakk�n�zla ilgili her�ey! Herkes bunu okuyabilir',
    39 => 'Payla�aca��n�z PGP anahtar�n�z',
    40 => 'Konu Sembol� Kullanma',
    41 => 'Y�netime Kat�lmak �stiyorum',
    42 => 'Tarih Bi�imi',
    43 => 'En Fazla Yaz� Say�s�',
    44 => 'Bloklar Olmas�n',
    45 => 'G�r�n�m �zellikleri -',
    46 => 'G�rmek �stemedi�iniz Konu ve Yazarlar -',
    47 => 'Haber Ayarlar� -',
    48 => 'Konular',
    49 => 'Yaz�larda semboller kullan�lmayacak',
    50 => '�lgilenmiyorsan�z i�areti kald�r�n',
    51 => 'Sadece haberler ile ilgili yaz�lar',
    52 => 'Varsay�lan:',
    53 => 'G�n�n yaz�lar�n� her ak�am al',
    54 => 'G�rmek istemedi�iniz konu ve kullan�c�lar ile ilgili se�enekleri se�iniz.',
    55 => 'Site taraf�ndan varsay�lan se�im de�erlerini kullanmak istiyorsan�z, se�eneklerin tamam�n� bo� b�rak�rsan�z. E�er herhangi bir se�im yaparsan�z, varsay�lan se�imler kullan�lmaz, bu y�zden g�rmek istedi�iniz t�m �zellikleri se�meniz gerekir. Varsay�lan se�imler kal�n yaz� tipi ile belirtilmi�tir.',
    56 => 'Yazarlar',
    57 => 'G�r�n�m �ekli',
    58 => 'S�ralama �ekli',
    59 => 'Yorum Say�s� Limiti',
    60 => 'Yorumlar�n�z�n nas�l g�r�nt�lenmesini istersiniz?',
    61 => '�lk en yeni mi, yoksa en eski mi g�sterilsin?',
    62 => 'Varsay�lan de�er 100',
    63 => "�ifreniz email adresinize g�nderildi. L�tfen, email mesaj�n�zda belirtilen ad�mlar� uygulay�n. {$_CONF['site_name']} kulland���n�z i�in te�ekk�r ederiz!",
    64 => 'Yorum Ayarlar� -',
    65 => 'Bir Daha Sisteme Girmeyi Deneyin',
    66 => "Kullan�c� ad�n�z� veya �ifrenizi yanl�� girdiniz. L�tfen a�a��daki formu kullanarak bir daha sisteme giri� yapmay� deneyin. <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Yeni bir kullan�c�</a> m�s�n�z?",
    67 => '�yelik Tarihi',
    68 => 'Beni hat�rla:',
    69 => 'Sizi sisteme giri� yapt�ktan sonra hat�rlama s�resi',
    70 => "{$_CONF['site_name']} i�in i�erik ve g�r�n�m ayarlar� d�zenleyin",
    71 => "{$_CONF['site_name']} nin en b�y�k �zelli�i, i�eri�inizi �zelle�tirebilir, bu sitenin t�m g�r�nt�s�n� de�i�tirebilirsiniz.  Bu b�y�k avantajlardan yararlanmak i�in �ncelikle {$_CONF['site_name']} ne <a href=\"{$_CONF['site_url']}/users.php?mode=new\">kay�t yapmal�s�n�z</a>.  Zaten kay�tl� bir �yemisiniz?  O zaman sol taraftaki formu kullanarak giri� yap�n�z!",
    72 => 'Tema',
    73 => 'Dil',
    74 => 'Sitenin g�r�n�m�n� de�i�tirin!',
    75 => 'Email ile G�nderilecek Konular -',
    76 => 'If you select a topic from the list below you will receive any new stories posted to that topic at the end of each day.  Choose only the topics that interest you!',
    77 => 'Resim',
    78 => 'Resminizi Ekleyin!',
    79 => 'Resmi silmek i�in buray� se�in',
    80 => 'Siteye Giri�',
    81 => 'Email Yolla',
    82 => 'Son 10 Mesaj -',
    83 => 'Yaz� g�nderme istatistikleri -',
    84 => 'Yaz�lan yaz�lar�n toplam�:',
    85 => 'Yaz�lan yorumlar�n toplam�:',
    86 => 'G�nderdi�i t�m mesajlar:',
    87 => 'Giri� Ad�n�z',
    88 => "Birisi (belki siz) {$_CONF['site_name']}, sitesindeki \"%s\" hesab�n�z i�in yeni bir �ifre istedi <{$_CONF['site_url']}>.\n\n�ayet siz ger�ekten bu �ifreyi almak istiyorsan�z, l�tfen bu linki t�klay�n:\n\n",
    89 => "�ayet bu �ifreyi almak istemiyorsan�z, bu mesaj� dikkate almay�n ve bu iste�i �nemsemeyin (�ifreniz de�i�meyecek ve oldu�u gibi kalacakt�r).\n\n",
    90 => 'A�a��daki hesab�n�z i�in yeni bir �ifre girmelisiniz. Not: bu formu g�nderinceye kadar eski �ifreniz ge�erlidir.',
    91 => 'Yeni �ifre Tespit Et',
    92 => 'Yeni �ifre Gir',
    93 => 'Yeni bir �ifre iste�iniz %d saniye �nceydi. Bu site �ifre istekleri aras�nda en az %d saniye olmas�n� aramaktad�r.',
    94 => '"%s" isimli �yenin Hesab�n� Sil',
    95 => 'A�a��daki "hesab� sil" butonuna t�klay�nca hesab�n�z, veritaban�m�zdan kald�r�lacakt�r. Not, bu hesab�n�z alt�nda g�nderdi�iniz yaz�lar ve yorumlar <strong>silinmeyecektir</strong> fakat iletiler "�simsiz Kullan�c�" olarak g�r�nt�lenecektir.',
    96 => 'hesab� sil',
    97 => 'Hesap Silme Onay�',
    98 => 'Hesab�n�z� silmek istedi�inize eminmisiniz? B�ylece yeni bir hesap yarat�ncaya kadar bu siteye kay�tl� kullan�c� olarak giremeyeceksiniz. �ayet eminseniz a�a��daki formda ki "hesab� sil" butonuna tekrar t�klay�n�z.',
    99 => 'isimli �yenin Gizlilik Se�enekleri',
    100 => 'Y�neticiden Email',
    101 => 'Site y�neticilerinden email izni',
    102 => '�yelerden Email',
    103 => 'Di�er �yelerden email izni',
    104 => 'Aktifli�inizin G�r�nt�lenmesi',
    105 => 'Aktif Kullan�c�lar Blo�unda g�r�nt�lenme',
    106 => 'Location',
    107 => 'Shown in your public profile',
    108 => 'Confirm new password',
    109 => 'Enter the New password again here',
    110 => 'Current Password',
    111 => 'Please enter your Current password',
    112 => 'You have exceeded the number of allowed login attempts.  Please try again later.',
    113 => 'Login Attempt Failed',
    114 => 'Account Disabled',
    115 => 'Your account has been disabled, you may not login. Please contact an Administrator.',
    116 => 'Account Awaiting Activation',
    117 => 'Your account is currently awaiting activation by an administrator. You will not be able to login until your account has been approved.',
    118 => "Your {$_CONF['site_name']} account has now been activated by an administrator. You may now login to the site at the url below using your username (<username>) and password as previously emailed to you.",
    119 => 'If you have forgotten your password, you may request a new one at this url:',
    120 => 'Account Activated',
    121 => 'Service',
    122 => 'Sorry, new user registration is disabled',
    123 => "Are you a <a href=\"{$_CONF['site_url']}/users.php?mode=new\">new user</a>?"
);

###############################################################################
# index.php

$LANG05 = array(
    1 => 'G�sterilecek hi� haber yok',
    2 => 'G�sterilecek hi� haber yaz�s� yok. Bu konu hakk�nda hi� haber olmayabilir, veya belirledi�iniz ayarlar y�z�nden g�sterilemiyor olabilir',
    3 => ' %s i�in',
    4 => 'G�n�n Yaz�s�',
    5 => 'Sonraki',
    6 => '�nceki',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Mesaj g�nderilirken bir hata olu�tu. L�tfen bir daha deneyin.',
    2 => 'Mesaj�n�z ba�ar�yla g�nderildi.',
    3 => 'Cevap Adresi alan�na do�ru bir email adresi girdi�inizden emin olunuz.',
    4 => 'L�tfen, Ad�n�z�, Cevap Adresinizi, Konu ve Mesaj alanlar�n� doldurunuz',
    5 => 'Hata: B�yle bir kullan�c� yok.',
    6 => 'Hata olu�tu.',
    7 => 'Kullan�c� Profili:',
    8 => 'Kullan�c� Ad�',
    9 => 'Kullan�c� URL\'�',
    10 => 'Mail yolla:',
    11 => 'Ad�n�z:',
    12 => 'Cevap Adresi:',
    13 => 'Konu:',
    14 => 'Mesaj:',
    15 => 'HTML kodu �evrilmeyecektir.',
    16 => 'Mesaj� G�nder',
    17 => 'Bu Yaz�y� bir Arkada��na G�nder',
    18 => 'Al�c�n�n Ad�',
    19 => 'Al�c�n�n Email Adresi',
    20 => 'G�nderen Ad�',
    21 => 'G�nderen Emaili',
    22 => 'B�t�n alanlar� doldurmal�s�n�z',
    23 => "Bu email size %s (%s) taraf�ndan g�nderilmi�tir. Sizin bu yaz� {$_CONF['site_url']} ile ilgilenebilece�inizi d���nd�. Bu bir SPAM de�ildir, ve sizin email adresiniz herhangi bir �ekilde bir listeye eklenmemi�tir.",
    24 => 'Bu yaz�ya yorum ekle',
    25 => 'Bu �zelli�i kullanabilmeniz i�in sisteme giri� yapman�z gerekmektedir. Sitemize giri� yapman�z sayesinde sitemizin k�t� kullan�m�n� �nlemi� olursunuz',
    26 => 'Bu form sizin se�ti�iniz kullan�c�ya email yollaman�z� sa�lar. T�m alanlar mecburidir.',
    27 => 'Mesaj',
    28 => '%s: ',
    29 => "Bu mesaj {$_CONF['site_name']} g�nl�k �zetidir. ",
    30 => ' G�nl�k Haber �zeti ',
    31 => 'Ba�l�k',
    32 => 'Tarih',
    33 => 'Yaz�n�n tamam� i�in:',
    34 => 'Mesaj�n Sonu',
    35 => '�zg�n�z, bu kullan�c� hi� mail almamay� tercih etmi�.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Geli�mi� Arama',
    2 => 'Anahtar Kelimeler',
    3 => 'Konu',
    4 => 'Tamam�',
    5 => 'Tipi',
    6 => 'Yaz�lar',
    7 => 'Yorumlar',
    8 => 'Yazarlar',
    9 => 'Tamam�',
    10 => 'Ara',
    11 => 'Arama Sonu�lar�',
    12 => 'bulundu',
    13 => 'Arama Sonu�lar�: Hi� kay�t bulunamad�',
    14 => 'Arama kriteriniz ile hi� kay�t bulunamad�:',
    15 => 'L�tfen bir daha deneyin.',
    16 => 'Ba�l�k',
    17 => 'Tarih',
    18 => 'Yazar',
    19 => "{$_CONF['site_name']} sitesinin veri taban�nda b�t�n yaz�lar� ara.",
    20 => 'Tarih',
    21 => '-',
    22 => '(Tarih yap�s� YYYY-AA-GG)',
    23 => 'Okunma Say�s�',
    24 => 'Found %d items',
    25 => 'kay�t bulundu. Toplam',
    26 => 'kay�t var. Arama s�resi',
    27 => 'saniye.',
    28 => 'Araman�z sonucunda herhangi bir yaz� veya yorum bulunamad�',
    29 => 'Yaz� ve Yorum Arama Sonu�lar�',
    30 => 'No links matched your search Araman�z sonucunda herhangi bir Internet Adresi bulunamad�.',
    31 => 'Bu eklenti herhangi bir sonu� d�nd�rmedi',
    32 => 'Etkinlik',
    33 => 'URL',
    34 => 'Yer',
    35 => 'T�m G�n',
    36 => 'Araman�z sonucunda herhangi bir etkinlik bulunamad�.',
    37 => 'Etkinlik Arama Sonu�lar�',
    38 => 'Internet Adresleri Arama Sonu�lar�',
    39 => 'Adresler',
    40 => 'Etkinlikler',
    41 => 'Arama yapabilmeniz i�in en az 3 harften olu�an bir arama sorgusu girmeniz gerekmektedir.',
    42 => 'L�tfen YYYY-AA-GG (Y�l-Ay-G�n) �eklinde d�zenlenmi� bir tarhi kullan�n�z.',
    43 => 'tam c�mle',
    44 => 'b�t�n kelimeler',
    45 => 'herhangi bir kelime',
    46 => 'Sonraki',
    47 => '�nceki',
    48 => 'Yazar',
    49 => 'Tarih',
    50 => 'Hit',
    51 => 'Link',
    52 => 'Konum',
    53 => 'Yaz� Sonu�lar�',
    54 => 'Yorum Sonu�lar�',
    55 => 'ibare',
    56 => 'VE',
    57 => 'YADA',
    58 => 'More results &gt;&gt;',
    59 => 'Results',
    60 => 'per page',
    61 => 'Refine search'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Site �statistikleri',
    2 => 'Siteye gelen toplam trafik',
    3 => 'Sitedeki Yaz�lar(Yorumlar)',
    4 => 'Sitedeki Anketler(Cevaplar)',
    5 => 'Sitedeki Internet Adresleri(Gidilme Say�s�)',
    6 => 'Sitedeki Etkinlikler',
    7 => '�lk 10 Yaz�',
    8 => 'Yaz� Ba�l���',
    9 => 'Okunma&nbsp;Say�s�',
    10 => 'Sitenizde ya hi� yaz� yok yada daha hi�kimse, hi�bir yaz�y� okumam��.',
    11 => 'En �ok Yorum Alan 10 Yaz�',
    12 => 'Yorum&nbsp;Say�s�',
    13 => 'Sitenizde ya hi� yaz� yok yada daha hi� kimse yaz�lara yorum yazmam��.',
    14 => '�lk 10 Anket',
    15 => 'Anket Sorusu',
    16 => 'Kullan�lan&nbsp;Oy&nbsp;Say�s�',
    17 => 'Sitenizde ya hi� anket yok yada daha hi� kimse herhangi bir ankete oy vermemi�.',
    18 => '�lk 10 �nternet Adresi',
    19 => 'Adresler',
    20 => 'Kullan�m&nbsp;Say�s�',
    21 => 'Sitenizde ya hi� �nternet Adresi yok yada hi� kimse herhangi bir adresi kullanmam��.',
    22 => 'En �ok e-mail ile g�nderilen 10 Yaz�',
    23 => 'Email&nbsp;Say�s�',
    24 => 'Hi� kimse sitenizdeki bir yaz�y� bir arkada��na g�ndermemi�.',
    25 => 'Top Ten Trackback Commented Stories',
    26 => 'No trackback comments found.',
    27 => 'Number of active users',
    28 => 'Top Ten Events',
    29 => 'Event',
    30 => 'Hits',
    31 => 'It appears that there are no events on this site or no one has ever clicked on one.'
);

###############################################################################
# article.php

$LANG11 = array(
    1 => '�lgili',
    2 => 'Arkada��na G�nder',
    3 => 'Bas�lmaya Uygun �ekli',
    4 => 'Se�enekler',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => '%s g�nderebilmek i�in sisteme bir kullan�c� olarak giri� yapm�� olman�z gerekiyor.',
    2 => 'Sisteme gir',
    3 => 'Yeni Kullan�c�',
    4 => 'Etkinlik Ekle',
    5 => '�nternet Adresi Ekle',
    6 => 'Yaz� Ekle',
    7 => 'Sisteme giri� yapm�� olman�z gerekiyor',
    8 => 'G�nder',
    9 => 'Bir bilgi g�nderirken, �u �nerileri dikkate alman�z� rica ederiz:<ul><li>B�t�n alanlar� doldurman�z mecburidir.<li>Tam ve do�ru bilgi veriniz<li>�nternet Adresi girerken iki kere kontrol ediniz</ul>',
    10 => 'Ba�l�k',
    11 => '�nternet Adresi',
    12 => 'Ba�lang�� Tarihi',
    13 => 'Biti� Tarihi',
    14 => 'Yer',
    15 => 'A��klama',
    16 => 'Farkl� ise l�tfen belirtiniz',
    17 => 'Kategori',
    18 => 'Di�er',
    19 => '�nce Okuyun',
    20 => 'Hata: Kategori girilmemi�',
    21 => '"Di�er"\'i se�ti�inizde l�tfen kategori ad�n� girin',
    22 => 'Hata: Bo� alanlar var',
    23 => 'Formdaki t�m alanlar� doldurunuz. Hepsinin doldurulmas� gerekmektedir.',
    24 => 'G�nderiniz Kaydedildi',
    25 => '%s g�nderiniz ba�ar�yla kaydedildi.',
    26 => 'H�z Limiti',
    27 => 'Kullan�c� Ac�',
    28 => 'Konu',
    29 => 'Yaz�',
    30 => 'En son g�nderiniz ',
    31 => " saniye �nceydi. Bu sitede iki g�nderi aras�nda en az {$_CONF['speedlimit']} saniye ge�mesi gerekmektedir",
    32 => '�z �zleme',
    33 => 'Yaz� �n �zleme',
    34 => 'Sistemden ��k',
    35 => 'HTML kodlar�n�n kullan�m�na izin verilmemektedir',
    36 => 'G�nderi Tipi',
    37 => "{$_CONF['site_name']} sitesine bir etkinlik g�ndermeniz halinde, g�nderiniz sitenin Genel Takvim'ine eklenecektir. Genel Takvimi t�m kullan�c�lar g�r�r ve takvimde ilgilerini �eken etkinlikleri �zel takvimlerine ekleyebilirler. Sitenin bu �zelli�i, ki�isel etkinliklerinizi (do�um g�nleri, veya y�ld�n�mlerini) eklemek i�in <b>de�ildir</b>. Etkinli�i g�nderdikten sonra, sitenin y�netiminin onay�na gidecektir. Onay verildikten sonra Genel Takvim'de etkinli�inizi g�rebilirsiniz.",
    38 => 'Etkinlik Ekle:',
    39 => 'Genel Takvim',
    40 => 'Ki�isel Takvim',
    41 => 'Biti� Saati',
    42 => 'Ba�lang�� Saati',
    43 => 'T�m G�n Etkinli�i',
    44 => 'Adres Sat�r� 1',
    45 => 'Adres Sat�r� 2',
    46 => '�ehir',
    47 => '�l�e',
    48 => 'Posta Kodu',
    49 => 'Etkinlik Tipi',
    50 => 'Etkinlik Tiplerini D�zenle',
    51 => 'Yer',
    52 => 'Sil',
    53 => 'Hesap Yarat'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Sisteme Giri� Yapm�� Olman�z Gerekiyor',
    2 => 'Engellendi! Sisteme Giri� Bilgileriniz Yanl��',
    3 => '�ifre kullan�c� i�in yanl��:',
    4 => 'Kullan�c� Ad�:',
    5 => '�ifre:',
    6 => 'Sitenin y�netim alanlar�nda yap�lan t�m i�lemler kaydedilir ve kontrol edilir.<br>Bu sayfa sadece yetkili ki�iler taraf�ndan kullan�labilir.',
    7 => 'sisteme giri� yap'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Yetersiz Y�netici Haklar�',
    2 => 'Bu blo�u d�zenlemek i�in yeterli haklara sahip de�ilsiniz.',
    3 => 'Blok D�zenleyicisi',
    4 => 'There was a problem reading this feed (see error.log for details).',
    5 => 'Blok Ba�l���',
    6 => 'Konu',
    7 => 'Tamam�',
    8 => 'Blok G�venlik Seviyesi',
    9 => 'Blok S�ras�',
    10 => 'Blok Tipi',
    11 => 'Portal Blok',
    12 => 'Normal Blok',
    13 => 'Portal Blok �zellikleri',
    14 => 'RDF Adresi',
    15 => 'Son RDF De�i�ikli�i',
    16 => 'Normal Blok �zellikleri',
    17 => 'Blok ��eri�i',
    18 => 'L�tfen Blok Ba�l���, G�venlik Seviyesi ve ��erik alanlar�n� doldurunuz.',
    19 => 'Blok Y�neticisi',
    20 => 'Blok Ba�l���',
    21 => 'Blok G�v. Sev.',
    22 => 'Blok Tipi',
    23 => 'Blok S�ras�',
    24 => 'Blok Konusu',
    25 => 'Bir blo�u silmek veya de�i�tirmek istiyorsan�z, blo�un ismine bas�n�z. Yeni bir blok yaratmak i�in yukar�daki Yeni Blok d��mesine bas�n�z.',
    26 => 'D�zenleme Blo�u',
    27 => 'PHP Blok',
    28 => 'PHP Blok �zellikleri',
    29 => 'Blok Fonksiyonu',
    30 => 'E�er bloklar�n�zdan birinin PHP kodu kullanmas�n� istiyorsan�z, PHP fonksiyonunun ad�n� yukar�ya giriniz. Fonksiyon ad�n�z "phpblock_" ile ba�lamal�d�r(�rn. phpblock_getweather). E�er bu �ekilde ba�lam�yorsa, fonkisyonunuz �a�r�lmayacakt�r. Bunu yapmam�z�n nedeni, Geeklog s�r�m�n� de�i�tiren insanlar�n sisteme zarar verebilecek fonksiyonlar� kullanmalar�n� �nlemek i�indir. Fonkisyon ad�ndan sonra bo� parantez  "()" koymamaya dikkat edin. Son olarak, t�m PHP kodlar�n�z� /path/to/geeklog/system/lib-custom.php dosyas�na koyman�z� �neririz. Bu sayede sistemin yeni s�r�m�n� y�kleseniz bile yazd���n� ki�isel PHP kodlar� silinmez.',
    31 => 'PHP Blo�unda hata. %s fonksiyonu yok.',
    32 => 'Hata: Eksik alan(lar)',
    33 => 'Portal Bloklar� i�in .rdf dosyas�na olan adresi girmeniz gerekmektedir.',
    34 => 'PHP Bloklar� i�in ba�l�k ve fonkisyonu girmeniz gerekmektedir.',
    35 => 'Normal bloklar i�in ba�l�k ve i�eri�i girmeniz gerekmektedir.',
    36 => 'D�zenleme blo�u i�in i�erik girmelisiniz',
    37 => 'PHP Blok fonksiyonunun ad� uygun de�il',
    38 => 'PHP Bloklar i�in �a�r�lacak fonksiyonlar \'phpblock_\' ile ba�lamal�d�r (�rn. phpblock_getweather). Bu �n ek herhangi bir fonksiyonun �a�r�lmas�n� �nlemek i�indir.',
    39 => 'Kenar',
    40 => 'Sol',
    41 => 'Sa�',
    42 => 'Geeklog varsay�lan bloklar� i�in, blok s�ras� ve g�venlik seviyesini girmelisiniz',
    43 => 'Sadece Ana Sayfa',
    44 => 'Eri�im Engellendi',
    45 => "Eri�im hakk�n�z olmayan bir yaz�ya eri�mek istiyorsunuz. Bu eyleminiz kay�tlara eklenmi�tir. L�tfen <a href=\"{$_CONF['site_admin_url']}/alan.php\">kontrol ana sayfas�na geri d�n�n</a>.",
    46 => 'Yeni Blok',
    47 => 'Kontrol Ana Sayfas�',
    48 => 'Alan Ad�',
    49 => ' (bo�luk kullan�lmamal� ve tek olmal�)',
    50 => 'Yard�m Dosyas� Adresi',
    51 => 'http:// ile ba�lay�n',
    52 => 'Bu alan� bo� b�rak�rsan�z, blok ile ili�kili yard�m d��mesi g�sterilmeyecektir',
    53 => 'Kullan�ma A��k',
    54 => 'Kaydet',
    55 => 'Vazge�',
    56 => 'Sil',
    57 => 'Move Block Down',
    58 => 'Move Block Up',
    59 => 'Move block to the right side',
    60 => 'Move block to the left side',
    61 => 'No Title',
    62 => 'Article Limit',
    63 => 'Bad Block Title',
    64 => 'Your Title must not be empty and cannot contain HTML!',
    65 => 'Order'
);

###############################################################################
# admin/event.php

$LANG22 = array(
    1 => 'Etkinlik D�zenleyicisi',
    2 => 'Error',
    3 => 'Etkinlik Ba�l���',
    4 => 'Etkinlik Adresi',
    5 => 'Etkinlik Ba�lang�� Tarihi',
    6 => 'Etkinlik Biti� Tarihi',
    7 => 'Etkinlik Yeri',
    8 => 'Etkinlik A��klamas�',
    9 => '(http:// ile ba�lay�n)',
    10 => 'T�m alanlar� doldurman�z gerekmektedir',
    11 => 'Etkinlik Y�neticisi',
    12 => 'Bir etkinli�i de�i�tirmek veya silmek istiyorsan�z, ad�na bas�n. Yeni etkinlik yaratmak i�in Yeni Etkinlik d��mesine bas�n.',
    13 => 'Etkinlik Ba�l���',
    14 => 'Ba�lang�� Tarihi',
    15 => 'Biti� Tarihi',
    16 => 'Eri�im Engellendi',
    17 => "Eri�im hakk�n�z olmayan bir yaz�ya eri�mek istiyorsunuz. Bu eyleminiz kay�tlara eklenmi�tir. L�tfen <a href=\"{$_CONF['site_admin_url']}/event.php\">kontrol ana sayfas�na geri d�n�n</a>.",
    18 => 'Yeni Etkinlik',
    19 => 'Kontrol Ana Sayfas�',
    20 => 'Kaydet',
    21 => 'Vazge�',
    22 => 'Sil',
    23 => 'Bad start date.',
    24 => 'Bad end date.',
    25 => 'End date is before start date.'
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => '�nceki Yaz�',
    2 => 'Sonraki Yaz�',
    3 => '�zellikler',
    4 => 'G�nderi �ekli',
    5 => 'Yaz� D�zenle',
    6 => 'Sisteme kay�tl� hi� bir yaz� bulunmamakta.',
    7 => 'Yazar',
    8 => 'kaydet',
    9 => '�n izleme',
    10 => 'vazge�',
    11 => 'sil',
    12 => 'ID',
    13 => 'Ba�l�k',
    14 => 'Konu',
    15 => 'Tarih',
    16 => '�zet',
    17 => '��erik',
    18 => 'Toplam okunma say�s�',
    19 => 'Yorumlar',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Yaz� Listesi',
    23 => 'Bir yaz�y� de�i�tirmek veya silmek istiyorsan�z, yaz�n�n numaras�na bas�n�z. Bir yaz�y� g�r�nt�lemek istiyorsan�z, yaz�n�n ba�l���na bas�n�z. Yeni bir yaz� yaratmak istiyorsan�z, yukar�daki Yeni Yaz� d��mesine bas�n�z.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'Yaz� �n �zlemi',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'File Upload Errors',
    31 => 'L�tfen, Yazar, Ba�l�k ve Konu alanlar�n� doldurunuz.',
    32 => '�ncelikli',
    33 => 'Sadece bir tane �ncelikli yaz� olabilir.',
    34 => 'Taslak',
    35 => 'Evet',
    36 => 'Hay�r',
    37 => 'Yazd�klar�:',
    38 => 'Yaz�lanlar:',
    39 => 'Emailler',
    40 => 'Eri�iminiz Engellendi',
    41 => "Eri�im hakk�n�z olmayan bir yaz�ya eri�mek istiyorsunuz. Bu eyleminiz kay�tlara eklenmi�tir. Bu yaz�ya salt okunur �ekilde a�a��dan eri�ebilirsiniz. ��iniz bitti�i zaman l�tfen <a href=\"{$_CONF['site_admin_url']}/story.php\">kontrol ekran�na d�n�n�z</a>.",
    42 => "Eri�im hakk�n�z olmayan bir yaz�ya eri�mek istiyorsunuz.  Bu eyleminiz kay�tlara eklenmi�tir.  L�tfen <a href=\"{$_CONF['site_admin_url']}/story.php\">kontrol ekran�na geri d�n�n�z</a>.",
    43 => 'Yeni Yaz�',
    44 => 'Kontrol Ana Sayfas�',
    45 => 'A�(access)',
    46 => '<b>NOT:</b> e�er ileride bir tarih verirseniz, yaz�n�z o tarihe kadar yay�mlanmayacakt�r. Bu ayn� zamanda bu yaz�n�n RDF ba�l�klar�nda ve arama ve istatistik sayfalarda g�r�nt�lenmeyecektir.',
    47 => 'Resimler',
    48 => 'resim',
    49 => 'sa�',
    50 => 'sol',
    51 => 'Bu resimlerden birini yazmakta oldu�unuz yaz�ya eklemek istiyorsan�z, eklemek istedi�iniz yere: [imageX], [imageX_right] veya [imageX_left] yaz�n. Burada, X ekledi�iniz resimin numaras�d�r. left ve right ekleri imaj�n sola veya sa�a dayal� olarak ��kmas�na neden olur. NOT: Sadece ekledi�iniz resimleri kullanabilirsiniz.  E�er ekledi�iniz resimleri kullanmazsan�z yaz�n�z� kaydedemezsiniz.<BR><P><B>�n �zleme</B>:  Resim eklenmi� bir yaz�y� �n �zlem\'de g�r�nt�lemenin en iyi yolu: �nce yaz�n�z� Taslak olarak kaydetmenizdir. Bir yaz�y� e�er resimleri eklenmediyse �n �zleme butonunu kullanarak g�r�nt�leyebilirsiniz.',
    52 => 'Sil',
    53 => 'kullan�lmad�. Bu resmi �zet veya yaz� b�l�mlerinden birinde kullanmadan de�i�iklikleri kaydedemezsiniz',
    54 => 'Eklenen Resimler Kullan�lmad�',
    55 => 'A�a��daki hatalar yaz�n�z� kaydetmeye �al���rken olu�tu.  L�tfen listelenen hatalar� kontrol edip d�zeltiniz',
    56 => 'Sembol� G�ster',
    57 => '�l�eksiz resim g�ster',
    58 => 'Story Management',
    59 => 'Option',
    60 => 'Enabled',
    61 => 'Auto Archive',
    62 => 'Auto Delete',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Expand the Content Edit Area size',
    68 => 'Reduce the Content Edit Area size',
    69 => 'Publish Story Date',
    70 => 'Toolbar Selection',
    71 => 'Basic Toolbar',
    72 => 'Common Toolbar',
    73 => 'Advanced Toolbar',
    74 => 'Advanced II Toolbar',
    75 => 'Full Featured',
    76 => 'Publish Options',
    77 => 'Javascript needs to be enabled for Advanced Editor. Option can be disabled in the main site config.php',
    78 => 'Click <a href="%s/story.php?mode=edit&amp;sid=%s&amp;editopt=default">here</a> to use default editor'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => 'Konu D�zenle',
    2 => 'Konu Tan�mlay�c�',
    3 => 'Konu Ad�',
    4 => 'Konu Resmi',
    5 => '(bo�luk kullanmay�n)',
    6 => 'Bir konuyu sildi�iniz zaman o konuyla ili�kili t�m yaz�lar ve bloklar silinecektir',
    7 => 'L�tfen Konu Tan�mlay�c� ve  Konu Ad� alanlar�n� doldurunuz',
    8 => 'Konu Y�neticisi',
    9 => 'Bir konuyu de�i�tirmek veya silmek istiyorsan�z, konunun ad�na bas�n�z.  Yeni bir konu yaratmak istiyorsan�z, soldaki Yeni Konu d��mesine bas�n�z. Her konuya olan eri�im haklar�n�z� parantez i�inde g�rebilirsiniz',
    10 => 'S�ralama',
    11 => 'Yaz�/Sayfa',
    12 => 'Eri�im Engellendi',
    13 => "Eri�im hakk�n�z olmayan bir konuya eri�mek istiyorsunuz.  Bu eyleminiz kay�tlara eklenmi�tir. L�tfen <a href=\"{$_CONF['site_admin_url']}/topic.php\">konu kontrol ekran�na geri d�n�n�z</a>.",
    14 => 'S�ralama y�ntemi',
    15 => 'alfabetik',
    16 => 'standart',
    17 => 'Yeni Konu',
    18 => 'Kontrol Ana Sayfas�',
    19 => 'kaydet',
    20 => 'vazge�',
    21 => 'sil',
    22 => 'Varsay�lan',
    23 => 'bildirilen yeni yaz� i�in bunu varsay�lan ba�l�k yap',
    24 => '(*)',
    25 => 'Archive Topic',
    26 => 'make this the default topic for archived stories. Only one topic allowed.',
    27 => 'Or Upload Topic Icon',
    28 => 'Maximum',
    29 => 'File Upload Errors'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'Kullan�c� D�zenle',
    2 => 'Kullan�c� Tan�mlay�c�s�',
    3 => 'Kullan�c� Ad�',
    4 => 'Ger�ek Ad�',
    5 => '�ifresi',
    6 => 'G�venlik Seviyesi',
    7 => 'Email Adresi',
    8 => 'Web Sitesi',
    9 => '(bo�luk kullanmay�n)',
    10 => 'L�tfen Kullan�c� Ad�, Ger�ek Ad�, G�venlik Seviyesi, ve Email Adresi alanlar�n� doldurunuz',
    11 => 'Kullan�c� D�zenleyici',
    12 => 'Bir kullan�c�n�n bilgilerini de�i�tirmek veya silmek istiyorsan�z, kullan�c� ad�na bas�n�z.  Yeni bir kullan�c� yaratmak istiyorsan�z, soldaki Yeni Kullan�c� d��mesine bas�n�z. A�a��daki formda kullan�c� ad�n�, email adresini veya ger�ek ad�n� girerek basit aramalar yapabilirsiniz (�rne�in *son* or *.edu).',
    13 => 'G�venlik Seviyesi',
    14 => 'Kay�t Tarihi',
    15 => 'Yeni Kullan�c�',
    16 => 'Kontrol Ana Sayfas�',
    17 => '�ifre de�i�tir',
    18 => 'vazge�',
    19 => 'sil',
    20 => 'kaydet',
    21 => 'Se�ti�iniz kullan�c� ad� kullan�lmakta.',
    22 => 'Hata',
    23 => 'Birden Fazla Kullan�c� Ekleme',
    24 => 'Birden Fazla Kullan�c� Ekleme',
    25 => 'Geeklog program�na birden fazla kullan�c�y� ekleyebilirsiniz. Sekme ile ayr�lm�� bir metin dosyas�n�n i�ine alanlar� �u s�ra ile ekleyin: ger�ek ad�, kullan�c� ad�, email adresi.  Eklenen her kullan�c�ya rasgele atanm�� bir �ifre, kullan�c�n�n email adresine g�nderilecektir. Her sat�ra sadece bir kullan�c� ad�n�n eklenmi� olmas�na dikkat ediniz. Herhangi bir yanl��l�kta eklenen her kullan�c�y� tek tek d�zeltmek zorunda kalabilirsiniz. Bu y�zden dosyan�z� iki kere kontrol edin!',
    26 => 'Ara',
    27 => 'Sonu�lar� S�n�rla',
    28 => 'Resmi silmek i�in buray� se�in',
    29 => 'Adres',
    30 => 'D��ar�dan al',
    31 => 'Yeni Kullan�c�lar',
    32 => 'Ekleme i�lemi tamamland�. %d kullan�c� eklendi ve %d hata olu�tu',
    33 => 'g�nder',
    34 => 'Hata: Y�kleme yapmak i�in bir dosya se�mi� olman�z gerekiyor.',
    35 => 'Son Giri�',
    36 => '(asla)',
    37 => 'UID',
    38 => 'Group Listing',
    39 => 'Password (again)',
    40 => 'Registration Date',
    41 => 'Last login Date',
    42 => 'Banned',
    43 => 'Awaiting Activation',
    44 => 'Awaiting Authorization',
    45 => 'Active',
    46 => 'User Status',
    47 => 'Edit'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => 'Onayla',
    2 => 'Sil',
    3 => 'De�i�tir',
    4 => 'Profil',
    10 => 'Ba�l�k',
    11 => 'Ba�lang�� Tarihi',
    12 => 'URL',
    13 => 'Kategori',
    14 => 'Tarih',
    15 => 'Konu',
    16 => 'Kullan�c� ad�',
    17 => 'Ger�ek ad�',
    18 => 'Email',
    34 => 'Kontrol',
    35 => 'Eklenen Yaz�lar',
    36 => 'Eklenen Adresler',
    37 => 'Eklenen Etkinlikler',
    38 => 'G�nder',
    39 => 'Onaylaman�z gereken herhangi bir eklenti yok',
    40 => 'Kullan�c�lar�n ekledikleri'
);

###############################################################################
# calendar.php

$LANG30 = array(
    1 => 'Pazar',
    2 => 'Pazartesi',
    3 => 'Sal�',
    4 => '�ar�amba',
    5 => 'Per�embe',
    6 => 'Cuma',
    7 => 'Cumartesi',
    8 => 'Etkinlik Ekle',
    9 => 'ScriptEvi Etkinli�i',
    10 => 'Etkinlikler:',
    11 => 'Genel Takvim',
    12 => 'Takvimim',
    13 => 'Ocak',
    14 => '�ubat',
    15 => 'Mart',
    16 => 'Nisan',
    17 => 'May�s',
    18 => 'Haziran',
    19 => 'Temmuz',
    20 => 'A�ustos',
    21 => 'Eyl�l',
    22 => 'Ekim',
    23 => 'Kas�m',
    24 => 'Aral�k',
    25 => 'Geri: ',
    26 => 'T�m G�n',
    27 => 'Hafta',
    28 => 'Ki�isel Takvim:',
    29 => 'Genel Takvim',
    30 => 'etkinli�i sil',
    31 => 'Ekle',
    32 => 'Etkinlik',
    33 => 'Tarih',
    34 => 'Saat',
    35 => 'H�zl� Ekle',
    36 => 'G�nder',
    37 => '�z�r dilerim, ki�isel takvim �zelli�i bu sitede tan�mlanmam��',
    38 => 'Ki�isel Etkinlik D�zenleyicisi',
    39 => 'G�n',
    40 => 'Hafta',
    41 => 'Ay'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} Mesaj Program�",
    2 => 'Kimden',
    3 => 'Cevaplama Adresi',
    4 => 'Konu',
    5 => '��erik',
    6 => 'G�nderim:',
    7 => 'Kullan�c� Ekle',
    8 => 'Admin',
    9 => '�zellikler',
    10 => 'HTML',
    11 => 'Acil Mesaj!',
    12 => 'G�nder',
    13 => 'Temizle',
    14 => 'Kullan�c� ayarlar�n� dikkate alma',
    15 => 'Kullan�c�(lar)a g�nderilemiyor: ',
    16 => 'Kullan�c�(lar)a ba�ar�yla g�nderildi: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Bir mesaj daha g�nder</a>",
    18 => 'Kime',
    19 => 'NOT: e�er b�t�n site �yelerine mesaj g�ndermek istiyorsan�z, se�im listesinden Sitedeki Kullan�c�lar grubunu se�iniz.',
    20 => "<successcount> mesaj ba�ar�yla g�nderildi ama <failcount> mesaj�n g�nderilmesinde sorun ��kt�. Her g�nderme denemesinin ayr�nt�lar� a�a��da bulunmaktad�r. <a href=\"{$_CONF['site_admin_url']}/mail.php\">Ba�ka bir mesaj g�nderebilir</a>, veya <a href=\"{$_CONF['site_admin_url']}/moderation.php\">Kontrol Ana Sayfas�</a>na geri d�nebilirisiniz.",
    21 => 'Ba�ar�s�z',
    22 => 'Ba�ar�l�',
    23 => 'Ba�ar�s�z olan g�nderim yok',
    24 => 'Ba�ar�l� olan g�nderim yok',
    25 => '-- Grup se�in --',
    26 => 'L�tfen formun t�m alanlar�n� doldurun ve �e�im listesinden bir kullan�c� grubu se�in.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Sisteme eklenti (plug-in) y�kleyerek Geeklog\'un �al��mas�n� ve belki sisteminizi bozabilirsiniz. Sadece <a href="http://www.geeklog.net" target="_blank">Geeklog Ana Sayfas�</a>\'ndan y�kledi�iniz eklentileri y�klemeniz tavsiye edilir, ��nk� bize ula�an t�m eklentileri �e�itli i�letim sistemleriyle ayr�nt�l� testlere sokuyoruz. �zellikle ���nc� firmalardan y�kledi�iniz eklentilerin y�klenirken sisteminize zarar verebilecek programlar �al��t�rabilece�ini ve bunlar�n g�venlik a��klar�na neden olabilece�ini anlaman�z �nemlidir. Bu uyar�ya ra�men, biz bu eklentinin y�klenmesinin ba�ar�yla tamamlanaca��n� garanti etmiyoruz, ve sisteminizde do�acak herhangi bir hasardan dolay� sorumluluk kabul etmiyoruz. Ba�ka bir deyi�le eklentiyi y�klerken do�acak t�m riskler size aittir.  Ayr�nt�lar� ��renmek isteyenler i�in her eklenti paketinde y�klemenin el ile yap�labilmesi i�in ayr�nt�lar ve ad�mlar mevcuttur.',
    2 => 'Eklenti Y�kleme ile �lgili Y�k�mler',
    3 => 'Eklenti Y�kleme Formu',
    4 => 'Eklenti Dosyas�',
    5 => 'Eklenti Listesi',
    6 => 'Uyar�: Eklenti zaten y�klenmi�!',
    7 => 'Y�klemeye �al��t���n�z eklenti zaten y�klenmi�. E�er yeniden y�klemek istiyorsan�z, eklentiyi �nce silin.',
    8 => 'Eklenti uyumluluk kontrol� ba�ar�s�z.',
    9 => 'Bu eklenti Geeklog\'un yeni bir versiyonun istemekte. Elinizdeki kopyay� ya <a href="http://www.geeklog.net">Geeklog</a> adresinden yenileyin ya da eklentinin yeni bir versiyonunu bulmal�s�n�z.',
    10 => '<br><b>�u anda hi� bir eklenti y�klenmemi�.</b><br><br>',
    11 => 'Bir eklentiyi de�i�tirmek veya silmek istiyorsan�z eklentinin numaras�na bas�n. Eklenti hakk�nda daha fazla bilgi edinmek i�in eklentinin ad�na bas�n. Bu eklentinin web sitesini a�ar. Bir eklenti y�klemek veya s�r�m�n� yenilemek i�in dok�mantasyonuna ba�vurun.',
    12 => 'plugineditor()\'e hi� bir eklenti ad� sa�lanmad�',
    13 => 'Eklenti D�zenle',
    14 => 'Yeni Eklenti',
    15 => 'Kontrol Ana Sayfas�',
    16 => 'Eklenti Ad�',
    17 => 'Eklenti S�r�m�',
    18 => 'Geeklog S�r�m�',
    19 => 'Kullan�mda',
    20 => 'Evet',
    21 => 'Hay�r',
    22 => 'Y�kle',
    23 => 'Kaydet',
    24 => 'Vazge�',
    25 => 'Sil',
    26 => 'Eklenti ad�',
    27 => 'Eklenti Web Sitesi',
    28 => 'Eklenti S�r�m�',
    29 => 'Geeklog S�r�m�',
    30 => 'Eklentiyi Sil?',
    31 => 'Bu eklentiyi silmek istedi�inizden eminmisiniz? Bunu yaparsan�z eklentinin kulland��� t�m veriler ve veri yap�lar� da silinecektir. Eminseniz Sil d��mesine bir daha bas�n�z.',
    32 => '<p><b>Error AutoLink tag not correct format</b></p>',
    33 => 'Code Version',
    34 => 'Update',
    35 => 'Edit',
    36 => 'Code',
    37 => 'Data',
    38 => 'Update!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'create feed',
    2 => 'save',
    3 => 'delete',
    4 => 'cancel',
    10 => 'Content Syndication',
    11 => 'New Feed',
    12 => 'Admin Home',
    13 => 'To modify or delete a feed, click on the feed\'s title below. To create a new feed, click on New Feed above.',
    14 => 'Title',
    15 => 'Type',
    16 => 'Filename',
    17 => 'Format',
    18 => 'last updated',
    19 => 'Enabled',
    20 => 'Yes',
    21 => 'No',
    22 => '<i>(no feeds)</i>',
    23 => 'all Stories',
    24 => 'Feed Editor',
    25 => 'Feed Title',
    26 => 'Limit',
    27 => 'Length of entries',
    28 => '(0 = no text, 1 = full text, other = limit to that number of chars.)',
    29 => 'Description',
    30 => 'Last Update',
    31 => 'Character Set',
    32 => 'Language',
    33 => 'Contents',
    34 => 'Entries',
    35 => 'Hours',
    36 => 'Select type of feed',
    37 => 'You have at least one plugin installed that supports content syndication. Below you will need to select whether you want to create a Geeklog feed or a feed from one of the plugins.',
    38 => 'Error: Missing Fields',
    39 => 'Please fill in the Feed Title, Description, and Filename.',
    40 => 'Please enter a  number of entries or number of hours.',
    41 => 'Links',
    42 => 'Events',
    43 => 'All',
    44 => 'None',
    45 => 'Header-link in topic',
    46 => 'Limit Results',
    47 => 'Search',
    48 => 'Edit',
    49 => 'Feed Logo',
    50 => "Relative to site url ({$_CONF['site_url']})"
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "�ifreniz email adresinize g�nderilmi�tir. L�tfen, email adresinize gelen mesajdaki ad�mlar� uygulay�n. {$_CONF['site_name']} kulland���n�z i�in te�ekk�r ederiz.",
    2 => 'Yaz�n�z� sitemize g�nderdi�iniz i�in te�ekk�r ederiz.  Yaz�n�z, site y�netimi taraf�ndan onayland�ktan sonra yay�mlanacakt�r.',
    3 => "�nternet adresini sitemize g�nderdi�iniz i�in te�ekk�r ederiz. Adresiniz, site y�netimi taraf�ndan onayland�ktan sonra yay�mlanacakt�r. Onayland�ktan sonra g�nderdi�iniz adresi<a href={$_CONF['site_url']}/links.php>Adresler</a> b�l�m�nde g�rebilirsiniz.",
    4 => "Sitemize ekledi�iniz etkinlik i�in te�ekk�r ederiz.  G�nderdi�iniz etkinlik, site y�netimi taraf�ndan onayland�ktan sonra yay�mlanacakt�r. Onayland�ktan sonra <a href={$_CONF['site_url']}/calendar.php>takvim</a> b�l�m�nde g�rebilirsiniz.",
    5 => 'Kay�t bilgileriniz ba�ar�l� bir �ekilde kaydedildi.',
    6 => 'G�r�n�m ayarlar�n�z ba�ar�l� bir �ekilde kaydedildi.',
    7 => 'Yorum tercihleriniz ba�ar�l� bir �ekilde kaydedildi.',
    8 => 'Sistemden ba�ar�yla ��kt�n�z.',
    9 => 'Yaz�n�z ba�ar�yla kaydedildi.',
    10 => 'Yaz�n�z ba�ar�yla silindi.',
    11 => 'Blo�unuz ba�ar�yla kaydedildi.',
    12 => 'Blo�unuz ba�ar�yla silindi.',
    13 => 'Konunuz ba�ar�yla kaydedildi.',
    14 => 'Konunuz ve b�t�n yaz�lar� ve alanlar� ba�ar�yla silindi.',
    15 => 'Internet Adresiniz ba�ar�yla kaydedildi.',
    16 => 'Internet Adresiniz ba�ar�yla silindi.',
    17 => 'Etkinli�iniz ba�ar�yla kaydedildi.',
    18 => 'Etkinli�iniz ba�ar�yla silindi.',
    19 => 'Anketiniz ba�ar�yla kaydedildi.',
    20 => 'Anketiniz ba�ar�yla silindi.',
    21 => 'Yeni kullan�c� ba�ar�yla kaydedildi.',
    22 => 'Yeni kullan�c� ba�ar�yla silindi.',
    23 => 'Takviminize etkinlik eklerken sorun olu�tu. Etkinlik tan�mlay�c�s� tan�mlanmam��.',
    24 => 'Takviminize etkinlik ba�ar�yla eklendi.',
    25 => 'Sisteme giri� yapmadan ki�isel takviminizi a�amazs�n�z.',
    26 => 'Ki�isel takviminizden etkinlik ba�ar�yla silinmi�tir.',
    27 => 'Mesaj ba�ar�lya iletildi.',
    28 => 'Eklenti ba�ar�yla eklendi.',
    29 => '�zg�n�m, ki�isel takvimler bu sitede kullan�lam�yor.',
    30 => 'Eri�im Engellendi',
    31 => 'Yaz� kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    32 => 'Konu kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    33 => 'Blok kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    34 => 'Internet Adresi kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    35 => 'Etkinlik kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    36 => 'Anket kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    37 => 'Kullan�c� kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    38 => 'Eklenti kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    39 => 'Mesaj kontrol sayfalar�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    40 => 'Sistem Mesaj�',
    41 => 'Kelime de�i�tirme sayfas�na eri�iminiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    42 => 'Kelimeniz ba�ar�yla kaydedildi.',
    43 => 'Kelimeniz  ba�ar�yla silindi.',
    44 => 'Eklenti ba�ar�lya y�klendi!',
    45 => 'Eklenti ba�ar�yla silindi.',
    46 => 'Veri taban� yedekleme program�na eri�imiz yok.  Giri� izni olmayan t�m etkinlikler kay�tlara ge�mektedir.',
    47 => 'Bu �zellik sadece Linux, Unix gibi i�letim sistemlerinde �al���r.  E�er Linux, Unix gibi bir i�letim sistemi kullan�yorsan�z, �nbelle�iniz ba�ar�yla temizlenmi�tir. E�er Windows kullan�yorsan�z, adodb_*.php  dosyalar�n� arat�n ve silin.',
    48 => "{$_CONF['site_name']} sitesine �yelik ba�vurunuz i�in te�ekk�r ederiz. Site y�netimi ba�vurunuzu inceleyecektir. E�er kabul al�rsan�z �ifreniz belirtti�iniz e�mail adreisne g�nderilecektir.",
    49 => 'Grubunuz ba�ar�yla kaydedildi.',
    50 => 'Grup ba�ar�yla silindi.',
    51 => 'Bu kullan�c� ad� zaten kullan�l�yor. L�tfen ba�ka bir tane se�in.',
    52 => 'Sa�lanan email adresi ge�erli bir email adresi olarak g�z�km�yor.',
    53 => 'Yeni �ifreniz kabul edildi. L�tfen a�a��dan yeni �ifrenizi kullanarak �imdi giri� yap�n.',
    54 => 'Yeni bir �ifre isteme s�resiniz doldu. L�tfen a�a��dan tekrar deneyin.',
    55 => 'Size bir email g�nderildi ve az �nce yerine ula�t�. Hesab�n�za yeni bir �ifre tayin etmek i�in mesajdaki talimatlar� l�tfen takip ediniz.',
    56 => 'Sa�lanan email adresi zaten ba�ka bir hesap taraf�ndan kullan�l�yor.',
    57 => 'Hesab�n�z ba�ar�yla silindi.',
    58 => 'Your feed has been successfully saved.',
    59 => 'The feed has been successfully deleted.',
    60 => 'The plugin was successfully updated',
    61 => 'Plugin %s: Unknown message placeholder',
    62 => 'The trackback comment has been deleted.',
    63 => 'An error occurred when deleting the trackback comment.',
    64 => 'Your trackback comment has been successfully sent.',
    65 => 'Weblog directory service successfully saved.',
    66 => 'The weblog directory service has been deleted.',
    67 => 'The new password does not match the confirmation password!',
    68 => 'You have to enter the correct current password.',
    69 => 'Your account has been blocked!',
    70 => 'Your account is awaiting administrator approval.',
    71 => 'Your account has now been confirmed and is awaiting administrator approval.',
    72 => 'An error occured while attempting to install the plugin. See error.log for details.',
    73 => 'An error occured while attempting to uninstall the plugin. See error.log for details.',
    74 => 'The pingback has been successfully sent.',
    75 => 'Trackbacks must be sent using a POST request.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => 'Eri�im',
    'ownerroot' => 'Sahibi/Root',
    'group' => 'Grup',
    'readonly' => 'Salt Okunur',
    'accessrights' => 'Eri�im Haklar�',
    'owner' => 'Sahibi',
    'grantgrouplabel' => 'Yukar�daki Grup De�i�tirme Haklar�na �zin Ver',
    'permmsg' => 'NOT: �yeler bu sitenin, siteye girmi� olan �yelerine denir, ve Herhangi ise sitede bulundan ama siteye giri� yapmam�� herhangi bir kullan�c�ya denir.',
    'securitygroups' => 'G�venlik Gruplar�',
    'editrootmsg' => "Kullan�c� Y�neticisi olman�za ra�men root kullan�c�s�n�, root kullan�c�s� olmadan de�i�tiremezsiniz. Root kullan�c�s� d���nda herhangi bir kullan�c�y� de�i�tirebiliriniz. Root kullan�c�s�na olan izinsiz t�m etkinlikler kaydedilmektedir. L�tfen <a href=\"{$_CONF['site_admin_url']}/user.php\">Kullarn�c� Kontrol Sayfas�</a>'na geri d�n�n.",
    'securitygroupsmsg' => 'Kullan�c�n�n bulunmas�n� istedi�iniz gruplar� l�tfen se�iniz.',
    'groupeditor' => 'Grup D�zenleyicisi',
    'description' => 'Tan�m',
    'name' => 'Ad',
    'rights' => 'Haklar',
    'missingfields' => 'Eksik Bloklar',
    'missingfieldsmsg' => 'Gruba bir Ad ve Tan�m vermelisiniz.',
    'groupmanager' => 'Grup D�zenleyicisi',
    'newgroupmsg' => 'Bir grubu de�i�tirmek veya silmek istiyorsan�z, grubun ad�na bas�n�z. Yeni bir grup yaratmak i�in yukar�dan Yeni Grup d��mesine bas�n�z. Sistem taraf�ndan yarat�lm�� temel gruplar sistem taraf�ndan kullan�ld��� i�in silinemez.',
    'groupname' => 'Grup Ad�',
    'coregroup' => 'Temel Grubu',
    'yes' => 'Evet',
    'no' => 'Hay�r',
    'corerightsdescr' => "Bu grup bir temel {$_CONF['site_name']} grubudur.  Bu nedenden bu grubun eri�im haklar� de�i�tirlemez. A�a��da bu grubun hangi haklara sahip oldu�unun listesi bulunmaktad�r.",
    'groupmsg' => 'Bu sitede kullan�lan g�venlik gruplar� hiyerar�iktir. Bir grubu bu gruba ekleyerek bu grubun sahip oldu�u eri�im haklar�yla ayn� eri�im haklar�n� ekledi�iniz gruba vermi� olursunuz. Bir gruba g�venlik haklar� vermek i�in a�a��daki gruplar� kullanarak gruplar olu�turman� �nerilir. E�er bir gruba �zel haklar vermek istiyorsan�z, a�a��daki \'Haklar\' b�l�m�nden istedi�iniz �zellikleri se�ebilirsiniz. Bu grubu bir ba�ka grup(lar)�n alt�na eklemek i�in sadece a�a��daki gruplardan istediklerinizi se�in.',
    'coregroupmsg' => "Bu grup bir temel {$_CONF['site_name']} grubudur.  Bu y�zden bu grubun bulundu�u gruplar de�i�tirilemez. Bu grubun bulundu�u gruplar�n salt okunur listesi a�a��dad�r.",
    'rightsdescr' => 'Bir grubun bir eri�im hakk� buradan verilebilir veya grubun bir �st grubu varsa o gruba verilerek bu gurubun almas� sa�lanabilinir. A�a��da e�er se�me kutusu olmayan haklar varsa bunlar bu grubun �yesi oldu�u bir �st gruba verilmi� olan haklard�r. Se�me kutusu olan haklar� se�erek bu gruba daha geni� bir hak verebilirsiniz.',
    'lock' => 'Kilit',
    'members' => '�yeler',
    'anonymous' => '�simsiz Kullan�c�',
    'permissions' => '�zinler',
    'permissionskey' => 'R = oku, E = d�zenle, haklarda de�i�iklik yap',
    'edit' => 'De�i�tir',
    'none' => 'Hi�biri',
    'accessdenied' => 'Eri�im Engellendi',
    'storydenialmsg' => "Bu yaz�y� okuma yetkiniz yok. Bunun nedeni {$_CONF['site_name']} sitesinin bir �yesi olmaman�zdan kaynaklan�yor olabilir. L�tfen {$_CONF['site_name']} sitesinin <a href=users.php?mode=new> �yesi olun</a> ve sadece �yelere verilen haklara kavu�un!",
    'eventdenialmsg' => "Bu etkinli�i g�r�nt�leme yetkiniz yok. Bunun nedeni {$_CONF['site_name']} sitesinin bir �yesi olmaman�zdan kaynaklan�yor olabilir. L�tfen {$_CONF['site_name']} sitesinin <a href=users.php?mode=new> �yesi olun</a> ve sadece �yelere verilen haklara kavu�un!",
    'nogroupsforcoregroup' => 'Bu grup bir ba�ka gruba da�il de�il.',
    'grouphasnorights' => 'Bu grup, sitenin hi� bir y�netimsel �zelliklerine sahip de�il.',
    'newgroup' => 'Yeni Grup',
    'adminhome' => 'Kontrol Ana Sayfas�',
    'save' => 'kaydet',
    'cancel' => 'vazge�',
    'delete' => 'sil',
    'canteditroot' => 'Root grubu de�i�tirmeye �al��t�n�z, fakat root grubun bir �yesi de�ilsiniz. Bu nedenden eri�iminiz engellendi. E�er bunun bir hata oldu�unu d���n�yorsan�z sistem y�neticinize dan���n.',
    'listusers' => '�ye Listesi',
    'listthem' => 'liste',
    'usersingroup' => '�ye grubu %s',
    'usergroupadmin' => 'User Group Administration',
    'add' => 'Add',
    'remove' => 'Remove',
    'availmembers' => 'Available Members',
    'groupmembers' => 'Group Members',
    'canteditgroup' => 'To edit this group, you have to be a member of the group. Please contact the system administrator if you feel this is an error.',
    'cantlistgroup' => 'To see the members of this group, you have to be a member yourself. Please contact the system administrator if you feel this is an error.',
    'editgroupmsg' => 'To modify the group membership, click on the member names(s) and use the add or remove buttons. If the member is a member of the group, their name will appear on the right side only. Once you are complete - press <b>Save</b> to update the group and return to the main group admin page.',
    'listgroupmsg' => 'Listing of all current members in the group: <b>%s</b>',
    'search' => 'Search',
    'submit' => 'Submit',
    'limitresults' => 'Limit Results',
    'group_id' => 'Group ID',
    'plugin_access_denied_msg' => 'You are illegally trying access a plugin administration page.  Please note that all attempts to illegally access this page are logged.',
    'groupexists' => 'Group name already exists',
    'groupexistsmsg' => 'There is already a group with this name. Group names must be unique.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => 'Son 10 yedekleme',
    'do_backup' => 'Yedekleme Yap',
    'backup_successful' => 'Veritaban� yedeklemesi ba�ar�yla sonu�land�.',
    'db_explanation' => 'Geeklog sisteminin yeni bir yede�ini almak i�in, a�a��daki butona bas�n.',
    'not_found' => "Hatal� adres veya mysqldump program� �al��t�r�l�nam�yor.<br>config.php dosyan�zdaki <strong>\$_DB_mysqldump_path</strong> de�i�kenini kontrol edin.<br>De�i�ken �u anki de�eri: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Yedekleme ba�ar�s�z: Dosya boyutu 0 bayt idi.',
    'path_not_found' => "{$_CONF['backup_path']} adresi yok veya bir klas�r de�il",
    'no_access' => "HATA: Kals�r {$_CONF['backup_path']} eri�ilinemiyor.",
    'backup_file' => 'Yedek dosyas�',
    'size' => 'Boyut',
    'bytes' => 'Bayt',
    'total_number' => 'Toplam backup say�s�: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Ana Sayfa',
    2 => '�leti�im',
    3 => 'Yaz� Yaz�n',
    4 => 'Adresler',
    5 => 'Anketler',
    6 => 'Takvim',
    7 => 'Site �statistikleri',
    8 => '�zelle�tir',
    9 => 'Ara',
    10 => 'Geli�mi� Arama',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 Hatas�',
    2 => '�ff, her yere bakt�m ama <b>%s</b> bulamad�m.',
    3 => "<p>�zg�n�z, belirtti�iniz dosya bulunam�yor. L�tfen <a href=\"{$_CONF['site_url']}\">ana sayfa</a>ya veya <a href=\"{$_CONF['site_url']}/search.php\">arama sayfas�</a>'na bakarak kaybetti�iniz dok�man� bulabilecekmisiniz bir bak�n."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Sisteme giri� yapman�z gerekiyor',
    2 => '�zg�n�m, bu alana giri� yapabilmeniz i�in bir kullan�c� olarak giri� yapman�z gerekiyor.',
    3 => 'Giri� yap',
    4 => 'Yeni Kullan�c�'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'The PDF feature has been disabled',
    2 => 'The document provided was not rendered. The document was received but could not be processed.  Please make sure to submit only html formatted documents that have been written to the xHTML standard. Please note that overly complex html documents may not render correctly or at all.The document resulting from your attempt was 0 bytes in length, and has been deleted. If you\'re sure that your document should render fine, please re-submit it.',
    3 => 'Unknown error during PDF generation',
    4 => "No page data was given or you want to use the ad-hoc PDF generation tool below.  If you think you are getting this page\n          in error then please contact the system administrator.  Otherwise, you may use the form below to generate PDF's in an ad-hoc fashion.",
    5 => 'Loading your document.',
    6 => 'Please wait while your document is loaded.',
    7 => 'You may right click the button below and choose \'save target...\' or \'save link location...\' to save a copy of your document.',
    8 => "The path given in the configuration file to the HTMLDoc binary is invalid or this system cannot execute it.  Please contact the site administrator if this problem\n          persists.",
    9 => 'PDF Generator',
    10 => "This is the Ad-hoc PDF Generation tool. It will attempt to convert any URL you give into a PDF.  Please note that some web pages will not render properly with this feature.  This\n           is a limitation of the HTMLDoc PDF generation tool and such errors should not be reported to the administrators of this site",
    11 => 'URL',
    12 => 'Generate PDF!',
    13 => 'The PHP configuration on this server does not allow URLs to be used with the fopen() command.  The system administrator must edit the php.ini file and set allow_url_fopen to On',
    14 => 'The PDF you requested either does not exist or you tried to illegally access a file.'
);

###############################################################################
# trackback.php

$LANG_TRB = array(
    'trackback' => 'Trackback',
    'from' => 'from',
    'tracked_on' => 'Tracked on',
    'read_more' => '[read more]',
    'intro_text' => 'Here\'s what others have to say about \'%s\':',
    'no_comments' => 'No trackback comments for this entry.',
    'this_trackback_url' => 'Trackback URL for this entry:',
    'num_comments' => '%d trackback comments',
    'send_trackback' => 'Send Pings',
    'preview' => 'Preview',
    'editor_title' => 'Send trackback comment',
    'trackback_url' => 'Trackback URL',
    'entry_url' => 'Entry URL',
    'entry_title' => 'Entry Title',
    'blog_name' => 'Site Name',
    'excerpt' => 'Excerpt',
    'truncate_warning' => 'Note: The receiving site may truncate your excerpt',
    'button_send' => 'Send',
    'button_preview' => 'Preview',
    'send_error' => 'Error',
    'send_error_details' => 'Error when sending trackback comment:',
    'url_missing' => 'No Entry URL',
    'url_required' => 'Please enter at least a URL for the entry.',
    'target_missing' => 'No Trackback URL',
    'target_required' => 'Please enter a trackback URL',
    'error_socket' => 'Could not open socket.',
    'error_response' => 'Response not understood.',
    'error_unspecified' => 'Unspecified error.',
    'select_url' => 'Select Trackback URL',
    'not_found' => 'Trackback URL not found',
    'autodetect_failed' => 'Geeklog could not detect the Trackback URL for the post you want to send your comment to. Please enter it manually below.',
    'trackback_explain' => 'From the links below, please select the URL you want to send your Trackback comment to. Geeklog will then try to determine the correct Trackback URL for that post. Or you can <a href="%s">enter it manually</a> if you know it already.',
    'no_links_trackback' => 'No links found. You can not send a Trackback comment for this entry.',
    'pingback' => 'Pingback',
    'pingback_results' => 'Pingback results',
    'send_pings' => 'Send Pings',
    'send_pings_for' => 'Send Pings for "%s"',
    'no_links_pingback' => 'No links found. No Pingbacks were sent for this entry.',
    'pingback_success' => 'Pingback sent.',
    'no_pingback_url' => 'No pingback URL found.',
    'resend' => 'Resend',
    'ping_all_explain' => 'You can now notify the sites you linked to (<a href="http://en.wikipedia.org/wiki/Pingback">Pingback</a>), advertise that your site has been updated by pinging weblog directory services, or send a <a href="http://en.wikipedia.org/wiki/Trackback">Trackback</a> comment in case you wrote about a post on someone else\'s site.',
    'pingback_button' => 'Send Pingback',
    'pingback_short' => 'Send Pingbacks to all sites linked from this entry.',
    'pingback_disabled' => '(Pingback disabled)',
    'ping_button' => 'Send Ping',
    'ping_short' => 'Ping weblog directory services.',
    'ping_disabled' => '(Ping disabled)',
    'trackback_button' => 'Send Trackback',
    'trackback_short' => 'Send a Trackback comment.',
    'trackback_disabled' => '(Trackback disabled)',
    'may_take_a_while' => 'Please note that sending Pingbacks and Pings may take a while.',
    'ping_results' => 'Ping results',
    'unknown_method' => 'Unknown ping method',
    'ping_success' => 'Ping sent.',
    'error_site_name' => 'Please enter the site\'s name.',
    'error_site_url' => 'Please enter the site\'s URL.',
    'error_ping_url' => 'Please enter a valid Ping URL.',
    'no_services' => 'No weblog directory services configured.',
    'services_headline' => 'Weblog Directory Services',
    'service_explain' => 'To modify or delete a weblog directory service, click on the edit icon of that service below. To add a new weblog directory service, click on "Create New" above.',
    'service' => 'Service',
    'ping_method' => 'Ping method',
    'service_website' => 'Website',
    'service_ping_url' => 'URL to ping',
    'ping_standard' => 'Standard Ping',
    'ping_extended' => 'Extended Ping',
    'ping_unknown' => '(unknown method)',
    'edit_service' => 'Edit Weblog Directory Service',
    'trackbacks' => 'Trackbacks',
    'editor_intro' => 'Prepare your trackback comment for <a href="%s">%s</a>.',
    'editor_intro_none' => 'Prepare your trackback comment.',
    'trackback_note' => 'To send a trackback comment for a story, go to the list of stories and click on "Send Ping" for the story. To send a trackback that is not related to a story, <a href="%s">click here</a>.',
    'pingback_explain' => 'Enter a URL to send the Pingback to. The pingback will point to your site\'s homepage.',
    'pingback_url' => 'Pingback URL',
    'site_url' => 'This site\'s URL',
    'pingback_note' => 'To send a pingback for a story, go to the list of stories and click on "Send Ping" for the story. To send a pingback that is not related to a story, <a href="%s">click here</a>.',
    'pbtarget_missing' => 'No Pingback URL',
    'pbtarget_required' => 'Please enter a pingback URL',
    'pb_error_details' => 'Error when sending the pingback:'
);

###############################################################################
# directory.php

$LANG_DIR = array(
    'title' => 'Article Directory',
    'title_year' => 'Article Directory for %d',
    'title_month_year' => 'Article Directory for %s %d',
    'nav_top' => 'Back to Article Directory',
    'no_articles' => 'No articles.'
);

###############################################################################
# "What's New" Time Strings
# 
# For the first two strings, you can use the following placeholders.
# Order them so it makes sense in your language:
# %i    item, "Stories"
# %n    amount, "2", "20" etc.
# %t    time, "2" (weeks)
# %s    scale, "hrs", "weeks"

$LANG_WHATSNEW = array(
    'new_string' => '%n new %i in the last %t %s',
    'new_last' => 'last %t %s',
    'minutes' => 'minutes',
    'hours' => 'hours',
    'days' => 'days',
    'weeks' => 'weeks',
    'months' => 'months',
    'minute' => 'minute',
    'hour' => 'hour',
    'day' => 'day',
    'week' => 'week',
    'month' => 'month'
);

###############################################################################
# Admin - Strings
# 
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array(
    'search' => 'Search',
    'limit_results' => 'Limit Results',
    'submit' => 'Submit',
    'edit' => 'Edit',
    'admin_home' => 'Admin Home',
    'create_new' => 'Create New',
    'enabled' => 'Enabled',
    'title' => 'Title',
    'type' => 'Type',
    'topic' => 'Topic',
    'help_url' => 'Help File URL',
    'save' => 'Save',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'copy' => 'Copy',
    'no_results' => '- No entries found -',
    'data_error' => 'There was an error processing the subscription data. Please check the data source.'
);

###############################################################################
# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0 => 'Comments Enabled',
    -1 => 'Comments Disabled'
);


$LANG_commentmodes = array(
    'flat' => 'Flat',
    'nested' => 'Nested',
    'threaded' => 'Threaded',
    'nocomment' => 'No Comments'
);

$LANG_cookiecodes = array(
    0 => '(don\'t)',
    3600 => '1 Hour',
    7200 => '2 Hours',
    10800 => '3 Hours',
    28800 => '8 Hours',
    86400 => '1 Day',
    604800 => '1 Week',
    2678400 => '1 Month'
);

$LANG_dateformats = array(
    0 => 'System Default'
);

$LANG_featurecodes = array(
    0 => 'Not Featured',
    1 => 'Featured'
);

$LANG_frontpagecodes = array(
    0 => 'Show Only in Topic',
    1 => 'Show on Front Page'
);

$LANG_postmodes = array(
    'plaintext' => 'Plain Old Text',
    'html' => 'HTML Formatted'
);

$LANG_sortcodes = array(
    'ASC' => 'Oldest First',
    'DESC' => 'Newest First'
);

$LANG_trackbackcodes = array(
    0 => 'Trackback Enabled',
    -1 => 'Trackback Disabled'
);

?>