-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 02:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smegdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(2, 'myousef', 'yousef');

-- --------------------------------------------------------

--
-- Table structure for table `aes_lines`
--

CREATE TABLE `aes_lines` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aes_lines`
--

INSERT INTO `aes_lines` (`id`, `name`) VALUES
(1212, 'كلاسيكا'),
(1213, 'كورتينا'),
(1215, 'كولونيال'),
(1221, 'لينيا');

-- --------------------------------------------------------

--
-- Table structure for table `main_cat`
--

CREATE TABLE `main_cat` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_cat`
--

INSERT INTO `main_cat` (`id`, `name`) VALUES
(1, 'منتجات رئيسية'),
(2, 'منتجات صغيرة');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `line_id` int(20) NOT NULL,
  `sub_cat_id` int(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `img_url` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `line_id`, `sub_cat_id`, `color`, `img_url`) VALUES
(1, 'SFP6604PNRE', 1212, 1, 'أسود', 'http://localhost/smeg/images/ovens/oven1.jpg'),
(2, 'SG4309JG', 1212, 2, 'أزرق', 'http://localhost/smeg/images/ovens/oven2.jpg'),
(5, 'EGEM34M5', 1213, 1, 'أزرق', 'http://localhost/smeg/images/ovens/oven6.jpg'),
(62, 'rexs1', 1215, 1, 'xczwfwe', ''),
(64, 'foathers', 1221, 12, 'fancy blue', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `main_cat_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `en_name` varchar(60) NOT NULL,
  `cat_desc` varchar(600) NOT NULL,
  `sub_cat_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`main_cat_id`, `name`, `en_name`, `cat_desc`, `sub_cat_id`) VALUES
(1, 'أفران', 'oven', 'تقدم Smeg مجموعة واسعة من الأفران المدمجة ، المصممة والمنتجة في إيطاليا ، مع العديد من الوظائف المثالية لأي نوع من المأكولات ، من البيتزا إلى الحلويات الأكثر دقة. تختلف في الحجم والتشطيب ، وهي متوفرة بثمانية أشكال جمالية حصرية يمكن تنسيقها مع أجهزة Smeg المدمجة الأخرى: المواقد ، والشفاطات ، وآلات القهوة ، والأدراج ، و المبردات.', 1),
(1, 'غسالات', 'washer', 'تقدم Smeg مجموعة واسعة من الغسالات القائمة بذاتها والمدمجة.', 2),
(2, 'الخلاطات', 'blenders', 'تمزج خلاطات Smeg بشكل مثالي بين المكونات المختلفة القوام إلى الكمال لترافقك طوال اليوم.', 3),
(1, 'أفران الميكروويف', 'microwave-oven', 'تتوفر أفران الميكروويف Smeg في عدد من التصميمات المختلفة التي تم إنشاؤها للحفاظ على المبادئ الجمالية لمجموعة المنتجات.', 4),
(1, 'ماكينات صنع القهوة', 'coffee-machines', 'يمكن لآلة صنع القهوة المدمجة Smeg ، في الواقع ، استخدام كل من البن المطحون وأقراص القهوة ، مما يسمح لعشاق القهوة الإيطالية باختيار التحميص المفضل لديهم والحصول على طعم ورائحة شريط الإسبريسو الحقيقيين.', 5),
(1, 'غسالات صحون', 'dishwashers', 'تعتبر غسالات الأطباق القائمة بذاتها أو المدمجة من Smeg الطريقة المثالية لإكمال مطبخك بأناقة.', 6),
(1, 'ثلاجات', 'refrigerators', 'تقدم Smeg مجموعة مذهلة من الثلاجات ، مصممة لتبدو رائعة وتحافظ على طعامك طازجًا ومشروباتك باردة.', 7),
(2, 'محمصات', 'toasters', 'تجمع محمصة Smeg بين بيئة العمل والوظائف والتوازن الجمالي. الإفطار أو الغداء أو الغداء أو الوجبة الخفيفة - عندما تقع في حب محمصة SMEG 50\'s Style ، ستجد كل الأعذار المتاحة لاستخدامها.', 8),
(2, 'غلايات', 'kettles', 'تتميز غلايات Smeg بالسرعة والأمان والموثوقية ، وهي توفر هيكلًا من الفولاذ المقاوم للصدأ ، وسعة كبيرة تبلغ 1.7 لترًا وقاعدة لاسلكية مما يجعلها أكثر عملية وعملية حيث يمكن إعادة وضعها حسب الرغبة.', 9),
(2, 'الخلاطات اليدوية', 'hand-blenders', 'صُمم الخلاط اليدوي Smeg ليكون متينًا وعمليًا ومفيدًا بمقبضه العملي المريح والمقاوم للانزلاق ، وهو جهاز منزلي لا غنى عنه للطهي بسرعة وذكاء', 10),
(2, 'خلاطات بقاعدة', 'stand-mixers', 'خلاطات ستاند Smeg ، التي تتميز بخطوط منحنية وألوان نابضة بالحياة تعكس روحك الإبداعية وشغفك بالطهي ، هي حليفك المثالي في المطبخ.', 11),
(2, 'آلات رغوة الحليب', 'milk-frothers', 'يعتبر جهاز إزباد الحليب Smeg\'s مثاليًا للكابتشينو واللاتيه ماكياتو والأبيض المسطح بالإضافة إلى تحضير المشروبات الفورية مثل الشوكولاتة الساخنة.', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aes_lines`
--
ALTER TABLE `aes_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_cat`
--
ALTER TABLE `main_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `sub_cat_id_fk` (`sub_cat_id`),
  ADD KEY `line_id_fk` (`line_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `main_cats_id_fk` (`main_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aes_lines`
--
ALTER TABLE `aes_lines`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1222;

--
-- AUTO_INCREMENT for table `main_cat`
--
ALTER TABLE `main_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `line_id_fk` FOREIGN KEY (`line_id`) REFERENCES `aes_lines` (`id`),
  ADD CONSTRAINT `sub_cat_id_fk` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_cat` (`sub_cat_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `main_cats_id_fk` FOREIGN KEY (`main_cat_id`) REFERENCES `main_cat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
