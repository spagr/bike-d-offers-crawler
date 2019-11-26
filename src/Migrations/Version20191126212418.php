<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191126212418 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
		$this->addSql(<<<SQL
-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `brand` (`id`, `popularity`, `name`, `metadata_text`, `created_at`, `updated_at`) VALUES
(1,	229,	'4Ever',	'{\"Heureka\":{\"value\":\"4Ever\",\"parametrId\":4269,\"count\":229,\"valueId\":101662,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(2,	4,	'ACstar',	'{\"Heureka\":{\"value\":\"ACstar\",\"parametrId\":4269,\"count\":4,\"valueId\":25373,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(3,	10,	'AREZZO',	'{\"Heureka\":{\"value\":\"AREZZO\",\"parametrId\":4269,\"count\":10,\"valueId\":31396173,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(4,	70,	'Acra',	'{\"Heureka\":{\"value\":\"Acra\",\"parametrId\":4269,\"count\":70,\"valueId\":411246,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(5,	1,	'Agang',	'{\"Heureka\":{\"value\":\"Agang\",\"parametrId\":4269,\"count\":1,\"valueId\":425604,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(6,	54,	'Alpina',	'{\"Heureka\":{\"value\":\"Alpina\",\"parametrId\":4269,\"count\":54,\"valueId\":454828,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(7,	112,	'Amulet',	'{\"Heureka\":{\"value\":\"Amulet\",\"parametrId\":4269,\"count\":112,\"valueId\":25789,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(8,	5,	'Anita',	'{\"Heureka\":{\"value\":\"Anita\",\"parametrId\":4269,\"count\":5,\"valueId\":835727,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(9,	100,	'Apache',	'{\"Heureka\":{\"value\":\"Apache\",\"parametrId\":4269,\"count\":100,\"valueId\":25262,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(10,	521,	'Author',	'{\"Heureka\":{\"value\":\"Author\",\"parametrId\":4269,\"count\":521,\"valueId\":25266,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(11,	72,	'BBF',	'{\"Heureka\":{\"value\":\"BBF\",\"parametrId\":4269,\"count\":72,\"valueId\":385450,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(12,	48,	'BMC',	'{\"Heureka\":{\"value\":\"BMC\",\"parametrId\":4269,\"count\":48,\"valueId\":1481174,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(13,	4,	'Babboe',	'{\"Heureka\":{\"value\":\"Babboe\",\"parametrId\":4269,\"count\":4,\"valueId\":21243168,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(14,	11,	'Basso',	'{\"Heureka\":{\"value\":\"Basso\",\"parametrId\":4269,\"count\":11,\"valueId\":24258281,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(15,	1,	'Bauer',	'{\"Heureka\":{\"value\":\"Bauer\",\"parametrId\":4269,\"count\":1,\"valueId\":21557174,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(16,	1,	'BeFly',	'{\"Heureka\":{\"value\":\"BeFly\",\"parametrId\":4269,\"count\":1,\"valueId\":39664203,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(17,	4,	'Beany',	'{\"Heureka\":{\"value\":\"Beany\",\"parametrId\":4269,\"count\":4,\"valueId\":22417268,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(18,	135,	'Bergamont',	'{\"Heureka\":{\"value\":\"Bergamont\",\"parametrId\":4269,\"count\":135,\"valueId\":27027,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(19,	44,	'Bianchi',	'{\"Heureka\":{\"value\":\"Bianchi\",\"parametrId\":4269,\"count\":44,\"valueId\":420258,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(20,	12,	'Bottecchia',	'{\"Heureka\":{\"value\":\"Bottecchia\",\"parametrId\":4269,\"count\":12,\"valueId\":385449,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(21,	12,	'Brompton',	'{\"Heureka\":{\"value\":\"Brompton\",\"parametrId\":4269,\"count\":12,\"valueId\":258882,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(22,	35,	'Bulls',	'{\"Heureka\":{\"value\":\"Bulls\",\"parametrId\":4269,\"count\":35,\"valueId\":777360,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(23,	3,	'Bungi Bungi',	'{\"Heureka\":{\"value\":\"Bungi Bungi\",\"parametrId\":4269,\"count\":3,\"valueId\":33560570,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(24,	291,	'CTM',	'{\"Heureka\":{\"value\":\"CTM\",\"parametrId\":4269,\"count\":291,\"valueId\":516281,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(25,	9,	'CULT',	'{\"Heureka\":{\"value\":\"CULT\",\"parametrId\":4269,\"count\":9,\"valueId\":1546522,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(26,	484,	'Cannondale',	'{\"Heureka\":{\"value\":\"Cannondale\",\"parametrId\":4269,\"count\":484,\"valueId\":26879,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(27,	4,	'Capriolo',	'{\"Heureka\":{\"value\":\"Capriolo\",\"parametrId\":4269,\"count\":4,\"valueId\":2992560,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(28,	5,	'Cervelo',	'{\"Heureka\":{\"value\":\"Cervelo\",\"parametrId\":4269,\"count\":5,\"valueId\":408976,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(29,	4,	'Cheetah Original',	'{\"Heureka\":{\"value\":\"Cheetah Original\",\"parametrId\":4269,\"count\":4,\"valueId\":21542016,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(30,	5,	'Commencal',	'{\"Heureka\":{\"value\":\"Commencal\",\"parametrId\":4269,\"count\":5,\"valueId\":382099,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(31,	7,	'Condor',	'{\"Heureka\":{\"value\":\"Condor\",\"parametrId\":4269,\"count\":7,\"valueId\":21239047,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(32,	42,	'Conway',	'{\"Heureka\":{\"value\":\"Conway\",\"parametrId\":4269,\"count\":42,\"valueId\":22326778,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(33,	3,	'Coppi',	'{\"Heureka\":{\"value\":\"Coppi\",\"parametrId\":4269,\"count\":3,\"valueId\":21326714,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(34,	4,	'Coral',	'{\"Heureka\":{\"value\":\"Coral\",\"parametrId\":4269,\"count\":4,\"valueId\":24669132,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(35,	9,	'Core',	'{\"Heureka\":{\"value\":\"Core\",\"parametrId\":4269,\"count\":9,\"valueId\":22355541,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(36,	3,	'Corratec',	'{\"Heureka\":{\"value\":\"Corratec\",\"parametrId\":4269,\"count\":3,\"valueId\":26467,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(37,	1,	'Cossack',	'{\"Heureka\":{\"value\":\"Cossack\",\"parametrId\":4269,\"count\":1,\"valueId\":9912295,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(38,	376,	'Cube',	'{\"Heureka\":{\"value\":\"Cube\",\"parametrId\":4269,\"count\":376,\"valueId\":803542,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(39,	56,	'DHS',	'{\"Heureka\":{\"value\":\"DHS\",\"parametrId\":4269,\"count\":56,\"valueId\":628817,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(40,	24,	'Dahon',	'{\"Heureka\":{\"value\":\"Dahon\",\"parametrId\":4269,\"count\":24,\"valueId\":25286,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(41,	144,	'Dema',	'{\"Heureka\":{\"value\":\"Dema\",\"parametrId\":4269,\"count\":144,\"valueId\":25312,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(42,	36,	'Devron',	'{\"Heureka\":{\"value\":\"Devron\",\"parametrId\":4269,\"count\":36,\"valueId\":21239048,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(43,	72,	'Dino',	'{\"Heureka\":{\"value\":\"Dino\",\"parametrId\":4269,\"count\":72,\"valueId\":25715,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(44,	26,	'Early Rider',	'{\"Heureka\":{\"value\":\"Early Rider\",\"parametrId\":4269,\"count\":26,\"valueId\":3669259,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(45,	108,	'Electra',	'{\"Heureka\":{\"value\":\"Electra\",\"parametrId\":4269,\"count\":108,\"valueId\":197912,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(46,	11,	'Excelsior',	'{\"Heureka\":{\"value\":\"Excelsior\",\"parametrId\":4269,\"count\":11,\"valueId\":22344925,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(47,	10,	'FORCE',	'{\"Heureka\":{\"value\":\"FORCE\",\"parametrId\":4269,\"count\":10,\"valueId\":2060101,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(48,	224,	'Felt',	'{\"Heureka\":{\"value\":\"Felt\",\"parametrId\":4269,\"count\":224,\"valueId\":25926,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(49,	10,	'Fly Bikes',	'{\"Heureka\":{\"value\":\"Fly Bikes\",\"parametrId\":4269,\"count\":10,\"valueId\":21744731,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(50,	64,	'Focus',	'{\"Heureka\":{\"value\":\"Focus\",\"parametrId\":4269,\"count\":64,\"valueId\":435894,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(51,	1,	'Frejus',	'{\"Heureka\":{\"value\":\"Frejus\",\"parametrId\":4269,\"count\":1,\"valueId\":21432490,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(52,	13,	'Frog',	'{\"Heureka\":{\"value\":\"Frog\",\"parametrId\":4269,\"count\":13,\"valueId\":21243150,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(53,	1,	'Frozen',	'{\"Heureka\":{\"value\":\"Frozen\",\"parametrId\":4269,\"count\":1,\"valueId\":22992541,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(54,	271,	'GT',	'{\"Heureka\":{\"value\":\"GT\",\"parametrId\":4269,\"count\":271,\"valueId\":25417,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(55,	224,	'Galaxy',	'{\"Heureka\":{\"value\":\"Galaxy\",\"parametrId\":4269,\"count\":224,\"valueId\":25548,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(56,	500,	'Ghost',	'{\"Heureka\":{\"value\":\"Ghost\",\"parametrId\":4269,\"count\":500,\"valueId\":26937,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(57,	449,	'Giant',	'{\"Heureka\":{\"value\":\"Giant\",\"parametrId\":4269,\"count\":449,\"valueId\":25296,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(58,	119,	'HaiBike',	'{\"Heureka\":{\"value\":\"HaiBike\",\"parametrId\":4269,\"count\":119,\"valueId\":27308,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(59,	1,	'Hanscraft',	'{\"Heureka\":{\"value\":\"Hanscraft\",\"parametrId\":4269,\"count\":1,\"valueId\":910224,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(60,	3,	'Haro',	'{\"Heureka\":{\"value\":\"Haro\",\"parametrId\":4269,\"count\":3,\"valueId\":136785,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(61,	89,	'Head',	'{\"Heureka\":{\"value\":\"Head\",\"parametrId\":4269,\"count\":89,\"valueId\":849624,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(62,	11,	'Hercules',	'{\"Heureka\":{\"value\":\"Hercules\",\"parametrId\":4269,\"count\":11,\"valueId\":26730,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(63,	3,	'High Colorado',	'{\"Heureka\":{\"value\":\"High Colorado\",\"parametrId\":4269,\"count\":3,\"valueId\":298984,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(64,	4,	'Injusa',	'{\"Heureka\":{\"value\":\"Injusa\",\"parametrId\":4269,\"count\":4,\"valueId\":21242029,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(65,	3,	'Insportline',	'{\"Heureka\":{\"value\":\"Insportline\",\"parametrId\":4269,\"count\":3,\"valueId\":118840,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(66,	16,	'Johnny Loco',	'{\"Heureka\":{\"value\":\"Johnny Loco\",\"parametrId\":4269,\"count\":16,\"valueId\":5867411,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(67,	2,	'KANDS',	'{\"Heureka\":{\"value\":\"KANDS\",\"parametrId\":4269,\"count\":2,\"valueId\":32751759,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(68,	4,	'KS Cycling',	'{\"Heureka\":{\"value\":\"KS Cycling\",\"parametrId\":4269,\"count\":4,\"valueId\":8788045,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(69,	128,	'KTM',	'{\"Heureka\":{\"value\":\"KTM\",\"parametrId\":4269,\"count\":128,\"valueId\":260728,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(70,	454,	'Kellys',	'{\"Heureka\":{\"value\":\"Kellys\",\"parametrId\":4269,\"count\":454,\"valueId\":25826,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(71,	9,	'Kolsport',	'{\"Heureka\":{\"value\":\"Kolsport\",\"parametrId\":4269,\"count\":9,\"valueId\":820299,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(72,	53,	'Kona',	'{\"Heureka\":{\"value\":\"Kona\",\"parametrId\":4269,\"count\":53,\"valueId\":25418,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(73,	14,	'Kozbike',	'{\"Heureka\":{\"value\":\"Kozbike\",\"parametrId\":4269,\"count\":14,\"valueId\":23494084,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(74,	22,	'Kreativ',	'{\"Heureka\":{\"value\":\"Kreativ\",\"parametrId\":4269,\"count\":22,\"valueId\":21242025,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(75,	412,	'Kross',	'{\"Heureka\":{\"value\":\"Kross\",\"parametrId\":4269,\"count\":412,\"valueId\":652778,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(76,	379,	'Lapierre',	'{\"Heureka\":{\"value\":\"Lapierre\",\"parametrId\":4269,\"count\":379,\"valueId\":26558,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(77,	3,	'Le Grand',	'{\"Heureka\":{\"value\":\"Le Grand\",\"parametrId\":4269,\"count\":3,\"valueId\":24219691,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(78,	25,	'LeGrand',	'{\"Heureka\":{\"value\":\"LeGrand\",\"parametrId\":4269,\"count\":25,\"valueId\":21087993,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(79,	240,	'Leader Fox',	'{\"Heureka\":{\"value\":\"Leader Fox\",\"parametrId\":4269,\"count\":240,\"valueId\":25258,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(80,	107,	'Liberty',	'{\"Heureka\":{\"value\":\"Liberty\",\"parametrId\":4269,\"count\":107,\"valueId\":382177,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(81,	3,	'Look',	'{\"Heureka\":{\"value\":\"Look\",\"parametrId\":4269,\"count\":3,\"valueId\":803545,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(82,	11,	'MEXLLER',	'{\"Heureka\":{\"value\":\"MEXLLER\",\"parametrId\":4269,\"count\":11,\"valueId\":31396110,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(83,	34,	'MMR',	'{\"Heureka\":{\"value\":\"MMR\",\"parametrId\":4269,\"count\":34,\"valueId\":24403038,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(84,	136,	'MRX',	'{\"Heureka\":{\"value\":\"MRX\",\"parametrId\":4269,\"count\":136,\"valueId\":1213653,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(85,	1,	'Maltrack',	'{\"Heureka\":{\"value\":\"Maltrack\",\"parametrId\":4269,\"count\":1,\"valueId\":32236561,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(86,	62,	'Marin',	'{\"Heureka\":{\"value\":\"Marin\",\"parametrId\":4269,\"count\":62,\"valueId\":25703,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(87,	478,	'Maxbike',	'{\"Heureka\":{\"value\":\"Maxbike\",\"parametrId\":4269,\"count\":478,\"valueId\":258838,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(88,	29,	'Mayo',	'{\"Heureka\":{\"value\":\"Mayo\",\"parametrId\":4269,\"count\":29,\"valueId\":391972,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(89,	349,	'Merida',	'{\"Heureka\":{\"value\":\"Merida\",\"parametrId\":4269,\"count\":349,\"valueId\":25324,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(90,	108,	'Mondraker',	'{\"Heureka\":{\"value\":\"Mondraker\",\"parametrId\":4269,\"count\":108,\"valueId\":420957,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(91,	68,	'Mongoose',	'{\"Heureka\":{\"value\":\"Mongoose\",\"parametrId\":4269,\"count\":68,\"valueId\":25332,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(92,	6,	'Monochrome',	'{\"Heureka\":{\"value\":\"Monochrome\",\"parametrId\":4269,\"count\":6,\"valueId\":32159425,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(93,	102,	'Norco',	'{\"Heureka\":{\"value\":\"Norco\",\"parametrId\":4269,\"count\":102,\"valueId\":278875,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(94,	4,	'ORLANDO',	'{\"Heureka\":{\"value\":\"ORLANDO\",\"parametrId\":4269,\"count\":4,\"valueId\":23911959,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(95,	29,	'Olpran',	'{\"Heureka\":{\"value\":\"Olpran\",\"parametrId\":4269,\"count\":29,\"valueId\":25425,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(96,	276,	'Orbea',	'{\"Heureka\":{\"value\":\"Orbea\",\"parametrId\":4269,\"count\":276,\"valueId\":176689,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(97,	36,	'PUKY',	'{\"Heureka\":{\"value\":\"PUKY\",\"parametrId\":4269,\"count\":36,\"valueId\":33370166,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(98,	22,	'Pashley',	'{\"Heureka\":{\"value\":\"Pashley\",\"parametrId\":4269,\"count\":22,\"valueId\":835726,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(99,	85,	'Pells',	'{\"Heureka\":{\"value\":\"Pells\",\"parametrId\":4269,\"count\":85,\"valueId\":25499,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(100,	1,	'Piranha',	'{\"Heureka\":{\"value\":\"Piranha\",\"parametrId\":4269,\"count\":1,\"valueId\":260754,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(101,	2,	'Pyrobikes',	'{\"Heureka\":{\"value\":\"Pyrobikes\",\"parametrId\":4269,\"count\":2,\"valueId\":24737273,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(102,	6,	'Rascal',	'{\"Heureka\":{\"value\":\"Rascal\",\"parametrId\":4269,\"count\":6,\"valueId\":32883130,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(103,	1,	'Rascal Bikes',	'{\"Heureka\":{\"value\":\"Rascal Bikes\",\"parametrId\":4269,\"count\":1,\"valueId\":32751758,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(104,	47,	'Raymon',	'{\"Heureka\":{\"value\":\"Raymon\",\"parametrId\":4269,\"count\":47,\"valueId\":24313668,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(105,	10,	'Reactor',	'{\"Heureka\":{\"value\":\"Reactor\",\"parametrId\":4269,\"count\":10,\"valueId\":904300,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(106,	4,	'Ridley',	'{\"Heureka\":{\"value\":\"Ridley\",\"parametrId\":4269,\"count\":4,\"valueId\":26820,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(107,	370,	'Rock Machine',	'{\"Heureka\":{\"value\":\"Rock Machine\",\"parametrId\":4269,\"count\":370,\"valueId\":25410,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(108,	32,	'Rocky Mountain',	'{\"Heureka\":{\"value\":\"Rocky Mountain\",\"parametrId\":4269,\"count\":32,\"valueId\":197910,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(109,	79,	'Romet',	'{\"Heureka\":{\"value\":\"Romet\",\"parametrId\":4269,\"count\":79,\"valueId\":2110648,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(110,	8,	'Rossignol',	'{\"Heureka\":{\"value\":\"Rossignol\",\"parametrId\":4269,\"count\":8,\"valueId\":24440749,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(111,	7,	'RoyalBaby',	'{\"Heureka\":{\"value\":\"RoyalBaby\",\"parametrId\":4269,\"count\":7,\"valueId\":22992542,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(112,	2,	'STORM',	'{\"Heureka\":{\"value\":\"STORM\",\"parametrId\":4269,\"count\":2,\"valueId\":32751757,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(113,	1,	'Salsa',	'{\"Heureka\":{\"value\":\"Salsa\",\"parametrId\":4269,\"count\":1,\"valueId\":3173860,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(114,	3,	'Santa Cruz',	'{\"Heureka\":{\"value\":\"Santa Cruz\",\"parametrId\":4269,\"count\":3,\"valueId\":32874974,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(115,	11,	'Schwinn',	'{\"Heureka\":{\"value\":\"Schwinn\",\"parametrId\":4269,\"count\":11,\"valueId\":105853,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(116,	540,	'Scott',	'{\"Heureka\":{\"value\":\"Scott\",\"parametrId\":4269,\"count\":540,\"valueId\":25284,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(117,	102,	'Scud',	'{\"Heureka\":{\"value\":\"Scud\",\"parametrId\":4269,\"count\":102,\"valueId\":21242040,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(118,	2,	'Sensa',	'{\"Heureka\":{\"value\":\"Sensa\",\"parametrId\":4269,\"count\":2,\"valueId\":22393601,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(119,	3,	'Sense',	'{\"Heureka\":{\"value\":\"Sense\",\"parametrId\":4269,\"count\":3,\"valueId\":27953598,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(120,	29,	'Silverback',	'{\"Heureka\":{\"value\":\"Silverback\",\"parametrId\":4269,\"count\":29,\"valueId\":807804,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(121,	728,	'Specialized',	'{\"Heureka\":{\"value\":\"Specialized\",\"parametrId\":4269,\"count\":728,\"valueId\":25337,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(122,	137,	'Stevens',	'{\"Heureka\":{\"value\":\"Stevens\",\"parametrId\":4269,\"count\":137,\"valueId\":521138,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(123,	1,	'Stolen',	'{\"Heureka\":{\"value\":\"Stolen\",\"parametrId\":4269,\"count\":1,\"valueId\":427687,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(124,	3,	'Strida',	'{\"Heureka\":{\"value\":\"Strida\",\"parametrId\":4269,\"count\":3,\"valueId\":1036869,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(125,	1,	'Stuf',	'{\"Heureka\":{\"value\":\"Stuf\",\"parametrId\":4269,\"count\":1,\"valueId\":858990,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(126,	14,	'Subrosa',	'{\"Heureka\":{\"value\":\"Subrosa\",\"parametrId\":4269,\"count\":14,\"valueId\":354913,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(127,	10,	'Sundance',	'{\"Heureka\":{\"value\":\"Sundance\",\"parametrId\":4269,\"count\":10,\"valueId\":102234,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(128,	335,	'Superior',	'{\"Heureka\":{\"value\":\"Superior\",\"parametrId\":4269,\"count\":335,\"valueId\":105846,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(129,	1,	'TBB',	'{\"Heureka\":{\"value\":\"TBB\",\"parametrId\":4269,\"count\":1,\"valueId\":20686873,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(130,	24,	'TBK',	'{\"Heureka\":{\"value\":\"TBK\",\"parametrId\":4269,\"count\":24,\"valueId\":21252881,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(131,	33,	'Tern',	'{\"Heureka\":{\"value\":\"Tern\",\"parametrId\":4269,\"count\":33,\"valueId\":514180,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(132,	2,	'Torpado',	'{\"Heureka\":{\"value\":\"Torpado\",\"parametrId\":4269,\"count\":2,\"valueId\":200355,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(133,	1,	'Transition',	'{\"Heureka\":{\"value\":\"Transition\",\"parametrId\":4269,\"count\":1,\"valueId\":422657,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(134,	326,	'Trek',	'{\"Heureka\":{\"value\":\"Trek\",\"parametrId\":4269,\"count\":326,\"valueId\":25420,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(135,	10,	'Tribe',	'{\"Heureka\":{\"value\":\"Tribe\",\"parametrId\":4269,\"count\":10,\"valueId\":33560569,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(136,	17,	'VT-BIKE',	'{\"Heureka\":{\"value\":\"VT-BIKE\",\"parametrId\":4269,\"count\":17,\"valueId\":1036870,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(137,	3,	'Vautron',	'{\"Heureka\":{\"value\":\"Vautron\",\"parametrId\":4269,\"count\":3,\"valueId\":21243152,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(138,	12,	'Vellberg',	'{\"Heureka\":{\"value\":\"Vellberg\",\"parametrId\":4269,\"count\":12,\"valueId\":31396109,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(139,	6,	'Viva',	'{\"Heureka\":{\"value\":\"Viva\",\"parametrId\":4269,\"count\":6,\"valueId\":461233,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(140,	30,	'Volare',	'{\"Heureka\":{\"value\":\"Volare\",\"parametrId\":4269,\"count\":30,\"valueId\":31039260,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(141,	20,	'Wethepeople',	'{\"Heureka\":{\"value\":\"Wethepeople\",\"parametrId\":4269,\"count\":20,\"valueId\":201724,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(142,	21,	'Wilier',	'{\"Heureka\":{\"value\":\"Wilier\",\"parametrId\":4269,\"count\":21,\"valueId\":21243155,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(143,	87,	'Winora',	'{\"Heureka\":{\"value\":\"Winora\",\"parametrId\":4269,\"count\":87,\"valueId\":409257,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(144,	2,	'Wisper',	'{\"Heureka\":{\"value\":\"Wisper\",\"parametrId\":4269,\"count\":2,\"valueId\":464108,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(145,	12,	'Woom',	'{\"Heureka\":{\"value\":\"Woom\",\"parametrId\":4269,\"count\":12,\"valueId\":22501082,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL),
(146,	5,	'Worker',	'{\"Heureka\":{\"value\":\"Worker\",\"parametrId\":4269,\"count\":5,\"valueId\":108707,\"selected\":false,\"plus\":0}}',	'2019-11-26 21:20:48',	NULL);

-- 2019-11-26 21:25:51
SQL
		);
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
