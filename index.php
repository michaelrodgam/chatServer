<!--Model-->
<?php
    //start the session, I will use this for flash messages.
    session_start();
?>

<!--view-->
<html>
    <head>
        <!--Metadata and needed links-->
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
                <h1>Online <span class="blueText">chat</span> serveR</h1>
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
                    <!--Here is where the messages are show-->
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
                <!--At the end I will make something here-->
            </div>

        </main>

        <footer>
            <div>
                <p>
                    This is a simple server chat, without propose.<br>
                    Was made by: Michael Rodriguez Gamboa, as a simple test of js, php, apache and mysql.<br>  
                    All rights and mistakes reserved.<br> 
                    Augustus emperor's month, year XX of the XXI century a.C. (August, 2020).
                    <!--What can I say? I like read classic history. Ancient Rome was so cool.-->
                </p>
            </div>
        </footer>
        

        <script type="text/javascript">

        //here comes the jquery magic...

                let count = 0;
                console.log("script start");
                
                //functions calls
                updateMsg();
                userName();

                //this send the msg to the server and then the server store the msg into the db.
                function sendMessage(){

                }
                
                //The name of the user is set into "name placeholder"
                //for now just a rest api test... with ajax I can send text, with getJSON objects.
                function userName(){
                    $.ajax({
                        url: "./fetch.php",
                        method: "POST",
                        cache: false,
                        success: function(data){
                            $("#userName").empty();
                            $("#userName").append(data);
                        }
                    });

                }
                
                //this function update the messages in the chat
                function updateMsg(){
                    $.getJSON({
                        url: "./chatServer.php", cache: false, success: function(data){
                            //clear the space.
                            $("#data").empty();

                            //use the JSON, and append the data.
                            var messages = data;
                            for(i = 0; i < messages.length; i++){
                                $("#data").append(
                                    '<div class="bubble"><p><span class="redText">Message: </span>'+messages[i].Message+
                                    '<br><span class="redText smaller">Date: </span><span class="smaller">'+messages[i].Date+'</span></p></div>');
                            }
                            setTimeout("updateMsg()",4000);
                        }
                        
                    });
                    
                }  

        </script>

    </body>

</html>