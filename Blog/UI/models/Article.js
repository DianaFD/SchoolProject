/* global $*/
function Article(options){
    this.id=options.id;
    this.title=options.title;
    this.category=options.category|| "default topic";
    this.content=options.content;
    this.main_image_url=options.main_image_url;
    this.date=options.date || new Date();    
}

Article.prototype.update=function(data){
    //here we should save the data to the server
    //do an AJAX request or save it in the browser

    //Play with Git
    
    var formData = new FormData();
    formData.append("title", data.title);
    formData.append("content", data.content);
    formData.append("active", data.active);
    
    var config = {
        url:" https://web9-didisuperapple.c9users.io/api/article/add",
        method:"POST",
        data: formData, 
        
        success: function(resp) {
            console.log("Your article was saved");        
        }, 
        
        error: function() {
            console.log("Your article was not saved");
        }
    }

    return $.ajax(config);
    
}    