<?php
$host='localhost';

	        $user='root';

			//$connection= mysqli_connect ($host, "root", "" , "Mock_test_db"); 
			$mysqli = new mysqli("localhost","root","","Mock_test_db");
			if (!$mysqli) 
			{
				die ( "no connection found" . mysqli_error($mysqli));
			}

			$query="SELECT * FROM mock_test_tbl where Email LIKE '".$_POST['value']."' ";

        	//$extra_slots_entry= mysqli_query($connection,$query);
 			$rows = array();
        	if ($result = $mysqli -> query($query)) {

			  while ($row = $result -> fetch_row()) 
			  {
			     $rows[] = $row;
			  }
			  
			}
			$html='';
			foreach ($rows as $key => $rowval) {
				$html.="<tr><td>".$rowval[1]."</td>
				<td>".$rowval[2]."</td>
				<td>".$rowval[3]."</td>
				<td>".$rowval[4]."</td>
				</tr>";
				}

			
            echo  $html;
        	
?>