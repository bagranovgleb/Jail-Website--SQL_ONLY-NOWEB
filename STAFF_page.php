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
            <button><a href="#">STAFF page</a></button>
            <button><a href="prisoners_page.php">Prisoners page</a></button>
            <button><a href="visit_page.php">Create a visit</a></button>
            <button><a href="other_page.php">Other</a></button>
        </div>
        <div class="main">
        <div class="header">Jail-Database</div>
            
            <form id="search" action="php/send.php" method="POST">
                <h2>Find Information about STAFF members</h2>
                    <label>Name:</label>
                    <input type="text" id="name" placeholder="Name" name="search_staff_name">
                    <br><br>
                    <label>Surname:</label>
                    <input type="text" id="surname" placeholder="Surname" name="search_staff_surname">
                    <br><br>
                    <label>ID:</label>
                    <input type="text" id="id" placeholder="ID" name="search_staff_id">
                    <br><br>

                
                    <input type="submit" id="search_submit" placeholder="Enter" name="search_staff_submit">
            </form>

            <div class="add-member">
                <h2>Add new member</h2>
                <form class="form-row" action="php/send.php" method="POST">
                    <label>Name:</label>
                    <input type="text" id="new-name" placeholder="Name" name="reg_staff_name">
                    <br><br>
                    <label>Surname:</label>
                    <input type="text" id="new-surname" placeholder="Surname" name="reg_staff_surname">
                    <br><br>
                    <div class="gender">
                        <label>Gender:</label>
                            <select name="reg_staff_gender" id="reg_staff_gender">
                                <option value="">-- Choose --</option>
                                <option value="M">Man</option>
                                <option value="W">Woman</option>
                            </select>
                    </div>
                    <br><br>
                    <label>Birth Date:</label>
                    <input type="date" id="birth-date" name="reg_staff_birthday">
                    <br><br>
                    <label>Access-level-id:</label>
                            <select name="reg_staff_acess" id="reg_staff_acess">
                                <option value="">-- Choose --</option>
                                <option value="Gray">Gray</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Orange">Orange</option>
                                <option value="Red">Red</option>
                                <option value="Black">Black</option>
                            </select>
                    <br><br>
                    <label>Position:</label>
                    <input type="text" id="position" placeholder="Position"name="reg_staff_position">
                    <br><br>
                    <input type="submit" id="reg_submit" placeholder="Enter" name="reg_staff_submit">
                </form>
            </div>

            <div class="add-member">
                <h2>Report an incident</h2>
                <form class="form-row" action="php/send.php" method="POST">
                    <label>Inmate ID:</label>
                    <input type="text" id="reg_incident_inmate_name" placeholder="Inmate id" name="reg_incident_inmate_id">
                    <br><br>
                    <label>Officer ID:</label>
                    <input type="text" id="reg_incident_officer_id" placeholder="Officer id" name="reg_incident_officer_id">
                    <br><br>
                    <label>Incident Date and Time:</label>
                    <input type="datetime-local" id="reg_incident_datetime" name="reg_incident_datetime">
                    <br><br>
                    <label>Description:</label>
                    <input type="text" id="description" placeholder="Type" name="reg_incident_description">
                    <br><br>
                    <label>Action Taken:</label>
                    <input type="text" id="description" placeholder="Type" name="reg_incident_action">
                    <br><br>
                    <input type="submit" id="reg_submit" placeholder="Enter" name="reg_incident_submit">
                </form>
            </div>
            

            <form id="search" action="php/send.php" method="POST">
                <h2>Find and delete information about STAFF member</h2>
                    <label>ID:</label>
                    <input type="text" id="id" placeholder="ID" name="delete_staff_id">
                    <br><br>

                
                    <input type="submit" id="search_submit" placeholder="Enter" name="delete_staff_submit">
            </form>

            <div class="footer">
                This offline website has been created for the University of Messina project and does not have a relation with physical faces and the world. That is the property of GlebBagranov.
            </div>
        </div>
    </div>
</body>
</html>