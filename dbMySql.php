<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'justdeal');

class DB_con
{	
	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_connect_error());
	}
	
	public function InsertIntoUser($name,$address,$contactnumber,$username,$email,$password)
	{	
		$sql = "INSERT into USER(name,address,contact_number,user_name,email,password) VALUES('$name','$address','$contactnumber','$username','$email','$password')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}

	public function IsExistUser($email,$username)
	{	
		$sql = "SELECT * FROM USER WHERE email = '$email' OR user_name = '$username'" ;
		$res = mysqli_query($this->conn, $sql);
		if(mysqli_num_rows($res) >0){
		   return true;
		}else{
		   return false;
		}
	}	

	public function insertPostWithImage($username,$adtitle,$adtype,$category,$maxpeople,$bathroom,$bedroom,$checkin,$checkout,$extrainfo,$lastfilename1,$shower,$wifi,$tv,$kitchen,$ac,$access)
	{  
	    $sql="INSERT INTO AD (user_name,ad_title,ad_type,category,max_people,bathroom,bedroom,checkin,checkout,extra_info,image_1,shower,wifi,tv,kitchen,ac,access) VALUES('$username','$adtitle','$adtype','$category','$maxpeople','$bathroom','$bedroom','$checkin','$checkout','$extrainfo','$lastfilename1','$shower','$wifi','$tv','$kitchen','$ac','$access')"; 	    
	    // Write Mysql Query Here to insert this $QueryInsertFile   .            
		if(mysqli_query($this->conn, $sql)){
		   return true;
		}else{
		   return false;
		}			           			
	}

	public function selectUser($username,$password)
	{	
		$sql = "SELECT * FROM USER WHERE user_name = '$username' AND password = '$password'";
		$res = mysqli_query($this->conn, $sql);
		if(mysqli_num_rows($res) >0){
		   return true;
		}else{
		   return false;
		}		
	}

	public function showUser($username)
	{	
		$sql = "SELECT * FROM USER WHERE user_name = '$username'";
		$res = mysqli_query($this->conn, $sql);
		return $res;	
	}

	public function DeleteUser($username)
	{
		$sql = "DELETE FROM USER WHERE user_name = '$username'";
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}		
	public function selectPostedAd($category)
	{	
		$sql = "SELECT * FROM AD WHERE category = '$category'";
		$res = mysqli_query($this->conn, $sql);
		return $res;	
	}	

	public function selectPostedAdWithAdType($category,$adtype)
	{	
		$sql = "SELECT * FROM AD WHERE category = '$category' AND ad_type = '$adtype'";
		$res = mysqli_query($this->conn, $sql);
		return $res;	
	}	
	
	public function selectMyAdvertisement($username)
	{	
		$sql = "SELECT * FROM AD WHERE user_name = '$username'";
		$res = mysqli_query($this->conn, $sql);
		return $res;	
	}		

	public function selectPostedAdWithId($adid)
	{	
		$sql = "SELECT * FROM AD WHERE ad_id = '$adid'";
		$res = mysqli_query($this->conn, $sql);
		return $res;	
	}	

	public function DeleteAdvertiseUsingId($adid)
	{
		$sql = "DELETE FROM AD WHERE ad_id = '$adid'";
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}	
}
?>