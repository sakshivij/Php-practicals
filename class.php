<!doctype html>
<html>
<body>
<?php
	class Books
	{
		var $price;
		var $title;
		function _constructor($par1,$par2)
		{
			$this->title=$par1;
			$this->price=$par2;
		}
		function getprice()
		{
			echo $this->price."<br/>";
		}
		function getTitle()
		{
			echo $this->title."<br/>";
		}
	}
	class student
	{
		var $name;
		function _constructor($par1)
		{
			$this->name=$par1;
			
		}
		function getname()
		{
			echo $this->name."<br/>";
		}
	}
	class College
	{
		var $cname;
		function _constructor($par1)
		{
			$this->cname=$par1;
			
		}
		function getname()
		{
			echo $this->cname."<br/>";
		}	
	}
	class course
	{
		var $courseid;
		var $coursename;
		function _constructor($par1,$par2)
		{
			$this->courseid=$par1;
			$this->coursename=$par2;
		}
		function getid()
		{
			echo $this->courseid."<br/>";
		}
		function getcoursename()
		{
			echo $this->coursename."<br/>";
		}
	}
	class Teacher
	{
		var $tname;
		function _constructor($par1)
		{
			$this->tname=$par1;
			
		}
		function getteachername()
		{
			echo $this->tname ."<br/>";
		}
	}
	$book=new Books("Hamlet",100);
	$st=new student("suhani");
	$c=new College("IGDTUW");
	$co=new course("M101","MCA");
	$t=new Teacher("Ms. Nidhi");
	$st->getname();
	$c->getname();  
	$co->getcoursename(); 
        $co->getid(); 
	$t->getteachername(); 	
?>
</body>
</html>