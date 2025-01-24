@extends('layouts.headerfooter')

@section('content')
        <style>
           

             .header{
              margin-top                   :2%;
               background                  :#e3e4fa;
               width                       :100%;
               height                      :8vh;
               float                       :left;
               border-bottom               :2px solid #67b97f;
               border-top                  :2px solid #67b97f;

               
               
               
           }

           .header h1{
               float                       :left;
               font-stretch                :extra-expanded;
               font-family                 :"verdana", "sans-serif";
               font-size-adjust            :0.58;
               font-weight                 :bold;
               margin-right                :2%;
               margin-left                 :35%;
              
           }

           .header h4{
               float                       :left;
               font-stretch                :ultra-expanded;
               font-family                 :"Courier", "sans-serif";
               font-size-adjust            :0.58;
               font-weight                 :bold;
               letter-spacing              :4px;
               margin-top                  :2%;
           }
           
            .himatopic{
                float                       :left;
               clear                        :left;
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
                margin-left                     :1%;
              
                

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
    
    <body>

    
        <div class="header">
            <h1>KOMA</h1>
            <h4>Troubled Person</h4>
        </div>
         <div class="himatopic">
        <div class="himaheader">
            
            <h4>Recent Posts</h4>
        </div>  <!-- himaheader -->

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

    </div> <!-- himatopic -->
        
    <div class="komatopic">
        <div class="komaheader">
              
                <h4>Hottest Posts</h4>
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