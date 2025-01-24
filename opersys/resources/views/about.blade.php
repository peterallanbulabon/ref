@extends('layouts.headerfooter')

@section('content')
        <style>
            
            .mainheader{
               margin-top                  :2%;
               background                  :#e3e4fa;
               width                       :40%;
               height                      :10vh;
               float                       :left;
               margin-bottom               :1%;
               text-align                  :center;

           }

           .mainheader h1{
             
               font-stretch                :ultra-expanded;
               font-family                 :"garamond", "sans-serif";
               font-size-adjust            :5;
               font-weight                 :bold;
            
               
               letter-spacing              :5px;
               font-size                   :50px;
             
              
           }

           .about{
               float                        :left;
               clear                        :left;
               width                        :95%;
               margin                       :2% 2.5%;
               margin-bottom                :none;
              
           }

           .headerabout{
                float                       :top;
                height                      :20%;
                padding-top                 :.1%;
                padding-left                :2%;
               
           }

           .body{
                padding                     :2%;
                line-height                  :150%;
                text-align                  :justify;
               
           }

           .body ul{
               list-style-type              :circle;
               
           }
            
           
        </style>
    
    <body>

        
        
        <div class ="mainheader w3-card-4">
            <h1>ABOUT</h1>
        </div> 

            <div class="about whatishimakoma w3-card-4">
                <header class="headerabout w3-green">
                    <h3>What is HIMAKOMA</h3>
                </header>

                <div class="body">
                    <ul>
                        <li>Matching site that connects people with people on the theme of [Fribbler] and [Troubled Person]</li>
                        <li>Matching site that connects people with people through hobby </li>
                        <li>Within the site, you can contact the other party safely without teaching the direct contact</li>
                        <li>Available for free, with use</li>
                    </ul>
                </div>
            </div>

            <div class="about termsofservice w3-card-4">
                <header class="headerabout w3-green">
                    <h3>Terms of Service</h3>
                </header>

                <div class="body">
                    <p><b>Last updated:</b> May 10, 2018 </p>
                    <p>
                        Please read these Terms of Service  carefully before using the <a href ="http://www.himakoma.com">http://www.himakoma.com"</a>  website and the HIMAKOMA mobile
                        application operated by Pierre and Paul Solutions Inc. 
                        Your access to and use of the Service is conditioned on your acceptance of and compliance with
                        these Terms of Service. These Terms apply to all visitors, users and others who access or use the Service.
                    </p> 
                    <p><b>By accessing or using the Service you agree to be bound by these Terms. If you disagree
                        with any part of the terms then you may not access the Service. </b>
                    </p>     

                            <ul>
                                <li><b>Termination</b> - We may terminate or suspend access to our Service immediately, without prior notice or liability, for
                                        any reason whatsoever, including without limitation if you breach the Terms.
                                        All provisions of the Terms which by their nature should survive termination shall survive
                                        termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and
                                        limitations of liability.
                                </li>
                                <li><b>Subscription </b> - Some parts of the Service are billed on a subscription basis ("Subscription(s)"). You will be billed in
                                        advance on a recurring ...
                                </li>
                                <li><b>Content</b> - Our Service allows you to post, link, store, share and otherwise make available certain information,
                                        text, graphics, videos, or other material ("Content"). You are responsible for the …
                                </li>
                                <li><b>Link To Other Websites</b> - Our Service may contain links to third-party web sites or services that are not owned or controlled
                                            by My Company (change this).
                                            My Company (change this) has no control over, and assumes no responsibility for, the content,
                                            privacy policies, or practices of any third party web sites or services. You further acknowledge and
                                            agree that My Company (change this) shall not be responsible or liable, directly or indirectly, for any
                                            damage or loss caused or alleged to be caused by or in connection with use of or reliance on any
                                            such content, goods or services available on or through any such web sites or services.
                                </li>
                                <li><b>Changes</b> - We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a
                                            revision is material we will try to provide at least 30 (change this) days' notice prior to any new terms
                                            taking effect. What constitutes a material change will be determined at our sole discretion.
                                </li>
                            </ul>


                    
                </div>
                
            </div>

            <div class="about termsofservice w3-card-4">
                <header class="headerabout w3-green">
                    <h3>Management Policy</h3>
                </header>

                <div class="body">
                    
                </div>
                
            </div>

            <div class="about termsofservice w3-card-4">
                <header class="headerabout w3-green">
                    <h3>Contact Us</h3>
                </header>

                <div class="body">
                    
                </div>
                
            </div>

            <div class="about termsofservice w3-card-4">
                <header class="headerabout w3-green">
                    <h3>Blog</h3>
                </header>

                <div class="body">
                    
                </div>
                
            </div>

            <div class="about termsofservice w3-card-4">
                <header class="headerabout w3-green">
                    <h3>Sponsor's Link</h3>
                </header>

                <div class="body">
                    
                </div>
                
            </div>
       
        
       
    </body>
    

    @endsection