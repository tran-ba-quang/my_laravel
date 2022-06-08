@extends("layouts.page")


@section("header-top")
    <div class="header-row">
        <div class="header-col header-left">
            <ul class="custom-menu">
            <li>
                <a href="#" target="_blank">Văn phòng điện tử</a>
            </li>
            </ul>
        </div>
        <div class="header-col header-right">
            <div class="search-form">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Search..." />
            </div>
        </div>
    </div>
@endsection

@section("header-main")
<nav class="">
        <div class="contraine">         
                    <a class="navbar-brand" href="">
                        <img id = "logo" src="https://smc.vn/wp-content/uploads/2019/12/logo.png" alt="">
                    </a>     
            <div class="header" id="">                           
                <ul class ="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#" id="49" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                            <i class="fa fa-caret-down"></i>
                            <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
                        </a>
                            <div class="dropdown" aria-labelledby="49">
                                <a class="dropdown-item" 
                                    href="" target="_self"  title="Our Manifesto">
                                    Our Manifesto
                                </a>
                                <a class="dropdown-item" 
                                    href="" target="_self" title="Mission - Vision - Values"> 
                                    Mission - Vision - Values
                                </a>
                            </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link"  href="" target="_self"  title="Market fundamentals"                                 >
                            <span>Market fundamentals</span>
                        </a>
                    </li>
                                
                    <li class="nav-item ">
                        <a class="nav-link" href="" target="_self" title="Projects"                                 >
                            <span>Projects</span>
                        </a>
                    </li>
                                
                    <li class="nav-item ">
                        <a class="nav-link" href="" target="_blank" title="ESG" rel="noopener noreferrer"                 >
                            <span>ESG</span>
                        </a>
                    </li>
                                
                    <li class="nav-item ">
                        <a class="nav-link" href="" target="_self" title="Partners"                                 >
                            <span>Partners</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="#" id="27" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News
                            <i class="fa fa-caret-down"></i>
                        </a>
                        
                        <div class="dropdown" aria-labelledby="27">
                            <a class="dropdown-item" href="" target="_self" title="Internal Communication"     	    	>
                                Internal Communication
                            </a>
                            <a class="dropdown-item" href="" target="_blank" title="Corporate Citizenship" rel="noopener noreferrer"     	>
                                Corporate Citizenship
                            </a>
                            <a class="dropdown-item" href="" target="_self" title="Market News"     	    	>
                                Market News
                            </a>

                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="#" id="40" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Library
                            <i class="fa fa-caret-down"></i>
                        </a>

                        <div class="dropdown" aria-labelledby="40">
                            <a class="dropdown-item" href="#" target="_self" title="Video"     	    	>
                                Video
                            </a>
                        </div>
                    </li>
                                
                    <li class="nav-item ">
                        <a class="nav-link" href="#" target="_self" title="Contact"                                 >
                            <span>Contact</span>
                        </a>
                    </li>
                        
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://ezland.vn/vendor/core/images/flags/en.png" title="English" alt="English">
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown" aria-labelledby="navbarDropdownLang">
                            <a class="dropdown-item" href="#">
                                <img src="https://ezland.vn/vendor/core/images/flags/en.png" title="English" alt="English">
                                    <span>English</span>  
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="https://ezland.vn/vendor/core/images/flags/vn.png" title="Tiếng Việt" alt="Tiếng Việt">
                                    <span>Tiếng Việt</span>  
                            </a>                            
                            <a class="dropdown-item" href="#">
                                <img src="https://ezland.vn/vendor/core/images/flags/cn.png" title="中文" alt="中文">
                                    <span>中文</span>  
                            </a>
                        </div>
                    </li>
                </ul>

            </div>
        



	<ul class="header2"  >
        
        <div  class="dropdown2">
            <button class="dropbtn" onclick="myFunction()" >
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="dropdown-content"  id="myDropdown">
                <li class="nav-item2">
                    <a href="#" target="_self">
                        <i class=''></i>About Us
                    </a>
                </li>
                <li class="nav-item2 ">
                    <a href="#" target="_self">
                        <i class=''></i>Market fundamentals
                    </a>
                </li>
                <li class="nav-item2 ">
                    <a href="#" target="_self">
                        <i class=''></i>Projects
                    </a>
                </li>
                <li class="nav-item2">
                    <a href="#" target="_blank">
                        <i class=''></i>ESG
                    </a>
                </li>
                <li class="nav-item2">
                    <a href="#" target="_self">
                        <i class=''></i>Partners
                    </a>
                </li>
                <li class="nav-item2">
                    <a href="#" target="_self">
                        <i class=''></i>News
                    </a>
                </li>
                <li class="nav-item2">
                    <a href="#" target="_self">
                        <i class=''></i>Library
                    </a>
                </li>
                <li class="nav-item2">
                    <a href="#" target="_self">
                        <i class=''></i>Contact
                    </a>
                </li>
            </div>
            
        <div id="topbar"> 
            <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center text-lg-right"> -->
                        <ul class="language_bar_list ">
                            <li>
                                <a rel="alternate" hreflang="en" href="#">
                                    <img src="https://ezland.vn/vendor/core/images/flags/gb.png" title="English" alt="English">                        <span>English</span>                    </a>
                            </li>
                            <li >
                                <a rel="alternate" hreflang="vi" href="#">
                                    <img src="https://ezland.vn/vendor/core/images/flags/vn.png" title="Tiếng Việt" alt="Tiếng Việt">                        <span>Tiếng Việt</span>                    </a>
                            </li>
                            <li >
                                <a rel="alternate" hreflang="zh" href="#">
                                    <img src="https://ezland.vn/vendor/core/images/flags/cn.png" title="中文" alt="中文">                        <span>中文</span>                    </a>
                            </li>
                        </ul>
        
                    <!-- </div>
                </div>
            </div> -->
        </div>

        
        </div>
    </ul>
    
       
    </div>
</nav>
@endsection
@section("header-bottom")
    <h1>
        day la header-bottom
    </h1>
@endsection


@section("slider")
    <h1>
        day la slider
    </h1>
@endsection

@section("intro")
    <h1>
        day la intro
    </h1>
@endsection

@section("services")
    <h1>
        day la services
    </h1>
@endsection

@section("news")
    <h1>
        day la news
    </h1>
@endsection

@section("partner")
    <h1>
        day la partner
    </h1>
@endsection

@section("footer-main")
    <h1>
        day la footer-main
    </h1>
@endsection
@section("footer-bottom")
    <h1>
        day la footer-bottom
    </h1>
@endsection