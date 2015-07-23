<?php 
if(!isset($_GET['mobile']))
{
	echo "Sorry";
}

else{
 
    class myDB {
           var $host = "localhost";
            var $user = "root";
            var $pass = "";
            var $dbname = "gps";
            var $mysqli= false;
 
            public function __construct() 
			{
				$this->mysqli=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
			}
			public function query_1($sql)
			{
			//$mysqli=$mysqli=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
				$i=0;
				$rows = array();
				$rs=$this->mysqli->query($sql);
echo $this->mysqli->error;
				while($row=$rs->fetch_assoc())
				{
				$rows[]=$row;
				/*foreach($row as $key=>$value) 
				{   
					echo "<br/>".$key." ".$value; 
				
				}*/
				
				}
				//echo "Count".count($rows);
				echo $this->mysqli->error;
				return $rows;
			}
			
            public function __destruct() {
            $this->mysqli->close();
            }
 
    }
 
    
	$db=new myDB();
	$mobile=$_GET['mobile'];
$pass=md5($_GET['pass']);
	$sql="SELECT UserName,Mobile FROM `users` WHERE Mobile='$mobile' AND Password='$pass'";
    $data=$db->query_1($sql);
	//echo "{";
	//foreach($data as $k)
	{
	//echo "<pre>";
	//echo "<br/>".$k." ".$v;
	
	//echo "<br/>".$k." " .$v;
	//echo $first."<br/>";
	echo(json_encode($data,JSON_FORCE_OBJECT));
	
	}
}
?>