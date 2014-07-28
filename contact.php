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
            
            .contact_col {
                width: 300px;
                float: left;
                margin-top:auto;
            }
            
            .address_col{
                width: 300px;
                float: left;
                margin-top:40px;
            }
            
            .map_col{
                width: 300px;
                float: left;                
                margin-top:40px;
                margin-bottom: 80px;
            }
            
            .email_col {
                width: 540px;
                margin-top:40px;
                float: right;            
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
            <div class="contact_col">
                <div class="address_col">
                    <?php
                        include './contact/contact.html';
                    ?>
                </div>
                
                <div class="map_col">
                    <?php
                        include './contact/map.html';
                    ?>
                </div>
            </div>
            <div class="email_col">
                <?php
                    include './contact/email.html';                  
                ?>             
            </div>
        </div>
            
        <?php
            include './footer.html';
        ?>
    </body>
</html>
