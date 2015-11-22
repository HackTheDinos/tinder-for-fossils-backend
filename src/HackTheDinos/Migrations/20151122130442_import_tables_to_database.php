<?php

use Phinx\Migration\AbstractMigration;

class ImportTablesToDatabase extends AbstractMigration
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
	$insert_fossil = $this-> execute 
	("INSERT INTO 'fossil' ('id','submission_date','paleo_decision','latitude','longitude','title','description','visitor_id','rationale') VALUES
		(1,1 Jul 2015,1,40.781979,-73.972014,Shark tooth,Shark tooth,101,Pleistocene Carcharodon carcharias),
		(2,2 Jul 2015,1,40.781979,-73.972014,Presumably fossil,Presumably fossil,102,Foraminiferal limestone),
		(3,2 Jul 2015,1,40.781979,-73.972014,Maybe T. rex bone,Maybe T. rex bone,103,Fossil bone chunk),
		(4,3 Jul 2015,2,40.781979,-73.972014,Fossil?,Fossil?,104,Probably mineral),
(5,3 Jul 2015,1,40.781979,-73.972014,Fossils,Fossils,105,Fossils),
(6,4 Jul 2015,1,40.781979,-73.972014,Presumably fossil,Presumably fossil,106,Probable Favosites and a rock),
(7,5 Jul 2015,1,40.781979,-73.972014,Fossil rib with human workmanship,Fossil rib with human workmanship,107,Probable fossil bone with possible much-later human workmanship),
(8,6 Jul 2015,1,40.781979,-73.972014,Fossil,Fossil,108,Trimerus cephalon),
(9,6 Jul 2015,2,40.781979,-73.972014,I guess ‘fossil’,I guess ‘fossil’,109,Rocks),
(10,7 Jul 2015,2,40.781979,-73.972014,Fossil,Fossil,110,Rock),
(11,8 Jul 2015,1,40.781979,-73.972014,Bone,Bone,111,Horse radioulna and femur fragments, possibly as old as Ice Age),
(12,11 Jul 2015,1,40.781979,-73.972014,Presumably fossil,Presumably fossil,112,Bryozoan hash),
(13,12 Jul 2015,1,40.781979,-73.972014,He was told fish but doubts it,He was told fish but doubts it,113,Gastropods),
(14,12 Jul 2015,1,40.781979,-73.972014,Fossil worm tubes and a kind of sea creature, maybe a snail or shell fossil or something else,Fossil worm tubes and a kind of sea creature, maybe a snail or shell fossil or something else,114,Worm tubes/plant bits/or nothing and a fossil snail),
(15,13 Jul 2015,2,40.781979,-73.972014,Fossil,Fossil,115,Rock),
(16,16 Jul 2015,2,40.781979,-73.972014,Fossil,Fossil,116,Limonite),
(17,18 Jul 2015,1,40.781979,-73.972014,Fossil coral or fossil beehive,Fossil coral or fossil beehive,117,Fossil coral),
(18,21 Jul 2015,2,40.781979,-73.972014,Fossilized egg,Fossilized egg,118,Rock),
(19,21 Jul 2015,2,40.781979,-73.972014,Fossil dinosaur egg,Fossil dinosaur egg,119,Rock),
(20,24 Jul 2015,2,40.781979,-73.972014,Octopus Fossil,Octopus Fossil,120,Calcite cave formation),
(21,24 Jul 2015,2,40.781979,-73.972014,Possible fossil egg and tooth,Possible fossil egg and tooth,121,Probable weathered limestone and ironstone nodule),
(22,25 Jul 2015,2,40.781979,-73.972014,Trilobyte,Trilobyte,122,Fake),
(23,26 Jul 2015,1,40.781979,-73.972014,Fossil of maybe a  fish, maybe a vertebrate [vertebra?] or a shoulder blade,Fossil of maybe a  fish, maybe a vertebrate [vertebra?] or a shoulder blade,123,Probable fossil marine mammal bone fragment),
(24,26 Jul 2015,2,40.781979,-73.972014,Presumably fossil,Presumably fossil,124,Possible stromatolite, oncolite, or thrombolite),
(25,26 Jul 2015,1,40.781979,-73.972014,Possible fossil bone,Possible fossil bone,125,Fossil bone, maybe turtle),
(26,27 Jul 2015,2,40.781979,-73.972014,Possible fossil,Possible fossil,126,Very odd rock),
(27,27 Jul 2015,2,40.781979,-73.972014,Fossil head,Fossil head,127,Rock),
(28,29 Jul 2015,2,40.781979,-73.972014,Fossil egg or septarian concretion,Fossil egg or septarian concretion,128,Rock or possibly degraded rubber/plastic),
(29,30 Jul 2015,1,40.781979,-73.972014,Fossil vertebrates, arthropods and plants (several kinds of fishes, angiosperms, auroch, 
cycads, grasses, and reptile from L. Dev., Perm.,  Triassic, L. Cret., Paleocene, Miocene,  Paleogene, Quaternary,Fossil vertebrates, arthropods and plants (several kinds of fishes, angiosperms, auroch, 
cycads, grasses, and reptile from L. Dev., Perm.,  Triassic, L. Cret., Paleocene, Miocene,  Paleogene, Quaternary,129,IDs are probably correct),
(30,31 Jul 2015,2,40.781979,-73.972014,Dinosaur eggs,Dinosaur eggs,130,Chert concretions),
(31,1 Aug 2015,1,40.781979,-73.972014,Fossil plant,Fossil plant,131,Calamites pith cast),
(32,2 Aug 2015,2,40.781979,-73.972014,Fossil tooth embedded in rock,Fossil tooth embedded in rock,132,Rock),
(33,2 Aug 2015,1,40.781979,-73.972014,Fossil,Fossil,133,Probably fossil),
(34,3 Aug 2015,2,40.781979,-73.972014,Possible fossilized skull of a small of the \"preserved flesh\" type,Possible fossilized skull of a small of the \"preserved flesh\" type,134,Rock),
(35,3 Aug 2015,1,40.781979,-73.972014,Fossils,Fossils,135,Mostly brachiopods),
(36,4 Aug 2015,1,40.781979,-73.972014,Fossil,Fossil,136,Stigmarian rhizomorph),
(37,4 Aug 2015,1,40.781979,-73.972014,Possible fossil impressions of a scaly, reptilian type texture, similar to a snake's skin,Possible fossil impressions of a scaly, reptilian type texture, similar to a snake's skin,137,Fossil lycopsids),
(38,5 Aug 2015,3,40.781979,-73.972014,Possible fossil insect or maybe fish or crab,Possible fossil insect or maybe fish or crab,138,Possible olenellid trilobite),
(39,9 Aug 2015,3,40.781979,-73.972014,Presumable fossil skeleton,Presumable fossil skeleton,139,Possible ammonite),
(40,10 Aug 2015,1,40.781979,-73.972014,Fossil tooth or coral,Fossil tooth or coral,140,Mostly fossil crinoids with bivalve or brachiopod),
(41,11 Aug 2015,2,40.781979,-73.972014,Fossil dinosaur egg,Fossil dinosaur egg,141,Glassy nodule),
(42,12 Aug 2015,1,40.781979,-73.972014,Possible fossil,Possible fossil,142,Mammoth molar),
(43,12 Aug 2015,2,40.781979,-73.972014,Fossil front toe or claw from early crocodillian or turtle,Fossil front toe or claw from early crocodillian or turtle,143,Flint nodule),
(44,13 Aug 2015,1,40.781979,-73.972014,Possible fossil,Possible fossil,144,Fossil echinoid mold),
(45,14 Aug 2015,2,40.781979,-73.972014,Possible fossil fungus,Possible fossil fungus,145,Probable calcite cave formation),
(46,15 Aug 2015,3,40.781979,-73.972014,Fossils,Fossils,146,Branching bryozoan and un known),
(47,16 Aug 2015,2,40.781979,-73.972014,Presumably fossil,Presumably fossil,147,Horn coral),
(48,16 Aug 2015,2,40.781979,-73.972014,Possible fossil on possible fossil bone,Possible fossil on possible fossil bone,148,Waterworn piece of coral with  attached weathered worm tube),
(49,17 Aug 2015,1,40.781979,-73.972014,Fossil,Fossil,149,Fossil mammal calcaneum),
(50,18 Aug 2015,2,40.781979,-73.972014,Presumably fossil,Presumably fossil,150,Probable mineral growth),
(51,18 Aug 2015,2,40.781979,-73.972014,Fossil whale,Fossil whale,151,Modern sperm whale),
(52,19 Aug 2015,1,40.781979,-73.972014,Trace fossils,Trace fossils,152,Trace fossils or non-organismal sedimentary features),
(53,20 Aug 2015,2,40.781979,-73.972014,“Embryo of a spinosauridae” and fossil egg,“Embryo of a spinosauridae” and fossil egg,153,Rocks),
(54,20 Aug 2015,2,40.781979,-73.972014,Fossil,Fossil,154,Probably just a rock),
(55,20 Aug 2015,2,40.781979,-73.972014,Fossil,Fossil,155,Rock),
(56,21 Aug 2015,3,40.781979,-73.972014,Fossils,Fossils,156,Probable partial ammonite, unidentifiable fossil, chert),
(57,21 Aug 2015,2,40.781979,-73.972014,Marine turtle fossil,Marine turtle fossil,157,Rock),
(58,21 Aug 2015,1,40.781979,-73.972014,Plateosaurus,Plateosaurus,158,Fossil cave bear finger),
(59,24 Aug 2015,3,40.781979,-73.972014,Possible fossil,Possible fossil,159,Possible trace fossil),
(60,25 Aug 2015,2,40.781979,-73.972014,Possible fossilised [sic] egg,Possible fossilised [sic] egg,160,Mineral accumulation),
(61,26 Aug 2015,2,40.781979,-73.972014,Possible dinosaur fossil,Possible dinosaur fossil,161,Rock),
(62,27 Aug 2015,1,40.781979,-73.972014,Fossils,Fossils,162,Calamites, Favosites, horn coral, colonial coral, other coral or bryozoan),
(63,27 Aug 2015,1,40.781979,-73.972014,Possible fossil,Possible fossil,163,Vinctifer comptoni),
(64,28 Aug 2015,1,40.781979,-73.972014,Fossil marine bone,Fossil marine bone,164,Fossil fish tooth),
(65,29 Aug 2015,3,40.781979,-73.972014,Possible fossil bone,Possible fossil bone,165,Probable rock, if a fossil: maybe a burrow),
(66,29 Aug 2015,3,40.781979,-73.972014,Fossil,Fossil,166,Probable fossil, maybe fish or plant),
(67,30 Aug 2015,3,40.781979,-73.972014,Fossil,Fossil,167,Possible fossil),
(68,31 Aug 2015,2,40.781979,-73.972014,Fossilized coral,Fossilized coral,168,Rock),
(69,1 Sep 2015,2,40.781979,-73.972014,Rather large bone (presumably not fossil),Rather large bone (presumably not fossil),169,Tuna bone),
(70,3 Sep 2015,1,40.781979,-73.972014,Fossils,Fossils,170,Productid brachiopod, unknown impression, Syringopora-like coral, horn coral ),
(71,3 Sep 2015,1,40.781979,-73.972014,Possible fossil,Possible fossil,171,Fossil nautiloid),
(72,3 Sep 2015,3,40.781979,-73.972014,Dinosaur tooth,Dinosaur tooth,172,Probable fossil),
(73,4 Sep 2015,3,40.781979,-73.972014,Fossil plant or animal,Fossil plant or animal,173,Probable rudist and unknown),
(74,4 Sep 2015,1,40.781979,-73.972014,Fossil,Fossil,174,Clam steinkern),
(75,4 Sep 2015,1,40.781979,-73.972014,Possible fossil,Possible fossil,175,Horn coral),
(76,5 Sep 2015,3,40.781979,-73.972014,Fossil,Fossil,176,Oyster shell, possibly fossil),
(77,5 Sep 2015,1,40.781979,-73.972014,Fossils, possible bone,Fossils, possible bone,177,2 horn corals, a porous rock, and possible obsidian, cow tooth),
(78,6 Sep 2015,2,40.781979,-73.972014,Possible fossil,Possible fossil,178,Probable layered flint),
(79,8 Sep 2015,3,40.781979,-73.972014,Fossils,Fossils,179,A rock and fossil corals),
(80,8 Sep 2015,2,40.781979,-73.972014,Presumably fossil bone,Presumably fossil bone,180,Likely modern ?cow phalanx),
(81,8 Sep 2015,1,40.781979,-73.972014,Possible fossil worm,Possible fossil worm,181,Probable straight-shelled nautiloid, possible brachiopod, probable  horn coral, indet. fossil),
(82,10 Sep 2015,1,40.781979,-73.972014,Tooth,Tooth,182,Upper left horse molar or premolar),
(83,11 Sep 2015,2,40.781979,-73.972014,Fossils,Fossils,183,Unknown),
(84,12 Sep 2015,2,40.781979,-73.972014,Possible fossil,Possible fossil,184,Likely modern encrusting bryozoan),
(85,13 Sep 2015,3,40.781979,-73.972014,Possible fossil,Possible fossil,185,Possibly fossil puffer fish jaw),
(86,14 Sep 2015,2,40.781979,-73.972014,Possible fossil tooth,Possible fossil tooth,186,Non-fossil unknown),
(87,14 Sep 2015,1,40.781979,-73.972014,fossil,fossil,187,brachiopod),
(88,16 Sep 2015,1,40.781979,-73.972014,Possible fossil jawbone,Possible fossil jawbone,188,Pleistocene bison or musk ox jaw fragment),
(89,16 Sep 2015,2,40.781979,-73.972014,Fossil bone,Fossil bone,189,Weathered chunk of sandstone matrix),
(90,17 Sep 2015,2,40.781979,-73.972014,Top of spine and ribs of Anchisaurus,Top of spine and ribs of Anchisaurus,190,Weathered chunk of layered sedimentary rock and other rocks),
(91,18 Sep 2015,1,40.781979,-73.972014,Fossil,Fossil,191,Fossil turtle shell fragments, croc osteoderms, and other fragments),
(92,19 Sep 2015,2,40.781979,-73.972014,Presumably fossil,Presumably fossil,192,Probably modern mammal (maybe dolphin) vertebral epiphysis),
(93,19 Sep 2015,2,40.781979,-73.972014,Unusual fossil,Unusual fossil,193,Unknown, but doubtful that it is a fossil),
(94,19 Sep 2015,1,40.781979,-73.972014,Fossil,Fossil,194,Possible turtle and vertebrae),
(95,20 Sep 2015,1,40.781979,-73.972014,Possible fossilized tooth,Possible fossilized tooth,195,Probable horn coral),
(96,23 Sep 2015,3,40.781979,-73.972014,Fossils,Fossils,196,Possible turtle bone (?fossil), Enchodus fang),
(97,24 Sep 2015,1,40.781979,-73.972014,Fossil,Fossil,197,Possibly Devonian coral, brachiopod, and other marine invertebrates),
(98,25 Sep 2015,2,40.781979,-73.972014,Fossil,Fossil,198,Probably coalified plant remains,
natural fracture patterns and mineral stains, rock ),
(99,25 Sep 2015,1,40.781979,-73.972014,Possible fossil,Possible fossil,199,Moroccan Orthoceras, doctored ammonite),
(100,25 Sep 2015,2,40.781979,-73.972014,Bog dinosaur with skin,Bog dinosaur with skin,200,Rock),
(101,27 Sep 2015,2,40.781979,-73.972014,Fossil,Fossil,201,Unknown),
(102,27 Sep 2015,1,40.781979,-73.972014,Fossil,Fossil,202,Possible coalified wood),
(103,29 Sep 2015,1,40.781979,-73.972014,Fossil shell and possible coral,Fossil shell and possible coral,203,Fossil brachiopod and probable coral),
(104,30 Sep 2015,1,40.781979,-73.972014,Dinosaur bone,Dinosaur bone,204,Probably fossils),
(105,30 Sep 2015,1,40.781979,-73.972014,Possible turtle,Possible turtle,205,Snails),
(106,1 Oct 2015,2,40.781979,-73.972014,Some form of fossil reptile, maybe a pterosaur,Some form of fossil reptile, maybe a pterosaur,206,Fake),
(107,1 Oct 2015,1,40.781979,-73.972014,Fossil tooth, tusk, or plant,Fossil tooth, tusk, or plant,207,Castoroides upper incisor fragment),
(108,1 Oct 2015,1,40.781979,-73.972014,Bone,Bone,208,Probable fragment of cow or horse scapula),
(109,1 Oct 2015,2,40.781979,-73.972014,Dinosaur egg, fossil animal head,Dinosaur egg, fossil animal head,209,Concretion, rock),
(110,4 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,210,Probable Arthrophycus-like trace fossil),
(111,4 Oct 2015,1,40.781979,-73.972014,Fossil shell,Fossil shell,211,Horn coral),
(112,5 Oct 2015,2,40.781979,-73.972014,Presumably fossil egg,Presumably fossil egg,212,Concretion),
(113,5 Oct 2015,2,40.781979,-73.972014,Fossil with a lot of sharp teeth, hardened reptile scales, two short arms and fingers all tangled up under the head or skin that settled after it died,Fossil with a lot of sharp teeth, hardened reptile scales, two short arms and fingers all tangled up under the head or skin that settled after it died,213,Rock),
(114,5 Oct 2015,2,40.781979,-73.972014,Fossil,Fossil,214,Rock with crystals),
(115,5 Oct 2015,2,40.781979,-73.972014,2 chamber fossilized heart,2 chamber fossilized heart,215,Chert nodule),
(116,6 Oct 2015,2,40.781979,-73.972014,?Possibly fossil whale vertebrae,?Possibly fossil whale vertebrae,216,Modern whale vertebrae),
(117,8 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,217,Fossil, probably marine invertebrate),
(118,8 Oct 2015,1,40.781979,-73.972014,Presumably fossil,Presumably fossil,218,Horn coral),
(119,9 Oct 2015,3,40.781979,-73.972014,Possible fossil,Possible fossil,219,Helmet shell lip),
(120,9 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,220,Small cetacean vertebra),
(121,10 Oct 2015,2,40.781979,-73.972014,Possible fossil,Possible fossil,221,Botryoidal mineral),
(122,10 Oct 2015,1,40.781979,-73.972014,Presumably fossil,Presumably fossil,222,Probable crinoid stem fragment),
(123,11 Oct 2015,2,40.781979,-73.972014,Fossil,Fossil,223,Probable non-fossil rock),
(124,12 Oct 2015,1,40.781979,-73.972014,Fossil shell,Fossil shell,224,Fossil snail),
(125,12 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,225,Halysites),
(126,13 Oct 2015,3,40.781979,-73.972014,Trace fossil or straight-shelled cephalopod, and possible fossil imprint,Trace fossil or straight-shelled cephalopod, and possible fossil imprint,226,Probable trace fossil, rock),
(127,14 Oct 2015,2,40.781979,-73.972014,Presumably fossil,Presumably fossil,227,Probably rock),
(128,15 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,228,Horn coral),
(129,15 Oct 2015,1,40.781979,-73.972014,Mastodon teeth,Mastodon teeth,229,Mastodont teeth),
(130,17 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,230,Isotelus pygidium),
(131,19 Oct 2015,2,40.781979,-73.972014,Fossil,Fossil,231,Rock),
(132,19 Oct 2015,2,40.781979,-73.972014,Possible fossil,Possible fossil,232,Odd rock),
(133,20 Oct 2015,2,40.781979,-73.972014,Not rocks,Not rocks,233,Geodes),
(134,22 Oct 2015,2,40.781979,-73.972014,Fossil skull,Fossil skull,234,Rock),
(135,22 Oct 2015,2,40.781979,-73.972014,Big dinosaur bone,Big dinosaur bone,235,Rock),
(136,23 Oct 2015,1,40.781979,-73.972014,Presumably fossil bone,Presumably fossil bone,236,Palmoxylon),
(137,23 Oct 2015,2,40.781979,-73.972014,Presumably fossils,Presumably fossils,237,Sedimentary concretions),
(138,23 Oct 2015,2,40.781979,-73.972014,Possible fossil,Possible fossil,238,Rock),
(139,23 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,239,Ammonite chamber steinkern),
(140,24 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,240,Probable orthocone),
(141,25 Oct 2015,2,40.781979,-73.972014,cephalopod concretions,cephalopod concretions,241,unknown),
(142,25 Oct 2015,3,40.781979,-73.972014,Possible fossils (one possible fossil anemone),Possible fossils (one possible fossil anemone),242,Manganese dendrites, horn coral, branching bryozoan mold),
(143,26 Oct 2015,2,40.781979,-73.972014,Fossil,Fossil,243,Septarian concretions),
(144,26 Oct 2015,3,40.781979,-73.972014,Fossil, coprolites,Fossil, coprolites,244,Heteromorph ammonite, non-coprolites),
(145,26 Oct 2015,3,40.781979,-73.972014,Possible fossil,Possible fossil,245,Possible fossil),
(146,27 Oct 2015,1,40.781979,-73.972014,Possible fossil,Possible fossil,246,Ammonite),
(147,27 Oct 2015,2,40.781979,-73.972014,Fossil,Fossil,247,Rock),
(148,28 Oct 2015,2,40.781979,-73.972014,Bones or a skeleton of a dragon that spits fire,Bones or a skeleton of a dragon that spits fire,248,No response required),
(149,28 Oct 2015,1,40.781979,-73.972014,Fossil,Fossil,249,Probably mold of club urchin spine),
(150,28 Oct 2015,2,40.781979,-73.972014,Possible fossilized egg,Possible fossilized egg,250,Concretion),
(151,28 Oct 2015,1,40.781979,-73.972014,Megalodon tooth,Megalodon tooth,251,Probable Megalodon projectile point),
(152,30 Oct 2015,1,40.781979,-73.972014,Presumably fossil,Presumably fossil,252,Fossil shell);"
	);

	$insert_decision = $this->execute 
	("INSERT INTO 'decision' ('id','decision') VALUES
		(1,Y),
		(2,N),
		(3,M);"
	);

	$insert_visitor = $this->execute
	("INSERT INTO 'visitor' ('id','name','email','twitter_handle')
	(101,Tom,,),
(102,Louis,,),
(103,Kevin,,),
(104,William,,),
(105,Tahri,,),
(106,Mike,,),
(107,David,,),
(108,Lisa ,,),
(109,Brooke,,),
(110,Andy,,),
(111,David,,),
(112,Rick,,),
(113,Peter,,),
(114,Farkas,,),
(115,Com,,),
(116,Anjie,,),
(117,Tara,,),
(118,Jessica ,,),
(119,Tim,,),
(120,Naz,,),
(121,Randy,,),
(122,Alex ,,),
(123,John ,,),
(124,J ,,),
(125,Suzi ,,),
(126,Michael,,),
(127,Wendy,,),
(128,Tom,,),
(129,Domas Norkevicius,,),
(130,Jeff,,),
(131,Vincent,,),
(132,Adam ,,),
(133,Barb,,),
(134,David,,),
(135,Krista,,),
(136,Michael ,,),
(137,David,,),
(138,Jeffrey,,),
(139,Greg,,),
(140,Matt ,,),
(141,Richard,,),
(142,Janko,,),
(143,Tim,,),
(144,Jill,,),
(145,Lauren,,),
(146,Rick,,),
(147,Larry ,,),
(148,Steven,,),
(149,Robin ,,),
(150,Brian,,),
(151,Aris Timo,,),
(152,Susan ,,),
(153,Kel ,,),
(154,Brink,,),
(155,Joel ,,),
(156,Frito,,),
(157,CJ,,),
(158,Clayton ,,),
(159,James ,,),
(160,Sergio ,,),
(161,Miguel,,),
(162,Erin ,,),
(163,Melissa ,,),
(164,John ,,),
(165,Stan ,,),
(166,Sarah,,),
(167,Brittany,,),
(168,Ishveen ,,),
(169,Robert,,),
(170,Courtney,,),
(171,Brian,,),
(172,Matt,,),
(173,Lauren ,,),
(174,Brody,,),
(175,Jason ,,),
(176,Christopher,,),
(177,Kevin,,),
(178,Patrick,,),
(179,Luke Mull,,),
(180,Mike,,),
(181,Ray Dell ,,),
(182,Mark ,,),
(183,Linda,,),
(184,Rosa,,),
(185,Todd ,,),
(186,Jeff,,),
(187,Chanalle,,),
(188,Cathy ,,),
(189,Lindsey,,),
(190,Ron ,,),
(191,Sterling ,,),
(192,Marion ,,),
(193,Aaminah ,,),
(194,Kellie ,,),
(195,Brenna,,),
(196,Amy ,,),
(197,Bill ,,),
(198,Allen ,,),
(199,Shane ,,),
(200,Chrissie Rosamond,,),
(201,Charley,,),
(202,Gerry ,,),
(203,April ,,),
(204,James ,,),
(205,Clare ,,),
(206,Tom ,,),
(207,Barrett,,),
(208,Shadi,,),
(209,Unknown,,),
(210,John,,),
(211,Thomas,,),
(212,William,,),
(213,Christine ,,),
(214,Katie ,,),
(215,Steven,,),
(216,Matthew ,,),
(217,Michelle,,),
(218,Scott,,),
(219,Bob,,),
(220,William,,),
(221,Donald,,),
(222,Daniel,,),
(223,Bobbi-Lynn,,),
(224,Andrew ,,),
(225,Unknown,,),
(226,Kouga,,),
(227,Doug ,,),
(228,Kelsy,,),
(229,Carolyn ,,),
(230,Tom,,),
(231,Joe,,),
(232,Steven ,,),
(233,Dan,,),
(234,Mike ,,),
(235,Taylor,,),
(236,Mike ,,),
(237,Suzanne ,,),
(238,Michael,,),
(239,Dare ,,),
(240,Jim,,),
(241,Alan,,),
(242,Tyler ,,),
(243,Kathy ,,),
(244,Tim ,,),
(245,Thomas,,),
(246,Brock ,,),
(247,Kirstin ,,),
(248,Unknown,,),
(249,Louisa ,,),
(250,Charles,,),
(251,Matt,,),
(252,Thomas,,);"
	);

	$insert_picture = $this-> execute
	("INSERT INTO 'picture' ('id','primary_picture','fossil_id','filepath','picture_data') VALUES
(1,1,100,100a_M.jpg,100a_M.jpg),
(2,0,100,100b_M.jpg,100b_M.jpg),
(3,0,100,100c_M.jpg,100c_M.jpg),
(4,0,100,100d_M.jpg,100d_M.jpg),
(5,1,101,101a_Y.jpg,101a_Y.jpg),
(6,0,101,101b_Y.jpg,101b_Y.jpg),
(7,0,101,101c_Y.jpg,101c_Y.jpg),
(8,0,101,101d_Y.jpg,101d_Y.jpg),
(9,0,101,101e_Y.jpg,101e_Y.jpg),
(10,0,101,101f_Y.jpg,101f_Y.jpg),
(11,0,101,101g_Y.jpg,101g_Y.jpg),
(12,0,101,101h_Y.jpg,101h_Y.jpg),
(13,1,102,102a_N.jpg,102a_N.jpg),
(14,0,102,102b_N.jpg,102b_N.jpg),
(15,0,102,102c_N.jpg,102c_N.jpg),
(16,0,102,102d_N.jpg,102d_N.jpg),
(17,0,102,102e_N.jpg,102e_N.jpg),
(18,0,102,102f_N.jpg,102f_N.jpg),
(19,0,102,102g_N.jpg,102g_N.jpg),
(20,0,102,102h_N.jpg,102h_N.jpg),
(21,0,102,102i_N.jpg,102i_N.jpg),
(22,0,102,102j_N.jpg,102j_N.jpg),
(23,0,102,102k_N.jpg,102k_N.jpg),
(24,0,102,102l_N.jpg,102l_N.jpg),
(25,0,102,102m_N.jpg,102m_N.jpg),
(26,1,103,103a_Y.jpg,103a_Y.jpg),
(27,0,103,103b_Y.jpg,103b_Y.jpg),
(28,0,103,103c_Y.jpg,103c_Y.jpg),
(29,0,103,103d_Y.jpg,103d_Y.jpg),
(30,0,103,103e_Y.jpg,103e_Y.jpg),
(31,0,103,103f_Y.jpg,103f_Y.jpg),
(32,0,103,103g_Y.jpg,103g_Y.jpg),
(33,0,103,103h_Y.jpg,103h_Y.jpg),
(34,1,104,104a_N.jpg,104a_N.jpg),
(35,0,104,104b_N.jpg,104b_N.jpg),
(36,1,105,105a_N.jpg,105a_N.jpg),
(37,0,105,105b_N.jpg,105b_N.jpg),
(38,0,105,105c_N.jpg,105c_N.jpg),
(39,1,106,106a_Y.jpg,106a_Y.jpg),
(40,0,106,106b_Y.jpg,106b_Y.jpg),
(41,0,106,106c_Y.jpg,106c_Y.jpg),
(42,0,106,106d_Y.jpg,106d_Y.jpg),
(43,0,106,106e_Y.jpg,106e_Y.jpg),
(44,0,106,106f_Y.jpg,106f_Y.jpg),
(45,0,106,106g_Y.jpg,106g_Y.jpg),
(46,1,107,107a_Y.jpg,107a_Y.jpg),
(47,1,109,109a_Y.jpg,109a_Y.jpg),
(48,0,109,109b_Y.jpg,109b_Y.jpg),
(49,0,109,109c_Y.jpg,109c_Y.jpg),
(50,0,109,109d_Y.jpg,109d_Y.jpg),
(51,0,109,109e_Y.jpg,109e_Y.jpg),
(52,0,109,109f_Y.jpg,109f_Y.jpg),
(53,1,10,10a_N.jpg,10a_N.jpg),
(54,0,10,10b_N.jpg,10b_N.jpg),
(55,0,10,10c_N.jpg,10c_N.jpg),
(56,1,110,110a_Y.jpg,110a_Y.jpg),
(57,0,110,110b_Y.jpg,110b_Y.jpg),
(58,0,110,110c_Y.jpg,110c_Y.jpg),
(59,1,111,111a_N.jpg,111a_N.jpg),
(60,0,111,111b_N.jpg,111b_N.jpg),
(61,0,111,111c_N.jpg,111c_N.jpg),
(62,0,111,111d_N.jpg,111d_N.jpg),
(63,0,111,111e_N.jpg,111e_N.jpg),
(64,0,111,111f_Y.jpg,111f_Y.jpg),
(65,0,111,111g_Y.jpg,111g_Y.jpg),
(66,0,111,111h_Y.jpg,111h_Y.jpg),
(67,1,112,112a_Y.jpg,112a_Y.jpg),
(68,0,112,112b_Y.jpg,112b_Y.jpg),
(69,0,112,112c_Y.jpg,112c_Y.jpg),
(70,0,112,112d_Y.jpg,112d_Y.jpg),
(71,0,112,112e_Y.jpg,112e_Y.jpg),
(72,1,113,113a_Y.jpg,113a_Y.jpg),
(73,1,114,114a_N.jpg,114a_N.jpg),
(74,0,114,114b_N.jpg,114b_N.jpg),
(75,0,114,114c_N.jpg,114c_N.jpg),
(76,0,114,114d_N.jpg,114d_N.jpg),
(77,0,114,114e_N.jpg,114e_N.jpg),
(78,0,114,114f_N.jpg,114f_N.jpg),
(79,0,114,114g_N.jpg,114g_N.jpg),
(80,1,116,116a_Y.jpg,116a_Y.jpg),
(81,0,116,116b_Y.jpg,116b_Y.jpg),
(82,1,117,117a_Y.jpg,117a_Y.jpg),
(83,0,117,117b_Y.jpg,117b_Y.jpg),
(84,0,117,117c_Y.jpg,117c_Y.jpg),
(85,1,119,119a_N.jpg,119a_N.jpg),
(86,0,119,119b_N.jpg,119b_N.jpg),
(87,0,119,119c_N.jpg,119c_N.jpg),
(88,0,119,119d_N.jpg,119d_N.jpg),
(89,0,119,119e_N.jpg,119e_N.jpg),
(90,1,120,120a_N.jpg,120a_N.jpg),
(91,0,120,120b_N.jpg,120b_N.jpg),
(92,0,120,120c_N.jpg,120c_N.jpg),
(93,0,120,120d_N.jpg,120d_N.jpg),
(94,0,120,120e_N.jpg,120e_N.jpg),
(95,0,120,120f_N.jpg,120f_N.jpg),
(96,0,120,120g_N.jpg,120g_N.jpg),
(97,0,120,120h_N.jpg,120h_N.jpg),
(98,0,120,120i_N.jpg,120i_N.jpg),
(99,0,120,120j_N.jpg,120j_N.jpg),
(100,0,120,120k_N.jpg,120k_N.jpg),
(101,0,120,120l_N.jpg,120l_N.jpg),
(102,0,120,120m_N.jpg,120m_N.jpg),
(103,0,120,120n_N.jpg,120n_N.jpg),
(104,0,120,120o_N.jpg,120o_N.jpg),
(105,0,120,120p_N.jpg,120p_N.jpg),
(106,0,120,120q_N.jpg,120q_N.jpg),
(107,0,120,120r_N.jpg,120r_N.jpg),
(108,0,120,120s_N.jpg,120s_N.jpg),
(109,0,120,120t_N.jpg,120t_N.jpg),
(110,0,120,120u_N.jpg,120u_N.jpg),
(111,0,120,120v_N.jpg,120v_N.jpg),
(112,0,120,120w_N.jpg,120w_N.jpg),
(113,1,121,121a_N.jpg,121a_N.jpg),
(114,0,121,121b_N.jpg,121b_N.jpg),
(115,0,121,121c_N.jpg,121c_N.jpg),
(116,1,122,122a_N.jpg,122a_N.jpg),
(117,0,122,122b_N.jpg,122b_N.jpg),
(118,0,122,122c_N.jpg,122c_N.jpg),
(119,0,122,122d_N.jpg,122d_N.jpg),
(120,0,122,122e_N.jpg,122e_N.jpg),
(121,0,122,122f_N.jpg,122f_N.jpg),
(122,1,123,123a_N.jpg,123a_N.jpg),
(123,0,123,123b_N.jpg,123b_N.jpg),
(124,0,123,123c_N.jpg,123c_N.jpg),
(125,1,124,124a_Y.jpg,124a_Y.jpg),
(126,0,124,124b_Y.jpg,124b_Y.jpg),
(127,0,124,124c_Y.jpg,124c_Y.jpg),
(128,0,124,124d_Y.jpg,124d_Y.jpg),
(129,1,125,125a_Y.jpg,125a_Y.jpg),
(130,0,125,125b_Y.jpg,125b_Y.jpg),
(131,0,125,125c_Y.jpg,125c_Y.jpg),
(132,0,125,125d_Y.jpg,125d_Y.jpg),
(133,1,126,126a_M.jpg,126a_M.jpg),
(134,0,126,126b_M.jpg,126b_M.jpg),
(135,0,126,126c_M.jpg,126c_M.jpg),
(136,0,126,126d_M.jpg,126d_M.jpg),
(137,1,127,127a_Y.jpg,127a_Y.jpg),
(138,0,127,127b_Y.jpg,127b_Y.jpg),
(139,0,127,127c_Y.jpg,127c_Y.jpg),
(140,0,127,127d_Y.jpg,127d_Y.jpg),
(141,0,127,127e_Y.jpg,127e_Y.jpg),
(142,1,128,128a_N.jpg,128a_N.jpg),
(143,0,128,128b_N.jpg,128b_N.jpg),
(144,1,129,129a_Y.jpg,129a_Y.jpg),
(145,0,129,129b_Y.jpg,129b_Y.jpg),
(146,0,129,129c_Y.jpg,129c_Y.jpg),
(147,0,129,129d_Y.jpg,129d_Y.jpg),
(148,0,129,129e_Y.jpg,129e_Y.jpg),
(149,1,12,12a_Y.jpg,12a_Y.jpg),
(150,0,12,12b_Y.jpg,12b_Y.jpg),
(151,0,12,12c_Y.jpg,12c_Y.jpg),
(152,0,12,12d_Y.jpg,12d_Y.jpg),
(153,1,130,130a_N.jpg,130a_N.jpg),
(154,0,130,130b_N.jpg,130b_N.jpg),
(155,1,131,131a_Y.jpg,131a_Y.jpg),
(156,0,131,131b_Y.jpg,131b_Y.jpg),
(157,1,132,132a_Y.jpg,132a_Y.jpg),
(158,1,133,133a_M.jpg,133a_M.jpg),
(159,0,133,133b_M.jpg,133b_M.jpg),
(160,0,133,133c_N.jpg,133c_N.jpg),
(161,0,133,133d_N.jpg,133d_N.jpg),
(162,1,134,134a_N.jpg,134a_N.jpg),
(163,0,134,134b_N.jpg,134b_N.jpg),
(164,0,134,134c_N.jpg,134c_N.jpg),
(165,0,134,134d_N.jpg,134d_N.jpg),
(166,0,134,134e_N.jpg,134e_N.jpg),
(167,0,134,134f_N.jpg,134f_N.jpg),
(168,1,135,135a_Y.jpg,135a_Y.jpg),
(169,0,135,135b_Y.jpg,135b_Y.jpg),
(170,1,136,136a_Y.jpg,136a_Y.jpg),
(171,0,136,136b_Y.jpg,136b_Y.jpg),
(172,0,136,136c_Y.jpg,136c_Y.jpg),
(173,0,136,136d_Y.jpg,136d_Y.jpg),
(174,1,137,137a_Y.jpg,137a_Y.jpg),
(175,0,137,137b_Y.jpg,137b_Y.jpg),
(176,0,137,137c_Y.jpg,137c_Y.jpg),
(177,1,138,138a_N.jpg,138a_N.jpg),
(178,0,138,138b_N.jpg,138b_N.jpg),
(179,0,138,138c_N.jpg,138c_N.jpg),
(180,1,139,139a_N.jpg,139a_N.jpg),
(181,0,139,139b_N.jpg,139b_N.jpg),
(182,0,139,139c_N.jpg,139c_N.jpg),
(183,0,139,139d_N.jpg,139d_N.jpg),
(184,0,139,139e_N.jpg,139e_N.jpg),
(185,0,139,139f_N.jpg,139f_N.jpg),
(186,1,13,13a_Y.jpg,13a_Y.jpg),
(187,0,13,13b_Y.jpg,13b_Y.jpg),
(188,0,13,13c_Y.jpg,13c_Y.jpg),
(189,1,140,140a_N.jpg,140a_N.jpg),
(190,0,140,140b_N.jpg,140b_N.jpg),
(191,0,140,140c_N.jpg,140c_N.jpg),
(192,0,140,140d_N.jpg,140d_N.jpg),
(193,0,140,140e_N.jpg,140e_N.jpg),
(194,1,141,141a_N.jpg,141a_N.jpg),
(195,0,141,141b_N.jpg,141b_N.jpg),
(196,0,141,141c_N.jpg,141c_N.jpg),
(197,0,141,141d_N.jpg,141d_N.jpg),
(198,1,142,142a_N.jpg,142a_N.jpg),
(199,1,143,143a_Y.jpg,143a_Y.jpg),
(200,0,143,143b_Y.jpg,143b_Y.jpg),
(201,0,143,143c_Y.jpg,143c_Y.jpg),
(202,0,143,143d_Y.jpg,143d_Y.jpg),
(203,0,143,143e_Y.jpg,143e_Y.jpg),
(204,0,143,143f_Y.jpg,143f_Y.jpg),
(205,0,143,143g_Y.jpg,143g_Y.jpg),
(206,1,144,144a_N.jpg,144a_N.jpg),
(207,0,144,144b_N.jpg,144b_N.jpg),
(208,0,144,144c_N.jpg,144c_N.jpg),
(209,0,144,144d_N.jpg,144d_N.jpg),
(210,0,144,144e_N.jpg,144e_N.jpg),
(211,0,144,144f_N.jpg,144f_N.jpg),
(212,0,144,144g_N.jpg,144g_N.jpg),
(213,0,144,144h_N.jpg,144h_N.jpg),
(214,0,144,144i_N.jpg,144i_N.jpg),
(215,1,145,145a_N.jpg,145a_N.jpg),
(216,0,145,145b_N.jpg,145b_N.jpg),
(217,0,145,145c_N.jpg,145c_N.jpg),
(218,1,146,146a_Y.jpg,146a_Y.jpg),
(219,0,146,146b_Y.jpg,146b_Y.jpg),
(220,1,147,147a_Y.jpg,147a_Y.jpg),
(221,1,148,148a_N.jpg,148a_N.jpg),
(222,0,148,148b_N.jpg,148b_N.jpg),
(223,1,149,149a_M.jpg,149a_M.jpg),
(224,0,149,149b_M.jpg,149b_M.jpg),
(225,0,149,149c_M.jpg,149c_M.jpg),
(226,0,149,149d_M.jpg,149d_M.jpg),
(227,0,149,149e_M.jpg,149e_M.jpg),
(228,1,14,14a_Y.jpg,14a_Y.jpg),
(229,0,14,14b_Y.jpg,14b_Y.jpg),
(230,0,14,14c_Y.jpg,14c_Y.jpg),
(231,0,14,14d_Y.jpg,14d_Y.jpg),
(232,1,150,150a_N.jpg,150a_N.jpg),
(233,0,150,150b_N.jpg,150b_N.jpg),
(234,0,150,150c_N.jpg,150c_N.jpg),
(235,0,150,150d_N.jpg,150d_N.jpg),
(236,1,151,151a_Y.jpg,151a_Y.jpg),
(237,0,151,151b_N.png,151b_N.png),
(238,0,151,151c_N.jpg,151c_N.jpg),
(239,0,151,151d_N.jpg,151d_N.jpg),
(240,1,152,152a_M.jpg,152a_M.jpg),
(241,0,152,152b_M.jpg,152b_M.jpg),
(242,1,153,153a_Y.jpg,153a_Y.jpg),
(243,0,153,153b_Y.jpg,153b_Y.jpg),
(244,0,153,153c_Y.jpg,153c_Y.jpg),
(245,0,153,153d_Y.jpg,153d_Y.jpg),
(246,1,154,154a_N.jpg,154a_N.jpg),
(247,0,154,154b_N.jpg,154b_N.jpg),
(248,0,154,154c_N.jpg,154c_N.jpg),
(249,0,154,154d_N.jpg,154d_N.jpg),
(250,0,154,154e_N.jpg,154e_N.jpg),
(251,1,156,156a_Y.jpg,156a_Y.jpg),
(252,1,157,157a_N.jpg,157a_N.jpg),
(253,0,157,157b_N.jpg,157b_N.jpg),
(254,0,157,157c_N.jpg,157c_N.jpg),
(255,1,159,159a_Y.jpg,159a_Y.jpg),
(256,0,159,159b_Y.jpg,159b_Y.jpg),
(257,0,159,159c_Y.jpg,159c_Y.jpg),
(258,0,159,159d_Y.jpg,159d_Y.jpg),
(259,0,159,159e_Y.jpg,159e_Y.jpg),
(260,1,15,15a_M.jpg,15a_M.jpg),
(261,0,15,15b_M.jpg,15b_M.jpg),
(262,0,15,15c_M.jpg,15c_M.jpg),
(263,0,15,15d_M.jpg,15d_M.jpg),
(264,0,15,15e_M.jpg,15e_M.jpg),
(265,0,15,15f_Y.jpg,15f_Y.jpg),
(266,1,162,162a_Y.jpg,162a_Y.jpg),
(267,1,16,16a_N.jpg,16a_N.jpg),
(268,0,16,16b_N.jpg,16b_N.jpg),
(269,0,16,16c_N.jpg,16c_N.jpg),
(270,0,16,16d_N.jpg,16d_N.jpg),
(271,0,16,16e_N.jpg,16e_N.jpg),
(272,0,16,16f_N.jpg,16f_N.jpg),
(273,0,16,16g_N.jpg,16g_N.jpg),
(274,0,16,16h_N.jpg,16h_N.jpg),
(275,0,16,16i_N.jpg,16i_N.jpg),
(276,0,16,16j_N.jpg,16j_N.jpg),
(277,0,16,16k_N.jpg,16k_N.jpg),
(278,1,17,17a_N.jpg,17a_N.jpg),
(279,0,17,17b_N.jpg,17b_N.jpg),
(280,0,17,17c_N.jpg,17c_N.jpg),
(281,0,17,17d_N.jpg,17d_N.jpg),
(282,1,18,18a_Y.jpg,18a_Y.jpg),
(283,1,19,19a_N.jpg,19a_N.jpg),
(284,0,19,19b_N.jpg,19b_N.jpg),
(285,0,19,19c_N.jpg,19c_N.jpg),
(286,0,19,19d_N.jpg,19d_N.jpg),
(287,0,19,19e_N.jpg,19e_N.jpg),
(288,1,1,1a_Y.jpg,1a_Y.jpg),
(289,0,1,1b_Y.jpg,1b_Y.jpg),
(290,0,1,1c_Y.jpg,1c_Y.jpg),
(291,0,1,1d_Y.jpg,1d_Y.jpg),
(292,1,20,20a_N.jpg,20a_N.jpg),
(293,0,20,20b_N.jpg,20b_N.jpg),
(294,0,20,20c_N.jpg,20c_N.jpg),
(295,0,20,20d_N.jpg,20d_N.jpg),
(296,1,21,21a_N.jpg,21a_N.jpg),
(297,0,21,21b_N.jpg,21b_N.jpg),
(298,0,21,21c_N.jpg,21c_N.jpg),
(299,0,21,21d_N.jpg,21d_N.jpg),
(300,0,21,21e_N.jpg,21e_N.jpg),
(301,0,21,21f_N.jpg,21f_N.jpg),
(302,1,22,22a_N.jpg,22a_N.jpg),
(303,0,22,22b_N.jpg,22b_N.jpg),
(304,0,22,22c_N.jpg,22c_N.jpg),
(305,0,22,22d_N.jpg,22d_N.jpg),
(306,0,22,22e_N.jpg,22e_N.jpg),
(307,0,22,22f_N.jpg,22f_N.jpg),
(308,0,22,22g_N.jpg,22g_N.jpg),
(309,1,23,23a_N.jpg,23a_N.jpg),
(310,0,23,23b_N.jpg,23b_N.jpg),
(311,0,23,23c_N.jpg,23c_N.jpg),
(312,1,24,24a_Y.jpg,24a_Y.jpg),
(313,0,24,24b_Y.jpg,24b_Y.jpg),
(314,0,24,24c_Y.jpg,24c_Y.jpg),
(315,0,24,24d_Y.jpg,24d_Y.jpg),
(316,0,24,24e_Y.jpg,24e_Y.jpg),
(317,0,24,24f_Y.jpg,24f_Y.jpg),
(318,1,25,25a_M.jpg,25a_M.jpg),
(319,0,25,25b_M.jpg,25b_M.jpg),
(320,0,25,25c_M.jpg,25c_M.jpg),
(321,0,25,25d_M.jpg,25d_M.jpg),
(322,0,25,25e_M.jpg,25e_M.jpg),
(323,0,25,25f_M.jpg,25f_M.jpg),
(324,1,26,26a_Y.jpg,26a_Y.jpg),
(325,0,26,26b_Y.jpg,26b_Y.jpg),
(326,0,26,26c_Y.jpg,26c_Y.jpg),
(327,0,26,26d_Y.jpg,26d_Y.jpg),
(328,0,26,26e_Y.jpg,26e_Y.jpg),
(329,1,27,27a_N.jpg,27a_N.jpg),
(330,0,27,27b_N.jpg,27b_N.jpg),
(331,0,27,27c_N.jpg,27c_N.jpg),
(332,0,27,27d_N.jpg,27d_N.jpg),
(333,1,28,28a_N.jpg,28a_N.jpg),
(334,0,28,28b_N.jpg,28b_N.jpg),
(335,0,28,28c_N.jpg,28c_N.jpg),
(336,1,29,29a_N.jpg,29a_N.jpg),
(337,0,29,29b_N.jpg,29b_N.jpg),
(338,1,2,2a_Y.jpg,2a_Y.jpg),
(339,1,30,30a_Y.jpg,30a_Y.jpg),
(340,0,30,30b_Y.jpg,30b_Y.jpg),
(341,0,30,30c_Y.jpg,30c_Y.jpg),
(342,0,30,30d_Y.jpg,30d_Y.jpg),
(343,0,30,30e_Y.jpg,30e_Y.jpg),
(344,0,30,30f_Y.jpg,30f_Y.jpg),
(345,0,30,30g_Y.jpg,30g_Y.jpg),
(346,0,30,30h_Y.jpg,30h_Y.jpg),
(347,0,30,30i_Y.jpg,30i_Y.jpg),
(348,0,30,30j_Y.jpg,30j_Y.jpg),
(349,0,30,30k_Y.jpg,30k_Y.jpg),
(350,0,30,30l_Y.jpg,30l_Y.jpg),
(351,0,30,30m_Y.jpg,30m_Y.jpg),
(352,0,30,30n_Y.jpg,30n_Y.jpg),
(353,0,30,30o_Y.jpg,30o_Y.jpg),
(354,0,30,30p_Y.jpg,30p_Y.jpg),
(355,0,30,30q_Y.jpg,30q_Y.jpg),
(356,0,30,30r_Y.jpg,30r_Y.jpg),
(357,0,30,30s_Y.jpg,30s_Y.jpg),
(358,0,30,30t_Y.jpg,30t_Y.jpg),
(359,0,30,30u_Y.jpg,30u_Y.jpg),
(360,0,30,30v_Y.jpg,30v_Y.jpg),
(361,0,30,30w_Y.jpg,30w_Y.jpg),
(362,0,30,30x_Y.jpg,30x_Y.jpg),
(363,0,30,30y_Y.jpg,30y_Y.jpg),
(364,0,30,30za_Y.jpg,30za_Y.jpg),
(365,0,30,30zb_Y.jpg,30zb_Y.jpg),
(366,0,30,30zc_Y.jpg,30zc_Y.jpg),
(367,0,30,30zd_Y.jpg,30zd_Y.jpg),
(368,0,30,30ze_Y.jpg,30ze_Y.jpg),
(369,0,30,30zf_Y.jpg,30zf_Y.jpg),
(370,0,30,30zg_Y.jpg,30zg_Y.jpg),
(371,0,30,30zh_Y.jpg,30zh_Y.jpg),
(372,0,30,30z_Y.jpg,30z_Y.jpg),
(373,1,31,31a_N.jpg,31a_N.jpg),
(374,0,31,31b_N.jpg,31b_N.jpg),
(375,0,31,31c_N.jpg,31c_N.jpg),
(376,0,31,31d_N.jpg,31d_N.jpg),
(377,0,31,31e_N.jpg,31e_N.jpg),
(378,0,31,31f_N.jpg,31f_N.jpg),
(379,0,31,31g_N.jpg,31g_N.jpg),
(380,0,31,31h_N.jpg,31h_N.jpg),
(381,0,31,31i_N.jpg,31i_N.jpg),
(382,1,32,32a_Y.jpg,32a_Y.jpg),
(383,1,33,33a_N.jpg,33a_N.jpg),
(384,0,33,33b_N.jpg,33b_N.jpg),
(385,0,33,33c_N.jpg,33c_N.jpg),
(386,1,34,34a_Y.jpg,34a_Y.jpg),
(387,0,34,34b_Y.jpg,34b_Y.jpg),
(388,0,34,34c_Y.jpg,34c_Y.jpg),
(389,0,34,34d_Y.jpg,34d_Y.jpg),
(390,1,35,35a_N.jpg,35a_N.jpg),
(391,0,35,35b_N.jpg,35b_N.jpg),
(392,0,35,35c_N.jpg,35c_N.jpg),
(393,0,35,35d_N.jpg,35d_N.jpg),
(394,0,35,35e_N.jpg,35e_N.jpg),
(395,0,35,35f_N.jpg,35f_N.jpg),
(396,0,35,35g_N.jpg,35g_N.jpg),
(397,1,36,36a_M.jpg,36a_M.jpg),
(398,0,36,36b_M.jpg,36b_M.jpg),
(399,0,36,36c_M.jpg,36c_M.jpg),
(400,0,36,36d_M.jpg,36d_M.jpg),
(401,0,36,36e_M.jpg,36e_M.jpg),
(402,0,36,36f_M.jpg,36f_M.jpg),
(403,1,37,37a_Y.jpg,37a_Y.jpg),
(404,0,37,37b_Y.jpg,37b_Y.jpg),
(405,0,37,37c_Y.jpg,37c_Y.jpg),
(406,0,37,37d_Y.jpg,37d_Y.jpg),
(407,1,38,38a_Y.jpg,38a_Y.jpg),
(408,0,38,38b_Y.jpg,38b_Y.jpg),
(409,0,38,38c_Y.jpg,38c_Y.jpg),
(410,0,38,38d_Y.jpg,38d_Y.jpg),
(411,0,38,38e_Y.jpg,38e_Y.jpg),
(412,0,38,38f_Y.jpg,38f_Y.jpg),
(413,0,38,38g_Y.jpg,38g_Y.jpg),
(414,1,39,39a_Y.jpg,39a_Y.jpg),
(415,0,39,39b_Y.jpg,39b_Y.jpg),
(416,0,39,39c_Y.jpg,39c_Y.jpg),
(417,0,39,39d_Y.jpg,39d_Y.jpg),
(418,0,39,39e_Y.jpg,39e_Y.jpg),
(419,0,39,39f_Y.jpg,39f_Y.jpg),
(420,0,39,39g_Y.jpg,39g_Y.jpg),
(421,0,39,39h_Y.jpg,39h_Y.jpg),
(422,0,39,39i_Y.jpg,39i_Y.jpg),
(423,1,3,3a_Y.jpg,3a_Y.jpg),
(424,0,3,3a_Y_small.jpg,3a_Y_small.jpg),
(425,0,3,3b_Y.jpg,3b_Y.jpg),
(426,0,3,3b_Y_small.jpg,3b_Y_small.jpg),
(427,0,3,3c_Y.jpg,3c_Y.jpg),
(428,0,3,3c_Y_small.jpg,3c_Y_small.jpg),
(429,0,3,3d_Y.jpg,3d_Y.jpg),
(430,0,3,3d_Y_small.jpg,3d_Y_small.jpg),
(431,0,3,3e_Y.jpg,3e_Y.jpg),
(432,0,3,3e_Y_small.jpg,3e_Y_small.jpg),
(433,0,3,3f_Y.jpg,3f_Y.jpg),
(434,0,3,3g_Y.jpg,3g_Y.jpg),
(435,0,3,3h_Y.jpg,3h_Y.jpg),
(436,0,3,3i_Y.jpg,3i_Y.jpg),
(437,0,3,3j_Y.jpg,3j_Y.jpg),
(438,1,40,40a_Y.jpg,40a_Y.jpg),
(439,0,40,40b_Y.jpg,40b_Y.jpg),
(440,0,40,40c_Y.jpg,40c_Y.jpg),
(441,0,40,40d_Y.jpg,40d_Y.jpg),
(442,0,40,40e_Y.jpg,40e_Y.jpg),
(443,0,40,40f_Y.jpg,40f_Y.jpg),
(444,0,40,40g_Y.jpg,40g_Y.jpg),
(445,1,41,41a_Y.jpg,41a_Y.jpg),
(446,0,41,41b_Y.jpg,41b_Y.jpg),
(447,0,41,41c_Y.jpg,41c_Y.jpg),
(448,1,42,42a_N.jpg,42a_N.jpg),
(449,0,42,42b_N.jpg,42b_N.jpg),
(450,0,42,42c_N.jpg,42c_N.jpg),
(451,0,42,42d_N.jpg,42d_N.jpg),
(452,1,43,43a_Y.jpg,43a_Y.jpg),
(453,0,43,43b_Y.jpg,43b_Y.jpg),
(454,0,43,43c_Y.jpg,43c_Y.jpg),
(455,0,43,43d_Y.jpg,43d_Y.jpg),
(456,0,43,43e_Y.jpg,43e_Y.jpg),
(457,0,43,43f_Y.jpg,43f_Y.jpg),
(458,0,43,43g_Y.jpg,43g_Y.jpg),
(459,0,43,43h_Y.jpg,43h_Y.jpg),
(460,0,43,43i_Y.jpg,43i_Y.jpg),
(461,0,43,43j_Y.jpg,43j_Y.jpg),
(462,0,43,43k_Y.jpg,43k_Y.jpg),
(463,0,43,43l_Y.jpg,43l_Y.jpg),
(464,0,43,43m_Y.jpg,43m_Y.jpg),
(465,0,43,43n_Y.jpg,43n_Y.jpg),
(466,1,44,44a_N.jpg,44a_N.jpg),
(467,0,44,44b_N.jpg,44b_N.jpg),
(468,0,44,44c_N.jpg,44c_N.jpg),
(469,0,44,44d_N.jpg,44d_N.jpg),
(470,0,44,44e_N.jpg,44e_N.jpg),
(471,1,45,45a_Y.jpg,45a_Y.jpg),
(472,0,45,45b_Y.jpg,45b_Y.jpg),
(473,1,46,46a_N.jpg,46a_N.jpg),
(474,0,46,46b_N.jpg,46b_N.jpg),
(475,0,46,46c_N.jpg,46c_N.jpg),
(476,0,46,46d_N.jpg,46d_N.jpg),
(477,0,46,46e_N.jpg,46e_N.jpg),
(478,1,47,47a_Y.jpg,47a_Y.jpg),
(479,0,47,47b_M.jpg,47b_M.jpg),
(480,1,48,48a_Y.jpg,48a_Y.jpg),
(481,1,49,49a_Y.jpg,49a_Y.jpg),
(482,1,4,4a_N.jpg,4a_N.jpg),
(483,0,4,4b_N.jpg,4b_N.jpg),
(484,0,4,4c_N.jpg,4c_N.jpg),
(485,0,4,4d_N.jpg,4d_N.jpg),
(486,0,4,4e_N.jpg,4e_N.jpg),
(487,0,4,4f_N.jpg,4f_N.jpg),
(488,0,4,4g_N.jpg,4g_N.jpg),
(489,0,4,4h_N.jpg,4h_N.jpg),
(490,1,50,50a_Y.jpg,50a_Y.jpg),
(491,0,50,50a_Y_small.jpg,50a_Y_small.jpg),
(492,0,50,50b_Y.jpg,50b_Y.jpg),
(493,0,50,50b_Y_small.jpg,50b_Y_small.jpg),
(494,0,50,50c_Y.jpg,50c_Y.jpg),
(495,0,50,50c_Y_small.jpg,50c_Y_small.jpg),
(496,0,50,50e_Y.jpg,50e_Y.jpg),
(497,0,50,50f_Y.jpg,50f_Y.jpg),
(498,1,51,51a_N.jpg,51a_N.jpg),
(499,0,51,51b_N.jpg,51b_N.jpg),
(500,0,51,51c_N.jpg,51c_N.jpg),
(501,0,51,51d_N.jpg,51d_N.jpg),
(502,0,51,51e_N.jpg,51e_N.jpg),
(503,1,52,52a_N.jpg,52a_N.jpg),
(504,0,52,52b_N.jpg,52b_N.jpg),
(505,0,52,52c_N.jpg,52c_N.jpg),
(506,0,52,52d_N.jpg,52d_N.jpg),
(507,0,52,52e_N.jpg,52e_N.jpg),
(508,0,52,52f_N.jpg,52f_N.jpg),
(509,0,52,52g_N.jpg,52g_N.jpg),
(510,0,52,52h_N.jpg,52h_N.jpg),
(511,0,52,52i_N.jpg,52i_N.jpg),
(512,0,52,52j_N.jpg,52j_N.jpg),
(513,0,52,52k_N.jpg,52k_N.jpg),
(514,0,52,52l_N.jpg,52l_N.jpg),
(515,0,52,52m_N.jpg,52m_N.jpg),
(516,0,52,52n_N.jpg,52n_N.jpg),
(517,0,52,52o_N.jpg,52o_N.jpg),
(518,0,52,52p_N.jpg,52p_N.jpg),
(519,0,52,52q_N.jpg,52q_N.jpg),
(520,0,52,52r_N.jpg,52r_N.jpg),
(521,1,53,53a_M.jpg,53a_M.jpg),
(522,0,53,53b_M.jpg,53b_M.jpg),
(523,0,53,53c_M.jpg,53c_M.jpg),
(524,0,53,53d_M.jpg,53d_M.jpg),
(525,0,53,53e_M.jpg,53e_M.jpg),
(526,0,53,53f_M.jpg,53f_M.jpg),
(527,1,54,54a_N.jpg,54a_N.jpg),
(528,0,54,54b_N.jpg,54b_N.jpg),
(529,0,54,54c_N.jpg,54c_N.jpg),
(530,0,54,54d_N.jpg,54d_N.jpg),
(531,0,54,54e_N.jpg,54e_N.jpg),
(532,0,54,54f_N.jpg,54f_N.jpg),
(533,0,54,54g_N.jpg,54g_N.jpg),
(534,0,54,54h_N.jpg,54h_N.jpg),
(535,0,54,54i_N.jpg,54i_N.jpg),
(536,0,54,54j_N.jpg,54j_N.jpg),
(537,0,54,54k_N.jpg,54k_N.jpg),
(538,0,54,54l_N.jpg,54l_N.jpg),
(539,0,54,54m_N.jpg,54m_N.jpg),
(540,1,55,55a_N.jpg,55a_N.jpg),
(541,0,55,55b_N.jpg,55b_N.jpg),
(542,1,56,56a_N.jpg,56a_N.jpg),
(543,0,56,56b_N.jpg,56b_N.jpg),
(544,0,56,56c_N.jpg,56c_N.jpg),
(545,0,56,56d_N.jpg,56d_N.jpg),
(546,0,56,56e_N.jpg,56e_N.jpg),
(547,0,56,56f_N.jpg,56f_N.jpg),
(548,0,56,56g_N.jpg,56g_N.jpg),
(549,0,56,56h_N.jpg,56h_N.jpg),
(550,0,56,56i_N.jpg,56i_N.jpg),
(551,0,56,56j_N.jpg,56j_N.jpg),
(552,0,56,56k_N.jpg,56k_N.jpg),
(553,0,56,56l_N.jpg,56l_N.jpg),
(554,1,57,57a_Y.jpg,57a_Y.jpg),
(555,0,57,57b_Y.jpg,57b_Y.jpg),
(556,0,57,57c_N.jpg,57c_N.jpg),
(557,1,58,58a_N.jpg,58a_N.jpg),
(558,0,58,58b_N.jpg,58b_N.jpg),
(559,0,58,58c_N.jpg,58c_N.jpg),
(560,0,58,58d_N.jpg,58d_N.jpg),
(561,0,58,58e_N.jpg,58e_N.jpg),
(562,0,58,58f_N.jpg,58f_N.jpg),
(563,1,59,59a_Y.jpg,59a_Y.jpg),
(564,0,59,59b_Y.jpg,59b_Y.jpg),
(565,0,59,59c_Y.jpg,59c_Y.jpg),
(566,0,59,59d_Y.jpg,59d_Y.jpg),
(567,1,5,5a_Y.jpg,5a_Y.jpg),
(568,0,5,5b_Y.jpg,5b_Y.jpg),
(569,0,5,5c_Y.jpg,5c_Y.jpg),
(570,0,5,5d_Y.jpg,5d_Y.jpg),
(571,0,5,5e_Y.jpg,5e_Y.jpg),
(572,0,5,5f_Y.jpg,5f_Y.jpg),
(573,0,5,5g_Y.jpg,5g_Y.jpg),
(574,0,5,5h_Y.jpg,5h_Y.jpg),
(575,0,5,5i_Y.jpg,5i_Y.jpg),
(576,0,5,5j_Y.jpg,5j_Y.jpg),
(577,0,5,5k_Y.jpg,5k_Y.jpg),
(578,0,5,5l_Y.jpg,5l_Y.jpg),
(579,0,5,5m_Y.jpg,5m_Y.jpg),
(580,0,5,5n_Y.jpg,5n_Y.jpg),
(581,1,60,60a_M.jpg,60a_M.jpg),
(582,0,60,60b_M.jpg,60b_M.jpg),
(583,0,60,60c_M.jpg,60c_M.jpg),
(584,1,61,61a_N.jpg,61a_N.jpg),
(585,0,61,61b_N.jpg,61b_N.jpg),
(586,0,61,61c_N.jpg,61c_N.jpg),
(587,0,61,61d_N.jpg,61d_N.jpg),
(588,1,62,62a_N.jpg,62a_N.jpg),
(589,0,62,62b_N.jpg,62b_N.jpg),
(590,1,63,63a_Y.jpg,63a_Y.jpg),
(591,0,63,63b_Y.jpg,63b_Y.jpg),
(592,0,63,63c_Y.jpg,63c_Y.jpg),
(593,0,63,63d_Y.jpg,63d_Y.jpg),
(594,0,63,63e_Y.jpg,63e_Y.jpg),
(595,1,64,64a_Y.jpg,64a_Y.jpg),
(596,0,64,64b_Y.jpg,64b_Y.jpg),
(597,0,64,64c_Y.jpg,64c_Y.jpg),
(598,1,65,65a_Y.jpg,65a_Y.jpg),
(599,0,65,65b_Y.jpg,65b_Y.jpg),
(600,0,65,65c_Y.jpg,65c_Y.jpg),
(601,0,65,65d_Y.jpg,65d_Y.jpg),
(602,0,65,65e_Y.jpg,65e_Y.jpg),
(603,0,65,65f_Y.jpg,65f_Y.jpg),
(604,0,65,65g_Y.jpg,65g_Y.jpg),
(605,0,65,65h_Y.jpg,65h_Y.jpg),
(606,0,65,65i_Y.jpg,65i_Y.jpg),
(607,0,65,65j_Y.jpg,65j_Y.jpg),
(608,0,65,65k_Y.jpg,65k_Y.jpg),
(609,0,65,65l_Y.jpg,65l_Y.jpg),
(610,0,65,65m_Y.jpg,65m_Y.jpg),
(611,0,65,65n_Y.jpg,65n_Y.jpg),
(612,0,65,65o_Y.jpg,65o_Y.jpg),
(613,0,65,65p_Y.jpg,65p_Y.jpg),
(614,0,65,65q_Y.jpg,65q_Y.jpg),
(615,0,65,65r_Y.jpg,65r_Y.jpg),
(616,1,66,66a_N.jpg,66a_N.jpg),
(617,0,66,66b_N.jpg,66b_N.jpg),
(618,1,67,67a_M.jpg,67a_M.jpg),
(619,0,67,67b_M.jpg,67b_M.jpg),
(620,0,67,67c_M.jpg,67c_M.jpg),
(621,1,68,68a_M.jpg,68a_M.jpg),
(622,0,68,68b_M.jpg,68b_M.jpg),
(623,0,68,68c_M.jpg,68c_M.jpg),
(624,0,68,68d_M.jpg,68d_M.jpg),
(625,0,68,68e_M.jpg,68e_M.jpg),
(626,1,69,69a_N.jpg,69a_N.jpg),
(627,0,69,69b_N.jpg,69b_N.jpg),
(628,0,69,69c_N.jpg,69c_N.jpg),
(629,0,69,69d_N.jpg,69d_N.jpg),
(630,0,69,69e_N.jpg,69e_N.jpg),
(631,0,69,69f_N.jpg,69f_N.jpg),
(632,0,69,69g_N.jpg,69g_N.jpg),
(633,0,69,69h_N.jpg,69h_N.jpg),
(634,0,69,69i_N.jpg,69i_N.jpg),
(635,0,69,69j_N.jpg,69j_N.jpg),
(636,0,69,69k_N.jpg,69k_N.jpg),
(637,1,6,6a_Y.jpg,6a_Y.jpg),
(638,0,6,6b_N.jpg,6b_N.jpg),
(639,1,70,70a_N.jpg,70a_N.jpg),
(640,0,70,70b_N.jpg,70b_N.jpg),
(641,0,70,70c_N.jpg,70c_N.jpg),
(642,0,70,70d_N.jpg,70d_N.jpg),
(643,0,70,70e_N.jpg,70e_N.jpg),
(644,1,71,71a_Y.jpg,71a_Y.jpg),
(645,0,71,71b_Y.jpg,71b_Y.jpg),
(646,0,71,71c_Y.jpg,71c_Y.jpg),
(647,0,71,71d_Y.jpg,71d_Y.jpg),
(648,0,71,71e_Y.jpg,71e_Y.jpg),
(649,0,71,71f_Y.jpg,71f_Y.jpg),
(650,0,71,71g_Y.jpg,71g_Y.jpg),
(651,0,71,71h_Y.jpg,71h_Y.jpg),
(652,1,72,72a_Y.jpg,72a_Y.jpg),
(653,0,72,72b_Y.jpg,72b_Y.jpg),
(654,0,72,72c_Y.jpg,72c_Y.jpg),
(655,0,72,72d_Y.jpg,72d_Y.jpg),
(656,0,72,72e_Y.jpg,72e_Y.jpg),
(657,0,72,72f_Y.jpg,72f_Y.jpg),
(658,0,72,72g_Y.jpg,72g_Y.jpg),
(659,1,73,73a_M.jpg,73a_M.jpg),
(660,0,73,73b_M.jpg,73b_M.jpg),
(661,0,73,73c_M.jpg,73c_M.jpg),
(662,0,73,73d_M.jpg,73d_M.jpg),
(663,0,73,73e_M.jpg,73e_M.jpg),
(664,0,73,73f_M.jpg,73f_M.jpg),
(665,1,74,74a_M.jpg,74a_M.jpg),
(666,0,74,74b_M.jpg,74b_M.jpg),
(667,0,74,74c_M.jpg,74c_M.jpg),
(668,0,74,74d_M.jpg,74d_M.jpg),
(669,0,74,74e_M.jpg,74e_M.jpg),
(670,0,74,74f_M.jpg,74f_M.jpg),
(671,0,74,74g_M.jpg,74g_M.jpg),
(672,1,76,76a_Y.jpg,76a_Y.jpg),
(673,0,76,76b_Y.jpg,76b_Y.jpg),
(674,0,76,76c_Y.jpg,76c_Y.jpg),
(675,1,77,77a_Y.jpg,77a_Y.jpg),
(676,0,77,77b_Y.jpg,77b_Y.jpg),
(677,1,78,78a_M.jpg,78a_M.jpg),
(678,0,78,78b_M.jpg,78b_M.jpg),
(679,0,78,78c_M.jpg,78c_M.jpg),
(680,0,78,78d_M.jpg,78d_M.jpg),
(681,0,78,78e_M.jpg,78e_M.jpg),
(682,1,79,79a_Y.jpg,79a_Y.jpg),
(683,0,79,79b_Y.jpg,79b_Y.jpg),
(684,0,79,79c_Y.jpg,79c_Y.jpg),
(685,0,79,79d_N.jpg,79d_N.jpg),
(686,0,79,79e_N.jpg,79e_N.jpg),
(687,0,79,79f_N.jpg,79f_N.jpg),
(688,0,79,79g_N.jpg,79g_N.jpg),
(689,0,79,79h_N.jpg,79h_N.jpg),
(690,0,79,79i_N.jpg,79i_N.jpg),
(691,0,79,79j_N.jpg,79j_N.jpg),
(692,1,7,7a_Y.jpg,7a_Y.jpg),
(693,0,7,7b_Y.jpg,7b_Y.jpg),
(694,0,7,7c_Y.jpg,7c_Y.jpg),
(695,0,7,7d_Y.jpg,7d_Y.jpg),
(696,1,80,80a_N.jpg,80a_N.jpg),
(697,1,82,82a_N.jpg,82a_N.jpg),
(698,0,82,82b_N.jpg,82b_N.jpg),
(699,0,82,82c_N.jpg,82c_N.jpg),
(700,0,82,82d_N.jpg,82d_N.jpg),
(701,0,82,82e_N.jpg,82e_N.jpg),
(702,0,82,82f_N.jpg,82f_N.jpg),
(703,0,82,82g_N.jpg,82g_N.jpg),
(704,0,82,82h_Y.jpg,82h_Y.jpg),
(705,0,82,82i_Y.jpg,82i_Y.jpg),
(706,0,82,82j_Y.jpg,82j_Y.jpg),
(707,1,83,83a_N.jpg,83a_N.jpg),
(708,0,83,83b_N.jpg,83b_N.jpg),
(709,0,83,83c_N.jpg,83c_N.jpg),
(710,0,83,83d_N.jpg,83d_N.jpg),
(711,0,83,83e_N.jpg,83e_N.jpg),
(712,0,83,83f_N.jpg,83f_N.jpg),
(713,1,84,84a_Y.jpg,84a_Y.jpg),
(714,0,84,84b_Y.jpg,84b_Y.jpg),
(715,0,84,84c_Y.jpg,84c_Y.jpg),
(716,0,84,84d_Y.jpg,84d_Y.jpg),
(717,1,86,86a_Y.jpg,86a_Y.jpg),
(718,0,86,86b_Y.jpg,86b_Y.jpg),
(719,0,86,86c_Y.jpg,86c_Y.jpg),
(720,0,86,86d_Y.jpg,86d_Y.jpg),
(721,0,86,86e_Y.jpg,86e_Y.jpg),
(722,0,86,86f_Y.jpg,86f_Y.jpg),
(723,1,87,87a_N.jpg,87a_N.jpg),
(724,1,88,88a_N.jpg,88a_N.jpg),
(725,0,88,88b_N.jpg,88b_N.jpg),
(726,1,89,89a_M.jpg,89a_M.jpg),
(727,0,89,89b_M.jpg,89b_M.jpg),
(728,0,89,89c_M.jpg,89c_M.jpg),
(729,0,89,89d_M.jpg,89d_M.jpg),
(730,1,8,8a_Y.jpg,8a_Y.jpg),
(731,1,90,90a_N.jpg,90a_N.jpg),
(732,0,90,90b_N.jpg,90b_N.jpg),
(733,0,90,90c_N.jpg,90c_N.jpg),
(734,0,90,90d_N.jpg,90d_N.jpg),
(735,1,91,91a_Y.jpg,91a_Y.jpg),
(736,0,91,91b_Y.jpg,91b_Y.jpg),
(737,1,92,92a_Y.jpg,92a_Y.jpg),
(738,0,92,92b_Y.jpg,92b_Y.jpg),
(739,0,92,92c_Y.jpg,92c_Y.jpg),
(740,0,92,92d_Y.jpg,92d_Y.jpg),
(741,0,92,92e_Y.jpg,92e_Y.jpg),
(742,0,92,92f_Y.jpg,92f_Y.jpg),
(743,0,92,92g_Y.jpg,92g_Y.jpg),
(744,0,92,92h_Y.jpg,92h_Y.jpg),
(745,0,92,92i_Y.jpg,92i_Y.jpg),
(746,0,92,92j_Y.jpg,92j_Y.jpg),
(747,1,93,93a_N.jpg,93a_N.jpg),
(748,0,93,93b_N.jpg,93b_N.jpg),
(749,0,93,93c_N.jpg,93c_N.jpg),
(750,1,94,94a_N.jpg,94a_N.jpg),
(751,0,94,94b_N.jpg,94b_N.jpg),
(752,0,94,94c_N.jpg,94c_N.jpg),
(753,0,94,94d_N.jpg,94d_N.jpg),
(754,0,94,94e_N.jpg,94e_N.jpg),
(755,0,94,94f_N.jpg,94f_N.jpg),
(756,0,94,94g_N.jpg,94g_N.jpg),
(757,0,94,94h_N.jpg,94h_N.jpg),
(758,0,94,94i_N.jpg,94i_N.jpg),
(759,0,94,94j_N.jpg,94j_N.jpg),
(760,0,94,94k_N.jpg,94k_N.jpg),
(761,0,94,94l_N.jpg,94l_N.jpg),
(762,0,94,94m_N.jpg,94m_N.jpg),
(763,1,95,95a_Y.jpg,95a_Y.jpg),
(764,0,95,95b_Y.jpg,95b_Y.jpg),
(765,0,95,95c_Y.jpg,95c_Y.jpg),
(766,0,95,95d_Y.jpg,95d_Y.jpg),
(767,0,95,95e_Y.jpg,95e_Y.jpg),
(768,0,95,95f_Y.jpg,95f_Y.jpg),
(769,0,95,95g_Y.jpg,95g_Y.jpg),
(770,0,95,95h_Y.jpg,95h_Y.jpg),
(771,1,96,96a_N.jpg,96a_N.jpg),
(772,0,96,96b_N.jpg,96b_N.jpg),
(773,0,96,96c_N.jpg,96c_N.jpg),
(774,1,97,97a_N.jpg,97a_N.jpg),
(775,0,97,97b_N.jpg,97b_N.jpg),
(776,0,97,97c_N.jpg,97c_N.jpg),
(777,0,97,97d_N.jpg,97d_N.jpg),
(778,0,97,97e_N.jpg,97e_N.jpg),
(779,0,97,97f_N.jpg,97f_N.jpg),
(780,0,97,97g_N.jpg,97g_N.jpg),
(781,0,97,97h_N.jpg,97h_N.jpg),
(782,0,97,97i_N.jpg,97i_N.jpg),
(783,0,97,97j_N.jpg,97j_N.jpg),
(784,1,98,98a_Y.jpg,98a_Y.jpg),
(785,0,98,98b_Y.jpg,98b_Y.jpg),
(786,0,98,98c_Y.jpg,98c_Y.jpg),
(787,0,98,98d_Y.jpg,98d_Y.jpg),
(788,0,98,98e_Y.jpg,98e_Y.jpg),
(789,0,98,98f_Y.jpg,98f_Y.jpg),
(790,0,98,98g_Y.jpg,98g_Y.jpg),
(791,0,98,98h_Y.jpg,98h_Y.jpg),
(792,0,98,98i_Y.jpg,98i_Y.jpg),
(793,0,98,98j_Y.jpg,98j_Y.jpg),
(794,0,98,98k_Y.jpg,98k_Y.jpg),
(795,1,99,99a_Y.jpg,99a_Y.jpg),
(796,0,99,99b_Y.jpg,99b_Y.jpg),
(797,1,9,9a_N.jpg,9a_N.jpg),
(798,0,9,9b_N.jpg,9b_N.jpg);"
	);

	$insert_archived_emails = $this-> execute 
	("INSERT INTO 'archived_emails' ('id','fossil_id','visitor_id','inquiry_email','amnh_response_email') VALUES
	
	(1,1,101,From: Tom
Sent: Wednesday, July 01, 2015 9:54 AM
To: Alisa
Subject: Shark tooth ?
Hi my name is tommy hickey I just  called regarding a tooth that I found in the ocean on breezy pointy yesterday . We were wondering if this is actually a shark tooth and any other information you may be able to give us in this. If it would help out I can bring it by the aquarium to be looked at. Thank you again for your help.
The Hickey family

From: Tom Sent: Wednesday, July 01, 2015 3:38 PM To: Alisa Cc: Carl Mehling Subject: Re: Shark tooth ?
Hi Alisa,
Thank you so much for your help with his. One of my kids just got home from soccer camp and I wanted to wait for him to get home to share it with the entire family. They are so excited that we actually found a shark tooth.  Shark week is one of their favorite weeks. The older boys are obsessed with them. My 8 year old is going around telling everyone he is a marine biologist and that\'s what he wants to be when he grows up. 
Yesterday June 30, 2015 at about 3:30 in the afterNoon I was waking around the shore line of the ocean in  breezy point looking for sea glass with 3 of my kids when I saw that and thought or sasses glass I picked it up and realized it was not. The more I looked at it the more I thought it was a tooth. After showing some of the people on the beach they convinced me it was a shark tooth. THats when the kids wanted to know what kind of tooth. So we called the Brooklyn aquarium this morning. 
If there is anymore information you would like I would love to give it as we are so excited hat we actually found something. 
Here is my contact information. 
,From: Carl Mehling  Sent: Wednesday, July 01, 2015 12:02 PM To: \'Hans\' Cc: Alisa Subject: RE: Shark tooth ?
Jesus that\'s absurdly cool, Hans. A tooth like that would be a huge score in places where they are well-known. But I know of no record of any fossil shark tooth from NY and certainly not NYC! Truly special. Yes, I think it is probably Carcharodon carcharias and relatively young as fossils go. Probably Pleistocene. But, of course, there is a chance that it was lost by someone who purchased it or found it at a more likely spot down the east coast – no easy way to tell.  But it would  not be unexpected for the fauna and preservation type found in the Rockaways. Either way, I am SOOO jealous! Or…. It could just be a story, but again, we’ll never really know.
I actually collect references to NYC fossils – is there any way I could impose on you to get as much collecting data as possible from the Hickey’s (date, location, circumstances of collection, etc.)? You don’t think they’d consider donating it, do you?
Look at the attached image of another surprise I found on New Year’s Day on Rockaway! Thanks and I so look forward to hanging again!
-Carl  

From: Carl Mehling  Sent: Wednesday, July 01, 2015 12:37 PM To: \'Alisa\'; Hans Subject: RE: Shark tooth ?
Thanks, Harley. I’m perfectly happy not making more work for you guys so I’ll take it one from here.
Thanks so much for looping me in!
Best, Carl 

From: Carl Mehling  Sent: Wednesday, July 01, 2015 1:30 PM To: Tom Subject: RE: Shark tooth ?
Hi Tom,
Thanks for showing us all your find. A tooth like that would be a very nice find in places where they are well-known. But I know of no record of any fossil shark tooth from NY and certainly not NYC. it\'s special merely for that reason. There is a chance that it was lost by someone who purchased it or found it at a more likely spot down the east coast – no easy way to tell.  But it would not be unexpected for the fauna and preservation type found in the Rockaways. 
I actually collect references to NYC fossils – could you give me a little more info on the exact location, circumstances of collection (was it below the high tide mark, for example), etc.? Might you consider donating it to our collections here?
Best regards,
Carl

From: Carl Mehling  Sent: Wednesday, July 01, 2015 12:39 PM To: \'Alisa\'; \'Hans\' Subject: RE: Shark tooth ?
I just re-read what you said: should I contact them directly or did you want to give them my email?  

From: Carl Mehling  Sent: Wednesday, July 01, 2015 1:09 PM To: \'Alisa\' Subject: RE: Shark tooth ?
Perfect! Thanks.  

From: Carl Mehling  Sent: Wednesday, July 01, 2015 4:58 PM To: \'Hans\' Subject: RE: Shark tooth ?
So cool… I did get in touch with the tooth finder. And yeah, I too, don’t see any real reason to be suspicious of their story.
Let the hanging begin! And we gotta get ya’ll out collecting in NJ! Just a brain fart kind of idea: what about this Saturday for fossils?

From: Carl Mehling  Sent: Monday, July 06, 2015 5:01 PM To: \'Tom\'; Alisa Subject: RE: Shark tooth ?
Hi Tommy,
You might have missed it in my earlier email but thanks so much for sharing your find with us all. What fun! And thanks for all the contextual collecting information. A tooth like that would be a very nice find in places where they are well-known. But I know of no record of any fossil shark tooth from NY and certainly not NYC. it\'s special merely for that reason. There is a chance that it was lost by someone who purchased it or found it at a more likely spot down the east coast – no easy way to tell.  But it would  not be unexpected for the fauna and preservation type found in the Rockaways. Maybe it\'s some sort of Sandy silver lining?
I wanted to see if you might consider donating it to our collections here? I know that\'s a lot to ask since you only just found it, but in trade I\'d like to offer you all a private trip to a fossil site I work in NJ where you are basically guaranteed a bunch of fossil shark teeth. They will be smaller but much older ones (72 million years old as opposed to 10 thousand) and will likely include a shark many consider to be an ancestor of Carcharocles megalodon called Cretalamna appendiculata. And contrary to what Shark Week may insist, I sense that most paleontologists no longer consider Carcharocles as closely related to Carcharodon. But it looks like Shark Week may actually be a bit better this year: http://www.vox.com/2015/7/6/8886743/shark-week-2015-science. 
Please let me know what you think and be well.
Best regards,
Carl

From: Alisa
Sent: Wednesday, July 1, 2015 10:00 AM
To: Hans
Subject: FW: Shark tooth ?
Hello shark tooth expert.
Any ideas for the Family - yes I picked up a transfer but this was a nice one for a change.
Harley

From: Hans Sent: Wednesday, July 01, 2015 11:16 AM To: Carl Mehling Cc: Alisa Subject: Fw: Shark tooth ?
Hey Carl!
Got your email last week.  Martha and I were away for a week for a family wedding and then returned to an extremely busy Aquarium.  Will work with Martha to arrange a play date for all of us.  Meanwhile, our vet Harley received the email below from some folks in Breezy Point (the Rockaways near where M & I live) who apparently found the shark tooth in the attached pictures on the beach.  Looks like a Carcharodon or Carcharocles of some spp or the other, but figured you could do much much better. 
Know these things are fairly common, and that you find lotsa stuff in NJ.  Is Breezy Point worth exploring (or are you familiar with the Rockaways as a good shark tooth spot)?
Hans

From: Alisa Sent: Wednesday, July 01, 2015 12:24 PM To: Carl Mehling; Hans Subject: RE: Shark tooth ?
Thank you so much.  The photo and email are actually the result of a ‘cold call’ that got transferred to me at the Aquarium this morning.  I just happened to answer and then asked Tom to take some photos and email them to me so I could pass them to Hans.  Had no idea this would be so interesting – and yes, I agree, it’s hard to know the real story but it seemed genuine enough.  I just have the email address below for the family and what he told me on the phone about finding it at Breezy Point.  
Would you want me to simply pose the questions below to him or could I pass along some sort of contact information for you as well in case they are interested in donating?  I’m fine with either.
Thank you again,
Harley


From: Alisa Sent: Wednesday, July 01, 2015 12:46 PM To: Carl Mehling; Hans Subject: RE: Shark tooth ?
How about I introduce you to them on email – and send a little bit about what you sent Hans and I about the tooth and your questions?
Hopefully they will answer your questions.
H

From: Alisa Sent: Wednesday, July 01, 2015 1:00 PM To: Tom Cc: Carl Mehling Subject: RE: Shark tooth ?
Dear Tom and Family,
I wanted to let you know that we were able to forward your photos of the tooth you found to a paleontologist at the American Museum of Natural History, Carl Mehling. He believes this is a probably the fossilized tooth from a Great White Shark (Carcharodon carcharias), possibly from the Pleistocene era.   I have copied Carl on this email because he thinks this tooth is a pretty amazing find.  He also collects references to New York City fossils - and was wondering if you would be willing to share some more information about where, when and how you found this tooth?  I had the little information you had shared with me below, but thought you might be willing to maybe tell him more about how/where you found it?
Congratulations on a pretty incredible find.  
All the best,
Alisa

From: Hans Sent: Wednesday, July 01, 2015 4:50 PM To: Carl Mehling Cc: Alisa Subject: Re: Shark tooth ?
Hey Carl.  Yes Harley and I thought that tooth was absurdly cool too, and I was surprised at the location where it was found.  We discussed the possibility that was found or purchased elsewhere, and either someone dropped it on the beach or the story of its discovery was fabricated; but this is a family with 6 little kids, so the fabrication idea is unlikely.  
I know The New York Bight is an area where Carcharodon carcharias is found in all age classes and both genders, so the ID and location shouldn\'t surprise me.
I am sure these people would love to hear from you.  Meanwhile, Martha and I want to hang--as do a number of other people at the Aquarium after hearing about my ultra cool bud at the AMNH (Kayla still gushes when she talks about the incredible day she had in your digs).
Hans ),
(2,2,102,From: Louis Sent: Thursday, July 02, 2015 7:34 PM To: Carl Mehling Subject: Possibly from around Alenxandria, Egypt.

From: Louis Sent: Monday, July 06, 2015 10:31 AM  Subject: RE: Possibly from around Alenxandria, Egypt.
Hi Carl, as a matter of it is brought here in ca. 1880.  

From: Louis Sent: Monday, July 06, 2015 11:21 AM  Subject: Re: Possibly from around Alenxandria, Egypt.
Yes 

,From: Carl Mehling  Sent: Monday, July 06, 2015 10:26 AM To: \'Louis\' Subject: RE: Possibly from around Alenxandria, Egypt.
Hi Louis,
Thanks for your email. What you have there is a foraminiferal limestone. Foraminifera (or just forams) are amoeboid protists that have a shell. They have been on Earth for over 500 million years. I know that there are Eocene limestones in Egypt famous for their forams but there seems to be no way to confirm yours. Is this built into something in the park? Best, Carl

From: Carl Mehling  Sent: Monday, July 06, 2015 11:19 AM To: \'Louis\' Subject: RE: Possibly from around Alenxandria, Egypt.
Do you mean it is in the park?

From: Carl Mehling  Sent: Monday, July 06, 2015 11:31 AM To: \'Louis\' Subject: RE: Possibly from around Alenxandria, Egypt.
Very nice!),
(3,3,103,From: Kevin Sent: Thursday, July 02, 2015 8:00 PM  Subject: Re: Dinosaur Fossil ID
Hello, Carl --
Online at the American Museum of Natural History website, I found an invitation to submit a fossil specimen for possible identification, and I have a good one for you! (Please see attached photos.)
This fossil was purchased by me at a recent yard sale in Southern California; however, the previous owner claimed he personally collected it in Montana back in the 1950s. The piece measures approximately 10\" x 8\" x 6\", and weighs about 15 lbs. 
My brother is a geologist, and he confirmed that it’s definitely fossilized bone, and from the size and shape, probably dinosaur. Also, he said the piece might possibly be more than one bone fused together.
If possible, I\'d love to know the species of dinosaur and what part of the skeleton this is from. Maybe T-Rex? (One can dream, eh?)
Many thanks in advance for your time and attention!
Best,
Kevin

Id Requested! Dinosaur Fossil? T-Rex?
Kiev Posted 02 July 2015 - 02:55 PM
Hello -- this is my first post, so many thanks in advance for your time and expertise!
I recently purchased a dinosaur fossil at yard-sale, and the previous owner said it was personally collected by him in Montana back in the 1950s; that’s about all I know about where this piece comes from. The piece measures approximately 10\" x 8\" x 6\", and weighs about 15 lbs. 
Unfortunately, I don\'t know any paleontologists; but, I did show it to a geologist who confirmed that it’s definitely fossilized bone, and from the size and shape, probably dino. Also, he said the piece might possibly be more than one bone fused together.
So, my questions for you are: from what dinosaur species; and which part of the skeleton? Personally, I\'m thinking T-Rex . . . !
Cheers!
Kiev PS -- Please let me know if you would like to see any particular detail of this piece, and I will upload more pix!
Attached Thumbnails

Kiev Posted 02 July 2015 - 07:49 PM
Anyone?

Troodon Posted 02 July 2015 - 07:54 PM
Welcome to the forum. Boy I\'m having trouble getting a handle on your bone. There is nothing diagnostic about it other than its big and bulky. T-rex bones would not be this massive. Do you know anything more about where it was found other than Montana? 

Kiev Posted 02 July 2015 - 08:13 PM
Hi, Troodon! Thanks for chiming in. I\'ve shared everything I know (which isn\'t much) about this specimen in my initial post, so that\'s it.  My best guess is that it\'s a partial fragment -- maybe some kind of blade-shaped bone? I should probably upload more pix to show the curvilinear quality of its shape . . . I\'m surprised to read that it might be too big to be T-Rex! Really? Maybe brontosaurus, then? Also, I think we should consider the area of origin suspect; It might not be from Montana at all -- that\'s just what the old man who sold it to me claimed. Meanwhile, we\'re both stumped, I guess!
KJK

Troodon Posted 02 July 2015 - 08:27 PM
it\'s probably a partial of a leg bone. One option could be from a Ceratopsian if its from Montana. Maybe the images can ring a bell with others. 

Kiev Posted 02 July 2015 - 08:38 PM
Okay, here are some additional pix . . .
Attached Thumbnails

ZiggieCie Posted 02 July 2015 - 08:39 PM
Welcome to the Forum Kiev.               

Kiev Posted 02 July 2015 - 08:41 PM
Thanks, ZiggieCie!

Auspex Posted 02 July 2015 - 08:43 PM
I wouldn\'t be too big for a T.rex, just too dense. Theropods were lightly built, with highly pneumaticized skeletons; light and quick, like a bird.

Kiev Posted 02 July 2015 - 08:46 PM
Auspex: Aha! Now that makes sense -- thanks! So, we must deduce that it belongs to something large and slow . . . ?

jpc
Interesting bone. I am also stumped. The preservation is not typical of the Hell Creek Fm, so it may not be dinosaur. Some of the pix look like titanothere atlas (neck bone)... But that is just a guess. 

ZiggieCie
jpc, on 07 Jul 2015 - 5:05 PM, said:
Interesting bone. I am also stumped. The preservation is not typical of the Hell Creek Fm, so it may not be dinosaur. Some of the pix look like titanothere atlas (neck bone)... But that is just a guess.
Now that guy would of made a good pot of soup.        
Sorry, dinner time.
,From: Carl Mehling  Sent: Monday, July 06, 2015 10:37 AM To: \'Kevin\' Subject: RE: Dinosaur Fossil ID
Hi Kevin,
Thanks for your email. It looks like the folks on the Fossil Forum beat me to this one! I will have to agree with them that T. rex is very unlikely and that it could be almost anything with the information you were provided. It lacks anatomical details that would help us zero in on an ID. I wish there were more we could say here.
Best, Carl),
(4,4,104,From: WILLIAM Sent: Friday, July 03, 2015 11:03 AM To: Carl Mehling Subject: Fossil?

Mr. Mehling,
We took the grandkids fossil hunting at Rockport State Park in Alpena, Michigan last week.  It is a former limestone quarry on the edge of Lake Huron, that is now a State Park.  Anyway, I don\'t know anything about fossils but we did talk to a few people and learned a few thing.  None were able to identify the item in the pictures.  Can you help?  Item is about 1\" across and 3/8\" in width.
Thanks in advance,
Bill

From: WILLIAM  Sent: Monday, July 06, 2015 12:42 PM  Subject: Re: Fossil?
Mr. Mehling
Tried my best if these are still not clear enough I\'ll try and borrow a better camera...

From: WILLIAM  Sent: Wednesday, July 15, 2015 4:54 PM  Subject: Fossil?
Mr. Mehling, 
I sent you some pictures a couple of weeks ago, and you requested clearer. more in focus, pics.  Will these be okay to possibly identify what we\'ve found?  It was the best I could do...
Thanks,
Bill

From: WILLIAM  Sent: Tuesday, August 18, 2015 5:01 PM  Subject: Re: Mystery Object
Mr. Mehling, 
No apologizies are necessary!!  I appreciate the reply.  The grandkids think gramps is going nutty, sending the \"mystery object\" to you, but are getting a kick out of how all of this is transpiring.  They really think it\'s neat and have been asking me if I ever received a reply, now they know you are real :-)
Bill

From: WILLIAM  Sent: Thursday, August 20, 2015 12:59 AM To: Carl Mehling Subject: Re: Mystery Object
Carl, 
Thanks for all of your efforts!  The grandkids all had different opinions on what this was from an animal part, tooth, bone, or a shark tooth to a plant stalk or tree branch of some kind.  They looked at the whiteish area and the \"darker\" core (resin) to come to this conclusion.  We also had a difficult time trying to figure out what type of rock this was...???  It did have a small inclusion on the opposite side that I was able to slip a small screwdriver into and the rock split when tapped lightly with a hammer, only it didn\'t split along the \"unknown material\"  No matter it was fun and kept the vacation alive for most of the summer!
Bill,From: Carl Mehling  Sent: Monday, July 06, 2015 11:02 AM To: \'WILLIAM\' Subject: RE: Fossil?
Hi Bill,
Thanks for your email. Unfortunately, the photos you sent are too dim and blurry to make out what you’ve found. Is there any way you could reshoot them sharp and in sunlight?
Thanks,
Carl

From: Carl Mehling  Sent: Monday, July 20, 2015 2:45 PM To: \'WILLIAM\' Subject: RE: Fossil?
Hi Bill,
Thanks – these are much better. From what I can see it doesn’t look like any fossil of which I can think. It appears to be a cavity in the host rock that has partially filled with some light, maybe chalky mineral. It’s lacking the details I would want to see to confidently identify it as a fossil. Sorry I can’t be more specific but I can say it is a very cool find!
Best, Carl 

[Package received around 3 August 2015]

From: Carl Mehling  Sent: Tuesday, August 18, 2015 10:37 AM To: \'WILLIAM\' Subject: Mystery Object
Hi Bill,
Thanks for your package and your patience while I was away – it came right before I left for a week and a half! Your find is very cool. I still think it isn’t a fossil but what it actually is appears to be out of my expertise. Before sending it back to you, I will take it over to my counterpart in Earth and Planetary Sciences and see if she can enlighten us. Stay tuned.
Best, Carl 

From: Carl Mehling  Sent: Wednesday, August 19, 2015 10:55 AM To: \'WILLIAM\' Subject: RE: Mystery Object
Hi Bill,
Gramps is certainly not going nutty, unless nutty = curious. 
So I showed it to my mineralogical colleague and she also had no good explanation for it. It could’ve been a pocket in the rock that filled with the lighter material. Or the lighter inclusion might have existed as a rock prior to being enveloped by the grey material. I think we’ll (sadly) have to leave it as a geological oddity for now!
Best, Carl

From: Carl Mehling  Sent: Thursday, August 20, 2015 10:45 AM To: \'WILLIAM\' Subject: RE: Mystery Object
My pleasure, Bill. Maybe one of the grandkids will become a mineralogist or sedimentologist ion the future and figure this one out! -Carl),
(5,5,105,From: TAHRI Sent: Friday, July 03, 2015 8:42 PM  Subject: Fossil ID request!!!!
Hello;
I just found the following fossils which I need to identify them:
(First, these fossils have been found in different locations in Algeria.)
1) Fossils (Bivalvia) found in Kolea, distance approximately 8 km from the sea (size of 3 to 11 cm):

2) Fossils (Echinodermata) found in Khemisti, wilaya of Tissemsilt (size of 3 to 4 cm):

3) Fossils found in Ouanougha, wilaya of M\'sila (size of 2 to 4 cm):

4) Fossils (The Cenomanian and Turonian) (genus:Terebratula!!!) found in Tamedda, wilaya of Laghouat (size of 0.5 to 4 cm):  
I would be very grateful to help me to identify these fossils (at least their families and why not their genus)
Cordially.,From: Carl Mehling  Sent: Monday, July 06, 2015 11:28 AM To: \'TAHRI\' Subject: RE: Fossil ID request!!!!
Hi Tahri,
Thanks for your email. You have some beautiful fossils there. Unfortunately, we don’t have anyone here that can provide better IDs than you already have: our current curators specialize in different groups. I know I’ve seen the fossils you have numbered “3” but, sadly, I can’t recall what they are! But the last 4 you have under Terebratula are an oyster and 3 snails, but I suspect you already knew that. You should try posting this to the Fossil Forum online and see what they say. The Forum is a huge community of very adept professionals and amateurs so you can have many more eyes look at it. I’m curious to see what they say! 
Best, Carl),
(6,6,106,From: Mike Sent: Saturday, July 04, 2015 1:32 PM  Subject: Conesus lake
Carl 
Found by my grandson along the glacial lake of Conesus in upstate BY.  We must know what these are.  Thanks for doing this!
Mike

From: Mike  Sent: Monday, July 06, 2015 12:01 PM To: Carl Mehling Subject: Re: Conesus lake
Hope this works!

From: Mike Sent: Monday, July 06, 2015 7:47 PM  Subject: Re: Conesus lake
Carl,  Thanks, try 3 with the pictures.
Mike
[Same photos were included]

From: Mike  Sent: Tuesday, July 07, 2015 11:54 AM  Subject: Re: Conesus lake
Carl
Thank you!  I will work on my photography skills.  I don\'t think you\'ve heard the ast from my grandson. 😊
Mike,From: Carl Mehling  Sent: Monday, July 06, 2015 11:30 AM To: Mike Subject: RE: Conesus lake
Hi Mike,
Thanks for your email. Unfortunately, no images were included in the email. Can you resend them? Thanks, Carl

From: Carl Mehling  Sent: Tuesday, July 07, 2015 11:27 AM To: Mike Subject: RE: Conesus lake
Thanks, Mike. 
The photos are a bit dark and blurry but I’m pretty sure I see a fossil coral in that first photo. It might be a coral called Favosites or something similar. Have a look online for other photos to compare. Unfortunately, I don’t see anything in the second specimen to suggest a fossil – I think it is just a rock.
Best, Carl

From: Carl Mehling  Sent: Tuesday, July 07, 2015 12:59 PM To: Mike Subject: RE: Conesus lake
Sounds good to me!),
(7,7,107,From: David
To: isap
Sent: Sun, Jul 5, 2015 2:04 pm
Subject: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Dear Dr.,
In the early 2000\'s, we vacationed at Kure Beach, NC, on the Outer Banks of North Carolina.
During one trip, I found several fossilized bones in the tidal pools north of the Fort Fisher beaches. The fort sand ramparts were partially preserved and a cove-like beach southeast of these ramparts,with tidal pools,  collects heavier objects.
The object that I found appears to be a fossilized rib , that has signs of human workmanship, at both ends of the rib. Alternate edges of the rib had been sharpened, and one end has been more worn down by some unknown process.
I have attached several photos, for your review.
Please help me identify and age this tool.
I can be reached at either phone number if you have any detailed questions...
I appreciate your help...
David

From: David
Sent: Thursday, July 16, 2015 10:43 AM
To: Anibal
Cc: Lorann
Subject: Fwd: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Anibal,
Here is the info that might help you identify this object.
I appreciate your help...
David

From: David  Sent: Tuesday, July 21, 2015 5:18 PM To: Carl Mehling Cc: Anibal Subject: Re: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Carl and Anibal,
I appreciate your time and help in this matter.
Do you know of any online database of paleo tool  photos with descriptions available to the public?
Dave
,From: Carl Mehling  Sent: Monday, July 20, 2015 3:57 PM To: Anibal Subject: RE: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Thanks, Boss!

From: Carl Mehling  Sent: Tuesday, July 21, 2015 2:58 PM To: Anibal Cc: Lorann; David Subject: RE: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Those don\'t look like cut-marks on the end to you?

From: Carl Mehling  Sent: Tuesday, July 21, 2015 3:23 PM To: \'David\' Subject: RE: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Hi David,
You inquiry was forwarded to me. I have to agree that it\'s probably a fossil bone, but of what is hard to say. My gut says whale because they are large and commonly found as fossils along those beaches. I think it is at least safe to say it\'s a large mammal. But I say \'probably fossil\' because I have found a good many bones along our beaches up here that are that color and are clearly modern. If this is modern, the cut marks would easily be described as marks from a butcher\'s saw. If you tap it with metal or ceramic and it makes a \'clink\' rather than a \'click\' it is more likely to be a fossil. If it is a fossil the cut marks would not be butcher marks because the fossil vertebrates found there predate people by a long shot. The marks would then be tooling by people of almost any time period on a long-ago mineralize bone for some likely-unknowable purpose. Sorry I can\'t be of more help.
Best,
Carl

From: Carl Mehling  Sent: Tuesday, July 21, 2015 3:55 PM To: Anibal Subject: RE: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Understood. Here\'s what I told him: \'I have to agree that it\'s probably a fossil bone, but of what is hard to say. My gut says whale because they are large and commonly found as fossils along those beaches. I think it is at least safe to say it\'s a large mammal. But I say \'probably fossil\' because I have found a good many bones along our beaches up here that are that color and are clearly modern. If this is modern, the cut marks would easily be described as marks from a butcher\'s saw. If you tap it with metal or ceramic and it makes a \'clink\' rather than a \'click\' it is more likely to be a fossil. If it is a fossil the cut marks would not be butcher marks because the fossil vertebrates found there predate people by a long shot. The marks would then be tooling by people of almost any time period on a long-ago mineralize bone for some likely-unknowable purpose.\'

From: Carl Mehling  Sent: Tuesday, July 21, 2015 4:14 PM To: Anibal Subject: RE: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
OUTSTANDING!!!!!

From: Carl Mehling  Sent: Thursday, July 23, 2015 3:12 PM To: \'David\' Cc: Anibal Subject: RE: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Hi Dave,
I seriously doubt there is such a thing. There is just so much variation and subtlety that it would be phenomenally complex to create something like that. However, I can think of one book that might be somewhat helpful: What Your Fossils Can Tell You: Vertebrate Morphology, Pathology, and Cultural Modification by Robert. W. Sinibaldi.
Best, Carl

From: Anibal  Sent: Thursday, July 16, 2015 3:06 PM  Subject: FW: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Hi Carl,
I think this is in your neck of the woods.
Best,
Anibal

From: Anibal  Sent: Monday, July 20, 2015 4:04 PM To: Carl Mehling Cc: Lorann; David Subject: Re: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Thank you Carl, I had a chat with this gentleman and he\'s very excited about his finds which include a hadrosaur which he will tell you all about. I thought this would be a cultural object but I\'ve determine to the degree I can and based on the information he provided that it\'s paleontological in nature. 
Best
Anibal 

From: Anibal 
Sent: Tuesday, July 21, 2015 3:50 PM
To: Carl Mehling
Cc: Lorann; David
Subject: Re: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Sure do, but I\'ll be dame if I know how they got there from that photo. I need to examine the piece. It does look worked but I wanted your input. 
What\'s your take? Whale ? Age?
Anibal 

From: Anibal 
Sent: Tuesday, July 21, 2015 4:01 PM
To: Carl Mehling
Cc: Lorann; David
Subject: Re: Fossilized Rib Bone Worked into Mystery Tool - Help Identifying
Carl,
That is precisely what I told him on the phone, almost the word.
Thanks 
Anibal),
(8,8,108,From: Lisa  Sent: Monday, July 06, 2015 4:41 PM  Subject: Attn: Carl Mehling
Could you please identify the fossil below.
I found it in the Bushkill area of Pennsylvania.
The attachment is both halves of a \"rock\"
Thank you.
Lisa Caporaso

From: Lisa  Sent: Tuesday, July 07, 2015 12:20 PM  Subject: Re: Attn: Carl Mehling
Thank you so much for your quick response.
Lisa,From: Carl Mehling  Sent: Tuesday, July 07, 2015 11:40 AM To: \'Lisa\' Subject: RE: Attn: Carl Mehling
Hi Lisa,
Thanks for your email. And congratulations on a great find! It’s the cepahlon (“head”) of a trilobite called Trimerus (or Dipleura in the older literature) and is Middle Devonian (~387 million years old) in age if I have the local rock formation (the Mahantango Formation) right in my head. Well done!
Best, Carl

From: Carl Mehling  Sent: Tuesday, July 07, 2015 1:00 PM To: \'Lisa\' Subject: RE: Attn: Carl Mehling
My pleasure!),
(9,9,109,From: Brooke Sent: Monday, July 06, 2015 9:53 PM To: Carl Mehling Subject: Re: this can\'t be JUST a piece of glacial rock???? 
Carl, 
Pardon my interruption. We have spoken via email briefly and since I still believe the glacial ROCKS that were blasted loose about 8 YRS ago are showing their innards in a big way. The water has seeped within the 50 foot cliffs near my house and has started to expose the innards of stuff \" caught\" in the detriment etc that came to rest in the swampy woods behind my house!
If U have a moment to stare at these for a moment, one is upside down on his large head or are a slew of us seeing things?
regards,
BROOKE,From: Carl Mehling  Sent: Tuesday, July 07, 2015 12:58 PM To: \'Brooke\' Subject: RE: this can\'t be JUST a piece of glacial rock???? 
Hi Brooke,
Thanks for your email. Unfortunately, again I see nothing to indicate fossils of any kind here. To my eye these rocks look metamorphic in nature, which is consistent with NH and very inconsistent with fossils. You should try to get a copy of Roadside Geology of Vermont and New Hampshire (Roadside Geology Series) by Bradford B. Van Diver. It will certainly do a better job of explaining your local geology than I can hope to do. 
Best, Carl

[See also 22 Dec 2013]),
(10,10,110,From: Andy Sent: Tuesday, July 07, 2015 9:08 PM  Subject: Fossil?
Hi Carl,
I was hoping you could identify this (fossil?) I found on an island beach in Washington State. If you need specific info or better photos please let me know.
Thanks
Andy

,[Photos adjusted by me:]

From: Carl Mehling  Sent: Wednesday, July 08, 2015 10:27 AM To: \'Andy\' Subject: RE: Fossil?
Hi Andy,
Thanks for your email. Unfortunately, I don’t think it’s a fossil: it’s lacking the finer detail that would lead me to ID is as such. Believe it or not it is more likely to be an anomalously fractured rock.
Best, Carl),
(11,11,111,From: David Sent: Wednesday, July 08, 2015 10:22 AM  Subject: Do You Know What Animal This Bone Came From?
Dear Carl,
During a recent visit to a construction-site excavation in the west of Manhattan, I came across a large bone. Photographs of the bone are attached. The bone was in an organic clay deposit, most likely a former tidal marsh, overlying glacial till, about 15 to 20 feet below the existing ground level. Bivalves were also in the organic clay and I\'ve included a photograph of them in case it helps date the bone.
The bone is quite large, and I would be fascinated  to know what you think owned it, and how old it might be. I have more photographs, if they would be useful, let me know and I\'ll sent them across.
Kind regards,
David

From: David Sent: Friday, July 10, 2015 3:03 PM  Subject: RE: Do You Know What Animal This Bone Came From?
Hi Carl, Sadly the material has been excavated.  There may be a soil sample somewhere, but it almost certainly would be from a deeper depth. I\'ve attached a photograph of two other bones found at the site. 
,From: Carl Mehling  Sent: Wednesday, July 08, 2015 11:05 AM To: \'David\' Subject: RE: Do You Know What Animal This Bone Came From?
Hi David,
Thanks for your email. Very interesting. I’ll need to show the photos around a bit for a better ID but right now I can say it’s a fairly large mammal limb bone – maybe something the size of a horse. The tricky part will be aging it. There were animals here to which this could’ve belonged over a very long stretch of time. It could be an Ice Age thing, or pre-contact, or even historical. Is there any chance that the site is still open? A close evaluation of the host sediments might be the easiest way to assess its age. Obviously, I’m hoping for Ice Age but that would be truly rare.
Best, Carl

From: Carl Mehling  Sent: Wednesday, July 08, 2015 11:06 AM To: Ross Subject: FW: Do You Know What Animal This Bone Came From?
What do you make of this? You know what I’m hoping…
Here’s what I told him:
Hi David,
Thanks for your email. Very interesting. I’ll need to show the photos around a bit for a better ID but right now I can say it’s a fairly large mammal limb bone – maybe something the size of a horse. The tricky part will be aging it. There were animals here to which this could’ve belonged over a very long stretch of time. It could be an Ice Age thing, or pre-contact, or even historical. Is there any chance that the site is still open? A close evaluation of the host sediments might be the easiest way to assess its age. Obviously, I’m hoping for Ice Age but that would be truly rare.
Best, Carl

From: Ross Sent: Wednesday, July 08, 2015 11:11 AM  Subject: Re: Do You Know What Animal This Bone Came From?
Horse radioulna, with distal part of broken ulna still attached.

From: Carl Mehling  Sent: Wednesday, July 08, 2015 11:16 AM To: Ross
Subject: RE: Do You Know What Animal This Bone Came From?
Great! That’s actually what I was thinking! Any hope that it is Pleistocene? Any reason to delve further?

From: Ross Sent: Wednesday, July 08, 2015 11:18 AM  Subject: Re: Do You Know What Animal This Bone Came From?
Hard to say anything from one bone. Context could be a dump or landfill? A date would settle it. 

From: Carl Mehling  Sent: Wednesday, July 08, 2015 11:19 AM To: Ross Subject: RE: Do You Know What Animal This Bone Came From?
Cool. I hope he brings back good news!


From: Carl Mehling  Sent: Friday, July 10, 2015 3:30 PM To: \'David\' Subject: RE: Do You Know What Animal This Bone Came From?
Hi David,
Thanks for the update. I was afraid you would say that! Could you tell me where it came from? I may be able to use maps to assess the likelihood of ancient vs. modern.
The new pieces are pretty consistent with both ends of a horse femur. I’d bet they were from the same animal.
Best, Carl ),
(12,12,112,From: rick Sent: Saturday, July 11, 2015 9:50 PM To: Carl Mehling Subject: Indentation please 
I found this North of Lexington ky. If you need more photos let me know thanks 

From: rick  Sent: Saturday, July 11, 2015 9:53 PM To: Carl Mehling Subject: Another photo 

From: rick  Sent: Saturday, July 11, 2015 10:03 PM To: Carl Mehling Subject: Identify please 
This is the last picture for now if you want more please let me know.  If you are not Interested please erase these emails.  Thanks 

From: rick  Sent: Wednesday, July 15, 2015 5:20 PM  Subject: Re: RE: Indentation please 
Thanks so much ,From: Carl Mehling  Sent: Wednesday, July 15, 2015 2:03 PM To: \'rick\' Subject: RE: Indentation please 
Hi Rick,
Thanks for your email. Looks like you have a huge pile of bryozoans there. Bryozoans are colonial marine animals that have been on Earth for at least the last half a billion years. These look like branching bryozoans, which were attached to the sea floor or some other substrate in life and broke up into bits like this after dying and being broken up in the surf. Your specimen represents an accumulation of bryozoan bits on the sea floor.
It looks like all the rocks north of Lexington for quite a distance are Ordovician in age so if that rock wasn’t somehow transported into that area your fossils are between about 440 and 500 million years old! Just for perspective the oldest known dinosaurs are from about 243 million years ago. Nice find!
Best,
Carl

From: Carl Mehling  Sent: Monday, July 20, 2015 2:46 PM To: \'rick\' Subject: RE: RE: Indentation please 
My pleasure!),
(13,13,113,From: Peter Sent: Sunday, July 12, 2015 2:53 AM  Subject: Fossil from Musandam, Oman
Hello Carl,
I was taken to a site in the north end of Musandam, on a flat plane, just below the highest peak of the area. They said the fossils were of fish, but I don’t think so. Could you take a look and let me know what you think. 
I am working in Abu Dhabi and we took a weekend away to Oman where we saw the fossils
The fossils are in limestone and I did not have a ruler with me for the photos, but the fossils are 6-8 inches long.
If you need specific geographical location, I can send it. Thank you for any thoughts or feedback
With Kind Regards,
Peter

From: Peter  Sent: Thursday, July 16, 2015 4:37 AM  Subject: RE: Fossil from Musandam, Oman
Hello Carl,
Thanks for getting back to me with your comments. Clearly they were not fish, but I thought they may have been some form of lobster. However the lack of a tail and claws did not help with this theory.
I thought that the chambers were symmetrical, but with your comments and a closer look, I can see there is a gentle spiral in them. So mystery solved !
Thanks for your help, it was a pleasure to have found them in the wild and to know what they are. Yes they are really beautiful.
The tall spired snails – are they like a normal snail with a foot or do you think they are more like a cephalopod ?
Close by bivalves are about 220 million years old, so I guess this is the order of age. 
With Kind Regards,
Peter,From: Carl Mehling  Sent: Wednesday, July 15, 2015 3:13 PM To: \'Peter\' Subject: RE: Fossil from Musandam, Oman 
Hi Peter,
Thanks for your email. I had a look at your photos and your instincts are correct – they are not fish. My first thought was that they were straight-shelled nautiloids (or orthocones). These are relatives of today’s nautilus that were on Earth from about 240-520 million years ago. However, I found attached photo 1 of the very same fossils (labeled “squid fossils,” which is quite close to calling them nautiloids) online plus attached photo 2 also from Musandam that convince me that they are actually tall-spired snails. See the attached pdf [Kollmann H. A. 2014. — The extinct Nerineoidea and Acteonelloidea (Heterobranchia, Gastropoda): a palaeobiological approach. Geodiversitas 36 (3): 349-383.] for similar examples. Yours would be longitudinal sections naturally exposed by the weathering of the host limestone. Beautiful, aren’t they? Unfortunately, I wasn’t able to find out how old the Oman fossils were for you.
Best,
Carl

From: Carl Mehling  Sent: Monday, July 20, 2015 2:59 PM To: \'Peter\' Subject: RE: Fossil from Musandam, Oman
As far as I know these were fairly standard snails and would’ve looked like you might expect them to.
),
(14,14,114,From: Farkas Sent: Sunday, July 12, 2015 5:34 PM  Subject: warm tobes?
Hy!
It was found this fossil in an Hungaryan pebble mine near Bugyi village years ago during exploitation. It looks like worm tubes colony, but I don\'t know which sp. are. Thanks for help.  
Farkas

From: Farkas  Sent: Sunday, July 12, 2015 5:38 PM To: Carl Mehling Subject: worm tubes?
Here are the pictures.
Farkas

From: Farkas Sent: Wednesday, July 15, 2015 5:41 PM  Subject: Re: warm tobes?
Thank you for deal with this not easy case. 

From: Farkas  Sent: Sunday, August 23, 2015 4:45 PM  Subject: fossil
I need againd some help for identification, I think it is a kind of sea creature, maybe a snail or shell fossil or something else, but I dont know to which sp. belongs and the age. Thanks for help.                                                                                                 
Farkas

From: Farkas  Sent: Tuesday, August 25, 2015 2:50 PM  Subject: Re: fossil
Thanks for ratification.,From: Carl Mehling  Sent: Wednesday, July 15, 2015 3:59 PM To: \'Farkas\' Subject: RE: warm tobes?
Hi Farkas,
Thanks for your email. I see that you also posted this to the Fossil Forum. Unfortunately, I don’t have much to add – the detail of your specimen is lacking features I would need to make a confident ID. Worm tubes are certainly a possibility, but another possibility could be fossil plant bits, or even non-fossil geologic oddity. Sorry.
Best, Carl

From: Carl Mehling  Sent: Monday, July 20, 2015 2:47 PM To: \'Farkas\' Subject: RE: warm tobes?
My pleasure!

From: Carl Mehling  Sent: Monday, August 24, 2015 4:29 PM To: \'Farkas\' Subject: RE: fossil
Hi Farkas,
Now this looks a lot more clear. This must be a fossil snail, as you guessed. But, sadly, I can’t tell you anything about the age as I don’t know anything about Hungarian geology. Sorry!
Best, Carl 

From: Carl Mehling  Sent: Tuesday, August 25, 2015 3:54 PM To: \'Farkas\' Subject: RE: fossil
My pleasure!),
(15,15,115,From: Com Sent: Monday, July 13, 2015 10:37 PM  Subject: Fossil identification
Hi I found this what I believe to be a fossil in the Delaware River Pennsylvania and I\'m trying to identify what it is could you help me thank you,From: Carl Mehling  Sent: Monday, July 20, 2015 2:37 PM To: Com Subject: RE: Fossil identification
Dear Mystery Person,
Thanks for your email. I’ve had a long look at your photos and I don’t think you have a fossil there. Sorry, but I think it is a rock that has a superficial resemblance to a bone. It is lacking the finer details that I would need to see in order to feel confident identifying it as a fossil. 
Best, Carl ),
(16,16,116,From: Anjie Sent: Thursday, July 16, 2015 9:36 PM  Subject: Fossil?
Hi Carl, I came across your name on the American Museum of Natural History website. I have a rock that may have a fossil. I have posted these pictures other places, but no one seems to be able to tell me if the depression in the limestone (?) could be a fossil or just another stone. I was wondering if you could help me.  The pictures I included show the bottom of the rock as well as the side where you can see a small cross section of the embedded object.I found this rock 3 weeks ago in south central Wisconsin. It was in a lowland corn field close to a river. I can give you more detail if needed. Hopefully you can help me or tell me who can. I have never seen a rock quite like this. I will be looking this field over again in several weeks. Thank you for your time. Angie,From: Carl Mehling  Sent: Monday, July 20, 2015 3:09 PM To: \'Anjie\' Subject: RE: Fossil?
Hi Anjie,
Thanks for your email. I’ve taken a good look at your photos and I don’t think it is a fossil. It lacks the detail I’d want to see to feel confident calling it a fossil. It looks to me like a chunk of an ironstone called limonite. It very often has exactly that yellowish color and texture and also commonly forms rounded blobs called concretions, not unlike the inclusion in your sample.
Best, Carl ),
(17,17,117,From: Tara Sent: Saturday, July 18, 2015 4:02 PM  Subject: Fossil found
We live in central Indiana and found this fossil. My 12 year old thinks it\'s a coral fossil. My 10 year old thinks it\'s a bee hive.
Can you solve this for us and give us an idea of how old it is also?
Thanks for your time.
Tara

From: Tara
Sent: Monday, July 20, 2015 3:48 PM
Subject: Re: Fossil found
Thanks so much! The boys were thrilled to hear back from a professional in the field. The age of this fossil sure sparks the imagination. They will continue to be on the hunt for more...
Thanks again,
Tara,From: Carl Mehling  Sent: Monday, July 20, 2015 3:23 PM To: \'Tara\' Subject: RE: Fossil found
Hi Tara,
Thanks for your email. This time, we are definitely going to go with your 12-year-old: that is a fossil coral. But I can certainly see the strong resemblance to something like a honeycomb as well. However, you can easily rule out a bee structure because of the fine radiating lines within each compartment - this is classic coral structure. I know of a single fossil honeycomb and a possible partial wasp\'s nest in amber against simply incredible numbers of coral fossils. The reasons for this discrepancy are: 1) corals have been on Earth for 100s of millions of years and bees probably less than 100 million, 2) even when both were around together there were almost certainly many more corals that bee structures, 3) corals live in an environment very friendly to the formation of fossils whereas bee structures are created in an environment generally hostile to fossil preservation, and 4) corals are made of easily preserved hard minerals whereas bee structures are far more fragile. Finally, the rocks in Indiana are way too old to preserve bee structures: depending on where you found this (and assuming it wasn\'t moved by people or glaciers) your fossil coral is probably between 324 and 500 million years old! Nice find!
Best,
Carl

From: Carl Mehling  Sent: Monday, July 20, 2015 3:54 PM To: \'Tara\' Subject: RE: Fossil found
OUTSTANDING!),
(18,18,118,From: Jessica  Sent: Tuesday, July 21, 2015 10:52 AM  Subject: I think I found a fossilized egg?
Hello Mr. Mehling!
My name is Jessica.
I am a student at Texas State University in San Marcos Texas, and I think I\'ve found something fossilized that looks cool! Maybe an egg perhaps? The Internet told me that is near impossible but I am holding on to hope because it almost looks like it has a shell around it. I found it in Spring Branch Texas on the edge of a river bank. I know the whole river rock rounded in the water thing but this one seems like something besides a rock! There have been dinosaur foot prints found nearby as well. I\'m probably wrong but it won\'t hurt to check :) sorry I couldn\'t find a ruler! 
Thanks so much for your help!
Jessica

From: Neel, Jessica T [mailto:jtn33@txstate.edu] 
Sent: Tuesday, July 21, 2015 11:31 AM
Subject: Re: I think I found a fossilized egg?
Aw man!! Ok thank you for your time!
Jessica,From: Carl Mehling  Sent: Tuesday, July 21, 2015 11:29 AM To: \'Neel, Jessica T\' Subject: RE: I think I found a fossilized egg?
Hi Jessica,
I have had a look at your attached photos, and although it is sometimes hard to be sure with photos, I\'d be very surprised if this was a fossil egg.  It does indeed resemble an egg, but it is much more likely to be a weathered rock of some kind – it’s resemblance to an egg is merely accidental. 
Fossil eggs do usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine surface ornamentation (the smoother the \"shell,\" the less likely it is to be a non-bird dinosaur egg) or a specific type of crystalline structure in cross-section. But both the \"shell\" here and the bumpy texture are inconsistent with what one would expect for a fossil egg. The bumpy part actually looks like a coarse limestone, which also wouldn\'t be consistent with a fossil egg.
Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. Ironically, one strong indication that this is not an egg is that it is so egg-shaped: most fossil eggs are not \"egg-shaped\" because most fossil eggs come from non-avian dinosaurs and are everything from spherical to torpedo-shaped. 
Sorry to bring bad news,
Carl

From: Carl Mehling  Sent: Tuesday, July 21, 2015 11:34 AM To: \'Neel, Jessica T\' Subject: RE: I think I found a fossilized egg?
My pleasure!),
(19,19,119,From: Tim Sent: Tuesday, July 21, 2015 3:53 PM To: Carl Mehling Cc: Dina Subject: A possible fossil.
Hi Carl,
I hope everything is going well for you.
I’m hoping you can take a quick look at the attached photos.  A good friend from my high school days wants to know if this is a dinosaur egg.  And if it is, are there any clues as to which kind.  It was found somewhere in the great state of Washington.
Sorry for the poor quality of the photos.
Thanks!
Tim

From: Tim  Sent: Tuesday, July 21, 2015 3:54 PM To: Carl Mehling Cc: Dina Subject: Re: A possible fossil.
I do have every expectation that you’re going to say it’s a river rock!

From: Tim  Sent: Tuesday, July 21, 2015 4:33 PM To: Carl Mehling Cc: Dina Subject: Re: A possible fossil.
Thanks for this, Carl.  You’ll be glad to know that I’m not crushed.  So my bones might be recognizable millions of years into the future.
I’m familiar with “lithified mud nodules”, although we called them indian paint pots.  I spent a lot of time in the sand pits of Port Washington, and there were a lot of sandstone formations with similar characteristics to the ones you describe, with shapes and layers just like the rock in the pictures.
Now I have to break the news to my friend.
Couldn’t you have just lied?,From: Carl Mehling  Sent: Tuesday, July 21, 2015 4:14 PM To: \'Tim\' Cc: Dina Subject: RE: A possible fossil.
Ooooh, you beat me to it, Tim! Yeah, I’d say it has had at least some life in a river.
Sometimes hard to be sure with photos, I\'d be very surprised if this was a fossil egg.  It does indeed resemble an egg, but it is much more likely to be a sedimentary concretion of some kind – it’s resemblance to an egg is merely accidental. Concretions often form when some object acts as a “seed” for layered cementation of sediment. On occasion, the thing that initiates the concretion, the “seed,” can be a fossil. To find this out would require cracking the concretion completely open – this one is broken but the true center is still hidden. 
Alternatively, it might also be a lithified mud nodule. These start as balls of mud that harden through drying or chemical processes, sometimes at different rates within the ball. Mud nodules can also be balls of mud that affect the surrounding sediments and chemically alter them in a way that makes a shell-like layer harden and adhere to the mud interior. This can result in an object like this with a hard “shell” and a looser interior. Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine surface ornamentation (the smoother the \"shell,\" the less likely it is to be a non-bird dinosaur egg) or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. Ironically, one strong indication that this is not an egg is that it is so egg-shaped: most fossil eggs are not \"egg-shaped\" because most fossil eggs come from non-avian dinosaurs and are everything from spherical to torpedo-shaped. 
Additionally, the thickness of the “shell” almost certainly rules out egg. Embryos in hard-shelled terrestrial eggs need shells through which they can conduct gas exchange – basically so they can breathe. Past a certain thickness, this becomes impossible. This specimen’s “shell” is much too thick. It could also just be a rock that has been rounded by being bounced around in a river. \"Egg\" shapes are extremely common among river rocks. However, the fact that it is layered the way it is points more strongly towards concretion.
Finally, Washington is only known for a single dinosaur fossil, and that was only recently found. Of course that doesn’t mean there couldn’t be more but their extreme rarity makes eggs almost out of the question.
Sorry to bring bad news,
Carl

From: Carl Mehling  Sent: Thursday, July 23, 2015 3:08 PM To: \'Tim\' Subject: RE: A possible fossil.
I’m genetically incapable of knowingly lying about fossils. My apologies.),
(20,20,120,From: N Sent: Friday, July 24, 2015 8:22 AM  Subject: Octopus Fossil Identification
Hello,  I would an expert\'s opinion on this Very Rare Octopus Fossil. I have attach pictures, any help will be much appreciated Regards  Naz







,From: Carl Mehling  Sent: Tuesday, July 28, 2015 10:38 AM To: \'N\' Subject: RE: Octopus Fossil Identification
Hi Naz,
Thanks for your email. I’m afraid I don’t see a fossil octopus there. It is not at all the way one would expect to find a fossil octopus. Plus, octopus are exceptionally rare in the fossil record because they have no hard parts. The external structure of your find, plus the presentation of the broken ends of the “arms,” plus the color and texture of the rock all point to some kind of calcite cave formation.
Best, Carl),
(21,21,121,From: randy Sent: Friday, July 24, 2015 10:06 PM  Subject: Fossil Identification
Dear sir:
On your website you said you could help identify fossils.  I have the following that I need help with.  These were found in Western Kentucky around Paducah.
The first one resembles an egg, approx. 3\" long and 8\" in circumference.
The second resembles a tooth.
Following are the photographs.

From: randy Sent: Wednesday, July 29, 2015 7:53 PM  Subject: Re: Fossil Identification
Mr. Mehling,
Thank you so much for taking the time to look at the photos and contact me.  it\'s good to have an answer from someone with knowledge in the field.  
Randy,From: Carl Mehling  Sent: Tuesday, July 28, 2015 11:10 AM To: \'randy\' Subject: RE: Fossil Identification
Hi Randy,
Thanks for your email. I’ve had a look at your photos. I’m sorry but I don’t think either of them is a fossil.
The first one does somewhat resemble an egg, but it is much more likely to be just a weathered piece of limestone – it’s resemblance to an egg is merely accidental. However, if it is limestone, this little bits it is made of could be small marine invertebrate fossils.  Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine, specific kind of surface ornamentation or a specific type of crystalline structure in cross-section. Both of those seem to be missing here. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. 
The other piece appears to be a chunk of ironstone. Where I collect fossils in NJ we are constantly tormented by these whimsical shapes that ironstone has a nasty habit of presenting.
Sorry to bring bad news,
Carl

From: Carl Mehling  Sent: Thursday, July 30, 2015 10:08 AM To: \'randy\' Subject: RE: Fossil Identification
My pleasure!),
(22,22,122,From: Alex  Sent: Saturday, July 25, 2015 2:16 PM To: Carl Mehling Subject: Trilobite authenticity
Dear Carl Mehling,
I was at a fossil show last year and I purchased this scotoharpes trilobite from a dealer and I was wondering if it was authentic. This trilobite is around 1.8 inches


From: Alex Sent: Tuesday, July 28, 2015 11:59 AM  Subject: Re: Trilobite authenticity
Thank you so much!!!
From Alex
,From: Carl Mehling  Sent: Tuesday, July 28, 2015 11:23 AM To: \'Alex\' Subject: RE: Trilobite authenticity
Hi Alex,
Thanks for your email. I certainly wouldn\'t be able to authenticate something like this exclusively from photos but my eye and my gut tell me that one should be suspicious about this specimen. This definitely looks like something from Morocco and the Moroccans are well-known for their trilobite fakes. Have a look at the links below.
https://www.paleodirect.com/fakefossils1.htm (Pay close attention to the several trilobite pages)
http://www.fossilmuseum.net/collect/fake-trilobites.htm    
http://www.fossilmuseum.net/collect/faketrilobites3.htm 
Best,
Carl

From: Carl Mehling  Sent: Tuesday, July 28, 2015 12:01 PM To: \'Alex\' Subject: RE: Trilobite authenticity
My pleasure!),
(23,23,123,From: John  Sent: Sunday, July 26, 2015 3:22 AM  Subject: Hey, I think I found a fossil.
Hey Carl.
My name is John. So, some years ago I found a fossil. I\'ve thought it\'s of a fish, maybe, a vertebrate or a shoulder blade. Something.
I\'ll send some pictures. It seems like it contains both calcium and mineral, so it\'s got some time behind it. But its still in its earIy stages. I found it here in New York while walking down the beach some time after Hurricane Sandy destroyed the Rockaway Boardwalk. I\'d like to learn more about it.
I can send some more pictures if you\'d like.
-Cheers

From: John  Sent: Sunday, July 26, 2015 3:34 AM  Subject: Re: Hey, I think I found a fossil.
Ps. There are some very tiny critters on it. They don\'t come out but I see them scurring about on the perforated surface.,From: Carl Mehling  Sent: Tuesday, July 28, 2015 11:34 AM To: \'John\' Subject: RE: Hey, I think I found a fossil.
Hi John,
Thanks for your email. By the look of it you have a bone there. And by the way it has broken it appears to be mineralized, and thus old, and thus a fossil. The texture of the bone makes me think it is a mammal bone but it looks very weathered, which means the overall shape may not be very similar to the original overall shape. Now, there are young fossils (up to 12,000 years old) found on that beach from time to time and they do include marine mammal bones. My best guess is that you have a chunk of  marine mammal bone, maybe a dolphin. I know of no way to tell for certain. Not sure what the “critters” might be but if they were marine things that were living in it from when it was in the ocean they’d all be dead by now. I wish I could tell you more because one of my favorite topics is NYC fossils!
Best, Carl),
(24,24,124,From: J  Sent: Sunday, July 26, 2015 10:42 AM  Subject: Temescal Canyon, Santa Monica
Have no idea. it\'s a mystery to all of us. Can you help?
Thank you for your time. 

From: J  Sent: Tuesday, July 28, 2015 10:46 PM To: Carl Mehling Subject: RE: Temescal Canyon, Santa Monica
Thank you for your response. Words like stromatolites and oncolite, are words I\'d never heard before. I Google searched them and to my suprise identified all the mysterious rock formations at the top of Topanga Canyon. I learned something new. Amazing. Can\'t wait to share it with my friends. we\'ve always wondered what they were and how they we\'re formed.
As far as the item in question maybe it is exactly what you think. But I will tell my friends it\'s from a T-REX. They expect that.
Thank you again for your time and teaching me about stromatolites.
J,From: Carl Mehling  Sent: Tuesday, July 28, 2015 11:47 AM To: J Subject: RE: Temescal Canyon, Santa Monica
Hi J,
Thanks for your email. Looks like you have a bit of a stumper there. My gut tells me it’s a fossil of some kind but I’m not getting a clear signal. The best guess I can make is that it is a stromatolite or some similar kind of structure, like an oncolite or thrombolite. These are all structures that aquatic bacteria make using accumulated sediments. Sorry I can’t be more specific.
Best, Carl

From: Carl Mehling  Sent: Wednesday, July 29, 2015 12:23 PM To: \'J\' Subject: RE: Temescal Canyon, Santa Monica
My pleasure!),
(25,25,125,From: Suzi  Sent: Sunday, July 26, 2015 4:50 PM  Subject: Fossil ID
Hi Mr. Mehling, 
My daughter found this on the floor of a natural spring in West Florida. It is porous like a bone fragment. We would love any information you can give. 
Thank you,
Suzi,From: Carl Mehling  Sent: Tuesday, July 28, 2015 11:54 AM To: \'Suzi\' Subject: RE: Fossil ID
Hi Suzi,
Thanks for your email. Well, I can say with near certainty it\'s a piece of fossil bone. Beyond that, I am a bit stumped. The deep grooves in the first photo make me think turtle but the shallower parallel grooves don\'t at all remind me of a turtle. I suggest you post this to the Fossil Forum: they are an extremely adept group of amateur and professional fossil collectors and I know many of them are experts in Florida fossils. Good luck!
Best,
Carl),
(26,26,126,From: Michael Sent: Monday, July 27, 2015 12:45 PM  Subject: Fossil Identification
I found this rock in Warren County Pennsylvania in a creek.  It is 4” wide and the barbell shape is 2” wide.  Is this even a fossil?
Thanks,
Mike

From: Michael Sent: Tuesday, July 28, 2015 12:36 PM  Subject: RE: Fossil Identification
Carl,
Try these files.
Thanks,
Mike,From: Carl Mehling  Sent: Tuesday, July 28, 2015 11:58 AM To: \'Michael\' Subject: RE: Fossil Identification
Hi Mike,
Thanks for your email. Unfortunately, all of the photo links failed. Can you attach them to an email and resend? Thanks,
Carl

From: Carl Mehling  Sent: Tuesday, July 28, 2015 1:03 PM To: \'Michael\' Subject: RE: Fossil Identification
Thanks, Mike. Looks like you have a genuine weird thing there. Very little about it suggests that it might be a fossil. I suspect it is a natural oddity, however. I can’t really supply a mechanism but it appears that something was there that this rock grew around causing the slit in one face and the barbell shape on the other. Very strange! I have seen crazy thinking like this in ironstone, and there are details about your find that seem to fit with ironstone but not all of them. Sorry I can’t be of more help!
Best, Carl),
(27,27,127,From: wendy Sent: Monday, July 27, 2015 3:39 PM  Subject: Fosssil 
I found this in Colorado springs after the river went down, I think it\'s a head of something my family thinks I\'m crazy,From: Carl Mehling  Sent: Tuesday, July 28, 2015 12:10 PM To: \'wendy\' Subject: RE: Fosssil 
Hi Wendy,
Thanks for your email. I see you’ve also posted this to the Fossil Forum. I’ll have to agree with them that it does not seem to be a fossil. It is lacking the details we would want to see to make a confident ID as a fossil. Sorry for the bad news. But you tell your family your curious, not crazy!
Be well, Carl),
(28,28,128,From: Tom Sent: Wednesday, July 29, 2015 10:41 AM  Subject: Fossil ID
Dear Carl
Please could you see the attached images and advise whether you think this is a fossil or just a stone (septarian concretion)?
The object is quite light for its size weighing 180 grams and doesn’t have the feel of a stone/rock to touch.
To those that have handled it, it has the appearance and feel of a fossilised crushed egg, but I know that these types of things are often mistaken.
Apologies there is no clear photo of the height, but photo image 1232 just about gives you an idea of thickness on the left hand side which is slightly raised.
Kind regards and best wishes
Tom

From: Tom Sent: Thursday, July 30, 2015 5:43 AM  Subject: RE: Fossil ID
Many thanks for your prompt and detailed reply.
Kind regards
Tom,From: Carl Mehling  Sent: Wednesday, July 29, 2015 12:43 PM To: \'Tom\' Subject: RE: Fossil ID
Hi Tom,
Thanks for your email. I have had a look at your attached photos, and although it is sometimes hard to be sure with photos, I\'d be very surprised if this was a fossil.  It does somewhat resemble an egg, but it is much more likely to be a sedimentary concretion of some kind (as you propose) – it’s resemblance to an egg is merely accidental. Concretions often form when some object acts as a “seed” for cementation of sediment. On occasion, the thing that initiates the concretion, the “seed,” can be a fossil. To find this out would require cracking the concretion open. 
Alternatively, it might also be a lithified mud nodule. These start as balls of mud that harden through drying or chemical processes, sometimes at different rates within the ball. Mud nodules can also be balls of mud that affect the surrounding sediments and chemically alter them in a way that makes a shell-like layer harden and adhere to the mud interior.  Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine surface ornamentation (the smoother the \"shell,\" the less likely it is to be a non-bird dinosaur egg) or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits. Ironically, one strong indication that this is not an egg is that it is so egg-shaped: most fossil eggs are not \"egg-shaped\" because most fossil eggs come from non-avian dinosaurs and are everything from spherical to torpedo-shaped. 
But most vexing is the comment “quite light for its size… and doesn’t have the feel of a stone/rock to touch.” I agree that by the look of this, one should expect more heft than you report. It makes me wonder if this isn’t artificial: maybe a collapsed rubber ball or some plastic thing. I have definitely seen rubber break down fairly similarly. You might want to take a match to it and see what happens.
Best,
Carl

From: Carl Mehling  Sent: Thursday, July 30, 2015 10:09 AM To: \'Tom\' Subject: RE: Fossil ID
My pleasure!),
(29,29,129,From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 9:03 AM  Subject: Please help wih ID
Dear Sir or Madam,
My name is Domas, I\'m 21. 
I have found many interesting fossils in Lithuania, small Eastern Europe country.
Could you help me with ID of these vertebrates, arthropods and plants?
Best regards,
Domas

[File name: Actinopterygian fish bone, Late Cretaceous, Varena town, South Lithuania (2)]

[File name: Actinopterygian fish bone, Paleocene, Varena town, South Lithuania]

[File name: Actinopterygian fish cycloid scale from the lateral line, Late Cretaceous, Varena town, South Lithuania]

[File name: Actinopterygian fish cycloid scale, Late Cretaceous, Varena town, South Lithuania]

[File name: Actinopterygian fish ctenoid scale, Late Cretaceous, Margionys quarry, Varena district, South Lithuania]

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 9:07 AM  Subject: Re: Please help wih ID
[File name: Actinopterygian fish mouth bone, Late Cretaceous, Varena town, south Lithuania]

[File name: Actinopterygian fish spinal rind, Late Cretaceous, Varena town, South Lithuania]

[File name: Actinopterygian fish tooth, Late Cretaceous, Varena town, South Lithuania]

[File name: angiosperm plant petal ring, Paleogene, Varena town, South Lithuania (2)]

[File name: Angiosperm plant seed shell, Late Cretaceous, Varena town, South Lithuania (3)]

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 9:08 AM  Subject: Re: Please help wih ID
[File name: Auroch tooth, Quarternary, Olando cap, Klaipeda district, Western Lithuania]

[File name: Ceratodontidae lungfish tooth plate, Permian, Varena town, South Lithuania (2)]

[File name: Chimere tooth, Late Devonian, Varena town, south Lithuania]

[File name: Cycadales gymnosperm plant leaf fragment, Triassic, Varena town, South Lithuania]

[File name: Cochliodont chimere tooth, Late Devonian, Varena town, south Lithuania]

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 9:12 AM  Subject: Re: Please help wih ID
[File name: Grass seed, Miocene, Juodikiai quarry, Klaipeda district, Western  Lithuania (2)]

[File name: Grass seed, Miocene, Juodikiai quarry, Klaipeda district, Western Lithuania]

[File name: Hybodus longiconus shark tooth, Middle Triassic, Varena town, South Lithuania]

[File name: Ichthyodectiform ancient fish spinal rind, Late Cretaceous, Varena town, South Lithuania]

[File name: Ichthyodectiform fish scale from the lateral line, Late Cretaceous, Varena town, South Lithuania]

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 9:16 AM  Subject: Re: Please help wih ID
[File name: Rhizodontid tetrapodomorph fish scale, Late Devonian, Varena town, South Lithuania]

[File name: Small coelacanth fish scale, Early Triassic, Varena town, South Lithuania]

[File name: Small coelacanth fish scale, Early Triassic, Varena town, South Lithuania (2)]

[File name: Small unidentified reptile scale, Late Cretaceous, Varena town, South Lithuania]

[File name: Spiny scale of silverside fish ancestor from the lateral line, Late Cretaceous, Varena town, South Lithuania]

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 9:18 AM  Subject: Re: Please help wih ID
[File name: Spiny scale of the silverside fish ancestor, Late Cretaceous, Varena town, South Lithuania]

[File name: Tetrapodomorph fish bone, Devonian, Varena town, South Lithuania]

[File name: Tetrapodomorph fish head plate, Devonian, Varena town, south Lithuania]

[File name: tetrapodomorph fish head plate, Devonian, Varena town, South Lithuania (2)]

[File name: Tetrapodomorph fish head plate, Devonian, Varena, South Lithuania]

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 9:19 AM  Subject: Re: Please help wih ID
[File name: Tetrapodomorph fish scale, Devonian, Varena town, South Lithuania]

[File name: Tetrapodomorph fish scale, Devonian, Varena town, South Lithuania (2)]

[File name: Tristichopterid tetrapodomorph fish scale, Devonian, Barciai village, Varena district, South Lithuania]

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Thursday, July 30, 2015 11:23 AM  Subject: Re: Please help wih ID
Dear Carl, 
Thank you. 
Could you tell me some contacts of the vertebrate, arthropod and plant specialists which could identify my fossils?
Please help if you can
Best regards, 
Domas 

From: Domas Norkevicius [mailto:dominykasdomas@gmail.com]  Sent: Friday, July 31, 2015 8:03 AM  Subject: Re: Please help wih ID
Dear Carl,
Thank you for the contacts, I\'m going to send my vertebrates to these specialists.
All the best,
Domas,From: Carl Mehling  Sent: Thursday, July 30, 2015 10:51 AM To: \'Domas Norkevicius\' Subject: RE: Please help wih ID
Hi Domas,
Thanks for your email. You certainly have a load of very nice fossils there and I have no reason to disagree with any of your identifications, but sadly I can’t add anything to what you have said. I don’t know any of those groups really well and no one here knows Lithuanian fossils very well. Is there a natural history closer to you that might be able to help you better? Keep digging!
Best, Carl

From: John Maisey  Sent: Thursday, July 30, 2015 11:33 AM  Subject: RE: Lithuanian Fossils
Hi Carl, 
An interesting collection of fragments.. Some of them could be quite important. The collector really should contact more local  scientists (there are quite a few paleontologists in eastern Europe). 
John  

From: Carl Mehling  Sent: Thursday, July 30, 2015 12:03 PM To: John Maisey Subject: RE: Lithuanian Fossils
I told him basically the same. Might you have a contact or two I could give him?

From: John Maisey  Sent: Thursday, July 30, 2015 12:50 PM  Subject: RE: Lithuanian Fossils
A couple of suggestions: 

From: Carl Mehling  Sent: Thursday, July 30, 2015 1:26 PM To: John Maisey Subject: RE: Lithuanian Fossils
Thanks!

From: Carl Mehling  Sent: Thursday, July 30, 2015 1:28 PM To: \'Domas Norkevicius\' Subject: RE: Please help wih ID
Hi Domas,
Here are a couple of names our Curator of Fossil Fishes John Maisey provided:

As for the other fossils we don’t have any good suggestions. You should be able to find the right people on the Web.
Best, Carl 

From: Carl Mehling  Sent: Friday, July 31, 2015 11:02 AM To: \'Domas Norkevicius\' Subject: RE: Please help wih ID
Good luck!
),
(30,30,130,From: Jeff Sent: Friday, July 31, 2015 10:45 AM  Subject: [What Is This Fossil?] found dinasaur eggs
jeff
found in a wadi large collection of what appears to be dinosaur eggs...
we have both samples and pictures...  some on line sites say they may be chert nodules.
i can send pictures ... i would love to know your expert opinions...  if they seem to be eggs, we can bring in samples.
please respond
thanks

From: jeff Sent: Friday, July 31, 2015 11:47 AM To: Carl Mehling Subject: Re: [What Is This Fossil?] found dinasaur eggs
will arrange... thanks

From: jeff Sent: Friday, July 31, 2015 11:51 AM To: Carl Mehling Subject: Re: [What Is This Fossil?] found dinasaur eggs
many more...and out of the cliff...

From: jeff  Sent: Friday, July 31, 2015 12:05 PM To: Carl Mehling Subject: Re: [What Is This Fossil?] found dinasaur eggs
[Below is a sample of the many images]

From: jeff Sent: Monday, August 03, 2015 7:58 PM  Subject: cherts not eggs
thank you so much...jeff

From: jeff Sent: Monday, August 17, 2015 1:36 PM  Subject: Re: [What Is This Fossil?] found dinasaur eggs
Dear Carl...
Thanks again for the Chert nodule vs Dino egg explanation...understood.!
I have another specimen to identify properly... a gold sphere inside a geode of quartz.
local gemologists claim it is clearly real gold..but have never seen a full sphere inside a geode...and think it might be very rare..
opinions..?... feel free to pass it around for other opinions.
thanks
Jeff

From: jeff Sent: Wednesday, September 02, 2015 12:33 PM  Subject: Re: [What Is This Fossil?] found dinasaur eggs
Jamie had not seen anything like our geode with the gold inside...and she is away now... is there someone else to cc the pics to for an opinion..?,From: Carl Mehling  Sent: Friday, July 31, 2015 11:04 AM To: \'jeff\' Subject: RE: [What Is This Fossil?] found dinasaur eggs
Hi Jeff,
Thanks for your email. I’d be happy to have a look at your find. Please email me very sharp photos (no more than 5 and no larger than 500k) that include scale.
Best, 
Carl

[He also cc’d Ruth at this point]
From: Ruth Sent: Friday, July 31, 2015 11:54 AM To: Carl Mehling Subject: Fwd: eggs found
Thoughts?

From: Ruth Sent: Friday, July 31, 2015 12:09 PM To: Carl Mehling Subject: Fwd: eggs found
Give me a call

From: Melanie Sent: Monday, August 03, 2015 10:50 AM To: jeff Cc: Carl Mehling Subject: RE: eggs found
Hi Jeff,
Am forwarding your email to Carl Mehling, one of our senior science staff in vert paleo, who may be able to help.
Thanks,
Melanie

From: Carl Mehling  Sent: Monday, August 03, 2015 11:33 AM To: \'. .\' Subject: RE: [What Is This Fossil?] found dinasaur eggs
Hi Jeff,
I have had a look at your attached photos, and although it is sometimes hard to be sure with photos, I\'d be very surprised if these were fossil eggs.  They do somewhat resemble eggs, but it is much more likely to be a sedimentary concretion of some kind – it’s resemblance to an egg is merely accidental. Concretions often form when some object acts as a “seed” for cementation of sediment. On occasion, the thing that initiates the concretion, the “seed,” can be a fossil. To find this out would require cracking the concretion open. The concentric rings in the first one definitely remind me of chert nodules, as does the fracture patterns on the specimens. Neither structure would not be expected for fossil eggs. Eggs have a near perfect geometry and even as fossils this original geometry is apparent. These are to irregular in shape to be likely candidates for eggs. Also, fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine surface ornamentation (the smoother the \"shell,\" the less likely it is to be a non-bird dinosaur egg) or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. The lack of any bits that could be confidently IDed as eggshell also speaks against these being eggs.
Sorry to bring bad news,
Carl

From: Carl Mehling  Sent: Monday, August 03, 2015 11:34 AM To: Melanie Subject: RE: eggs found
Thanks, Melanie – he hit me also!

From: Carl Mehling  Sent: Tuesday, August 04, 2015 11:24 AM To: \'. .\' Subject: RE: cherts not eggs
My pleasure!

From: Carl Mehling  Sent: Tuesday, August 18, 2015 9:53 AM To: \'jeff\' Cc: Jamie Subject: RE: [What Is This Fossil?] found dinasaur eggs
Hi Jeff,
This is definitely more of a question for my counterpart in Earth & Planetary Sciences, Jamie (cc’d here). See what she says!
Best, Carl

From: Jamie  Sent: Tuesday, August 18, 2015 10:49 AM  Subject: RE: [What Is This Fossil?] found dinasaur eggs
Photos?

From: Carl Mehling  Sent: Tuesday, August 18, 2015 10:53 AM To: Jamie Subject: RE: [What Is This Fossil?] found dinasaur eggs
Whoops!

From: Carl Mehling  Sent: Wednesday, September 02, 2015 1:51 PM To: \'. .\' Subject: RE: [What Is This Fossil?] found dinasaur eggs
Jaime’s definitely the right one. See what she says when she gets back.),
(31,31,131,From: Vincent Sent: Saturday, August 01, 2015 1:03 PM  Subject: Fossil
I found this fossil near my home in Southwest Missouri. I\'ve been told its some kind of plant

From: Vincent Sent: Monday, August 03, 2015 6:47 PM  Subject: RE: Fossil
How much would you say something like this is worth?,From: Carl Mehling  Sent: Monday, August 03, 2015 11:42 AM To: \'Vincent\' Subject: RE: Fossil
Hi Vincent,
Thanks for your email. Looks to me you’ve got yourself a Calamites fossil there. Calamites was an ancient relative of today’s horsetails and grew to be up to 100 feet tall. Your fossil probably represents a cast of the hollow interior of the plant’s stem so the girth of the living plant’s stem was likely quite a bit more. They were especially common in the Carboniferous Period (~360-300 million years ago). It looks like you definitely have rocks of the right age exposed near you so happily that also makes sense. Nice find!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 04, 2015 11:23 AM To: \'Vincent\' Subject: RE: Fossil
Hi Vincent,
We don’t do appraisals but I can tell you that Calamites is an extremely common fossil.
Best, Carl),
(32,32,132,From: Adam  Sent: Sunday, August 02, 2015 12:34 AM  Subject: 
Good morning Mr. Mehling,
My name is Adam and I am a teacher in El Paso, Texas.
I found this fossil on a desert hike here in El Paso. It appears to be a tooth embedded in rock.
I have included a front, top and side view.
Would you be so kind as to give me your opinion?
Thank you so much Adam 

From: Adam  Sent: Monday, August 03, 2015 1:40 PM  Subject: RE:
Thank you so much for the information! ,From: Carl Mehling  Sent: Monday, August 03, 2015 11:46 AM To: \'Adam\' Subject: RE: 
Hi Adam,
Thanks for your email. I see you’ve also already posted this to the Fossil Forum as well. I’ll have to agree with them: I don’t see a fossil here. Just a mischievous rock masquerading as a fossil.
Sorry for the boring news, Carl

From: Carl Mehling  Sent: Monday, August 03, 2015 1:49 PM To: \'Adam\' Subject: RE: RE:
My pleasure!),
(33,33,133,From: Barb Sent: Sunday, August 02, 2015 11:24 AM  Subject: Fossil identification
I found this on the shore of Lake Michigan.  What is it and from what era/period? Thank you!

From: Barb  Sent: Monday, August 03, 2015 12:04 PM  Subject: Re: Fossil identification
Thanks, Carl
    That is the conclusion I have come too.   Most Great Lakes fossils I have been familiar with are coral related.  If I had not been walking in a rather isolated beach on Lake Michigan I would have thought it was planted there to pull someone\'s leg - like mine.  This forum - does it have a website?   Thanks, Barb,From: Carl Mehling  Sent: Monday, August 03, 2015 11:56 AM To: \'Barb\' Subject: RE: Fossil identification
Hi Barb,
Thanks for your email. I would agree that what you found is a fossil but I\'m having trouble doing much better than that! Based on the type of fossils common on Lake Michigan\'s shores, I feel strongly that this would be a marine invertebrate of some kind and would be hundreds of millions of years old. You should post this to the Fossil Forum for identification: They are an extremely adept group of professional and amateur paleontologists and should have more to add here.
Best,
Carl
 From: Carl Mehling  Sent: Monday, August 03, 2015 12:06 PM To: \'Barb\' Subject: RE: Fossil identification
Here\'s where you want to go: http://www.thefossilforum.com/index.php?/forum/14-fossil-id/  ),
(34,34,134,From: David Sent: Monday, August 03, 2015 10:20 AM To: Carl Mehling Subject: Fossil or \"\"Faux-sil\"\"?
	I’m attaching some photos of an interestingly shaped “rock” specimen I found in the Difficult Run stream in Northern Virginia.  It is circa 5 inches in length. On the odd chance it might be a fossilized skull of a small raptor — rather than a uniquely eroded piece of quartz aka “faux-sil\"\" — I thought it best to seek an expert opinion before I toss it.  I know such a find would be rare.  And if it were a fossil it would appear to be of the \"\"preserved flesh\"\" type which I understand would be even more rare.  Look forward to your response — whether “just a rock” or possible fossil worth further inspection.  Thanks and regards.  Dave

Begin forwarded message:
From: Dave
Subject: Photos
Date: August 3, 2015 at 10:07:51 AM EDT
To:

From: David Sent: Monday, August 03, 2015 5:26 PM  Subject: Re: Fossil or \"\"Faux-sil\"\"?
Thanks for your quick response, Carl.  Glad I ran it by you, in any event.  Regards.  Dave,From: Carl Mehling  Sent: Monday, August 03, 2015 12:01 PM To: \'David\' Subject: RE: Fossil or \"\"Faux-sil\"\"?
Hi Dave,
Thanks for your email. I’m afraid I have to go with “Faux-sil” here. It does seem to be a mischievous rock masquerading as a fossil. It’s lacking the finer details I’d love to see to confidently ID it as a fossil. Sorry for the boring news. But thanks for running it by us!
Best, Carl

From: Carl Mehling  Sent: Monday, August 03, 2015 5:34 PM To: \'David\' Subject: RE: Fossil or \"\"Faux-sil\"\"?
My pleasure!),
(35,35,135,From: Krista Sent: Monday, August 03, 2015 2:45 PM  Cc: Isa; Eliza Subject: Fossil Identification at Brooklyn Bridge Park
Hello Carl Mehling,
I am a Summer Associate at Brooklyn Bridge Park Conservancy. One of the big projects I am currently working on are classroom fossil displays for our new education center. All of the fossils came out of the park, and I\'ve done my best (googling) to try and figure out what they are. In total, I have six displays with approximately nine fossils (though not all are unique) in each display. I was wondering if you could help me with some of the identification, and if so, what would be the best method to present the fossils to you, as there are quite a few. 
Thanks so much,
Krista

From: Krista Sent: Tuesday, August 11, 2015 9:21 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
Hello Carl,
Sorry for the delay in reply! Here is the first set of pictures. Let me know if these are okay - if you need more, more angles...
Cheers,
Krista

From: Krista  Sent: Tuesday, August 11, 2015 9:23 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
Another set of pictures:

From: Krista  Sent: Tuesday, August 11, 2015 9:28 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
For the set in that last email, I\'m particularly curious about, for lack of a more scientific word, how shiny and glittery the inside of that broken fossil is. What caused it to develop like so? it\'s the only one we found like it - but then my breaking it was an accident and I haven\'t tried to break apart others to see if they also have surprisingly sparkly insides. Here is another set of photos:

From: Krista  Sent: Tuesday, August 11, 2015 9:29 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
And another set:

From: Krista  Sent: Tuesday, August 11, 2015 10:19 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
The previous sets were all from one display. These are from a second display. I\'ll gladly take any recommendations for rearrangement of the displays if you think there is a more sensible way to group them.
 
From: Krista  Sent: Tuesday, August 11, 2015 10:20 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 10:45 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
pictures from the third display

From: Krista  Sent: Tuesday, August 11, 2015 10:46 AM To: Carl Mehling Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 10:49 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 10:50 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 10:58 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
I may have accidentally sent the same pictures twice. Sorry! There are so many!

From: Krista  Sent: Tuesday, August 11, 2015 10:59 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:01 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:04 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:05 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:43 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:43 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:44 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:45 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 11:46 AM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:03 PM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:04 PM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:05 PM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:06 PM To: Carl Mehling Cc: Isa; Eliza Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:22 PM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:23 PM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:23 PM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:24 PM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park

From: Krista  Sent: Tuesday, August 11, 2015 12:29 PM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
Okay, that is all the photos. I know it isn\'t clear which are in which display, especially because I sent some pictures twice. I\'m going to load them to the drive and share them, and they will be organized there in folders by display. Yeek. Also, sorry that the first display photos are so large - I misread and thought over 500K originally. Let me know if you need more/better photos of any of them. I can remove them from the display and get more angles if necessary, but I thought to first try as is. Thank you so much for helping out! I really appreciate any information you can give!
Cheers,
Krista

From: Krista Sent: Tuesday, August 11, 2015 12:36 PM To: Carl Mehling Cc: Subject: Fossil Pictures - Invitation to collaborate
Here are all the photos organized by display.

From: Krista  Sent: Tuesday, August 18, 2015 3:39 PM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
Hello Carl,
I don\'t know if you\'re back yet or had the opportunity to start looking through my mass of pictures. I\'ve been working on editing them to crop and lighten them up, so I would recommend using the google file I shared with you, as I\'ve put all the edited photos - as well as the originals - in there. I\'m also numbering them all, for sake of ease in reference. 
Here is a link to the folder:
Thanks again for your help!
Krista

[I glanced and the new photos seemed much the same as the last batch]
From: Krista  Sent: Monday, August 24, 2015 9:20 AM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
Hello Carl,
Yeah, sorry about having so many - I thought it might be overwhelming. I\'m quite confident all of them are fossils - though several are the imprints of a fossil. Is it possible to distinguish more specifically than brachiopod what all the brachiopods are? Additionally, can you offer me any more information on fossils 4, 9, 17 (is it a blastoid?), 19, 28 (is it gryphaea/ Devil\'s Toenail?), and 34 (what type of echinoderm is it?). Do any appear to be bivalves to you?
Thanks so much!
Krista

From: Krista  Sent: Tuesday, August 25, 2015 12:08 PM To: Carl Mehling Cc: Eliza; Isa Subject: Re: FW: Fossil Identification at Brooklyn Bridge Park
Hey Carl,
Thank you so much for all your help! I appreciate all the effort you\'ve put into this - it\'s very useful to have more information regarding the time period and origin of the fossils, and I\'m grateful for your input on the individual identification!
Cheers,
Krista,From: Carl Mehling  Sent: Monday, August 03, 2015 5:38 PM To: \'Krista Loven\' Subject: RE: Fossil Identification at Brooklyn Bridge Park
Thanks for your email, Krista. I’d be happy to have a look at your finds. Please email me very sharp photos (no more than 5 and no larger than 500k) that include scale. Maybe do 5 or 6 per email.
I probably won’t be able to tell you much more than then general story behind them since they almost certainly originated from elsewhere, but I will make a good effort!
Just as a heads up, I will be away for the next two weeks and won’t be able to fully address this until then
Best, 
Carl

From: Carl Mehling  Sent: Monday, August 03, 2015 5:39 PM To: \'Krista Loven\' Cc: Isa; Eliza Subject: FW: Fossil Identification at Brooklyn Bridge Park
Sorry: Forgot to cc everyone!

[Krista sent me 29 emails on 11 August, each with several photos and then another with a link to all the photos. Only the text of the 29 emails was retained here]

From: Carl Mehling  Sent: Wednesday, August 19, 2015 3:56 PM To: \'Krista\' Cc: Eliza; Isa Subject: RE: FW: Fossil Identification at Brooklyn Bridge Park
Hi Krista,
Wow… This is a lot to look at. Some are pretty hard to make out and some may not even be fossils but I can’t be sure from the photos. However the overwhelming majority appear to be brachiopods. Brachiopods are marine invertebrates with 2 shells that at first glance look at lot like clams but are only distantly related and quite different. Brachiopods have been around for at least the last 540 million years and persist today. But during some time periods, like the Devonian, they were wildly abundant. I can’t at all be sure but I’d bet yours are Devonian and the rocks they are in were probably brought in from somewhere upstate. There is practically no chance that they originated in NYC. As for the sparkly material, I don’t recognize it but it is probably some mineral that filled in a void in the sediments that contained the brachiopods.
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 9:32 AM To: \'Krista\' Cc: Eliza; Isa Subject: RE: FW: Fossil Identification at Brooklyn Bridge Park
Hi Krista,
Sadly, I am no brachiopod expert and we currently have none here at the AMNH. So our brachiopod IDs can’t go any further.
4 & 9 definitely look like brachiopods to me.
17 & 19 are very hard to read but I think they are also a brachiopods. I don’t see a blastoid.
28 might be a bivalve or a brachiopod. Very hard to read. But it wouldn’t be a Gryphaea as that genus only goes back to the Jurassic and I definitely feel that these fossils are Paleozoic.
34 is extremely hard to read and may not actually be a fossil. I see no echinoderm.
Sorry I can’t be more definitive!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 12:24 PM To: \'Krista\' Cc: Eliza; Isa Subject: RE: FW: Fossil Identification at Brooklyn Bridge Park
Happy to offer whatever I can!),
(36,36,136,From: Michael  Sent: Tuesday, August 04, 2015 11:08 AM  Subject: Identification of fossil
I found this on the shore of the Vermilion River in Illinois. it\'s in the same area as the Mazon creek. (PENNSYLVANIA PERIOD). All my searching turned up nothing. Please can you help me. What was it?

From: Michael Sent: Tuesday, August 04, 2015 11:18 AM  Subject: Identification of fossil
I am an amateur.  I found this on the shore of the vermilion river in Illinois. It is the same area as the Mazon creek. Please help me. What was it?

From: Michael Sent: Tuesday, August 04, 2015 3:07 PM  Subject: RE: Identification of fossil
Thank you for the speedy response.  This specimen is very hard and heavy. Does that indicate to you that it might be petrfied. If so, how can I be certain? Disect and polish?,From: Carl Mehling  Sent: Tuesday, August 04, 2015 11:31 AM To: \'Michael\' Subject: RE: Identification of fossil
Hi Michael,
Thanks for your email. Looks like you found a stigmarian rhizomorph (often referred to as Stigmaria) of a lycopsid (club moss) tree. Lycopsids (such as Sigillaria and Lepidodendron) were one of the main ingredients in the PA coal that helped fire the Industrial Revolution. They were exceptionally common in the Pennsylvanian Period (~ 299-323 million years ago) and, as you know, this is the age of the Mazon Creek fossils. You\'ll sometimes hear stigmarian rhizomorph called “roots,” but these giant lycopsids weren\'t like modern trees in several respects (that\'s one of the things that makes them so interesting). If I have my head screwed on right, the rhizomorphs were support structures like modern tree roots but they were often photosynthetic, unlike modern tree roots. Many reconstructions have them exposed at the surface or in shallow water to they could access the sunlight. The dimples all of your specimen are where smaller rootlike structures radiated out from the rhizomorph. Typically, rhizomorphs are preserved as casts, not truly petrified remains, and yours has that look about it. Google “Stigmaria” for many images of these fossils. Nice find!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 04, 2015 3:49 PM To: \'Michael\' Subject: RE: Identification of fossil
Hi Michael,
It would be hard and heavy whether it was a cast or petrified. The only real way to tell would be the break/cut it transversely and observe the micro-texture. Polishing would certainly help here.
Best,
Carl),
(37,37,137,From: David Sent: Tuesday, August 04, 2015 2:54 PM  Subject: PA Fossil Identification Help
Dear Mr. Carl Mehling, 
During an excursion with my children today, August 4, 2015, I discovered two pieces of shale that featured what appear to be fossilized remains of some kind. Both pieces came from the same location along the base of the northern end of a quarry pit, Route 487 on Red Rock Mountain, within Ricketts Glen State Park, PA. 
Immediately upon finding the pieces, I noticed both had impressions of a scaly, reptilian type texture, similar to a snake\'s skin. Knowing that prehistoric animal fossils aren\'t too common in Pennsylvania, as opposed to plant fossils, I wanted to try and determine if these samples are indeed from an animal of some kind. 
Please be so kind as to lend your expertise to helping us identify what life form is represented in the photos included. 
Deepest gratitude,
David

From: David  Sent: Monday, August 17, 2015 2:14 PM  Subject: Re: PA Fossil Identification Help
Hi Carl, 
Thank you so incredibly much for your assistance. These will stir excellent discussions in class for my children! 
you\'ve made our day :)
Best, 
David,From: Carl Mehling  Sent: Tuesday, August 04, 2015 3:56 PM To: \'David\' Cc: Carl Mehling Subject: RE: PA Fossil Identification Help
Hi David,
Thanks for your email. I am about to leave on vacation, returning on the 17th. I won’t be able to give you a full answer until then but I will say that I agree that it is fossil and I feel strongly that they are both plants. Stand by!
Best, Carl

From: Carl Mehling  Sent: Monday, August 17, 2015 11:55 AM To: \'David\' Subject: RE: PA Fossil Identification Help
Hi again, David. Thanks for your patience. Your fossils look like Coal Age plants. 
The first is either a stigmarian rhizomorph (often referred to as Stigmaria) of a lycopsid (club moss) tree or a large branch from the same kind of tree. Lycopsids (such as Sigillaria and Lepidodendron) were one of the main ingredients in the PA coal that helped fire the Industrial Revolution. They were exceptionally common in the Pennsylvanian Period (~ 299-323 million years ago). 
You\'ll sometimes hear stigmarian rhizomorphs called “roots,” but these giant lycopsids weren\'t like modern trees in several respects (that\'s one of the things that makes them so interesting). If I have my head screwed on right, the rhizomorphs were support structures like modern tree roots but they were often photosynthetic, unlike modern tree roots. Many reconstructions have them exposed at the surface or in shallow water to they could access the sunlight via radiating, smaller rootlike structures. If yours is a rhizomorph, the ‘fuzz’ extending beyond the main structure would be these smaller structures. If this is a branch, these represent the thin, straplike leaves of the tree. 
The other specimen is harder to read but is likely the periderm of this same kind of tree. The periderm was the exterior, photosynthetic covering of the tree’s trunk.
Nice finds! Best, Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 9:54 AM To: \'David\' Subject: RE: PA Fossil Identification Help
My pleasure!),
(38,38,138,From: Jeffrey Sent: Wednesday, August 05, 2015 5:33 PM  Subject: A Fossil I Found On Cape Cod
Mr. Carl M. Mehling
Hello Sir. I found a fossil on Cape Cod last week at Chapin Beach, in the town of Dennis.
I am including some pictures I took so you can hopefully help me identify what it is.
The picture quality is fair to good. I can always take more and send them to you if need be. 
It appears to be that of an insect. you can clearly make out the body and what appear to be two delta shaped wings, and at the head there are what appears to be two antenna, but it could be a fish or a crab for all I know. 
I appreciate any time you can give in determining its identity and any other information.
Thanks again!
Sincerely,   Jeffrey

From: Jeffrey Sent: Tuesday, August 18, 2015 3:33 PM  Subject: More photos
Hello Carl,
Thanks for your efforts trying to identify this thing. I am sending you these pics as requested. I hope you can see details that you were
unable to in the previous ones. A friend of mine suggested trilobite also, but all of the pics I\'ve seen of those don\'t look like this one.
Thank you for all of your help.

From: Jeffrey Sent: Tuesday, August 18, 2015 9:52 PM  Subject: RE: More photos
Well that settles it then. Thank you so much for all of your help and please thank your fellow co-worker and friend Melanie as well. 
Sincerely, and my best wishes, Jeffrey,From: Carl Mehling  Sent: Monday, August 17, 2015 12:31 PM To: \'Jeffrey\' Subject: RE: A Fossil I Found On Cape Cod
Hi Jeffrey,
Thanks for your email. The photos are a bit hard to make out – they’re a bit fuzzy and the lighting is poor. But I think I am seeing a trilobite there. Trilobites are marine arthropods that lived on Earth from about 550-250 million years ago. If I’m seeing a trilobite what you have is the front half. And I can’t claim to know my trilobites very well but it could be something quite like Olenellus (https://www.google.com/search?q=olenellid&es_sm=93&source=lnms&tbm=isch&sa=X&ved=0CAkQ_AUoA2oVChMI5ZmR9MOwxwIVwTs-Ch1QGAdz&biw=1663&bih=989#nfpr=1&tbm=isch&q=olenellus). Trilobites of this kind are extremely old and rocks of this age do not occur on Cape Cod. In all likelihood, again, if this is a trilobite, it was transported from somewhere to the north by glaciers. Finding its true age would be very tricky. Can you maybe take some sharper pictures in sunlight? And strong light from the side could also bring up some details.
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 4:21 PM To: Melanie Subject: Possible Trilobite?
Hi Melanie,
Someone sent me this oddity found on Cape Cod at Chapin Beach, in the town of Dennis. Might it be a trilobite?
Thanks, Carl
[I attached the 4th of the new pictures]

From: Melanie  Sent: Tuesday, August 18, 2015 4:48 PM To: Carl Mehling Subject: RE: Possible Trilobite?
Looks like one to me…possibly a Cambrian olenellid (similar ones have been found in other parts of MA).

From: Carl Mehling  Sent: Tuesday, August 18, 2015 4:50 PM To: Melanie Subject: RE: Possible Trilobite?
I actually told him it might be an olenellid!!! Thanks!

From: Carl Mehling  Sent: Tuesday, August 18, 2015 4:53 PM To: \'Jeffrey\' Subject: RE: More photos
Hi Jeffrey,
I sent one of the photos to our curator of trilobites, Melanie Hopkins, asking if it might be a trilobite and she said:
“Looks like one to me…possibly a Cambrian olenellid (similar ones have been found in other parts of MA).”
Whew! I was right! And congrats on a pretty cool and rare find! And FYI the Cambrian was ~485-540 million years ago.
Best, Carl

From: Carl Mehling  Sent: Wednesday, August 19, 2015 11:16 AM To: \'Jeffrey\' Cc: Melanie Subject: RE: More photos
Our pleasure, Jeffrey! Congrats on a fine find!
-Carl),
(39,39,139,From: Greg Sent: Sunday, August 09, 2015 11:08 AM  Subject: Bones
Found this skeleton in Montana. 

From: Greg Sent: Sunday, August 09, 2015 11:08 AM  Subject: Bones

From: Greg Sent: Sunday, August 09, 2015 11:09 AM To: Carl Mehling Subject: Bones

From: Greg Sent: Monday, August 17, 2015 9:57 PM  Subject: Re: Bones
Bones are from Forsyth Montana, there are 2 broken off Spurs on the outside radius of the bone. I\'m puzzled by the plate things that are by the bones. I\'m in the process of getting a new internet server and can\'t look back to what pics I sent you. I do remember what I thought looked like a spinal column having a tight radius bend that kind of seemed peculiar. Plate things and 3/4\" diameter Spurs on the outside radius are an unanswered question for me. 

From: Greg  Sent: Wednesday, September 02, 2015 1:55 PM  Subject: Re: Fossils 
Other finds in that area indicate that area was under an ocean. 
I\'m leaning toward ammonite myself, any value to these?

From: Greg [mailto:gmoore@wildblue.net]  Sent: Wednesday, September 02, 2015 10:49 AM To: Carl Mehling Subject: Fossils 
Went back to Montana and took a day to poke around a little. Couldn\'t find the original fossil pile but we found a second similar one. This pile didn\'t have the blade things near it like the first one did.  They were scattered down the hill for 30\'. I put them together in an order that kind of looks like they fit. ,From: Carl Mehling  Sent: Tuesday, August 18, 2015 10:09 AM To: \'Greg\' Subject: RE: Bones
Hi Greg,
I still don\'t see any bones there. But I looked into the fossils near Forsyth and ammonites are indeed found near there. I think ammonite is a likely identification.
Best,
Carl

From: Carl Mehling  Sent: Monday, August 17, 2015 4:22 PM To: \'Greg\' Subject: RE: Bones
Hi Greg,
Thanks for your email. I\'ve had a look at your photos and feel strongly that it\'s not a skeleton. But it might be a fossil of some kind. I\'m having trouble making it out, however. Can you shoot it in bright light from a few angles? Right now I am thinking it could be a part of an ammonite. Ammonites are ancient, shelled relatives of octopuses. And in some areas of Montana they are very common. It might also help to have a tighter description  of where it was found.
Best,
Carl

From: Carl Mehling  Sent: Wednesday, September 02, 2015 1:44 PM To: \'Greg\' Subject: RE: Fossils 
Hi Greg,
They are still very hard to read but I still definitely think they are chunks of weathered ammonites rather than bones of any kind.
Best,
Carl 

From: Carl Mehling  Sent: Friday, September 04, 2015 2:52 PM To: \'Greg\' Subject: RE: Fossils 
Hi Greg,
We don\'t do appraisals but I can say that in many areas, especially certain areas in MT, these are very common.
Best,
Carl),
(40,40,140,From: Matt  Sent: Monday, August 10, 2015 7:02 PM  Subject: Fossil
Hi Carl, 
My kids found this in a stream we play in in north east Oklahoma. They think it\'s a tooth, after looking at your pics I\'m thinking coral.
Could you lend a hand?
Thanks in advance,
Matt

From: Matt  Sent: Monday, August 17, 2015 5:19 PM  Subject: Re: Fossil
Fantastic insight thank you so much!  My kids will love it, thanks again !
Matt,From: Carl Mehling  Sent: Monday, August 17, 2015 4:39 PM To: \'Matt\' Subject: RE: Fossil
Hi Matt,
Thanks for your email. No tooth or coral there but I\'d say there are definitely fossils! What you have is a chunk of limestone that at one time was the sea floor. The majority of the fossils in there (the circles, tubes, and rectangles) are molds of crinoid columnals. Crinoids are stemmed relatives of starfish that go back 100s of millions of years and are still found in today\'s seas, and columnals are the individual stacked elements of their stems. You also have at least one sea shell (a bivalve or a brachiopod) in there: the feathery-looking mark. The rocks of northeastern OK are all of Carboniferous in age (~300-350 million years old) and this works perfectly for a time when crinoids were incredible abundant. Nice find!
Best,
Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 9:55 AM To: \'Matt\' Subject: RE: Fossil
My pleasure!),
(41,41,141,From: Richard Sent: Tuesday, August 11, 2015 1:44 PM  Subject: 
Hello..I would like my egg checkedout.....I\'m out here in California. .it was found where they say there is not any dinoeggs-there...it  is for real!! 

From: Richard
Subject: Dinoegg
Date: August 11, 2015 1:44:08 PM EDT
To: Mark
Hello..my name is Rich Martinez. .I have this egg I need checked out...it was found where there aren\'t supposed to be any dinoeggs-found..
[Same photos attached]

From: Richard  Sent: Tuesday, August 18, 2015 1:14 AM
Subject: Dinoegg
Thankyou for your expertise hypothesis! it is greatly valued. ..I have made up \"my own version of what your looking at..1-nose or muzzle..   2-developing horn.. 3-head.. 4-tympanic membrane (not fully developed) 5-tail.. 6-body (not quite developed yet)..the only way to know for sure??..is....well.......CATSCAN.. 

From: Richard Sent: Tuesday, August 18, 2015 1:21 AM  Subject: Dinoegg
Also...this can be compared to \"reptile egg\"more like a turtle egg (which is round).& not oblong..like a chicken egg...

From: Richard Sent: Tuesday, August 18, 2015 1:37 AM  Subject: Dino egg
Fyi......this egg was found in the CENTRAL SIERRA NEVADA FOOTHILLS...the valley was a floodplain....and NOT a desert...like most people were taught.......that\'s why it\'s the MOST FIRTILE ground in the WORLD......and I am a native American. ....and ancestorstoral-storys-handed-down says so....

[Sent in response to first 18 August email above]

From: Richard  Sent: Tuesday, August 18, 2015 10:05 AM  Subject: Dinoegg
Thankyou anyways for your observation. ...Afterall. ..you are the expert......I will be seeking other opinions..and possibly catscan..to determine whether it \"is\"  or \"isnt\"...

From: Richard Sent: Monday, August 24, 2015 11:48 PM  Subject: Dinoegg
Hello Carl......I know you have already formed your opinion. ..And  I do appreciate your comments. ....but I\'m going to  send you this picture anyways. ..the flat surface of this thing was flat when it was found. ..but.im looking at it from this angle? ???and it\'s no longer flat...,From: Mark Sent: Tuesday, August 11, 2015 4:19 PM To: Carl Mehling Subject: Fwd: Dinoegg
one for you
m

From: Carl Mehling  Sent: Monday, August 17, 2015 5:06 PM To: \'Richard\' Subject: RE: 
Hi Rich,
I have had a look at your attached photos, and I\'d be very surprised if this was a fossil egg.  It somewhat resembles an egg, but the preservation and rock type are all wrong. The chips along the edge are what are called conchoidal fractures and are seen in obsidian, common glass, quartz, and other similar materials. These materials are unlike those found in genuine fossil eggs. Also, the ‘dings’ on the opposite face agree with a glassy material. Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine surface ornamentation or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. Your specimen lacks these eggshell features. Ironically, one strong indication that this is not an egg is that it is so egg-shaped: most fossil eggs are not \"egg-shaped\" because most fossil eggs come from non-avian dinosaurs and are everything from spherical to torpedo-shaped. 
Sorry to bring bad news,
Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 8:46 AM To: \'Richard\' Subject: RE: Dinoegg
I’m sorry, Rich. I just don’t see anything there that would convince me this was a genuine fossil egg. I have seen and handled hundreds of real fossil eggs and this just doesn’t come close. Sorry. –Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 9:47 AM To: \'Richard\' Subject: RE: Dinoegg
Hi Richard,
I have indeed formed an opinion, but I am always open to more evidence. It appears that the surface has been ground somewhat producing a series of parallel scratches. Unfortunately this new picture only strengthens my view that this can’t be a fossil egg. Sorry.
Best, Carl),
(42,42,142,From: janko Sent: Wednesday, August 12, 2015 7:09 AM  Subject: From river
Hi,
My father found this object in local river Sana (Prijedor, Bosnia and Hercegovina).
It is look like fossil. 
Unfortunately is broken in two part. 
Can you tell me something about this fossil?
With regards,
Janko

From: janko Sent: Monday, August 24, 2015 1:35 PM  Subject: RE: From river
Thanks for answer Carl, 
I am today back from holiday (16-24.8).
This information is very interesting for me.  
Object is founded on the bottom of river in the clay during swimming (clear luck). 
In local museum have no paleontology expert, and how I know this is first fossil founded on this way and location. 
If I find some sediments map or some information about geology of this area I will send.
For me is question: 
It is original location  where is founded or  water bring this object from some other location? It is possible to now?
With regards,
Janko

From: janko Sent: Tuesday, August 25, 2015 2:46 PM To: Carl Mehling Subject: RE: From river
Hi Carl, 
I am found geology map of this area, but with local language (for translation use Serbian or Croatian, it is same language). I hope that can some help.
This map is from Former Yugoslavia Ministry of Defence, it was confidential document. Probably better map does not exist.
River normaly is not strong, but have big amplitude. Last year have max. level ever at almost 6m, and this year have min. level ever with -0.20m at same point.
With regards,
Janko

From: janko Sent: Tuesday, August 25, 2015 4:33 PMSubject: RE: From river
Hi Carl,
We will try find more fossils!
If find something I will send new picture.
Thanks for answers.
With regards,
Janko,From: Carl Mehling  Sent: Monday, August 17, 2015 5:14 PM To: \'janko\' Subject: RE: From river
Hi Janko,
Thanks for your email. I’ve had a look at your photos and I’m pretty sure you have a mammoth molar there. That is pretty exciting! Unfortunately, I know nothing about the sediments of your area so I can’t guess and age. But mammoths are fairly recent animals only going back to about 5 million years. Very nice find!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 9:36 AM To: \'janko\' Subject: RE: From river
Hi Janko,
I would bet it originated where you found it. It is pretty large and unless that river is very strong it would be hard to move. But I think to be certain you would need a skilled geologist to look at the locality in person.
Best, Carl 

From: Carl Mehling  Sent: Tuesday, August 25, 2015 3:33 PM To: Ross Subject: FW: From river

Any interest in a mammoth tooth from Bosnia and Herzegovina?
[Included content from Janko’s first and last email, his maps, and one shot of the tooth]

From: Ross Sent: Tuesday, August 25, 2015 3:36 PM  Subject: RE: From river
hi carl, sorry, no. r

From: Carl Mehling  Sent: Tuesday, August 25, 2015 3:42 PM To: Ross Subject: RE: From river
Thanks!

From: Carl Mehling  Sent: Tuesday, August 25, 2015 3:35 PM To: \'janko@teol.net\' Subject: RE: From river
Hi Janko,
Looks like where you found it is in the Kvartar, which has to be the Quaternary. And since mammoths went extinct in the early part of the Quaternary, the tooth must be Pleistocene in age (~10,000-1.8 million year old). You should go out and look for more fossils while the water is low!
Best, Carl 

From: Carl Mehling  Sent: Tuesday, August 25, 2015 4:51 PM To: \'janko@teol.net\' Subject: RE: From river
Sounds good!),
(43,43,143,From: tim Sent: Wednesday, August 12, 2015 2:41 PM  Subject: fossil find near Roswell nm
Good day sir, I was out exploring near the Pecos River east of Roswell NM and found what I believe to be a fossil of the front toe or claw from an early crocodillian or turtle. Friends have found other croc fossils in the area so by the shape I thought it just might be. Another friend said it might be from a turtle. I would appreciate any input.
Thanks 
Tim,From: Carl Mehling  Sent: Monday, August 17, 2015 5:20 PM To: \'tim\' Subject: RE: fossil find near Roswell nm
Hi Tim,
Thanks for your email. Unfortunately, I don’t think you have a fossil there. It’s lacking the fine details I would like to see to confidently ID it as a fossil. It looks a lot like a flint nodule: one of the most notorious kinds of fossil mimics.
Sorry for the bad news, Carl),
(44,44,144,From: Jill Sent: Thursday, August 13, 2015 4:30 AM  Subject: fossil identification
hi, I think I found a fossil on the beach, and am hoping it can be identified, I found your email address on  AMNH site.  It was found on Emsworth Beach (a stoney beach) in the South of England while I was on holiday. It measures roughly a 1.5 cm. but was difficult to measure as it was on a large irregular shapes rock. I think there are two smaller shapes coming out of the top of the larger shape but I\'m not sure. You help would be greatly appreciated.
J.

From: Jill  Sent: Monday, August 17, 2015 5:37 PM  Subject: Re: fossil identification
Thank you for your response.  As a beginner fossil enthusiast, this is exciting ,From: Carl Mehling  Sent: Monday, August 17, 2015 5:35 PM To: \'Jill\' Subject: RE: fossil identification
Hi Jill,
Thanks for your email. You have found a beautiful mold of an echinoid: a sea urchin. These are very common fossils on the south coast of England. It looks like the rocks where you found this are Eocene in age (~34-55 million years old). Nice find!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 8:41 AM To: \'Jill\' Subject: RE: fossil identification
My pleasure!),
(45,45,145,From: Lauren Sent: Friday, August 14, 2015 9:51 AM  Subject: Fossil Identification
I was following a Washington rockhounding book\'s directions for common opal when I found this. It was at a diatomaceous earth mine north and across the river from the ginkgo petrified forest. I just read about the whale found in diatomaceous earth that changed the theory about it depositing slowly. I know most people don\'t think fungus can be preserved. I picked this piece up because it looked really strange, not thinking it was a type of fungus. I had it on my  dining room table when my step-son-in-law found it and said it looks just like a turkey tail mushroom. So, maybe you know what it is? ,From: Carl Mehling  Sent: Tuesday, August 18, 2015 8:57 AM To: \'Lauren\' Subject: RE: Fossil Identification
Hi Lauren,
Thanks for your email. I can certainly see a strong resemblance to a shelf fungus here. But I think it is much more likely to be a calcite cave formation. The growth of calcite and the growth of shelf fungi are actually quite similar and can result in very similar shapes. Fossil shelf fungi are known but are exceptionally rare, which is one reason I am shying away from that ID. But the color, texture, and structure of the piece, especially the side opposite the “fungus” is very consistent with a calcitic cave decoration. Might there be nearby limestone deposits near where you found this?
Best, Carl),
(46,46,146,From: Rick Sent: Saturday, August 15, 2015 9:22 PM  Subject: Hi Carl!
Hi Carl!
Sorry to bother you again but Tannar was wondering about these.  As always, we really appreciate your time in helping us!  THANKS!  Rick
Both of these are small imprints.

From: Rick  Sent: Tuesday, August 18, 2015 9:34 AM  Subject: Re: Hi Carl!
As always. THANKS!!!!!,From: Carl Mehling  Sent: Tuesday, August 18, 2015 9:24 AM To: \'Rick Bunting\' Subject: RE: Hi Carl!
Hi Guys!
That first one sure looks like a branching bryozoan – something that fits in nicely with the type of fossils you’ve been finding. Sadly, the second one could be almost anything. I agree, based on the common context, that it is probably a fossil, but I can’t even take the ID beyond that!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 10:19 AM To: \'Rick Bunting\' Subject: RE: Hi Carl!
My pleasure!

[See also 1 July 2011, 5 August 2012, 4 September 2013, 31 May 2015]),
(47,47,147,From: Larry  Sent: Sunday, August 16, 2015 1:52 PM  Subject: What is it?
Carl Mehling,

From: Larry
Sent: Tuesday, August 18, 2015 11:38 AM
Subject: Re: What is it?
Hi Carl,
Yes, this was found in Ohio.
Thank you so much for the information. 
Take care. 
Larry,From: Carl Mehling  Sent: Tuesday, August 18, 2015 9:44 AM To: \'Larry\' Subject: RE: What is it?

Hi Larry,
Thanks for your email. It looks like your text may not have made it to me so I don\'t know where this was found but if I had to guess I\'d say maybe somewhere in MI, OH, IN area? What you have is a gorgeous horn coral. Horn corals (a type of rugose coral) lived from about the beginning of the Ordovician to the end of the Permian (~488-250 million years ago) so you have a pretty old fossil there. For perspective, the oldest known dinosaur fossils are ~230 million years old. Nice find!
Best,
Carl 

From: Carl Mehling  Sent: Tuesday, August 18, 2015 12:56 PM To: \'Larry\' Subject: RE: What is it?
My pleasure!),
(48,48,148,From: Steven Sent: Sunday, August 16, 2015 10:43 PM  Subject: Please help identifying this fossil
Hi Carl,
My daughter found this in Mexico and we wonder what it is (was). Btw, it looks like one fossil is on the fossil of a bone (the white part)
Thanks!

From: Steven Sent: Tuesday, August 18, 2015 10:27 AM
Subject: Re: Please help identifying this fossil
Hi Carl,
Thanks very much for the response.  On second look, the white piece does look like a weathered piece of coral and it was found on the sea shore!  The worm tube in interesting.  I looked this up on Google and I couldn\'t find any that looked as scaly as mine - maybe I just have the best looking example.
Thanks very much - this is a great service of the museum, Steven,From: Carl Mehling  Sent: Tuesday, August 18, 2015 9:49 AM To: \'Steven\' Subject: RE: Please help identifying this fossil
Hi Steve,
Thanks for your email. I\'ve had a look at your photo and feel pretty strongly that it is not a fossil. It appears to be a waterworn piece of coral with a weathered worm tube attached to it. I think it wouldn\'t be old enough to be  fossil. But it\'s a pretty cool find anyway!
Best,
Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 10:43 AM To: \'Steven\' Subject: RE: Please help identifying this fossil
My pleasure, Steven. Glad to help!),
(49,49,149,From: Robin  Sent: Monday, August 17, 2015 7:34 PM  Subject: Found this on the beach in Florida
Hi Carl, I found this half-buried in wet sand during low tide in NE Florida, near Jacksonville, a week ago. it\'s very heavy, definitely fossilized (makes that China plate sound when tapped), and has lots of great texture and detail. The top of it has a \'socket\' look to it.  Any ideas? Thanks, Robin
Found This In Florida
Started by crlentz, Yesterday, 11:10 AM
Last week, half-submerged in wet sand, near Jacksonville Beach. it\'s very heavy, and has lots of great textures and details. Some parts look spongey. Definitely a fossil, makes that China dinner plate sound when tapped. I\'d love to know what it is. I posted on another forum and someone thought it might be seal or dolphin related. Someone else suggested an ankle bone. It has a socket feel to it at the \'top.\' Any ideas? 
Auspex Posted Yesterday, 11:28 AM
It is a calcaneum, a \"heel\" bone, but I do not know from what animal.

crlentz Posted Yesterday, 11:32 AM
that\'s what the guy at AMNH thought, but he said to post it here to maybe narrow it down. Thanks for your quick response... 

Fossildude19 Posted Yesterday, 12:00 PM
Try comparing to the
Regards,
Tim

crlentz Posted Yesterday, 01:08 PM
Yes, this is definitely in that family of bones...hard to tell which this is, it\'s pretty thick, not at all slender like the deer, but with more heft than the cow...any idea how old it could be? 

Troodon Posted Yesterday, 01:43 PM
Welcome to the forum. Nice find. We have a couple of experts in this forum that I think can provide you an answer. 

Harry Pristis Posted Yesterday, 02:48 PM
It appears to be a camelid calcaneum.  Species is indeterminate, but the Florida Pleistocene is dominated by lamine (llamas) camelids.  An unusual beach find, I\'d say.

jpevahouse Posted Yesterday, 05:41 PM
Definitely camel, the inward curve in the middle is characteristic of camel. Bison calcaneum has straight sides, horse has a more squared overall shape. Nice find.

crlentz Posted Yesterday, 07:20 PM
Wow camelid calcaneum sounds a lot more exciting than cow heel. Thanks so much for your help and enthusiasm. I\'ve collected sharks\' teeth from that beach my whole life, this is definitely my most exciting discovery (and there have been some great teeth!). 

From: Robin Sent: Tuesday, August 18, 2015 7:48 PM  Subject: Re: Found this on the beach in Florida
Thanks Carl, that forum works quickly!  The general conclusion is camel heel, from Pleistocene era Florida. What fun!
Robin,From: Carl Mehling  Sent: Tuesday, August 18, 2015 10:02 AM To: \'Robin\' Subject: RE: Found this on the beach in Florida
Hi Robin,
Thanks for your email. Looks like you found yourself a fossil mammal calcaneus, or heel bone. I don’t know my mammals well enough to do much better than that, however. You should post this to the Fossil Forum. They are a huge community of very adept professionals and amateurs and a good number of them specialize in Florida fossils. See what they say. Nice find!
Best, Carl

From: Carl Mehling  Sent: Wednesday, August 19, 2015 11:10 AM To: \'Robin\' Subject: RE: Found this on the beach in Florida
I knew they’d know, Robin. Great group! The Fossil Forum is my morning coffee – I am in the Fossil ID discussion all the time.
I was tempted to guess camel but it would’ve only been a rough guess and I don’t like talking outside my expertise! Great find!
-Carl),
(50,50,150,From: Brian Sent: Tuesday, August 18, 2015 1:28 AM To: Carl Mehling Cc: Brian
Subject: What am I looking at here
Found your email address on AMNH.org. I\'m actually a previous Smithsonian employee myself, from back after I graduated college. Thanks for the offer to review samples. 
I found this rock when I took a wrong turn on a trail along Basin River in a glacier valley of Juneau, Alaska earlier this week. Never seen anything like it! Could you help me identify it?

From: Brian W. Miller [mailto:bmiller@mercworks.com]  Sent: Tuesday, August 18, 2015 12:51 PM  Subject: Re: What am I looking at here
Thank you Carl. Really appreciate the prompt response too! I\'ll continue to investigate it but it\'s a welcome addition to my collection either way. 
Will keep you posted if I learn anything to the contrary. Thanks again. 
Kind regards,
Brian,From: Carl Mehling  Sent: Tuesday, August 18, 2015 10:13 AM To: \'Brian\' Subject: RE: What am I looking at here
Hi Brian,
Thanks for your email. I\'ve had a look at your photos and feel pretty sure it\'s not a fossil. It lacks the finer details I would like to see in order to confidently ID it as a fossil. I think it is some kind of mineral growth but that\'s outside my expertise. Sorry!
Best,
Carl

From: Carl Mehling  Sent: Tuesday, August 18, 2015 12:58 PM To: \'Brian W. Miller\' Subject: RE: What am I looking at here
My pleasure!),
\"(51,51,151,From: Aris Timo [mailto:aries_tmoreboy@yahoo.com]  Sent: Tuesday, August 18, 2015 8:26 PM  Subject: Whale Fossil from Rote Island, Indonesia
Dear Sirs. I\'m Aris Timo, 35 years old. I\'m working for Tourism Office of Rote Ndao regency of Indonesia, the southernmost regency of Indonesia. I have some photos which I took from the second floor of our regent office. The photos which according to some friends are whale fossil, are placed on a table as here is no museum yet. I don\'t know wheter they have been officially identified or not but I hope they would be useful for your Fossil Research/Identification. Thank you.
Sincerely yours, 
Aris. 

From: Carl Mehling  Sent: Wednesday, August 19, 2015 11:15 AM To: \'Aris Timo\' Subject: RE: Whale Fossil from Rote Island, Indonesia
Hi Aris,
Thanks for your email. I’d be happy to have a look at your find. Please email me very sharp photos (no more than 5 and no larger than 500k) that include scale.
Best, 
Carl

From: Aris Timo [mailto:aries_tmoreboy@yahoo.com]  Sent: Friday, August 21, 2015 10:06 PM  Subject: Bls: Whale Fossil from Rote Island, Indonesia
Hi Carl,
Here are another photos for you. Hoping that they are much better than those first. 
God Bless
 
 		 	 	 	 	 
				IMG_5750.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5743.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5747.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5751.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5746.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5748.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5754.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5755.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5744.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5752.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 



 
 		 	 	 	 	 
				IMG_5753.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5756.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5757.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5759.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5749.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5758.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 


 
 		 	 	 	 	 
				IMG_5745.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
						
 



 







 		 	 	 	 	 
				IMG_5760.JPG
Aris Timo berbagi dari Dropbox		
						
				Lihat di www.dropbox.com	Lihat preview menurut Yahoo		
							
						

From: Carl Mehling  Sent: Monday, August 24, 2015 4:25 PM To: \'Aris Timo\' Subject: RE: Whale Fossil from Rote Island, Indonesia
Hi Aris,
Thanks for the photos. I agree that you have whale bones there. But I strongly suspect they are modern rather than fossils. The large skull on the table looks a lot like a sperm whale to me. Unfortunately, I don’t think is much more I can tell you about them.
Best, Carl ,),\"
(52,52,152,From: Susan  Sent: Wednesday, August 19, 2015 2:23 PM  Subject: Please help identify rock with trace fossils
Attached are pictures of one of the larger rocks with trace fossils.
We were excavating our back/side yard and found rocks of various sizes. Very interesting trace fossils we hosed them off and are keeping under our shed and some in basement. They seem too interesting to discard.
I\'ve found some very good websites, one being http://www.crinus.info/before%20and%20after.html. I wondered if you could please tell us something about them. (Like what era, rock formation, what trace fossils are there, etc.)
We are told our neighborhood in Zelienople, PA Butler county was built 25 to 30 years ago and our house was one of the last to be built. Our neighbor speculated that much fill from our neighborhood site was dumped here mainly from other sites of neighborhood but who knows where else the rocks came from. There was a lot of light brown clay and rocks and gray clay further towards base  of approx. 15\' excavation below house grade.
Any information would be greatly appreciated.
Thank you
Susan

The larger rocks are 32\"x24\", The second larger rock is 29\" at it\'s widest width.
Many others are hand sized and some medium too.
Rock with leaves I didn\'t want to carry it through woods over our mountain. The last two pictures are along the Sandy Creek Bike Trail while biking the Allegheny Rails to trails in PA.
Wondered what that one might be...
p.s.s. Would appreciate suggestions to who may benefit from the larger rocks for display to keep, like a fossils exhibit, getting it into the hands it should be in. I like some of the smaller and medium sized ones to keep myself and wonder if in a life time I could learn how to clean practicing on smaller pieces.

From: Susan Sent: Thursday, August 20, 2015 12:16 PM  Subject: Re: Please help identify rock with trace fossils
Carl,
Thank you so very much for your reply.
With the vast information available on the internet, I would have to be a scientist to make sense of it. The information of the rocks being Pennsylvanian will help tremendously in researching more information.
I will also try the fossil forum as well. 
Thank you so much again for your time, information and reply. It is greatly appreciated!
Sincerely,
Susan,From: Carl Mehling  Sent: Wednesday, August 19, 2015 4:26 PM To: \'Susan\' Subject: RE: Please help identify rock with trace fossils
Hi Susan,
Thanks for your email. Sadly, I can’t readily identify any trace fossils on your slabs. They may be trace fossils but they may also be sedimentary features that have nothing to do with organisms. Trace fossils are not my forte. It does look like all of the rocks in your area are Pennsylvanian (~295-324 million years ago)  in age so if they truly are local, that would be their age. You should also post this to the Fossil Forum for identification: They are an extremely adept group of professional and amateur paleontologists and should have more to add here.
Best, Carl

From: Carl Mehling  Sent: Thursday, August 20, 2015 1:38 PM To: \'Susan\' Subject: RE: Please help identify rock with trace fossils
My pleasure!),
(53,53,153,From: kel  Sent: Thursday, August 20, 2015 5:57 AM  Subject: Spinosaurus fossill?
Dear Carl Mehling at The Americam Museum of Natural History,
Found this on a beach 
I believe it has been eroded of an reef area that was once landpart of the landmass subject to volcanic activity.  
From what I have read I feel that it is the embryo of a spinosauridae.
The area is beaches, mangrove swamps. 
Would be interested in your opinion.
Sincerely Kel

[File name 1. serated skin]

[File name 2. folded sail on back]

[File name 3. sail]

[File name 4. sensory nodules on snout]

[File name 5. teeth]

[File name 6. feet curled up]

[File name 7. side angle]

[File name 8. flip side of fossil]

[File name 9. associated egg similar location]

[File name 10. flip side of associated egg]

[File name 11. clawed foot]

[File name 12. two 3 claw kicking JPG]

From: kel Sent: Friday, August 21, 2015 5:32 AM  Subject: Spinosaurus fossill
Maybe there has been a lot of detail lost in the translation re computers and files I\'ll try and draw what I see on the image and include it. 
As far as reading is concerned I\'ve read everything I could find on this species, books, online searches. I know that nothing has been found re dinosaur embryo…...yet. 
This is a first it has been protected by silt, sand or consumed another dinosaur and somehow preserved. 
I just kept looking at it and features kept falling into place. 
I am aware that people look at water warn rocks and imagine \'rogue test style\' what they would like to see but there is just too much evidence here. Too many things in the right place. The size of the egg 4 to 6 inches typical therapod egg, this is 4 inches. It has four limbs, Large feet, smaller arms, three prominent claws on each, crocodilian snout shape, teeth, prominence down back sail area, tail is wrapped around (can\'t quite tell where) I can see a serrated patten on skin, it\'s subtle but present.
I\'m going to send it to some other museums I\'ll let u know what they say.
To me this is the closest we have come to looking a real dinosaur apart from mummified skin and the classic bones. it\'s like a snap shot. I know u think I\'m a kook. I must say I am a novice but keep looking at this. it\'s a reality. Most people I have shown it to see it, some don\'t. I think it\'s unique and exhibit worthy.
Kel 

From: kel Sent: Friday, August 21, 2015 9:07 PM  Subject: Re: Spinosaurus fossill
Thanks Carl.
Kel,From: Carl Mehling  Sent: Friday, August 21, 2015 10:05 AM To: \'kel\' Subject: RE: Spinosaurus fossill
Hi Kel,
All I can really say at this point is that I have handled and seen up-close all manner of fossils and a huge number of fossil eggs and your find falls short on all the details that would confirm it as such.
Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine, and specific kind of surface ornamentation, which is lacking here, or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – I see nothing that could be described as eggshell here. Also, the entire animal with all of its flesh would be incredibly unexpected – bones would be much more likely, as rare as they are.
And as you know, Spinosaurus is only known from North Africa, so if this was found anywhere else that would also speak against this being any kind of Spinosaurus fossil.
Please do seek other opinions because mine is merely one. But have you considered how you will react if several experts echo my opinion?
Best,
Carl

From: Carl Mehling  Sent: Thursday, August 20, 2015 11:01 AM To: \'kel\' Subject: RE: Spinosaurus fossill?
Hi Kel,
Thanks for your email. I’ve had a look at your photos and see no details at all that would convince me this is a fossil. Both pieces appear to be water worn and cracked pieces of sandstone. Unfortunately, I can’t see any of the features you cite in your file names. Can you tell me what you read that convinced you this was a spinosaurid embryo? As of yet, none have been found. 
Best,
Carl),
(54,54,154,From: brink Sent: Thursday, August 20, 2015 11:18 AM To: Carl Mehling Subject: Fossil?,From: Carl Mehling  Sent: Thursday, August 20, 2015 11:34 AM To: \'brink\' Subject: RE: Fossil?
Hi Mystery Person,
Thanks for your email. I’ve had a look at your photos and can’t see any details that would convince me it’s a fossil. It may be, but it isn’t showing details I would need to see in order to make a confident fossil ID. My feeling is that it is some kind of non-organismal geologic oddity.
Best, Carl),
(55,55,155,From: joel  Sent: Thursday, August 20, 2015 6:20 PM  Subject: Fossil identification
Hello my name is Joel. I was wonderingif you could help me out with trying to identify a fossil I found in a river bed while in Arkansas. I have attached an image of what I believe is a fossil of some sort. 

From: joel  Sent: Sunday, August 23, 2015 5:55 PM  Subject: Fwd: RE: Fossil identification
Hello Carl
I have attached a few few more images and few close up\'s. I hope the light will be good enough. Also for a little more info on were I found this was river called Buffalo river located in Arkansas. When you wet the rock the fossil stands out more. Thanks for taking time on this.
Joel

From: joel  Sent: Monday, August 24, 2015 5:38 PM  Subject: RE: RE: Fossil identification
Thanks for trying. The weird thing with it is when you get it wet more of the details come out. I do appreciate your time on it though.

From: joel  Sent: Tuesday, August 25, 2015 9:56 AM  Subject: RE: RE: Fossil identification
Do you have any recommendations on how to try to figure out what it possibly could be? 

From: joel  Sent: Tuesday, August 25, 2015 10:41 AM  Subject: RE: RE: Fossil identification
Carl
Thanks for all your time. Also thanks for helping to point me in the right direction.,From: Carl Mehling  Sent: Friday, August 21, 2015 10:11 AM To: \'joel\' Subject: RE: Fossil identification
Hi Joel,
Thanks for your email. I have to say I’m having some trouble making out your find. Can you shoot it in direct sunlight? And from a couple of angles? That might clarify some of the details. I’m curious!
Best, Carl

From: Carl Mehling  Sent: Monday, August 24, 2015 4:35 PM To: \'joel\' Subject: RE: RE: Fossil identification
Hi Joel,
Thanks for these – they are definitely better. Unfortunately, I still don’t know what it is. I can say that I strongly doubt it’s a fossil: it lacks the finer details I’d want to see in order to confidently ID it as a fossil.
Sorry I couldn’t be of more help.
Best,  Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 9:43 AM To: \'joel\' Subject: RE: RE: Fossil identification
Wetting certain types of fossils is definitely a great way to bring out certain details. I just wish I could tell you more – it is a very intriguing geologic wonder!

From: Carl Mehling  Sent: Tuesday, August 25, 2015 10:23 AM To: \'joel\' Subject: RE: RE: Fossil identification
Hi Joel,
The best thing to do would be to take it to a nearby natural history museum that has a resident geologist or paleontologist that might know the local story better. And you should post it to the Fossil Forum, which is a huge online group of very adept professionals and amateurs. See what they might add!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 12:18 PM To: \'joel\' Subject: RE: RE: Fossil identification
No sweat!),
(56,56,156,From: frito Sent: Friday, August 21, 2015 12:31 PM  Subject: fossil id.
Hi Carl, I was unable to send on your site, because of POP3 failed? So I\'m attempting an email with these photos of samples from the Bandera, Tx. hill country area NW of San Antonio about 50 miles. They were surface finds, and well worn. Unknown 1, polished:unknown 2, 1 1/2\" x 1 1/4\" x 1\" thick.,From: Carl Mehling  Sent: Monday, August 31, 2015 3:44 PM To: \'frito\' Subject: RE: fossil id.
Hi Frito,
Thanks for your email and your patience. The first fossil you poster looks a lot like an ammonite. Ammonites are extinct, shelled relatives of today’s octopuses. They went extinct around 65 million years ago in the Late Cretaceous. The rocks around Bandera are all Cretaceous so this fits very well. The white marks in the second specimen you posted certainly appears to be a fossil but not enough of it is exposed for me to make a worthwhile guess as to what it is. The last one appears to be a piece of chert rather than a fossil. Two out of three ain’t bad!
Best, Carl),
(57,57,157,From: cj Sent: Friday, August 21, 2015 6:40 PM  Subject: Marine turtle fossil
Hi. I found this turtle fossil in a ravine behind my barn here in NW Ga.   
Its cast in limestone.
Please let me know if you have any information on this treasure.
Sincerely,
CJ

From: cj
Sent: Monday, August 24, 2015 4:28 PM
Subject: Re: Marine turtle fossil
Hi, Mr. Mehling.  Thank you for your quick reply. I did not receive the attachments.  However,  there are six pieces to the shell which are visible.  I truly feel confident your views would be different if you were to inspect this in person.
Unfortunately,  New York is too far away for a quick drive.
There is evidence of a rose quartz vein on the posterior of the stone.   
Thank you, again, for your time and opinion.
Sincerely,
CJ

From: cj Sent: Monday, August 24, 2015 4:42 PM  Subject: Re: Marine turtle fossil
Thank you..there are three other pieces to the shell which cannot be seen in this photograph.
This particular area is rich in fossils.  I have a specimen of coral from the same material positively identified...
Thank you, again, for your time.
CJ

Marine Or Land Turtle. Photo Included!:)
Started by Ridge/valley collector, Yesterday, 09:16 PM
Hi! I\'m new to this and my data is so slow.! This specimen is from NW Ga home to The valley and ridge region. I\'m enjoying your forum! Its limestone. Any thoughts, please? Thank you!

Auspex Posted Yesterday, 10:00 PM
From the image, I believe it to be a suggestively weathered rock.

Ridge/valley collector Posted Yesterday, 10:11 PM

ynot
Posted Yesterday, 11:09 PM
Welcome to the forum!
It would help if You could clean the rock a little better. Try a tooth brush with some soap and water. If that does not work use some vinegar with the soap.
Better focus on the photo would also help.
Tony

Ridge/valley collector
Posted Today, 04:03 AM
Thank you, Tony. I wasn\'t sure what would be best. I will post the new photos soon.  

edd Posted Today, 04:14 AM
I think it\'s still just a rock.

Auspex Posted Today, 07:51 AM
The Paleozoic rocks in your area have an ancient and tortured history, predating turtles of any kind.

Plax Posted Today, 08:54 AM
wish we had the Valley and Ridge Province in NC. Going South It makes a sharp right in Virginia and goes completely around North Carolina. This is why North Carolina has no (or almost no) paleozoic fossils. North West Georgia reminds of the Valley and Ridge Province in my home state of Pennsylvania. Should have plenty of Paleozoic Fossils in your neighborhood. I\'d google \"Georgia Paleozoic fossils\" and see what you get.

Ridge/valley collector Posted Today, 10:01 AM
Thank you, All. I appreciate Your input. This area is loaded with fossils. Just 15 miles away from here there have been studies by colleges. Regardless...its a beautiful specimen. Thanks again for the advice on cleaning. ,From: Carl Mehling  Sent: Monday, August 24, 2015 4:01 PM To: \'cj\' Subject: RE: Marine turtle fossil
Hi CJ,
Thanks for your email. I\'ve had a look at the photos and feel pretty convinced it\'s not a fossil turtle. There are subtle details that lead me away from seeing a turtle. In my attached image at the 3 places marked \"A\" you can see a clear, blocky, crystalline structure. I\'ve never seen fossil bone preserve like this. Also, turtle shell bones almost never meet with four bones sharing a corner. This would form an X-shaped junction as can be seen in your find. Turtle shell bones almost always meet with three bones sharing a corner in a Y-shaped junction. Finally, the rocks in NW GA are all much older than the oldest turtle.
Sorry for the bad news,
Carl

From: Carl Mehling  Sent: Monday, August 24, 2015 4:37 PM To: \'cj.lively@yahoo.com\' Subject: RE: Marine turtle fossil
So sorry about forgetting the attachment: here it is.),
(58,58,158,From: Clayton  Sent: Friday, August 21, 2015 7:07 PM  Subject: Dinosaur Bones
Hello,  I recently received this piece through an estate and would like to put a Dinosaur to the bone.  I believe I may have figured some of it out, but not all.  The \"MC\" I believe stands for Metacarpal, the IV for the 4th digit, the SIN is a mystery.  It is also written \"Gondenans-les-Moulins 1952\" this is a region in France, but cannot find any information regarding this find or site.  I had done some matching on line and thought at first it to be a Plateosaurus, but the 4th does not compare.  Here are a few Pics  This may take several emails

From: Clayton Sent: Friday, August 21, 2015 7:09 PM To: Carl Mehling Subject: MORE PICS

From: Clayton  Sent: Tuesday, August 25, 2015 7:51 AM To: Carl Mehling Subject: Re: Dinosaur Bones
Thank you for your time and quick reply.  Best regards, Clayton,From: Carl Mehling  Sent: Monday, August 24, 2015 4:17 PM To: \'Clayton\' Subject: RE: Dinosaur Bones
Hi Clayton,
Thanks for your email. I’ve had a look at your photos and can say that it definitely isn’t a dinosaur. What you have is almost certainly a fossil cave bear finger. ‘MC IV sin.’ would stand for ‘left 4th metcarpal’ because ‘sin.’ Is an abbreviation for ‘sinistral’ or left. And as it turns out fossil cave bears are well–known from the cave of Gondenans-les-Moulins. Nice acquisition!
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 9:48 AM To: \'Clayton\' Subject: RE: Dinosaur Bones
My pleasure!),
(59,59,159,From: james  Sent: Monday, August 24, 2015 2:48 PM To: Carl Mehling Subject: Possible fossil?
Found this in a creek a few weeks back and was wondering what I found. Thanks for any info. Nick

From: james Sent: Tuesday, August 25, 2015 10:07 AM  Subject: RE: Possible fossil?
Thanks so much for the quick response.  I found it laying in a creek behind our house. One side of the creek is a large rock ledge, where I\'m assuming it came from. The tunnel does make sence. Thank you so much.,From: Carl Mehling  Sent: Tuesday, August 25, 2015 9:41 AM To: \'james dillon\' Subject: RE: Possible fossil?
Hi Nick,
Thanks for your email. Your find has very few details to suggest it was a fossil but it is still very suggestive. If it is a fossil it is most likely to be a trace fossil, maybe some kind of tunnel made by an aquatic burrowing animal in wet mud. Can you tell me where it was found? With that information I might be able to see how likely that ID might be.
Best, Carl

From: Carl Mehling  Sent: Tuesday, August 25, 2015 10:14 AM To: \'james dillon\' Subject: RE: Possible fossil?
My pleasure!),
(60,60,160,From: Sergio  Sent: Tuesday, August 25, 2015 10:05 AM  Subject: Fossil?
Hi Mr Mehling I found this egg shaped stone encrusted in another white stone, and I\'m wondering if this could be a fossilised egg, if you could help me to identify the stone I would be very happy. 
PS: the scale is in centimeters
Thank you Sergio,From: Carl Mehling  Sent: Tuesday, August 25, 2015 3:26 PM To: \'Sergio Bettencourt\' Subject: RE: Fossil?
Hi Sergio,
I have had a look at your attached photos, and although it is sometimes hard to be sure with photos, I\'d be very surprised if this was a fossil egg.  It somewhat resembles an egg, but it is much more likely to be a mineral accumulation of some kind – it’s resemblance to an egg is merely accidental. It lacks several details that would make it a convincing egg fossil. Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine, specific kind of surface ornamentation, which is lacking here, or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. Also, eggs have a near perfect geometry, apparent even in broken shell bits, that this piece lacks. 
Sorry to bring bad news,
Carl),
(61,61,161,From: Miguel Sent: Wednesday, August 26, 2015 11:55 PM To: Carl Mehling Subject: Did i found a dinosaur fossil
Carl, 
I found this. At first i thought it was a shiny rock but upon further examination think its a fossil what do you think. ,From: Carl Mehling  Sent: Friday, August 28, 2015 1:05 PM To: \'Miguel\' Subject: RE: Did i found a dinosaur fossil
Hi Miguel,
Thanks for your email. I\'m afraid I have to agree with your first assessment: I only see a shiny rock here. I see none of the fine details that I would want to see in order to confidently ID this as a fossil. Sorry!
Best,
Carl),
(62,62,162,From: Erin  Sent: Thursday, August 27, 2015 4:16 PM  Subject: Fossil Identification
Hi Carl,
I came across the Fossil Identification page on the AMNH website.  I have a few fossils from a family cottage in northern Ontario and one from New Brunswick, Nova Scotia.  If you have a chance to look at them, we\'d love to know what they are and what period they\'re from!
Thank you,
-Erin

From: Erin  Sent: Friday, August 28, 2015 2:22 PM  Subject: Re: Fossil Identification
Hi Carl,
that\'s very cool, thank you!!!  We knew they were old, but had no idea they\'d be that old!  We will definitely have to do a bit of reading to learn more about these plants and corals.
Thanks again!
-Erin,From: Carl Mehling  Sent: Friday, August 28, 2015 12:22 PM To: \'Erin\' Subject: RE: Fossil Identification
Hi Erin,
Thanks for your email. As soon as I opened your first image I knew we were almost certainly looking at a Pennsylvanian (~295-324 million years ago) fossil: I have collected on the other side of the water at Joggins in Nova Scotia and found much the same kind of fossils. Here is a little bit I found on the Web: http://www.capeenrage.ca/en/explore-a-beach/geology-and-fossils#!1 Your fossil is of a plant called Calamites. This was a giant relative of today’s horsetails and got to be up to 100 feet tall. What you have is a cast of the pith cavity in the center of the stem.
As for the other photos, they all appear to be fossil corals. Fossil 3 looks like a coral called Favosites. Fossil 9 appears to be a horn coral. Fossil 13 is hard to make out but I think it’s either a coral or a bryozoan. And Fossil 12 is a colonial coral of some kind. I couldn’t find anything about the fossils of Kapuskasing but Favosites was around from the Ordovician to the Permian (~250-500 million years ago). For comparison the oldest known dinosaurs are from about 245 million years ago.
Nice finds!
-Carl

From: Carl Mehling  Sent: Friday, August 28, 2015 1:09 PM To: \'Erin\' Subject: RE: Fossil Identification
Oh! And somehow I missed the thing on the right side of your New Brunswick slab. This appears to be a plant called Artisia. This is also a pith cast kind of fossil. But it comes from a fossil tree called Cordaites. Two for one!
-Carl 

From: Carl Mehling  Sent: Friday, August 28, 2015 2:30 PM To: \'Erin\' Subject: RE: Fossil Identification
My pleasure!),
(63,63,163,From: Melissa  Sent: Thursday, August 27, 2015 8:15 PM  Subject: Fossil Identification
Dear Carl, I read on the AMNH website that you may be able to identify, what I think, is a fossil. I inherited this piece from my grandfather. I don\'t know the origin, but am very interested in knowing what this is. Thank you, Melissa

From: Melissa Sent: Friday, August 28, 2015 1:35 PM  Subject: Re: Fossil Identification
Hi Carl, Thank you for your prompt response. Does this fossil have monetary value? 
Melissa,From: Carl Mehling  Sent: Friday, August 28, 2015 12:37 PM To: \'Melissa\' Subject: RE: Fossil Identification
Hi Melissa,
Thanks for your email. What you have there is an Early Cretaceous fish called Vinctifer comptoni. Yours almost certainly came from Brazil and is ~110 million years old. It is in a concretion, which is a nodule of rock that accreted around the decaying fish and provided a sort of protective coffin for it. The head end is near the large round plate, which is the operculum, or gill cover. It is no longer legal to export these from Brazil so you are also lucky that your got ‘grandfathered’ in! Nice fossil!
Best,
Carl

From: Carl Mehling  Sent: Friday, August 28, 2015 2:11 PM To: \'Melissa\' Subject: RE: Fossil Identification
Sorry, Melissa – we don’t do appraisals. But I can say these are common fossils and everything has a monetary value.),
(64,64,164,From: John  Sent: Friday, August 28, 2015 2:14 PM  Subject: Marine bone
Hi Carl, I think I showed this to you a couple of years ago.  I never have been able to find an ID, but a few months ago, I found pieces of similar material.  You know how it helps to revisit some mysteries after new we\'ve absorbed new info in the interim.  So, I thought I\'d give this one another shot. The formation is Albian aged (around 106 mya) in a marine environment.  Some recent posts on Cretaceous \'scutes\' have set me wondering.  Thanks for any assistance. John

From: John Sent: Friday, August 28, 2015 2:51 PM  Subject: RE: Marine bone
we\'re criss-crossing emails.  :D  The specimens were collected by me and are in my personal collection.

From: John  Sent: Friday, August 28, 2015 2:48 PM  Subject: RE: Marine bone
Thanks, Carl!  I\'ve attached an older image and field shots of this year\'s find.  Fish tooth plate would be weird; I\'m not getting that \'vibe\' from it, but I can\'t exclude it.  Looking forward to input from your crew.  :D John

From: John Sent: Friday, August 28, 2015 3:22 PM  Subject: RE: Marine bone
Donation and getting accession numbers from the VPL at UT is not a problem.  First, I would like to get a better understanding of what it is.  ;)  Have there been any recent articles on similar material I could access?  
From: John  Sent: Friday, August 28, 2015 3:24 PM  Subject: RE: Marine bone
Hopefully the macro shots reveal some clues.   :)

From: John  Sent: Friday, August 28, 2015 7:57 PM  Subject: RE: Marine bone
OK.  :D  There is no doubt that there is a relationship between the material I have, the misidentified fungus (#8661) and AMNH FF 20981.  How those relate to the lungfish teeth, I\'m not sure.  The big Moroccan specimens that Seth posted on TFF don\'t have areas as as big as mine.  So, are you thinking a palatine area or a related fish?   Anyway, I just took out the new specimen that I found at the end of May and did additional prep.  You\'re going to love the surface texture when I get it photographed.  ;)  John 
From: John Sent: Sunday, August 30, 2015 3:12 PM  Subject: RE: Marine bone
Keys Valley Marl member of the Walnut Formation.
From: John Sent: Tuesday, September 01, 2015 1:46 PM  Subject: RE: Marine bone
Hi Carl, Technology is fun when it works.  :D  Yes, you can use my credited images.  :)  The text below reads accurately, too.  I would ask that you change \"one of the administrators of the Fossil Forum\" to \"an independent researcher in central Texas.\"  it\'s no slight to TFF; it\'s just that I want to keep that a bit separate in publication.  What kind of \"paper\" are you writing?   In my previous email, I mentioned possibly sending my two specimens to you at AMNH because I thought someone was actively researching / describing the AMNH specimens.  Is that the case?  If so, I\'d be happy to send them to you.  Normally, I like fossils to stay close to their site location when there is a proper repository; but if you are working on them, it\'s more important to me the research is advanced.  Do the specimens need to be curated for your paper?  Waiting on those answers.  ;) Attached are 3 new images of the second specimen.  I\'ll follow this email with two more and attach the last images.  Let me know if you need other images.  Thanks for your patience, Carl. John

From: John Sent: Tuesday, September 01, 2015 2:01 PM To: Carl Mehling Subject: RE: Marine bone

From: John Sent: Tuesday, September 01, 2015 2:02 PM To: Carl Mehling Subject: RE: Marine bone

JohnJ Sent Today, 01:07 PM
  I sent you another email yesterday evening. 

JohnJ Sent Yesterday, 03:11 PM
Just sent it again.

JohnJ Sent Yesterday, 03:39 PM
Did it go to spam?
 
JohnJ Sent Yesterday, 03:45 PM
Resent again, just now.

JohnJ Sent Yesterday, 03:55 PM
Yeah, that\'s strange.
Just sent it to both your addresses.
 
JohnJ Sent Yesterday, 04:59 PM
Got your gmail and just replied.

Subject: RE: Marine bone Date: Tue, 1 Sep 2015 17:52:39 -0500
Carl, :D  I thought you would like the second specimen, even though incomplete and crushed.  Attached are quick and dirty images with a 1 cm scale bar.  I have images with the scale ruler in them, if needed.  I just added another rough comparative photo, too. Dr. Maisey\'s latest lead regarding tubular dentine is the best progress toward an ID, so far.  I\'ve been \'ripping up\' the interweb trying to find something similar.  Are there other fish, besides lungfish, I could investigate?  Also, notice the \"notch\" or \"cupped\" area on the brown end of specimen 1.  The same feature on specimen 2 is between 10 & 11 o\'clock on the photo above.  it\'s about twice the size of specimen 1.   Anyway, I hope we can generate some interest in what is certainly a rare specimen down here in TX.  Here is the LINK to Seth\'s post [This showed some large lungfish teeth from Kem Kem, Morocco.]. Take care, John

John to me 4:56 PM (16 hours ago) 2 September 2015
Since we don\'t know what we\'re looking at, it\'s hard to judge what might be pathology.  :D  The notch on the second one could be oriented where it is because one specimen is from the \"right\" side and the second, the \"left\".  I\'m not seeing much in the way of taphonomic features.  The notch in specimen 1 is the natural margin.  I\'ve attached a few images with notations.   What are your thoughts, or questions?

John to me, Carl 10:40 AM (15 minutes ago) 3 September 2015
Sounds like a plan.  When is your article going to be published?   I\'ll probably make it out to the site where these specimens where found over the weekend.  Keep your fingers crossed.  ;),From: Carl Mehling  Sent: Friday, August 28, 2015 2:32 PM To: John Subject: FW: Marine bone
I hope I’m late enough to avoid the fee, but what do you think of this thing?
It worries/excites me a bit because it’s DAMNED similar to our new NJ lungfish!

From: Carl Mehling  Sent: Sunday, August 30, 2015 12:08 PM To: John Subject: RE: Marine bone
Whoops! Hadn’t noticed they were so huge! Here you go.

From: Carl Mehling  Sent: Friday, August 28, 2015 2:37 PM To: \'John\' Subject: RE: Marine bone
Whoa… Don’t know if I recall seeing this thing but your timing is pretty good. Just a month and a half ago I was leading a members’ trip in NJ and a boy found a chip of something quite like this that he donated and we IDed is as a chip of lungfish tooth. It is VERY similar to yours but yours, at least in my opinion, can’t be a lungfish. Very exciting. Based on what I know, I’m thinking you have a fish tooth. But I can’t do better at the moment. I’ve sent your pix to M– let’s see what he says. Wow!
Best, Carl 

From: Carl Mehling  Sent: Friday, August 28, 2015 2:40 PM To: \'John\' Subject: RE: Marine bone
I was JUST going to start writing up a small paper on the ‘lungfish’ bit but this thing certainly confounds my path. Can I convince you to let me include this specimen in the paper> If so, does it have an institutional specimen number? Are you the collector?

From: John  Sent: Friday, August 28, 2015 5:37 PM  Subject: RE: Marine bone
Hi Carl, 
can you send smnaller images. I\'ll be retired before these finish downloading
J

From: Carl Mehling  Sent: Friday, August 28, 2015 3:09 PM To: \'John\' Subject: RE: Marine bone
Thanks, John. Might you have any interest in donating any of these specimens? I’m not sure I can write about them without institutional numbers. Either way, this is very intriguing and now I really want to find out what this stuff is!

From: Carl Mehling  Sent: Friday, August 28, 2015 3:13 PM To: \'John\' Subject: RE: Marine bone
Now I do seem to recall seeing these shots. The only reason I think fish tooth is because it looks basically exactly like what we have and Maisey called it ‘tubular dentine.’ We must find out what this anomaly is!

From: Carl Mehling  Sent: Friday, August 28, 2015 3:37 PM To: \'John\' Subject: RE: Marine bone
That’s great, John! Getting the number before publication would be best but I’ll likely be submitting in the next 2 month and that’s asking a lot. Let me know what’s possible.
But as for similar material I honestly have no idea! Attached is the new NJ specimen and the only known Mesozoic lungfish tooth east of the Mississippi.
Also attached is an AMNH holotype of a Cretaceous fungus that was re-identified as a lungfish tooth. Very much like yours!

From: Carl Mehling  Sent: Friday, August 28, 2015 3:39 PM To: \'John\' Subject: RE: Marine bone
Fingers crossed!

From: Carl Mehling  Sent: Sunday, August 30, 2015 12:19 PM To: \'John\' Subject: RE: Marine bone
Hi John,
I agree – those things are all related closely somehow and we are on the trail of an unknown. Can you send me a link to Seth’s post? Can’t seem to find it.
I guess in the absence of anything better I am imagining this to be a pharyngeal tooth plate. But there are obvious problems with that. Don’t think lungfishes have something like this.
Of course, I am dying to see your new shots of the new specimen! Can I have you presmission to include some of your shot in my paper? I will, of course, credit you.
Best,
Carl

Carl Sent Today, 02:34 PM
that\'s so weird! I got nothing. Can you send it again? Sorry!

Carl Sent Yesterday, 03:38 PM
Nothing!

Carl Sent Yesterday, 03:51 PM
Nothing in my junk email and nothing new. SO weird. Can you try to resend it to ? Sorry for the trouble!

From: Carl Mehling  Sent: Tuesday, September 01, 2015 3:37 PM To: \'John\' Subject: RE: Marine bone
Wow wow wow… That is amazing. And your photos are superb. Thanks for letting me use them! Is there any way you could shoot a quick and dirty shot with a scale bar? All of my included shots have a 1cm scale.
I will certainly change your description in the paper. It’s going to be a very short piece on how we ID things and how we work through competing ideas.
As of yet there really isn’t much more going on that this short paper. No formal study yet. My hope is that this first paper will generate interest in a more thorough treatment. I shouldn’t borrow anything until that happens, if it does at all. I guess the specimens won’t need to be curated for this first paper but it would certainly look better. If that could happen it would be great but no pressure.
Thanks a million!
-Carl

From: Carl Mehling  Sent: Sunday, August 30, 2015 1:42 PM To: \'John\' Subject: RE: Marine bone
Also, is it from the Comanche Peak or Walnut Formation?

From: Carl Mehling  Sent: Sunday, August 30, 2015 3:28 PM To: \'John\' Subject: RE: Marine bone
Thanks!

Email?
JohnJ Sent Today, 09:47 AM
Hi Carl,
Just checking to see if you received my emails from Sunday and yesterday.  
Catch you later.
John

Carl Sent Today, 10:36 AM
I think I\'ve seen them all but is there something I don\'t seem to have responded to? 
And do I have you permission to include you fantastic photos in the paper?

JohnJ Sent Today, 11:01 AM

You might have overlooked the email where I mentioned sending you the specimens.  Did you see the photos of the second specimen?  Catch you on email.  
John

Carl Sent Today, 11:16 AM
I just sent you an email - can you see if you got it? All this technological convenience is killing me!  

JohnJ Sent Today, 02:08 PM
I got it.   
I just sent you 3 emails with attachments.  I hope you got them.  
 
From: Carl Mehling  Sent: Tuesday, September 01, 2015 11:16 AM To: \'john\' Subject: RE: Marine bone
Hi John,
The email below seems to be the last email I got from you. Can you resend the shots of the 2nd specimen? And you mentioned sending the specimens? And may I use your photos in my paper with credit to you?
Below is the part of my text that you are in. Can you give it a read for accuracy?
Just two days before typing out an announcement of a new lungfish fossil I received an email from John, one of the administrators of the Fossil Forum. He sent me shots of a fossil that he’d asked me about two years prior. In the flood of fossils I see daily, I had completely forgotten ever having seen it. He was resending it because he had found another and said, “You know how it helps to revisit some mysteries after we\'ve absorbed new info in the interim.” I did indeed.
He found the first specimen in the Albian Walnut Formation of Texas in April of 2013. Mollusks, mainly oysters, dominate this shallow marine fauna, with a few echinoids and small crustacean parts sprinkled in.  Other than the uncommon shark tooth, Jackson was unaware of any other vertebrate fossils from the site. Based on this, plus the fossil’s somewhat crustacean-like appearance, he called upon the expertise of some decapod researchers. The results were ambiguous. But then further preparation of the specimen convinced John the fossil was actually bone. My very first knee-jerk response in 2013 was that it might be a pachycephalosaur dome. These have a comparable footprint and cross-sectional grain but the context and especially the specimen’s thickness made that extremely unlikely. Then the overall shape reminded me of the pharyngeal tooth plates of some fish like the Late Cretaceous Moroccan Eodiaphyodus, but the surface texture was all wrong – those tooth plates are crowds of tiny, stacked ‘buttons’ and Jackson’s find was a solid, continuous surface of tubular dentine. Jackson had also been freeing his mind and casting a wide net: “The list of what it ‘looks like, but’ is starting to be humorous...crab, turtle, fish, dino, egg.”
Thanks a million,
Carl

Carl Mehling to John 4:09 PM (17 hours ago) 2 September 2015
Got it on gmail - thanks! Nothing on AMNH. And I tried to forward it from gmail to AMNH and failed. So odd!
I did see the correponding notch. HOPEFULLY, that\'ll be helpful in IDing this beast. I see a notch along what I\'ll call the midline and then another just to the right of it in the comparison photo. I figure the one to the right is either taphonomic or pathologic. Or am I reading it wrong? And I am figuring the notch on the new one corresponds to the midline notch on last year\'s.
And thanks for the Seth link, too!

Carl Mehling to John 9:59 AM (0 minutes ago) 3 September 2015
I hear you there. I think I\'ll leave this question alone until after (hopefully) broader interest in these is picked up. So intriguing!
Can you try send me an email to my AMNH address with no attachments as a test?

Carl Mehling to John 10:54 AM (1 minute ago) 3 September 2015
I\'m submitting to the Mosasaur maybe this week. The Mosasaur is a VERY irregular journal with no real schedule so I have no good idea about when it will be out, sadly.

Carl Mehling to John 10:55 AM (0 minutes ago) 3 September 2015
And good luck at the site!
[Conversation about failed email details continued]

[See also 28 May 2013]),
(65,65,165,From: Stan  Sent: Saturday, August 29, 2015 8:41 AM  Subject: Fossil?
Found in sand pit near Dodge City Ks. There are no wood rings visible , may be a bone?  Thanks. Stan

From: Stan  Sent: Wednesday, September 02, 2015 3:37 PM  Subject: New pic Hi,thanks for the reply, not sure this is better .  Maybe if I ground it smoother and polished it ,it show if it is bone or wood?  It is 2+ x13 in long.,From: Carl Mehling  Sent: Wednesday, September 02, 2015 11:36 AM To: \'Stan\' Subject: RE: Fossil?
Hi Stan,
Thanks for your email. The photo is a bit too fuzzy to be sure but I don’t see many details that would convince me this is a fossil. Is there any way you could re-shoot is sharper?
Best, Carl

From: Carl Mehling  Sent: Thursday, September 03, 2015 10:03 AM To: \'Stan\' Subject: RE: New pic
Hi Stan,
Unfortunately, these are much like the other shots. Polishing the face and taking a very sharp close-up should help. But right now I’m seeing neither bone nor wood. If it is a fossil my best current guess would be a filled-in burrow of some kind.
Best, Carl),
(66,66,166,From: Sarah Sent: Saturday, August 29, 2015 2:44 PM  Subject: Fossil ID
Hi,
I found a fossil washed up on the beach in California, near Malibu. At first I thought it might be just iron oxide, but I asked a friend of mine who is a paleontologist, and she said it\'s definitely a fossil. She could not tell me what it is however. Maybe you could shed some light on it? Attached are some photographs.
Best,
Sarah

From: Sarah Sent: Thursday, September 03, 2015 12:33 PM  Subject: Re: Fossil ID
Thank you so much for your response. I actually live in New Mexico but I will take it to the natural history museum here. ,From: Carl Mehling  Sent: Wednesday, September 02, 2015 1:30 PM To: \'Sarah\' Subject: RE: Fossil ID
Hi Sarah,
Thanks for your email. I guess I have to agree with your paleontologist friend but I\'m at a bit of a loss. I have seen both plant and fish fossils from California that looks a bit like this but I can’t even tell which I like more. My suggestion is to see if you can meet up with someone at the Natural History Museum of Los Angeles County for an in-person look. Not only is this better than photos, they would likely know local fossils better than we would. Good luck!
Best,
Carl

From: Carl Mehling  Sent: Thursday, September 03, 2015 12:34 PM To: \'Sarah\' Subject: RE: Fossil ID
Good luck - I hope they can tell you something interesting!),
(67,67,167,From: Brittany Sent: Sunday, August 30, 2015 6:12 PM  Subject: Fossil Question
Hello, my name is Brittany and I was wondering if you could determine what kind of fossil this is in this rock. I found it in a rock pile by my grandpas. 

From: Brittany Sent: Wednesday, September 02, 2015 12:39 PM  Subject: Re: Fossil Question
Yeah its a gravel pit at his house in upper Michigan in wilson

From: Brittany  Sent: Wednesday, September 09, 2015 6:15 PM To: Carl Mehling Subject: Re: Fossil Question
How do I figure out if it is a fossil?,From: Carl Mehling  Sent: Wednesday, September 02, 2015 11:45 AM To: \'Brittany\' Subject: RE: Fossil Question
Hi Brittany,
Thanks for your email. I think you may have a fossil there but I would need to see a sharp close-up to be more sure. And if you can tell me where your \'grandpa\'s\' rock pile is, I might be able to guess its age if it turns out to be a fossil. And do you know if the rocks in the rock pile came from a place near the pile?
Thanks,
Carl

From: Carl Mehling  Sent: Wednesday, September 09, 2015 11:30 AM To: \'Brittany\' Subject: RE: Fossil Question
Hi Brittany,
It looks like the rocks around Wilson are all Ordovician on age (~439-500 million years old) so if that is a fossil it is very old. Just for comparison, the oldest known dinosaurs are around 245 million years old. Nice find!
Best,
Carl 

From: Carl Mehling  Sent: Thursday, September 10, 2015 3:26 PM To: \'Brittany\' Subject: RE: Fossil Question
Hi Brittany,
If you are able to provide sharper, closer shots I may be able to tell. But if it isn\'t preserved well it may not even be possible to say definitively that it is or isn\'t a fossil.
Best,
Carl),
(68,68,168,From: Ishveen  Sent: Monday, August 31, 2015 1:47 PM To: Carl Mehling Subject: 
Hello,     I recently found what I think may be fossilized coral. It was found at my elementary school in the southern part of New Jersey. I also to this day find several old looking mollusk shells laying around almost everywhere. However since I am only an amateur high school student, I was hoping that you might be able to assist me in verifying what this find truly is. I look forward to hearing back from you. The dimensions are about 3\"x3\".

Need Help Identifying. Please Help. Coral?
Started by , Aug 31 2015 06:08 PM
Hello,
    I recently found what I think may be fossilized coral. It was found at my elementary school in the southern part of New Jersey. I also to this day find several old looking mollusk shells laying around almost everywhere. The dimensions are about 3\"x3\".

Auspex Posted 31 August 2015 - 06:20 PM
I would like to see the \"bottom\", but I do not think it is coral.

 Posted 31 August 2015 - 06:23 PM
Thanks for your help lol

Auspex Posted 31 August 2015 - 06:28 PM
Thank you! I am pretty sure that it is inorganic; my first impression is that it is cement or mortar that oozed out of a masonry job.
I could be wrong, even very wrong, so please wait for other opinions 

Posted 31 August 2015 - 06:29 PM
Ohh ok! Thanks for your help anyway! 

Mitra zonata Posted Yesterday, 11:24 AM
coprolites?

Plax Posted Yesterday, 11:34 AM
can we have a close up of the light colored inclusions please?

 Posted Yesterday, 11:38 AM
I\'m new to all this. So I don\'t really know what you\'re asking for plax. Sorry lol.,From: Carl Mehling  Sent: Wednesday, September 02, 2015 1:21 PM To: \'Ishveen\' Subject: RE: 
Hi Ishveen,
Thanks for your email. I’ve had a look at your photos and feel pretty sure it’s not a fossil coral. It’s lacking the fine outer detail one would likely see on genuine fossil coral. Sorry for the bad news.
Best, Carl),
(69,69,169,From: Robert Sent: Tuesday, September 01, 2015 8:43 PM  Subject: Identification
Hello again Mr. Mehling!
I usually contact you with my fossil finds, but I came across a rather large bone that is hard to identify, is there a person at the museum I could contact about identifying that? 
Unfortunately the last identification day was during my finals and I could not make it, is there any coming up?
As always, thank you for your time,
RJ

From: Robert  Sent: Sunday, October 11, 2015 5:20 PM  Subject: Re: Identification
I finally got home to take some pictures!
This is that weird bone that was found on the beach in NJ that I have been unable to identify. If you have any insight I would greatly appreciate it! Sorry if the ruler is hard to see, it is a 16 inch ruler and the bone is about 14 inches long.
Thanks as always!
RJ,From: Carl Mehling  Sent: Wednesday, September 02, 2015 1:35 PM To: \'Robert\' Subject: RE: Identification
Hi RJ,
Feel free to send me shots of the bone. Please email me very sharp photos (no more than 5 and no larger than 500k) that include scale. If I can’t help I can ask around. The next ID Day won’t be until probably next spring.
Best, Carl 

From: Carl Mehling  Sent: Tuesday, October 13, 2015 1:35 PM To: \'Robert\' Cc: Radford Subject: RE: Identification
Hi RJ,
Thanks for the photos. This is definitely from a fish but I can’t do any better than that, sadly. However, I have cc’d here my good friend Radford Arrindell who is a Senior Scientific Assistant in our Department of Ichthyology. He should be able to tell you something more useful!
Best, Carl

From: Radford Sent: Wednesday, October 14, 2015 4:15 PM To: Carl Mehling; Robert Subject: RE: Identification
Hi Carl/Robert,
I have checked the skeletal collection here and we are sure that what you have is part of the left pectoral girdle from a tuna. Exactly which species is difficult to say but definitely Thunnus sp.
Cheers
Rad

From: Carl Mehling  Sent: Monday, October 26, 2015 4:02 PM To: Radford; Robert Subject: RE: Identification
Thanks, Rad!

[See also 14 Dec 2014, 10 Jan 2015]),
(70,70,170,From: Courtney Sent: Thursday, September 03, 2015 10:57 AM To: Carl Mehling Subject: I found some fossils in upstate NY, but I can\'t identify them...Can you help? Thanks!!

From: Courtney Sent: Thursday, September 03, 2015 12:54 PM
Subject: Re: I found some fossils in upstate NY, but I can\'t identify them...Can you help? Thanks!!
Hi Carl,
Thank you for responding to my email and so quickly! I have been very interested in finding out what they are since I found them a week ago, so I really appreciate the answers! Thanks again!
-Courtney,From: Carl Mehling  Sent: Thursday, September 03, 2015 12:41 PM To: \'Courtney\' Subject: RE: I found some fossils in upstate NY, but I can\'t identify them...Can you help? Thanks!!
Hi Courtney,
Thanks for your email. You found some fun things there. 
The first one (the two impressions in rock) is a bit hard to read but at least one impression is a brachiopod. It seems to be a spiny productid brachiopod: those tiny pits represent the molds of the spines which will extend into the rock. Compare it to this: https://woostergeologists.scotblogs.wooster.edu/2014/07/18/woosters-fossils-of-the-week-silicified-productid-brachiopods-from-the-permian-of-west-texas/. The other impression seems to be a mold of a shell or a coral - hard to say.   
The second (the ribbed cylinders) appear to be some kind of coral, maybe something like Syringopora.
The last one (like a flower) is probably a horn coral.
All of these animals were common in the Devonian Period (~354-409 million years ago) and there is certainly a lot of Devonian rock upstate, so that is my best guess. Nice finds!
Best, Carl

From: Carl Mehling  Sent: Friday, September 04, 2015 1:52 PM To: \'Courtney\' Subject: RE: I found some fossils in upstate NY, but I can\'t identify them...Can you help? Thanks!!
My pleasure!),
(71,71,171,From: Brian Sent: Thursday, September 03, 2015 5:21 PM  Subject: Possible fossil
Hi  my name is Brian.   I found what might be a fossil in some landscape rock in Rochester Minnesota.  Can someone look at the pictures and let me know.  Thank you,From: Carl Mehling  Sent: Friday, September 04, 2015 2:01 PM To: \'Brian\' Subject: RE: Possible fossil
Hi Brian,
Thanks for your email. I feel pretty sure that you have a fossil nautiloid there, maybe a straight-shelled one. Nautiloids have chambered shells and what you have is several chambers that filled with sediment (which later turned to stone) and outlasted the shell. You can see a few great examples for comparison here: http://www.nautiloid.net/fossils/cephalopod/naut1/naut1.html. If yours is straight-shelled it is between ~210 & 520 million years old. Because it came from landscape rock it could be difficult to find its original source rock for more accurate aging. Nice find!
Best, Carl

http://www.nautiloid.net/fossils/cephalopod/naut1/naut1.html   
Nautiloids of the Cincinnati Arch  Ordovician
 Orthoceras or Orthonybyoceras Cincinnati Arch, Ordovician Cincinnati, Ohio  These are typical of the condition of nautiloid fossils found in the Cincinnati Arch. The nautiloid usually decomposes before fossilization of the details occurs. It is difficult to identify them to the species level when the preservation is poor. As a result the common conical shaped nautiloids are often generically referred to as \"Orthoceras\".  Treptoceras Cincinnati Arch, Ordovician Blue Banks, Georgetown, Ohio  Occasionally, better condition specimens can be found. I found this specimen in approximately 1970 on the banks of White Oak Creek.  Inspection of the loose pieces shows details of the septa at the narrow end.  The siphuncle can bee seen passing through the segments and there is detail of the surface of the exterior preserved on the largest piece. It is partially covered by an encrusting bryozoan.  Cameroceras ? Cincinnati Arch, Ordovician Fort Mitchell, Kentucky  A decomposed remnant, covered with encrusting byrozoan. (15 cm)  Cameroceras ? Cincinnati Arch, Ordovician Hwy AA, Northern Kentucky  Remains of a larger Orthoceras. (12cm long)),
(72,72,172,From: Matt Date: September 3, 2015 at 4:33:39 PM EDT To: Josh Subject: dinosaur tooth...
Hey man - hope things are good by you and that you guys have had a good summer. Looking forward to collaborating on football picks in short order.
On a completely different note, I was recently given what I am told is a dinosaur tooth found in the Niger desert (see the attached picture). It was found by my globetrotting photographer of a stepbrother-in-law who says these are plentiful there. Needless to say I\'m interested to see if I can find out more and you\'re clearly the man to check in with on the subject. 
Obviously no need to prioritize this in any way but if you know a guy who might be able to shed some light on the subject (as I\'m certain you do) and your curiosity is piqued at all, let me know.
Thanks!
- Matt

From: Matt Date: September 9, 2015 at 12:35:41 PM EDT To: Josh Subject: Re: dinosaur tooth...
Following up on the tooth - please find some pictures from different angles attached along with some scale attached.
Here\'s what I got concerning the location: \"It was found in the Sahara north of Agadez, Niger. From what I understand the area had a number of skeletons, some of which are largely intact. it\'s so far removed, such a broad expanse (and dangerous now) that little excavation has gone on.\"
Thanks again for looking into this!,From: Joshua  Sent: Thursday, September 03, 2015 7:38 PM  Subject: Fwd: dinosaur tooth...
Thoughts? Certainly looks like a tooth. Any idea what it could be from? 

From: Carl Mehling  Sent: Friday, September 04, 2015 2:05 PM To: Joshua Subject: RE: dinosaur tooth...
Hey Doc,
It certainly looks like a fossil tooth but I can’t confirm dinosaur from that photo – could also be a croc or something else. Can he shoot it some more from a few other angles and include scale? And can he be more specific about the locality? Thanks!
-Carlito

On Fri, Sep 4, 2015 at 3:14 PM, Josh wrote:
See request for additional details...

On Fri, Sep 4, 2015 at 3:16 PM, Matt wrote:
Thanks man! I will see what else I can find out about the location and definitely send along some more pictures.

From: Josh Sent: Wednesday, September 09, 2015 5:52 PM  Subject: Fwd: dinosaur tooth...
These details help? Thanks again for your thoughts on this. The dude\'s kid is super excited. 

From: Carl Mehling  Sent: Thursday, September 10, 2015 9:21 AM To: \'Josh\' Subject: RE: dinosaur tooth...
Thanks for the details, Doc. But the photos either didn’t come through or were smeared. Can we try that again?

From: Josh Sent: Thursday, September 10, 2015 7:57 PM  Subject: Fwd: dinosaur tooth...
How\'s this?

From: Carl Mehling  Sent: Monday, September 14, 2015 3:41 PM To: \'Josh\' Subject: RE: dinosaur tooth...
Well, the pix came through fine this time but they are pretty fuzzy. But also, the tooth is pretty beat up. I don’t see serrations, which would pretty much clinch it as a meat-eating dinosaur tooth. But there is one group found in Africa, the spinosaurids, that lack serrations. It could be one of those but it just as easily could be a crocodilian tooth. I’m not sure there’s enough to go on here.
Sorry!
-Carlito),
(73,73,173,From: Lauren  Sent: Friday, September 04, 2015 7:43 AM  Subject: Fossil ID Help
Hi Carl! I\'m a science teacher in NYC (on 92nd street so I\'m close if you want to see the fossil in person) and would love your assistance with an ID. I found this in west Texas at the Independence Creek Preserve (http://www.nature.org/ourinitiatives/regions/northamerica/unitedstates/texas/placesweprotect/independence-creek-preserve.xml) while hiking around. I\'m seeking out your help on behalf of the property owner who deeded the land to the Nature Conservancy. It was on a cliff amidst a lot of other limestone (I think). Part of me thinks it\'s a plant and part of me thinks it\'s an animal, what do you think? Looking forward to hearing back from you
Lauren Prentiss

Plant? Animal? Please Help!
 
Guguita Posted Today, 09:22 AM
Welcome to the Forum!

Fossildude19 Posted Today, 09:30 AM
Welcome to the Forum from Connecticut.  
I took the liberty of cropping, enlarging, and enhancing your images.
 
Unfortunately, I have no idea.  
 
Maybe some locals will chime in. 
Regards,
Tim 
 Posted Today, 10:05 AM
Thanks so much for your help with the pics Tim/Fossildude19!  

old bones Posted Today, 10:32 AM
Your image reminds me of pictures of Ediacaran organisms that I have seen online. I don\'t know if your location was old enough tho. I sure don\'t know enough to say, just going on a visual here....

Guguita Posted Today, 10:38 AM
Can you indicate the period of the layers where do you find it? I thought the same of you, old bones, but as I don\'t know the age of that rock I didn\'t say nothing.
Regards,

Mike Posted Today, 10:46 AM
Hi Welcome to the forum from the UK, cant help you with the ID but I\'m sure someone on the forum will be able to Regards Mike 

Fossildude19 Posted Today, 11:29 AM
Well, it appears that, (according to this geologic map, anyways) that Terrell County where the site the item was found is located, is firmly planted in the Cretaceous period. 
From my 5 years here on the forum, it seems that most unknowns from Texas are usually either Bison, or Rudists.      
I think we can rule out Bison on this one!   
Hopefully we can get a better ID once some of our Texas members weigh in. 
Regards,
Tim 
Guguita Posted Today, 11:35 AM
So, if the layers are Cretaceous I\'ll say just geologic...However, let the experts in Texas\'s fossils tell their opinion.

FossilDAWG Posted Today, 11:55 AM
I\'d suggest it may be a weathered section through an oyster or rudist bivalve.
Do

From: Lauren Sent: Friday, September 04, 2015 5:24 PM  Subject: Re: Fossil ID Help
Hey Carl! Thanks so much for getting back to me so promptly. I had no idea how quickly I\'d get a response or how the forum worked so I figured I\'d try them both. 
The second picture is actually the other side of the same rock and though I can now see the pic doesn\'t show a ton of detail it has the same general shape/markings as the other more easily visible side. it\'s definitely from the Cretaceous period. 
Your response and help is greatly appreciated! And you\'re right - the Fossil Forum is awesome!
Cheers,
Lauren,From: Carl Mehling  Sent: Friday, September 04, 2015 12:50 PM To: \'Lauren\' Subject: RE: Fossil ID Help
Hi Lauren,
Thanks for your email. I see you also posted this to the Fossil Forum: they are a superb group. And I will have to agree with the ones that IDed at least your first photos as a rudist. Rudists are relatives of clams that formed huge reefs and went extinct in the Cretaceous. As mentioned, TX has a good amount of Cretaceous exposures so yours is likely one of the last rudists. Nice find! As for the other rock, I am not sure if that is a fossil (maybe another rudist) or just a geological oddity. Sorry.
Best,
Carl

From: Carl Mehling  Sent: Wednesday, September 09, 2015 12:24 PM To: \'Lauren\' Subject: RE: Fossil ID Help
So glad to be of help, Lauren!),
(74,74,174,From: Brody Sent: Friday, September 04, 2015 4:42 PM To: Carl Mehling Subject: fossil identification
Hi Carl,
Can you help identify this?  Had it for many years.  The length is around 3 inches end to end.  It was found in South Florida on the Gulf side.  it\'s always been a mystery to me.
Thanks,
Brody

From: Brody  Sent: Wednesday, September 09, 2015 12:29 PM  Subject: RE: fossil identification
that\'s awesome! Thanks for the info! I\'ve been carrying that with me for 30 years or so since I found it as a kid. Mystery solved. Thanks again and take care!
Brody,From: Carl Mehling  Sent: Wednesday, September 09, 2015 12:22 PM To: \'Brody\' Subject: RE: fossil identification
Hi Brody,
Thanks for your email. What you have is a clam steinkern. Steinkerns are the sediment that fills a void (in this case the inside of a dead clam shell) and later turns to stone. This often outlasts the shell, which seems to be the case with yours. The FL Gulf fossils are all fairly young so yours is probably a few million years old. Nice find!
Best, Carl

From: Carl Mehling  Sent: Wednesday, September 09, 2015 1:10 PM To: \'Brody\' Subject: RE: fossil identification
My pleasure!),
(75,75,175,From: Jason  Sent: Friday, September 04, 2015 7:16 PM  Subject: Beach Find
Sir- My 7-year-old son found this unusual rock/fossil(?) at the water\'s edge of a Stone Harbor, NJ beach a few weeks ago.  I am trying to use this as a teachable moment to get him interested in science and fossils.  We have been searching the internet looking for things that look like this without much luck.  We came across your website and hope that you might be able to help us identify what this might be or point us in a useful direction. Any assistance you can provide would be greatly appreciated. Thank you. Jason

From: Jason Sent: Thursday, September 10, 2015 7:44 AM  Subject: Re: Beach Find
Thank you for your quick and detailed reply. We were astonished that it was able to be identified and that it is so old!  It just looks like any other rock which, I suppose, is the teachable moment here.  It really gives you pause when looking at a rock to consider just how old it may be.
Ryan is \"over the moon\" excited and now has quite a story for 2nd grade show & tell this year!  Incidentally, the local weekly south Jersey newspaper has offered to run a story on his find and would like you use some of the content from your email.
Please let me know if you would rather not have that included.
Thanks again!
Jason

From: Jason Sent: Thursday, September 10, 2015 9:47 AM To: Communications Cc: Carl Mehling Subject: RE: Beach Find
To whom it may concern-
Please see the attached email string below.  The Cape May County Herald would like to do a short story on my son\'s find and use some of the information Mr. Mehling provided to assist with the fossil\'s identification.
Please let me know if there\'s a problem with using the information provided below.  I will stress that the editor not get \"creative\" in the story and stick to the facts.
Best regards,
Jason

From: Jason 
Sent: Thursday, September 10, 2015 9:44 AM
Subject: RE: Beach Find
Thank you very much sir.  I understand completely.  I will run this through your channels.
Best,
Jason,From: Carl Mehling  Sent: Wednesday, September 09, 2015 12:55 PM To: \'Jason\' Subject: RE: Beach Find
Hi Jason,
Thanks for your email. You can tell your son that he is the lucky finder of a fossil horn coral. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250). By comparison the oldest known dinosaurs are about 245 million years old. Stone Harbor is very far from any likely sources of a fossil like this so this was probably brought there by ocean currents or rivers, and, maybe if it came from northern NJ or even southern NY, glaciers might have also contributed to its movements. It holds a long and complex story so it should be looked at with wonder! Nice find!
Best, Carl

From: Carl Mehling  Sent: Thursday, September 10, 2015 9:25 AM To: \'Jason\' Subject: RE: Beach Find
My pleasure, Jason! And I’m so glad your son was psyched. I, of course, hope it is the moment that turns him into a paleontologist!
I would be happy to have you include my words in the newspaper but it just has to be run by our Communications Dept. first. The press tends to get frustratingly creative with things like this and we are accuracy addicts! Thanks!
Best, Carl 

From: Carl Mehling  Sent: Thursday, September 10, 2015 9:53 AM To: \'Jason\' Subject: RE: Beach Find
Thanks so much!

From: Aubrey
Sent: Thursday, September 10, 2015 12:18 PM
To: Jason; Communications
Cc: Carl Mehling
Subject: Re: Beach Find
That is fine. Thank you for checking.
Aubrey

From: Carl Mehling  Sent: Thursday, September 10, 2015 3:28 PM To: Aubrey; Jason; Communications Subject: RE: Beach Find
Thanks, Aubrey!

From: Aubrey Sent: Thursday, September 10, 2015 3:32 PM To: Carl Mehling Subject: Re: Beach Find
No problem.),
(76,76,176,From: Christopher Sent: Saturday, September 05, 2015 11:26 AM  Subject: Fossil find
Hello Carl Mehling,
My daughter found something at Jones Beach, Long Island, NY on Thursday. I’m attaching photos and I’d be very grateful if you could tell me what we’ve got.
Thank you so much!
Best,
Chris

From: Christopher  Sent: Wednesday, September 09, 2015 10:10 PM  Subject: Re: Fossil find
Hi Carl,
I’m very grateful for your response. I’m sure you’re right that it probably isn’t a fossil, but it feels so “stone-like” that it just didn’t seem like a simple shell. Regardless, it’s all very interesting. My daughter—and the rest of us—learned something! Thanks so much!
Best regards,
Chris,From: Carl Mehling  Sent: Wednesday, September 09, 2015 1:01 PM To: \'Christopher\' Subject: RE: Fossil find
Hi Chris,
Thanks for your email. What you have here is an oyster shell, probably from the species Crassostrea. The neatly partitioned groove in the last three photos is the hinge of the oyster. The holes riddling the shell are from a sponge called Cliona that excavated galleries in the shell of the dead oyster and then used the oyster shell as its home for a while. It’s probably modern but I can’t rule out fossil. Fossils merely need to be 10,000 or more years old to be fossils and one that old could certainly look like this. There’s no easy way to tell. 
Best, Carl

From: Carl Mehling  Sent: Thursday, September 10, 2015 9:10 AM To: \'Christopher\' Subject: RE: Fossil find
My pleasure!),
(77,77,177,From: Kevin Sent: Saturday, September 05, 2015 9:40 PM To: Carl Mehling Subject: Fossils found at North Chicago il lake Michigan
My son sent them as well

From: Kevin  Sent: Saturday, September 05, 2015 9:41 PM  Subject: Lake michigan

From: Kevin Sent: Saturday, September 05, 2015 9:41 PM  Subject: Lake michigan

From: Kevin Sent: Saturday, September 05, 2015 9:45 PM  Subject: Black Rock like shiny brown glass inside
What could it be. Obsidian isn\'t out here?

From: Kevin Sent: Saturday, September 05, 2015 9:47 PM  Subject: 

From: Kevin Sent: Wednesday, September 09, 2015 8:00 PM  Subject: Fossils
Thanks for getting back to me Carl. Hope you had a good holiday. I was only aware of crinoids in this area and never heard of the horn coral. So I\'m guessing this is probably a piece of horn coral as well. I\'ve been stuck on light duty at our water plant which is right on lake Michigan so I\'ve had nothing better to do than scour the shore. I\'m a cop so I have a good eye for things that are out of place or \"not like the others\". Lol

From: Kevin  Sent: Thursday, September 24, 2015 9:27 PM  Subject: RE: Fossils
Found what looks and feels like a bone but I\'ve never seen a bone like this.

[Responding to my email saying to get back out there and find more]
From: Kevin Sent: Thursday, September 24, 2015 9:29 PM To: Carl Mehling Subject: RE: Fossils
Sorry to bother you again Carl. I\'ll be back to work soon, I promise!

From: Kevin Sent: Friday, September 25, 2015 2:21 PM  Subject: RE: Fossils
Well holy cow, never would have guessed that. Thanks Carl,From: Carl Mehling  Sent: Wednesday, September 09, 2015 1:08 PM To: \'Kevin\' Subject: RE: Fossils found at North Chicago il lake Michigan
Hi Kevin,
Thanks for your email. Well, I can say with fair confidence that the two conical things are fossil horn corals. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250). By comparison the oldest known dinosaurs are about 245 million years old. The porous tan rock is probably not a fossil and the possible obsidian may be just that. Unfortunately, I know fossils way better than rocks!
Best, Carl

From: Carl Mehling  Sent: Thursday, September 10, 2015 9:13 AM To: \'Kevin\' Subject: RE: Fossils
My pleasure, Kevin. And I forgot to mention that in the picture with your thumb there is also a crinoid columnal: the tiny circular thing next to the horn coral.
Nothing better to do than scour the shore?!?! I’d do it every day if I could! And nice cop/fossil collector analogy – hit the nail on the head. Now get back out there and find more!
Best,
Carl

From: Carl Mehling  Sent: Thursday, September 10, 2015 9:15 AM To: \'Kevin\' Subject: RE: Fossils
Somehow I missed the attached photo. That, too, looks like the inside of a horn coral. Looks like you have a fun spot to pick over!

From: Carl Mehling  Sent: Friday, September 25, 2015 11:40 AM To: \'Kevin\' Subject: RE: Fossils
Hi Kevin,
That is most likely a cow tooth. I was trying to see if it might be a bison tooth, which would be very similar, but I think cow is a better match. Crazy looking thing, huh? Best, Carl

[Responding to his email about promising to fossil hunt more]
From: Carl Mehling  Sent: Friday, September 25, 2015 11:42 AM To: \'Kevin\' Subject: RE: Fossils
Well done!

From: Carl Mehling  Sent: Tuesday, September 29, 2015 2:31 PM To: \'Kevin\' Subject: RE: Fossils
Nice!),
(78,78,178,From: patrick Sent: Sunday, September 06, 2015 5:00 PM To: Carl Mehling Subject: Fossil identification.
Carl Mehling
HI Carl, 
I found this presumed fossil at Refugio State Beach on 8/28/15 amongst the rocks right at the tide line. I would greatly appreciate your help with this identification. 
Thank you so much,  Patrick,From: Carl Mehling  Sent: Wednesday, September 09, 2015 1:23 PM To: \'Patrick\' Subject: RE: Fossil identification.
Hi Patrick,
Thanks for your email. I can’t exactly make out what that is but I doubt it’s a fossil. The closest thing that comes to mind is a kinds of layered flint I used to see in, Santa Cruz, California. And I only just now looked up where Refugio State Beach was so I feel like I’m on the right track! You might want to run this by the folks at the Natural History Museum of Los Angeles County and see what they say – seeing these things in hand is often much better than photos.
Best, Carl),
(79,79,179,From: Luke Mull [mailto:lukewilliammull@gmail.com]  Sent: Tuesday, September 08, 2015 2:44 PM  Subject: Fossils
If you could identify these for me, i would appreciate it. Thanks,From: Carl Mehling  Sent: Wednesday, September 09, 2015 1:34 PM To: \'Luke Mull\' Subject: RE: Fossils
Hi Luke,
Thanks for your email. The first rock is very hard to read (the photos are blurry) but I doubt it’s a fossil. It lacks a lot of the details I would like to see in order to confidently ID it as a fossil. However, all of the other specimens appear to be fossil corals. If you can tell me where they were found I may be able to give you’re their approximate age.
Best, Carl),
(80,80,180,From: Mike Sent: Tuesday, September 08, 2015 5:06 PM  Subject: Bone
My son found this and wanted to know what it came from. 

From: Mike Sent: Tuesday, September 08, 2015 5:07 PM To: Carl Mehling Subject: Bone \"more photos\"

From: Mike
Sent: Wednesday, September 09, 2015 2:31 PM
Subject: Re: Bone
I was thinking part of a finger or toe also. He found it on a small island that\'s in the opening of where the Detroit river enters Lake Erie. Does that help narrow it down? Also, maybe you could share the pics and get back with me? Thanks.,From: Carl Mehling  Sent: Wednesday, September 09, 2015 1:43 PM To: \'Mike\' Subject: RE: Bone
Hi Mike,
Thanks for your email. My best guess here is that it is from a cow or other medium-sized mammal but it is definitely a finger/toe bone. Depending on the context of its burial it could be a fossil, like an Ice Age bison, or modern, like a fairly recent cow. But this could be very hard to tell.
Best,
Carl

From: Carl Mehling  Sent: Wednesday, September 09, 2015 2:52 PM To: \'Mike\' Subject: RE: Bone
Hi Mike,
If it was found on the surface rather than buried in undisturbed sediments it may be impossible to tell its age without an expensive analysis. But you might also want to post this to the Fossil Forum for ID. They are an incredible group of amateurs and professionals who really know fossils as well as their modern counterparts.
Best,
Carl),
(81,81,181,From: Ray Dell <ray472011@hotmail.ca> Date: 8 September 2015 at 17:29 Subject: Fossil Worm? To: J MacDougall <jmacdougall@gmail.com>
Hi James,
 OK, I had to retake the photos of the fossil since the first ones were a little blurry and I added
a tape measure for scale.
 Have fun with this. and if you find out what it is let me know.
 Ray

From: Ray Dell [mailto:ray472011@hotmail.ca]  Sent: Sunday, September 13, 2015 12:29 PM  Subject: RE: Fossil Worm?
Hi Carl,
Thankyou for IDing the straight shelled nautiloid. I had no idea what it was. I do have another fossil that I was wondering if it is the tip of a straight shelled nautiloid shell. At first I thought it was a tooth but then it looked more like a snail shell, so not sure but if it is a nautiloid or just the way some rock formed. I\'ll be thrilled to find out.
On the left side of the 2nd photo is what I think is a shell but not sure. I know it doesn\'t show very well in the photo, but I was curious if you know what it is, and the fossil on the right too I am not sure if it is a shell or a water bug of some kind.
I\'m thinking that the fossils on the right side and left side are the same type of creature. If you can\'t tell what it is that\'s fine,
I\'m really mainly curious about what the rock in the middle is.
that\'s it for me. I\'m out of fossils.
Thanks for inspiring me.
Ray


,From: J MacDougall [mailto:jmacdougall@gmail.com]  Sent: Wednesday, September 09, 2015 8:31 AM  Subject: Fwd: Fossil Worm?
This was found somewhere along Lake Huron in the Georgian Bay region near Owen Sound. We are hoping someone can identify it. Thank You
James MacDougall

From: J MacDougall [mailto:jmacdougall@gmail.com]  Sent: Wednesday, September 09, 2015 8:33 AM  Subject: Re: Fossil Worm?
Hey Ray
I started posting photos on my flickr account.I sent the fossil photos to the American Museum of Natural History http://www.amnh.org/our-research/paleontology/about-the-division/more/fossil-identification
Hopefully they will be able to help identify it.
James MacDougall

From: Carl Mehling  Sent: Wednesday, September 09, 2015 1:54 PM To: \'J MacDougall\'; \'ray472011@hotmail.ca\' Subject: RE: Fossil Worm?
Hi James and Ray,
Thanks for your email. I do agree that this is a fossil but it is very beat up and a bit hard to confidently ID. That said, I still feel reasonably sure it is a straight-shelled nautiloid. Nautiloids are still with us today but were incredible common and diverse in the Paleozoic (~530-250 million years ago). The straight-shelled ones persisted a bit into the Mesozoic (until around 210 million years ago). I don’t know enough about the rocks near Georgian Bay to give a better idea of this thing’s age but suffice it to say that if I’ve IDed it correctly it’s 100s of millions of years old and at least as old as the oldest known dinosaur. Nice find!
Best, Carl 

From: Carl Mehling  Sent: Monday, September 14, 2015 4:42 PM To: \'Ray Dell\' Subject: RE: Fossil Worm?
Hi Ray,
In the photo of the trio, I think the one on the left is a brachiopod, but it’s quite weathered, making the ID difficult. The conical one in the center is most likely a horn coral. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250). By comparison the oldest known dinosaurs are about 245 million years old. And I agree that the last one is also a fossil but that one is giving me the most trouble. It could be a brachiopod, like you suggest, but it could be a bunch of other things, too. Sorry about that one!
Best, Carl),
(82,82,182,From: Mark  Sent: Thursday, September 10, 2015 11:26 PM  Cc: cindy Subject: Tooth identification
Carl Mehling and Cindy. Attached are some photos of a large tooth I found on a beach on Cape Cod. I\'m hoping that you might be able to identify what sort of animal it came from. 
The tooth has four \"root spurs\", (my name) and lots of enamel on the exterior.  This may be tooth enamel, or a wierd ivory. It is 1 1/2 inches long, and 1 inch side to side, 1 1/8 from front to back. There is significant wear from the front to the back on the exterior front surface. 
Thanks in advance for any information you may be able to provide.
Mark

From: Mark Sent: Monday, September 14, 2015 8:26 PM  Subject: RE: Tooth identification
Thank you Carl, a local person who raises horses also said the same thing. How this tooth ended up on the beach is a good question. But now I know that it\'s not from a marine mammal. I appreciate your taking the time to look at it.  
Good day, Mark,From: Carl Mehling  Sent: Monday, September 14, 2015 3:58 PM To: \'Mark\' Cc: cindy Subject: RE: Tooth identification
Hi Mark,
Thanks for your email. The photos are pretty blurry but I feel reasonably confident that you have a horse tooth there. And I’m pretty sure it is an upper left molar or premolar. The color is pretty light so the best bet is that it is fairly young, but I doubt there would be an easy way to tell.
Best, Carl

From: Carl Mehling  Sent: Tuesday, September 15, 2015 1:54 PM To: \'Mark\' Subject: RE: Tooth identification
I’ve found horse teeth on beaches before. Basically anywhere people have been with their horses or anywhere human trash can travel to can be a place to find a horse tooth!),
(83,83,183,From: Linda Sent: Friday, September 11, 2015 7:00 PM  Subject: fossil pics
Mr.Carl Mehling,
Hello, we have found a rock with a variety of fossils in the rock, and we are curious to find of what type of fossils they are. Also, we would like to know if possible how old the rock and fossils are.
Thank you so much for your time and in advance for any findings.,From: Carl Mehling  Sent: Monday, September 14, 2015 4:03 PM To: \'Linda\' Subject: RE: fossil pics
Hi Linda,
Thanks for your email. I’m sorry but you photo is too blurry for me to properly ID. I think you probably do have fossils there but I can’t make them out very well. Could you send me some sharp photos? And if you could tell me where they were found I could probably figure out roughly how old they are.
Best, Carl),
(84,84,184,From: Rosa Sent: Saturday, September 12, 2015 5:27 PM  Subject: Impression on river rock
Hello....my husband found this while fishing by a creek in Bridgeport, CA.  Could it possibly be some kind of fossil?,From: Carl Mehling  Sent: Monday, September 14, 2015 4:08 PM To: \'Rosa\' Subject: RE: Impression on river rock
Hi Rosa,
Thanks for your email. The photos are a bit fuzzy so I’m having a little trouble making out the detail. I think I’m supposed to be looking at the fine, mesh-like pattern, yes? If so it looks like a bryozoan, which is a colonial aquatic animal. But it appears to be flaking off the rock. If this is the case it is more likely to be a modern bryozoan attached to the rock rather than a fossil bryozoan embedded in the rock. 
Best, Carl),
(85,85,185,From: Todd  Sent: Sunday, September 13, 2015 5:24 PM  Subject: Strange Rock
Hi Carl,  just wondering if you can help us id this rock.  We found it in shallow waters at the beach in Grand Cayman.  It feels like a smooth rock but likes like nothing I\'ve never seen before.  Is it some sort of fossil?  Thanks for your help.
Regards, Todd

From: Todd  Sent: Tuesday, September 15, 2015 1:59 PM  Subject: RE: Strange Rock
Thanks for taking time to solve the mystery.  Puffer Fish jaw,  I would never have guessed. ,From: Carl Mehling  Sent: Tuesday, September 15, 2015 1:39 PM To: \'Todd\' Subject: RE: Strange Rock
Hi Todd,
Thanks for your email. Looks to me like you have a puffer fish jaw. I can’t tell if it is fossil or not however: puffer fish seem to still live in Grand Cayman and a modern one could easily have this color. But if you Google “fossil puffer fish jaw” and look at the images you will find many examples that are quite similar to yours. Nice find!
Best,
Carl

From: Carl Mehling  Sent: Tuesday, September 15, 2015 2:29 PM To: \'Todd\' Subject: RE: Strange Rock
That’s what I’m here for! Be well.),
(86,86,186,From: Jeff Sent: Monday, September 14, 2015 9:51 PM  Subject: Fossil ID question
Hi Carl
Found your website while researching info on a piece I have. I think it is a fossil of some type. I did not find it - it was with a box of misc rock specimens I purchased at an estate sale. 
It looks like a tooth of some type - around the base area are what look like \"shells\". It is very heavy for it\'s size - I checked and a magnet is not attracted to it. 
Any info would be greatly appreciated.
Thanks
Jeff

From: Jeff  Sent: Tuesday, September 15, 2015 7:35 PM  Subject: Re: Fossil ID question
Hi Carl
Thanks for the response - it is a strange piece.  It weighs just under 1 lb - much heavier than rocks of it\'s size.  Maybe some sort of lead???
If I ever find out what it is I\'ll email you.
Thanks again
Jeff,From: Carl Mehling  Sent: Tuesday, September 15, 2015 2:18 PM To: \'Jeff\' Subject: RE: Fossil ID question
Hi Jeff,
Thanks for your email. I don’t really know what you have there but I do not get a fossil vibe from it. It’s lacking the finer details I’d like to see to feel confident identifying it as a fossil.  It certainly does have an iron look to it but if it were iron your magnet should have been attracted to it. Sorry, I’m at a loss!
Best, Carl

From: Carl Mehling  Sent: Wednesday, September 16, 2015 11:36 AM To: \'Jeff\' Subject: RE: Fossil ID question
Sounds good. I’m now thinking it t might be hematite, which is an iron mineral but is not magnetic. Something to look into.),
(87,87,187,From: Chanalle Sent: Monday, September 14, 2015 10:10 PM  Subject: Fossil Identification
Hi Carl,
My son found this fossil in our creek in central New York and we would love to have more information about it.  It appears that whatever it is, is still embedded in the rock. A very cool find for a 7 year old!  Thanks in advance!
Chanalle

From: Chanalle Sent: Tuesday, September 15, 2015 4:00 PM To: Carl Mehling Subject: Re: Fossil Identification
Awesome!  Thank you so much for your reply.  You have made my son\'s (and let\'s face it, my) day!  His dream is to become a paleontologist so to get an email from one made his little head explode :)
Thanks again!,From: Carl Mehling  Sent: Tuesday, September 15, 2015 2:25 PM To: \'Chanalle\' Subject: RE: Fossil Identification
Hi Chanalle,
Thanks for your email. Your son seems to have found a brachiopod, likely of a kind called a spiriferid. Brachiopods are marine invertebrates that are around today but go back at least 500 million years. They are not common today but at certain points in the past they were incredibly abundant, especially the Devonian Period (~409-354 million years ago). The Devonian rocks of New York are widespread and famous for their brachiopods. So my best guess is that this is a Devonian spiriferid and is at least 354 million years old. By comparison, the oldest known dinosaur is about 245 million years old. Nice find!
Best, Carl

From: Carl Mehling  Sent: Tuesday, September 15, 2015 4:08 PM To: \'Chanalle\' Subject: RE: Fossil Identification
My pleasure! It’s the best part of my job.),
(88,88,188,From: Cathy  Sent: Wednesday, September 16, 2015 10:04 AM  Subject: Fossil(?) Inquiry
Dear Mr. Mehling, 
I am enclosing several pictures of a jawbone fragment I found in the surf on a beach in Holgate, New Jersey. 
I think this may be a fossil because the bone is now a hard substance. The teeth remind me of an herbivore. Are either of these assumptions correct?
I can\'t imagine how this piece ended up on a barrier island, but there have been recent beach replenishments involving dredging sand from the ocean floor into the area.
Any information you could give me would be appreciated. Thank you for your time.
Sincerely,
Cathy

From: Cathy  Sent: Wednesday, September 16, 2015 2:11 PM  Subject: Re: Fossil(?) Inquiry
Thank you, it\'s a hobby. :) 
From: Cathy  Sent: Wednesday, September 16, 2015 5:11 PM  Subject: Re: Fossil(?) Inquiry
Perfect! What is that saying? If you love what you do, you will never work a day in your life.
I have to confess, I\'m so thrilled by your information that I wish we had \"Show and Tell\" at my job.

From: Cathy  Sent: Wednesday, September 16, 2015 1:30 PM  Subject: Re: Fossil(?) Inquiry
Dear Carl, 
Thank you so much for your information, very exciting news! I will post the pictures  to the Fossil Forum and let you if I receive any further information.
Regards,
Cathy

Fossil Herbivore Jaw Found In The Ocean
Started by cathy, Yesterday, 02:39 PM
Hello, my name is Cathy and I was recommended to your site by Carl Mehling of the American Museum of Natural History. I found a jaw fragment in the surf on Holgate Beach in New Jersey. He feels that it may be from a bison or musk ox dating to the Ice Age. Does anyone have any further information? Thank you!    

edd Posted Yesterday, 02:58 PM
I think possible Bison too...

glu Posted Yesterday, 03:04 PM
it looks like a bos primigenius jaw fragment, the ancestral progenitor of the modern ox

Harry Pristis Posted Yesterday, 03:26 PM
Hi, Cathy . . .
Welcome to the forum. 
Your find is certainly not musk ox, though I do think it is bovid -- either bison or cow (modern) -- as evidenced by the isolated stylids of the teeth. The fact there is cementum remaining on the teeth suggests to me that this is from a modern cow (cementum is preserved sometimes, but this looks quite fresh). 
Good hunting!

RichW9090 Posted Today, 12:35 AM
There is a specimen of Bos primigenius known from a find along the shore at Brigantine, unpublished.  I think the guy who found it is a member here, can\'t remember if it was here or another Forum I ran across him on some years ago.  The Brigantine site is a peat bed just off shore maybe 100 yards or less, and storms wash fossils up onto the beach from time to time, although I haven\'t collected there in 30 years.

bone2stone Posted Today, 04:45 AM
I agree with Harry, and it may be older than that ruler!!!
Take note that the phone# on the ruler only has 4 digits!!
Been a long time since I\'ve seen that !!!
BTW: Nice when you find teeth still in boney jaw material.
Jess B.

cathy Posted Today, 06:15 AM
Thank you so much for your help. Modern or primigenius, it was a fun find! 

Harry Pristis Posted Today, 12:22 PM
it\'s not Bos primigenius, the auroch, Cathy.  The range of the auroch never included New Jersey.
Here\'s an account of the range of B. primigenius from the IUCN Red List of Threatened Species:
Bos primigenius is Extinct. The aurochs had three subspecies: Bos primigenius primigenius from Europe and the Middle East; B. p. namadicus from India; and B. p. mauretanicus from North Africa. Only the nominate subspecies has survived until recent times.
Originally the aurochs occurred from the British Isles and southern Scandinavia, through most of Europe to northern Africa, the Middle East, central Asia and India. By the 13th century A.D., the aurochs\' range was restricted to Poland, Lithuania, Moldova, Transylvania and East Prussia (The Extinction Website, 2007). The last recorded live aurochs, a female, died in 1627 in the Jaktorów (Jaktorowka) Forest, Masovia, Poland (Grubb, 2005).
It is distributed worldwide under domestication (as Bos taurus), and feral populations have become established in Australia, New Guinea, the United States, Colombia, Argentina and many islands, including Hawaii, Galápagos, Hispaniola, Tristan da Cunha, New Amsterdam, Juan Fernandez Islands, and the United Kingdom (Chillingham cattle).

RichW9090 Posted Today, 12:41 PM
As I said, there is a specimen of the auroch from the Brigantine site.  It was identified by Roger Wood from Stockton College.  It is unknown if this is the only record of B. primigenius from North America, or might have been something tossed into the sea - fossils do get lost.  that\'s one of the reasons why Roger never published it, I suspect.

From: Cathy  Sent: Friday, September 18, 2015 7:53 AM  Subject: Re: Fossil(?) Inquiry
Hi, Carl, 
I think my best options would be DC or Philadelphia since those are the cities I visit most frequently. I\'ll keep you updated. If I am in NYC I will certainly go to AMNH. It would be a privilege to meet someone with such an infectious enthusiasm for fossils!
Thank you, 
Cathy,From: Carl Mehling  Sent: Wednesday, September 16, 2015 11:50 AM To: \'Cathy\' Subject: RE: Fossil(?) Inquiry
Hi Cathy,
Thanks for your email. I think you may have something pretty cooler there! And you are right that it’s an herbivore and it certainly has the appearance I would expect of a fossil from that context. My best guess is that it is a bison or possible a musk ox. And if we are on the right track here, it would be from the Ice Age. Fossils from that time period do occasionally show up on NJ beaches and dredged up off the shore. The shoreline back then was much farther out to sea so land animal fossils can turn up here in seemingly odd places. We currently don’t have anyone here who specializes in bovids who could confirm this ID but you should try posting it to the Fossil Forum to see what they say. The Forum is a diverse and adept group of amateurs and professionals. And if I have all of this correct, this would actually be a quite rare find! Let’s see what happens.
Bes, Carl

From: Carl Mehling  Sent: Wednesday, September 16, 2015 11:57 AM To: \'Cathy\' Subject: RE: Fossil(?) Inquiry
Fantastic photography, by the way!

From: Carl Mehling  Sent: Wednesday, September 16, 2015 2:36 PM To: \'Cathy\' Subject: RE: Fossil(?) Inquiry
And my hobby is fossils!

From: Carl Mehling  Sent: Wednesday, September 16, 2015 1:40 PM To: \'Cathy\' Subject: RE: Fossil(?) Inquiry
Great!

[Responding to her September 16, 2015 5:11 email]
From: Carl Mehling  Sent: Thursday, September 17, 2015 9:38 AM To: \'Cathy\' Subject: RE: Fossil(?) Inquiry
That’s all so nice to hear, Cathy! And I’ve been following the conversation on the Forum and I still feel the look is of a very old specimen. However, some of those folks who responded are very skilled at these kinds of IDs. That said, nothing beats an in-hand observation. I see via the Forum that you are in Delaware - Is there any way you could bring it to the NJ State Museum, here, or some other nearby natural history museum for up close observation? 
Best,
Carl

From: Carl Mehling  Sent: Friday, September 18, 2015 10:21 AM To: \'Cathy\' Subject: RE: Fossil(?) Inquiry
That all sounds great, Cathy!),
(89,89,189,From: Lindsey Sent: Wednesday, September 16, 2015 11:45 AM  Subject: Fossil found on beach in South Carolina
Hello Mr. Mehling! 
While on vacation at Edisto Beach, South Carolina my husband picked this up off Shell Island. We were wondering what kind of bone it is and what it came from! I have attached pictures. Thank you for any information! 
Sincerely, 
Lindsey

From: Lindsey
Sent: Wednesday, September 16, 2015 1:32 PM
Subject: Re: Fossil found on beach in South Carolina
Haha! Oh well, it\'s still cool 😊 thank you for the speedy reply! 

From: Lindsey
Sent: Wednesday, September 16, 2015 2:43 PM
Subject: Re: Fossil found on beach in South Carolina
We will! If anything finding our \"cool rock\" has inspired us to keep looking! I\'ll definitely be contacting you if we find anything else of interest 😊 thanks again! ,From: Carl Mehling  Sent: Wednesday, September 16, 2015 1:07 PM To: \'Lindsey\' Subject: RE: Fossil found on beach in South Carolina
Hi Family,
Thanks for your email. Unfortunately, I don\'t think what you found is a fossil bone. It has the wrong texture and grain to be a convincing piece of fossil bone. it\'s much more likely to be an oddly weathered chunk of sandstone matrix. Sorry for the boring news!
Best,
Carl

From: Carl Mehling  Sent: Wednesday, September 16, 2015 1:39 PM To: \'Lindsey\' Subject: RE: Fossil found on beach in South Carolina
No sweat! Get back out there and keep looking!

From: Carl Mehling  Sent: Wednesday, September 16, 2015 2:44 PM To: \'Lindsey\' Subject: RE: Fossil found on beach in South Carolina
Good luck!),
(90,90,190,From: Ron  Sent: Thursday, September 17, 2015 9:49 AM  Subject: possible fossil 
Hello thank you for your time. Ron

From: Ron  Sent: Thursday, September 17, 2015 10:43 AM To: Carl Mehling Subject: RE: possible fossil 
Hi Carl no need to apologize you where the only one that to the time to help me. I sent a few more pictures are these bone? Have a great day and thank you for your time. Ron

From: Ron  Sent: Thursday, September 17, 2015 4:23 PM  Subject: RE: possible fossil 
Hi Carl i found this little one this morning. I want to say thank you for your time and inport. I\'m a disabled veteran i just started doing this it\'s great. Could you please give me ideas on what to look for? thank you 

From: Ron  Sent: Friday, September 18, 2015 1:36 PM  Subject: RE: possible fossil 
Hi Carl I\'m in ware ma. 01082. Ron

From: Ron  Sent: Friday, September 18, 2015 3:37 PM  Subject: RE: possible fossil 
Okay thank you for your help,[Ron phoned the dept. and was passed on to me. Said he was a vet and was using a metal detector “in the river here.” Thinks he found the top of the spine and ribs of an Anchisaurus – he then said he was in MA when I asked. I gave him my email to send photos to.]

From: Carl Mehling  Sent: Thursday, September 17, 2015 10:03 AM To: \'Ron\' Subject: RE: possible fossil 
Hi Ron,
Thanks for the email. Unfortunately, I don\'t see any indication of bone there. What you more likely have is a weathered chunk of layered sedimentary rock. What appear to be ribs are the more durable layers that were more resistant to weathering. Sorry for the boring news!
Best,
Carl

From: Carl Mehling  Sent: Thursday, September 17, 2015 3:32 PM To: \'Ron\' Subject: RE: possible fossil 
Hmmm... These picture are too blurry to make the details out. Can you reshoot them very sharply? Right now they definitely don\'t look like bone.
Best,
Carl

From: Carl Mehling  Sent: Friday, September 18, 2015 1:01 PM To: \'Ron\' Subject: RE: possible fossil 
Again, the photos are very blurry but I\'m not seeing anything obvious that would ID these as fossils. If you tell me where you are I might be able to suggest so nearby fossil sites.
Best,
Carl

From: Carl Mehling  Sent: Friday, September 18, 2015 2:53 PM To: \'Ron\' Subject: RE: possible fossil 
Oh that\'s right - I forgot you said MA. that\'s a pretty difficult state to find fossils in. You probably know about the dinosaur tracks of the CT River Valley and I think there are some sites in the Valley where you can find fish but other than that I know surprisingly little. Sorry!),
(91,91,191,From: Sterling  Sent: Friday, September 18, 2015 10:52 PM  Subject: Fossile identification help
Hello im sterling and i have had these fossiles for a long time i got them from my art teacher 7 years ago as a gift could you help me identify these? The ruler is on the inches side

From: Sterling  Sent: Monday, September 21, 2015 6:54 PM
Subject: Re: Fossile identification help
Thank you very much!,From: Carl Mehling  Sent: Monday, September 21, 2015 4:02 PM To: \'Sterling\' Subject: RE: Fossile identification help
Hi Sterling,
Thanks for your email. The majority of your fossils appear to be fragments of turtle shell and crocodilian osteoderms. Osteoderms are pieces of bone under the skin that can serve as armor or muscle attachments. Most of the flat or partly flat pieces would be the turtle bones and the ones with the circular dimples are the osteoderms. The one bone you show as two pieces might be a limb bones from a turtle – I’m not entirely sure. If you know where they came from I might be able to give you an approximate age but since turtles and crocs have been around for a very long time an age would be a wild guess without locality info.
Best, Carl

From: Carl Mehling  Sent: Tuesday, September 22, 2015 10:36 AM To: \'Sterling\' Subject: RE: Fossile identification help
My pleasure!),
(92,92,192,From: Marion  Sent: Saturday, September 19, 2015 11:50 AM  Subject: Please help
Hello.  I have been trying to find out about this piece I found amongst the rocks at the edge of the ocean at Ft. Stark in Hew Hampshire.  If you can shed any light on this, I would be grateful.  It is very light in weight.  Thank you for your time.  

From: Marion  Sent: Tuesday, September 22, 2015 7:58 AM  Subject: Re: Please help
Thank you so much.  I will need to read this several times to fully understand.  First I need to learn to pronounce the words!  It is a treasure for me.  Isn\'t nature fantastic?  Thank you for your time.  Marion McDougall a.k.a mystery person,From: Carl Mehling  Sent: Monday, September 21, 2015 4:28 PM To: \'Marion\' Subject: RE: Please help
Hello Mystery Person,
Thanks for your email. What you have is a vertebral epiphysis of a mammal. Bones often begin as several parts that fuse together as they mature. Vertebra have a large spool-shaped part capped on both ends (where they articulate to the next vertebrae) by epiphyses that fuse on to it as the vertebra matures. Your find is an epiphysis that did not fully fuse to the vertebral body. Based on the fact that you found it on the shore, and that fact that it is so round, it could easily be from a dolphin. Even when the animal is fully mature, dolphins and other whales can have vertebrae with unfused epiphyses. And based on how white it is I would guess that it is fully modern, i.e., not a fossil. Nice find!
Best, Carl

From: Carl Mehling  Sent: Tuesday, September 22, 2015 10:38 AM To: \'Marion\' Subject: RE: Please help
My pleasure, Marion! And absolutely: Nature is FANTASTIC!),
(93,93,193,From: Aaminah  Sent: Saturday, September 19, 2015 6:58 PM  Subject: Unusual fossil found
Could some one please help me I have found a very unusual fossil..  And am just trying to figure out what it is. 
Thank you,From: Carl Mehling  Sent: Monday, September 21, 2015 4:36 PM To: \'Aaminah\' Subject: RE: Unusual fossil found
Hi Mystery Person,
Thanks for your email. I\'m not sure what you have but I\'m not seeing the kind of things I would want to see in order to confidently ID it as a fossil. It could be a fragment of a fossil shell, or a layered mudstone (i.e., not fossil), or some other non-fossil mineral or rock formation. There just isn\'t enough detail available to make a proper guess. Sorry!
Best,
Carl ),
(94,94,194,From: Kellie  Sent: Saturday, September 19, 2015 11:17 PM  Subject: Fossil id
I found this while creek sifting in east-central Alabama. It is about 2\" and  is light weight with narrow ridge running down one side.
Have a blessed day,
Kellie

I enhanced two of the shots:

From: Kellie  Sent: Saturday, September 19, 2015 11:20 PM  Subject: Fossil id
Found this while creek sifting in east-central Alabama. Its is small with design on the one side,just curious as to what it is.
Thanks,
Kellie,From: Carl Mehling  Sent: Tuesday, September 22, 2015 10:43 AM To: \'Kellie\' Subject: RE: Fossil id
Hi Kellie,
Thanks for your email. It looks like you have 2 fossil bones there. Might you be digging in the local Late Cretaceous sediments? If so, the first one (the long one) could be a turtle bone but that’s a pretty loose guess. It doesn’t have features that exactly recall anything to mind. The second one is a vertebra of some sort. I feel like I’ve seen sawfish vertebrae that were very much like yours but that, too, is not a very confident ID. Sorry for the vagueness, but nice finds! Keep digging.
Best, Carl),
(95,95,195,From: Brenna Sent: Sunday, September 20, 2015 6:05 PM  Subject: Possible fossilized tooth?
Hi,
On a recent trip home (upstate ny) I refound something that I had picked up as a child on the shore of Seneca lake. I\'ve always thought it looked like a fossilized tooth, although one with odd layering in the rock. I didn\'t have a ruler to hand when I took the pictures but it\'s about an inch long. I know it may well not be a fossil at all but any information about it would be greatly appreciated!
Thanks,
Brenna

From: Brenna Sent: Thursday, September 24, 2015 11:56 AM  Subject: Re: Possible fossilized tooth?
Hi Carl,
Thank you so much for this information! This is absolutely fascinating stuff!
Thanks again,
Brenna,From: Carl Mehling  Sent: Tuesday, September 22, 2015 10:54 AM To: \'Brenna\' Subject: RE: Possible fossilized tooth?
Hi Brenna,
Thanks for your message. I agree that you have a fossil but it\'s not a fossil tooth. it\'s very likely a horn coral. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250). And unless this was brought into the Seneca Lake area from farther north by glaciers, it would probably be Devonian in age (~354-409 million years ago) since all the local rocks Devonian. By comparison the oldest known dinosaurs are about 245 million years old. Nice find!
Best, Carl

From: Carl Mehling  Sent: Thursday, September 24, 2015 12:08 PM To: \'Brenna\' Subject: RE: Possible fossilized tooth?
My pleasure!),
(96,96,196,From: amy  Sent: Wednesday, September 23, 2015 11:14 AM  Subject: fossil identification
Dear Mr. Mehling,
I would appreciate your help in identifying these 2 pieces for my son. He collected them at Big Brook NJ recently.
Here is the first bone:
.
He is not sure whether this is a tooth or a claw:

Thank you for your time,
Amy

From: amy  Sent: Wednesday, September 23, 2015 12:53 PM  Subject: Re: fossil identification
Thank you Mr. Mehling. We just tapped it on a cup and it appears to be mineralized as it made the ‘tink tink’ sound. So does that mean it’s a turtle bone fossil?
~Amy

From: amy  Sent: Wednesday, September 23, 2015 1:13 PM  Subject: Re: fossil identification
Ok, thank you again for your time,much appreciated!
~Amy,From: Carl Mehling  Sent: Wednesday, September 23, 2015 12:47 PM To: \'amy\' Subject: RE: fossil identification
Hi Amy,
Thanks for your email. The first bone may be a turtle limb bone. It’s a bit hard to read. It may be fossil or it may be modern. If you tap it on a ceramic cup and it makes a very sharp “tink tink” sound it might be heavily mineralized, which would make it more likely to be a fossil. If the tapping sound is more like a “tock tock,” chances are it is modern. The other piece is a fang of a fish called Enchodus. Enchodus is the most common bony fish found in Big Brook. Nice finds!
Best, Carl

From: Carl Mehling  Sent: Wednesday, September 23, 2015 12:55 PM To: \'amy\' Subject: RE: fossil identification
All I can say is that makes it more likely to be a fossil. The interpretation of that sound is a bit subjective. Plus mineralization doesn’t always mean it’s old enough to be a fossil. Sorry we can’t be more definitive.
-Carl

From: Carl Mehling  Sent: Wednesday, September 23, 2015 1:35 PM To: \'amy\' Subject: RE: fossil identification
My pleasure, Amy!),
(97,97,197,From: Bill  Sent: Thursday, September 24, 2015 9:09 AM  Subject: Fossil identification
Can you identify the fossil I found on Lake Erie at Headlands State Park in Ohio?
Thanks,
Bill

From: Bill  Sent: Thursday, September 24, 2015 12:46 PM  Subject: Re: Fossil identification
Thanks Carl,
I appreciate you taking the time to respond.
Bill

From: Bill  Sent: Friday, September 25, 2015 2:33 PM  Subject: Are these fossils
Hello Carl,
What do you think?  Are these fossils?  Also found these at Headlands beach state park.  
Thanks,
Bill

From: Bill Sent: Tuesday, September 29, 2015 5:33 PM  Subject: Re: Are these fossils
Thanks for your expert opinion Carl.
Bill

From: Bill Sent: Friday, October 09, 2015 12:40 PM  Subject: Fossils from the beach?
Carl,
Found several of these at the beach at Pawleys Island South Carolina today.  Some were brown like the picture and some were white.
They could be fossils or maybe just coral.
What do you think?
Thanks,
Bill

From: Bill Sent: Sunday, October 11, 2015 9:25 AM  Subject: Re: Fossils from the beach?
Thanks Carl!

From: Bill Sent: Friday, October 30, 2015 1:28 PM  Subject: Fossils???
Hi Carl,
Found these at Headlands beach state park today.  First picture is really interesting.
What\'s your opinion.  Are they fossils?
Thanks,
Bill

From: Bill  Sent: Monday, November 02, 2015 1:44 PM  Subject: Slug fossil
Carl,
What do you think about this one?  It has lateral lines running across the body.  It is hard like a rock.  Looks like a slug fossil.
What do you think?
Thanks,
Bill

From: Bill  Sent: Tuesday, November 03, 2015 7:53 PM  Subject: Slug fossil
Carl,
I sent this from my phone yesterday, but not sure if it went.  Anyway, what are your thoughts?
Thanks,
Bill
[Same photo attached]

From: Bill  Sent: Friday, November 06, 2015 1:13 PM  Subject: My wife\'s find
Carl,  
Here\'s one my wife found.  Looks like a sea she\'ll.  What\'s your opinion?

From: Bill  Sent: Friday, November 06, 2015 1:17 PM To: Carl Mehling Subject: Slug
Carl I tried but can\'t get a clear shot of this.  The piece is rather fuzzy looking.  I need to moisten it to get the lines to show.
Bill

From: Bill Sent: Friday, November 06, 2015 1:19 PM  Subject: L shaped fossil
Carl,
What\'s you opinion on this one? 
Thanks 
Bill,From: Carl Mehling  Sent: Thursday, September 24, 2015 12:14 PM To: \'Bill\' Subject: RE: Fossil identification
Hi Bill,
Thanks for your email. ). The photo is very blurry but I’m pretty sure I see a fossil coral there on the left-hand side of the rock. The other things might be marine shell fragments of some kind. Unless this was brought to the Lake Erie shore from farther north by glaciers, it would probably be Devonian in age (~354-409 million years ago) since all the local rocks there are Devonian. By comparison the oldest known dinosaurs are about 245 million years old. Nice find!
Best, Carl

From: Carl Mehling  Sent: Thursday, September 24, 2015 12:49 PM To: \'Bill\' Subject: RE: Fossil identification
My pleasure!

From: Carl Mehling  Sent: Tuesday, September 29, 2015 2:34 PM To: \'Bill\' Subject: RE: Are these fossils
Hi Bill,
Those are a bit shy on detail but I’ll definitely go with fossil as an ID here. Most likely more marine invertebrates.
Best, Carl

From: Carl Mehling  Sent: Wednesday, September 30, 2015 11:46 AM To: \'Bill\' Subject: RE: Are these fossils
My pleasure!

From: Carl Mehling  Sent: Saturday, October 10, 2015 1:46 PM To: \'Bill\' Subject: RE: Fossils from the beach?
Hi Bill,
This is definitely coral but it would be very hard to determine if it were old enough to be fossil or not. But gorgeous, huh?
Best,
Carl

From: Carl Mehling  Sent: Friday, October 30, 2015 1:37 PM To: \'Bill\' Subject: RE: Fossils???
I’d say yes, again, Bill! The first one is really hard to read. Maybe corals, maybe mollusks. But that second one sure looks like a mess of crinoid columnals. Nice finds!
Best, Carl

From: Carl Mehling  Sent: Wednesday, November 04, 2015 1:49 PM To: \'Bill\' Subject: RE: Slug fossil
Hi Bill,
Sorry about the delay – I was away. The fossil is a bit blurry in the photo so I can’t be sure about it but my best guess at the moment is that it is a coral of some kind. Can you send a sharper image? Best,
Carl

From: Carl Mehling  Sent: Friday, November 06, 2015 1:43 PM To: \'Bill\' Subject: RE: L shaped fossil
Hi Bill,
The one your wife found looks a lot like a brachiopod. And that makes sense against the other fossils you are finding. The most recent one you sent is too weak on details to say much. It might be something, might not. Can’t tell.
Best, Carl),
(98,98,198,From: Allen  Sent: Friday, September 25, 2015 6:33 AM  Subject: Identification 
Hi my name is Allen I have been collecting fossils for 20 years found a lot of them in mazon creek area need information on we\'re I can fiscally either take some of my finds or send them to have someone with extensive knowledge in petrified fossils look at them or even some kind of independent test lab sent these pictures to a paleontologist told me was a iron slug ,not a pro but know how to use magnet not iron thank you for your time

From: Allen  Sent: Tuesday, September 29, 2015 6:09 PM  Subject: Thank you
Carl thank you for input will keep trying . One more set of photos      Found in same area,Do you think this could be something,After cleaning this ,looks to be tooth? And left mark on bigger piece. Also another mark looks different, don\'t know but looks like tooth mark.

From: Allen  Sent: Thursday, October 01, 2015 5:57 PM  Subject: Last one
don\'t know found in same area fits all criteria what do you think?,From: Carl Mehling  Sent: Tuesday, September 29, 2015 2:14 PM To: \'Allen\' Subject: RE: Identification 
Hi Allen,
Thanks for your email. Sometimes fossils be very hard to confidently ID from photos. However, if the one in you photos is from Mazon Creek the black marks in the rock could very well be coalified plant remains. They almost certainly could not be IDed any tighter than that. The best way to have things IDed is to put them in the hands of a local expert. You should try the folks at the Field Museum. I know they have had a long history of helping Mazon Creek fossil hunters. There are not really test labs for fossil identification - nothing can replace the eyes of an expert.
Best,
Carl

From: Carl Mehling  Sent: Wednesday, September 30, 2015 12:40 PM To: \'Allen\' Subject: RE: Thank you
Sorry, Allen. I see no fossils there. Just natural fracture patterns and mineral stains.

From: Carl Mehling  Sent: Friday, October 02, 2015 12:51 PM To: \'Allen\' Subject: RE: Last one
Sorry, Allen. This one looks exactly like the kind of rock that would not preserve fossils. It looks metamorphic or igneous rather than sedimentary.),
(99,99,199,From: Shane  Sent: Friday, September 25, 2015 8:48 AM  Subject: Not sure if its a fossil.
I found this in Arizona digging trenches and I don\'t know what to think of it. Could you help me understand what I have found?

From: Shane  Sent: Friday, September 25, 2015 9:02 AM  Subject: To Carl Mehling
This was pasted down to me by my grandfather when he passed away but never told me what it was. Now that I\'m older I\'m curious to what it is. It where is probably over 10 pounds and is about 9 inches long x 7 inches wide as you can see in the pictures I sent you. If you could help me that would be great.,From: Carl Mehling  Sent: Tuesday, September 29, 2015 2:28 PM To: \'Shane\' Subject: RE: To Carl Mehling
Hi Shane,
Thanks for your emails. The first photos you sent me are of a fossil but it did not come from Arizona. It came from Morocco. Those are straight-shelled nautiloids, sometimes called Orthoceras or orthocones. They are Devonian in age (~354-409 million years old) and have been dressed up for commercial sale. The rock surrounding each large nautiloid was polished along with areas of rock with no obvious nautiloid in order to enhance the look of the piece. These are extremely common on the fossil market. If you are anywhere near Tucscon this might have been tossed from the huge annual rock, mineral, and fossil show they have each year. Do a Google image search for “moroccan orthoceras” and you’ll find many images. The second set of photos you sent are of an ammonite. These are also shelled cephalopods and they went extinct around 65 million years ago. The center whorls of your specimen seem like they have been carved to enhance their detail – a very common alteration of commercial specimens.
Best, Carl),
(100,100,200,From: Chrissie Rosamond [mailto:crosamond85@gmail.com]  Sent: Friday, September 25, 2015 8:55 PM  Subject: Bog dinosaur ?
It looks like it still has skin

From: Chrissie Rosamond [mailto:crosamond85@gmail.com]  Sent: Friday, September 25, 2015 8:56 PM  Subject: Bottom of it
What it eat maybe,From: Carl Mehling  Sent: Tuesday, September 29, 2015 2:53 PM To: \'Chrissie Rosamond\' Subject: RE: Bottom of it
Hi Chrissie,
Thanks for your email. Unfortunately, I don’t see anything but a rock in the photos you sent. It lacks the details I would like to see in order to confidently ID it as a fossil. Sorry.
Best, Carl),
(101,101,201,From: Charley Sent: Sunday, September 27, 2015 2:36 PM  Subject: FOSSILE?
Hi Carl: Ran across this last summer while hiking in some canyons just outside the Navajo Reservation, didn\'t think much about it, figured it was just an interesting pile of rocks. Wife said, \"Ya ought to send that to somebody, might be something important.\" Yeah, there are fossils in the area ... See #1151.  So anyway ... maybe it\'s a critter you\'ve been looking for.  Photos attached. Charley,From: Carl Mehling  Sent: Tuesday, September 29, 2015 2:46 PM To: \'Charley\' Subject: RE: FOSSILE?
Hi Charley,
Thanks for your email. I can’t easily make out what is in the first two pictures. I guess they could be fossils but they are too far away for me to make out the relevant details. The last photo appears to be a shell so if those other things are fossils they could easily be some sort of marine invertebrates. Can you send me some close ups of the objects in question? And a tight locality might help me figure out how old the fossil might be.
Best, Carl),
(102,102,202,From: Gerry  Sent: Sunday, September 27, 2015 11:20 PM  Subject: Unknown fossil object
Carl Mehling- Sir, Please identify this fossil if possible. I have had local amateur and professionals inspect and none can say what this is. Some have ideas but are unwilling to say with certainty exactly what it is. I acquired this at a local garage sale and was told by the seller it came from an Indian campfire in Wyoming found by her now deceased father. She later recanted the story when I inquired further of it and now I have nothing to go on as to where it\'s from and when it came to her fathers hands.  On the ends it appears to be fossil wood, the sides are unlike wood and have a black coating on parts of them and appear to be smooth as bone. If you can view the broken middle it looks black as coal suggesting it has been lying in this stuff and that is the preserving agent. It has been suggested it is from an mammal not of the new world but of Europe-Asia. Please contact me with your expert opinion and if you need more information or photos I will send them. Sincerely yours- Gerry

From: Gerry  Sent: Wednesday, September 30, 2015 2:19 PM  Subject: Re: Unknown fossil object
Carl - I thank you for your quick response. I only wish that you would have been able to identify this item. If you would be willing to look further I would send more photos, however I understand that you are probably very busy. Thank you again. Gerry

From: Gerry Sent: Wednesday, September 30, 2015 7:00 PM  Subject: Fossil Carl- Will these help?  Gerry

From: Gerry  Sent: Thursday, October 01, 2015 6:12 PM To: Carl Mehling Subject: Re: Fossil
Carl-  Thanks again for your quick response- you are an exception in this world of requests for information. The woolley rhino theory has been suggested by two local paleo people. At the Hot Springs S.D. Mammoth site there is a woman who works there from Russia. She has experience with these animals in Russia and so I sought her out last week. Upon examination she at first would not comment, then we told her what some others had thought it is and then she said that\'s what she initially was thinking. After reexamining, she was undecided indicating that it is inconclusive in that the sides were smooth and that in her experience they should have individual hair like lines. A bone preparer, at the same facility- a young woman, thought it to be fossil wood. So as it stands I have 2 probable Woolley Rhinos, 1 undecided, 1 fossil wood, and now your maybe one or the other. This is sort of like a quest for me to find the actual answer and I will continue to seek answers until it will be positively identified if possible. To have a piece of wood in this shape suggests human shaping to me or it\'s very unusual to be naturally configured. The rhino theory seems plausible but maybe through fossilization  it has altered it unrecognizable in its usual form. At any rate I thank you for your input and if there is anything I can do to return the favor please let me know. Gerry,From: Carl Mehling  Sent: Tuesday, September 29, 2015 3:13 PM To: \'Gerry\' Subject: RE: Unknown fossil object
Hi Gerry,
Thanks for your email. Sometimes fossils be very hard to confidently ID from photos. I am not seeing a lot of detail that I can use to confidently ID this as a fossil. It could be coalified plant remains, which would parallel your ID of it as fossil wood, but being more certain about that ID could prove difficult. I see very little to suggest it is part of a fossil mammal. The best way to have things IDed is to put them in the hands of a local expert, as you did. It may just not have enough detail to be properly identified. Sorry. Best, Carl

From: Carl Mehling  Sent: Wednesday, September 30, 2015 2:41 PM To: \'Gerry\' Subject: RE: Unknown fossil object
Hi Gerry, I\'d be happy to look at more photos but I just think that they won\'t offer much more. Your photos already have been very good. 
Best, Carl

From: Carl Mehling  Sent: Thursday, October 01, 2015 4:10 PM To: \'Gerry\' Subject: RE: Fossil
Hi Gerry,
These are, indeed, better photos. I can definitely see this as a piece of fossil wood where the bark or outer layer of wood has carbonized. And the cross-section shows a pattern that could easily show compressed wood. To be more sure would require polishing that face and shooting extreme close-ups. 
That said, I took a longer look at is and might slightly retract something I said earlier. It does have some similarities to the horn of a fossil rhino called Coelodonta. I don’t know what they look like in cross-section but the overall shape and the carbonized exterior are in favor of that interpretation. But there are also details that it lacks that I’d like to see in order to be more confident about that ID.
The important thing here is not to favor one idea over the other because one is more exciting. To me, rhino is more exciting than wood, and maybe to you, too. But as I stated before, the only real way to strengthen either of these views is to have an expert observe this thing in hand.
Best, Carl

From: Carl Mehling  Sent: Friday, October 02, 2015 12:53 PM To: \'Gerry\' Subject: RE: Fossil
Very interesting, Gerry! If you do wind up finding out what this is I’d love to know as well.
Best, Carl),
(103,103,203,From: April  Sent: Tuesday, September 29, 2015 2:00 PM Subject: Small marine fossils for identification
Dear Sir,
I recently found two small fossils in a pile of gravel that I had delivered from a local quarry.  The stone on the left in the attached photo is an impression of a shell, while the stone on the right seems to be filled with a \"mesh\".  Is it a type of coral?
The quarry the stones came from is located southeast of Brookings, South Dakota, on the eastern side of the state.
Thank you very much for any help that you can give me.
April,From: Carl Mehling  Sent: Tuesday, September 29, 2015 3:44 PM To: \'April\' Subject: RE: Small marine fossils for identification
Hi April,
Thanks for your email. I think your IDs are pretty good. The shell is likely a brachiopod. They are marine invertebrates and have been on Earth for at least the last half billion years. They are still here in reduced diversity but in certain time periods they were incredibly diverse and abundant. The other one does indeed look like a coral. Many of the other round holes in that rock are likely the same. If these rocks truly did originate near Brookings they would be Late Cretaceous in age (~65-90 million years old). And at that time there was a seaway in that part of the country so everything fits together very nicely. Nice finds!
Best,
Carl),
(104,104,204,From: James  Sent: Wednesday, September 30, 2015 10:49 AM  Subject: Dinosaur bone?
Hi Carl
This has been in the basement for years. The story is that my grandmother found this in the Alberta Badlands in the 1960s. I have always been told it was a dinosaur bone but have never had it identified.
Any information you might be able to provide about this would be greatly appreciated.
I forgot to add anything for scale but the size of the bone is about that of a closed fist
Thank You
James

From: James  Sent: Wednesday, September 30, 2015 10:51 AM  Subject: Fossils
These were found along the shores of Georgian Bay. Any idea what they might be. We are thinking of the round objects with the star/flower shape in the centre.They are about 2mm in diameter.
Thanks!
James,From: Carl Mehling  Sent: Wednesday, September 30, 2015 11:33 AM To: \'J MacDougall\' Subject: RE: Fossils
Hi James,
Thanks for your emails. Your first piece is almost certainly fossil bone. And based on where it is supposed to have been found, the color, the preservation, and the size, I have no good reason to believe it is not a chunk of dinosaur bone. Sadly, I can’t take the ID any further. It is just a fragment and lacks the specific details to say what species it came from or even what bone in the animal it is. However, the majority of dinosaur fossils up there come from hadrosaurs (duck-billed dinosaurs) with ceratopsians (horned dinosaurs) coming in for a close second. Your piece is most likely from within the Late Cretaceous and should be about 75-78 million years old.
The other piece has crinoid columnals in it. Crinoids are stemmed relatives of starfish that have been on Earth for the last half billion years or so. Their stems are composed of stacked disks of calcium carbonate that tend to disarticulate after the death of the animal. What you have are these individual disks. And the five-pointed stars in each one reflect the same five-fold symmetry seen in starfish and many other echinoderms. I don’t know Georgian Bay fossils very well but it would be  good guess that these are probably 100s of millions of years old from a time when crinoids were extremely common in the sea.
Nice finds!
-Carl),
(105,105,205,From: Clare  Sent: Wednesday, September 30, 2015 12:37 PM To: Carl Mehling; Ross Subject: request for fossil ID ... 
Dear, dear Carolus, My friend Brandon found this massive specimen at the Lower Falls, Rochester, NY (see below). Melanie H in Inver paleo said that site is Silurian. Do you think this baby here might be a turtle shell? Could it be? Or is it \"just a snail\"?

From: Clare  Sent: Wednesday, September 30, 2015 12:38 PM To: Carl Mehling Subject: Fwd: Brandon for scale ....

From: Clare Sent: Wednesday, September 30, 2015 1:55 PM  Subject: Re: request for fossil ID ...
SKI ... you are so prompt, my goodness ... thank you. So, both fossils are just snails, and we\'ll leave it at that hahahah. My friend will be so pleased with your analysis.
Clare,From: Carl Mehling  Sent: Wednesday, September 30, 2015 1:01 PM To: \'Clare\' Subject: RE: request for fossil ID ... 
Hey Ski!
Well, first off I can heartily shoot down turtle. The first turtles are way post-Silurian and the first piece has only the most superficial resemblance to a turtle. It’s hard to be sure because of what looks like a flaking mud or bacterial crust on the rock, but I’m not really getting a strong fossil signal form this one. I think it’s a purely geological design. But the one in the second email has more promise. That one looks like aquatic invertebrate bioturbation, probably marine. They look like they might be branching, which to me suggests  tunnels from burrowing crustaceans, but it’s hard to say if I’m seeing branching and it’s usually hard to say what creature made what trace fossil. This could be crustaceans, echinoderms… or just snails…
Best,
Carolus),
(106,106,206,From: Tom  Sent: Thursday, October 01, 2015 4:33 AM  Subject: Unknown Fossil
Hello Carl Mehling,
I have recently come back from a trip to China. I was looking everywhere for fossils as I am an amateur collector. I found this being sold in a rural village nearby and had to buy it, but I am not sure exactly what it is. I think it is some form of reptile, could it be a pterosaur? The specimen is 24cm long.
It would be great if I found out what it was. Many Thanks. Tom

From: Tom  Sent: Friday, October 02, 2015 1:17 PM  Subject: RE: Unknown Fossil
That is a shame, I was very excited when I saw it. I did think it might be but I am a collector so I had to take the risk.
Thanks for your help though, much appreciated Tom

From: Tom  Sent: Friday, October 02, 2015 1:19 PM  Subject: RE: Unknown Fossil
Do you know what species it is a fake cast of? Or is it just a general skeleton, not based on anything?
Thanks Tom

From: Tom  Sent: Friday, October 02, 2015 1:28 PM  Subject: RE: Unknown Fossil
Oh ok, I also sent the photos to the London Natural History museum at the same time as I did to you for extra identification and I mentioned that from the research I had done myself I thought it might be an archaeopteryx.
Thats great to know, thanks again
Have a nice day Tom

From: Tom   Sent: Monday, October 05, 2015 9:42 AM  Subject: RE: Unknown Fossil
Hello again Carl,
I was wondering if you know what species of Dactylioceras Ammonite this is?
Thanks Tom

From: Tom  Sent: Sunday, October 11, 2015 4:14 PM  Subject: RE: Unknown Fossil
Ok, thanks Carl ,From: Carl Mehling  Sent: Friday, October 02, 2015 12:58 PM To: \'Tom\' Subject: RE: Unknown Fossil
Hi Tom,
I hate to be the one to tell you this, but I feel very strongly that this is a fake. This kind of fake is extremely common in China. It is a very thin cast of a poorly sculpted skeleton adhered to a genuine piece of rock. Caveat emptor!
Best, Carl

From: Carl Mehling  Sent: Friday, October 02, 2015 1:21 PM To: \'Tom\' Subject: RE: Unknown Fossil
No one is born knowing fossils. We all make similar errors. Think of it as a piece of folk art!

From: Carl Mehling  Sent: Friday, October 02, 2015 1:22 PM To: \'Tom\' Subject: RE: Unknown Fossil
It’s trying to be an Archaeopteryx or something similar. It’s pretty generic, really.

From: Carl Mehling  Sent: Friday, October 02, 2015 1:45 PM To: \'Tom\' Subject: RE: Unknown Fossil
My pleasure!

From: Carl Mehling  Sent: Friday, October 09, 2015 1:30 PM To: \'Tom\' Subject: RE: Unknown Fossil
Sorry, Tom: I don’t. And our ammonite expert focuses on much younger ammonites. But I can say that it looks perfectly genuine!
Best, Carl ),
(107,107,207,From: Barrett Sent: Thursday, October 01, 2015 10:25 AM  Subject: Fossil ID
Good Morning Mr Mehling,
I found this while walking along the beach on Topsail Island, NC yesterday and have no idea what it could be. A tooth? A tusk? A plant?! Thanks for having a look, have a great day.
Best,
Barrett 

From: Barrett  Sent: Friday, October 02, 2015 3:10 PM  Subject: Re: Fossil ID
Wow! I never would have placed that. Thank you for your help, I\'m gonna keep looking!
-Barrett,From: Carl Mehling  Sent: Friday, October 02, 2015 1:02 PM To: \'Barrett\' Subject: RE: Fossil ID
Hi Barrett,
Ooooh, that makes me happy! Your guess of tooth is spot on. By my reckoning you have a part of the upper incisor of the giant Ice Age beaver, Castoroides. Well done! These are not at all that common. And you earn extra points for having an actual fossil (most of these kinds of emails are figments), correctly guessing what it was (at least to tooth), and having the sense to use caution with your identification. You deserve such a nice fossil!
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 07, 2015 11:57 AM To: \'Barrett\' Subject: RE: Fossil ID
My pleasure! More fossils await you!),
(108,108,208,On Fri, Oct 9, 2015 at 11:17 AM, Shadi wrote:
Thank you, good sir. ,[Shadi came by with the attached video of a bone his nephew found on a beach. I ruled out vertebra, rib, most skull bones, limb bones, most whale bones, etc.]

[He came by with the bone on 6 Oct and had shown it to folks in Mammalogy, the Prep Lab, and some other paleo folks. Will thought whale rib or jaw was a possibility but I ruled those out. Threw out turtle, too. Would up thinking maybe cow or horse scapula fragment. Shadi, Lindsay, Alana, Ana, Will, Nicole and I all went down to the fossil bovid floor to compare the piece to the scapula of a mounted bison skeleton. Matched fairly favorably.]

From: Carl Mehling [mailto:cosm69@gmail.com]  Sent: Thursday, October 08, 2015 9:04 PM To: Shadi Eliya <seliya@amnh.org> Subject: For Finneas!),
(109,109,209,,[This is the same guy who phoned the dept ~4 Oct and was passed on to me. The message said he was in Dallas and was coming back to NY on 5 October. He had found 2 fossils in TX that we “must see”: A dinosaur egg (confirmed) and an animal head 2 million years old.]

From: Julia Kramer  Sent: Thursday, October 01, 2015 12:19 PM  Subject: Fossil ID
Hey,
This man has called the communications department a couple of times, and finally just sent over some images. He says he has found a dinosaur egg, and maybe another fossil and I figured I would pass it on to you. He attached his information as a txt file, so I have just copy and pasted it below.
\"I fully believe that this is a prehistoric dinosaur egg with the embryo still inside I found this in the state of Texas, and the other fossil seems to be a head and back with the spine and other things that you would know better than me showing on the fossil. I¹ve been told by folks in a science Museum out here that this is 2 million years old and it¹s the holy Grail I will be back in New York October 5 if you need to reach me before then you can call me at 469-804-4421 my cell number is 347-573-3850 my name is Mitch thank you in advance\"
Thanks!
Julia Kramer
Publicist
American Museum of Natural History
(212) 496-3306

From: Carl Mehling  Sent: Wednesday, October 07, 2015 12:06 PM To: Julia Kramer Subject: RE: Fossil ID
Hi Julia,
Thanks for your email. I have had a look at the photos, and although it is sometimes hard to be sure with photos, I\'d be very surprised if this was a fossil egg.  It does somewhat resemble an egg, but it is much more likely to be a sedimentary concretion of some kind – it’s resemblance to an egg is merely accidental. Concretions often form when some object acts as a “seed” for cementation of sediment. The subtle concentric layering adds weight to this interpretation. On occasion, the thing that initiates the concretion, the “seed,” can be a fossil. To find this out would require finding out exactly what is in the center. 
Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine, specific kind of surface ornamentation (the smoother the \"shell,\" the less likely it is to be a non-bird dinosaur egg) or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. Ironically, one strong indication that this is not an egg is that it is so egg-shaped: most fossil eggs are not \"egg-shaped\" because most fossil eggs come from non-avian dinosaurs and are everything from spherical to torpedo-shaped. 
Additionally, the thickness of the “shell” certainly rules out egg. Embryos in hard-shelled terrestrial eggs need shells through which they can conduct gas exchange – basically so they can breathe. Past a certain thickness, this becomes impossible. This specimen’s “shell” is much too thick.
As for the other piece, the photos are very blurry. If the pattern seen in the close-ups is what he thinks is fossil that pattern is actually merely the way rocks like that fracture. 
In the future you can feel free to pass these folks directly on to me.
Best,
Carl

From: Julia Kramer  Sent: Wednesday, October 07, 2015 12:22 PM  Subject: Re: Fossil ID
Thanks, we do get calls about this on a semi-regular basis, so its okay to just give them your email?
Thanks!

From: Carl Mehling  Sent: Wednesday, October 07, 2015 12:24 PM To: Julia Kramer Subject: RE: Fossil ID
Absolutely! Thanks!),
(110,110,210,From: John Sent: Sunday, October 04, 2015 12:39 PM  Subject: Fossil identification 
Good morning,
I found this (see pics) yesterday in the woods and was curious what I might be? Location is in western Arkansas.
You can contact me at of you need more information.
Thanks,,From: Carl Mehling  Sent: Wednesday, October 07, 2015 12:22 PM To: \'John\' Subject: RE: Fossil identification 
Hi John,
Thanks for your email. I\'ve had a look at your photo and think you might have a trace fossil there. Trace fossils record the activities of organisms. Some kinds are footprints, tooth marks, burrows, etc. Yours reminds me of certain feeding traces of aquatic animals as they tunnel through the seafloor. Have a look at the \"digitating feeding probes\" on this page: http://www.northtexasfossils.com/tracefossils.htm or do an image search for Arthrophycus. Nice find!
Best,
Carl),
(111,111,211,From: Thomas Sent: Sunday, October 04, 2015 7:29 PM  Subject: Fossil to identify please
Good morning? 
My name is Thomas. I found this on the shore of Moose River. Moose River is located in North Eastern Ontario Canada - At the southern tip of James Bay. I\'ll include a photo of location. 
I\'m sorry I didn\'t have a ruler with me but the shell like fossil approximately 2\" across. If you have any more questions, please don\'t hesitate to email me back. I got many more. 

From: Thomas Sent: Wednesday, October 07, 2015 4:44 PM  Subject: Re: Fossil to identify please
Good day Carl,
Thank you for explaining to me what it may be. All kinds of fossils in the area. I also found volcanic rock with feldspar? in it. Less interesting but should give you an idea of the variety of rocks along the shore. I\'ll send more photos of different fossils I find, if that\'s okay with you. Thank you and have a good day. ,From: Carl Mehling  Sent: Wednesday, October 07, 2015 4:25 PM To: \'Thomas\' Subject: RE: Fossil to identify please
Hi Thomas,
Thanks for your email. Looks to me like you\'ve found a horn coral. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250). By comparison the oldest known dinosaurs are about 245 million years old. From the little I\'ve gathered it looks like the rocks around where you found it would be Devonian in age (from about 409-354 million years old). Either way, it would be 100s of millions of years old. Nice find!
Best,
Carl

From: Carl Mehling  Sent: Wednesday, October 07, 2015 5:06 PM To: \'Thomas\' Subject: RE: Fossil to identify please
I\'ll help as much as I can!),
(112,112,212,From: William Sent: Monday, October 05, 2015 10:10 AM  Subject: 
Good morning, I am William From N.D. and I think I have found an egg. Will be sending pics. Just want to know if this is the right e-mail address. 

From: William  Sent: Tuesday, October 13, 2015 1:47 PM To: Carl Mehling Subject: RE:

From: William  Sent: Tuesday, October 13, 2015 10:13 PM To: Carl Mehling Subject: RE:
Here is the pics 

From: William  Sent: Wednesday, October 14, 2015 8:42 PM To: Carl Mehling Subject: RE:
[Same photos attached]

From: William Sent: Wednesday, October 14, 2015 8:42 PM To: Carl Mehling Subject: RE:,From: Carl Mehling  Sent: Friday, October 09, 2015 1:37 PM To: \'WILLIAM\' Subject: RE: 
Hi William,
Thanks for your email. I’d be happy to have a look at your find. Please email me very sharp photos (no more than 5 and no larger than 500k) that include scale.
Best, 
Carl

From: Carl Mehling  Sent: Tuesday, October 13, 2015 2:18 PM To: \'WILLIAM\' Subject: RE: RE:
Hi William,
Thanks for the photos. Although it is sometimes hard to be sure with photos, I\'d be very surprised if this was a fossil egg.  It does somewhat resemble an egg, but it is much more likely to be a sedimentary concretion of some kind – it’s resemblance to an egg is merely accidental. Concretions often form when some object acts as a “seed” for cementation of sediment. On occasion, the thing that initiates the concretion, the “seed,” can be a fossil. To find this out would require cracking the concretion open. 
Alternatively, it might also be a lithified mud nodule. These start as balls of mud that harden through drying or chemical processes, sometimes at different rates within the ball. Mud nodules can also be balls of mud that affect the surrounding sediments and chemically alter them in a way that makes a shell-like layer harden and adhere to the mud interior. This can result in an object like yours with a hard “shell” and a looser interior. Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine, specific kind of surface ornamentation (the smoother the \"shell,\" the less likely it is to be a non-bird dinosaur egg) or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. But the lack of shifting in the broken bits on the surface of your find reveals the uneven geometry of the surface – this would be very unexpected for an egg..
Sorry to bring bad news,
Carl),
(113,113,213,From: Christine  Sent: Monday, October 05, 2015 10:19 AM To: Carl Mehling Subject: I THINK THIS IS A FOSSIL
I found this is my backyard when I was cleaning up leaves and stuff. I thought it was a meteorite at first because of the black layer on it. But when I looked closer at it I saw it has teeth. Alot of sharp teeth. And the free and white parts of it look just like hardened reptile scales. I am not sure if it is two short arms and fingers all tangled up under the head or if that is skin that settled after it died. Or something totally else. it\'s heavy and shines so much if you put water on it. It has little hairs I think growing on it. And when I put it in the sunlight they Stand up. I dont think the hairs are related. Haha. Maybe I just spent too much time staring at it through a magnifying glass. Do you know if it is indeed a fossil. And if I could profit from finding it? Thank you. My name is Christine. Write me back please.   -------->>> Here are the photos I took. Every side of it looks so different. it\'s crazy.,From: Carl Mehling  Sent: Friday, October 09, 2015 1:45 PM To: \'Christine\' Subject: RE: I THINK THIS IS A FOSSIL
Hi Christine,
Thanks for your email. I’ve had a look at your photos and feel pretty certain it’s not a fossil. It’s lacking the fine detail I’d like to see in order to confidently ID it as such. And I can’t really see any of the features that you describe. Sorry for the bad news.
Best, Carl),
(114,114,214,From: Katie  Sent: Monday, October 05, 2015 1:26 PM  Subject: Fossil identification
Hi Carl Mehling,  I recently acquired this and not sure what it would be exactly. My friend found it hiking in The Rockies of Colorado. Would really appreciate if you could indentify this for me. Thanks!

,From: Carl Mehling  Sent: Friday, October 09, 2015 2:20 PM To: \'Katie\' Subject: RE: Fossil identification
Hi Katie,
Thanks for your email. I’ve had a look at your great photos and feel quite sure it’s not fossils but rather crystals. I really don’t know crystals well at all but I think the red dots are garnets. No good idea what the black crystals would be. Either way it’s a very attractive find! Well done.
Best, Carl),
(115,115,215,From: Steven Sent: Monday, October 05, 2015 6:20 PM To: Carl Mehling Subject: [What Is This Fossil?] Dinasaur Heart -bird or fish?
i have what i assume is a 2 chamber fossilized heart.  i would like to send  
photos in hopes someone can help me identify this.  I am in Denver Colorado.   
i\'ve sent photos to the curator of the museum of nature and science a couple years back and did not get a very good response, since then i\'ve tried numerous times both their and other online options, and haven\'t received any fee back.  hope someone can let me know what I\'m looing at and if it\'s something that should be regarded as a prize,

From: Steven Sent: Monday, October 05, 2015 6:35 PM  Subject: an you help me identify if this is a bird or fish heart.
I looks like a 2 chamber heart.  You can make out the artery, the chamber’s where it is broke, and the tissue on the outside in the last photo.
I can take some digital photos if there is an interest in seeing more.
Thank You:
Steven

From: Steven  Sent: Friday, October 09, 2015 2:41 PM  Subject: RE: an you help me identify if this is a bird or fish heart.
Thank you for the response.  I will look closer and get educated on chert nodules?  Never heard of em.
Thank You:
Steven

From: Steven Sent: Tuesday, October 13, 2015 5:34 PM  Subject: just a follow up on some digital photos.
I looked up several items on Chert Nodules.  And still didn’t find anything that looked really close to what I have.  However there are some similarities, such as the colors.  Let me know if your still convinced this is a chert, please.  And I will not be a bother anymore.
Thank You:
Steven,From: Carl Mehling  Sent: Friday, October 09, 2015 2:33 PM To: \'Steven\' Subject: RE: an you help me identify if this is a bird or fish heart.
Hi Steven,
Thanks for your email. Unfortunately, I feel very strongly that you do not have a fossil. It lacks the fine details I would want to see to feel confident it was a fossil. It is much more likely to be chert nodule – it’s resemblance to an fossil is merely accidental. The type of fracture it exhibits where it has broken is very consistent with the way chert breaks.
It could also be a sedimentary concretion of some kind. Concretions often form when some object acts as a “seed” for cementation of sediment. On occasion, the thing that initiates the concretion, the “seed,” can be a fossil. To find this out would require cracking the concretion open. But as mentioned before the fracture type is more consistent with chert.
Best, Carl

From: Carl Mehling  Sent: Friday, October 09, 2015 3:22 PM To: \'Steven\' Subject: RE: an you help me identify if this is a bird or fish heart.
My pleasure!

From: Carl Mehling  Sent: Friday, October 23, 2015 4:38 PM To: \'Steven\' Subject: RE: just a follow up on some digital photos.
Hi Steven,
Chert comes in so many varieties that finding photos of pieces similar to yours will be very difficult. The main detail on your piece that makes me lean towards chert or something similar is the way the reddish part is fractured – that type of fracture is very consistent with chert.
Best, Carl),
(116,116,216,From: Matthew  Sent: Tuesday, October 06, 2015 9:55 PM  Subject: Whalebone
Hello I found this in the surf near Cape Hatteras North Carolina. Do you have any idea what sort of whale it might have come from? Or how old?
Thank you for your help – Matthew

From: Matthew 
Sent: Saturday, October 10, 2015 6:31 AM
Subject: RE: Whalebone
Thanks Carl, I appreciate your help!
Matthew,From: Carl Mehling  Sent: Friday, October 09, 2015 3:43 PM To: \'Matthew\' Subject: RE: Whalebone
Hi Matthew,
Thanks for your email. Sorry, but I can\'t ID this any better than you did. I agree that it is whale but whale vertebrae are extremely similar to one another. However I don\'t think it is old enough to be considered a fossil. What you might do is look into the cetaceans that are currently found off Cape Hatteras and figure out which ones could have vertebrae of that size.
Best,
Carl

From: Carl Mehling  Sent: Saturday, October 10, 2015 1:53 PM To: \'Matthew\' Subject: RE: Whalebone
My pleasure!),
(117,117,217,From: Michelle Sent: Thursday, October 08, 2015 1:55 AM To: Carl Mehling Subject: Fossil Identify question from Vancouver Island for Carl Mehling.
Hi there! My name is Michelle and this is a fossil that was found digging in the back yard two days ago.  We live near the end of Cowichan Lake...mouth of the Cowichan River. Vancouver Island.
It is a type of sandstone ? Just for fun I posted a pic on Facebook... without the dimensions. 
The replies were. Something from the movie Aliens.  Shellor vertebrae lines.  Bigfoot. Interesting. Old KFC . Baleen whale hair fiber. Plankton tubes.  Piece of trilobite.
Here are the photos with a small ruler.  Thanks so much for taking a look!

From: Michelle Sent: Saturday, October 10, 2015 2:26 PM  Subject: Re: Fossil Identify question from Vancouver Island for Carl Mehling.
Hi there!
We set traps out this summer after looking at conceptual photographs of the big guy. Rumors of Kokanee being his brand. But it is the Island..If we get anything will pass on to you. 
Thanks so much Carl for entertaining my question. You rock!  Have a great day ~ Michelle. 
P.S. can I put your comment on the comments section for my friends on fb ? For those who were curious. 
I will address as the Division of Paleontology American Museum of Natural History. If  that is ok with you. Thanks again ! :)

From: Michelle Sent: Saturday, October 10, 2015 2:27 PM To: Carl Mehling Subject: Re: Fossil Identify question from Vancouver Island for Carl Mehling.,From: Carl Mehling  Sent: Friday, October 09, 2015 3:36 PM To: \'Michelle\' Subject: RE: Fossil Identify question from Vancouver Island for Carl Mehling.
Hi Michelle,
Thanks for your email. I will have to agree with you that this is a fossil and the rock does look like sandstone. Unfortunately, there may not be enough of it preserved for me to properly ID it. My guts says that it is at least safe to say it’s likely a marine invertebrate. And I have seen fossil corals much like this. However, I can confidently rule out something from the movie Aliens, old KFC, baleen whale hair fiber, and plankton tubes. I’m unwilling to rule out any part of Bigfoot until we actually have him. And although I feel pretty strong it’s not a part of a vertebrate or trilobite that could be possible. And since, in the broadest sense, “shell” could apply to coral, I will leave that one alone. The best thing to do might be to keep collecting in your back yard and find more of this specimen or a more complete example! Good luck!
Best, Carl

From: Carl Mehling  Sent: Tuesday, October 13, 2015 11:17 AM To: \'Michelle\' Subject: RE: Fossil Identify question from Vancouver Island for Carl Mehling.
Watch it: you might catch all manner of things with that bait, Michelle.
But feel free to post my comments to FB. 
Be well, Carl),
(118,118,218,From: Scott Sent: Thursday, October 08, 2015 7:40 AM  Subject: What exactly is this
I found this in a muck field about 10 years ago behind where I was living.  Sorry I didn\'t have a regular ruler on me when I took the pictures.  It has alot of tiny crystals on one end of it.,From: Carl Mehling  Sent: Friday, October 09, 2015 3:48 PM To: \'Scott\' Subject: RE: What exactly is this
Hi Scott,
Thanks for your email. Looks like you have a horn coral there. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250). By comparison the oldest known dinosaurs are about 245 million years old. Nice find!
Best, Carl),
(119,119,219,From: Bob Sent: Friday, October 09, 2015 11:02 AM  Subject: Fossil (?) Identification
My wife found this washed up on the beach in Myrtle Beach SC. A friend of mine told me it is pottery,but I\'m not so sure.
Can you offer any ideas?
Thanks!
Bob

From: Bob Sent: Sunday, October 11, 2015 8:05 AM  Subject: Re: Fossil (?) Identification
Carl,
Mystery solved! And by the quickness of your response, you didn\'t even have to research it. Always ask the experts first.
Thank you very much!
Bob,From: Carl Mehling  Sent: Saturday, October 10, 2015 1:41 PM To: \'Bob Schaller\' Subject: RE: Fossil (?) Identification
Hi Bob,
Thanks for your email. Your instincts were on the right track. It is not pottery. It is a piece of a large snail shell. This is one of the lips from the snail’s aperture. You can see exactly where if you Google images of the “helmet shell.” What I can’t tell is if it is old enough to be a fossil. A fossil of this kind along that beach would look virtually the same as a modern shell. But at least you can tell your friend it isn’t pottery!
Best, Carl

From: Carl Mehling  Sent: Tuesday, October 13, 2015 12:32 PM To: \'Bob Schaller\' Subject: RE: Fossil (?) Identification
My pleasure!),
(120,120,220,From: william Sent: Friday, October 09, 2015 8:17 PM  Subject: Found fossil
Hi Carl I found this on a construction site in North Charleston, SC
Thank you so much for any help you can give me in IDing this
Thanks Will

From: william Sent: Saturday, October 10, 2015 6:35 PM  Subject: Re: Found fossil
Thanks!,From: Carl Mehling  Sent: Saturday, October 10, 2015 1:53 PM To: \'WILLIAM\' Subject: RE: Found fossil
Hi Will,
Thanks for your email. Looks like you found yourself a small cetacean vertebra, probably a dolphin. And based on the color and the context of the find it is likely a few million years old to as much as maybe 30 million. Nice find!
Best, Carl

From: Carl Mehling  Sent: Tuesday, October 13, 2015 11:20 AM To: \'WILLIAM\' Subject: RE: Found fossil
My pleasure!),
(121,121,221,From: Donald Sent: Saturday, October 10, 2015 1:11 PM To: Carl Mehling Subject: Fosil ?

From: Donald Sent: Saturday, October 10, 2015 3:16 PM To: Carl Mehling Subject: Re: Fosil ?
Thanks,From: Carl Mehling  Sent: Saturday, October 10, 2015 1:58 PM To: \'Donald\' Subject: RE: Fosil ?
Hi Donald,
Thanks for your email. What you have there is not a fossil but crystals. The form they are taking is called botryoidal. If you do a Google image search for \'botryoidal\' you will find many beautiful examples. Nice find!
Best,
Carl),
(122,122,222,From: Daniel Sent: Saturday, October 10, 2015 9:00 PM  Subject: I
Found on north Shore straits of Mackinac Mi. ,From: Carl Mehling  Sent: Tuesday, October 13, 2015 11:47 AM To: \'Daniel\' Subject: RE: I
Hi Daniel,
Thanks for your email. Looks like you have a fragment of a crinoid stem there. Crinoids are stalked relatives of starfish that go back about half a billion years. They are still with us today but were amazingly abundant deep in Earth’s past. It looks like the rock in the immediate area of your find is Silurian (~409-439 million years ago) so that would make good sense. Just for reference, the oldest known dinosaurs are around 245 million years old. Nice find!
Nest, Carl),
(123,123,223,From: Bobbi-Lynn Sent: Sunday, October 11, 2015 3:22 AM To: Carl Mehling Cc: Logan Subject: Hatta, UAE Marine Fossil
Dear Mr. Mehling,
I am a science teacher in the United Arab Emirates and have stumbled across this fossil.  Can you please help me identify it?  A student has been trying to figure it out, and we are having a hard time!
Thank you so much for any help you can provide!
Bobbi Lynn

From: Bobbi-Lynn Sent: Wednesday, October 14, 2015 1:14 AM  Subject: Re: Hatta, UAE Marine Fossil
Hi Carl!
Thanks so much for your response!  Now I\'m even more intrigued to try and figure out what caused it!  There are many of these examples in the rock outcropping of the dried up ocean bed in that particular part of the desert.   
I truly appreciate your help.  Thank you!
Bobbi Lynn,From: Carl Mehling  Sent: Tuesday, October 13, 2015 12:30 PM To: \'Bobbi-Lynn\' Subject: RE: Hatta, UAE Marine Fossil
Hi Bobbi-Lynn,
Thanks for your email. I get the sense that your find is more geologic rather than paleontologic. It lacks the finer details I would like to see to confidently ID it as a fossil. But that said, it still could be a fossil of a type I am not yet familiar with. Sorry for the vagueness!
Best, Carl

From: Carl Mehling  Sent: Friday, October 23, 2015 4:45 PM To: \'Bobbi-Lynn\' Subject: RE: Hatta, UAE Marine Fossil
My pleasure!),
(124,124,224,From: Andrew  Sent: Monday, October 12, 2015 4:00 PM  Subject: Fossil id
I found this near Borah Peak outside of Mackay, Idaho.  It was along a drainage coming off the northwestern slope of the mountain.   I found it interesting enough to warrant packing it off the mountain.  Now several years later, I find myself still packing this thing every time I have moved.  Can you help me ID this? Looks like a shell that has been fossilized in quartz?  Any help would be appreciated!
Andrew,From: Carl Mehling  Sent: Tuesday, October 13, 2015 1:49 PM To: \'Andrew\' Subject: RE: Fossil id
Hi Andrew,
Thanks for your email. What  beautiful piece! Looks like you have a gorgeous fossil snail there. The most promising source rocks on Borah are Upper Paleozoic in age (roughly 250-250 million years old). I think that makes sense regarding the look of the rock (probably limestone) that it’s in. Just for reference, the oldest known dinosaurs are around 245 million years old. And it does look like it might be a quartz replacement of the shell, or at least some kind of recrystallization. Nice find!
Best, Carl),
(125,125,225,From: Sent: Monday, October 12, 2015 6:14 PM  Subject: Found this fossil in U.P Michigan was wondering about it? If you can help ID. It,From: Carl Mehling  Sent: Tuesday, October 13, 2015 2:03 PM To: \'\' Subject: RE: Found this fossil in U.P Michigan was wondering about it? If you can help ID. It
Hi Mystery Person,
Thanks for your email. What you have a gorgeous example of the chain coral Halysites. This coral genus lived on Earth from the Ordovician to Silurian (~450 to 412 million years ago). For reference the oldest known dinosaurs are about 245 million years old. Nice find!
Best, Carl),
(126,126,226,From: Kouga Sent: Tuesday, October 13, 2015 10:49 AM  Subject: Fossil ID
I was wondering if you could help me identify these specimens. I found them both outside my house in Johnson County Kentucky while walking around.
I posted the first specimen (attachments 1-2) on a fossil forum and someone identified it as a trace fossil of some kind of shelled animal (though they didn\'t specify what animal). I emailed it to an admin of another fossil site (based in Kentucky) to see if he could tell me what animal had left the tracks, but he thought it looked more the chambers of a straight-shelled cephalopod. What\'s your opinion?
I\'m not sure if the second specimen (attachments 3-4) is a fossil at all, but it definitely looks like some kind of imprint. I thought it was a boot print before realizing it was in rock. A couple people suggested that it may be evidence of seafloor bioturbation, while someone else thinks it might just be a suggestive rock. Any help is appreciated!

From: Kouga Sent: Tuesday, October 13, 2015 2:51 PM  Subject: Re: Fossil ID
Thanks for the reply! I agree that it looks more like a trace fossil (not that it counts for much, being a fossil newbie), but do you have any clues as to what kind? I\'m leaning toward Taenidium satanassi, although I can\'t find much info on them (like what animal left the tracks or their presence in Kentucky).

From: Kouga Sent: Tuesday, October 13, 2015 5:41 PM  Subject: Re: Fossil ID
Ah, that\'s unfortunate. If it could\'ve been identified, maybe it would\'ve helped me to know what kind of fossils to be looking for. Still a neat find in itself, being my first fossil that isn\'t plant-related. Thanks for the help. :),From: Carl Mehling  Sent: Tuesday, October 13, 2015 2:10 PM To: \'Kouga\' Subject: RE: Fossil ID
Hi Kouga,
Thanks for your email. I can definitely see why you got the two IDs you got for that first one. It indeed looks very much like both of those things. But I would lean toward trace fossil because there does not appear to be any shell preserved, all of the sediment is quite similar, and most telling is the fact that the units vary a tiny bit in their size, which would be very unexpected for a cephalopod. But I’m not getting a strong fossil signal from the second specimen. It lacks the finer details I’d like to see in order to confidently ID it as a fossil.  Sorry I can’t be more definitive!
Best, Carl

From: Carl Mehling  Sent: Tuesday, October 13, 2015 3:07 PM To: \'Kouga\' Subject: RE: Fossil ID
I think Taenidium satanassi is a good start but I don’t think that’s actually what it is. T. satanassi backfill segments contain two types of sediment (your appears to have just one) and of those two, one of them is composed of fecal pellets. But if yours is a trace fossil it is very likely a meniscate backfilled burrow like T. satanassi. Knowing the animal creator is the really hard part. The only way to confidently lock a trace fossil to its maker is for the maker to have died with the trace right after making it. This is incredibly rare. Add to this the fact that animals of very different morphology can produce very similar traces and you can see why it is best to call this maker a burrowing marine animal, probably an invertebrate.

From: Carl Mehling  Sent: Friday, October 23, 2015 4:40 PM To: \'Kouga\' Subject: RE: Fossil ID
My pleasure!),
(127,127,227,From: Doug  Sent: Wednesday, October 14, 2015 11:15 AM  Subject: please help to identify
Good morning.
I am attaching some pictures of something I found recently while on the beach in Rehoboth, DE.  Due to storms, we have had several days of high tides and I found this the other day while walking on the beach.
Thanks in advance for any insight you may be able to provide.
Regards,
Doug,From: Carl Mehling  Sent: Monday, October 26, 2015 3:59 PM To: \'Doug\' Subject: RE: please help to identify
Hi Doug,
Thanks for your email. The photos are extremely blurry so I can’t be very sure but I get the sense this is not a fossil. It doesn’t seem to have the finer details I would like to see in order to make a confident fossil ID.
Best, Carl ),
(128,128,228,From: kelsy Sent: Thursday, October 15, 2015 12:03 PM  Subject: fossil identification
Dear Carl,
A patron brought this fossil to our library today hoping to identify it. He found it near Seneca Lake here in Geneva, NY. We think it is a coral but just wanted to be sure. Photos are attached.
Many thanks,
Kelsy

From: kelsy Sent: Monday, October 26, 2015 4:51 PM  Subject: Re: fossil identification
Carl,
Thank you so much! I\'m sure our patron will be thrilled with this information (and I enjoyed learning about the fossil as well).
- Kelsy,From: Carl Mehling  Sent: Monday, October 26, 2015 4:07 PM To: \'Kelsy\' Subject: RE: fossil identification
Hi Kelsy,
Thanks for your email and your patience while I was away. You can tell your patron that he is the lucky finder of a fossil horn coral. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250 million). If it came from the rocks locally exposed near Geneva (rather than being brought there by people or glaciers) it would be Devonian in age (between about 354 and 409 million years old). By comparison the oldest known dinosaurs are only about 245 million years old. Nice find!
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 10:11 AM To: \'Kelsy\' Subject: RE: fossil identification
My pleasure!),
(129,129,229,From: Carolyn  Sent: Thursday, October 15, 2015 10:43 AM  Subject: Fwd: Museum Visit
Dear Carl,
First I need to apologize for the lateness of this thank you for our informative, humorous and charming visit with you August 25 at the museum.  Since we met, we have been away, I had knee surgery, and then we had trouble figuring out how to get these photos online.
As you can see in the photos of smiling faces, they had a ball meeting you.  They each loved the personalized dedication in their book....you are certainly a special guy!!!
We really enjoyed the \"Life at the Limits\"  that you so graciously led us to.  We would not have known it was there since we have a ritual of where we go in the museum.  It would have been a sin to miss it because the older three (12,11,and 10) took their pads and took notes for over an hour.....that is how enthralled they were.  We actually had to drag them away for lunch because Sebastian at 8 was hungry and wanted to go see the big bears.
I have enclosed photos of our molars and we had a couple of questions. We believe you said they were from a mastodon as Charles of Littleton, N.H. claimed at his museum and not a mammoth.  Is that right?  Each family is going to have one for safe keeping and of course they all like the one where you can see teeth.  You said \"the best one\" is a personal thing and they were both wonderful for different reasons.  What is the reason for each.....the first one is the one with three deep ridges and the second one has the visible teeth.  This info will help whichever sister/brother combination gets the one without teeth showing. 
The last photo shows the brown filler that must have put on so the fossil would sit properly to be displayed.  The photo with both of them shows how they must have looked displayed.  
We\'ll appreciate the answers to our questions because then we will do a blind behind the back division of these treasures.  They may take turns sharing them, too.
The sate of Pennsylvania has a motto....You have a friend in Pennsylvania.  The McAdams family feels we have a friend at the AMNH.  THANK YOU.
All the best,
Carolyn,[Carolyn won an auction tour back in 2011and took the tour in 2014. Then in 2015 she visited with her grandchildren who had bought my Inside Dinosaurs book and wanted them signed she also brought “some Mastodon molar teeth [her sister] bought 25 years ago from the family of a man who had a home museum.  This man would invite school children to his museum.” She wanted my opinion about the teeth.]

From: Carl Mehling  Sent: Tuesday, October 27, 2015 10:06 AM To: Carolyn Subject: RE: Museum Visit
Hey Carolyn!
Thanks for this email and your patience while I was away. Those pictures are great! And I’m so happy the kids had such a blast. More than an hour of notes… I wish you could know how happy that makes me. They are our replacements!
Now the teeth are definitely not mammoths. But I can only be pretty sure one is a mastodon (Mammut americanum): the smaller fragment. The other tooth is definitely a proboscidean but I get the sense it is not a true mastodon but probably in the larger group informally called mastodonts. I don’t claim to know proboscideans very well at all but gomphothere might be another possibility here. As for why each is wonderful I can only give you my perspective, of course. The Mammut tooth shows the wear pattern that illuminates the chewing mechanics of the living animal, and in a way makes this one more alive because you can see the evidence of it having been used. The other tooth is more complete and shows the full unworn cusp morphology.
Hope your knee is feeling better!
-Carl),
(130,130,230,From: Tom Sent: Saturday, October 17, 2015 6:39 PM  Subject: Fossil to be identified
Hi Mr. Mehling,
I saw your email on the AMNH site and that you would try to identify a fossil.  I\'m attaching several photos from different angles.  I apologize now as these photos are +2MB.  I could have made them small but I feel that if you need to zoom in, you\'ll see better detail.
The fossil was found in south central Tennessee.  Found in a limestone and shale formations in a road cut.
Thank you for your time.
Tom,From: Carl Mehling  Sent: Monday, October 26, 2015 4:42 PM To: Tom Subject: RE: Fossil to be identified
Hi Tom,
Thanks for your email and your patience while I was away. I can\'t really call myself a trilobite expert but that definitely looks like a Isotelus pygidium to me. If you don’t already know, trilobites were marine arthropods that lived on Earth from about 530 million years ago to about 250 million. Isotelus is a genus of trilobite from the Ordovician (~500-439 million years ago) and the back end of a trilobite is called the pygidium. There are definitely Ordovician rocks in south central TN so that fits nicely, too. Very nice find!
Best, Carl

[He posted this also to the Fossil Forum as PLCTom on 17 October and was told the same thing!]),
(131,131,231,From: Joe Sent: Monday, October 19, 2015 1:43 AM  Subject: Fossil, got to know
Hey, Carl, 
I hope you can help me identify this one found in Illinois. Thanks, Joe Morris

From: Joe  Sent: Thursday, October 29, 2015 10:30 AM  Subject: Re: Fossil, got to know
Thanks a bunch. Yeah it\'s weird. I thank I will find a geologist to take a look. I sent you a definite picture of a fossil. I have a lot of for sure fossils. Most, of which, I can classify myself. I need to know if you only do a one time only or Will you take on all of my stuff. 

From: Joe Sent: Thursday, October 29, 2015 1:11 PM  Subject: Re: Fossil, got to know
Lol, I will try to not get carried away. I will be making a donation. So hopefully that helps. I really appreciate it!!!. Anyway, everything comes from my property. There is a natural creek on and also a rock pile of when the dug the pipes, drainage ditch, and two houses. So, we find all sorts of thing. I have found dino bones, around 60 horn coral, and two many critters to list. I have two fossil books. Its hard to tell some things. The pics are of museum quality. All fossils I clean up. We keep it all. I am putting together a massive collection that can be passed down and learned from. Thank you take your time. I will do one at a time not to overwhelm. Joey, ,From: Carl Mehling  Sent: Monday, October 26, 2015 4:49 PM To: \'Joe\' Subject: RE: Fossil, got to know
Hi Joe,
Thanks for your email and your patience while I was away.  I’ve had a look at your interesting find and although it is certainly odd I don’t think it is a fossil. It lacks the finer details I would like to see in order to offer a confident fossil ID. I think it is just a geological wonder. But a nice find either way!
Best, Carl

From: Carl Mehling  Sent: Thursday, October 29, 2015 12:21 PM To: \'Joe\' Subject: RE: Fossil, got to know
I would be happy to try and ID more things for you, but let’s just not make it too many! Best, Carl

From: Carl Mehling  Sent: Thursday, October 29, 2015 3:13 PM To: \'Joe\' Subject: RE: Fossil, got to know
Standing by.

[For some reason he resent the October 29, 2015 10:30 AM email again two times at 3:49 PM]
),
(132,132,232,From: Steven  Sent: Monday, October 19, 2015 6:57 PM  Subject: Fossil? Hi. I found this rock (pictures attached) in my backyard in Virginia. I am curious to know what it is.  Can you identify it? Thanks, Steven

From: Steven Sent: Tuesday, October 27, 2015 5:50 PM  Subject: Re: Fossil?
Thanks for taking a look at it. Steven,From: Carl Mehling  Sent: Tuesday, October 27, 2015 3:59 PM To: \'Steven\' Subject: RE: Fossil?
Hi Steven,
Thanks for your email. I’ve had a look at your find and I don’t think it is a fossil. It lacks the fine detail I would like to see in order to be convinced it was a fossil. But I don’t really have an alternative for you. It is definitely odd! Maybe we can just consider it a geologic wonder.
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:36 AM To: \'Steven\' Subject: RE: Fossil?
My pleasure!),
(133,133,233,From: Dan Sent: Tuesday, October 20, 2015 8:52 PM To: visitorinfo Subject: Here\'s the pictures I can take more if you need to me too
Hello my name is Daniel I got a bunch of these would look like rocks but they\'re not rocks there\'s more where that came from a guy who sold jewelry recently died he\'s a friend of the neighbor of a friend of mine and he had all these stones and all this stuff in his backyard and that\'s how I acquired these anyway how I hope they\'re there what they say they are thank you Daniel

From: Vivien  Sent: Friday, October 23, 2015 4:33 PM To: Carl Mehling; visitorinfo Subject: RE: Here\'s the pictures I can take more if you need to me too
Hello Carl,  A vertebrate fossil inquiry:

From: Dan  Sent: Tuesday, October 27, 2015 4:53 PM  Subject: Attachments
Hello sir my name is Dan here\'s the pictures you asked for I\'m pretty sure they\'re doing what I think they are just don\'t know how old but I know there are fossilized and if you look at some of the small fragments of the ones that do or crack if yellow inside like from the yolk I guess thank you Dan

From: Dan  Sent: Wednesday, October 28, 2015 8:14 PM  Subject: RE: Attachments
Thank you for your time thank you,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:34 PM To: \'\' Cc: Vivien Subject: RE: Here\'s the pictures I can take more if you need to me too
Hi Daniel,
Thanks for your email. Your email was forwarded to me but I didn’t receive any attachments. Can you please resend the images? Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:35 AM To: \'Dan\' Subject: RE: Attachments
Hi Dan,
Thanks for the photos. I can say with fair confidence that they are not fossils. These are geodes, which are mineral balls with a crystal-filled hollow inside.
Best, Carl),
(134,134,234,From: mike  Sent: Thursday, October 22, 2015 4:34 PM  Subject: Fossil identity
I have a fossil skull that a friend found 20 years ago.he passed away and he left me his fossil.I have never seen anything  like this nore can I find anything like it on line.I am sure its a fossil and anybody that has seen it in person thinks its a fossil to.I would like to no what it is a fossil of.I think its older then most of the fossil that are found.and I think it could be a new type of creature I don\'t no what else to call it.here are some pics

From: mike  Sent: Tuesday, October 27, 2015 9:16 PM To: Carl Mehling Subject: RE: Fossil identity

From: mike  Sent: Wednesday, October 28, 2015 2:12 PM To: Carl Mehling Subject: Is it possible that this is mummified.? Because there is such a difference in the texture from the inside of the skull to the outside.I am sure this is a skull.I am a reasonable person.I no people see what they want to see when they find rocks.ithis i...

From: mike  Sent: Wednesday, October 28, 2015 10:30 PM  Subject: 
Thank you for your thoughts on this.I have a apointment with the museum on friday..i will let you no what they say,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:01 PM To: \'mike\' Subject: RE: Fossil identity
Hi Mike,
Thanks for your email. Unfortunately, your email had no attachments. Can you resend the images?
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:47 AM To: \'mike\' Subject: RE: Fossil identity
Hi Mike,
Thanks for the photos. Unfortunately, I think you have a suggestive rock there. It lacks the fine, specific details I would need to see to feel it was a fossil. Sorry!
Best, Carl 

From: Carl Mehling  Sent: Wednesday, October 28, 2015 2:58 PM To: \'mike\' Subject: RE: Is it possible that this is mummified.? Because there is such a difference in the texture from the inside of the skull to the outside.I am sure this is a skull.I am a reasonable person.I no people see what they want to see when they find rocks.ithis 
Sorry, Mike. There\'s even let chance that it\'s a mummy of some kind. The pattern on the rock and the way that it weathered is very consistent with a hard metamorphic kind of rock. And this is almost the worst kind of rock in which to expect either fossils or mummies. Plus it just doesn\'t resemble a skull closely enough to identify it as such.
I missed some of what you wrote because you put it all in your subject line and it go truncated.
Best,
Carl),
(135,135,235,From: Taylor Sent: Thursday, October 22, 2015 8:35 PM  Subject: Big Dino bone
Hello Carl
I have this bone and I\'m curious if you know what dinosaur it went to and what part of the body thank you
Taylor,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:05 PM To: \'Taylor\' Subject: RE: Big Dino bone
Hi Taylor,
Thanks for your email. I’ve had a look at your find and feel quite sure it is not a dinosaur bone. In fact I don’t think it is a fossil at all. It lacks the fine detail I would like to see in order to confidently ID it as a fossil. Sorry for the bad news!
Best, Carl),
(136,136,236,From: Mike  Sent: Friday, October 23, 2015 11:06 AM  Subject: Bones
This old bone has been in family for a long time, I believe it came from montana but have no idea what kind of animal it came from. any info would be greatly appreciated.
Thanks, Mike,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:13 PM To: \'Mikw\' Subject: RE: Bones
Hi Mike,
Thanks for your email. I’ve had a look at your find and feel quite sure it is not a fossil bone. The grain is very unlike the grain of bone. However, I do believe this is a fossil. And it is the grain I see in the end-on view that helps the most with the ID. I’m almost certain it is Palmoxylon, or fossil palm “wood.” It’s not really wood because palms don’t have true wood but it is fragment of the petrified trunk fibers of a palm tree. It’s too bad you can’t be sure where it came from because I might be able to give you some idea about its age, but I can say that Palmoxylon is known from at least 100 million years ago. Very nice find!
Best, Carl),
(137,137,237,From: Suzanne  Sent: Friday, October 23, 2015 1:01 PM  Subject: Fun item for identification
Okay, cleaning out my purse (it\'s not uncommon for me to have fossils in my purse) I found these two items.  I have seen this stuff most of my life, but these two items are different than anything I have picked up in 40 years.  The item above the penny is obvious, it sits on a flattened base and the whole thing wobbles when set on a flat surface.  The other item has a needle like sharpness.  Both found in a clay bed on McFadden beach in Texas.  We found a plummet in the same area a while back.  I have read that phallic items have been found there, could this be one or (as my kids say, \"mom you have the mind of a 12 year old boy!\") is my mind in the gutter?😏 if you tell me the latter, I\'m not sharing the information with my family!😁 thanks! Suzanne

From: suzanne  Sent: Tuesday, October 27, 2015 6:44 PM To: Carl Mehling Subject: 2nd item

From: suzanne  Sent: Tuesday, October 27, 2015 6:40 PM To: Carl Mehling Subject: Let\'s try again

From: suzanne  Sent: Wednesday, October 28, 2015 6:29 PM To: Carl Mehling Subject: Re: Let\'s try again
😊,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:17 PM To: \'Suzanne\' Subject: RE: Fun item for identification
Hi Suzanne,
Thanks for your email. Unfortunately the image I received is too small for me to make out good detail. Can you possibly reshoot the pieces at a larger size?
And a purse full of fossils and a gutter mind are outstanding attributes. Don’t change a thing.
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:43 AM To: \'suzanne\' Subject: RE: Let\'s try again
Hi Suzanne,
Thanks for the photos - these are much better. But, sadly, I don\'t think either is a fossil. They lack the fine detail I would need to see in order to feel confident they were fossils. I think they are sedimentary concretions of some sort. Pretty cool, though!
Best,
Carl),
(138,138,238,From: Michael Sent: Friday, October 23, 2015 2:20 PM To: Carl Mehling Cc: Lynette Subject: FW: Fossil Picture 
Hi Carl, we found this in new jersey while looking for fossilized shark teeth.  I made the mistake of telling my son it looks like a dinosaur tooth or a raptor claw (and now he wants answers).  I\'m not sure if it is a rock or not but we would appreciate it if you took a look.  If you could copy my wife on the response (she is copied on the email) she will get the info to my son sooner than me.
Thanks and have a good weekend
Mike

From: Michael Sent: Wednesday, October 28, 2015 6:15 AM  Subject: RE: Fossil Picture 
Well thanks for getting back to me Carl.  I took my family to the Museum of Natural History last year and we all really enjoyed it!  We have a huge hole in our backyard that my kids have been digging, I\'ll give you first dibs when they find something interesting (or you can just help me fill it when they go to college in 10 years)!
Mike,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:22 PM To: \'Michael\' Cc: Lynette Subject: RE: Fossil Picture 
Hi Mike,
Thanks for your email. Sorry, but I think you\'re going to have to get back on the hunt. This is no fossil. It is merely a suggestive rock. They do that, you know. Keep digging!
Best,
Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:48 AM To: \'Michael\' Subject: RE: Fossil Picture 
Sounds great, Mike! Keep digging!),
(139,139,239,From: Dare  Sent: Friday, October 23, 2015 4:29 PM  Subject: Fossil ID
Hi,  I\'ve searched fossil images for ages and can\'t find online. I found it in South Dakota along the Missouri river. Could you tell me what it is?                             

Thanks so much.
Dare
Colorado

From: Dare  Sent: Wednesday, October 28, 2015 1:08 PM  Subject: Re: Fossil ID
Thanks so much.  I would have never figured that out on my own.  it\'s perfectly symmetrical and flawless. Nice to know what it is after 20 years. 
Dare,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:30 PM To: \'Dare\' Subject: RE: Fossil ID
Hi Dare,
Thanks for your email. What you have there is a chamber steinkern of an ammonite. If you don’t already know, ammonites are shelled relatives of octopuses that went extinct about 65 million years ago. They had coiled, chambered shells like today’s nautilus. What you have is the mud that filled one of those chambers, turned to stone, and survived the weathering that destroyed the shell material. We find very similar specimens in the Cretaceous of NJ. Yours has got to be from the Late Cretaceous whose rocks are well represented in SD. Very nice find!
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 1:09 PM To: \'Dare\' Subject: RE: Fossil ID
So glad to be of service, Dare!),
(140,140,240,From: Jim Sent: Saturday, October 24, 2015 11:28 PM  Subject: fossil identification
Hello,
I got this email online and it said you could identify fossils.  I saw this while hiking in Utah and wondered what it was.
Let me know if you know what it is.
Jim,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:42 PM To: \'Jim\' Subject: RE: fossil identification
Hi Jim,
Thanks for your email. I feel pretty sure you have a weathered orthocone, or straight-shelled nautiloid there. Nautiloids are shelled relatives of octopus and squid and are still with us today but were incredibly common and diverse in the Paleozoic (~530-250 million years ago). The straight-shelled ones persisted a bit into the Mesozoic (until around 210 million years ago). And just for comparison the oldest know dinosaurs are from about 245 million years ago. Nice find!
Best, Carl),
(141,141,241,From: Alan Sent: Sunday, October 25, 2015 8:05 PM  Subject: Fossil locality question.
Carl,
A student of mine brought couple of cephalopod concretions into class, they are really cool, but I cannot identify the locality they are from (most students who bring fossils in have examples from rather obvious localities). These concretions are jet black, smooth river polished stones, one contains an ammonite that looks like Perisphinctes, the other looks like an orthocone nautiloid. I don\'t tend to think of those two taxa as appearing together and I have never seen concretions with cephalopods that look as dark as these do. I have attached a picture of each. I figured that you might have an idea as you have collected fossils everywhere and might have seen them before. 
My student has no knowledge of their origin other than she was given them as a child because she liked rocks and fossils. 
Any thoughts? Make me feel stupid with \"of course, these are from....\"
Thanks
Alan,From: Carl Mehling  Sent: Tuesday, October 27, 2015 4:49 PM To: \'Alan\' Subject: RE: Fossil locality question.
Hey Alan,
Well, I think you’re safe from the \"of course, these are from....\" stupidity inducer. I don’t recognize these at all. When I first saw the ammonite I thought maybe England, but if they are from the same place and time then that’s a no go, of course. I do know of very dark concretions like this with ammonites and other mollusks from the Upper Cretaceous of Colombia, but that, too, is confounded by the orthocone… Ooooh! I just thought of something: That “orthocone” might actually be a belemnite phragmocone! Now that would make better sense for the co-occurrence. But belemnites in concretions? Not sure I know of any localities for that. Sorry!
Best, Carl),
(142,142,242,From: Tyler  Sent: Sunday, October 25, 2015 10:26 PM  Subject: Fossils in Nevada
Hi Carl,
I found these rocks in the desert of southern Nevada near the Valley of Fire. I was curious as to whether they were fossils or not. Thank you!

From: Tyler  Sent: Thursday, November 05, 2015 2:14 PM To: Carl Mehling Subject: Re: Fossils in Nevada
Thank you so much Carl! One more here I was curious about, if you don\'t mind. It looks almost like an anemone to me. ,From: Carl Mehling  Sent: Tuesday, October 27, 2015 5:21 PM To: \'Tyler\' Subject: RE: Fossils in Nevada
Hi Tyler,
Thanks for your email. You have some gorgeous things there! The first one (small, black, branching pattern on rock) is not a fossil, believe it or not. These are called manganese dendrites and they form when water carrying dissolved manganese gets into a crack in a rock and deposits the manganese in this pattern. Absolutely beautiful! The second one (The white, round design with the radiating lines) is a horn coral. Horn corals were solitary corals that lived on Earth from the Ordovician to the Permian (as old as ~500 million years and as young as 250 million). By comparison the oldest known dinosaurs are only about 245 million years old. And the last one (dots along a trough) is the mold of a branching bryozoan. Bryozoans have been on Earth for hundreds of millions of years and very often co-occur with horn corals so there is a good chance they are the same age. Great finds!
Best, Carl

From: Carl Mehling  Sent: Thursday, November 05, 2015 2:30 PM To: \'Tyler\' Subject: RE: Fossils in Nevada
Sorry, Tyler. The photos are too blurry to read. Can you send sharper photos? Thanks, Carl),
(143,143,243,From: Kathy  Sent: Monday, October 26, 2015 9:41 AM  Subject: Fossil found on Wolf Creek, KS
These were found by high-school envirothon team while at a training day. Is there anything to them?
Thanks,
Kathy 

From: Kathy  Sent: Wednesday, November 04, 2015 2:32 PM To: Carl Mehling Subject: Re: RE: Fossil found on Wolf Creek, KS
Thank you so very much for your time and answers!!!
Kathy,From: Carl Mehling  Sent: Wednesday, October 28, 2015 10:03 AM To: \'Erik\' Subject: RE: Fossil found on Wolf Creek, KS
Hi Cathy,
Thanks for your email. You have what are called a septarian concretions (Google “septarian concretion” for many nice examples). It’s not a fossil in itself but rarely they may hide one in the center – to find out would require cutting or breaking it. Septarian concretions form as a ball of mud dries causing a network of cracks. Later, these cracks can fill with some mineral that cements the cracked pieces back together. Cool finds!
Best, Carl

From: Carl Mehling  Sent: Wednesday, November 04, 2015 4:23 PM To: \'Erik\' Subject: RE: RE: Fossil found on Wolf Creek, KS
My pleasure!),
(144,144,244,From: Tim  Sent: Monday, October 26, 2015 2:24 PM  Subject: Can you ID this fossil?
I have a fossil in a display cabinet in my 6th grade science classroom. I have not been able to identify it. I have attached a photo of it. it is about 12 cm across. Can you tell me what it is?
Tim

From: Tim Sent: Wednesday, October 28, 2015 12:03 PM  Subject: RE: Can you ID this fossil?
Carl,
Thank you for your reply. I teach sixth grade Earth Science in Vancouver, WA and have lots of displays in my classroom for the students to look at. I try to identify everything for them, so they get a good idea of what Deep Time is. That was one fossil I could not ID. I will write up a label this morning. The fossil was given to me by someone in our maintenance department. He said his father was quite a fossil hunter and wanted some of his fossils displayed so kids could see them. I have attached a couple of pictures of my fossil display.
Sincerely,
Tim

From: Tim  Sent: Wednesday, October 28, 2015 2:07 PM  Subject: RE: Can you ID this fossil?
My classroom is more like a museum than anything else. I am currently dealing with someone for a large sample of Coprolite. The students love the idea of fossilized dinosaur dung. I\'m attaching a picture. Do you think it looks authentic?
Tim

From: Tim  Sent: Wednesday, October 28, 2015 6:41 PM  Subject: RE: Can you ID this fossil?
I have a couple of little ones that did not cost much. As I recall, one was from Washington. I am attaching photos.
Tim

From: Tim  Sent: Friday, October 30, 2015 9:40 AM  Subject: RE: Can you ID this fossil?
The larger of the two, which has a bulge in the middle came from Ebay and was listed as being from Washington. The smaller one, which is more crescent shaped was in a box of rocks in a local rock shop; it was labeled as being coprolite. (possibly from Washington since that is where I live.
Do you have any suggestions for a reliable source from which to purchase an authentic dinosaur coprolite?
Tim

From: Tim  Sent: Friday, October 30, 2015 12:02 PM  Subject: RE: Can you ID this fossil?
Sounds good - I will check them out.
Tim

From: Tim  Sent: Friday, October 30, 2015 2:13 PM  Subject: RE: Can you ID this fossil?
Just a point of interest. I went to college in River Falls, WI and my brother was a geology major there. Once he took me out to one of his favorite fossil hunting areas. At the top of a hill on one of the township roads just outside of town, there is some exposed rock in a ditch. it\'s filled with crinoids. Every spring, the runoff water going down into the ditch exposes more crinoids. It seems that no matter how much you pick, there\'s always more the following year.
Tim

From: Tim  Sent: Friday, October 30, 2015 3:29 PM  Subject: RE: Can you ID this fossil?
There\'s also an outcropping of St. Peter\'s Sandstone back there. it\'s called the Sandstone Monument. We used to ride our bicycles there and climb to the top of it. it\'s about 10 meters tall. Here\'s a link that talks about it:
http://stcroixbios.tripod.com/bios/id35.html
I actually found a picture of it.

Tim,From: Carl Mehling  Sent: Wednesday, October 28, 2015 10:10 AM To: \'Tim\' Subject: RE: Can you ID this fossil?
Hi Tim,
Thanks for your email. Wow! What a nice fossil. It sure looks like a heteromorph ammonite to me. If you don’t already know, ammonites are shelled relatives of octopuses that went extinct around 65 million years ago. The majority of ammonites have spiral shells that rotate along a plane. But there are a variety that diverge from that geometry and spiral away from the plane, spiral more loosely on the plane, change direction, or a variety of these things. They are collectively called the heteromorphs. Most ammonite fans consider them the most interesting and confusing. I would guess yours came from the Late Cretaceous of the Dakotas or Montana  based on the colors and the fact that heteromorphs are common in those rocks. Very nice fossil!
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 1:07 PM To: \'Tim\' Subject: RE: Can you ID this fossil?
Superb display, Tim! Bravo! 

From: Carl Mehling  Sent: Wednesday, October 28, 2015 3:05 PM To: \'Tim\' Subject: RE: Can you ID this fossil?
As luck would have it, coprolites are my special expertise! If you haven’t yet paid for that specimen, don’t. There is almost no chance it is genuine. The market is absolutely flooded with non-coprolites because “dinosaur turd” is so much easier to sell than “amorphous crystalline mass” or “unidentified geologic oddity.” I always tell people “Caveat Empturd.” If you hunt for coprolites on eBay avoid anything from Utah, Washington, or anything pyritized. And anything at all identified as a dinosaur coprolite is automatically suspect as they are extremely rare for some reason. I’d be happy to have a look at anything you are considering.
Best, Carl

From: Carl Mehling  Sent: Thursday, October 29, 2015 12:42 PM To: \'Tim\' Subject: RE: Can you ID this fossil?
Hmmm… The Washington one is suspect. I know these things certainly look like turds but I think that similarity is superficial. These have been debated for years and I feel that the non-coprolite camp makes the best case. I’d love to learn I am wrong on this one but right now the evidence is quite against them. Now the other one could possibly be a coprolite, but very unlikely to be from a dinosaur. So you know where it was purported to have been found?

From: Carl Mehling  Sent: Friday, October 30, 2015 11:55 AM To: \'Tim\' Subject: RE: Can you ID this fossil?
Hi Tim,
I would consider the first one a pseudo-coprolite and the second one highly suspect (i.e., not likely). As I said before, genuine dinosaur coprolites are truly rare so anything for sale online is extremely suspect. I can offer you sources for genuine shark coprolites and other things however.
Best, Carl 

From: Carl Mehling  Sent: Friday, October 30, 2015 1:20 PM To: \'Tim\' Subject: RE: Can you ID this fossil?
I trust coprolites from these folks:
http://www.rhyniechert.com/ddfossils.html
http://www.fossilworkshop.com/index.html 

From: Carl Mehling  Sent: Friday, October 30, 2015 2:28 PM To: \'Tim\' Subject: RE: Can you ID this fossil?
I’ve been to places like that. Simply incredible, huh?

From: Carl Mehling  Sent: Friday, October 30, 2015 4:21 PM To: \'Tim\' Subject: RE: Can you ID this fossil?
Cool!),
(145,145,245,From: Thomas Sent: Monday, October 26, 2015 6:13 PM  Subject: Fossil identification?
Dear Sir,
Please see attached photos of what may be a fossil (?) which was found in a load of gravel from a quarry somewhere in the area of Tallahassee, Florida. Any information you could provide on this would be very much appreciated.
Please respond to Thomas
Thank you for your help with this.
Thomas

From: Thomas Sent: Wednesday, October 28, 2015 1:15 PM  Subject: RE: Fossil identification?
Carl, 
Thank you for having a look, I have never really seen anything like it either.
Thanks again.
Thomas,From: Carl Mehling  Sent: Wednesday, October 28, 2015 10:16 AM To: \'Thomas\' Subject: RE: Fossil identification?
Hi Thomas,
Thanks for your email. I’ve had a good long look at your photos and can’t be sure it’s a fossil. The parallel lines running through the center are the most promising detail but it isn’t enough for me to feel confident it is a fossil. It very well could be but it’s poor preservation may render it beyond identification. Sorry!
Best, Carl

From: Carl Mehling  Sent: Wednesday, October 28, 2015 3:06 PM To: \'Thomas\' Subject: RE: Fossil identification?
My pleasure!),
(146,146,246,From: Brock  Sent: Tuesday, October 27, 2015 12:25 PM  Subject: Possible Fossil?
Hello,
I\'m trying to reach Carl Mehling based on a fossil identification page I happened across. 
I have this odd rock from the shoreline of Lake Waco, TX. Like many lakes in Texas, it is artificial, so I\'m not counting on this being close to any ancient lake beds or the like. 
I have attached pictures of the rock below. There is a distinct curved portion with numerous segments about 1/4 inch wide. This curved part is 3 inches wide at the bigger side and more like 2 inches wide at the smaller side. It weighs 1.5 lbs. 
Does this look like it is anything notable or is it just my imagination? 
Thanks!
Brock

From: Brock Sent: Thursday, October 29, 2015 10:00 PM  Subject: Re: Possible Fossil?
Hi Carl,
This is welcome news - I had no idea that Waco was a hotspot for anything besides wooly mammoths - this is nice to know! I feel better about my old paperweight now. 
Thank you very much!!
Brock,From: Carl Mehling  Sent: Wednesday, October 28, 2015 10:39 AM To: \'Brock\' Subject: RE: Possible Fossil?
Hi Brock,
Thanks for your email. I am happy to say this is not your imagination! This is a fossil ammonite. If you don’t already know, ammonites are shelled relatives of octopuses that went extinct around 65 million years ago. There are great Cretaceous exposures all round Waco and they are well-known for their ammonites so that all fits nicely. Nice find!
Best, Carl

From: Carl Mehling  Sent: Friday, October 30, 2015 11:51 AM To: \'Brock\' Subject: RE: Possible Fossil?
My pleasure!),
(147,147,247,From: Kirstin  Sent: Tuesday, October 27, 2015 3:13 PM  Subject: Jaw fossil identification
Dear Carl Mehling,
I came across your contact details on the website of the American Museum of Natural History, with an offer to help with fossil identification. I would be very grateful if you could provide any thoughts on this fossil found by my friend in the mountains near Ushuaia, Argentina. Unfortunately he didn\'t bring it back with him, but I am very intrigued by the photos he took!  
Kind regards,  Kirstin ,From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:02 AM To: John Subject: FW: Jaw fossil identification with photos
Hey Doc,
What do you make of this? At first it looks exactly like a horse skull. But then I get convinced it’s just a crazy rock…
Thanks, Carl

From: John  Sent: Wednesday, October 28, 2015 11:59 AM  Subject: Re: Jaw fossil identification with photos
Pretty sure it’s a cool “pseudo-fossil”.  But the background looks a lot like the rocks in which we find fossils in Chile.

From: Carl Mehling  Sent: Wednesday, October 28, 2015 1:00 PM To: John  Subject: RE: Jaw fossil identification with photos
I thought so on BOTH of those points! Thanks!

From: Carl Mehling  Sent: Wednesday, October 28, 2015 1:03 PM To: \'Kirstin\' Subject: RE: Jaw fossil identification with photos
Hi Kirsten,
Thanks for your email. At first glance I was pretty sure this was the fossil skull of a mammal, maybe a horse. But I looked more closely and shared it with another expert and we both agree it is a very cool fossil mimic: it’s just a rock that looks a lot like a fossil. It lacks the fine and specific details we’d need to see in order to feel comfortable calling it a fossil. Very weird!
Best, Carl),
(148,148,248,From: Date: October 28, 2015 at 6:24:18 AM EDT To: Subject: American Museum of Natural History Subject: Dragon that spits fire aged 1850 years. Comment or Question: My clients are in possession of bones or a skeleton of a dragon that spits fire. We managed to check the age and when it died at the geology centre and we were told it was just 95 years dead.. So my clients in Uganda happen to be selling the skeleton to any willing museum at a competitive fee after checking the skeleton.,From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:51 AM To: Barbara Subject: RE: American Museum of Natural History
SpecTACular! Wow… Thanks a million for sharing this one! I’ll get Mark to dig in the coffers IMMEDIATELY!),
(149,149,249,From: louisa  Sent: Wednesday, October 28, 2015 7:33 AM  Subject: Can you identify my fossil?
Dear Carl Mehling, I found this fossil on the beach in Eastbourne, England. 
I have no idea what it is, please can you help me identify it? 
I know I should have included a ruler in the picture for scale...but you can get an idea of the size from my fingers. . 
I will be very grateful if you can tell me about it. I love this little fossil! 
Best wishes from Louisa. 

From: louisa  Sent: Wednesday, November 04, 2015 10:21 AM  Subject: Re: Can you identify my fossil?
Hi, thank you ever so much for taking the time to tell me about my fossil, i was delighted to get your reply. Although the spine of an ancient sea urchin is not easy to viusalise, its wonderful to finally know what it is and the age is just mind blowing. I am going to be scanning the beach from now on!
With my best wishes from Louisa. ,From: Carl Mehling  Sent: Wednesday, October 28, 2015 11:56 AM To: \'louisa\' Subject: RE: Can you identify my fossil?
Hi Louisa,
Thanks for your email. What a gorgeous fossil you have found! I believe it is the spine from some kind of sea urchin. What you have is the mold in the rock where the spine once sat. I think the fossils from that area are Cretaceous so your fossil is likely between about 65 and 144 million years old. Fantastic find!
Best, Carl  

From: Carl Mehling  Sent: Wednesday, November 04, 2015 4:02 PM To: \'louisa\' Subject: RE: Can you identify my fossil?
My pleasure! Keep hunting!),
(150,150,250,From: Charles Sent: Wednesday, October 28, 2015 5:52 PM  Subject: 
I found this possible fossilized egg about 20 miles east of Camp Verde Az. along Hwy 260. Fossil Creek is only about 10 miles from there also. It was on the surface on the side of a hill. Fossil sea shells and plant life are very common in the area also. I am very interested to hear what you have to say about it, and appreciate your time.
Thanks, Charles

From: Charles  Sent: Thursday, October 29, 2015 12:46 PM  Subject: RE:
Thanks you for responding so fast. The information contained is definitely not bad news, learning about it and knowing for sure what it is was very fun. Again thank you for your time.,From: Carl Mehling  Sent: Thursday, October 29, 2015 12:37 PM To: \'Charles\' Subject: RE: 
Hi Charles,
Thanks for your email. I have had a look at your attached photos, and although it is sometimes hard to be sure with photos, I\'d be very surprised if this was a fossil egg.  It does somewhat resemble an egg, but it is much more likely to be a sedimentary concretion of some kind – it’s resemblance to an egg is merely accidental. Concretions often form when some object acts as a “seed” for cementation of sediment. On occasion, the thing that initiates the concretion, the “seed,” can be a fossil. To find this out would require cracking the concretion open. 
Alternatively, it might also be a lithified mud nodule. These start as balls of mud that harden through drying or chemical processes, sometimes at different rates within the ball. Mud nodules can also be balls of mud that affect the surrounding sediments and chemically alter them in a way that makes a shell-like layer harden and adhere to the mud interior. This can result in an object like yours with a hard “shell” and a looser interior. Fossil eggs usually have an easily identifiable shell which differs significantly from the enclosed sediments either by having a fine, specific kind of surface ornamentation (the smoother the \"shell,\" the less likely it is to be a non-bird dinosaur egg) or a specific type of crystalline structure in cross-section. Also, because eggshell is so brittle, the shell is almost always heavily cracked with apparent shifting of the eggshell bits – the more perfectly “egg-like” it is the less chance that it is a fossil egg. 
Additionally, the thickness of the “shell” almost certainly rules out egg. Embryos in hard-shelled terrestrial eggs need shells through which they can conduct gas exchange – basically so they can breathe. Past a certain thickness, this becomes impossible. Your specimen’s “shell” is much too thick.
Sorry to bring bad news,
Carl

From: Carl Mehling  Sent: Thursday, October 29, 2015 3:03 PM To: \'Charles\' Subject: RE: RE:
My pleaure!),
(151,151,251,From: Matt Sent: Sunday, November 01, 2015 9:17 PM To: Carl Mehling Subject: Fwd: Tooth pictures
Hi, I called a few days earlier about help in identifying a prehistoric fossil tooth. The tooth was found 6ft below ground on a side hill in Deerfield Mass.  I have attached some photos below for you to look at.  I live  in Greenwich ct and you can see it in person if need be.  
Thank you and look forward to hearing back from you.
Matt
,[Judy forwarded his phone message. He said he has a prehistoric tooth he wants dated and wants to know what organism it came from. Believes it’s a megalodon. I called back and left a message for him to email me photos.]

From: Carl Mehling  Sent: Wednesday, November 04, 2015 1:41 PM To: \'Gmail\'
Bcc: Mick Subject: RE: Tooth pictures
Hi Matt,
Thanks for your message and email. I have to agree with you 100% that this is a Carcharocles megalodon tooth. And of course that is cool just by itself. But there are other details here that are interesting. As far as I know C. megalodon teeth don’t really naturally occur on the East Coast north of Maryland, or if they do, they are exceedingly rare. Yet they have been found as far as (I think) Maine in archaeological contexts. Indians traded these teeth for a long time and for long distances, even well inland. And you’ll see that your tooth is missing the outmost prongs of its root. This kind of damage would also be very rare in nature. But if you look at the overall outline you might notice that it looks a lot like a stone projectile point. My guess is that if this was genuinely excavated from well underground it is a Carcharocles megalodon tooth that came from somewhere along the southern East Coast, was traded to more northern Indians, and fashioned into a spearpoint. Thus, it would be not only a paleontological find but an archaeological one. I would strongly suggest getting in touch with the folks at the Massachusetts Archaeological Society (http://massarchaeology.org/) and see what they suggest. Very nice find!
Best, Carl),
(152,152,252,From: Thomas Sent: Friday, October 30, 2015 10:05 AM  Subject: What is this??

From: Thomas Sent: Friday, October 30, 2015 12:20 PM  Subject: Re: What is this??
Hi Carl
My farm in South Carolina. 50 miles inland from ocean. 
Sent from my phone so please excuse brevity. 

From: Thomas Sent: Friday, October 30, 2015 12:41 PM  Subject: Re: What is this??
Maybe a couple more pictures from different angles?
Sent from my phone so please excuse brevity. ,From: Carl Mehling  Sent: Friday, October 30, 2015 12:00 PM To: \'Thomas\' Subject: RE: What is this??
Hi Thomas,
Thanks for your email. It definitely looks like you have a fossil shell there but there is not much else I can add because it is so fragmentary. If you can tell me where it was found I might be able to guess its age. However, since it is quite water worn it may have travelled some distance from where it originated, thus making an age assessment very difficult.
Best,
Carl

From: Carl Mehling  Sent: Friday, October 30, 2015 1:34 PM To: \'Thomas\' Subject: RE: What is this??
Hi Thomas,
I don\'t think other angels will help here because the specimen is fragmentary but I\'m also not a very knowledge fossil shell person - Ha! But as you probably know, SC is a fantastic state for fossils. Most of the ones I know of are from about 5 million to 35 million years old. Nice find!
Best,
Carl);"
	);


	
	


    }
}
