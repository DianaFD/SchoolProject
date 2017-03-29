//1.inline function
/* global $*/
// $(document).ready(function(){
//     console.log("DOM is loaded here");
//     //all JS code should be placed here
// });

//2.function name
$(document).ready(onHtmlLoaded);

function onHtmlLoaded() {
    console.log("DOM is loaded here");
    //all JS code should be placed here
    
    //find element by id
    var sectionElem = $("#section_1");
    console.log(sectionElem);
    
    //find element by className
    var classElements = $(".content-text");
    console.log(classElements);
    
    //find element by attribute
    var emailInput = $("input[type='email']");
    console.log(emailInput);
    
    var passInput = $("input[name='password']");
    console.log(passInput);
    
    //CSS like selector
    // search for p element with content-text class inside a 
    //section element with id = section_1
    
    var pContentElem = $("#section_1 p.content-text");
    console.log(pContentElem);
    
    //get inner HTML ~ innerHTML
    var h2Elem = $("h2");
    var h2Content = h2Elem.html();
    console.log("h2 Elem text: "+h2Content);
    
    //get attribute value
    var h2DataValue = h2Elem.attr("data-value");
    console.log(h2DataValue);
    
    //set innerHTML
    h2Elem.html("new h2 content");
    
    //set attribute
    h2Elem.attr("data-value","new data value");
 
    //add click event listener
    $("#btn").on("click", onBtnClicked)
    function onBtnClick(){
    console.log("clicked");
        
    }