<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tarzan Way</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #f8f8f8;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.logo img {
    height: 60px;
    padding-left: 50px;
    width: 100%;
}

.search input {
    padding: 5px;
    font-size: 16px;
}

.header-buttons {
    display: flex;
    gap: 10px;
}

.header-buttons .tip-button{
    background-color: yellow;
    color: black;
    border: solid;
    border-radius: 10px;
    border-color: black;
}

.header-buttons .tip-button:hover{
    background-color: black;
    color: white;
}
.header-buttons button {
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
}

.hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px;
    margin-top:0 ;
    background-image: url('beach-image.png');
    background-size: cover;
    background-position: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    
}

.hero-content {
    max-width: 50%;
}

.hero-content h1 {
    font-size: 45px;
    margin-top: 0;
    margin-bottom: 1rem;
}

.hero-content p {
    font-size: 30px;
}

.hero-content .free-button {
    padding: 10px 20px;
    font-size: 20px;
    background-color: yellow;
    border: solid;
    color: black;
    border-radius: 5px;
    border-color: black;
    cursor: pointer;
}
.hero-content .free-button:hover{
    background-color: black;
    color:white;
    
}
.contact-form {
    max-width: 40%;
    background-color: #faf8f5;
    padding: 20px;
    border-radius: 8px;
    color: black;
}

.contact-form h2 {
    font-size: 28px;
    margin-bottom: 10px;
}

.contact-form label {
    display: block;
    margin: 10px 0 5px;
}

.contact-form input,
.contact-form textarea {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.dates {
    display: flex;
    justify-content: space-between;
}

.dates .start-date,
.dates .end-date {
    width: 48%;
}

.contact-form button {
    padding: 10px 15px;
    font-size: 16px;
    background-color: yellow;
    border: solid;
    color: black;
    cursor: pointer;
    width:90%;
    border-radius: 10px;
    margin-left: 20px;
    border-color: black;
}
.contact-form button:hover{
    background-color: black;
    color: white;
}

.contact-form label[for="not_sure"] {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
}
.date-picker{
    display: flex;
}
.date-picker .start-date{
    width: 46%;
    
}
.date-picker .end-date {
    width: 46%;
    padding-left:40px;

}
.checkbox{
    width:20px;
}

.not_sure .checkbox{
    display: flex;
    width:20px;
}

.search img{
    height: 20px;
}
.hero-images {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.hero-image-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.hero-image-text img {
    width: 100px;
    height: auto;
}

.hero-image-text p {
    margin-top: 10px;
    font-size: 18px;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.how-it-works {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
}

.how-it-works h2 {
    font-size: 32px;
    margin-bottom: 30px;
    text-align: left;
}

.steps {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.step {
    flex: 1;
    max-width: 250px;
    margin: 20px;
    text-align: center;
}

.step img {
    width: 100px;
    height: auto;
}

.step h3 {
    font-size: 20px;
    margin: 10px 0;
}

.step p {
    font-size: 16px;
    color: #666;
}

.plan-button {
    padding: 15px 30px;
    font-size: 18px;
    background-color: yellow;
    color: black;
    border: none;
    cursor: pointer;
    margin-top: 30px;
    border: solid;
    border-radius: 5px;
    border-color: black;
}
.plan-button:hover{
    background-color: black;
    color: white;
    
}
.best-destinations {
    padding: 50px 20px;
    background-color: #fff;
    text-align: center;
}

.best-destinations h2 {
    font-size: 32px;
    margin-bottom: 30px;
    text-align: left;
}

.destination-cards {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.card {
    background-color: #f8f8f8;
    border-radius: 10px;
    overflow: hidden;
    margin: 20px;
    max-width: 300px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.image-container {
    position: relative;
}

.image-container img {
    width: 100%;
    height: auto;
}

.play-button {
    position: absolute;
    top: 69%;
    left: 46%;
    font-size: 20px;
    width:120px;
    transform: translate(-50%, -50%);
    color: black;
    opacity: 0;
    background-color: yellow;
    font-size: 20px;
    transition: opacity 0.3s;
    pointer-events: none;
    border: solid;
    border-color: black;
    border-radius: 10px;
}

.card:hover .play-button {
    opacity: 1;
    pointer-events: auto;
}

.card-content {
    padding: 20px;
}

.card-content h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.card-content p {
    font-size: 16px;
    color: #666;
}

.plan-trip {
    display: block;
    width: 100%;
    padding: 10px 0;
    background-color: #ff7f50;
    color: white;
    border: solid;
    border-color: black;
    cursor: pointer;
    text-align: center;
    margin-top: 10px;
    border-radius: 10px;
}
</style>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="">
        </div>
        <div class="search">
        <img src="search.png"><input type="text" placeholder="Where do you want to go?" id="search-input">
        </div>
        <div class="header-buttons">
            <button class="tip-button">Create a Tip</button>
            <button class="login-button">Login</button>
        </div>
    </header>

    <section class="hero">
    
        <div class="hero-content">
            <h1>Effortless Travel Planning! <br>Let AI Be Your Expert Guide.</h1> 
            <p>Bid farewell to generic holiday packages. Get Your AI-Personalised Itineraries</p>
            <button class="free-button">Plan Itinerary For Free!</button>
            <div class="hero-images">
                <div class="hero-image-text">
                    <img src="route.png" alt="">
                    <p>Free Personalized
                    Itineraries</p>
                </div>
                <div class="hero-image-text">
                    <img src="image-2.png" alt="">
                    <p>Affordable &
                    Flexible Bookings</p>
                </div>
                <div class="hero-image-text">
                    <img src="Payment-46.png" alt="">
                    <p>Zero Hidden
                    Charges</p>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <h2>Get your free travel plan now</h2>
            <form action="submit_travel_plan.php" method="POST">
                <label for="explore">What do you want to explore?</label>
                <input type="text" id="explore" name="explore" required>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" value="Delhi" readonly>

                <label for="destination">Search Destination:</label>
                <input type="text" id="destination" name="destination" placeholder="Enter destination" required>

                <label>When are you planning to travel?</label>
                   <div class="date-picker">
                        <div class="start-date">
                            <label for="start-date">Start Date:</label>
                            <input type="date" id="start-date" name="start_date" required>
                         </div>
                    <div class="end-date">
                          <label for="end-date">End Date:</label>
                          <input type="date" id="end-date" name="end_date" required>
                    </div>
                </div>
                <div>
                <label for="not_sure">
                    <input type="checkbox" id="not_sure" name="not_sure">
                     Not sure? Let us decide
                </label>
                </div>
                <button type="submit">Continue</button>
            </form>
        </div>
    </section>
    <section class="how-it-works">
        <h2>How it works?</h2>
        <div class="steps">
            <div class="step">
                <img src="image-3.png" alt="Step 1 Image">
                <h3>Handpick Your Selection</h3>
                <p>From solo travel to workcation, honeymoon to family travel, tell us about your mood, budget & timeline.</p>
            </div>
            <div class="step">
                <img src="image-4.png" alt="Step 2 Image">
                <h3>Unleash AI’s Itinerary Wizardry!</h3>
                <p>Get a unique itinerary completely personalized for you, with all bookings in one place.</p>
            </div>
            <div class="step">
                <img src="image-5.png" alt="Step 3 Image">
                <h3>Easy Bookings with 24x7 Concierge</h3>
                <p>From your stays to activities, book-it-all in one click, and enjoy 24x7 assistance while you explore.</p>
            </div>
            <div class="step">
                <img src="image-6.png" alt="Step 4 Image">
                <h3>No Commissions - Pay for what you get</h3>
                <p>No hidden charges during & after bookings. Pay For What You Get.</p>
            </div>
        </div>
        <button class="plan-button">Plan Itinerary For Free</button>
    </section>
    <section class="best-destinations">
        <h2>Plan as per the best destinations in India</h2>
        <div class="destination-cards">
            <div class="card">
                <div class="image-container">
                    <img src="image-7.png" alt="Jammu & Kashmir">
                    <h3>Jammu & Kashmir</h3>
                    <p>From ₹11,295/- per day</p>
                    <button class="play-button">Plan a trip</button>
                </div>
                <div class="card-content">
                    
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="image-8.png" alt="Ladakh">
                    <h3>Ladakh</h3>
                    <p>From ₹6,133/- per day</p>
                    <button class="play-button">Plan a trip</button>
                </div>
                <div class="card-content">
                    
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="image-9.png" alt="Kerala">
                    <h3>Kerala</h3>
                    <p>From ₹6,551/- per day</p>
                    <button class="play-button">Plan a trip</button>
                    
                </div>
                <div class="card-content">
                    
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="image-10.png" alt="Rajasthan">
                    <h3>Rajasthan</h3>
                    <p>From ₹6,916/- per day</p>
                    <button class="play-button">Plan a trip</button>
                    
                </div>
                <div class="card-content">
                    
                </div>
            </div>
            
        </div>
    </section>

</body>
</html>
