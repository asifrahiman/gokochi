<?php 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "shops";

				$conn = new mysqli($servername, $username, $password, $dbname);
				
				
				if($_GET['name'])
				{
				$search=$_GET['name'];
				$search_exploded = explode (" ", $search);
				$x=0;
				foreach($search_exploded as $search_each)
				{
				$x++;
				if($x==1)
				$construct ="name LIKE '%$search_each%'";
				else
				$construct .="AND name LIKE '%$search_each%'";
				 
				}
				$sql = "SELECT COUNT(*) FROM products WHERE $construct";
				}
				
				else
				$sql = "SELECT COUNT(*) FROM `products`";
				$result = $conn->query($sql);
				$rec_limit1 =6;
				$row = $result->fetch_assoc();
				$rec_count1 = $row['COUNT(*)'];
				
				if( isset($_GET['page1'] ) ) {
					$page1 = $_GET['page1']; 
					$offset1 = $rec_limit1 * $page1 ;
					$page1=$page1+1;
					
				}else {
					$page1 = 1;
					$offset1 = 0;
					
				}
				$left_rec1 = $rec_count1 - ($page1 * $rec_limit1);
				
				$name=$_GET['name'];
				if($_GET['name'])
				{
					$search=$_GET['name'];
					$search_exploded = explode (" ", $search);
					$x=0;
					foreach($search_exploded as $search_each)
					{
					$x++;
					if($x==1)
					$construct .="name LIKE '%$search_each%'";
					else
					$construct .="AND name LIKE '%$search_each%'";
					}
				$sql = "SELECT * FROM `products` where $construct LIMIT $offset1, $rec_limit1 ";
				}
				
				else
				$sql = "SELECT * FROM `products` LIMIT $offset1, $rec_limit1 ";

				
				if ($conn->query($sql)) {
					
					$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()) {{?>
					<div class="col-md-4 portfolio-item">
					<a href="http://127.0.0.1/asif/shop/shopdisc/proddesc/index.php?id=<?php echo $row["id"]?>">
                    <img class="img-responsive" src="getimg1.php?id=<?php echo $row["id"];?>" width="700px" height="200px" alt=""/>
					</a>
					<h3>
                    <a  href="http://127.0.0.1/asif/shop/shopdisc/proddesc/index.php?name=<?php echo $row["name"]?>&id=<?php echo $row["id"]?>"><?php echo $row["name"]?></a>
					</h3>
					<p><?php echo $row["name"]?></p>
					<h4><?php if(!$row["stock"]){echo "out of stock";} ?></h4>
					</div>
				
				<?php }}?>
        </div>
        

        

        <hr>
		
        
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    
						<?php $_PHP_SELF = &$_SERVER['PHP_SELF'];
							 if( $left_rec1 < $rec_limit1 && $page1>1 ) {
								$last1 = $page1 - 2;
								echo "<li><a href = \"$_PHP_SELF?page1=$last1&name=$name\">&laquo;</a></li>";
								for ($x1 =0,$y1=1; $x1 < $rec_count1/$rec_limit1; $x1++,$y1++) {
									if($page1==$y1)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";
									}
									} 
									}
							 else if( $page1 == 1 && $left_rec1 >= 1) {
								for ($x1 =0,$y1=1; $x1 < $rec_count1/$rec_limit1; $x1++,$y1++) {
									if($page1==$y1)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";
									}
									} 
								echo "<li><a href = \"$_PHP_SELF?page1=$page1&name=$name\">&raquo;</a></li>";
							 }else if( $page1 > 1 &&!($left_rec1 < $rec_limit1 ) ) {
								$last1 = $page1 - 2;
								echo "<li><a href = \"$_PHP_SELF?page1=$last1&name=$name\">&laquo;</a> </li>";
								for ($x1 =0,$y1=1; $x1 < $rec_count1/$rec_limit1; $x1++,$y1++) {
									if($page1==$y1)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";
									}
									} 
								echo"<li><a href = \"$_PHP_SELF?page1=$page&name=$name\">&raquo;</a></li>";
							 }
						
						?>
                    
                </ul>
            </div>
        </div>		
					<?php
						} else {
							echo "0 results";
						}
						} else {
							echo "Error creating table: " . $conn->error;
						}

						$conn->close();
					?>