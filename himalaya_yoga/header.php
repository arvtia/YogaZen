<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Bootstrap style sheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!--custom css file-->
    <link rel="stylesheet" href="assests/stylesheets/header-footer.css" type="text/css">
<!--AOS Css-->   
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!--bootstrap css-->

</head>
<body>

<header>
    <!--top header-fixed position starts here-->
    <div class="top-header">
        <p>info@himalayayoga.net | +91- 7004851378 (India) | +001 4389 391 108 (Canada)</p>
    </div>
    <!--top header-ends here-->
    <!--navbar content starts here-->
    <div class="navbar">
        <!--logo+name div-->
        <div class="colum-1">
            <img src="assests/images/upscale-.svg" alt="upscale-">
            <h2>Himalaya Yoga</h2>
        </div>
        <!--navbar headingsstarts here-->
        <div class="colum-2">
            <!--list headings-->
            <div class="list-heading">
                <a href="index.php"><li>Home</li></a>
                <a href="about-us.php"><li>About Us</li></a>
                <!--drop down-->
                <li id="dropdown-0">
                    Our Instructor
                    <img src="assests/images/down.svg" alt="down" id="downIcon">
                    <div class="dropdown" id="first-drop">
                        <!--item drop down list class-->
                            <a href="masterShivachittam.php">Master Shivachitam</a>
                            <a href="amit_kumar.php">Amit Kumar AKA Eknath</a>
                            <a href="dr_ashish.php">Doctor Ashish</a>
                            <a href="ravi_kumar.php">Ravi Kumar (Sn Prakash Murty)</a>
                    </div>
                </li> 
                <!--drop down-->
                <li id="dropdown-1">Wellness Programs<img src="assests/images/down.svg" alt="down" id="downIcon"> 
                    <div class="dropdown" id="sec-drop">
                            <a href="wellness_progms.php">Programs/ Campaign for overcoming Chronic Lifestyle</a>
                            <a href="natur_therapy.php">Nature Therapy</a>
                            <a href="alternative_therapy.php">Alternative Therapy</a>
                    </div>
                </li>
                <!--drop down class-->
            
                <li id="dropdown-2">Yoga <img src="assests/images/down.svg" alt="down" id="downIcon"> 
                    <div class="dropdown" id="third-drop">
                        <!--item drop downlist class-->
                            <a href="meditation.php">Meditation</a>
                            <a href="panch_karma.php">Panch Karma</a>
                            <a href="hath_yoga.php">Hatha Yoga</a>
                            <a href="yttc.php">YTTC (Yoga Teaching Trainer Course)</a>
                            <a href="health-mgnt.php">Health Management</a>
                            <a href="weekday-courses.php">Week day course</a>
                            <a href="weekend-retreate.php">Weekend Retreat</a>
                        <!--item list ends here-->
                    </div>
                </li>
                    <!--drop down class-->
                
            
                <!--drop down end-->
                <a href="virtual-tour.php"><li>Virtual Tour</li></a>
                <a href="accomodation.php"><li>Accomodation</li></a>
                <a href="events.php" id="events-dd-a">
                    <li id="events-dd">Events <img src="assests/images/down.svg" alt="down" id="downIcon">
                            <div class="dropdown" id="events-dd-L">
                            <!--item drop downlist class-->
                                <a href="events-imgs.php">Know more</a>
                                <a href="eventsVideo.php">Upcoming events</a>
                            <!--item list ends here-->
                        </div>
                    </li>
                </a>
                <!--headings ends here-->
            </div>
            <!--List heading ends here-->
            
        </div> 
        <!--colum 2 ends-->
        <div class="colum-3">
            <!--search icon + contact now btn-->
            <a href="search_result.php"><img src="assests/images/search-icon.svg" alt="search-icon" id="search-icon"></a>
            <div class="btn " id="btn-contact_us"><a href="contact-us.php" style="text-decoration:none; color:#808080;">Contact Now</a></div>
            <!--toggle navigation icon-->
            <div class="ham-icon">
                <img src="assests/images/icon-ham.svg" alt="" id="hamburger">
            </div>
        </div>
    </div>
    <!--navbar content stops here-->

    <!--side nav bar open-->

    
    <div class="side" id="sidebar">


        <div class="container">
            <!--close side navbar icon-->
            <div class="close-side-nav">
                <img src="assests/images/close.svg" alt="close" id="close-side-navbar-icon">
            </div>
                <div class="list-side">
                   <!--Navbar Search bar icons--> 
                    <div class="searchbar">
                        <input type="search" value="" id="search-box" placeholder="search for...">
                        <a href="search_result.php"><button input type="submit"><img src="assests/images/search-1.svg" alt="search.gif" id="search-gif"></button></a>
                    </div>

                    <ul id="list-items">
                        <a href="index.php">Home</a>
                        <a href="about-us.php">About Us</a>
                        <li>
                            <div class="list-sub" id="dropdown-button">
                                <p>Our Instructors</p>
                                <img src="assests/images/down.svg" alt="down" id="first-down-arrow">
                            </div>
                            <div class="ul" id="sn-dropdown0">
                                <a href="masterShivachittam.php">Master Shivachitam</a>
                                <a href="amit_kumar.php">Amit Kumar AKA Eknath</a>
                                <a href="dr_ashish.php">Doctor Ashish</a>
                                <a href="ravi_kumar.php">Ravi Kumar (Sn Prakash Murty)</a>
                            </div>
                        </li>
                        <li>
                            <div class="list-sub" id="dp-db-2">
                                <p> Wellness Programs  </p>
                                <img src="assests/images/down.svg" alt="down" id="second-down-arrow">
                            </div>
                    
                            <div class="ul" id="sn-dropdown1">
                                <a href="wellness_progms.php">Programs/ Campaign for overcoming Chronic Lifestyle</a>
                                <a href="natur_therapy.php">Nature Therapy</a>
                                <a href="alternative_therapy.php">Alternative Therapy</a>
                            </div>
                        </li>
                        <li>
                            <div class="list-sub" id="dp-db-3">
                                <p>Yoga </p>
                                <img src="assests/images/down.svg" alt="down" id="third-down-arrow">
                            </div>
                            <div class="ul" id="sn-dropdown2">
                                <a href="meditation.php">Meditation</a>
                                <a href="panch_karma.php">Panch Karma</a>
                                <a href="hath_yoga.php">Hath Yoga</a>
                                <a href="yttc.php">YTTC (Yoga Teaching Trainer Course)</a>
                                <a href="health-mgnt.php">Health Management</a>
                                <a href="weekday-courses.php">Week day course</a>
                                <a href="weekend-retreate.php">Weekend Retreat</a>                        
                            </div>
                        </li>
                        <a href="virtual-tour.php">Virtual Tour</a>
                        <a href="accomodation.php">Accomodation</a>
                        <li>
                            <div class="list-sub" id="event-down-arrow-dd">
                                <p>Events</p>
                                <img src="assests/images/down.svg" alt="down" id="second-down-arrow">
                            </div>
                    
                            <div class="ul" id="sn-dropdown-events">
                                <a href="events.php">Events</a>
                                <a href="events-imgs.php">Events & News</a>
                                <a href="eventsVideo.php">Events Activities</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--list side end here-->
        </div>
    </div>

</header>









