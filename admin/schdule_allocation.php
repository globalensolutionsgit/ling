<?php
require_once 'dbcon.php';
$branch_id = $_POST['branch'];
$class_id = $_POST['classs'];
$subject_id = $_POST['subject'];
$region = $_POST['region'];
$teacher_id = $_POST['user'];
$start_date = $_POST['startdate'];
//commented by kalai
// $end_date = $_POST['enddate'];
//newly added by kalai
$start_time = $_POST['starttime'];
$end_time = $_POST['endtime'];
if(!empty($_POST['student'])) {
    foreach($_POST['student'] as $stu_id) {
        // mysql_query("insert into student_teacher_allocation (student_id,teacher_id,region,branch_id,class_id,subject_id,start_date,end_date) values ('$stu_id','$teacher_id','$region','$branch_id','$class_id','$subject_id','$start_date','$end_date') ");
    	// changed by kalai
    	print_r($start_date);
    	mysql_query("insert into student_teacher_allocation (student_id,teacher_id,branch_id,class_id,subject_id,start_date,start_time,end_time) values ('$stu_id','$teacher_id','$branch_id','$class_id','$subject_id','$start_date','$start_time','$end_time') ");
    }
}
header("Location:class_schedules.php");
 ?>