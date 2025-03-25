<?php
?>

<!-- Include FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    .session-container {
        max-width: 1200px;
        margin: auto;
    }
    .session-card {
        transition: transform 0.3s ease-in-out;
        background: linear-gradient(to bottom, #f5f5f5, #e3e3e3);
        border: none;
        text-align: center;
        padding: 30px;
        border-radius: 10px;
        display: flex;
        flex-direction: column; /* Stack content vertically */
        align-items: center; /* Center content */
        justify-content: flex-start; /* Start content from top */
    }
    .session-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }
    /* Adjust the skills list to be vertically aligned */
    .skills {
        display: flex;
        flex-direction: column; /* Stack the items vertically */
        align-items: flex-start; /* Align items to the left */
        padding: 0;
        list-style: none;
        margin: 0; /* Remove default margin */
    }
    .skills li {
        font-size: 16px;
        font-weight: bold;
        color: #000;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px; /* Space between skills */
    }
    .skills li i {
        color: #ff00ff;
        font-size: 18px;
    }
    .price {
        font-size: 2rem;
        font-weight: bold;
        color: black;
        margin: 20px 0; /* Add spacing around the price */
    }
    .btn-custom {
        background: linear-gradient(to right, #0000ff, #ff00ff);
        color: white;
        padding: 12px 25px;
        text-decoration: none;
        border-radius: 25px;
        display: inline-block;
        font-weight: bold;
        font-size: 16px;
        transition: opacity 0.3s;
    }
    .btn-custom:hover {
        opacity: 0.8;
    }
    /* Change the color of the h2 element to black */
    .session-card h2 {
        color: black;
    }
    /* Ensure paragraphs stack vertically and align well */
    .session-card p {
    font-size: 1.2rem;
    font-weight: normal;
    margin-top: 10px;
    color: #4CAF50; /* You can change this color to any you prefer */
}
</style>

<div class="container session-container my-5">
    <div class="row g-4">
        <!-- 1 ON 1 Private Session -->
        <div class="col-md-4">
            <div class="session-card">
                <h2><strong>1 ON 1 PRIVATE SESSION</strong></h2>
                <p><strong>60mins Session includes:</strong></p>
                <ul class="skills">
                    <li><i class="fas fa-check-circle"></i> Ball Handling</li>
                    <li><i class="fas fa-check-circle"></i> Footwork</li>
                    <li><i class="fas fa-check-circle"></i> Shooting Accuracy</li> <!-- Added unique skill -->
                    <li><i class="fas fa-check-circle"></i> Defensive Positioning</li> <!-- Added unique skill -->
                    <li><i class="fas fa-check-circle"></i> Mental Toughness</li> <!-- Added unique skill -->
                    <li><i class="fas fa-check-circle"></i> Individualized Skill Development</li> <!-- Added unique skill -->
                </ul>
                <div class="price">$50</div>
                <a href="booking_1on1.php" class="btn-custom mt-2">BOOK NOW</a>
            </div>
        </div>

        <!-- Private Session Pack -->
        <div class="col-md-4">
            <div class="session-card">
                <h2><strong>PRIVATE SESSION PACK BUY 6, PAY 5</strong></h2>
                <p><strong>6 × 60mins Sessions include:</strong></p>
                <ul class="skills">
                    <li><i class="fas fa-check-circle"></i> Ball Handling</li>
                    <li><i class="fas fa-check-circle"></i> Footwork</li>
                    <li><i class="fas fa-check-circle"></i> Shooting Accuracy</li>
                    <li><i class="fas fa-check-circle"></i> Defensive Positioning</li>
                    <li><i class="fas fa-check-circle"></i> Mental Toughness</li>
                    <li><i class="fas fa-check-circle"></i> Personalized Training Plans</li> <!-- Added unique skill -->
                </ul>
                <div class="price">$250</div>
                <a href="booking_pack.php" class="btn-custom mt-2">BOOK NOW</a>
            </div>
        </div>

        <!-- Player Check-Up Pack -->
        <div class="col-md-4">
            <div class="session-card">
                <h2><strong>PLAYER CHECK-UP PACK</strong></h2>
                <p><strong>Evaluation includes:</strong></p>
                <ul class="skills">
                    <li><i class="fas fa-check-circle"></i> <strong>Discovery</strong> Online Meeting (15min)</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Check-Up Session</strong> (60min)</li>
                    <li><i class="fas fa-check-circle"></i> Ball Handling</li>
                    <li><i class="fas fa-check-circle"></i> Footwork</li>
                    <li><i class="fas fa-check-circle"></i> Shooting</li>
                    <li><i class="fas fa-check-circle"></i> Defensive Skills</li> <!-- Added unique skill -->
                    <li><i class="fas fa-check-circle"></i> Mental Resilience</li> <!-- Added unique skill -->
                    <li><i class="fas fa-check-circle"></i> Fitness Assessment</li> <!-- Added unique skill -->
 
                </ul>
                <div class="price">$120</div>
                <a href="booking_checkup.php" class="btn-custom mt-2">BOOK NOW</a>
            </div>
        </div>
    </div>
</div>
