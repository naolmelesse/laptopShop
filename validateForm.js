function validator(){
    let fname = document.forms["registration-form"]["fname"].value;
    let lname = document.forms["registration-form"]["lname"].value;
    let email = document.forms["registration-form"]["email"].value;
    let password = document.forms["registration-form"]["password"].value;
    let phone = document.forms["registration-form"]["phone"].value;
    let city = document.forms["registration-form"]["city"].value;

    console.log("Here")
    if(fname.length == "" || lname.length == "" || email.length == "" || password.length =="" || phone.length == "" || city.length == "")
        alert("Please, provide all details.")
    if(password.length < 8)
        alert("Password must be equal or greater than 8 characters.")
    if(phone.length < 10 || phone.length > 10)
        alert("Please, enter 10 digit phone number.")

}