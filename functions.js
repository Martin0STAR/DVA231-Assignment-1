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

