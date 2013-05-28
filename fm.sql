-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 07 月 09 日 05:19
-- 服务器版本: 5.1.60
-- PHP 版本: 5.2.17p1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fm`
--

-- --------------------------------------------------------

--
-- 表的结构 `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `artist` varchar(225) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `song_url` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `album_image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `song`
--

INSERT INTO `song` (`id`, `artist`, `song_name`, `song_url`, `album`, `album_image`, `date`) VALUES
(3, '张国荣', '这麽远 那麽近', 'song/201205/29887ea307b43a3125877eadd0c1c848.mp3', '《I am What I am》', 'song/201205/8a703afb623565d44dd96a36e628af6e.jpg', '2012-05-27 18:24:24'),
(4, '蔡淳佳', '风铃', 'song/201205/2cb131057ca3891566213f2b94cf1fc0.mp3', '《等一个晴天》', 'song/201205/2d1c985a310cb95d713ec0a65291d9ec.jpg', '2012-05-28 12:01:24'),
(5, '侯湘婷', '暧昧', 'song/201205/09b4ab7d4c51335fcf4c57865ebed704.mp3', '《17.18.19..》', 'song/201205/1e8b454cc4b6deb7c6543f4a27da7959.png', '2012-05-28 12:18:25'),
(6, 'Def Leppard', 'Miss You In A Heartbeat', 'song/201207/d26a1f68d30214963c56b6f2a06cc517.mp3', '《Rock Of Ages The Definitive Collection》', 'song/201207/d31b8ee578bb91d718aba10f94a8d46f.jpg', '2012-07-01 20:04:29'),
(7, 'The Band Perry', 'If I die young', 'song/201207/933c0404b73c4d6f15c3009b42778b77.mp3', '《2012 Grammy Nominees》', 'song/201207/8974261bc7385138a6e3cce0c918c66d.jpg', '2012-07-01 18:41:28'),
(8, 'Alan Jackson', 'Remember When', 'song/201207/0dace3d362eb741d95ee8dcd1e019361.mp3', '《Greatest Hits Volume II》', 'song/201207/53c75d94a7b367e449edb78ef3bb1c68.jpg', '2012-07-01 18:52:21'),
(9, 'Keith Urban', 'Tonight I Wanna Cry', 'song/201207/3ed41064548fe2e7ddd6de9fd776c391.mp3', '《Days Go By》', 'song/201207/92f4bd07af7010b29cc0cc0bcb93af83.jpg', '2012-07-01 19:01:46'),
(10, '丹娜 云妮(Dana Winner)', 'Moonlight Shadow', 'song/201207/bef9280e872d5a52391c68db79dedd56.mp3', '《Unforgettable》', 'song/201207/3cbc9aad591f01c7f6542655110400f8.jpg', '2012-07-01 19:13:29'),
(11, '琳恩 玛莲(Lene Marlin)', 'The way we are', 'song/201207/b254275bac92ff106a51c57afbdce496.mp3', '《Playing My Game》', 'song/201207/5fbd801c4f25a2cff313f93a0eec3704.jpg', '2012-07-01 19:21:52'),
(12, '五洋', '你的方向', 'song/201207/c88998e56ae2b9938e444e4598ca9e15.mp3', '无名', 'song/201207/e9ef73b9470d13175b25f1ed9f30e9c6.jpg', '2012-07-01 19:41:37'),
(13, '邦 乔维(Bon Jovi)', 'I\\''ll Be There For You', 'song/201207/b92dc2ee8ab3d7cffb3238a5aacf0dfd.mp3', '《Cross Road - The Best Of》', 'song/201207/04339548faa8fbd6ede3c0befc1d4567.jpg', '2012-07-01 19:57:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
