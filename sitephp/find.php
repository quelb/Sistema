<div class="container">
<div class="alert alert-success"><center> <h4>Record Results </h4></center> </div>
<br />
 
	<table class="table table-striped">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">FirstName</th>
				<th class="text-center">LastName</th>
				<th class="text-center">Phone Number</th>
				<th class="text-center">Email Address</th>
			</tr>
		</thead>
 
		<tbody>	
			<?php
			error_reporting(0);
			if ($_REQUEST['submit']) {
			$search_file = $_POST['search_file'];
			$sql = mysql_query("select * from information where firstname like '%$search_file%' or lastname like '%$search_file%'  or ID like '%$search_file%' Order by lastname ASC") or die('Error in query : $sql. ' .mysql_error());
 
			if (empty($search_file)) {
			echo '<script language="javascript">';
			echo 'alert("Text field cannot be empty. Please Try it again.")';
			echo '</script>';
			header( "refresh:2; url=index.php" ); 
			}
			else if (mysql_num_rows($sql) > 0) 
			{            
			$i = 1;
			while ($row = mysql_fetch_array($sql)) {
							// Print out the contents of the entry 
			echo '<tr>';
			echo '<td class="text-center">' . $i . '</td>';
			echo '<td class="text-center">' . $row['firstname'] . '</td>';
			echo '<td class="text-center">' . $row['lastname'] . '</td>';
			echo '<td class="text-center">' . $row['phonenumber'] . '</td>';
			echo '<td class="text-center">' . $row['email'] . '</td>';
			$i++;
			}
			} 
			else 
			{
			echo '<div class="alert alert-danger" style="width:130px; float:right; margin-top:-142px;">No Results Found!!!</div>';
			}
			}
			?>       
		</tbody>
	</table>
</div>