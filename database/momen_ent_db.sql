-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 01:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momen_ent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_num` varchar(200) NOT NULL,
  `admin_type` varchar(5) NOT NULL,
  `image` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `phone_num`, `admin_type`, `image`, `password`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '01731909035', 'a', 'libs/upload_pic/admin_image/19560799545b52e3c974f96.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'arup', 'arup_admin', 'arupkumerbose@gmail.com', '01731909035', 'd', 'libs/upload_pic/admin_image/5565868935b52c4c77cb20.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'bose5', 'sm18888', 'charulatachaity@gmail.com', '01731909035', 'a', 'libs/upload_pic/admin_image/5257322145b52c4eea7fb9.jpg', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(20) UNSIGNED NOT NULL COMMENT 'id',
  `a_title` varchar(250) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `a_title`, `image_path`) VALUES
(4, 'watter pump', 'libs/upload_pic/ads_image/7711637105b5edb731bcad.jpg'),
(5, 'all pump', 'libs/upload_pic/ads_image/8068502245b5edb878ce49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(20) NOT NULL,
  `b_title` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `c_title` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_title`, `status`) VALUES
(1, 'Progressive cavity pump', NULL),
(2, 'Gear pump', NULL),
(3, 'Rotary lobe pump', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(20) NOT NULL,
  `g_title` varchar(200) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `g_title`, `image`) VALUES
(8, 'water pump', 'libs/upload_pic/gallery_image/438428535b5eda324a1e5.jpg'),
(9, 'Pump in field', 'libs/upload_pic/gallery_image/1423766225b5eda51d9b30.jpg'),
(10, 'Sentifugal pump', 'libs/upload_pic/gallery_image/18943316025b5eda6363d0f.jpg'),
(11, 'Pump Indersty', 'libs/upload_pic/gallery_image/2498023785b5eda77391b4.jpg'),
(12, 'Soller pump', 'libs/upload_pic/gallery_image/12853783415b5eda8bab2c2.jpg'),
(13, 'Pump in village', 'libs/upload_pic/gallery_image/1652733295b5eda9cceaae.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) UNSIGNED NOT NULL,
  `shipping_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `qty` smallint(10) NOT NULL,
  `price` int(20) NOT NULL,
  `sub_total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `brand_id` int(20) UNSIGNED DEFAULT NULL,
  `cat_id` int(20) UNSIGNED NOT NULL,
  `quentity` int(10) UNSIGNED DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `discount` int(10) UNSIGNED DEFAULT NULL,
  `prv_price` int(10) UNSIGNED DEFAULT NULL,
  `top_sell` tinyint(1) DEFAULT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `up_comming` tinyint(1) DEFAULT NULL,
  `feature` tinyint(1) DEFAULT NULL,
  `overview` text,
  `status` tinyint(1) NOT NULL,
  `details` text NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `brand_id`, `cat_id`, `quentity`, `price`, `discount`, `prv_price`, `top_sell`, `sale`, `up_comming`, `feature`, `overview`, `status`, `details`, `created_at`) VALUES
(1, 'p-001', 'Sed ut perspiciatidSuction Vertical Centrifugal Pump - SCP Inline Series ( Single stage )', NULL, 1, NULL, 50000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<strong style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Technical:</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\"></span><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\"><li style=\"line-height: 20px; text-align: justify;\">Flow Range: 1.5 2400 m<span style=\"position: relative; font-size: 11.25px; line-height: 0; vertical-align: baseline; top: -0.5em;\">3</span>/h</li><li style=\"line-height: 20px;\">Stroke range: 4 ~ 160m</li></ul><strong style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Features :</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\"></span><p style=\"margin-bottom: 5px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\"></p><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\";=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\"><li style=\"line-height: 20px; text-align: justify;\">Compact structure, small volume, beautiful outlook. The lower barycenter of the vertical structure which coincides with the center of the pump feet strengthens the stability of running and the duration.</li><li style=\"line-height: 20px; text-align: justify;\">Easy to mount. Because of the same apertures of both inlet and outlet which also locate on the same central line, the pump can be directly mounted on any part of the pipeline just as a valve. The motor is covered with a rainproof cap so that operation can be done outdoors. Mounting feet are equipped with the pump so that it can be stably mounted.</li><li style=\"line-height: 20px; text-align: justify;\">Stable running, low noise, high concentricity of components. Bearings of low noise are used for the motor, the impellers are of best dynamic and static balance, no vibration at running and the environment thus being improved.</li><li style=\"line-height: 20px; text-align: justify;\">No leakage. The shaft is mechanically sealed with carbide alloy wearable material, settling the serious leakage of the filling seal of a centrifugal pump, extending the duration and ensuring the operation place clean and tidy.</li><li style=\"line-height: 20px; text-align: justify;\">Easy to maintain. Not necessary to remove the pipeline for check-out and maintenance, only to take out the nuts on the pump lid, the motor and the driving components.</li><li style=\"line-height: 20px; text-align: justify;\">The pump, according to the operation condition of the worksite, may be vertically, horizontally etc. multiways mounted and also according to the requirements for the flow and stroke, mounted in parallel and/or in series to increase the needed flow and stroke.</li><li style=\"line-height: 20px; text-align: justify;\"><strong><br></strong></li><li style=\"line-height: 20px; text-align: justify;\"><strong>Application :</strong><br><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 25px;\"><li style=\"line-height: 20px; text-align: justify;\">SCP series vertical centrifugal pump is used to transport pure-water and other liquids, the physical properties of which are similar to those of pure-water, in industrial and cities water supply and drainage, high buildings booster water supply, gardens irrigation, fire-fighting booster, remote water supply, warming systems, circular booster of cold &amp; hot water in bath rooms as well as in competions of equipments, the operation medium temperature is below 80</li></ul></li></ul>', '2018-07-30'),
(2, 'p-002', 'Openwell Pumps -SOMB Series', NULL, 2, NULL, 2345, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Technical:</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Head, H : Max. 33 m</li><li style=\"line-height: 20px;\">Discharge : Max. 360 LPM</li><li style=\"line-height: 20px; text-align: justify;\">Flow, Q : 21 m<span style=\"position: relative; font-size: 11.25px; line-height: 0; vertical-align: baseline; top: -0.5em;\">3</span>&nbsp;/hr</li><li style=\"line-height: 20px;\">Rating : 1 HP to 2 HP</li></ul><strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Features :</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><p style=\"margin-bottom: 5px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></p><ol style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Ultra modern design</li><li style=\"line-height: 20px; text-align: justify;\">Superior design material as well as manufacturing process assure longer life</li><li style=\"line-height: 20px; text-align: justify;\">High efficiency- better than international values, leading to energy saving</li><li style=\"line-height: 20px; text-align: justify;\"><strong>Application :</strong></li><li style=\"line-height: 20px; text-align: justify;\"><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 25px;\"><li style=\"line-height: 20px; text-align: justify;\">Rural and urban draining water installations</li><li style=\"line-height: 20px; text-align: justify;\">Water supply to high-rise buildings</li><li style=\"line-height: 20px; text-align: justify;\">Water circulating system for lawns &amp; gardens</li><li style=\"line-height: 20px; text-align: justify;\">Agricultural lift sprinkler and drip irrigation</li><li style=\"line-height: 20px; text-align: justify;\">Industrial service water supply schemes</li><li style=\"line-height: 20px; text-align: justify;\">Decorative water fountainss</li></ul></li></ol>', '2018-07-30'),
(3, 'p-003', 'Horizontal Openwell Submersible Pumps - SHOC series', NULL, 2, NULL, 34560, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Technical:</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Head Range (m) : 8 - 28</li><li style=\"line-height: 20px;\">Discharge (LPM) : 16-180</li><li style=\"line-height: 20px;\">Rating (HP) : 0.5 - 1</li></ul><p style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">&nbsp;</p><strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Features :</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><p style=\"margin-bottom: 5px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></p><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Designed for under water application</li><li style=\"line-height: 20px; text-align: justify;\">Replicable wear and tear parts, easy maintenance</li><li style=\"line-height: 20px; text-align: justify;\">Dynamically balanced rotating part for minimum vibration</li></ul>', '2018-07-30'),
(4, 'p-004', 'Shallow Well Pumps-SSW series', NULL, 2, NULL, 45460, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Technical:</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Head ( H ): 6 m to 39 m</li><li style=\"line-height: 20px;\">Discharge(LPH) : 450 to 2700</li><li style=\"line-height: 20px;\">Rating: 0.5 HP to 1 HP</li></ul><p style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">&nbsp;</p><strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Features:</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Self priming upto 8.5meters at mean sea level</li><li style=\"line-height: 20px; text-align: justify;\">Suitable for high head applications</li><li style=\"line-height: 20px; text-align: justify;\">Fitted with thermal overload protector (T.O.P.) to prevents motor burning</li><li style=\"line-height: 20px; text-align: justify;\">Capacitor start and run CSR type motor and no need of centrifugal switch</li><li style=\"line-height: 20px; text-align: justify;\">Suitable for wide voltage fluctuations from 160 to 240 volts</li><li style=\"line-height: 20px; text-align: justify;\">Extruded aluminum motor body</li><li style=\"line-height: 20px; text-align: justify;\">Design for more efficiency in wide range of operation</li><li style=\"line-height: 20px; text-align: justify;\">Provided with handle for ease in handling</li></ul>', '2018-07-30'),
(5, 'p-005', 'perspiciatidSuction Vertical Centrifugal Pump', NULL, 2, NULL, 67700, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<br><div class=\"parrent media-body\" style=\"overflow: hidden; color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><div class=\"tab-content\" style=\"padding: 20px;\"><div class=\"tab-pane active\" id=\"tab1\"><div class=\"media\" style=\"overflow: hidden;\"><div class=\"media-body\" style=\"overflow: hidden;\"><p><b>USES -&nbsp;</b>These self-priming ejector type pumps with BRASS IMPELLER are suitable tohandle clean or slightly cloudy, non-corrosive water not exceeding 50°C. temperature. Particularly suitable as shallow well pumps in areas where the well level is subject to seasonal changes. They can suck from a maximum depth of 9 metres and prime well even in presence of water with gas bubbles. It is recommended to install a foot valve or gate valve in suction inlet.</p><p><b>PUMP SIDE -&nbsp;</b>Cast-iron pump body and bracket,&nbsp;<b>BRASS IMPELLER</b>, stainless steel shaft; high quality mechanical seal.</p><p><b>ELECTRIC MOTOR -&nbsp;</b>Heavy-duty, continuous service, induction motor built to I.E.C 2-3 issue 1-1974ref. 355 regulations. Built-in overload motor protector for single phase version. Protection according to IP44 Standards. Size according to UNEL-MEC specifications.</p><p><b>PRODUCTION STANDARDS -&nbsp;</b>The pump side is in cast-iron and is built to ISO 2548 regulations. The motor to IEC (International Electrotechnical Commission) specifications.</p><p><b>QUALITY CONTROL -&nbsp;</b>All our pumps are individually factory tested according to UNI 6871-71P cat Ill Standards.</p><p><b>VOLTAGE -&nbsp;</b><br></p><p><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Slngle phase: 180V - 220V<br><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Three phase: 380V - 440V</p><p>Maximum allowable deviation from the rated voltage ±5%</p><p>(Other voltages available on demand).</p><p><b>FREQUENCY -&nbsp;</b>50 Hz.</p><p><b>WARRANTY PERIOD -&nbsp;</b>24 months.</p></div></div></div></div></div>', '2018-07-30'),
(6, 'p-005', 'Shallow Well Pumps-SSW series', NULL, 2, NULL, 456454, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Technical:</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Head ( H ): 6 m to 39 m</li><li style=\"line-height: 20px;\">Discharge(LPH) : 450 to 2700</li><li style=\"line-height: 20px;\">Rating: 0.5 HP to 1 HP</li></ul><p style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">&nbsp;</p><strong style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\">Features:</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"></span><ul class=\"arrow-list\" style=\"padding: 0px; margin-right: 0px; margin-left: 25px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;; font-size: 15px; text-align: justify;\"><li style=\"line-height: 20px; text-align: justify;\">Self priming upto 8.5meters at mean sea level</li><li style=\"line-height: 20px; text-align: justify;\">Suitable for high head applications</li><li style=\"line-height: 20px; text-align: justify;\">Fitted with thermal overload protector (T.O.P.) to prevents motor burning</li><li style=\"line-height: 20px; text-align: justify;\">Capacitor start and run CSR type motor and no need of centrifugal switch</li><li style=\"line-height: 20px; text-align: justify;\">Suitable for wide voltage fluctuations from 160 to 240 volts</li><li style=\"line-height: 20px; text-align: justify;\">Extruded aluminum motor body</li><li style=\"line-height: 20px; text-align: justify;\">Design for more efficiency in wide range of operation</li><li style=\"line-height: 20px; text-align: justify;\">Provided with handle for ease in handling</li></ul>', '2018-07-30'),
(7, 'p-006', 'Vertical Multistage Centrifugal Pumps - CDLF Series', NULL, 1, NULL, 35300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Application -&nbsp;</b><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Water Supply: Water filter and transport in waterworks, Boosting of main pipeline, boosting in high-rise buildings.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Industrial Boosting: Process flow water system, cleaning system, high-pressure washing system, fire fighting system.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Industrial Liquid Conveying: Cooling and air conditioning system, boiler water supply and condensing system, machine-associated purpose, acids and alkali.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Water Treatment: Ultra filtration, reverse osmosis system, distillation system, separator, swimming pool.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Irrigation: Farmland irrigation, spray irrigation, dripping irrigation.</p><br style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Operation Conditions -&nbsp;</b><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Thin, clean, non-flammable and non-explosive liquid containing no solid granules and fibers.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Liquid temperature: Ambient temperature: up to +40°C&nbsp;<br>Hot water type: -15°C to +120°C&nbsp;<br>Altitude: up to 1000m</p><br style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Motor -&nbsp;</b><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Full-enclosed air-blast two pole standard motor.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Protection Class: IP55&nbsp;<br><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Insulation Class: F</p><div><br></div>', '2018-07-30'),
(8, 'p-007', 'Singel-Stage Centrifugal Pumps - TD Serie', NULL, 3, NULL, 78800, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Introduction -&nbsp;</b><br>The type TD pumps are single stage in-line centrifugal pumps, equipped with standard motor and mechanical seal. Comparing with other pumps in similar structure, these pumps are less accessible to the impurity in the liquid. The pump is designed to be pulled out from the top when disassemble. It can be repaired without affecting the pipelines. The mechanical seal for TD200 and above is cartridge mechanical seal. Motor needn\'t to be disassem-bled when replace mechanical seal. TD125~TD150 products have two structures,one is easy maintenance structure, using a catri-dge mechanical seal. And another is expantion shaft structure.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Operation Conditions -&nbsp;</b><br>Following conditions are suitable for the performance curves shown above.<br>1. All curves arebased on themeasured value ofmotor 3 X 380V, 50Hz: underthe constant speed of 2900rpm, 1450rpm or 1480rpm; 60Hz:under the constantspeed of 3500rpm or 175Orpm;<br>2. Curve tolerance in conformity with IS09906 Annex A.<br>3, Measurement is done with 20°C air-free water,without impurities.<br>4, The operation of pump shall refer to the performance region indicated by the thickened curve to prevent overheating due to too small flow rate or overload of motor due to too large flow rate.<br>5. If the thickness and density of the pumped liquid is different from water,the motor power sh-ould be adjusted.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Motor -&nbsp;</b><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Two pole standard motor (2900 RPM).</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Protection class: IP55&nbsp;<br><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Insulation Class: F</p>', '2018-07-30'),
(9, 'p-008', 'S.S Horizontal Singel-Stage Centrifugal Pumps - MS Series', NULL, 2, NULL, 45400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '<span style=\"color: rgb(114, 114, 114); font-weight: bold;\">A</span><b style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">pplication -&nbsp;</b><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Pressurization and pumping of industrial and civilian clean water or other liquids.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Water treatment.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Water circulating system.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Agricultural irrigation.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Other fields.</p><br style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Operation Conditions -&nbsp;</b><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Thin, clean, non-flammable and explosive, not containing the liquid with solid particle and fiber.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Able to transmit light corrosive medium (Relate to the content of chloride ion in the medium, thickness of acid or alkali, whether generate corrosion on the rubber and mechanical seal materials)</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;The density of transmitted medium is less than that of clean water, viscosity close to that of water. Otherwise the motor of large power is required.</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Liquid temperature: Ambient temperature: up to +40°C&nbsp;<br>Hot water type: -10°C to +85°C&nbsp;<br>Altitude: up to 1000m</p><br style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><b>Motor -&nbsp;</b><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Two pole standard motor (2900 RPM).</p><p style=\"color: rgb(78, 78, 78); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Protection class: IP55&nbsp;<br><br><span class=\"glyphicon glyphicon-arrow-right\" style=\"top: 1px; width: 1em;\"></span>&nbsp;Insulation Class: F</p>', '2018-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(20) UNSIGNED NOT NULL,
  `product_id` int(20) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`) VALUES
(34, 1, 'libs/upload_pic/product_image/14253363185b5ecefb1be1c.jpg'),
(35, 1, 'libs/upload_pic/product_image/9229290265b5ecefb523d3.jpg'),
(36, 1, 'libs/upload_pic/product_image/20130775005b5ecefb6c9ee.jpg'),
(37, 1, '0'),
(38, 2, 'libs/upload_pic/product_image/7466704995b5ecf807e524.jpg'),
(39, 2, 'libs/upload_pic/product_image/9317138225b5ecf80ae57c.jpg'),
(40, 2, 'libs/upload_pic/product_image/3912111525b5ecf80cda80.jpg'),
(41, 3, 'libs/upload_pic/product_image/8459991665b5ecfbc3cf27.jpg'),
(42, 3, 'libs/upload_pic/product_image/8170642865b5ecfbc596b4.jpg'),
(43, 3, 'libs/upload_pic/product_image/12472252175b5ecfbc7a3e1.jpg'),
(44, 4, 'libs/upload_pic/product_image/7654360905b5ed0098f9c9.jpg'),
(45, 4, 'libs/upload_pic/product_image/13574900605b5ed009a3d3a.jpg'),
(46, 4, 'libs/upload_pic/product_image/973212615b5ed009b6481.jpg'),
(47, 6, 'libs/upload_pic/product_image/12947994055b5ed03f85928.jpg'),
(48, 6, 'libs/upload_pic/product_image/7703852925b5ed03fa4156.png'),
(49, 6, 'libs/upload_pic/product_image/7488691555b5ed03feacad.jpg'),
(50, 5, 'libs/upload_pic/product_image/16888250585b5eeca8debdc.jpg'),
(51, 5, 'libs/upload_pic/product_image/10247011735b5eecaa09731.jpg'),
(52, 5, 'libs/upload_pic/product_image/15441156665b5eecaa281b4.jpg'),
(53, 5, 'libs/upload_pic/product_image/6150749215b5eecaa74471.jpg'),
(54, 7, 'libs/upload_pic/product_image/15355622355b5eee6639a3c.jpg'),
(55, 7, 'libs/upload_pic/product_image/11099981715b5eee667600e.jpg'),
(56, 7, 'libs/upload_pic/product_image/6741924185b5eee6696b34.jpg'),
(57, 8, 'libs/upload_pic/product_image/16135685335b5eeeb7b099f.jpg'),
(58, 8, 'libs/upload_pic/product_image/11985660165b5eeeb7cdc46.jpg'),
(59, 8, 'libs/upload_pic/product_image/2535257725b5eeeb7e6301.jpg'),
(60, 9, 'libs/upload_pic/product_image/6343026755b5eeef4aaeb3.jpg'),
(61, 9, 'libs/upload_pic/product_image/14188990385b5eeef4cedd3.jpg'),
(62, 9, 'libs/upload_pic/product_image/9813305785b5eeef4e3e0a.png'),
(63, 9, 'libs/upload_pic/product_image/5929875315b5eeef530d84.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_num` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `total_qty` int(20) UNSIGNED DEFAULT NULL,
  `total_amount` int(20) UNSIGNED DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(20) UNSIGNED NOT NULL,
  `s_title` varchar(200) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `s_title`, `image`) VALUES
(9, 'We are the best choose for your water pump', 'libs/upload_pic/slider_image/13417952445b5ede1861592.jpg'),
(10, 'We are Provide Best Product', 'libs/upload_pic/slider_image/4029758045b5ede9b0abef.jpg'),
(11, 'You Can find your Choose able product here', 'libs/upload_pic/slider_image/12882323975b5edebfca6ef.jpg'),
(12, 'We are Provide Best Product', 'libs/upload_pic/slider_image/10100628345b5edfa6a3acd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(20) UNSIGNED NOT NULL,
  `field_name` varchar(250) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `field_name`, `value`) VALUES
(1, 'address', 'adsfsdaf'),
(2, 'phone', '12345678910'),
(3, 'email', 'arupkumerbose@gmail.com'),
(4, 'about_us', '<h1 style=\"margin-top: 18px; margin-bottom: 0px; color: rgb(114, 114, 114); font-size: 14px; line-height: 1.6;\">Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur. Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.</h1>'),
(5, 'wellcome_note', '<p class=\"lead\" style=\"font-size: 16px; line-height: 24px; text-align: justify;\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(0,=\"\" 0,=\"\" 0);\"=\"\"><b style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">We are the company providing the best solution regarding pump sector such as distributing water or any other liquids in various fields.</b></p><p class=\"lead\" style=\"font-size: 16px; line-height: 24px; text-align: justify;\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(0,=\"\" 0,=\"\" 0);\"=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\"><span style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Having developed in the Bangladesh market, without doubt the international centre of motor-driven pump production, Momen is now one of the leading company in terms of specific turnover.</span><br style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><br style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">In the near future, expansions of the range and the launch of new products designed to satisfy a demanding and selective clientele accustomed to insisting not just on excellent quality, but also on a constant drive towards innovation and research into avant-garde solutions innovation and research into avant-garde solutions will lead to further growth in sales and reinforcement of market share.</span></span><b style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\"><br></b><br></p>'),
(6, 'md_name', 'Jahangir Alom'),
(7, 'md_desig', 'Managing Director'),
(8, 'md_image', 'libs/upload_pic/md_image/14147414965b5edc7769bdd.jpg'),
(9, 'md_message', '<p align=\"justify\" style=\"margin-bottom: 0px; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" font-size:=\"\" 14px;\"=\"\">I take this opportunity to thank our valued customers, whose continued patronage and confidence in our products inspires us to extend the best of services and enables us to provide value for their money.</p><p align=\"justify\" style=\"margin-bottom: 0px; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" font-size:=\"\" 14px;\"=\"\"><br style=\"margin: 0px;\">Being dedicated to taking Electronics, Energy and Information Technology to rural areas, we are focused at addressing the needs of our customers through rugged, efficient, reliable and economic milk analysis and automation solutions and products, in line with the world’s best, while maintaining continuous interaction with them to assess their emerging requirement, so as to be ready when the needs arise.<br style=\"margin: 0px;\">&nbsp;</p><p align=\"justify\" style=\"margin-bottom: 0px; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" font-size:=\"\" 14px;\"=\"\">We believe that technology holds the key to food safety, energy security, access to information, and economic freedom, which are necessary for empowering our rural brethren.<br style=\"margin: 0px;\">&nbsp;</p><p align=\"justify\" style=\"margin-bottom: 0px; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" font-size:=\"\" 14px;\"=\"\">We are committed to total customer satisfaction by identifying their specific needs, translating them into Quality products and providing dependable after-sales-services. This commitment is the corner stone of our Quality Policy and Green REIL Policy and we strive to achieve it by putting into place a Quality System, which adheres to the ISO 9001 Quality Standard, and an environmental management system which adheres to the ISO 14001:2004 EMS standard<br style=\"margin: 0px;\">&nbsp;</p><p align=\"justify\" style=\"margin-bottom: 0px; font-family: \" times=\"\" new=\"\" roman\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" font-size:=\"\" 14px;\"=\"\">We plan to achieve this goal through our strength - the Employees; and seek their continuous involvement in achieving the Company\'s objectives.<br style=\"margin: 0px;\"><br style=\"margin: 0px;\">The organization is also committed to its shareholders by way of maximizing the wealth through sustained growth under the overall ambit of the spirit of a Public Sector Unit, to optimally balance the commercial objectives and the goals of social service to the nation at large.<br style=\"margin: 0px;\"><br style=\"margin: 0px;\">I therefore, seek continued patronage of our valued customers, cooperation of our employees and thank our well-wishers who have contributed to the growth of the organization.</p>'),
(16, 'logo', 'libs/upload_pic/logo_image/4536651655b5d8f22ea301.png'),
(17, 'our_service', '<h1 style=\"font-size: 14px; margin-top: 18px; margin-bottom: 0px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.6; color: rgb(114, 114, 114);\">Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.</h1>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_num` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `user_type` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(20) UNSIGNED NOT NULL,
  `v_type` varchar(10) DEFAULT 'y',
  `video_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `v_type`, `video_link`) VALUES
(5, 'y', 'https://www.youtube.com/embed/SOjU2hhLD6o'),
(6, 'y', 'https://www.youtube.com/embed/l31pOX2I3vU'),
(7, 'y', 'https://www.youtube.com/embed/guKoBVHLRZo'),
(8, 'y', 'https://www.youtube.com/embed/haELn2PIz0U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
