<?php

use Phinx\Migration\AbstractMigration;

class ImportVisitors extends AbstractMigration
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
	$add_visitors = $this->execute (
	"INSERT INTO visitor (id, name,email,twitter_handle) VALUES
	(101,'Tom','',''),
(102,'Louis','',''),
(103,'Kevin','',''),
(104,'William','',''),
(105,'Tahri','',''),
(106,'Mike','',''),
(107,'David','',''),
(108,'Lisa ','',''),
(109,'Brooke','',''),
(110,'Andy','',''),
(111,'David','',''),
(112,'Rick','',''),
(113,'Peter','',''),
(114,'Farkas','',''),
(115,'Com','',''),
(116,'Anjie','',''),
(117,'Tara','',''),
(118,'Jessica ','',''),
(119,'Tim','',''),
(120,'Naz','',''),
(121,'Randy','',''),
(122,'Alex ','',''),
(123,'John ','',''),
(124,'J ','',''),
(125,'Suzi ','',''),
(126,'Michael','',''),
(127,'Wendy','',''),
(128,'Tom','',''),
(129,'Domas Norkevicius','',''),
(130,'Jeff','',''),
(131,'Vincent','',''),
(132,'Adam ','',''),
(133,'Barb','',''),
(134,'David','',''),
(135,'Krista','',''),
(136,'Michael ','',''),
(137,'David','',''),
(138,'Jeffrey','',''),
(139,'Greg','',''),
(140,'Matt ','',''),
(141,'Richard','',''),
(142,'Janko','',''),
(143,'Tim','',''),
(144,'Jill','',''),
(145,'Lauren','',''),
(146,'Rick','',''),
(147,'Larry ','',''),
(148,'Steven','',''),
(149,'Robin ','',''),
(150,'Brian','',''),
(151,'Aris Timo','',''),
(152,'Susan ','',''),
(153,'Kel ','',''),
(154,'Brink','',''),
(155,'Joel ','',''),
(156,'Frito','',''),
(157,'CJ','',''),
(158,'Clayton ','',''),
(159,'James ','',''),
(160,'Sergio ','',''),
(161,'Miguel','',''),
(162,'Erin ','',''),
(163,'Melissa ','',''),
(164,'John ','',''),
(165,'Stan ','',''),
(166,'Sarah','',''),
(167,'Brittany','',''),
(168,'Ishveen ','',''),
(169,'Robert','',''),
(170,'Courtney','',''),
(171,'Brian','',''),
(172,'Matt','',''),
(173,'Lauren ','',''),
(174,'Brody','',''),
(175,'Jason ','',''),
(176,'Christopher','',''),
(177,'Kevin','',''),
(178,'Patrick','',''),
(179,'Luke Mull','',''),
(180,'Mike','',''),
(181,'Ray Dell ','',''),
(182,'Mark ','',''),
(183,'Linda','',''),
(184,'Rosa','',''),
(185,'Todd ','',''),
(186,'Jeff','',''),
(187,'Chanalle','',''),
(188,'Cathy ','',''),
(189,'Lindsey','',''),
(190,'Ron ','',''),
(191,'Sterling ','',''),
(192,'Marion ','',''),
(193,'Aaminah ','',''),
(194,'Kellie ','',''),
(195,'Brenna','',''),
(196,'Amy ','',''),
(197,'Bill ','',''),
(198,'Allen ','',''),
(199,'Shane ','',''),
(200,'Chrissie Rosamond','',''),
(201,'Charley','',''),
(202,'Gerry ','',''),
(203,'April ','',''),
(204,'James ','',''),
(205,'Clare ','',''),
(206,'Tom ','',''),
(207,'Barrett','',''),
(208,'Shadi','',''),
(209,'Unknown','',''),
(210,'John','',''),
(211,'Thomas','',''),
(212,'William','',''),
(213,'Christine ','',''),
(214,'Katie ','',''),
(215,'Steven','',''),
(216,'Matthew ','',''),
(217,'Michelle','',''),
(218,'Scott','',''),
(219,'Bob','',''),
(220,'William','',''),
(221,'Donald','',''),
(222,'Daniel','',''),
(223,'Bobbi-Lynn','',''),
(224,'Andrew ','',''),
(225,'Unknown','',''),
(226,'Kouga','',''),
(227,'Doug ','',''),
(228,'Kelsy','',''),
(229,'Carolyn ','',''),
(230,'Tom','',''),
(231,'Joe','',''),
(232,'Steven ','',''),
(233,'Dan','',''),
(234,'Mike ','',''),
(235,'Taylor','',''),
(236,'Mike ','',''),
(237,'Suzanne ','',''),
(238,'Michael','',''),
(239,'Dare ','',''),
(240,'Jim','',''),
(241,'Alan','',''),
(242,'Tyler ','',''),
(243,'Kathy ','',''),
(244,'Tim ','',''),
(245,'Thomas','',''),
(246,'Brock ','',''),
(247,'Kirstin ','',''),
(248,'Unknown','',''),
(249,'Louisa ','',''),
(250,'Charles','',''),
(251,'Matt','',''),
(252,'Thomas','','');"

	);

    }
}
