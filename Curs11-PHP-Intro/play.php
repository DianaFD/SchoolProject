<?php
// name
// description
// gender
// training - web, java, qa, intro
    var_dump($_POST);
    echo $_POST["name"];
?>

<form method="POST">
    <input type="text" name="name" placeholder="Name" value="<?php echo $_POST["name"];?>"/><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input type="radio" name="gender" value="F" checked/> F
    <input type="radio" name="gender" value="M" /> M <br>
    <select name="training">
        <option value="web">Web Dev</option>
        <option value="java">Java</option>
        <option value="qa">QA</option>
        <option value="intro">Intro in IT</option>
    </select>
    <input type="submit" value="Submit"/>
</form>
