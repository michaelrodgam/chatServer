<!--Model-->
<?php
session_start();
?>

<!--view-->
<html>
    <head>
        <meta charset="uft-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles.css" media="screen" rel="stylesheet" type="text/css"></link>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="icon" href="./icon.png" type = "image/x-icon">
        <title>ChatServer</title>
    </head>
    
    <body>
        <header>
            <div>
                <h1>Chat Server</h1>
            </div>
        </header>

        <nav>
            <div>
                <ul>
                    <li>Live Chat</li>
                    <li>How was made?</li>
                    <li class="top">Top</li>
                </ul>
            </div>
        </nav>

        <main>
            <div id="user">
                <h3 id="userName">Name placeholder</h3>
            </div>
            <div id="liveChat">
                <h3>Log file</h3>
                
                <div id="data">
                    
                </div>

                <form>

                    <div>
                        <input id="chat" type="text" size="60" placeholder="Write a new message">
                    </div>

                    <div>
                        <input type="submit" value="Send">
                        <input id="clearChat" type="button" value= "Clear">
                    </div>

                </form>
            </div>
            
            <div id="how">
                <h3>Learn how to make your own chat server</h3>
            </div>

        </main>

        <footer>
            <div>
                <p>
                    This is a simple server chat, without propose.<br>
                    Was made by: Michael Rodriguez Gamboa, as a simple test of js, php, apache and mysql.<br>  
                    All rights and mistakes reserved.<br> 
                    Augustus emperor's month, year XX of the XXI century a.C. (August, 2020).
                </p>
            </div>
        </footer>
        

        <script type="text/javascript">
            //here comes the jquery magic...
            console.log("script start");
            /*$(document).ready(function(){

            });*/
            
            function updateMsg(){
                $.getJSON({
                    url: "./chatServer.php", cache: false, success: function(data){
                        $("#data").append("<p>"+data[1].Name+"</p>");
                        setTimeout("updateMsg()",4000);
                    }
                    
                });
                
            }

            //update after timeout
            console.log("updateMsg timeout completed");
            updateMsg();

        </script>

    </body>

</html>