const $ = (selector) => document.querySelector(selector);

document.addEventListener("DOMContentLoaded", function () {
  // variable declaration
  const name = $("#name");
  const email = $("#email");
  const password = $("#password");
  const confirmedPassword = $("#password2");
  let flag = false;

  // function which will validate the data
  const validation = () => {
    // getting values from the inputs
    let nameVal = name.value;
    let emailVal = email.value;
    let passwordVal = password.value;
    let confirmedPasswordVal = confirmedPassword.value;
    const emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/; //email pattern to check the entered email's pattern

    // name validation
    if (nameVal == "") {
      name.nextElementSibling.classList.add("error");
      name.classList.add("error");
      name.nextElementSibling.innerHTML = "Enter Your Name";
      flag = false;
    } else {
      flag = true;
      name.classList.add("success");
    }

    // email validation
    if (emailVal == "") {
      email.nextElementSibling.classList.add("error");
      email.classList.add("error");
      email.nextElementSibling.innerHTML = "Enter Your email";
      flag = false;
    } else if (!emailVal.match(emailPattern)) {
      // match function will match it.
      email.nextElementSibling.classList.add("error");
      email.classList.add("error");
      email.nextElementSibling.innerHTML = "Enter correct email address";
      flag = false;
    } else {
      email.classList.add("success");
      flag = true;
    }

    // password validation
    if (passwordVal == "") {
      password.nextElementSibling.classList.add("error");
      password.classList.add("error");
      password.nextElementSibling.innerHTML = "Enter Your password";
      flag = false;
    } else {
      password.classList.add("success");
      flag = true;
    }

    // confirm password validation
    if (confirmedPasswordVal == "") {
      confirmedPassword.nextElementSibling.classList.add("error");
      confirmedPassword.classList.add("error");
      confirmedPassword.nextElementSibling.innerHTML =
        "Password confirmation is Required";
      flag = false;
    } else if (confirmedPasswordVal != passwordVal) {
      confirmedPassword.nextElementSibling.classList.add("error");
      confirmedPassword.classList.add("error");
      confirmedPassword.nextElementSibling.innerHTML = "Password Not Matched";
      flag = false;
    } else {
      confirmedPassword.classList.add("success");
      flag = true;
    }
  };

  const removeError = () => {
    // remove all the error named class from all the inputs
    document.querySelectorAll("input").forEach((item, i) => {
      item.classList.remove("error");
    });
    // remove all the error named class from all the inputs
    document.querySelectorAll("small").forEach((item, i) => {
      item.classList.remove("error");
    });
  };
  // on click of submit this eventlistener will work.
  $(".submit").addEventListener("click", function (e) {
    e.preventDefault();
    removeError();
    validation();
    // if all inputs are correct then this will run
    if(flag){
      $('.thank').textContent = "Thank you so much contacting us." // show thank you message
      
      //clear all the entered data 
      $("#name").value = ""; 
      $("#email").value = ""; 
      $("#password").value = ""; 
      $("#password2").value = ""; 

      // remove all success classes
      document.querySelectorAll("input").forEach((item, i) => {
        item.classList.remove("success");
      });

      // remove thankyou txt after 2 seconds
      setTimeout(function(){
        $('.thank').textContent = "";
      },2000);
    }
  });
});
