INSERT INTO `user` 
	(`user_name`, `password`, `email`, `phone`, `profile_image`, `first_name`, `last_name`) 
	VALUES ('lord', '123456', 'hai@mail.com', '0123456789', 'dsadsa', 'hai', 'do'),
		   ('binh', '123456', 'binh@mail.com', '0234567891', 'qwe', 'binh', 'phi'),
		   ('minh', '123456', 'minh@mail.com', '0345678912', 'asd', 'minh', 'nguyen'),
		   ('tho', '123456', 'tho@mail.com', '0456789123', 'zxc', 'tho', 'do'),
		   ('toan', '123456', 'toan@mail.com', '0567891234', 'ggg', 'toan', 'nguyen');

INSERT INTO `category`
	(`category_name`)
	VALUES ('dien thoai'),
		   ('may tinh');

INSERT INTO `product`
	(`product_name`, `description`, `price`, `category_id`, `step_price`, `start_date`, `end_date`, `rule`, `image`, `owner_id`, `max_price`, `status`)
	VALUES ('oppo F1s', 'selfie dep tu nhien', '1000', '1', '100', '2016-11-19','2016-11-22', 'asdas', 'dsdsad', '1', '4000', 'selling'),
		   ('Mac XYZ', 'Mac everywhere', '20000', '2', '200', '2016-11-19', '2016-11-22', 'asdvv', 'gfgf', '2', '5000', 'selling');

INSERT INTO `message`
	(`user_id`, `created`, `description`)
	VALUES ('1', '2016-11-19', 'dep trai vl');

INSERT INTO `auction`
	(`user_id`, `product_id`, `created`, `auction_price`)
	VALUES ('1', '1', '2016-11-19', '2000'),
		   ('3', '2', '2016-11-19', '10000');

INSERT INTO `cart` 
	(`user_id`, `product_id`, `buy_date`)
	VALUES ('1', '1', '2016-11-22');