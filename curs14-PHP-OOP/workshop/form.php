<?php
    if (isset($_GET)){
        require "Articles.php";
        $articles = newArticles();
        $article =$artcles->getArticleById($_GET["id"]);
        //var_dump($list);
    }
?>


<form method="POST">
    <input type= "text" name="title" value="<?php echo $article["title"];?>"/>
    <textarea name="content"> </textarea>
    <input type="text" name="date"/>
    <input type="submit" value="Value"/>
</form>