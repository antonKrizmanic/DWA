/*
SQLyog Community v12.15 (64 bit)
MySQL - 5.7.8-rc : Database - kazaliste
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kazaliste` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kazaliste`;

/*Table structure for table `glumci` */

DROP TABLE IF EXISTS `glumci`;

CREATE TABLE `glumci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime_i_prezime` varchar(60) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `slika` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `glumci` */

insert  into `glumci`(`id`,`ime_i_prezime`,`slika`) values 
(1,'Damir Kaić Madić','../../img/glumac1.jpg'),
(2,'Nina Lončar','../../img/glumica1.jpg'),
(3,'Vanda Svedružić','../../img/glumica2.jpg'),
(4,'Davor Winter','../../img/glumac2.jpg'),
(5,'Nada Žlabur','../../img/glumica3.jpg'),
(6,'Jan Juričić','../../img/glumac3.jpg');

/*Table structure for table `jezik` */

DROP TABLE IF EXISTS `jezik`;

CREATE TABLE `jezik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jezik` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jezik` */

insert  into `jezik`(`id`,`jezik`) values 
(1,'Cro'),
(2,'Tal');

/*Table structure for table `predstava` */

DROP TABLE IF EXISTS `predstava`;

CREATE TABLE `predstava` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `redatelj` varchar(60) COLLATE utf8_croatian_ci DEFAULT NULL,
  `tekst` varchar(60) COLLATE utf8_croatian_ci DEFAULT NULL,
  `kostimi` varchar(60) COLLATE utf8_croatian_ci DEFAULT NULL,
  `glumci` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `slika` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `trajanje` time DEFAULT NULL,
  `cijena` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

/*Data for the table `predstava` */

insert  into `predstava`(`id`,`redatelj`,`tekst`,`kostimi`,`glumci`,`slika`,`trajanje`,`cijena`) values 
(12,'Matko Raguž','John Logan','Anamarija Filipović','Siniša Popović, Filip Križan','../../img/kozivokmrtav1.jpg','01:00:00','40'),
(13,'Mario Mirković, Ivan Đuričić','Ivan Đuričić','Vedrana Rapić','Mia Detelić, Filip Anočić, Ivan Mirković','../../img/predstava-hamleta.jpg','01:00:00','45'),
(14,'Zoran Mužić','Darko Bakliža','Elvira Ulip','Damir Kaić, Nina Lončar, Vanda Svedružić, Davor Winter','../../img/slider-chihche.jpg','01:30:00','50'),
(15,'Zoran Mužić','Darko Bakliža','Elvira Ulip','Damir Lončar, Nina Kaić Madić,','../../img/slider-ministarka1.jpg','01:45:00','60'),
(16,'Siniša Anočić','Saša Anočić','Hana Letica','Živko Klabućar, Damir Klemenić, Matija Antolić','../../img/slider-spektakluk1.jpg','01:00:00','40'),
(17,'Zoran Raguž','Elvira Bakliža','Hana Letica','Tarik Lončar, Rene Popović, Mila Kaić','../../img/politicko-vjencanje.jpg','00:45:00','35');

/*Table structure for table `predstava_prijevod` */

DROP TABLE IF EXISTS `predstava_prijevod`;

CREATE TABLE `predstava_prijevod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_predstava` int(11) DEFAULT NULL,
  `id_jezik` int(11) DEFAULT NULL,
  `naziv_predstave` varchar(60) COLLATE utf8_croatian_ci DEFAULT NULL,
  `opis_predstave` text COLLATE utf8_croatian_ci,
  PRIMARY KEY (`id`),
  KEY `id_predstava` (`id_predstava`),
  KEY `id_jezik` (`id_jezik`),
  CONSTRAINT `predstava_prijevod_ibfk_1` FOREIGN KEY (`id_predstava`) REFERENCES `predstava` (`id`),
  CONSTRAINT `predstava_prijevod_ibfk_2` FOREIGN KEY (`id_jezik`) REFERENCES `jezik` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

/*Data for the table `predstava_prijevod` */

insert  into `predstava_prijevod`(`id`,`id_predstava`,`id_jezik`,`naziv_predstave`,`opis_predstave`) values 
(1,12,1,'Plavo','Plavo je priča o znamenitoj narudžbi serije murala za restoran na «krovu svijeta» Five Seasons u zgradi Burj Khalifa u Dubaiju koja je još bila u izgradnji kada je Yusuf prihvatio posao. Kroz interakciju između Yusufa, giganta apstraktnog ekspresionizma, i njegovog mladog asistenta Haleda, ova priča o stvaranju proteže se na period od dvije godine u kojem Yusuf grozničavo radi na Malom Opusu.\r\nU mističnom prostoru slikarevog ateljea, Plavo postaje izuzetna intelektualna diskusija između briljantnog ekspresioniste i njegovog znatiželjnog asistenta. Dok Yusuf uči Haleda kako da promatra umjetnost, Yusuf u stvarnosti uči nas kako drugačije, promišljeno, promatrati svijet oko sebe.\r\nPlavo pokazuje dinamičan odnos između umjetnika i njegove kreacije\r\n'),
(2,13,1,'Bluzeri narodnjaci','Mnogobrojna pisma obožavatelja, ekstatična publika u riječkim klubovima i pritisak šire javnosti učinili su svoje: kazališni bend Omega Lithium napravio je novu predstavu za Dnevnu scenu kazališta Felicita! Nakon sedamgodina lutanja po glazbenim žanrovima ostao je još samo jedan nepokoreni žanr: „turbo-folk“. Upravo to je glazbena baza novog satirično-bezizlaznog „showa“ iz radionice jedinog hrvatskog stalnog kazališnog benda.\r\nPoznate melodije rastvorit će se pred vama u obradi benda Omega Lithium s potpuno novim stihovima koji će vas nasmijati, a možda i potaknuti da naručite nešto oštro na šanku još za vrijeme predstave.\r\n\r\nSedamdesetih godina u „Ježu“ u Vukovarskoj ulici Drago Bahun kao Petrica Kerempuh je progovarao o stvarnosti na način na koji se „nije smjelo“. I tako je krenula tradicija cabareta na dnevnoj sceni današnjeg kazališta Felicita. Danas ne postoji ta vrsta cenzure što je pred Omega Lithium postavilo novi izazov: Kako izgleda politički cabaret u 21. stoljeću?\r\nInspirirani Rat Packom, Montyjem Pythonom i kafanskom pijankom „(B)luzeri narodnjaci“ nude drugačiji oblik zabave u zagrebačkom dnevnom životu. \r\n'),
(3,14,1,'Bljesak zlatnog zuba','Na repertoar Kazališta Felicita ovaj mjesec dolazi nam „Bljesak zlatnog zuba“,  gastarbajterska kronika Marka Markića. Riječ je o jednom od najboljih kazališnih komada u novijoj hrvatskoj dramskoj književnosti. Ova mentalitetna komedija smještena je u mjesto Ričice pokraj Imotskog, čije stanovnike očekuju velike zajedničke i osobne promjene. Težak im je život u selu, mukotrpan je muškarcima rad u Njemačkoj, ali oni sve nedaće lome  životnom borbom i optimizmom, oporim humorom i neuništivim duhom. Sjajno napisani karakteri i prepoznatljive životne situacije sa tvrdog kamenjara zabavit će vas, ali i postaviti pred pitanje: koliko snage imamo da postanemo stvarni, autentični ljudi? Jer stanovnici ovog komada istinski izgaraju za ljubav, za domovinu, za obitelj, za prave velike vrijednosti. Samo ih život u tome stalno onemogućava. Smijeh kojim ćete ih ispratiti, sakrit će suzu za velikim vrijednostima.'),
(4,15,1,'Ukroćena goropadnica','Ukroćena goropadnica, ili kao trajniji glagol: kroćenje goropadi, kako vam drago, novi je naslov u kazališnoj sezoni što nas očekuje. U jednoj od najpopularnijih Shakespearovih komedija moći ćemo ponovno uživati već potkraj rujna. Borba spolova u žaru ljubavne strasti nikad ne izlazi iz mode! Mogu li se suvremeni muškarci zapitati kako ukrotiti divlju mačku, a da pri tom nitko ne izgubi svoje dostojanstvo? Recept će im dati Pero, glavni muški lik ove komedije, koji će na sebi svojstven, ležeran i zavodljiv način na sve napade i uvrede svoje bolje polovice samo vedro povikati: “Poljubi me, Kate!” I zagrlit će je žestoko oko struka, a ona će mu pritom nešto razbiti o glavu! Slobodni, jaki, strastveni i nesputani – junaci ove komedije pružit će nam inspiraciju da budemo iskreni i svoji, baš onakvi kakvi su ti mahniti tipovi koji će prošetati pozornicom.\r\nPrateći zgode i nezgode oko udaje dviju sestara, krotke i promućurne Janice i divlje i temperamentne Katarine, upoznat ćemo i cijelo jedno zabavno društvo oko njih. Šašave prosce i njihove budalaste sluge, smiješne majke i zaljubljene mladiće kojima je ljubav posvema zamaglila vid. Upoznat ćemo cijeli jedan mali svijet veselih, posebnih ljudi koji se vrti brzo, živo i dinamično kao dobro nauljeni šareni vrtuljak. \r\n'),
(5,16,1,'Indijanci','Osam ljudi  našli su se zajedno s jednim ciljem: napraviti Indijansku predstavu.\r\nTih osam likova, osam karaktera pratimo od početka, tj. od audicije pa sve do konačnog proizvoda - premijere. Svi ti akteri (uglavnom gubitnici) tijekom rada na predstavi razvijaju svoje životne priče utječući neminovno jedni na druge; svi se polako hvataju za predstavu i shvaćaju je kao borbu sa samim sobom te ujedno gledaju na nju kao na priliku života. Ne u egzistencijalnom smislu, već kao svoju životnu metaforu: pobijediti život, biti iznad svakodnevnog preživljavanja, tj. možda prvi puta u životu doći do kraja i to kao pobjednik. A pobjeda je sama predstava.\r\nPredstava ima manire najklasičnijeg mjuzikla (i to je urađeno namjerno), a nadamo se da prati (možda čak i nadograđuje) dosadašnju egzitovsku estetiku.\r\n'),
(6,17,1,'Vojska','Kad neprijatelja nema - treba ga izmisliti. Na ovoj premisi počiva prva drama jednog od ponajboljih poljskih dramatičara svih vremena objavljena 1958.\r\n\r\nOva kratka i duhovito napisana drama odigrava se kroz II čina i pet lica, a indirektno je usmjerena protiv svakog totalitarnog režima, naročito onog komunističkog, čiji su partijski funkcioneri, državnički aparat i svaka vrsta idolopoklonstva bili inspiracija mnogim stvaraocima, pa tako i Mrožeku.\r\nMotiv apsurda se u „Vojsci“ provlači kroz viziju mračne buduće ali vjerojatno i realne slike čovječanstva: koga će vojska napadati ako su svi slozni? Jer, vojska mora postojati. Vojska od generala, zapovjednika i vojnika živi i opstaje. Ukoliko rata i nema, gubi se svaki smisao vojske. Na kraju se čitava farsa svodi  na to da svi međusobno zarate, iz potpune ludosti, gluposti i, prije svega, nemoći.\r\n'),
(7,12,2,'Blù','Blù è la storia della famosa ordinazione di una serie di murali per il ristorante „sul tetto del mondo“ Five Seasons, nell\'edificio Burj Khalifa a Dubbai, il quale non era ancora costruito nel tempo in cui Yusuf ha ricevuto il lavoro. Attraverso la communicazione tra Yusuf, un grande dell\'espressionismo astratto, e il suo giovane assistente Haled, la storia si stende nel periodo di due anni, nei quali Yusuf lavora sodo sul Piccolo Lavoro.\r\nNel mistico studio del pittore, Blù diventa un brillante discussione intelettuale tra il grande e il suo assistente. Mentre Yusuf insegna Haled come capire l\'arte, Yusuf, infatti, insegna noi come osservare il mondo intorno a noi in un modo differente.\r\nBlù rappresenta un rapporto dinamico tra l\'artista e le sue creazioni.\r\n'),
(8,13,2,'Il vechio nuovo','Moltissime lettere degli ammiratori, il pubblico fiumano estatico e la pressione dei mass media hanno fatto il suo: il gruppo teatrale Omega Lithium ha creato un nuovo spettacolo per il teatro Felicità! Dopo aver trascorso sette anni passando da un genere al altro, è rimasto solo uno non scoperto: il „turbo-folk“. Appunto su questo genere e\' basato il nuovo „show“ satirico dell\'unico gruppo teatrale croato.\r\nDelle melodie molto conosciute verrano combinate con dei nuovi versi fatti dai Omega Lithium. Vi farranno ridere e, forse anche, vi darranno l\'idea di ordinare qualche bibita.\r\nNegli anni settanta, nel bar „Jež“ in via Vukovar, Drago Bahun come Petrica Kerempuh parlava della realtà in modo „proibito“. Così è nata la tradizione del cabaret nel teatro Felicità. Per il gruppo Omega Lithium il termine „censura“ non rappresenta nessun problema: Com\'è rappresentato il cabaret politico nel 21° secolo?\r\nIspirati da Rat Pack, Monty Python e feste spontanee ai bar il vecchio nuovo offrono un nuovo modo per divertirsi a Zagabria.\r\n'),
(9,14,2,'Il lampo del dante d\'oro','Al teatro Felicità, in questo mese arriva „Il lampo del dente d\'oro“, cronaca di Marko Markić. Si tratta di uno dei migliori pezzi teatrali della letteratura croata moderna. Questa commedia, situata a Ričice presso Imotski, ci trasmette la vita contadina degli abitanti che presto affronteranno molti cambiamenti. La vita contadina è dura, così come è duro il lavoro in Germania. Però loro affrontano tutti gli ostacoli che la vita gli impone lottando con ottimismo, umorismo e con un anima indistruttibile. Vi divertiranno gli ottimi personaggi e le situazioni della vita quotidiana del villagio, ma nello stesso tempo vi porranno la domada: quanta forza ci serve per diventare uomini reali, autentici? Perché gli abitanti di questo villagio lottano fino in fondo per l\'amore, per la patria, per la famiglia e per i valori veri. È la vita quella che impedisce loro di riuscire. Le vostre risate nasconderanno la nostalgia per i valori veri (persi).'),
(10,15,2,'La bisbetica domata','La bisbetica domata, oppure come verbo: domare i bisbetici, come vi piace, è il titolo del nuovo spettacolo che ci aspetta. Già alla fine di settembre potremmo godere di una delle commedie più conosciute di Shakespeare. La lotta tra i generi intrecciata con la passione va di moda sempre! Gli uomini d\'oggi si potrebbero chiedere come domare una gatta selvatica senza perdere la dignità? La risposta darrà loro Pero, il protagonista principale, il quale risponderà a tutte le insultazioni e provocazioni della donna con: „Bacciami Kate!“. L\'abbraccierà forte e lei, invece, gli buttera qualcosa in testa! Liberi, forti, appassionati e spontanei – questi personaggi ci ispireranno ad essere sinceri e liberi, propio come lo sono loro.\r\nSeguiremmo le vicende legate ad i matrimoni delle due sorelle, la mite e intelligente Janica e la capricciosa Katarina, da un carrattere molto forte. Inoltre, conosceremmo tutti i loro simpatici amici: gli sciocchi corteggiatori e i loro servi ingenui, le madri ridicole e i ragazzi innamorati che non vedono nient\'altro apparte l\'amore. Conosceremmo un mondo pieno di gente serena e felice, il quale gira molto veloce come una giostra.\r\n'),
(11,16,2,'Gi indiani','Otto persone si sono trovate con lo stesso obbiettivo: creare uno spettacolo indiano. \r\nNoi seguiamo questi otto personaggi sin dall\'inizio, cioè dall\'audizione fino al debutto. I personaggi (senza ambizioni) ci raccontano le loro storie della vita, ma, nello stesso tempo, influenzano uno l\'altro. Iniziano a creare lo spettacolo intendendolo come una lotta contro solo se stessi e come un\'opportunità della vità. Ovvero, un\'opportunità per vincere la vita, sollevarsi sopra la quotidianità e, forse per la prima volta, andare fino in fondo e diventare vincitore. La vittoria è il solo spettacolo.\r\nLo spettacolo assomiglia al musicale classico (non per caso) e speriamo che segua la attuale estetica dell\'Exit.\r\n'),
(12,17,2,NULL,NULL);

/*Table structure for table `termin` */

DROP TABLE IF EXISTS `termin`;

CREATE TABLE `termin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum_i_vrijeme` datetime DEFAULT NULL,
  `id_predstave` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_predstave` (`id_predstave`),
  CONSTRAINT `termin_ibfk_1` FOREIGN KEY (`id_predstave`) REFERENCES `predstava` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `termin` */

insert  into `termin`(`id`,`datum_i_vrijeme`,`id_predstave`) values 
(1,'2016-04-03 20:00:00',12),
(2,'2016-04-04 20:00:00',13),
(3,'2016-04-03 18:00:00',14),
(4,'2016-04-04 18:00:00',15),
(5,'2016-04-05 18:00:00',16),
(6,'2016-04-05 20:00:00',17);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
