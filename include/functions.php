<?php

function is_admin($username){
	$query = mysqli_query(connDB(),"SELECT status FROM members WHERE username='$username'");
	$result = mysqli_fetch_array($query);
	if ($result['status'] == "admin") {
		return true;
	}else{
		return false;
	}
}