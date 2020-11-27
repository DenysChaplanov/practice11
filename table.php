<?php
session_start();
	$connect = mysqli_connect('localhost', 'root', '', 'testdb');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $sql = "SELECT first_name, last_name, id_role, image FROM users";
	$result = $connect->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo "<table>
	        <tr><td>First Name: $row[first_name]</td></tr>
	        <tr><td>Last Name: $row[last_name]</td></tr>
	        <tr><td>Id-role (1-admin, 2-user): $row[id_role]</tr></td>
	    	<tr><td><img src= $row[image] width=200 height=200 alt=></tr></td>
	      	<tr><td></tr></td>
	      	<tr><td></tr></td>
	      	<tr><td></tr></td>
	      	<tr><td></tr></td>
	      	<tr><td></tr></td>
	      	<tr><td></tr></td>
	        </table>";
		}
	}