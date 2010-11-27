-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 11 月 25 日 10:07
-- 服务器版本: 5.1.53
-- PHP 版本: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `demo`
--

-- --------------------------------------------------------

--
-- 表的结构 `tbl_honor`
--

CREATE TABLE IF NOT EXISTS `tbl_honor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `year` varchar(20) NOT NULL,
  `image` varchar(256) NOT NULL,
  `simage` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `tbl_honor`
--

INSERT INTO `tbl_honor` (`id`, `name`, `year`, `image`, `simage`) VALUES
(17, '中国最具有生命力企业', '2006', '1290577931.jpg', '1290577931_s.jpg'),
(18, '荣获2005年中国名牌产品', '2006', '1290578309.jpg', '1290578309_s.jpg'),
(19, '纳税信用A级纳税人', '2006', '1290578349.jpg', '1290578349_s.jpg'),
(20, '产品资量国家免检证书', '2006', '1290578380.jpg', '1290578380_s.jpg'),
(21, '中国驰名商标', '2006', '1290578446.jpg', '1290578446_s.jpg'),
(22, '产品质量免检证书', '2006', '1290578477.jpg', '1290578477_s.jpg'),
(23, '中国绿色水龙头', '2006', '1290578513.jpg', '1290578513_s.jpg'),
(24, '中国工业生产能源节约先进单位', '2006', '1290578530.jpg', '1290578530_s.jpg'),
(25, '荣获知名品牌', '2006', '1290578555.jpg', '1290578555_s.jpg'),
(26, '中国绿色水龙头', '2006', '1290578581.jpg', '1290578581_s.jpg'),
(27, '2006中国保护消费者基金会', '2006', '1290578596.jpg', '1290578596_s.jpg'),
(28, '中国建材行业十大杰出贡献企业', '2006', '1290578620.jpg', '1290578620_s.jpg'),
(29, '节约贡献奖', '2006', '1290578637.jpg', '1290578637_s.jpg'),
(30, '2006-2007年中国出口品牌', '2006', '1290578652.jpg', '1290578652_s.jpg'),
(31, '2006中国保护消费者基金', '2006', '1290578664.jpg', '1290578664_s.jpg'),
(32, '2006中国保护消费者基金会', '2006', '1290578691.jpg', '1290578691_s.jpg'),
(33, '质量体系认证证书', '2007', '1290643321.jpg', '1290643321_s.jpg'),
(34, '中宇荣誉证书', '2007', '1290643336.jpg', '1290643336_s.jpg'),
(35, '纳税1155万元', '2007', '1290643350.jpg', '1290643350_s.jpg'),
(36, '中华名特优产品指定供货单位', '2007', '1290643367.jpg', '1290643367_s.jpg'),
(37, '福建省最佳信用企业', '2007', '1290643380.jpg', '1290643380_s.jpg'),
(38, '中国厨卫行业百强企业', '2007', '1290643398.jpg', '1290643398_s.jpg'),
(39, '先进集体', '2007', '1290643414.jpg', '1290643414_s.jpg'),
(40, '节能产品证书', '2007', '1290643427.jpg', '1290643427_s.jpg'),
(41, '五金洁具领军企业', '2007', '1290643442.jpg', '1290643442_s.jpg'),
(42, '福建省著名商标', '2007', '1290643459.jpg', '1290643459_s.jpg'),
(43, '出口市场占有率50强', '2007', '1290643471.jpg', '1290643471_s.jpg'),
(44, '出口市场占有率300强', '2007', '1290643485.jpg', '1290643485_s.jpg'),
(45, 'CERTFICATE', '2007', '1290643496.jpg', '1290643496_s.jpg'),
(46, '管理体系认证证书', '2007', '1290643507.jpg', '1290643507_s.jpg'),
(58, '1', '2008', '1290655581.jpg', '1290655581_s.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_imageshow`
--

CREATE TABLE IF NOT EXISTS `tbl_imageshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `simage` varchar(256) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_page_imageShow` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `tbl_imageshow`
--

INSERT INTO `tbl_imageshow` (`id`, `name`, `image`, `simage`, `page_id`) VALUES
(8, '环境设备', '1290669837.jpg', '1290669837_s.jpg', 10),
(9, '环境设备', '1290669843.jpg', '1290669843_s.jpg', 10),
(10, '环境设备', '1290669849.jpg', '1290669849_s.jpg', 10),
(11, '环境设备', '1290669854.jpg', '1290669854_s.jpg', 10),
(12, '环境设备', '1290669858.jpg', '1290669858_s.jpg', 10),
(13, '环境设备', '1290669865.jpg', '1290669865_s.jpg', 10),
(14, '环境设备', '1290669870.jpg', '1290669870_s.jpg', 10),
(15, '环境设备', '1290669875.jpg', '1290669875_s.jpg', 10),
(16, '环境设备', '1290669880.jpg', '1290669880_s.jpg', 10),
(17, '环境设备', '1290669885.jpg', '1290669885_s.jpg', 10),
(18, '环境设备', '1290669895.jpg', '1290669895_s.jpg', 10),
(19, '环境设备', '1290669900.jpg', '1290669900_s.jpg', 10),
(20, '环境设备', '1290669907.jpg', '1290669907_s.jpg', 10),
(21, '环境设备', '1290669912.jpg', '1290669912_s.jpg', 10),
(22, '环境设备', '1290669917.jpg', '1290669917_s.jpg', 10),
(23, '环境设备', '1290670023.jpg', '1290670023_s.jpg', 10),
(24, '环境设备', '1290670028.jpg', '1290670028_s.jpg', 10),
(25, '环境设备', '1290670033.jpg', '1290670033_s.jpg', 10);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_job`
--

CREATE TABLE IF NOT EXISTS `tbl_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` varchar(128) NOT NULL,
  `education` varchar(128) NOT NULL,
  `work_age` varchar(128) NOT NULL,
  `profession` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tbl_job`
--

INSERT INTO `tbl_job` (`id`, `name`, `sex`, `age`, `education`, `work_age`, `profession`, `description`, `create_date`) VALUES
(1, '外形设计师', 2, '22岁以上', '大专以上', '1年以上', '美术类', '<p>1、有灵感，会使用Rhinoceros/3DMAX/PROE等三维设计软件，并具有一定手绘能力；<br />\r\n2、有卫浴工作经验者优先；<br />\r\n3、具有一定的油泥制作模型制作。</p>\r\n<p>邮箱：<a href="mailto:joyouhr@joyou.net">joyouhr@joyou.net</a>&nbsp; 联系电话：0595-86187878&nbsp;&nbsp; 联系人：余小姐</p>', '2010-11-25'),
(2, '助理工程师', 2, '22岁以上', '大专以上', '无', '机械/模具制造', '<p>1、精通PRO/E、CAD等设计软件；<br />\r\n2、有经验者优先。</p>\r\n<p>邮箱：<a href="mailto:joyouhr@joyou.net">joyouhr@joyou.net</a>&nbsp; 联系电话：0595-86187878&nbsp;&nbsp; 联系人：余小姐</p>', '2010-11-25');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_page`
--

CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `path` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `keywords` text,
  `description` text,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `title`, `path`, `content`, `keywords`, `description`, `type`) VALUES
(1, '关于中宇', 'AHOUR US', 'about/index', '<ul class="aboutpic">     <li><img alt="" src="/demo/images/about_pic01.jpg" /></li>     <li><img alt="" src="/demo/images/about_pic02.jpg" /></li> </ul> <h6><img alt="" src="/demo/images/arrow04.gif" /> 集团概述</h6> <p>中宇设计、生产和销售水龙头和其他卫浴产品。以自主品牌形式销售的产品类别主要分为：浴室水龙头、厨房水龙头、淋浴产品、其他浴室产品及其他水龙头和卫浴五金产品。</p> <p>中宇在中国以其自有品牌销售其产品，并是欧美及一些新兴发展国家的国际卫浴公司、大批发商及贸易公司的供货商。</p> <p>中宇在中国已建立了广泛的零售分销网络。运营部门包括其两家生产工厂都位于中国福建的南安市。</p> <script type="text/javascript">flash("/demo/images/swf/about.swf","660","420","");</script>', ',淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 0),
(2, '发展战略', 'Strategy', 'about/strategy', '<ul class="aboutpic">\r\n    <li><img src="http://www.joyou.com.cn/template/images/condition_pic01.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/condition_pic02.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/condition_pic03.jpg" alt="" /></li>\r\n</ul>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 中宇追求下列战略目标</h6>\r\n<p>&bull; 通过加强中宇品牌及继续扩张其国内分销网络的方式，受益于中国卫浴产品市场预<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期的增长</p>\r\n<p>&bull; 通过自主生产全面的卫浴产品范围，扩大中宇的价值链</p>\r\n<p>&bull; 进一步增加产能及参与中国卫浴行业的整合</p>\r\n<p>&bull; 以中宇自主品牌产品，进入海外卫浴市场</p>\r\n<p>&bull; 重点进一步放在研发和设计能力上</p>', '中宇卫浴,龙头篇,淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。\r\n', 0),
(3, '成长历程', 'History', 'about/history', '<ul class="aboutpic">\r\n    <li><img src="http://www.joyou.com.cn/template/images/brand_pic01.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/brand_pic02.jpg" alt="" /></li>\r\n</ul>\r\n<ul class="courselist">\r\n    <li><span>1988年</span>\r\n    <div>创办公司前身：福建南安福新水暖器材厂</div>\r\n    </li>\r\n    <li><span>1995年</span>\r\n    <div>中宇商标注册成功</div>\r\n    </li>\r\n    <li><span>1998年</span>\r\n    <div>中宇获得ISO9002国际质量体系认证</div>\r\n    </li>\r\n    <li><span>2003年</span>\r\n    <div>中宇业务重点为OEM</div>\r\n    </li>\r\n    <li><span>2005年</span>\r\n    <div>被评为&ldquo;中国名牌&rdquo;</div>\r\n    </li>\r\n    <li><span>2006年</span>\r\n    <div>战略转向在中国国内市场分销自有品牌产品及建立国内分销网络</div>\r\n    </li>\r\n    <li><span>2007年</span>\r\n    <div>中宇成立新厂，并新增一条水龙头生产线</div>\r\n    </li>\r\n    <li><span>2008年</span>\r\n    <div>赞助北京奥运会，销售收入增长超过200%</div>\r\n    </li>\r\n    <li><span>2009年</span>\r\n    <div>分销网络中的零售网点超过2000家；前8个月的自主品牌销售收入占总销售收入的75%</div>\r\n    </li>\r\n</ul>\r\n<p>&nbsp;</p>', ',淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 0),
(4, '组织架构', 'Organization', 'about/organization', '<div class="org"><img src="http://www.joyou.com.cn/template/images/org.jpg" alt="" /></div>\r\n<p>&nbsp;</p>', ',淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 0),
(5, '企业文化', 'Culture', 'about/culture', '<ul class="aboutpic">\r\n    <li><img src="http://www.joyou.com.cn/template/images/culture_pic01.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/culture_pic02.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/culture_pic03.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/culture_pic04.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/culture_pic05.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/culture_pic06.jpg" alt="" /></li>\r\n</ul>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 核心理念</h6>\r\n<p>核心打造 技术领先 以人为本 诚信经营 以质取胜</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 企业价值观</h6>\r\n<p>谋求企业永续经营和发展 为员工创造机会 为公司和社会创造效益</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 品牌广告语</h6>\r\n<p>尊荣水生活</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 用人理念</h6>\r\n<p>尊重人才 用好人才</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 质量方针</h6>\r\n<p>用户至上 市场为尊 教育培训 技术深耕</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 管理理念</h6>\r\n<p>规范管理 持续改进 追求卓越</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 竞争理念</h6>\r\n<p>力求寻找高于对手的差异化</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 开发理念</h6>\r\n<p>以市场需求为导向</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 技术创新理念</h6>\r\n<p>技术是根 创新是魂</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 合作理念</h6>\r\n<p>双赢来源于良好的品质和信誉</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 企业精神</h6>\r\n<p>健康 希望 忠诚 快乐 互助</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 生存理念</h6>\r\n<p>居安思危 不进则退</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 品牌目标</h6>\r\n<p>打造国内一流 全球知名的国际性卫浴品牌</p>', ',淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 0),
(6, '视频展播', 'Video', 'about/video', '<p>&nbsp;</p>\r\n<div style="margin-top: 30px; text-align: center;" class="tav">\r\n<p id="player2"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.</p>\r\n</div>', '', '', 0),
(7, '加盟条件', 'Join Conditions', 'sales/conditions', '<ul class="aboutpic">\r\n    <li><img src="http://www.joyou.com.cn/template/images/condition_pic01.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/condition_pic02.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/condition_pic03.jpg" alt="" /></li>\r\n</ul>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 加盟条件</h6>\r\n<p>1、有一定的经营场所，及与其经营目标相适应的仓储设施。</p>\r\n<p>2、有一定的经营资金<span class="redfont">（特大城市经销商150万元以<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上、省级市场经销商100万元以上、地级市场经销商50万元以上）</span>。</p>\r\n<p>3、有经营公司产品所需要的办公设置。</p>\r\n<p>4、交纳一定的保证金<span class="redfont">（特大城市经销商15-20万元以上，省级市场经销商10万元以<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上、地级市场经销商5万元以上）</span>。</p>\r\n<p>5、必须配备一定的业务人员、售后服务人员、导购人员。</p>\r\n<p>6、必须开设一家专卖店，作为向分销商及消费者展示公司产品的平台<span class="redfont">（特大城市经<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;销商120平方米以上、省级经销商80平方米以上、地级市场经销商60平方米以<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上）</span>。</p>\r\n<p>7、必须在所在的经营场所附近或人流量集中的地段，投入一定的户外广告。</p>\r\n<p>8、有一定的分销网络。</p>\r\n<p>9、必须根据公司的区域发展计划，在经销的区域内完成指定的销售量。</p>', '中宇卫浴,龙头篇,淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 0),
(8, '加盟流程', 'Join Process', 'sales/process', '<div class="aboutxt"><img src="http://www.joyou.com.cn/template/images/processpic.jpg" alt="" />\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 申请加盟</h6>\r\n<p>申请人通过咨询区域配送中心了解中宇品牌的经营方向，了解总公司对新店开张的要求、标准和程序；</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 提供资料</h6>\r\n<p>申请人向区域配送中心提供如下资料：A、申请人如实填写的《中宇卫浴加盟申请表》；B、申请人身份证复印件（附申请表后）；C、资金实力证明资料；</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 公司审批</h6>\r\n<p>区域配送中心整理审查并签署意见，填写《加盟商综合评估表》，上交区域经理； 区域经理审查并在《加盟商综合评估表》上签署意见后将《中宇卫浴加盟申请表》、《加盟商综合评估表》及开店所需资料上报市场部；</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 批准加盟</h6>\r\n<p>市场部批准后，由经理签署意见决定是否开店。</p>\r\n<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 进货开业</h6>\r\n<p>市场部批准后，由经理签署意见决定是否开店； 申请方在市场部企划人员指导下按中宇终端标准装修。</p>\r\n</div>\r\n<p>&nbsp;</p>', '中宇卫浴,龙头篇,淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 0),
(9, '联系我们', 'contact', 'about/contact', '<div class="aboutxt">\r\n<h5 class="tit">&nbsp;</h5>\r\n<ul class="aboutpic">\r\n    <li><img src="http://www.joyou.com.cn/template/images/brand_pic01.jpg" alt="" /></li>\r\n    <li><img src="http://www.joyou.com.cn/template/images/brand_pic02.jpg" alt="" /></li>\r\n</ul>\r\n<h3 class="contact_tit">中宇建材集团有限公司</h3>\r\n<p>地址:中国福建省南安市仑苍镇中宇工业园</p>\r\n<p>电话：+86-595-86188888</p>\r\n<p>客户服务热线：+86-400-880-2789</p>\r\n<p>传真：+86-595-86146689</p>\r\n<p>邮箱：</p>\r\n<p>网址： <a href="http://www.joyou.com.cn/">www.joyou.com.cn</a></p>\r\n</div>\r\n<p>&nbsp;</p>', '中宇卫浴,龙头篇,淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 0),
(10, '生产与质量', 'Quality', 'about/quality', '<h6><img src="http://www.joyou.com.cn/template/images/arrow04.gif" alt="" /> 生产与质量</h6>\r\n<p>中宇在国际和国内卫浴产品市场都占有一定份额，中宇产品质量高，安全可靠，功能齐全，享有盛誉。中宇在为国际OEM和ODM客户生产水龙头和其他铜 制卫浴产品方面，积累了极其丰富的经验，对于国际卫浴产品企业的设计和质量要求具有非常深刻的了解，这也对中宇研发自主生产技术和质量监控系统有所助益。</p>\r\n<p>中宇的产品符合欧美设计和质量标准，并领先于其国内竞争者。中宇通过了ISO14001：2004环境管理认证以及ISO9001：2000质量管理认证。中宇产品符合欧洲和北美国家的产业标准。</p>\r\n<p>中宇采用先进的生产设备，能够在有效降低成本的条件下生产高质量的产品。</p>\r\n<p>中宇的研发和设计专业知识对于公司的未来成功和品牌发展，以及为消费者提供更高端的产品具有至关重要的作用。</p>', ',淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件', '中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_sitemap`
--

CREATE TABLE IF NOT EXISTS `tbl_sitemap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `path` varchar(128) NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `tbl_sitemap`
--

INSERT INTO `tbl_sitemap` (`id`, `name`, `path`, `parent`) VALUES
(1, 'HOME', 'home/index', 0),
(2, 'ABOUT', 'about/index', 0),
(3, 'MANAGEMENT', 'about/management', 2),
(4, 'HONOR', 'about/honor', 2),
(5, 'STRATEGY', 'about/strategy', 2),
(6, 'HISTORY', 'about/history', 2),
(7, 'ORGANIZATION', 'about/organization', 2),
(8, 'CULTURE', 'about/culture', 2),
(9, 'QUALITY', 'about/quality', 2),
(10, 'JOBS', 'about/jobs', 2),
(11, 'VIDEO', 'about/video', 2),
(12, 'NEWS', 'news/index', 0),
(13, 'INDUSTRY', 'news/industry', 12),
(14, 'PRODUCT', 'product/index', 0),
(15, 'NEW', 'product/new', 14),
(16, 'EXPERIENCE', 'product/experience', 14),
(17, 'SALES', 'sales/index', 0),
(18, 'TERMINAL', 'sales/terminal', 17),
(19, 'CASE', 'sales/case', 17),
(20, 'BRAND', 'sales/brand', 17),
(21, 'CONDITIONS', 'sales/conditions', 17),
(22, 'PROCESS', 'sales/process', 17),
(23, 'SERVICE', 'service/knowledge', 0),
(24, 'KNOWLEDGE', 'service/knowledge', 23),
(25, 'CONTRACT', 'service/contract', 23),
(26, 'DEALER', 'dealer/index', 0),
(27, 'LOGIN', 'dealer/login', 26);

--
-- 限制导出的表
--

--
-- 限制表 `tbl_imageshow`
--
ALTER TABLE `tbl_imageshow`
  ADD CONSTRAINT `FK_page_imageShow` FOREIGN KEY (`page_id`) REFERENCES `tbl_page` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
