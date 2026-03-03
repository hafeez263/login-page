const signUpButton=document.getElementById('signUpButton')
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signup-form-container');
const signUpform=document.getElementById('login-form-container');

signUpButton.addEventListener('click',function(){
   signInForm.style.display="none";
   signUpform.style.display="block";
})   
signInButton.addEventListener('click', function(){
    signUpform.style.display="none";
    signInForm.style.display="block";
}) 