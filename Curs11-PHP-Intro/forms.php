<form method="GET" action="formsData.php">
    <input type="text" name="search"/>
    <!--<input type="text" name="job"/>-->
    <input type="submit" value="Search" />
</form>

<form method="POST" action="formsData.php">
    <input type="text" name="name"/>
    <input type="text" name="age"/>
    <input type="text" name="job"/>
    <input type="submit" value="Submit"/>
</form>


<form method="POST" action="formsData.php" enctype="multipart/form-data">
    <input type="text" name="name"/>
    <input type="file" name="file"/>
    <input type="submit" value="Submit"/> <br>
    <a href="download.php?file=picture.jpg"> Download file </a>
</form>