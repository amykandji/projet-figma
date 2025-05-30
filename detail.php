<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>
    <!--header-->
    <header>
        <nav class="home_page">
        
            <img src="image/logo.png" class="logo" alt="
            logo">


            <div class="home_links">
                <ul>
                    <li class="home"><a href="index.php">Home</a></li>
                    <li><a href="About.php">AboutUs</a></li>
                    <li><a href="tourPackage.php">Tourpackages</a></li>
                    <li><a href="conctactus.php">ContactUs</a></li>
                </ul>
               
            </div>

            <div class="nav-right">
                <div class="dropdown">
                    <a href="#"> <select>
                        <option value="Eng">Eng</option>
                        <option value="Eng">Fr</option>
                    </select></a>
                </div>
                <a href="#" class="login">Login</a>
                <a href="#" class="signup">Sign Up</a>

                
          </div>
        </nav>
        <hr>
    </header>
    <!-- ... -->
     <section class="section-2">
        <div class="les-images">
            <div class="image-mere">
                <img src="image/Rectangle 391.png" alt="">
            </div>
            <div class="images-enfants">
                <img src="image/Rectangle 40.png" alt="">
                <img src="image/Rectangle 41.png" alt="">
                <img src="image/Rectangle 42.png" alt="">
            </div>
        </div>
        <div class="box-deux">
            <h1 class="p1">Wine tasting In Tuscany</h1>
            <span>from <span class="price">34$</span></span> <br>
                <p class="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
                    Lorem Ipsum has been the industry's standard dummy text ever since  <br>
                     the 1500s, when an unknown printer took a galley of type and scrambled it to make <br>
                     a type specimen book</p>
            

                   <div class="container">
                    <label>Select a date</label>
                    <div class="calendar">
                        <div class="calendar-header">
                            <span id="month-year">December 2022</span>
                            <div class="nav">
                                <span id="prev">&lt;</span>
                                <span id="next">&gt;</span>
                            </div>
                        </div>
                        <div class="days" id="calendar-days"></div>
                    </div>
            
                    <label for="time">Time</label>
                    <div class="input-container">
                        <input type="text" id="time" placeholder="Select the time" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text'">
                    </div>
                    <a href="buy.html">
                    <button class="btn">Buy Now</button>
                    </a>
                </div>
            
                <script>
                    const monthYear = document.getElementById("month-year");
                    const calendarDays = document.getElementById("calendar-days");
                    const prevBtn = document.getElementById("prev");
                    const nextBtn = document.getElementById("next");
            
                    let date = new Date();
                    let currentMonth = date.getMonth();
                    let currentYear = date.getFullYear();
            
                    const months = [
                        "January", "February", "March", "April", "May", "June", 
                        "July", "August", "September", "October", "November", "December"
                    ];
            
                    function renderCalendar() {
                        monthYear.textContent = `${months[currentMonth]} ${currentYear}`;
                        calendarDays.innerHTML = "";
            
                        let firstDay = new Date(currentYear, currentMonth, 1).getDay();
                        let lastDate = new Date(currentYear, currentMonth + 1, 0).getDate();
            
                        for (let i = 0; i < firstDay; i++) {
                            calendarDays.innerHTML += "<span></span>";
                        }
            
                        for (let i = 1; i <= lastDate; i++) {
                            let dayElement = document.createElement("span");
                            dayElement.textContent = i;
                            dayElement.classList.add("day");
                            
                            if (i === date.getDate() && currentMonth === date.getMonth() && currentYear === date.getFullYear()) {
                                dayElement.classList.add("selected");
                            }
            
                            dayElement.addEventListener("click", function() {
                                document.querySelectorAll(".day").forEach(d => d.classList.remove("selected"));
                                this.classList.add("selected");
                            });
            
                            calendarDays.appendChild(dayElement);
                        }
                    }
            
                    prevBtn.addEventListener("click", () => {
                        currentMonth--;
                        if (currentMonth < 0) {
                            currentMonth = 11;
                            currentYear--;
                        }
                        renderCalendar();
                    });
            
                    nextBtn.addEventListener("click", () => {
                        currentMonth++;
                        if (currentMonth > 11) {
                            currentMonth = 0;
                            currentYear++;
                        }
                        renderCalendar();
                    });
            
                    renderCalendar();
                </script>
        </div>
     </section>

      <!-- section3 -->
       
    <div class="details-container">
        <h2>Details</h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also 
            the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>

        <ul class="details-list">
            <li><img src="image/icon_private tours (1).png" alt=""> <strong>Number of group:</strong> 15-30</li>
            <li><img src="image/icon_duration.png" alt=""> <strong>Duration:</strong> 15 hours and 45 minutes</li>
            <li><img src="image/akar-icons_location.png" alt=""> <strong>Departuring and arriving areas:</strong> Lucca</li>
            <li><img src="image/icon_guide (1).png" alt=""><strong>Guide service:</strong> Included</li>
            <li><img src="image/icon_language.png" alt=""><strong>Language:</strong> English, Italian</li>
            <li><img src="image/icon_ticket.png" alt=""><strong>Entry Fees:</strong> lorem ipsum</li>
            <li><img src="image/Layer 11.png" alt=""><strong>Entry Transportation:</strong> Bus</li>
        </ul>
    </div>

    
            <!-- fin section3 -->
             <!-- section4 -->
              
    <div class="gallery-container">
        <h2 class="galery"><strong>Gallery</strong></h2>
        <div class="navigation">
            <button class="nav-btn prev">❮</button>
            <button class="nav-btn next">❯</button>
        </div>

        <div class="gallery">
            <div class="gallery-item large">
                <img src="image/Rectangle 43.png" alt="Paysage verdoyant">
            </div>
            <div class="gallery-column">
                <div class="gallery-item">
                    <img src="image/Rectangle 44.png" alt="Cave à vin">
                </div>
                <div class="gallery-item">
                    <img src="image/Rectangle 45.png" alt="Cyclistes en nature">
                </div>
            </div>
            <div class="gallery-item tall">
                <img src="image/Rectangle 46.png" alt="Ville historique">
            </div>
        </div>

    </div>
              <!-- fin section4 -->
               <!-- section5 -->
               <section class="testimonials">
                <h2 class="galery">Happy Customers Says</h2>
                <div class="navigation">
                    <button class="nav-btn prev">❮</button>
                    <button class="nav-btn next">❯</button>
                </div>
                <div class="testimonial-container">
                    <div class="testimonial-card">
                        <img src="image/Ellipse 4.png" alt="">
                        <h3>Lyod Gomez</h3>
                        <p class="quote">“</p>
                        <p class="testimonial-text">
                            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born 
                            and I will give you a complete account of the system, and expound the actual teachings of the great explorer 
                            of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, 
                            because it is pleasure.
                        </p>
                        <p class="quote end-quote">”</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="image/Ellipse 4.png" alt="">
                        <h3>Lyod Gomez</h3>
                        <p class="quote">“</p>
                        <p class="testimonial-text">
                            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born 
                            and I will give you a complete account of the system, and expound the actual teachings of the great explorer 
                            of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, 
                            because it is pleasure.
                        </p>
                        <p class="quote end-quote">”</p>
                    </div>
                </div>
            
            </section>
                <!-- fin section5 -->

                 <!-- section6 -->
                 <footer class="footer">
                    <div class="footer-container">
                        <div class="footer-logo">
                            <img src="image/logo.png" alt="Logo Tuscany">
                        </div>
                        <hr>
            
                        <div class="footer-links">
                            <div class="footer-column">
                                <h3>Services</h3>
                                <ul>
                                    <li><a href="#">Bike and Rickshaw rental</a></li>
                                    <li><a href="#">Guided Tours of Lucca</a></li>
                                    <li><a href="#">Guided Bike Tour of Lucca</a></li>
                                    <li><a href="#">Trip in The Tuscan Hills</a></li>
                                    <li><a href="#">Transportation With Luxury Cars</a></li>
                                    <li><a href="#">Wine Tours By Bus With Guide</a></li>
                                </ul>
                            </div>
            
                            <div class="footer-column">
                                <h3>Home</h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Tour Packages</a></li>
                                </ul>
                            </div>
            
                            <div class="footer-column">
                                <h3>Help</h3>
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
            
                            <div class="footer-column">
                                <h3>Contacts</h3>
                                <li class="wrap"><i><img src="image/Vector.png" alt=""></i> Piazza Napoleone, Lucca, Tuscany</li>
                        <li><i><img src="image/clarity_phone-handset-solid.png" alt=""></i> +39 346 368 5708</li>
                        <li><i><img src="image/fluent_mail-16-filled.png" alt=""></i> italiainlimo@gmail.com</li>
                            </div>
            
                            <div class="footer-column">
                                <h3>Social Media</h3>
                                <div class="social-icons">
                                    <a href="#"><img src="image/ant-design_twitter-circle-filled (1).png" alt="Twitter"></a>
                                     <a href="#"><img src="image/entypo-social_facebook-with-circle.png" alt="Facebook"></a>
                                 <a href="#"><img src="image/ant-design_twitter-circle-filled.png" alt="Instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="footer-bottom">
                        <p>Copyright © 2022, All rights reserved.</p>
                    </div>
                </footer>
                      <!-- fin dection6 -->
</body>
</html>