<?php
// faq.php - Exact replica with additional questions
?>

<div class="faq-section" style="background-color: #000; color: #fff; padding: 80px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <!-- "YOU MAY NEED TO KNOW" heading -->
        <h2 style="color: #f39c12; font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; text-transform: uppercase;">
            YOU MAY NEED TO KNOW
        </h2>
        
        <!-- "FREQUENTLY ASKED QUESTIONS" main heading -->
        <h3 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 50px;">
            FREQUENTLY ASKED QUESTIONS
        </h3>
        
        <!-- FAQ Items - Simple list style like in the image -->
        <div class="faq-items" style="text-align: left;">
            <!-- Original FAQ Item 1 -->
            <div class="faq-item" style="margin-bottom: 30px; border-bottom: 1px solid #333; padding-bottom: 20px; cursor: pointer;" onclick="toggleAnswer(this)">
                <h4 style="font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: #fff; display: flex; justify-content: space-between; align-items: center;">
                    What should I bring to a training session?
                    <span class="toggle-icon" style="color: #f39c12; font-size: 1.5rem;">+</span>
                </h4>
                <div class="faq-answer" style="display: none; color: #ddd; margin-top: 10px; padding-right: 20px;">
                    Bring basketball shoes, comfortable athletic wear, a water bottle, and any personal basketball equipment you prefer to use. We provide all necessary training equipment.
                </div>
            </div>
            
            <!-- Original FAQ Item 2 -->
            <div class="faq-item" style="margin-bottom: 30px; border-bottom: 1px solid #333; padding-bottom: 20px; cursor: pointer;" onclick="toggleAnswer(this)">
                <h4 style="font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: #fff; display: flex; justify-content: space-between; align-items: center;">
                    What types of training programs do you offer?
                    <span class="toggle-icon" style="color: #f39c12; font-size: 1.5rem;">+</span>
                </h4>
                <div class="faq-answer" style="display: none; color: #ddd; margin-top: 10px; padding-right: 20px;">
                    We offer individual 1-on-1 sessions, small group training, skill-specific clinics, game simulation sessions, and athletic performance training. Programs are tailored to all skill levels.
                </div>
            </div>
            
            <!-- New FAQ Item 3 -->
            <div class="faq-item" style="margin-bottom: 30px; border-bottom: 1px solid #333; padding-bottom: 20px; cursor: pointer;" onclick="toggleAnswer(this)">
                <h4 style="font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: #fff; display: flex; justify-content: space-between; align-items: center;">
                    Are there any prerequisites?
                    <span class="toggle-icon" style="color: #f39c12; font-size: 1.5rem;">+</span>
                </h4>
                <div class="faq-answer" style="display: none; color: #ddd; margin-top: 10px; padding-right: 20px;">
                    No prior experience is required for our beginner programs. For advanced training, we recommend basic basketball skills. All participants must complete a waiver form.
                </div>
            </div>
            
            <!-- New FAQ Item 4 -->
            <div class="faq-item" style="margin-bottom: 30px; border-bottom: 1px solid #333; padding-bottom: 20px; cursor: pointer;" onclick="toggleAnswer(this)">
                <h4 style="font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: #fff; display: flex; justify-content: space-between; align-items: center;">
                    Can parents watch the training sessions?
                    <span class="toggle-icon" style="color: #f39c12; font-size: 1.5rem;">+</span>
                </h4>
                <div class="faq-answer" style="display: none; color: #ddd; margin-top: 10px; padding-right: 20px;">
                    Yes, we have a designated viewing area for parents. However, we ask that parents refrain from coaching during sessions to allow our trainers to work effectively with athletes.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// JavaScript for FAQ toggle functionality
function toggleAnswer(element) {
    const answer = element.querySelector('.faq-answer');
    const icon = element.querySelector('.toggle-icon');
    
    if (answer.style.display === 'none' || answer.style.display === '') {
        // Close all other open answers first
        document.querySelectorAll('.faq-answer').forEach(ans => {
            ans.style.display = 'none';
        });
        document.querySelectorAll('.toggle-icon').forEach(ic => {
            ic.textContent = '+';
        });
        
        // Open this one
        answer.style.display = 'block';
        icon.textContent = '-';
    } else {
        answer.style.display = 'none';
        icon.textContent = '+';
    }
}

// Optional: Smooth scroll to FAQ when linked
if (window.location.hash === '#faq') {
    document.querySelector('.faq-section').scrollIntoView({ 
        behavior: 'smooth' 
    });
}
</script>