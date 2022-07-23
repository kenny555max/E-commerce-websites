CREATE TABLE `allproduct` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL 
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `allproduct`(`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`)VALUES
(1, 'Shirt', 'Black Shirt', 42.00, 'images/shirts/black/black1.jpg', '2021-03-08 13:09:16'),
(2, 'Shirt', 'Black Shirt', 42.00, 'images/shirts/black/black2.jpg', '2021-03-08 13:09:16'),
(3, 'Shirt', 'Black Shirt', 42.00, 'images/shirts/black/black3.jpg', '2021-03-08 13:09:16'),
(4, 'Shirt', 'Black Shirt', 112.00, 'images/shirts/black/black4.jpg', '2021-03-08 13:09:16'),
(5, 'Shirt', 'Green Shirt', 112.00, 'images/shirts/green/green2.jpg', '2021-03-08 13:09:16'),
(6, 'Shirt', 'Green Shirt', 112.00, 'images/shirts/green/green1.jpg', '2021-03-08 13:09:16'),
(7, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white1.jpg', '2021-03-08 13:09:16'),
(8, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white2.jpg', '2021-03-08 13:09:16'),
(9, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white3.jpg', '2021-03-08 13:09:16'),
(10, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white4.jpg', '2021-03-08 13:09:16'),
(11, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white1.jpg', '2021-03-08 13:09:16'),
(12, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white2.jpg', '2021-03-08 13:09:16'),
(13, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white3.jpg', '2021-03-08 13:09:16'),
(14, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white4.jpg', '2021-03-08 13:09:16'),
(15, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white5.jpg', '2021-03-08 13:09:16'),
(16, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white6.jpg', '2021-03-08 13:09:16'),
(17, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white7.jpg', '2021-03-08 13:09:16'),
(18, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black1.jpg', '2021-03-08 13:09:16'),
(19, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black2.jpg', '2021-03-08 13:09:16'),
(20, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black3.jpg', '2021-03-08 13:09:16'),
(21, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black4.jpg', '2021-03-08 13:09:16'),
(22, 'Gown', 'Short Black Gown', 122.00, 'images/gown/portrait/black/black1.jpg', '2021-03-08 11:09:16'),
(23, 'Gown', 'Long Black Gown', 132.00, 'images/gown/portrait/black/black2.jpg', '2021-03-09 11:09:16'),
(24, 'Gown', 'Long Black Gown', 142.00, 'images/gown/portrait/black/black3.jpg', '2021-03-01 11:09:16'),
(25, 'Gown', 'Long Black Gown', 112.00, 'images/gown/portrait/black/black4.jpg', '2021-03-02 11:09:16'),
(26, 'Gown', 'Long Black Gown', 52.00, 'images/gown/portrait/black/black5.jpg', '2021-03-03 11:09:16'),
(27, 'Gown', 'Long Black Gown', 182.00, 'images/gown/portrait/black/black6.jpg', '2021-03-04 11:09:16'),
(28, 'Gown', 'Long Blue Gown', 162.00, 'images/gown/portrait/blue/blue2.jpg', '2021-03-08 14:09:16'),
(29, 'Gown', 'Long Blue Gown', 156.00, 'images/gown/portrait/blue/blue3.jpg', '2021-03-08 13:09:16'),
(30, 'Gown', 'Long pitch Gown', 121.00, 'images/gown/portrait/pitch/pitch7.jpg', '2021-03-08 13:09:16'),
(31, 'Gown', 'Long pitch Gown', 122.00, 'images/gown/portrait/pitch/pitch8.jpg', '2021-03-08 13:09:16'),
(32, 'Gown', 'Long pitch Gown', 122.00, 'images/gown/portrait/pitch/pitch9.jpg', '2021-03-08 13:09:16'),
(33, 'Gown', 'Long pitch Gown', 132.00, 'images/gown/portrait/pitch/pitch10.jpg', '2021-03-08 13:09:16'),
(34, 'Gown', 'Long pitch Gown', 132.00, 'images/gown/portrait/pitch/pitch11.jpg', '2021-03-08 13:09:16'),
(35, 'Gown', 'Long pitch Gown', 142.00, 'images/gown/portrait/pitch/pitch16.jpg', '2021-03-08 13:09:16'),
(36, 'Gown', 'Long Red Gown', 142.00, 'images/gown/portrait/red/red2.jpg', '2021-03-08 13:09:16'),
(37, 'Gown', 'Long White Gown', 142.00, 'images/gown/portrait/white/white3.jpg', '2021-03-08 13:09:16'),
(38, 'Gown', 'Long White Gown', 142.00, 'images/gown/portrait/white/white5.jpg', '2021-03-08 13:09:16'),
(39, 'Gown', 'Long White Gown', 142.00, 'images/gown/portrait/white/white7.jpg', '2021-03-08 13:09:16'),
(40, 'Gown', 'Long Yellow Gown', 142.00, 'images/gown/portrait/yellow/yellow2.jpg', '2021-03-08 13:09:16'),
(41, 'Gown', 'Long Yellow Gown', 142.00, 'images/gown/portrait/yellow/yellow4.jpg', '2021-03-08 13:09:16'),
(42, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black1.jpg', '2021-03-08 13:09:16'),
(43, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black2.jpg', '2021-03-08 13:09:16'),
(44, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black3.jpg', '2021-03-08 13:09:16'),
(45, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black4.jpg', '2021-03-08 13:09:16'),
(46, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black5.jpg', '2021-03-08 13:09:16'),
(47, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black6.jpg', '2021-03-08 13:09:16'),
(48, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue1.jpg', '2021-03-08 13:09:16'),
(49, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue2.jpg', '2021-03-08 13:09:16'),
(50, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue3.jpg', '2021-03-08 13:09:16'),
(51, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue4.jpg', '2021-03-08 13:09:16'),
(52, 'Hood', 'Green Hood', 52.00, 'images/hood-kadigan/green/green1.jpg', '2021-03-08 13:09:16'),
(53, 'Hood', 'Green Hood', 52.00, 'images/hood-kadigan/green/green2.jpg', '2021-03-08 13:09:16'),
(54, 'Hood', 'Green Hood', 122.00, 'images/hood-kadigan/green/green3.jpg', '2021-03-08 13:09:16'),
(55, 'Hood', 'Green Hood', 122.00, 'images/hood-kadigan/green/green4.jpg', '2021-03-08 13:09:16'),
(56, 'Hood', 'Orange Hood', 122.00, 'images/hood-kadigan/orange/orange1.jpg', '2021-03-08 13:09:16'),
(57, 'Hood', 'Pitch Hood', 122.00, 'images/hood-kadigan/pitch/pitch.jpg', '2021-03-08 13:09:16'),
(58, 'Hood', 'Pitch Hood', 122.00, 'images/hood-kadigan/pitch/pitch1.jpg', '2021-03-08 13:09:16'),
(59, 'Hood', 'Pitch Hood', 112.00, 'images/hood-kadigan/pitch/pitch2.jpg', '2021-03-08 13:09:16'),
(60, 'Hood', 'Pitch Hood', 112.00, 'images/hood-kadigan/pitch/pitch3.jpg', '2021-03-08 13:09:16'),
(61, 'Hood', 'White Hood', 112.00, 'images/hood-kadigan/white/white1.jpg', '2021-03-08 13:09:16'),
(62, 'Hood', 'White Hood', 112.00, 'images/hood-kadigan/white/white2.jpg', '2021-03-08 13:09:16'),
(63, 'Hood', 'White Hood', 122.00, 'images/hood-kadigan/white/white3.jpg', '2021-03-08 13:09:16'),
(64, 'Hood', 'White Hood', 132.00, 'images/hood-kadigan/white/white4.jpg', '2021-03-08 13:09:16'),
(65, 'Hood', 'White Hood', 132.00, 'images/hood-kadigan/white/white5.jpg', '2021-03-08 13:09:16'),
(66, 'Shoe', 'Black Shoe', 132.00, 'images/shoes/portrait/black/black1.jpg', '2021-03-08 13:09:16'),
(67, 'Shoe', 'Black Shoe', 32.00, 'images/shoes/portrait/black/black2.jpg', '2021-03-08 13:09:16'),
(68, 'Shoe', 'Black Shoe', 242.00, 'images/shoes/portrait/black/black3.jpg', '2021-03-08 13:09:16'),
(69, 'Shoe', 'Green Shoe', 242.00, 'images/shoes/portrait/green/green1.jpg', '2021-03-08 13:09:16'),
(70, 'Shoe', 'Red Shoe', 112.00, 'images/shoes/portrait/red/red1.jpg', '2021-03-08 13:09:16');


CREATE TABLE `cart` (
    `cart_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `shirt` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL 
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `shirt`(`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`)VALUES
(1, 'Shirt', 'Black Shirt', 42.00, 'images/shirts/black/black1.jpg', '2021-03-08 13:09:16'),
(2, 'Shirt', 'Black Shirt', 42.00, 'images/shirts/black/black2.jpg', '2021-03-08 13:09:16'),
(3, 'Shirt', 'Black Shirt', 42.00, 'images/shirts/black/black3.jpg', '2021-03-08 13:09:16'),
(4, 'Shirt', 'Black Shirt', 112.00, 'images/shirts/black/black4.jpg', '2021-03-08 13:09:16'),
(5, 'Shirt', 'Green Shirt', 112.00, 'images/shirts/green/green2.jpg', '2021-03-08 13:09:16'),
(6, 'Shirt', 'Green Shirt', 112.00, 'images/shirts/green/green1.jpg', '2021-03-08 13:09:16'),
(7, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white1.jpg', '2021-03-08 13:09:16'),
(8, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white2.jpg', '2021-03-08 13:09:16'),
(9, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white3.jpg', '2021-03-08 13:09:16'),
(10, 'Shirt', 'White Shirt', 112.00, 'images/shirts/white/white4.jpg', '2021-03-08 13:09:16');

CREATE TABLE `t-shirt` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL 
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t-shirt`(`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`)VALUES
(11, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white1.jpg', '2021-03-08 13:09:16'),
(12, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white2.jpg', '2021-03-08 13:09:16'),
(13, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white3.jpg', '2021-03-08 13:09:16'),
(14, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white4.jpg', '2021-03-08 13:09:16'),
(15, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white5.jpg', '2021-03-08 13:09:16'),
(16, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white6.jpg', '2021-03-08 13:09:16'),
(17, 'T-Shirt', 'White T-Shirt', 112.00, 'images/T-shirts/white/white7.jpg', '2021-03-08 13:09:16'),
(18, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black1.jpg', '2021-03-08 13:09:16'),
(19, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black2.jpg', '2021-03-08 13:09:16'),
(20, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black3.jpg', '2021-03-08 13:09:16'),
(21, 'T-Shirt', 'Black T-Shirt', 112.00, 'images/T-shirts/black4.jpg', '2021-03-08 13:09:16');



CREATE TABLE `gown` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL 
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `gown`(`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`)VALUES
(22, 'Gown', 'Short Black Gown', 122.00, 'images/gown/portrait/black/black1.jpg', '2021-03-08 11:09:16'),
(23, 'Gown', 'Long Black Gown', 132.00, 'images/gown/portrait/black/black2.jpg', '2021-03-09 11:09:16'),
(24, 'Gown', 'Long Black Gown', 142.00, 'images/gown/portrait/black/black3.jpg', '2021-03-01 11:09:16'),
(25, 'Gown', 'Long Black Gown', 112.00, 'images/gown/portrait/black/black4.jpg', '2021-03-02 11:09:16'),
(26, 'Gown', 'Long Black Gown', 52.00, 'images/gown/portrait/black/black5.jpg', '2021-03-03 11:09:16'),
(27, 'Gown', 'Long Black Gown', 182.00, 'images/gown/portrait/black/black6.jpg', '2021-03-04 11:09:16'),
(28, 'Gown', 'Long Blue Gown', 162.00, 'images/gown/portrait/blue/blue2.jpg', '2021-03-08 14:09:16'),
(29, 'Gown', 'Long Blue Gown', 156.00, 'images/gown/portrait/blue/blue3.jpg', '2021-03-08 13:09:16'),
(30, 'Gown', 'Long pitch Gown', 121.00, 'images/gown/portrait/pitch/pitch7.jpg', '2021-03-08 13:09:16'),
(31, 'Gown', 'Long pitch Gown', 122.00, 'images/gown/portrait/pitch/pitch8.jpg', '2021-03-08 13:09:16'),
(32, 'Gown', 'Long pitch Gown', 122.00, 'images/gown/portrait/pitch/pitch9.jpg', '2021-03-08 13:09:16'),
(33, 'Gown', 'Long pitch Gown', 132.00, 'images/gown/portrait/pitch/pitch10.jpg', '2021-03-08 13:09:16'),
(34, 'Gown', 'Long pitch Gown', 132.00, 'images/gown/portrait/pitch/pitch11.jpg', '2021-03-08 13:09:16'),
(35, 'Gown', 'Long pitch Gown', 142.00, 'images/gown/portrait/pitch/pitch16.jpg', '2021-03-08 13:09:16'),
(36, 'Gown', 'Long Red Gown', 142.00, 'images/gown/portrait/red/red2.jpg', '2021-03-08 13:09:16'),
(37, 'Gown', 'Long White Gown', 142.00, 'images/gown/portrait/white/white3.jpg', '2021-03-08 13:09:16'),
(38, 'Gown', 'Long White Gown', 142.00, 'images/gown/portrait/white/white5.jpg', '2021-03-08 13:09:16'),
(39, 'Gown', 'Long White Gown', 142.00, 'images/gown/portrait/white/white7.jpg', '2021-03-08 13:09:16'),
(40, 'Gown', 'Long Yellow Gown', 142.00, 'images/gown/portrait/yellow/yellow2.jpg', '2021-03-08 13:09:16'),
(41, 'Gown', 'Long Yellow Gown', 142.00, 'images/gown/portrait/yellow/yellow4.jpg', '2021-03-08 13:09:16');


CREATE TABLE `hood` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL 
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hood`(`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`)VALUES
(42, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black1.jpg', '2021-03-08 13:09:16'),
(43, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black2.jpg', '2021-03-08 13:09:16'),
(44, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black3.jpg', '2021-03-08 13:09:16'),
(45, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black4.jpg', '2021-03-08 13:09:16'),
(46, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black5.jpg', '2021-03-08 13:09:16'),
(47, 'Hood', 'Black Hood', 142.00, 'images/hood-kadigan/black/black6.jpg', '2021-03-08 13:09:16'),
(48, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue1.jpg', '2021-03-08 13:09:16'),
(49, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue2.jpg', '2021-03-08 13:09:16'),
(50, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue3.jpg', '2021-03-08 13:09:16'),
(51, 'Hood', 'Blue Hood', 52.00, 'images/hood-kadigan/blue/blue4.jpg', '2021-03-08 13:09:16'),
(52, 'Hood', 'Green Hood', 52.00, 'images/hood-kadigan/green/green1.jpg', '2021-03-08 13:09:16'),
(53, 'Hood', 'Green Hood', 52.00, 'images/hood-kadigan/green/green2.jpg', '2021-03-08 13:09:16'),
(54, 'Hood', 'Green Hood', 122.00, 'images/hood-kadigan/green/green3.jpg', '2021-03-08 13:09:16'),
(55, 'Hood', 'Green Hood', 122.00, 'images/hood-kadigan/green/green4.jpg', '2021-03-08 13:09:16'),
(56, 'Hood', 'Orange Hood', 122.00, 'images/hood-kadigan/orange/orange1.jpg', '2021-03-08 13:09:16'),
(57, 'Hood', 'Pitch Hood', 122.00, 'images/hood-kadigan/pitch/pitch.jpg', '2021-03-08 13:09:16'),
(58, 'Hood', 'Pitch Hood', 122.00, 'images/hood-kadigan/pitch/pitch1.jpg', '2021-03-08 13:09:16'),
(59, 'Hood', 'Pitch Hood', 112.00, 'images/hood-kadigan/pitch/pitch2.jpg', '2021-03-08 13:09:16'),
(60, 'Hood', 'Pitch Hood', 112.00, 'images/hood-kadigan/pitch/pitch3.jpg', '2021-03-08 13:09:16'),
(61, 'Hood', 'White Hood', 112.00, 'images/hood-kadigan/white/white1.jpg', '2021-03-08 13:09:16'),
(62, 'Hood', 'White Hood', 112.00, 'images/hood-kadigan/white/white2.jpg', '2021-03-08 13:09:16'),
(63, 'Hood', 'White Hood', 122.00, 'images/hood-kadigan/white/white3.jpg', '2021-03-08 13:09:16'),
(64, 'Hood', 'White Hood', 132.00, 'images/hood-kadigan/white/white4.jpg', '2021-03-08 13:09:16'),
(65, 'Hood', 'White Hood', 132.00, 'images/hood-kadigan/white/white5.jpg', '2021-03-08 13:09:16');



CREATE TABLE `shoe` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL 
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `shoe`(`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`)VALUES
(66, 'Shoe', 'Black Shoe', 132.00, 'images/shoes/portrait/black/black1.jpg', '2021-03-08 13:09:16'),
(67, 'Shoe', 'Black Shoe', 32.00, 'images/shoes/portrait/black/black2.jpg', '2021-03-08 13:09:16'),
(68, 'Shoe', 'Black Shoe', 242.00, 'images/shoes/portrait/black/black3.jpg', '2021-03-08 13:09:16'),
(69, 'Shoe', 'Green Shoe', 242.00, 'images/shoes/portrait/green/green1.jpg', '2021-03-08 13:09:16'),
(70, 'Shoe', 'Red Shoe', 112.00, 'images/shoes/portrait/red/red1.jpg', '2021-03-08 13:09:16');


CREATE TABLE `user` (
    `user_id` int(11) NOT NULL,
    `first_name` varchar(200) NOT NULL,
    `last_name` varchar(11) NOT NULL,
    `register_data` datetime NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `wishlist` (
    `cart_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;
