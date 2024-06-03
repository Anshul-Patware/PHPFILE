CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `customer name` varchar(30) NOT NULL,
  `guardian type` varchar(50) NOT NULL,
  `guardian name` varchar(25) NOT NULL,
  `marital status` varchar(25) NOT NULL,
  `married` varchar(25) NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,

) 


INSERT INTO `total` (`id`, `customer name`, `guardian type`, `guardian name`, `marital status`, `married`, `mobile_no`, `address`, `state`, `district`, `city`) VALUES
(1, 'ramesh', 'father', 'gopal', 'married', 'yes', '9981184100', 'raj mohalla', 'm.p','indore','rau'),
(2, 'mukesh', 'father', 'sonu', 'married', 'yes', '9981184111', 'collected', 'm.p','indore','mau'),
(3, 'prakash', 'father', 'jay', 'married', 'yes', '9981184122', 'gandhi ngar', 'm.p','indore','pithampur'),
(4, 'alok', 'father', 'shan', 'married', 'yes', '9584772377', 'shyam nagar', 'm.p','indore','pithampur'),
(5, 'abhishek', 'father', 'mukul', 'married', 'yes', '9584772366', 'schme no 34', 'm.p','indore','pithampur'),
(6, 'saket', 'father', 'bhawani', 'married', 'yes', '9584772355', 'sangam nagar', 'm.p','indore','pithampur'),
(7, 'sunny', 'father', 'akshat', 'married', 'yes', '9584772373', 'gwaltoli', 'm.p','indore','pithampur');
