<!DOCTYPE html>
<html lang="en">
  <head>
      
    <!-- Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gawarecki Inc</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
      
  </head>
  <body>
    
    <div class="sidenav">
        
        <div id="navbtns">
          
          <a href="index.php">
          <img src="images/gIncLogo.png" alt="Gawarecki Inc Logo" id="logo"><div id="companyname">Gawarecki Inc.</div>
          </a>
          <a href="addItem.html">Add Item<br>
            <p>Add Sneaker, Add Hat</p>
          </a>
          <a href="history.html">History<br>
            <p>Search, Taxes, Revise</p>
          </a>
          <a href="goals.html">Goals<br>
            <p>Set Goal, Change Display</p>
          </a>
          <a href="calendar.html">Calendar<br>
            <p>View Tasks, Add Task, Update Task</p>
          </a>
            
          <footer>Gawarecki Inc. &#8482 2018 &#169</footer>
          
        </div>
        <!-- END NAV BTNS-->
        
      </div>
      <!-- END OF SIDE NAV -->
      
      <div class="dashdisplay">
        
        <div class="topdash">
          
          <!-- ADD HEADER INFO TO THE BLUE TOP OF PAGE -->
          
        </div>
		<div class="bottomdash">
		
		  <div class="row">
		  
			  <div id="goalscontainer">
			  
				<p>Goals will display here</p>
			  
			  </div>
			  <div id="chartcontainer">
			  
			    <p>Chart will display here</p>
				
			  </div>
			  <div id="dashboardcontainer">
                  
                  <div id="dashheader">
                      
                      <div class="dropdown">
                        <button class="dropbtn">All</button>
                        <div class="dropdown-content">
                          <a href="#">All</a>
                          <a href="#">Sneakers</a>
                          <a href="#">Hats</a>
                        </div>
                      </div>
                      
                  </div>
                  <div id="tablecontainer">
                      
                      <?php
                      
                      $db_host='localhost';
                      $db_user='kgawarecki';
                      $db_pass='password';
                      $db_name='gawarecki_inc';
                      
                      $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                      if (!$conn)
                      {
                          die('failed to connect mysql database' . mysqli_connect_error());
                      }

                        // Display DB Rows
                        $sql = 'select * from add_item';
                        $query = mysqli_query($conn,$sql);
                            if(!$query)
                            {
                                die ('error found'. mysqli_error($conn));
                            }

                            echo "
                                <table class='table'>
                                <tr>
                                <th>Del</th>
                                <th>Item Image</th>
                                <th>Date Posted</th>
                                <th>Listing Price</th>
                                <th>Potential Profit</th>
                                <th>Size</th>
                                <th>Sold</th>
                                </tr>";

                              while ($row = mysqli_fetch_array($query))
                                {
                                    echo ' <tr>
                                    <td>&#x2718</td>
                                    <td>'.$row['itemname'].'</td>
                                    <td>'.$row['dateposted'].'</td>
                                    <td>$'.$row['itemprice'].'</td>
                                    <td>$'.$row['pricepaid'].'</td>
                                    <td>'.$row['itemsize'].'</td>
                                    <td>&#x2705</td>
                                    </tr>';
                                }

                                echo "</table>";
                        ?>
                      
                  </div>
              </div>
            </div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>