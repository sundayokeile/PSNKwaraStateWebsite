-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2019 at 10:43 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpsnkwara`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`, `date`) VALUES
('adekmos', 'adekmos', '06/11/2017'),
('suntosolutions', 'suntosolutions', '16/10/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bulletin`
--

CREATE TABLE `tbl_bulletin` (
  `id` int(12) NOT NULL,
  `date` varchar(15) NOT NULL,
  `img_news` varchar(200) NOT NULL,
  `img_bulletin` varchar(100) NOT NULL,
  `headline` text NOT NULL,
  `content` text NOT NULL,
  `postby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bulletin`
--

INSERT INTO `tbl_bulletin` (`id`, `date`, `img_news`, `img_bulletin`, `headline`, `content`, `postby`) VALUES
(1, '07/March/2018', 'user/news_img/dele in Church.jpg', 'news_img/dele in Church.jpg', 'NAFDAC cautions media against illegal advertisement of pharmaceutical products', 'The National Agency for Food and Drug Administration and Control (NAFDAC) has cautioned the media over the advertisement of pharmaceutical products without confirmation from the agency.<br><br>The Director General of the agency, Prof. Christianah Mojisola Adeyeye disclosed this at a press briefing, while its arraigned suspected drug peddlers over sales and distribution of falsified pharmaceutical product in Lagos state. She said, one of the media outfits had consistently advertised a listed herbal aphrodisiac medicine (Libigal and univasur herbal capsule) manufactured by Kolaq Herbs Limited, Ogun state, upon which, after investigation, it was discovered that the listing approval of the product had expired in October 2006.<br><br>She noted that the company was sanctioned in 2016 and has refused to comply with the agencyâ€™s regulation. According to her, the revenue of registered companies whose drugs are being falsified is compromised, impacting the economy negatively. â€œThese drugs have negative impact on the health of the takers or consumers and have caused the death of many Nigerians and newborns,â€ she said.<br><br>The Director General, however, urged the media to desist from illegal advertisement of products not confirmed by the agency, as it is against the Food and Drug Act. Speaking on drug hawkers in the state, the Director for Investigation and Enforcement, Kingsley Ejiofor said the agency has intensified effort at ridding the country of the menace of drug hawking by partnering with the National Union of Road Transport Workers (NURTW) to drive awareness on the harmful effect of the drugs to every car park, which is part of the agencyâ€™s mandate to safeguard the health of the people.<br><br>', 'admin'),
(2, '07/March/2018', 'user/news_img/drugs.jpg', 'news_img/drugs.jpg', 'Common antibiotic linked to higher death rates for heart disease patients', 'A common antibiotic used to treat infections could be deadly for heart disease patients years after taking the drug, the United States Food and Drug Administration (FDA) has warned. Clarithromycin, sold under the brand name Biaxin, is used to treat many skin, ear, sinus and lung infections. But a 10-year study revealed that people suffering from heart disease that took a two-week course of it had a significantly higher risk of heart attack or sudden death a year or more after they were treated for infection.<br><br>The agency first cautioned against clarithromycin back in 2005, but its long-term study confirms that the antibiotic could do far more harm than good for patients with heart problems. Clarithromycin belongs to a family of antibiotics called macrolides, which fight infections by blocking protein production in bacteria. Both clarithromycin and azithromycin â€“ another common drug in the same family, sold as Z-Pak â€“ are broad-spectrum antibiotics, meaning that work against many infections.<br><br>A previous 14-year study of Z-Pak found that taking it more than doubled the risk of death for heart disease patients. Clarithromycin has been used with FDA-approval for the last 25 years, and typically comes with only mild side effects, like stomach pain, nausea, diarrhea or a bad taste in the mouth. But recent research has linked them both to faster heart rates, heart attacks and risks of sudden death.<br><br>The FDA became aware of this pattern more than a decade ago, initiating long-term studies to test whether or not there was a solid link between clarithromycin and deaths in people with heart disease. It issued a preliminary warning in 2005, and continued to see a notably higher rate of deaths among heart disease patients that had taken the drug for two weeks than in those that took a placebo in its clinical trial. The trial did not explore how exactly the antibiotic interacts with the bodies of people with heart disease to become potentially fatal.<br><br>Respiratory infections have been shown, in some studies, to raise the risk of heart attack by as much as 17 percent, so it is key that heart disease patients get effective treatment for them quickly, but the FDAâ€™s trial suggests that clarithromycin could pose a similar risk to infection itself. â€œHealth care professionals should be aware of these significant risks and weigh the benefits and risks of clarithromycin before prescribing it to any patient, particularly in patients with heart disease and even for short periods, and consider using other available antibiotics,â€ the FDA wrote.<br><br>', 'PSN news'),
(3, '07/March/2018', 'user/news_img/womendrug.jpg', 'news_img/womendrug.jpg', 'ICYMI: Codeine abuse rampant among married women â€“ CCRWG Chairman, Odeku', 'The Chairman of the <b><i>Codeine Control and Other Related Matters Working Group</i></b>, Prof. Oluwatoyin Odeku, has raised the alarm over the widespread abuse of codeine and other controlled medicines in many parts of the country. Odeku noted, in an interview with our correspondent, that the abuse of the substance cut across all ages and social strata.<br><br>She said, "The problem is going deeper into the society by the day. There are reports of drug abuse among secondary school pupils and students in tertiary institutions. The use of codeine containing cough syrup has increased even among married women." She said the development was due to the fact that many users of the drug, including married women, were always in need of some relief or a way out of their problems.<br><br>Explaining how people get easily hooked to drugs, Odeku said, â€œA young man addicted to codeine consumes up to six bottles of the substance contained in a cough syrup every day. When he realises that it is not enough to achieve his desired state of euphoria, he starts making a cocktail with spirits and other prescription drugs.<br><br>"Most abusers of drugs do not think of the negative impact on their bodies. All drugs are poisons. Drug misuse can completely alter the normal physiological functions of the body and it takes more than 48 hours for some drugs to be eliminated from the body." Odeku said the CCRWG would collaborate with other agencies and civil societies to tackle the menace posed by codeine abuse in the society, adding that it would adopt an aggressive public enlightenment strategy on campuses to warn Nigerian youths on the dangers associated with drug abuse.<br><br>Asked how the group intended to monitor the supply of the drug in the country, she said, "The working group actually consists of regulatory agencies and relevant stakeholders that are involved in drug manufacture, distribution and regulation. Part of the terms of reference is to look at the supply chain and come up with recommendations on how the drug supply and distribution systems can be managed to properly control the sale of controlled substances. It will also involve the design of pharmacy screening, monitoring and surveillance systems especially at the level of dispensing to drug users.<br><br>â€œWe are still working on the strategies that will be adopted. We have to look at the problem holistically and come up with our recommendations. The Minister of Health, Prof. Isaac Adewole, has given us six weeks to come up with an interim report. That is what we are still doing.â€™â€™ She called on policy makers, civil and non-governmental organisations, and other<br>relevant stakeholders to work together with the group to ultimately overcome the<br>challenge.<br>', 'admin'),
(4, '07/March/2018', 'user/news_img/bleach.jpg', 'news_img/bleach.jpg', 'Why You Must Stay Away from Bleaching Cream - Dermatologists', 'Adeyemi told the News Agency of Nigeria (NAN) in Lagos that bleached skin under the pretext of beautifying it was prone to skin cancer, hypertension, and diabetics among other diseases. NAN reports that several people were in the habit of applying various body creams on their skins to make them look more beautiful without considering their negative effects.<br><br>He said that skin-lightning creams used in bleaching process contained steroid and hydroquinone which could adversely affect human skins. â€œThe steroid they use cause accumulation of fluid in the body which can cause cushioned syndrome. In this case, they can become hypertensive and end up having renal problem. â€œA lot of things ranging from the skin effect to systemic effect, affect people who are using hydroquinone.<br><br>â€œWhen they tone, what happens is that some of these products especially the hydroquinone that is inside the product basically suppresses the melanin production. â€œIt makes sure that the skin thickness is thinned out. The strength of the skin is what actually thins out which is the dermis because the skin has three layers. â€œThe dermis has the strength of about 95 per cent on its own. â€œWhen hydroquinone is used, the dermis is what thins out, meaning that the structural support of the skin will gradually be lost,â€™â€™ he said.<br>&nbsp;<br>The dermatologist said that those who engaged in bleaching risked their nails turning brown and were prone to suffering from body odour. They were liable to profuse sweat, hot feelings and discomfort during the dry season, he said. Adeyemi explained to NAN that the original skin of every human being was for body<br>protection, adding that such skin would lose its immunity to protect the body once bleached.<br><br>He advised those who used skin toner or bleaching creams to see a professional aesthetic medicine physician, dermatologist on how to manage their skins. Another dermatologist, Mrs Oluwatobi Adeyemo, also said that bleaching could be very dangerous to the human skins. She said that bleachers were prone to infection due to the compositions of the bleaching cream.<br><br>Adeyemo said that for any injury on the skin of a bleaching person would almost become impossible to heal because the skin had become weak. â€œEven when they have an open wound and it is taken to the hospital, it might be difficult for the wound to close up. â€œBleaching creams make the vein so obvious that you can almost see them through the skin, compared to the people who have thick dermis, it makes the knuckles darker."<br><br>', 'PharmaTimes'),
(5, '07/March/2018', 'user/news_img/delist.jpg', 'news_img/delist.jpg', 'NAFDAC Set to Blacklist Countries with Substandard Products in Nigeria', 'The Director General, National Agency for Food and Drug Administration and Control (NAFDAC) Professor Mojisola Adeyeye has sent a warning signal to all importers of substandard foods and drugs related products into the country, saying the agency will not allow the country to be a dumping ground for such products.<br><br>Prof. Adeyeye, who spoke during a Breakfast Meeting organised by the American Business Council, noted that it will no longer be business as usual forall foreign countries, especially the Asian countries, whose inferior and adulterated drugs and foods have flooded the Nigerian markets hitherto, adding that the agency will soon commence prosecuting any nation found culprit of this act.<br><br>Her words:â€œWe are going to blacklist many countries, for instance, the Asian countries, which are in the habit of sending substandard products to Nigeria, because the country has been inundated with narcotic products, in fact, we will possibly prosecute any foreign company found guilty of the act henceforthâ€.<br><br>The NAFDAC DG, who briefed the audience on the new development in the agency, in the area of ICT, said they are setting up electronic platforms for all transactions, ranging from e-registration, e-clearance, e-permit, in such a way that companies can properly relate with them without face- to- face communication, which will make their work easier and faster.<br><br>She further assured stakeholders and investors on the best performance of NAFDAC during her tenure, stating that although they are civil servants, but they donâ€™t work like civil service organisations, because NAFDAC is deadline crazy under her administration.<br>', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dues`
--

CREATE TABLE `tbl_dues` (
  `name` text NOT NULL,
  `bankname` text NOT NULL,
  `tellerno` varchar(20) NOT NULL,
  `paymentdate` varchar(15) NOT NULL,
  `dues` varchar(50) NOT NULL,
  `amountpayed` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `datesaved` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dues`
--

INSERT INTO `tbl_dues` (`name`, `bankname`, `tellerno`, `paymentdate`, `dues`, `amountpayed`, `username`, `datesaved`) VALUES
('Tomiwa Rotimi R', 'UBA', '00001', '10/04/2017', 'ALPS/YPG', 1200, 'abisola', '10/05/2017'),
('Tomiwa Rotimi Lovethe', 'Sky Bank Ghallenge, Ibadan', '0015411', '10/03/2017', 'ALPS/YPG', 12000, 'abisola', '10/05/2017'),
('sunday daniel M', 'UBA', '0123', '10/03/2017', 'AHPN', 9900, 'abisola', '10/03/2017'),
('Tomiwa Rotimi Lovethe', 'UBA', '121', '10/07/2017', 'AHPN', 12345, 'abisola', '10/03/2017'),
('Samsom', 'Sterling Bank', 'AA234', '10/18/2018', 'PSN NATIONAL CAPITATION', 20000, 'samsom', '10/18/2017'),
('Roland Tomiwa', 'Sterling Bank', 'AA234567', '10/16/2017', 'PSN National Capitation', 10000, 'abisola', '10/16/2017'),
('Sunday keiljj', 'Sterling Bank', 'g454gh', '10/02/2017', 'NAIP', 1500, 'abisola', '10/10/2017'),
('Tomiwa Rotimi', 'hghg', 'hh', '10/03/2017', 'ACPN', 135, 'abisola', '10/03/2017'),
('Samson', 'Sterling Bank PLC, Ibadan', 'MN1213', '03/08/2017', 'ALPS', 1000, '', '12/October/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `title` tinytext NOT NULL,
  `surname` tinytext NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `sex` tinytext NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `maritalstatus` tinytext NOT NULL,
  `wedanni` tinytext NOT NULL,
  `homeaddress` tinytext NOT NULL,
  `officeaddress` tinytext NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `alternateno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `technicalgroup` varchar(50) NOT NULL,
  `interestgroup` varchar(50) NOT NULL,
  `pcnregno` varchar(10) NOT NULL,
  `schoolattended` tinytext NOT NULL,
  `yearofgraduation` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`title`, `surname`, `firstname`, `lastname`, `sex`, `dateofbirth`, `maritalstatus`, `wedanni`, `homeaddress`, `officeaddress`, `phoneno`, `alternateno`, `email`, `technicalgroup`, `interestgroup`, `pcnregno`, `schoolattended`, `yearofgraduation`, `username`, `password`, `date`) VALUES
('NAIJA', 'NAIJA', 'NAIJA', 'NAIJA', 'nil', 'nil', 'nil', 'nil', 'NAIJA', 'NAIJA', '02145', 'nil', 'nil', 'nil', 'nil', '02315', 'nil', 'nil', 'naija', 'naija', ''),
('Ms', 'Adesua', 'Tolu', 'Tolu', 'Female', '03/12/1981', 'Married', '01/10/2018', 'olunlade', 'olunlade', '08066883322', '08066883322', 'adesua_tolu@gmail.com', 'YPG', 'NAPA', '001211', 'UNILORIN', '2000', 'adesua', 'adesua', ''),
('Pharm', 'Adetutu', 'Tosin', 'Ademola', 'nil', 'nil', 'nil', 'nil', 'Ilorin South, Kwara State', 'Ilorin South, Kwara State', '08066332211', 'nil', 'nil', 'nil', 'nil', '09876', 'nil', 'nil', 'detutu', 'detutu', ''),
('Mr', 'Ikuforiji', 'Daniel', 'Memphis', 'nil', 'nil', 'nil', 'nil', 'nil', 'nil', '01236548', 'nil', 'mem.phos@gmail.com', 'YPG', 'nil', '98012', 'nil', 'nil', 'memphis', 'memphis123', '05/02/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minutes`
--

CREATE TABLE `tbl_minutes` (
  `pdfinput` varchar(255) NOT NULL,
  `pathname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `datesaved` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_minutes`
--

INSERT INTO `tbl_minutes` (`pdfinput`, `pathname`, `username`, `date`, `datesaved`) VALUES
('General meeting August 2017.pdf', 'uploadpdf/General meeting August 2017.pdf', 'suntosolutions', 'August/2017', '23/October/2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_bulletin`
--
ALTER TABLE `tbl_bulletin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dues`
--
ALTER TABLE `tbl_dues`
  ADD PRIMARY KEY (`tellerno`);

--
-- Indexes for table `tbl_minutes`
--
ALTER TABLE `tbl_minutes`
  ADD PRIMARY KEY (`pdfinput`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bulletin`
--
ALTER TABLE `tbl_bulletin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
