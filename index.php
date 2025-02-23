<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <title>Royal Hotel</title>
</head>
<body>
<!--Header-->
    <header>
        <div class="content flex_space">
            <div class="logo">
                <img src="images/logo.jpeg" alt="">
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="index.html"  target="_blank">Home</a></li>
                    <li><a href="rooms.html"  target="_blank">Rooms</a></li>
                    <li><a href="about.html"  target="_blank">About</a></li>
                    <li><a href="contact.html"  target="_blank">Contact</a></li>
                    <li><button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button></li>
                </ul>
                <span class="fa fa-bars" onclick="menutoggle()"></span>
            </div>
        </div>
    </header>
    <script>
        var menulist= document.getElementById('menulist');
        menulist.style.maxHeight= '0px';

        function menutoggle(){
            if(menulist.style.maxHeight=='0px'){
                menulist.style.maxHeight= '100vh';
            }else{
                menulist.style.maxHeight= '0px';
            }

        }
    </script>
<!--Header-->

 <!--HOME-->
    <section class="home">
        <div class="content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="images/banner2.jpeg" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>
                            A Royal Hotel delivers unparalleled luxury, combining elegant accommodations with exceptional service in a grand, sophisticated setting.
                        </p>
                        <div class="flex">
                        <a href='about.html' target='_blank' class="primary-btn">READ MORE</a>
                        <a href='contact.html' target='_blank' class="secondary-btn">CONTACT US</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/banner1.webp" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>
                            A Royal Hotel delivers unparalleled luxury, combining elegant accommodations with exceptional service in a grand, sophisticated setting.
                        </p>
                        <div class="flex">
                        <a href='about.html' target='_blank' class="primary-btn">READ MORE</a>
                        <a href='contact.html' target='_blank' class="secondary-btn">CONTACT US</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/banner3.avif" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>
                            A Royal Hotel delivers unparalleled luxury, combining elegant accommodations with exceptional service in a grand, sophisticated setting.
                        </p>
                        <div class="flex">
                        <a href='about.html' target='_blank' class="primary-btn">READ MORE</a>
                        <a href='contact.html' target='_blank' class="secondary-btn">CONTACT US</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/banner4.avif" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>
                            A Royal Hotel delivers unparalleled luxury, combining elegant accommodations with exceptional service in a grand, sophisticated setting.
                        </p>
                        <div class="flex">
                        <a href='about.html' target='_blank' class="primary-btn">READ MORE</a>
                        <a href='contact.html' target='_blank' class="secondary-btn">CONTACT US</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/banner55.avif" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>
                            A Royal Hotel delivers unparalleled luxury, combining elegant accommodations with exceptional service in a grand, sophisticated setting.
                        </p>
                        <div class="flex">
                        <a href='about.html' target='_blank' class="primary-btn">READ MORE</a>
                        <a href='contact.html' target='_blank' class="secondary-btn">CONTACT US</a>
                        </div>
                    </div>
                </div>
               
            </div>

        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
         loop:true,
         margin: 0,
         nav:true,
         dots: false,
         navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
         responsive:{
           0:{
            items:1
            },
           768:{
            items:1
            },
           1000:{
            items:1
            }
          }
        })
    </script>
 <!--HOME-->

<!--BOOK-->
    <section class="book">
        <div class="container flex_space">
            <div class="text">
                <h1><span>Book</span> Your Rooms</h1>
            </div>
            <div class="form">
                <form action="form.php" class="grid" method="POST">
                    <input type="date" placeholder="Arrival Date">
                    <input type="date" placeholder="Departure Date">
                    <input type="number" placeholder="Adults">
                    <input type="number" placeholder="Children">
                    <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                </form>
            </div>
        </div>
    </section>
<!--BOOK-->

<!--ABOUT-->
 <section class="about top">
    <div class="container flex">
        <div class="left">
            <div class="heading">
                <h1>WELCOME</h1>
                <h2>Royal Hotel</h2>
            </div>
            <p> 
              Royal Hotel offers an exceptional blend of luxury and elegance, providing guests 
              with opulent accommodations and top-tier amenities. From grand architecture to fine
               dining and personalized service, every detail is crafted to deliver a regal experience. 
               Guests can indulge in luxurious spa treatments, enjoy beautifully appointed rooms, and 
               savor the finest cuisine, all within a setting of timeless sophistication.
            </p>
            <button class="primary-btn">About Us</button>
        </div>
        <div class="right">
            <img src="images/aboutus.jpeg" alt="">
        </div>
    </div>
 </section>
<!--ABOUT-->

<!--COUNTER-->
<section class="counter top">
    <div class="container grid">
        <div class="box">
            <h1>2500</h1>
            <hr>
            <span>Customer</span>
        </div>
        <div class="box">
            <h1>1250</h1>
            <hr>
            <span>Happy Customer</span>
        </div>
        <div class="box">
            <h1>150</h1>
            <hr>
            <span>Expert Technicians</span>
        </div>
        <div class="box">
            <h1>3550</h1>
            <hr>
            <span>Desktop Reaired</span>
        </div>
    </div>
  </section>
<!--COUNTER-->

<!--Rooms-->
    <section class="rooms">
        <div class="container top">
            <div class="heading">
                <h1>EXPLORE</h1>
                <h2>Our Rooms</h2>
                <p>The rooms at a Royal Hotel are exquisitely designed, 
                   offering plush furnishings, modern amenities, and an ambiance of refined elegance for a truly luxurious stay.</p>
            </div>
            <div class="content mtop">
                <div class="owl-carousel owl-carousel1 owl-theme">
                    <div class="items">
                        <div class="images">
                           <img src="images/room1.avif" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p> Superior Room offers enhanced comfort with spacious layouts, premium furnishings, and exclusive amenities, providing an elevated stay experience.</p>
                            <div class="button flex">
                                <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                                <h3>$250 <span> <br>Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="images">
                           <img src="images/room2.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p> Superior Room offers enhanced comfort with spacious layouts, premium furnishings, and exclusive amenities, providing an elevated stay experience.</p>
                            <div class="button flex">
                                <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                                <h3>$250 <span> <br>Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="images">
                           <img src="images/room3.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p> Superior Room offers enhanced comfort with spacious layouts, premium furnishings, and exclusive amenities, providing an elevated stay experience.</p>
                            <div class="button flex">
                                <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                                <h3>$250 <span> <br>Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="images">
                           <img src="images/room4.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p> Superior Room offers enhanced comfort with spacious layouts, premium furnishings, and exclusive amenities, providing an elevated stay experience.</p>
                            <div class="button flex">
                                <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                                <h3>$250 <span> <br>Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="images">
                           <img src="images/room5.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p> Superior Room offers enhanced comfort with spacious layouts, premium furnishings, and exclusive amenities, providing an elevated stay experience.</p>
                            <div class="button flex">
                                <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                                <h3>$250 <span> <br>Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="images">
                           <img src="images/room6.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p> Superior Room offers enhanced comfort with spacious layouts, premium furnishings, and exclusive amenities, providing an elevated stay experience.</p>
                            <div class="button flex">
                                <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                                <h3>$250 <span> <br>Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="images">
                           <img src="images/room7.avif" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p> Superior Room offers enhanced comfort with spacious layouts, premium furnishings, and exclusive amenities, providing an elevated stay experience.</p>
                            <div class="button flex">
                                <button><a href="book.php" class="primary-btn" target="_blank">BOOK NOW</a></button>
                                <h3>$250 <span> <br>Per Night </span> </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        $('.owl-carousel').owlCarousel({
         loop:true,
         margin: 40,
         nav:true,
         dots: false,
         navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
         responsive:{
           0:{
            items:1
            },
           768:{
            items:2,
            margin: 10,
            },
           1000:{
            items:3
            }
          }
        })
    </script>
<!--Rooms-->

<!--Services-->
   <section class="services top">
      <div class="container">
        <div class="heading">
            <h1>SERVICES</h1>
            <h2>Our Services</h2>
            <p>Royal Hotel offers exceptional services, including personalized concierge, fine dining, spa 
                treatments, and comprehensive guest amenities, ensuring a seamless and luxurious experience.</p>
        </div>
        <div class="content flex_space">
            <div class="left grid2">
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-champagne-glasses"></i>
                        <h3>Delicious Food</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-person-biking"></i>
                        <h3>Fitness</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-utensils"></i>
                        <h3>Inhouse Restaurant</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-spa"></i>
                        <h3>Beauty Spa</h3>
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="images/services.webp" alt="">

            </div>
        </div>
      </div>
   </section>
<!--Services-->

<!--Customer-->
   <section class="Customer top">
      <div class="container">
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>
                    I had an incredible stay at this hotel and would highly recommend it to anyone seeking luxury and comfort. 
                    The rooms were immaculate, with elegant decor and all the modern conveniences you could ask for. The staff 
                    were exceptionally attentive, making me feel welcome and ensuring every need was met promptly. The dining 
                    options were superb, offering a range of delicious cuisine in a beautifully set atmosphere. The spa experience 
                    was another highlight, providing a perfect way to relax after a day 
                    of exploring. Overall, this hotel exceeded my expectations in every way, making my stay truly unforgettable.</p>
                <h3>Julia Robertson</h3>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>
                    I had an incredible stay at this hotel and would highly recommend it to anyone seeking luxury and comfort. 
                    The rooms were immaculate, with elegant decor and all the modern conveniences you could ask for. The staff 
                    were exceptionally attentive, making me feel welcome and ensuring every need was met promptly. The dining 
                    options were superb, offering a range of delicious cuisine in a beautifully set atmosphere. The spa experience 
                    was another highlight, providing a perfect way to relax after a day 
                    of exploring. Overall, this hotel exceeded my expectations in every way, making my stay truly unforgettable.</p>
                <h3>Edi Holand</h3>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>
                    I had an incredible stay at this hotel and would highly recommend it to anyone seeking luxury and comfort. 
                    The rooms were immaculate, with elegant decor and all the modern conveniences you could ask for. The staff 
                    were exceptionally attentive, making me feel welcome and ensuring every need was met promptly. The dining 
                    options were superb, offering a range of delicious cuisine in a beautifully set atmosphere. The spa experience 
                    was another highlight, providing a perfect way to relax after a day 
                    of exploring. Overall, this hotel exceeded my expectations in every way, making my stay truly unforgettable.</p>
                <h3>Ron Edmond</h3>
            </div>
        </div>
      </div>
   </section>
   <script>
    $('.owl-carousel2').owlCarousel({
     loop:true,
     margin: 0,
     nav: false,
     dots: true,
     responsive:{
       0:{
        items:1
        },
       768:{
        items:1,
        },
       1000:{
        items:1
        }
      }
    })
</script>
<!--Customer-->

<!--News-->
   <section class="news top rooms">
    <div class="container">
        <div class="heading">
            <h1>NEWS</h1>
            <h2>Our News</h2>
            <p>Royal Hotel offers exceptional services, including personalized concierge, fine dining, spa 
                treatments, and comprehensive guest amenities, ensuring a seamless and luxurious experience.</p>
        </div>
        <div class="content flex">
            <div class="left grid2">
                <div class="items">
                    <div class="image">
                        <img src="images/blog1.avif" alt="">
                    </div>
                    <div class="text">
                        <h2>Royal Hotel Superior Rooms</h2>
                        <div class="admin flex">
                            <i class="fa fa-user"></i>
                            <label for="">ADMIN</label>
                            <i class="fa fa-heart"></i>
                            <label for="">452</label>
                            <i class="fa fa-comments"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet con incidunt cupiditate voluptatum magni, at consequuntur dolor architecto suscipit dolorum!</p>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/blog2.webp" alt="">
                    </div>
                    <div class="text">
                        <h2>Royal Hotel Superior Rooms</h2>
                        <div class="admin flex">
                            <i class="fa fa-user"></i>
                            <label for="">ADMIN</label>
                            <i class="fa fa-heart"></i>
                            <label for="">344</label>
                            <i class="fa fa-comments"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet con incidunt cupiditate voluptatum magni, at consequuntur dolor architecto suscipit dolorum!</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="box flex">
                    <div class="img">
                        <img src="images/blog3.webp" alt="">
                    </div>
                    <div class="stext">
                        <h2>Etiam Nel Vequ</h2>
                        <p>Lorem ipsum dolor sit amet con incidunt cupiditate voluptatum magni, at consequuntur dolor architecto suscipit dolorum!</p>
                    </div>
                </div>
                <div class="box flex">
                    <div class="img">
                        <img src="images/blog4.jpeg" alt="">
                    </div>
                    <div class="stext">
                        <h2>Etiam Nel Vequ</h2>
                        <p>Lorem ipsum dolor sit amet con incidunt cupiditate voluptatum magni, at consequuntur dolor architecto suscipit dolorum!</p>
                    </div>
                </div>
                <div class="box flex">
                    <div class="img">
                        <img src="images/blog5.jpeg" alt="">
                    </div>
                    <div class="stext">
                        <h2>Etiam Nel Vequ</h2>
                        <p>Lorem ipsum dolor sit amet con incidunt cupiditate voluptatum magni, at consequuntur dolor architecto suscipit dolorum!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
<!--News-->


<!--Newsletter-->
    <section class="newsletter mtop">
         <div class="container flex_space">
            <h1>Subscribe to Our Newsletter</h1>
            <input type="text" placeholder="Your Email">
            <input type="button" value="Subscribe">
         </div>
    </section>
<!--Newsletter-->

<!--Footer-->
<footer>
    <div class="container grid">
        <div class="box">
            <img src="images/logonobg.png" alt="">
            <p>Experience unparalleled luxury and timeless elegance at Royal Hotel, where exceptional 
                service and world-class amenities create unforgettable stays.
            </p>
            <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>

        <div class="box">
            <h2>Links</h2>
            <ul>
                <li>Company History</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Services</li>
                <li>Privacy Policy</li>
            </ul>
        </div>

        <div class="box">
            <h2>Contact Us</h2>
            <p>
                Reach us via phone, email, or through our online contact form, and we'll 
                be delighted to assist you with reservations, special requests, 
                or any questions you may have. We look forward to welcoming you!
            </p>
            <i class="fa fa-location-dot"></i>
            <label for="">1201 park street, Avenue, Dhanmondy, Dhaka</label><br>
            <i class="fa fa-phone"></i>
            <label>[55] 44 576 801</label><br>
            <i class="fa fa-envelope"></i>
            <label>royalhotel@gmail.com</label>
        </div>

    </div>
</footer>
<!--Footer-->

<div class="legal">
    <p class="container">Copyright (c) 2025 Copyright Holder All Rights Reserved</p>
</div>
   
</body>
</html>