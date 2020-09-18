<?php session_start();?>

<!DOCTYPE html>
    <head>
        <link href="index.css" rel="stylesheet">
        <script src="functions.js"></script>
        <title>Nasa Unofficial Site</title>
            <?php
                require 'loadJson.php';
                $var = load();
            ?>
    </head>
    <body onload="timerCycle()">
            <table id="upperNavbar">
                <tr>
                    <td class="NavBtnTop"> <a href = "http://www.google.com" class="NavLinks" > Missions </a> </td>
                    <td class="NavBtnTop"> <a href = "http://www.google.com" class="NavLinks" > Galleries </a> </td>
                    <td class="NavBtnTop"> <a href = "http://www.google.com" class="NavLinks" > NASA TV </a> </td>
                    <td class="NavBtnTop"> <a href = "http://www.google.com" class="NavLinks" > Follow NASA </a> </td>
                    <td class="NavBtnTop"> <a href = "http://www.google.com" class="NavLinks" > Downloads </a> </td>
                    <td class="NavBtnTop"> <a href = "http://www.google.com" class="NavLinks" > About </a> </td>
                    <td class="NavBtnTop"> <a href = "http://www.google.com" class="NavLinks" > NASA Audiences </a> </td>
                    <td class="NavBtnTop"> <a href = "login.php" class="NavLinks" > Admin </a> </td>
                    <td><input id="searchBar" type="text" placeholder="Search"></td>
                </tr>
            </table>
            <table id="lowerNavbar">
                <tr>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" > Humans in Space </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" > Moons to Mars </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" > Earth </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" > Tech </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" >  Flight </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" >  Solar System and Beyond </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" > STEM Engagement </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" >  History </a> </td>
                    <td class="NavBtn"> <a href = "http://www.google.com" class="NavLinks" > Benefits to You </a> </td>
                </tr>
            </table>
            <div id="outer-container"> 
                <div class="grid-container">
                    <div class="WidePictureContainer item1">
                        <div id="slideshow1">
                            <span class="WideTopicContainer"><p class="solidText">Space Station</p> </span>
                            <span class="WideHeadlineContainer"> <p class="solidText">Expedition 48 Crews Lands Safely on Earth</p> </span>
                            <img class="imageWide" src="images/planet.jpg">
                        </div>
        
                        <div id="slideshow2">
                            <span class="WideTopicContainer"><p class="solidText">Moon to Mars</p> </span>
                            <span class="WideHeadlineContainer"> <p class="solidText">NASA Enlists Commercial Partners to Fly Payloads to Moon
                            </p> </span>
                            <img class="imageWide" src="images/galaxy2.jpg">
                        </div>
        
                        <div id="slideshow3">
                            <span class="WideTopicContainer"><p class="solidText">Hazards</p> </span>
                            <span class="WideHeadlineContainer"> <p class="solidText">NOAA-NASA Suomi NPP Captures Fires and Aerosols Across America
                            </p> </span>
                            <img class="imageWide" src="images/galaxy3.jpg">
                        </div>
                    </div>
                    <div class="InformationContainer item2">
                        <a>NASA Events</a>
                        <hr>
                        <p class><?php printf ($var[0]["title"]); ?></p>
                            <a> <?php printf ($var[0]["content"]); ?> </a>
                        

                        <hr id="topInfoboxSeparator">
                        <table id="InfoFooterTable"> 
                            <tr>    
                                <td><a class="NavLinks" href="http://www.google.com">Calendar </a> </td>
                                <td id="InfoFooterSpacing"><a class="NavLinks" href="http://www.google.com">Launches and Landings</a> </td>
                            </tr> 
                        </table>
                    </div>
                    <div class="SmallPictureContainer item3" >
                        <div id="FadeContainer" >
                            <p> <?php printf($var[1]["title"]) ?> </p>
                            <p> <?php printf($var[1]["content"]) ?> </p>
                            
                        </div>
                        <span class="SmallTopicContainer" id="TopicCon"><p style="font-size:0.8em;" class="solidText"> <?php printf($var[1]["title"]) ?> </p></span>
                        <span class="SmallHeadlineContainer" id="HeadlineCon" onmouseover="showContent(this)" onmouseout="hideContent(this)" ><p class="solidText" style="font-size:0.6em" onmouseover="showContent(this)" onmouseout="hideContent(this)"><?php printf($var[1]["content"]) ?></p> </span>
                        <img class="imageSmall" id="AstroImage" src= <?php printf($var[1]["imgurl"]) ?>  >
                        
                    </div>
                    <div class="MediumInformationContainer item4">
                        <div class="SmallPictureContainer">
                            <image class="imageSmall" src=<?php printf($var[2]["imgurl"]) ?>></image>
                            
                        </div>
                        <div class="triangle-left"></div>
                        <div class="InformationContainer" id="InformationWideBox"> 
                            <h1><?php printf($var[2]["title"]) ?></h1>
                            <p class="TextBlackLeft"> <?php printf($var[2]["content"]) ?></p>
                            <br>
                            <a href="http://www.google.com" class="NavLinksBlack" > Link 1 </a>
                            <br>
                            <a href="http://www.google.com" class="NavLinksBlack"> Link 2 </a>
                            <br>
                            <a href="http://www.google.com" class="NavLinksBlack"> Link 3 </a>
                            <br>
                        </div>
                    </div>
                    <div class="SmallPictureContainer item5" >
                        <video controls> <source src="videos/mov_bbb.mp4" type="video/mp4"> </video>
                    </div>
                    <div class="MediumInformationContainer item6">
                        <img class="imageMedium" src="images/galaxy.jpg">
                    </div>
                    <div class="SmallPictureContainer item7">
                        <a class="twitter-timeline" data-width="27em" data-height="27em" data-theme="dark" href="https://twitter.com/NASA?ref_src=twsrc%5Etfw">Tweets by NASA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>

    </body>
</html>