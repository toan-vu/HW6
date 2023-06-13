<?php
$dbh = mysqli_connect('localhost', 'root', ''); 
// Kết nối với MySQL Server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_error()); 
// Thông báo lỗi nếu kết nối thất bại 

if (!mysqli_select_db($dbh, 'deha'))     
die("Unable to select database: " . mysql_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại

// Create table
$sql_stmt  = "CREATE TABLE IF NOT EXISTS `sinhvien` (
    `MaSV` varchar(10) NOT NULL,
  `Ho_ten` varchar(50) NOT NULL,
  `Ngay_sinh` date NOT NULL,
  `Lop_hoc` varchar(20) NOT NULL,
  `Diem_TB` float NOT NULL,
  PRIMARY KEY (`MaSV`)
)";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Table has been add in your data";
};

// Insert data
$sql_stmt = "INSERT INTO `sinhvien`(`MaSV`, `Ho_ten`, `Ngay_sinh`, `Lop_hoc`, `Diem_TB`)"; 
$sql_stmt .= "VALUES('SV001','Nguyen Van A', '2002-01-10', 'K56SD1', '9.5'),
                    ('SV002','Nguyen Van B', '2002-01-11', 'K56SD2', '7.5'),
                    ('SV003','Nguyen Van C', '2002-01-12', 'K56SD3', '6.5'),
                    ('SV004','Nguyen Van D', '2002-01-13', 'K56SD1', '5.5'),
                    ('SV005','Nguyen Van E', '2002-01-14', 'K56SD2', '6.0')"; 

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been add in your data";
};

//Update data
$sql_stmt = "UPDATE `sinhvien` SET `Diem_TB` = '8.5'";
$sql_stmt .= "WHERE `MaSV` = 'SV001'";

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been update in your data";
};

//Delete data
$sql_stmt = "DELETE FROM `sinhvien` WHERE `MaSV` = 'SV003'"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Student's infor has been delete in your data";
};


?>