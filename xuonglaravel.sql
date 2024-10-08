-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2024 at 10:22 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuonglaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `avatar`, `phone`, `email`, `is_active`, `created_at`, `updated_at`, `deleted_at`, `password`) VALUES
(1, 'Tung12345', '91 cầu diễn', 'customers/2sNfO389Fxt9wHzcO3ivjSj4fsWx9DmyaQemp2WP.jpg', '07953415150', 'ahihi123ee@gmail.com', 1, '2024-10-02 05:57:34', '2024-10-02 05:57:34', NULL, '123'),
(2, 'Mr. Dion Fisher DVM', '40797 Gulgowski Route Apt. 573\nOkunevaburgh, NY 22601', NULL, '+1 (434) 521-8958', 'timothy.hayes@schaden.net', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, '1234'),
(3, 'Griffin Okuneva', '789 Dare Plaza\nJalenstad, IA 88937-9602', NULL, '816.942.6179', 'thompson.chelsie@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(4, 'Dewayne Bashirian', '53737 Emory Manor Apt. 853\nJudeside, ID 31772-6003', NULL, '972.276.8717', 'connie80@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(5, 'Breanna Carter', '493 Cruickshank Mountain Apt. 742\nPort Raymundo, SD 41031', NULL, '281-733-2188', 'luz59@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(6, 'Dr. Adalberto Ruecker', '21328 Bartoletti Stravenue\nLake Jaredshire, AL 02099-2997', NULL, '1-662-547-5764', 'bhill@yahoo.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(7, 'Walter Mertz', '4898 Russell Flats\nLake Derrickborough, NC 59225', NULL, '1-620-877-0402', 'marcia33@kohler.info', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(8, 'Mrs. Noemy Haag MD', '5755 Price Junction\nLangworthton, ND 66260-5544', NULL, '+1-660-262-1021', 'aschulist@thiel.org', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(9, 'Dr. Oliver Rath', '19848 Gutkowski Pine\nChancechester, VA 48400-9301', NULL, '1-234-729-4242', 'serenity.moen@abshire.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(10, 'Bryce Collins', '64745 Emily Forest\nMetaport, CA 38027-3599', NULL, '+15205336798', 'kariane10@dickinson.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(11, 'Miss Courtney Mohr', '655 Eldred Spur Suite 045\nCorkeryhaven, AK 59228-8893', NULL, '(920) 500-1758', 'kali.schaden@yahoo.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(12, 'Susana Kutch', '9732 Ashlynn Cape Suite 497\nBarrowsland, NV 25874', NULL, '1-417-890-4216', 'zhaag@purdy.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(13, 'Alexandro Ferry', '7681 Lorenzo Spurs Suite 553\nRudolphstad, TN 69719-1069', NULL, '281.750.9362', 'stephany.aufderhar@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(14, 'Prof. Brendon Moen', '9152 Kellie Mountains\nEast Aftonshire, NH 99675-8994', NULL, '+1.707.798.2660', 'qmedhurst@crooks.biz', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(15, 'Boris Kreiger DDS', '54174 Mohamed Alley\nChetburgh, KS 54251-5180', NULL, '+1-626-472-1192', 'johnston.jacey@muller.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(16, 'Keely Gibson', '48116 Hamill Field\nBrantborough, NC 40107-0967', NULL, '+15207865426', 'lessie92@collier.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(17, 'Dr. Josh Heaney Jr.', '69260 Lind Parkway Suite 643\nWest Carrollbury, NH 27956-6323', NULL, '+1-762-886-9520', 'eino.koch@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(18, 'Troy Goyette', '264 Kiehn Land Suite 517\nSouth Lambert, KY 81367-4447', NULL, '618-304-6815', 'rkilback@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(19, 'Una Rohan Sr.', '536 Bernhard Prairie Apt. 170\nHeathcotefort, SC 30392-8357', NULL, '(478) 713-7472', 'brielle60@prohaska.org', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(20, 'Lonny Ullrich', '9296 Rodger Terrace Suite 155\nPort Ryan, AR 53898', NULL, '917.864.6839', 'bashirian.sandrine@smith.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(21, 'Hortense Jacobi', '662 Amaya Loaf\nEast Ernestineport, SC 08999', NULL, '1-458-547-4998', 'dorris03@yahoo.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(22, 'Misael Bogan', '35290 Estel Circle Suite 070\nSouth Gladyce, MO 22741', NULL, '+1 (303) 530-4987', 'hazel28@ledner.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(23, 'Raphaelle Cole', '45562 Norene Isle Apt. 934\nSouth Clifton, MS 85996', NULL, '(828) 791-2530', 'cormier.jamir@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(24, 'Anne Cormier PhD', '844 Cornelius Path Suite 121\nKihnfort, CO 73730-3247', NULL, '505.592.3174', 'kennedy.powlowski@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(25, 'Ahmed Heller', '26537 Hansen Lake Suite 453\nLangworthville, TN 29316', NULL, '+17408358109', 'creola.morar@walter.net', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(26, 'Dr. Kenneth Durgan', '3131 Ritchie Burgs Apt. 808\nGerholdbury, ND 12933', NULL, '+1 (331) 817-3490', 'hattie.leuschke@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(27, 'Pascale Torp', '3873 Lazaro Mount Apt. 571\nKariannestad, AR 79239-9606', NULL, '818.810.8644', 'jveum@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(28, 'Patsy Mosciski PhD', '8712 Lang Extension\nNorth Nicklauston, NE 91873', NULL, '248.330.5703', 'barrows.marty@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(29, 'Ms. Jolie Powlowski', '874 Graciela Well\nPort Emilio, NY 10695', NULL, '854.343.0510', 'ustroman@gaylord.info', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(30, 'Chadrick Lockman', '73107 John Parkway\nMadonnaview, AZ 24769', NULL, '+1.870.964.0136', 'lynch.evie@yahoo.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(31, 'Mr. Coty Green', '27265 Jewel Loaf\nWeberview, MS 66559', NULL, '(972) 760-1754', 'tomas50@haley.info', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(32, 'Rosa Jakubowski III', '35152 Leffler Rue Apt. 450\nMarlonland, NV 20762', NULL, '520-584-3499', 'murazik.jameson@yahoo.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(33, 'Jimmie Daniel', '716 Abner Rue\nAbernathyburgh, OK 53290', NULL, '+1-425-684-8513', 'bartell.treva@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(34, 'Otto Hessel', '44122 Jaclyn Light Apt. 993\nWest Roy, IN 69116-3473', NULL, '(406) 675-2190', 'richard.quigley@mccullough.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(35, 'Fiona Haag', '91433 Maverick Corners\nHuelmouth, AK 26105-7945', NULL, '+1.702.529.7720', 'silas.waelchi@prosacco.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(36, 'Greyson Jerde', '312 Lorenzo Center Suite 612\nReynoldsside, SD 96172', NULL, '(650) 836-5592', 'tristian84@wehner.info', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(37, 'Celestine Sporer', '407 Zena Spurs\nBeahanmouth, AR 48090-3371', NULL, '1-918-778-2431', 'destin.west@auer.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(38, 'Mrs. Eleanore Corwin', '483 Rippin Landing\nNikkoberg, HI 44057-2535', NULL, '+15012161353', 'dgaylord@raynor.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(39, 'Dr. Nicholas Sauer MD', '42510 Hoppe Union Suite 145\nPort Verlie, DC 27115', NULL, '+1-850-828-2587', 'jenkins.linnea@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(40, 'Noel Auer', '5399 Andre Rest Apt. 427\nCummeratamouth, WV 44546-6451', NULL, '1-256-637-9407', 'alexanne.kerluke@hills.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(41, 'Ms. Eulah Dare MD', '915 Herminia Rest Suite 178\nNew Carole, NH 08381', NULL, '(240) 806-9640', 'uauer@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(42, 'Edwina Schmidt', '86729 Amy Ports\nDibbertfurt, TX 13018-2511', NULL, '1-928-958-6378', 'nedra.friesen@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(43, 'Cole Denesik', '339 Lea Shores Apt. 892\nWest Linwoodbury, MI 20078', NULL, '1-715-893-7067', 'larkin.skye@parker.net', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(44, 'Bernice Will', '1951 Kuhn Isle\nPort Buddyside, WI 56669', NULL, '+1-234-990-5571', 'dayana10@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(45, 'Dakota Stehr', '605 Jacobi Forges\nJustonbury, CT 18365-8285', NULL, '1-470-292-6504', 'xmayert@dare.org', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(46, 'Annetta Cummerata', '14124 DuBuque River\nEast Eldonbury, FL 96295-9967', NULL, '+1 (320) 430-4000', 'scorkery@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(47, 'Ervin Funk', '90038 Jada Manors Apt. 113\nJohnstonside, TN 88770', NULL, '380-663-1026', 'alvina.gibson@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(48, 'Mr. Henri Rolfson', '1435 Simonis Groves\nLake Leonor, IA 51902-9408', NULL, '+1-310-971-2788', 'brent76@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(49, 'Lazaro Dietrich', '1084 Violet Drive Suite 160\nNew Chris, CA 47631', NULL, '+1 (740) 869-3437', 'dianna.reichel@ritchie.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(50, 'Lavina Marks', '3163 Keara Knolls Apt. 461\nPort Albertoshire, CO 29962-8576', NULL, '(508) 381-3009', 'gkulas@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(51, 'Alec Stracke', '756 Else Extension\nLake Vena, NH 17080', NULL, '1-361-710-8840', 'jamir36@yahoo.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(52, 'Jacky Morissette', '6756 Estrella Union\nSchambergerstad, ID 04854', NULL, '951-753-5022', 'jamarcus89@bogan.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(53, 'Prof. Maxine Stoltenberg Jr.', '124 Kevin Branch\nSouth Vidal, PA 37542', NULL, '+16519849412', 'alden36@kshlerin.biz', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(54, 'Nolan Prosacco', '38402 Whitney Island Suite 919\nNew Desiree, NM 10908-8966', NULL, '1-303-954-8406', 'alyce29@okeefe.net', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(55, 'Joanne Streich', '4757 Gaylord Green\nPort Mireille, NJ 52201-9935', NULL, '562-359-7856', 'anderson.loren@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(56, 'Dr. Stacy Wilderman', '791 Hester Via Suite 682\nNew Rodolfo, MO 86815-6596', NULL, '(386) 763-2423', 'sincere72@dicki.biz', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(57, 'Miss Marian Morar I', '5338 Price Meadows\nNew Terrencehaven, NY 62499-9949', NULL, '1-540-773-9193', 'ebert.josiane@cassin.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(58, 'Mr. Erwin D\'Amore DVM', '63348 Leannon Spring Suite 252\nNorth Claraland, PA 12304', NULL, '803-921-4430', 'tyree.ward@shields.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(59, 'Freeda Leffler Jr.', '13596 Cruickshank Mews\nMurazikburgh, FL 72660', NULL, '+1.513.916.1445', 'watsica.candice@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(60, 'Aidan Christiansen', '583 Parisian Parkway Apt. 924\nSouth Hiltontown, CA 15940', NULL, '435.860.4159', 'griffin.hettinger@hills.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(61, 'Prof. Michael Wilkinson IV', '5654 Jerde Walks Apt. 831\nReynachester, LA 66238', NULL, '1-628-796-9524', 'ljerde@goldner.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(62, 'Reggie Torphy Sr.', '965 Benedict Motorway\nSouth Lilly, MN 75566-6922', NULL, '(956) 677-3555', 'ikling@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(63, 'Bailee Goyette', '3429 Heidenreich Street Apt. 237\nEast Rosario, MS 91768', NULL, '+1-386-470-9023', 'hessel.rosalinda@osinski.biz', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(64, 'Frederik Murazik', '933 Windler Lodge\nAishaport, WA 42048-9003', NULL, '817-407-4707', 'howell.deborah@sawayn.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(65, 'Faustino Mraz', '55305 Boehm Cove\nPort Minaside, MO 25811-1024', NULL, '484.763.5479', 'concepcion31@haley.org', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(66, 'Aditya Jerde', '45998 Devan Throughway Suite 352\nBrandynland, MT 77310', NULL, '269.832.7036', 'cummerata.maryam@kunde.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(67, 'Philip Cassin', '68929 Judge Run\nBartonview, WA 07548', NULL, '1-858-363-1214', 'schinner.jefferey@homenick.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(68, 'Kelli Turner DDS', '9641 Wilmer Village Apt. 479\nNew Frankie, IL 00574', NULL, '425-931-5505', 'hintz.june@hamill.biz', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(69, 'Prof. Iva Hagenes IV', '318 Clara Locks Apt. 652\nPort Camren, NM 78195-1632', NULL, '740-488-0021', 'koch.deven@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(70, 'Ms. Camylle Lemke II', '3336 Lueilwitz Court Suite 091\nSouth Adela, DE 77000', NULL, '1-323-506-0974', 'nmcdermott@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(71, 'Electa Robel', '988 Schmitt Inlet\nEast Elisabeth, ND 79983', NULL, '(361) 655-0192', 'eriberto79@kunde.org', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(72, 'Jayce Nienow', '8387 Donato Walk\nLake Josie, VT 48531', NULL, '239.492.2378', 'olaf.strosin@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(73, 'Tad Douglas', '1260 Kiana Radial\nWest Eloiseview, SC 71278', NULL, '+1-908-662-4449', 'virginia.oberbrunner@hotmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(74, 'Carmel Hodkiewicz', '847 Homenick Knolls\nEast Salliestad, CA 84587-2768', NULL, '+1-650-258-8645', 'oosinski@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(75, 'Miss Jude Crist', '9070 Kozey Roads\nSouth Suzanneland, NH 44433', NULL, '+1-631-878-0068', 'meghan05@hotmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(76, 'Eldon Predovic', '54884 Huels Brook Suite 419\nJevonville, GA 60355', NULL, '1-606-949-0630', 'courtney.abernathy@funk.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(77, 'Dr. Annamarie Mitchell', '5971 Schuster Overpass\nPort Valliebury, OR 25139-7934', NULL, '502.800.6216', 'rberge@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(78, 'Chyna Reichel', '306 Maxime Walks\nLianatown, NJ 23892-7624', NULL, '769.209.3621', 'pearl84@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(79, 'Mr. Brett Howell III', '631 Esther Circle Apt. 370\nPort Charity, CT 28922', NULL, '+1.845.544.2445', 'jeremy.morissette@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(80, 'Bethel Crona', '309 Destiny Green Suite 975\nEast Elianeberg, NM 98915-0952', NULL, '+1-808-713-3188', 'collier.hobart@abshire.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(81, 'Isac Hudson II', '81167 Willms Circle Apt. 651\nBlickside, MI 80717-2304', NULL, '1-908-212-3447', 'tavares.ward@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(82, 'Prof. Ward Dooley DVM', '531 Gusikowski Union\nJenniemouth, MN 57440-5996', NULL, '+1 (530) 575-1414', 'shoppe@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(83, 'Maybell Dicki', '1240 Jenkins Neck Suite 156\nMiloborough, NE 43462-8251', NULL, '(351) 496-9606', 'johns.noemi@kautzer.net', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(84, 'Arielle Rippin IV', '3453 Connelly Mews\nReingershire, UT 53009-7333', NULL, '1-938-433-2350', 'ortiz.branson@kozey.org', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(85, 'Lauretta Kub', '7151 Dino Lane\nJabarishire, RI 59615-4264', NULL, '+13307556442', 'blanda.sandrine@yahoo.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(86, 'Kacey Koepp', '74073 Moore Pines\nEmmerichview, SD 31133-8657', NULL, '+1-949-910-0504', 'esteban.pollich@gmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(87, 'Wilford Towne Sr.', '398 Ayana Port Apt. 378\nConstantinview, MD 67269-2997', NULL, '+1-559-420-3797', 'tflatley@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(88, 'Anderson Dach', '8158 Halvorson Center\nNorth Nikolastown, VA 92435-9134', NULL, '(276) 744-9676', 'sporer.annalise@mante.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(89, 'Melba Hand', '4593 Senger Tunnel\nSouth Horaciomouth, IA 17783-2736', NULL, '862-273-3671', 'furman.weimann@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(90, 'Dr. Franco Kovacek II', '10272 Robb Knolls Suite 078\nSouth Monroe, NY 90247', NULL, '+1 (704) 466-8739', 'veda.rosenbaum@okuneva.org', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(91, 'Mrs. Elody Deckow', '3506 Mervin Manors\nKihnhaven, TN 03272-7827', NULL, '+1 (848) 576-0779', 'beryl.dietrich@ratke.net', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(92, 'Prof. Percival Cremin II', '380 Osinski Freeway\nTownetown, CO 21070-1438', NULL, '+17708938581', 'swill@hotmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(93, 'Zachery Harber', '7529 Marjorie Heights\nEast Rory, MD 79766', NULL, '509-221-3235', 'jodie.altenwerth@balistreri.biz', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(94, 'Bette Legros', '1004 Makenzie Gateway Suite 758\nHodkiewiczview, RI 79929-3881', NULL, '1-669-352-0172', 'treva97@yahoo.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(95, 'Mrs. Vernice Cremin', '15815 Kenyon Heights\nLake Vena, VT 53330-7972', NULL, '442-419-4051', 'braulio.hyatt@hotmail.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(96, 'Prof. Max Lesch PhD', '90498 Eliza Corners Suite 476\nWest Sherwoodbury, ND 57119', NULL, '(872) 425-3909', 'adelbert.lebsack@stroman.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(97, 'Lula Schinner II', '58018 Milton Forges Apt. 747\nSavionshire, NM 72672', NULL, '225-303-3868', 'cydney23@kohler.com', 0, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(98, 'Leone Cole', '99790 Jacinto Dam Suite 469\nRyanberg, MO 35362-1263', NULL, '719-647-7152', 'xkassulke@crist.info', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(99, 'Miss Trudie Wiegand II', '3920 Idell Radial\nBoehmhaven, DE 75472', NULL, '252.903.5872', 'conn.dominique@kertzmann.org', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(100, 'Mathilde Marquardt', '2713 Howell Union\nPort Claudemouth, NH 27904', NULL, '360.799.4421', 'dwilkinson@gmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(101, 'Greta Hermiston', '994 Guiseppe Glen Apt. 420\nSouth Kentonmouth, MN 78770-2112', NULL, '1-283-793-6127', 'queen.pagac@hotmail.com', 1, '2024-10-02 05:59:00', '2024-10-02 05:59:00', NULL, NULL),
(102, 'Tung12345', '91 cầu diễn', 'customers/IdxspWsjpBQgVL2AsXZz4lAf17s0j8BKQTDiTdDl.jpg', '08759756543', 'ahihi123ee@gmail.com', 1, '2024-10-02 05:59:21', '2024-10-02 06:32:48', '2024-10-02 06:32:48', NULL),
(103, 'Tung12345', '91 cầu diễn', 'customers/dYQ0YcN7XGUp2CdFNcNA3EtoZn7fE3YA2wdwKq4Y.jpg', '07953415151', 'ahihi123ee@gmail.com', 1, '2024-10-02 06:01:49', '2024-10-02 06:32:45', '2024-10-02 06:32:45', NULL),
(104, 'Tung12345', '91 cầu diễn', 'customers/zSmsEi4SPYjJNZcCKHFWWvkbJUan1qIEaOSQY3hl.jpg', '079534151555', 'ahihi123ee@gmail.com', 1, '2024-10-02 06:09:53', '2024-10-02 06:09:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_09_28_090026_create_flights_table', 1),
(5, '2024_09_28_103440_add_column_name_to_flights_table', 1),
(6, '2024_10_01_113357_create_customers_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2024_10_03_022923_create_category_posts_table', 2),
(9, '2024_10_07_084130_add_password_to_customers_table', 2),
(10, '2024_10_07_090037_users', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ryan Kilback DVM', 'nickolas52@example.net', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', 'w2KzJGoIns', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(2, 'Ms. Sylvia Auer V', 'carolyne02@example.com', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', '20pdNmHNGH', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(3, 'Jarod Schimmel IV', 'mbrakus@example.net', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', '1bn4RuuRQQ', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(4, 'Louie Jerde', 'prosacco.maritza@example.com', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', 'YU6wdziVjW', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(5, 'Mrs. Ayla Deckow', 'rolfson.ludie@example.com', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', '8RbP27uhCS', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(6, 'Myrtie Hansen', 'froob@example.com', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', 'EphxFGNac5', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(7, 'Ethyl Lind', 'bwaelchi@example.net', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', 'ByAR2MWgdy', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(8, 'Reynold Larkin', 'kathryne70@example.com', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', 'uJFZLQHsSF', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(9, 'Darrick Zieme IV', 'dean99@example.org', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', 'kzZCWSo9hT', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(10, 'Mr. Sheldon Ankunding DVM', 'tjohnston@example.com', '2024-10-07 02:07:33', '$2y$12$xxLKDvGWY6CKAv4G3gjZn.8IwPlZrhHmYZkpTAZBYHirpD/XvLDTy', '09xLCFEkos', '2024-10-07 02:07:33', '2024-10-07 02:07:33'),
(11, 'Tung12345', 'ahihi123ee@gmail.com', NULL, '$2y$12$Ssduvm32g3tn0OxCmM6Aneg.jW.HBtCECticdbHSxESmoy3IZ.qPK', NULL, '2024-10-07 02:08:41', '2024-10-07 02:08:41'),
(12, 'ahihi123ee@gmail.com', 'ahihi1234ee@gmail.com', NULL, '$2y$12$mO04hjOnvrt9rwcg2dUSaelqTplACf6BvLwn62dsA6rtOr5snOobW', NULL, '2024-10-07 02:16:05', '2024-10-07 02:16:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
