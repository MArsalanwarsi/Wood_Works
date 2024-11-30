-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql212.infinityfree.com
-- Generation Time: Oct 14, 2024 at 08:52 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37514017_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_img`) VALUES
(3, 'Kitchens', 'kitchen.png'),
(4, 'Wardrobe', 'wardrobe.png'),
(5, 'Modern Doors', 'door.png'),
(6, 'Dressing Tables', 'dressing-table.png'),
(7, 'Wood Flooring', 'wood.png'),
(8, 'Wood Interior', 'furniture.png'),
(9, 'Office Works', 'office-desk.png'),
(10, 'Dining Tables', 'dining-table.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_img` varchar(255) DEFAULT NULL,
  `p_category` varchar(255) DEFAULT NULL,
  `p_description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_img`, `p_category`, `p_description`) VALUES
(11, 'Luxurious Modern Kitchen Island', 'WhatsApp Image 2024-10-04 at 9.25.49 AM.jpeg', 'Kitchens', 'Elevate your kitchen space with this stunning modern kitchen island. Crafted with high-quality materials and featuring a sleek, minimalist design, this island is both functional and visually appealing. The spacious countertop provides ample room for meal prep, cooking, and dining. The built-in storage compartments offer plenty of space for organizing kitchen essentials. The island\'s elegant lighting creates a warm and inviting atmosphere, perfect for entertaining guests or enjoying a quiet meal. This luxurious kitchen island is a must-have for any discerning homeowner seeking to create a sophisticated and stylish kitchen.'),
(12, 'Sleek L-Shaped Modern Kitchen', 'WhatsApp Image 2024-10-04 at 9.25.48 AM.jpeg', 'Kitchens', 'This modern L-shaped kitchen is a masterpiece of design and functionality. The sleek, minimalist aesthetic is complemented by warm wood accents and stunning marble flooring. The spacious layout provides ample room for cooking, dining, and socializing. The abundance of storage space ensures that your kitchen remains organized and clutter-free. The high-quality appliances and fixtures add to the overall luxury and sophistication of this kitchen. Whether you\'re a professional chef or simply enjoy cooking at home, this L-shaped kitchen is the perfect space to create culinary masterpieces.'),
(13, 'Modern Industrial Kitchen with Island', 'WhatsApp Image 2024-10-04 at 9.25.46 AM (1).jpeg', 'Kitchens', 'This modern industrial kitchen is a perfect blend of style and functionality. The sleek, dark cabinetry creates a dramatic and sophisticated atmosphere, while the warm wood island adds a touch of natural warmth. The open-plan layout allows for seamless flow between the kitchen and living areas. The island features a built-in wine rack and storage compartments, providing both style and practicality. The high-quality appliances and fixtures complete the modern industrial look. This kitchen is ideal for those seeking a stylish and functional space to cook, entertain, and relax.'),
(14, 'Luxurious Modern Kitchen Island', 'WhatsApp Image 2024-10-04 at 9.25.46 AM.jpeg', 'Kitchens', 'Elevate your kitchen space with this stunning modern kitchen island. Crafted with high-quality materials and featuring a sleek, minimalist design, this island is both functional and visually appealing. The spacious countertop provides ample room for meal prep, cooking, and dining. The built-in storage compartments offer plenty of space for organizing kitchen essentials. The island\'s elegant lighting creates a warm and inviting atmosphere, perfect for entertaining guests or enjoying a quiet meal. This luxurious kitchen island is a must-have for any discerning homeowner seeking to create a sophisticated and stylish kitchen.'),
(15, 'Modern Industrial L-Shaped Kitchen', 'WhatsApp Image 2024-10-04 at 9.25.45 AM (2).jpeg', 'Kitchens', 'This modern L-shaped kitchen is a perfect blend of industrial style and contemporary design. The sleek black cabinetry and textured accents create a dramatic and sophisticated atmosphere, while the warm wood elements add a touch of natural warmth. The L-shaped layout provides ample space for cooking, dining, and socializing. The island features built-in storage compartments and a stylish pendant light, adding both functionality and visual appeal. This kitchen is ideal for those seeking a stylish and functional space to cook, entertain, and relax.'),
(16, 'Sleek Modern Kitchen with Island', 'WhatsApp Image 2024-10-04 at 9.25.45 AM.jpeg', 'Kitchens', 'This modern kitchen is a perfect blend of style and functionality. The sleek black cabinetry creates a dramatic and sophisticated atmosphere, while the white countertop adds a touch of brightness. The large island provides ample space for cooking, dining, and socializing. The recessed lighting and pendant lights create a warm and inviting atmosphere. The high-quality appliances and fixtures complete the modern look. This kitchen is ideal for those seeking a stylish and functional space to cook, entertain, and relax.'),
(17, 'Glamorous Vanity Set with LED Mirror', 'WhatsApp Image 2024-10-04 at 10.33.37 AM (1).jpeg', 'Dressing Tables', 'This elegant vanity set is the perfect addition to any modern bedroom. The sleek white finish and gold accents create a luxurious and sophisticated look. The vanity features a spacious countertop with multiple drawers for storage, keeping your makeup and accessories organized. The highlight of the set is the stunning LED mirror with an irregular shape that adds a touch of glamour. The adjustable lighting provides optimal illumination for flawless makeup application. The included vanity chair completes the set, offering a comfortable and stylish place to sit while getting ready. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(18, 'Modern White Vanity Table with 9 Drawers and LED Mirror', 'WhatsApp Image 2024-10-04 at 10.33.37 AM.jpeg', 'Dressing Tables', 'This elegant vanity set is a perfect addition to any bedroom or dressing room. The sleek white design and gold hardware create a sophisticated and modern look. The vanity features a spacious tabletop with ample space for makeup and accessories, as well as nine drawers for ample storage. The large, rectangular mirror is illuminated by bright LED lights, providing the perfect lighting for applying makeup.   The included stool adds a touch of comfort and style. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(19, 'Hollywood Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.33.36 AM (1).jpeg', 'Dressing Tables', 'This stylish vanity set is a perfect addition to any bedroom or dressing room. The sleek white design and modern lines create a chic and contemporary look. The vanity features a spacious tabletop with ample space for makeup and accessories. The highlight of the set is the large, illuminated mirror with Hollywood-style LED lights that provide the perfect lighting for applying makeup. The vanity also includes a built-in shelf unit for storing cosmetics, skincare products, and other essentials. The included stool offers a comfortable place to sit while getting ready. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(20, 'Modern White Vanity Set with Double Mirrors and Storage', 'WhatsApp Image 2024-10-04 at 10.33.36 AM.jpeg', 'Dressing Tables', 'This elegant vanity set is a perfect addition to any bedroom or dressing room. The sleek white design and gold hardware create a sophisticated and modern look. The vanity features a spacious tabletop with ample space for makeup and accessories. The highlight of the set is the large, double mirror with LED lights that provide the perfect lighting for applying makeup. The vanity also includes a built-in shelf unit for storing cosmetics, skincare products, and other essentials. The included stool offers a comfortable place to sit while getting ready. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(21, 'Modern Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.57 AM (2).jpeg', 'Dressing Tables', 'This sleek vanity set is a perfect addition to any bedroom or dressing room. The black finish creates a sophisticated and modern look, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories, as well as multiple drawers for storage. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in shelf unit offers additional storage for cosmetics, skincare products, and other essentials. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(22, 'Modern Black Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.57 AM (1).jpeg', 'Dressing Tables', 'This sleek vanity set is a perfect addition to any bedroom or dressing room. The black finish creates a sophisticated and modern look, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories, as well as multiple drawers for storage. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in shelf unit offers additional storage for cosmetics, skincare products, and other essentials. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(23, 'Hollywood Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.57 AM.jpeg', 'Dressing Tables', 'This stylish vanity set is a perfect addition to any bedroom or dressing room. The sleek black finish creates a sophisticated and modern look, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories, as well as multiple drawers for storage. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in shelf unit offers additional storage for cosmetics, skincare products, and other essentials. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(24, 'Glamorous Vanity Set with LED Mirror and Gold Accents', 'WhatsApp Image 2024-10-04 at 10.32.56 AM.jpeg', 'Dressing Tables', 'This elegant vanity set is a perfect addition to any modern bedroom. The sleek black finish and gold accents create a luxurious and sophisticated look. The vanity features a spacious countertop with ample space for makeup and accessories. The LED mirror with a stylish frame provides the perfect lighting for flawless makeup application. The included vanity chair with a gold metal frame adds a touch of glamour and comfort. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(25, 'Modern Black Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.54 AM.jpeg', 'Dressing Tables', 'This sleek vanity set is a perfect addition to any bedroom or dressing room. The black finish creates a sophisticated and modern look, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories, as well as multiple drawers for storage. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in shelf unit offers additional storage for cosmetics, skincare products, and other essentials. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(26, 'Hollywood Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.53 AM.jpeg', 'Dressing Tables', 'This stylish vanity set is a perfect addition to any bedroom or dressing room. The white finish creates a bright and airy atmosphere, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories, as well as multiple drawers for storage. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in shelving units on either side offer additional storage for cosmetics, skincare products, and other essentials. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(27, 'Professional Makeup Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.52 AM (1).jpeg', 'Dressing Tables', 'This large and luxurious vanity set is perfect for makeup artists, beauty enthusiasts, or anyone who needs ample space for their beauty routine. The set features a spacious vanity table with multiple drawers for storage, a large illuminated mirror with Hollywood-style LED lights, and two additional side units with shelves for organizing products. The vanity is designed to provide ample space for all your makeup and beauty tools, making it a perfect workspace for professionals and amateurs alike. This vanity set is a must-have for anyone who wants to create a stylish and functional beauty station.'),
(28, 'Luxurious White Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.52 AM.jpeg', 'Dressing Tables', 'This elegant vanity set is a perfect addition to any bedroom or dressing room. The sleek white finish and crystal accents create a luxurious and sophisticated look. The vanity features a spacious countertop with ample space for makeup and accessories. The large, illuminated mirror provides the perfect lighting for flawless makeup application. The vanity also includes multiple drawers for storage, keeping your beauty essentials organized. The included vanity stool adds a touch of comfort and style. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(29, 'Hollywood Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.51 AM.jpeg', 'Dressing Tables', 'This stylish vanity set is a perfect addition to any bedroom or dressing room. The white finish creates a bright and airy atmosphere, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in compartments and drawers offer plenty of storage for cosmetics, skincare products, and other essentials. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(30, 'Modern Vanity Set with LED Lights, Storage, and Charging Station', 'WhatsApp Image 2024-10-04 at 10.32.50 AM (2).jpeg', 'Dressing Tables', 'This sleek vanity set is a perfect addition to any bedroom or dressing room. The white finish creates a bright and airy atmosphere, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories, as well as multiple drawers for storage. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in shelving units offer additional storage for cosmetics, skincare products, and other essentials. The built-in charging station is a convenient feature for keeping your devices powered up. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(31, 'Modern Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.50 AM (1).jpeg', 'Dressing Tables', 'This stylish vanity set is a perfect addition to any bedroom or dressing room. The white finish creates a bright and airy atmosphere, while the LED lights add a touch of glamour. The vanity features a spacious tabletop with ample space for makeup and accessories. The included stool provides a comfortable place to sit while getting ready. The vanity\'s built-in compartments and drawers offer plenty of storage for cosmetics, skincare products, and other essentials. This vanity set is a must-have for anyone who wants to create a stylish and functional dressing area.'),
(32, 'Versatile Dressing Table with Storage', 'WhatsApp Image 2024-10-04 at 10.32.50 AM.jpeg', 'Dressing Tables', 'This multifunctional dressing table is perfect for any bedroom or home office. The sleek white design and natural wood accents create a stylish and modern look. The spacious tabletop provides ample room for a laptop, makeup, or other essentials. The built-in drawers offer plenty of storage space for organizing your belongings. The included stool provides a comfortable place to sit while working or getting ready. This dressing table is a versatile piece of furniture that can be used in various ways to suit your needs.'),
(33, 'Corner Vanity Set with LED Lights and Storage', 'WhatsApp Image 2024-10-04 at 10.32.49 AM.jpeg', 'Dressing Tables', 'This stylish corner vanity set is a perfect space-saving solution for any bedroom or dressing room. The sleek white design and LED lights create a modern and glamorous look. The vanity features a spacious tabletop with ample space for makeup and accessories. The built-in shelving units and drawers offer plenty of storage for organizing your beauty essentials. The included stool provides a comfortable place to sit while getting ready. This corner vanity set is a great way to maximize your space and create a stylish and functional dressing area.'),
(34, 'Modern Double-Door Entryway', 'WhatsApp Image 2024-10-04 at 10.18.29 AM.jpeg', 'Modern Doors', 'Make a statement with this stunning modern double-door entryway. The rich wood tones and geometric design create a sophisticated and inviting entrance. The sleek door handles and recessed lighting add a touch of luxury. The accompanying planter boxes and wall sconces complete the elegant look. This entryway is perfect for any homeowner looking to create a lasting impression.'),
(35, 'Contemporary Double-Door Entryway', 'WhatsApp Image 2024-10-04 at 10.18.28 AM (1).jpeg', 'Modern Doors', 'This modern double-door entryway features a sleek design with geometric accents and large glass sidelights. The rich wood tones and clean lines create a sophisticated and inviting entrance. The recessed lighting and modern door hardware add a touch of elegance. This entryway is perfect for any homeowner looking to create a stylish and functional entrance to their home.'),
(36, 'Modern Minimalist Entryway', 'WhatsApp Image 2024-10-04 at 10.18.28 AM.jpeg', 'Modern Doors', 'This sleek and modern entryway features a minimalist design with clean lines and a neutral color palette. The black door with vertical wooden slats adds a touch of texture and warmth. The recessed lighting and wall sconces create a welcoming atmosphere. The potted plants and greenery add a natural element to the space. This entryway is perfect for homeowners who appreciate a modern and minimalist aesthetic.'),
(37, 'Modern Geometric Double-Door Entryway', 'WhatsApp Image 2024-10-04 at 10.18.27 AM (1).jpeg', 'Modern Doors', 'This stylish double-door entryway features a modern geometric design with contrasting wood and black accents. The large glass sidelights allow for natural light to enter the home. The sleek door handle and recessed lighting add a touch of elegance. This entryway is perfect for homeowners who appreciate a contemporary and stylish look.'),
(38, 'Contemporary Brushed Gold Door Handles', 'WhatsApp Image 2024-10-04 at 10.18.27 AM.jpeg', 'Modern Doors', 'These sleek and modern brushed gold door handles are the perfect finishing touch for any contemporary home. The clean lines and minimalist design add a touch of elegance to any door. The high-quality brushed gold finish creates a warm and inviting atmosphere. These door handles are available in various sizes and styles to match your door design.'),
(39, 'Modern Black Single-Door Entryway', 'WhatsApp Image 2024-10-04 at 10.18.26 AM (1).jpeg', 'Modern Doors', 'This sleek and modern single-door entryway features a black finish with horizontal slats for a contemporary look. The brushed gold door handle adds a touch of elegance. The surrounding wood cladding and potted plants create a warm and inviting atmosphere. This entryway is perfect for homeowners who appreciate a minimalist and modern design.'),
(40, 'Modern Minimalist Entryway', 'WhatsApp Image 2024-10-04 at 10.18.26 AM.jpeg', 'Modern Doors', 'This sleek and modern entryway features a black door with a vertical wooden accent. The minimalist design and clean lines create a sophisticated and inviting entrance. The recessed lighting and potted plants add a touch of warmth and greenery. This entryway is perfect for homeowners who appreciate a modern and minimalist aesthetic.'),
(41, 'Modern Black Single-Door Entryway with Stone Accents', 'WhatsApp Image 2024-10-04 at 10.18.25 AM (1).jpeg', 'Modern Doors', 'This stylish entryway features a modern black door with a sleek vertical handle. The surrounding stone cladding adds a natural and textured element to the design. The recessed lighting and overhang create a welcoming atmosphere. This entryway is perfect for homeowners who appreciate a modern and minimalist aesthetic with a touch of warmth.'),
(42, 'Modern Double-Door Entryway with Stone Accents', 'WhatsApp Image 2024-10-04 at 10.18.25 AM.jpeg', 'Modern Doors', 'This stylish double-door entryway features a modern design with contrasting black frames and a warm wood door. The surrounding stone cladding adds a natural and textured element to the design. The recessed lighting and overhang create a welcoming atmosphere. This entryway is perfect for homeowners who appreciate a modern and minimalist aesthetic with a touch of warmth.'),
(43, 'Modern Wood and Stone Entryway', 'WhatsApp Image 2024-10-04 at 10.18.24 AM (1).jpeg', 'Modern Doors', 'This stylish entryway features a modern blend of wood and stone elements. The warm wood door and cladding create a natural and inviting atmosphere, while the stone accents add a touch of sophistication. The recessed lighting and hanging lanterns provide ample illumination. The front porch with wooden steps and planter boxes creates a welcoming entrance. This entryway is perfect for homeowners who appreciate a modern and rustic aesthetic.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
