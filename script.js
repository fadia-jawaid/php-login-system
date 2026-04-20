

document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {

        let user = document.querySelector("input[name='user']").value.trim();
        let pass = document.querySelector("input[name='password']").value.trim();

        let msgBox = document.querySelector(".message");

     
        msgBox.innerText = "";
        msgBox.style.color = "red";

   
        if (user === "" || pass === "") {
            e.preventDefault();
            msgBox.innerText = "Please fill all fields!";
            return;
        }

        if (pass.length < 4) {
            e.preventDefault();
            msgBox.innerText = "Password must be at least 4 characters!";
            return;
        }

   
        msgBox.style.color = "green";
        msgBox.innerText = "Checking credentials...";
    });

});