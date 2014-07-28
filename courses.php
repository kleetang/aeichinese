<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AEI</title>
        <style>
            @import"style.css";
            #grad {
                width: 100%;
                height: auto;              
                background:white; /* For Safari 5.1 to 6.0 */
             }
            #loc_content {
                width: 900px;
                height: 990px;
                margin: 0 auto;
            }
            #loc_content_img {
                width: 100%;
                height: auto;
                margin-top: 50px;
            }
            .left_col {
                width: 300px;
                float: left;
                margin-top:80px;
            }
            .right_col {
                width: 540px;
                height: 900px;
                margin-top:80px;
                float: right;            
            }
            #callout-nav{                
                position:absolute;
                margin-left: 25px;
                top:185px;
            }
            

           
        </style>
    </head>
    
    <body>
        <div id="grad">
            <?php
            include './header.html';
            include './nav.html';
            include './home/banner.html';         
            ?>            
        </div>
        
        <div id="loc_content">
            <div id='callout-nav'>
               <?php
               include './callout.html';
               ?>
            </div>

            
            <div class="left_col">
                <?php
                include './home/left.html';
                ?>
            </div>
            <div class="right_col">
                <?php
                    include './home/right.html';                  
                ?>             
            </div>
        </div>
        
        
       
        <?php
            include './footer.html';
        ?>
        

                 
        
    </body>
</html>
