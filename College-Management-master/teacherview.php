<?php
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="test";
	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$queryl="SELECT * FROM teacher";
        $result=mysqli_query($conn,$queryl);
        $user=mysqli_num_rows($result);
        if($user!=0)
		{
			?>
			<style>
				body {font-size: 120%; background:black;}
				td
				{
					background-color:#F8F8FF;
					padding:10px;
				}
				th
				{
					color:white;
					background-color:#5F9EA0;
					padding:10px;
				}
			</style>
			<table>
				<tr>
					<th>F_Name</th>
					<th>M_Name</th>
					<th>L_Name</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Email</th>	
					<th>Phone_No.</th>
					<th>Qualification</th>
					<th>Address</th>
					<th>Salary</th>
				</tr>
			<?php
			while($data=mysqli_fetch_assoc($result))
			{
				echo "<tr>
						<td>".$data['firstname']."</td>
						<td>".$data['middlename']."</td>
						<td>".$data['lastname']."</td>
						<td>".$data['dob']."</td>
						<td>".$data['gender']."</td>
						<td>".$data['email']."</td>
						<td>".$data['mobile']."</td>
						<td>".$data['q']."</td>
						<td>".$data['address']."</td>
						<td>".$data['salary']."</td>
					</tr>";
			}
		}
		else
		{
			echo "NO RECORD";
		}
	}
?>
</table>