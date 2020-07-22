-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 08:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(250) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'لوازم ورزشی'),
(2, 'پوشاک'),
(3, 'لوازم خانگی'),
(4, 'لوازم بهداشتی'),
(5, 'مواد غذایی'),
(6, 'لوازم صوتی و تصویری'),
(7, 'موبایل'),
(8, 'کامپیوتر');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `description`, `cat_id`, `price`) VALUES
(1, 'میله بارفیکس تن آرا', '1-barfix.jpg', 'میله بارفیکس تن آرا با قابلیت تنظیم قفل دوطرفه افزایش سایز دوطرفه و قابلیت تحمل وزن تا 110 کیلوگرم', 1, 750000),
(2, 'لباس کودک پرنسس توری', '2-chaild dress.jpg', 'لباس پرنسس توری دخترانه شیک و مجلسی در رنگ ها و طرح های مختلف مناسب برای دختران 3 تا 9 ساله', 2, 2500000),
(3, 'گرمکن ورزشی آدیداس', '2-garmkon.jpg', 'مناسب برای ورزش های گروهی و صبحگاهی ضد حساسیت و ضد آب با وزن بسیار پائین', 1, 3250000),
(4, 'تلوزیون ال ای دی 43 اینچ سامسونگ', '3-tv 43 inch samsung.jpg', 'تلوزیون 43 اینچ سامسونگ ال ای دی با تکنلوژی اسمارت ویو و امکان اتصال به اینترنت با پایه نقره ای', 3, 45000000),
(5, 'جارو برقی پارس خزر مدل 1400 وات', '3-vacumcleaner parskhazar 1400 w.jpg', 'جاروبرقی پارس خزر با قدرت کشندگی 1400 وات و مصرف کم انرژی و فوق العاده بی صدا', 3, 21500000),
(6, 'کرم ضد آفتاب یاشامی روز', '4-kerm.jpg', 'کرم ضدآفتاب یاشامی روز با انزیم های برگرفته از گل روز برای حفاظت از لطافت پوست شما در مقابل آفتاب', 4, 330000),
(7, 'ست لوازم بهداشتی میکاپ', '4-makeup.jpg', 'ست لوازم بهداشتی میکاپ اوه برای حفظ شادابی و زیبایی شما', 4, 1750000),
(8, 'رژ لب گلدن روز', '4-roj lab.png', 'با رنگ های متنوع و ضد آب مناسب برای خانم های زیبا', 4, 250000),
(9, 'ماکارانی 700 گرمی آنکار', '5-makaroni.jpg', 'ماکارانی 700 گرمی با اسناس سبزیجات معطر در طرح های پروانه ای و حلزونی مقوی برای کودکان', 5, 95000),
(10, 'رشته سوپ 500 گرمی سمیرا', '5-reshteh supi.jpg', 'رشته سوپ 500 گرمی سمیرا غنی شده با ویتامین دی سرشار از امگا 3 مقوی و سالم', 5, 70000),
(11, 'مینی اسپیکر ان ای سی', '6-mini speaker nec 40w wifi.jpg', 'مینی اسپیکر ان ای سی قابلیت اتصال بصورت بلوتوث و دارای پورت یو اس بی با قدرت صدای 40 وات', 6, 950000),
(12, 'دادیو دو موج یواس بی خور یواگان', '6-radio 2fm 40w usb wifi.jpg', 'رادیو دو موج یواس بی خور یواگان با قدرت صدای 40 وات مناسب برای مسافرت با بطری قابل شارژ', 6, 1250000),
(13, 'اسپیکر بودن سیم ان ای سی 60 وات', '6-speaker.jpg', 'اسپیکر بودن سیم 60 وات ان ای سی با قابلیت اتصال یو اس بی و وای فای با قدرت پخش کنندگی صدای بالا', 6, 2250000),
(14, 'گوشی هوایی مدل پی 40', '7-hoawie p40 honor images.jpg', 'گوشی هوایی پی 40 با دو سیم کارت در رنگهای آبی سقید ومشکی', 7, 45000000),
(15, 'گوشی سامسونگ مدل ای سون', '7-mobail sumsung A7.jpg', 'گوشی سامسونگ مدل ای سون تک سیم کارته با 128 مگابایت رم در رنگ های طلایی-مشکی و نقره ای', 7, 52000000),
(16, 'ست کامپتور کامل ایزیران ', '8-Computer01.jpg', 'مناسب برای استفاده در ادارات و منازل داری سی پیو کورال فایو 3500 با رم 4 گیگ و مین بورد ایسوس و هارد 500 گیگ', 8, 65000000),
(17, 'لپتاپ ایسوس مدل دی 7500', '8-labtop asus.jpg', 'لپ تاپ ایسوس با قدرت سی پی یو کورال سون 5000 و رم 8 گیگ و هارد 2 ترابایت', 8, 138000000),
(18, 'مانیتور 21 اینج سامسونگ', '8-monitor 21inch sumsung.jpg', 'مانیتو 21 اینچ سامسونگ ال ای دی با تکنولوژی اولد کره', 8, 14500000),
(19, 'پرینتر اچ پی 1130 جوهر افشان', '8-printer hp1130 color.jpg', 'پرینتر اچ پی 1130 جوهر افشان با قابلیت چاپ عکس رنگی در سایز های مختلف و با کیفیت', 8, 32000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
