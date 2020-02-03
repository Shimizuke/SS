-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.4.6-MariaDB
-- PHP のバージョン: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacfd04_09`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `movie_data`
--

CREATE TABLE `movie_data` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL,
  `movie` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `movie_data`
--

INSERT INTO `movie_data` (`id`, `title`, `company_name`, `comment`, `mail`, `indate`, `movie`, `company_id`) VALUES
(4, '手', 'a', '手です', 'aa@example.com', '2019-11-26 10:09:55', 'upload/201911260209556604194e6c4adf8f987d97690a697588.mp4', 4),
(5, 'vvvvv', 'cccc', 'jjj', 'htt', '2019-11-26 12:27:44', 'upload/20191126042744903ca7660a16c628c45da79f7278d9a9.mp4', 7),
(6, 'いいいい', 'ai会社', 'あああああああああああああああ', 'ああああ＠ああああ', '2019-11-27 23:59:01', 'upload/2019112715590140c269db06caa62f969272e90ab004ea.mp4', 8),
(8, 'bbb', 'nnn', 'bbb', NULL, '2020-01-31 09:17:18', 'upload/202001310117186c3a58abd937e9a0a9dcde4a84d8d456.mp4', 7),
(9, 'ee', 'ddd', 'gg', NULL, '2020-02-01 15:21:50', 'upload/202002010721503af629f8520ca008b47b9d07b1907394.mp4', 7),
(10, 's', 'x', 'x', NULL, '2020-02-01 18:28:59', 'upload/2020020110285922e89e3522185869ec0f849d97555063.mp4', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `namae` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `pro` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(1280) COLLATE utf8_unicode_ci DEFAULT NULL,
  `life_flg` int(1) NOT NULL,
  `who` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `namae`, `lid`, `lpw`, `pro`, `detail`, `life_flg`, `who`) VALUES
(1, 'aaa', 'bbb', 'ccc', NULL, '', 0, 3),
(2, 'aさん', 'a', 'a', 'a-lab経営者', '', 0, 2),
(3, 'bさん', 'b', 'b', 'b-lab経営者', '', 0, 2),
(4, 'a会社', 'a-k', 'a-k', NULL, '', 0, 1),
(5, 'b会社', 'b-k', 'b-k', NULL, '', 0, 1),
(6, 'dさん', 'd', 'd', NULL, '', 0, 2),
(7, 'x企業', 'x', 'x', '経営者ｘ', '全世界のYをXに変えるを理念にYを壊滅させている企業です。\r\nこの世の中はXで満たされるべきと考えています。\r\nなにいってんだ。', 0, 1),
(8, 'aaaaaaaaaaaaaaaaaaa', 'ai', 'ai', NULL, '', 0, 1),
(9, 'aaaaaaa', 'aiai', 'aiai', NULL, '', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `movie_data`
--
ALTER TABLE `movie_data`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `movie_data`
--
ALTER TABLE `movie_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
