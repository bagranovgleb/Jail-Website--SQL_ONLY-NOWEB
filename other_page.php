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
            <button><a href="#">Other</a></button>
        </div>
        <div class="main">
            <div class="header">Other options</div>
            <form id="search" action="php/send.php" method="POST">
                    <h2>Print job and workers table</h2>
                    <br>
                    <input type="submit" id="job_table_submit" placeholder="Enter" name="job_table_submit">
            </form>
            <form id="search" action="php/send.php" method="POST">
                    <h2>Print psyhology therapy table</h2>
                    <br>
                    <input type="submit" id="psyhology_table_submit" placeholder="Enter" name="psyhology_table_submit">
            </form>
            <form id="search" action="php/send.php" method="POST">
                    <h2>Print incident report table</h2>
                    <br>
                    <input type="submit" id="incident_table_submit" placeholder="Enter" name="incident_table_submit">
            </form>
            <form id="search" action="php/send.php" method="POST">
                    <h2>Execution table</h2>
                    <br>
                    <input type="submit" id="execution_table_submit" placeholder="Enter" name="execution_table_submit">
            </form>
            

            <div class="footer">
                This offline website has been created for the University of Messina project and does not have a relation with physical faces and the world. That is the property of GlebBagranov.
            </div>
        </div>
    </div>
</body>
</html>