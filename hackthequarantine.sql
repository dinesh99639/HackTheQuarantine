-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 06:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackthequarantine`
--

-- --------------------------------------------------------

--
-- Table structure for table `round2`
--

CREATE TABLE `round2` (
  `userid` int(11) NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `q6` int(10) NOT NULL,
  `q7` int(10) NOT NULL,
  `q8` int(10) NOT NULL,
  `q9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `round2`
--

INSERT INTO `round2` (`userid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `college` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `hackerrank` varchar(255) NOT NULL,
  `round1` tinyint(1) NOT NULL DEFAULT 1,
  `round2` tinyint(1) NOT NULL DEFAULT 0,
  `round3` tinyint(1) NOT NULL DEFAULT 0,
  `round4` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `name`, `password`, `usertype`, `college`, `year`, `department`, `rollno`, `mobile`, `hackerrank`, `round1`, `round2`, `round3`, `round4`) VALUES
(-1, 'participant', 'Participant', 'z', 'participant', '-', 0, '-', '-', '-', '-', 1, 0, 0, 0),
(0, 'admin', 'Admin', 'z', 'admin', '-', 0, '-', '-', '-', '-', 1, 0, 0, 0),
(1, 'sindhu.gorle@gmail.com', 'Sindhu Gorli', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 3, 'CSE', '3.17127E+11', '8374777769', '', 1, 0, 0, 0),
(2, 'sravanig1999@gmail.com', 'Sravani Gembali', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 3, 'CSE', '3.17127E+11', '9491175664', '', 1, 0, 0, 0),
(3, 'tejpatnala14@gmail.com', 'Patnala Teja', 'htq2020', 'participant', 'Vignan\'s institute of information technology', 3, 'CSE', '17L31A05L0', '7095611338', '', 1, 0, 0, 0),
(4, 'hruthikasaripalli16@gmail.com', 'Hruthika Saripalli', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 3, 'ECE', '3.17127E+11', '7331175767', '', 1, 0, 0, 0),
(5, 'vennelapydisetty2001@gmail.com', 'Pydisetty Vennela', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology and Sciences', 2, 'CSE', '3.18127E+11', '7569164913', '', 1, 0, 0, 0),
(6, 'mathasrinivas32@gmail.com', 'MATHA SRINIVAS', 'htq2020', 'participant', 'GAYATRI VIDHYA PARISHAD COLLEGE OF ENGINEERING (AUTONOMOUS))', 3, 'CSE', '18135A0526', '9573974482', '', 1, 0, 0, 0),
(7, 'sriharibs97@gmail.com', 'Srihari B Sondur', 'htq2020', 'participant', 'KS Institute of Technology, VTU, Bangalore', 2, 'CSE', '1KS15CS105', '9972872971', '', 1, 0, 0, 0),
(8, 'revanthvasupalli@gmail.com', 'Revanth Vasupalli ', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences ', 2, 'CSE', '3.18127E+11', '8328056340', '', 1, 0, 0, 0),
(9, 'pavan.g2001@gmail.com', 'Guntuboina pavan kalyan', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences ', 2, 'CSE', '3.18127E+11', '9989141258', '', 1, 0, 0, 0),
(10, 'rohithapolamarasetty9478@gmail.com', 'Polamarasetty Rohitha', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences', 2, 'CSE', '3.18127E+11', '8790374939', '', 1, 0, 0, 0),
(11, 'yeshwanthsai5110@gmail.com', 'Vemavarapu Sai Yeshwanth', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology ans Sciences', 3, 'CSE', '3.17127E+11', '9160644645', '', 1, 0, 0, 0),
(12, 'mvr.nikhil68@gmail.com', 'Mulaveesala Raghava Rahul', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology and Sciences', 3, 'CSE', '3.17127E+11', '9515391851', '', 1, 0, 0, 0),
(13, 'prathyushasindhusha@gmail.com', 'Prathyusha Padmanabhuni ', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology and Sciences', 2, 'CSE', '3.18127E+11', '9052318486', '', 1, 0, 0, 0),
(14, 'alamuriganeshkumar@gmail.com', 'Ganesh Kumar Alamuri', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Science', 2, 'CSE', '3.18127E+11', '9398729624', '', 1, 0, 0, 0),
(15, 'jyothipasagadugula57@gmail.com', 'Naga jyothi ', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences ', 2, 'CSE', '3.18127E+11', '9515529730', '', 1, 0, 0, 0),
(16, 'vandanakillari54935@gmail.com', 'Killari Vandana ', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and sciences ', 2, 'CSE', '3.18127E+11', '7331175838', '', 1, 0, 0, 0),
(17, 'maniswaroop24@gmail.com', 'Sodadasi Mani Swaroop', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences', 3, 'ECE', '3.17127E+11', '7661055079', '', 1, 0, 0, 0),
(18, 'narendranarendrarocks007@gmail.com', 'Narendra Yasarapu', 'htq2020', 'participant', 'MVGR college of engineering ', 3, 'CSE', '17331A05H7', '9121900902', '', 1, 0, 0, 0),
(19, 'sruthirokalla369@gmail.com', ' Sruthi Rokkala', 'htq2020', 'participant', 'MVGR college of engineering ', 2, 'CSE', '18331a05c5', '6304197760', '', 1, 0, 0, 0),
(20, 'sriveniguna7@gmail.com', 'KALAKONDA GUNA SRI SAI VENI', 'htq2020', 'participant', 'ANIL NEERUKONDA INSTITUTE OF TECHNOLOGY AND SCIENCES', 3, 'CSE', '3.17127E+11', '9441092000', '', 1, 0, 0, 0),
(21, 'venkatamanikanta47@gmail.com', 'VENKATA MANIKANTA KALLURI', 'htq2020', 'participant', 'ANIL NEERUKONDA INSTITUTE OF TECHNOLOGY AND SCIENCES', 3, 'IT', '3.17127E+11', '9505036352', '', 1, 0, 0, 0),
(22, 'sudarshanbvg@gmail.com', 'BVNSG SUDARSHAN', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology & Sciences', 2, 'OTHERS', '3.18127E+11', '7995362032', '', 1, 0, 0, 0),
(23, 'sumasagi20@gmail.com', 'Sagi Suma', 'htq2020', 'participant', 'Jntu vizaynagaram', 3, 'CSE', '17VV1A1234', '9182181159', '', 1, 0, 0, 0),
(24, 'razab507@gmail.com', 'Razab Ali', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 3, 'EEE', '3.17127E+11', '9441326355', '', 1, 0, 0, 0),
(25, 'kiran09082001@gmail.com', 'G kiran kumar', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Science', 2, 'CSE', '3.18127E+11', '6302792963', '', 1, 0, 0, 0),
(26, 'ruthwikiso@gmail.com', 'Kancharla Sai Ruthwik', 'htq2020', 'participant', 'Amrita School of Engineering', 2, 'CSE', 'AM.EN.U4CSE18027', '9951260149', '', 1, 0, 0, 0),
(27, 'sunilgottipalli2001@gmail.com', 'Gottipalli Sai Sunil', 'htq2020', 'participant', 'Baba institute of technology and science', 2, 'CSE', '18NR1A0535', '6300064525', '', 1, 0, 0, 0),
(28, 'vjaiwantx@gmail.com', 'Vinayak Jaiwant ', 'htq2020', 'participant', 'KLE Dr.M.S.Sheshgiri College of Engineering and Technology,Belgaum,Karnataka.', 3, 'CSE', '2KL17CS104', '6360139215', '', 1, 0, 0, 0),
(29, '7013131811n@gmail.com', 'Nikhita Namburu ', 'htq2020', 'participant', 'Sri Padmavathi Mahila Viswavidyalayam, Tirupati', 3, 'CSE', '1771057', '6303891066', '', 1, 0, 0, 0),
(30, 'abhinavch53@gmail.com', 'abhinav', 'htq2020', 'participant', 'GITAM University', 1, 'CSE', '1.2191E+11', '8978687566', '', 1, 0, 0, 0),
(31, 'muvvanagajyothi@gmail.com', 'Muvva Naga Jyothi ', 'htq2020', 'participant', 'Sri padmavathi mahila visvavidhyalayam tirupathi ', 3, 'ECE', '1772045', '9640929151', '', 1, 0, 0, 0),
(32, 'pranavms13@yahoo.com', 'Pranav M S', 'htq2020', 'participant', 'K S Institute of Technology', 2, 'CSE', '1KS18CS069', '6361563076', '', 1, 0, 0, 0),
(33, 'ramachandrajune25@gmail.com', 'Rama Chandra Nidamarthi', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 3, 'CSE', '3.17127E+11', '8790544280', '', 1, 0, 0, 0),
(34, 'saketh2513@gmail.com', 'koyya saketh venkata sai', 'htq2020', 'participant', 'gitam vizag', 1, 'CSE', '1.2191E+11', '9502946769', '', 1, 0, 0, 0),
(35, 'saiyasaswinikarakavalasa@gmail.com', 'KARAKAVALASA SAI YASASWINI ', 'htq2020', 'participant', 'MAHARAJA VIJAYARAM GAJAPATHI RAJ COLLEGE OF ENGINEERING ', 3, 'ECE', '17331A0475', '9182786750', '', 1, 0, 0, 0),
(36, 'harshiniallada14@gmail.com', 'Allada Harshini Lakshmi Durga ', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology And Science ', 2, 'CSE', '3.18127E+11', '9440507230', '', 1, 0, 0, 0),
(37, 'sai300501@gmail.com', 'Dasari Mohan Manikanta Sai', 'htq2020', 'participant', 'Anil Neerukonda Institute of technology and sciences', 2, 'CSE', '3.18127E+11', '9515061217', '', 1, 0, 0, 0),
(38, 'chennaraviteja12@gmail.com', 'Ravi Teja Chenna', 'htq2020', 'participant', 'G. PULLAIAH COLLEGE OF ENGINEERING AND TECHNOLOGY', 3, 'CSE', '17AT1A0575', '6302567450', '', 1, 0, 0, 0),
(39, 'sabbisettyhemalatha2000@gmail.com', 'SABBISETTY HEMALATHA', 'htq2020', 'participant', 'GVPW', 3, 'CSE', '17JG1A0598', '9121025960', '', 1, 0, 0, 0),
(40, 'chayasri99@gmail.com', 'Satyavarapu Chayasri', 'htq2020', 'participant', 'GVPW', 3, 'CSE', '17JG1A05A0 ', '9133164366', '', 1, 0, 0, 0),
(41, 'srikarsteyn100@gmail.com', 'J Sai Ganesh Srikar', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences', 2, 'CSE', '3.18127E+11', '6303743129', '', 1, 0, 0, 0),
(42, 'satyasaipraveen2001@gmail.com', 'KANTA SATYA SAI PRAVEEN', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 2, 'CSE', '3.18127E+11', '7569653541', '', 1, 0, 0, 0),
(43, 'saipalla73@gmail.com', 'P. Sai hemanth', 'htq2020', 'participant', 'Aditya collage of eng', 1, 'ECE', '19MH1A04E0', '7036080617', '', 1, 0, 0, 0),
(44, 'ratnalasaishanmukharao@gmail.com', 'Ratnala saishanmukharao', 'htq2020', 'participant', 'Gmr institute of technology', 2, 'CSE', '18341A05C1', '9381410771', '', 1, 0, 0, 0),
(45, 'sushmitathappeta311@gmail.com', 'T.Sushmitha', 'htq2020', 'participant', 'University', 3, 'CSE', '1771103', '9398473744', '', 1, 0, 0, 0),
(46, 'anitha.ilavarapu@gmail.com', 'Anitha ilavarapu ', 'htq2020', 'participant', 'Spmvv', 3, 'CSE', '1771001', '7013609804', '', 1, 0, 0, 0),
(47, 'divyanshuk1506@gmail.com', 'Divyanshu Kumar', 'htq2020', 'participant', 'Gitam University, Visakhapatnam', 1, 'CSE', '1.2191E+11', '8688959718', '', 1, 0, 0, 0),
(48, 'sharvani2412@gmail.com', 'Emandi Venkata konda Sharvani', 'htq2020', 'participant', 'Anil Neerukonda Institute of technology and science', 2, 'CSE', '3.18127E+11', '9848664607', '', 1, 0, 0, 0),
(49, 'praneethmulukurigmr@gmail.com', 'Praneeth Mulukuri', 'htq2020', 'participant', 'GMR Institute Of Technology', 2, 'CSE', '18341A0584', '8247552540', '', 1, 0, 0, 0),
(50, 'amittalluratom@gmail.com', 'Amit Tallur', 'htq2020', 'participant', 'KLE DR.M S Sheshgiri College of Engineering and Technology, Belagavi', 2, 'CSE', '2KL18CS009', '7996389821', '', 1, 0, 0, 0),
(51, 'pradeepkatari12345@gmail.com', 'Pradeep Katari', 'htq2020', 'participant', 'Vignan\'s Foundation for Science, Technology & Research', 3, 'CSE', '171FA04276', '7013348006', '', 1, 0, 0, 0),
(52, 'viswamohan02@gmail.com', 'DANTULURI VISWAMOHAN', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and science ', 2, 'CSE', '3.18127E+11', '8106064860', '', 1, 0, 0, 0),
(53, 'cndhnaidu9@gmail.com', 'Chandrashekhar ', 'htq2020', 'participant', 'ANITS', 2, 'CSE', '3.18126E+11', '9987033774', '', 1, 0, 0, 0),
(54, 'sravanyabendi2001@gmail.com', 'Sravanya Bendi', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology and Sciences', 2, 'CSE', '3.18127E+11', '6302116331', '', 1, 0, 0, 0),
(55, 'chaitanyasai321@gmail.com', 'Neelapu Sai Chaitanya Reddy', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences', 2, 'CSE', '3.18127E+11', '8500928956', '', 1, 0, 0, 0),
(56, 'snehakirankonchada@gmail.com', 'Konchada Sneha Kiran', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences', 2, 'CSE', '3.18127E+11', '9000343908', '', 1, 0, 0, 0),
(57, 'msheela.18.cse@anits.edu.in', 'Minank Sheela ', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences', 2, 'CSE', '3.18127E+11', '9492234769', '', 1, 0, 0, 0),
(58, 'bhanuprakashsakkuri@gmail.com', 'Sakkuri bhanu prakash', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences ', 2, 'CSE', '3.18127E+11', '8639630857', '', 1, 0, 0, 0),
(59, '2001sridivyaG@gmail.com', 'G. Sridivya', 'htq2020', 'participant', 'Anil neerukonda institute of technology and science', 2, 'CSE', '3.18127E+11', '8247030122', '', 1, 0, 0, 0),
(60, 'saicharangangu31@gmail.com', 'Sai charan gangu', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology and Sciences', 2, 'CSE', '3.18127E+11', '7036119855', '', 1, 0, 0, 0),
(61, 'prateekprabhu1.p@gmail.com', 'Prateek Mohan Prabhu ', 'htq2020', 'participant', 'KLE Dr. M.S.Sheshgiri College Of Engineering and Technology, Belgaum', 2, 'CSE', '2KL18CS049', '7406590078', '', 1, 0, 0, 0),
(62, 'yeswanthmaguluri23@gmail.com', 'Maguluri Yaswanth ', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences ', 2, 'CSE', '3.18127E+11', '6301456559', '', 1, 0, 0, 0),
(63, 'vivekvavilapalli2000@gmail.com', 'vivek vavilapalli', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology and Sciences', 2, 'CSE', '3.18127E+11', '8332037033', '', 1, 0, 0, 0),
(64, 'vrldsdeepika@gmail.com', 'V. Deepika Rani', 'htq2020', 'participant', 'Jntuk-University College Of Engineering,Vizianagaram', 3, 'IT', 'Jntuk-University college of Engineering,Vizanagaram', '8555876136', '', 1, 0, 0, 0),
(65, 'chandanjustin888@gmail.com', 'Chandan kumar ', 'htq2020', 'participant', 'Raghu Engineering College', 2, 'CSE', '18981A0529', '8367584527', '', 1, 0, 0, 0),
(66, 'burrijeevanprasanth@gmail.com', 'Jeevan Prasanth', 'htq2020', 'participant', 'Anil Neerukonda Institute of technology and sciences', 3, 'CSE', '3.17127E+11', '8247567513', '', 1, 0, 0, 0),
(67, 'chandralekhachandralekha068@gmail.com', 'R.chandra lekha', 'htq2020', 'participant', 'Vignan\'s institute of engineering for women\'s', 2, 'IT', '18NM1A1240', '8919364674', '', 1, 0, 0, 0),
(68, 'borraakash@gmail.com', 'Aakash Borra', 'htq2020', 'participant', 'Anil Neerukonda institute of technology and sciences ', 3, 'ECE', '3.17127E+11', '7993704730', '', 1, 0, 0, 0),
(69, 'priyankasinganapalli@gmail.com', 'S.Priyanka', 'htq2020', 'participant', 'Viswanadha Institute Of Technology And Management', 3, 'CSE', '17521A0519', '7674962787', '', 1, 0, 0, 0),
(70, 'chaitanya.kassetti@gmail.com', 'Kassetti. Shyam Krishna Chaitanya', 'htq2020', 'participant', 'Maharaj Vijayaram Gajapathi Raj College of Engineering (Autonomous)', 3, 'ECE', '18335A0413', '8179599299', '', 1, 0, 0, 0),
(71, 'loki.naveen549@gmail.com', 'LOKESH KUMAR SIMMA', 'htq2020', 'participant', 'Anil Neerukonda Institute of technology and sciences', 2, 'CSE', '3.18127E+11', '7981405016', '', 1, 0, 0, 0),
(72, 'srivallabhtata@gmail.com', 'TATA SRI VALLABH', 'htq2020', 'participant', 'ANIL NEERUKONDA INSTITUTE OF TECHNOLOGY AND SCIENCE', 1, 'CSE', '3.19127E+11', '9347888595', '', 1, 0, 0, 0),
(73, 'bhavyaborra2002@gmail.com', 'Bhavya ', 'htq2020', 'participant', 'Maharaj vijayaram Gajapathiraj college of Engineeeing', 1, 'CSE', '19331A0525', '8464836101', '', 1, 0, 0, 0),
(74, 'gsomeswari970@gmail.com', 'Guduru someswari', 'htq2020', 'participant', 'Sri padmavathi mahila Visvavidyalaya', 3, 'CSE', '1771094', '7013490092', '', 1, 0, 0, 0),
(75, 'saitejabandaru17@gmail.com', 'B.Saiteja ', 'htq2020', 'participant', 'Mvgr ', 3, 'ECE', '17331A0413', '9949124635', '', 1, 0, 0, 0),
(76, 'aiswarayaseepana@gmail.com', 'Aiswarya', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences', 2, 'CSE', '3.18127E+11', '7893309363', '', 1, 0, 0, 0),
(77, 'shamithashaik17@gmail.com', 'P.S.SHEMITHA ', 'htq2020', 'participant', 'SRI PADMAVATHI MAHILA VISWAVIDYALAYAM ', 3, 'CSE', '1771087', '7901268865', '', 1, 0, 0, 0),
(78, 'girijathoti5@gmail.com', 'Girija', 'htq2020', 'participant', 'Sri padmavati women\'s University', 3, 'CSE', '1771019', '9000426516', '', 1, 0, 0, 0),
(79, 'bantukavyasri@gmail.com', 'Kavya Sri ', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology and Sciences ', 2, 'CSE', '3.18127E+11', '7013257644', '', 1, 0, 0, 0),
(80, '18981a05c1rec@gmail.com', 'Tanmayi Relangi', 'htq2020', 'participant', 'Raghu Engineering College', 2, 'CSE', '18981A05C1', '9989662349', '', 1, 0, 0, 0),
(81, 'chitrasharan2000@gmail.com', 'Sharan', 'htq2020', 'participant', 'Raghu engineering college', 2, 'CSE', '18981A0535', '7382378883', '', 1, 0, 0, 0),
(82, 'hemanthmodani2001@gmail.com', 'Hemanth', 'htq2020', 'participant', 'Gandhi institute of technology and management (GITAM)', 1, 'CSE', '1.2191E+11', '9701598176', '', 1, 0, 0, 0),
(83, 'srilekha.mabbu22@gmail.com', 'M Srilekha ', 'htq2020', 'participant', 'Sri padmavathi mahila university ', 3, 'CSE', '1771097', '9491971258', '', 1, 0, 0, 0),
(84, 'jithendhra567@gmail.com', 'KAYITHI JITHENHDRA YADAV', 'htq2020', 'participant', 'MVGR college of engineering ', 3, 'CSE', '17331A0567', '8074467501', '', 1, 0, 0, 0),
(85, 'roja223rani@gmail.com', 'Annam Roja Rani', 'htq2020', 'participant', 'MVGR College Of Engineering', 3, 'IT', '17331A1203', '9492851216', '', 1, 0, 0, 0),
(86, 'layapatnaik199@gmail.com', 'MP LAYA SRUTHI', 'htq2020', 'participant', 'MVGR College of engineering', 3, 'IT', 'MVGR College of engineering', '9912455495', '', 1, 0, 0, 0),
(87, 'Hemu63181indu@gmail.com', 'Buddharaju Hemanth Varma ', 'htq2020', 'participant', 'Raghu engineering college ', 2, 'CSE', '18981A0527', '9703777552', '', 1, 0, 0, 0),
(88, 'boppesricharan@gmail.com', 'B N S Sri Charan', 'htq2020', 'participant', 'Raghu Engineering College ', 2, 'CSE', '18981A0524', '6309833542', '', 1, 0, 0, 0),
(89, 'gsspranav@gmail.com', 'Gokavarapu Satya Surya Pranav', 'htq2020', 'participant', 'MVGR College of Engineering', 3, 'ECE', '17331A0454', '9110763997', '', 1, 0, 0, 0),
(90, 'illasomsekhar4118@gmail.com', 'Illa Somasekhar ', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 2, 'CSE', '3.18127E+11', '8185869436', '', 1, 0, 0, 0),
(91, 'bhargavi.marni@gmail.com', 'Bhargavi Marni', 'htq2020', 'participant', 'Gayatri Vidya parishad college of engineering for women', 3, 'CSE', '17JG1A0572', '8499934292', '', 1, 0, 0, 0),
(92, 'karrisrujan2@gmail.com', 'K. SRUJAN', 'htq2020', 'participant', 'Koneru laksmayya university ', 1, 'CSE', '190030749', '7995323296', '', 1, 0, 0, 0),
(93, 'ruchita1912001@gmail.com', 'Ruchita Podugu', 'htq2020', 'participant', 'Anil Neerukonda Institute of Science and Technology', 2, 'CSE', '3.18127E+11', '9121843662', '', 1, 0, 0, 0),
(94, 'ysridevi2001@gmail.com', 'Yamala Sridevi', 'htq2020', 'participant', 'Anil Neerukonda Institute Of Technology And Sciences', 2, 'CSE', '3.18127E+11', '9490899708', '', 1, 0, 0, 0),
(95, 'himanushchintu@gmail.com', 'Kurakula Himanush', 'htq2020', 'participant', 'ANITS ', 2, 'CSE', '3.18127E+11', '9640344218', '', 1, 0, 0, 0),
(96, 'madhunitesh.b@gmail.com', 'Madhu Nitesh', 'htq2020', 'participant', 'ANITS', 2, 'CSE', '3.18127E+11', '8184802525', '', 1, 0, 0, 0),
(97, 'indranisaipranavi@gmail.com', 'P. Indrani Sai Pranavi', 'htq2020', 'participant', 'Anil Neerukonda Institute of technology and sciences', 3, 'IT', '3.17127E+11', '9494093703', '', 1, 0, 0, 0),
(98, 'yaminidamarla369@gmail.com', 'Yamini Krishna Damarla', 'htq2020', 'participant', 'Anil Neerukonda Institute of Technology & Sciences', 2, 'CSE', '3.18127E+11', '8464880592', '', 1, 0, 0, 0),
(99, 'sailajaperi2000@gmail.com', 'Peri Venkata Sailaja', 'htq2020', 'participant', 'MVGR college of engineering', 3, 'CSE', '17331A05C5', '8142072887', '', 1, 0, 0, 0),
(100, 'sailatha7279@gmail.com', 'Sherumahamadupuram Sailatha', 'htq2020', 'participant', 'Maharaj vijayaram Ganapathi raj college of engineering', 3, 'CSE', '17331A05F3', '9121837279', '', 1, 0, 0, 0),
(101, 'sujithasaranam@gmail.com', 'SUJITHA SARANAM', 'htq2020', 'participant', 'MVGR college of engineering', 3, 'CSE', '17331A05E5', '7330712005', '', 1, 0, 0, 0),
(102, 'praneetha311@gmail.com', 'Ronanki Sai Praneetha ', 'htq2020', 'participant', 'Maharaja Vijayaram Gajapathi Raj College Of Engineering ', 3, 'CSE', '17331A05E1', '7993570023', '', 1, 0, 0, 0),
(103, 'polakipraveena07534@gmail.com', 'Polaki Praveena', 'htq2020', 'participant', 'Maharaj Vijayaram Gajapathi Raj College of Engineering', 3, 'CSE', '17331A05D0', '8374822894', '', 1, 0, 0, 0),
(104, 'prathyushakorra@gmail.com', 'Korra Prathyusha', 'htq2020', 'participant', 'Anil Nerukonda institute of technology & sciences', 2, 'CSE', '3.18127E+11', '9440314048', '', 1, 0, 0, 0),
(105, 'vzmanusha@gmail.com', 'Anusha Akshintala ', 'htq2020', 'participant', 'Maharaj Vijayram gajapathi raj college of Engineering ', 3, 'CSE', '17331A0504', '7587037178', '', 1, 0, 0, 0),
(106, 'sarmistanjali.17.cse@anits.edu.in', 'G. sarmistanjali', 'htq2020', 'participant', 'ANIL NEERUKONDA INSTITUTE OF TECHNOLOGY AND SCIENCES', 3, 'CSE', '3.17127E+11', '7981672293', '', 1, 0, 0, 0),
(107, 'nikhilkudupudi@gmail.com', 'Kudupudi Nikhil', 'htq2020', 'participant', 'GMRIT', 2, 'CSE', '18341A0567', '6303897007', '', 1, 0, 0, 0),
(108, 'chandra369mouli@gmail.com', 'Thammineni naga chandra mouli', 'htq2020', 'participant', 'anil neerukonda institute of technology and sciences', 3, 'CSE', '3.17127E+11', '6301799867', '', 1, 0, 0, 0),
(109, 'krishnareddychittela@gmail.com', 'Ch Venkata Krishna reddy', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 3, 'CSE', '3.17127E+11', '9121076624', '', 1, 0, 0, 0),
(110, 'vinyagudla1@gmail.com', 'Vinya', 'htq2020', 'participant', 'ANITS', 2, 'CSE', '3.17127E+11', '7675850829', '', 1, 0, 0, 0),
(111, 'sriharsha.boddeti@gmail.com', 'Boddeti Sri Harsha ', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 2, 'CSE', '3.18127E+11', '9133572468', '', 1, 0, 0, 0),
(112, 'jpjyothipriyasureddi@gmail.com', 'Jyothipriya Sureddi ', 'htq2020', 'participant', 'ANITS', 2, 'CSE', '3.18127E+11', '8985129566', '', 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `round2`
--
ALTER TABLE `round2`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
