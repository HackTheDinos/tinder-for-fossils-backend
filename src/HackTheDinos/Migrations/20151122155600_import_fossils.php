<?php

use Phinx\Migration\AbstractMigration;

class ImportFossils extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
	$import_fossils = $this->execute (
	"INSERT INTO fossil (id, submission_date, paleo_decision, latitude, longitude, title, description, visitor_id, rationale) VALUES

	(1,'2015-07-02',1,40.781979,-73.972014,'Shark tooth','Shark tooth',101,'Pleistocene Carcharodon carcharias'),
(2,'2015-07-02',1,40.781979,-73.972014,'Presumably fossil','Presumably fossil',102,'Foraminiferal limestone'),
(3,'2015-07-03',1,40.781979,-73.972014,'Maybe T. rex bone','Maybe T. rex bone',103,'Fossil bone chunk'),
(4,'2015-07-03',2,40.781979,-73.972014,'Fossil?','Fossil?',104,'Probably mineral'),
(5,'2015-07-04',1,40.781979,-73.972014,'Fossils','Fossils',105,'Fossils'),
(6,'2015-07-05',1,40.781979,-73.972014,'Presumably fossil','Presumably fossil',106,'Probable Favosites and a rock'),
(7,'2015-07-06',1,40.781979,-73.972014,'Fossil rib with human workmanship','Fossil rib with human workmanship',107,'Probable fossil bone with possible much-later human workmanship'),
(8,'2015-07-06',1,40.781979,-73.972014,'Fossil','Fossil',108,'Trimerus cephalon'),
(9,'2015-07-07',2,40.781979,-73.972014,'I guess \'fossil\'','I guess \'fossil\'',109,'Rocks'),
(10,'2015-07-08',2,40.781979,-73.972014,'Fossil','Fossil',110,'Rock'),
(11,'2015-07-11',1,40.781979,-73.972014,'Bone','Bone',111,'Horse radioulna and femur fragments, possibly as old as Ice Age'),
(12,'2015-07-12',1,40.781979,-73.972014,'Presumably fossil','Presumably fossil',112,'Bryozoan hash'),
(13,'2015-07-12',1,40.781979,-73.972014,'He was told fish but doubts it','He was told fish but doubts it',113,'Gastropods'),
(14,'2015-07-13',1,40.781979,-73.972014,'Fossil worm tubes and a kind of sea creature, maybe a snail or shell fossil or something else','Fossil worm tubes and a kind of sea creature, maybe a snail or shell fossil or something else',114,'Worm tubes/plant bits/or nothing and a fossil snail'),
(15,'2015-07-16',2,40.781979,-73.972014,'Fossil','Fossil',115,'Rock'),
(16,'2015-07-18',2,40.781979,-73.972014,'Fossil','Fossil',116,'Limonite'),
(17,'2015-07-21',1,40.781979,-73.972014,'Fossil coral or fossil beehive','Fossil coral or fossil beehive',117,'Fossil coral'),
(18,'2015-07-21',2,40.781979,-73.972014,'Fossilized egg','Fossilized egg',118,'Rock'),
(19,'2015-07-24',2,40.781979,-73.972014,'Fossil dinosaur egg','Fossil dinosaur egg',119,'Rock'),
(20,'2015-07-24',2,40.781979,-73.972014,'Octopus Fossil','Octopus Fossil',120,'Calcite cave formation'),
(21,'2015-07-25',2,40.781979,-73.972014,'Possible fossil egg and tooth','Possible fossil egg and tooth',121,'Probable weathered limestone and ironstone nodule'),
(22,'2015-07-26',2,40.781979,-73.972014,'Trilobyte','Trilobyte',122,'Fake'),
(23,'2015-07-26',1,40.781979,-73.972014,'Fossil of maybe a  fish, maybe a vertebrate [vertebra?] or a shoulder blade','Fossil of maybe a  fish, maybe a vertebrate [vertebra?] or a shoulder blade',123,'Probable fossil marine mammal bone fragment'),
(24,'2015-07-26',2,40.781979,-73.972014,'Presumably fossil','Presumably fossil',124,'Possible stromatolite, oncolite, or thrombolite'),
(25,'2015-07-27',1,40.781979,-73.972014,'Possible fossil bone','Possible fossil bone',125,'Fossil bone, maybe turtle'),
(26,'2015-07-27',2,40.781979,-73.972014,'Possible fossil','Possible fossil',126,'Very odd rock'),
(27,'2015-07-29',2,40.781979,-73.972014,'Fossil head','Fossil head',127,'Rock'),
(28,'2015-07-30',2,40.781979,-73.972014,'Fossil egg or septarian concretion','Fossil egg or septarian concretion',128,'Rock or possibly degraded rubber/plastic'),
(29,'2015-07-31',1,40.781979,-73.972014,'Fossil vertebrates, arthropods and plants (several kinds of fishes, angiosperms, auroch, 
cycads, grasses, and reptile from L. Dev., Perm.,  Triassic, L. Cret., Paleocene, Miocene,  Paleogene, Quaternary','Fossil vertebrates, arthropods and plants (several kinds of fishes, angiosperms, auroch, 
cycads, grasses, and reptile from L. Dev., Perm.,  Triassic, L. Cret., Paleocene, Miocene,  Paleogene, Quaternary',129,'IDs are probably correct'),
(30,'2015-08-01',2,40.781979,-73.972014,'Dinosaur eggs','Dinosaur eggs',130,'Chert concretions'),
(31,'2015-08-02',1,40.781979,-73.972014,'Fossil plant','Fossil plant',131,'Calamites pith cast'),
(32,'2015-08-02',2,40.781979,-73.972014,'Fossil tooth embedded in rock','Fossil tooth embedded in rock',132,'Rock'),
(33,'2015-08-03',1,40.781979,-73.972014,'Fossil','Fossil',133,'Probably fossil'),
(34,'2015-08-03',2,40.781979,-73.972014,'Possible fossilized skull of a small of the \"preserved flesh\" type','Possible fossilized skull of a small of the \"preserved flesh\" type',134,'Rock'),
(35,'2015-08-04',1,40.781979,-73.972014,'Fossils','Fossils',135,'Mostly brachiopods'),
(36,'2015-08-04',1,40.781979,-73.972014,'Fossil','Fossil',136,'Stigmarian rhizomorph'),
(37,'2015-08-05',1,40.781979,-73.972014,'Possible fossil impressions of a scaly, reptilian type texture, similar to a snake\'s skin','Possible fossil impressions of a scaly, reptilian type texture, similar to a snake\'s skin',137,'Fossil lycopsids'),
(38,'2015-08-09',3,40.781979,-73.972014,'Possible fossil insect or maybe fish or crab','Possible fossil insect or maybe fish or crab',138,'Possible olenellid trilobite'),
(39,'2015-08-10',3,40.781979,-73.972014,'Presumable fossil skeleton','Presumable fossil skeleton',139,'Possible ammonite'),
(40,'2015-08-11',1,40.781979,-73.972014,'Fossil tooth or coral','Fossil tooth or coral',140,'Mostly fossil crinoids with bivalve or brachiopod'),
(41,'2015-08-12',2,40.781979,-73.972014,'Fossil dinosaur egg','Fossil dinosaur egg',141,'Glassy nodule'),
(42,'2015-08-12',1,40.781979,-73.972014,'Possible fossil','Possible fossil',142,'Mammoth molar'),
(43,'2015-08-13',2,40.781979,-73.972014,'Fossil front toe or claw from early crocodillian or turtle','Fossil front toe or claw from early crocodillian or turtle',143,'Flint nodule'),
(44,'2015-08-14',1,40.781979,-73.972014,'Possible fossil','Possible fossil',144,'Fossil echinoid mold'),
(45,'2015-08-15',2,40.781979,-73.972014,'Possible fossil fungus','Possible fossil fungus',145,'Probable calcite cave formation'),
(46,'2015-08-16',3,40.781979,-73.972014,'Fossils','Fossils',146,'Branching bryozoan and un known'),
(47,'2015-08-16',2,40.781979,-73.972014,'Presumably fossil','Presumably fossil',147,'Horn coral'),
(48,'2015-08-17',2,40.781979,-73.972014,'Possible fossil on possible fossil bone','Possible fossil on possible fossil bone',148,'Waterworn piece of coral with  attached weathered worm tube'),
(49,'2015-08-18',1,40.781979,-73.972014,'Fossil','Fossil',149,'Fossil mammal calcaneum'),
(50,'2015-08-18',2,40.781979,-73.972014,'Presumably fossil','Presumably fossil',150,'Probable mineral growth'),
(51,'2015-08-19',2,40.781979,-73.972014,'Fossil whale','Fossil whale',151,'Modern sperm whale'),
(52,'2015-08-20',1,40.781979,-73.972014,'Trace fossils','Trace fossils',152,'Trace fossils or non-organismal sedimentary features'),
(53,'2015-08-20',2,40.781979,-73.972014,'“Embryo of a spinosauridae” and fossil egg','“Embryo of a spinosauridae” and fossil egg',153,'Rocks'),
(54,'2015-08-20',2,40.781979,-73.972014,'Fossil','Fossil',154,'Probably just a rock'),
(55,'2015-08-21',2,40.781979,-73.972014,'Fossil','Fossil',155,'Rock'),
(56,'2015-08-21',3,40.781979,-73.972014,'Fossils','Fossils',156,'Probable partial ammonite, unidentifiable fossil, chert'),
(57,'2015-08-21',2,40.781979,-73.972014,'Marine turtle fossil','Marine turtle fossil',157,'Rock'),
(58,'2015-08-24',1,40.781979,-73.972014,'Plateosaurus','Plateosaurus',158,'Fossil cave bear finger'),
(59,'2015-08-25',3,40.781979,-73.972014,'Possible fossil','Possible fossil',159,'Possible trace fossil'),
(60,'2015-08-26',2,40.781979,-73.972014,'Possible fossilised [sic] egg','Possible fossilised [sic] egg',160,'Mineral accumulation'),
(61,'2015-08-27',2,40.781979,-73.972014,'Possible dinosaur fossil','Possible dinosaur fossil',161,'Rock'),
(62,'2015-08-27',1,40.781979,-73.972014,'Fossils','Fossils',162,'Calamites, Favosites, horn coral, colonial coral, other coral or bryozoan'),
(63,'2015-08-28',1,40.781979,-73.972014,'Possible fossil','Possible fossil',163,'Vinctifer comptoni'),
(64,'2015-08-29',1,40.781979,-73.972014,'Fossil marine bone','Fossil marine bone',164,'Fossil fish tooth'),
(65,'2015-08-29',3,40.781979,-73.972014,'Possible fossil bone','Possible fossil bone',165,'Probable rock, if a fossil: maybe a burrow'),
(66,'2015-08-30',3,40.781979,-73.972014,'Fossil','Fossil',166,'Probable fossil, maybe fish or plant'),
(67,'2015-08-31',3,40.781979,-73.972014,'Fossil','Fossil',167,'Possible fossil'),
(68,'2015-09-01',2,40.781979,-73.972014,'Fossilized coral','Fossilized coral',168,'Rock'),
(69,'2015-09-03',2,40.781979,-73.972014,'Rather large bone (presumably not fossil)','Rather large bone (presumably not fossil)',169,'Tuna bone'),
(70,'2015-09-03',1,40.781979,-73.972014,'Fossils','Fossils',170,'Productid brachiopod, unknown impression, Syringopora-like coral, horn coral'),
(71,'2015-09-03',1,40.781979,-73.972014,'Possible fossil','Possible fossil',171,'Fossil nautiloid'),
(72,'2015-09-04',3,40.781979,-73.972014,'Dinosaur tooth','Dinosaur tooth',172,'Probable fossil'),
(73,'2015-09-04',3,40.781979,-73.972014,'Fossil plant or animal','Fossil plant or animal',173,'Probable rudist and unknown'),
(74,'2015-09-04',1,40.781979,-73.972014,'Fossil','Fossil',174,'Clam steinkern'),
(75,'2015-09-05',1,40.781979,-73.972014,'Possible fossil','Possible fossil',175,'Horn coral'),
(76,'2015-09-05',3,40.781979,-73.972014,'Fossil','Fossil',176,'Oyster shell, possibly fossil'),
(77,'2015-09-06',1,40.781979,-73.972014,'Fossils, possible bone','Fossils, possible bone',177,'2 horn corals, a porous rock, and possible obsidian, cow tooth'),
(78,'2015-09-08',2,40.781979,-73.972014,'Possible fossil','Possible fossil',178,'Probable layered flint'),
(79,'2015-09-08',3,40.781979,-73.972014,'Fossils','Fossils',179,'A rock and fossil corals'),
(80,'2015-09-08',2,40.781979,-73.972014,'Presumably fossil bone','Presumably fossil bone',180,'Likely modern ?cow phalanx'),
(81,'2015-09-10',1,40.781979,-73.972014,'Possible fossil worm','Possible fossil worm',181,'Probable straight-shelled nautiloid, possible brachiopod, probable  horn coral, indet. fossil'),
(82,'2015-09-11',1,40.781979,-73.972014,'Tooth','Tooth',182,'Upper left horse molar or premolar'),
(83,'2015-09-12',2,40.781979,-73.972014,'Fossils','Fossils',183,'Unknown'),
(84,'2015-09-13',2,40.781979,-73.972014,'Possible fossil','Possible fossil',184,'Likely modern encrusting bryozoan'),
(85,'2015-09-14',3,40.781979,-73.972014,'Possible fossil','Possible fossil',185,'Possibly fossil puffer fish jaw'),
(86,'2015-09-14',2,40.781979,-73.972014,'Possible fossil tooth','Possible fossil tooth',186,'Non-fossil unknown'),
(87,'2015-09-16',1,40.781979,-73.972014,'fossil','fossil',187,'brachiopod'),
(88,'2015-09-16',1,40.781979,-73.972014,'Possible fossil jawbone','Possible fossil jawbone',188,'Pleistocene bison or musk ox jaw fragment'),
(89,'2015-09-17',2,40.781979,-73.972014,'Fossil bone','Fossil bone',189,'Weathered chunk of sandstone matrix'),
(90,'2015-09-18',2,40.781979,-73.972014,'Top of spine and ribs of Anchisaurus','Top of spine and ribs of Anchisaurus',190,'Weathered chunk of layered sedimentary rock and other rocks'),
(91,'2015-09-19',1,40.781979,-73.972014,'Fossil','Fossil',191,'Fossil turtle shell fragments, croc osteoderms, and other fragments'),
(92,'2015-09-19',2,40.781979,-73.972014,'Presumably fossil','Presumably fossil',192,'Probably modern mammal (maybe dolphin) vertebral epiphysis'),
(93,'2015-09-19',2,40.781979,-73.972014,'Unusual fossil','Unusual fossil',193,'Unknown, but doubtful that it is a fossil'),
(94,'2015-09-20',1,40.781979,-73.972014,'Fossil','Fossil',194,'Possible turtle and vertebrae'),
(95,'2015-09-23',1,40.781979,-73.972014,'Possible fossilized tooth','Possible fossilized tooth',195,'Probable horn coral'),
(96,'2015-09-24',3,40.781979,-73.972014,'Fossils','Fossils',196,'Possible turtle bone (?fossil), Enchodus fang'),
(97,'2015-09-25',1,40.781979,-73.972014,'Fossil','Fossil',197,'Possibly Devonian coral, brachiopod, and other marine invertebrates'),
(98,'2015-09-25',2,40.781979,-73.972014,'Fossil','Fossil',198,'Probably coalified plant remains,
natural fracture patterns and mineral stains, rock'),
(99,'2015-09-25',1,40.781979,-73.972014,'Possible fossil','Possible fossil',199,'Moroccan Orthoceras, doctored ammonite'),
(100,'2015-09-27',2,40.781979,-73.972014,'Bog dinosaur with skin','Bog dinosaur with skin',200,'Rock'),
(101,'2015-09-27',2,40.781979,-73.972014,'Fossil','Fossil',201,'Unknown'),
(102,'2015-09-29',1,40.781979,-73.972014,'Fossil','Fossil',202,'Possible coalified wood'),
(103,'2015-09-30',1,40.781979,-73.972014,'Fossil shell and possible coral','Fossil shell and possible coral',203,'Fossil brachiopod and probable coral'),
(104,'2015-09-30',1,40.781979,-73.972014,'Dinosaur bone','Dinosaur bone',204,'Probably fossils'),
(105,'2015-10-01',1,40.781979,-73.972014,'Possible turtle','Possible turtle',205,'Snails'),
(106,'2015-10-01',2,40.781979,-73.972014,'Some form of fossil reptile, maybe a pterosaur','Some form of fossil reptile, maybe a pterosaur',206,'Fake'),
(107,'2015-10-01',1,40.781979,-73.972014,'Fossil tooth, tusk, or plant','Fossil tooth, tusk, or plant',207,'Castoroides upper incisor fragment'),
(108,'2015-10-01',1,40.781979,-73.972014,'Bone','Bone',208,'Probable fragment of cow or horse scapula'),
(109,'2015-10-04',2,40.781979,-73.972014,'Dinosaur egg, fossil animal head','Dinosaur egg, fossil animal head',209,'Concretion, rock'),
(110,'2015-10-04',1,40.781979,-73.972014,'Fossil','Fossil',210,'Probable Arthrophycus-like trace fossil'),
(111,'2015-10-05',1,40.781979,-73.972014,'Fossil shell','Fossil shell',211,'Horn coral'),
(112,'2015-10-05',2,40.781979,-73.972014,'Presumably fossil egg','Presumably fossil egg',212,'Concretion'),
(113,'2015-10-05',2,40.781979,-73.972014,'Fossil with a lot of sharp teeth, hardened reptile scales, two short arms and fingers all tangled up under the head or skin that settled after it died','Fossil with a lot of sharp teeth, hardened reptile scales, two short arms and fingers all tangled up under the head or skin that settled after it died',213,'Rock'),
(114,'2015-10-05',2,40.781979,-73.972014,'Fossil','Fossil',214,'Rock with crystals'),
(115,'2015-10-06',2,40.781979,-73.972014,'2 chamber fossilized heart','2 chamber fossilized heart',215,'Chert nodule'),
(116,'2015-10-08',2,40.781979,-73.972014,'?Possibly fossil whale vertebrae','?Possibly fossil whale vertebrae',216,'Modern whale vertebrae'),
(117,'2015-10-08',1,40.781979,-73.972014,'Fossil','Fossil',217,'Fossil, probably marine invertebrate'),
(118,'2015-10-09',1,40.781979,-73.972014,'Presumably fossil','Presumably fossil',218,'Horn coral'),
(119,'2015-10-09',3,40.781979,-73.972014,'Possible fossil','Possible fossil',219,'Helmet shell lip'),
(120,'2015-10-10',1,40.781979,-73.972014,'Fossil','Fossil',220,'Small cetacean vertebra'),
(121,'2015-10-10',2,40.781979,-73.972014,'Possible fossil','Possible fossil',221,'Botryoidal mineral'),
(122,'2015-10-11',1,40.781979,-73.972014,'Presumably fossil','Presumably fossil',222,'Probable crinoid stem fragment'),
(123,'2015-10-12',2,40.781979,-73.972014,'Fossil','Fossil',223,'Probable non-fossil rock'),
(124,'2015-10-12',1,40.781979,-73.972014,'Fossil shell','Fossil shell',224,'Fossil snail'),
(125,'2015-10-13',1,40.781979,-73.972014,'Fossil','Fossil',225,'Halysites'),
(126,'2015-10-14',3,40.781979,-73.972014,'Trace fossil or straight-shelled cephalopod, and possible fossil imprint','Trace fossil or straight-shelled cephalopod, and possible fossil imprint',226,'Probable trace fossil, rock'),
(127,'2015-10-15',2,40.781979,-73.972014,'Presumably fossil','Presumably fossil',227,'Probably rock'),
(128,'2015-10-15',1,40.781979,-73.972014,'Fossil','Fossil',228,'Horn coral'),
(129,'2015-10-17',1,40.781979,-73.972014,'Mastodon teeth','Mastodon teeth',229,'Mastodont teeth'),
(130,'2015-10-19',1,40.781979,-73.972014,'Fossil','Fossil',230,'Isotelus pygidium'),
(131,'2015-10-19',2,40.781979,-73.972014,'Fossil','Fossil',231,'Rock'),
(132,'2015-10-20',2,40.781979,-73.972014,'Possible fossil','Possible fossil',232,'Odd rock'),
(133,'2015-10-22',2,40.781979,-73.972014,'Not rocks','Not rocks',233,'Geodes'),
(134,'2015-10-22',2,40.781979,-73.972014,'Fossil skull','Fossil skull',234,'Rock'),
(135,'2015-10-23',2,40.781979,-73.972014,'Big dinosaur bone','Big dinosaur bone',235,'Rock'),
(136,'2015-10-23',1,40.781979,-73.972014,'Presumably fossil bone','Presumably fossil bone',236,'Palmoxylon'),
(137,'2015-10-23',2,40.781979,-73.972014,'Presumably fossils','Presumably fossils',237,'Sedimentary concretions'),
(138,'2015-10-23',2,40.781979,-73.972014,'Possible fossil','Possible fossil',238,'Rock'),
(139,'2015-10-24',1,40.781979,-73.972014,'Fossil','Fossil',239,'Ammonite chamber steinkern'),
(140,'2015-10-25',1,40.781979,-73.972014,'Fossil','Fossil',240,'Probable orthocone'),
(141,'2015-10-25',2,40.781979,-73.972014,'cephalopod concretions','cephalopod concretions',241,'unknown'),
(142,'2015-10-26',3,40.781979,-73.972014,'Possible fossils (one possible fossil anemone)','Possible fossils (one possible fossil anemone)',242,'Manganese dendrites, horn coral, branching bryozoan mold'),
(143,'2015-10-26',2,40.781979,-73.972014,'Fossil','Fossil',243,'Septarian concretions'),
(144,'2015-10-26',3,40.781979,-73.972014,'Fossil, coprolites','Fossil, coprolites',244,'Heteromorph ammonite, non-coprolites'),
(145,'2015-10-27',3,40.781979,-73.972014,'Possible fossil','Possible fossil',245,'Possible fossil'),
(146,'2015-10-27',1,40.781979,-73.972014,'Possible fossil','Possible fossil',246,'Ammonite'),
(147,'2015-10-28',2,40.781979,-73.972014,'Fossil','Fossil',247,'Rock'),
(148,'2015-10-28',2,40.781979,-73.972014,'Bones or a skeleton of a dragon that spits fire','Bones or a skeleton of a dragon that spits fire',248,'No response required'),
(149,'2015-10-28',1,40.781979,-73.972014,'Fossil','Fossil',249,'Probably mold of club urchin spine'),
(150,'2015-10-28',2,40.781979,-73.972014,'Possible fossilized egg','Possible fossilized egg',250,'Concretion'),
(151,'2015-10-30',1,40.781979,-73.972014,'Megalodon tooth','Megalodon tooth',251,'Probable Megalodon projectile point'),
(152,'2015-10-30',1,40.781979,-73.972014,'Presumably fossil','Presumably fossil',252,'Fossil shell');"

	);
    }
}
