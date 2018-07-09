<body>
    <div id="contactElement" >
        <div id="dimmingScreen"></div>
        <div id="alignmentTool">
            <div id="contactForm" class="noClick">
                <div id="contactFormInner">                        
                    <div >
                        <span class="contactFormHeading">
                            CONNECT
                        </span>
                    </div>
                    <div>
                        <svg align-content="center" position="relative" width="100%" height="3px" margin-bottom="20px">
                            <!-- <rect height="100%" width="100%" style="fill:rgb(214,30,241);"/> -->
                            <ellipse cx="50%" cy="50%" rx="50%" ry="50%" style="fill:rgb(10,10,40);"/>

                        </svg>
                        <div class="flex-container">
                            <svg class="contactMediaIcons">
                                    <use xlink:href={{config('filesystems.public.root') . "/Assets/images/SVG/socialMedia.svg#facebook"}}></use>
                            </svg>
                            <svg class="contactMediaIcons">
                                    <use xlink:href={{config('filesystems.public.root') . "/Assets/images/SVG/socialMedia.svg#twitter"}}></use>
                            </svg>
                            <svg class="contactMediaIcons">
                                    <use xlink:href={{config('filesystems.public.root') . "/Assets/images/SVG/socialMedia.svg#linkedin"}}></use>
                            </svg>
                            <svg class="contactMediaIcons">
                                    <use xlink:href={{config('filesystems.public.root') . "/Assets/images/SVG/socialMedia.svg#instagram"}}></use>
                            </svg>
                            <svg class="contactMediaIcons">
                                    <use xlink:href={{config('filesystems.public.root') . "/Assets/images/SVG/socialMedia.svg#skype"}}></use>
                            </svg>
                        </div>
                        <svg align-content="center" position="relative" width="100%" height="3px" margin-bottom="20px">
                                <!-- <rect height="100%" width="100%" style="fill:rgb(214,30,241);"/> -->
                                <ellipse cx="50%" cy="50%" rx="50%" ry="50%" style="fill:rgb(10,10,40);"/>

                        </svg>
                    </div>
                    
                    <form class="w3-container flex-container-V px-0" width="100%" position="relative">
                        
                        <div>
                            <div class="inputForm" data-validate="Name is required">
                                <input class="w3-input inputField" type="text" name="name" placeholder="Name">
                                <span class="focusedMarker" data-placeholder="NAME"></span>
                                <span class="unfocusedMarker"></span>
                            </div>
                        </div>
                        <div>
                            <div class="inputForm" data-validate = "Valid email is required: ex@abc.xyz">
                                <input class="w3-input inputField" type="text" name="email" placeholder="Email">
                                <span class="focusedMarker" data-placeholder="EMAIL"></span>
                                <span class="unfocusedMarker"></span>
                            </div>
                        </div>
                            <div class="inputForm" data-validate = "Message is required" >
                                <textarea class="w3-input inputField" name="message" placeholder="Message"></textarea>
                                <span class="focusedMarker" data-placeholder="EMAIL"></span>
                                <span class="unfocusedMarker"></span>
                            </div>
                        <div>
                        <div class="w3-display-container">
                            <button id="contactSubmit" class="w3-button w3-ripple w3-round-xlarge">
                                <span>
                                    Send Your Message
                                </span>
                            </button>
                        </div>
                    </div>
                    </form>
        
                    <svg align-content="center" position="relative" width="100%" height="3px" margin-bottom="20px" margin-top="40px">
                        <!-- <rect height="100%" width="100%" style="fill:rgb(214,30,241);"/> -->
                        <ellipse cx="50%" cy="50%" rx="50%" ry="50%" style="fill:rgb(10,10,40);"/>
                    </svg>       

                    <span class="w3-display-container" top="-30px" >
                        <div class="flex-container" >
                            <div>
                                <p text-align="center"> John@Desverreaux.com</p>
                            </div>
                            <div>
                                <p text-align="center"> +1 (251) 597-5832 </p>
                            </div>
                        </div>    
                    </span> 
        
                </div>
                <div id="contactBorder">
                    <rect></rect>
                    
                </div>   
            </div>
        </div>
    </div>

    <div id="mySidenav" class="sidenav .btn-group-vertical" onclick="toggleNav()">      
        <a href="./index.php?link=Landing" class="block btn navButton">
                <div class="container">    
                    <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/buildings.png"}} class="sideNavIcon" alt="Home">
                    <span class="sideNavText"> Home </span>
                </div>
        </a>
        <a href="./index.php?link=Dashboard" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/meter.png"}} class="sideNavIcon" alt="Dashboard">
                <span class="sideNavText"> Dashboard </span>
            </div>
        </a>
           <a href="./index.php?link=Bio" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/social.png"}} class="sideNavIcon" alt="Bio"> 
                <span class="sideNavText"> Bio </span>
            </div>
        </a>
        <a href="./index.php?link=Portfolio" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/layers.png"}} class="sideNavIcon" alt="Portfolio">
                <span class="sideNavText"> Portfolio </span>
            </div>
        </a>
        <a href="./index.php?link=Blog" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/blog.png"}} class="sideNavIcon" alt="Blog">
                <span class="sideNavText"> Blog </span>
            </div>
        </a>
        <a href="javascript:toggleOverlay()" class="block btn navButton noClick">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/mail.png"}} class="sideNavIcon" alt="Contact">
                <span class="sideNavText"> Contact </span>
            </div>
        </a>
    </div>

</body>