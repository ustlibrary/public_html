-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2015 at 06:17 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a4476463_ust`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `s.no` int(254) NOT NULL,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `details` varchar(254) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`s.no`, `name`, `contact`, `details`) VALUES
(1, 'Ashish Kumar Pandey', '9911262318', 'Founder mob. no.'),
(2, 'A.c Dealer', '9811594955', 'mukherjee nagar.. rent a.c,freeze and many things'),
(3, 'Water', '+91-7503072115', 'water for library(mukherjee nagar)'),
(4, 'Aman kumar', '9582250753', 'Pumplet Distributter(mukherjee Nagar)'),
(5, 'vikas sharma', '9968748460', 'Grin graphics'),
(6, 'asif ali', '9015758842', 'pamplet distributer '),
(7, 'Nikhil', '9717440798', 'Admiossion Labour'),
(8, 'Ali jan', '9871568579', 'Carpenter'),
(9, 'Lakshya Thakur', '9971853397', 'Pumplet Distributter(mukherjee Nagar)(7 cnfrm)'),
(10, 'ram', '9540721366', 'mistri'),
(11, 'Pankaj tiwari', '9560042165', 'Phylosphy (Discussion student)'),
(12, 'dristi', '8130392359', 'mains test'),
(13, 'Prabhakar', '9015068842', '1pm-after');

-- --------------------------------------------------------

--
-- Table structure for table `headlines`
--

CREATE TABLE IF NOT EXISTS `headlines` (
  `s.no` int(254) NOT NULL,
  `date` varchar(50) NOT NULL,
  `h1` varchar(254) NOT NULL,
  `h2` varchar(254) NOT NULL,
  `h3` varchar(254) NOT NULL,
  `h4` varchar(254) NOT NULL,
  `h5` varchar(254) NOT NULL,
  `h6` varchar(254) NOT NULL,
  `h7` varchar(254) NOT NULL,
  `h8` varchar(254) NOT NULL,
  `h9` varchar(254) NOT NULL,
  `h10` varchar(254) NOT NULL,
  `h11` varchar(254) NOT NULL,
  `h12` varchar(254) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headlines`
--

INSERT INTO `headlines` (`s.no`, `date`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `h11`, `h12`) VALUES
(3, '01/09/2015', 'India pitches for anti-terror treaty', ' First HIV/AIDS literate district', 'Death penalty ''constitutionally unsustainable'': Law Commission', 'â€˜Gandhi-Mandelaâ€™ Cricket Series', 'Cancer a major health risk in South Asia', 'Singapore lifted ban on HIV-positive foreigners', 'Commonwealth parliamentary meet shifted to London', 'Genetic stability key to switching off ageing', 'Alien living beings on Pluto likely', '', '', ''),
(4, '02/09/2015', 'Narendra Modi''s visit: Silicon Valley riven by left-right row', 'Indrani changes stand, admits to role in murder', 'Mother''s milk for only 44% of newborns', '8 killed as Bills trigger fury in Manipur', 'World markets plunge on fears of weaker growth', 'Father of N-bomb stalled strike on Pak nuke sites', 'SC: No disabled quota in promotion', 'Libya''s Official Government Bans Yemenis, Iranians, Pakistanis From Entry', 'Army chief General Suhag says India needs to be ready for short wars', 'India''s Security Environment Complex: Defence Minister Manohar Parrikar', 'Call drop: panel to submit report before Winter Session', '4000-MW thermal plant coming up at Ramanathapuram'),
(6, '03/09/2015', 'Govt plans unilateral OROP ''deal'' this week', 'Over 1,000 arrested in Bengal amid violence during Trade Unionsâ€™ countrywide strike', '69 small oilfields on the block', 'China has established its presence across PoK', 'World Bank to fund Hooghly riverfront revamp', 'Buddhist sculptures found in UP village', 'Decision on OROP likely before Bihar poll dates are announced', 'Even before take-off, Mohali international airport lands in name controversy', 'Found: Oldest leukaemia case in 7000-year-old skeleton', 'Emails more romantic than a phone call: Study', 'The monsoon session of Telangana Assembly will commence on September 23 .', 'Wasp poison shown to kill cancer cells selectively'),
(7, '04/09/2015', 'Chennai-Mangalore Express derails, 34 injured', 'Mumbai tops world in terror risk to GDP', 'Kashmir, terror dominate agenda', 'G-20 discussions set to focus on impact of yuan devaluation', 'MoU with ISI dropped, says Karzai', 'Aurangzeb Road is now Abdul Kalam Road', '50% in Asia-Pacific hold positive views of India''', '11 Indians under detention in UAE for IS ''links''', 'Animals, not catastrophe, caused Earth''s first mass extinction', 'Indonesia to launch satellite from India', 'Earth now home to 3 trillion trees', 'Fund crunch could nip national nutrition mission in the bud'),
(8, '05/09/2015', 'Haryana faces 6th drought in 11yrs, Punjab 5th', 'RBI crisis fund short of target', 'Govt ready with OROP draft modalities', 'Modi government set to announce OROP with five-year reset clause', 'Women to get permanent commission in the Navy', 'National litigation policy will come within a month: Law Minister', 'Gopalakrishna takes charge as corporation Commissioner', 'PM to visit Bodh Gaya today', '''SC erred in junking decriminalization of gay sex''', 'Online buys may get costlier as Delhi slaps VAT', 'UAE-India target $75 billion investments', '`Climate change helped turn dog into a pet'''),
(9, '06/09/2015', 'G20, OECD issue new corporate governance code', 'Govt implements OROP', 'Stem cell results disheartening: Study', 'India among few bright spots in global economy, says IMF', 'INS Trikand to Participate in Exercise â€˜Konkan 2015â€™', 'Chandela wins silver in ISSF World Cup Finals', 'Chinese military to layoff 1.70 lakh officers: Report', 'EGS8p7: The farthest galaxy ever detected', 'Turkey knows better how many Indians are in IS: Syrian envoy', 'Rooney equals Charlton''s record of 49 goals', '''Kids made up 50% of refugee population in 2014''', 'Smart pill with benefits for the brain'),
(10, '07/09/2015', 'Patels now set eyes on Gujarat civic polls', 'India gets a count of its leopards: 12000-14000', '10,000 villagers correct river course in 5 yrs', 'India skips women, youth meets at G20', 'From October, parking in CBD will come at a price', 'Airlines fined Rs 55k for losing baggage 7 yrs ago', 'Early retirees eligible for OROP: Modi', 'Newspapers in Kashmir, PoK to share content', 'KCR to lead 16-member delegation for China today', 'BSF, Pak. RANGERS to MEET', 'NASA''s new spacecraft may hitchhike across galaxy', ' GSAT 6 successfully positioned in its orbit'),
(11, '07/09/2015', '1965 à¤µà¤¾à¤°à¤ƒ à¤œà¤¶à¥à¤¨ à¤®à¤¨à¤¾ à¤°à¤¹à¤¾ PAK,à¤†à¤°à¥à¤®à¥€ à¤šà¥€à¤« à¤¨à¥‡ à¤•à¤¹à¤¾- à¤­à¤¾à¤°à¤¤ à¤¨à¥‡ à¤šà¥à¤ªà¤•à¥‡ à¤¸à¥‡ à¤•à¤¿à¤¯à¤¾ à¤¥à¤¾ à¤…à¤Ÿà¥ˆà¤•', 'à¤¹à¥ˆà¤¦à¤°à¤¾à¤¬à¤¾à¤¦ à¤®à¥‡à¤‚ à¤¤à¥‡à¤œ à¤¬à¤¾à¤°à¤¿à¤¶ à¤¸à¥‡ à¤¬à¤¹à¥€ à¤•à¤ˆ à¤—à¤¾à¤¡à¤¼à¤¿à¤¯à¤¾à¤‚, à¤…à¤¸à¤® à¤®à¥‡à¤‚ à¤¬à¤¾à¤¢à¤¼ à¤¸à¥‡ à¤²à¤¾à¤–à¥‹à¤‚ à¤²à¥‹à¤— à¤¹à¥à¤ à¤¬à¥‡à¤¹à¤¾à¤²', 'OROP à¤†à¤‚à¤¦à¥‹à¤²à¤¨à¤•à¤¾à¤°à¤¿à¤¯à¥‹à¤‚ à¤¨à¥‡ à¤–à¤¤à¥à¤® à¤•à¥€ à¤…à¤¨à¤¿à¤¶à¥à¤šà¤¿à¤¤à¤•à¤¾à¤²à¥€à¤¨ à¤­à¥‚à¤– à¤¹à¤¡à¤¼à¤¤à¤¾à¤² ', 'à¤‡à¤‚à¤¦à¥à¤°à¤¾à¤£à¥€, à¤¸à¤‚à¤œà¥€à¤µ à¤”à¤° à¤¶à¥â€à¤¯à¤¾à¤® à¤•à¥€ à¤†à¤œ à¤–à¤¤à¥â€à¤® à¤¹à¥‹à¤—à¥€ à¤¹à¤¿à¤°à¤¾à¤¸à¤¤ à¤•à¥€ à¤…à¤µà¤§à¤¿, à¤•à¥‹à¤°à¥à¤Ÿ à¤®à¥‡à¤‚ à¤¹à¥‹à¤—à¥€ à¤ªà¥‡à¤¶à¥€', 'à¤¶à¥‡à¤¨ à¤µà¥‰à¤Ÿà¤¸à¤¨ à¤¨à¥‡ à¤Ÿà¥‡à¤¸à¥à¤Ÿ à¤•à¥à¤°à¤¿à¤•à¥‡à¤Ÿ à¤•à¥‹ à¤•à¤¹à¤¾ à¤…à¤²à¤µà¤¿à¤¦à¤¾', 'à¤ˆà¤ªà¥€à¤à¤«à¤“ à¤…à¤§à¤¿à¤•à¤¤à¤® à¤¬à¥€à¤®à¤¾ à¤•à¤µà¤° 5.5 à¤²à¤¾à¤– à¤°à¥ à¤•à¤°à¥‡à¤—à¤¾!', 'CYBER ATTACK : à¤°à¥‚à¤¸ à¤”à¤° à¤¯à¥‚à¤•à¥à¤°à¥‡à¤¨ à¤•à¥‡ à¤¨à¤¿à¤¶à¤¾à¤¨à¥‡ à¤ªà¤° à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤à¤Ÿà¥€à¤à¤® .', 'à¤…à¤¬ à¤¯à¥à¤µà¤¾ IAS à¤¸à¤‚à¤­à¤¾à¤²à¥‡à¤‚à¤—à¥‡ à¤¸à¥à¤µà¤šà¥à¤› à¤­à¤¾à¤°à¤¤ à¤…à¤­à¤¿à¤¯à¤¾à¤¨ à¤•à¥€ à¤•à¤®à¤¾à¤¨   à¤”à¤° à¤­à¥€...', 'à¤ªà¤¾à¤•à¤¿à¤¸à¥à¤¤à¤¾à¤¨ à¤•à¥€ à¤—à¥‹à¤²à¥€à¤¬à¤¾à¤°à¥€ à¤•à¤¾ à¤¦à¤¿à¤¯à¤¾ à¤œà¤¾à¤à¤—à¤¾ à¤•à¤°à¤¾à¤°à¤¾ à¤œà¤µà¤¾à¤¬: à¤°à¤¾à¤œà¤¨à¤¾à¤¥ -', 'à¤…à¤¬ à¤ªà¥‚à¤°à¥‡ à¤¦à¥‡à¤¶ à¤®à¥‡à¤‚ à¤¹à¥‹à¤—à¤¾ à¤†à¤‚à¤¦à¥‹à¤²à¤¨: à¤¹à¤¾à¤°à¥à¤¦à¤¿à¤• à¤ªà¤Ÿà¥‡à¤² ', 'à¤¸à¥â€à¤®à¤¾à¤°à¥à¤Ÿà¤«à¥‹à¤‚à¤¸ à¤ªà¤° 50GB à¤«à¥à¤°à¥€ à¤µà¤¨ à¤¡à¥à¤°à¤¾à¤‡à¤µ à¤¸à¥â€à¤Ÿà¥‹à¤°à¥‡à¤œ à¤²à¤¾à¤à¤—à¤¾ Intex -', 'à¤¬à¤¿à¤¹à¤¾à¤° à¤®à¥‡à¤‚ à¤¨à¤•à¥à¤¸à¤²à¤¿à¤¯à¥‹à¤‚ à¤¨à¥‡ à¤®à¤¾à¤‚à¤—à¥€ 55 à¤²à¤¾à¤– à¤•à¥€ à¤²à¥‡à¤µà¥€'),
(12, '08/09/2015', 'IAF to get mini drones for covert operations', 'Climate deal: India seeks debate on â€˜lifestylesâ€™', 'Coal scam: SC set to hear Manmohan Singhâ€™s plea', 'HC orders rape convict to pay Rs 1L to survivor, cuts sentence', 'Sheena Bora murder: 100% DNA match buries Indrani''s claim, strengthens murder case', 'Murray''s major QF streak ends with US Open loss to Anderson', 'Mitigating Indiaâ€™s future grey tsunami', 'Indiaâ€™s soft stand on tobacco draws fire', 'Use space sciences for common man: PM', 'Chinese, Italian doctors plan world''s first head transplant', 'French president warns UN climate talks could fail', '6 Army men get life term in Machil encounter case'),
(13, '08/09/2015', 'à¤œà¤°à¥à¤®à¤¨à¥€ à¤¨à¥‡ à¤¶à¤°à¤£à¤¾à¤°à¥à¤¥à¤¿à¤¯à¥‹à¤‚ à¤•à¥‡ à¤²à¤¿à¤ 6 à¤…à¤°à¤¬ à¤¯à¥‚à¤°à¥‹ à¤•à¤¾ à¤µà¤¾à¤¦à¤¾ à¤•à¤¿à¤¯à¤¾', 'à¤œà¤‚à¤— à¤¹à¥à¤ˆ à¤¤à¥‹ à¤­à¤¾à¤°à¤¤ à¤•à¥‹ à¤šà¥à¤•à¤¾à¤¨à¥€ à¤ªà¤¡à¤¼à¥‡à¤—à¥€ â€˜à¤¨à¤¾à¤•à¤¾à¤¬à¤¿à¤²à¥‡ à¤¬à¤°à¥à¤¦à¤¾à¤¶à¥à¤¤ à¤•à¥€à¤®à¤¤â€™: à¤ªà¤¾à¤•à¤¿à¤¸à¥à¤¤à¤¾à¤¨à¥€ à¤¸à¥‡à¤¨à¤¾ à¤ªà¥à¤°à¤®à¥à¤–', 'à¤¯à¥‚à¤à¤ˆ à¤®à¥‡à¤‚ à¤¦à¤¾à¤Šà¤¦ à¤ªà¤° à¤•à¤¸à¤¾ à¤¶à¤¿à¤•à¤‚à¤œà¤¾, 50 à¤¹à¤œà¤¾à¤° à¤•à¤°à¥‹à¤¡à¤¼ à¤•à¥€ 50 à¤¸à¤‚à¤ªà¤¤à¥â€à¤¿à¤¤à¤¯à¥‹à¤‚ à¤•à¥€ à¤œà¤¾à¤‚à¤š à¤¶à¥à¤°à¥‚ -', 'à¤ªà¤¾à¤•-à¤¬à¤¾à¤‚à¤—à¥à¤²à¤¾à¤¦à¥‡à¤¶ à¤•à¥‡ à¤¹à¤¿à¤‚à¤¦à¥à¤“à¤‚ à¤•à¥‹ à¤­à¤¾à¤°à¤¤ à¤¨à¥‡ à¤¦à¥€ à¤¬à¤¡à¤¼à¥€ à¤°à¤¾à¤¹à¤¤', 'à¤…à¤¨à¥‚à¤ à¤¾ à¤¹à¥‹à¤—à¤¾ à¤µà¤¿à¤¶à¥à¤µ à¤¹à¤¿à¤‚à¤¦à¥€ à¤¸à¤®à¥à¤®à¥‡à¤²à¤¨, à¤¤à¥ˆà¤¯à¤¾à¤°à¤¿à¤¯à¤¾à¤‚ à¤œà¥‹à¤°à¥‹à¤‚ à¤ªà¤°', 'à¤²à¤¾à¤²à¥‚ à¤ªà¥à¤°à¤¸à¤¾à¤¦ à¤•à¤¾ à¤Ÿà¥à¤µà¥€à¤Ÿ : à¤®à¥‹à¤¦à¥€ à¤°à¤¾à¤œ à¤®à¥‡à¤‚ à¤ªà¥à¤¯à¤¾à¤œ à¤¹à¥‹ à¤—à¤¯à¤¾ à¤…à¤¨à¤¾à¤° -', ' à¤¬à¤¾à¤¦à¤² à¤•à¥€ à¤šà¤¤à¥à¤°à¤¾à¤ˆ à¤ªà¤° à¤¸à¥à¤®à¥ƒà¤¤à¤¿ à¤¨à¥‡ à¤«à¥‡à¤°à¤¾ à¤ªà¤¾à¤¨à¥€ - ', 'à¤µà¤¾à¤˜à¤¾ à¤•à¥‡ à¤ªà¤¾à¤¸ à¤¦à¥‡à¤–à¤¾ à¤—à¤¯à¤¾ à¤¹à¤¾à¤«à¤¿à¤œ, à¤²à¤¶à¥à¤•à¤° à¤•à¥‡ à¤²à¤¿à¤ à¤œà¥à¤Ÿà¤¾ à¤°à¤¹à¤¾ à¤¥à¤¾ à¤«à¤‚à¤¡ -', 'à¤®à¤¾à¤¨à¤µ à¤¸à¤¿à¤° à¤•à¥‡ à¤¸à¤«à¤² à¤ªà¥à¤°à¤¤à¥à¤¯à¤¾à¤°à¥‹à¤ªà¤£ à¤•à¥€ à¤¤à¥ˆà¤¯à¤¾à¤°à¥€', 'à¤¸à¥à¤Ÿà¥€à¤µ à¤œà¥‰à¤¬à¥à¤¸ à¤•à¤¾ à¤¬à¤¨à¤¾à¤¯à¤¾ à¤ªà¤¹à¤²à¤¾ à¤•à¤‚à¤ªà¥à¤¯à¥‚à¤Ÿà¤° à¤¹à¥‹à¤—à¤¾ à¤¨à¥€à¤²à¤¾à¤®', 'à¤®à¥à¤¯à¥‚à¤œà¤¿à¤• à¤•à¤‚à¤ªà¥‹à¤œà¤° à¤†à¤¦à¥‡à¤¶ à¤¶à¥à¤°à¥€à¤µà¤¾à¤¸à¥à¤¤à¤µ à¤•à¤¾ à¤¨à¤¿à¤§à¤¨', 'à¤à¤¯à¤° à¤‡à¤‚à¤¡à¤¿à¤¯à¤¾ à¤•à¥‡ à¤µà¤¿à¤®à¤¾à¤¨ à¤®à¥‡à¤‚ à¤²à¤—à¥€ à¤†à¤—; à¤¦à¤¿à¤²à¥à¤²à¥€ à¤à¤¯à¤°à¤ªà¥‹à¤°à¥à¤Ÿ à¤ªà¤° à¤†à¤ªà¤¾à¤¤ à¤¸à¥à¤¥à¤¿à¤¤à¤¿ à¤®à¥‡à¤‚ à¤‰à¤¤à¤°à¤¾, 5 à¤¯à¤¾à¤¤à¥à¤°à¥€ à¤˜à¤¾à¤¯à¤²'),
(14, '09/09/2015', 'International Literacy Dayâ€“2015 Celebrated', 'India scores green points over West', 'e-version of Mahatama Gandhi''s works launched', 'Swiss govt discloses new name in India''s black money probe', 'Nuclear deals see power capacity hit 90%', '400-year-old hero stone found', 'Forbes Asia''s Heroes of Philanthropy list', 'Aus puts tough condition on uranium sale to India', 'Saudi diplomat accused of using two Nepalese women as sex-slaves', 'NH stretches to turn green corridors', '3 earn prestigious awards for studies of cancer, DNA damage', 'Humanoid robot to teach astronauts onboard ISS'),
(15, '10/09/2015', 'Match with Nitish could shape Modi captaincy', 'Five-phase Bihar polls from October 12', 'Saudi Arabian embassy protests police raid on officialâ€™s house', 'Mescom manages electricity supply with available resources', 'IS claims to hold Norwegian, Chinese captives', 'HC gives 4 weeks for action plan on preserving forests', 'Australian panel gives conditional nod for N-deal', 'Licence of Teestaâ€™s NGO suspended', 'SC to screen CBI file on P Chidambaram in Aircel-Maxis case', 'Govt scraps plan for special session on GST, rollout unlikely before 2017', 'To save the Great Barrier Reef from starfish, a bot designed to kill them', 'Himalayas under threat, say experts'),
(16, '10/09/2015', 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤ªà¤¤à¤¿ à¤¨à¥‡ à¤‡à¤¸à¤°à¥‹ à¤•à¥‹ 2014 à¤•à¤¾ à¤—à¤¾à¤‚à¤§à¥€ à¤¶à¤¾à¤‚à¤¤à¤¿ à¤ªà¥à¤°à¤¸à¥à¤•à¤¾à¤° à¤ªà¥à¤°à¤¦à¤¾à¤¨ à¤•à¤¿à¤¯à¤¾', 'à¤µà¥ƒà¤¦à¥à¤§à¥‹à¤‚ à¤•à¥‡ à¤²à¤¿à¤ à¤¸à¥à¤µà¤°à¥à¤— à¤¬à¤¨à¤¾ à¤¸à¥à¤µà¤¿à¤Ÿà¥à¤œà¤°à¤²à¥ˆà¤‚à¤¡, 71à¤µà¥‡à¤‚ à¤¨à¤‚à¤¬à¤° à¤ªà¤° à¤­à¤¾à¤°à¤¤', 'à¤•à¥à¤ªà¤µà¤¾à¤¡à¤¼à¤¾ à¤”à¤° à¤ªà¥à¤‚à¤› à¤®à¥‡à¤‚ à¤ªà¤¾à¤•à¤¿à¤¸à¥à¤¤à¤¾à¤¨ à¤¨à¥‡ à¤•à¤¿à¤¯à¤¾ à¤¸à¥€à¤œà¤«à¤¾à¤¯à¤° à¤•à¤¾ à¤‰à¤²à¥à¤²à¤‚à¤˜à¤¨, à¤¦à¥‹ à¤œà¤µà¤¾à¤¨ à¤˜à¤¾à¤¯à¤²', 'à¤¸à¤°à¤•à¤¾à¤° à¤¨à¥‡ à¤œà¥€à¤à¤¸à¤Ÿà¥€ à¤ªà¤° à¤µà¤¿à¤¶à¥‡à¤· à¤¸à¤¤à¥à¤° à¤¬à¥à¤²à¤¾à¤¨à¥‡ à¤•à¥€ à¤¯à¥‹à¤œà¤¨à¤¾ à¤›à¥‹à¤¡à¤¼à¥€', 'à¤¶à¥€à¤¨à¤¾ à¤®à¤°à¥à¤¡à¤° à¤•à¥‡à¤¸ à¤•à¥€ à¤œà¤¾à¤‚à¤š à¤¸à¥‡ à¤°à¤¾à¤•à¥‡à¤¶ à¤®à¤¾à¤°à¤¿à¤¯à¤¾ à¤•à¤¾ à¤‡à¤‚à¤•à¤¾à¤°!', 'à¤¯à¤®à¤¨ à¤®à¥‡à¤‚ à¤¹à¤µà¤¾à¤ˆ à¤¹à¤®à¤²à¥‡ à¤®à¥‡à¤‚ à¤¨à¤¹à¥€à¤‚ à¤®à¤¾à¤°à¤¾ à¤—à¤¯à¤¾ à¤•à¥‹à¤ˆ à¤­à¤¾à¤°à¤¤à¥€à¤¯; 7 à¤²à¤¾à¤ªà¤¤à¤¾ à¤”à¤° 13 à¤¹à¥ˆà¤‚ à¤œà¥€à¤µà¤¿à¤¤: à¤µà¤¿à¤¦à¥‡à¤¶ à¤®à¤‚à¤¤à¥à¤°à¤¾à¤²à¤¯', 'à¤­à¤¾à¤°à¤¤ à¤¦à¥Œà¤°à¥‡ à¤ªà¤° à¤¨à¤¹à¥€à¤‚ à¤†à¤à¤‚à¤—à¥€ à¤ªà¤¾à¤• à¤°à¥‡à¤‚à¤œà¤°à¥à¤¸ à¤•à¥‡ à¤…à¤§à¤¿à¤•à¤¾à¤°à¤¿à¤¯à¥‹à¤‚ à¤•à¥€ à¤ªà¤¤à¥à¤¨à¤¿à¤¯à¤¾à¤‚', 'à¤ªà¤¾à¤•à¤¿à¤¸à¥â€à¤¤à¤¾à¤¨à¥€ à¤°à¥‡à¤‚à¤œà¤°à¥à¤¸ à¤•à¤¾ à¤¶à¤¿à¤·à¥à¤Ÿà¤®à¤‚à¤¡à¤² à¤­à¤¾à¤°à¤¤ à¤ªà¤¹à¥à¤‚à¤šà¤¾, DG à¤¸à¥â€à¤¤à¤° à¤•à¥€ à¤¬à¤¾à¤¤à¤šà¥€à¤¤ à¤•à¤² à¤¸à¥‡', 'à¤¶à¤¿à¤µà¤¸à¥‡à¤¨à¤¾ à¤ªà¥à¤°à¤®à¥à¤– à¤‰à¤¦à¥à¤§à¤µ à¤ à¤¾à¤•à¤°à¥‡ à¤¬à¥‹à¤²à¥‡- à¤®à¥à¤‚à¤¬à¤ˆ à¤®à¥‡à¤‚ à¤®à¥€à¤Ÿ à¤ªà¤° à¤¬à¥ˆà¤¨ à¤¨à¤¹à¥€à¤‚ à¤¹à¥‹à¤¨à¥‡ à¤¦à¥‡à¤‚à¤—à¥‡', 'à¤à¤ªà¥à¤ªà¤² à¤¨à¥‡ iPhone 6S, 6S à¤ªà¥à¤²à¤¸ à¤•à¤¿à¤¯à¤¾ à¤²à¥‰à¤¨à¥à¤š ', 'à¤²à¤¾à¤²à¥‚ à¤¨à¥‡ à¤¸à¤¾à¤‚à¤ªà¥à¤°à¤¦à¤¾à¤¯à¤¿à¤• à¤¤à¤¾à¤•à¤¤à¥‹à¤‚ à¤•à¥‹ à¤²à¤²à¤•à¤¾à¤°à¤¾-à¤«à¤°à¤¿à¤¯à¤¾ à¤²à¥‹ à¤šà¥à¤¨à¤¾à¤µ à¤®à¥ˆà¤¦à¤¾à¤¨ à¤®à¥‡à¤‚ ', 'VIP à¤•à¤²à¥à¤šà¤°: à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤•à¥‡ à¤®à¥à¤–à¥à¤¯à¤®à¤‚à¤¤à¥à¤°à¥€ à¤¨à¥‡ à¤®à¥à¤‚à¤¬à¤ˆ à¤¸à¥‡ à¤®à¤¾à¤‚à¤—à¥€ à¤®à¤¾à¤‚à¤«à¥€'),
(17, '11/09/2015', 'All eyes on onions, but it''s pulses that are truly racing', 'Only 1 in 4 Indian applicants will make it to Haj', 'US Open: Women''s semi-finals postponed to Friday', 'Siberian survivor to secretive sadhu... Netaji mystery lives on', ' 7 IPhone 6S Features Taken From Other ', 'Madras HC to measure manâ€™s chest in SI selection row', 'Muslim woman goes to court against bigamy', 'Cops find Indraniâ€™s threat email to Sheena, Mikhail', 'After GM exit, Nano gives Gujarat big scare', 'Act on KG basin report, says HC', 'Modi hits back at Sonia with ''hawalabaaz'' barb', 'India, Pakistan agree to devise new strategies to end ceasefire violations in J&K, DG-level talks extended by a day'),
(18, '11/09/2015', 'à¤®à¥à¤‚à¤¬à¤ˆ, à¤°à¤¾à¤œà¤¸à¥à¤¥à¤¾à¤¨ à¤•à¥‡ à¤¬à¤¾à¤¦ à¤…à¤¬ à¤…à¤¹à¤®à¤¦à¤¾à¤¬à¤¾à¤¦ à¤®à¥‡à¤‚ à¤­à¥€ à¤®à¤¾à¤‚à¤¸ à¤¬à¤¿à¤•à¥à¤°à¥€ à¤ªà¤° à¤²à¤—à¥€ à¤ªà¤¾à¤¬à¤‚à¤¦à¥€ ', 'à¤…à¤ªà¤¨à¥‡ à¤¬à¥€à¤®à¤¾à¤° à¤—à¥à¤°à¥‚ à¤¸à¥‡ à¤®à¤¿à¤²à¤¨à¥‡ à¤†à¤œ à¤‹à¤·à¤¿à¤•à¥‡à¤¶ à¤œà¤¾à¤à¤‚à¤—à¥‡ PM à¤®à¥‹à¤¦à¥€, à¤¸à¥à¤°à¤•à¥à¤·à¤¾ à¤•à¥‡ à¤•à¤¡à¤¼à¥‡ à¤‡à¤‚à¤¤à¤œà¤¾à¤®', 'à¤œà¤®à¥à¤®à¥‚-à¤•à¤¶à¥à¤®à¥€à¤° à¤•à¥‡ à¤¹à¤‚à¤¦à¤µà¤¾à¤¡à¤¼à¤¾ à¤®à¥‡à¤‚ à¤¹à¥à¤ˆ à¤®à¥à¤ à¤­à¥‡à¤¡à¤¼ à¤®à¥‡à¤‚ à¤¸à¥‡à¤¨à¤¾ à¤•à¥‡ à¤¦à¥‹ à¤œà¤µà¤¾à¤¨ à¤¶à¤¹à¥€à¤¦, à¤¦à¥‹à¤¨à¥‹à¤‚ à¤†à¤¤à¤‚à¤•à¥€ à¤®à¤¾à¤°à¥‡ à¤—à¤', '''à¤¸à¥à¤µà¤šà¥à¤› à¤­à¤¾à¤°à¤¤ à¤…à¤­à¤¿à¤¯à¤¾à¤¨'' à¤®à¥‡à¤‚ à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤—à¤¤à¤¿ à¤¹à¥à¤ˆ à¤¹à¥ˆ : à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤ªà¤¤à¤¿', 'à¤¹à¤µà¤¾à¤ˆ à¤…à¤¡à¥à¤¡à¥‹à¤‚ à¤•à¥€ â€˜à¤¨à¥‹ à¤«à¥à¤°à¤¿à¤¸à¥à¤•à¤¿à¤‚à¤—â€™ à¤¸à¥‚à¤šà¥€ à¤¸à¥‡ à¤¨à¤¹à¥€à¤‚ à¤¹à¤Ÿà¥‡à¤—à¤¾ à¤µà¤¾à¤¡à¥à¤°à¤¾ à¤•à¤¾ à¤¨à¤¾à¤® : à¤¨à¤¾à¤—à¤°à¤¿à¤• à¤‰à¤¡à¥à¤¡à¤¯à¤¨ à¤®à¤‚à¤¤à¥à¤°à¥€', 'à¤ªà¥€à¤à¤® à¤®à¥‹à¤¦à¥€ à¤•à¥‡ ''à¤¹à¤µà¤¾à¤²à¤¾à¤¬à¤¾à¤œ'' à¤¤à¤‚à¤œ à¤ªà¤° à¤•à¤¾à¤‚à¤—à¥à¤°à¥‡à¤¸ à¤¨à¥‡ à¤•à¤¹à¤¾- à¤•à¥‡à¤‚à¤¦à¥à¤° à¤¸à¤°à¤•à¤¾à¤° ''à¤¦à¤—à¤¾à¤¬à¤¾à¤œ'' à¤¹à¥ˆ', 'à¤¦à¥‡à¤¶ à¤•à¥€ à¤¹à¤° à¤­à¤¾à¤·à¤¾ à¤…à¤¨à¤®à¥‹à¤², à¤¹à¤¿à¤‚à¤¦à¥€ à¤¸à¥‡ à¤œà¥‹à¤¡à¤¼à¤¨à¥‡ à¤ªà¤° à¤®à¤¾à¤¤à¥ƒà¤­à¤¾à¤·à¤¾ à¤¹à¥‹à¤—à¥€ à¤¤à¤¾à¤•à¤¤à¤µà¤° : à¤®à¥‹à¤¦à¥€', 'à¤¡à¥€à¤œà¥€à¤à¤®à¤“ à¤¸à¥à¤¤à¤°à¥€à¤¯ à¤µà¤¾à¤°à¥à¤¤à¤¾ : à¤¸à¥€à¤®à¤¾ à¤ªà¤° à¤¸à¤‚à¤˜à¤°à¥à¤· à¤µà¤¿à¤°à¤¾à¤® à¤•à¥‹ à¤²à¥‡à¤•à¤° à¤­à¤¾à¤°à¤¤-à¤ªà¤¾à¤• à¤®à¥‡à¤‚ à¤¬à¤¨à¥€ à¤¸à¤¹à¤®à¤¤à¤¿', 'à¤à¤• à¤ªà¤¾à¤•à¤¿à¤¸à¥à¤¤à¤¾à¤¨à¥€ à¤¨à¤¾à¤—à¤°à¤¿à¤• à¤¨à¥‡ à¤¦à¤¿à¤¯à¤¾ à¤¥à¤¾ à¤”à¤°à¤‚à¤—à¤œà¥‡à¤¬ à¤°à¥‹à¤¡ à¤•à¤¾ à¤¨à¤¾à¤® à¤¬à¤¦à¤²à¤¨à¥‡ à¤•à¤¾ à¤µà¤¿à¤šà¤¾à¤°', 'à¤¤à¥‡à¤²à¤‚à¤—à¤¾à¤¨à¤¾ à¤®à¥‡à¤‚ à¤¨à¤•à¥à¤¸à¤² à¤•à¤®à¤¾à¤‚à¤¡à¤° à¤¨à¥‡ à¤•à¤¿à¤¯à¤¾ à¤†à¤¤à¥à¤®à¤¸à¤®à¤°à¥à¤ªà¤£', 'à¤ªà¤¾à¤• à¤¸à¥‡à¤¨à¤¾ à¤¨à¥‡ à¤«à¤¿à¤° à¤ªà¥à¤‚à¤› à¤®à¥‡à¤‚ à¤à¤²à¤“à¤¸à¥€ à¤•à¥‡ à¤ªà¤¾à¤¸ à¤•à¥€ à¤«à¤¾à¤¯à¤°à¤¿à¤‚à¤—', 'à¤­à¤¾à¤°à¤¤-à¤ªà¤¾à¤• à¤®à¥‡à¤‚ à¤¡à¥€à¤œà¥€ à¤¸à¥â€à¤¤à¤° à¤•à¥€ à¤¬à¤¾à¤¤à¤šà¥€à¤¤ à¤¶à¥à¤°à¥‚; à¤¸à¥€à¤œà¤«à¤¾à¤¯à¤° à¤‰à¤²à¥â€à¤²à¤‚à¤˜à¤¨, à¤˜à¥à¤¸à¤ªà¥ˆà¤  à¤¸à¤®à¥‡à¤¤ à¤•à¤ˆ à¤®à¥à¤¦à¥à¤¦à¥‹à¤‚ à¤ªà¤° à¤¹à¥‹à¤—à¥€ à¤šà¤°à¥à¤šà¤¾'),
(19, '12/09/2015', 'US Open: Paes, Hingis win mixed doubles title', 'Lawyers must face fitness tests: SC', 'Labs earned crores from H1N1 hysteria in Mumbai', 'Wannabe MLA comes up with 300-page colour CV', '1st Indian woman ''operative of ISIS'' deported', 'Ola founders youngest on super rich Indians list', 'Mecca crane crash: 107 killed, 238 injured', 'Cops seek MEA nod to question Saudi diplomat', 'National highways to grow by 50,000km in 6 mths', 'Writer returns award over Kalburgi killing', 'Mistrial for US cop who slammed Indian to ground', '`BP treatment must be more aggressive'''),
(20, '14/09/2015', ' Proposed Smart Cities rank low in swachh bharat ranking', 'Indian healthcare BPO facing stiff competition: Study', 'Dark Energy Survey', 'Decisive day for U.N. reforms process', 'Origin of Saturnâ€™s F ring and satellites found', 'Our moon is surrounded by neon', 'India placed 22nd in new Asian football technical ranking', 'Gigantic water ice slab found on Mars', 'BSF ill-prepared to tackle drone attacks', '15% IAS officers claim to own no land, house', 'New antibody may fight HIV better', 'Robot journalist introduced in China'),
(21, '16/09/2015', 'Modi will meet Apple CEO Tim Cook in San Francisco during his US visit', 'SC favours I-T probe against former CJIâ€™s kin', 'Meat ban: Butter chicken off menu in Patiala', 'UAE deports 4 from Kerala for â€˜IS linksâ€™', 'Narayanpur dam almost full', 'Swine flu: quick response lacking', 'Rs. 18.66 cr. for Vijayawada roads', 'Govt to allow injectable contraceptive for women?', 'Entry to Taj Mahal becomes 200% costlier', 'New software may ''HUSH'' up phone''s battery woes', 'Nasa set to burn astronauts'' poop in space', 'Like humans, birds too fall in love'),
(22, '17/09/2015', 'Krishna meets Godavari in first river linkage', 'Massive 8.3 magnitude earthquake rocks Chile', 'Govt offers fresh talks to end FTII logjam', 'PMâ€™s Silicon Valley trip may sideline UN talks', 'India losing fight against lethal bacteria', '66% drop in funds has crippled war on dengue', 'Top Rajasthan babus held in mines bribery scam', 'India, China to hold joint military exercise', 'RBI grants licences to 10 small banks', 'Over 1 lakh pour into Gurgaon for MSG-2', 'Marine life dipped by 50% in 40 years', 'Longest chain of volcanoes found in Australia'),
(23, '19/09/2015', 'PMO behind covert op to bust Raj mining scam', 'Two NGOs per policeman in India, CBI tells SC ', 'Centre sees red in Assamâ€™s safe passage offer to Paresh Baruah', 'Patel reservation stir: Guj HC upholds net curfew', 'LG warns Delhi babus, livid Kejriwal writes to PM', 'Mumbai top cop''s ties with Mukerjeas got CBI in?', 'BJP hardsells Rs 1.25L cr package to woo voters', 'Mumbai man duped of Rs 21L by Facebook ''friend''', 'To beat caste system, kids named after spaceships', 'Approach roads to ensure free flow of traffic on NH', 'Veterans to boycott Presidentâ€™s tea over OROP', 'Nasa releases new Pluto images; ''surprisingly Earth-like pics'' stun scientists'),
(24, '21/09/2015', 'Dalmiya, who made Indian cricket wealthy, dies', 'India-Pakistan flag meeting on LoC today', '1965 battle: A war of perceptions India won', 'AI plans world''s longest non-stop flight ', 'Apple''s iOS App store suffers first major attack ', 'Muslims unfit to be US President: Ben Carson', 'How to stop criminal-neta nexus, SC asks govt', 'Sheena Bora''s 2012 bone samples mixed up?', 'IIT Delhi students develop tech for ''social good''', '50 top CEOs to dine with Modi', 'Munnar women demand role in PLC', 'Jagmohan Dalmiya, BCCI chief, passes away'),
(25, '22/09/2015', 'Judges operate under fear in Madras HC: CJI', 'RSS backed Emergency, reveals former IB chief', 'New drug on way to beat dengue', 'American Muslims fear a new wave of Islamophobia', 'India turns to Israel for armed drones', 'Row erupts over RSS chief''s remarks on quota', 'India has to homogenise liability law, says GE chief', 'Ahead of UN meet, India sends tough message to Pak., China', 'In New York, India to flag external source of terror', 'Black money holders will be nabbed after Sept 30', '2.5 hour walk per week can curb diabetes risk for vulnerable', 'NASA''s space shotgun to blast asteroids');

-- --------------------------------------------------------

--
-- Table structure for table `invest`
--

CREATE TABLE IF NOT EXISTS `invest` (
  `s.no` int(254) NOT NULL,
  `items` varchar(254) NOT NULL,
  `amount` int(100) NOT NULL,
  `invest_date` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invest`
--

INSERT INTO `invest` (`s.no`, `items`, `amount`, `invest_date`) VALUES
(47, 'News Paper(11 days) 23rs/day', 253, '05/09/2015'),
(46, 'News Paper', 23, '05/09/2015'),
(45, 'Printer Ink', 150, '05/09/2015'),
(44, 'electricity Labour + MVB', 800, '05/09/2015'),
(40, 'hut flex', 800, '28/08/2015'),
(43, 'Airtel-wifi', 1100, '05/09/2015'),
(42, 'Notice Board', 90, '30/08/2015'),
(48, 'pumplet distribute', 900, '05/09/2015'),
(49, 'Balti+mug', 170, '05/09/2015'),
(50, 'pumplet distribute', 600, '05/09/2015'),
(51, 'pumplet distribute', 50, '05/09/2015'),
(52, 'pumplet distribute', 50, '05/09/2015'),
(53, 'pumplet distribute', 60, '05/09/2015'),
(54, 'pumplet print(advance)', 2000, '05/09/2015'),
(55, 'Mirror Plastic', 350, '05/09/2015'),
(56, 'Gate Handle', 40, '05/09/2015'),
(57, 'Medicine+Juice(on student fever) ', 104, '05/09/2015'),
(58, 'pumplet distribute', 60, '05/09/2015'),
(59, 'A4 size paper', 150, '05/09/2015'),
(60, 'room freshner', 140, '05/09/2015'),
(61, 'wipper+colin', 140, '05/09/2015'),
(62, 'cello tape', 45, '06/09/2015'),
(63, 'Admission comission ', 200, '07/09/2015'),
(64, 'pumplet distribution', 300, '07/09/2015');

-- --------------------------------------------------------

--
-- Table structure for table `magazine_issue`
--

CREATE TABLE IF NOT EXISTS `magazine_issue` (
  `s.no` int(254) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `magazine_name` varchar(254) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazine_issue`
--

INSERT INTO `magazine_issue` (`s.no`, `f_name`, `magazine_name`, `status`, `date`) VALUES
(16, 'pooja', 'Pratiyogita darpan-English', 'Cancel', '2015-09-16 05:29:33'),
(17, 'Jyoti', 'Pratiyogita darpan-Hindi', 'Active', '2015-09-17 18:46:29'),
(18, 'pooja', 'Pratiyogita darpan-English', 'Active', '2015-09-18 20:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `motivation_videos`
--

CREATE TABLE IF NOT EXISTS `motivation_videos` (
  `s.no` int(254) NOT NULL,
  `name` varchar(254) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(254) COLLATE latin1_general_ci NOT NULL,
  `details` varchar(254) COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `motivation_videos`
--

INSERT INTO `motivation_videos` (`s.no`, `name`, `url`, `details`, `date`) VALUES
(1, '3 SHADES | MOST INSPIRATIONAL INDIAN SHORT FILM', 'TIFiVknKdPc', 'Journey of an innocent boy between January 26-27. (Wishing you all a very Happy Republic Day)', '2015-08-29 19:32:28'),
(2, 'IAS (Civil services) MOTIVATION', 'U_s50xlY5Zk', 'Love for INDIA ??? must watch this ..... Hausla ho buland toh har mazil kareeb aur har kaam aasaan ..... SHOW MORE', '2015-08-30 00:16:20'),
(3, 'IAS Topper of 2014 Batch Gaurav Agrawal (Full Interview)', 'lkUf-Gl7-FU', '(Full Interview) : Young Indian TV News Anchor Manoj Tibrewal Aakash Interviewed 2014 Batch''s IAS Topper Mr. Gaurav Agrawal for Doordarshan News''s Talk show Ek Mulaqat on 28.06.2014 ', '2015-08-30 00:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `reader_info`
--

CREATE TABLE IF NOT EXISTS `reader_info` (
  `s.no` int(254) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `f_name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `join_date` varchar(30) NOT NULL,
  `valid` varchar(30) NOT NULL,
  `join_amount` int(10) NOT NULL,
  `due_amount` varchar(254) NOT NULL,
  `image_path` varchar(254) NOT NULL,
  `id_path` varchar(254) NOT NULL,
  `seat_no` int(54) NOT NULL,
  `time` varchar(254) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reader_info`
--

INSERT INTO `reader_info` (`s.no`, `shift`, `f_name`, `email`, `mob`, `join_date`, `valid`, `join_amount`, `due_amount`, `image_path`, `id_path`, `seat_no`, `time`) VALUES
(6, '2-4', 'Jyoti tiwari', '', '8882985399', '2015-09-25', '2015-10-25', 500, '0', 'reader_image/0001_jyoti.jpg', 'reader_id/not_submit.png', 49, '10am-2pm'),
(7, '10-6', 'Sunil Mudgal', '', '8607828036', '2015-08-31', '2015-10-01', 700, '200', 'reader_image/0002_sunil.jpg', 'reader_id/not_submit.png', 37, '10am-6pm'),
(8, '2-4', 'Radhey vashisit', '', '9090155609', '2015-09-08', '2015-10-08', 500, '0', 'reader_image/0003_radhey_img.jpg', 'reader_id/0003_radhey_id.jpg', 20, '12pm-4pm'),
(9, '5-6', 'Himanshu', 'honeysingh0805@gmail.com', '7503218399', '2015-09-01', '2015-10-01', 600, '0', 'reader_image/0004_himanshu_img.jpg', 'reader_id/0004_himanshu_id.jpg', 51, '1pm-6pm'),
(10, 'spl', 'Dushyant', 'dushyantrathore1989@gmail.com', '9990033678', '2015-09-01', '2015-10-01', 1000, '0', 'reader_image/0005_himanshu_img.jpg', 'reader_id/not_submit.png', 23, 'Full Time'),
(11, '2-4', 'Ankur Yadav', 'anuragrahpratap09@gmail.com', '9997809000', '2015-09-01', '2015-10-01', 350, '0', 'reader_image/0006_ankur_img.jpg', 'reader_id/0006_ankur_id.jpg', 40, '2pm-5pm'),
(12, '2-4', 'Anugrah', 'anugrahpratap09@gmail.com', '9457043931', '2015-09-01', '2015-10-01', 350, '0', 'reader_image/0006_anugrah_img.jpg', 'reader_id/0006_anugrah_id.jpg', 41, '2pm-5pm'),
(13, 'night', 'Gaurav dahiya', 'gauravdahiya456@gmail.com', '8059527343', '2015-09-01', '2015-10-01', 500, '100', 'reader_image/0007_gaurav_img.jpg', 'reader_id/not_submit.png', 22, 'Night'),
(14, '2-4', 'Karan Sharma', 'karansharma1901@gmail.com', '8447170422', '2015-09-01', '2015-10-01', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 0, '1pm-3pm & 5pm-8pm'),
(15, '10-6', 'Pankesh Yadav', '', '9718800114', '2015-09-04', '2015-10-04', 1000, '0', 'reader_image/0009_pankesh_img.jpg', 'reader_id/not_submit.png', 34, '10am-4pm'),
(17, '10-6', 'Ritesh Kumar', '', '9958893084', '2015-09-04', '2015-10-04', 600, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 7, '10am-5pm'),
(18, '5-6', 'Arush Lakra', '', '9899450808', '2015-09-04', '2015-10-04', 600, '0', 'reader_image/', 'reader_id/', 26, '12pm-05pm'),
(19, '10-6', 'Neetu Meena', '', '', '2015-09-05', '2015-10-05', 1000, '0', 'reader_image/', 'reader_id/', 32, 'Full Time'),
(20, '2-4', 'Mahender Singh', 'ms70751@gmail.com', '9582871197', '2015-09-07', '2015-10-07', 500, '0', 'reader_image/', 'reader_id/', 35, '12pm-04pm'),
(21, '2-4', 'Nitish', 'nitishderwal192@gmail.com', '7503325089', '2015-09-08', '2015-10-08', 500, '0', 'reader_image/', 'reader_id/', 21, '500'),
(22, '5-6', 'Vikram Jeet', 'vikramjeetnegi05@gmail.com', '9990956437', '2015-09-05', '2015-10-05', 600, '', 'reader_image/', 'reader_id/', 3, '2pm-7pm'),
(23, 'spl', 'pooja rana', '', '', '2015-09-04', '2015-10-04', 1000, '0', 'reader_image/', 'reader_id/', 37, 'Full Time'),
(24, '5-6', 'Shalu Pal', 'spal0244@gmail.com', '9991746551', '2015-09-03', '2015-10-03', 600, '0', 'reader_image/', 'reader_id/', 53, '1pm-7pm'),
(25, '10-6', 'Sunil Yadav ', 'ysunilkumar257@gmail.com', '8506929848', '2015-09-04', '2015-10-04', 1000, '0000', 'reader_image/', 'reader_id/', 39, '11am-9pm'),
(26, 'night', 'Rahul Kumar Jha', 'rahuljhacul850@gmail.com', '9716025267', '2015-09-05', '2015-10-05', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 0, 'Night'),
(27, 'night', 'Moti singh', 'mukeshsingh974@gmail.com', '8107722923', '2015-09-05', '2015-10-05', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 0, 'Night'),
(28, 'spl', 'Phoolchand', 'roopnarshatri@gmail.com', '8527216833', '2015-09-08', '2015-10-08', 1250, '', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 31, 'Full Time'),
(29, 'spl', 'Surendra Singh', 'smadaan1@gmail.com', '999022940', '2015-09-08', '2015-10-08', 1250, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 30, 'Full Time'),
(30, '5-6', 'Jitesh Kumar', '', '976648620', '2015-09-07', '2015-10-07', 700, '', 'reader_image/not_submit.png', 'reader_id/', 38, '7am-10am &4pm-10pm'),
(31, '2-4', 'Ashsa', '', '7357883160', '2015-09-08', '2015-10-08', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 28, '12pm-2pm & 3pm-5pm'),
(32, '5-6', 'Manjeet', '', '9671648726', '2015-09-08', '2015-10-08', 700, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 9, '1pm-7pm'),
(33, '5-6', 'Sachin', '', '9034538640', '2015-09-08', '2015-10-08', 700, '0000', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 8, '1pm-7pm'),
(34, '2-4', 'Mukesh Dabas', 'dabasmukesh01@gmail.com', '8010097646', '2015-09-08', '2015-10-08', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 16, '11am-3pm'),
(35, '2-4', 'Ashish Mittal', 'smittal583@gmail.com', '7060112807', '2015-09-08', '2015-10-08', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 29, '9:30am-1:30pm'),
(36, '5-6', 'Saurabh Kumar', 'saurabhbihpur@gmail.com', '8880982357', '2015-09-08', '2015-10-08', 300, '600', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 14, '10am-8pm'),
(37, '10-6', 'Rashmi Kumari', 'rashmibrgusarai@gmail.com', '9650944931', '2015-09-08', '2015-10-08', 300, '600', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 15, '10am-8pm'),
(38, '10-6', 'Tabish', 'tabishkarim@ymail.com', '8147126235', '2015-09-08', '2015-10-08', 300, '600', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 2, '10am-8pm'),
(39, 'spl', 'Amit Singh', 'singh.amitetw@gmail.com', '8506956400', '2015-09-08', '2015-10-08', 1250, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 12, 'Full Time'),
(40, '2-4', 'Vishal Ahlawat', 'vishalahlawat01@gmail.com', '9813129806', '2015-09-08', '2015-10-08', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 19, '12:30pm-6pm'),
(41, 'spl', 'Jeet Dabas', 'jitdabas56@gmail.com', '9999072585', '2015-09-08', '2015-10-08', 1000, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 50, 'Full Time'),
(42, 'night', 'AAbhimanyu Kumar', 'kumarabhimanyu93@gmail.com', '9093285645', '2015-09-08', '2015-10-08', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 0, 'Night'),
(43, '2-4', 'Prateek', '', '9015077024', '2015-09-07', '2015-10-07', 500, '00', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 27, ''),
(44, '2-4', 'Sandeep kumar', 'sandeeplodhirajput.kumar@gmail.com', '8802647761', '2015-09-09', '2015-10-09', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 3, '10am-2pm'),
(45, '2-4', 'Ashish Gautam', 'ashishgautam16@gmail.com', '9716578497', '2015-09-09', '2015-10-09', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 4, '10am-2pm'),
(46, '2-4', 'Rahul Chhikara', 'rschhiara1992@gmail.com', '9468485813', '2015-09-09', '2015-10-09', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 5, '11am-3pm'),
(47, '2-4', 'Ankush mann', '', '9560017115', '2015-09-09', '2015-10-09', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 33, '1pm-4pm'),
(48, '2-4', 'Amit Malik', 'malikankit97.am@gmail.com', '8816937031', '2015-09-09', '2015-10-09', 600, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 43, '2pm-8pm'),
(49, '5-6', 'Sapna', 'chahar.sapna38@gmail.com', '8527012530', '2015-09-09', '2015-10-09', 700, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 42, '2pm-8pm'),
(50, '5-6', 'Amit Kumar', 'amitbaganwala94@gmail.com', '9728242142', '2015-09-09', '2015-09-09', 800, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 10, '11am-5pm'),
(51, 'spl', 'Jaineendra Kumar', '', '8281925597', '2015-09-10', '2015-10-10', 1000, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 38, 'Full Time'),
(52, '2-4', 'Raman', 'upadhayay.raman@yahoo.in', '8588896981', '2015-09-10', '2015-10-10', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 50, '1pm-5pm'),
(53, '2-4', 'Mohammad tariq', 'tariq.md987@gmail.com', '8860600554', '2015-09-10', '2015-10-10', 500, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 50, '10am-2pm'),
(54, '2-4', 'Akshaya kumar', '', '9718610977', '2015-09-10', '2015-10-10', 400, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 29, '2pm-5pm'),
(55, 'spl', 'Nitin drall', 'nitinkdaral@gmail.com', '8826264673', '2015-09-10', '2015-10-10', 200, '1000', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 24, '12pm-12am'),
(56, '5-6', 'Manoj Pal', '', '8826558448', '2015-09-14', '2015-10-14', 200, '600', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 47, '1pm-6pm'),
(57, '---', 'Amit Kumar', '', '9599332145', '2015-09-14', '2015-10-14', 300, '500', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 46, ''),
(58, '2-4', 'Archana Pandey', 'archana9119@gmail.com', '9707040181', '2015-09-11', '2015-10-11', 300, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 0, '1pm-4pm'),
(59, '5-6', 'Jyoti Yadav', '', '8750365958', '2015-09-11', '2015-10-11', 100, '600', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 40, '6am-11pm & 2pm-5pm'),
(60, 'spl', 'Avdhesh Sharma', '', '9891585745', '2015-09-12', '2015-10-12', 1100, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 35, 'Full Time'),
(61, '2-10', 'Shgivangee Dasila', '', '7827827759', '2015-09-12', '2015-10-12', 1000, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 22, '1pm-9pm'),
(62, '5-6', 'Dixit', 'dixitthakral7@gmail.com', '9729786200', '2015-09-04', '2015-10-04', 700, '0', 'reader_image/not_submit.png', 'reader_id/not_submit.png', 39, '7am-10am & 3pm-7pm'),
(63, '2-4', 'test', 'test@gmail.com', '', '2015-09-26', '2015-09-11', 100, '000', 'reader_image/', 'reader_id/', 4, ''),
(64, '10-6', 'kl dusvh', 'kjsdhf@gmail.com', 'kdsjfsd', '', '', 540, '0', 'reader_image/', 'reader_id/', 3, '10am-2pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ust_id` varchar(30) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ust_id`, `first_name`, `last_name`, `pass`) VALUES
('0001', 'Ashish', 'pandey', '123456'),
('0002', 'Pooja', 'Rana', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE IF NOT EXISTS `water` (
  `s.no` int(254) NOT NULL,
  `items` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water`
--

INSERT INTO `water` (`s.no`, `items`, `date`) VALUES
(1, '24', '2015-09-11 20:51:40'),
(2, '2', '2015-09-12 04:06:20'),
(3, '2', '2015-09-12 04:20:02'),
(4, '2', '2015-09-13 19:57:06'),
(5, '3', '2015-09-15 18:23:03'),
(6, '4', '2015-09-15 18:23:07'),
(7, '2', '2015-09-16 03:17:29'),
(8, '4(17/9)', '2015-09-17 18:47:01'),
(9, '3', '2015-09-17 18:47:06'),
(10, '3', '2015-09-18 23:56:05'),
(11, '2', '2015-09-20 08:03:09'),
(12, '4', '2015-09-21 19:40:37'),
(13, '4', '2015-09-23 07:35:40'),
(14, '3', '2015-09-28 02:35:53'),
(15, '7', '2015-09-28 02:36:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `headlines`
--
ALTER TABLE `headlines`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `invest`
--
ALTER TABLE `invest`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `magazine_issue`
--
ALTER TABLE `magazine_issue`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `motivation_videos`
--
ALTER TABLE `motivation_videos`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `reader_info`
--
ALTER TABLE `reader_info`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `s.no` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `headlines`
--
ALTER TABLE `headlines`
  MODIFY `s.no` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `invest`
--
ALTER TABLE `invest`
  MODIFY `s.no` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `magazine_issue`
--
ALTER TABLE `magazine_issue`
  MODIFY `s.no` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `motivation_videos`
--
ALTER TABLE `motivation_videos`
  MODIFY `s.no` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reader_info`
--
ALTER TABLE `reader_info`
  MODIFY `s.no` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `water`
--
ALTER TABLE `water`
  MODIFY `s.no` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
