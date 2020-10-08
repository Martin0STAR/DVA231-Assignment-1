function hideContent() {
    var targetContainer = document.getElementById("FadeContainer");
    var backgroundImage = document.getElementById("AstroImage");
    var headline = document.getElementById("HeadlineCon");
    var topic = document.getElementById("TopicCon");
    targetContainer.style.display = "none";
    backgroundImage.style.display = "block";
    headline.style.display = "block";
    topic.style.display = "block";
}

function showContent() {
    var targetContainer = document.getElementById("FadeContainer");
    var backgroundImage = document.getElementById("AstroImage");
    var headline = document.getElementById("HeadlineCon");
    var topic = document.getElementById("TopicCon");
    targetContainer.style.display = "block";
    backgroundImage.style.display = "none";
    headline.style.display = "none";
    topic.style.display = "none";
}

function slideshowCycle() {
    var picture_1 = document.getElementById("slideshow1");
    var picture_2 = document.getElementById("slideshow2");
    var picture_3 = document.getElementById("slideshow3");

    if (picture_1.style.display === "block") {
        picture_1.style.display = "none"
        picture_2.style.display = "block";
    }
    else if (picture_2.style.display === "block") {
        picture_2.style.display = "none";
        picture_3.style.display = "block";
    }
    else if(picture_3.style.display === "block"){
        picture_3.style.display = "none";
        picture_1.style.display = "block";
    }
    else {
        picture_1.style.display = "block";
    }
}

function timerCycle() {

    setInterval(slideshowCycle, 30000);
}






function results (str) {
    var xmlhttp = new XMLHttpRequest();
    $var = document.getElementById("searchBar").value;
    if (str.length != 0) {
        xmlhttp.onreadystatechange = sendContent;
        xmlhttp.open('GET', 'SearchDatabase.php?value=' + $var, true);
        xmlhttp.send();
       

    }

    function sendContent () {
        try{        
            if(xmlhttp.readyState === XMLHttpRequest.DONE && xmlhttp.status === 200) {
                document.getElementById("searchPopup").innerHTML = xmlhttp.responseText; //Ändra på när allting fungerar
                //alert(xmlhttp.responseText);
            }
            else {
            //alert("Ouch");
            }
        }
        catch(e){
            alert(e.description + "fail");
        }

    }
        
}




