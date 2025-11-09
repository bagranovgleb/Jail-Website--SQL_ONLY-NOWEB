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
            <button><a href="#">Create a visit</a></button>
            <button><a href="other_page.php">Other</a></button>
        </div>
        <div class="main">
            <div class="header">Jail-Database</div>

            <div class="add-member">
                <h2>Make an appointment</h2>
                <form class="form-row" action="php/send.php" method="POST">
                    <label>Your Name:</label>
                    <input type="text" id="new-name" placeholder="Name" name="reg_visit_name">
                    <br><br>
                    <label>Your Surname:</label>
                    <input type="text" id="new-surname" placeholder="Surname" name="reg_visit_surname">
                    <br><br>
                    <label>Prisoner ID:</label>
                    <input type="text" id="new-surname" placeholder="Insert ID" name="reg_visit_inmate_id">
                    <br><br>
                    <label>Meeting day:</label>
                    <input type="date" id="meeting-date" name="reg_visit_date">
                    <br><br>
                    <input type="submit" id="reg_submit" placeholder="Enter" name="reg_visit_submit">
                </form>
            </div>    

            <div class="footer">
                This offline website has been created for the University of Messina project and does not have a relation with physical faces and the world. That is the property of GlebBagranov.
            </div>
        </div>
    </div>
</body>
</html>