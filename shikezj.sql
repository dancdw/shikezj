-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: 10.18.137.251:3306
-- Generation Time: 2017-08-28 19:50:16
-- 服务器版本： 5.6.23-rds-3.0.0.1-log
-- PHP Version: 5.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shikezj`
--

-- --------------------------------------------------------

--
-- 表的结构 `m_admin`
--

CREATE TABLE IF NOT EXISTS `m_admin` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL DEFAULT '' COMMENT '账号',
  `upass` varchar(100) NOT NULL DEFAULT '' COMMENT '密码',
  `ustate` int(2) NOT NULL DEFAULT '1' COMMENT '用户状态（正常=1）',
  `reg_date` int(11) NOT NULL DEFAULT '0' COMMENT '开通时间',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='后台管理表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `m_admin`
--

INSERT INTO `m_admin` (`uid`, `uname`, `upass`, `ustate`, `reg_date`) VALUES
(1, 'dancdw', '1282c8e96444603c03bdb97f5aa6760f', 1, 1503188235);

-- --------------------------------------------------------

--
-- 表的结构 `m_advert`
--

CREATE TABLE IF NOT EXISTS `m_advert` (
  `ad_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ad_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '广告标题',
  `ad_type` tinyint(3) unsigned NOT NULL COMMENT '广告类型1PC轮播 2手机轮播',
  `ad_alts` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '图片文字',
  `ad_images` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '广告图片',
  `ad_links` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '广告链接',
  `ad_remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  `ad_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  `uid` int(10) unsigned NOT NULL COMMENT '添加人',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='推荐位置（广告，推荐位，专题）' AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `m_advert`
--

INSERT INTO `m_advert` (`ad_id`, `ad_title`, `ad_type`, `ad_alts`, `ad_images`, `ad_links`, `ad_remarks`, `ad_time`, `uid`) VALUES
(30, 'PC网站首页轮播', 1, 'pc|test', '/uploads/images/36678d549cc10510616ba43f81b3c61f.jpg|/uploads/images/2bec98d452f11fe936ccbe3934ffa465.jpg', '/index.php?c=index&m=content_app&app_id=264|http://www.711cms.com', '', 1441013282, 1),
(31, '手助首页轮播', 3, '手助广告第一屏|手助广告第二屏', '/uploads/images/29c6506d0c5f74d3de60dc7beb8301ed.png|/uploads/images/2bec98d452f11fe936ccbe3934ffa465.jpg', '0|0', '', 1444462466, 1),
(32, 'WAP首页轮播', 2, 'wap|wap|wap', '/uploads/images/1-1F213214A0E4.jpg|/uploads/images/1-1F213214HJ22.jpg|/uploads/images/1-1F213214T4P8.jpg', '||', '', 1445321845, 1);

-- --------------------------------------------------------

--
-- 表的结构 `m_app`
--

CREATE TABLE IF NOT EXISTS `m_app` (
  `app_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '应用id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `app_title` varchar(500) NOT NULL DEFAULT '' COMMENT '应用名称',
  `app_stitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `app_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间（最新）',
  `app_type` varchar(20) NOT NULL DEFAULT '' COMMENT '软件类型：免费/收费',
  `app_hot` int(1) NOT NULL DEFAULT '0' COMMENT '是否热销',
  `app_new` int(1) NOT NULL DEFAULT '1' COMMENT '是否新品',
  `app_logo` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `app_desc` text COMMENT '应用详情',
  `app_company` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商',
  `app_company_url` varchar(500) NOT NULL DEFAULT '' COMMENT '开发商网址',
  `app_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '入库时间',
  `app_grade` float NOT NULL DEFAULT '0' COMMENT '用户评分',
  `app_recomment` float NOT NULL DEFAULT '0' COMMENT '系统评分',
  `app_recomment_url` varchar(500) NOT NULL DEFAULT '' COMMENT '推荐链接',
  `app_video_url` varchar(500) NOT NULL DEFAULT '' COMMENT '视频地址',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `app_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `app_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `app_down` int(11) NOT NULL DEFAULT '0' COMMENT '下载量',
  `app_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `data_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '数据中心应用ID',
  `charge_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '独立计费包ID',
  `app_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `app_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  PRIMARY KEY (`app_id`),
  KEY `cate_update_time` (`last_cate_id`,`app_update_time`),
  KEY `cate_order` (`last_cate_id`,`app_order`),
  KEY `cate_visitor` (`last_cate_id`,`app_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `cate_down` (`last_cate_id`,`app_down`),
  KEY `app_update_time` (`app_update_time`),
  KEY `app_order` (`app_order`),
  KEY `app_down` (`app_down`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='应用表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `m_app`
--

INSERT INTO `m_app` (`app_id`, `last_cate_id`, `app_title`, `app_stitle`, `app_update_time`, `app_type`, `app_hot`, `app_new`, `app_logo`, `app_desc`, `app_company`, `app_company_url`, `app_tags`, `create_time`, `app_grade`, `app_recomment`, `app_recomment_url`, `app_video_url`, `uid`, `app_comments`, `app_visitors`, `app_down`, `app_order`, `data_app_id`, `charge_app_id`, `app_seodesc`, `app_seokey`) VALUES
(8, 4, '秒赚大钱', '秒赚大钱', 1451010133, '1', 0, 0, '/uploads/images/a2c0ba27cda920b7414aab48fcf0f27c.png', '<p>秒赚大钱是上海厚步网络技术有限公司推出的一款手机赚钱应用，用户通过简单的下载任务完成奖励。安装来赚助手送2元，10元起提现。让你收获的不仅仅是财富还有更多惊喜！娱乐+赚钱，用来赚轻松实现。</p>\r\n', '广东亿俊计算机系统有限公司', '', '秒赚大钱', 1331622701, 5, 5, 'https://api.miaozhuandaqian.cn/?u=72752584', '', 1, 0, 38, 4194682, 0, 4, 1578, '试玩每单收入1.0到3.0元', ''),
(5, 3, 'iMoney', 'iMoney', 1451010129, '1', 0, 0, '/uploads/images/ddcaadbe2264bceab4628cff65f31dfd.png', '<p>iMoney试玩平台是最专业的苹果试玩平台，加入立刻<strong>送1元</strong>现金奖励。只要<strong>3元就能提现</strong>，超低兑换门槛。试玩应用单价1元起，任务多多，用户可以通过完成下载、集赞、邀请等多种指定的小任务来获取现金奖励。</p>\r\n', '北京字节跳动网络技术有限公司', '', 'iMoney', 1342423621, 8, 5, 'http://www.eimoney.com/diamonds/mobile/jomNHmFdUEiQLmBbJHeC/2315549/link2?from=singlemessage&isappinstalled=1', '', 1, 0, 36, 144365590, 0, 5, 141843, '试玩每单收入1.0到3.0元', ''),
(6, 3, 'PP红包', 'PP红包', 1451010129, '1', 0, 0, '/uploads/images/b5814a46fa88b85013bbfe0b2015678f.png', '<p>PP红包轻松试玩，痛快赚钱！零投入，纯赚钱，提现超给力。<strong>单价1元起</strong>，安装助手<strong>送2元</strong>，<strong>10元可提现</strong>。支持支付宝、微信、话费充值三种方式提现，24小时到账。</p>\r\n', '网易传媒科技（北京）有限公司', '', 'PP红包', 1331626708, 9, 5, 'http://api.ppwanke.com/?r=826005472&from=singlemessage&isappinstalled=1', '', 1, 0, 28, 62532869, 0, 6, 2744, '试玩每单收入1.0到3.0元', ''),
(7, 3, '热葫芦', '掌阅iReader', 1451010129, '1', 0, 0, '/uploads/images/9d60988add4f6d104203f0fbb7e3f50d.png', '<p>热葫芦加入送2元，用户每成功体验一个软件只需要3-5分钟左右，奖励1~3元不等。每签到3次可以抽一次红包哦。最低11元就可提现，提现24小时内到账，节假日顺延！每天下午3点刷新任务，其他时间不定时刷新！</p>\r\n', '北京掌阅科技有限公司', '', '小说 阅读器 电子书 图书 男性', 1331621836, 9, 5, 'http://m.rhl3.cn?u=9311203', '', 1, 0, 8, 141410758, 0, 7, 1152, '试玩每单收入1.0到3.0元', ''),
(2, 5, '钱咖', '钱咖', 1451013076, '1', 0, 0, '/uploads/images/1a1b07e50a3041eff29fcba9afa7a9de.png', '<p>钱咖苹果试玩平台，用户每成功体验一个软件只需要3-5分钟左右，单价奖励1.5~3.5元不等。成功加入就送1元现金奖励。最低10元就可提现到微信或者支付宝，可累积的。提现24小时内到账，节假日顺延！每天下午3点刷新任务，其他时间不定时刷新！</p>\r\n', '艺电计算机软件（上海）有限公司', '', '钱咖', 1450342694, 9, 5, 'https://xiaoxiao517.com/?u=49170554', '', 1, 0, 39, 1281274, 0, 8, 3172369, '试玩每单收入1.5到3.5元', ''),
(3, 6, '小鱼赚钱', '小鱼赚钱', 1451013090, '1', 0, 0, '/uploads/images/ca2739e597cb57758cfc53922588cd70.png', '<p>小鱼赚钱是一个崭新的移动APP的实用平台，下载APP试玩体验获得相应现金奖励，安装小鱼助手送2元，10元就能提现。您通过小鱼赚钱下载APP试玩体验，即可获得小鱼赚钱相应现金奖励。小鱼赚钱是鸟哥笔记团队倾力打造的全新aso平台。</p>\r\n', '嘉兴赫德信息科技有限公司', '', '小鱼赚钱', 1449481330, 8.2, 4, 'http://wx.xy599.com/share.php?id=17824505&from=singlemessage&isappinstalled=1', '', 1, 0, 89, 801006, 0, 9, 3162880, '试玩每单可以收入1.0到3.0元', ''),
(1, 7, '应用试客', '应用试客', 1451013089, '1', 1, 1, '/uploads/images/a0bfd54a5fa25f3e2bce39f84acd0ca6.jpg', '<p>应用试客是一个苹果手机应用体验平台，用户通过试玩手机应用即可赚到高额奖励。任务单价2元-4元，10元即可提现，任务多，强烈推荐！免费试玩，获取丰厚现金奖励，分分钟就可以提取现金。</p>\r\n', '上海驰游信息技术有限公司', '', '应用试客', 1447660153, 10, 5, 'http://appshike.com/i/mUV7Fr', 'https://v.qq.com/x/page/o0374csovss.html', 1, 0, 94, 1465949, 100, 10, 3144622, '试玩每单收入2.0到3.5元', '');

-- --------------------------------------------------------

--
-- 表的结构 `m_app_category`
--

CREATE TABLE IF NOT EXISTS `m_app_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父类id',
  `cname` varchar(100) NOT NULL DEFAULT '' COMMENT '分类名称',
  `cname_py` varchar(100) NOT NULL DEFAULT '' COMMENT '分类字母别名',
  `ctitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `ckey` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO关键词',
  `cdesc` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO描述',
  `corder` int(11) NOT NULL DEFAULT '0' COMMENT '分类排序',
  `cat_show` int(2) NOT NULL DEFAULT '1' COMMENT '是否显示分类',
  `cate_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '分类图标',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `m_app_category`
--

INSERT INTO `m_app_category` (`cate_id`, `parent_id`, `cname`, `cname_py`, `ctitle`, `ckey`, `cdesc`, `corder`, `cat_show`, `cate_logo`) VALUES
(1, 2, '休闲益智', 'lifeedu', '', '', '', 0, 1, '/templates/cates/lifeedu.png'),
(2, 1, '影音图像', 'video', '', '', '', 0, 1, '/templates/cates/videoimage.png'),
(3, 1, '阅读学习', 'reading', '', '', '', 0, 1, '/templates/cates/reading.png'),
(4, 1, '实用工具', 'tool', '', '', '', 0, 1, '/templates/cates/toolp.png'),
(5, 2, '经营策略', 'strategy', '', '', '', 0, 1, '/templates/cates/strategy.png'),
(6, 2, '角色扮演', 'role', '', '', '', 0, 1, '/templates/cates/role.png'),
(7, 2, '策略', 'gamestrategy', '', '', '', 0, 1, '/templates/cates/gamestrategy.png'),
(8, 2, '网络游戏', 'netgames', '', '', '', 0, 1, '/templates/cates/netgames.png'),
(9, 2, '飞行射击', 'flyshoot', '', '', '', 0, 1, '/templates/cates/flightShooting.png'),
(10, 1, '健康医疗', 'strong', '', '', '', 0, 1, '/templates/cates/strong.png'),
(11, 1, '旅游酒店', 'travel', '', '', '', 0, 1, '/templates/cates/travel.png'),
(12, 2, '社交游戏', 'socialgame', '', '', '', 0, 1, '/templates/cates/socialgame.png'),
(13, 1, '金融理财', 'finance', '', '', '', 0, 1, '/templates/cates/finance.png'),
(14, 1, '生活地图', 'map', '', '', '', 0, 1, '/templates/cates/maplife.png'),
(15, 1, '办公商务', 'office', '', '', '', 0, 1, '/templates/cates/office.png'),
(16, 1, '聊天通讯', 'chat', '', '', '', 0, 1, '/templates/cates/chat.png'),
(17, 1, '购物优惠', 'shopcoupon', '', '', '', 0, 1, '/templates/cates/shopcoupon.png'),
(18, 1, '儿童亲子', 'childen', '', '', '', 0, 1, '/templates/cates/childen.png'),
(19, 1, '教育学习', 'studying', '', '', '', 0, 1, '/templates/cates/study.png'),
(20, 1, '地图旅游', 'tour', '', '', '', 0, 1, '/templates/cates/tourmap.png'),
(21, 1, '系统安全', 'sysinput', '', '', '', 0, 1, '/templates/cates/sysinput.png'),
(22, 1, '壁纸主题', 'wallpaper', '', '', '', 0, 1, '/templates/cates/wallpaper.png'),
(23, 1, '摄影摄像', 'pai', '', '', '', 0, 1, '/templates/cates/pai.png'),
(24, 2, '棋牌天地', 'chess', '', '', '', 0, 1, '/templates/cates/chess.png'),
(25, 2, '跑酷', 'parkour', '', '', '', 0, 1, '/templates/cates/parkour.png'),
(26, 2, '格斗', 'wrestle', '', '', '', 0, 1, '/templates/cates/wrestle.png'),
(27, 2, '竞技游戏', 'sportsgame', '', '', '', 0, 1, '/templates/cates/sportsgame.png'),
(28, 2, '模拟辅助', 'analog', '', '', '', 0, 1, '/templates/cates/analog.png'),
(29, 2, '体育竞速', 'racing', '', '', '', 0, 1, '/templates/cates/racing.png'),
(30, 2, '其它', 'other', '', '', '', 0, 1, '/templates/cates/other.png'),
(31, 2, '动作', 'action', '', '', '', 0, 1, '/templates/cates/action.png'),
(32, 2, '塔防', 'tower', '', '', '', 0, 1, '/templates/cates/tower.png'),
(33, 2, '体育', 'physical', '', '', '', 0, 1, '/templates/cates/physical.png'),
(34, 2, '动作冒险', 'actions', '', '', '', 0, 1, '/templates/cates/actions.png'),
(35, 2, '儿童游戏', 'childgame', '', '', '', 0, 1, '/templates/cates/childgame.png'),
(37, 2, '养成', 'develop', '', '', '', 0, 1, '/templates/cates/develop.png');

-- --------------------------------------------------------

--
-- 表的结构 `m_app_comment`
--

CREATE TABLE IF NOT EXISTS `m_app_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `info_app_id` int(11) NOT NULL COMMENT '应用id，资讯id',
  `comment_content` varchar(500) NOT NULL DEFAULT '' COMMENT '评论内容',
  `comment_date` int(11) NOT NULL COMMENT '发布时间',
  `comment_user` int(11) NOT NULL COMMENT '用户id',
  `comment_uname` varchar(500) NOT NULL DEFAULT '' COMMENT '昵称',
  `comment_ip` varchar(15) NOT NULL COMMENT 'ip地址',
  `comment_parent` int(11) unsigned NOT NULL COMMENT '上级id',
  `comment_check` tinyint(4) unsigned NOT NULL COMMENT '是否审核',
  `comment_good` int(11) unsigned NOT NULL COMMENT '赞',
  `comment_bad` int(11) unsigned NOT NULL COMMENT '踩',
  PRIMARY KEY (`comment_id`),
  KEY `id_type` (`info_app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评论表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_counter`
--

CREATE TABLE IF NOT EXISTS `m_counter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` int(10) unsigned NOT NULL,
  `app_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pcview_count` int(10) unsigned NOT NULL DEFAULT '0',
  `mobileview_count` int(10) unsigned NOT NULL DEFAULT '0',
  `pcdown_count` int(10) unsigned NOT NULL DEFAULT '0',
  `mobiledown_count` int(10) unsigned NOT NULL DEFAULT '0',
  `install_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_data` (`date`,`app_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='统计表' AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `m_counter`
--

INSERT INTO `m_counter` (`id`, `date`, `app_id`, `pcview_count`, `mobileview_count`, `pcdown_count`, `mobiledown_count`, `install_count`) VALUES
(1, 20170820, 4, 13, 0, 0, 0, 0),
(2, 20170820, 10, 8, 0, 2, 0, 0),
(3, 20170820, 5, 8, 0, 1, 0, 0),
(4, 20170820, 2, 4, 0, 0, 0, 0),
(5, 20170820, 3, 3, 0, 0, 0, 0),
(6, 20170820, 1, 210, 0, 0, 0, 0),
(7, 20170820, 9, 46, 0, 0, 0, 0),
(8, 20170820, 7, 1, 0, 0, 0, 0),
(9, 20170820, 6, 1, 0, 0, 0, 0),
(10, 20170820, 8, 1, 0, 0, 0, 0),
(11, 20170821, 5, 2, 0, 0, 0, 0),
(12, 20170822, 5, 12, 0, 0, 0, 0),
(13, 20170822, 6, 19, 0, 0, 0, 0),
(14, 20170823, 1, 43, 0, 0, 0, 0),
(15, 20170823, 2, 26, 0, 0, 0, 0),
(16, 20170823, 8, 7, 0, 0, 0, 0),
(17, 20170823, 3, 14, 0, 0, 0, 0),
(18, 20170824, 1, 16, 0, 0, 0, 0),
(19, 20170824, 3, 18, 0, 0, 0, 0),
(20, 20170824, 2, 2, 0, 0, 0, 0),
(21, 20170825, 8, 7, 0, 0, 0, 0),
(22, 20170825, 1, 10, 0, 0, 0, 0),
(23, 20170825, 3, 5, 0, 0, 0, 0),
(24, 20170826, 1, 5, 0, 0, 0, 0),
(25, 20170826, 2, 4, 0, 0, 0, 0),
(26, 20170827, 5, 13, 0, 0, 0, 0),
(27, 20170827, 8, 11, 0, 0, 0, 0),
(28, 20170827, 7, 7, 0, 0, 0, 0),
(29, 20170827, 6, 8, 0, 0, 0, 0),
(30, 20170827, 3, 6, 0, 0, 0, 0),
(31, 20170827, 1, 7, 0, 0, 0, 0),
(32, 20170827, 2, 6, 0, 0, 0, 0),
(33, 20170828, 5, 1, 0, 0, 0, 0),
(34, 20170828, 1, 5, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `m_flink`
--

CREATE TABLE IF NOT EXISTS `m_flink` (
  `flink_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情ID',
  `flink_name` varchar(100) NOT NULL DEFAULT '' COMMENT '链接文字',
  `flink_img` varchar(500) NOT NULL DEFAULT '' COMMENT '链接图片',
  `flink_url` varchar(500) NOT NULL DEFAULT '' COMMENT '链接地址',
  `flink_type` tinyint(3) unsigned DEFAULT NULL COMMENT '1=首页，2全站',
  `flink_order` int(11) DEFAULT '0' COMMENT '排序',
  `flink_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `uid` int(10) unsigned NOT NULL COMMENT 'uid',
  PRIMARY KEY (`flink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_gather`
--

CREATE TABLE IF NOT EXISTS `m_gather` (
  `gather_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gather_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '采集名称',
  `gather_site` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '网站地址',
  `cate_id` int(10) unsigned NOT NULL COMMENT '采集分类',
  `gather_charset` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '页面编码',
  `gather_is_local` tinyint(3) unsigned NOT NULL COMMENT '是否本地化图片',
  `gather_index_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '列表首页地址',
  `gather_list_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '列表页地址',
  `gather_page_start` int(10) unsigned NOT NULL COMMENT '列表开始页',
  `gather_page_end` int(10) unsigned NOT NULL COMMENT '列表结束页',
  `gather_list_sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '文章列表标签',
  `gather_list_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '列表链接标签',
  `gather_title_sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '文章标题标签',
  `gather_content_sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '内容标题标签',
  `gather_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  `uid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`gather_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='采集信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `m_gather`
--

INSERT INTO `m_gather` (`gather_id`, `gather_name`, `gather_site`, `cate_id`, `gather_charset`, `gather_is_local`, `gather_index_url`, `gather_list_url`, `gather_page_start`, `gather_page_end`, `gather_list_sign`, `gather_list_link`, `gather_title_sign`, `gather_content_sign`, `gather_time`, `uid`) VALUES
(1, '新作前瞻', 'http://wy.92wy.com', 2, 'UTF-8', 1, '', 'http://wy.92wy.com/news/30/list_{page}.html', 1, 1, '.list2', 'li a', 'h2,h3', '.info_text_con,.articlecontent', 1440760845, 1),
(2, '手机网游攻略', 'http://sj.xiaopi.com', 3, 'UTF-8', 1, '', 'http://sj.xiaopi.com/news/gonglue_{page}.html', 2, 3, '.wzlb_list', '.wzlb_list_img a', '.top_title', '.article_main', 1440926227, 1),
(3, '安卓资讯', 'http://android.d.cn', 4, 'UTF-8', 1, '', 'http://android.d.cn/news/0/-1/{page}/', 2, 3, '.info-list', '.first  a', '.article h1', '#content', 1442307687, 1);

-- --------------------------------------------------------

--
-- 表的结构 `m_history`
--

CREATE TABLE IF NOT EXISTS `m_history` (
  `history_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'app下载id',
  `app_id` int(11) NOT NULL DEFAULT '0' COMMENT '应用ID',
  `history_version` varchar(500) NOT NULL DEFAULT '' COMMENT '版本号',
  `history_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `history_size` varchar(500) NOT NULL DEFAULT '' COMMENT '程序大小',
  `history_system` varchar(500) NOT NULL DEFAULT '' COMMENT '系统要求',
  `data_history_id` int(11) NOT NULL DEFAULT '0' COMMENT '数据中心下载ID',
  `history_type` int(11) NOT NULL DEFAULT '0' COMMENT '应用类型 1 android，2 苹果',
  `history_minSdkVersion` int(10) NOT NULL DEFAULT '0' COMMENT '要求的android的最低版本',
  `history_package` varchar(64) NOT NULL DEFAULT '' COMMENT 'android的包名',
  `history_VersionCode` int(10) NOT NULL DEFAULT '0' COMMENT '包的开发版本',
  `history_permission` text NOT NULL COMMENT 'permission',
  `history_file` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '文件路径',
  PRIMARY KEY (`history_id`),
  KEY `app_id` (`app_id`),
  KEY `appcms_history_id` (`data_history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='应用历史版本表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `m_history`
--

INSERT INTO `m_history` (`history_id`, `app_id`, `history_version`, `history_update_time`, `history_size`, `history_system`, `data_history_id`, `history_type`, `history_minSdkVersion`, `history_package`, `history_VersionCode`, `history_permission`, `history_file`) VALUES
(4, 8, '8.6.3', 1451010133, '28820010', 'Android 3.0.x', 4, 1, 11, 'oms.mmc.fortunetelling', 863, 'android.permission.MOUNT_UNMOUNT_FILESYSTEMS;android.permission.WRITE_EXTERNAL_STORAGE;android.permission.READ_EXTERNAL_STORAGE;android.permission.INTERNET;android.permission.READ_PHONE_STATE;android.permission.ACCESS_NETWORK_STATE;android.permission.ACCESS_WIFI_STATE;android.permission.RESTART_PACKAGES;android.permission.ACCESS_COARSE_LOCATION;android.permission.GET_TASKS;com.android.launcher.permission.INSTALL_SHORTCUT;com.android.launcher.permission.UNINSTALL_SHORTCUT;android.permission.SYSTEM_ALERT_WINDOW;android.permission.WRITE_SETTINGS;android.permission.CHANGE_WIFI_STATE;android.permission.BROADCAST_STICKY;android.permission.RECEIVE_USER_PRESENT;android.permission.WAKE_LOCK;android.permission.KILL_BACKGROUND_PROCESSES;android.permission.READ_LOGS;android.permission.VIBRATE;android.permission.BATTERY_STATS', ''),
(5, 5, '5.1.3', 1451010129, '16232223', 'Android 2.3, 2.3.1, 2.3.2', 5, 1, 9, 'com.ss.android.article.news', 513, 'android.permission.INTERNET;android.permission.READ_PHONE_STATE;android.permission.READ_CONTACTS;android.permission.ACCESS_NETWORK_STATE;android.permission.ACCESS_WIFI_STATE;android.permission.WRITE_EXTERNAL_STORAGE;com.android.launcher.permission.READ_SETTINGS;com.android.launcher.permission.INSTALL_SHORTCUT;com.android.launcher.permission.UNINSTALL_SHORTCUT;android.permission.RECEIVE_BOOT_COMPLETED;android.permission.ACCESS_COARSE_LOCATION;android.permission.ACCESS_FINE_LOCATION;android.permission.WAKE_LOCK;android.permission.CHANGE_CONFIGURATION;android.permission.WRITE_SECURE_SETTINGS;android.permission.GET_ACCOUNTS;android.permission.WRITE_SETTINGS;android.permission.GET_TASKS;com.ss.android.article.news.permission.MIPUSH_RECEIVE;android.permission.CAMERA;android.permission.READ_EXTERNAL_STORAGE;android.permission.CALL_PHONE;android.permission.READ_SMS;android.permission.RECEIVE_SMS;android.permission.RESTART_PACKAGES;android.permission.SEND_SMS;android.permission.SYSTEM_ALERT_WINDOW;android.permission.VIBRATE;android.permission.DISABLE_KEYGUARD;android.permission.CHANGE_NETWORK_STATE;android.permission.CHANGE_WIFI_STATE;cn.kuwo.player.permission.ACCESS_KUWO_SERVICE;android.permission.READ_LOGS;android.permission.ACCESS_MOCK_LOCATION;android.permission.ACCESS_LOCATION_EXTRA_COMMANDS;android.permission.MOUNT_UNMOUNT_FILESYSTEMS', ''),
(6, 6, '5.4.5', 1451010129, '26683450', 'Android 4.0, 4.0.1, 4.0.2', 6, 1, 14, 'com.netease.newsreader.activity', 450, 'android.permission.RECORD_AUDIO;android.permission.INTERNET;android.permission.WRITE_EXTERNAL_STORAGE;android.permission.CHANGE_CONFIGURATION;android.permission.ACCESS_NETWORK_STATE;android.permission.ACCESS_WIFI_STATE;android.permission.READ_PHONE_STATE;android.permission.READ_LOGS;android.permission.WAKE_LOCK;android.permission.ACCESS_COARSE_LOCATION;com.netease.newsreader.permission.READ;com.netease.newsreader.permission.WRITE;com.android.launcher.permission.INSTALL_SHORTCUT;android.permission.CHANGE_WIFI_STATE;android.permission.CAMERA;android.permission.FLASHLIGHT;android.permission.ACCESS_FINE_LOCATION;android.permission.MOUNT_UNMOUNT_FILESYSTEMS;android.permission.WRITE_SETTINGS;android.permission.VIBRATE;android.permission.RECEIVE_BOOT_COMPLETED;android.permission.SYSTEM_ALERT_WINDOW;android.permission.GET_TASKS;com.android.permission.SEND_NETEASE_POMELO_PUSH_SERVICE_NEWS;android.permission.RESTART_PACKAGES;com.android.browser.permission.READ_HISTORY_BOOKMARKS;android.permission.CHANGE_NETWORK_STATE;android.permission.READ_EXTERNAL_STORAGE;android.permission.MODIFY_AUDIO_SETTINGS;android.permission.READ_SYNC_SETTINGS;android.permission.WRITE_SYNC_SETTINGS;android.permission.AUTHENTICATE_ACCOUNTS;com.netease.newsreader.activity.permission.MIPUSH_RECEIVE', ''),
(7, 7, '5.0.0', 1451010129, '10692340', 'Android 2.3, 2.3.1, 2.3.2', 7, 1, 9, 'com.chaozh.iReaderFree', 501, 'android.permission.READ_PHONE_STATE;android.permission.INTERNET;android.permission.WRITE_EXTERNAL_STORAGE;android.permission.ACCESS_NETWORK_STATE;android.permission.CHANGE_NETWORK_STATE;android.permission.SEND_SMS;android.permission.VIBRATE;android.permission.WRITE_SETTINGS;com.android.launcher.permission.READ_SETTINGS;com.android.launcher.permission.INSTALL_SHORTCUT;android.permission.ACCESS_WIFI_STATE;android.permission.CHANGE_WIFI_STATE;android.permission.ACCESS_FINE_LOCATION;android.permission.ACCESS_COARSE_LOCATION;android.permission.CAMERA;android.permission.FLASHLIGHT;android.permission.READ_EXTERNAL_STORAGE;android.permission.READ_LOGS;android.permission.WAKE_LOCK;android.permission.RECEIVE_USER_PRESENT;android.permission.RECEIVE_BOOT_COMPLETED;android.permission.SYSTEM_ALERT_WINDOW;android.permission.DISABLE_KEYGUARD;android.permission.GET_TASKS;android.permission.READ_SMS;android.permission.READ_SETTINGS;android.permission.MOUNT_UNMOUNT_FILESYSTEMS;android.permission.RECORD_AUDIO;android.permission.MODIFY_AUDIO_SETTINGS;org.simalliance.openmobileapi.SMARTCARD', ''),
(8, 2, '4.0.3', 1451013076, '31589246', 'Android 4.1, 4.1.1', 0, 1, 8, 'com.popcap.gp.minions', 3, 'android.permission.INTERNET;android.permission.WRITE_EXTERNAL_STORAGE;android.permission.READ_EXTERNAL_STORAGE;android.permission.ACCESS_NETWORK_STATE;android.permission.ACCESS_WIFI_STATE;android.permission.READ_PHONE_STATE;android.permission.BLUETOOTH;android.permission.WRITE_SETTINGS;android.permission.ACCESS_FINE_LOCATION;android.permission.ACCESS_COARSE_LOCATION;android.permission.GET_TASKS;android.permission.GET_ACCOUNTS;com.android.vending.BILLING;android.permission.VIBRATE;android.permission.WAKE_LOCK;com.google.android.c2dm.permission.RECEIVE;com.ea.gp.minions.permission.C2D_MESSAGE;android.permission.SEND_SMS;android.permission.CHANGE_NETWORK_STATE;android.permission.CHANGE_WIFI_STATE;android.permission.SYSTEM_ALERT_WINDOW;android.permission.READ_CONTACTS;android.permission.READ_SMS;android.permission.WRITE_SMS;android.permission.RECEIVE_SMS;android.permission.RESTART_PACKAGES;android.permission.MOUNT_UNMOUNT_FILESYSTEMS;android.permission.MODIFY_AUDIO_SETTINGS;android.webkit.permission.PLUGIN;android.permission.MANAGE_ACCOUNTS;android.permission.AUTHENTICATE_ACCOUNTS;android.permission.USE_CREDENTIALS;android.permission.READ_SETTINGS;android.permission.RECORD_AUDIO', ''),
(9, 3, '1.11.3', 1451013090, '53920758', 'Android 2.3, 2.3.1, 2.3.2', 9, 1, 9, 'com.zzy.bigdevil.s360', 1, 'android.permission.INTERNET;android.permission.CHANGE_NETWORK_STATE;android.permission.CHANGE_WIFI_STATE;android.permission.ACCESS_NETWORK_STATE;android.permission.ACCESS_WIFI_STATE;android.permission.MOUNT_UNMOUNT_FILESYSTEMS;android.permission.WRITE_EXTERNAL_STORAGE;android.permission.READ_PHONE_STATE;android.permission.WAKE_LOCK;android.permission.READ_LOGS;android.permission.GET_TASKS;android.permission.SEND_SMS;android.permission.SYSTEM_ALERT_WINDOW;android.permission.READ_CONTACTS;android.permission.WRITE_SMS;android.permission.RECORD_AUDIO;android.permission.READ_EXTERNAL_STORAGE;android.permission.RECEIVE_SMS;android.permission.ACCESS_COARSE_LOCATION;android.permission.ACCESS_FINE_LOCATION;android.permission.RESTART_PACKAGES;android.webkit.permission.PLUGIN;android.permission.VIBRATE;android.permission.MODIFY_AUDIO_SETTINGS;android.permission.GET_ACCOUNTS;android.permission.MANAGE_ACCOUNTS;android.permission.AUTHENTICATE_ACCOUNTS;android.permission.USE_CREDENTIALS;android.permission.WRITE_SETTINGS;android.permission.READ_SETTINGS', ''),
(10, 1, '1.1.8', 1451013089, '133267831', 'Android 2.3, 2.3.1, 2.3.2', 10, 1, 9, 'com.youzu.dahuangdi.qihoo360', 22, 'android.permission.INTERNET;android.permission.RECORD_AUDIO;android.permission.CHANGE_NETWORK_STATE;android.permission.CHANGE_WIFI_STATE;android.permission.ACCESS_NETWORK_STATE;android.permission.ACCESS_WIFI_STATE;android.permission.MOUNT_UNMOUNT_FILESYSTEMS;android.permission.WRITE_EXTERNAL_STORAGE;android.permission.ACCESS_FINE_LOCATION;android.permission.READ_CONTACTS;android.permission.WAKE_LOCK;android.permission.READ_PHONE_STATE;android.permission.DEVICE_POWER;android.permission.RECEIVE_BOOT_COMPLETED;android.permission.GET_TASKS;android.permission.MANAGE_ACCOUNTS;android.permission.GET_ACCOUNTS;android.permission.BLUETOOTH;android.permission.BLUETOOTH_ADMIN;android.permission.SEND_SMS;android.permission.SYSTEM_ALERT_WINDOW;android.permission.WRITE_SMS;android.permission.READ_EXTERNAL_STORAGE;android.permission.RECEIVE_SMS;android.permission.ACCESS_COARSE_LOCATION;android.permission.RESTART_PACKAGES;android.webkit.permission.PLUGIN;android.permission.VIBRATE;android.permission.MODIFY_AUDIO_SETTINGS;android.permission.AUTHENTICATE_ACCOUNTS;android.permission.USE_CREDENTIALS;android.permission.WRITE_SETTINGS;android.permission.READ_SETTINGS', '');

-- --------------------------------------------------------

--
-- 表的结构 `m_image_local`
--

CREATE TABLE IF NOT EXISTS `m_image_local` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片本地化应用列表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_import`
--

CREATE TABLE IF NOT EXISTS `m_import` (
  `info_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '资讯id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `info_title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `info_stitle` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'SEO标题',
  `info_img` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `info_desc` varchar(500) NOT NULL DEFAULT '' COMMENT '摘要',
  `info_body` text COMMENT '详情',
  `info_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `info_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `info_from` varchar(500) NOT NULL DEFAULT '' COMMENT '来源',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `info_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `info_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `info_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `info_url` varchar(500) NOT NULL DEFAULT '' COMMENT '外部URL',
  `info_publish_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发表时间',
  `info_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `info_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  `info_status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `gather_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gather_id` int(10) unsigned NOT NULL,
  `info_author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '作者',
  PRIMARY KEY (`info_id`),
  KEY `cate_update_time` (`last_cate_id`,`info_update_time`),
  KEY `cate_order` (`last_cate_id`,`info_order`),
  KEY `cate_visitor` (`last_cate_id`,`info_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `info_update_time` (`info_update_time`),
  KEY `info_order` (`info_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='资讯表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_info`
--

CREATE TABLE IF NOT EXISTS `m_info` (
  `info_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '资讯id',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `info_title` varchar(500) NOT NULL DEFAULT '' COMMENT '标题',
  `info_stitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `info_img` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `info_desc` varchar(500) NOT NULL DEFAULT '' COMMENT '摘要',
  `info_body` text COMMENT '详情',
  `info_tags` varchar(1000) NOT NULL DEFAULT '' COMMENT '标签',
  `info_update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `info_from` varchar(500) NOT NULL DEFAULT '' COMMENT '来源',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布人ID',
  `info_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `info_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `info_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `info_url` varchar(500) NOT NULL DEFAULT '' COMMENT '外部URL',
  `info_publish_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发表时间',
  `info_seodesc` varchar(256) NOT NULL DEFAULT '' COMMENT 'seodesc',
  `info_seokey` varchar(256) NOT NULL DEFAULT '' COMMENT 'seokey',
  `info_status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `info_author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '作者',
  PRIMARY KEY (`info_id`),
  KEY `cate_update_time` (`last_cate_id`,`info_update_time`),
  KEY `cate_order` (`last_cate_id`,`info_order`),
  KEY `cate_visitor` (`last_cate_id`,`info_visitors`),
  KEY `cate_create_time` (`last_cate_id`,`create_time`),
  KEY `info_update_time` (`info_update_time`),
  KEY `info_order` (`info_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='资讯表' AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `m_info`
--

INSERT INTO `m_info` (`info_id`, `last_cate_id`, `info_title`, `info_stitle`, `info_img`, `info_desc`, `info_body`, `info_tags`, `info_update_time`, `create_time`, `info_from`, `uid`, `info_comments`, `info_visitors`, `info_order`, `info_url`, `info_publish_time`, `info_seodesc`, `info_seokey`, `info_status`, `info_author`) VALUES
(24, 4, '《NBA英雄》柏林英雄礼 诺天王伟大的告别', '《NBA英雄》柏林英雄礼 诺天王伟大的告别', '', '', '<p>　2015年欧洲男子篮球锦标赛，德国队对阵西班牙队之前获得1胜3负的战绩，只有赢下这场比赛才有出现的机会。可惜最终事与愿违，德国队遗憾落败，为本届欧洲男子篮球锦标赛画上并不完美的句号。最温情的画面莫过于最终结束时，属于德克·诺维茨基的时刻。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　德国对西班牙的男篮欧锦赛小组赛结束后，当诺维茨基转身走回赛场中间，他立刻得到了全场观众的鼓掌欢呼，诺天王向四周观众席几次挥手、鞠躬，作为一名土生土长的德国人，诺维茨基在主场球迷的欢呼声中，情不自禁流下了激动的泪水，最后用球衣拭去脸上的泪水，消失在球员通道。这也许是37岁的老男孩最后一次身披德国国家队队服出战，泪洒球场诉说这位德国英雄的传奇生涯。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　“感谢大家这一周时间的支持，感谢你们赠与我一场伟大的告别。”诺维茨基赛后在社交网络上这样写道，“这个时刻我永生不忘，对我而言这始终是一份荣耀。”诺维茨基为了欧锦赛如此卖力备战，而他在国家队中的核心地位也已让给了老鹰队后卫施罗德。对阵西班牙的比赛中，诺维茨基在西班牙队米罗蒂奇的贴身盯防下无所适从，但他依然能在最后时刻命中关键球，带领球队奋起反击。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　如今在球队中已不再是头号得分手，但诺维茨基绝对是球队的精神领袖，他在国家队中经历的一切，足以成为一笔宝贵的精神财富。“他是一位伟大的运动员，也是一位实现伟大梦想的德国人。”德国总理默克尔曾这样评价诺维茨基，“篮球并不是德国最受欢迎的运动，但他让更多人热爱上篮球，这是值得被赞扬的。”</p>\r\n', '', 1442988423, 1442199952, '', 1, 0, 1, 0, '', 0, '《NBA英雄》柏林英雄礼 诺天王伟大的告别', '《NBA英雄》柏林英雄礼 诺天王伟大的告别', 1, ''),
(25, 3, '打造完美恋人 《正妹物语》女友养成记', '', '', '', '<p>“夏天夏天悄悄过去留下小秘密 压心底 压心底 不能告诉你~晚风吹过温暖我心底 我又想起你 多甜蜜 多甜蜜 怎能忘记~”哈哈，夏天就剩下一个小尾巴了，你的粉红色记忆找到了吗?没有到话就来《正妹物语》看看吧，好多好多漂亮可爱的萌妹子都在这等着你哦~</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　由深圳微讯移通独家代理的真人女友恋爱养成手游《正妹物语》手把手教你泡正妹，各色女神任君挑选，性感魅惑、清纯可人、温柔体贴、妩媚动人...只要你要，只要我有。养成完美恋人，百变女神给你前所未有的恋爱新体验，夏日脱单ing~</p>\r\n\r\n<p>　　天气正慢慢褪去燥热，但玩家们的热情却持续上升，为了和女神交盆友，大家也是蛮拼的~好吧，为了回馈众男神，《正妹物语》又要出大招了，这一发的大招绝对甜到你心里!!</p>\r\n\r\n<p>　　没有错!又有新女神要来做你们的女朋友啦!高不高兴，期不期待，嗨不嗨!世界都变美好了对不对!哈哈，这次新版本即将上线的妹纸到底是个什么类型的女神呢?小编表示，这次的妹子绝对是所有男性无法抗拒的诱惑，想要吗><</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　新鲜的女神就像多汁的水蜜桃一样诱人，但是想吃到可不是那么容易的事情哦~耐心等待吧，新版本上线之日，就是迎娶女神之时，后宫妹子那么多，可都要好好安抚哟~除此之外，《正妹物语》公测即将开启，到时候又有一大波惊喜等着大家咯，鸡血打起来，人生巅峰就要来啦!!</p>\r\n\r\n<p>　　快来《正妹物语》领个女友回家养着吧，会撒娇会卖萌长得漂亮身材巨棒，女神将临，你准备好了吗~</p>\r\n', '', 1442988416, 1442200092, '', 1, 0, 2, 0, '', 0, '', '', 1, ''),
(26, 4, '决战魔窟 《魔力时代》英魂圣能之战', '', '', '', '<p>《魔力时代》常用的游戏资源除了金币和钻石之外，还有英魂和圣能。《魔力时代》中没有“穷人”，只有不努力获取资源的人。所有你所需要的资源，你都可以通过在游戏攻打副本或者其他玩法来获取，英魂和圣能也是如此，勇者们快到深渊魔窟中战斗，抢夺英魂和圣能吧!</p>\r\n', '', 1444981482, 1442200229, '', 1, 0, 0, 0, '', 1444981508, '', '', 2, ''),
(23, 2, '《全民飞机大战》太阳级新战机嫦娥测评', '《全民飞机大战》太阳级新战机嫦娥测评', '', '', '<p>《全民飞机大战》宠物革新时代降临，神级皇冠宠物纷纷登场，掀起合宠热潮!此次，神宠版本再添惊喜，拥有更强属性、更全面技能的太阳战机——嫦娥强势上架商城!首款太阳战机会有怎样的表现?小编带大家一起揭晓!</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　嫦娥满级属性：</p>\r\n\r\n<p>　　品质：三太阳</p>\r\n\r\n<p>　　生命值：1600</p>\r\n\r\n<p>　　攻击力：2180</p>\r\n\r\n<p>　　攻击速度：250</p>\r\n\r\n<p>　　战机技能：</p>\r\n\r\n<p>　　【弦乐之舞】：每损失300生命(双打模式为600)时舞蹈弦乐之舞将屏幕内的敌机变成伴舞的兔子，兔子移动速度降低，停止发射子弹，舞蹈时流转的圆刃秒杀周围敌机，并对boss或首领造成伤害，持续8秒，释放期间嫦娥免伤。技能开始与结束时均造成清屏爆炸，累积最高造成1000000伤害。</p>\r\n\r\n<p>　　【圆月之舞】：主动使用后与友机同时进入免伤状态，并召唤出共同控制的灵体舞蹈圆月之舞将屏幕内的敌机变成伴舞的兔子，兔子移动速度降低，停止发射子弹，期间对全屏敌机造成伤害，舞蹈时流转的圆刃秒杀周围的敌机，并对boss或首领造成伤害，持续12秒。技能释放前后均造成清屏爆炸，累积最高造成1600000伤害。冷却时间300秒。</p>\r\n\r\n<p>　　【月轮斩】：每秒发射2个圆刃，共造成5000伤害。</p>\r\n\r\n<p>　　【月华冰心】：击杀boss或首领回血320点，并且最终结算时，击杀boss或首领的基础得分加成160%，友机基础得分加成80%。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　嫦娥不愧为帝俊之女、后羿之妻，不仅貌美非凡，实力也不容小觑。作为《全民飞机大战》首架太阳级战机，嫦娥的等级可升至100，攻击速度为战机最高水平，满级攻击力与生命力也远超月亮级战机登上顶峰。如此娇艳美人、如此强势属性，定会迎来新一轮购机狂潮!</p>\r\n\r\n<p>　　而更为逆天的则是嫦娥的技能设定，不仅实用强力，在弹幕和技能释放的视觉效果上也是绝佳!嫦娥拥有四项技能，且有三项技能都为双打模式做了特别设计。“月华冰心”不仅拥有得分加成，击杀boss还可回血，增强战机续航能力;配合“弦乐之舞”这一华丽的损血技能，所有敌机都变成人畜无害的兔子，嫦娥挥舞圆刃瞬杀敌机，并能对boss或首领造成极高伤害，还有二重清屏效果再增输出，就是如此暴力，就是这么任性!</p>\r\n\r\n<p>　　嫦娥还拥有首项主动技能“圆月之舞”，免伤加超高输出、全屏伤害再加双重清屏，绝对神技!更惊喜的是，在双打模式下，除自身可用之外，友军也会拥有免伤状态，并控制灵体舞蹈，双打更加游刃有余，与好友更轻松遨游飞行上空!触发被动和主动时，嫦娥处于是无敌状态，释放技能无障碍!“月轮斩”则进一步加强了嫦娥的输出能力，可分担旁支威胁。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　在搭配上，小编推荐天空三件套，如果没有天空也可铁流套装，都是高伤高防的组合。小编宠物搭配了月宫神兔与幽蓝之星，护盾加回血续航能力可见一斑，攻击加成为战机增强输出，还有得分加成为玩家登榜再添一力。有了这样完美的搭配，无论遇到多刁难的boss都能无所畏惧轻易击杀!</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　嫦娥作为首架太阳战机，属性为现今最高，技能也极其强势，是非常完美的战机。而且在活动期间将嫦娥升到满级还可获赠皇冠宠月宫神兔，嫦娥搭配月兔当然是极好的，心动的玩家可别错过了!</p>\r\n', '', 1442988428, 1442199542, '', 1, 0, 33, 0, '', 0, '《全民飞机大战》太阳级新战机嫦娥测评', '《全民飞机大战》太阳级新战机嫦娥测评', 1, ''),
(22, 4, '科幻手游《小兵传奇》公测火爆开启 同名小说正版授权', '', '', '', '<p>在9月12日，由广州49You重金独代、网络人气作家玄雨授权并亲自监制、2015年超高期待的同名科幻手游《小兵传奇》已经华丽开启全网公测。公测后如何在最快时间融入游戏也是玩家们关心的话题，今天咱们就来为新手们支一招，看看前辈们都是怎么在游戏中捷足先登的吧!</p>\r\n\r\n<p>　　在49You《小兵传奇》这款游戏里面，阵型搭配是非常讲究的，而且阵型也是非常中国传统兵法特色。《孙子兵法》读得再多也都是纸上谈兵，咱们到了这里就要学会实战运用，而这，就是49You《小兵传奇》一大亮点之一。玩家要合理根据英雄的属性，来决定前后排站位，从而组成最高的输出战力。同时也要合理安排替补，以便应对突发情况。如果你平时有看足球篮球比赛，场边那个运筹帷幄、掌控全局的主教练就是你在《小兵传奇》中的形象哦!</p>\r\n\r\n<p><img alt="小兵传奇公测" src="http://www.xiaopi.com/game/uploadfile/2015/0914/20150914093653784.jpg" /></p>\r\n\r\n<p>　　英雄系统是玩法中的重点，而命运系统又是决定英雄战斗力的关键玩法。49You《小兵传奇》里英雄的战斗力除了来源于自身能力和道具装备外，更加依赖于自身与其他上阵英雄或特定装备产生的“命运”。替补中的角色也是可以作为出阵英雄存在的，上阵英雄的“命运”除了阵内角色外，与替补英雄同样也可以产生联系。这样一来就可以产生多种多样的命运组合啦，赶紧去试一试啦。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　在新游戏里，大家往往会东转西转找不到北，错过最佳练级和成长的机会，49You《小兵传奇》为大家提供了一个很好的平台方便大家完成每天的任务，更快的升级进阶，从此妈妈再也不用担心我的战斗力了!只要有体力就去刷图，有体力药剂就猛磕体力药剂，每天买满体力药剂，买满各种箱子开出体力药剂，级别就能拉开很多。</p>\r\n\r\n<p> </p>\r\n\r\n<p>　　除此之外，公测开启的同时伴随着还有众多豪礼来袭，比如像登陆有惊喜、累积充值等等活动都一一俱全;并且还会有星际动荡“天下第一”、“命运北斗”再次开启这样的趣味活动同步上线!而且所有充值项首充都可以获得双倍返还，并且充值就送10%，充值100元以上可获送15%，赶紧来参加吧!</p>\r\n', '', 1442988434, 1442199465, '711cms', 1, 0, 12, 0, '', 0, '', '', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `m_info_category`
--

CREATE TABLE IF NOT EXISTS `m_info_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父类id',
  `cname` varchar(100) NOT NULL DEFAULT '' COMMENT '分类名称',
  `cname_py` varchar(100) NOT NULL DEFAULT '' COMMENT '分类字母别名',
  `ctitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `ckey` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO关键词',
  `cdesc` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO描述',
  `corder` int(11) NOT NULL DEFAULT '0' COMMENT '分类排序',
  `cat_show` int(2) NOT NULL DEFAULT '1' COMMENT '是否显示分类',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `m_info_category`
--

INSERT INTO `m_info_category` (`cate_id`, `parent_id`, `cname`, `cname_py`, `ctitle`, `ckey`, `cdesc`, `corder`, `cat_show`) VALUES
(2, 1, '热门资讯', 'hot', '', '', '', 0, 1),
(3, 1, '游戏攻略', 'game', '', '', '', 0, 1),
(4, 1, '安卓资讯', 'android', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `m_info_comment`
--

CREATE TABLE IF NOT EXISTS `m_info_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `info_app_id` int(11) NOT NULL COMMENT '应用id，资讯id',
  `comment_content` varchar(500) NOT NULL DEFAULT '' COMMENT '评论内容',
  `comment_date` int(11) NOT NULL COMMENT '发布时间',
  `comment_user` int(11) NOT NULL COMMENT '用户id',
  `comment_uname` varchar(500) NOT NULL DEFAULT '' COMMENT '昵称',
  `comment_ip` varchar(15) NOT NULL COMMENT 'ip地址',
  `comment_parent` int(11) unsigned NOT NULL COMMENT '上级id',
  `comment_check` tinyint(4) unsigned NOT NULL COMMENT '是否审核',
  `comment_good` int(11) unsigned NOT NULL COMMENT '赞',
  `comment_bad` int(11) unsigned NOT NULL COMMENT '踩',
  PRIMARY KEY (`comment_id`),
  KEY `id_type` (`info_app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评论表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_navicat`
--

CREATE TABLE IF NOT EXISTS `m_navicat` (
  `navicat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `navicat_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '导航名称',
  `navicat_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '导航地址',
  `navicat_m` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `navicat_seotitle` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'seo标题',
  `navicat_seokey` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'seo关键字',
  `navicat_seodesc` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'seo描述',
  `navicat_enabled` tinyint(3) unsigned NOT NULL COMMENT '是否可用',
  `navicat_order` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `navicat_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `navicat_blank` tinyint(3) unsigned NOT NULL COMMENT '是否新窗口',
  `uid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`navicat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='导航表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `m_navicat`
--

INSERT INTO `m_navicat` (`navicat_id`, `navicat_name`, `navicat_url`, `navicat_m`, `navicat_seotitle`, `navicat_seokey`, `navicat_seodesc`, `navicat_enabled`, `navicat_order`, `navicat_time`, `navicat_blank`, `uid`) VALUES
(2, '苹果', '/index.php?c=index&m=softs', 'softs', '', '', '', 1, 8, 1503214816, 2, 1),
(3, '安卓', '/index.php?c=index&m=games', 'games', '', '', '', 1, 7, 1503214821, 2, 1),
(4, '装机必备', '/index.php?c=index&m=necessaries', 'necessaries', '', '', '', 1, 5, 1442127763, 2, 1),
(5, '资讯', '/index.php?c=index&m=infos', 'infos', '', '', '', 1, 6, 1442127788, 2, 1),
(6, '专题', '/index.php?c=index&m=specials', 'specials', '', '', '', 1, 4, 1442127813, 2, 1),
(7, '最新', '/', 'index', '', '', '', 1, 9, 1503215138, 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `m_necessary`
--

CREATE TABLE IF NOT EXISTS `m_necessary` (
  `necessary_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `necessary_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '位置标题',
  `necessary_type` tinyint(4) unsigned NOT NULL COMMENT '类型',
  `necessary_remarks` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  `necessary_html` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '简介',
  `necessary_order` int(11) unsigned NOT NULL COMMENT '排序',
  `necessary_list` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'ID列表',
  `necessary_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  `uid` int(10) unsigned NOT NULL COMMENT 'uid',
  PRIMARY KEY (`necessary_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='装机必备' AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `m_necessary`
--

INSERT INTO `m_necessary` (`necessary_id`, `necessary_title`, `necessary_type`, `necessary_remarks`, `necessary_html`, `necessary_order`, `necessary_list`, `necessary_time`, `uid`) VALUES
(29, '游戏必备', 2, '游戏必备', '游戏必备', 0, '', 1444960000, 1),
(30, '软件必备', 1, '软件必备', '软件必备', 0, '4,5,6', 1444959997, 1);

-- --------------------------------------------------------

--
-- 表的结构 `m_nlink`
--

CREATE TABLE IF NOT EXISTS `m_nlink` (
  `nlink_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '内链ID',
  `nlink_txt` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  `nlink_url` varchar(500) NOT NULL DEFAULT '' COMMENT '网址',
  PRIMARY KEY (`nlink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='正文內链词表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_operate_log`
--

CREATE TABLE IF NOT EXISTS `m_operate_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '登录账号',
  `log_time` int(10) unsigned NOT NULL COMMENT '操作时间',
  `log_ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '登录ip',
  `log_controller` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '操作模块',
  `log_model` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '操作方法',
  `log_content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '操作内容',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='操作日志表' AUTO_INCREMENT=104 ;

--
-- 转存表中的数据 `m_operate_log`
--

INSERT INTO `m_operate_log` (`log_id`, `log_admin`, `log_time`, `log_ip`, `log_controller`, `log_model`, `log_content`) VALUES
(1, 'dancdw', 1503188282, '::1', 'Index', 'login', '登入后台'),
(2, 'dancdw', 1503188304, '::1', 'Backup', 'backups', '成功备份了数据表。'),
(3, 'dancdw', 1503188333, '::1', 'Backup', 'backups', '成功备份了数据表。'),
(4, 'dancdw', 1503188574, '::1', 'Backup', 'delete', '删除了备份：5998d56d36edb'),
(5, 'dancdw', 1503190375, '::1', 'Setting', 'update', '修改了网站配置'),
(6, 'dancdw', 1503190668, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(7, 'dancdw', 1503192238, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(8, 'dancdw', 1503194745, '::1', 'Setting', 'update', '修改了网站配置'),
(9, 'dancdw', 1503196046, '::1', 'Setting', 'update', '修改了网站配置'),
(10, 'dancdw', 1503204156, '::1', 'Setting', 'update', '修改了网站配置'),
(11, 'dancdw', 1503204179, '::1', 'Setting', 'update', '修改了网站配置'),
(12, 'dancdw', 1503204196, '::1', 'Setting', 'update', '修改了网站配置'),
(13, 'dancdw', 1503205149, '::1', 'Setting', 'update', '修改了网站配置'),
(14, 'dancdw', 1503205354, '::1', 'Setting', 'update', '修改了网站配置'),
(15, 'dancdw', 1503208871, '::1', 'Setting', 'update', '修改了网站配置'),
(16, 'dancdw', 1503209165, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(17, 'dancdw', 1503209430, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(18, 'dancdw', 1503209557, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(19, 'dancdw', 1503209744, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(20, 'dancdw', 1503210114, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(21, 'dancdw', 1503210126, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(22, 'dancdw', 1503210194, '::1', 'Setting', 'update', '修改了网站配置'),
(23, 'dancdw', 1503210237, '::1', 'App', 'update', '修改了应用：整除·4'),
(24, 'dancdw', 1503213908, '::1', 'Setting', 'update', '修改了网站配置'),
(25, 'dancdw', 1503213945, '::1', 'Setting', 'update', '修改了网站配置'),
(26, 'dancdw', 1503214816, '::1', 'Navicat', 'update', '修改了导航：苹果'),
(27, 'dancdw', 1503214821, '::1', 'Navicat', 'update', '修改了导航：安卓'),
(28, 'dancdw', 1503215138, '::1', 'Navicat', 'update', '修改了导航：最新'),
(29, 'dancdw', 1503215202, '::1', 'Setting', 'update', '修改了网站配置'),
(30, 'dancdw', 1503216124, '::1', 'Setting', 'update', '修改了网站配置'),
(31, 'dancdw', 1503216382, '::1', 'Setting', 'update', '修改了网站配置'),
(32, 'dancdw', 1503216436, '::1', 'Setting', 'update', '修改了网站配置'),
(33, 'dancdw', 1503216449, '::1', 'Setting', 'update', '修改了网站配置'),
(34, 'dancdw', 1503216471, '::1', 'Setting', 'update', '修改了网站配置'),
(35, 'dancdw', 1503216716, '::1', 'Advert', 'update', '修改了广告：WAP首页轮播'),
(36, 'dancdw', 1503216774, '::1', 'Advert', 'update', '修改了广告：WAP首页轮播'),
(37, 'dancdw', 1503216887, '::1', 'Setting', 'update', '修改了网站配置'),
(38, 'dancdw', 1503217858, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(39, 'dancdw', 1503217951, '::1', 'App', 'update', '修改了应用：整除·4'),
(40, 'dancdw', 1503223513, '::1', 'Setting', 'update', '修改了网站配置'),
(41, 'dancdw', 1503223859, '::1', 'Setting', 'update', '修改了网站配置'),
(42, 'dancdw', 1503225441, '::1', 'Setting', 'update', '修改了网站配置'),
(43, 'dancdw', 1503230782, '::1', 'Setting', 'update', '修改了网站配置'),
(44, 'dancdw', 1503230843, '::1', 'Setting', 'update', '修改了网站配置'),
(45, 'dancdw', 1503230879, '::1', 'Setting', 'update', '修改了网站配置'),
(46, 'dancdw', 1503231041, '::1', 'Setting', 'update', '修改了网站配置'),
(47, 'dancdw', 1503231911, '::1', 'Advert', 'update', '修改了广告：WAP首页轮播'),
(48, 'dancdw', 1503231980, '::1', 'Setting', 'update', '修改了网站配置'),
(49, 'dancdw', 1503232303, '::1', 'Setting', 'update', '修改了网站配置'),
(50, 'dancdw', 1503232435, '::1', 'App', 'update', '修改了应用：整除·4'),
(51, 'dancdw', 1503236554, '::1', 'App', 'update', '修改了应用：整除·4'),
(52, 'dancdw', 1503236562, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(53, 'dancdw', 1503236574, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(54, 'dancdw', 1503236597, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(55, 'dancdw', 1503236735, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(56, 'dancdw', 1503236751, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(57, 'dancdw', 1503237177, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(58, 'dancdw', 1503237263, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(59, 'dancdw', 1503237271, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(60, 'dancdw', 1503237277, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(61, 'dancdw', 1503237350, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(62, 'dancdw', 1503237361, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(63, 'dancdw', 1503237367, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(64, 'dancdw', 1503237401, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(65, 'dancdw', 1503237416, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(66, 'dancdw', 1503237442, '::1', 'App', 'update', '修改了应用：万万没想到之大皇帝'),
(67, 'dancdw', 1503237647, '::1', 'App', 'update', '修改了应用：整除·4'),
(68, 'dancdw', 1503238994, '::1', 'App', 'update', '修改了应用：应用试客'),
(69, 'dancdw', 1503239547, '::1', 'App', 'update', '修改了应用：小鱼赚钱'),
(70, 'dancdw', 1503239980, '::1', 'App', 'update', '修改了应用：应用试客'),
(71, 'dancdw', 1503241423, '::1', 'App', 'update', '修改了应用：钱咖'),
(72, 'dancdw', 1503241730, '::1', 'App', 'update', '修改了应用：热葫芦'),
(73, 'dancdw', 1503242051, '::1', 'App', 'update', '修改了应用：PP红包'),
(74, 'dancdw', 1503242307, '::1', 'App', 'update', '修改了应用：iMoney试玩平台'),
(75, 'dancdw', 1503242334, '::1', 'App', 'update', '修改了应用：iMoney'),
(76, 'dancdw', 1503242635, '::1', 'App', 'update', '修改了应用：秒赚大钱'),
(77, 'dancdw', 1503242642, '::1', 'App', 'update', '修改了应用：iMoney'),
(78, 'dancdw', 1503242645, '::1', 'App', 'delete', '删除了应用：一点资讯'),
(79, 'dancdw', 1503242648, '::1', 'App', 'delete', '删除了应用：BesTV'),
(80, 'dancdw', 1503242650, '::1', 'App', 'delete', '删除了应用：整除·4'),
(81, 'dancdw', 1503242719, '::1', 'App', 'update', '修改了应用：应用试客'),
(82, 'dancdw', 1503290707, '10.50.149.41', 'Index', 'login', '登入后台'),
(83, 'dancdw', 1503404949, '10.50.148.55', 'Index', 'login', '登入后台'),
(84, 'dancdw', 1503405011, '10.50.149.74', 'Setting', 'update', '修改了网站配置'),
(85, 'dancdw', 1503418018, '::1', 'Index', 'login', '登入后台'),
(86, 'dancdw', 1503418689, '::1', 'Recommend', 'update', '修改了推荐位：热门'),
(87, 'dancdw', 1503418865, '::1', 'Recommend', 'update', '修改了推荐位：热门'),
(88, 'dancdw', 1503418884, '::1', 'Recommend', 'update', '修改了推荐位：热门'),
(89, 'dancdw', 1503419679, '::1', 'App', 'update', '修改了应用：秒赚大钱'),
(90, 'dancdw', 1503420148, '::1', 'App', 'update', '修改了应用：应用试客'),
(91, 'dancdw', 1503420336, '::1', 'App', 'update', '修改了应用：钱咖'),
(92, 'dancdw', 1503420479, '::1', 'App', 'update', '修改了应用：钱咖'),
(93, 'dancdw', 1503420639, '::1', 'App', 'update', '修改了应用：小鱼赚钱'),
(94, 'dancdw', 1503420851, '::1', 'App', 'update', '修改了应用：iMoney'),
(95, 'dancdw', 1503421048, '::1', 'App', 'update', '修改了应用：PP红包'),
(96, 'dancdw', 1503421126, '::1', 'App', 'update', '修改了应用：热葫芦'),
(97, 'dancdw', 1503421249, '::1', 'App', 'update', '修改了应用：秒赚大钱'),
(98, 'dancdw', 1503421321, '::1', 'Recommend', 'update', '修改了推荐位：热门'),
(99, 'dancdw', 1503421336, '::1', 'Recommend', 'update', '修改了推荐位：热门'),
(100, 'dancdw', 1503421795, '10.50.148.60', 'Index', 'login', '登入后台'),
(101, 'dancdw', 1503421827, '10.50.149.73', 'Setting', 'update', '修改了网站配置'),
(102, 'dancdw', 1503421841, '10.50.149.61', 'Setting', 'update', '修改了网站配置'),
(103, 'dancdw', 1503552041, '127.0.0.1', 'Index', 'login', '登入后台');

-- --------------------------------------------------------

--
-- 表的结构 `m_recommend`
--

CREATE TABLE IF NOT EXISTS `m_recommend` (
  `area_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_title` varchar(100) NOT NULL DEFAULT '' COMMENT '位置标题',
  `area_html` text COMMENT '广告HTML或者描述文本',
  `area_remarks` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `area_logo` varchar(200) NOT NULL DEFAULT '' COMMENT '位置LOGO图',
  `area_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `area_ids` text NOT NULL COMMENT 'ID列表，用逗号分割',
  `area_type` tinyint(4) NOT NULL COMMENT '1pc网站 2手助 3wap',
  `operate_type` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '操作类型1.手动添加2.自动获取',
  `auto_type` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '获取类型1.最新更新2.下载排行',
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='推荐位置' AUTO_INCREMENT=70 ;

--
-- 转存表中的数据 `m_recommend`
--

INSERT INTO `m_recommend` (`area_id`, `area_title`, `area_html`, `area_remarks`, `area_logo`, `area_order`, `area_ids`, `area_type`, `operate_type`, `auto_type`) VALUES
(30, '最受欢迎', '', '最受欢迎（PC网站首页）', '', 0, '', 1, 1, 0),
(31, '装机必备', '', '装机必备（PC网站首页）', '', 0, '', 1, 1, 0),
(29, '今日热门推荐', '', '今日热门推荐（PC网站首页）', '', 0, '4,5,6,7,8', 1, 1, 0),
(32, '时下热门', '', '时下热门（手助端首页）', '', 0, '8', 2, 1, 0),
(33, '精品推荐', '', '精品推荐（手助端首页）', '', 0, '', 2, 1, 0),
(34, '每日推荐', '', '每日推荐（手助端首页）', '', 0, '4,5,6,7,8,9', 2, 1, 0),
(35, '上升最快', '', '上升最快（手助端首页）', '', 0, '', 2, 1, 0),
(36, '装机必备', '', '装机必备（手助端首页）', '', 0, '', 2, 1, 0),
(37, '下载排行', '', '下载排行（手助端首页）', '', 0, '', 2, 1, 0),
(38, '应用排行', '', '应用排行（手助端排行页）', '', 0, '', 2, 1, 0),
(39, '游戏排行', '', '游戏排行（手助端排行页）', '', 0, '', 2, 1, 0),
(40, '今日推荐', '', '今日推荐（PC网站首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(41, '精品推荐', '', '精品推荐（PC网站首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(42, '热门排行', '', '热门排行（PC网站首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(44, '飙升榜', '', '飙升榜（PC网站首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(45, '热门', '', '软件热门（wap首页mobile-1）', '', 0, '1,2,3,4,5,6,7,8,9', 3, 1, 0),
(46, '热门', '', '游戏热门（wap首页mobile-1）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(47, '精品', '', '软件精品（wap首页mobile-1）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(48, '精品', '', '游戏精品（wap首页mobile-1）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(49, '飙升', '', '软件飙升（wap首页mobile-1）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(50, '飙升', '', '游戏飙升（wap首页mobile-1）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(51, '排行榜', '', '软件飙升（wap排行榜页mobile-1）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(52, '排行榜', '', '游戏飙升（wap排行榜页mobile-1）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(53, '最受欢迎', '', '最受欢迎（wap1最受欢迎页）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(54, '软件', '', '软件（template-3首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(55, '游戏', '', '游戏（template-3首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(56, '飙升排行榜', '', '飙升排行榜-软件（template-3首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(57, '飙升排行榜', '', '飙升排行榜-游戏（template-3首页）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(58, '精品推荐', '', '精品推荐（PC网站软件页template-3）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(59, '精品推荐', '', '精品推荐（PC网站游戏页template-3）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(60, '下载排行', '', '下载排行（PC网站软件页template-3|template-4）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(61, '上升最快', '', '上升最快（PC网站软件页template-3）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(62, '时下热门', '', '时下热门（PC网站软件页template-3）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(63, '下载排行', '', '下载排行（PC网站游戏页template-3|template-4）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(64, '上升最快', '', '上升最快（PC网站游戏页template-3）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(65, '时下热门', '', '时下热门（PC网站游戏页template-3）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(66, '下载排行', '', '下载排行（PC网站新闻页template-3|template-4）', '', 0, '4,5,6,7,8,9', 1, 1, 0),
(67, '精品推荐', '', '精品推荐（wap首页mobile-2）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(68, '下载排行', '', '下载排行（wap首页mobile-2）', '', 0, '4,5,6,7,8,9', 3, 1, 0),
(69, '上升最快', '', '上升最快（wap首页mobile-2）', '', 0, '4,5,6,7,8,9', 3, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `m_resource`
--

CREATE TABLE IF NOT EXISTS `m_resource` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '资源',
  `info_app_id` int(11) NOT NULL DEFAULT '0' COMMENT '应用 或资讯ID',
  `type` int(2) NOT NULL DEFAULT '0' COMMENT '关联的类型，应用=0，资讯=1',
  `resource_url` varchar(300) NOT NULL DEFAULT '' COMMENT '资源地址',
  `width` int(11) NOT NULL DEFAULT '0' COMMENT '资源宽度',
  `height` int(11) NOT NULL DEFAULT '0' COMMENT '资源高度',
  `size` int(11) NOT NULL DEFAULT '0' COMMENT '资源大小',
  PRIMARY KEY (`id`),
  KEY `id_type` (`info_app_id`,`type`),
  KEY `resource_url` (`resource_url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='资源表' AUTO_INCREMENT=95 ;

--
-- 转存表中的数据 `m_resource`
--

INSERT INTO `m_resource` (`id`, `info_app_id`, `type`, `resource_url`, `width`, `height`, `size`) VALUES
(74, 4, 0, '/uploads/images/d3fa604e3a7c0a146f81b793ab04f192.jpg', 512, 908, 55),
(75, 4, 0, '/uploads/images/530f557214f1d8d4c04aaeabc3949a6c.jpg', 593, 458, 34),
(84, 5, 0, '/uploads/images/3aab9ca0f2e1682f513042d3c0d7b640.jpg', 300, 533, 30),
(85, 5, 0, '/uploads/images/8b0fb6d62de92db9374ab1c0348d5916.jpg', 300, 533, 30),
(86, 5, 0, '/uploads/images/28b32c3ebdd6e87f960150c8c1d75c58.jpg', 300, 533, 25),
(89, 6, 0, '/uploads/images/72f6f87cd3ffaaceb0ed8aa3702796fe.png', 586, 950, 308),
(90, 6, 0, '/uploads/images/6086da836e35caa0c12cffb25317dd53.jpg', 512, 825, 55),
(91, 7, 0, '/uploads/images/ebe44696a67bac41eee6f1d4de78e46f.jpg', 563, 1000, 169),
(92, 7, 0, '/uploads/images/11a8b3c50f4930393338428dd341a099.jpg', 563, 1000, 130),
(93, 8, 0, '/uploads/images/d1f70bdb737d6c337eeb9c88812c6af4.jpg', 512, 908, 55),
(94, 8, 0, '/uploads/images/5ee856cc3b49932906a584a542bc2629.jpg', 593, 458, 34),
(54, 9, 0, '/uploads/images/daffe25f78594a8f612b8c6f07b34dee.jpg', 300, 533, 22),
(55, 9, 0, '/uploads/images/ba3f555d012da55c2e4458f6f5867ad4.jpg', 300, 533, 21),
(56, 9, 0, '/uploads/images/2b01532f23b64d5a2d835084822eca59.jpg', 300, 533, 18),
(50, 10, 0, '/uploads/images/3aa210eeff9e1225af6cf154850d3ae5.jpg', 300, 533, 32),
(51, 10, 0, '/uploads/images/d45ebafa397f644839bde6d2ba2e34af.jpg', 300, 533, 24),
(52, 10, 0, '/uploads/images/dcf7a0135f8dc39b216655e11de7bc50.jpg', 300, 533, 22),
(53, 10, 0, '/uploads/images/98538924e9a307e8cbce8c7744a029ae.jpg', 300, 533, 28),
(57, 9, 0, '/uploads/images/e9112f00505927b56368445b62f490d2.jpg', 300, 533, 30),
(76, 1, 0, '/uploads/images/81f62e9c253e04e58e874a765b38cafe.jpg', 449, 800, 37),
(77, 1, 0, '/uploads/images/fa232455fb90ec7a611e70161d27ef45.jpg', 563, 1000, 74),
(78, 2, 0, '/uploads/images/afcccc2f4ec326fbb013bd88c10ac6e6.jpg', 563, 1000, 48),
(79, 2, 0, '/uploads/images/012d42e505c7ecb3d504e7bade60f050.jpg', 563, 1000, 41),
(80, 2, 0, '/uploads/images/7d327bc3d5f5324c69bcfda938461cd3.jpg', 300, 533, 48),
(81, 2, 0, '/uploads/images/3cb429a4ca514ec311e55d70d6a63f31.jpg', 300, 533, 47),
(82, 3, 0, '/uploads/images/3e2eb3f4ac890078d74ae6b4ebda61ae.jpg', 563, 1000, 183),
(83, 3, 0, '/uploads/images/df454ed1aba002807ac404b705186e20.jpg', 600, 362, 40),
(87, 5, 0, '/uploads/images/2f9b2c401da610f445805ca15fcb35e3.jpg', 377, 568, 28),
(88, 5, 0, '/uploads/images/2f64908c65c6e204d44912718c1b91ef.jpg', 580, 457, 36);

-- --------------------------------------------------------

--
-- 表的结构 `m_search`
--

CREATE TABLE IF NOT EXISTS `m_search` (
  `q_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `q` varchar(200) NOT NULL DEFAULT '' COMMENT '搜索关键字',
  `qnum` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '搜索次数',
  `qorder` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '关键字排序',
  `q_type` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '关键字类型1.软件2.游戏',
  PRIMARY KEY (`q_id`),
  KEY `qorder` (`qorder`),
  KEY `q` (`q`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='搜索关键字记录表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `m_search`
--

INSERT INTO `m_search` (`q_id`, `q`, `qnum`, `qorder`, `q_type`) VALUES
(1, '整除·4', 1, 0, 1),
(2, 'BesTV', 1, 0, 1),
(3, '一点资讯', 7, 0, 1),
(4, '今日头条', 6, 0, 1),
(5, '小黄人大眼萌乐园', 4, 0, 2),
(6, '万万没想到之大皇帝', 8, 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `m_setting`
--

CREATE TABLE IF NOT EXISTS `m_setting` (
  `s_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `s_key` varchar(255) NOT NULL,
  `s_value` text NOT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `s_key` (`s_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='设置表' AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `m_setting`
--

INSERT INTO `m_setting` (`s_id`, `s_key`, `s_value`) VALUES
(1, 'auth_code', 'f3000e8542396594a81f6e07be177210'),
(2, 'cache_time', '0'),
(3, 'comment_code', ''),
(4, 'count_code', ''),
(5, 'data_center_url', 'http://www.711cms.com/api'),
(6, 'pagesize', '20'),
(7, 'version', '1.0.0'),
(8, 'update_time', '1503188235'),
(9, 'static_url', 'static'),
(10, 'water_button', '2'),
(11, 'is_site_rewrite', '-1'),
(12, 'is_content_mobile', '1'),
(13, 'is_images_local', '0'),
(14, 'is_images_rewrite', '0'),
(15, 'is_content_nlink', '0'),
(16, 'seo_description', '试客专家（shikezj）是中国最大的热门应用与游戏发布平台，广大用户可以一边使用APP和游戏，一边轻松赚钱！透明的收入查询，领先的ASO方案，值得用户与商家信赖，每天签到可额外赢取红包、话费、Q币。'),
(17, 'seo_keywords', '试客专家'),
(18, 'seo_title', '试客专家'),
(19, 'site_logo', '/uploads/images/9604a4f67391f4dc1010dce413c373ac.png'),
(20, 'site_name', '试客专家'),
(21, 'site_safe_code', ''),
(22, 'site_url', 'http://shikezj.duapp.com'),
(23, 'site_beian', ''),
(24, 'site_copyright', ''),
(25, 'site_path', '/'),
(26, 'template', 'template_001'),
(27, 'upload_key', '33c2c07ec173aaead04a48fdac0185dc'),
(28, 'upload_path', '/uploads/images/'),
(29, 'upload_path_apk', '/uploads/apk/'),
(30, 'wap_logo', '/uploads/images/9604a4f67391f4dc1010dce413c373ac.png'),
(31, 'wap_url', 'http://shikezj.duapp.com'),
(32, 'wap_seo_description', '掌上试客（zhangshangshike）是中国最大的热门应用与游戏发布平台，广大用户可以一边使用APP和游戏，一边轻松赚钱！透明的收入查询，领先的ASO方案，值得用户与商家信赖。'),
(33, 'wap_seo_keywords', '试客专家'),
(34, 'wap_seo_title', '试客专家'),
(35, 'wap_template', 'mobile_106'),
(36, 'count_code2', ''),
(37, 'water_logo', '');

-- --------------------------------------------------------

--
-- 表的结构 `m_special`
--

CREATE TABLE IF NOT EXISTS `m_special` (
  `area_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_title` text NOT NULL COMMENT '位置标题',
  `area_html` text COMMENT '广告HTML或者描述文本',
  `area_remarks` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `area_logo` varchar(200) NOT NULL DEFAULT '' COMMENT '位置LOGO图',
  `area_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `area_ids` text NOT NULL COMMENT 'ID列表，用逗号分割',
  `special_seotitle` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_seokey` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_seodesc` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_time` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='专题' AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `m_special`
--

INSERT INTO `m_special` (`area_id`, `area_title`, `area_html`, `area_remarks`, `area_logo`, `area_order`, `area_ids`, `special_seotitle`, `special_seokey`, `special_seodesc`, `special_time`, `uid`) VALUES
(32, '专题二', '', '', '/uploads/images/b01f7bee4cebf5bfd322328fd0949fdb.gif', 0, '4,5,6', '', '', '', 1445411835, 1),
(33, '专题三', '', '', '/uploads/images/ddb4cb8830d76ae2326570b620eb058d.gif', 0, '7,8,9', '', '', '', 1445411841, 1),
(31, '专题一', '', '', '/uploads/images/80de3333fd830896e60368592175355b.gif', 0, '', '', '', '', 1445411827, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
