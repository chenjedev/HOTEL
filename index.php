<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <!------------- HEADER --------==-->
    <section class="header">
        <div class="head-contact">
          <p>contact@example.com</p>
          <p>+1 5589 55488 55</p>
        </div>
        <div class="head-icon">
     
        </div>
    </section>

    <section class="nav-bar">
        <div class="logo">
            <h1>Grandoria</h1>
        </div>
        <ul  class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#location">Location</a></li>
            <li><a href="#contacts">Contact</a></li>
        </ul>
        <div class="humbergur">=</div>
    </section>


    <!------------------ HERO ----------------->
    <section class="hero" id="home">
        <img src="img/hotel/showcase-3.webp">
        <div class="overlay"></div>

        <div class="hero-contents">
           <h1>Luxury Redefined in Every Stay</h1>
           <p>Experience unparalleled comfort and sophistication at our premium hotel. From elegant suites to world-class amenities, every moment of your stay is crafted to perfection.</p>
           <div class="hr-service">
                <p>Complimentary WiFi</p>
                <p>Valet Parking</p>
                <p>24/7 Room Service</p>
           </div>
           <div class="hero-cta">
                <div class="hr-1"><a href="#book">Book Now</a></div>
                <div class="hr-2"><a href="#rooms">View Rooms</a></div>
           </div>
        </div>

        <div class="hero-form">
             <form class="booking" id="book" name="booking" action="contact.php" method="POST">
               <input type="text" name="name" placeholder="Your Name" required>
               <input type="email" name="email"  placeholder="Your Email" required>
               <input type="tel" name="phone" placeholder="Phone Number" required>
               <select required name="guest">
                <option value="">Guest</option>
                <option value="1">1 Person</option>
                <option value="2">2 Peoples</option>
                <option value="3">3 Peoples</option>
                <option value="4">4 Peoples</option>
               </select>
               <select required name="class">
                <option value="">Room Class</option>
                <option value="1">Executive</option>
                <option value="2">Popular</option>
                <option value="3">Premium</option>
                <option value="4">Family</option>
                <option value="4">Bussines</option>
               </select>
               <input type="date" name="date" placeholder="Date" required>
               <input type="time" name="time" placeholder="Time" required>
               <textarea name="request" placeholder="Special request..."></textarea>
               <button type="submit" name="submit" >Reserve Now</button>
             </form>
        </div>
    </section>


    <!-------------------------- ABOUT --------------------->
    <section class="about" id="about">

        <div class="abt-image">
          <img src="img/hotel/showcase-8.webp">
          <div class="abt-img"><img src="img/hotel/room-14.webp"></div>
        </div>

        <div class="abt-cont">
          <h1>Welcome to Grandoria Resort</h1>
          <p class="abt-cont-desc">Where luxury meets tranquility in the heart of nature's paradise.</p>
          <p>Nestled among rolling hills and pristine landscapes, Grandview Resort has been offering exceptional hospitality for over three decades. Our commitment to excellence and attention to detail creates an unforgettable experience for discerning travelers seeking both comfort and adventure.</p>
          <p>From our elegantly appointed suites to our world-class amenities, every aspect of your stay is designed to exceed expectations. Discover breathtaking views, exquisite dining, and personalized service that makes every moment special.</h1>
          </p>

          <div class="abt-cont-numb">
            <div class="abt-cont-item">
                <h2>185</h2>
                <p>Luxury Rooms</p>
            </div>
             <div class="abt-cont-item">
                <h2>98%</h2>
                <p>Guest Satisfaction</p>
             </div>
              <div class="abt-cont-item">
                <h2>30</h2>
                <p>Years of Excellence</p>
              </div>
          </div>

          <div class="abt-cta">
            <div class="abt-cta-1"><a href="#about">Our Story</a></div>
             <div class="abt-cta-2"><a href="#rooms">View Rooms</a></div>
          </div>
        </div>

    </section>

    <!---------------------- ROOMS ---------------------->
    <section class="rooms" id="rooms">
        <h1>ROOMS</h1>
        <div class="rooms-container">

            <div class="room">
              <img src="img/hotel/room-19.webp">
              <div class="room-desc">
                <h3>Executive Business Room</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                <div class="room-desc-icons">
                  <p>Work Space</p>
                  <p>City Views</p>
                </div>
                <div class="book">
                      <p><span class="price">$329</span>/night</p>
                      <a href="#book">Book</a>
                </div>
              </div>
            </div>

            <div class="room">
              <img src="img/hotel/room-3.webp">
              <div class="room-desc">
                  <h3>Garden View Deluxe</h3>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                <div class="room-desc-icons">
                  <p>Garden View</p>
                  <p>Private Terrace</p>
                </div>
                <div class="book">
                      <p><span class="price">$269</span>/night</p>
                      <a href="#book">Book</a>
                </div>
              </div>
            </div>

            <div class="room">
              <img src="img/hotel/room-15.webp">
              <div class="room-desc">
                  <h3>Family Comfort Suite</h3>
                  <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                <div class="room-desc-icons">
                  <p>Family Space</p>
                  <p>Kids Area</p>
                </div>
                <div class="book">
                      <p><span class="price">$419</span>/night</p>
                      <a href="#book">Book</a>
                </div>
              </div>
            </div>

            <div class="room">
              <img src="img/hotel/room-15.webp">
              <div class="room-desc">
                <h3>Executive Business Room</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                <div class="room-desc-icons">
                  <p>Work Space</p>
                  <p>City Views</p>
                </div>
                <div class="book">
                      <p><span class="price">$329</span>/night</p>
                      <a href="#book">Book</a>
                </div>
              </div>
            </div>

            <div class="room">
              <img src="img/hotel/room-8.webp">
              <div class="room-desc">
                   <h3>Executive Business Room</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                <div class="room-desc-icons">
                  <p>Work Space</p>
                  <p>City Views</p>
                </div>
                <div class="book">
                      <p><span class="price">$329</span>/night</p>
                      <a href="#book">Book</a>
                </div>
              </div>
            </div>
            
        </div>

        <div class="rooms-container-2">

            <div class="room">
              <img src="img/hotel/room-1.webp">
              <div class="room-desc">
                <p>Classic Double</p>
                <p><span class="price">$189</span>/night</p>
              </div>
            </div>

           <div class="room">
              <img src="img/hotel/room-7.webp">
              <div class="room-desc">
                <p>Superior King</p>
                <p><span class="price">$249</span>/night</p>
               </div>
            </div>

            <div class="room">
              <img src="img/hotel/room-8.webp">
              <div class="room-desc">
                <p>Premium Ocean View</p>
                <p><span class="price">$359</span>/night</p>
                </div>
            </div>

            <div class="room">
              <img src="img/hotel/room-17.webp">
              <div class="room-desc">
                <p>Luxury Penthouse</p>
                <p><span class="price">$549</span>/night</p>
                </div>
            </div>       
        </div>

    </section>

    <!--------------------   EVENTS ------------------>
    <section class="events" id="events">
        <h1>EVENTS</h1>
       <div class="events-co">
        <div class="room">
              <img src="img/hotel/event-6.webp">
              <div class="room-desc">
                   <h2>Wedding Celebrations</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                  <p>Premium Venues</p>
                  <p>Full Catering</p>
                  <a href="#gg">Explore Details >>></a> 
              </div>
        </div>

        
        <div class="room">
              <img src="img/hotel/event-1.webp">
              <div class="room-desc">
                   <h2>Executive Business Room</h2>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                  <p>Work Space</p>
                  <p>City Views</p>
                  <a href="#gg">Explore Details >>></a> 
              </div>
        </div>

        
        <div class="room">
              <img src="img/hotel/event-8.webp">
              <div class="room-desc">
                  <h2>Business Conferences</h2>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                  <p>Modern Tech</p>
                  <p>WiFi Access</p>
                  <a href="#gg">Explore Details >>></a></a> 
              </div>
        </div>

        
        <div class="room">
              <img src="img/hotel/room-5.webp">
              <div class="room-desc">
                  <h2>Special Occasions</h2>
                  <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi</p>
                  <p>Custom Setup</p>
                  <p>Event Coordination</p>
                  <a href="#gg">Explore Details >>></a><br><br> 
              </div>
        </div>

        <div class="room">
              <img src="img/hotel/event-9.webp">
              <div class="room-desc">
                   <h2>VIP Gatherings</h2>
                  <p>Mollit anim id est laborum at vero eos et accusamus et iusto odio dignissimos</p>
                  <p>Exclusive Access</p>
                  <p>Premium Service</p>
                  <a href="#gg">Explore Details >>></a> 
                  <br><br>
              </div>
        </div>
       </div>
    </section>


    <!----------------------------- OFFER --------------------------->
    <section class="offers" id="offers">
        <h1>OFFERS</h1>
        <div class="offers-container">
            <div class="room">
              <img src="img/hotel/showcase-3.webp">
              <div class="room-desc">
                   <h2>Weekend Getaway</h2>
                  <p>Escape the ordinary with our exclusive weekend package. Includes complimentary breakfast and late checkout until 2 PM.</p>
                  <p><span class="offers-price">$299</span><span class="price">$224</span>  per night</p>
                  <p>Valid until Dec 31, 2024</p>
                  <div class="bookk"><a href="#gg">Book Now</a></div>
                  <br><br>
              </div>
            </div>

            <div class="room">
              <img src="img/hotel/showcase-7.webp">
              <div class="room-desc">
                   <h2>Extended Stay Deal</h2>
                  <p>Stay 5 nights or more and enjoy significant savings. Perfect for business travelers and extended vacations with premium amenities.</p>
                  <p><span class="offers-price">$189</span><span class="price">$149</span>  per night</p>
                  <p>Book by Jan 15, 2025</p>
                  <div class="bookkk"><a href="#gg">Reserve Today</a></div>
                  <br><br>
              </div>
            </div>

            <div class="room">
              <img src="img/hotel/showcase-11.webp">
              <div class="room-desc">
                <h2>Advance Booking</h2>
                  <p>Plan ahead and save more! Book your stay 30 days in advance and enjoy exclusive rates with free cancellation up to 7 days.</p>
                  <p><span class="offers-price">$189</span><span class="price">$149</span>  per night</p>
                  <p>Available year-round</p>
                  <div class="bookk"><a href="#gg">Book Early</a></div>
                  <br><br>
              </div>
            </div>

    </section>


    <!------------------ LOCATION -------------->
    <section class="location-brief" id="location">
        <div class="location-contents">
            <div class="location-head">
                 <h2>Prime Location Benefits</h2>
                 <p>Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
            </div> 
            <div class="location">
                 <h3>Public Transport Hub</h3>
                 <p>Metro station 200m away</p>
            </div>
            <div class="location">
                 <h3>Airport Connection</h3>
                 <p>Direct shuttle every 30 min</p>
            </div>
            <div class="location">
                 <h3>Valet Parking</h3>
                 <p>Complimentary for guests</p>
            </div>
            <div class="location">
                 <h3>City Center Access</h3>
                 <p>Walking distance to main attractions</p>
            </div>
            <div class="location-1">
                <a href="#hdd">View Full Location Guide</a> 
            </div>
        </div>
        <div class="locaton-map"></div>
    </section>

    <!------------- GALERY-BRIEF -------------->
    <section class="galery-brief" id="gallery">
        <div class="galery-container">
             <div class="photos">
                  <img src="img/hotel/gallery-3.webp">
             </div>
             <div class="photos">
                  <img src="img/hotel/gallery-8.webp">
             </div>
             <div class="photos">
                  <img src="img/hotel/gallery-1.webp">
             </div>
             <div class="photos">
                  <img src="img/hotel/gallery-15.webp">
             </div>
             <div class="photos">
                  <img src="img/hotel/gallery-18.webp">
             </div>
      </div>
      <div class="gallerylink"><a href="#fds">Discover Our Full Gallery</a></div>
    </section>


    <!---------------- FOOTER -------------------->
    <section class="footer" id="contacts">
        <div class="logo">
            <h1>Grandoria</h1>
            <p>A108 Adam Street <br> New York, NY 535022 <br> Phone: +1 5589 55488 55 <br> Email: info@example.com</p>
        </div>
     
        <div class="QuickLinks">
            <h4>Quick Links</h4>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#rooms">Rooms</a>
            <a href="#events">Events</a>
            <a href="#location">Location</a>
            <a href="#contacts">Contact</a>
        </div>
    </section>
    
    <hr> <br>
    <div class="copyright">
        <p>© 2025 Copyright Grandoria . All Rights Reserved.</p>
    </div>


</body>
</body>

</html>