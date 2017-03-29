/* global $*/
$(document).ready(onHtmlLoaded);

function onHtmlLoaded() {
    var req = new XMLHttpRequest();
    
    req.open("GET", "https://jsonplaceholder.typicode.com/posts");
    
    req.addEventListener("load", displayPosts);
    
    req.send();
    
    // it will not work like this , as req.response will not have 
    // data in it at this point. Use addEventListener!!!
    // displayPosts(req.response);
    
    function displayPosts() {
        var posts = JSON.parse(this.response);
        var postsContainer = $("#posts");
        for (var i=0; i<posts.length; i++) {
            postsContainer.append("<li>" + posts[i].body + "</li>")
        }
    }
    
    //addArticle();

    function addArticle() {
       var response = JSON.parse(this.response);
       if (response.error) {
           return false;
       }   
       
       // prepare the data to send to the server
        var articleData = {
            title: "New title",
            content: "Test content",
            user_id: 1,
            category_id: 1
        }
        var req = new XMLHttpRequest();
        req.open("POST","https://web9-siitwebcluj.c9users.io/curs21-PHP-API/articles/add");
        req.setRequestHeader("Content-type","application/json");
         // convert to string the data before sending it to the server
         var strArticleData = JSON.stringify(articleData);
        // send the request to the server with the stringified data
         req.send(strArticleData);
     }
    
    login();
    
    function login() {
        // prepare the data to send to the server
        var userData = {
            email:"mihai.sampaleanu@gmail.com",
            pass:"romania"
        }
        var req = new XMLHttpRequest();
        req.open("POST","https://web9-siitwebcluj.c9users.io/curs21-PHP-API/login");
        req.setRequestHeader("Content-type","application/json");
        //listen when login is done
        req.addEventListener("load", addArticle);
        // convert to string the data before sending it to the server
        var strUserData = JSON.stringify(userData);
        // send the request to the server with the stringified data
        req.send(strUserData);
    }
}