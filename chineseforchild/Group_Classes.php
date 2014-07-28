<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Group_Classes</title>
        <style>
            html,
            body {
                margin:0;
                padding:0;
                height:100%;
            }
            @import"style.css";          
            #wrapper {
                min-height:100%;
                position:relative;
            }
            #head {
                width: 100%;
                height: auto;              
                background:white; /* For Safari 5.1 to 6.0 */
            }
            #loc_content {
                width: 900px;
                height: auto;
                //background: white;
                margin-left: auto;
                margin-right: auto;
            }
            .why_col {
                width: 540px;
                margin-top:40px;
                float: left;            
            }
            .pic_col {
                width: 300px;
                float: right;
                margin-top:40px;
                margin-right: 10px;
                margin-left: 10px;
                position: relative;
                right: 10px;
                overflow: hidden;    
            }
            #footer {
                width:100%;
                position:absolute;
                bottom:0;
                left:0;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="head">
                <?php
                include './header.html';
                include './nav.html';                 
                ?>
            </div>
            <div id="loc_content">
                <div class="why_col">
                    <?php
                        include './Group_Classes.html';
                    ?>
                </div>
                <div class="pic_col">
                    <img src='img/book.jpg'/>             
                </div>
                </div>
            <div>
            <div id="footer">
                <?php
                    include './footer.html';
                ?>
            </div>
        </div>
    </body>
</html>

