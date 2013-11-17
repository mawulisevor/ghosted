<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    $host="localhost";
    $username="senalabs_root";
    $password="MANIKODE360@YAHOO.COM";
    $dbase="senalabs_ghosts";
    $custcon = @mysql_connect($host, $username, $password);
    if (!$custcon) {
    exit('<p>Unable to connect to the ' .
    'database server at this time.</p>');
    }
    if (!@mysql_select_db($dbase)) {
    exit('<p>Unable to locate the database at this time.</p>');
    }
    $total = @mysql_query("
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';

--
-- Table structure for table 'centre'
--

CREATE TABLE 'centre' (
  'centre_id' int(11) NOT NULL AUTO_INCREMENT,
  'centre_name' varchar(200) NOT NULL,
  'region' varchar(20) NOT NULL,
  'district' varchar(100) NOT NULL,
  'ministry' varchar(100) NOT NULL,
  'contact_person' varchar(60) DEFAULT NULL,
  'contact_no' varchar(12) DEFAULT NULL,
  'staff_roll' int(11) NOT NULL DEFAULT '0',
  'cagd_roll' int(11) NOT NULL DEFAULT '0',
  'created_date' date DEFAULT NULL,
  'last_date' timestamp NULL DEFAULT NULL,
  'comment' varchar(200) DEFAULT NULL,
  PRIMARY KEY ('centre_id')
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='centres/insititutions with all data in one table' AUTO_INCREMENT=144 ;

--
-- Dumping data for table 'centre'
--

INSERT INTO 'centre' ('centre_id', 'centre_name', 'region', 'district', 'ministry', 'contact_person', 'contact_no', 'staff_roll', 'cagd_roll', 'created_date', 'last_date', 'comment') VALUES
(1, 'Nsaba Methodist Junior High School (JHS)', 'Central', 'AGONA EAST', 'Education', '', '', 494, 528, '2013-07-25', '2013-07-25 20:28:00', ''),
(2, 'Kwanyarko Seventh Day Adventist Primary JHS', 'Central', 'AGONA EAST', 'Education', '', '', 11, 12, '0000-00-00', '0000-00-00 00:00:00', ''),
(3, 'Nsaba Zion Primary JHS', 'Central', 'AGONA EAST', 'Education', '', '', 29, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(4, 'Mankron Methodist Primary', 'Central', 'AGONA EAST', 'Education', '', '', 41, 44, '0000-00-00', '0000-00-00 00:00:00', ''),
(5, 'Duakwa Catholic Schools', 'Central', 'AGONA EAST', 'Education', '', '', 33, 35, '0000-00-00', '0000-00-00 00:00:00', ''),
(6, 'Presby Schools', 'Central', 'AGONA EAST', 'Education', '', '', 65, 65, '0000-00-00', '0000-00-00 00:00:00', ''),
(7, 'Fawomanye AEDA', 'Central', 'AGONA EAST', 'Education', '', '', 43, 48, '2013-07-25', '2013-07-25 06:11:11', ''),
(8, 'Somanya AEDA', 'Central', 'AGONA EAST', 'Education', '', '', 27, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(9, ' Asafo Catholic School', 'Central', 'AGONA EAST', 'Education', '', '', 33, 36, '0000-00-00', '0000-00-00 00:00:00', ''),
(10, 'Amanfo 2 Primary School', 'Central', 'AGONA EAST', 'Education', '', '', 35, 38, '0000-00-00', '0000-00-00 00:00:00', ''),
(11, 'Kwansakrom DA  School', 'Central', 'AGONA EAST', 'Education', '', '', 24, 27, '0000-00-00', '0000-00-00 00:00:00', ''),
(12, 'Nsaba SHS', 'Central', 'AGONA EAST', 'Education', '', '', 31, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(13, 'Swedru Senior High Schools (SHS)', 'Central', 'AGONA EAST', 'Education', '', '', 32, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(14, 'Kwanyarko  SHS', 'Central', 'AGONA EAST', 'Education', '', '', 26, 29, '0000-00-00', '0000-00-00 00:00:00', ''),
(15, 'Nsaba  JHS', 'Central', 'AGONA EAST', 'Education', '', '', 30, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(16, 'Swedru Islamic Junior High Schools (JHS)', 'Central', 'AGONA EAST', 'Education', '', '', 20, 22, '0000-00-00', '0000-00-00 00:00:00', ''),
(17, 'Kwanyako Secondary School', 'Central', 'AGONA WEST', 'Education', '', '', 47, 48, '0000-00-00', '0000-00-00 00:00:00', ''),
(18, 'Nsaba Presbyterian Secondary School', 'Central', 'AGONA WEST', 'Education', '', '', 43, 44, '0000-00-00', '0000-00-00 00:00:00', ''),
(19, 'Nyakrom Day Secondary School', 'Central', 'AGONA WEST', 'Education', '', '', 42, 42, '0000-00-00', '0000-00-00 00:00:00', ''),
(20, 'Pank Secondary School', 'Central', 'AGONA WEST', 'Education', '', '', 31, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(21, 'Siddiq Senior High School', 'Central', 'AGONA WEST', 'Education', '', '', 35, 36, '0000-00-00', '0000-00-00 00:00:00', ''),
(22, 'Swedru School of Business', 'Central', 'AGONA WEST', 'Education', '', '', 33, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(23, 'Swedru Senior High School', 'Central', 'AGONA WEST', 'Education', '', '', 34, 35, '0000-00-00', '0000-00-00 00:00:00', ''),
(24, 'Catholic Junior High School', 'Central', 'AGONA WEST', 'Education', '', '', 18, 19, '0000-00-00', '0000-00-00 00:00:00', ''),
(25, 'Methodist Primary School', 'Central', 'AGONA WEST', 'Education', '', '', 21, 21, '0000-00-00', '0000-00-00 00:00:00', ''),
(26, 'Presbyterian Primary School', 'Central', 'AGONA WEST', 'Education', '', '', 17, 17, '0000-00-00', '0000-00-00 00:00:00', ''),
(27, 'Agona D A Primary', 'Central', 'AGONA WEST', 'Education', '', '', 19, 19, '0000-00-00', '0000-00-00 00:00:00', ''),
(28, 'Abakrampa SHS', 'Central', 'ABURA ASEBU KWAMANKESE ', 'Education', '', '', 30, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(29, 'Aburaman SHS', 'Central', 'ABURA ASEBU KWAMANKESE ', 'Education', '', '', 32, 38, '0000-00-00', '0000-00-00 00:00:00', ''),
(30, 'Abura Dunkwa SHS', 'Central', 'ABURA ASEBU KWAMANKESE ', 'Education', '', '', 34, 36, '0000-00-00', '0000-00-00 00:00:00', ''),
(31, 'Abura D A Primary', 'Central', 'ABURA ASEBU KWAMANKESE ', 'Education', '', '', 30, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(32, 'Asebu D A Primary/JHS', 'Central', 'ABURA ASEBU KWAMANKESE ', 'Education', '', '', 31, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(33, 'Kwamankese JHS', 'Central', 'ABURA ASEBU KWAMANKESE ', 'Education', '', '', 25, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(34, 'Besease Comm. SHS', 'Central', 'AJUMAKO ENYAN ESSIAN', 'Education', '', '', 86, 98, '0000-00-00', '0000-00-00 00:00:00', ''),
(35, 'Enyan Denkyira SHS', 'Central', 'AJUMAKO ENYAN ESSIAN', 'Education', '', '', 81, 86, '0000-00-00', '0000-00-00 00:00:00', ''),
(36, 'Mando Secondary Tech School', 'Central', 'AJUMAKO ENYAN ESSIAN', 'Education', '', '', 65, 72, '0000-00-00', '0000-00-00 00:00:00', ''),
(37, 'Ajumako DA Primary/JHS', 'Central', 'AJUMAKO ENYAN ESSIAN', 'Education', '', '', 61, 65, '0000-00-00', '0000-00-00 00:00:00', ''),
(38, 'Enyan DA Primary', 'Central', 'AJUMAKO ENYAN ESSIAN', 'Education', '', '', 31, 35, '0000-00-00', '0000-00-00 00:00:00', ''),
(39, 'Essian Primary/JHS', 'Central', 'AJUMAKO ENYAN ESSIAN', 'Education', '', '', 48, 55, '0000-00-00', '0000-00-00 00:00:00', ''),
(40, 'Breman Asikuma  SHS', 'Central', 'ASIKUMA ODOBEN BRAKWA', 'Education', '', '', 38, 40, '0000-00-00', '0000-00-00 00:00:00', ''),
(41, 'Odoben SHS', 'Central', 'ASIKUMA ODOBEN BRAKWA', 'Education', '', '', 32, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(42, 'Asikuma Primary', 'Central', 'ASIKUMA ODOBEN BRAKWA', 'Education', '', '', 29, 31, '0000-00-00', '0000-00-00 00:00:00', ''),
(43, 'Odoben DA Primary/JHS', 'Central', 'ASIKUMA ODOBEN BRAKWA', 'Education', '', '', 26, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(44, 'Brakwa DA Primary/JHS', 'Central', 'ASIKUMA ODOBEN BRAKWA', 'Education', '', '', 22, 22, '0000-00-00', '0000-00-00 00:00:00', ''),
(45, 'Presbyterian Primary', 'Central', 'ASIKUMA ODOBEN BRAKWA', 'Education', '', '', 23, 25, '0000-00-00', '0000-00-00 00:00:00', ''),
(46, 'Breman Primary/JHS', 'Central', 'ASIKUMA ODOBEN BRAKWA', 'Education', '', '', 21, 22, '0000-00-00', '0000-00-00 00:00:00', ''),
(47, 'Adankwaman Comm. SHS', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 68, 72, '0000-00-00', '0000-00-00 00:00:00', ''),
(48, 'Assin Manso SHS', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 60, 61, '0000-00-00', '0000-00-00 00:00:00', ''),
(49, 'Assin North SHS', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 51, 55, '0000-00-00', '0000-00-00 00:00:00', ''),
(50, 'Assin Nsuta SHS', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 52, 56, '0000-00-00', '0000-00-00 00:00:00', ''),
(51, 'Assin Primary', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 28, 31, '0000-00-00', '0000-00-00 00:00:00', ''),
(52, 'Fosu Primary/JHS', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 23, 26, '0000-00-00', '0000-00-00 00:00:00', ''),
(53, 'Methodist Primary', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 30, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(54, 'Catholic Primary/JHS', 'Central', 'ASSIN NORTH MUNICIPAL', 'Education', '', '', 22, 22, '0000-00-00', '0000-00-00 00:00:00', ''),
(55, 'Nyankumase Ahenkro SHS', 'Central', 'ASSIN SOUTH ', 'Education', '', '', 31, 31, '0000-00-00', '0000-00-00 00:00:00', ''),
(56, 'Obiri Yeboah SHS', 'Central', 'ASSIN SOUTH ', 'Education', '', '', 30, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(57, 'Assin South D A Primary/JHS', 'Central', 'ASSIN SOUTH ', 'Education', '', '', 21, 21, '0000-00-00', '0000-00-00 00:00:00', ''),
(58, 'Nyankumase Primary/JHS', 'Central', 'ASSIN SOUTH ', 'Education', '', '', 18, 18, '0000-00-00', '0000-00-00 00:00:00', ''),
(59, 'Ahenkro D A Primary', 'Central', 'ASSIN SOUTH ', 'Education', '', '', 23, 23, '0000-00-00', '0000-00-00 00:00:00', ''),
(60, 'Presbyterian Primary/JHS', 'Central', 'ASSIN SOUTH ', 'Education', '', '', 30, 31, '0000-00-00', '0000-00-00 00:00:00', ''),
(61, 'Assin Catholic Primary/JHS', 'Central', 'ASSIN SOUTH ', 'Education', '', '', 18, 18, '0000-00-00', '0000-00-00 00:00:00', ''),
(62, 'Obrakyere SHS', 'Central', 'AWUTU SENYA', 'Education', '', '', 63, 65, '0000-00-00', '0000-00-00 00:00:00', ''),
(63, 'Effutu Senior High School', 'Central', 'AWUTU SENYA', 'Education', '', '', 66, 68, '0000-00-00', '0000-00-00 00:00:00', ''),
(64, 'Senya Presby Primary/JHS', 'Central', 'AWUTU SENYA', 'Education', '', '', 45, 47, '0000-00-00', '0000-00-00 00:00:00', ''),
(65, 'Awutu Senya D A Primary School', 'Central', 'AWUTU SENYA', 'Education', '', '', 47, 49, '0000-00-00', '0000-00-00 00:00:00', ''),
(66, 'Awutu Catholic Primary/JHS', 'Central', 'AWUTU SENYA', 'Education', '', '', 44, 46, '0000-00-00', '0000-00-00 00:00:00', ''),
(67, 'Senya Methodist Primary', 'Central', 'AWUTU SENYA', 'Education', '', '', 45, 46, '0000-00-00', '0000-00-00 00:00:00', ''),
(68, 'Winneba SHS', 'Central', 'AWUTU SENYA EAST', 'Education', '', '', 54, 56, '0000-00-00', '0000-00-00 00:00:00', ''),
(69, 'Awutu Primary/JHS', 'Central', 'AWUTU SENYA EAST', 'Education', '', '', 47, 47, '0000-00-00', '0000-00-00 00:00:00', ''),
(70, 'Awutu Catholic Primary/JHS', 'Central', 'AWUTU SENYA EAST', 'Education', '', '', 37, 37, '0000-00-00', '0000-00-00 00:00:00', ''),
(71, 'Winneba Primary/JHS', 'Central', 'AWUTU SENYA EAST', 'Education', '', '', 38, 38, '0000-00-00', '0000-00-00 00:00:00', ''),
(72, 'Awutu Methodist Primary/JHS', 'Central', 'AWUTU SENYA EAST', 'Education', '', '', 36, 36, '0000-00-00', '0000-00-00 00:00:00', ''),
(73, 'Aggrey Memorial SHS', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 82, 88, '0000-00-00', '0000-00-00 00:00:00', ''),
(74, 'Academy of Christ the King', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 61, 68, '0000-00-00', '0000-00-00 00:00:00', ''),
(75, 'Adisadel College', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 74, 83, '0000-00-00', '0000-00-00 00:00:00', ''),
(76, 'Cape Coast Technical Institute', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 61, 68, '0000-00-00', '0000-00-00 00:00:00', ''),
(77, 'Effutu Secondary', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 69, 75, '0000-00-00', '0000-00-00 00:00:00', ''),
(78, 'Ghana National College', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 56, 62, '0000-00-00', '0000-00-00 00:00:00', ''),
(79, 'Commercial Service Institute (C.S.I)', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 41, 45, '0000-00-00', '0000-00-00 00:00:00', ''),
(80, 'Holy Child Secondary School', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 78, 83, '0000-00-00', '0000-00-00 00:00:00', ''),
(81, 'Mfantsipim School', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 75, 82, '0000-00-00', '0000-00-00 00:00:00', ''),
(82, 'Oguaa Secondary', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 72, 78, '0000-00-00', '0000-00-00 00:00:00', ''),
(83, 'University Practice Secondary School', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 68, 71, '0000-00-00', '0000-00-00 00:00:00', ''),
(84, 'Wesley Girls'' High School', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 77, 85, '0000-00-00', '0000-00-00 00:00:00', ''),
(85, 'Saint Augustine''s College', 'Central', 'CAPE COAST METROPOLITAN', 'Education', '', '', 76, 80, '0000-00-00', '0000-00-00 00:00:00', ''),
(86, 'Senya Secondary School', 'Central', 'EFFUTU MUNICIPAL', 'Education', '', '', 41, 42, '0000-00-00', '0000-00-00 00:00:00', ''),
(87, 'Bawjiase Methodist JHS', 'Central', 'EFFUTU MUNICIPAL', 'Education', '', '', 26, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(88, 'Effutu Primary/JHS', 'Central', 'EFFUTU MUNICIPAL', 'Education', '', '', 31, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(89, 'Emmanuel Presby JHS', 'Central', 'EFFUTU MUNICIPAL', 'Education', '', '', 30, 30, '0000-00-00', '0000-00-00 00:00:00', ''),
(90, 'Senya Methodist Primary/JHS', 'Central', 'EFFUTU MUNICIPAL', 'Education', '', '', 30, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(91, 'Effutu Catholic Primary/JHS', 'Central', 'EFFUTU MUNICIPAL', 'Education', '', '', 33, 34, '0000-00-00', '0000-00-00 00:00:00', ''),
(92, 'Bawjiase DA Primary', 'Central', 'EFFUTU MUNICIPAL', 'Education', '', '', 23, 24, '0000-00-00', '0000-00-00 00:00:00', ''),
(93, 'Ekumfi Abor Meth. Basic School', 'Central', 'EKUMFI', 'Education', '', '', 14, 14, '0000-00-00', '0000-00-00 00:00:00', ''),
(94, 'Ekumfi Presby Primary/JHS', 'Central', 'EKUMFI', 'Education', '', '', 16, 17, '0000-00-00', '0000-00-00 00:00:00', ''),
(95, 'Ekumfi SHS', 'Central', 'EKUMFI', 'Education', '', '', 24, 26, '0000-00-00', '0000-00-00 00:00:00', ''),
(96, 'Ekumfi D A Primary School', 'Central', 'EKUMFI', 'Education', '', '', 15, 15, '0000-00-00', '0000-00-00 00:00:00', ''),
(97, 'St. Joseph Primary/JHS', 'Central', 'EKUMFI', 'Education', '', '', 14, 14, '0000-00-00', '0000-00-00 00:00:00', ''),
(98, 'St. Martins Primary', 'Central', 'EKUMFI', 'Education', '', '', 15, 15, '0000-00-00', '0000-00-00 00:00:00', ''),
(99, 'Otuam Meth. Primary Sch.', 'Central', 'EKUMFI', 'Education', '', '', 13, 13, '0000-00-00', '0000-00-00 00:00:00', ''),
(100, 'Otuam Meth. JHS', 'Central', 'EKUMFI', 'Education', '', '', 11, 11, '0000-00-00', '0000-00-00 00:00:00', ''),
(101, 'Mozano Experimental Senior High School', 'Central', 'GOMOA EAST', 'Education', '', '', 28, 30, '0000-00-00', '0000-00-00 00:00:00', ''),
(102, 'Potsin T.I. Ahmadiya Secondary School', 'Central', 'GOMOA EAST', 'Education', '', '', 29, 30, '0000-00-00', '0000-00-00 00:00:00', ''),
(103, 'Gomoa Dago Catholic JHS', 'Central', 'GOMOA EAST', 'Education', '', '', 31, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(104, 'Gomoa Secondary Technical', 'Central', 'GOMOA EAST', 'Education', '', '', 25, 26, '0000-00-00', '0000-00-00 00:00:00', ''),
(105, 'Methodist Primary/JHS', 'Central', 'GOMOA EAST', 'Education', '', '', 18, 18, '0000-00-00', '0000-00-00 00:00:00', ''),
(106, 'Ekwamkrom Priimary/JHS', 'Central', 'GOMOA EAST', 'Education', '', '', 17, 17, '0000-00-00', '0000-00-00 00:00:00', ''),
(107, 'Dago D A Primary', 'Central', 'GOMOA EAST', 'Education', '', '', 17, 18, '0000-00-00', '0000-00-00 00:00:00', ''),
(108, 'Apam SHS', 'Central', 'GOMOA WEST', 'Education', '', '', 31, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(109, 'Gomoa Secondary', 'Central', 'GOMOA WEST', 'Education', '', '', 30, 30, '0000-00-00', '0000-00-00 00:00:00', ''),
(110, 'Mozano Comm. SHS', 'Central', 'GOMOA WEST', 'Education', '', '', 29, 30, '0000-00-00', '0000-00-00 00:00:00', ''),
(111, 'Apam Catholic Primary/JHS', 'Central', 'GOMOA WEST', 'Education', '', '', 25, 25, '0000-00-00', '0000-00-00 00:00:00', ''),
(112, 'Presbyterian Primary/JHS', 'Central', 'GOMOA WEST', 'Education', '', '', 23, 23, '0000-00-00', '0000-00-00 00:00:00', ''),
(113, 'Buduburam Primary/JHS', 'Central', 'GOMOA WEST', 'Education', '', '', 21, 22, '0000-00-00', '0000-00-00 00:00:00', ''),
(114, 'Mozano Prmary/JHS', 'Central', 'GOMOA WEST', 'Education', '', '', 24, 24, '0000-00-00', '0000-00-00 00:00:00', ''),
(115, 'Edinaman Day Secondary School', 'Central', 'KOMENDA EDINA EGUAFO ABIREM MUNICIPAL', 'Education', '', '', 38, 40, '0000-00-00', '0000-00-00 00:00:00', ''),
(116, 'Eguafo-Abrem Secondary', 'Central', 'KOMENDA EDINA EGUAFO ABIREM MUNICIPAL', 'Education', '', '', 34, 35, '0000-00-00', '0000-00-00 00:00:00', ''),
(117, 'Komenda Secondary', 'Central', 'KOMENDA EDINA EGUAFO ABIREM MUNICIPAL', 'Education', '', '', 30, 32, '0000-00-00', '0000-00-00 00:00:00', ''),
(118, 'Edina Primary/JHS', 'Central', 'KOMENDA EDINA EGUAFO ABIREM MUNICIPAL', 'Education', '', '', 27, 29, '0000-00-00', '0000-00-00 00:00:00', ''),
(119, 'Komenda Catholic Primary/JHS', 'Central', 'KOMENDA EDINA EGUAFO ABIREM MUNICIPAL', 'Education', '', '', 30, 31, '0000-00-00', '0000-00-00 00:00:00', ''),
(120, 'Abirem Primary/JHS', 'Central', 'KOMENDA EDINA EGUAFO ABIREM MUNICIPAL', 'Education', '', '', 23, 25, '0000-00-00', '0000-00-00 00:00:00', ''),
(121, 'Ekumfi T. I. Ahmadiiyya SHS', 'Central', 'MFANTSEMAN MUNICIPAL', 'Education', '', '', 90, 92, '0000-00-00', '0000-00-00 00:00:00', ''),
(122, 'Kwegyir Aggrey SHS', 'Central', 'MFANTSEMAN MUNICIPAL', 'Education', '', '', 76, 79, '0000-00-00', '0000-00-00 00:00:00', ''),
(123, 'Mankesim SHS', 'Central', 'MFANTSEMAN MUNICIPAL', 'Education', '', '', 87, 89, '0000-00-00', '0000-00-00 00:00:00', ''),
(124, 'Mfantsiman Girls SHS', 'Central', 'MFANTSEMAN MUNICIPAL', 'Education', '', '', 87, 91, '0000-00-00', '0000-00-00 00:00:00', ''),
(125, 'Saltpond Methodist High School', 'Central', 'MFANTSEMAN MUNICIPAL', 'Education', '', '', 86, 88, '0000-00-00', '0000-00-00 00:00:00', ''),
(126, 'Mankesim Primary/JHS', 'Central', 'MFANTSEMAN MUNICIPAL', 'Education', '', '', 36, 38, '0000-00-00', '0000-00-00 00:00:00', ''),
(127, 'Mfantsiman Primary/JHS', 'Central', 'MFANTSEMAN MUNICIPAL', 'Education', '', '', 38, 40, '0000-00-00', '0000-00-00 00:00:00', ''),
(128, 'Forever Young SHS', 'Central', 'TWIFO HEMAN LOWER DENKYIRA', 'Education', '', '', 37, 40, '0000-00-00', '0000-00-00 00:00:00', ''),
(129, 'Jukwa SHS', 'Central', 'TWIFO HEMAN LOWER DENKYIRA', 'Education', '', '', 38, 41, '0000-00-00', '0000-00-00 00:00:00', ''),
(130, 'Twifo Praso SHS', 'Central', 'TWIFO HEMAN LOWER DENKYIRA', 'Education', '', '', 40, 43, '0000-00-00', '0000-00-00 00:00:00', ''),
(131, 'Denkyira Catholic Primary', 'Central', 'TWIFO HEMAN LOWER DENKYIRA', 'Education', '', '', 26, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(132, 'Boa-Amponsem SHS', 'Central', 'UPPER DENKYIRA EAST MUNICIPAL', 'Education', '', '', 26, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(133, 'Diaso SHS', 'Central', 'UPPER DENKYIRA EAST MUNICIPAL', 'Education', '', '', 27, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(134, 'Dunkwa SHS', 'Central', 'UPPER DENKYIRA EAST MUNICIPAL', 'Education', '', '', 30, 31, '0000-00-00', '0000-00-00 00:00:00', ''),
(135, 'Boa-Amponsem Primary/JHS', 'Central', 'UPPER DENKYIRA EAST MUNICIPAL', 'Education', '', '', 18, 20, '0000-00-00', '0000-00-00 00:00:00', ''),
(136, 'Dunkwa Catholic Primary/JHS', 'Central', 'UPPER DENKYIRA EAST MUNICIPAL', 'Education', '', '', 16, 18, '0000-00-00', '0000-00-00 00:00:00', ''),
(137, 'Denkyira Presbyterian Primary/JHS', 'Central', 'UPPER DENKYIRA EAST MUNICIPAL', 'Education', '', '', 15, 16, '0000-00-00', '0000-00-00 00:00:00', ''),
(138, 'Oxford SHS', 'Central', 'UPPER DENKYIRA WEST', 'Education', '', '', 41, 44, '0000-00-00', '0000-00-00 00:00:00', ''),
(139, 'St. Andrew''s College', 'Central', 'UPPER DENKYIRA WEST', 'Education', '', '', 40, 43, '0000-00-00', '0000-00-00 00:00:00', ''),
(140, 'Upper Denyira D A Primary/JHS', 'Central', 'UPPER DENKYIRA WEST', 'Education', '', '', 31, 33, '0000-00-00', '0000-00-00 00:00:00', ''),
(141, 'Upper Denkyira Catholic Primary/JHS', 'Central', 'UPPER DENKYIRA WEST', 'Education', '', '', 34, 36, '0000-00-00', '0000-00-00 00:00:00', ''),
(142, 'Upper Denkyira Methodist JHS', 'Central', 'UPPER DENKYIRA WEST', 'Education', '', '', 26, 28, '0000-00-00', '0000-00-00 00:00:00', ''),
(143, 'Ketu North District Assembly', 'Volta', 'Ketu North District Assembly', 'Local Government', NULL, NULL, 55, 70, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table 'district'
--

CREATE TABLE'district' (
  'district_id' int(5) NOT NULL AUTO_INCREMENT,
  'district_name' text NOT NULL,
  'region_id' int(2) NOT NULL,
  PRIMARY KEY ('district_id'),
  KEY 'fk_region_idx' ('region_id')
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='districts of ghana' AUTO_INCREMENT=416 ;

--
-- Dumping data for table 'district'
--

INSERT INTO 'district' ('district_id', 'district_name', 'region_id') VALUES
(201, 'Adansi North', 101),
(202, 'Adansi South', 101),
(203, 'Afigya-Kwabre ', 101),
(204, 'Ahafo Ano North', 101),
(205, 'Ahafo Ano South', 101),
(206, 'Amansie Central', 101),
(207, 'Amansie West', 101),
(208, 'Asante Akim Central Municipal', 101),
(209, 'Asante Akim North', 101),
(210, 'Asante Akim South', 101),
(211, 'Asokore Mampong Municipal', 101),
(212, 'Atwima Kwanwoma', 101),
(213, 'Atwima Mponua', 101),
(214, 'Atwima Nwabiagya', 101),
(215, 'Bekwai Municipal', 101),
(216, 'Bosome Freho ', 101),
(217, 'Bosomtwe', 101),
(218, 'Ejisu-Juaben Municipal', 101),
(219, 'Ejura-Sekyedumase', 101),
(220, 'Kumasi Metropolitan', 101),
(221, 'Kumawu', 101),
(222, 'Kwabre East', 101),
(223, 'Mampong Municipal', 101),
(224, 'Obuasi Municipal', 101),
(225, 'Offinso North ', 101),
(226, 'Offinso South Municipal', 101),
(227, 'Sekyere Afram Plains', 101),
(228, 'Sekyere Central ', 101),
(229, 'Sekyere East', 101),
(230, 'Sekyere South', 101),
(231, 'Asunafo North Municipal', 102),
(232, 'Asunafo South', 102),
(233, 'Asutifi', 102),
(234, 'Asutifi South', 102),
(235, 'Atebubu-Amantin Municipal', 102),
(236, 'Banda', 102),
(237, 'Berekum Municipal', 102),
(238, 'Dormaa East', 102),
(239, 'Dormaa Municipal', 102),
(240, 'Dormaa West', 102),
(241, 'Jaman North', 102),
(242, 'Jaman South', 102),
(243, 'Kintampo North Municipal', 102),
(244, 'Kintampo South', 102),
(245, 'Nkoranza North ', 102),
(246, 'Nkoranza South', 102),
(247, 'Pru', 102),
(248, 'Sene', 102),
(249, 'Sene West', 102),
(250, 'Sunyani Municipal', 102),
(251, 'Sunyani West ', 102),
(252, 'Tain', 102),
(253, 'Tano North', 102),
(254, 'Tano South', 102),
(255, 'Techiman Municipal', 102),
(256, 'Techiman North', 102),
(257, 'Wenchi Municipal', 102),
(258, 'Agona East ', 103),
(259, 'Abura-Asebu-Kwam ', 103),
(260, 'Agona West Municipal', 103),
(261, 'Ajumako-Enyan-Essiam', 103),
(262, 'Asikuma-Odoben-Brakwa', 103),
(263, 'Assin North Municipal', 103),
(264, 'Assin South', 103),
(265, 'Awutu-Senya', 103),
(266, 'Awutu-Senya-East', 103),
(267, 'Cape Coast Metropolitan', 103),
(268, 'Effutu Municipal', 103),
(269, 'Ekumfi', 103),
(270, 'Gomoa East ', 103),
(271, 'Gomoa West', 103),
(272, 'Komenda-Edina-Eguafo-Abirem Municipal', 103),
(273, 'Mfantseman Municipal', 103),
(274, 'Twifo-Heman-Lower Denkyira', 103),
(275, 'Upper Denkyira East Municipal', 103),
(276, 'Upper Denkyira West', 103),
(277, 'Akuapim South ', 104),
(278, 'Afram Plains South ', 104),
(279, 'Akuapim North', 104),
(280, 'Akyemansa', 104),
(281, 'Asuogyaman', 104),
(282, 'Atiwa', 104),
(283, 'Ayensuano ', 104),
(284, 'Birim Central Municipal', 104),
(285, 'Birim North ', 104),
(286, 'Birim South', 104),
(287, 'Denkyembour ', 104),
(288, 'East Akim Municipal', 104),
(289, 'Fanteakwa', 104),
(290, 'Kwaebibirem', 104),
(291, 'Kwahu East ', 104),
(292, 'Kwahu North', 104),
(293, 'Kwahu South', 104),
(294, 'Kwahu West Municipal', 104),
(295, 'Lower Manya Krobo', 104),
(296, 'New Juaben Municipal', 104),
(297, 'Nsawam Municipal', 104),
(298, 'Suhum-Kraboa-Coaltar', 104),
(299, 'Upper Manya Krobo ', 104),
(300, 'Upper West Akim ', 104),
(301, 'West Akim Municipal', 104),
(302, 'Yilo Krobo Municipal', 104),
(303, 'Accra Metropolitan', 105),
(304, 'Ada West ', 105),
(305, 'Adentan municipal ', 105),
(306, 'Ashaiman Municipal', 105),
(307, 'Dangme East', 105),
(308, 'Dangme West', 105),
(309, 'Ga Central ', 105),
(310, 'Ga East Municipal', 105),
(311, 'Ga South Municipal', 105),
(312, 'Ga West Municipal', 105),
(313, 'Kpone Katamanso ', 105),
(314, 'La Dade-Kotopon Municipal ', 105),
(315, 'La-Nkwantanang-Madina ', 105),
(316, 'Ledzokuku-Krowor Municipal ', 105),
(317, 'Ningo-Prampam ', 105),
(318, 'Tema Metropolitan', 105),
(319, 'Bole', 106),
(320, 'Bunkpurugu-Yunyoo', 106),
(321, 'Central Gonja', 106),
(322, 'Chereponi', 106),
(323, 'East Gonja', 106),
(324, 'East Mamprusi', 106),
(325, 'Gushiegu', 106),
(326, 'Karaga', 106),
(327, 'Kpandai ', 106),
(328, 'Kumbungu ', 106),
(329, 'Mamprugo Moaduri ', 106),
(330, 'Mion ', 106),
(331, 'Nanumba North', 106),
(332, 'Nanumba South', 106),
(333, 'North Gonja ', 106),
(334, 'Saboba', 106),
(335, 'Sagnarigu ', 106),
(336, 'Savelugu-Nanton Municipal', 106),
(337, 'Sawla-Tuna-Kalba', 106),
(338, 'Tamale Metropolitan', 106),
(339, 'Tatale Sangule ', 106),
(340, 'Tolon', 106),
(341, 'West Gonja', 106),
(342, 'West Mamprusi', 106),
(343, 'Yendi Municipal', 106),
(344, 'Zabzugu ', 106),
(345, 'Bawku Municipal', 107),
(346, 'Bawku West', 107),
(347, 'Binduri ', 107),
(348, 'Bolgatanga Municipal', 107),
(349, 'Bongo', 107),
(350, 'Builsa', 107),
(351, 'Builsa South ', 107),
(352, 'Garu-Tempane', 107),
(353, 'Kassena Nankana East', 107),
(354, 'Kassena Nankana West', 107),
(355, 'Nabdam ', 107),
(356, 'Pusiga ', 107),
(357, 'Talensi', 107),
(358, 'Daffiama Bussie Issa ', 108),
(359, 'Jirapa', 108),
(360, 'Lambussie Karni ', 108),
(361, 'Lawra', 108),
(362, 'Nadowli', 108),
(363, 'Nandom ', 108),
(364, 'Sissala East', 108),
(365, 'Sissala West', 108),
(366, 'Wa East', 108),
(367, 'Wa Municipal', 108),
(368, 'Wa West', 108),
(369, 'Adaklu ', 109),
(370, 'Afadjato ', 109),
(371, 'Agotime Ziope', 109),
(372, 'Akatsi North ', 109),
(373, 'Akatsi South', 109),
(374, 'Biakoye', 109),
(375, 'Central Tongu', 109),
(376, 'Ho Municipal', 109),
(377, 'Ho West ', 109),
(378, 'Hohoe Municipal', 109),
(379, 'Jasikan', 109),
(380, 'Kadjebi', 109),
(381, 'Keta Municipal', 109),
(382, 'Ketu South Municipal', 109),
(383, 'Ketu North', 109),
(384, 'Kpando Municipal', 109),
(385, 'Krachi East', 109),
(386, 'Krachi Nchumuru', 109),
(387, 'Krachi West', 109),
(388, 'Nkwanta North ', 109),
(389, 'Nkwanta South', 109),
(390, 'North Dayi ', 109),
(391, 'North Tongu ', 109),
(392, 'South Dayi', 109),
(393, 'South Tongu', 109),
(394, 'Ahanta West', 110),
(395, 'Aowin', 110),
(396, 'Bia', 110),
(397, 'Bia East ', 110),
(398, 'Bibiani-Anhwiaso-Bekwai', 110),
(399, 'Bodi ', 110),
(400, 'Ellembele', 110),
(401, 'Jomoro', 110),
(402, 'Juaboso', 110),
(403, 'Mpohor', 110),
(404, 'Mpohor-Wassa East', 110),
(405, 'Nzema East Municipal', 110),
(406, 'Prestea-Huni Valley ', 110),
(407, 'Sefwi Akontombra ', 110),
(408, 'Sefwi-Wiawso', 110),
(409, 'Sekondi Takoradi Metropolitan', 110),
(410, 'Shama ', 110),
(411, 'Suaman', 110),
(412, 'Tarkwa Nsuaem Municipal', 110),
(413, 'Wasa Amenfi East', 110),
(414, 'Wasa Amenfi West', 110),
(415, 'Wassa Amenfi Central', 110);

-- --------------------------------------------------------

--
-- Table structure for table 'ghost'
--

CREATE TABLE'ghost' (
  'region' int(2) NOT NULL,
  'district' int(5) NOT NULL,
  'centre_id' int(11) NOT NULL AUTO_INCREMENT,
  'ministry' varchar(100) NOT NULL,
  'centre_name' varchar(200) NOT NULL,
  'contact_person' varchar(60) DEFAULT NULL,
  'contact_no' varchar(12) DEFAULT NULL,
  'staff_roll' int(11) NOT NULL DEFAULT '0',
  'cagd_roll' int(11) NOT NULL DEFAULT '0',
  'created_date' date DEFAULT NULL,
  'last_date' timestamp NULL DEFAULT NULL,
  PRIMARY KEY ('centre_id','district','region'),
  KEY 'fk_region_ghost_idx' ('region'),
  KEY 'fk_district_ghost_idx' ('district')
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cost centre or institutions at the district level' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table 'region'
--

CREATE TABLE'region' (
  'region_id' int(2) NOT NULL AUTO_INCREMENT,
  'region_name' text NOT NULL,
  PRIMARY KEY ('region_id')
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='political regions of ghana' AUTO_INCREMENT=111 ;

--
-- Dumping data for table 'region'
--

INSERT INTO 'region' ('region_id', 'region_name') VALUES
(101, 'ASHANTI '),
(102, 'BRONG AHAFO '),
(103, 'CENTRAL '),
(104, 'EASTERN '),
(105, 'GREATER ACCRA '),
(106, 'NORTHERN '),
(107, 'UPPER EAST '),
(108, 'UPPER WEST '),
(109, 'VOLTA '),
(110, 'WESTERN ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table 'district'
--
ALTER TABLE 'district'
  ADD CONSTRAINT 'fk_region' FOREIGN KEY ('region_id') REFERENCES 'region' ('region_id') ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table 'ghost'
--
ALTER TABLE 'ghost'
  ADD CONSTRAINT 'fk_district_ghost' FOREIGN KEY ('district') REFERENCES 'district' ('district_id') ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT 'fk_region_ghost' FOREIGN KEY ('region') REFERENCES 'region' ('region_id') ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
");
    if (!$total) {
    exit('<p>Error creating and adding content to tables in the database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
else {echo 'Operation successful';}

        ?>
    </body>
</html>
