<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acheter</title>
    <link rel="stylesheet" href="buy.css">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


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
    <!-- section1 -->
     
<div class="booking-steps">
    <div class="step active">
        <div class="step-circle">1</div>
        <div class="step-label">Booking Details</div>
    </div>
    <div class="step">
        <div class="step-circle">2</div>
        <div class="step-label">Your Details</div>
    </div>
    <div class="step">
        <div class="step-circle">3</div>
        <div class="step-label">Payment</div>
    </div>
</div>
     <!-- section1 -->
      <!-- section2 -->
       <div class="acheter">
        <div class="achat1">
            <h4>When you will visit?</h4>
             <!-- le calendrier    -->
    <div class="date-picker">
        <label for="date">
            <img src="image/calendar.png" alt="Calendrier">
        </label>
        <input type="date" id="date">
    </div>
    <h4>Which time?</h4>
              <!-- l'horloge   -->
    
    <div class="time-picker">
        <i class="fa-regular fa-clock"></i> <!-- Icône d'horloge -->
        <input type="time" id="time">
    </div>
    <!-- le texte -->
    <h4>Select Your Tickets</h4>
    <div class="text">
        <ul>
        <li>.Free for kids under 6 and disabled visitors (74%+)</li> 
        <li>.Pregnant women, families with strollers, and visitors on crutches can buy
             priority tickets at the venue</li>
        </ul>

    </div>
    <!-- tranche -->
  
<div class="ticket-box">
    <div class="ticket-info">
        <span class="ticket-title">Adult (18+)</span>
        <span class="ticket-price">€34.00</span>
    </div>
    <div class="counter">
        <button class="btn minus">−</button>
        <span class="count">0</span>
        <button class="btn plus">+</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const minusBtn = document.querySelector(".minus");
        const plusBtn = document.querySelector(".plus");
        const countDisplay = document.querySelector(".count");

        let count = 0;

        minusBtn.addEventListener("click", () => {
            if (count > 0) {
                count--;
                countDisplay.textContent = count;
            }
        });

        plusBtn.addEventListener("click", () => {
            count++;
            countDisplay.textContent = count;
        });
    });
</script>
<!-- tranche2 -->
<div class="ticket-box">
    <div class="ticket-info">
        <span class="ticket-title">Child (6-17)</span>
        <span class="ticket-description">• With valid ID</span>
        <span class="ticket-description">• Only in combination with: Adult (18+)</span>
        <span class="ticket-price">€22.00 </span>
    </div>
    <div class="counter">
        <button class="btn minus">−</button>
        <span class="count">0</span>
        <button class="btn plus">+</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const minusBtn = document.querySelector(".minus");
        const plusBtn = document.querySelector(".plus");
        const countDisplay = document.querySelector(".count");

        let count = 0;

        minusBtn.addEventListener("click", () => {
            if (count > 0) {
                count--;
                countDisplay.textContent = count;
            }
        });

        plusBtn.addEventListener("click", () => {
            count++;
            countDisplay.textContent = count;
        });
    });
</script>
<!-- tranche3 -->
<div class="ticket-box">
    <div class="ticket-info">
        <span class="ticket-title">Infant (0-5) </span>
        <span class="ticket-description">• Only in combination with: Adult (18+)</span>
        <span class="ticket-price">FREE</span>
    </div>
    <div class="counter">
        <button class="btn minus">−</button>
        <span class="count">0</span>
        <button class="btn plus">+</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const minusBtn = document.querySelector(".minus");
        const plusBtn = document.querySelector(".plus");
        const countDisplay = document.querySelector(".count");

        let count = 0;

        minusBtn.addEventListener("click", () => {
            if (count > 0) {
                count--;
                countDisplay.textContent = count;
            }
        });

        plusBtn.addEventListener("click", () => {
            count++;
            countDisplay.textContent = count;
        });
    });
</script>

       </div>
       </div>
       <!-- fin section2 -->
</body>
</html>