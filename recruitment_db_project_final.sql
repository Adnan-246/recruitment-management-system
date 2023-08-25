-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 03:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment_db_project_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `apply_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_descrip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_expect` int(11) DEFAULT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_letter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `stage1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interviewers` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `job_id`, `user_id`, `apply_date`, `f_name`, `l_name`, `name`, `email`, `phone`, `dob`, `gender`, `country`, `state`, `city`, `address`, `education`, `experience`, `experience_descrip`, `salary_expect`, `resume`, `cover_letter`, `status`, `stage1`, `stage2`, `interviewers`, `note`, `created_at`, `updated_at`) VALUES
(2, 4, NULL, '2022-12-24', 'Adnan', 'Habib', 'Adnan Habib', 'habibadnan222day@gmail.com', '01748088162', NULL, NULL, 'Bangladesh', 'DK', 'mirpur', '12', 'Bachelor Degree', '1 - 2 Years', 'hgfhfghn', 100000, 'files1672299859.pdf', 'fu8erygfjheyu.\r\neyfghdgg', 'Active', 'Hiring', 'Reference Check', 'Habib Adnan,Tazim Doha,Pappu', NULL, NULL, '2022-12-29 01:44:19'),
(3, 5, NULL, '2022-12-27', 'Adnan', 'Habib', 'Adnan Habib', 'c@gmail.com', '01748088158', NULL, NULL, 'Bangladesh', 'DK', 'mirpur', '12', 'Bachelor Degree', '5 - 10 Years', 'ergvdrfgv', 25000, '1672147659.pdf', 'dfvdfgvdfs', 'Active', 'Interview', 'Background Check', 'Habib Adnan,Pappu', 'tyfygy7', NULL, '2022-12-27 08:58:22'),
(4, 6, NULL, '2022-12-29', 'Pappu', 'monir', 'Pappu Monir', 'habibadnan2day1@gmail.com', '01904174516', NULL, NULL, 'Bangladesh', 'Savar', 'mirpur', '12', 'Bachelor Degree', '2 - 4 Years', 'regdf', 12000, '1672299662.pdf', 'rtgmjfgjhjj', 'New', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, NULL, '2022-12-29', 'sfad', 'fgfb', 'sfad fgfb', 'fbfh@gmail.com', '01302549874', NULL, NULL, 'Bangladesh', 'Cox\'s Bazar', 'mirpurkolatoli', '12', 'Bachelor Degree', '2 - 4 Years', 'cxc', 100000, '1672301018.pdf', 'fbcvbvbn', 'New', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, NULL, '2023-01-01', 'omi', 'vai', NULL, 'omi.vai@gmail.com', '01550-256548', '1995-07-13', 'Male', 'Bangladesh', 'DK', 'Mirpur', 'Sagupta, DOHS', 'Masters Degree or Higher', '5 - 10 Years', 'hnvb', 100000, '1672581387.pdf', 'gfbv', 'New', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 6, NULL, '2023-01-01', 'pulok', 'vai', NULL, 'pulok@gmail.com', '01617-251474', '1990-07-18', 'Male', 'Bangladesh', 'DK', 'Mirpur', 'Muslim Bazar', 'Bachelor Degree', '2 - 4 Years', 'hgfbv', 25000, '1672581626.pdf', 'hgnvbv', 'New', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id_no` int(11) DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `candidate_id`, `role_id`, `user_id`, `employee_id_no`, `f_name`, `l_name`, `name`, `education`, `department`, `position_name`, `email`, `phone`, `country`, `state`, `city`, `zip_code`, `address`, `about`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, NULL, NULL, NULL, NULL, 'Adnan Habib', NULL, 'Marketing', 'Content Manager', 'habib@gmail.com', '01748088262', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-02 22:28:15'),
(2, NULL, 3, NULL, NULL, NULL, NULL, 'Pappu', NULL, 'Support', 'Customer Service Executive', 'pappu@gmail.com', '01304256874', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `interview_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interviewer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'scheduled',
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`id`, `candidate_id`, `interview_date`, `interview_time`, `interviewer`, `interview_status`, `reason`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-12-27', '02:00PM', 'Habib Adnan', 'Accepted', NULL, NULL, NULL, '2022-12-27 09:40:52'),
(2, 2, '2022-12-27', '04:00PM', 'Adnan Habib', 'scheduled', NULL, NULL, NULL, NULL),
(3, 2, '2022-12-27', '03:00PM', 'Pappu', 'Accepted', NULL, NULL, NULL, '2022-12-27 09:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id_no` int(11) DEFAULT NULL,
  `ref_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` int(11) DEFAULT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `position_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_id_no`, `ref_code`, `position_name`, `description`, `post_date`, `start_date`, `end_date`, `vacancy`, `requirement`, `salary`, `position_type`, `location`, `experience`, `education`, `file`, `f_name`, `l_name`, `name`, `email`, `phone`, `cover_letter`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '45433', 'Operations Research Analyst', 'We are looking for an analytical Operations Research Analyst to be responsible for the formulation and application of mathematical and optimization modeling to decision making, policy formulations, and other functions of our business operations. The Operations Research Analyst will collect and analyze data on business operations, identify and understand potential or existing problems, show the implications of different actions to solve the problems, and assist in the decision-making process. Ultimately, the Operations Research Analyst will assist the leadership team in the allocation of resources, production schedule development, supply chain management, and pricing procedures.\r\n\r\nTo be a successful Operations Research Analyst, you should have strong analytical, decision-making, and problem-solving skills. You should also have good technical and computer literacy skills and should demonstrate a strong understanding of mathematics and data analysis.', '2022-10-26', NULL, '2022-11-05', 2, 'A Bachelor\'s degree in Operations Research, Engineering, Computer Science, Mathematics, or related field.\r\nA Master\'s degree would be advantageous.\r\nExcellent analytical, critical thinking, problem-solving, and mathematical skills.\r\nStrong communication, interpersonal, and report writing skills.\r\nComputer literacy and familiarity with advanced statistical and database software.', 80000, 'Part Time Temporary', 'Makati, PH', '2 - 4 Years', 'Bachelor Degree', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-11-10 01:57:34'),
(2, 101, '65655', 'Independent Consultant', 'We are searching for a reliable and trustworthy Independent Consultant to join our team. The Independent Consultant’s responsibilities include analyzing organization operations, interviewing managers, professionals, and employees, and preparing reports and presentations. You should also schedule meetings with the relevant parties and organize workshops or training sessions as required.\r\n\r\nTo be successful as an Independent Consultant, you should have a wealth of knowledge and experience within your field and the ability to identify and solve problems. Outstanding candidates are observant, perceptive, and demonstrate superb research skills.', '2022-10-27', NULL, '2022-11-04', 1, 'Degree in the relevant discipline.\r\nA Master’s degree would be advantageous.\r\nSeveral years of experience in a relevant field or role required.\r\nA relevant license or certification in Business Management or similar would be a plus.\r\nSuperb analytical, observational, and interpersonal skills.\r\nExceptional written and verbal communication skills.\r\nExcellent report writing and presentation skills.\r\nAbility to manage workflow and time.\r\nA valid driver’s license and reliable transport.', 115000, 'Contractor', 'San Francisco, CA', '2 - 4 Years', 'Masters Degree or Higher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-10-26 04:21:56'),
(3, 102, '35667', 'Customer Service Associate', 'We are looking for an outgoing Customer Service Associate to assist our customers with product inquiries in a swift, proficient and friendly manner. The Customer Service Associate will be instrumental in customer retention by addressing concerns and product issues, and by communicating in a professional, positive manner. You will apply your multitasking skills by listening and speaking to customers, navigating computers, and typing call documentation simultaneously. You will have the ability to swiftly gain customer confidence and trust.\r\n\r\nTo ensure success in this position you will have the ability to maintain sound knowledge of products and services and be an effective communicator. Top candidates are detail-oriented, motivated and have excellent people skills.', '2022-10-28', NULL, '2022-12-10', 5, 'High School Diploma, GED, or suitable equivalent.\r\n1+ years customer service experience, preferably in related field.\r\nSuccessful completion of provided training.\r\nProficient computer skills.\r\nExperience with CRM preferrred.\r\nProficient with MS Office suites.\r\nExcellent phone etiquette.\r\nOutstanding communication skills, both verbal and written.\r\nStrong people skills.\r\nAbility to sit at a desk for extended periods.', 50000, 'Part-Time Regular', 'Makati, PH', '1 - 2 Years', 'Associate Degree', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 01:48:07'),
(4, 103, '12345', 'Project Engineer', 'We are looking for a dedicated Project Engineer to assist with the scheduling, planning, forecasting, resourcing, and managing of technical activities to ensure project accuracy and quality. The Project Engineer is responsible for the engineering and technical disciplines of ongoing projects and will establish inspection criteria for the proper implementation of all the elements of a project.\r\n\r\nTo be a successful Project Engineer, you should have the ability to work with multiple discipline projects and demonstrate excellent project management and supervision skills. You should also have excellent organizational, time management, leadership, and decision-making skills.', '2022-10-29', NULL, '2022-12-08', 3, 'A Bachelor\'s degree in Engineering or a related field.\r\nA valid Engineering license.\r\n4 or more years\' field and project planning experience.\r\nExcellent computer literacy and knowledge of design and visualization software.\r\nThe ability to work with multiple discipline projects.\r\nExcellent project management and supervision skills.\r\nExcellent organizational, time management, leadership, and decision-making skills.\r\nStrong written and verbal communication skills.\r\nKnowledge of applicable codes, policies, standards, and best practices.', 155000, 'Full-Time Regular', 'San Francisco, CA', '5 - 10 Years', 'Masters Degree or Higher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(5, 104, '45453', 'Head of Operations', 'We are looking for a well-organized Head of Operations to oversee activities across various departments. The responsibilities of a Head of Department include formulating strategies, ensuring regulatory compliance, and managing the implementation of IT systems. You should also design policies and ensure that customer service is up to standard.\r\n\r\nTo be successful as a Head of Operations, you should demonstrate solid leadership and analytical skills, exhibit strong business acumen, as well as a commitment to productivity. Ultimately, a competent Head of Operations should ensure staff productivity.', '2022-10-30', NULL, '2022-12-10', 1, 'Bachelor\'s degree in Business, Computer Science, or a related field.\r\nExperience as a Head of Operations or in a similar role.\r\nKnowledge of business functions.\r\nSolid knowledge of data analytics.\r\nStrong mathematical literacy.\r\nExcellent organizational and leadership qualities.\r\nA strategic thinker.', 210000, 'Full-Time Regular', 'Santa Clara, CA', '5 - 10 Years', 'Bachelor Degree', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(6, 32, 'Ref32', 'Customer Service Associate', 'We are looking for an outgoing Customer Service Associate to assist our customers with product inquiries in a swift, proficient and friendly manner. The Customer Service Associate will be instrumental in customer retention by addressing concerns and product issues, and by communicating in a professional, positive manner. You will apply your multitasking skills by listening and speaking to customers, navigating computers, and typing call documentation simultaneously. You will have the ability to swiftly gain customer confidence and trust. To ensure success in this position you will have the ability to maintain sound knowledge of products and services and be an effective communicator. Top candidates are detail-oriented, motivated and have excellent people skills.', '2022-12-08', NULL, '2022-12-20', 3, 'High School Diploma, GED, or suitable equivalent. 1+ years customer service experience, preferably in related field. Successful completion of provided training. Proficient computer skills. Experience with CRM preferrred. Proficient with MS Office suites. Excellent phone etiquette. Outstanding communication skills, both verbal and written. Strong people skills. Ability to sit at a desk for extended periods.', 50000, 'Part-Time Regular', 'Makati, PH', '1 - 2 Years', 'Associate Degree', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_activities`
--

CREATE TABLE `log_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `can_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interviewers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_25_112744_add_about_to_users', 2),
(6, '2022_10_26_062729_create_jobs_table', 3),
(14, '2022_11_03_111320_create_interviews_table', 8),
(15, '2022_11_05_093954_create_notes_table', 9),
(17, '2022_11_12_110321_create_phone_interviews_table', 11),
(19, '2022_11_13_100005_add_created_by_to_phone_interviews_table', 13),
(22, '2022_11_14_132002_add_updated_by_to_phone_interviews_table', 14),
(24, '2022_11_15_071917_create_onsite_interviews_table', 15),
(28, '2022_11_20_172707_create_roles_table', 17),
(30, '2022_11_20_175459_add_role_id_to_users_table', 18),
(32, '2022_11_21_014847_create_employees_table', 20),
(34, '2022_12_02_182733_add_role_id_to_employees_table', 22),
(39, '2022_12_07_084120_add_status_to_users_table', 25),
(40, '2022_12_12_091319_create_log_activities_table', 26),
(43, '2022_12_24_161313_create_candidates_table', 29),
(44, '2022_12_27_130901_create_applicants_table', 30),
(45, '2022_12_27_134257_add_candidate_id_to_employees_table', 31),
(46, '2022_12_27_135051_add_candidate_id_to_interviews_table', 32),
(47, '2022_12_27_135737_add_candidate_id_to_log_activities_table', 33),
(48, '2022_12_27_140154_add_candidate_id_to_notes_table', 34),
(49, '2022_12_27_140712_add_candidate_id_to_onsite_interviews_table', 35),
(50, '2022_12_27_141221_add_candidate_id_to_phone_interviews_table', 36),
(51, '2023_01_01_104139_add_dob_and_gender_to_candidates_table', 37);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `candidate_id`, `note`, `note_by`, `created_at`, `updated_at`) VALUES
(14, NULL, 'Please hired him as soon as possible', 'Md Raju', '2022-11-07 18:00:00', '2022-11-10 04:33:45'),
(17, NULL, 'Please call him for interview', 'Md Raju', '2022-11-08 18:00:00', '2022-11-12 02:12:09'),
(22, NULL, 'Please interview him and see if she qualifies for any other positions....', 'Habib Adnan', '2022-11-09 18:00:00', '2022-11-10 04:22:15'),
(25, NULL, 'please interview him as soon as possibleee', 'Toha', '2022-11-09 18:00:00', '2022-11-15 08:05:10'),
(30, NULL, 'Call him for interview immediately', 'Adnan Habib', '2022-11-14 18:00:00', NULL),
(35, 2, 'please interview him as soon as possible', 'Adnan Habib', '2022-12-26 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `onsite_interviews`
--

CREATE TABLE `onsite_interviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `interview_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_lan_eye_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_presentation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentation_prior_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_oriented` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enthusiasm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verbal_persuasive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_training` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commitment_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_interest_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asked_good_question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potential_to_grow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overall_evaluation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_concern_area` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_strength` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommend_to_hire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onsite_interviews`
--

INSERT INTO `onsite_interviews` (`id`, `candidate_id`, `interview_date`, `body_lan_eye_contact`, `resume_presentation`, `presentation_prior_work`, `achievement_oriented`, `enthusiasm`, `verbal_persuasive`, `team_skill`, `education_training`, `skill_experience`, `commitment_position`, `level_interest_position`, `asked_good_question`, `potential_to_grow`, `overall_evaluation`, `candidate_concern_area`, `candidate_strength`, `additional_comment`, `recommend_to_hire`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, '2022-11-15', 'Superior', 'Superior', 'Superior', 'Good', 'Superior', 'Good', 'Average', 'Fair', 'Poor', 'Fair', 'Average', 'Good', 'Superior', 'Good', 'Please hired him', 'dgdfsg', 'hhhghj', 'Yes', 'Habib Adnan', 'Adnan Habib', NULL, '2022-11-15 08:21:07'),
(3, NULL, '2022-11-17', 'Good', 'Fair', 'Good', 'Average', 'Average', 'Good', 'Superior', 'Average', 'Good', 'Average', 'Good', 'Superior', 'Good', 'Superior', 'tretlgrfgo', 'refgdgr', 'rfhdhjgj', 'Yes', 'Habib Adnan', NULL, NULL, NULL),
(4, NULL, '2022-11-17', 'Poor', 'Fair', 'Average', 'Good', 'Superior', 'Good', 'Average', 'Fair', 'Poor', 'Fair', 'Average', 'Good', 'Superior', 'Good', 'etgry', 'rthyt', 'gjkjrh check', 'Yes', 'Md Raju', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sakil.ahmed@gmail.com', '$2y$10$f4hb.2N9ky.lfiiBUNQ21uH4aOpZWWi6MRsClgKHTz1fVUlGG/hUy', '2022-10-13 03:31:09'),
('hr@embed.com', '$2y$10$duYgxCEikLM3Bk87W1U2Q.rP0tcF7KneOR58.C/VJ9Vc.8/bHeUNq', '2022-11-29 03:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone_interviews`
--

CREATE TABLE `phone_interviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `interview_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assertive_outgoing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_oriented` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enthusiasm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verbal_persuasive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ability_to_learn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ability_manage_stress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confidence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_training` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_stability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_interest_field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commitment_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realistic_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_interest_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potential_grow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `string_lasting_impression` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overall_evaluation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_concern_area` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_strength` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommend_onsite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phone_interviews`
--

INSERT INTO `phone_interviews` (`id`, `candidate_id`, `interview_date`, `assertive_outgoing`, `achievement_oriented`, `enthusiasm`, `verbal_persuasive`, `ability_to_learn`, `ability_manage_stress`, `confidence`, `education_training`, `skill_experience`, `job_stability`, `reason_interest_field`, `commitment_position`, `realistic_job`, `level_interest_position`, `potential_grow`, `string_lasting_impression`, `overall_evaluation`, `candidate_concern_area`, `candidate_strength`, `additional_comment`, `recommend_onsite`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, NULL, '2022-11-16', 'Superior', 'Superior', 'Superior', 'Good', 'Average', 'Fair', 'Poor', 'Good', 'Superior', 'Poor', 'Good', 'Good', 'Average', 'Average', 'Good', NULL, 'Good', 'suitable for this position', 'rgfdxg', 'rgfdg', 'Yes', NULL, 'Adnan Habib', NULL, '2022-11-15 08:01:32'),
(8, NULL, '2022-11-17', 'Average', 'Superior', 'Good', 'Average', 'Good', 'Good', 'Average', 'Superior', 'Good', 'Superior', 'Average', 'Good', 'Superior', 'Good', 'Average', NULL, 'Good', 'rhgf', 'thgfh', 'fgfg', 'No', 'Habib Adnan', 'Adnan Habib', NULL, '2022-11-14 07:42:50'),
(9, NULL, '2022-11-17', 'Poor', 'Fair', 'Average', 'Good', 'Superior', 'Good', 'Average', 'Fair', 'Poor', 'Fair', 'Average', 'Good', 'Superior', 'Good', 'Average', NULL, 'Fair', 'tgryt', 'rttyf', 'rtyrfy', 'Yes', 'Md Raju', NULL, NULL, NULL),
(10, NULL, '2022-11-17', 'Good', 'Good', 'Average', 'Good', 'Average', 'Good', 'Good', 'Average', 'Good', 'Good', 'Average', 'Average', 'Good', 'Good', 'Average', NULL, 'Good', 'yhgfhjyj', 'thgj', 'hgjhj', 'Yes', 'Md Raju', NULL, NULL, NULL),
(11, NULL, '2022-11-29', 'Good', 'Good', 'Fair', 'Good', 'Superior', 'Average', 'Fair', 'Good', 'Average', 'Good', 'Poor', 'Average', 'Superior', 'Average', 'Fair', NULL, 'Superior', 'huhuhuji', 'vcvnbvbnvb', 'dfuhdufhuhf', 'No', 'Md Raju', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_descrip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_descrip`, `created_at`, `updated_at`) VALUES
(1, 'HR', 'Human Resource Manager', NULL, NULL),
(2, 'HM', 'Hiring-Manager', NULL, NULL),
(3, 'Employee', 'Employeer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT 'user.png',
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `role`, `image`, `f_name`, `l_name`, `name`, `education`, `department`, `position`, `email`, `email_verified_at`, `password`, `phone`, `country`, `state`, `city`, `zip_code`, `address`, `about`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'HR', '/media/1667033984.png', 'Adnan', 'Habib', 'Adnan Habib', 'BSc in SWE', 'HR', 'Human Resource Manager', 'hr@embed.com', NULL, '$2y$10$yXL8vB8oZgmTJlwMn8Oriew8HFCChmqdLL.OiQeqKB1K43U5flgle', '01748088262', 'Bangladesh', 'Dhaka', 'Mirpur-12', '1216', 'B-d, R-8, H-6', 'Hi, I am Habib. I have completed BSc degree from Daffodil International University(DIU).', 'Active', 'z8IKrnOpVclMLEXZvbrDUHy4Ztj4Glm4JPGevEEy3wHCVZ2L2ePkMrjYaTL8', '2022-10-12 03:58:24', '2022-11-03 04:41:04'),
(2, 2, 'HM', '/media/1667828037.png', 'Habib', 'Adnan', 'Habib Adnan', 'B.Sc in Software Engineering', 'HM', 'Hiring Manager', 'hm@embed.com', NULL, '$2y$10$wUFNIJxr6DUiZ.TRVn9Nw.njGegsQsRt43KNVYTr/CMi6k/niXWY6', '01617073863', 'Bangladesh', 'Jessore', 'Benapole', '7432', 'Goga, Sharshaa', 'I am doing my bachelor degree from Daffodil International University.', 'Active', NULL, '2022-10-12 04:02:20', '2022-11-10 01:14:35'),
(3, 3, 'Employee', '/media/1668670865.png', 'Md', 'Raju', 'Md Raju', 'Bachelor Degree in Software Engineering from DIU.', 'Employee', 'Head of Employees', 'employee@embed.com', NULL, '$2y$10$pyn6J6WSipDYjlnvQ25ebeY0H6CNHk56/2aaqoy3iRSeuMCxAhe/u', '01929597063', 'Bangladesh', 'Jashore', 'Benapole', '7432', 'Sharsha, Jashore', '\" Alhamdulliha for Everything \"', 'Active', NULL, '2022-10-12 04:04:02', '2022-11-17 02:09:52'),
(6, 1, 'HR', '/media/1668981424.jpg', NULL, NULL, 'Tasim Toha', NULL, NULL, NULL, 'hr.admin@gmail.com', NULL, '$2y$10$utkj29VbyT04XWDJLaXbfOnb1SW4PCigS.AVbEuHBgBC8Z8eiU4m.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', NULL, '2022-11-20 15:02:55', '2022-11-20 15:57:04'),
(7, 2, 'HM', '/media/1668981194.jpg', NULL, NULL, 'Tazim Doha', NULL, NULL, NULL, 'hm.admin@gmail.com', NULL, '$2y$10$mawXIlZL0273EukxtRznvuAqTwHtCPntQMxWwtfxHykHpzfynGXHm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', NULL, '2022-11-20 15:02:55', '2022-11-20 15:53:14'),
(8, 3, 'Employee', '/media/1668980848.png', NULL, NULL, 'Jalal Uddin', NULL, NULL, NULL, 'employee.admin@gmail.com', NULL, '$2y$10$tn4cz8//Q69TZ74pgEXwxenAko7s1k/jmW9YkwLrfHZeu.G5M1CKO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', NULL, '2022-11-20 15:02:55', '2022-11-20 15:47:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `candidates_email_unique` (`email`),
  ADD UNIQUE KEY `candidates_phone_unique` (`phone`),
  ADD KEY `candidates_job_id_foreign` (`job_id`),
  ADD KEY `candidates_user_id_foreign` (`user_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`),
  ADD KEY `employees_user_id_foreign` (`user_id`),
  ADD KEY `employees_role_id_foreign` (`role_id`),
  ADD KEY `employees_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interviews_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jobs_job_id_no_unique` (`job_id_no`),
  ADD UNIQUE KEY `jobs_ref_code_unique` (`ref_code`),
  ADD UNIQUE KEY `jobs_email_unique` (`email`),
  ADD UNIQUE KEY `jobs_phone_unique` (`phone`);

--
-- Indexes for table `log_activities`
--
ALTER TABLE `log_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_activities_user_id_foreign` (`user_id`),
  ADD KEY `log_activities_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `onsite_interviews`
--
ALTER TABLE `onsite_interviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `onsite_interviews_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phone_interviews`
--
ALTER TABLE `phone_interviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone_interviews_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_activities`
--
ALTER TABLE `log_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `onsite_interviews`
--
ALTER TABLE `onsite_interviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone_interviews`
--
ALTER TABLE `phone_interviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `interviews`
--
ALTER TABLE `interviews`
  ADD CONSTRAINT `interviews_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `log_activities`
--
ALTER TABLE `log_activities`
  ADD CONSTRAINT `log_activities_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `log_activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `onsite_interviews`
--
ALTER TABLE `onsite_interviews`
  ADD CONSTRAINT `onsite_interviews_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `phone_interviews`
--
ALTER TABLE `phone_interviews`
  ADD CONSTRAINT `phone_interviews_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
