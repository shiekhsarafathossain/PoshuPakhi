-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 06:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `username`, `email`, `password`, `contact`, `admin`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$Ra2HuXh3wxNiUGf7LfZmneenSAv3nH3Q8TU.uAv8NlARzlPdehUDK', '01627400607', 'yes'),
(4, 'stuff', 'stuff@gmail.com', '$2y$10$lS4mizraSHXbpcQ61zL5KO8GV0vWkC.23RCdtRhjVf75yYW/zBvCq', '01577400809', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(29, 'Wet Dog Food'),
(30, 'Dry Dog Food'),
(31, 'Puppy Dog'),
(32, 'Vitamins And Supplements'),
(33, 'Dry Cat Food'),
(34, 'Wet Cat Food'),
(35, 'Kitten food'),
(36, 'Cat litter'),
(37, 'Cat Play'),
(38, 'Cat Clothings'),
(39, 'Bed And Carrier'),
(40, 'Fish Food'),
(41, 'Fish Care And Medicine'),
(42, 'Bird Toys'),
(43, 'Bird Food'),
(44, 'Rabbit Food'),
(45, 'Rabbit Cage');

-- --------------------------------------------------------

--
-- Table structure for table `order_pending`
--

CREATE TABLE `order_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `user_shipping_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_pending`
--

INSERT INTO `order_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`, `user_shipping_address`) VALUES
(57, 13, 23684525, 18, 5, 'Pending', 'Taltola Khilgaon, Dhaka-1219'),
(58, 13, 56388684, 28, 4, 'Pending', 'Bondor, Chittagong'),
(59, 13, 1586226375, 22, 1, 'Pending', 'Bondor, dhaka'),
(60, 13, 1391890720, 35, 1, 'Pending', 'Bondor, Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_price_buying` varchar(255) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `seller_contact` varchar(255) NOT NULL,
  `stock_quantity` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL,
  `sold_quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `product_price_buying`, `seller_name`, `seller_contact`, `stock_quantity`, `date`, `status`, `sold_quantity`) VALUES
(16, 'Purina Friskies Dry Cat Food – Surfin’ Favourites (2.5kg)', '- Mackerel, Tuna, Salmon & Sardine Flavour. - Complete & balanced nutrition. - Protein to help maintain strong lean muscles. - Essential Fatty Acids with Omega 3 & 6 for a healthy skin & coat. - Antioxidants to help support a healthy immune system. - Taur', 'Purina Friskies Dry Cat Food – Surfin’ Favourites ', 33, 'Screenshot 2025-05-01 112912.png', 'Screenshot 2025-05-01 112928.png', 'Screenshot 2025-05-01 112912.png', '1800', '800', 'Paws Dearie Meal', '01966548926', '50', '2025-05-20 04:41:02', 'true', 0),
(18, 'Kat Club Dry Cat Food – Lamb (1kg)', '- Omega-3 and Omega-6 fatty acids for healthy skin and a glossy coat - Calcium and phosphorus for strong teeth and bones - Taurine for improved vision and heart health', '- Omega-3 and Omega-6 fatty acids for healthy skin and a glossy coat - Calcium and phosphorus for strong teeth and bones - Taurine for improved vision and heart health', 33, 'Screenshot 2025-05-01 113757.png', 'Screenshot 2025-05-01 113757.png', 'Screenshot 2025-05-01 113924.png', '500', '150', 'Cat enterprise', '01956234856', '60', '2025-05-20 05:18:05', 'true', 5),
(19, 'Feed Ideal meals for optimal health. Formulated to promote healthy urinary tracts - Aids in reducing', 'Meat and animal derivatives (chicken 25%), Cereals, Vegetable protein extracts, Oils and fats, Fruit (cranberry 4%), Minerals, Derivatives of vegetable origin, Yeast', 'Feed Ideal meals for optimal health. Formulated to promote healthy urinary tracts - Aids in reducing the chance to prevent felines from developing lower urinary tract infections. -For adults, cats starting at 1-year-old - Available in 350g', 33, 'Screenshot 2025-05-01 113235.png', 'Screenshot 2025-05-01 113423.png', 'Screenshot 2025-05-01 113126.png', '900', '200', 'Cat Enterprise', '01914280163', '60', '2025-05-20 04:47:31', 'true', 0),
(20, '. Reflex Plus Adult Cat Food with Chicken 15kg', '- Strengthens the Immune System - Increases the Digestion - Metabolism of Nutrients - Natural Antioxidant Effect', '. Reflex Plus Adult Cat Food with Chicken 15kg', 33, 'Screenshot 2025-05-01 114226.png', 'Screenshot 2025-05-01 114203.png', 'Screenshot 2025-05-01 114355.png', '7300', '2000', 'Cat enterprise', '01914280163', '50', '2025-05-20 04:49:39', 'true', 0),
(21, 'Bellotta Adult Soup Tuna Extract with Goji Berry 40g', 'Tuna soup with goji berry Tuna soup with concentrated extract, add deliciousness and chew with real goji berry pulp, combining 4 levels of benefits, including taurine, vitamin E, omega-3. From tuna oil and fluctooligosaccharides, delicious, safe, no added', 'Bellotta Adult Soup Tuna Extract with Goji Berry 40g', 34, 'Screenshot 2025-05-01 133631.png', 'Screenshot 2025-05-01 133557.png', 'Screenshot 2025-05-01 133504.png', '100', '45', 'Cat enterprise', '01914280163', '40', '2025-05-20 04:51:12', 'true', 0),
(22, 'Sheba Premium Wet Cat Can Food with Tuna & Snapper in Gravy 85g', 'Protein-Rich Formula – Contains at least 9% protein to help maintain strong muscles.', 'Sheba Premium Wet Cat Can Food with Tuna & Snapper in Gravy 85g', 34, 'Screenshot 2025-05-01 133811.png', 'Screenshot 2025-05-01 133824.png', 'Screenshot 2025-05-01 133847.png', '170', '90', 'Cat enterprise', '01771781463', '60', '2025-05-20 08:46:24', 'true', 1),
(23, 'mazon Brand - Kitzy Wet Cat Food, Chicken cuts in Gravy, Grain Free (Kitten), 3 ounce (Pack of 24)', 'SPECIALLY FORMULATED: This delicious recipe is formulated to support growing kittens.', 'mazon Brand - Kitzy Wet Cat Food, Chicken cuts in Gravy, Grain Free (Kitten)', 34, 'Screenshot 2025-05-01 134344.png', 'Screenshot 2025-05-01 134353.png', 'Screenshot 2025-05-01 134402.png', '250', '120', 'Cat enterprise', '01911293901', '63', '2025-05-20 04:53:51', 'true', 0),
(24, 'Cat Backpack Carrier, Pet Cat Carrier with Ventilated Design for Carrying Puppy Cats, Pet Carrier Ba', 'Breathable Material: Made of highly breathable materials, our backpack ensures that your pet stays cool and comfortable during travel. Every breath will be of pure comfort for your four-legged friend.', 'Cat Backpack Carrier, Pet Cat Carrier with Ventilated Design for Carrying Puppy Cats, Pet Carrier Backpack for Traveling/Hiking/Camping/Outdoors Airline Approved Travel Carrier(Pink)', 39, 'Screenshot 2025-05-01 131250.png', 'Screenshot 2025-05-01 131230.png', 'Screenshot 2025-05-01 131432.png', '1450', '1000', 'Cat enterpise', '01914280163', '53', '2025-05-20 04:55:14', 'true', 0),
(25, 'Small Pet Costume Cat Dog School Uniform Skirts, Cat Sailor Costume, Pet Apparel Cosplay Party for S', 'Cat Sailor Costume made of soft cotton, it is comfortable and not easy to stick hair. Only fit cats, rabbits and puppies. It can leave some lovely commemorative pictures during in everyday life.', 'Small Pet Costume Cat Dog School Uniform Skirts, Cat Sailor Costume, Pet Apparel Cosplay Party for Small Dogs Cats Clothing (Beige Mixed Blue) ', 38, 'Screenshot 2025-05-01 115223.png', 'Screenshot 2025-05-01 115232 (1).png', 'Screenshot 2025-05-01 115241.png', '700', '300', 'Cat enterprise', '01914280163', '10', '2025-05-20 05:04:49', 'true', 0),
(28, 'X spring Recovery Suit, Breathable Striped Surgical Protector for Skin Disease and Abdominal Wounds,', 'A best and professional e-collar and cone alternative. The suit fits the cats and can protect the wound efficiently with comfortable feeling', 'X spring Recovery Suit, Breathable Striped Surgical Protector for Skin Disease and Abdominal Wounds, Bandages E Collar Cone Alternative, for Cats after Surgery Wear Indoor Clothing', 38, 'Screenshot 2025-05-01 122115.png', 'Screenshot 2025-05-01 122017 (1).png', 'Screenshot 2025-05-01 122103.png', '400', '250', 'Cat enterprise', '01914280163', '7', '2025-05-20 06:41:31', 'true', 4),
(29, 'Blue Ridge Koi Fish Food 2lb - Koi Food Mini Growth Formula, Goldfish Food, Premium Fish Food for Po', 'PERFECT FOR KOI AND GOLDFISH 5 INCHES AND SMALLER This food provides a completely balanced nutritional diet that greatly enhances growth in all koi and goldfish.', 'Blue Ridge Koi Fish Food 2lb - Koi Food Mini Growth Formula, Goldfish Food, Premium Fish Food for Ponds, Ponds Fish Food, Floating Pond Pellets', 40, 'Screenshot 2025-05-01 135235.png', 'Screenshot 2025-05-01 135243.png', 'Screenshot 2025-05-01 135302.png', '200', '52', 'Fish enterprise', '01533350157', '50', '2025-05-20 05:23:11', 'true', 0),
(30, 'Hikari 042221 Marine Herbivore Medium Sinking Pellets Marine Fish Food, One Size', 'Fish meal, dried seaweed meal, cuttlefish meal, dehydrated alfalfa meal, krill meal, brewers dried yeast, fish oil, wheat flour, spirulina, sodium alginate, lecithin, taurine, DL-methionine, astaxanthin, dried Bacillus subtilis fermentation product, clam ', 'Hikari 042221 Marine Herbivore Medium Sinking Pellets Marine Fish Food, One Size', 40, 'Screenshot 2025-05-01 135703.png', 'Screenshot 2025-05-01 135725.png', 'Screenshot 2025-05-01 135716.png', '150', '65', 'Fish enterprise', '01533350157', '30', '2025-05-20 05:24:33', 'true', 0),
(31, 'Aquarium Rock Salt – 100gm', 'Aquarium Rock Salt  - Promotes Fish Health & Reduces Stress. - Provides Essential Electrolytes. - Promotes Disease Recovery. - Facilitates Osmoregulation.', 'Aquarium Rock Salt – 100gm', 41, 'Screenshot 2025-05-01 141253.png', 'Screenshot 2025-05-01 141243.png', 'Screenshot 2025-05-01 141234.png', '180', '80', 'Fish enterprise', '01533350157', '25', '2025-05-20 05:28:47', 'true', 0),
(32, '8 in 1 Medicine water cure Combo', '1. Anti-White spot Special 2. Anti-Fungus Special 3. Anti-Rot Special 4. Anti-Parasite Special', '8 in 1 Medicine water cure Combo', 41, 'Screenshot 2025-05-01 141911.png', 'Screenshot 2025-05-01 141610.png', 'Screenshot 2025-05-01 141445.png', '1000', '600', 'Fish enterprise', '01533350157', '35', '2025-05-20 05:30:32', 'true', 0),
(33, 'Smart Heart Rabbit Food Wild berry Flavor 1Kg', 'Specifically developed to provide complete and balanced nutrition for Rabbits for optimum growth, strong bones and teeth, and healthy skin and coat.', 'Smart Heart Rabbit Food Wild berry Flavor 1Kg', 44, 'Screenshot 2025-05-01 143535 (2).png', 'Screenshot 2025-05-01 143725.png', 'Screenshot 2025-05-01 143535 (3).png', '250', '150', 'Fish enterprise', '01533350157', '60', '2025-05-20 05:35:13', 'true', 0),
(34, 'Jungle rabbit food', 'High Fiber Content Promotes healthy digestion and prevents bloating. - **Rich in Vitamins and Minerals: Supports overall health and boosts immunity.', 'Jungle rabbit food', 44, 'Screenshot 2025-05-01 142211.png', 'Screenshot 2025-05-01 142115.png', 'Screenshot 2025-05-01 143725.png', '450', '200', 'rabbit enterprise', '01914280163', '30', '2025-05-20 05:36:35', 'true', 0),
(35, 'Rabbit & Guinea Pig Cage, Ferret Cage', 'Iron wire upper frame and PP plastic base; large top and front openings for easy inside access     - Jumbo small-animal habitat for pet rabbits, guinea pigs, ferrets, or chinchillas', 'Rabbit & Guinea Pig Cage, Ferret Cage', 45, 'Screenshot 2025-05-01 142908.png', 'Screenshot 2025-05-01 142917 (1).png', 'Screenshot 2025-05-01 142706.png', '500', '220', 'rabbit enterprise', '01533501573', '12', '2025-05-20 12:00:20', 'true', 1),
(36, 'B.P.H Cat Litter Scoop ', 'Hygienics  – Standard holes  – Cost-Effective', 'B.P.H Cat Litter Scoop Blue', 36, 'image.png', 'Screenshot 2025-05-01 111625.png', 'Screenshot 2025-05-01 111444 (1).png', '99', '30', 'Cat enterprise', '01914280163', '55', '2025-05-20 05:43:06', 'true', 0),
(37, 'Quik Budgie Mix Pack 1 kg', 'The Quik Bird Food Budgie Mix Pack 1kg is a high-quality, nutrient-rich seed blend specifically designed for budgerigars (budgies). This mix includes a variety of seeds like millet, canary seed, oats, and flaxseed, offering a well-balanced diet for your b', 'Quik Budgie Mix Pack 1 kg', 43, 'Picture1.png', 'Picture2.jpg', 'Picture3.jpg', '335', '200', 'bird enterprise', '99999999999', '54', '2025-05-20 06:08:09', 'true', 0),
(38, 'The Quik Bird Food Budgie Mix Pack 1kg ', 'The Quik Bird Food Budgie Mix Pack 1kg is a high-quality, nutrient-rich seed blend specifically designed for budgerigars (budgies). This mix includes a variety of seeds like millet, canary seed, oats, and flaxseed, offering a well-balanced diet for your b', 'The Quik Bird Food Budgie Mix Pack 1kg ', 43, 'Picture4.png', 'Picture5.jpg', 'Picture4.png', '495', '250', 'bird enterprise', '51263145284', '50', '2025-05-20 06:09:34', 'true', 0),
(39, 'Petslife Mini Hand Feeding Formula ', 'specially designed for baby birds, providing comprehensive nutrition to support their growth and development. This formula is ideal for hand-rearing chicks, ensuring they receive the essential nutrients needed during their early stages of life.', 'Petslife Mini Hand Feeding Formula ', 41, 'Picture6.png', 'Picture7.png', 'Picture8.png', '275', '150', 'bird enterprise', '01914280163', '56', '2025-05-20 06:10:49', 'true', 0),
(40, 'Petslife Calcium Plus Birds Supplement 50ml ', 'is a specially formulated liquid supplement designed to meet the calcium needs of pet birds. It supports bone health, eggshell formation, and muscle function, ensuring your feathered friends remain healthy and active. ', 'Petslife Calcium Plus Birds Supplement 50ml ', 32, 'Picture9.jpg', 'Picture10.jpg', 'Picture11.jpg', '400', '150', 'bird enterprise', '01561254789', '30', '2025-05-20 06:13:36', 'true', 0),
(41, 'Oasis Vita-Drops for Small Birds', 'liquid multivitamin supplement specially formulated for small birds like parakeets, canaries, finches, and cockatiels. It supports healthy growth, vibrant feathers, and a strong immune system. Easy to use, it can be added to drinking water or food for dai', 'Oasis Vita-Drops for Small Birds', 32, 'Picture12.jpg', 'Picture13.png', 'Picture14.jpg', '3020', '1900', 'bird enterprise', '01514896325', '18', '2025-05-20 06:15:21', 'true', 0),
(42, 'Smartheart Puppy Dog Food Beef  Milk', 'Specially formulated to support the  healthy development of puppies Perfect for  puppies of all breeds.', 'Smartheart Puppy Dog Food Beef  Milk', 29, 'Picture15.jpg', 'Screenshot 2025-05-20 121827.png', 'Screenshot 2025-05-20 121832.png', '2000', '1390', 'dog enterprise', '01627400508', '50', '2025-05-20 06:19:09', 'true', 0),
(43, 'InterNutri Puppy Food', ' A complete feed for puppies. It combines high-quality ingredients  with several important dietary supplements designed to support pet well-being  and growth at this critical stage of pet growth.  FOS + MOS + Yucca shijigera extract-an important regulator', 'InterNutri Puppy Food', 30, 'Screenshot 2025-05-20 121933.png', 'Screenshot 2025-05-20 121938.png', 'Screenshot 2025-05-20 121941.png', '1250', '700', 'dog enterprise', '01771781463', '80', '2025-05-20 06:20:48', 'true', 0),
(44, 'SmartHeart Adult Dog Food Roast  Beef', 'Improve brain and nervous system function.  Calcium and phosphorus are essential nutrients for  healthy bones and teeth', 'SmartHeart Adult Dog Food Roast  Beef', 29, 'Screenshot 2025-05-20 122114.png', 'Screenshot 2025-05-20 122104.png', 'Screenshot 2025-05-20 122109.png', '1900', '900', 'Dog enterprise', '01771781463', '60', '2025-05-20 06:22:19', 'true', 0),
(45, 'Bengal Growth Promoter for Cats &  Dogs ', '1..Suitable for Cats & Dogs.  2.Supports Healthy Growth.  3.Improves Strength & Stamina.  4.Rich in Essential Nutrients.', 'Bengal Growth Promoter for Cats &  Dogs ', 32, 'Screenshot 2025-05-20 122235.png', 'Screenshot 2025-05-20 122241.png', 'Screenshot 2025-05-20 122235.png', '450', '250', 'dog enterprise', '01991485623', '20', '2025-05-20 06:23:42', 'true', 0),
(46, 'PetCare Pethex Medicated Anti-Fungal  Shampoo', '1.Effectively treats and controls fungal infections.  2.Safe for regular use on dogs and cats with sensitive skin.  3.Reduces itching, redness, and flaking while promoting skin  healing. ', 'PetCare Pethex Medicated Anti-Fungal  Shampoo', 32, 'Screenshot 2025-05-20 122405.png', 'Screenshot 2025-05-20 122402.png', 'Screenshot 2025-05-20 122410.png', '799', '380', 'dog enterprise', '01914250163', '60', '2025-05-20 06:25:08', 'true', 0),
(47, 'abc ', 'abvd', 'abc', 37, 'Screenshot 2025-05-17 131932.png', 'Screenshot 2025-05-17 132440.png', 'Screenshot 2025-05-17 131157.png', '100', '50', 'abc', '012345678910', '20', '2025-05-20 12:02:05', 'true', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estimated_delivery` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(255) NOT NULL,
  `user_shipping_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `estimated_delivery`, `order_status`, `user_shipping_address`) VALUES
(68, 13, 2500, 23684525, 1, '2025-05-20 06:44:52', '2025-05-22 18:00:00', 'Delivered', 'Taltola Khilgaon, Dhaka-1219'),
(69, 13, 1600, 56388684, 1, '2025-05-20 06:41:31', '2025-05-23 02:41:31', 'Pending', 'Bondor, Chittagong'),
(70, 13, 170, 1586226375, 1, '2025-05-20 08:46:24', '2025-05-23 04:46:24', 'Pending', 'Bondor, dhaka'),
(71, 13, 500, 1391890720, 1, '2025-05-20 12:00:20', '2025-05-23 08:00:20', 'Pending', 'Bondor, Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_shipping_address` varchar(255) NOT NULL,
  `user_mobile` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_shipping_address`, `user_mobile`) VALUES
(13, 'sarafat', 'sarafat@gmail.com', '$2y$10$acRqUkBYU6Q/uCsfzseWJ.KB4HGS32jlFLlmzPdJk/W1WscyoxWCm', 'ABS-59.jpg', '::1', '284/1 Helal Market, Uttarkhan, Dhaka-1230', 'Bondor, Chittagong', '01627400607');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order_pending`
--
ALTER TABLE `order_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_pending`
--
ALTER TABLE `order_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
