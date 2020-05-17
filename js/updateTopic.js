function updateTopic(){
    var ID = document.getElementById("hiddenID").value;
    var newTitle = document.getElementById("newTitle").value;

    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var result = JSON.parse(this.responseText);
        if (result.length > 1){
            var updateResults = document.getElementById("updateResults");
            updateResults.className = "failure";
            updateResults.innerHTML = result[0];
            for (i=1; i<result.length;i++){
                var li = document.createElement("li");
                li.innerHTML = result[i];
                updateResults.appendChild(li)
            }
        } else {
            document.getElementById("updateResults").className = "success";
            document.getElementById("updateResults").innerHTML = result[0];
            setTimeout(reload, 2000);
        }
    };

    xhr.open("POST", "models/updateTopic.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("ID="+ID+"&name="+newTitle);
}

function reload(){
    window.location.href="http://localhost:63342/projetFinal/index.php?action=topicsList";
}

document.getElementById("updateTopic").addEventListener("click", function () {
    updateTopic();
});