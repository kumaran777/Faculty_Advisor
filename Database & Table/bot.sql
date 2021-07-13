-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` mediumtext NOT NULL,
  `replies` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi|hello', 'Hello There..!'),
(2, 'college link|official link|clg link|website|website link', 'Click Here <a href=\'https://www.sonatech.ac.in/\'>https://www.sonatech.ac.in/</a> to go reach our official website..'),
(3, 'bye|Good night|gd ni8|Night|bye bye|see you later|talk to you later|text you later', 'Goodbye for now,Take care.'),
(4, 'Are you a robot?|are you robot|are u robot|are you a robot|r u robot', 'Yes I am a robot, but I’m a good one. Let me prove it. How can I help you?'),
(5, 'What’s up?', 'Not a lot, quiet day today.'),
(6, 'How are you?|How are you doing|How are you going?|how are you|how r u|how wa the day', 'My day is going fine thank you. Just working away.'),
(7, 'Good morning |Good evening | Good afternoon|Gm|Gn|mrng|evening|afternoon|Gd Mrng|Morning', 'Hello there'),
(8, 'How can you help me?|what will you do|about you|tell me about yourself', 'I\'m bot,I can answer questions about our College, our platform, and the industry.'),
(9, 'I have a question|can you help me?|i have a question|help me', 'Ask me your question,im here to help you'),
(10, 'Do you know a joke?|do you know joke|joke', 'Question: Why we are saying the letter \"T\" is like a Island <br>\r\nAnswer: Because it is in middle of waTer....!😂😁😆'),
(11, 'college name|College', 'Sona College of Technology'),
(12, 'College Address|address|college address', 'Address: Junction Main Rd, Salem, Tamil Nadu 636005'),
(13, 'location|College Location', '📎Junction Main Rd, Salem, Tamil Nadu 636005'),
(14, 'HOD\'s|list of HOD\'s|Dept HOD\'s', 'IT    -Dr.J.Akilandeswari <br>                 \r\nME    -Dr.D.Senthilkumar <br>\r\nCE    -Dr.R.Malathy  <br>\r\nEEE   -Dr.S.Padma <br>\r\nECE   -Dr.R.S.Sabeenian  <br>\r\nCSE   -Dr.B.Sathiyabhama  <br>\r\nFT    -Dr.D.Raja  <br>\r\nMechatronics -Dr.P.Suresh  <br>\r\nBio Medical Engineering -Dr.R.S.Sabeenian'),
(15, '|information technology|Information Technology', '<a href=\"https://www.sonatech.ac.in/it\" target=\"https://www.sonatech.ac.in/it\">Click here</a> to know more about Information Technology'),
(16, 'what are you doing|What are yoy Doing', 'I was made to handle busy. I love it. BRING ME MORE CONVERSATIONS.'),
(17, 'what\'s going on', 'Busier than the busiest bee on the busy bee day.'),
(18, 'fashion technology|Fashion Technology', '<a href=\"https://www.sonatech.ac.in/ft\" target=\"https://www.sonatech.ac.in/ft\">Click here</a> to know more about Fashion Technology'),
(19, 'Civil Engineering|civil engineering', '<a href=\"https://www.sonatech.ac.in/civil\" target=\"https://www.sonatech.ac.in/civil\">Click here</a> to know more about Civil Engineering\r\n'),
(20, 'Computer Science and Engineering|computer science and engineering', '<a href=\"https://www.sonatech.ac.in/cse\" target=\"https://www.sonatech.ac.in/cse\">Click here</a> to know more about Computer Science Engineering'),
(21, 'Electronics and Communication Engineering|electronics and communication engineering', '<a href=\"https://www.sonatech.ac.in/ece\" target=\"https://www.sonatech.ac.in/ece\">Click here</a> to know more about Electronics and Communication Engineering'),
(22, 'Electrical and Electronics Engineering|electrical and electronics engineering', '<a href=\"https://www.sonatech.ac.in/eee\" target=\"https://www.sonatech.ac.in/eee\">Click here</a> to know more about Electrical and Electronics Engineering'),
(23, 'mechanical engineering|Mechanical Engineering', '<a href=\"https://www.sonatech.ac.in/mech\" target=\"https://www.sonatech.ac.in/mech\">Click here</a> to know more about Mechanical Engineering'),
(24, 'Mechatronics Engineering|mechatronics engineering', '<a href=\"https://www.sonatech.ac.in/mechatronics\" target=\"https://www.sonatech.ac.in/mechatronics\">Click here</a> to know more about Mechatronics Engineering'),
(25, 'Bio Medical Engineering|bio medical engineering\r\n', '<a href=\"https://www.sonatech.ac.in/bio-medical/faculty-bio.php\" target=\"https://www.sonatech.ac.in/bio-medical/faculty-bio.php\">Click here</a> to know more about Bio Medical Engineering\r\n'),
(26, 'it placement|placement of it|IT Placement', '📌Various Training Programmes are organized to train the students in the areas of Aptitude, Quantitative Reasoning, Logical Reasoning and Verbal through the Reputed External Training centers and Alumni\'s.<br>\r\n📌Training in C, C++, DATA STRUCTURES, NETWORKS, JAVA and DBMS were conducted with the help of department faculty experts and through alumni.<br>\r\n📌\"Career Corner\" was created in our department library with books on GATE, GRE, TOFEL, CAT etc.<br>\r\n📌To see more info about placement and placed Student\'s<a href=\"https://www.sonatech.ac.in/it/sona-students-placement-it.php\" target=\"https://www.sonatech.ac.in/it/sona-students-placement-it.php\"> Click here</a>'),
(27, 'cse placement|placement of cse|CSE Placement', '📌The department has talented students with both technical and soft skill sets. <br>\r\n📌Their academic performance needs a special mention here.  <br>\r\n📌More than 30 final year students have a track record of 8.5 and above CGPA and remaining 80 odd students with consistent academic performance. <br>\r\n📌To see more info<a href=\"https://www.sonatech.ac.in/cse/placement-computer-science-engineering.php\" target=\"https://www.sonatech.ac.in/cse/placement-computer-science-engineering.php\"> Click here</a>'),
(28, 'civil placement|Civil placement|placement of civil', '📌<a href=\"sonatech.ac.in/civil/sona-civil-placement.php\" target=\"sonatech.ac.in/civil/sona-civil-placement.php\">Click here </a>to see Placement related activities of Civil'),
(29, 'ft placement|placement of ft|FT Placement', '📌Excellent labs with industry-grade machinery for hands-on training in textile and garment skills.<br>\r\n📌A comprehensive education and training package that more than meets every learner’s and industry’s needs\r\nWell-qualified, dedicated faculty who constantly focus on student-centred development to bring out industry-specific graduates<br>\r\n📌<a href=\"https://www.sonatech.ac.in/ft/sona-textile-placement.php\" target=\"https://www.sonatech.ac.in/ft/sona-textile-placement.php\"> Click here</a> to know more feeds about FT Placements.'),
(30, 'ece placement|ECE Placement|placement of ece', '📌The placement training program is offering to students from the beginning of 3rd semester. It is the part of curriculum. Weekly 2 time table hours are allocated for this placement training program.<br>\r\n📌<a href=\"https://www.sonatech.ac.in/ece/placement-electronics-communication-engineering.php\" target=\"https://www.sonatech.ac.in/ece/placement-electronics-communication-engineering.php\">Click here</a> to know more about ECE Placements.'),
(31, 'eee placement|EEE placement|Placement of EEE', '📌Conducted technical seminars related to Electrical and Electronics Engineering department and recent trends by Industry Experts, Alumni every month.<br>\r\n📌Arranged a \"Career Corner\" in our department library with books on GATE, GRE, TOFEL, CAT etc.<br>\r\n📌<a href=\"https://www.sonatech.ac.in/eee/placement-electrical-engineering-sona-college.php\" target=\"https://www.sonatech.ac.in/eee/placement-electrical-engineering-sona-college.php\"> Click here</a> to know more about EEE Placements.'),
(32, 'mechanical placement|Mechanical Placement|mech placements', '📌Mechanical Engineering Department is NBA & NAAC accredited, and has an intake of 180 students. Present overall strength is around 600 and the current faculty strength is 32.  A Department library has been set up with a lot of useful personality development books.<br>\r\n📌<a href=\"https://www.sonatech.ac.in/mech/mechanical-engineering-placement.php\" target=\"https://www.sonatech.ac.in/mech/mechanical-engineering-placement.php\"> Click here</a> to know more about Mechanical Placements.'),
(33, 'Contact|Details|Admission', '<b>Contact<b><br>\r\nAdmission Cell<br>\r\nSona College of Technology<br>\r\nSalem – 636 005<br>\r\nTamilnadu.<br>\r\n☎0427 - 4099998 /9442668758 / 9840447392,<br>\r\n+91 9442668758<br>\r\n📧admission[at]sonatech.ac.in<br>'),
(34, 'Curriculum|Syllabus', '<a href=\"https://www.sonatech.ac.in/academics/#\" target=\"https://www.sonatech.ac.in/academics/#\"> Click Here</a> to Know more details about the College Curriculum and Syllabus.'),
(35, 'NPTEL|nptel', '📢The National Programme on Technology Enhanced Learning (NPTEL) is a project funded by MHRD, Government of India. The project was initiated by seven Indian Institutes of Technology (Bombay, Delhi, Kanpur, Kharagpur, Madras, Guwahati and Roorkee) along with the Indian Institute of Science, Bangalore in 2003. The main objective of the project is to offer a high quality web based course on various engineering disciplines and core science for the students, faculties and industry persons <a href=\"\" target=\"\">Click here </a>to explore more...about NPTEL.'),
(36, 'rules|regulations|rules and regulations|Rules and Regulations ', '🖌Students should wear ID CARD inside the campus.<br>\r\n🖌Students should not disturb the classes by unnecessarily     \r\nmaking noise, standing on the corridor, lounge, etc.<br>\r\n🖌Students are strictly forbidden from smoking anywhere in the campus.<br>\r\n🖌<a href=\"https://www.sonatech.ac.in/academics/rules-regulations.php\" target=\"https://www.sonatech.ac.in/academics/rules-regulations.php\"> Click here</a> to know more about College Rules & Regulations.'),
(37, 'timing|Timing|College Timing|college timing', '👨🏽‍💼👩🏽‍💼Students<br>\r\n-----------------------------<br>\r\n📣Morning	09.00 am  -  12.55 pm<br>\r\n📣Lunch Interval	12.55 pm  -  01.55 pm<br>\r\n📣Afternoon	01.55 pm  -  04.50 pm<br>\r\n______________________\r\n👨🏽‍🏫👩🏽‍🏫Office<br>\r\n----------------------------<br>\r\n📣Morning	9.30 am  -  01.30 pm<br>\r\n📣Lunch Interval	01.30 pm  -  02.30 pm<br>\r\n📣Afternoon	02.30 pm  -  06.30 pm<br>'),
(38, 'history|History', '✨The Sona Group is steeped in more than 100 years of success and tradition tracing back to pre-Independence. The group was founded by the doyen of textile industries of the early twentieth century, Karumuttu Thiagarajar Chettiar. He oozed passion and patriotism for his motherland and fought for Her freedom along with other great freedom fighters of this nation. Karumuttu Thiagarajar Chettiar’s prominence is etched in the tapestry of our nation by the role he played in the transformation of Mohandas Karamchand Gandhi to Gandhiji, The Father of our Nation. This defining moment played out in 1938, within the walls of Karumuttu Thiagarajar Chettiar’s home when Gandhiji visited Madurai. Gandhiji wore his trademark Loin cloth, vowing not to wear a shirt every again after seeing daily wage workers who could not afford one.✨'),
(39, 'blackboard|bb|BB|Blackboard', '<a href=\"https://www.sonalearn.org/\"  target=\"https://www.sonalearn.org/\"> Click here</a> to Reach BlackBoard.'),
(40, 'sports|Sports', '🏆<br>\r\n🥇🥈🥉🏅<br>\r\nThe Department of Physical Education was established in the year 1997. The department is equipped with good infrastructure facilities and the students were given training in most of the Sports and Games which led to remarkable achievements by our students in Anna University Zone, Inter zone, District, state and National tournament.'),
(41, 'who is kumaran', 'avan oru paithiyakaaran');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'kumaran', 'kumaranraja777@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'varun', 'varn@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
