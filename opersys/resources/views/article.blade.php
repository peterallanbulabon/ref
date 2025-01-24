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


    <!--Styles-->
        <style>
             .html, body{
                
                font-family                     :'Georgia', sans-serif;
                font-weight                     : 100;
                height                          : 100vh;
                margin                          : 0;
            }

            
            .logo{ 
                position                        :relative;
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
                padding                         : 10px 14px;
                text-decoration                 : none;
                display                         : block;
                font-size                       :12px;
               
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
            

            .btn a{
                font-size                       :1em;
                padding-top                     :30px;
	            text-decoration					:none;
	            color							:white;
	            padding							:20px;
            }

            .btn:hover{
                background-color                :white;
                color                           :red;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                font-size                       :1.5vw;
                border                          :3px solid #F13F51;

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

            .authorinfo{
                float                           :left;
                clear                           :left;
                margin-left                     :3%;
                margin-top                      :1%;
                border-radius                   :15px;
            
                background                      :#67b97f;
                width                           :35%;
                height                          :50%;
            }
            
            .authorinfoheader{
                float                           :top;
                height                          :15%;
                background                      :#67b97f;
                text-align                      :center;
                padding                         :1%;
                border-bottom                   :medium solid white;  
                color                           :white;
                border-top-left-radius          :15px;
                border-top-right-radius         :15px;                 

            }

            .authorinfoheader h4{
               font-stretch                :ultra-expanded;
               font-family                 :"Comic Sans MS", "sans-serif";
               font-size-adjust            :5;
               font-weight                 :bold;
               letter-spacing              :5px;
               
             
            }
            .userimage{
                
                width                       :35%;
                height                      :60%;
                float                       :left;
                margin-top                  :1%;
                text-align                  :center;
                line-height                 :10%;

            }

            .userimage img{
                border-radius               :50%;
                width                       :60%;
                height                      :65%;
                float                       :top;
                
                padding                     :1.5%;
            }
            
            .participantlist{
            
                width							:35%;
                height							:20%;
                float                           :left;
                clear                           :left;
            }


            .participant1img{
                margin-left                     :5%;
                width							:20%;
                height							:50%;
                float                           :left;
                border                          :none;
                clear                            :left;
                margin-top                       :3%;
            }

            .specificno{
                float                           :left;
                margin-left                     :6%;
                margin-top                      :5%;
                clear                           :top;
            }

            .date{
                float                           :right;
                margin-right                     :5%;
                margin-top                      :5%;
                font-style                      :italic;
                
            }

            .genre1{
            
                width							:32%;
                height							:30%;
                float                           :left;
                margin-top                      :1%;
                margin-right                    :1%;
                
                
            }

            .labelgenre{
                float                           :left;
                margin-left                     :15%;

            
                

            }

            .genre1img{
                margin-left                     :10%;
                width							:30%;
                height							:45%;
                float                           :left;
                border                          :none;
                clear                           :left;
            }

            .specificgenre{
                float                           :left;
                margin-left                     :7%;
                margin-top                      :5%;
                
                

            }

            .area1{
              
                width							:32%;
                height							:30%;
                float                           :right;
                margin-top                      :1%;
          
              
            }

            .labelarea{
                float                           :left;
                margin-left                     :15%;
                
                

            }

            .area1img{
                margin-left                     :10%;
                width							:30%;
                height							:45%;
                float                           :left;
                border                          :none;
                clear                           :left;
            }

            .specificarea{
                float                           :left;
                margin-left                     :5%;
                margin-top                      :5%;
                
            }

            .title1{
                
                width							:65%;
                height							:30%;
                float                           :left;
                overflow                        :auto;
                top                             :290px;
                overflow                        :hidden;
            }
            
            .labelcontent{
                float                           :left;
                margin-left                     :5%;
            }

            .title1img{
                margin-left                     :5%;
                width							:13%;
                height							:55%;
                float                           :left;
                border                          :none;
                clear                           :left;
              
            }

            .specifictitle{
                float                           :left;
                margin-left                     :1%;

            }
            
            .articleinfo{
                float                           :left;
               
              
                clear                           :left;
                margin-left                     :3%;
                margin-top                      :1%;
               
                border-radius                   :15px;
                background                      :#67b97f;
                width                           :35%;
                height                          :50%;
            }

            .articletitle{
                float                           :left;
                width                           :70%;
                border-bottom                   :medium solid white;
                border-right                    :medium solid white;
                height                          :30%;
                color                           :white;
                border-top-left-radius          :15px;
                padding                         :5% 1%;
                text-align                      :center;

            }

            .articletitle h2{
               font-stretch                :ultra-expanded;
               font-family                 :"Comic Sans MS", "sans-serif";
               font-size-adjust            :5;
               font-weight                 :bold;
               letter-spacing              :5px;
              
            }

           

            .participantno{
                float                           :left;
                width                           :30%;
                height                          :30%;
                color                           :white;
                border-top-left-radius          :15px;
                padding                         :5% 1%;
                text-align                      :center;
                border-bottom                   :medium solid white;
        
            }
            
            .participantno img{
                float                           :top;
                width                           :40%;
                height                          :60%;
               

            }

            .participantno h5{
                float                           :top;
                clear                           :top;
                font-stretch                    :ultra-expanded;
                font-family                     :"Comic Sans MS", "sans-serif";
                font-size-adjust                :5;
                font-weight                     :bold;
                letter-spacing                  :5px;

            }

            .postcontent{
                float                           :left;
                clear                           :left;
                margin                          :none;
                width                           :100%;
                height                          :70%;
                padding                         :10% 2%;
                text-align                      :center;
                color                           :white;
            }

            .postcontent h2{
                
                font-stretch                    :ultra-expanded;
                font-family                     :"Comic Sans MS", "sans-serif";
                font-size-adjust                :5;
                font-weight                     :bold;
                letter-spacing                  :5px;
            }
            .chatroom{
                float                           :right;
                height                          :100%;
                margin-top                      :1%;
                width                           :55%;
                background                      :#67b97f;
                margin-right                    :3%;
                border-radius                   :15px;
                margin-left                     :3%;
            }

            .chatheader{
                float                           :top;
                height                          :10%;
                padding                         :1%;
                border-top-left-radius          :15px;
                border-top-right-radius         :15px;
                color                           :white;
                border-bottom                   :medium solid white;

                
            }

            .chatheader h4{
                float                           :left;
                margin-left                     :1%;
                margin-top                      :1%;
                font-stretch                    :ultra-expanded;
                font-family                     :"Comic Sans MS", "sans-serif";
                font-size-adjust                :5;
                font-weight                     :bold;
                letter-spacing                  :5px;
            }
            .chatheader h2{
                float                           :right;
                margin-right                    :4%;
                margin-top                      :1%;
                font-stretch                    :ultra-expanded;
                font-family                     :"Comic Sans MS", "sans-serif";
                font-size-adjust                :5;
                font-weight                     :bold;
                letter-spacing                  :5px;
            }
            .chatheader img{
                float                           :left;
                height                          :80%;
                width                           :5%;
                margin-left                     :1%;
                margin-right                    :1%;
                margin-top                      :1%;
            }

        
           
        </style>
    </head>
    <body>

        <div class ="logo">
            <img src="himakoma logo.png"> 
            
            <button class="btn logohome">Home</button>
            <button class="btn logohima">HIMA</button>
            <button class="btn logokoma">KOMA</button>
            <button class="btn logoadmin">Admin Room</button>
            <div class="dropdown">
                <button class="logowhat">About</button>
                <div class="dropdown-content">
                    <a href="#">Terms of Service</a>
                    <a href="#">Management Policy</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Blog</a>
                    <a href="#">Sponsor's Link</a>
                </div>
            </div>
            <button class="btn logoout">Log-in</button>
        </div>  <!-- logo --> 


        <div class="authorinfo w3-card-4">
            <header class ="authorinfoheader">
                <h4> Author Information</h4>
            </header>

           
         

          
        </div> 

        <div class="chatroom w3-card-4">
            <header class="chatheader ">
                <img src="chat.png">
                <h4>Chat Room Name<h4>
                <h2>Welcome!</h2>
            </header>

        </div>

        <div class=" articleinfo w3-card-4">
            <header class="articletitle">
                <h2> Article Title</h2>
            </header>

            <div class="participantno">
                <img src="participants.png">
                <h5>5/10 </h5>
            </div>

            <div class="postcontent">
                <h2> Post Content </h2>
            </div>
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