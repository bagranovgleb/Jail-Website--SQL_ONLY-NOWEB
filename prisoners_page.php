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
            <button><a href="#">Prisoners page</a></button>
            <button><a href="visit_page.php">Create a visit</a></button>
            <button><a href="other_page.php">Other</a></button>
        </div>
        <div class="main">
        <div class="header">Jail-Database</div>
            <form id="search" action="php/send.php" method="POST">
                <h2>Find Information about Prisoner</h2>
                    <label>Name:</label>
                    <input type="text" id="name" placeholder="Name" name="search_inmate_name">
                    <br><br>
                    <label>Surname:</label>
                    <input type="text" id="surname" placeholder="Surname" name="search_inmate_surname">
                    <br><br>
                    <label>ID:</label>
                    <input type="text" id="id" placeholder="ID" name="search_inmate_id">
                    <br><br>

                
                    <input type="submit" id="search_submit" placeholder="Enter" name="search_inmate_submit">
            </form>
            
            <div class="add-member">
                <h2>Add new prisoner</h2>
                <form class="form-row" action="php/send.php" method="POST">
                    <label>Name:</label>
                    <input type="text" id="new-name" placeholder="Name" name="reg_inmate_name">
                    <br><br>
                    <label>Surname:</label>
                    <input type="text" id="new-surname" placeholder="Surname" name="reg_inmate_surname">
                    <br><br>
                    <label>Birth Date:</label>
                    <input type="date" id="birth-date" name="reg_inmate_birthday">
                    <br><br>
                    <label>Containment-level-id:</label>
                            <select id="reg_inmate_containment" name="reg_inmate_containment">
                                <option value="">-- Choose --</option>
                                <option value="Orange">Orange</option>
                                <option value="Red">Red</option>
                                <option value="Black">Black</option>
                            </select>
                    <br><br>
                    <div class="gender">
                        <label>Gender:</label>
                            <select  id="reg_inmate_gender" name="reg_inmate_gender">
                                <option value="">-- Choose --</option>
                                <option value="M">Man</option>
                                <option value="W">Woman</option>
                            </select>
                    </div>
                    <br><br>
                    <label>Offence:</label>
                            <select  id="reg_inmate_offence" name="reg_inmate_offence">
                                <option value="">-- Choose --</option>
                                <option value="105.1.1">Killing</option>
                                <option value="161.1.3">Robbery</option>
                                <option value="228.1">Drag Dealing</option>
                                <option value="290.1.1">Corruption</option>
                                <option value="327.1"> Forgery of documents</option>
                            </select>
                    <br><br>
                    <label>Term in months:</label>
                    <input type="text" id="new-surname" placeholder="Insert number" name="reg_inmate_month">
                    <br><br>
                    <label>Release Date:</label>
                    <input type="date" id="release-date" name="reg_inmate_release">
                    <br><br>
                    <label>Description:</label>
                    <input type="text" id="description" placeholder="Type" name="reg_inmate_description">
                    <br><br>
                    <input type="submit" id="reg_submit" placeholder="Enter" name="reg_inmate_submit">
                </form>
            </div>

            <form id="search" action="php/send.php" method="POST">
                <h2>Find and delete information about Prisoner</h2>
                    <label>ID:</label>
                    <input type="text" id="id" placeholder="ID" name="delete_inmate_id">
                    <br><br>

                
                    <input type="submit" id="search_submit" placeholder="Enter" name="delete_inmate_submit">
            </form>

            <div class="footer">
                This offline website has been created for the University of Messina project and does not have a relation with physical faces and the world. That is the property of GlebBagranov.
            </div>
        </div>
    </div>
</body>
</html>