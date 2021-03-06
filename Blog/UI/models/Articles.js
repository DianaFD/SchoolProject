/* global $ */
function Articles(){
    this.models=[];
    }
    
    Articles.prototype.findArticleById=function(id) {
        var result;
        for (var i=0; i<this.models.length; i++) {
            if (this.models[i].id==is){
                result=this.models[i];
            }
        }
     return result;
    }
    Articles.prototype.getAll=function () {
    // get all article items from server/localStorage
        // var ArticlesStr=localStorage.getItem("articles");
        // var articles=jSON.parse(articlesStr);
        // if (articles) {
        //     for (var i=0; i<articles.length; i++){
        //         var article=new Article(articles[i]);
        //         this.models.push(article);
        //     }
        //     console.log (articles);
        //     console.log(this.models);
       
       var that = this;
       var config={
           url:"https://web9-didisuperapple.c9users.io/Blog/api/controlers/Articles",
           method: "GET",
           success: function(resp) {
             for (var i=0; i<resp.length; i++) {
                var article=new Articles(resp[i]);
                that.models.push(article);
            }
       }, 
       error: function() {
         console.log("Something went wrong while getting the articles");
       }    
    }
    
    
    Articles.prototypes.removeArticle=function(articleId) {
        //here we will search for article model by id
        //and here remove it from models array and from
        //server/localStorage
    }
    
    Articles.prototype.save=function(articleData) {
        //here we should have the new article
        
        //https:web9-didisuperapple.c9users.io/curs21-PHP-API/articles/add
        //POST
        
        //title
        //content
        //user_id
        //category_id
        
        var formData = new FormData ();
            formData.append("main_image_url",articleData.img);
            formData.append("title", articleData.title);
            formData.append("content", articleData.content);
            formData.append("user_id", "1");
            formData.append("category", "1");
        
        var config = {    
            url:"https://web9-didisuperapple.c9users.io/api/article/add",
            method: "POST",
            data: formData, 
            processData:false, 
            contentType:false,
            success: function(resp) {
                console.log("all good");
            },
            success: function(resp) {
                console.log(" Your article is fine");
            },
            error:function() {
                console.log ("article was not added");
                }
        }
    
        $.ajax(config);
    }
}