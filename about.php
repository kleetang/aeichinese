<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            @import"style.css";
            #head {
                width: 100%;
                height: auto;              
                background:white; /* For Safari 5.1 to 6.0 */
            }
            #loc_content {
                
                width: 900px;
                height: auto;
                background: white;
                margin-left: auto;
                margin-right: auto;
            }
            .about_col {
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
        </style>
    </head>
    <body>
        <div id="head">
            <?php
            include './header.html';
            include './nav.html';                 
            ?>
        </div>
        <div id="loc_content">
            <div class="about_col">
                <?php
                    include './about/aboutus.html';
                ?>
            </div>
            <div class="pic_col">
                <img src='img/book.jpg'/>             
            </div>
        </div>
        <div>
            <?php
                include './footer.html';
            ?>
        </div>
    </body>
</html>

