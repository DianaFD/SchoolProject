/*global$*/
/*global Article*/
$(document).ready(onHtmlLoaded);
//always check if HTML is loaded before doing anything
//HTML operations on view
function onHtmlLoaded(){
var article=new Articles();
articles.getAll();//am luat toate articolele ca sa pot cauta unul singur

var currentArticleId=getUrlParam("id");//valoarea parametrului din URL cu id-ul 5, pot apela functia find article by id
var article=articles.dindArticleById(currentArticleId);
var containerElement=$("#container");

generateArticleTitle(article.title);
generateArticleContent(article.content);//generez continutul parametrului

//generates a h2 element, adds the title and append the element to the container
function generateArticleTitle(articleTitle){
    var titleElement=$("<h2></h2>");
    titleElement.html(articleTitle);
    
    containerElement.append(titleElement);
}

//generates an article element, adds the content and append the element to the container
function generateArticleContent(articleContent){
    var articleContentElem=$("<article></article>");

    article.ContentElem.html(articleContent);
    containerElement.append(articleContentElem);
}

//untill function, will return the url param for the provided key
function getUrlParam(name){
    var results= new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
        return null;
    }
    else {
        return results[1] || 0;
    }
    
    