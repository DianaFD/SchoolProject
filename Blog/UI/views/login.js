/*global $*/
/* global Users*/
/*global validInputs*/

$(document).ready(onHtmlLoaded);


var emailText;
var passwordText;
var invalidCredentials;

function onHtmlLoaded() {
    var loginBtn = $("#login_btn");
    var loginModel;
    loginBtn.on("click", function(ev) {
        ev.preventDefault();
        var emailValue = $("[name='user_email']").val();
        var passValue =$("[name='user_password']").val();
        
        loginModel = new Login({
            email: emailValue,
            pass: passValue
        });
        var loginReq = loginModel.signIn();
        loginReq.done(redirectUserToArticlesPage)
    });
    function redirectUserToArticlesPage() {
        if (loginModel.isLogged) {
            window.location.href = "https://web9-didisuperapple.c9users.io/blog/UI/pages/articles.html";
        } else {
            alert("Login failed");
        }
    }
}

// $(document).ready(onHtmlLoaded);

// var emailText;
// var passwordText;
// var invalidCredentials;

// function onHtmlLoaded(){
    
//     var submitBtn = $('button[type="submit"]');
    
//     submitBtn.on('click',function(event){
//         event.preventDefault();
//         if(validInputs()){
//             console.log("Authenticating...");
//             var user = new Users();
//             user.login(emailText,passwordText).done(function(response){
//                 if(response.isLogged === true){
//                       invalidCredentials.html("*");
//                      window.location.href = '/UI/pages/login.html';
//                 }else{
//                       invalidCredentials.html("*"+response.error);
//                 }
//             });
//         }
        
//     });
    
}//END onHtmlLoaded

// function validInputs(){
   
//     invalidCredentials = $('.invalidCredentials');
   
//     emailText = $("input[name='email-value']").val();
//     passwordText = $("input[name='password']").val(); 
    
//     if(emailText.trim().length === 0){
//         invalidCredentials .html("*Email cannot be empty");
//         return false;
//     }else if(!isValidEmail(emailText)){
//       invalidCredentials .html("*Email is not a valid email address");
//         return false;
//     }else{
//       invalidCredentials .html("*");
//     }
//     if(passwordText.trim().length === 0){
//         invalidCredentials .html("*Password cannot be empty");
//         return  false;
//     }else if(passwordText.length < 6){
//           invalidCredentials .html("* Password too short (minimum 6 characters)");
//           return  false;
//     }else{
//           invalidCredentials .html("*"); 
//     }
//     return true; 
// }
// //Validate user email
//     function isValidEmail(email){
            
//         const regEx =/^[a-z]{1}(?!.*(\.\.|\.@))[a-z0-9!#$%&*+/=?_{|}~.-]{0,63}@(?=.{0,253}$)([a-z0-9]\.|[a-z0-9][a-z0-9-]{0,63}[a-z0-9]\.)+[a-z0-9]{1,63}$/gmi;
//         return email.match(regEx);
//     }