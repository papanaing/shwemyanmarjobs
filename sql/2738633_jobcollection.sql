-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 06:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2738633_jobcollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency_info`
--

CREATE TABLE `agency_info` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agency_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agency_password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agency_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agency_logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agency_facebook_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `agency_website_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agency_business_day` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agency_business_hour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agency_address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `agency_about` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `agency_info`
--

INSERT INTO `agency_info` (`agency_id`, `agency_name`, `agency_email`, `agency_password`, `agency_phone`, `agency_logo`, `agency_facebook_address`, `agency_website_address`, `agency_business_day`, `agency_business_hour`, `agency_address`, `agency_about`) VALUES
(1, 'Job Guide Employment Agency', 'jobguide.recruitment@gmail.com', '123', '09 968 360400', 'jg.jpg', 'https://www.facebook.com/jobguide.employmentagency', 'jjj', 'Mon to Fri', '8:30 am - 5:30 pm', '', 'ျပည္တြင္းအလုပ္အကိုင္ေအဂ်င္စီ တစ္ခုျဖစ္ပါတယ္။                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    '),
(2, 'Country Job Company ', 'countryjob.officesanchaung@gmail.com', '123', '9421110797', 'cj.jpg', 'https://www.facebook.com/CountryJobCompany/', '', 'Mon to Sat', '9:00 am - 5:00 pm', 'အခန္း ၆၀၃၊ ၆ လႊာ၊ ပန္းျခံတာဝါ၊ ဗားဂရာလမ္း၊ ေျမနီကုန္း၊ စမ္းေခ်ာင္းၿမိဳ႕နယ္၊ ရန္ကုန္ၿမိဳ႕။  \n                                ', 'ေအာင္ျမင္ေသာလုပ္ငန္းမ်ားႏွင့္ သင့္ဘ၀ေအာင္ျမင္ေစရန္ Country Job ႏွင့္ဆက္သြယ္လိုက္ပါ                                '),
(3, 'Asia Speed General Services Co.,Ltd.', 'info@asiaspeedjobs.com', '', '09 965 027273', 'Asia Speed.jpg', 'https://www.facebook.com/AsiaSpeedJobs/?ref=br_rs', '', '-', '-', 'အခန္း(၄)၊လမ္း၃၀၊၅၈×၅၉လမ္းၾကား၊မႏၲေလးၿမိဳ႕။', 'We provide a bespoke recruitment service platform for employers and job seekers across Myanmar.'),
(4, 'CROWN Education', 'james@crown-education.org', '', '(01) 527 838 , (09) 732 732 77', 'crown.jpg', 'https://www.facebook.com/pg/crowneducation/', '', 'Mon to Sat', '9:00 am - 5:00 pm', 'Pyay Road, Yangon\n', 'CROWN Education is a premier esteemed and highly professional overseas educational consultants organization engaged in career counseling and providing authentic guidance to Myanmar students seeking study abroad.'),
(5, 'JAS Employment Agency', 'jobaphrodite10@gmail.com', '', '09 40042 0153', 'jas.jpg', 'https://www.facebook.com/pg/JASservicepage/', '', 'Mon to Sat', '9:00 am - 5:30 pm', '', 'သင့္ဘ၀အတြက္ အေကာင္းဆံုးအလုပ္မ်ားကို ရွာေဖြေပးေနသည့္ Job Aphrodite တစ္ခုျဖစ္ပါသည္။'),
(6, 'Job Media', 'cvform.jobmedia@gmail.com', '', '09 799 850 291, 09 786 780 381, 09 799 850 292', 'job media.jpg', 'https://www.facebook.com/pg/jobmedia.com.mm/', '', 'Mon to Sat', '9:00 am - 5:00 pm', ' အခန္း (၁၁)၊ တိုက္ (၁၁R)၊ လိႈင္ျမင့္မိုရ္အိမ္ရာ၊ လိႈင္ျမိဳ႕နယ္၊ ရန္ကုန္', 'လုပ္ငန္းအေတြ႕အၾကံဳမရွိေသးေသာ လူငယ္မ်ားအတြက္ အေတြ႕အၾကံဳေကာငး္မ်ားစြာ  ရရွိႏိုင္သည့္ အလုပ္အကိုင္ အခြင့္အလမ္းေကာင္းမ်ား၊  လုပ္ငန္းအေတြ႕အၾကံဳရွိသူမ်ားအတြက္ ေနာက္တစ္ဆင့္ တက္လွမ္းႏိုင္မည့္ လစာျမင့္  အလုပ္အကိုင္ အခြင့္အလမ္းေကာင္းမ်ားစြာကို JOB MEDIA မွ အေကာင္းဆံုး   ရွာေဖြ ခ်ိတ္ဆက္ေပးေနပါျပီ။ \r\nလူၾကီးမင္းတို႔၏ CV FORM ကိုလူကိုယ္တိုင္ျဖစ္ေစ၊ Facebook  chatboxျဖစ္ေစ၊ Gmail မွတဆင့္ျဖစ္ေစ မိမိေလွ်ာက္ထားလိုေသာ Position  ကိုေရးျပီး အခမဲ့ ေပးပို႔ေလၽွာက္ထားႏိုင္ပါသည္။  Facebook Chatbox (သို႔မဟုတ္) Gmail က ေပးပို႔မည္ဆိုပါက CV FORM ကို Microsoft World (သို႔မဟုတ္) PDF ျဖင့္ ေပးပို႔ရမည္ျဖစ္ပါသည္။\r\n အလုပ္အကိုင္ အခြင့္အလမ္းေကာင္းမ်ားစြာကို JOB MEDIA မွ အေကာင္းဆံုး ရွာေဖြ  ခ်ိတ္ဆက္ေပးေနပါျပီ။မိမိတို႔၏ CV Form မ်ားကို အခုပဲ ပို႔လိုက္ျခင္းျဖင့္  အလုပ္အကိုင္ အခြင့္အလမ္းေကာင္းမ်ားကို ရယူလိုက္ပါ။ အသစ္အသစ္ေသာ အလုပ္အကိုင္  အခြင့္အလမ္းမ်ားစြာကိုလဲ JOB MEDIA Page ထဲသို႔ ၀င္ေရာက္ေလ့လာျပီး  ေလွ်ာက္ထားႏိုင္ပါသည္။'),
(7, 'Job Myanmar', '', '', '09 42495 6073, 09972492544', 'jm.jpg', 'https://www.facebook.com/jobmandalay/', '', 'Mon to Sun', '9:00 am - 6:00 pm', 'Manar haris 60th\r\nMandalay', 'Job Myanmar သည္ မႏၱေလးမွအလုပ္အကိုင္ ေအဂ်င္စီတစ္ခုျဖစ္ပါသည္။'),
(8, 'Job Myanmar Local Employment Agency', 'jm.jobmyanmar@gmail.com', '', '09-33486566, 09-793268032', 'job-myanmar-local-em', 'https://www.facebook.com/pg/jm.jobmyanmar/', '', 'Mon to Sat', '9:00 am - 5:00 pm', 'No (19),4 Floors, Room(8), Sabai Street,Tamwe Township, Yangon.', 'ေမွ်ာ္လင့္ျခင္းေန့သစ္မ်ားႏွင့္လုပ္ငန္းအသစ္ေတြကို Job Myanmar ႏွင့္အတူစတင္လိုက္ပါ.....'),
(9, 'Job Site Yangon Agency', 'jobsiteyangon@gmail.com', '', '09 969 986088', 'job site yangon.jpg', 'https://www.facebook.com/pg/jobsiteyangonservice/', '', '', '', '', ''),
(10, 'Job Trust Agency', 'jobtrust.cv@gmail.com', '', '09 44342 7711', 'job trust.jpg', 'https://www.facebook.com/pg/jobtrustmm/', '', '', '', 'No.19,4th Floor,Yadanar Street,Baho Road,Kamayut.', 'Job Trust ျပည္တြင္းအလုပ္အကိုင္႐ွာေဖြေရး ေအဂ်င္စီတစ္ခုျဖစ္ပါသည္။'),
(11, 'Jobs in Yangon Group', '', '', '', 'default.jpg', 'https://www.facebook.com/groups/612804512239676/', '', '', '', '', ''),
(12, 'NWE YOE - Mandalay', 'nweyoe123@gmail.com', '', '930007080', 'new-yoe-mandalay.jpg', 'https://www.facebook.com/JobOfMandalayInNweYoeCompany/', '', '-', '-', '', 'Our main mission is the most essential employment agency in Myanmar which means most of employees in Myanmar are gotten jobs by the effort of our Nwe Yoe'),
(13, 'Racy Star Agency', 'cv.racystar@gmail.com', '', '09401177 800, 09 401177900, 09 404057579', 'racy star.jpg', 'https://www.facebook.com/Racy-Star-Local-Employment-Agency-2167497593519101/', '', '', '', 'တိုက္ (B2) ၊ အခန္း (၄၀၂) ၊ (၄)လႊာ (ဓါတ္ေလွကားရွိပါတယ္) ၊ \r\nဗထူးအိမ္ယာ၊ ေျမာက္ဒဂုံၿမိဳ႕နယ္ ။ (၄၄ မွတ္တိုင္မွာဆင္းရမွာပါ)။', 'ျပည္တြင္းအလုပ္အကုိင္ရွာေဖြေရးလုပ္ငန္း ျဖစ္ပါတယ္။'),
(14, 'Work Bridge Job Agency', 'workbridgeagency@gmail.com', '', ' 09 45168 8808, 09 451 6888 18', 'work bridge.jpg', 'https://www.facebook.com/pg/workbridgeagency/', '', 'Mon to Sun', '9:00 am - 5:30 pm', 'No.(2/7-B),Hledan Road,In Front Of Hledan Centre\nYangon', 'We are providing Best Job Matching Service between Job seeker and Employer.'),
(15, 'Job and Career HR Service', 'jobandcareerhr@gmail.com', '', '09 309 93099, 09 3688 3688', 'job and career.jpg', 'https://www.facebook.com/pg/jobandcareer.com.mm/', '', '', '', 'အမွတ္(၃)၊ ဒုတိယထပ္၊ အင္းစိန္လမ္း ၊ လႈိင္ၿမိဳ႕နယ္ (သမိုင္းလမ္းဆံုမွတ္တိုင္)', 'အလုပ္အကိုင္ရွာေဖြေရး ေအဂ်င္စီတစ္ခုျဖစ္ပါသည္။'),
(16, 'လင္းေရာင္ျခည္ေအဂ်င္စီ', 'hr.lycrs1@gmail.com', '', '09 974 000848', 'lin yaung chi.jpg', 'https://www.facebook.com/pg/lycrecruitment/', '', 'Mon to Sat', '9:00 am - 5:00 pm', 'Sanchaung Township, Yangon.', 'အလုပ္အကုိင္ရွာေဖြေရးဝန္ေဆာင္မႈလုပ္ငန္းျဖစ္ပါသည္။'),
(17, 'Part/Full Time Job Myanmar Group', '', '', '', 'default.jpg', 'https://www.facebook.com/groups/parttimejobtraining/', '', '', '', '', 'Part/Full Time Job Myanmar Group သည္ အလုပ္ရွင္ႏွင့္ ၀န္ထမ္းမ်ားအားလံုးအတြက္ အလုပ္တင္ေပးေနေသာ fb group တစ္ခုျဖစ္ပါတယ္။'),
(18, 'Job Vacancies (Myanmar) Group', '', '', '', 'default.jpg', 'https://www.facebook.com/groups/1567947436859446/about/', '', '', '', '', 'Job Vacancies (Myanmar) Group သည္ အလုပ္အကိုင္ရွာေဖြေနသူမ်ားႏွင့္ လုပ္ငန္းရွင္မ်ားၾကား အဆင္ေျပေခ်ာေမြ႔ေစရန္ ရည္ရြယ္ေသာ fb group ျဖစ္ပါသည္။'),
(19, 'Natural Priority Recruitment Service', 'naturalpriority@gmail.com', '', '01 573 778', 'naturalpriority.jpg', 'https://www.facebook.com/naturalpriority/', '', 'Mon to Fri', '8:30 am - 4:30 pm', 'C/38(A), Laydaungkan Rd,Thigangyun Tsp.', ' မဂၤလာပါရွင့္။ Natural Priority အေနျဖင့္ - ခန္႔အပ္ေသာ ၀န္ထမး္ (အေျခခံလစာ)၏ ၅၀% သာေကာက္ခံျခင္း။ ႏွစ္သစ္ကူး  Promotion အေနျဖင့္ ရက္ေပါင္း (၉၀) အာမခံေပးျခင္း။ လိုအပ္ေသာ အရည္အခ်င္းႏွင့္ ကိုက္ညီေသာ ၀န္ထမး္မ်ားကိုသာ ေရြးခ်ယ္ေပးျခင္း ႏွင့္ လူေတြ႕စစ္ေဆးရန္ စီစဥ္ေပးျခင္း။ Payment Terms မ်ား ညိွႏိႈင္းေပးျခင္းမ်ား ေဆာင္ရြက္ေပးလွ်က္ရိွပါတယ္ရွင့္။'),
(20, 'Jobs @MYANMAR group', '', '', '', 'default.jpg', 'https://www.facebook.com/groups/1470079376352308/', '', '', '', '', 'Jobs @MYANMAR သည္အလုပ္အကိုင္မ်ားစြာတင္ေပးေနေသာ fb group တစ္ခုျဖစ္ပါသည္။'),
(21, 'Future Star Recruitment Service Co.Ltd', '', '', '09974962460', 'future star recruitment.jpg', 'https://www.facebook.com/successfulbutterfly/', '', '', '', 'No-17/18,Ba Yint Naung 3rd Street,Thingan Kyun Township, Yangon', 'သင့္အတြက္ အေကာင္းမြန္ဆံုးႏွင့္ အျမန္ဆံုး ရွာေဖြေပးႏိုင္ေသာ ျပည္တြင္းအလုပ္အကိုင္ရွာေဖြေရးေအဂၽင္စီ ျဖစ္ပါတယ္'),
(22, 'Job World Agency', 'jobworld1986@gmail.com', '', '09 42678 6940', 'job-world.jpg', 'https://www.facebook.com/pg/jobworldmyanmar/', '', 'Mon to Sat', '9:00 am - 5:00 pm', 'No.90, Nat Sin Street, Kyeemyindaing Township, Yangon.', 'Job World Agency is a local recruitment service agency based in Yangon, Myanmar. We offer high quality service to both Job seekers and Employers.'),
(23, 'Amara Job Centre', 'amarajobcentre@gmail.com', '', '09402620731', 'amara.jpg', 'https://www.facebook.com/amarajobcentre/', '', '', '9:00 am - 5:00 pm', 'room(204), 2nd Floor, Yar Zar Business Centre, 39 street, Bet 71 & 72 street, Mandalay', 'အမရာ အလုပ္ရွာေဖြေရးနွင့္ ဝန္ထမ္းရွာေဖြေရး ဝန္ေဆာင္မႈျဖစ္ပါသည္။'),
(24, 'အလုပ္အကိုင္ အခြင့္အလမ္း ရွာေဖြပါ group', '', '', '', 'default.jpg', 'https://www.facebook.com/groups/999638040171748/', '', '', '', '', 'အလုပ္အကိုင္ အခြင့္အလမ္း ရွာေဖြပါ group သည္ အလုပ္အကိုင္မ်ားစြာတင္ေပးေနေသာ fb group တစ္ခုျဖစ္ပါသည္။'),
(25, 'Excellence Employment Agency', 'excellence.employment.agency', '', '09-428862266, 09-95226016, 09-778112266', 'excellence employment.jpg', 'https://www.facebook.com/Excellence-Employment-Agency-315601938901918/', '', '', '', 'အမွတ္-A-4, ၃၈လမ္း၊ ၇၈လမ္းႏွင့္ ၇၉လမ္းၾကား၊ ေမာရွမ္းဌာေနစားေသာက္ဆိုင္ႏွင့္ မ်က္ေစာင္းထိုးဝင္းအတြင္းသို႔၊ မဟာေအာင္ေျမၿမိဳ႕နယ္၊ မႏၲေလးၿမိဳ႕ ', 'Excellence Employment Agency သည္ မႏၱေလးမွ အလုပ္အကိုင္မ်ားစြာရွာေဖြေပးသည့္ ေအဂ်င္စီတစ္ခုျဖစ္ပါသည္။'),
(26, 'အလုပ္အကိုင္ရွာေဖြေရး မႏၱေလး group', '', '', '', 'default.jpg', 'https://www.facebook.com/groups/jobvacancy.mandalay/', '', '', '', '', 'အလုပ္အကိုင္ရွာေဖြေရး မႏၱေလး group သည္ မႏၱေလးအလုပ္အကိုင္မ်ားတင္ေပးေနေသာ fb group တစ္ခုျဖစ္ပါသည္။'),
(27, 'Part time jobs only group', '', '', '', 'default.jpg', 'https://www.facebook.com/groups/1704689142900586/about/', '', '', '', '', 'အခ်ိန္ပိုင္းအလုပ္မ်ား သီးသန္႕ ( Part time jobs only ) သည္ အခ်ိန္ပိုင္းအလုပ္မ်ားသီးသန္႔တင္ေပးေနေသာ fb group ျဖစ္ပါသည္။'),
(28, 'Pa Pa Agency', 'papanaing20@gmail.com', '123', '09250016152', 'Screen Shot 04-24-18 at 10.05 PM.PNG', 'www.facebook.com/papa', 'www.papa.com', 'Mon to Fri', '9:00 am - 6:00 pm', 'North Okkalapa  \n                                ', 'ေအ၈်င္စီကုမၸဏီ                                ');

-- --------------------------------------------------------

--
-- Table structure for table `apply_user`
--

CREATE TABLE `apply_user` (
  `apply_user_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `apply_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apply_user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apply_user_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apply_user_job_position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apply_user_cv` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `apply_user`
--

INSERT INTO `apply_user` (`apply_user_id`, `agency_id`, `job_id`, `apply_date`, `apply_user_email`, `apply_user_phone`, `apply_user_job_position`, `apply_user_cv`) VALUES
(4, 1, 98, '2018-07-16 22:06:24', 'thura@gmail.com', '0956321487', 'Security', 'myintzu_cv.docx'),
(5, 1, 98, '2018-07-16 22:19:52', 'hnin@gmail.com', '265421', 'Security', 'cf.pdf'),
(25, 28, 97, '2018-07-16 23:18:12', 'toe@gmail.com', '15394652632', 'Design', 'toe.docx'),
(26, 28, 96, '2018-07-16 23:24:00', 'thitsar@gmail.com', '1566632', 'sample', 'thitsar.docx');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_svg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_svg`) VALUES
(1, 'Construction', 'fas fa-building'),
(2, 'Sales and Marketing', 'fa-chart-bar'),
(3, 'Officer', 'fa-address-card'),
(4, 'IT/Software', 'fas fa-keyboard'),
(5, 'Translator', 'fas fa-language'),
(6, 'Driver', 'fas fa-car'),
(7, 'Accounting', 'fa-money-bill-alt'),
(8, 'Engineering', 'fas fa-wrench'),
(9, 'Customer Support', 'fas fa-headphones'),
(10, 'Hospitality', 'fas fa-user-md'),
(11, 'Administrative', 'fas fa-user'),
(12, 'HR', 'fas fa-users'),
(13, 'Design/Development', 'fas fa-desktop'),
(14, 'Manager/Project Management', 'fas fa-handshake'),
(15, 'Education/Training', 'fab fa-leanpub'),
(16, 'Banking', 'fas fa-university'),
(17, 'Maintenance', 'fas fa-cogs'),
(18, 'Security', 'fas fa-shield-alt'),
(19, 'Writing/Editing', 'fas fa-edit'),
(21, 'Supervisor', 'fas fa-chart-line'),
(22, 'Others', 'fas fa-random');

-- --------------------------------------------------------

--
-- Table structure for table `date_posted`
--

CREATE TABLE `date_posted` (
  `date_posted_id` int(11) NOT NULL,
  `date_posted_day` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `date_posted`
--

INSERT INTO `date_posted` (`date_posted_id`, `date_posted_day`) VALUES
(1, 'All'),
(2, 'Today'),
(3, 'Past 2 Days'),
(4, 'Past 7 Days'),
(5, 'Past 30 Days');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `agency_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_post_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `job_post_date2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `job_position1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_cate1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job_desc1` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_ori1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `job_city` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `agency_id`, `job_type`, `job_post_date`, `job_post_date2`, `job_position1`, `job_cate1`, `job_desc1`, `job_ori1`, `job_city`) VALUES
(96, '28', 'full-time', 'a day ago', '2018-07-01', 'sample', 'HR', 'hr job', '', 'Nay Pyi Taw'),
(97, '28', 'part-time', '12 hours ago', '2018-07-13', 'Design', 'Design/Development', 'need designer', '', 'Nay Pyi Taw'),
(98, '1', 'full-time', '13 hours ago', '2018-07-13', 'Security', 'Others', '- need Security officer to work deeply and more and more\n- need Security officer to work deeply and more and more\n- need Security officer to work deeply and more and more\n- need Security officer to work deeply and more and more1', '', 'Yangon'),
(99, '2', 'part-time', '13 hours ago', '2018-07-13', 'Officer', 'Officer', '- need computer officer.', '', 'Mandalay');

-- --------------------------------------------------------

--
-- Table structure for table `job_city_location`
--

CREATE TABLE `job_city_location` (
  `job_city_location_id` int(11) NOT NULL,
  `job_city_location_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_city_location`
--

INSERT INTO `job_city_location` (`job_city_location_id`, `job_city_location_name`) VALUES
(1, 'Yangon'),
(2, 'Mandalay'),
(3, 'Nay Pyi Taw');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `job_type_id` int(11) NOT NULL,
  `job_type_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`job_type_id`, `job_type_name`) VALUES
(1, 'full-time'),
(2, 'part-time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency_info`
--
ALTER TABLE `agency_info`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `apply_user`
--
ALTER TABLE `apply_user`
  ADD PRIMARY KEY (`apply_user_id`),
  ADD UNIQUE KEY `apply_user_cv` (`apply_user_cv`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `date_posted`
--
ALTER TABLE `date_posted`
  ADD PRIMARY KEY (`date_posted_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_city_location`
--
ALTER TABLE `job_city_location`
  ADD PRIMARY KEY (`job_city_location_id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`job_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency_info`
--
ALTER TABLE `agency_info`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `apply_user`
--
ALTER TABLE `apply_user`
  MODIFY `apply_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `date_posted`
--
ALTER TABLE `date_posted`
  MODIFY `date_posted_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `job_city_location`
--
ALTER TABLE `job_city_location`
  MODIFY `job_city_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `job_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
