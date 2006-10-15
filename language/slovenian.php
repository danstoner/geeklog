<?php

###############################################################################
# slovenian.php
# language file for geeklog version 1.4.1 beta by mb
# gape@gape.org ; za pripombe, predloge ipd ... pi�i na email
#
# This is the slovenian language page for GeekLog!
# Special thanks to Mischa Polivanov for his work on this project
#
# Copyright (C) 2000 Jason Whittenburg
# jwhitten@securitygeeks.com
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
###############################################################################

$LANG_CHARSET = 'windows-1250';

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
    1 => 'Pi�e:',
    2 => 'Beri dalje',
    3 => 'komentarjev.',
    4 => 'Uredi',
    5 => 'Anketa',
    6 => 'Rezultati',
    7 => 'Rezultati ankete',
    8 => 'glasov<br>',
    9 => 'Administracijske funkcije:',
    10 => '�akajo�a vsebina',
    11 => '�lanki',
    12 => 'Bloki',
    13 => 'Rubrike',
    14 => 'Povezave',
    15 => 'Dogodki',
    16 => 'Ankete',
    17 => 'Uporabniki',
    18 => 'SQL poizvedovanje',
    19 => 'Izhod iz sistema',
    20 => 'Podatki o uporabniku:',
    21 => 'Uporabni�ko ime',
    22 => 'Uporabni�ki ID',
    23 => 'Varnostni nivo',
    24 => 'Anonimni uporabnik',
    25 => 'Komentiraj',
    26 => 'Za komentarje so odgovorni njihovi avtorji. Avtorji spletne strani na komentarje obiskovalcev nimamo nobenega vpliva.',
    27 => 'Zadnjikrat komentirano',
    28 => 'Izbri�i',
    29 => 'Ni komentarjev.',
    30 => 'Starej�i �lanki',
    31 => 'Dovoljeni HTML ukazi:',
    32 => 'Napaka, neveljavno uporabni�ko ime',
    33 => 'Napaka, ne morem shranjevati v log datoteko',
    34 => 'Napaka',
    35 => 'Izhod iz sistema',
    36 => 'dne',
    37 => 'Ni �lankov',
    38 => 'Zdru�evanje vsebine (Syndication)',
    39 => 'Osve�i',
    40 => 'Izklju�ene so <tt>register_globals = Off</tt> v <tt>php.ini</tt>. Geeklog zahteva <tt>register_globals</tt> <strong>vklju�ene</strong>. Preden nadaljuje�, jih prosim <strong>vklju�i</strong> in ponovno za�eni spletni stre�nik.',
    41 => 'Gostje',
    42 => 'Prispeval/a:',
    43 => 'Odgovori na to',
    44 => 'Star�',
    45 => 'MySQL �tevilka napake',
    46 => 'MySQL sporo�ilo o napaki',
    47 => 'Prijava uporabnika',
    48 => 'Podatki o uporabni�kem ra�unu',
    49 => 'Nastavitve',
    50 => 'Napaka v SQL ukazu',
    51 => 'Pomo�',
    52 => 'Novo',
    53 => 'Skrbnikova stran',
    54 => 'Ne morem odpreti datoteke',
    55 => 'Napaka na',
    56 => 'Glasuj',
    57 => 'Geslo',
    58 => 'Prijava',
    59 => "Nisi registriran uporabnik?  <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Registrirajte se</a>.",
    60 => 'Dodaj komentar',
    61 => 'Nov uporabnik',
    62 => 'besed',
    63 => 'Nastavitve komentarjev',
    64 => 'Po�lji �lanek prijatelju po e-po�ti',
    65 => 'Za tisk prijazna stran',
    66 => 'Osebni koledar',
    67 => 'Dobrodo�li na ',
    68 => 'Domov',
    69 => 'Kontakt',
    70 => 'I��i',
    71 => 'Dodaj �lanek',
    72 => 'Zanimive povezave',
    73 => 'Pretekle ankete',
    74 => 'Koledar dogodkov',
    75 => 'Napredno iskanje',
    76 => 'Statistika spletne strani',
    77 => 'Priklju�eni moduli',
    78 => 'Dogodki',
    79 => 'Kaj je novega',
    80 => '�lankov v zadnjih',
    81 => '�lanek v zadnjih',
    82 => 'urah',
    83 => 'KOMENTARJI BRALCEV<br>',
    84 => 'POVEZAVE<br>',
    85 => 'v zadnjih 48 urah',
    86 => 'ni novih komentarjev',
    87 => 'v zadnjih 2 tednih',
    88 => 'ni novih povezav',
    89 => 'Trenutno ni nobenih prihajajo�ih dogodkov.',
    90 => 'Na osnovno stran',
    91 => 'Spletna stran generirana v',
    92 => 'sekundah',
    93 => 'Copyright',
    94 => 'Vsa na�a koda pripada vam.',
    95 => 'Gnano z',
    96 => 'Uporabni�ke skupine',
    97 => 'Seznam besed',
    98 => 'Priklju�ni moduli',
    99 => '�LANKI',
    100 => 'Ni novih �lankov',
    101 => 'Va�i dogodki',
    102 => 'Najavljeno je:',
    103 => 'Varnostne kopije DB',
    104 => 'z',
    105 => 'Po�iljanje e-po�te',
    106 => 'Ogledov',
    107 => 'GL Test verzije',
    108 => 'Izprazni cache',
    109 => 'Prijavi zlorabo',
    110 => 'Prijavi ta prispevek skrbniku strani',
    111 => 'Razli�ica PDF',
    112 => 'Prijavljeni uporabniki',
    113 => 'Dokumentacija',
    114 => 'TRACKBACKS',
    115 => 'Ni novih trackback komentarjev',
    116 => 'Trackback',
    117 => 'Directory',
    118 => 'Beri dalje na naslednji strani:',
    119 => "Si izgubil svoje <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">geslo</a>?",
    120 => 'Trajna povezava na ta komentar',
    121 => 'Komentarji (%d)',
    122 => 'Trackbacks (%d)',
    123 => 'Dovoljen je ves HTML',
    124 => 'Klikni za izbris vseh preverjenih predmetov',
    125 => 'Ho�e� res izbrisati vse preverjene predmete?',
    126 => 'Izberi ali prekli�i vse predmete'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => 'Po�iljanje komentarja',
    2 => 'Oblika besedila',
    3 => 'Odjava',
    4 => 'Registrirajte se',
    5 => 'Uporabni�ko ime',
	6 => 'Za objavo komentarjev na tej spletni strani je treba biti registriran. �e �e nima� svojega uporabni�kega imena in gesla, klikni spodaj.',
    7 => 'Tvoj zadnji komentar je bil objavljen pred ',
    8 => " sekundami.  Med posameznimi komentarji istega uporabnika mora prete�i vsaj {$_CONF['commentspeedlimit']} sekund.",
    9 => 'Komentar',
    10 => 'Po�lji prijavo',
    11 => 'Oddaj komentar',
	12 => 'Za objavo komentarja izpolni polji Naslov in Komentar,  ker je to za  oddajo vsebine nujno.',
    13 => 'Tvoji podatki',
    14 => 'Predogled',
    15 => 'Prijavite ta komentar',
    16 => 'Naslov',
    17 => 'Napaka',
    18 => 'Pomembno',
    19 => 'Sku�aj se prosim dr�ati teme rubrike, v kateri je objavljen �lanek.',
    20 => 'Raje odgovarjaj na komentarje drugih, namesto da za�ne� novo nit (thread).',
    21 => 'Pred objavo svojega komentarja preberi druge, da ne bo ponavljanja. Morda je kdo �e povedal kaj, kar namerava� napisati.',
    22 => 'Uporabi tak naslov, da bo jasno, o �em govori tvoj komentar.',
    23 => 'Tvoj e-naslov ne bo javno objavljen.',
    24 => 'Anonimni uporabnik',
    25 => 'Ho�e� ta prispevek res prijaviti skrbniku strani?',
    26 => '%s je prijavil slede�i prispevek, ki zlorablja:',
    27 => 'Prijava zlorabe'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Uporabnik',
    2 => 'Uporabni�ko ime',
    3 => 'Ime',
    4 => 'Geslo',
    5 => 'Elektronski naslov',
    6 => 'Spletna stran',
    7 => 'Opis',
    8 => 'Javni klju� PGP',
    9 => 'Shrani podatke',
    10 => 'Zadnjih 10 komentarjev uporabnika',
    11 => 'Uporabnik ni prispeval nobenih komentarjev',
    12 => 'Uporabni�ke nastavitve za',
    13 => 'Po�lji no�ni pegled',
    14 => 'Geslo se generira naklju�no. Priporo�ljivo je, da geslo takoj spremenite. To storite s klikom na Informacije o ra�unu v  meniju Osebne nastavitve. Za spremembe osebnih nastavitev se je treba prijaviti v sistem.',
    15 => 'Tvoj uporabni�ki ra�un na tej spletni strani je bil uspe�no ustvarjen. �e ga ho�e� uporabljati, se mora� prijaviti s spodnjimi podatki. Prosim shrani to e-po�to za  potrebe v prihodnje.',
    16 => 'Podatki o tvojem uporabni�kem ra�unu',
    17 => 'Uporabni�ki ra�un ne obstaja',
    18 => 'Vneseni e-naslov ni veljaven',
    19 => 'Vneseno uporabni�ko ime ali e-naslov �e obstaja',
    20 => 'Vneseni e-naslov ni veljaven',
    21 => 'Napaka',
    22 => "Registracija {$_CONF['site_name']}!",
    23 => "Ustvarjenje uporabni�kega ra�una omogo�a uporabo vseh ugodnosti na spletni strani {$_CONF['site_name']}. Lahko bo� v svojem imenu objavljal komentarje ter oddajal �lanke in slike.  Brez uporabni�kega ra�una lahko objavlja� le anonimno. <font color=red>Elektronski naslovi registriranih uporabnikov na tej spletni strani ne bodo <b><i>nikoli</i></b> javno prikazani.",
    24 => 'Tvoje geslo bo poslano na vneseni e-naslov.',
    25 => 'Si pozabil/a geslo?',
    26 => 'Vnesi <em>uporabni�ko ime</em> <em>ali</em> e-naslov, s katerim si se registriral/a, in klikni gumb Po�lji geslo po e-po�ti. Navodila za nastavitev novega gesla bodo poslana na registrirani e-naslov.',
    27 => 'Registriraj se',
    28 => 'Po�lji geslo na e-naslov',
    29 => 'odjava',
    30 => 'prijava',
    31 => 'Za izvedbo te funkcije se je treba prijaviti',
    32 => 'Podpis',
    33 => 'Nikoli se ne prika�e javno',
    34 => 'Tvoje pravo ime',
    35 => 'Vpi�i spremenjeno geslo',
    36 => 'Za�ne se s http://',
    37 => 'Nastavitve komentarjev',
    38 => 'To lahko prebere vsakdo',
    39 => 'Javni klju� PGP',
    40 => 'Brez ikone rubrike',
    41 => 'Pripravljen moderirati',
    42 => 'Oblika zapisa datuma',
    43 => 'Najve� �lankov',
    44 => 'Brez okvirjev',
    45 => 'Prika�i nastavitve za',
    46 => 'Izklju�eni deli',
    47 => 'Nastavitve novosti za',
    48 => 'Rubrike',
    49 => 'Brez ikon v �lankih',
    50 => '�e te ne zanima, odstrani oznako',
    51 => 'Samo novi �lanki',
    52 => 'Privzeta nastavitev je 10',
    53 => 'Prejmi nove �lanke vsako no�',
    54 => 'Ozna�i rubrike in avtorje, katerih prispevki te ne zanimajo',
    55 => '�e pusti� prazno, se bodo ohranile privzete nastavitve. �e za�ne� izbirati bloke, izberi vse, ki jih �eli�, ker se bodo prikazali samo izbrani (brez privzetih). Privzeti vnosi so prikazani <B> krepko</B>.',
    56 => 'Avtorji',
    57 => 'Oblikovanje',
    58 => 'Uredi po',
    59 => 'Omejitve komentarja',
    60 => 'Kako naj bodo izpisani tvoji komentarji?',
    61 => 'Najprej najnovej�i ali najstarej�i?',
    62 => 'Prevzeta vrednost je 100',
    63 => "Geslo je bilo poslano na tvoj e-naslov in bi moralo prispeti vsak hip. Sledi prosim navodilom, ki jih bo� prejel/a. Hvala, da uporablja� spletno stran {$_CONF['site_name']}.",
    64 => 'Nastavitve komentarjev za',
    65 => 'Poskusi se prijaviti ponovno',
    66 => "Morda si se zmotil/a pri vnosu svojega uporabni�kega imena ali gesla. Poskusi se ponovno prijaviti. Si morda �e neregistriran uporabnik? V tem primeru se <a href=\"{$_CONF['site_url']}/users.php?mode=new\">registriraj</a>.",
    67 => 'Uporabnik od',
    68 => 'Zapomni si me za',
    69 => 'Koliko �asa po zadnji prijavi naj si te zapomnim?',
    70 => "Priredi postavitev in vsebino spletne strani {$_CONF['site_name']}",
    71 => "Ena od posebnosti spletne strani {$_CONF['site_name']} je mo�nost popolnega prilagajanja izgleda posameznemu uporabniku.  �e ho�e� uporabiti to mo�nost, se mora� najprej <a href=\"{$_CONF['site_url']}/users.php?mode=new\">prijaviti</a> na {$_CONF['site_name']}. Si �e postal/a registrirani uporabnik? Prijavi se!",
    72 => 'Tema',
    73 => 'Jezik',
    74 => 'Spremeni izgled strani.',
    75 => 'Rubrike po e-po�ti za',
    76 => '�e  na spodnjem seznamu izbere� rubriko, bo� nove �lanke, objavljene v njej, ob koncu vsakega dneva prejel/a po e-po�ti. Izberi le rubrike, ki te zanimajo.',
    77 => 'Slika',
    78 => 'Dodaj svojo sliko.',
    79 => 'Izbri�i izbrano sliko',
    80 => 'Prijava',
    81 => 'Po�lji e-po�to',
    82 => 'Zadnjih 10 �lankov uporabnika',
    83 => 'Statistika uporabnikovih objav',
    84 => 'Skupno �tevilo �lankov:',
    85 => 'Skupno �tevilo komentarjev:',
    86 => 'Najdi vse objave uporabnika',
    87 => 'Tvoje uporabni�ko ime',
    88 => "Nekdo (verjetno ti) je zahteval novo geslo za tvoj ra�un  \"%s\" na {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\n�e res ho�e� novo geslo, prosim klikni povezavo: \n\n",
    89 => "�e no�e� novega gesla, to sporo�ilo preprosto prezri. Zahteva bo zavr�ena in tvoje geslo bo ostalo nespremenjeno.\n\n",
    90 => 'Spodaj lahko vpi�e� novo geslo za svoj ra�un. Staro geslo bo veljalo, dokler ne odda� tega obrazca.',
    91 => 'Nastavljanje novega gesla',
    92 => 'Vpi�i novo geslo',
    93 => 'Tvoja zadnja zahteva za novo geslo je bila sprejeta pred %d sekundami. Ta stran zahteva, da med spremembami gesla prete� vsaj %d sekund.',
    94 => 'Izbri�i ra�un "%s"',
    95 => 'Za izbris svojega uporabni�kega ra�una iz na�e baze podatkov klikni spodnji gumb "Izbri�i ra�un". Vsi prispevki, ki si jih prispeval/a pod tem ra�unom, bodo <strong>ostali</strong> na na�ih straneh, ime objavitelja pa bo spremenjeno v "Anonimne�".',
    96 => 'Izbri�i ra�un',
    97 => 'Potrdi brisanje ra�una',
    98 => 'Ho�e� res izbrisati svoj uporabni�ki ra�un? Po tem dejanju prijava na na�o spletno stran ne bo ve� mogo�a, razen �e si ustvari� nov ra�un. �e si prepri�an/a o izbrisu, ponovno klikni "Izbri�i ra�un" v spodnjem obrazcu.',
    99 => 'Nastavitve zasebnosti za',
    100 => 'Skrbnikov e-naslov',
    101 => 'Dovoli e-po�to skrbnikov strani',
    102 => 'E-po�ta uporabnikov',
    103 => 'Dovoli e-po�to drugih uporabnikov strani',
    104 => 'Prika�i status Na liniji',
    105 => 'Dovoli prikaz v bloku Na liniji so',
    106 => 'Mesto',
    107 => 'Prikazano v tvojem javnem profilu',
    108 => 'Potrdi novo geslo',
    109 => 'Ponovno vnesi novo geslo',
    110 => 'Trenutno veljavno geslo',
    111 => 'Ponovno vnesi trenutno veljavno geslo',
    112 => '�tevilo dovoljenih poskusov prijave je bilo prese�eno.  Prosim poskusi ponovno pozneje.',
    113 => 'Poskus prijave je spodletel',
    114 => 'Ra�un je onemogo�en',
    115 => 'Tvoj ra�un je bil onemogo�en, ne more� se prijaviti. Prosim sporo�i to skrbniku.',
    116 => 'Ra�un �aka na potrditev',
    117 => 'Tvoj ra�un trenutno �aka na potrditev skrbnika. Dokler ra�un ni potrjen, se ne more� prijaviti.',
    118 => "Tvoj ra�un na strani {$_CONF['site_name']} je sedaj potrdil skrbnik. Sedaj se lahko na spletno stran prijavi� na spodnji povezavi s svojim uporabni�kim imenom (<username>) in geslom, ki si ju prejel po e-po�ti.",
    119 => '�e si pozabil/a svoje geslo, lahko zahteva� novega na tej povezavi:',
    120 => 'Ra�un potrjen',
    121 => 'Storitev',
    122 => '�al je registracija novih uporabnikov onemogo�ena.',
    123 => "Si <a href=\"{$_CONF['site_url']}/users.php?mode=new\">nov uporabnik</a>?",
    124 => 'Potrdi e-naslov',
    125 => 'V obe polji mora� vnesti isti e-naslov.',
    126 => 'Ponovi za potrditev.',
    127 => 'Za spremembo katere koli od teh nastavitev mora� vpisati svoje veljavno geslo.',
    128 => 'Tvoje ime',
    129 => 'Geslo &amp; e-naslov',
    130 => 'O tebi',
    131 => 'Mo�nost dnevnih pregledov',
    132 => 'Funkcija dnevnih pregledov',
    133 => 'Prikaz komentarjev',
    134 => 'Mo�nosti komentarjev',
    135 => '<li>Privzeti na�in za prikaz komentarjev</li><li>Privzeti vrstni red za prikaz komentarjev</li><li>Nastavi najve�je �tevilo prikazanih komentarjev - privzeto je 100</li>',
    136 => 'Izlo�i rubrike in avtorje',
    137 => 'Filtriraj vsebino �lanka',
    138 => 'Druge nastavitve',
    139 => 'Postavitev in jezik',
    140 => '<li>�e je mo�nost Brez ikone rubrike potrjena, ikone rubrik ne bodo prikazane</li><li>�e je mo�nost Brez okenca potrjena, bodo prikazani le skrbnikov meni, uporabni�ki meni in teme<li>Nastavi najve�je �tevilo na eni strani prikazanih �lankov</li><li>Nastavi svojo temo in �eleni zapis datuma</li>',
    141 => 'Zasebne nastavitve',
    142 => 'Privzeta nastavitev uporabnikom in skrbnikom omogo�a, da po�iljajo e-po�to drugim �lanom spletne strani in da je tvoje stanje prikazano kot Na liniji. Za za��ito zasebnosti te mo�nosti odzna�i. ',
    143 => 'Filtriraj vsebino bloka',
    144 => 'Prika�i in skrij okenca',
    145 => 'Tvoj javni profil',
    146 => 'Geslo in e-naslov',
    147 => 'Uredi geslo svojega ra�una, e-naslov in funkcijo samodejne prijave. Za potrditev bo treba isto geslo ali e-naslov vnesti dvakrat.',
    148 => 'Uporabni�ke informacije',
    149 => 'Spremeni svoje uporabni�ke informacije, ki bodo vidne drugim uporabnikom.<li>Podpis bo dodan k vsem tvojim komentarjem in objavam na forumu</li><li>BIO je kratek povzetek o tebi, ki ga �eli� deliti z drugimi</li><li>Deli z drugimi svoj klju� PGP</li>',
    150 => 'Opozorilo: Javascript priporo�en za raz�irjeno funkcionalnost',
    151 => 'Predogled',
    152 => 'Uporabni�ko ime in geslo',
    153 => 'Postavitev in jezik',
    154 => 'Vsebina',
    155 => 'Zasebnost',
    156 => 'Izbri�i ra�un'
);

###############################################################################
# index.php

$LANG05 = array(
    1 => 'Ni novic za prikaz',
    2 => 'Trenutno v tej rubriki ni nobene nove objave ali pa ima� v svojih uporabni�kih nastavitvah izbrane omejitve.',
    3 => ' za rubriko %s',
    4 => 'Dana�nji udarni �lanek',
    5 => 'naslednja',
    6 => 'prej�nja',
    7 => 'prva',
    8 => 'zadnja'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Napaka pri po�iljanju sporo�ila. Poskusi znova.',
    2 => 'Sporo�ilo je bilo uspe�no poslano',
    3 => 'Prepri�aj se, da je v polje Odgovori vnesen pravi e-naslov.',
    4 => 'Izpolni polja Tvoje ime, Odgovori, Zadeva in Sporo�ilo',
    5 => 'Napaka: Neznan uporabnik.',
    6 => 'Pri�lo je do napake.',
    7 => 'Uporabni�ki profil za',
    8 => 'Uporabni�ko ime',
    9 => 'Naslov URL',
    10 => 'Po�lji e-po�to k',
    11 => 'Tvoje ime:',
    12 => 'Odgovori:',
    13 => 'Zadeva:',
    14 => 'Sporo�ilo:',
    15 => 'HTML ukazi ne bodo upo�tevani.',
    16 => 'Po�lji sporo�ilo',
    17 => 'Po�lji �lanek prijatelju',
    18 => 'Ime prijatelja',
    19 => 'E-naslov prijatelja',
    20 => 'Tvoje ime',
    21 => 'Tvoj e-naslov',
    22 => 'Izpolniti je treba vsa polja',
    23 => "To ni ne�elena po�ta (SPAM). Sporo�ilo vam je poslal obiskovalec %s (%s) s spletne strani {$_CONF['site_url']}, ker je menil, da vas to utegne zanimati.  Va�ih podatkov nismo nikamor shranili.",
    24 => '�lanek lahko komentirate tukaj:',
    25 => 'Za uporabo te funkcije se je treba prijaviti. Prijava nam pomaga prepre�evati morebitne zlorabe sistema.',
    26 => 'S tem obrazcem lahko izbranemu uporabniku po�lje� e-po�to. Izpolniti je treba vsa polja.',
    27 => 'Kratko sporo�ilo',
    28 => 'Obiskovalec %s je napisal: ',
    29 => "To je dnevni pregled strani od {$_CONF['site_name']} za ",
    30 => 'Dnevne novice za',
    31 => 'Naslov',
    32 => 'Datum',
    33 => 'Preberi celotno besedilo na povezavi ',
    34 => 'Konec sporo�ila',
    35 => '�al ta uporabnik ne �eli prejemati e-po�te.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Napredno iskanje',
    2 => 'Klju�ne besede',
    3 => 'Rubrika',
    4 => 'Vse',
    5 => 'Podro�ja iskanja',
    6 => '�lanki',
    7 => 'Komentarji',
    8 => 'Avtorji',
    9 => 'Vse',
    10 => 'I��i',
    11 => 'Rezultati iskanja',
    12 => 'Zadetki',
    13 => 'Rezultati iskanja: Ni zadetkov',
    14 => 'Za iskano besed(il)o ni nobenega zadetka.',
    15 => 'Prosim poskusite ponovno.',
    16 => 'Naslov',
    17 => 'Datum',
    18 => 'Avtor',
    19 => 'Iskanje po celotni bazi podatkov vseh �lankov in komentarjev',
    20 => 'Datum',
    21 => 'do',
    22 => '(oblika zapisa datuma YYYY-MM-DD)',
    23 => '�tevilo ogledov',
    24 => '�tevilo najdenih predmetov: %d ',
    25 => 'Iskal sem',
    26 => 'zadetkov ',
    27 => 'sekund',
    28 => 'Iskalnemu pogoju ne ustreza noben �lanek ali komentar',
    29 => 'Rezultati iskanja',
    30 => '',
    31 => 'Za ta vti�nik ni zadetkov .',
    32 => '',
    33 => 'URL',
    34 => 'Lokacija',
    35 => 'Celodnevno dogajanje',
    36 => '',
    37 => '',
    38 => '',
    39 => '',
    40 => '',
    41 => 'Iskalni niz mora imeti vsaj tri znake.',
    42 => 'Datum naj bo prikazan na na�in: LLLL-MM-DD (leto-mesec-dan).',
    43 => 'to�na fraza',
    44 => 'vse besede',
    45 => 'katerakoli beseda',
    46 => 'Naslednji',
    47 => 'Prej�nji',
    48 => 'Avtor',
    49 => 'Datum',
    50 => 'Zadetki',
    51 => '',
    52 => 'Lokacija',
    53 => 'Rezultati �lankov',
    54 => 'Rezultati komentarjev',
    55 => 'fraza',
    56 => 'IN',
    57 => 'ALI',
    58 => 'Ve�  rezultatov &gt;&gt;',
    59 => 'Rezultati',
    60 => 'na stran',
    61 => 'Podrobnej�e iskanje'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Statistike spletne strani',
    2 => '�tevilo vseh obiskov strani',
    3 => '�tevilo objavljenih �lankov (komentarjev)',
    4 => '',
    5 => '',
    6 => '',
    7 => 'Deset najbolj ogledovanih �lankov',
    8 => 'Naslov �lanka',
    9 => '�t. ogledov',
    10 => 'Na spletni strani ni objavljenih �lankov ali pa si jih ni �e nih�e ogledal.',
    11 => 'Deset najbolj komentiranih �lankov',
    12 => '�t. komentarjev',
    13 => 'Na spletni strani ni objavljenih komentarjev ali pa si jih ni �e nih�e ogledal.',
    14 => '',
    15 => '',
    16 => '',
    17 => '',
    18 => '',
    19 => '',
    20 => '',
    21 => '',
    22 => 'Deset najve� po e-po�ti posredovanih �lankov',
    23 => '�t. posredovanj',
    24 => 'Nih�e ni posredoval nobenega �lanka po e-po�ti.',
    25 => 'Deset najbolj Trackback komentiranih �lankov',
    26 => 'Najden ni bil noben trackback ckmentar.',
    27 => '�tevilo aktivnih uporabnikov',
    28 => '',
    29 => '',
    30 => 'Zadetki',
    31 => ''
);

###############################################################################
# article.php

$LANG11 = array(
    1 => 'Sorodne povezave',
    2 => 'Po�lji �lanek prijatelju po e-po�ti',
    3 => 'Za tisk prijazna stran',
    4 => 'Dodatne mo�nosti',
    5 => '�lanek v formatu PDF'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => '�e �eli� objaviti %s, se mora� prijaviti kot uporabnik.',
    2 => 'Prijava',
    3 => 'Nov uporabnik',
    4 => '',
    5 => '',
    6 => 'Oddaj �lanek',
    7 => 'Treba se je prijaviti',
    8 => 'Oddaj',
    9 => 'Pri oddajanju podatkov za uporabo na tem spletnem mestu prosim upo�tevaj naslednja priporo�ila: <ul><li>Izpolni vsa polja.<li>Poskrbi, da bodo podatki celostni in to�ni.<li>Upo�tevaj pravopis.<li>Preveri, da delujejo vse povezave.<li><font color=red>Po�iljaj <b>samo �lanke in dogodke</b>. Komentarje vpisuj pod posamezne �lanke, za splo�ne debate in mnenja pa uporabi forum.</font><li>V naslov NE pi�i celih besed z VELIKIMI �rkami. Besedila, ki bodo zapisana z velikimi �rkami, bomo v celoti prekodirali v male �rke.</li> <br> <b>Pri vna�anju dogodka ali oglasa: </b><li>Uredni�tvo si pridr�uje pravico, da ne objavi dogodkov in oglasov, ki niso v skladu z navedenimi pogoji, ki imajo sporno vsebino in/ali ki niso v skladu z veljavno zakonodajo Republike Slovenije.<li>Pri vpisu ponudbe za  delavnice, seminarje, storitve, zaposlitve idr. v oknu z besedilom oglasa (polje opis dogodka ali vsebina �lanka)  v skladu z zakonodajo <b>obvezno navedite �e</b><ul><li>naziv podjetja ter ime in priimek odgovorne osebe oziroma ime in priimek naro�nika oglasa (�e ne gre za podjetje ali organizacijo) ,<li>sede� podjetja, organizacije ali naslov naro�nika oglasa (�e ne gre za podjetje).</ul>',
    10 => 'Naslov',
    11 => '',
    12 => 'Datum za�etka',
    13 => 'Datum zaklju�ka',
    14 => 'Lokacija',
    15 => 'Opis',
    16 => '',
    17 => '',
    18 => '',
    19 => 'Najprej preberi',
    20 => '',
    21 => '',
    22 => 'Napaka: Niso izpolnjena vsa polja',
    23 => 'Izpolnite vsa polja obrazca. Zahtevana so vsa.',
    24 => 'Shranjeno',
    25 => 'Tvoj prispevek %s je bil uspe�no shranjen.',
    26 => 'Omejitev hitrosti',
    27 => 'Uporabni�ko ime',
    28 => 'Rubrika',
    29 => '�lanek',
    30 => 'Tvoja zadnja objava je bila poslana pred ',
    31 => " sekundami. Med objavami istega uporabnika mora prete�i vsaj {$_CONF['speedlimit']} sekund.",
    32 => 'Predogled',
    33 => 'Predogled �lanka',
    34 => 'Odjava',
    35 => 'Ukazi HTML niso dovoljeni',
    36 => 'Oblika besedila',
    37 => '',
    38 => '',
    39 => '',
    40 => '',
    41 => '',
    42 => '',
    43 => '',
    44 => 'Naslov 1',
    45 => 'Naslov 2',
    46 => 'Mesto/kraj',
    47 => 'Pokrajina',
    48 => 'Po�tna �tevilka',
    49 => '',
    50 => '',
    51 => 'Lokacija',
    52 => 'Zbri�i',
    53 => 'Ustvari ra�un'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Obvezno preverjanje pristnosti',
    2 => 'Dostop zavrnjen! Napa�ni prijavni podaki.',
    3 => 'Napa�no uporabni�ko geslo',
    4 => 'Uporabni�ko ime:',
    5 => 'Geslo:',
    6 => 'Vsi dostopi do skrbni�kih delov tega spletnega mesta se bele�ijo in pregledujejo.<br>Te strani lahko uporabljajo samo poobla��ene osebe.<p>',
    7 => 'prijava'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Ni ustreznih skrbni�kih pravic',
    2 => 'Za urejanje tega bloka nima� potrebnih skrbni�kih pravic.',
    3 => 'Urejanje blokov',
    4 => 'Pri branju je nastala te�ava (za podrobnosti glej error.log).',
    5 => '',
    6 => '',
    7 => 'Vse',
    8 => 'Varnostna raven bloka',
    9 => 'Pravila bloka',
    10 => '',
    11 => 'Blok na portalu',
    12 => 'Obi�ajni blok',
    13 => 'Nastavitve bloka na portalu',
    14 => 'RDF URL',
    15 => 'Zadnja posodobitev RDF',
    16 => 'Nastavitve obi�ajnega bloka',
    17 => 'Vsebina bloka',
    18 => 'Izpolni polji Naslov bloka in Vsebina bloka',
    19 => 'Upravitelj bloka',
    20 => '',
    21 => 'Varnostna raven bloka',
    22 => '',
    23 => 'Pravila bloka',
    24 => '',
    25 => 'Za spreminjanje ali izbris bloka klikni na njegovo spodnjo ikono za urejanje. �e ho�e� ustvariti nov blok, klikni na "Ustvari" zgoraj. �e ho�e� blok premakniti, klikni na pu��ici ali v polji [R] in [L].',
    26 => 'Izgled bloka',
    27 => 'Blok PHP',
    28 => 'Nastavitve bloka PHP',
    29 => 'Funkcije bloka',
    30 => '�e �eli�, da blok uporablja kodo PHP, zgoraj vpi�i ime funkcije. Ime funkcije se mora za�eti s "phpblock_" (npr. phpblock_getweather). Brez te predpone funkcija NE bo klicana. Zaradi tega tisti, ki bi morda vdrli v to namestitev Geekloga, ne bi mogli poljubno spreminjati kode in �kodovati sistemu. Pazi, da za ime funkcije ne vstavi� praznih oklepajev "()". Priporo�amo, da vso kodo svojega bloka PHP, vpisujete v /pot/do/geekloga/system/lib-custom.php. Tako se bo ta koda brez te�av ohranila tudi po nadgradnji Geekloga.',
    31 => 'Napaka v bloku PHP. Funkcija %s ne obstaja.',
    32 => 'Napaka. Manjkajo podatki.',
    33 => 'Vnesi naslov URL v datoteko .rdf za blok na portalu',
    34 => 'Vnesi naslov in funkcijo PHP bloka',
    35 => 'Vnesi naslov in vsebino bloka',
    36 => 'Vnesi vsebino in izberi izgled bloka',
    37 => 'Napa�no ime funkcije bloka PHP',
    38 => 'Funkcije bloka PHP morajo imeti predpono \'phpblock_\' (npr. phpblock_imefunkcije).  Predpona \'phpblock_\' je potrebna zaradi varnosti.',
    39 => 'Stran',
    40 => 'Levo',
    41 => 'Desno',
    42 => 'Vnesite ime bloka in vrstni red za prednastavljene bloke Geekloga.',
    43 => 'Samo doma�a stran',
    44 => '',
    45 => "Do tega bloka nima� dostopa. Poskus je bil zabele�en v bazo podatkov. Prosim vrni se na <a href=\"{$_CONF['site_url']}/admin/block.php\">zaslon za skrbni�tvo blokov</a>.",
    46 => 'Premakni',
    47 => '',
    48 => 'Ime bloka',
    49 => ' (brez presledkiov in imena ne smejo biti podvojena)',
    50 => '',
    51 => 'za�ni s http://',
    52 => '�e pusti� prazno, se ikona za pomo� za ta blok ne bo izpisala!',
    53 => 'Omogo�eno',
    54 => 'shrani',
    55 => 'prekli�i',
    56 => 'izbri�i',
    57 => 'Premakni blok dol',
    58 => 'Premakni blok gor',
    59 => 'Premakni blok na desno stran',
    60 => 'Premakni blok na levo stran',
    61 => 'Braz naslova',
    62 => 'Omejitev �lanka',
    63 => 'Slab naslov bloka',
    64 => 'Polje za naslov ne sme biti prazno in ne sme vsebovati HTML.',
    65 => 'naro�ilo',
    66 => 'Samodejni ukazi',
    67 => 'Potrdi za odobritev samodejnih ukazov'
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => 'Prej�nji �lanki',
    2 => 'Naslednji �lanki',
    3 => 'Nastavitve �lanka',
    4 => 'Oblikovanje �lanka',
    5 => 'Urejanje �lanka',
    6 => 'V sistemu ni �lankov',
    7 => 'Avtor',
    8 => 'shrani',
    9 => 'predogled',
    10 => 'prekli�i',
    11 => 'izbri�i',
    12 => 'ID',
    13 => '',
    14 => '',
    15 => 'Datum',
    16 => 'Uvodno besedilo',
    17 => 'Raz�irjeno besedilo',
    18 => '�tevilo ogledov',
    19 => 'Komentarji',
    20 => 'Ping',
    21 => 'Po�lji Ping',
    22 => 'Seznam �lankov',
    23 => '�e ho�e� �lanek spremeniti ali izbrisati, klikni na njegovo �tevilko. �e ga ho�e� pregledati, klikni na njegov naslov. �e ho�e� objaviti nov �lanek, klikni na "Ustvari novega" zgoraj.',
    24 => 'ID, ki si ga izbral/a za ta �lanek, je �e v rabi. Prosim uporabi drug ID.',
    25 => 'Napaka pri shranjevanju �lanka.',
    26 => 'Predogled �lanka',
    27 => '�e uporabi� [unscaledX] namesto [imageX], bo slika vstavljena s svojimi originalnimi merami.',
    28 => '<p><b>PREDOGLEDOVANJE</b>: Za predogled �lanka skupaj s slikami je najprimerneje, da ga shrani� kot  osnutek, NAMESTO da klikne� gumb za predogled.  Ta gumb uporabi le, �e ni prilo�enih slik.',
    29 => 'Trackbacks',
    30 => 'Napake pri nalaganju datoteke',
    31 => 'Prosim izpolni polji Naslov in Uvodno besedilo',
    32 => 'Udarni �lanek',
    33 => 'Udarni �lanek je lahko samo eden',
    34 => 'Osnutek',
    35 => 'Da',
    36 => 'Ne',
    37 => 'Ve� od avtorja',
    38 => 'Ve� s podro�ja',
    39 => '�t. posredovanj po e-po�ti',
    40 => '',
    41 => "Posku�a� dostopiti do �lanka, do katerega nima� pravice dostopa. Ta poskus je bil zabele�en in shranjen. �lanek lahko samo preberete, ne morete pa ga urejati. Ko kon�a�, pojdi prosim nazaj na <a href=\"{$_CONF['site_url']}/admin/story.php\">zaslon za skrbni�tvo �lankov</a>.",
    42 => "Posku�a� dostopiti do �lanka, do katerega nima� pravice dostopa. Ta poskus je bil zabele�en in shranjen. Pojdi prosim nazaj na <a href=\"{$_CONF['site_url']}/admin/story.php\">zaslon za skrbni�tvo �lankov</a>.",
    43 => '',
    44 => '',
    45 => '',
    46 => '<b>OPOMBA:</b> �e tu nastavi� datum v prihodnosti, �lanek ne bo objavljen do izbranega datuma. Do tega datuma �lanka ne bo niti v RDF niti ne bo vklju�n v iskalnik in statisti�ne strani.',
    47 => 'Slike',
    48 => 'slika',
    49 => 'desno',
    50 => 'levo',
    51 => 'Sliko vstavi v �lanek s posebnim ukazom [imageX], [imageX_right] ali [imageX_left], pri �emer je X zaporedna �tevilka slike v prilogi. OPOMBA: Slike iz priloge je treba uporabiti, sicer �lanka ne bo mogo�e shraniti.',
    52 => '',
    53 => 'ni bila uporabljena. Sliko morate pred shranitvijo sprememb vklju�iti v uvodno ali raz�irjeno besedilo �lanka.',
    54 => 'Prilo�ene slike niso bile uporabljene',
    55 => 'Pri shranjevanju �lanka je pri�lo do napak. Prosim popravi napake s spodnjega seznama:',
    56 => 'Prika�i ikono rubrike',
    57 => 'Oglej si nepomanj�ano sliko',
    58 => 'Mo�nosti arhiviranja',
    59 => 'Mo�nost',
    60 => '',
    61 => 'Samodejno arhiviranje',
    62 => 'Samodejno brisanje',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Raztegni podro�je urejanja vsebine',
    68 => 'Skr�i podro�je urejanja vsebine',
    69 => 'Datum objave �lanka',
    70 => 'Izbira orodne vrstice',
    71 => 'Osnovna orodna vrstica',
    72 => 'Navadna orodna vrstica',
    73 => 'Napredna orodna vrstica',
    74 => 'Napredna orodna vrstica II',
    75 => 'Vse funkcije',
    76 => 'Mo�nosti objave',
    77 => ' Za napredno urejanje mora biti Javascript omogo�en. Mo�nost lahko onemogo�ite na glavni strani config.php.',
    78 => 'Za uporabo privzetega urejevalnika klikni <a href="%s/story.php?mode=edit&amp;sid=%s&amp;editopt=default">tukaj</a>.',
    79 => 'Predogled',
    80 => 'Urejevalnik',
    81 => 'Mo�nosti objave',
    82 => 'Slike',
    83 => 'Mo�nosti arhiva',
    84 => 'Dovoljenja',
    85 => 'Poka�i vse',
    86 => 'Napredni urejevalnik',
    87 => 'Statistike �lankov'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => 'Urejevalnik rubrik',
    2 => 'ID rubrike',
    3 => 'Ime rubrike',
    4 => 'Slika rubrike',
    5 => '(ne uporabljaj presledkov)',
    6 => 'Izbris rubrike izbri�e tudi vse z njo povezane �lanke in bloke',
    7 => 'Izpolni polji za ID in naslov rubrike',
    8 => 'Upravitelj rubrik',
    9 => 'Izberi rubriko, ki jo ho�e� urediti ali odstraniti. �e ho�e� ustvariti novo rubriko, klikni gumb Nova rubrika zgoraj. Svojo raven dostopa do posamezne rubrike najde� v oklepajih. Zvazdica (*) ozna�uje privzeto rubriko.',
    10 => 'Uredi po',
    11 => '�lankov/Strani',
    12 => 'Dostop zavrnjen',
    13 => "Do te rubrike nima� dostopa. Tvoj poskus je bil zabele�en in shranjen. Prosim vrni se na <a href=\"{$_CONF['site_url']}/admin/topic.php\">zaslon za skrbni�tvo rubrik</a>.",
    14 => 'Uredi po',
    15 => 'abecedi',
    16 => 'privzeto',
    17 => 'Nova rubrika',
    18 => 'Skrbnikova stran',
    19 => 'shrani',
    20 => 'prekli�i',
    21 => 'izbri�i',
    22 => 'Privzeto',
    23 => 'Naredi to rubriko privzeto za novo oddane �lanke',
    24 => '(*)',
    25 => 'Arhiviraj rubriko',
    26 => 'Naredi to rubriko privzeto za arhivirane �lanke. Dovoljena je samo ena rubrika.',
    27 => 'ali nalo�i ikono za rubriko',
    28 => 'Najve�',
    29 => 'Napake pri nalaganju datotek'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'Urejevalnik uporabnika',
    2 => 'ID uporabnika',
    3 => 'Uporabni�ko ime',
    4 => 'Celotno ime uporabnika',
    5 => 'Geslo',
    6 => 'Varnostni nivo',
    7 => 'E-naslov',
    8 => 'Tvoja spletna stran',
    9 => '(ne uporabljaj presledkov)',
    10 => 'Vpi�i uporabni�ko ime in e-naslov.',
    11 => 'Upravitelj uporabnikov',
    12 => 'Za spreminjanje ali izbris uporabnika klikni na njegovo ikono za urejanje spodaj. Za ogled uporabnika klikni na njegovo uporabni�ko ime. Za ustvarjenje novega uporabnika klikni na "Ustvari novega" zgoraj.',
    13 => 'Varnostni nivo',
    14 => 'Datum registracije',
    15 => '',
    16 => '',
    17 => '',
    18 => '',
    19 => '',
    20 => 'shrani',
    21 => 'Uporabni�ko ime, ki ga ho�e� shraniti, �e obstaja.',
    22 => 'Napaka',
    23 => 'Zaporedno dodajanje',
    24 => 'Zaporedni uvoz uporabnikov',
    25 => 'V Geeklog lahko uvozi� zaporedje uporabnikov. Datoteka za uvoz mora biti navadna tekstovna datoteka, razdeljena s tabulatorji. Polja naj si sledijo v naslednjem vrstnem redu: celotno ime, uporabni�ko ime, e-naslov.  Vsak uporabnik bo prejel e-po�to z naklju�nim geslom. Vsak uporabnik naj bo vpisan v svoji vrstici. �e teh navodil ne upo�teva�, lahko nastanejo precej�nje te�ave, ki bodo zahtevale ro�no obdelavo, zato pred uvozom �e enkrat preveri vpise v datoteki.',
    26 => '',
    27 => '',
    28 => 'Izbris slike potrdi tu',
    29 => 'Pot',
    30 => 'Uvozi',
    31 => 'Novi uporabniki',
    32 => 'Kon�ano. Uvo�eno %d , najdenih je %d napak',
    33 => 'oddaj',
    34 => 'Napaka: Dolo�iti je treba datoteko za nalaganje.',
    35 => 'Zadna prijava',
    36 => 'nikoli',
    37 => 'UID',
    38 => 'Pregled skupine',
    39 => 'Geslo (ponovno)',
    40 => 'Datum registracije',
    41 => 'Datum zadnje prijave',
    42 => 'Prepovedan',
    43 => '�aka aktivacijo',
    44 => '�aka avtorizacijo',
    45 => 'Dovoljen',
    46 => 'Status uporabnika',
    47 => 'Uredi',
    48 => 'Prika�i skupine skrbnikov',
    49 => 'Skupina skrbnikov',
    50 => 'Potrdi za odobritev filtriranja te skupine kot  Admin Use Group',
    51 => 'Dnevi na liniji',
    52 => '<br>Opomba: "Dnevi na liniji" je �tevilo dni med prvo registracijo in zadnjo prijavo.',
    53 => 'registrran',
    54 => 'Izbris zaporedja',
    55 => 'To deluje le, �e ima� v svojem config.php <code>$_CONF[\'lastlogin\'] = true;</code>.',
    56 => 'Izberi tip uporabnika, ki ga ho�e� izbrisati, in pritisni "Posodobi seznam". Na seznamu odzna�i tiste, ki ho�e�, da ostanejo, in pritisni "Izbri�i". Vedi, da bodo v primeru, ko obstaja ve� strani seznama, izbrisani samo tisti tipi, ki jih trenutno vidi�.',
    57 => 'Fantomski uporabniki',
    58 => 'Kratkotrajni uporabniki',
    59 => 'Stari uporabniki',
    60 => 'Uporabniki, registrirani pred ve� kot ',
    61 => ' meseci, ki se niso nikoli prijavili.',
    62 => 'Uporabniki, registrirani pred ve� kot ',
    63 => ' meseci, ki so se prijavili v 24 urah, potem pa nikoli ve�.',
    64 => 'Obi�ajni uporabniki, ki spletne strani niso obiskali �e ',
    65 => ' mesecev.',
    66 => 'Posodobi seznam',
    67 => 'mesecev od registracije',
    68 => 'Ure na liniji',
    69 => 'Meseci brez povezave z linijo',
    70 => 'ni moglo biti izbrisano',
    71 => 'uspe�no izbrisano',
    72 => 'Za izbris ni bil izbran noben uporabnik',
    73 => 'Ho�e� res trajno izbrisati VSE izbrane uporabnike?',
    74 => 'zadnji uporabniki',
    75 => 'Uporabniki, ki so se registrirali v zadnjih ',
    76 => ' mesecih'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => 'Objavi',
    2 => 'Izbri�i',
    3 => 'Uredi',
    4 => 'Profil',
    10 => 'Naslov',
    11 => 'Datum za�etka',
    12 => 'URL',
    13 => 'Kategorija',
    14 => 'Datum',
    15 => 'Rubrika',
    16 => 'Uporabni�ko ime',
    17 => 'Celotno ime',
    18 => 'E-naslov',
    34 => 'Skrbnikove strani',
    35 => '�akajo�i �lanki',
    36 => '',
    37 => '',
    38 => 'Oddaj',
    39 => 'Trenutno ni nobene �akajo�e vsebine',
    40 => 'Uporabni�ka �akajo�a vsebina'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} EMail pripomo�ek",
    2 => 'Od',
    3 => 'E-naslov za odgovore',
    4 => 'Zadeva',
    5 => 'Sporo�ilo',
    6 => 'Naslov:',
    7 => 'Vsem uporabnikom',
    8 => 'Skrbnik',
    9 => 'Mo�nosti',
    10 => 'HTML',
    11 => 'Nujno sporo�ilo!',
    12 => 'Po�lji',
    13 => 'Ponastavi',
    14 => 'Prezri uporabni�ke nastavitve',
    15 => 'Napaka pri po�iljanju  ',
    16 => 'Sporo�ilo je bilo uspe�no poslano: ',
    17 => "<a href={$_CONF['site_url']}/admin/mail.php>Po�lji novo sporo�ilo</a>",
    18 => 'Za',
    19 => 'OPOMBA: �e ho�e� poslati sporo�ilo vsem uporabnikom strani, izberi skupino Prijavljeni uporabniki iz menija Uporabniki.',
    20 => "Uspe�no poslana sporo�ila: <successcount>;<BR>Neuspe�no poslana sporo�ila: <failcount>. Podrobnosti o neuspe�no poslanih sporo�ilh so spodaj.<BR><BR>Ho�e� poslati �e kak�no <a href=\"{$_CONF['site_url']}/admin/mail.php\">sporo�ilo</a>? <BR><BR>Nazaj na <a href=\"{$_CONF['site_url']}/admin/moderation.php\">skrbnikovo stran</a>.",
    21 => 'Neuspe�no poslana sporo�ila',
    22 => 'Uspe�no poslana sporo�ila',
    23 => 'Nobenega neuspe�no poslanega sporo�ila',
    24 => 'Nobenega uspe�no poslanega sporo�ila',
    25 => '-- Izberi skupino --',
    26 => 'Izpolni vsa polja v obrazcu in izberi skupino uporabnikov iz menija.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Namestitev vti�nikov (plugins) lahko Geeklogu in tvojemu sistemu povzro�i �kodo. Pomembno je, da namesti� samo vti�nike, ki jih prenese� z <a href="http://www.geeklog.net" target="_blank">Geeklogove doma�e strani</a>, saj smo samo te dodobra preizkusili na razli�nih operacijskih sistemih. Pomembno je razumeti, da je namestitev vti�nikov postopek, ki zahteva izvajanje nekaterih ukazov na ravni datote�nega sistema. Ti lahko vodijo do varnostnih lukenj, posebej �e uporablja� vti�nik s spletnih mest tretjih oseb. Kljub temu opozorilu ne jam�imo za uspeh nobene namestitve niti nismo odgovorni za �kodo, povzro�eno z namestitvijo vti�nika za Geeklog. Z drugimi besedami � name��a� na lastno odgovornost. V paket vsakega vti�nika so vklju�ena navodila za njegovo ro�no namestitev.',
    2 => 'Zavrnitev namestitve vti�nika',
    3 => 'Obrazec za namestitev vti�nika',
    4 => 'Datoteka vti�nika',
    5 => 'Seznam vti�nikov',
    6 => 'Opozorilo: Vti�nik je �e name��en.',
    7 => 'Vti�nik, ki ga sku�a� namestiti, je �e name��en. Pred ponovno namestitvijo prosim izbri�i stari vti�nik.',
    8 => 'Test zdru�ljivost vti�nika ni uspel',
    9 => 'Ta vti�nik zahteva novej�o verzijo Geekloga. Namesti novo razli�ico <a href="http://www.geeklog.net">Geekloga</a> ali najdi novej�o razli�ico vti�nika.',
    10 => '<br><b>Trenutno ni name��enih nobenih vti�nikov.</b><br><br>',
    11 => 'Za spremembo ali izbris vti�nika klikni njegovo ikono za urejanje spodaj. Prikazale se bodo podrobnosti o vti�niku, vklju�no z avtorjevo spletno stranjo. Prikazani sta name��ena in iz vti�nikove kode vrnjena razli�ica. Tako bo la�je vedeti, ali je treba vti�nik nadgraditi ali ne. Za namestitev ali nadgradnjo vti�nika poglej v njegovo dokumentacijo.',
    12 => 'nobeno ime vti�nika ni bilo poslano v urejevalnik vti�nikov ()',
    13 => 'Urejevalnik vti�nikov',
    14 => 'Nov vti�nik',
    15 => 'Skrbnikova stran',
    16 => 'Ime vti�nika',
    17 => 'Razli�ica vti�nika',
    18 => 'Razli�ica Geekloga',
    19 => 'Omogo�eno',
    20 => 'Da',
    21 => 'Ne',
    22 => 'Namesti',
    23 => 'Shrani',
    24 => 'Prekli�i',
    25 => 'Izbri�i',
    26 => 'Ime vti�nika',
    27 => 'Doma�a stran vti�nika',
    28 => 'Razli�ica vti�nika',
    29 => 'Razli�ica Geekloga',
    30 => 'Izbri�i vti�nik?',
    31 => 'Ho�e� res odstraniti ta vti�nik?  S tem bodo iz baze izbrisani tudi vsi podatki, ki jih uporablja.',
    32 => '<p><b>Napaka AutoLink tag ni v pravem formatu</b></p>',
    33 => 'Razli�ica kode',
    34 => 'Posodobi',
    35 => 'Uredi',
    36 => 'Koda',
    37 => 'Podatki',
    38 => 'Posodobi!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'ustvari zdru�eno vsebino',
    2 => 'shrani',
    3 => 'izbri�i',
    4 => 'prekli�i',
    10 => 'Zdru�evanje vsebine ',
    11 => 'Nova zdru�ena vsebina',
    12 => 'Skrbnikova stran',
    13 => 'Za spreminjanje ali brisanje zdru�ene vsebine klikni na njeno ikono za urejanje spodaj. Za novo vsebino klikni na "Ustvari" zgoraj.',
    14 => 'Naslov',
    15 => 'Tip',
    16 => 'Ime datoteke',
    17 => 'Oblika',
    18 => 'zadnji posodobljen',
    19 => 'Omogo�eno',
    20 => 'Da',
    21 => 'Ne',
    22 => '<i>(ni zdru�ene vsebine)</i>',
    23 => 'vsi �lanki',
    24 => 'Urejevalnik zdru�ene vsebine',
    25 => 'naslov zdru�ene vsebine',
    26 => 'Omejitev prikaza',
    27 => 'Omejitev �tevila znakov',
    28 => '(0 = brez besedila, 1 = vse besedilo, drugo = omeji na to �tevilo znakov)',
    29 => 'Opis',
    30 => 'Zadnja posodobitev',
    31 => 'Nabor znakov',
    32 => 'Jezik',
    33 => 'Vsebina',
    34 => 'Vpisi',
    35 => 'Ure',
    36 => 'Izberi tip zdru�ene vsebine',
    37 => 'Name��en ima� vsaj en vti�nik, ki podpira zdru�evanje vsebine. Spodaj je treba izbrati, ali ho�e� ustvariti zdru�eno vsebino za Geeklog ali za katerega od vti�nikov.',
    38 => 'Napaka: Manjkajo�a polja',
    39 => 'Izpolni polja Naslov zdru�ene vsebine, Opis, Ime datoteke.',
    40 => 'Vpi�i �tevilo vpisov ali �tevilo ur.',
    41 => 'Oddaj',
    42 => '',
    43 => 'Vsi',
    44 => 'Noben',
    45 => 'Naslovna povezava v rubriki',
    46 => 'Rezultati omejitve',
    47 => 'I��i',
    48 => 'Uredi',
    49 => 'Logotip zdru�ene vsebine',
    50 => "Glede na url strani ({$_CONF['site_url']})",
    51 => 'Izbrano ime datoteke �e uporablja druga zdru�ena vsebina. Prosim izberi drugega.',
    52 => 'Napaka: Ime datoteke �e obstaja.'
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "Geslo je bilo  poslano na tvoj e-naslov in bi moralo prispeti vsak �as. Sledi navodilom v sporo�ilu in hvala, da uporablja� {$_CONF['site_name']}.",
    2 => "Hvala, da si dogodek oddal/a na spletno mesto {$_CONF['site_name']}. Pred objavo ga bo pregledal eden od urednikov. �e bo odobren, bo objavljen in dan na razpolago bralcem te spletne strani.",
    3 => "",
    4 => "",
    5 => 'Podatki o uporabni�kem ra�unu so bili uspe�no shranjeni.',
    6 => 'Osebne nastavitve so bile uspe�no shranjene.',
    7 => 'Osebne nastavitve komentarjev so bile uspe�no shranjene.',
    8 => 'Odjava je bila uspe�na.',
    9 => '�lanek je bil uspe�no shranjen.',
    10 => '�lanek je bil izbrisan.',
    11 => 'Blok je bil uspe�no shranjen.',
    12 => 'Blok je bil uspe�no izbrisan.',
    13 => 'Rubrika je bila uspe�no shranjeno.',
    14 => 'Rubrika skupaj z vsemi �lanki in bloki je bila uspe�no izbrisana.',
    15 => '',
    16 => '',
    17 => '',
    18 => '',
    19 => '',
    20 => '',
    21 => 'Uporabnik je bil uspe�no shranjen.',
    22 => 'Uporabnik je bil uspe�no izbrisan.',
    23 => '',
    24 => '',
    25 => '',
    26 => '',
    27 => 'Sporo�ilo je bilo uspe�no poslano.',
    28 => 'Vti�nik je bil uspe�no shranjen',
    29 => '',
    30 => 'Dostop zavrnjen',
    31 => '�al nima� dostopa do skrbni�tva �lankov. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo.',
    32 => '�al nima� dostopa do skrbni�tva tematskih podro�ij. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo.',
    33 => '�al nima� dostopa do skrbni�tva blokov. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo.',
    34 => '',
    35 => '',
    36 => '',
    37 => '�al nima� dostopa do skrbni�tva uporabnikov. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo.',
    38 => '�al nima� dostopa do skrbni�tva vti�nikov. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo.',
    39 => '�al nima� dostopa do skrbni�tva elektronske po�te. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo.',
    40 => 'Sistemsko sporo�ilo',
    41 => '�al nima� dostopa do strani za menjavo besed. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo.',
    42 => 'Beseda je uspe�no shranjena.',
    43 => 'Beseda je uspe�no izbrisana.',
    44 => 'Vti�nik je uspe�no name��en.',
    45 => 'Vti�nik je uspe�no odstranjen.',
    46 => '�al nima� dostopa do varnostnih kopij baze. Vsak poskus nedovoljenega dostopa se bele�i.',
    47 => 'To deluje samo v operacijskem sistemu *nix.  �e uporablja� operacijski sistem, potem *nix , je bil cache uspe�no izpraznjen. �e uporablja� Windows OS, bo� moral poiskati datoteke po imenu adodb_*.php in jih odstraniti ro�no.',
    48 => "Hvala, da si zaprosil za �lanstvo v {$_CONF['site_name']}. Pregledali bomo tvojo pro�njo. �e bo odobrena, bo� dobil geslo na e-naslov, ki si ga ravnokar vnesel.",
    49 => 'Skupina je uspe�no shranjena.',
    50 => 'Skupina je uspe�no izbrisana.',
    51 => 'To uporabni�ko ime je �e zasedeno. Prosim izberi drugega.',
    52 => 'Vpisani e-naslov ne izgleda kot pravi e-naslov.',
    53 => 'Tvoje novo geslo je sprejeto. Prosim uporabi to novo geslo spodaj za vpis v sistem.',
    54 => 'Tvoja zahteva za novo geslo je potekla. Prosim poskusi ponovno spodaj.',
    55 => 'Poslali smo ti e-po�to. Na tvoj e-naslov bi morala prispeti vsak �as. Za izbiro novega gesla za svoj ra�un prosim upo�tevaj navodila v e-po�ti.',
    56 => 'Vpisani e-naslov je �e uporabljen za enega od ra�unov v na�i bazi podatkov.',
    57 => 'Tvoj ra�un je uspe�no pobrisan.',
    58 => 'Zdru�ena vsebina je uspe�no shranjena.',
    59 => 'Zdru�ena vsebina je uspe�no izbrisana.',
    60 => 'Vti�nik je uspe�no posodobljen.',
    61 => 'Vti�nik %s: Neznan okvir sporo�ila.',
    62 => 'Trackback komentar je izbrisan.',
    63 => 'Med brisanjem trackback komentarja je pri�lo do napake.',
    64 => 'Trackback komentar je bil uspe�no odposlan.',
    65 => 'Storitev za Weblog directory je uspe�no shranjena.',
    66 => 'Storitev za Weblog directory je izbrisana.',
    67 => 'Novo geslo se ne ujema s potrditvenim geslom.',
    68 => 'Vnesi pravilno veljavno geslo.',
    69 => 'Tvoj ra�un je blokiran.',
    70 => 'Tvoj ra�un �aka na skrbnikovo odobritev.',
    71 => 'Tvoj ra�un je sedaj potrjen in �aka na skrbnikovo odobritev.',
    72 => 'Med name��anjem vti�nika je pri�lo do napake. Za podrobnosti glej error.log.',
    73 => 'Med deinstaliranjem vti�nika je pri�lo do napake. Za podrobnosti glej error.log.',
    74 => 'Pingback je uspe�no odposlan.',
    75 => 'Trackbacks morajo biti poslani prek zahteve po objavi.',
    76 => 'Ho�e� res izbrisati ta predmet?',
    77 => 'OPOZORILO:<br>Privzeto kodiranje si nastavil/a na UTF-8, a tvoj stere�nik ne podpira ve�bajtnega kodiranja. Namesti funkcije mbstring za PHP ali izberi drug nabor znakov/jezik.',
    78 => 'Zagotovi prosim, da sta e-naslov in naslov potrditvene e-po�te ista.',
    79 => 'Stran, ki jo posku�a� odpreti, se nana�a na funkcijo, ki na tem mestu ne obstaja ve�.',
    80 => 'Vti�nik, ki je ustvaril to zdru�eno vsebino, je trenutno onemogo�en. Te zdru�ene vsebine ne bo mogo�e urejati, dokler ne bo star�evski  vti�nik ponovno omogo�en.',
    81 => 'Mogo�e si narobe vtipkal/a login credentials. Poskusi se prosim ponovno prijaviti spodaj.',
    82 => '�tevilo dovoljenih poskusov prijave je bilo prese�eno. Prosim poskusi ponovno pozneje.',
    83 => 'Za spremembo gesla in e-naslova ter za izbiro tega, koliko �asa naj si te stran zapomni, vnesi svoje trenutno veljavno geslo.',
    84 => 'Za izbris svojega ra�una vnesi svoje trenutno veljavno geslo.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => 'Dostop',
    'ownerroot' => 'Lastnik/Koren (Root)',
    'group' => 'Skupina',
    'readonly' => 'Samo za branje',
    'accessrights' => 'Pravice dostopa',
    'owner' => 'Lastnik',
    'grantgrouplabel' => 'Dodeli zgornji skupini pravice za spreminjanje',
    'permmsg' => 'OBVESTILO: Uporabniki so vsi prijavljeni �lani, anonimni uporabniki in vsi trenutni neprijavljeni obiskovalci strani.',
    'securitygroups' => 'Varnostne skupine',
    'editrootmsg' => "�eprav si skrbnik, ne more� spreminjati nastavitev korenskega uporabnika, �e nisi sam korenski uporabnik. Lahko pa ureja� nastavitve vseh drugih uporabnikov. Vsi poskusi dostopa do nepoobla��enih funkcij se bele�ijo. Vrni se na <a href=\"{$_CONF['site_url']}/admin/users.php\">stran za skrbni�tvo uporabnikov</a>.",
    'securitygroupsmsg' => 'Izberite skupine, ki naj jim pripada uporabnik',
    'groupeditor' => 'Urejanje skupin',
    'description' => 'Opis',
    'name' => 'Ime',
    'rights' => 'Pravice',
    'missingfields' => 'Manjkajo�a polja',
    'missingfieldsmsg' => 'Vpi�i ime in opis skupine.',
    'groupmanager' => 'Upravitelj skupin',
    'newgroupmsg' => 'Za spreminjanje ali izbris skupine kliknite na njeno ikono za urejanje spodaj. �e ho�ete oblikovati novo skupino, kliknite na "Ustvari" zgoraj. Jedrnih skupin ni mogo�e odstraniti, ker jih uporablja sistem.',
    'groupname' => 'Ime skupine',
    'coregroup' => 'Jedrna skupina',
    'yes' => 'Da',
    'no' => 'Ne',
    'corerightsdescr' => "Ta skupina je jedrna skupina {$_CONF['site_name']}. Njenih pravic se ne da urejati. Pravice, ki pripadajo tej skupini, si poglej na spodnjem seznamu.",
    'groupmsg' => 'Varnostne skupine na tej strani so urejene hierarhi�no. �e to skupino doda� h kateri koli od spodnjih skupin, ji bodo s tem dodeljene iste pravice, kot jih imajo tiste skupine. �e je le mogo�e,  skupinam dodeli pravice tako, da jih doda� k spodnjim skupinam. �e naj ima ta skupina pravice po meri, lahko pravice do raznih funkcij te spletne strani izbere� spodaj v meniju \'Pravice\'. �e ho�e� to skupino dodati h kateri od spodnjih skupin, potrdi okence poleg ene ali ve� �elenih skupin.',
    'coregroupmsg' => "Ta skupina je jedrna skupina strani {$_CONF['site_name']}. Nastavitve skupin, ki ji pripadajo zato ne morejo biti spremenjene. Spodnji seznam vsebuje imena skupin, ki ji pripadajo.",
    'rightsdescr' => 'Dostop skupine do dolo�ene spodaj navedene pravice je lahko dodan tej skupini neposredno ALI pa drugi skupini, katere del je ta skupina. Tiste od spodaj navedenih pravic, ki nimajo potrditvenega okenca, so tej skupini �e dodeljene zato, ker pripada drugi skupini, ki to pravico ima. Tiste od spodaj navedenih pravic, ki imajo potrdirveno okence, pa lahko skupini dodate neposredno.',
    'lock' => 'Zakleni',
    'members' => '�lani',
    'anonymous' => 'Anonimni uporabnik',
    'permissions' => 'Dovoljenja',
    'permissionskey' => 'R = branje, E = urejanje, pravice urejanja predpostavljajo pravice branja',
    'edit' => 'Uredi',
    'none' => 'Nih�e',
    'accessdenied' => 'Dostop zavrnjen',
    'storydenialmsg' => "�al nima� dostopa do tega �lanka. Morda zato, ker nisi �lan? <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Postani �lan</a> spletne strani {$_CONF['site_name']} in dobil/a bo� popoln dostop.",
    'nogroupsforcoregroup' => 'Ta skupina ne pripada nobeni drugi skupini',
    'grouphasnorights' => 'Ta skupina nima dostopa do skrbni�kih funkcij na tem spletnem mestu.',
    'newgroup' => 'Nova skupina',
    'adminhome' => 'Skrbnikova stran',
    'save' => 'shrani',
    'cancel' => 'prekli�i',
    'delete' => 'izbri�i',
    'canteditroot' => 'Poskusil/a si urejati jedrno skupino, a ker nisi njen �lan, je tvoj dostop zavrnjen. �e misli�, da gre za napako, se posvetuj s skrbnikom sistema.',
    'listusers' => '�lani',
    'listthem' => 'seznam',
    'usersingroup' => 'Uporabniki v skupini %s',
    'usergroupadmin' => 'Skrbni�tvo skupin uporabnikov',
    'add' => 'Dodaj',
    'remove' => 'Odstrani',
    'availmembers' => '�lani na voljo',
    'groupmembers' => '�lani skupine',
    'canteditgroup' => 'Za urejanje te skupine mora� biti njen �lan. �e misli�, da gre za napako, se posvetuj s skrbnikom sistema.',
    'cantlistgroup' => 'Da lahko vidi� �lane te skupine, mora� biti njen �lan. �e misli�, da gre za napako, se posvetuj s skrbnikom sistema.',
    'editgroupmsg' => 'Za spreminjanje �lanstva v skupini klikni na izbrana imena �lanov in uporabi gumb Dodaj ali Odstrani. �e je �lan tudi �lan te skupine, se bo njegovo ime pojavilo samo ne desni strani. Ko kon�a�, pritisni na <b>Shrani</b>, da se skupina posodobi, in se vrni na glavno stran za skrbni�tvo skupin uporabnikov.',
    'listgroupmsg' => 'Seznam vseh trenutnih �lanov skupine: <b>%s</b>',
    'search' => 'I��i',
    'submit' => 'Oddaj',
    'limitresults' => 'Rezultati omejitve',
    'group_id' => 'ID skupine',
    'plugin_access_denied_msg' => 'Nedovoljeno posku�a� dostopiti do strani za skrbni�tvo vti�nikov. Vedi, da se vsi nedovoljeni poskusi dostopa do te strani bele�ijo.',
    'groupexists' => 'Ime skupine �e obstaja',
    'groupexistsmsg' => 'Skupina s tem imenom �e obstaja. Imena skupin morajo biti razli�na.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => 'Zadnjih 10 varnostnih kopij',
    'do_backup' => 'Naredi varnostno kopijo',
    'backup_successful' => 'Varnostno shranjevanje baze podatkov je bilo uspe�no.',
    'db_explanation' => '�e ho�e� ustvariti novo varnostno kopijo baze podatkov sistema Geeklog , klikni "Ustvari" zgoraj.',
    'not_found' => "Napa�na pot ali pa orodje mysqldump ni izvr�ljivo.<br>Preveri definicijo <strong>\$_DB_mysqldump_path</strong> v config.php.<br>Spremenljivka je trenutno definirana kot: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Varnostno kopiranje neuspe�no: Velikost datoteke je 0 bajtov',
    'path_not_found' => "{$_CONF['backup_path']} ne obstaja ali pa ni direktorij",
    'no_access' => "NAPAKA: Direktorij {$_CONF['backup_path']} ni dosegljiv.",
    'backup_file' => 'Datoteka z varnostno kopijo',
    'size' => 'Velikost',
    'bytes' => 'Bajtov',
    'total_number' => 'Skupno �tevilo varnostnih kopij: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Domov',
    2 => 'Stik',
    3 => 'Objavi',
    4 => '',
    5 => '',
    6 => '',
    7 => 'Statistika strani',
    8 => 'Osebne nastavitve',
    9 => 'I��i',
    10 => 'napredno iskanje',
    11 => 'Direktorij'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => 'Napaka 404',
    2 => 'Pogledal sem povsod, ampak ne najdem <b>%s</b>.',
    3 => "<p>�al datoteka, ki jo zahteva�, ne obstaja. Prosim preveri <a href=\"{$_CONF['site_url']}\">glavno stran</a> ali <a href=\"{$_CONF['site_url']}/search.php\">iskalno stran</a> in poglej, �e lahko najde�, kar si izgubil."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Zahtevana je prijava',
    2 => 'Oprosti, za ogled tega dela strani mora� biti prijavljen kot uporabnik.',
    3 => 'Prijava',
    4 => 'Nov uporabnik'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'Funkcija PDF je onemogo�ena',
    2 => 'Priskrbljeni dokument ni bil renderiran. Bil je prejet, ampak ga ni bilo mogo�e procesirati. Pepri�aj se, da oddaja� samo dokumente v obliki html, ki so bili napisani po standardu xHTML. Izjemno kompleksni dokumenti se lahko renderirajo nepravilno ali pa sploh ne. Dokument, ki je nastal v poskusu renderiranja, je imel 0 bajtov in je bil izbrisan. �e si prepri�an/a, da bi se ta dokument moral pravilno renderirati, ga po�lji ponovno.',
    3 => 'Neznana napaka med izdelavo dokumenta PDF',
    4 => "Podatki o strani niso bili podani ali pa ho�e� uporabiti orodje za ad-hoc izdelavo dokumentov PDF spodaj. �e misli�, da si to stran dobil/a pomotoma, prosim sporo�i to skrbniku sistema. V nasprotnem primeru lahko uporabi� spodnji obrazec in ustvari� dokumente PDF na na�in ad-hoc.",
    5 => 'Nalagam dokument.',
    6 => 'Prosim po�akaj, dokument se nalaga.',
    7 => 'Spodnji gumb lahko desnokliknete in izberete \'shrani ciljni dokument ...\' ali \'shrani mesto povezave ...\', da shranite kopijo dokumenta.',
    8 => "Pot do izvr�ilne datoteke HTMLDoc, ki je zapisana v nastavitvah, je napa�na, zato je sistem ne more zagnati. �e se te�ava ponavlja, to prosim sporo�ite skrbniku strani.",
    9 => 'Izdelovalnik PDF',
    10 => "To je orodje za ad-hoc izdelavo dokumentov PDF. Orodje bo poskusilo predelati vse URL-je  v PDF-ju. Prosim zavedaj se, da se nekatere spletne strani s tem na�inom ne bodo pravilno renderirale.  To je omejitev orodja HTMLDoc za izdelavo dokumentov PDF, zato teh napak ni treba prijavljati skrbniku strani.",
    11 => 'URL',
    12 => 'Izdelaj PDF!',
    13 => 'PHP konfiguracija na tem stre�niku ne dovoli odpiranja URL-jev z ukazom fopen(). Skrbnik strani mora popraviti datoteko php.ini, tako da v njej prestavi allow_url_fopen na On.',
    14 => 'Zahtevani PDF ne obstaja ali pa si poskusil/a do datoteke dostopiti nedovoljeno.'
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
    'pb_error_details' => 'Error when sending the pingback:',
    'delete_trackback' => 'To delete this Trackback click: '
);

###############################################################################
# directory.php

$LANG_DIR = array(
    'title' => 'Article Directory',
    'title_year' => 'Article Directory for %d',
    'title_month_year' => 'Article Directory for %s %d',
    'nav_top' => 'Back to Article Directory',
    'no_articles' => 'Ni �lankov.'
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
    'new_string' => '%n novi %i v zadnjih %t %s',
    'new_last' => 'zadnja %t %s',
    'minutes' => 'minut',
    'hours' => 'urah',
    'days' => 'dni',
    'weeks' => 'tedna',
    'months' => 'mesecev',
    'minute' => 'minuta',
    'hour' => 'ura',
    'day' => 'dan',
    'week' => 'teden',
    'month' => 'mesec'
);

###############################################################################
# Month names

$LANG_MONTH = array(
    1 => 'januar',
    2 => 'februar',
    3 => 'marec',
    4 => 'april',
    5 => 'maj',
    6 => 'junij',
    7 => 'julij',
    8 => 'avgust',
    9 => 'september',
    10 => 'oktober',
    11 => 'november',
    12 => 'december'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'nedelja',
    2 => 'ponedeljek',
    3 => 'torek',
    4 => 'sreda',
    5 => '�etrtek',
    6 => 'petek',
    7 => 'sobota'
);

###############################################################################
# Admin - Strings
# 
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array(
    'search' => 'I��i',
    'limit_results' => 'Omeji rezultate',
    'submit' => 'Oddaj',
    'edit' => 'Uredi',
    'edit_adv' => 'Napr. urejanje',
    'admin_home' => 'Skrbnikova stran',
    'create_new' => 'Ustvari',
    'create_new_adv' => 'Ustvari (napredno)',
    'enabled' => 'Omogo�eno',
    'title' => 'Naslov',
    'type' => 'Tip',
    'topic' => 'Rubrika',
    'help_url' => 'URL dokumenta za pomo�',
    'save' => 'Shrani',
    'cancel' => 'Prekli�i',
    'delete' => 'Izbri�i',
    'delete_sel' => 'Izbri�i izbrano',
    'copy' => 'Kopiraj',
    'no_results' => '- Ni najdenih vnosov -',
    'data_error' => 'Pri obdelavi naro�ni�kih podatkov je pri�lo do napake. Prosim preveri podatke.',
    'preview' => 'Predogled',
    'records_found' => 'Najdeni zapisi'
);

###############################################################################
# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0 => 'Komentarji omogo�eni',
    -1 => 'Komentarji onemogo�eni'
);


$LANG_commentmodes = array(
    'flat' => 'Plosko',
    'nested' => 'Gnezdeno',
    'threaded' => 'Nitno',
    'nocomment' => 'Brez komentarjev'
);

$LANG_cookiecodes = array(
    0 => '(don\'t)',
    3600 => '1 ura',
    7200 => '2 uri',
    10800 => '3 ure',
    28800 => '8 ur',
    86400 => '1 dan',
    604800 => '1 teden',
    2678400 => '1 mesec'
);

$LANG_dateformats = array(
    0 => 'Sistemsko privzeto'
);

$LANG_featurecodes = array(
    0 => 'Ni udarni �lanek',
    1 => 'Udarni �lanek'
);

$LANG_frontpagecodes = array(
    0 => 'Poka�i le v rubriki',
    1 => 'Poka�i na prvi strani'
);

$LANG_postmodes = array(
    'plaintext' => 'Samo besedilo',
    'html' => 'Oblikovano v HTML'
);

$LANG_sortcodes = array(
    'ASC' => 'Najprej najstarej�i',
    'DESC' => 'Najprej najnovej�i'
);

$LANG_trackbackcodes = array(
    0 => 'Trackback omogo�en',
    -1 => 'Trackback onemogo�en'
);

?>