-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2021 at 06:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_mobile` int(10) NOT NULL,
  `p_address` varchar(250) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `a_date` date NOT NULL,
  `a_time` varchar(20) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `added_on` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `p_name`, `p_mobile`, `p_address`, `firstname`, `lastname`, `a_date`, `a_time`, `reason`, `added_on`, `status`) VALUES
(4, 'jk', 1234567899, 'jk', 'Dr Akash', 'Shah', '2021-10-28', '06:00 to 06:30', 'fever', '2021-10-28 04:13:18', 'Complete'),
(5, 'jk', 1234567899, 'jk', 'Dr Shravan', 'Bohra', '2021-11-19', '11:00 AM to 11:30 AM', 'high fever', '2021-11-18 10:02:10', 'Pending'),
(6, 'jk', 1234567899, 'jk', 'Dr Saumya Saran', 'Roy', '2021-11-20', '17:00', 'stomach ache', '2021-11-18 10:30:12', 'Pending'),
(10, 'jk', 1234567899, 'jk', 'Dr Saumya Saran', 'Roy', '2021-11-18', '17:00', 'fever', '2021-11-18 14:50:50', 'Pending'),
(11, 'jk', 1234567899, 'jk', 'Dr Saumya Saran', 'Roy', '2021-11-18', '18:30', 'cancer', '2021-11-18 15:05:56', 'Pending'),
(12, 'jk', 1234567899, 'jk', 'Dr Chirag', 'Shah', '2021-11-18', '19:30', 'stomacth ache', '2021-11-18 18:40:23', 'Pending'),
(13, 'jk', 1234567899, 'jk', 'Dr Chirag', 'Shah', '2021-11-19', '11:00', 'fever', '2021-11-18 19:31:41', 'Pending'),
(14, 'jk', 1234567899, 'jk', 'Dr Chirag', 'Shah', '2021-11-19', '17:00', 'flu', '2021-11-18 23:36:57', 'Pending'),
(15, 'jk', 1234567899, 'jk', 'Dr Akash', 'Shah', '2021-11-20', '11:30', 'fever', '2021-11-19 17:57:24', 'Complete'),
(16, 'jk', 1234567899, 'jk', 'Dr Abhijit Vilas', 'Kulkarni', '2021-12-12', '12:00', 'fever', '2021-12-11 17:32:27', 'Pending'),
(17, 'jk', 1234567899, 'jk', 'Dr A K', 'Bardhan', '2021-12-13', '10:00', 'fever', '2021-12-12 21:10:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_cate_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categories` (`blog_cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_cate_id`, `title`, `image`, `description`, `status`) VALUES
(23, 1, '9 Tips for Spring Cleaning Your Health', '915569237_tips_spring_cleaning.jpg', 'Warmer weather is a great reminder to hit the farmers market or your local grocery store to stock up on in-season fruits and vegetables.MartiÌ Sans/Stocksy\r\nWith milder temperatures, more sun, and wildlife sprouting everywhere, the arrival of spring in and of itself can put an extra kick in your step. Itâ€™s a time of possibility, a time to take stock of the habits that might be holding you back from being who you want to be â€” and to form new habits that help you become a better version of yourself.\r\n\r\nâ€œSpring can a really good time to reevaluate,â€ says Katerina Nicole Christiansen, MD, an associate physician and health science clinical professor at University of California Davis Health. And that includes giving your health and wellness routines a once over, she says. You may even find that resolutions made in springtime are easier to follow than the ones you try to implement in the cold, bitter winter months.\r\n\r\nIf you want to pay your health and well-being a little extra attention this spring, but donâ€™t know where to start, here are nine tips to get you started.\r\n\r\n1. Fill Your Plate With Fresh, In-Season Fruits and Vegetables\r\n2. Be Mindful of Opportunities to Overindulge\r\n3. Stay Hydrated\r\n4. Get Outside and Get Moving\r\n5. Soak Up the Sun\r\n6. But Do Protect Skin and Eyes From Damaging UV Rays\r\n7. Reset Your Sleep Schedule\r\n8. Watch for Allergens (Both Indoors and Out)\r\n9. Check In With Your Doctor\r\n\r\n\r\n', 1),
(24, 1, 'What to do if you have got the flu', '393434683_flu.jpg', 'Even if youâ€™re fanatical about washing your hands and do your best to avoid people with obvious symptoms, there is still a chance that youâ€™ll come down with the flu this year. Unfortunately, getting the flu vaccine is not a guarantee that youâ€™ll stay healthy. While it provides protection and is especially important for young children and older adults, itâ€™s only about 60 percent effective at preventing the flu.\r\n\r\nTherefore, itâ€™s best to be prepared with a strategy for combating the flu.\r\n\r\nâ€œThereâ€™s good news and bad news about the flu,â€ said Aliasgar Chittalia, M.D., an internist at Geisinger South Wilkes-Barre Family Practice. â€œIf youâ€™ve got it, thereâ€™s no cure. However, there are some things you can do to ease your suffering and shorten the duration of your symptoms.â€ \r\n\r\nFlu Symptoms and Remedies\r\n\r\nâ€œFlu symptoms extend beyond just a bad cold and will include fever, nausea and severe body aches,â€ said Dr. Chittalia said. â€œItâ€™s important to treat the symptoms effectively, since they can lead to dangerous health problems like dehydration.â€ \r\n\r\nIf you or someone in your family has the flu, the following strategies may help ease some of the unpleasant symptoms. However, before trying any of these remedies at home, always speak with your doctor first for expert advice on how to treat your illness.\r\n\r\n- Fatigue: The only real way to treat the fatigue associated with the flu is to stay home from work or school and get the rest your body needs. The fatigue you feel happens because your body is working overtime to battle the influenza virus.\r\n\r\n- Aches and pains: Over-the-counter pain relievers such as ibuprofen (Advil, Motrin) and acetaminophen (Tylenol) can help reduce your aches and lower your fever. Pay close attention to medication ingredients and warning labels, since many cough and flu medicines contain ibuprofen or acetaminophen, which makes it easy to overdose.\r\nâ€œNo matter how bad you feel, certain at-risk patients should not take any over-the-counter medicines without first talking to their doctor,â€ said Dr. Chittalia. â€œMedications, even those you can buy without a prescription, can be harmful to people with liver, stomach or blood pressure issues.â€\r\n\r\n- Nausea and vomiting: Vomiting can lead to dehydration, which can make your nausea worse. Drink plenty of clear fluids or sports drinks to stay hydrated and avoid this vicious cycle. Ginger ale and peppermint tea can also help. If you canâ€™t keep anything down, your doctor may be able to prescribe a medication to help reduce your nausea.\r\n\r\n- Sore throat and congestion: Lozenges can help ease a sore throat, but may be hard to tolerate if youâ€™re dealing with nausea and vomiting. Use a humidifier to help alleviate the irritation caused by dry indoor air that is common in the winter. Breathing in the steam from your shower or a pot of hot water can help keep your nasal passages clear.\r\nâ€œHome remedies really can help reduce the suffering caused by the flu,â€ said Dr. Chittalia. â€œYour first line of defense, however, should be a call to your doctor. They can help you manage the symptoms and may prescribe an antiviral medication to help shorten the duration of your illness.â€', 1),
(25, 1, '9 Quick Fixes for Everyday Aches and Pains', '736637059_aches1.jpg', 'Even those of us who eat right, exercise, and take a lot of steps to stay healthy every day will experience body aches and pains from time to time. Things like stress and too much time sitting down will bring them on.\r\n\r\nIf, for instance, you find yourself more sedentary than usual, your body will actually start to adapt to that behavior, explains Vikash Sharma, a doctor of physical therapy at Perfect Stride Physical Therapy in New York City. â€œAll of the tissues that are responsible for sitting will become better for sitting,â€ he says â€” tissues surrounding the joint may shorten, for example, limiting the tissueâ€™s mobility and ushering in aches and pains.\r\n\r\nThe same phenomenon can happen to other parts of the body when you spend too much time in one position. Looking at a screen for too long? Hello, eyestrain!\r\n\r\nFortunately, you can get a whole lot of relief with targeted stretches and movements throughout the day. â€œYour body is meant to move. Movement is the most powerful form of medicine out there,â€ says Dr. Sharma.\r\n\r\nHere are nine fixes that can help.\r\n\r\n1. Relieve Lower Back Pain With Pelvic Tilts\r\n2. Loosen Up Your Hips With Targeted Stretches\r\n3. To Lessen Shoulder Stiffness, Take Deep Breaths\r\n4. Soothe Neck Strain by Sitting Up Straight\r\n5. Give Hands a Break Regularly\r\n6. Stretch and Roll Out Aching Feet\r\n7. Look Across the Room Regularly to Ease Eyestrain\r\n8. Lessen a Headache With Self-Massage\r\n9. Relieve Menstrual Cramps With Cat-Cow', 1),
(26, 2, '7 signs of depression you should not ignore', '758427126_depression.jpg', 'Are you depressed? Here are some symptoms to look for â€” and tips for getting help.\r\nEveryone feels sad now and then. If youâ€™re feeling sadder than usual, or the feeling wonâ€™t go away, you may wonder if youâ€™re depressed.\r\n\r\nDr. M. Justin Coffey, chair of Geisingerâ€™s Department of Psychiatry and Behavioral Health, helps us spot the symptoms of this common, yet often undiagnosed mental health condition.\r\n\r\nWhat causes depression?\r\nYou may have heard that depression is simply caused by a chemical imbalance in the brain, but itâ€™s more complex than that.\r\n\r\nResearch suggests itâ€™s a combination of social, psychological and biological factors and can sometimes be triggered by a traumatic or stressful event. Abuse, conflict and grief are common triggers, but genetic factors play a major role.\r\n\r\nâ€œDepression is often hereditary,â€ explains Dr. Coffey. â€œIn fact, researchers have identified multiple genes that can make a person more vulnerable to depression.â€\r\n\r\nResearch has also uncovered a link between depression and the parts of the brain that affect memory and emotions. This link suggests that depression may be related to the amount and function of serotonin, and other brain chemicals, that are important to how our brains work and transmit messages along nerve fibers.\r\n\r\nSerotonin is a chemical in the brain that regulates mood, appetite, sleep, memory and other vital systems. Current research suggests that the amount and how the brain cells use serotonin and other similar neurotransmitters can affect how we experience our emotions.\r\n\r\nIdentifying symptoms of depression\r\nDepression can appear at any age, and the symptoms can vary from person to person. For many who have depression, the symptoms are usually severe enough to negatively impact their day-to-day life. But this isnâ€™t always the case.\r\n\r\nâ€œSome of these symptoms can be a part of lifeâ€™s normal ups and downs,â€ explains Dr. Coffey. â€œBut if youâ€™re experiencing several symptoms most of the day, nearly every day, itâ€™s more likely to be depression.â€\r\n\r\nHere are 7 common signs of depression that you shouldnâ€™t ignore:\r\n\r\nAvoiding friends or beloved activities\r\nFeelings of hopelessness\r\nTrouble sleeping or excessive sleeping\r\nLow energy or loss of motivation\r\nLost appetite or binge-eating\r\nDifficulty with concentration\r\nSuicidal thoughts or tendencies\r\nSymptoms of depression can vary in severity and may appear in short bursts or persist over weeks.', 1),
(27, 2, 'Mindfulness: 5-minute tips to help de-stress your holiday', '170972716_de_stress3.jpg', 'A little break â€” even just 5 minutes â€” can go a long way\r\nYouâ€™re busy with the hustle and bustle of the holiday season. Youâ€™ve got presents to wrap, sugar cookies to bake, family to visit and lots of running around to do. The holidays can be a lot of fun â€” as long as your efforts to celebrate the season donâ€™t become too stressful. The good news? You can keep that from happening.\r\n\r\nâ€œItâ€™s supposed to be the most wonderful time of the year, but for many, it can be a stressful time,â€ says Jodi Jordan, a physician assistant specializing in primary care at Geisinger Richfield. â€œDonâ€™t put too much pressure on yourself to try to live up to the ideal of the â€˜perfect holiday.â€™ This time of year, set boundaries and try to block out time for yourself as we are often busy taking care of others.â€\r\n\r\nYou donâ€™t even need to block out a significant chunk of time to wipe away stress. Sometimes, just catching your breath for a few minutes is enough to get back on track.\r\n\r\nUse these six 5-minute â€œremediesâ€ to stay healthy and less stressed during the holidays.\r\n\r\n1. Start the day with gratitude\r\n2. Breathe deeply\r\n3. Go for a mid-afternoon stroll\r\n4. Do nothing at all\r\n5. Take care of a plant\r\n6. Maintain a healthy diet', 1),
(28, 2, 'How to survive a panic attack', '825958723_panic.jpg', 'Donâ€™t be afraid to get professional help\r\nAbout one third of Americans will experience a panic attack in their lifetime. The episodes can happen at any time and are described as a feeling of sudden fear or terror that is unexpected or the result of a particularly stressful or upsetting experience. \r\n\r\nDuring a panic attack, intense and frightening sensations occur in the body that might lead you to believe that you are losing control or having a heart attack. Situational panic attacks, or those caused by stressful events, are more obvious but they can also come out-of-the blue, even when not feeling stressed. \r\n\r\nâ€œPanic attacks arenâ€™t life-threatening, but they can be debilitating,â€ says Dr. Laura K. Campbell, PhD, ABPP, adult psychologist. â€œWhen they happen frequently and lead to avoiding things due to fear of having another panic attack, they can develop into panic disorder.â€ \r\n\r\nPhysical symptoms of a panic attack include rapid or pounding heartbeat, shaking, shortness of breath, sweating, chest pain, nausea, vomiting, dizziness, chills or hot flashes. Emotional symptoms include feelings of detachment, fear of dying and the feeling of losing control. \r\n\r\nâ€œPanic attacks usually last a few minutes, but the sensations and worry about them can go for much longer,â€ says Dr. Campbell. \r\nUnderstanding panic disorder\r\nAfter two or more panic attacks, you should make an appointment with your primary care doctor to rule out any medical causes and explore treatment options. \r\n\r\nâ€œAfter their second panic attack, many people begin to anticipate their next episode, creating a self-fulfilling prophecy,â€ explains Dr. Campbell. â€œThis cycle can lead to agoraphobiaâ€”the fear of any person or place that could possibly panic or trap youâ€”or other mental health concerns like depression, that can worsen over time.â€ \r\n\r\nThough there is no formal test for panic disorder, your doctor will screen you for other health issues as well as depressionâ€”a condition commonly shared by people with panic disordersâ€”and provide a diagnosis and guidance based on their findings. They may also refer you to a behavioral health provider such as a psychologist or psychiatrist. \r\nMinimizing impact and long-term treatment\r\nâ€œThe key to minimizing the length and severity of a panic attack is learning how to respond differently to the physical sensations and realizing they are not dangerous,â€ notes Dr. Campbell. â€œResearch has shown cognitive-behavioral therapy (CBT) to be a very effective treatment to start with.â€ \r\n\r\nâ€œCBT gives you an opportunity to understand why some triggers have such an outsized effect, while anti-depressant or -anxiety medications can suppress some of the uncontrollable emotions.â€ \r\n\r\nCertain medications that are traditionally used for depression can also be helpful in managing panic attacks, especially when used in combination with therapy.\r\n\r\nThere are several at-home methods for calming a panic attack. \r\n\r\nFocus exercises force you to take your mind off of the panic attack and its triggers. For example, using senses other than sight to identify and differentiate objects can have a distracting and calming effect.\r\n\r\nDeep breathing and meditation can help slow the heart rate and clear the mind. \r\n', 1),
(29, 3, 'Can ivermectin treat COVID-19?', '791768256_ivermectin.jpg', 'An infectious diseases specialist debunks the latest COVID misinformation.\r\nYouâ€™ve likely heard news reports of people taking large doses of a drug called ivermectin thatâ€™s formulated for horses and cows in hopes of preventing or treating a COVID-19 infection.\r\n\r\nThis version of ivermectin â€” intended to prevent heartworm disease and other parasites in animals â€” isnâ€™t safe for humans.\r\n\r\nAnimal ivermectin is used to treat worms, not viruses like COVID-19. There are also many ingredients found in animal ivermectin that arenâ€™t evaluated for use in humans.\r\n\r\nâ€œThe higher doses of ivermectin used in animals can be very toxic for humans,â€ says Dr. Stanley Martin, infectious diseases specialist at Geisinger. â€œTaking animal ivermectin can lead to severe side effects and even death. Donâ€™t listen to the misinformation.â€\r\n\r\nWhen taking ivermectin is safe\r\nOral and topical ivermectin is also available by prescription for humans. But itâ€™s only approved by the Food and Drug Administration (FDA) to treat infections caused by some parasitic worms, head lice and skin conditions like rosacea. Not to prevent or treat COVID-19.\r\n\r\nâ€œIf your healthcare provider prescribes ivermectin to you, be sure to take it exactly as prescribed,â€ adds Dr. Martin.\r\n\r\nIf you take too much ivermectin, or if you misuse animal ivermectin, you could experience side effects including: \r\n\r\nBalance problems\r\nSeizures\r\nComa\r\nLow blood pressure\r\nVomiting\r\nDiarrhea\r\nâ€œHigh doses of ivermectin can even lead to death,â€ adds Dr. Martin. â€œIf youâ€™ve taken ivermectin and are having side effects, head to your nearest emergency room.â€\r\n\r\nWhat about using human ivermectin to treat or prevent COVID-19?\r\nIvermectin for humans is being touted as a potential way to prevent and treat COVID-19 â€” but the truth is, the data doesnâ€™t support this claim.\r\n\r\nâ€œSo far, all the studies on ivermectin have shown that itâ€™s not an effective treatment for COVID-19,â€ says Dr. Martin. â€œThere was one study out of Egypt that showed it may be effective; however, it turned out that the data was falsified, and the study wasnâ€™t formally published.â€\r\n\r\nWhat should you do to prevent or treat COVID-19?\r\nTo avoid getting COVID-19, you should continue practicing precautionary measures including:\r\n\r\nKeep your hands clean: Wash your hands often and for at least 20 seconds or use alcohol-based hand sanitizers or wipes when soap and water arenâ€™t readily available. These should contain at least 60% alcohol to be most effective.\r\nWear your mask: Your mask, when worn correctly â€” over your mouth and nose â€” helps reduce the spread of COVID-19 by protecting both yourself and others.\r\nPractice social distancing: Keep at least 6 feet away from others when youâ€™re indoors, in crowded places or at events.\r\nGet vaccinated: If you havenâ€™t gotten your vaccine yet, itâ€™s easy to schedule your vaccine appointment today. The COVID-19 vaccine is proven to be effective against the virus, unlike ivermectin.\r\nStay up to date: By relying on trusted sources for your information on the virus, youâ€™ll stay up to date with the latest developments and trusted treatment methods.\r\nIf youâ€™re having symptoms of COVID-19, you should get tested. If the test comes back positive, stay home for at least 10 days to avoid spreading the virus to others. And if your symptoms are severe, call your doctor for advice on treatment.\r\n\r\nâ€œAlways talk with your doctor about the best treatment for you if you get COVID-19,â€ says Dr. Martin. â€œAnd never try a treatment they didnâ€™t approve.â€', 1),
(30, 3, 'What to know about breakthrough COVID infection', '163250672_covid_infection.jpg', 'What exactly are they and how can you stay safe?\r\nOne of the latest developments in COVID-19 news? So-called â€œbreakthroughâ€ infections. Whether itâ€™s a celebrity, your friend or a neighbor whoâ€™s sick with COVID â€” even though theyâ€™ve been vaccinated â€” you may have some questions about the vaccine. \r\n\r\nGet the facts straight about breakthrough infections with answers from Dr. Stanley Martin, infectious diseases specialist.\r\n\r\nWhat is breakthrough COVID?\r\nFor a COVID-19 infection to be considered a â€œbreakthrough infection,â€ someone whoâ€™s fully vaccinated would need to contract the virus more than 14 days after their final dose.\r\n\r\nâ€œThis is not uncommon,â€ says Dr. Martin, â€œbecause no vaccine can 100% protect you from a virus. But that doesnâ€™t mean the vaccines arenâ€™t working â€” or that they arenâ€™t worth getting.â€\r\n\r\nSo does the vaccine protect you from breakthrough COVID?\r\nYes. When you get the COVID-19 vaccine, it protects you against the severe illness, hospitalization and death the virus can cause. If you get a breakthrough infection, you may feel a little under the weather, but your symptoms will likely be mild.\r\n\r\nWhile breakthrough infections arenâ€™t extremely common for those who are vaccinated, the vaccine offers protection against COVID and its variants. And with the rise of the highly contagious delta variant, itâ€™s more important than ever to get your COVID vaccination.\r\n\r\nThe biggest factor contributing to breakthrough infections? Low vaccination rates. â€œWith large numbers of people who havenâ€™t received the COVID-19 vaccine yet, the virus is still mutating and spreading, and will continue to do so until more people get the vaccine,â€ says Dr. Martin. \r\n\r\nRemember: Getting vaccinated helps limit the spread of the virus. And the less it can spread, the less chance it has to mutate.\r\n\r\nBreakthrough COVID symptoms \r\nIf youâ€™re vaccinated and have a breakthrough infection of COVID, your symptoms are likely to be mild. Breakthrough infection symptoms can include: \r\n\r\nCough\r\nHeadache\r\nSore throat\r\nMuscle aches and pains\r\nFever\r\nYou can learn COVID-19 symptoms here.\r\n\r\nWhat to do if you have a breakthrough COVID infection\r\nIf youâ€™ve been vaccinated but are having symptoms, you should get tested for COVID-19. And if that test comes back positive, stay home for at least 10 days to prevent spreading the virus to others. If your symptoms are severe, call your doctor for advice on treatment.\r\n\r\nâ€œItâ€™s important to remember that, even if you feel OK and have been vaccinated, you are still contagious if you contract COVID-19,â€ says Dr. Martin. â€œThatâ€™s why itâ€™s important to continue to mask, wash your hands and practice social distancing. Especially in areas where there are a lot of people or where infections are on the rise.â€', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_cate`
--

DROP TABLE IF EXISTS `blog_cate`;
CREATE TABLE IF NOT EXISTS `blog_cate` (
  `blog_cate_id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`blog_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_cate`
--

INSERT INTO `blog_cate` (`blog_cate_id`, `categories`, `image`, `status`) VALUES
(1, 'Wellness', '955005125_wellness.jpg', 1),
(2, 'Mental Health', '769927425_mental.jpg', 1),
(3, 'Covid-19', '976831383_covid-19.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

DROP TABLE IF EXISTS `cart_details`;
CREATE TABLE IF NOT EXISTS `cart_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mrp` float NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `pro_cate_id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`pro_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`pro_cate_id`, `categories`, `image`, `status`) VALUES
(1, 'Covid Essentials', '440498558_covid.jpg', 1),
(2, 'Devices', '990877028_device.jpg', 1),
(3, 'Nutrition & fitness supplements', '530723647_nutrition6.jpg', 1),
(4, 'Personal care', '841425645_personal_care6.jpg', 1),
(5, 'Ayurvedic care', '617971389_ayu5.jpg', 1),
(6, 'Baby & mom care', '592392693_baby & mom care.jpg', 1),
(7, 'Skin care', '389028626_skin.jpg', 1),
(8, 'Ortho care', '647557212_ortho3.jpg', 1),
(9, 'Home care', '565946773_home2.jpg', 1),
(10, 'Diabetic care', '674799495_diabitic.jpg', 1),
(11, 'pet care', '449963648_pet.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(8, 'jk', 'jk@gmail.com', '13557', '', '2021-09-18 09:56:52'),
(9, 'jj', 'jj@gmail.com', '5432112345', 'good', '2021-09-18 10:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `h_address` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` int(11) NOT NULL,
  `doc_cate_id` int(100) NOT NULL,
  `fees` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `doc_cate_id` (`doc_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `firstname`, `lastname`, `email`, `password`, `mobile`, `h_name`, `h_address`, `gender`, `image`, `country`, `state`, `city`, `qualification`, `experience`, `doc_cate_id`, `fees`, `added_on`, `status`) VALUES
(2, 'Dr Abhijit Vilas', 'Kulkarni', 'Abhiji9090@gmail.com', 'Abhiji', '1243658709', 'shanti hospital', 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar,jamnagar', 'Male', '873472067_images (2).jpg', 'India', 'GUJARAT', 'Jamnagar', 'MBBS, MD, DM (Cardiology)', 10, 1, 1090, '2021-10-10 16:42:12', 1),
(3, 'Dr Anand', 'Gnanaraj', 'anand9852@gmail.com', 'anand9852', '8321569464', 'Anand Hospital', 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar,rajkot', 'Male', '250587959_Dr Anand.jpg', 'India', 'GUJARAT', 'Rajkot', 'MBBS, MD, DM, FNB', 9, 1, 700, '2021-10-20 12:05:29', 1),
(4, 'Dr C Rajesh', 'Reddy', 'rajesh@gmail.com', 'rajesh', '8954698235', 'Narayana Health', '1st Floor B Wing, Pariwar, Saki Vihar Road,rajkot', 'Male', '806857782_Dr C Rajesh.jpg', 'India', 'GUJARAT', 'Rajkot', 'MBBS; MD (Internal Medicine); DM (Neurology)', 22, 3, 870, '2021-10-20 12:15:37', 1),
(5, 'Dr Deepika', 'Sirineni', 'Sirineni@gmail.com', 'Sirineni', '6598895632', 'Sirineni hospital', '203, 2nd Floor, Plot No 14/15, Mallika, Sector 19, Krishi Bazaar.jamnagar', 'Female', '568930777_Dr Deepika.png', 'India', 'GUJARAT', 'Jamnagar', 'MBBS, MD (Gen Med), DM', 22, 2, 890, '2021-10-20 12:41:13', 1),
(6, 'Dr A K', 'Bardhan', 'AK8989@gmail.com', 'ak8989', '8977988899', ' A K hospital', '26, Part 1, Community Centre 3rdth Floor, East Of Kailash,jamnagar', 'Male', '890127973_A K.jpg', 'India', 'GUJARAT', 'Jamnagar', 'MBBS (1971), MD (1979), Dip. Card. (1976), FCCP', 30, 1, 800, '2021-10-20 13:10:17', 1),
(7, 'Dr Akash', 'Shah', 'Akash454@gmail.com', 'Akash4545', '9081762531', 'Shah', 'a/23 Community Centre 3rdth Floor, East Of Kailash,jamnagar', 'Male', '905618927_Shah.jpg', 'India', 'GUJARAT', 'Jamnagar', 'MBBS, MD(Gen Med), DM(MedOnco)', 5, 9, 400, '2021-10-22 13:37:38', 1),
(8, 'Dr Shravan', 'Bohra', 'Shravan@gmail.com', 'Shravan', '9990234167', 'kumkum hospital', 'Opp Narsinh Est, Pratap Nagar', 'Male', '767119768_Shravan.jpg', 'India', 'GUJARAT', 'Rajkot', 'MBBS, MD(MED), MRCP, FEBG', 25, 5, 550, '2021-10-22 14:30:33', 1),
(9, 'Dr Chirag', 'Shah', 'Chirag@gmail.com', 'Chirag', '7887865430', 'Shah hospital', '165/167, Opp Zakaria Masjid, Masjid Bunder Road, Masjid Bunder (w),rajkot', 'Male', '503284369_chirag (2).jpg', 'India', 'GUJARAT', 'Rajkot', 'BDS', 7, 12, 300, '2021-10-22 14:37:24', 1),
(10, 'Dr Saumya Saran', 'Roy', 'Saumya@gmail.com', 'Saumya', '8907604902', 'Gandhi hospital', 'A-2, 1st Floor, Opp Abhruchi Restaurant,Rajkot', 'Female', '449680758_Saumya.jpg', 'India', 'GUJARAT', 'Rajkot', 'MDS', 11, 12, 350, '2021-10-22 14:40:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doc_cate`
--

DROP TABLE IF EXISTS `doc_cate`;
CREATE TABLE IF NOT EXISTS `doc_cate` (
  `doc_cate_id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`doc_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_cate`
--

INSERT INTO `doc_cate` (`doc_cate_id`, `categories`, `image`, `status`) VALUES
(1, 'Cardiologist', '195047191_cardiologist.jpg', 1),
(2, 'Neurology', '804903845_neuro.jpg', 1),
(3, 'Nephrologist', '249081795_nephro.jpg', 1),
(4, 'Urologist', '387752975_urologist.jpg', 1),
(5, 'Gastroenterologist', '305396816_gastro.jpg', 1),
(6, 'Dermatologist', '589448052_dermatologist.jpg', 1),
(7, 'Opthalmologist', '170445053_optha.jpg', 1),
(8, 'Pulmonologist', '833533934_pulmonologist.jpg', 1),
(9, 'Orthopedician', '111493793_orthopedician.jpg', 1),
(10, 'Gynecology', '326351449_gynec.jpg', 1),
(11, 'General surgeon', '252102861_gen_sur.jpg', 1),
(12, 'Dentist', '978665755_dentist.jpg', 1),
(13, 'ENT specialist', '721908568_ent.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `qty` int(11) NOT NULL,
  `mrp` float NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `p_name`, `qty`, `mrp`, `added_on`) VALUES
(16, 42, 'Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream', 3, 170, '2021-11-20 12:19:21'),
(17, 43, 'NIVEA Soft Light Moisturizer Cream', 6, 470, '2021-11-20 12:20:08'),
(18, 44, 'Mortein 2-in-1 Mosquito and Cockroach killer Spray', 5, 160, '2021-12-11 05:41:25'),
(19, 44, 'Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream', 1, 170, '2021-12-11 05:41:25'),
(20, 44, 'Designer face mask', 1, 50, '2021-12-11 05:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_password` varchar(50) NOT NULL,
  `p_mobile` int(10) NOT NULL,
  `p_address` varchar(250) NOT NULL,
  `p_gender` varchar(10) NOT NULL,
  `p_dob` date NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`p_id`, `p_name`, `p_email`, `p_password`, `p_mobile`, `p_address`, `p_gender`, `p_dob`, `added_on`) VALUES
(3, 'jk', 'jk@gmail.com', 'jk1234', 1234567899, 'jk', 'Male', '2021-10-01', '2021-10-03 10:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `pro_cate_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign` (`pro_cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_cate_id`, `name`, `code`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(1, 1, 'Mask', 'M1', 35, 30, 40, '872351083_0fd7464296b6a3adbd72e6dbdf71d88a.jpg', 'Brand : Miniklub, Contry Of Origin : India, Package Content : 4N MASK', 'Brand : Miniklub, Contry Of Origin : India, Package Content : 4N MASK', 'mask', 'Brand : Miniklub, Contry Of Origin : India, Package Content : 4N MASK', 'Miniklub', 1),
(2, 1, 'fabric Mask', 'm2', 40, 35, 50, '656804983_0f27d61d191c3c25543668a5030806da.jpg', 'Santorini 12 Block Print Adjustable Triple Layered Cotton Linen Mask', 'Santorini 12 Block Print Adjustable Triple Layered Cotton Linen Mask', 'fabric Mask', 'Santorini 12 Block Print Adjustable Triple Layered Cotton Linen Mask', 'fabric Mask', 1),
(3, 1, 'Medical mask', 'm3', 20, 20, 100, '548572094_4ade529f828c88105a2e8b6ef3f9e643.jpg', 'Q-plus Surgical Face Mask Fold-flat Dust Masks', 'Q-plus Surgical Face Mask Fold-flat Dust Masks', 'Medical mask', 'Q-plus Surgical Face Mask Fold-flat Dust Masks', 'Q-plus', 1),
(4, 1, 'Hand sanitizer', 'hs12', 50, 45, 100, '744124042_6b0acf3a6982d804bdbe36632c233642.jpg', 'Anti Bacterial Hand Sanitizer Bottle moisturising hand sanitizer', 'Anti Bacterial Hand Sanitizer Bottle moisturising hand sanitizer', 'Hand sanitizer', 'Anti Bacterial Hand Sanitizer Bottle moisturising hand sanitizer', 'Mad butaty', 1),
(5, 1, 'Power mist Hand sanitizer', 'hs13', 40, 35, 100, '217343643_5ac239979f99af54b3c38e08f0b82dce.jpg', 'touchland Anti Bacterial Hand Sanitizer Bottle moisturising hand sanitizer', 'touchland Anti Bacterial Hand Sanitizer Bottle moisturising hand sanitizer', 'Hand sanitizer', 'touchland Anti Bacterial Hand Sanitizer Bottle moisturising hand sanitizer', 'touchland', 1),
(6, 1, 'purell advance Hand sanitizer', 'hs14', 50, 40, 230, '696574390_b2a8f77b3c4e4b43b3cde93d80df76b8.jpg', 'purell advance Hand sanitizer,Hand Sanitizer Ideal For: Men & Women Quantity: 110 ml Bottle Container', 'purell advance Hand sanitizer,Hand Sanitizer Ideal For: Men & Women Quantity: 110 ml Bottle Container', 'purell advance Hand sanitizer', 'purell advance Hand sanitizer,Hand Sanitizer Ideal For: Men & Women Quantity: 110 ml Bottle Container', 'purell advance Hand sanitizer', 1),
(7, 1, 'Adjustable face mask', 'fm15', 70, 70, 330, '632208556_3772a294062118bbf77ef228f3fb75e0.jpg', ' adjustable DEFEND99 -Sanitizing Face Mask Fold-flat Dust Masks', ' adjustable DEFEND99 -Sanitizing Face Mask Fold-flat Dust Masks', 'mask', ' DEFEND99 -Sanitizing Face Mask Fold-flat Dust Masks', 'adjustable mask', 1),
(8, 1, 'Designer face mask', 'dfm123', 50, 50, 400, '788767815_53e1a8e644398b6333fbd37d7e3acb15.jpg', 'Designer ,Embroidered Designer Cotton Fabric Reusable Women Face Mask', 'Designer ,Embroidered Designer Cotton Fabric Reusable Women Face Mask', 'Embroidered mask', 'Designer,Embroidered Designer Cotton Fabric Reusable Women Face Mask', 'Embroidered mask', 1),
(9, 1, 'accusure pulse oximeter', 'apo10', 990, 860, 380, '288551619_1-small.jpg', 'accusure pulse oximeter', 'accusure pulse oximeter', ' oximeter', 'accusure pulse oximeter', 'accusure pulse oximeter', 1),
(10, 1, 'Floral Black designer mask', 'fbdm11', 330, 300, 600, '610721367_5629c1dfa353d0ebbb164df13ffe874d.jpg', 'Black designer mask,Floral Embroidered Pack of 2 Masks', 'Black designer mask,Floral Embroidered Pack of 2 Masks', 'Floral mask', 'Black designer mask,Floral Embroidered Pack of 2 Masks', 'Floral ', 1),
(11, 1, 'Digital Thermometer', 'DT12', 450, 450, 600, '215442514_7461071f02de13b0ed3ddd2d69ba767c.jpg', 'Digital Thermometer,Dr Trust Usa Waterproof Flexible Tip Digital Thermometer - 1pc', 'Digital Thermometer,Dr Trust Usa Waterproof Flexible Tip Digital Thermometer - 1pc', 'Digital Thermometer,Dr Trust Usa Waterproof Flexible Tip Digital Thermometer - 1pc', 'Digital Thermometer,Dr Trust Usa Waterproof Flexible Tip Digital Thermometer - 1pc', 'Digital Thermometer', 1),
(12, 1, 'Disposable Gloves', 'DG13', 200, 175, 500, '956357506_6152wZn7STL._AC_UL320_.jpg', 'Clinivex Disposable Gloves, Box of 100pcs, Clear Vinyl Gloves Latex-Free, Powder Free(Medium)', 'Clinivex Disposable Gloves, Box of 100pcs, Clear Vinyl Gloves Latex-Free, Powder Free(Medium)', 'Hand gloves', 'Clinivex Disposable Gloves, Box of 100pcs, Clear Vinyl Gloves Latex-Free, Powder Free(Medium)', 'Hand gloves', 1),
(13, 1, 'Infrared thermometer', 'IT14', 3700, 3640, 478, '469271106_1629107137891_heemax_h-11_infrared_thermometer.jpeg', 'Heemax H-11 Infrared thermometer', 'Heemax H-11 Infrared thermometer', 'Infrared thermometer', 'Heemax H-11 Infrared thermometer', 'Infrared thermometer', 1),
(14, 1, 'Muskaan steam vaporiser', 'MSV15', 270, 263, 310, '661987154_1-large.png', 'Manufactured By: MuskaanComposition: STEAM VAPORISER', 'Manufactured By: MuskaanComposition: STEAM VAPORISER', 'Muskaan steam', 'Manufactured By: MuskaanComposition: STEAM VAPORISER', 'Muskaan steam', 1),
(15, 1, 'Accu-Chek Softclix', 'ACS16', 550, 528, 580, '239463089_1-20210920190536866959-large.png', 'Accu-Chek Softclix Sterile Lancets- 200', 'Accu-Chek Softclix Sterile Lancets- 200', 'accu check', 'Accu-Chek Softclix Sterile Lancets- 200', 'accu check', 1),
(16, 1, 'Dettol', 'D16', 30, 20, 289, '674263949_1-20210920185734810617-large.png', 'Dettol Antiseptic Disinfectant Liquid 60 ml', 'Dettol Antiseptic Disinfectant Liquid 60 ml', 'Dettol', 'Dettol Antiseptic Disinfectant Liquid 60 ml', 'Dettol', 1),
(17, 5, 'Dabur Pudin Hara', 'DPH18', 60, 50, 705, '355704025_10171013569_1.jpg', 'Dabur Pudin Hara Active Liquid-30ml', 'Dabur Pudin Hara Active Liquid-30ml', 'Dabur Pudin Hara ', 'Dabur Pudin Hara Active Liquid-30ml', 'Dabur Pudin Hara ', 1),
(18, 5, 'Kayam Churna', 'KC19', 90, 86, 230, '893183035_1-20210920191527473567-large.png', 'Kayam Churna-100gm', 'Kayam Churna-100gm', 'Kayam Churna', 'Kayam Churna-100gm', 'Kayam Churna', 1),
(19, 5, 'Kayam Tablet', 'KT20', 30, 27, 519, '410500538_10171010709_1.jpg', 'Kayam Tablet-10 ,10 Tablet in a bottle', 'Kayam Tablet-10, 10 Tablet in a bottle', 'Kayam Tablet', 'Kayam Tablet-10 ,10 Tablet in a bottle', 'Kayam Tablet', 1),
(20, 5, 'Zandu Nityam Tablet', 'ZNT21', 100, 89, 610, '789953520_10171003205.jpg', 'Zandu Nityam Tablet-30 30 Tablet in a bottle', 'Zandu Nityam Tablet-30 30 Tablet in a bottle', 'Zandu Nityam Tablet', 'Zandu Nityam Tablet-30 30 Tablet in a bottle', 'Zandu Nityam Tablet', 1),
(21, 5, 'Dabur Honey', 'DH22', 120, 110, 522, '601847488_10171039199_1.jpg', 'Dabur Honey-250gm', 'Dabur Honey-250gm', 'Dabur Honey', 'Dabur Honey-250gm', 'Dabur Honey', 1),
(22, 5, 'Sesa Ayurvedic Hair Oil', 'SA23', 250, 240, 620, '122982870_img_16208966170.png', 'Sesa Ayurvedic Hair Oil-200ml 200ml Oil in a bottle', 'Sesa Ayurvedic Hair Oil-200ml 200ml Oil in a bottle', 'Sesa Ayurvedic Hair Oil', 'Sesa Ayurvedic Hair Oil-200ml 200ml Oil in a bottle', 'Sesa Ayurvedic Hair Oil', 1),
(23, 5, 'Navratna Ayurvedic Cool Hair Oil', 'NA24', 80, 76.8, 570, '120828941_4-20210920191609507358-large.png', 'Navratna Ayurvedic Cool Hair Oil-100ml', 'Navratna Ayurvedic Cool Hair Oil-100ml', 'Navratna Ayurvedic Cool Hair Oil', 'Navratna Ayurvedic Cool Hair Oil-100ml', 'Navratna Ayurvedic Cool Hair Oil', 1),
(24, 5, 'Himalaya Herbals Purifying Neem Face Wash', 'H24', 60.9, 55, 477, '571148584_1-large (2).png', 'Himalaya Herbals Purifying Neem Face Wash-50ml', 'Himalaya Herbals Purifying Neem Face Wash-50ml', 'Himalaya Herbals Purifying Neem Face Wash', 'Himalaya Herbals Purifying Neem Face Wash-50ml', 'Himalaya Herbals Purifying Neem Face Wash', 1),
(25, 5, 'Himalaya Fairness Kesar Face Pack', 'HF15', 70.45, 63, 812, '859699748_10171026206_1.jpg', 'Himalaya Fairness Kesar Face Pack-50gm', 'Himalaya Fairness Kesar Face Pack-50gm', 'Himalaya Fairness Kesar Face Pack', 'Himalaya Fairness Kesar Face Pack-50gm', 'Himalaya Fairness Kesar Face Pack', 1),
(26, 5, 'Hamdard Safi Syrup', 'HS26', 90, 85, 658, '167482717_3-large.png', 'Hamdard Safi Syrup- 200ml', 'Hamdard Safi Syrup- 200ml', 'Hamdard Safi Syrup', 'Hamdard Safi Syrup- 200ml', 'Hamdard Safi Syrup', 1),
(27, 5, 'Hamdard Roghan Badam Shirin Oil', 'HBA27', 100, 94, 610, '480144970_3-20210920201512851636-large.png', 'Hamdard Roghan Badam Shirin Oil- 25ml', 'Hamdard Roghan Badam Shirin Oil- 25ml', 'Hamdard Roghan Badam Shirin Oil', 'Hamdard Roghan Badam Shirin Oil- 25ml', 'Hamdard Roghan Badam Shirin Oil', 1),
(28, 5, 'Patanjali Ayurveda Chyawanprash- 1000gm', 'PA28', 200, 190, 390, '999296818_10170683136_1.jpg', 'Patanjali Ayurveda Chyawanprash- 1000gm', 'Patanjali Ayurveda Chyawanprash- 1000gm', 'Patanjali Ayurveda Chyawanprash', 'Patanjali Ayurveda Chyawanprash- 1000gm', 'Patanjali Ayurveda Chyawanprash', 1),
(29, 5, 'Patanjali Ayurveda Giloy Ghan Vati', 'PAG28', 100, 100, 310, '393837518_10170684357_1.jpg', 'Patanjali Ayurveda Giloy Ghan Vati- 60 Tablet in a bottle', 'Patanjali Ayurveda Giloy Ghan Vati- 60Tablet in a bottle', 'Patanjali Ayurveda Giloy Ghan Vati', 'Patanjali Ayurveda Giloy Ghan Vati- 60 60 Tablet in a bottle', 'Patanjali Ayurveda Giloy Ghan Vati', 1),
(30, 5, 'Patanjali Divya Peedantak Vati', 'PDPV29', 100, 90, 400, '692885173_1-20210920201334885162-large.png', 'Patanjali Divya Peedantak Vati- 80 Tablet in a bottle', 'Patanjali Divya Peedantak Vati- 80 Tablet in a bottle', 'Patanjali Divya Peedantak Vati', 'Patanjali Divya Peedantak Vati- 80 Tablet in a bottle', 'Patanjali Divya Peedantak Vati', 1),
(31, 9, 'colgate', 'p01', 30, 30, 302, '514202620_804069eee64b03d1e4ed6749a3c43dd2.jpg', 'colgate mini pack Enamel health whitining', 'colgate mini pack Enamel health whitining', 'colgate', 'colgate mini pack Enamel health whitining', 'colgate ', 1),
(32, 9, 'Glass pluse', 'GP32', 200, 189, 501, '668522417_237fe1ce170818815dda9a529565638f.jpg', 'Glass pluse,streak and shine', 'Glass pluse streak and shine', 'Glass pluse', 'Glass plusestreak and shine', 'Glass pluse', 1),
(33, 9, 'Harpic active fresha', 'HAF33', 80, 80, 818, '469071967_55324077614c0060b35c74a068d24c33.jpg', 'Harpic active fresh And Shine Bleach Toilet Cleaner Bottle Of 500 Ml', 'Harpic active fresh And Shine Bleach Toilet Cleaner Bottle Of 500 Ml', 'Harpic active fresh ', 'Harpic active fresh And Shine Bleach Toilet Cleaner Bottle Of 500 MlHarpic active fresh And Shine Bleach Toilet Cleaner Bottle Of 500 Ml', 'Harpic active fresh', 1),
(34, 9, 'Surf Excel Matic Front Load Liquid Detergent', 'SEML34', 120, 110, 487, '763699368_c4dd8180da2182555a5c2e4fe1cb9319.jpg', 'Surf Excel Matic Front Load Liquid Detergent - 500ml', 'Surf Excel Matic Front Load Liquid Detergent - 500ml', 'Surf Excel Matic ', 'Surf Excel Matic Front Load Liquid Detergent - 500ml', 'Surf Excel Matic ', 1),
(35, 9, 'Biodegradable Garbage Bags', 'BG46', 260, 260, 790, '721177496_71c7jMrDOEL._SL1500_.jpg', 'Shalimar Premium OXO - Biodegradable Garbage Bags 19 X 21 Inches (Medium) 120 Bags (4 rolls) Dustbin Bag/Trash Bag - Black Color', 'Shalimar Premium OXO - Biodegradable Garbage Bags 19 X 21 Inches (Medium) 120 Bags (4 rolls) Dustbin Bag/Trash Bag - Black Color', 'Biodegradable Garbage Bags ', 'Shalimar Premium OXO - Biodegradable Garbage Bags 19 X 21 Inches (Medium) 120 Bags (4 rolls) Dustbin Bag/Trash Bag - Black Color', ' Biodegradable Garbage Bags ', 1),
(36, 9, 'Dettol Original Germ Protection Bathing Soap Bar', 'D29', 220, 215, 801, '422523148_61rRJ5HnImS._SL1000_.jpg', 'Dettol Original Germ Protection Bathing Soap Bar (Buy 4 Get 1 Free - 125g each), Combo Offer on Bath Soap', 'Dettol Original Germ Protection Bathing Soap Bar (Buy 4 Get 1 Free - 125g each), Combo Offer on Bath Soap', 'Dettol Original Germ Protection ', 'Dettol Original Germ Protection Bathing Soap Bar (Buy 4 Get 1 Free - 125g each), Combo Offer on Bath Soap', 'Dettol Original Germ Protection Bathing Soap Bar ', 1),
(37, 9, 'Lizol Disinfectant Surface & Floor Cleaner Liquid,', 'L46', 150, 146, 401, '339332234_51iatO8hXjL._SL1000_.jpg', 'Lizol Disinfectant Surface & Floor Cleaner Liquid, Citrus - 975 ml | Kills 99.9% Germs', 'Lizol Disinfectant Surface & Floor Cleaner Liquid, Citrus - 975 ml | Kills 99.9% Germs', 'Lizol Disinfectant Surface & Floor Cleaner Liquid,', 'Lizol Disinfectant Surface & Floor Cleaner Liquid, Citrus - 975 ml | Kills 99.9% Germs', 'Lizol Disinfectant Surface & Floor Cleaner Liquid,', 1),
(38, 6, 'Huggies', 'h91', 200, 200, 610, '967073077_4bae1b5877ae30613e27991d50bd5ce7.jpg', 'Huggies Nature Care Pants, Small (S) Size Baby Diaper Pants, 28 Count, Natureâ€™s gentle protection with organic cotton', 'Hamdard Roghan Badam Shirin Oil- 25ml', 'Huggies ', 'Huggies Nature Care Pants, Small (S) Size Baby Diaper Pants, 28 Count, Natureâ€™s gentle protection with organic cotton', 'Huggie', 1),
(39, 6, 'Pampers pants', 'P89', 680, 680, 200, '527119692_81dXedsErXL._SL1500_.jpg', 'Pampers Pure Protection Baby Diapers, Newborn, Extra Small Size Taped Diapers (NB, XS), 32 Count [Hypo allergenic and unscented protection, 0% chlorine', 'Pampers Pure Protection Baby Diapers, Newborn, Extra Small Size Taped Diapers (NB, XS), 32 Count [Hypo allergenic and unscented protection, 0% chlorinePampers Pure Protection Baby Diapers, Newborn, Extra Small Size Taped Diapers (NB, XS), 32 Count [Hypo allergenic and unscented protection, 0% chlorine', 'Pampers pants', 'Pampers Pure Protection Baby Diapers, Newborn, Extra Small Size Taped Diapers (NB, XS), 32 Count [Hypo allergenic and unscented protection, 0% chlorine', 'Pampers pants', 1),
(40, 6, 'Fisher-Price Ultra Care Oral Hygiene Combo for Babie', 'f120', 190, 190, 690, '378320226_71s-2qY-NaL._SL1500_.jpg', 'Fisher-Price Ultra Care Oral Hygiene Combo for Babies (Pink)', 'Fisher-Price Ultra Care Oral Hygiene Combo for Babies (Pink)', 'Fisher-Price Ultra Care Oral Hygiene Combo for Babie', 'Fisher-Price Ultra Care Oral Hygiene Combo for Babies (Pink)', 'Fisher-Price Ultra Care Oral Hygiene Combo for Babie', 1),
(41, 6, 'Amardeep Toddler Mosquito', 'pPJ181', 20, 280, 533, '828858839_5189QAHawQL.jpg', 'Amardeep Toddler Mosquito and Insect Protection Net/Mattress Pink Teddy Print 70 * 40 cms', 'Amardeep Toddler Mosquito and Insect Protection Net/Mattress Pink Teddy Print 70 * 40 cms', 'Amardeep Toddler Mosquito ', 'Amardeep Toddler Mosquito and Insect Protection Net/Mattress Pink Teddy Print 70 * 40 cms', 'Amardeep Toddler Mosquito ', 1),
(42, 6, 'Himalaya Total Care Baby Pants', 'HT2121', 425, 420, 389, '766662494_61XUVURM6GL._SL1134_.jpg', 'Himalaya Total Care Baby Pants Diapers, X Large (12 - 17 kg), 54 Count', 'Himalaya Total Care Baby Pants Diapers, X Large (12 - 17 kg), 54 Count', 'Himalaya Total Care Baby Pants', 'Himalaya Total Care Baby Pants Diapers, X Large (12 - 17 kg), 54 Count', 'Himalaya Total Care Baby Pants ', 1),
(43, 6, 'BIGBOUGHTÂ® New Born Baby Care Cloth', 'PE1719', 475, 470, 198, '625044724_714a6hFJw4L._SL1100_.jpg', 'BIGBOUGHTÂ® New Born Baby Care Cloth Set Combo (Set of 12, Jhabla, Nappy, Mittens, Hosiery Material, Random Print (Multicolor)', 'BIGBOUGHTÂ® New Born Baby Care Cloth Set Combo (Set of 12, Jhabla, Nappy, Mittens, Hosiery Material, Random Print (Multicolor)', 'BIGBOUGHTÂ® New Born Baby care', 'BIGBOUGHTÂ® New Born Baby Care Cloth Set Combo (Set of 12, Jhabla, Nappy, Mittens, Hosiery Material, Random Print (Multicolor)', 'BIGBOUGHTÂ® New Born Baby Care', 1),
(44, 2, 'AccuSure Simple 4th Generation Blood Glucose Monitoring Glucometer', 'PQ19', 1120, 1120, 300, '475361128_1-large.jpg', 'AccuSure Simple 4th Generation Blood Glucose Monitoring Glucometer 1 Unit in a box', 'AccuSure Simple 4th Generation Blood Glucose Monitoring Glucometer 1 Unit in a box', 'AccuSure Simple 4th Generation Blood Glucose', 'AccuSure Simple 4th Generation Blood Glucose Monitoring Glucometer 1 Unit in a box', 'AccuSure Simple 4th Generation Blood Glucose Monitoring Glucometer ', 1),
(45, 2, 'Heemax H-11 Infrared thermometer', 'HG51', 3600, 3600, 600, '904364232_1629107137891_heemax_h-11_infrared_thermometer.jpeg', 'Heemax H-11 Infrared thermometer 1 Unit in a Box', 'Heemax H-11 Infrared thermometer 1 Unit in a Box', 'Heemax H-11 Infrared thermometer', 'Heemax H-11 Infrared thermometer 1 Unit in a Box', 'Heemax H-11 Infrared thermometer ', 1),
(46, 2, 'STEAM VAPORISER MUSKAAN', 'M90', 260, 260, 710, '323396553_1-large.png', 'STEAM VAPORISER MUSKAAN 1 Unit in a Box', 'STEAM VAPORISER MUSKAAN 1 Unit in a Box', 'STEAM VAPORISER MUSKAAN', 'STEAM VAPORISER MUSKAAN 1 Unit in a Box', 'STEAM VAPORISER MUSKAAN ', 1),
(47, 2, 'Control D Blood Glucose test', 'CR$%', 920, 920, 478, '458087184_img_16222064110.jpg', 'Control D Blood Glucose Test Strip- 50', 'Control D Blood Glucose Test Strip- 50', 'Control D Blood Glucose ', 'Control D Blood Glucose Test Strip- 50', 'Control D Blood Glucose ', 1),
(48, 2, 'Dr Morepen BG 03 Gluco One Glucose Monitoring System', 'JK134', 480, 480, 391, '498985272_1629273530262_Dr_Morepen_BG_03_Gluco_One_Glucose_Monitoring_System_with_25_Strip-_1.jpg', 'Dr Morepen BG 03 Gluco One Glucose Monitoring System with 25 Strip- 1 1 Kit in a packet', 'Dr Morepen BG 03 Gluco One Glucose Monitoring System with 25 Strip- 1 1 Kit in a packet', 'Dr Morepen BG 03 Gluco One Glucose ', 'Dr Morepen BG 03 Gluco One Glucose Monitoring System with 25 Strip- 1 1 Kit in a packet', 'Dr Morepen BG 03 Gluco One Glucose Monitoring System', 1),
(49, 2, 'One touch Select', 'PO23', 1023, 1023, 567, '991824956_3-large.png', 'One touch Select 50 Test Strips 50 Test Strips in a box', 'One touch Select 50 Test Strips 50 Test Strips in a box', 'One touch Select ', 'One touch Select 50 Test Strips 50 Test Strips in a box', 'One touch Select ', 1),
(50, 10, 'Sugar Free Natura', 'SD234', 60, 60, 721, '463366951_1627023004-514.jpg', 'Sugar Free Natura Low Calorie Sweetener Pellets- 100 100 Pellets in a bottle', 'Sugar Free Natura Low Calorie Sweetener Pellets- 100 100 Pellets in a bottle', 'Sugar Free ', 'Sugar Free Natura Low Calorie Sweetener Pellets- 100 100 Pellets in a bottle', 'Sugar Free ', 1),
(51, 10, 'Accu-Chek Softclix Lancing Device', 'AC45', 380, 380, 302, '926697522_10170583593_1.jpg', 'Accu-Chek Softclix Lancing Device- 1 1 Lancets in a box', 'Accu-Chek Softclix Lancing Device- 1 1 Lancets in a box', 'Accu-Chek Softclix', 'Accu-Chek Softclix Lancing Device- 1 1 Lancets in a box', 'Accu-Chek 67', 1),
(52, 10, 'Accusure Simple gluco', 'PIO178', 990, 990, 435, '975328825_1-large (1).png', 'Accusure Simple gluco strips 50 Test Strip in a box', 'Accusure Simple gluco strips 50 Test Strip in a box', 'Accusure Simple gluco strips 50', 'Accusure Simple gluco strips 50 ', 'Accusure Simple gluco strips', 1),
(53, 10, 'Ensure Diabetes Care Powder- 200gm-Sugar Free-Vanilla delight', 'PSR23', 360, 360, 756, '980813582_1-large (2).png', 'Ensure Diabetes Care Powder- 200gm-Sugar Free-Vanilla delight- 200gm Powder in a box', 'Ensure Diabetes Care Powder- 200gm-Sugar Free-Vanilla delight- 200gm Powder in a box', 'Ensure Diabetes Care Powder- 200gm-Sugar Free-Vanilla ', 'Ensure Diabetes Care Powder- 200gm-Sugar Free-Vanilla delight- 200gm Powder in a box', 'Ensure Diabetes Care Powder- 200gm-Sugar Free-Vanilla delight', 1),
(54, 10, 'D-Protin Powder- 500gm-Chocolate', 'KH45', 530, 530, 677, '530054189_1-large (3).png', 'D-Protin Powder- 500gm-Chocolate- 500gm Powder in a jar', 'D-Protin Powder- 500gm-Chocolate- 500gm Powder in a jar', 'D-Protin Powder', 'D-Protin Powder- 500gm-Chocolate- 500gm Powder in a jar', 'D-Protin Powder- 500gm-Chocolate', 1),
(55, 4, 'Gillette Venus Simply Venus Pink Hair Removal', 'UR231', 240, 240, 723, '193804423_716TErnjLtL._SL1500_.jpg', 'Gillette Venus Simply Venus Pink Hair Removal for Women - 5 razors (B4G1)', 'Gillette Venus Simply Venus Pink Hair Removal for Women - 5 razors (B4G1)', 'Gillette Venus Simply Venus Pink Hair Removal for Women - 5 razors (B4G1)', 'Gillette Venus Simply Venus Pink Hair Removal for Women - 5 razors (B4G1)', 'Gillette Venus Simply Venus Pink Hair Removal for Women - 5 razors (B4G1)', 1),
(56, 4, 'Secret Temptation Te Amo Aqua, Breeze and Pearl No Gas Perfume Body Spray Combo for Women', 'IU3450', 330, 330, 871, '658177913_619Fxt6oXtL._SL1000_.jpg', 'Secret Temptation Te Amo Aqua, Breeze and Pearl No Gas Perfume Body Spray Combo for Women, Pack of 3 (120ml each)', 'Secret Temptation Te Amo Aqua, Breeze and Pearl No Gas Perfume Body Spray Combo for Women, Pack of 3 (120ml each)', 'Secret Temptation Te Amo Aqua, Breeze and Pearl No Gas Perfume ', 'Secret Temptation Te Amo Aqua, Breeze and Pearl No Gas Perfume Body Spray Combo for Women, Pack of 3 (120ml each)', 'Secret Temptation Te Amo Aqua, Breeze and Pearl No Gas Perfume', 1),
(57, 4, 'Himalaya Himcolin Gel', 'PO90', 140, 140, 561, '710320940_61LG0mrN1oL._SL1400_.jpg', 'Himalaya Himcolin Gel - 30g', 'v', 'Himalaya Himcolin Gel - 30g', 'Himalaya Himcolin Gel - 30g', 'Himalaya Himcolin Gel - 30g', 1),
(58, 4, 'NIVEA Body Lotion for Very Dry Skin, Nourishing Body Milk with 2x Almond Oil, For Men & Women', 'AS78', 240, 240, 510, '516541280_71czTawMPdL._SL1500_.jpg', 'NIVEA Body Lotion for Very Dry Skin, Nourishing Body Milk with 2x Almond Oil, For Men & Women, 400 ml', 'NIVEA Body Lotion for Very Dry Skin, Nourishing Body Milk with 2x Almond Oil, For Men & Women, 400 ml', 'NIVEA Body Lotion', 'NIVEA Body Lotion for Very Dry Skin, Nourishing Body Milk with 2x Almond Oil, For Men & Women, 400 ml', 'NIVEA Body Lotion', 1),
(59, 4, 'Mamaearth Onion Shampoo for Hair Growth & Hair Fall Control with Onion', 'TY234', 900, 900, 615, '522530851_51LQ4Zuy1gS._SL1201_.jpg', 'Mamaearth Onion Shampoo for Hair Growth & Hair Fall Control with Onion & Plant Keratin - 1 Litre', 'Mamaearth Onion Shampoo for Hair Growth & Hair Fall Control with Onion & Plant Keratin - 1 Litre', 'Mamaearth Onion Shampoo ', 'Mamaearth Onion Shampoo for Hair Growth & Hair Fall Control with Onion & Plant Keratin - 1 Litre', 'Mamaearth Onion Shampoo eratin - 1 Litre', 1),
(60, 4, 'Whisper Ultra Clean Sanitary Pads For Women', 'WR56', 350, 350, 676, '779422706_71MKkEPBppS._SL1500_.jpg', '678', ' Whisper Ultra Clean Sanitary Pads For Women, X-Large +, Pack of 50 Napkins', ' Whisper Ultra Clean ', ' Whisper Ultra Clean Sanitary Pads For Women, X-Large +, Pack of 50 Napkins', ' Whisper Ultra Clean Sanitary Pads ', 1),
(61, 7, 'Neutrogena Hydro Boost Hyaluronic Acid Hydrating Water Gel', 'UI56', 800, 800, 678, '425264095_51QHHjI7VKL._SL1000_.jpg', 'Neutrogena Hydro Boost Hyaluronic Acid Hydrating Water Gel Daily Face Moisturizer For All Skin Types, 50g', 'Neutrogena Hydro Boost Hyaluronic Acid Hydrating Water Gel Daily Face Moisturizer For All Skin Types, 50g', 'Neutrogena Hydro', 'Neutrogena Hydro Boost Hyaluronic Acid Hydrating Water Gel Daily Face Moisturizer For All Skin Types, 50g', 'Neutrogena Hydro Boost Hyaluronic Acid Hydrating Water Gel ', 1),
(62, 7, 'UrbanGabru Charcoal Peel Off Mask remove blackheads & whiteheads', 'POI89', 195, 195, 723, '355637877_71bNQAv0lOS._SL1500_.jpg', 'UrbanGabru Charcoal Peel Off Mask remove blackheads & whiteheads | deep skin purifying cleansing (60 gm)', 'UrbanGabru Charcoal Peel Off Mask remove blackheads & whiteheads | deep skin purifying cleansing (60 gm)', 'UrbanGabru Charcoal Peel Off Mask remove blackheads & whiteheads | deep skin purifying', 'UrbanGabru Charcoal Peel Off Mask remove blackheads & whiteheads | deep skin purifying cleansing (60 gm)', 'UrbanGabru Charcoal Peel Off Mask remove blackheads & whiteheads | deep skin purifying ', 1),
(63, 7, 'WOW Skin Science Brightening Vitamin C Foaming Face Wash', 'GH012', 315, 315, 671, '661319132_81HJskN1SLL._SL1500_.jpg', 'WOW Skin Science Brightening Vitamin C Foaming Face Wash with Built-In Face Brush for Deep Cleansing - No Parabens, Sulphate, Silicones & Color, 150 ml', 'WOW Skin Science Brightening Vitamin C Foaming Face Wash with Built-In Face Brush for Deep Cleansing - No Parabens, Sulphate, Silicones & Color, 150 ml', 'WOW Skin Science Brightening ', 'WOW Skin Science Brightening Vitamin C Foaming Face Wash with Built-In Face Brush for Deep Cleansing - No Parabens, Sulphate, Silicones & Color, 150 ml', 'WOW Skin Science Brightening Vitamin C Foaming Face Wash', 1),
(64, 7, 'WOW Skin Science Vitamin C Face Cream', 'fr45', 450, 450, 562, '682194285_61ObM5fIJIL._SL1080_.jpg', 'WOW Skin Science Vitamin C Face Cream - Oil Free, Quick Absorbing - For All Skin Types - No Parabens, Silicones, Color, Mineral Oil', 'WOW Skin Science Vitamin C Face Cream - Oil Free, Quick Absorbing - For All Skin Types - No Parabens, Silicones, Color, Mineral Oil', 'WOW Skin Science Vitamin C Face Cream ]', 'WOW Skin Science Vitamin C Face Cream - Oil Free, Quick Absorbing - For All Skin Types - No Parabens, Silicones, Color, Mineral Oil', 'WOW Skin Science Vitamin C Face Cream ', 1),
(65, 7, 'Mamaearth Oil-Free Moisturizer For Face', 'SE132', 300, 300, 781, '400421799_61psXsVaU2L._SL1200_.jpg', ' Mamaearth Oil-Free Moisturizer For Face With Apple Cider Vinegar For Acne Prone Skin, 80 ml', ' Mamaearth Oil-Free Moisturizer For Face With Apple Cider Vinegar For Acne Prone Skin, 80 ml', ' Mamaearth', ' Mamaearth Oil-Free Moisturizer For Face With Apple Cider Vinegar For Acne Prone Skin, 80 ml', ' Mamaearth', 1),
(66, 7, 'NIVEA Soft Light Moisturizer Cream', 'GM567', 470, 470, 67, '469621629_41EzZfekquL._SY450_.jpg', 'NIVEA Soft Light Moisturizer Cream, with Vitamin E & Jojoba Oil for Face, Hands and Body, 500 ml', 'NIVEA Soft Light Moisturizer Cream, with Vitamin E & Jojoba Oil for Face, Hands and Body, 500 ml', 'NIVEA Soft Light ', 'NIVEA Soft Light Moisturizer Cream, with Vitamin E & Jojoba Oil for Face, Hands and Body, 500 ml', 'NIVEA Soft Light Moisturizer Cream,', 1),
(67, 3, 'Ensure', 'FG546', 1092, 1092, 676, '452747202_71f-Av2k+JL._SX679_.jpg', 'Ensure Complete, Balanced Nutrition Drink For Adults With Nutri Strength Complex (Vanilla Flavour) 1Kg', 'Ensure Complete, Balanced Nutrition Drink For Adults With Nutri Strength Complex (Vanilla Flavour) 1Kg', 'Ensure Complet', 'Ensure Complete, Balanced Nutrition Drink For Adults With Nutri Strength Complex (Vanilla Flavour) 1Kg', 'Ensure Com', 1),
(68, 3, 'Herbalife', 'TM910', 2222, 2222, 870, '977210146_91Yy1F1jJcL._SL1500_.jpg', 'Herbalife Nutrition Weight Loss Package F1 (Kulfi) and Personalized Protein Powder (PPP) and Afresh (Lemon)', 'Herbalife Nutrition Weight Loss Package F1 (Kulfi) and Personalized Protein Powder (PPP) and Afresh (Lemon)', 'Herbalife ', 'Herbalife Nutrition Weight Loss Package F1 (Kulfi) and Personalized Protein Powder (PPP) and Afresh (Lemon)', 'Herbalife ', 1),
(69, 3, 'Saffola FITTIFY Gourmet Hi-Protein Slim Meal', 'WM457', 928, 928, 671, '244924269_711GkEYt42L._SL1500_.jpg', 'Saffola FITTIFY Gourmet Hi-Protein Slim Meal Shake - Alphonso Mango, 420 gm Style Name:Pack of 2', 'Saffola FITTIFY Gourmet Hi-Protein Slim Meal Shake - Alphonso Mango, 420 gm Style Name:Pack of 2', 'Saffola', 'Saffola FITTIFY Gourmet Hi-Protein Slim Meal Shake - Alphonso Mango, 420 gm Style Name:Pack of 2', 'Saffola ', 1),
(70, 8, 'Dr Ortho Pain Relief Ayurvedic Medicine Oil', 'AV410', 234, 230, 519, '241592552_61I-ghtBsyL._SL1000_.jpg', 'Dr Ortho Pain Relief Ayurvedic Medicine Oil - 100ml+20ml Extra, Pack Of 1', 'Dr Ortho Pain Relief Ayurvedic Medicine Oil - 100ml+20ml Extra, Pack Of 1', 'Dr Ortho Pain Relief Ayurvedic Medicine ', 'Dr Ortho Pain Relief Ayurvedic Medicine Oil - 100ml+20ml Extra, Pack Of 1', 'Dr Ortho Pain Relief Ayurvedic Medicine Oil ', 1),
(71, 8, 'GAHI Anti Crack Silicon Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief', 'EU350', 200, 200, 310, '341428388_51EZRjF+ImL._SL1100_.jpg', 'GAHI Anti Crack Silicon Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel Cracks for Men And Women - Beige Free Size - 1 Pair', 'GAHI Anti Crack Silicon Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel Cracks for Men And Women - Beige Free Size - 1 Pair', 'GAHI Anti Crack Silicon Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel', 'GAHI Anti Crack Silicon Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel Cracks for Men And Women - Beige Free Size - 1 Pair', 'GAHI Anti Crack Silicon Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel ', 1),
(72, 8, 'GONIRY Anti Crack Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel', 'RT801', 220, 220, 678, '887938088_51D+UJmp+FL.jpg', 'GONIRY Anti Crack Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel Cracks for Men And Women - Beige Free Size - 1 Pair', 'GONIRY Anti Crack Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel Cracks for Men And Women - Beige Free Size - 1 Pair', 'GONIRY Anti Crack Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief', 'GONIRY Anti Crack Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief And Heel Cracks for Men And Women - Beige Free Size - 1 Pair', 'GONIRY Anti Crack Gel Heel And Foot Protector Moisturizing Socks for Foot Care,Pain Relief', 1),
(73, 8, 'Dr Ortho Lumbo Sacral Support Belt (Waist & Back Support Belt', 'ER90', 560, 560, 671, '409244074_51C5Vshe4gL._SL1000_.jpg', 'Dr Ortho Lumbo Sacral Support Belt (Waist & Back Support Belt) - for Men & Women, Cotton Fabric', 'Dr Ortho Lumbo Sacral Support Belt (Waist & Back Support Belt) - for Men & Women, Cotton Fabric', 'Dr Ortho Lumbo Sacral Support Belt ', 'Dr Ortho Lumbo Sacral Support Belt (Waist & Back Support Belt) - for Men & Women, Cotton Fabric', 'Dr Ortho Lumbo Sacral Support Belt (Waist & Back Support Belt', 1),
(74, 8, 'Moov Fast Pain Relief Spray', 'DT541', 520, 570, 109, '390041890_61N8AmK4G7L._SL1000_.jpg', 'Moov Fast Pain Relief Spray â€“ 80g (Pack of 2)', 'Moov Fast Pain Relief Spray â€“ 80g (Pack of 2)', 'Moov Fast Pain Relief Spray', 'Moov Fast Pain Relief Spray â€“ 80g (Pack of 2)', 'Moov Fast ', 1),
(75, 8, 'Iodex Rapid Action Spray', 'DM79', 166, 166, 891, '591340237_51wUojAIxtL._SL1000_.jpg', 'Iodex Rapid Action Spray 60 g', 'Iodex Rapid Action Spray 60 g', 'Iodex Rapid Action Spray ', 'Iodex Rapid Action Spray 60 g', 'Iodex Rapid Action Spray', 1),
(76, 8, 'Vicks Vaporub', 'VC129', 230, 230, 510, '430497645_818Q7bRbUkL._SL1500_.jpg', 'Vicks Vaporub 110ml, Relief From Cold, Cough, Blocked Nose, Headache, Body ache, Muscular stiffness and Breathing difficulty', 'Vicks Vaporub 110ml, Relief From Cold, Cough, Blocked Nose, Headache, Body ache, Muscular stiffness and Breathing difficulty', 'Vicks Vaporub ', 'Vicks Vaporub 110ml, Relief From Cold, Cough, Blocked Nose, Headache, Body ache, Muscular stiffness and Breathing difficulty', 'Vicks Vaporub ', 1),
(77, 3, 'HERBALIFE NUTRITION COMBO SHAKEMATE', 'AP90', 2839, 2830, 780, '472254861_81-x9MeeMsL._SL1500_.jpg', 'HERBALIFE NUTRITION COMBO SHAKEMATE WITH CFORMULA ONE MANGO, PPP200, AFRESH LEMON', 'HERBALIFE NUTRITION COMBO SHAKEMATE WITH CFORMULA ONE MANGO, PPP200, AFRESH LEMON', 'HERBALIFE NUTRITION', 'HERBALIFE NUTRITION COMBO SHAKEMATE WITH CFORMULA ONE MANGO, PPP200, AFRESH LEMON', 'HERBALIFE NUTRITIOn', 1),
(78, 3, 'Himalaya Quista Pro Advanced Whey Protein Powder', 'PRE86', 3420, 3420, 310, '182977752_711yeqlFxML._SL1500_.jpg', 'Himalaya Quista Pro Advanced Whey Protein Powder - 2 kg (Chocolate)', 'Himalaya Quista Pro Advanced Whey Protein Powder - 2 kg (Chocolate)', 'Himalaya Quista Pro Advanced ', 'Himalaya Quista Pro Advanced Whey Protein Powder - 2 kg (Chocolate)', 'Himalaya Quista Pro Advanced Whey Protein ', 1),
(79, 3, 'Wellbeing Nutrition Daily Greens', 'KJQ315', 320, 320, 905, '996600510_61yWmAhlgrS._SL1500_.jpg', 'Wellbeing Nutrition Daily Greens, Wholefood Multivitamin with Vitamin C, Zinc, B6, B12, Iron for Immunity and Detox with 39+ Organic Certified Plant', 'Wellbeing Nutrition Daily Greens, Wholefood Multivitamin with Vitamin C, Zinc, B6, B12, Iron for Immunity and Detox with 39+ Organic Certified Plant', 'Wellbeing Nutrition Daily Greens', 'Wellbeing Nutrition Daily Greens, Wholefood Multivitamin with Vitamin C, Zinc, B6, B12, Iron for Immunity and Detox with 39+ Organic Certified Plant', 'Wellbeing Nutrition Daily Greens', 1),
(80, 11, 'Captain Zack Barking Up The Tea Tree Dog Shampoo', 'UI510', 310, 300, 561, '572991052_71iNma+txDS._SL1500_.jpg', 'Captain Zack Barking Up The Tea Tree Dog Shampoo - Anti-Bacterial, Anti-Dandruff, Itch Relief & Maintains Overall Skin Health, Paraben Free', 'Captain Zack Barking Up The Tea Tree Dog Shampoo - Anti-Bacterial, Anti-Dandruff, Itch Relief & Maintains Overall Skin Health, Paraben Free', 'Captain Zack Barking Up', 'Captain Zack Barking Up The Tea Tree Dog Shampoo - Anti-Bacterial, Anti-Dandruff, Itch Relief & Maintains Overall Skin Health, Paraben Free', 'Captain Zack Barking Up ', 1),
(81, 11, 'Captain Zack Pawsitively Smooth Paw', 'DO610', 340, 330, 891, '685172028_81Nvf7q0hpL._SL1500_.jpg', 'Captain Zack Pawsitively Smooth Paw Butter/Cream/Wax/Balm for Dogs Dry, Cracked, Chapped Paws & Elbows with Natural Actives to Heal, Repair, Soften', 'Captain Zack Pawsitively Smooth Paw Butter/Cream/Wax/Balm for Dogs Dry, Cracked, Chapped Paws & Elbows with Natural Actives to Heal, Repair, Soften', 'Captain Zack Pawsitively', 'Captain Zack Pawsitively Smooth Paw Butter/Cream/Wax/Balm for Dogs Dry, Cracked, Chapped Paws & Elbows with Natural Actives to Heal, Repair, Soften', 'Captain Zack Pawsitivel', 1),
(82, 11, 'Pet en Care Munchy Sticks', 'RN681', 90, 80, 634, '801168811_91IUXzKrrOS._SL1500_.jpg', 'Pet en Care Munchy Sticks Natural Flavour (25x1 Pieces) Export Quality (Set of 4)', 'Pet en Care Munchy Sticks Natural Flavour (25x1 Pieces) Export Quality (Set of 4)', 'Pet en Care', 'Pet en Care Munchy Sticks Natural Flavour (25x1 Pieces) Export Quality (Set of 4)', 'Pet en C', 1),
(83, 11, 'Drools Absolute Calcium Bone Jar', 'FFAZ34', 220, 220, 710, '748517162_618MTeeCweL._SL1500_.jpg', 'Drools Absolute Calcium Bone Jar, Dog Treats-20 Pieces (300 gm)', 'Drools Absolute Calcium Bone Jar, Dog Treats-20 Pieces (300 gm)', 'Drools Absolute Calcium', 'Drools Absolute Calcium Bone Jar, Dog Treats-20 Pieces (300 gm)', 'Drools Absolute Calcium Bone ', 1),
(84, 8, 'Vicks Inhaler', 'VI156', 55, 50, 516, '793082763_71Z1MsUsQbL._SL1500_.jpg', 'Vicks Inhaler Keychain - 0.5 ml', 'Vicks Inhaler Keychain - 0.5 ml', 'Vicks Inhaler Keychain - 0.5 ml', 'Vicks Inhaler Keychain - 0.5 ml', 'Vicks Inhaler Keychain', 1),
(85, 9, 'Mortein 2-in-1 Mosquito and Cockroach killer Spray', 'PDS519', 160, 160, 617, '839624508_41kJQ5UctQL._SL1000_.jpg', 'Mortein 2-in-1 Mosquito and Cockroach killer Spray - 400 ml', 'Mortein 2-in-1 Mosquito and Cockroach killer Spray - 400 ml', 'Mortein 2-in-1 Mosquito and Cockroach killer Spray - 400 ml', 'Mortein 2-in-1 Mosquito and Cockroach killer Spray - 400 ml', 'Mortein 2-in-1 Mosquito and Cockroach killer Spray - 400 ml', 1),
(86, 7, 'Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream', 'FU619', 170, 170, 561, '484739056_61ffhTkguIL._SL1200_.jpg', ' Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream with SPF-25, for all skin types, 40g', ' Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream with SPF-25, for all skin types, 40g', ' Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream with SPF-25, for all skin types, 40g', ' Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream with SPF-25, for all skin types, 40g', ' Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream with SPF-25, for all skin types, 40g', 1),
(87, 7, 'Lotus Herbals WhiteGlow I', 'QN410', 230, 230, 671, '634613984_41R2EIf14VL.jpg', 'Lotus Herbals WhiteGlow Intensive Skin Whitening & Brightening Serum + Moisturiser | 30 ml', 'Lotus Herbals WhiteGlow Intensive Skin Whitening & Brightening Serum + Moisturiser | 30 ml', 'Lotus Herbals WhiteGlow Intensive Skin Whitening & Brightening Serum + Moisturiser | 30 ml', 'Lotus Herbals WhiteGlow Intensive Skin Whitening & Brightening Serum + Moisturiser | 30 ml', 'Lotus Herbals WhiteGlow Intensive Skin Whitening & Brightening Serum + Moisturiser | 30 ml', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `u_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `added_on`) VALUES
(42, 2, 'patel colony, street no-5', 'Jamnagar', 361008, 'COD', 510, 'Complete', 'Delivered', '2021-11-20 12:19:21'),
(43, 2, 'patel colony, street no-5', 'Jamnagar', 361008, 'COD', 2820, 'Complete', 'Delivered', '2021-11-20 12:20:08'),
(44, 2, 'patel colony', 'jamnagar', 361008, 'COD', 1020, 'Complete', 'Delivered', '2021-12-11 05:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(2, 'pqr', 'pqrpqr', 'pqr@gmail.com', '7374585908', '2021-10-03 12:51:29'),
(3, 'abc', 'abc123abc', 'abc@gmail.com', '1212121212', '2021-10-03 13:08:13'),
(4, 'aaa', 'aaa123', 'aaa@gmail.com', '5627424835', '2021-10-03 14:49:34'),
(5, 'Mr. abcd', 'abcd1234', 'abcd@gmail.com', '3344556677', '2021-11-14 08:17:44'),
(6, 'ms. shreya', 'shreya123', 'shreya@gmail.com', '1221344356', '2021-11-14 08:24:21');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`blog_cate_id`) REFERENCES `blog_cate` (`blog_cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`doc_cate_id`) REFERENCES `doc_cate` (`doc_cate_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`pro_cate_id`) REFERENCES `categories` (`pro_cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
