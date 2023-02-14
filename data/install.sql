-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-13 15:05:10
-- 服务器版本： 10.4.27-MariaDB
-- PHP 版本： 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `collision`
--

CREATE TABLE `collision` (
  `place` varchar(255) NOT NULL DEFAULT '',
  `time` date NOT NULL,
  `rforce` int(11) DEFAULT NULL,
  `uforce` int(11) DEFAULT NULL,
  `rinjury` int(11) DEFAULT NULL,
  `uinjury` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `collision`
--

INSERT INTO `collision` (`place`, `time`, `rforce`, `uforce`, `rinjury`, `uinjury`) VALUES
(' Chernigov', '2022-07-04', 80000, 140000, 27, 29),
(' Donetsk', '2022-06-06', 120000, 230000, 22, 29),
(' Donetsk', '2022-06-09', 120000, 230000, 26, 27),
(' Kharkiv', '2022-06-10', 110000, 220000, 65, 73),
(' Kharkiv', '2022-06-13', 110000, 220000, 28, 56),
(' Luhansk', '2022-08-18', 50000, 80000, 23, 28),
(' Luhansk', '2022-09-22', 110000, 180000, 125, 32),
(' Zhitomir', '2022-06-22', 150000, 260000, 26, 64),
(' Zhitomir', '2022-06-30', 150000, 260000, 36, 54),
('Krasladar', '2022-04-01', 40000, 20000, 1000, 800),
('Krasladar', '2022-08-08', 10000, 10000, 0, 20);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `id` varchar(10) NOT NULL,
  `New_id` varchar(10) NOT NULL,
  `content` text DEFAULT NULL,
  `author` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `New_id`, `content`, `author`) VALUES
('1', '1', '11111111', 'hyx1'),
('2', '1', '22222222', 'hyx2'),
('3', '1', '33333333', 'hyx3');

-- --------------------------------------------------------

--
-- 表的结构 `conflict`
--

CREATE TABLE `conflict` (
  `time` date NOT NULL DEFAULT '2022-02-24',
  `place` varchar(255) DEFAULT NULL,
  `uinjury` int(9) DEFAULT NULL,
  `rinjury` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `conflict`
--

INSERT INTO `conflict` (`time`, `place`, `uinjury`, `rinjury`) VALUES
('2021-04-01', 'Belgoro State', 11, 0),
('2022-04-03', 'Kharkov', 0, 500),
('2022-04-08', 'Kramatorsk', 30, 0),
('2022-04-13', 'Mariupol', 1062, 0);

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1674917732),
('m130524_201442_init', 1674917741),
('m190124_110200_add_verification_token_column_to_user_table', 1674917741);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `author`, `release_date`, `title`, `url`) VALUES
('1', 'voa', '2023-02-06', '以国前总理斡旋俄乌战争曾获普京承诺不会杀害泽连斯基', 'https://www.voachinese.com/a/former-israeli-pm-putin-promised-not-to-kill-zelenskyy-02052023/6948818.html'),
('2', 'dw', '2023-02-07', '担心\"次级制裁\" 中资银行回避对俄业务', 'https://www.dw.com/zh/%E6%8B%85%E5%BF%83%E6%AC%A1%E7%BA%A7%E5%88%B6%E8%A3%81-%E4%B8%AD%E8%B5%84%E9%93%B6%E8%A1%8C%E5%9B%9E%E9%81%BF%E5%AF%B9%E4%BF%84%E4%B8%9A%E5%8A%A1/a-64630743'),
('3', 'rfi', '2023-02-05', '中国是否与俄罗斯做军火生意？海关记录说话', 'https://www.rfi.fr/cn/%E4%B8%93%E6%A0%8F%E6%A3%80%E7%B4%A2/%E8%A6%81%E9%97%BB%E5%88%86%E6%9E%90/20230205-%E4%B8%AD%E5%9B%BD%E6%98%AF%E5%90%A6%E5%90%91%E4%BF%84%E7%BD%97%E6%96%AF%E6%8F%90%E4%BE%9B%E6%AD%A6%E5%99%A8%E6%8F%B4%E5%8A%A9-%E6%B5%B7%E5%85%B3%E8%A'),
('4', 'aljazeera', '2023-02-06', '乌克兰战争第二年将非常可怕\r\n', 'https://chinese.aljazeera.net/behind-the-news/2023/2/6/%E4%B9%8C%E5%85%8B%E5%85%B0%E6%88%98%E4%BA%89%E7%AC%AC%E4%BA%8C%E5%B9%B4%E5%B0%86%E9%9D%9E%E5%B8%B8%E5%8F%AF%E6%80%95'),
('5', 'dw', '2023-02-06', '战事正酣 防长换人？', 'https://www.dw.com/zh/%E6%88%98%E4%BA%8B%E6%AD%A3%E9%85%A3-%E9%98%B2%E9%95%BF%E6%8D%A2%E4%BA%BA/a-64621059');

-- --------------------------------------------------------

--
-- 表的结构 `refugee`
--

CREATE TABLE `refugee` (
  `nationality` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `refugee`
--

INSERT INTO `refugee` (`nationality`, `destination`, `num`) VALUES
('乌克兰', '波兰', 9329169),
('乌克兰', '罗马尼亚', 1903853),
('乌克兰', '俄罗斯', 2852395),
('乌克兰', '匈牙利', 2151419),
('乌克兰', '斯洛伐克', 1127957),
('乌克兰', '摩尔多瓦', 755368),
('乌克兰', '白俄罗斯', 16705);

-- --------------------------------------------------------

--
-- 表的结构 `rwardamage`
--

CREATE TABLE `rwardamage` (
  `place` varchar(255) NOT NULL DEFAULT '',
  `time` date NOT NULL,
  `weapon` varchar(255) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `rwardamage`
--

INSERT INTO `rwardamage` (`place`, `time`, `weapon`, `amount`) VALUES
(' Bahmut', '2023-01-07', 'Armored vehicle', 18),
(' Bahmut', '2023-01-07', 'Artillery', 2),
(' Bahmut', '2023-01-07', 'FAADS', 4),
(' Bahmut', '2023-01-07', 'Rocket artillery', 2),
(' Bahmut', '2023-01-07', 'Tank', 2),
(' Bahmut', '2023-01-08', 'Rocket artillery', 4),
(' Chernigov', '2023-01-09', 'Aircraft', 1),
(' Chernigov', '2023-01-09', 'Artillery system', 3),
(' Chernigov', '2023-01-09', 'Helicopter', 3),
(' Chernigov', '2023-01-09', 'Rocket artillery', 2),
(' Chernigov', '2023-01-09', 'Truck', 4),
(' Donetsk', '2023-01-08', 'Artillery system', 10),
(' Donetsk', '2023-01-08', 'Infantry fighting vehicle', 4),
(' Donetsk', '2023-01-08', 'Tank', 8),
(' Luhansk', '2023-01-10', 'Artillery system', 5),
(' Luhansk', '2023-01-10', 'Infantry fighting vehicle', 10),
(' Luhansk', '2023-01-10', 'Rocket artillery', 1),
(' Luhansk', '2023-01-10', 'Tank', 13),
('Krasladar', '2022-04-01', 'Infantry fighting vehicle', 32);

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `introduct` text NOT NULL,
  `meNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='团队表格（id，名，简介，成员数量）';

--
-- 转存表中的数据 `team`
--

INSERT INTO `team` (`id`, `name`, `introduct`, `meNum`) VALUES
(1, 'EW_WAR', '这是一个团队的介绍，你还想知道什么...', 4);

-- --------------------------------------------------------

--
-- 表的结构 `teammember`
--

CREATE TABLE `teammember` (
  `account` varchar(30) NOT NULL,
  `in_id` int(11) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `git_link` varchar(150) NOT NULL,
  `captain` tinyint(1) NOT NULL,
  `pic_link` varchar(150) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `teammember`
--

INSERT INTO `teammember` (`account`, `in_id`, `student_id`, `git_link`, `captain`, `pic_link`, `name`) VALUES
('000000000000000001', 1, '2000000', 'https://github.com/HYX20011209/webDB/tree/main/frontend', 1, 'https://github.com/HYX20011209/webDB/tree/main/frontend', '丁延峰'),
('000000000000000002', 1, '2000000', 'https://github.com/HYX20011209/webDB/tree/main/frontend', 0, 'https://github.com/HYX20011209/webDB/tree/main/frontend', '黄逸轩'),
('000000000000000003', 1, '2000000', 'https://github.com/HYX20011209/webDB/tree/main/frontend', 0, 'https://github.com/HYX20011209/webDB/tree/main/frontend', '程佳诺'),
('000000000000000004', 1, '2000000', 'https://github.com/HYX20011209/webDB/tree/main/frontend', 0, 'https://github.com/HYX20011209/webDB/tree/main/frontend', '薛家琪');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `account` char(18) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password_hash` char(60) DEFAULT NULL,
  `auth_key` char(32) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`account`, `username`, `password_hash`, `auth_key`, `tel`, `type`) VALUES
('000000000000000000', 'manager1', NULL, NULL, '00000000000', '1'),
('111111111111111111', 'DYF', '$2y$13$1lO3t8EapsCJgm5/xWPtN.PuKmhrmdc9MjlvgqQi7Rw3WoCsEN56a', 'ZrixnRczXTU1yk7UpnNAMMR5y_UncUAc', '12345678912', '0');

-- --------------------------------------------------------

--
-- 表的结构 `usupport`
--

CREATE TABLE `usupport` (
  `country` varchar(255) NOT NULL DEFAULT '',
  `resource` varchar(255) NOT NULL DEFAULT '',
  `amount` int(11) DEFAULT NULL,
  `time` date NOT NULL DEFAULT '2022-02-24'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `usupport`
--

INSERT INTO `usupport` (`country`, `resource`, `amount`, `time`) VALUES
('America', 'Armored vehicle', 350, '2022-02-26'),
('America', 'Infantry fighting vehicle', 140, '2022-03-31'),
('England', 'Monster Hummer', 200, '2022-04-04'),
('England', 'Self-propelled gun', 30, '2022-04-14'),
('England', 'Tank', 14, '2022-04-16'),
('Germany', 'Infantry fighting vehicle', 40, '2022-05-11'),
('Germany', 'money', 1100000, '2022-02-24');

-- --------------------------------------------------------

--
-- 表的结构 `uwardamage`
--

CREATE TABLE `uwardamage` (
  `place` varchar(255) NOT NULL DEFAULT '',
  `time` date NOT NULL,
  `weapon` varchar(255) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `uwardamage`
--

INSERT INTO `uwardamage` (`place`, `time`, `weapon`, `amount`) VALUES
(' Chernigov', '2022-12-05', ' Aircraft', 1),
(' Chernigov', '2022-12-05', ' Helicopter', 4),
(' Chernigov', '2022-12-05', ' Rocket artillery', 2),
(' Chernigov', '2022-12-05', ' Truck', 13),
(' Chernigov', '2022-12-06', ' Artillery system', 7),
(' Donetsk', '2022-12-04', ' Artillery system', 6),
(' Donetsk', '2022-12-04', ' Rocket artillery', 7),
(' Donetsk', '2022-12-04', ' Truck', 12),
(' Donetsk', '2022-12-05', ' Artillery system', 5),
(' Luhansk', '2022-12-06', ' Rocket artillery', 2),
(' Luhansk', '2022-12-06', ' Truck', 8),
(' Luhansk', '2022-12-07', ' Rocket artillery', 3),
('Bahmut', '2022-12-03', ' Artillery system', 5),
('Bahmut', '2022-12-03', ' Infantry fighting vehicle', 10),
('Bahmut', '2022-12-03', ' Rocket artillery', 1),
('Bahmut', '2022-12-03', 'Tank', 11),
('Bahmut', '2022-12-04', ' Infantry fighting vehicle', 11),
('Krasladar', '2022-04-01', 'Monster Hummer', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `collision`
--
ALTER TABLE `collision`
  ADD PRIMARY KEY (`place`,`time`);

--
-- 表的索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`,`New_id`);

--
-- 表的索引 `conflict`
--
ALTER TABLE `conflict`
  ADD PRIMARY KEY (`time`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `rwardamage`
--
ALTER TABLE `rwardamage`
  ADD PRIMARY KEY (`place`,`time`,`weapon`);

--
-- 表的索引 `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `teammember`
--
ALTER TABLE `teammember`
  ADD KEY `in_id` (`in_id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`account`);

--
-- 表的索引 `usupport`
--
ALTER TABLE `usupport`
  ADD PRIMARY KEY (`country`,`resource`,`time`);

--
-- 表的索引 `uwardamage`
--
ALTER TABLE `uwardamage`
  ADD PRIMARY KEY (`place`,`time`,`weapon`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 限制导出的表
--

--
-- 限制表 `teammember`
--
ALTER TABLE `teammember`
  ADD CONSTRAINT `teammember_ibfk_1` FOREIGN KEY (`in_id`) REFERENCES `team` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
