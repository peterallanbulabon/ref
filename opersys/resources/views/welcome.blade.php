@extends('layouts.headerfooter')

@section('content')
        
        <style>
          

             
            .choose{
                float                       :top;
               
                border                      :medium solid #67b97f;
                margin-top                  :1%;
            
                background-image            :url("summer-park.jpg");
                
                background-repeat           :repeat-x;
                padding                     :1.5%;
                height                      :63vh;
                width                       :98%;
                margin-left                 :1%;
                margin-right                :1%;
                border-radius               :25px;
               
            }
            

            .dropdown1 {
                border                      :medium solid black;
                border-radius               :15px;
                              
                height                      :15%;
                width                       :13%;
                float                       :top;
                cursor                      :pointer;
                text-align                  :center;
    
            }

            .dropdown1:hover{
                border                      :medium solid green;
            
            }
            
            .dropdown2:hover{
                border                      :medium solid green;
               
            }

            .dropdown3:hover{
                border                      :medium solid green;
                
            }
            .dropdown2 {
                border                      :medium solid black;
                border-radius               :15px;
                margin-left                 :2%;
                height                      :15%;
                width                       :15%;
                float                       :top;
                cursor                      :pointer;
                text-align                  :center;

            }
            .dropdown3 {
                border                      :medium solid black;
                border-radius               :15px;
                margin-left                 :2%;
                height                      :15%;
                width                       :13%;
                float                       :top;
                cursor                      :pointer;
                text-align                  :center;
            }
           
        
            
            
            .search button { 
                float                        :top;
                clear                        :top;
                background                   :green;
                border                       :medium solid black;
                height                       :10vh;
                width                        :15%;
                margin-top                   :1%;
                margin-left                  :15%;
                border-radius                :10px;
                color                        :black;
               
            }
            .search button:hover {
                width                        :16%;
                height                       :10.5vh;
                margin-left                  :14.5%;
                color                        :white;
                border                       :medium solid white;
                font-size                    :150%;
            }

           
             
           
            
            .registration{
               
               width                       :40%;
               height                      :100%;
               border-radius               :25px;     
               border                      :3px solid black;
               background                  :white;
               float                       :right;
              
       
              
            
              
           }
            .regheader{
                border-top-left-radius          :23px;
                border-top-right-radius          :23px;
                width                           :100%;
                height                          :22%;
                text-align                      :center;
                float                           :top;
                background                      :#67B97F;
                padding                         :2px;
                                       
     
                                        
            }

            .regbodyleft{
                background                      :#B7CEEC;
                padding                         :2%;
                height                          :78%;
                width                           :100%;
                float                           :left;
                border-bottom-left-radius       :23px;
                border-bottom-right-radius       :23px;
        
            }
           

             .regbodyleft input[type=text]{
                width                       : 90%;
                padding                     : 6px 10px;
                margin                      : 4px 0;
                display                     : inline-block;
                border                      : 1px solid #ccc;
                border-radius               : 4px;
                box-sizing                  : border-box;
                float                       :top;
                margin-left                 :5%;
     
            }

            .regbodyleft input[type=submit]{
          
                background                      :#F13F51;
               
                margin-left                      :30%;
             
                border                          :medium solid white;
                border-radius                   :20px;
 	            display							:inline-block;
                float                           :left;
                clear                           :left;
                width                           :40%;
                height                          :8vh;
              
                color                           :white;
                cursor                          :pointer;
            }

              .regbodyleft input[type=submit]:hover{
                background-color                :white;
                color                           :red;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                font-size                       :18px;
                border                          :3px solid #F13F51;

            }.regbodyleft input[type=submit] a{
                padding-top                     :30px;
	            text-decoration					:none;
	            color							:white;
	            padding							:20px;
            }

            
            
            .radiobutton{
                display                         :inline-block;
                float                           :left;
               
                font-size                       :18px; 
                margin-top                      :1%;
                padding                         :5px;
                margin-left                     :4%;
            }

            .radiobutton radio:hover{
                border                          :1px solid green;
                color                           :green;
                cursor                          :pointer;
            }
            
            .selectbirth{
                display                         :inline-block;
                float                           :left;
             
               width                            :75%;
                margin-top                      :2%;
                padding                         :5px;
                margin-left                     :3%;
            }

            .selectbirth label{
                float                           :left;
                padding                         :3px;
                margin-top                      :2.5%;
            }

            .birthmonth {
                width                           :25%;
                height                          :10%;
                float                           :left;
                padding                         :3px;
                margin-left                     :1%;
            }

            .birthmonth:hover{
                border                          :1px solid green;
               
                cursor                          :pointer;
            }

            .birthdate:hover{
                border                          :1px solid green;
               
                cursor                          :pointer;
            }

            .birthyear:hover{
                border                          :1px solid green;
               
                cursor                          :pointer;
            }



            .birthdate{
                width                           :15%;
                height                          :10%;
                float                           :left;
                padding                         :3px;
                margin-left                     :1%;
            }

             .birthyear {
                width                           :20%;
                height                          :10%;
                float                           :left;
                padding                         :3px;
                margin-left                     :1%;
            }

            .himatopic{
                float                       :left;
               
                margin-top                  :1%;
                
                
                height                      :200%;
                width                       :45%;
                margin-left                 :3%;
                margin-right                :2%;
                
               
            }

            .himaheader{
               
                width                       :100%;
                height                      :8vh;
                float                       :top;
                
            }

            .himaheader h1{
                float                       :left;
                font-stretch                :extra-expanded;
                font-family                 :"verdana", "sans-serif";
                font-size-adjust            :0.58;
                font-weight                 :bold;
                margin-right                :4%;
                margin-left                 :2%;

            }

            .himaheader h4{
                float                       :left;
                font-stretch                :ultra-expanded;
                font-family                 :"Courier", "sans-serif";
                font-size-adjust            :0.58;
                font-weight                 :bold;
                letter-spacing              :4px;
                margin-top                  :4%;
            }

            .himalist{
                float                       :top;
                width                       :100%;
                height                      :40vh;
                background                  :#e3e4fa;
                border-bottom               :1px solid black;
            }

            .himalistheader{
                float                       :top;
                height                      :20%;
                padding-top                 :.1%;
                padding-left                :2%;
               
            }

            

            .komatopic{
                float                       :left;
               
                margin-top                  :1%;
                
                
                height                      :200%;
                width                       :45%;
                margin-left                 :3%;
                margin-right                :2%;
                
               
            }

            .komaheader{
               
                width                       :100%;
                height                      :8vh;
                float                       :top;
                
            }

            .komaheader h1{
                float                       :left;
                font-stretch                :extra-expanded;
                font-family                 :"verdana", "sans-serif";
                font-size-adjust            :0.58;
                font-weight                 :bold;
                margin-right                :4%;
                margin-left                 :2%;

            }

            .komaheader h4{
                float                       :left;
                font-stretch                :ultra-expanded;
                font-family                 :"Courier", "sans-serif";
                font-size-adjust            :0.58;
                font-weight                 :bold;
                letter-spacing              :4px;
                margin-top                  :4%;
            }

            .komalist{
                float                       :top;
                width                       :100%;
                height                      :40vh;
                background                  :#e3e4fa;
                border-bottom               :1px solid black;
            }

            .komalistheader{
                float                       :top;
                height                      :20%;
                padding-top                 :.1%;
                padding-left                :2%;
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
                margin-left                     :5%;
                overflow                        :auto;
                line-height                     :200%;

            }

            .enter{
          
                background                      :#F13F51;
                padding                         :1%;
                margin-right                    :20%;
               
                border                          :medium solid white;
                border-radius                   :20px;
 	            display							:inline-block;

                width                           :30%;
                height                          :15%;
    
                color                           :white;
                cursor                          :pointer;
                float                           :right;
                
               
            }
            

            .enter a{
                padding-top                     :30px;
	            text-decoration					:none;
	            color							:white;
	            padding							:20px;
            }

            .enter:hover{
                background-color                :white;
                color                           :#F13F51;
                box-shadow                      :0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
               
                border                          :3px solid #F13F51;

            }
            


           
         
           



        </style>

   

    </head>
    
    
    <body>
        
        
        <div class ="choose">
            
            <div class="registration">
                <div class="regheader">
                    <h3>Welcome to "HIMAKOMA"</h3>
                    <p>Create your account now and connect with people nearby</p>
                </div> <!-- regheader -->

                <div class="regbodyleft">
                    <form action="/action_page.php">
                
                        <input type="text" id="regname" name="email" placeholder="Name ">                      
                        <input type="text" id="regemail" name="password" placeholder="Email address">                    
                        <input type="text" id="regpassword" name="password" placeholder="Password">
        
                            <div class="radiobutton">
                                <input type="radio" name="gender" value="male"> Male <br>
                                <input type="radio" name="gender" value="female"> Female
                            </div> <!-- radiobutton -->

                         <div class="selectbirth">
                            
                            <label>Birthdate</label>
                            <select class="birthmonth">
                                <option value="saab">January</option>
                                <option value="saab">February</option>
                                <option value="saab">March</option>
                                <option value="saab">April</option>
                                <option value="saab">May</option>
                                <option value="saab">June</option>
                                <option value="saab">July</option>
                                <option value="saab">August</option>
                                <option value="saab">September</option>
                                <option value="saab">October</option>
                                <option value="saab">November</option>
                                <option value="saab">December</option>
                                </select>
                    
                            <select class="birthdate" >
                                <option value="saab">1</option>
                                <option value="mercedes">2</option>
                                <option value="mercedes">3</option>
                                <option value="mercedes">4</option>
                                <option value="mercedes">5</option>
                                <option value="mercedes">6</option>
                                <option value="mercedes">7</option>
                                <option value="mercedes">8</option>
                                <option value="mercedes">9</option>
                                <option value="mercedes">10</option>
                                <option value="mercedes">11</option>
                                <option value="mercedes">12</option>
                                <option value="mercedes">13</option>
                                <option value="mercedes">14</option>
                                <option value="mercedes">15</option>
                                <option value="mercedes">16</option>
                                <option value="mercedes">17</option>
                                <option value="mercedes">18</option>
                                <option value="mercedes">19</option>
                                <option value="mercedes">20</option>
                                <option value="mercedes">21</option>
                                <option value="mercedes">22</option>
                                <option value="mercedes">23</option>
                                <option value="mercedes">24</option>
                                <option value="mercedes">25</option>
                                <option value="mercedes">26</option>
                                <option value="mercedes">27</option>
                                <option value="mercedes">28</option>
                                <option value="mercedes">29</option>
                                <option value="mercedes">30</option>
                                <option value="mercedes">31</option>
                        </select>
                        
                    
                    
                            <select class="birthyear">
                                
                                <option value="saab">1998</option>
                                <option value="mercedes">1999</option>
                                <option value="mercedes">2000</option>
                                <option value="mercedes">2001</option>
                                <option value="mercedes">2002</option>
                                <option value="mercedes">2003</option>
                                <option value="mercedes">2004</option>
                                <option value="mercedes">2005</option>
                                <option value="mercedes">2006</option>
                                <option value="mercedes">2007</option>
                                <option value="mercedes">2008</option>
                                <option value="mercedes">2009</option>
                                <option value="mercedes">2010</option>
                                <option value="mercedes">2011</option>

                            </select>
                        </div> <!-- selectbirth -->
                        
                        <input type="submit" value="Register">
                    </form>

                        
                    </div> <!-- regbodyleft -->
            
               
            </div>  <!-- registration -->
            
            
                <select class="dropdown1">
                    <option value="volvo">Choose either</option>
                    <option value="saab">HIMA</option>
                    <option value="mercedes">KOMA</option>  
                </select>
          
            
           
                <select class="dropdown2" >
                    <option value="volvo">Select Prefecture</option>
                    <option value="saab">Hokkaido</option>
                    <option value="mercedes">Tohoku</option>
                    <option value="mercedes">Kanto</option>
                    <option value="mercedes">Chubu</option>
                    <option value="mercedes">Kansai</option>
                    <option value="mercedes">Chugoku</option>
                    <option value="mercedes">Shikoku</option>
                    <option value="mercedes">Kyushu</option>
                </select>
            
           
           
                <select class="dropdown3">
                    <option value="volvo">Select Genre</option>
                    <option value="saab">Music</option>
                    <option value="mercedes">Gaming</option>
                    <option value="mercedes">Science</option>
               <option value="mercedes">Sports</option>
                    <option value="mercedes">Cooking</option> 
                </select>
          

             <div class="search">
                
                <button type="submit"><i class="fa fa-search"></i>Search</button>
                
            </div> <!-- search -->
        
        </div>  <!-- choose -->

        
    <div class="himatopic">
        <div class="himaheader">
            <h1>HIMA</h1>
            <h4>Fribbler Person</h4>
        </div>  <!-- himaheader -->

                <div class ="himalist list1  w3-card-4"> <!-- hima list1 --> 
                        <header class="himalistheader w3-blue">
                            <h4>Article Title</h4>
                        </header>
                        <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button> 

                </div>  <!-- himalist 1 -->
                
                <div class ="himalist list2 w3-card-4"> 
                        <header class="himalistheader w3-blue">
                            <h4>Article Title</h4>
                        </header>

                        <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
           </div>  <!-- himalist 2 -->

           <div class ="himalist list3  w3-card-4"> 
                <header class="himalistheader w3-blue">
                    <h4>Article Title</h4>
                </header>    

                    <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
                
           </div>  <!-- himalist 3 -->

           <div class ="himalist list4  w3-card-4"> 
                <header class="himalistheader w3-blue">
                    <h4>Article Title</h4>
                </header>

                <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
           </div>  <!-- himalist4 -->

           <div class ="himalist list5  w3-card-4"> 
                <header class="himalistheader w3-blue">
                    <h4>Article Title</h4>
                </header>

                <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
           </div>  <!-- himalist5 -->

    </div> <!-- himatopic -->
        
    <div class="komatopic">
        <div class="komaheader">
                <h1>KOMA</h1>
                <h4>Troubled  Person</h4>
           </div>  <!-- komaheader -->

         <div class ="himalist list1  w3-card-4"> <!-- hima list1 --> 
                        <header class="himalistheader w3-green">
                            <h4>Article Title</h4>
                        </header>
                        <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button> 

                </div>  <!-- himalist 1 -->
            
                <div class ="himalist list2 w3-card-4"> 
                        <header class="himalistheader w3-green">
                            <h4>Article Title</h4>
                        </header>

                        <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
           </div>  <!-- himalist 2 -->

           <div class ="himalist list3  w3-card-4"> 
                <header class="himalistheader w3-green">
                    <h4>Article Title</h4>
                </header>    

                    <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
                
           </div>  <!-- himalist 3 -->

           <div class ="himalist list4  w3-card-4"> 
                <header class="himalistheader w3-green">
                    <h4>Article Title</h4>
                </header>

                <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
           </div>  <!-- himalist4 -->

           <div class ="himalist list5  w3-card-4"> 
                <header class="himalistheader w3-green">
                    <h4>Article Title</h4>
                </header>

                <div class ="userimage">
                            <img src="g-dragon-1.jpg">
                            <h5> Author Name </h5>
                            <p>Nickname</p> 
                        </div>

                        <div class="genre1">
                            <label class="labelgenre">Genre</label>
                            <img class="genre1img"src="star1.png">
                            <p class="specificgenre">Gaming</p>
                        </div> <!-- genre1 --> 
                    
                        <div class="area1">
                            <label class="labelarea">Area</label>
                            <img class="area1img"src="location1.png">
                            <p class="specificarea">Hokkaido</p>
                        </div> <!-- area1 --> 

                        <div class="title1">
                            <label class="labelcontent">Content</label>
                            <img class="title1img"src="doc.png">
                            <p class="specifictitle">DetailsDetailsDetailsDetailsDetailsDetails</p>
                        </div>

                        <div class="participantlist">
                            <img class="participant1img" src="participants.png">
                            <p class="specificno">5/10 </p>
                            <p class="date"> 2 hrs ago </p> 
                        </div>

                        <button class="enter">Enter</button>
           </div>  <!-- himalist5 -->
        
    </div> <!-- komatopic -->

  
    </body>

@endsection

 
  

   
