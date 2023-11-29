<?php 
include "src/connect.php"; 
?>

<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="styles2.css"/>
        <script src="app.js" defer></script>
    </head>
    <body>
        <header id="header">
            <div class="logo">
                <img src="assets/admin.png" style="border-radius: 20px;"  width="50px" height="50px"/>
            </div>     
            <div class="mid">
                <div><img width="35px" height="35px" src="assets/dashboard.png"/></div>
                <div>Dashboard</div>
            </div>   
            <div>
                <button type="submit" name ="logoutbtn">Logout</button>
            </div>   
        </header>
        <main id="main">
            <section  id="workers">
                <div class="col-1">
                    <a href="workers.php">Workers</a>
                    <p>
                    <?php
                        $sql2 = "SELECT COUNT(*) as count FROM workers";
                        $results = $connect->query($sql2);
                        
                        if ($results) {
                            $rows = $results->fetch_assoc();
                            $rowCount = $rows['count'];
                            echo $rowCount;
                        }
                        ?>
                    </p>
                    <button onclick="toggleWorkerinfo()" id="add-workers">Add New</button>
                </div>
                <div class="col-2">
                    <img width="50px" style="padding-bottom: 3px;" height="50px" src="assets/workers.png"/>
                </div>  

            </section>
            <section  id="customers">
                <div class="col-1">
                    <a href="customers.php">Customers</a>
                    <p>
                    <?php
                        $cutomersSql = "SELECT COUNT(*) as count FROM customers";
                        $customersResult = $connect->query($cutomersSql);
                        
                        if ($customersResult) {
                            $rows = $customersResult->fetch_assoc();
                            $rowCount = $rows['count'];
                            echo $rowCount;
                        }
                        ?>
                    </p>
                    <button onclick="toggleCustomerinfo()" id="add-customers">Add New</button>
                </div>
                <div class="col-2">
                    <img width="50px" height="50px" src="assets/customers.png"/>
                </div>
            </section>
            <section  id="vehicles">
                <div class="col-1">
                    <a href="vehicles.php">Vehicles</a>
                    <p>
                    <?php
                        $vehiclesSql = "SELECT COUNT(*) as count FROM vehicle";
                        $vehiclesResult = $connect->query($vehiclesSql);
                        
                        if ($vehiclesResult) {
                            $rows = $vehiclesResult->fetch_assoc();
                            $rowCount = $rows['count'];
                            echo $rowCount;
                        }
                        ?>
                    </p>
                    <button onclick="toggleVehicleinfo()" id="add-vehicles">Add New</button>
                </div>
                <div class="col-2">
                    <img width="50px" height="50px" src="assets/vehicles.png"/>
                </div> 
            </section>
            <section id="products">
                <div class="col-1">
                    <a href="products.php">Products</a>
                    <p>
                    <?php
                        $productsSql = "SELECT COUNT(*) as count FROM products";
                        $productsResults = $connect->query($productsSql);
                        
                        if ($productsResults) {
                            $rows = $productsResults->fetch_assoc();
                            $rowCount = $rows['count'];
                            echo $rowCount;
                        }
                        ?>
                    </p>
                    <button onclick="toggleProductinfo()" id="add-products">Add New</button>
                </div>
                <div class="col-2">
                    <img width="50px" height="50px" src="assets/products.png"/>
                </div>
            </section>
            <section id="workdone">
                <div class="col-1">
                    <a href="workdone.php">Work done</a>
                    <p>
                    <?php
                        $workdoneSql = "SELECT COUNT(*) as count FROM workdone";
                        $wokdoneResults = $connect->query($workdoneSql);
                        
                        if ($wokdoneResults) {
                            $rows = $wokdoneResults->fetch_assoc();
                            $rowCount = $rows['count'];
                            echo $rowCount;
                        }
                        ?>  
                    </p>
                    <button onclick="toggleWorkdoneinfo()"  id="add-workdone">Add New</button>
                </div>
                <div class="col-2">
                    <img width="50px" height="50px" src="assets/complete.png"/>
                </div>
            </section>
            <section id="visits">
                <div class="col-1">
                    <a href="#">Visits</a>
                    <p>d</p>
                    <button onclick="toggleVisitsinfo()" id="add-visits">Add New</button>
                </div>
                <div class="col-2">
                    <img width="50px" height="50px" src="assets/visits.png"/>
                </div>  
            </section>
            <section  id="sales">
                <div class="col-1">
                    <a href="#">Sales</a>
                    <p>d</p>
                    <button onclick="toggleSalesinfo()" id="add-sales">Add New</button>
                </div>
                <div class="col-2">
                    <img width="50px" height="50px" src="assets/sales.png"/>
                </div>
            </section>
        </main>
        
        <div style="height: 500px;" class="hidden" id="workers-form">
            <p onclick="closePage()">X</p>
            <form style=" height: 1000px;"  method="POST" action="src/processWorkers.php">
                <br>
                <div>
                    <label>Name:</label><br>
                    <input name="name" type="text" autocomplete="off" required/>
                </div>
                <br>
                <div>
                    <label>Contact:</label><br>
                    <input type="text" name="contact" autocomplete="off" required/>
                </div>
                <br>
                <div>
                    <label>Position:</label><br>
                    <select style="background-color: rgb(255, 115, 0)" name="position">
                        <option name="position" value="human resources">Human resources</option>
                        <option name="position" value="assistant manager">Assistant manager</option>
                        <option name="position" value="sales manager">Sales manager</option>
                        <option name="position" value="sales assistant manager">Sales assistant manager</option>
                        <option name="position" value="mechanic">Mechanic</option>
                        <option name="position" value="accountant">Accountant</option>
                    </select>
                </div>
                <br>
                <div>
                    <label>Fixed salary:</label><br>
                      <input type="number" name="fixedsalary" autocomplete="off" required/>
                </div>
                <br>
                <div>
                    <label>Allowance:</label><br>
                    <input type="number" name="allowance" placeholder="Optional" autocomplete="off"/>
                </div>
                <br>
                <div>
                    <label>Bank account:</label><br>
                    <input type="text" name="bankaccount" autocomplete="off" required/>
                </div>
                <br>
                <div>
                    <label>Next of kin:</label><br>
                    <input type="text" name="nextofkin" autocomplete="off" required/>
                </div>
                <br>
                <div>
                    <label>Username:</label><br>
                    <input type="text" name="username" autocomplete="off" required/>
                </div>
                <br>
                <div>
                    <label>Password:</label><br>
                    <input type="password" name="password" autocomplete="off" required/>
                </div>
                <br>
                <div>   
                    <button type="submit" style=" background:rgb(255, 115, 0);" class="btn1" name="button1">Add worker</button>
                </div>
                <br>
            </form>
        </div>
        <div style="height: 500px;" class="hidden" id="customers-form">
            <p onclick="closePage2()">X</p>
            <form  style="height: 100%;" method="post" action="src/processCustomers.php">
                <div>
                    <label>Name:</label>
                    <br>
                    <input type="text" required name="name" autocomplete="off"/>
                </div>
                <div>
                    <label>Contact:</label>
                    <br>
                    <input type="tel" required name="contact" autocomplete="off"/>
                </div>
                <div>
                    <label>Email:</label>
                    <br>
                    <input type="email" required name="email" autocomplete="off"/>
                </div>
                <div>
                    <label>Address:</label>
                    <br>
                    <input type="text" required name="address" autocomplete="off"/>
                </div>
                <div>   
                    <button style=" background:rgb(0, 153, 255);" class="btn2" name="button2" value="submit">Add Customer</button>
                </div>
            </form>
        </div> 
        <div class="hidden" style="height: 300px; overflow: hidden;"  id="vehicles-form">
            <p onclick="closePage3()">X</p>
            <form  style="height: 100%;" method="post" action="">
                <div style="padding-top: 10px;">
                <label>customer:</label><br>
                    <select  name="customerid"  style="background-color:red; color:white;">
                        <?php 
                      
                        $result =  mysqli_query($connect, "SELECT * FROM `customers` WHERE 1"); 
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option>" . $row['name']  . "</option>"; 
                            if(isset($_POST['button3'])){
                                $vehiclename = $_POST['vehiclename'];
                                $vehiclenumber = $_POST['vehiclenumber'];
                                $customerid = $row['customerid'];
                                $sql = "INSERT INTO vehicle (customerid, vtype, vnumber) VALUES ('$customerid', '$vehiclename', '$vehiclenumber')";
                                $result2 = mysqli_query($connect, $sql);
                                                    
                                if($result2){
                                    header("location: dashboard.php?e=successful");
                                } else {
                                    header("location: dashboard.php?e=unsuccessful");
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>Vehicle name:</label>
                    <br>
                    <input type="text" required name="vehiclename" autocomplete="off"/>
                </div>
                <div>
                    <label>Vehicle number:</label>
                    <br>
                    <input type="number" required name="vehiclenumber" autocomplete="off"/>
                </div>
                <div>   
                    <button style="background-color: rgb(255, 0, 0);" class="btn3" name="button3" value="submit">Add Vehicle</button>
                     
                </div>
                <br>
            </form>
        </div> 
        <div class="hidden" style="height: 500px; overflow: hidden;"  id="products-form">
            <p  onclick="closePage4()">X</p>
            <form  style="height: 100%;" method="post" action="src/processProducts.php">
                <div>
                    <label>Product name:</label>
                    <br>
                    <input type="text" required name="productname" autocomplete="off"/>
                </div>
                <div id="flex-radio">
                    <label>Viability:</label>
                    <br><br>
                    <div id="radio">
                        <div>
                            <input id="viable" type="radio" name="viability" value="viable"/>
                            <label for="viable">viable</label>
                        </div>
                        <div>    
                            <input checked id="non-viable" type="radio" name="viability" value="non-viable"/>
                            <label for="non-viable">non viable</label>
                        </div>
                    </div>
                </div>
                <div>
                    <label>price:</label>
                    <br>
                    <input type="number" required name="price" autocomplete="off"/>
                </div>
                
                <div>   
                    <button  style="background-color: rgb(255, 0, 221);" class="btn4" name="button4" value="submit">Add Product</button>
                </div>
                <br>
            </form>
        </div>
        <div style="height: 650px;" class="hidden"  id="workdone-form">
            <p onclick="closePage5()">X</p>
            <form  style="height: 100%;" method="post" action="src/processWorkdone.php">
                <div>
                    <label>Worker's name:</label>
                    <br>
                    <select name="workerid" style="background-color: rgb(0, 255, 85); font-size:18px; color:white;">
                    <?php
                        $result =  mysqli_query($connect, "SELECT * FROM `workers` WHERE 1"); 
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option>" . $row['name']  . "</option>"; 
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>Description of work:</label>
                    <br>
                    <textarea required name="descriptionofwork"></textarea>
                </div>
                <div>
                    <label>Hours worked:</label>
                    <br>
                    <input type="number" required name="hoursworked" autocomplete="off"/>
                </div>
                <div>
                    <label>customer's name:</label>
                    <br>
                    <select name="customerid" style="background-color: rgb(0, 255, 85); font-size:18px; color:white;">
                        <?php
                        $result =  mysqli_query($connect, "SELECT * FROM `customers` WHERE 1"); 
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option>" . $row['name']  . "</option>"; 
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>Cost:</label>
                    <br>
                    <input type="number" required name="cost" autocomplete="off"/>
                </div>
                <div>
                    <label>vehicle's name:</label>
                    <br>
                    <select name="vehicleid" style="background-color: rgb(0, 255, 85); font-size:18px; color:white;">
                    <?php
                        $result =  mysqli_query($connect, "SELECT * FROM `vehicle` WHERE 1"); 
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option>" . $row['vtype']  . "</option>"; 
                        }
                        ?>
                    </select>
                </div>
                <div>   
                    <button style=" background:rgb(0, 255, 85);" class="btn5" name="button5" value="submit">Add Work done</button>
                </div>
            </form>
        </div>    
        <div style="height: 500px;" class="hidden"  id="visits-form">
            <p onclick="closePage6()">X</p>
            <form  style="height: 100%;" method="post" action="">
                <div>
                    <label>Date of visit:</label>
                    <br>
                    <input type="date" required  name="dateofvisit" autocomplete="off"/>
                </div>
                <div>
                    <label>time of visit:</label>
                    <br>
                    <input type="time" required name="timeofvisit" autocomplete="off"/>
                </div>
                <div>
                    <label>Details of visit:</label>
                    <br>
                    <textarea name="detailsofvisit" required></textarea>
                </div>
                <div>   
                    <button style=" background:rgb(251, 255, 0);" class="btn6" name="button6" value="submit">Add Visit</button>
                </div>
            </form>
        </div>
        <div  style="height: 45%" class="hidden" id="sales-form">
        <p onclick="closePage7()">X</p>
        <form  style="height: fit-content" method="post" action="">
            <table style="font-size: 20px; color: white;">
                <tr>
                    <td style="width: 70%; height: 50px;">Purchased items</td>
                    <td>Price (GHC)</td>
                </tr>
                <tr>
                    <td>
                        <input class="accentColor" type="checkbox"  value="item1" name="sales"/>
                        <label>item 1</label>
                    </td>
                    <td class="centered">120</td>
                </tr>
                <tr>
                    <td>
                        <input class="accentColor" type="checkbox"  value="item1" name="sales"/>
                        <label>item 1</label>
                    </td>
                    <td class="centered">120</td>
                </tr>
                <tr>
                    <td>
                        <input class="accentColor" type="checkbox"  value="item1" name="sales"/>
                        <label>item 1</label>
                    </td>
                    <td class="centered">120</td>
                </tr>
                <tr>
                    <td>
                        <input class="accentColor" type="checkbox"  value="item1" name="sales"/>
                        <label>item 1</label>
                    </td>
                    <td class="centered">120</td>
                </tr>
                <tr>
                    <td>
                        <input class="accentColor" type="checkbox"  value="item1" name="sales"/>
                        <label>item 1</label>
                    </td>
                    <td class="centered">120</td>
                </tr>
                <tr>
                    <td>
                        <input class="accentColor" type="checkbox"  value="item1" name="sales"/>
                        <label>item 1</label>
                    </td>
                    <td class="centered">120</td>
                </tr>
                <tr>
                    <td>
                        <input class="accentColor" type="checkbox"  value="item1" name="sales"/>
                        <label>item 1</label>
                    </td>
                    <td class="centered">120</td>
                </tr>


            </table>
            <br>
            <div>   
                <button style=" background:rgb(134, 124, 124);" class="btn7" name="button7" value="submit">Add Sales</button>
            </div>
            <br>
        </form>
    </div>
    </body>
</html> 