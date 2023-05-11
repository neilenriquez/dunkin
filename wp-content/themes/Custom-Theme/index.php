<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunkin' Donut</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<style>
    /* BODY */
    body {
        position: relative;
        overflow-y: overlay;
        overflow-x: hidden;
        font-size: 16px;
        scroll-behavior: smooth;
        margin: 0px;
    }
    /* NAVIGATIONS */
    #navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 101;
        box-shadow: 3px 6px 13px rgba(0,0,0,.059);
        transition: .3s ease;
    }
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }
    .sticky + .content {
        padding-top: 60px;
    }
    .header_div {
        padding: 8px;
        background-color: #FF6E0E;
        width: 100%;
        display: block;
    }
    .header_buttons{
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
    }
    .socials {
        margin-left: 2%;
    }
    .header_contacts {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        margin-right: 2%;
    }
    .circle {
        height: 30px;
        width: 30px;
        background-color: #ffffff;
        border-radius: 50%;
        display: inline-block;
    }
    .media_circle {
        text-decoration: none;
    }
    .fa {
        padding: 7px;
        font-size: 17px;
        width: 19px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
        background: white;
        color: #FF6E0E;
    }
    /* BUTTONS */
    .general_button {
        width:fit-content;
        border: 1px solid transparent;
        border-radius: 30px;
        padding: 10px 25px;
        font-family: var(--display);
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: .24px;
        line-height: 1;
        color:#FF6E0E;
        font-weight:bolder;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        transform: scale(1);
        cursor: pointer;
        transition: 0.3s ease 0.3s;
        background-color: white;
        text-align: center;
        margin-left: 5px;
    }
    .general_button:hover {
        background-color:#FF6E0E;
        color: white;
        border: 1px solid white;
    }
    .transparent_button {
        background-color: transparent;
        color: white;
        border: 1px solid white;
    }
    .transparent_button:hover {
        background-color: white;
        color: #FF6E0E;
    }
    .blue_button {
        background-color: #49cdd5;
        color: white;
    }
    .blue_button:hover {
        background-color: white;
        color: #49cdd5;
        border: 1px solid white;
    }
    a {
        text-decoration: none;
    }
    .navigation_div {
        padding: 8px;
        background-color: #ffffff;
        width: 100%;
        display: block;
    }
    .navigation_refs {
        display: flex;
        justify-content: flex-end;
        padding: 0;
        list-style: none;
        flex: 1 0 5%;
    }
    .navigation_ref_item {
        margin-left: 5%;
    }
    .ref_item_link {
        color: gray;
        font-size: 15px;
        font-weight:800;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .ref_item_link:hover {
        color:#FF6E0E;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        transition: 0.3s ease;
   }
   .header_nav {
        padding: 0px;
        color:#FF6E0E;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
        background-color:white;
   }
   .h1_nav {
        display:flex;
        font-weight: 800;
   }
   .pink_highlight {
        color:#f20c90;
   }
   .nav_content {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
   }
   /* MAIN BODY */
   .body_section {
        position: relative;
   }
   .body_div {
    width: 100%;
        padding: 0px;
        color:#FF6E0E;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
        background-color: transparent;
   }
   .body_image {
        width: 1920px;
        height: 750px;
   }
   .body_content {
        display: block;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        background-color: transparent;
        position: absolute;
        top: 10%;
        left: 20%;
        color: white;
   }
   .body_separate {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
   }
   .body_left {
        text-align: left;
        font-size: larger;
   }
   .body_right {
        display: flex;
   }
   .body_buttons {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
   }
   /* CARDS BODY */
   .cards_content {
        text-align: center;
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
   }
   .cards_h1 {
        padding: 0px;
        color: #FF6E0E;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: var(--theme_white);
        font-size: 50px;
        font-weight: 900;
   }
   .card_text {
        color: gray;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
   }
   .card_body {
        display: flex;
        flex-flow: row wrap;
   }
   .card_div_main {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        display: flex;
        flex-flow: row wrap;
   }
   .card_article {
        display: flex;
        position: relative;
        flex: 0 0 100%;
        border: 1px solid #f2f2f2;
        border-radius: 24px;
        background-color: var(--theme_white);
        box-shadow: 3px 46px 99px rgba(0,0,0,.051);
        text-align: right;
        padding: 25px;
        max-width: 290px;
        height: 270px;
        margin: 10px;
   }
   .card_picture {
        position: relative;
        overflow: hidden;
        text-align:right;
   }
   .cards_image {
        border-radius: 50%;
        width: 75px;
        height: 75px;
        margin: 0px;
    }
   .card_content_header {
        padding: 0px;
        color: #FF6E0E;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: var(--theme_white);
        font-size: 30px;
        font-weight: 900;
        margin: 0px;
        text-align: left;
   }
   .card_content_subheader {
        padding: 0px;
        color: #FF6E0E;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: var(--theme_white);
        font-size: 20px;
        font-weight: 900;
        margin: 0px;
        text-align: left;
   }
   .card_content_text {
        padding: 0px;
        color: gray;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: var(--theme_white);
        font-size: 18px;
        margin: 0px;
        text-align: left;
   }
   /* SWIPER */
   .swiper {
        width: 945px;
        height: 500px;
    }
    .swipe_subhead {
        padding: 0px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: var(--theme_white);
        font-size: 20px;
        font-weight: light;
        margin: 15px;
        text-align: left;
    }
    .swipe_header {
        padding: 0px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: var(--theme_white);
        font-size: 30px;
        font-weight: 900;
        margin: 15px;
        text-align: left;
    }
    .swipe_text {
        padding: 0px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: var(--theme_white);
        font-size: 18px;
        margin: 15px;
        text-align: left;
    }
    .swipe_left_container {
        padding: 10px;
        position: flex;
        text-align: center;
        width: 450px;
        z-index: 2;
        align-self: center;
        flex: 1 0 5%;
        padding: 20px 60px 20px 40px;
    }
    .swipe_right_container {
        width: fit-content;
        display: flex;
    }
</style>
<body>
    <div class="navigation_bar" id="navbar">
        <div class="header_div">
            <div class="header_buttons">
                <div class="socials">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-vine"></a>
                </div>
                <div class="header_contacts">
                    <a href="/" class="general_button transparent_button">Contact Us</a>
                    <button class="general_button">Chat With Us</button>
                </div>
            </div>
        </div>
        <div class="header_nav">
            <div class="nav_content">
            <h1 class="h1_nav">DUNKIN</h1><h1 class="h1_nav pink_highlight">'</h1>
            <ul class="navigation_refs">
                <li class="navigation_ref_item">
                    <a href="" class="ref_item_link"> Menu</a>
                </li>
                <li class="navigation_ref_item">
                    <a href="" class="ref_item_link">About Us</a>
                </li>
                <li class="navigation_ref_item">
                    <a href="" class="ref_item_link">Sustainability</a>
                </li>
                <li class="navigation_ref_item">
                    <a href="" class="ref_item_link">Franchise</a>
                </li>
                <li class="navigation_ref_item">
                    <a href="" class="ref_item_link">Careers</a>
                </li>
                <li class="navigation_ref_item">
                    <a href="" class="ref_item_link">Media</a>
                </li>
            </ul>
            </div>
        </div>
    </div>
    <section class="body_section">
        <div class="body_div">
            <div class="body_image"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/Banner/2022-12-20/bg-image-1_15-45-42-626987.jpg" width="1920" height="750" alt="test" loading="lazy" title="test">
            </div>
            <div class="body_main">
                <div class="body_content">
                    <div class="body_separate">
                        <div class="body_left">
                            <h1 class="h1_nav">CREATING<br> DUNKIN'-FILLED MEMORIES FOR GENERATIONS</h1>
                            <p>For over 40 years, we have been creating lasting memories with the Filipinos the way only Dunkin' can.</p>
                            <div class="body_buttons">
                                <button class="general_button transparent_button">FRANCHISE WITH US</button>
                                <button class="general_button blue_button">EXPLORE MENU</button>
                            </div>
                        </div>
                        <div class="body_right">
                            <img src="https://dev-api.dunkindonuts.ph/storage/uploads/banner/2023-02-13/dunkinhomepage-mini_15-18-16-035132.png" width="680" height="643" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page">
                        </div>
                    </div>
                </div>
                <div style="top: 95%;"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/Banner/2022-12-20/bg-drip-1_15-45-44-181169.png" width="1920" height="248" alt="test" loading="lazy" title="test">
                </div>
            </div>
        </div>
    </section>
    <div class="cards_content">
        <div class="cards_header">
            <h1 class="cards_h1">THE DUNKIN STORY</h1>
            <p class="card_text">It's a success that started in 1950 as a single donut shop in <br>Massachusetts, and now includes over 9,800 shops.</p><br>
            <button class="general_button blue_button">ABOUT US</button>
        </div>
        <div class="card_div_main">
            <div>
                <article class="card_article">
                    <div class="card_div">
                        <picture class="card_picture"><source srcset="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" type="image/webp"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" width="600" height="440" alt="dunkin" loading="lazy" title="dunkin" class="cards_image"></picture>
                        <div>
                            <p class="card_content_header">73</p>
                            <p class="card_content_subheader">Years of Service</p>
                            <p class="card_content_text">In 1950, Bill Rosenberg launched Dunkin' in the USA. It went on to become one of the the world's biggest coffee and donut shop chains.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="card_article">
                    <div class="card_div">
                        <picture class="card_picture"><source srcset="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" type="image/webp"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" width="600" height="440" alt="dunkin" loading="lazy" title="dunkin" class="cards_image"></picture>
                        <div>
                            <p class="card_content_header">42</p>
                            <p class="card_content_subheader">Years in the Philippines</p>
                            <p class="card_content_text">In 1981, Dunkin' reached the Philippine shores and had been delighting Filipinos with iconic treats since then.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="card_article">
                    <div class="card_div">
                        <picture class="card_picture"><source srcset="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" type="image/webp"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" width="600" height="440" alt="dunkin" loading="lazy" title="dunkin" class="cards_image"></picture>
                        <div>
                            <p class="card_content_header">700+</p>
                            <p class="card_content_subheader">Stores Nationwide</p>
                            <p class="card_content_text">With over 700 branches across the country, Filipinos can easily get their fix for donuts, coffee, and more...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="card_article">
                    <div class="card_div">
                        <picture class="card_picture"><source srcset="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" type="image/webp"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" width="600" height="440" alt="dunkin" loading="lazy" title="dunkin" class="cards_image"></picture>
                        <div>
                            <p class="card_content_header">*</p>
                            <p class="card_content_subheader">Bringing Dunkin' Closer to Bikers</p>
                            <p class="card_content_text">Dunkin' launched its first-ever drive-thru with a bike lane in Quezon City, serving thousands of bikers in the metro.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div>
                <article class="card_article">
                    <div class="card_div">
                        <picture class="card_picture"><source srcset="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" type="image/webp"><img src="https://dev-api.dunkindonuts.ph/storage/uploads/story-stat/2023-03-30/dunkinstoryicon1-svg_15-11-18-258399.svg" width="600" height="440" alt="dunkin" loading="lazy" title="dunkin" class="cards_image"></picture>
                        <div>
                            <p class="card_content_header">*</p>
                            <p class="card_content_subheader">Committed to Innovation</p>
                            <p class="card_content_text">Say hello to Number 1, Dunkin's first-ever service robot that made the brand accessible during the pandemic.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="slides_div">
            <div class="cards_header">
                <h1 class="cards_h1">A DOZEN THINGS YOU DIDN'T<br>KNOW ABOUT DUNKIN'</h1>
            </div>
                <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-color:#FF6E0E">
                    <div class="swipe_left_container">
                        <p class="swipe_subhead">TRIVIA</p>
                        <p class="swipe_header">CHOCO BUTTERNUT IS PROUDLY PINOY!!!</p>
                        <p class="swipe_text">The iconic Choco Butternut is a proudly a product of Filipino ingenuity. For the longest time, this Filipino favorite is only available in the Philippines. It has become a classic treat loved by people of all ages.</p>
                    </div>
                    <div class="swipe_right_container">
                        <img src="https://dev-api.dunkindonuts.ph/storage/uploads/banner/2023-02-13/dunkinhomepage-mini_15-18-16-035132.png" width="680" height="643" alt="Dunkin Home Page" loading="lazy" title="Dunkin Home Page">
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <div class="swipe_left_container">
                        <p class="swipe_subhead">TRIVIA</p>
                        <p class="swipe_header">MANY THOUGHT DUNKIN' IS A LOCAL BRAND</p>
                        <p class="swipe_text">Dunkin' has been bringing smiles to Filipinos for four decades. Filipinos love DUnkin' so much that they believe it is a local brand. This only shows how deeply ingrained the brand is in our culture.</p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#FF6E0E">
                    <div class="swipe_left_container">
                        <p class="swipe_subhead">TRIVIA</p>
                        <p class="swipe_header">DUNKIN' STARTED BIG WITH 52 DONUT VARIETIES!</p>
                        <p class="swipe_text">Dunkin' shot to fame in the 1950s when it did something unheard of at the time-offering 42 different varieties of donuts. The wide range of offerings allowed the brand to highlight one variety of donut every week.</p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#f20c90">
                    <div class="swipe_left_container">
                        <p class="swipe_subhead">TRIVIA</p>
                        <p class="swipe_header">DUNKIN' STARTED AS A FOOD TRUCK BUSINESS</p>
                        <p class="swipe_text">Before the coffee and the donuts, Bill Rosenberg started a food truck business named Industrial Luncheon Services COmpany, designed to feed workers during World War II. At the height of its operations, Bill noticed that almost half of his company's sales came from coffee and donuts. The inspired him to start a restaurant called the Open Kettle, which offered his best-sellers. After two years, it became the DUnkin' we all know and love.</p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-color:#49cdd5">
                    <div class="swipe_left_container">
                        <p class="swipe_subhead">TRIVIA</p>
                        <p class="swipe_header">DUNKIN' HAD ITS OWN ICONIC CHARACTER</p>
                        <p class="swipe_text">In 1982, Dunkin' was represented by its longtime sleepy-eyed ambassador, Fred the Baker. He starred in one of the brand's most popular ad campaigns and became famous for his catchphrase. "Time to make donuts!" He was well-loved by Dunkin's patrons until his retirement in 1997.</p>
                    </div>
                </div>
                
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
<script>
    /* SCROLL BAR */
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
        if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
        } else {
        navbar.classList.remove("sticky");
        }
            }
</script>
    <!-- SWIPER -->
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper('.swiper', {
  // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    });
</script>

</body>
</html>