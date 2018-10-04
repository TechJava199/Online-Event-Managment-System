
				<?php
				$id=$_REQUEST["id"];
				
						$conn=new mysqli("localhost","root","","collegedb");
						$resultset=$conn->query("select *from book1 where bookingid='$id'");
						
						echo "<table class='table table-stripped'>";
						echo "<th>SNO</th>";
						echo "<th>B_id</th>";
						echo "<th>eventtype</th>";
						echo "<th>eventplace</th>";
						echo "<th>Noofguest</th>";
						echo "<th>date</th>";
						echo "<th>equipmenttype</th>";
						echo "<th>food</th>";
						echo "<th>lunchtype</th>";
						echo "<th>dinnertype</th>";
						echo "<th>lighiting</th>";
						echo "<th>flowers</th>";
						echo "<th>seating</th>";
						while($row=mysqli_fetch_array($resultset))
						{
							echo "<tr>";
							echo "<td>$row[0]</td>";
							echo "<td>$row[1]</td>";
							echo "<td>$row[2]</td>";
							echo "<td>$row[3]</td>";
							echo "<td>$row[4]</td>";
							echo "<td>$row[5]</td>";
							echo "<td>$row[6]</td>";
							echo "<td>$row[7]</td>";
							echo "<td>$row[8]</td>";
							echo "<td>$row[9]</td>";
							echo "<td>$row[10]</td>";
							echo "<td>$row[11]</td>";
							echo "<td>$row[12]</td>";
							echo "</td>";
						}
						echo "</table>";
					
					?>
			