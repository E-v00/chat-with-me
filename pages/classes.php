<?php

class User{

	private $userid;
	private $username;
	private $useremail;
	private $userpass;


	public function GetUser(){
		return $this -> userid;
	}

	public function SetUser($userid){
		$this -> userid = $userid;
	}

	public function GetUserName(){
		return $this -> username;
	}

	public function SetUserName($username){
		$this -> username = $username;
	}


	public function GetUserEmail(){
		return $this -> useremail;
	}

	public function SetUserEmail($useremail){
		$this -> useremail = $useremail;
	}

	public function GetUserPass(){
		return $this -> userpass;
	}

	public function SetUserPass($userpass){
		$this -> userpass = $userpass;
	}

	public function InsertUser(){
		include('db_connection.php');

		$uname = $this->GetUserName();
		$email = $this->GetUserEmail();
		$pass = $this->GetUserpass();


		$sql = "INSERT INTO users(username,email,password) VALUES ('$uname','$email' , '$pass') ";

		if(mysqli_query($connection ,$sql))
		{
			header("Location: redirect-reg.php");

		}}


	public function UserLogin(){
		include('db_connection.php');
	
		$email = $this->GetUserEmail();
		$pass = $this->GetUserpass();

		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$result = mysqli_query($connection,$sql);

		if(mysqli_num_rows($result) == '0'){
			header("location: ../login.php?error=1");
			}
		else{
			while($rows = mysqli_fetch_assoc($result)){
				$this->SetUser($rows['id']);
				$this->SetUserName($rows['username']);
				$this->SetUserEmail($rows['email']);
				$this->SetUserPass($rows['password']);
				return true;

			}
		}
		

	}

}





class chat{
    private $chatid;
    private $chatuserid;
    private $chattext;

    public function GetChatId(){
        return $this -> chatid;
    }
    public function SetChatId($chatid){
        $this -> chatid = $chatid;
    }

    public function GetChatUserId(){
        return $this -> chatuserid;
    }
    public function SetChatUserId($chatuserid){
        $this -> chatuserid = $chatuserid;
    }

    public function GetChatText(){
        return $this -> chattext;
    }
    public function SetChatText($chattext){
        $this -> chattext = $chattext;
    }

    public function Insert_Chat(){
        include('db_connection.php');
        $chatuserid = $this->GetChatUserId();
        $chattext = $this->GetChatText();


        $sql = "INSERT INTO chats (userid, chat)
        VALUES ('$chatuserid', '$chattext')";
        
        if (mysqli_query($connection, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }

    public function Display_Chat(){
        include('db_connection.php');

        $sql = "SELECT * FROM chats ORDER BY id";
        $result = mysqli_query($connection,$sql);

        while($rows = mysqli_fetch_assoc($result)){
            $userchatid = $rows["userid"]; 
            $sql1 = "SELECT * FROM users WHERE id ='$userchatid'";
            $result1 = mysqli_query($connection,$sql1);
            $rows1 = mysqli_fetch_assoc($result1);
?>

            <span style='color:red;'><?php echo $rows1['username'] . ': ';?></span>
            <span><?php echo $rows['chat']; ?></span><br>
            <?php
        }

    }


   
}


?>