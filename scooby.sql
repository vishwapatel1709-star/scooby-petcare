-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 11:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scooby`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogid` int(11) NOT NULL,
  `blogTitle` varchar(255) NOT NULL,
  `blogContent` varchar(500) NOT NULL,
  `blogimage` varchar(255) NOT NULL,
  `blogDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogid`, `blogTitle`, `blogContent`, `blogimage`, `blogDate`) VALUES
(8, 'Paws And Beyond Unveiling The World Of Innovative Pet Products', 'Paws And Beyond Unveiling The World Of Innovative Pet Products<br>', 'blog6.png', '2024-02-28 13:18:09'),
(9, 'Paws And Beyond Unveiling The World Of Innovative Pet Products', 'Paws And Beyond Unveiling The World Of Innovative Pet Products<br>', 'blog6.png', '2024-02-28 13:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productImage1` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPriceBeforeDiscount` int(11) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(3, 'Dog', 'Dog products', '2017-01-24 19:17:37', '26-02-2024 02:51:55 PM'),
(6, 'Cat', 'Cat Products', '2017-02-20 19:18:52', '26-02-2024 02:53:02 PM');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `product`, `name`, `email`, `comment`) VALUES
(1, 21, 'abc', 'abc@gmail.com', 'Nice food product');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', NULL),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(21, 3, 13, 'Sara Wholesome Food', 'Sara', 200, 250, '<p style=\"box-sizing: inherit; color: rgb(21, 21, 21); font-size: 16px; line-height: 24px; font-family: Rubik, sans-serif;\"><span style=\"box-sizing: inherit; letter-spacing: 0px !important;\">Fresh Chicken I Brown Rice I Mackerel Fish I Egg I Spinach I Apple I and more</span></p><ul style=\"box-sizing: inherit; padding-left: 16px; color: rgba(18, 18, 18, 0.75); font-family: Rubik, sans-serif; font-size: 16px;\"><li style=\"box-sizing: inherit; color: rgb(21, 21, 21); line-height: 24px; letter-spacing: 0px !important;\"><span style=\"box-sizing: inherit; letter-spacing: 0px !important;\">Made using the choicest &amp; freshest of ingredients</span></li><li style=\"box-sizing: inherit; color: rgb(21, 21, 21); line-height: 24px; letter-spacing: 0px !important;\"><span style=\"box-sizing: inherit; letter-spacing: 0px !important;\">60% meat, 40% Fruits &amp; Vegetables</span></li></ul>', 'df1.png', 'df1.png', 'df1.png', 10, 'In Stock', '2024-02-26 10:25:46', NULL),
(22, 3, 13, 'Royal Canin Maxi Puppy Dry Dog Food', 'Royal Canin', 200, 300, '<ul style=\"box-sizing: inherit; padding-left: 16px; color: rgba(18, 18, 18, 0.75); font-family: Rubik, sans-serif; font-size: 16px;\"><li style=\"box-sizing: inherit; color: rgb(21, 21, 21); line-height: 24px; letter-spacing: 0px !important;\"><b data-mce-fragment=\"1\" style=\"box-sizing: inherit; letter-spacing: 0px !important;\">Long growth - moderate energy :<span data-mce-fragment=\"1\" style=\"box-sizing: inherit; letter-spacing: 0px !important;\">&nbsp;</span></b><span data-mce-fragment=\"1\" style=\"box-sizing: inherit; letter-spacing: 0px !important;\">Meets the moderate energy needs of large breed puppies which have a long growth period.</span></li><li style=\"box-sizing: inherit; color: rgb(21, 21, 21); line-height: 24px; letter-spacing: 0px !important;\"><b data-mce-fragment=\"1\" style=\"box-sizing: inherit; letter-spacing: 0px !important;\">Digestive health :<span data-mce-fragment=\"1\" style=\"box-sizing: inherit; letter-spacing: 0px !important;\">&nbsp;</span></b><span data-mce-fragment=\"1\" style=\"box-sizing: inherit; letter-spacing: 0px !important;\">Combination of nutrients with high quality protein and prebiotics to support digestive health</span></li></ul>', 'df2.png', 'df2.png', 'df2.png', 10, 'In Stock', '2024-02-26 10:34:22', NULL),
(23, 3, 13, 'Royal Canin X- Small Puppy Dry Food For Dogs', 'Royal Canin', 200, 250, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">ROYAL CANIN X-Small Puppy is specially formulated to support the nutritional needs of extra small breed puppies. This formula is suitable for 2 to 10-month-old puppies that should reach an adult weight of up to 4kg. This tailored diet is enriched with omega-3 fatty acids to help support healthy brain development in puppies</span><br>', 'df3.png', 'df3.png', 'df3.png', 10, 'In Stock', '2024-02-26 10:37:50', NULL),
(24, 3, 13, 'Small Breed Dog Dry Food', 'Pedigree Pro', 150, 200, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The Pedigree Pro range of premium dog food containing Immunity 3 formula is specially designed as per the needs of your small dog and pup age 3-12 weeks to ensure they live at their happiest and healthiest best. Pedigree Pro dog food is developed with veterinarians&nbsp;</span><br>', 'd4.png', 'd4.png', '', 10, 'In Stock', '2024-02-26 10:40:44', NULL),
(25, 3, 13, 'Classic Paneer And Eggs ', 'Sara', 300, 350, '<br>', 'df4.png', 'df4.png', '', 10, 'In Stock', '2024-02-26 10:43:18', NULL),
(26, 3, 14, 'Natural Activated Charcoal Shampoo', 'Charcoal Natural Shampoo', 400, 500, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">&nbsp;This plant-based formula is pH balanced and completely free of sulphates, parabens and toxic soaps. This means it’s gentle on their skin and tough on the toxins. It contains coconut-based activated charcoal that acts like a magnet to draw out impurities and odour.&nbsp;</span><br>', 'dg1.png', 'dg1.png', '', 10, 'In Stock', '2024-02-26 10:48:01', NULL),
(27, 3, 14, 'Isle of Dogs Everyday Clean Coating', 'Isle of Dogs', 200, 250, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Isle of Dogs Clean Coating Dog Shampoo is designed to gently cleanse and hydrate your dogs fur while leaving a noticeable shine and silky feel to the hair.</span><br>', 'dg2.png', 'dg2(2).png', '', 10, 'In Stock', '2024-02-26 10:53:37', NULL),
(28, 3, 14, 'Natural Shampoo for Puppy and Kittens', 'No tear Puppy', 200, 250, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">This plant-based shampoo is specially formulated for puppy and kitten coats. It works gently but effectively, to cleanse the skin and fur. Vanilla and Honey are used to keep the coat moisturised. Wheat germ Oil encourages the growth of healthy fur. This shampoo can also be used for adult dogs with sensitive skin.</span><br>', 'dg3.png', 'dg3.png', '', 10, 'In Stock', '2024-02-26 10:56:23', NULL),
(29, 3, 14, 'Bendable Slicker Brush', 'HUFT', 200, 250, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">This bendable slicker brush from HUFT does not irritate the skin as it bends as you brush. It is ideal for dogs with long and curly coats, remember to work only with the fur and do not press into the skin. The rubber handle offers you a great grip. The angled pin heads pick up shed hair from the coat.</span><br>', 'dg4.png', 'dg4(4).png', '', 10, 'Out of Stock', '2024-02-26 11:01:40', NULL),
(30, 3, 14, 'Biodegradable Pet Wipes', 'HUFT', 130, 150, '<span style=\"box-sizing: inherit; color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Convenient, easy to use and completely biodegradable&nbsp;</span><span style=\"box-sizing: inherit; color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\"></span><span style=\"box-sizing: inherit; color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">the HUFT Pet Wipes are a daily must-have! Created using a plant-based formula, you can use them for a quick wipe after walks for the paws or even the whole body</span><br>', 'dg5.png', 'dg5(5).png', '', 10, 'In Stock', '2024-02-26 11:04:23', NULL),
(31, 3, 15, 'Trixie Steps Light Folding Portable Pet Steps', 'Trixie', 480, 500, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The pet can hold Lightweight foldable stairs larger pets, but pets are recommended for two to the larger size of the pet and steps.Tu not fight to cuddle on the couch with the folding stairs three steps Trixie. Ideal for any dog or cat Luche Scalar hurt. Easy to use, it requires the Montay.</span><br>', 'dt1.png', 'dt1.png', '', 10, 'In Stock', '2024-02-26 11:31:02', NULL),
(32, 3, 15, 'Petwalk Folding Ramp', 'Trixie', 760, 800, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The Trixie Pet walk Folding Ramp gives your pet an alternative to jumping down from higher surfaces. Jumping down or climbing up puts pressure on their joints which can be painful for senior pets or those suffering from joint conditions.&nbsp;</span><br>', 'dt2.png', 'dt2.png', '', 10, 'In Stock', '2024-02-26 11:33:06', NULL),
(33, 3, 16, 'Trixie Steps Light Folding Portable Pet Steps', 'Trixie', 560, 600, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Made of 100% non-toxic dog-safe materials, the Fetch &amp; Chew Dog toy from HUFT Twistee Collection will keep your pooch busy for hours. The textured shape helps in cleaning teeth, while the flexible design ensures that its gentle on the gums</span><br>', 'dtoys1.png', 'dtoys1.png', '', 10, 'In Stock', '2024-02-26 11:38:29', NULL),
(34, 3, 16, 'Extreme Chew Interactive Dog Toy', 'KONG', 320, 350, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The Kong Extreme is the toughest and most durable of Kongs rubber toys. Designed for tough chewers, this durable toy is built to satisfy your dogs instinctual needs of chewing.</span><br>', 'dtoys2.png', 'dtoys2.png', '', 10, 'Out of Stock', '2024-02-26 11:40:24', NULL),
(36, 3, 17, 'Insert Lick Slow Feeder Bowl Mat', 'HUFT', 320, 350, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">This interactive bowl mat comes with a stainless steel bowl insert with elegant HUFT branding. You can spread kibble, peanut butter or mashed banana on one side while you can store water or kibble in the bowl.</span><br>', 'db2.png', 'db2.png', '', 10, 'In Stock', '2024-02-26 11:45:20', NULL),
(37, 3, 17, 'Personalised Fresh Blooms Teepee Tent', 'HUFT', 400, 500, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The tent can fit anywhere in your home perfectly, whether you place it in your bedroom or a sweet, little corner in the lounge. Made of strong poly canvas, its sturdy, easy to assemble and has a cushioned mat at the bottom which can be removed and used separately.</span><br>', 'db3.png', 'db3.png', '', 10, 'In Stock', '2024-02-26 11:48:59', NULL),
(38, 3, 18, 'Dog Eclipse Bowl', 'Dash', 250, 300, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The double-wall stainless steel makes it tough and strong. The anti-skid silicone base makes it stay put, no matter what surface you keep it on. The slanted top is specially designed for flat faced dogs and dogs with long ears.</span><br>', 'db1.png', 'db1.png', '', 10, 'In Stock', '2024-02-26 11:50:53', NULL),
(39, 3, 18, 'Dig In Dinner Suction Bowl ', 'HUFT', 200, 350, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The single suction dog bowl makes it easy to serve your dog food. The silicone holder and mat are designed as one piece to catch spills. Both silicone and the stainless steel bowl inserts are easy to wash making clean-ups simpler.</span><br>', 'db4.png', 'db4.png', '', 10, 'In Stock', '2024-02-26 11:53:26', NULL),
(40, 3, 19, 'Sara Rich Blend Bone Broth', 'HUFT', 250, 300, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Sara Bone Broth is a superfood packed with nutrients: use it as a supplement or as a snack and give them a boost of health and hydration. Formulated by expert nutritionists, bone broth also makes their food more appetising.</span><br>', 'dh1.png', 'dh1.png', '', 10, 'In Stock', '2024-02-26 11:55:15', NULL),
(41, 3, 19, 'Doggy Vegetarian Dental Chew ', 'Happi Doggy', 150, 250, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Happi Doggy dental chews are made to prevent plaque build-up and remove tartar stains. This treat is 100% meat free and is fortified with Perilla and eucalyptus oil. Orange is a good source of vitamin C</span><br>', 'dh2.png', 'dh2.png', '', 10, 'In Stock', '2024-02-26 11:56:55', NULL),
(42, 6, 20, 'Whiskas Adult (1+ year) Tasty Mix Wet Cat Food', 'Whiskas', 320, 350, '<span style=\"color: rgba(18, 18, 18, 0.75); font-family: Rubik, sans-serif; font-size: 16px;\">Made with real fish, chicken, and nutritious veggies in a tasty gravy sauce. Contains 41 essential nutrients for health and energy. This delectable gravy food is ideal for adult cats, ensuring their happiness and satisfaction during mealtime.</span>', 'cf1.png', 'cf1.png', '', 10, 'In Stock', '2024-02-26 12:00:43', NULL),
(43, 6, 20, 'Grain Free Herring, Salmon & Atlantic Lobster Cat Dry Food', 'Loveabowl', 250, 300, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">This unique blend of high-quality proteins from herring, salmon, and Atlantic lobster offers numerous health benefits, including improved vision and heart health. Packed with Omega 3 fatty acids, this cat food also helps enhance the coats health, leaving it glossy and healthy looking.</span><br>', 'cf2.png', 'cf2.png', '', 10, 'In Stock', '2024-02-26 12:03:38', NULL),
(44, 6, 21, 'Quick Fix 2 in1 Shampoo', 'Pet Head', 300, 350, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Quick Fix 2 in1 Shampoo &amp; Conditioner - Less time rinsing means more time for cuddling! Our fabulous 2-in-1 dog shampoo and conditioner effectively and nourishes, getting your pooch clean and cuddly in half the time.</span><br>', 'cg1.png', 'cg1.png', '', 10, 'In Stock', '2024-02-26 12:05:10', NULL),
(45, 6, 21, ' Purrfect White Cat Shampoo', 'Bio-Groom', 250, 300, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The protein and coconut oil base, gives the coat some bounce keeps it from drying. The neutral pH level is easy on the skin. A shampoo that ensures a thoroughly clean coat and a lovely white finish, this offering from Bio-groom also controls mats, tangles and fly-away fur.</span><br>', 'cg2.png', 'cg2.png', '', 10, 'In Stock', '2024-02-26 12:06:37', NULL),
(46, 6, 22, 'Voyager Wire Crate With 2 Doors ', 'M-Pets', 200, 350, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The M-Pets Voyager Wire Crate with 2 Doors - Green is the perfect choice for pet owners looking for a durable and reliable kennel. This kennel is made of strong wire and has two secure doors, making it ideal for air travel and long car rides.&nbsp;</span><br>', 'ct.png', 'ct.png', '', 10, 'In Stock', '2024-02-26 12:08:49', NULL),
(47, 6, 22, 'Timon Rucksack ', 'Trixie', 250, 350, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Ideal for long walks, journeys and trekking. Can be opened at the front and top. Very comfortable to wear &amp; gentle on the back. Anatomically shaped, padded back sections and shoulder straps, breathable.</span><br>', 'ct2.png', 'ct2.png', '', 10, 'Out of Stock', '2024-02-26 12:10:32', NULL),
(48, 6, 23, 'Thirsty Catnip Cat Toy ', 'Gigwi', 250, 300, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">GiGwi Thirst Catnip Toy is 100% filled with organic American Catnip. The strong fragrance always attracts cats and makes them excited. It will be the best choice for your cats.</span><br>', 'ctoys1.png', 'ctoys1.png', '', 10, 'In Stock', '2024-02-26 12:12:12', NULL),
(49, 6, 23, 'Cutest Collection Mim and Mo', 'HUFT', 250, 300, '<span data-mce-fragment=\"1\" data-mce-style=\"font-weight: 400;\" style=\"box-sizing: inherit; color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">Make playtime fun for your cat or kitten with our soft&nbsp;</span><span data-mce-fragment=\"1\" data-mce-style=\"font-weight: 400;\" style=\"box-sizing: inherit; color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">cat toys</span><span data-mce-fragment=\"1\" data-mce-style=\"font-weight: 400;\" style=\"box-sizing: inherit; color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">&nbsp;designed in the shape of mice. Made from cotton, these are embroidered, filled with paper that make a crinkling sound to keep your cat engaged and have twisted tails for your cat to chase.</span><br>', 'ctoys2.png', 'ctoys2.png', '', 10, 'In Stock', '2024-02-26 12:14:52', NULL),
(50, 6, 24, 'Personalised Color Pop Teepee Tent', 'HUFT', 300, 350, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The tent can fit anywhere in your home perfectly, whether you place it in your bedroom or a sweet, little corner in the lounge. Made of strong poly canvas, its sturdy, easy to assemble and has a cushioned mat at the bottom which can be removed and used separately. Keeping optimal ventilation in mind, the tent has mesh windows on the sides and the curtains in the front can be kept closed or drawn open and held in place with ties.</span><br>', 'cb1.png', 'cb1.png', '', 10, 'In Stock', '2024-02-26 12:17:37', NULL),
(51, 6, 24, 'Personalised Cosy Puppy/Cat Bed', 'HUFT', 250, 300, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The HUFT Cosy Puppy/Cat Bed is designed to give your pet a spot for a good snuggle. The fabric is gentle on their paws and fur while the Eco-Friendly (filled with fibre made with recycled PET bottles) stuffing makes it comfy.</span><br>', 'cb2.png', 'cb2.png', '', 10, 'In Stock', '2024-02-26 12:19:09', NULL),
(54, 6, 25, 'Cute Hearts Melamine Bowl', 'HUFT', 200, 250, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">he BPA-free melamine body makes the bowl much more durable and safer than a plastic alternative. The stainless steel insert makes it easy to clean. Its also dishwasher safe. The anti-skid base means its sturdy and resists any slips or spills.</span><br>', 'cd1.png', 'cd1.png', '', 10, 'In Stock', '2024-02-26 12:23:28', NULL),
(55, 6, 25, 'Fishie Fun Feed Mat', 'Petstages', 200, 250, '<span style=\"color: rgb(21, 21, 21); font-family: Rubik, sans-serif; font-size: 16px;\">The Fishie Fun Feed Mat features meal-lengthening ridges and mazes, that keep cats engaged for longer at chow time. Slowing your cats eating pace can improve digestion and help reduce bloat.</span><br>', 'cd2.png', 'cd2.png', '', 10, 'Out of Stock', '2024-02-26 12:25:11', NULL),
(56, 3, 13, 'bones', 'drools', 114, 201, 'lkjklskfhs', 'cb1.png', 'cb2.png', '', 20, 'In Stock', '2024-02-27 06:53:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `phone_no`, `address`, `password`, `confirmpassword`) VALUES
(1, 'abc', 'def', 'abc@gmail.com', 2147483647, 'abc flats', '12345678', '12345678'),
(2, 'pearl', 'gandhi', 'pearl@gmail.com', 2147483647, 'abc flats', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(13, 6, 'Dog Food', '2024-02-26 09:24:22', '28-02-2024 02:28:30 PM'),
(14, 3, 'Dog Grooming', '2024-02-26 09:25:07', NULL),
(15, 3, 'Dog Travel', '2024-02-26 09:25:18', NULL),
(16, 3, 'Dog Toys', '2024-02-26 09:25:29', NULL),
(17, 3, 'Dog Bedding and Mats', '2024-02-26 09:25:56', NULL),
(18, 3, 'Dog Bowls and Dinner', '2024-02-26 09:26:19', NULL),
(19, 3, 'Dog Health and Hygiene', '2024-02-26 09:26:30', '26-02-2024 02:57:00 PM'),
(20, 6, 'Cat Food', '2024-02-26 09:27:22', NULL),
(21, 6, 'Cat Grooming', '2024-02-26 09:27:34', NULL),
(22, 6, 'Cat Travel', '2024-02-26 09:27:46', NULL),
(23, 6, 'Cat Toys', '2024-02-26 09:27:56', NULL),
(24, 6, 'Cat Bedding and Mats', '2024-02-26 09:28:09', NULL),
(25, 6, 'Cat Bowls and Dinner', '2024-02-26 09:28:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------
-- Table structure for table `billing`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `country_region` varchar(255) NOT NULL,
  `streetaddress` varchar(500) NOT NULL,
  `town_city` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `billing` ADD PRIMARY KEY (`id`);
ALTER TABLE `billing` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
