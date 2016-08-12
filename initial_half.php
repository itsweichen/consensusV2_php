<!DOCTYPE html>


<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evaluation</title>

</head>

<body>

<?php
require_once "dbaccess.php";


echo $_POST['username'];
echo $_POST['email'];
echo $_POST['password'];
echo $_POST['participate'];

$user_name = "CHIA-YU";
$user_email = "chiayu@ucsd.edu";
$password = "1234";
$participant_num = 5;




$user_name2 = "Mary";
$user_email2 = "Mary@ucsd.edu";

$user_name3 = "Samantha";
$user_email3 = "Samantha@ucsd.edu";

$user_name4 = "Kevin";
$user_email4 = "Rose@ucsd.edu";

$user_name5 = "John";
$user_email5 = "John@ucsd.edu";

$user_name6 = "Peter";
$user_email6 = "Peter@ucsd.edu";

$user_name7 = "Kim";
$user_email7 = "Kim@ucsd.edu";
$user_name8 = "Amy";
$user_email8 = "Amy@ucsd.edu";
$user_name9 = "Matt";
$user_email9 = "Matt@ucsd.edu";
$user_name10 = "Slerra";
$user_email10 = "Slerra@ucsd.edu";
$user_name11 = "Haley";
$user_email11 = "Haley@ucsd.edu";
$user_name12 = "Wesley";
$user_email12 = "Wesley@ucsd.edu";
$user_name13 = "Tom";
$user_email13 = "Tom@ucsd.edu";





mysql_query("insert into reason values('','1','No Data') ");
mysql_query("insert into reason values('','1','No Data') ");





mysql_query("insert into user values ('','".$user_name."','".$user_email."','".md5($password)."') ");

$result = mysql_query("select * from user where email = '".$user_email."' ");
$row = mysql_fetch_array($result);
$user_id = $row['id'];



mysql_query("insert into decision values ('', 'Test1', 'No', '1', '4','3','1','0')");
mysql_query("insert into participate values('','1','1','1')");




mysql_query("insert into score values('','1','1','1','1','-1','A')");
mysql_query("insert into score values('','1','1','2','1','-1','A')");
mysql_query("insert into score values('','1','1','3','1','-1','A')");
mysql_query("insert into score values('','1','1','4','1','-1','A')");
mysql_query("insert into score values('','1','1','1','2','-1','A')");
mysql_query("insert into score values('','1','1','2','2','-1','A')");
mysql_query("insert into score values('','1','1','3','2','-1','A')");
mysql_query("insert into score values('','1','1','4','2','-1','A')");
mysql_query("insert into score values('','1','1','1','3','-1','A')");
mysql_query("insert into score values('','1','1','2','3','-1','A')");
mysql_query("insert into score values('','1','1','3','3','-1','A')");
mysql_query("insert into score values('','1','1','4','3','-1','A')");


mysql_query("insert into score values('','1','1','0','1','-1','A')");
mysql_query("insert into score values('','1','1','0','2','-1','A')");
mysql_query("insert into score values('','1','1','0','3','-1','A')");


mysql_query("insert into score_backup values('','1','1','1','1','-1')");
mysql_query("insert into score_backup values('','1','1','2','1','-1')");
mysql_query("insert into score_backup values('','1','1','3','1','-1')");
mysql_query("insert into score_backup values('','1','1','4','1','-1')");
mysql_query("insert into score_backup values('','1','1','1','2','-1')");
mysql_query("insert into score_backup values('','1','1','2','2','-1')");
mysql_query("insert into score_backup values('','1','1','3','2','-1')");
mysql_query("insert into score_backup values('','1','1','4','2','-1')");
mysql_query("insert into score_backup values('','1','1','1','3','-1')");
mysql_query("insert into score_backup values('','1','1','2','3','-1')");
mysql_query("insert into score_backup values('','1','1','3','3','-1')");
mysql_query("insert into score_backup values('','1','1','4','3','-1')");


mysql_query("insert into score_backup values('','1','1','0','1','-1')");
mysql_query("insert into score_backup values('','1','1','0','2','-1')");
mysql_query("insert into score_backup values('','1','1','0','3','-1')");






mysql_query("insert into user values ('','".$user_name2."','".$user_email2."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','8.97','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','9.00','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','4.12','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','6.15','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','7.02','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','7.95','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','5.70','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','7.87','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','8.00','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','6.95','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','8.93','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','8.62','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','7.06','Starting with Sam, while the SAT, and GPA are good, the biggest drawback to the student is that the only recommendation is for acting, the suspension shows lack of discipline when oversight is relaxed. Adam did win first place in the annual statewide science fair, and does have albeit very vague - does have a letter of recommendation. Adam is in many ways similar to Sam. Jim has a very strong math focus, took classes for the local community college during summer, won math competition, and has two letters of recommendation one of which is from a math professor.')");
mysql_query("insert into score values('','1','".$user_count."','0','2','7.13','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','8.12','A')");







mysql_query("insert into user values ('','".$user_name3."','".$user_email3."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','9.35','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','3.48','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','3.02','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','8.95','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','6.70','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','3.35','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','3.00','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','7.10','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','7.93','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','3.60','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','9.43','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','8.90','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','6.20','Sam did very well with everything provided to him in life. He has probably not had to give as much effort. Jim did will with much less and has clearly put in lots of personal effort, also his references are encouraging and I would tend to believe them, Adam finishes third in sat and is generally the most mediocre of the thre')");
mysql_query("insert into score values('','1','".$user_count."','0','2','5.04','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','7.46','A')");





mysql_query("insert into user values ('','".$user_name4."','".$user_email4."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','9.00','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','9.38','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','5.38','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','9.20','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','5.20','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','8.43','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','6.65','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','8.07','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','7.77','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','4.50','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','8.43','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','6.28','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','8.24','I think that overall, Sam had the best academics, activities and overall commitment to engineering. Adam came in second because of his strong commitment to engineering (working over the summer at an engineering firm and being a leading member of the engineering club). Jim came in last because he has not shown a strong commitment to engineering or academics (handing in his assignments late). 
')");
mysql_query("insert into score values('','1','".$user_count."','0','2','7.09','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','6.75','A')");



mysql_query("insert into user values ('','".$user_name5."','".$user_email5."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','8.95','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','8.97','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','6.47','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','8.43','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','4.62','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','3.98','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','2.20','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','3.52','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','8.47','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','6.93','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','7.65','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','7.97','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','8.21',' Adam is the lowest because his scores aren’t great and he seems to want to get by based on his family connections. Sam and Jim are both pretty good. Good scores and classes, Jim has less activity but Sam’s recommendation letter isn’t as good. Both decent fits though. I don’t see much difference overall between Sam and Jim but Adam is not too goo')");
mysql_query("insert into score values('','1','".$user_count."','0','2','3.58','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','7.76','A')");




mysql_query("insert into user values ('','".$user_name6."','".$user_email6."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','9.93','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','8.35','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','7.46','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','9.08','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','8.45','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','8.95','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','8.82','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','8.20','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','8.78','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','9.43','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','9.62','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','8.93','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','8.70','When I was judging the candidates I put into perspective the academic status first as well as extra curricular activities that shows the individual's private life and interests. Overall I felt that those two categories were the most important in assessing the potential for the job. Candidate A and C were very strong overall in categories I felt like that would translate to success in the position.')");
mysql_query("insert into score values('','1','".$user_count."','0','2','8.61','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','9.19','A')");







mysql_query("insert into user values ('','".$user_name7."','".$user_email7."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','9.50','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','9.73','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','9.85','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','9.22','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','8.52','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','9.62','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','8.38','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','9.03','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','9.15','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','9.30','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','8.35','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','9.40','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','9.57','Sam performed the best in school and on SATs.  Jim performed well and took extra classes to boost his academic score.  THey all did extracurricular activities Sam did a little more than the others though Adams were more relevant for the engineering program.  Sam had the best recommendations.  They would all be a very good fit. Adam has the most experience followed by Sam and Jim.')");
mysql_query("insert into score values('','1','".$user_count."','0','2','8.89','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','9.05','A')");







mysql_query("insert into user values ('','".$user_name8."','".$user_email8."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','9.47','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','8.95','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','8.03','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','9.35','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','7.20','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','8.75','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','8.22','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','8.58','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','8.53','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','9.07','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','8.85','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','9.10','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','8.95',' I gave considerable weight to academic achievement, particularly math and science related academic achievements.  While  Sam’s recommendation was positive, his talent for acting doesn’t seem relevant.  The fact that Adam’s recommendation later was short is overshadowed by the fact that it came from an employer, demonstrating a responsible use of his time.  I didn’t give much weight to membership in the engineering club since there are no detail')");
mysql_query("insert into score values('','1','".$user_count."','0','2','8.19','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','8.89','A')");








mysql_query("insert into user values ('','".$user_name9."','".$user_email9."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','9.65','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','9.30','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','7.15','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','9.25','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','8.07','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','8.45','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','6.50','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','7.20','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','8.75','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','2.64','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','7.75','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','6.05','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','8.84','Adam has the lowest gpa and SAT scores and his recommendation letter is short which might signal that the person writing it for him did not have much good to say about him. Sam has a slight advantage due to higher scores and more activity involvement. However, he comes from a private school  and might have gotten more support than Jim. Jim did very well in terms of gpa and scores. His lack of activity involvement is a red flag but maybe there may be justifiable reasons. Sam is the most suitable but Jim should be given a chance. ')");
mysql_query("insert into score values('','1','".$user_count."','0','2','7.55','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','6.30','A')");










mysql_query("insert into user values ('','".$user_name10."','".$user_email10."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','7.35','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','5.38','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','4.67','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','6.72','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','2.94','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','3.66','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','4.67','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','3.08','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','6.35','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','8.51','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','8.65','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','8.57','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','6.03','According to the information provided, it looked like Sam has a drinking behavior problem and I didn’t think his drama teacher recommendation is that relevant. I don’t think there was enough information about Adam to really make a good call, I feel like I don’t have a good sense about him at all. Adampps profile looked a little sparse to me. and Jim had the best in terms of recommendations and his lack of drinking and suspension. While it’s true that Sam has high SAT scores, I don’t get the sense that he is a very responsible or mature person.')");
mysql_query("insert into score values('','1','".$user_count."','0','2','3.59','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','8.02','A')");











mysql_query("insert into user values ('','".$user_name11."','".$user_email11."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','8.89','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','8.75','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','3.00','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','7.50','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','6.11','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','8.10','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','5.96','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','6.01','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','7.83','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','6.78','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','7.47','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','8.49','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','7.04','I think that overall, Sam had the best academics, activities and overall commitment to engineering. Adam came in second because of his strong commitment to engineering (working over the summer at an engineering firm and being a leading member of the engineering club). Jim came in last because he has not shown a strong commitment to engineering or academics (handing in his assignments late).')");
mysql_query("insert into score values('','1','".$user_count."','0','2','6.54','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','7.64','A')");











mysql_query("insert into user values ('','".$user_name12."','".$user_email12."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','5.70','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','9.07','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','7.50','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','8.13','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','4.17','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','7.42','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','4.30','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','5.70','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','6.90','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','4.15','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','8.40','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','8.10','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','7.60','Adam has the lowest gpa and SAT scores and his recommendation letter is short which might signal that the person writing it for him did not have much good to say about him. Sam has a slight advantage due to higher scores and more activity involvement. However, he comes from a private school  and might have gotten more support than Jim. Jim did very well in terms of gpa and scores. His lack of activity involvement is a red flag but maybe there may be justifiable reasons. Sam is the most suitable but Jim should be given a chance.  
')");
mysql_query("insert into score values('','1','".$user_count."','0','2','5.40','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','6.89','A')");











mysql_query("insert into user values ('','".$user_name13."','".$user_email13."','".md5($password)."') ");


$sql_count = "select count(*) from user ";
$result_count = mysql_query($sql_count);
$row_count = mysql_fetch_array( $result_count );
$user_count = $row_count[0];




mysql_query("insert into participate values('','1','".$user_count."','".$user_count."')");

mysql_query("update decision set user_num = user_num + 1 where id = '1'");

mysql_query("insert into score values('','1','".$user_count."','1','1','8.49','ABC')");
mysql_query("insert into score values('','1','".$user_count."','2','1','6.00','A')");
mysql_query("insert into score values('','1','".$user_count."','3','1','5.03','A')");
mysql_query("insert into score values('','1','".$user_count."','4','1','7.51','A')");
mysql_query("insert into score values('','1','".$user_count."','1','2','6.65','A')");
mysql_query("insert into score values('','1','".$user_count."','2','2','8.02','A')");
mysql_query("insert into score values('','1','".$user_count."','3','2','3.52','A')");
mysql_query("insert into score values('','1','".$user_count."','4','2','6.00','A')");
mysql_query("insert into score values('','1','".$user_count."','1','3','7.50','A')");
mysql_query("insert into score values('','1','".$user_count."','2','3','7.00','A')");
mysql_query("insert into score values('','1','".$user_count."','3','3','7.95','A')");
mysql_query("insert into score values('','1','".$user_count."','4','3','8.01','A')");


mysql_query("insert into score values('','1','".$user_count."','0','1','6.76','Adam has not taken any AP or college level courses. His recommendation letter is vague. His scores and GPA were lower than the other two candidates. He did win a statewide competition.Sam was suspended from school because of drinking and is undecided on major. His achievement was not an individual achievement but a team achievement. Jim has better test scores than Adam and is taking AP level classes. Previous students from his school had academic difficulties at UCSD, however Jim takes classes at his local community college during the summer so he would be better prepared for college level coursework. ')");
mysql_query("insert into score values('','1','".$user_count."','0','2','6.05','A')");
mysql_query("insert into score values('','1','".$user_count."','0','3','7.62','A')");







?>


<!-- jQuery -->
<meta http-equiv=refresh content="0.00005; url=control_panel.php">

</body>

</html>
