function register(){
    var name = document.getElementById("registerName").value;
    var mail = document.getElementById("registerMail").value;
    var password = document.getElementById("registerPassword").value;
    var role = document.getElementById("role").value;
    var etat = document.getElementById("etat").value;
    var ID = document.getElementById("hiddenID").value;

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

    xhr.open("POST", "models/updateUsers.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("name="+name+"&mail="+mail+"&password="+password+"&role="+role+"&etat="+etat+"&ID="+ID);
}

function reload(){
    window.location.href="http://localhost:63342/projetFinal/index.php?action=admin";
}

document.getElementById("registerSubmit").addEventListener("click", function () {
    register();
});