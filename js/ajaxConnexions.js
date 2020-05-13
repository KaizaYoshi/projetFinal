function register(){
    var name = document.getElementById("registerName").value;
    var mail = document.getElementById("registerMail").value;
    var password = document.getElementById("registerPassword").value;

    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var result = JSON.parse(this.responseText);
        if (result.length > 1){
            var registerResults = document.getElementById("registerResults");
            registerResults.className = "failure";
            registerResults.innerHTML = result[0];
            for (i=1; i<result.length;i++){
                var li = document.createElement("li");
                li.innerHTML = result[i];
                registerResults.appendChild(li)
            }
        } else {
            document.getElementById("registerResults").className = "success";
            document.getElementById("registerResults").innerHTML = result[0];
            setTimeout(reload, 2000);
        }
    };

    xhr.open("POST", "models/register.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("name="+name+"&mail="+mail+"&password="+password);
}

function login(){
    var name = document.getElementById("loginName").value;
    var password = document.getElementById("loginPassword").value;

    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var result = JSON.parse(this.responseText);
        if (result.length > 1){
            var loginResults = document.getElementById("loginResults");
            loginResults.className = "failure";
            loginResults.innerHTML = result[0];
            for (i=1; i<result.length;i++){
                var li = document.createElement("li");
                li.innerHTML = result[i];
                loginResults.appendChild(li)
            }
        } else {
            document.getElementById("loginResults").className = "success";
            document.getElementById("loginResults").innerHTML = result[0];
            setTimeout(reload, 2000);
        }
    };

    xhr.open("POST", "models/login.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("name="+name+"&password="+password);
}

document.getElementById('registerSubmit').addEventListener("click", function () {
    register();
});

document.getElementById('loginSubmit').addEventListener("click", function () {
    login();
});



function reload (){
    window.location.href="http://localhost:63342/projetFinal/index.php";
}

