function formValidation()  
{  
var uid = document.registration.userid;  
var passid = document.registration.passid; 
var uname = document.registration.username;  
var uadd = document.registration.address;  
var ucountry = document.registration.country;  
var uzip = document.registration.zip;
var ucontact = document.registration.contact;
var uemail = document.registration.email;  
var umsex = document.registration.msex;  
var ufsex = document.registration.fsex;
 if(userid_validation(uid,5,12))  
{  
if(checkPassword(passid)) 
{  
if(allLetter(uname))  
{  
if(alphanumeric(uadd))  
{   
if(countryselect(ucountry))  
{  
if(allnumeric(uzip))  
{  
if(allnumericx(ucontact))  
{  
if(ValidateEmail(uemail))  
{  
if(validsex(umsex,ufsex))  
{  
}  
}  
}  
}   
}  
}  
}  
} 
} 
return false;  
  
}
 function userid_validation(uid,mx,my)  
{  
var uid_len = uid.value.length;  
if (uid_len == 0 || uid_len >= my || uid_len < mx)  
{  
alert("User Id should not be empty / length be between "+mx+" to "+my);  
uid.focus();  
return false;  
}  
return true;  
}  

function checkPassword(passid)   
{   
var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;  
if(passid.value.match(paswd))   
{   
//alert('Correct')  
return true;  
}  
else  
{   
alert('Password should contain 7 to 15 characters including at least one numeric and one special character.')  
return false;  
}  
}    


function allLetter(uname)  
{   
var letters = /^[A-Za-z]+$/;  
if(uname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Username must have alphabet characters only');  
uname.focus();  
return false;  
}  
}  
function alphanumeric(uadd)  
{   

if(uadd.value == "")
{
alert("addre cant be empty");
return false;
}
return true;
}

function countryselect(ucountry)  
{  
if(ucountry.value == "Default")  
{  
alert('Select your country from the list');  
ucountry.focus();  
return false;  
}  
else  
{  
return true;  
}  
}  
function allnumeric(uzip)  
{   
var numbers = /^[0-9]+$/;  
if(uzip.value.match(numbers))  
{  
return true;  
}  
else  
{  
alert('ZIP code must have numeric characters only');  
uzip.focus();  
return false;  
}  
}  
function allnumericx(ucontact)  
{     
if(isNaN(ucontact.value))
{
alert('contact should be numeric');
return false;
}
return true;
} 

function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}  
} 