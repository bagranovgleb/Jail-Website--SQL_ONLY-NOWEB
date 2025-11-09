<html>
    <head>
        <meta charset="UTF-8">
        <title>Jail Database</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body>
    <div class="container">
        <div class="sidebar">
            <button><a href="Main_page.php">Main page</a></button>
            <button><a href="STAFF_page.php">STAFF page</a></button>
            <button><a href="prisoners_page.php">Prisoners page</a></button>
            <button><a href="visit_page.php">Create a visit</a></button>
            <button><a href="other_page.php">Other</a></button>
        </div>
        <div class="main">
            <div id="result" class="add-member">
                <h1>Result:</h1><br>
                <?php
                $host = "localhost";
                $user = "dartwind";
                $pass = "cisterntheBasilica1";
                $dbnm = "jail database";

                $connect = mysqli_connect($host, $user, $pass, $dbnm);  

                if (!$connect) {  
                    die("Connection failed: " . mysqli_connect_error());  
                }  

                session_start();

                if ($_SESSION['query']=='STAFF'){
                    $a = $_SESSION['staff_name'];  
                    $b = $_SESSION['staff_surname'];  
                    $c = $_SESSION['staff_id'];  
                    
                    if (!empty($a) || !empty($b) || !empty($c)) {  
                        $query = "SELECT * FROM staff WHERE staff_id = '$c' AND name = '$a'  AND surname='$b'";
                        $result = $connect->query($query);
                        if ($result->num_rows > 0) {
                            echo "<table border='1'>";
                            echo "<tr>
                                    <th>staff_id</th>
                                    <th>name</th>
                                    <th>surname</th>
                                    <th>gender</th>
                                    <th>birth_date</th>
                                    <th>acess_level</th>
                                    <th>position</th>
                                    <th>recruitment</th>
                                </tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['staff_id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['surname']}</td>
                                        <td>{$row['gender']}</td>
                                        <td>{$row['birth_date']}</td>
                                        <td>{$row['acess_level']}</td>
                                        <td>{$row['position']}</td>
                                        <td>{$row['recruitment']}</td>
                                    </tr>";
                            }
                            echo "</table>";
                        } else {
                            die("No information about that or bad session" . mysqli_connect_error());  
                        }
                        
                    }
                    session_destroy();


                } else if ($_SESSION['query']=='inmate'){
                    $a = $_SESSION['inmate_name'];  
                    $b = $_SESSION['inmate_surname'];  
                    $c = $_SESSION['inmate_id'];  
                    
                    if (!empty($a) || !empty($b) || !empty($c)) {  
                        $query = "SELECT * FROM prisoners WHERE inmate_id = '$c' AND name = '$a'  AND surname='$b'";
                        $result = $connect->query($query);
                        if ($result->num_rows > 0) {
                            echo "<table border='1'>";
                            echo "<tr>
                                    <th>inmate_id</th>
                                    <th>name</th>
                                    <th>surname</th>
                                    <th>birth_date</th>
                                    <th>containment_level</th>
                                    <th>gender</th>
                                    <th>offence</th>
                                    <th>term_month</th>
                                    <th>start_date</th>
                                    <th>release_date</th>
                                    <th>description</th>
                                </tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['inmate_id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['surname']}</td>
                                        <td>{$row['birth_date']}</td>
                                        <td>{$row['containment_level']}</td>
                                        <td>{$row['gender']}</td>
                                        <td>{$row['offence']}</td>
                                        <td>{$row['term_month']}</td>
                                        <td>{$row['start_date']}</td>
                                        <td>{$row['release_date']}</td>
                                        <td>{$row['description']}</td>
                                    </tr>";
                            }
                            echo "</table>";
                        } else {
                            die("No information about that " . mysqli_connect_error());  
                        }
                        
                    }
                    session_destroy();

                }else if ($_SESSION['query']=='job_table'){
                
                    $query = "SELECT * FROM inside_jobs WHERE 1";
                    $result = $connect->query($query);
                    if ($result->num_rows > 0) {
                        echo "<table border='1'>";
                        echo "<tr>
                                <th>job</th>
                                <th>inmate_id</th>
                                <th>schedule</th>
                                <th>responsible_id</th>
                                <th>worked_hours</th>
                            </tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['job']}</td>
                                        <td>{$row['inmate_id']}</td>
                                        <td>{$row['schedule']}</td>
                                        <td>{$row['responsible_id']}</td>
                                        <td>{$row['worked_hours']}</td>                          
                                      </tr>";
                            }
                        echo "</table>";
                        } else {
                            die("No information about that " . mysqli_connect_error());  
                        }
                    
                    session_destroy();

                }else if ($_SESSION['query']=='psyhology_table'){
                
                    $query = "SELECT * FROM psyhologist_therapy WHERE 1";
                    $result = $connect->query($query);
                    if ($result->num_rows > 0) {
                        echo "<table border='1'>";
                        echo "<tr>
                                <th>psyhology_visitID</th>
                                <th>inmate_id</th>
                                <th>therapy_time</th>
                                <th>psyhologist_id</th>
                                <th>verdict</th>
                            </tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['psyhology_visitID']}</td>
                                        <td>{$row['inmate_id']}</td>
                                        <td>{$row['therapy_time']}</td>
                                        <td>{$row['psyhologist_id']}</td>
                                        <td>{$row['verdict']}</td>                          
                                      </tr>";
                            }
                        echo "</table>";
                        } else {
                            die("No information about that " . mysqli_connect_error());  
                        }
                    
                    session_destroy();
                }else if ($_SESSION['query']=='incident_table'){
                
                    $query = "SELECT * FROM incident_reports WHERE 1";
                    $result = $connect->query($query);
                    if ($result->num_rows > 0) {
                        echo "<table border='1'>";
                        echo "<tr>
                                <th>incident_id</th>
                                <th>inmate_id</th>
                                <th>officer_id</th>
                                <th>incident_time</th>
                                <th>description</th>
                                <th>action_taken</th>
                            </tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['incident_id']}</td>
                                        <td>{$row['inmate_id']}</td>
                                        <td>{$row['officer_id']}</td>
                                        <td>{$row['incident_time']}</td>
                                        <td>{$row['description']}</td>  
                                        <td>{$row['action_taken']}</td>                          
                                      </tr>";
                            }
                        echo "</table>";
                        } else {
                            die("No information about that " . mysqli_connect_error());  
                        }
                    
                    session_destroy();
                }else if ($_SESSION['query']=='execution_table'){
                
                    $query = "SELECT * FROM prisoner_execution WHERE 1";
                    $result = $connect->query($query);
                    if ($result->num_rows > 0) {
                        echo "<table border='1'>";
                        echo "<tr>
                                <th>inmate_id</th>
                                <th>responsible_id</th>
                                <th>execution_time</th>
                            </tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['inmate_id']}</td>
                                        <td>{$row['responsible_id']}</td>
                                        <td>{$row['execution_time']}</td>                        
                                      </tr>";
                            }
                        echo "</table>";
                        } else {
                            die("No information about that " . mysqli_connect_error());  
                        }
                    
                    session_destroy();
                }

                ?>

            </div>

            <div class="footer">
                This offline website has been created for the University of Messina project and does not have a relation with physical faces and the world. That is the property of GlebBagranov.
            </div>
        </div>
    </div>
</body>
</html>