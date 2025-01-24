<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
         <title>Hima Koma</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="himakoma logo.ico" />
        <link rel="icon" type="image/png" href="himakoma logo.png" />
      
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           .html, body{
                
                font-family                     :'Georgia', sans-serif;
                font-weight                     : 100;
                height                          : 100vh;
                margin                          : 0;
            }

           .logo{ 
                position                        : relative;
                margin-top			            : .5%;
	            width				            : 100%;
	            height				            : 100px;
	            float				            : top;
	            background			            : white;
	            line-height			            : 50%;
            
             
            }
            .logo img{
                margin-left                     :2.5%; 
                margin-top                      :1%; 
	            float							:left;
	            width							:25%;
	            height							:75%;
                padding-right                   :5%;
                padding-left                    :1.5%;
                }
            
            .logowhat {
                margin-top                      :25px;
                background                      :#F13F51;
                padding                         :10px;
                margin-right                    :5px;
                margin-left                     :5px;   
                border                          :medium solid white;
                border-radius                   :20px;
 	            display							:inline-block;
                top                             :55px;
                width                           :100%;
                height                          :103%;
                right                           :90px;
                color                           :white;
                cursor                          :pointer;
                
            }

             .dropdown {
                right                           :5px;
                top                             :13px;
                width                           :11%;
                height                          :55%;
                position                        : relative;
                display                         : inline-block;
               
               
            }

            .dropdown-content {
                border-radius                   :35px;
                display                         : none;
                position                        : absolute;
                background-color                : #f9f9f9;
                min-width                       : 160px;
                box-shadow                      : 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index                         : 1;
            }

            .dropdown-content a {
                background                      :#F13F51;
                color                           : white;
                padding                         : 12px 16px;
                text-decoration                 : none;
                display                         : block;
                font-size                       :14px;
               
            }

            .dropdown-content a:hover {         
                background-color                : white;
                color                           :red;
            }

            .dropdown:hover .dropdown-content {
                display                          : block;
            }

            .dropdown:hover .logowhat:hover {
                background-color                :white;
                color                           :red;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                font-size                       :18px;
                border                          :3px solid #F13F51;
      
            }
            

            .btn{    
                margin-top                      :25px;
                background                      :#F13F51;
                padding                         :10px;
                margin-right                    :5px;
                margin-left                     :5px;   
                border                          :medium solid white;
                border-radius                   :20px;
 	            display							:inline-block;
                float                           :top;
                width                           :11%;
                height                          :55%;
                right                           :90px;
                color                           :white;
                cursor                          :pointer;
                
               
            }
            

            .btn a, .logowhat a{
                padding-top                     :30px;
	            text-decoration					:none;
	            color							:white;
	            padding							:20px;
            }

            .active, .btn:hover {
                background-color                :white;
                color                           :red;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                font-size                       :18px;
                border                          :3px solid #F13F51;

            }

            .btn a:hover, .logowhat a:hover{
                font-size                       :18px;
                color                           :red;
            }

           
           
             
          
            .modal {
                text-align                      :center;
                padding                         :0!important;
                
           
            }

            .modal:before {
                content                         :'';
                display                         :inline-block;
                height                          :100%;
                vertical-align                  :middle;
                margin-right                    :-4px;
            }

            .modal-dialog {
                display                         :inline-block;
                text-align                      :left;
                vertical-align                  :middle;
                width                           :40%;
                border-radius                   :25px;
                
            }

             .modal-content {
                background                      :#B7CEEC;
                height                          :60%;
             }

            .modal-header {
                background                      :#67B97F;
            } 
            
            .modal-header img{
                float                            :left;
                margin                           :.5%;
                width                            :25%;
                height                           :20%;
                border-radius                    :10px;
                border                           :medium solid #67B97F ;

            }

            .modal-header h2{
                float                              :left;
                margin                             :1%;
                margin-top                         :4%;
               text-align                          :justify;
               line-height                         :80%;
             
            
            }

           
            
            .close:hover{
                background-color                :white;
            }

            .loginmodal{
                display                     :inline-block;
                width                       :100%;
                height                      :40vh;
               
              
                float                       :top;
                margin                      :5px; 5 
            
                padding                     :10px;
            }

            .loginmodal input[type=text], select {
                width                       :100%;
                padding                     : 12px 20px;
                margin                      : 8px 0;
                display                     : inline-block;
                border                      : 1px solid #ccc;
                border-radius               : 4px;
                box-sizing                  : border-box;
            }

            .loginmodal input[type=submit] {
                width                       :40%;
                background-color            :#67B97F;
                float                       :left;
                margin-left                 :5%;
                margin-top                  :3%;
                color                       : white;
                padding                     : 14px 20px;
         
                border                      : none;
                border-radius               : 5px;
                cursor                      : pointer;
            }
          

            .loginmodal input[type=submit]:hover {
                background-color            : #45a049;
            }
            
            .modal-title {
                margin-left                 :30%;
                margin-top                  :10%;
            }

            .otherlogin{
                width                       : 40%;
                
                height                      :20%;
                float                       :left;
                margin-left                 :8%;
                margin-top                  :2%;
                color                       : white;
                padding                     : 5px;
         
            }

            .otherlogin img{
                float                       :left;
                margin-left                 :3%;
                padding                     :1px;
                width                       :30%;
                height                      :8vh;
                border-radius               :50%;
           
            }

             .otherlogin img:hover{
               cursor                       :pointer;
               
               opacity                      :0.7;
            }
          
            .modal-footer h4{
                float                       :left;
                margin-left                 :10%;
            }

            .toregister{
                float                      :left;
                margin-left                :5%;
                border-radius              :10px;
                margin-top                 :1.8%;
                background                 :#F13F51;
                border                     :2px solid white;
                color                      :white;
                cursor                     :pointer;
            }

            .toregister a{
            
	            text-decoration					:none;
	            color							:white;
	            padding							:20px;
            }
           
            .toregister:hover{
                background-color                :white;
                color                           :red;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                
                border                          :2px solid #F13F51;
            }

            .footer  {
                float                       :left;
                clear                       :left;
                
                width                       : 100%;
                background-color            : #F13F51;
                color                       : white;
                border-bottom               :3px solid #F13F51;
                border-top                  :3px solid #F13F51;
                height                      :15%;
                margin-bottom               :1%;
                margin-top                  :5%;   

                
                }

            .footercr {

                width                       :15%;
                height                      :75%;
                float                       :left;
                margin-top                  :2.5%;
                margin-left                 :0;
                margin-right                :1%;
                padding                     :5px;
                text-align                  :center;
            }

            .footercatchphrase {
            
                width                       :25%;
                height                      :75%;
                float                       :left;
                margin-top                  :1.5%;
                margin-left                 :1%;
                margin-right                :3%;
                padding                     :5px;
                text-align                  :CENTER;
            }

            .footerwhat {

                width                       :55%;
                height                      :110%;
                float                       :left;
                margin-top                  :0;
                margin-left                 :0;
                
                padding                     :3px;
                text-align                  :center;
            }

            .ftr {    
                margin-top                      :0;
                background                      :#F13F51;
                padding                         :5px;
            
                margin-left                     :15px;   
                border                          :medium solid white;
                border-radius                   :20px;
                display							:inline-block;
                float                           :left;
                width                           :17%;
                height                          :55%;
                right                           :90px;
                color                           :white;
                cursor                          :pointer;
                left                            :0%;
                
            
            }




            .ftr a{
                padding-top                     :10px;
                text-decoration					:none;
                color							:white;
                padding							:5px;
            }

            .ftr:hover{
                background-color                :white;
                color                           :red;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                
                border                          :3px solid #F13F51;

            } 
            
        </style>

    <script>
        var header = document.getElementById("MyDiv");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }
    </script>

    </head>
    
    
    <body>
        <div class ="logo">
            <img src="himakoma logo.png"> 
            
            
                <button class="btn " ><a href="welcome">Home</a></button>
                <button class="btn "><a href="hima">HIMA</a></button>
                <button class="btn "><a href="koma">KOMA</a></button>
                <button class="btn ">Admin Room</button>
         
                <div class="dropdown">
                    <button class="logowhat"><a href="about">About</a></button>
                        <div class="dropdown-content">
                            <a href="#">Terms of Service</a>
                            <a href="#">Management Policy</a>
                            <a href="#">Contact Us</a>
                            <a href="#">Blog</a>
                            <a href="#">Sponsor's Link</a>
                        </div>
                </div>
     
        
            <button class="btn loggingin" data-toggle="modal" data-target="#myModal" >Log-in</button>
        
        </div>  <!-- logo -->
        
       

        <!-- Modal -->
    <div id="myModal" class="modal zoom in" role="dialog">
        <div class="modal-dialog ">
  
    <!-- Modal content-->
    <div class="modal-content w3-animate-zoom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <img src="himakoma logo.png">
        <h2 class="modal-title">Log-in To Account</h2>
      </div> <!-- modal-header -->
      
      <div class="modal-body">
      <div class="loginmodal">
            <form action="/action_page.php">
                <label for="fname">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email ..">
                <label for="lname">Password</label>
                <input type="text" id="password" name="password" placeholder="Your password..">
                <input type="submit" value="Login">

                <div class="otherlogin">
                    <img src="fb.png"> 
                    <img src="yahoo.png"> 
                    <img src="gmail2.png"> 
                </div> <!-- otherlogin -->
              
            </form>
            </div>  <!-- loginmodal -->
              

      </div> <!-- modal-body-->
      
      <div class="modal-footer">
        <h4>Don't have an account yet?</h4>
        <button class="toregister">Register Now</button>

      </div>  <!-- modal-footer-->
    </div>  <!-- modal-content-->

  </div>  <!-- modal-dialog-->
</div>  <!-- modal-->
        
   
<div>
        @yield('content')
</div>

    <div class="footer">
                <div class="footercr">
                    <p> Copyright @2018 </p>
                </div> <!-- footercr -->
                
                <div class="footercatchphrase">
                    <p> HIMAKOMA is a matching site that connects people with people on the theme of 【Fribbler】, 【Troubled Person】. </p>
                </div> <!-- footercatchphrase -->
            
                <div class="footerwhat">
                    <p>What is HIMAKOMA ?  </p>
            
                        <button class="ftr tos">Terms of Service</button>
                        <button class="ftr mp">MGMT Policy</button>
                        <button class="ftr cu">Contact Us</button>
                        <button class="ftr b">Blog</button>
                        <button class="ftr sl">Sponsor's Link</button>
            
                   
                </div> <!-- footerwhat -->
            
            </div> <!-- footer -->
     
    </body>
</html>
