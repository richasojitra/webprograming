<?php

	
$student=array("ab","cd","ef","gh","ij","kl","mn","pq","rs","tu");
print_r($student);
echo "<br><br>";

	
$s_detail=array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7);
print_r($s_detail);
echo "<br><br>";


$s_multy=array(array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7),array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7),array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7),array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7),array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7),array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7),array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7),array("Rollno"=>1,"Name"=>"Pushpa","city"=>"Ahemdabad","Age"=>23,"Add"=>"yash-park","degree"=>"bca","eroll"=>220801323,"reg"=>15612422046,"div"=>"B1","lebn."=>7));

echo '<table border="1">';
 echo'<tr><td>Rollno</td><td>Name</td><td>city</td><td>Age</td><td>Add</td><td>degree</td><td>eroll</td><td>reg</td><td>div</td><td>lebn.</td>';
foreach ($s_multy as $s_mult)
{
	echo '<tr>';
	foreach($s_mult as $key)
	{
		echo '<td>'.$key.'</td>';
	}
    echo '<tr>';
}
echo '</table>';
	

?>