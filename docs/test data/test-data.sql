-- development test data

-- insert of carts
-- carts are used to store devices
INSERT INTO `cart` (`cartID`, `name`) 
    VALUES  ('1', 'Notebooks'), 
            ('2', 'Tablets');

-- insert of borrower
-- the person which lends an device or cart
INSERT INTO `borrower` (`borrowerID`, `name`, `surname`, `class`, `teacher`) 
    VALUES  ('1', 'Nicole', 'Foerster', 'BeVo', 'Juergensen'), 
            ('2', 'Philipp', 'Frei', 'BFS', 'Aschmoneit'), 
            ('3', 'Jürgen', 'Herrmann', 'FLO', 'Reuters'), 
            ('4', 'Christin', 'Sankt', 'FLO', 'Reuters'), 
            ('5', 'Dieter', 'Kaufmann', 'MAL', 'Reuters');

-- insert of device
-- includes the devices that can be borrowed
INSERT INTO `device` (`deviceID`, `cartID`, `name`, `type`, `brand`, `qrCode`) 
    VALUES  ('10086', '1', 'MacBook Pro', 'Notebook', 'Apple', '0'), 
            ('10087', '1', 'Aspire 5', 'Notebook', 'Acer', '0'), 
            ('10094', '1', '7000 Serie', 'Notebook', 'Dell', '0'), 
            ('10102', '1', '5000 Serie', 'Notebook', 'Dell', '0'), 
            ('10105', '1', 'ThinkPad L590', 'Notebook', 'Lenovo', '0'), 
            ('10103', '1', 'MacBook Air', 'Notebook', 'Apple', '0'), 
            ('10107', '1', 'Aspire 1', 'Notebook', 'Acer', '0'), 
            ('10108', '1', 'Aspire 3', 'Notebook', 'Acer', '0'), 
            ('10111', '1', 'Aspire 7', 'Notebook', 'Acer', '0'), 
            ('10112', '1', 'ThinkPad X1 Extreme', 'Notebook', 'Lenovo	', '0'), 
            ('10618', '2', 'Galaxy Tab S6 Wi-Fi', 'Tablet', 'Samsung', '0'), 
            ('10630', '2', 'Galaxy Tab S6 LTE', 'Tablet', 'Samsung', '0'), 
            ('10631', '2', 'iPad', 'Tablet', 'Apple', '0'), 
            ('10632', '2', 'MediaPad T5', 'Tablet', 'Huawei', '0'), 
            ('10633', '2', 'MediaPad M5', 'Tablet', 'Huawei', '0');

-- insert of loan
-- loan specifies who borrows which device or cart in which period of time
INSERT INTO `loan` (`loanID`, `borrowerID`, `startTime`, `duration`, `returnTime`, `comment`) 
    VALUES  ('1', '1', '2020-01-13 09:25:00', '1', '2020-01-14 07:50:00', ''), 
            ('2', '4', '2020-02-17 08:15:00', '3', '2020-02-20 10:00:00', ''), 
            ('3', '5', '2020-02-14 09:00:00', '4', '2020-02-18 13:20:00', ''), 
            ('4', '2', '2020-02-18 08:00:00', '2', '2020-02-20 08:00:00', ''), 
            ('5', '1', '2020-02-17 11:00:00', '2', '2020-02-21 13:00:00', '');

-- insert of loan_device
-- loan_device is a connecting table between the table loan and device
INSERT INTO `loan_device` (`loan_deviceID`, `loanID`, `deviceID`) 
    VALUES  ('1', '2', '10086'), 
            ('2', '3', '10087'), 
            ('3', '4', '10094'), 
            ('4', '5', '10631');