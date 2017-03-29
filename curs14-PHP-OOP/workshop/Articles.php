<?php

class Articles {
    function getAll() {
        $articles = [];
        $handle = fopen("articles.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $article = explode("|", trim($line));
                $articles[] = [
                    "id" => $article[0],
                    "title" => $article[1],
                    "content" => $article[2],
                    "date" => $article[3]
                    ];
            }
            fclose($handle);
        }
        return $articles;
    }
    
    function getArticleById($id) {
        $article = [];
        $handle = fopen("articles.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $art = explode("|", trim($line));
                if ($id === $art[0]) {
                    $article["id"] = $art[0];
                    $article["title"] = $art[1];
                    $article["content"] = $art[2];
                    $article["date"] = $art[3];
                }
            }
            fclose($handle);
        }
        return $article;    
    }
    
    function addArticle() {
        
    }