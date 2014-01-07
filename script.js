$(function(){

 var form = $('#regform');
 
 var username = form.find('input[name="username"]');
 var email = form.find('input[name="email"]');
 var password = form.find('input[name="password"]');
 var cpassword = form.find('input[name="cpassword"]');
 
 
 form.submit(function(e){
 
 if(!username.val()){
	e.preventDefault();
	username.css('border-color','red');
 } 
  if(!email.val()){
	e.preventDefault();
	email.css('border-color','red');
 } 
  if(!password.val()){
	e.preventDefault();
	password.css('border-color','red');
 } 
  if(!cpassword.val()){
	e.preventDefault();
	cpassword.css('border-color','red');
 } 
 
 if(password.val() !== cpassword.val()){

    alert('Password doesnt match!');
	password.css('border-color','red') 
	cpassword.css('border-color','red');
	e.preventDefault();
 } 

 });


});