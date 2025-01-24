@extends('layouts.headerfooter')

@section('content')

<style>
            
            .userinfo{
                background                      :#67B97F;
                display                         :inline-block;
                width                           :25%;
                height                          :100%;
               
                border-radius                   :25px;
                float                           :left;
                margin-left                     :1.5%;
                margin-top                      :1%;   
                line-height                     :80%;
               
            }

            .userinfo img{
                margin-top                      :5%;
                border-radius                   :50%;
                border                          :1px solid black;
                width							:30%;
	            height							:15%;
                float                           :left;
                margin-left                     :5%;

            }

            .userinfo img:hover{
                opacity                         :0.6;
                cursor                          :pointer;

            }

            .details{
                float                           :left;
                display                         :inline-block;
                text-align                      :left;
                width                           :50%;
                height                          :15%;
           
                margin-left                      :4%;
                margin-top                       :5%;                 
            }
            .details h3{
               
                letter-spacing                  :3px;      
            }

            .details h4{
                letter-spacing                  :3px;      
            }   
           
           

            .button1 {
                background-color                :white;
                border                          :medium solid black;
                border-radius                   :12px;
                color                           :black;
                padding                         :8px 16px;
                text-align                      :center;
                text-decoration                 :none;
                display                         :inline-block;
                font-size                       :100%;
                margin-left                     :10%;
                margin-top                      :5%;
              
               
                cursor                          :pointer;
                width                           :80%;
                clear                           :left;
                float                           :left;           
            }
            .button1:hover {
                background-color                :#67B97F;
                color                           :white;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                font-size                       :140%;
            }
            .button2{
                background-color                :white;
                border                          :medium solid black;
                border-radius                   :12px;
                color                           :black;
                padding                         :8px 16px;
                text-align                      :center;
                text-decoration                 :none;
                display                         :inline-block;
                font-size                       :100%;
                margin-left                     :10%;
                margin-top                      :3%;
               
                cursor                          :pointer;
               
                width                           :80%;
               
                float                           :left;
                clear                           :left;           
            }
            .button2:hover {
                background-color                :#67B97F;
                color                           :white;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                font-size                       :140%;
            }               

            .reginfo{
                display                         :inline-block;
                width                           :100%;
                height                          :60%;
                
                background                      :none;
                float                           :top;
                margin-top                      :5%;
        
              
            }

            .info{
                width                           :100%;
                float                           :left;
                height                          :7vh;
      
                display                         :inline-block;                 
            }

           

           .info label{
                display                         :inline-block;
                width                           :25%;
                text-align                      :right;
               
                font-size                       :80%;
                padding                         :3%;
                float                           :left;
              
               
                            
           }
            
            .info input[type=text]{

                float                           :left;
                width                           :73%;
                padding                         :3%;
                font-size                       :80%;
                margin-right                    :1%;
                border                          :1px solid #67B97F;
    
               
               
                text-align                      :left;
                background                      :none;
                color                           :white;
            }
            
            .reginfo input[type=submit] {
                
                
                float                       :left;
                clear                       :left;
                width                       :40%;
                background-color            :#ffffff;
                color                       :black;
                padding                     :3%;
                margin-left                 :25%;
                margin-top                  :1%;
                margin-bottom               :3%;
                border                      :none;
                border-radius               :4px;
                cursor                      :not-allowed;
                opacity                     :0.5;
                
            }

            .optional{

                background                      :#67B97F;
                display                         :inline-block;
                width                           :25%;
                height                          :32%;

                border-radius                   :25px;

                float                           :left;
                clear                           :left;
                margin                          :10px;   
                position                        :absolute;
                padding                         :30px;
                top                             :800px;
                line-height                     :80%;
                padding-left                    :5px;
                padding-top                     :5px;

            }

             .posts{
                display                         :inline-block;
                width                           :25%;
                height                          :60%;
                border                          :medium solid white;
                border-radius                   :25px;
                background                      :white;
                float                           :right;
                margin                          :10px;   
                position                        :absolute;
                padding                         :30px;
                top                             :140px;
                left                            :510px;
            }

            .participated{
                display                         :inline-block;
                width                           :25%;
                height                          :60%;
                border                          :medium solid white;
                border-radius                   :25px;
                background                      :white;
                float                           :right;
                margin                          :10px;   
                position                        :absolute;
                padding                         :30px;
                top                             :140px;
                left                            :1020px;
            }

           
         
           .postlist{
                background-color                :#2BA1F3;
                border                          :none;
                border-bottom                   :3px solid red;
                border-top                      :3px solid red;
                
                color                           :black;
                padding                         :16px 32px;
                text-align                      :center;
                text-decoration                 :none;
                display                         :inline-block;
                font-size                       :20px;
            
                -webkit-transition-duration     :0.3s; 
                transition-duration             :0.3s;
                float                           :left;
                
         
                position                        :relative;
                top                             :0px;
                width                           :121%;
                left                            :-10.5%;
               
               
                  
                      
           }
           
           .participatedlist{
               
                background-color                :#2BA1F3;
                border                          :none;
                border-bottom                   :3px solid red;
                border-top                      :3px solid red;
                color                           :black;
                padding                         :16px 32px;
                text-align                      :center;
                text-decoration                 :none;
                display                         :inline-block;
                font-size                       :20px;
            
                -webkit-transition-duration     :0.3s; 
                transition-duration             :0.3s;
                float                           :left;
                
             
                position                        :relative;
                top                             :0px;
                width                           :121%;
                left                            :-10.5%;
                         
           }
            
            .posts table {
                border-collapse                 :collapse;
                
                width                           :100%;
            }

            .posts th{
                padding                         :25px;
               
                padding                         :8px;
                text-align                      :center;
                border-bottom                   :5px solid black;
                border-top                      :5px solid black;
                cursor                          :pointer;
            }

            .posts tr:hover {
                background-color                :#67B97F;
            }
                        
            .participated table {
                border-collapse                 :collapse;
               
                width                           :100%;
            }

            .participated th{
                padding                         :25px;
               
                padding                         :8px;
                text-align                      :center;
                border-bottom                   :5px solid black;
                border-top                      :5px solid black;
                cursor                          :pointer;
            }

            .participated tr:hover {
                background-color                :#67B97F;
            }
            
           
            .posts{
                left                        :390px;
                margin-right                :5px;
                padding                     :35px;
              
                width                       :33%;
                height                      :113%;
                float                       :left;
            }

            .participated{
                margin-left                 :5px;
                left                        :860px;
                padding                     :35px;
              
                width                       :33%;
                height                      :113%;
                float                       :left;
            }
            
            .body{
                
                width                       :71%;  
                float                       :right;
                border-radius               :25px;  
                height                      :130%;
                position                    :absolute;
                left                        :380px;
                top                         :125px;
                background                  :#67B97F;
            }
            
            .footer  {
                position                    :absolute;
                left                        : 0;
                bottom                      : -75%;
                width                       : 100%;
                background-color            : #F13F51;
                color                       : white;
                border-bottom               :3px solid #F13F51;
                border-top                  :3px solid #F13F51;
                height                      :15%;
                margin-bottom               :10px;
    
                
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

            .choose{
                overflow                    :hidden;
                float                       :top;
                
         
                padding                     :5px; 
                width                       :100%;
                height                      :3%;
            }

          
            .choose select{

                border                    :1px solid black;
                border-radius               :15px;
                margin-top                  :10px;
                margin-left                 :3%;
                margin-right                :3.5%;
                height                      :40px;
                width                       :30%;
                float                       :right;
                cursor                      :pointer;
            }

            .choose h4{
                margin-top                  :20px;
                float                       :left;
               margin-left                  :4%;
               margin-right                 :2%;

              
            }

            .trouble {
                background                  :none;
              
                margin-left                 :1%;
                float                       :left;
                height                      :3%;
                width                       :8%;
           
            }
            
            .bored {
                
                margin-left                 :3%;
                margin-top                  :50px;
                background                  :none;
                margin                      :1%;
                float                       :left;
                height                      :3%;
                width                       :8%;
            }

            .choose1{
                overflow                    :hidden;
                float                       :top;
                
                float                       :left;
             
                padding                     :5px; 
                width                       :50%;
                height                      :5%;
            }

          
            .choose1 select{

                border                      :1px solid black;
                border-radius               :15px;
                margin-top                  :4px;
                margin-left                 :2.8%;
                cursor                      :pointer;
                height                      :40px;
                width                       :50%;
                float                       :left;
            }

             .choose1 h4{
                margin-top                  :15px;
                float                       :left;
                margin-left                  :3%;
               margin-right                 :3%;

              
            }

            .choose1 img {
                
                margin-left                 :7%;
                margin-top                  :245px;
                background                  :none;
                margin                      :1%;
                float                       :left;
                height                      :8%;
                width                       :15%;
            }

             .choose2{
                overflow                    :hidden;
                float                       :top;
                
                float                       :left;
            
                padding                     :5px; 
                width                       :50%;
                height                      :5%;
            }

          
            .choose2 select{

                border                      :1px solid black;
                border-radius               :15px;
                margin-top                  :4px;
                margin-left                 :3%;
                cursor                      :pointer;
                height                      :40px;
                width                       :50%;
                float                       :left;
            }

             .choose2 h4{
                margin-top                  :15px;
                float                       :left;
                margin-left                  :3%;
               margin-right                 :3%;

              
            }

            .choose2 img {
                
                margin-left                 :7%;
                margin-top                  :245px;
                background                  :none;
                margin                      :1%;
                float                       :left;
                height                      :8%;
                width                       :15%;
            }

           
             .choose3 input[type=text]{
                resize                          :none;
                overflow                        :hidden;
                width                           :85%;
                text-align                      :justify;
                border-radius                   :12px;
                border                          :1px solid black;
                height                          :40px;
               

                
            
            }

            .choose3{
                overflow                    :hidden;
                float                       :top;
                margin-top                  :10px;
                float                       :left;
            
                padding                     :5px; 
                width                       :100%;
                height                      :5%;
            }

             .choose3 h4{
                margin-top                  :10px;
                float                       :left;
                margin-left                  :3%;
                margin-right                 :3%;

              
            }

            .choose4  textarea{
                resize                          :none;
                overflow                        :hidden;
                width                           :100%;
                text-align                      :justify;  
                border-top                     :2px solid black;
                border-left                     :2px solid black;
                border-right                   :2px solid black;
              
                height                          :160px;
             
            }

            

            .choose4{
                overflow                    :hidden;
                float                       :top;
                width                       :100%;
                height                      :160px;
                
            }

             .insert {
                overflow                    :hidden;
                border-bottom               :2px solid black;
                
                float                       :top;
                border-left                 :2px solid black;
                border-right                :2px solid black;
                background                  :white;
                width                       :100%;
                height                      :5%;
            }

             .insert img{
                margin-left                 :15%;
                margin-right                :20%;
                right                       :30%; 
                cursor                       :pointer;
                margin                      :.5%;
                float                       :right;
                height                      :1.7%;
                width                       :9%;
                display                     :inline-block;
                padding                     :10px;
             }

            .insert img:hover{
                background-color            :red;
             }

            
            .modal-footer label{
                margin-top                  :.5%;
                float                       :left;
                margin-left                 :2%;

            }

            .modal-footer input[type=text]{
               float                        :left;
               width                        :15%;
               margin-left                  :3%;
               text-align                   :center;


            }
            .btnpost{
                
                background                      :#F13F51;
                padding                         :10px;
                margin-right                    :10px;
                margin-left                     :5px;   
                border                          :medium solid white;
                border-radius                   :20px;
 	            display							:inline-block;
                float                           :right;
                width                           :25%;
                height                          :50%;
               margin-top                       :-1.5%;
                color                           :white;
                cursor                          :pointer;
               
            }

             .btnpost a{
                padding-top                     :30px;
	            text-decoration					:none;
	            color							:white;
	            padding							:20px;
            }

            .btnpost:hover{
                background-color                :white;
                color                           :red;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                font-size                       :18px;
                border                          :3px solid #F13F51;

            }
            
            .close:hover{
                background-color            :white;
            }

           

            
        </style>

        
    </style>
    

    
    
    <body>
      
        
        <div class ="userinfo">
            <img src="g-dragon-1.jpg">
            <div class="details">
            
                <h3>Username</h3>
                <h4>Age/Prefecture</h4>            
            </div>  <!-- details -->
            
            <button class="button button1" data-toggle="modal" data-target="#myModal">Create New</button>
            <button class="button button2">Search HIMA/KOMA</button>
        
            <div class="reginfo">
                <div class ="info">
                    <label>Email:</label>
                    <input type="text" id ="mailaddress"placeholder=" peterallanbulabon@gmail.com "  name="mailadd">
                </div>
                <div class ="info">
                    <label>Nickname:</label> 
                    <input type="text" id ="nickname"placeholder="  Senpai "  name="nickname">
                </div>
                <div class ="info">
                    <label>Gender:</label> 
                    <input type="text" id ="gender"placeholder=" Male "  name="gender">
                </div>
                <div class ="info">
                    <label>Age:</label>
                    <input type="text" id ="age"placeholder=" 19 yrs old  "  name="age">
                </div>
                <div class ="info">
                    <label>Prefecture:</label> 
                    <input type="text" id ="prefecture"placeholder=" Hokkaido "  name="prefecture">
                </div>
                <div class ="info">
                    <label>Genre:</label>
                    <input type="text" id ="genre"placeholder=" Gaming "  name="genre">
                </div>

                <input type="submit" value="Change">

            </div> <!-- reginfo -->

        </div> <!-- userinfo -->

       
        
        <div class="body">
    </div> <!-- body -->
      
        <div class ="posts">
            <button class="postlist">Posts</button>
            <br><br>
            <br><br>
            <br>
            <table>
                <tr>
                    <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>       
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>

            </table>
        </div> <!-- posts -->
        
        <div class ="participated">
            <button class="participatedlist">Participant</button>
            <br><br>
            <br><br>
            <br>
            <table>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>      
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>
                <tr>
                <th>Article Title</th>
                    <th>Date</th>
                    <th>5/10</th>
                </tr>    
            </table>
        </div> <!-- participated -->
       
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
        <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal zoom in" role="dialog">
  <div class="modal-dialog ">
  
    <!-- Modal content-->
    <div class="modal-content w3-animate-zoom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <img src="himakoma logo.png">
        <h2 class="modal-title">Create New Topic</h2>
      </div>
      <div class="modal-body">
                
                <div class="choose">
                
                <img class ="trouble" src="troubled 2.png">
                <img class ="bored" src="bored 2.png">

                <h4>Which one are you ?</h4>
                <select >
                    <option value="volvo">Choose either</option>
                    <option value="saab">Troubled</option>
                    <option value="mercedes">Fribbler</option>  
                </select>
                </div>  <!-- choose-->

                <div class="choose1">

                <img  src="star1.png">
                <h4>Genre</h4>
                <select class=" genre">
                    <center><option value="volvo">Unspecified</option></center>
                    <option value="saab">Music</option>
                    <option value="mercedes">Gaming</option>
                    <option value="mercedes">Science</option>
                    <option value="mercedes">Sports</option>
                    <option value="mercedes">Cooking</option> 
                </select>

                  </div>  <!-- choose1-->
                
            <div class="choose2">

                  <img  src="location1.png">

                <h4>Area</h4>
                <select class=" genre">
                    <option value="volvo">Choose area</option>
                    <option value="saab">Hokkaido</option>
                    <option value="mercedes">Tohoku</option>
                    <option value="mercedes">Kanto</option>
                    <option value="mercedes">Chubu</option>
                    <option value="mercedes">Kansai</option>
                    <option value="mercedes">Chugoku</option>
                    <option value="mercedes">Shikoku</option>
                    <option value="mercedes">Kyushu</option>
                </select>

              </div>  <!-- choose2-->

            <div class="choose3">
                <h4>Title</h4>
                <input type="text" id ="genre"placeholder=" Enter Title "  name="genre">
            </div>  <!-- choose3-->

             <div class="choose4">
                <textarea placeholder="Enter the content here."></textarea>
            </div>  <!-- choose4-->

            <div class="insert">
                <img src="camera3.jpg">
                <img src="file.png">
            </div>  <!-- insert-->

      </div> <!-- modal-body-->
      
      <div class="modal-footer">
        <label> Participant's Limit </label>
        <input type="text" id =limit name="limit">
        <button type="button" class="btnpost" data-dismiss="modal">Post</button>
      </div>  <!-- modal-footer-->
    </div>  <!-- modal-content-->

  </div>  <!-- modal-dialog-->
</div>  <!-- modal-->

    </body>
</html>

@endsection
