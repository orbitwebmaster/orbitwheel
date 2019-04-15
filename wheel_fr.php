<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js">
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style type="text/css">
    .weel-container
    {
        font-family: arial;
    }
    
    /* Sets the background image for the wheel */
    .the_wheel
    {
        background-image: url(https://oct.bm3group.com/wp-content/plugins/orbitwheel/fren.png);
        background-position: center;
        background-repeat: no-repeat;
        background-position-y: 190px;
    }
    
    /* Do some css reset on selected elements */
    h1, p
    {
        margin: 0;
    }
    
    div.power_controls
    {
        margin-right:70px;
    }
    
    div.html5_logo
    {
        margin-left:70px;
    }
    
    /* Styles for the power selection controls */
    table.power
    {
        background-color: #cccccc;
        cursor: pointer;
        border:1px solid #333333;
    }
    
    table.power th
    {
        background-color: white;
        cursor: default;
    }
    
    td.pw1
    {
        background-color: #6fe8f0;
    }
    
    td.pw2
    {
        background-color: #86ef6f;
    }
    
    td.pw3
    {
        background-color: #ef6f6f;
    }
    
    /* Style applied to the spin button once a power has been selected */
    .clickable
    {
        cursor: pointer;
    }
    
    /* Other misc styles */
    .margin_bottom
    {
        margin-bottom: 5px;
    }
    
    #dv-congratulations{
        color:#FFF;
        font-weight: bold;
        font-size: 1.5em;
        visibility: hidden;
        margin-top: 533px;
        text-align: center;
        position: absolute;
        z-index: 3;
        width: 100%;
    }
    
    .orbit-button {
        -moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
        -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
        box-shadow:inset 0px 1px 0px 0px #f29c93;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
        background:-moz-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
        background:-webkit-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
        background:-o-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
        background:-ms-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
        background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100',GradientType=0);
        background-color:#fe1a00;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid #d83526;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:23px;
        font-weight:bold;
        width: 250px;
        padding:31px 5px;
        text-decoration:none;
        text-shadow:0px 1px 0px #b23e35;
        margin-top: 40px;
    }
    .orbit-button:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00));
        background:-moz-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
        background:-webkit-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
        background:-o-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
        background:-ms-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
        background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00',GradientType=0);
        background-color:#ce0100;
    }
    .orbit-button:active {
        position:relative;
        top:1px;
    }
    
    table.power{
        color: #000 !important;
        font-size: 2em !important;
    }
    
    table.power tr td{
        padding: 17px;
    }
    .entry-content table, body.et-pb-preview #main-content .container table{
        border: 0 !important;
    }
    .entry-content tr td, body.et-pb-preview #main-content .container tr td{
        border: 0 !important;
    }
    #wheel-arrow{
        position: absolute;
        margin-left: 433px;
        margin-top: 32px;
    }
    #wheel-arrow img{
        width: 105px;
    }
    #canvas{
        margin-top: 80px;
    }
     #fireworks-container2 img{
        left: 900px;
        position: absolute;
        top: 500px;
        z-index: 10;
    }
      #fireworks-container2{
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 0; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        opacity: 0.6;
    }
    #fireworks-container2 canvas{
        width: 1080px;
        height: 100%;
    }
</style>
 
<script type="text/javascript" src="https://oct.bm3group.com/wp-content/plugins/orbitwheel/Winwheel.min.js"></script>
<script type="text/javascript" src="https://oct.bm3group.com/wp-content/plugins/orbitwheel/orbittween.min.js"></script>

</script>
<div id="dv-congratulations">
    <label id="msg-win" class="animated rotateIn delay-5s">Félicitations, vous avez gagné! </label><label id="gift" class="animated infinite flash delay-5s"></label>
    <div>
    <a href="" class="orbit-button" id="reset-button" onclick="resetWheel();">On recommence?</a>     
    </div>
</div>
<div id="fireworks-container"> 
</div>
<div id="fireworks-container2">
     <img src="https://oct.bm3group.com/wp-content/plugins/orbitwheel/cancel.png"/>
    <canvas id="canvas-fireworks"></canvas>
</div>
<div id="weel-container" class="pyro" ng-app="app" ng-controller="app-controller">
    <div align="center" id="main-container">
        <div>
            <div id="wheel-arrow">
                <img src="https://oct.bm3group.com/wp-content/plugins/orbitwheel/sort-down-1.png"/>
            </div>
                <div class="the_wheel" align="center" valign="center">
                    <canvas id="canvas" width='800' height='800'>
                        <p style="{color: white}" align="center">Désolé, votre navigateur ne supporte pas canvas. S'il vous plaît essayer un autre.</p>
                    </canvas>
                </div>
                <br/>
                <div>
                    <a href="#" class="orbit-button" id="play-button" onclick="startSpin();">Faites tourner</a>
                    <!-- &nbsp;&nbsp;<a href="#" onClick="resetWheel(); return false;">Play Again</a> -->     
                </div>
    </div>
    <section class="rain"></section>
</div>
</div>
<script>
    var  number_of_segments = 0;
       var segments = [];
       let theWheel;
       number_of_segments = localStorage.getItem('number_of_segments');
       segments  = JSON.parse(localStorage.getItem('orbitweb-wheel-data'));
       var congrats = document.getElementById('dv-congratulations');
       

         jQuery.fn.shake = function () {
            this.each(function (i) {
                $(this).css({
                    "position": "relative"
                });
                for (var x = 1; x <= 24; x++) {
                    $(this).animate({
                        left: -25
                    }, 20).animate({
                        left: 0
                    }, 70).animate({
                        left: 25
                    }, 60).animate({
                        left: 0
                    }, 40);
                }
          });
        }

       theWheel = new Winwheel({
                'outerRadius': 390, // Set outer radius so wheel fits inside the background.
                'innerRadius': 200, // Make wheel hollow so segments don't go all way to center.
                'textFontSize': number_of_segments, // Set default font size for the segments.
                'lineWidth'   : 12,
                'textOrientation': 'vertical', // Make text vertial so goes down from the outside of wheel.
                'textAlignment': 'outer', // Align text to outside of wheel.
                'numSegments': number_of_segments, // Specify number of segments.
                'segments': segments // Define segments including colour and text.
                    ,
                'animation': // Specify the animation to use.
                {
                    'type': 'spinToStop',
                    'duration': 10, // Duration in seconds.
                    'spins': 3, // Default number of complete spins.
                    'callbackFinished': alertPrize,
                    'callbackSound': playSound, // Function to call when the tick sound is to be triggered.
                    'soundTrigger': 'pin' // Specify pins are to trigger the sound, the other option is 'segment'.
                },
                'pins': // Turn pins on.
                {
                    'number': number_of_segments,
                    'fillStyle': 'silver',
                    'outerRadius': 4,
                }
            });
         // Loads the tick audio sound in to an audio object.
            let audio = new Audio('https://oct.bm3group.com/wp-content/plugins/orbitwheel/tick.mp3');
    
            // This function is called when the sound is to be played.
            function playSound() {
                // Stop and rewind the sound if it already happens to be playing.
                audio.pause();
                audio.currentTime = 0;
    
                // Play the sound.
                audio.play();
            }
    
            // Vars used by the code in this page to do power controls.
            let wheelPower = 0;
            let wheelSpinning = false;
            //Defining high power default
            powerSelected(2);
            // -------------------------------------------------------
            // Function to handle the onClick on the power buttons.
            // -------------------------------------------------------
            function powerSelected(powerLevel) {
                // Ensure that power can't be changed while wheel is spinning.
                if (wheelSpinning == false) {
                    // Reset all to grey incase this is not the first time the user has selected the power.
                    //document.getElementById('pw1').className = "";
                    //document.getElementById('pw2').className = "";
                    //document.getElementById('pw3').className = "";
    
                    // Now light up all cells below-and-including the one selected by changing the class.
                   /* if (powerLevel >= 1) {
                        document.getElementById('pw1').className = "pw1";
                    }
    
                    if (powerLevel >= 2) {
                        document.getElementById('pw2').className = "pw2";
                    }
    
                    if (powerLevel >= 3) {
                        document.getElementById('pw3').className = "pw3";
                    }
    */
                    // Set wheelPower var used when spin button is clicked.
                    wheelPower = powerLevel;
    
                    // Light up the spin button by changing it's source image and adding a clickable class to it.
                   /* document.getElementById('spin_button').src = "https://oct.bm3group.com/wp-content/themes/Divi/orbitwheel/spin_on.png";
                    document.getElementById('spin_button').className = "clickable";*/
                }
            }
    
            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin() {
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false) {
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.
                    if (wheelPower == 1) {
                        theWheel.animation.spins = 3;
                    } else if (wheelPower == 2) {
                        theWheel.animation.spins = 6;
                    } else if (wheelPower == 3) {
                        theWheel.animation.spins = 10;
                    }
    
                    // Disable the spin button so can't click again while wheel is spinning.
                   /* document.getElementById('spin_button').src = "https://oct.bm3group.com/wp-content/themes/Divi/orbitwheel/spin_off.png";
                    document.getElementById('spin_button').className = "";
    */
                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();
                    $("#wheel-arrow img").shake();
                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;
                }
            }
    
            // -------------------------------------------------------
            // Function for reset button.
            // -------------------------------------------------------
            function resetWheel() {
                var playButton = document.getElementById('play-button');
                playButton.style.visibility = 'visible';
                playButton.innerHTML = 'Faites tourner';
                playButton.setAttribute('onClick', 'startSpin();');
                theWheel.stopAnimation(false); // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0; // Re-set the wheel angle to 0 degrees.
                theWheel.draw(); // Call draw to render changes to the wheel.
    
            /*    document.getElementById('pw1').className = ""; // Remove all colours from the power level indicators.
                document.getElementById('pw2').className = "";
                document.getElementById('pw3').className = "";*/
                document.getElementById("fireworks-container2").style.display = 'none';
                wheelSpinning = false; // Reset to false to power buttons and spin can be clicked again.
                congrats.style.visibility = 'hidden';
            }

            $("#fireworks-container2 img").on("click", function(e){
                resetWheel();
            });
    
            $("#fireworks-container img").on("click", function(e){
                resetWheel();
            });
            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
            // -------------------------------------------------------
            function startAgain(playButton){
                //playButton.innerHTML = 'Tourne encore?';
                //playButton.setAttribute('onClick', 'resetWheel();');
                 playButton.style.visibility = 'hidden';
            }

            function alertPrize(indicatedSegment) {
                // Just alert to the user what happened.
                // In a real project probably want to do something more interesting than this with the result.
                var gift = document.getElementById('gift');
                if (indicatedSegment.text == 'lose a turn') {
                    alert('Désolé mais tu perds ton tour.');
                } else if (indicatedSegment.text == 'BANKRUPT') {
                    alert('Oh non, vous êtes parti BANKRUPT!');
                } else {
                    congrats.style.visibility =  'visible';
                    gift.innerHTML = indicatedSegment.text;
                    $("#dv-congratulations label").animate({fontSize: '1.4em'});
                     $("#dv-congratulations label").animate({fontSize: '1.4em'});
                     let audio = new Audio("https://oct.bm3group.com/wp-content/plugins/orbitwheel/wingamesound.wav");
                     audio.play();
                }
                var playButton = document.getElementById('play-button');
                document.getElementById("fireworks-container2").style.display = 'block';
                startAgain(playButton); 
            }
    
    
    
    angular.module("app", []).controller("app-controller", function($scope, $http) {
           
        $http({
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            url: 'https://oct.bm3group.com/wp-content/plugins/orbitwheel/data.json',
            data: '',
            transformResponse: [
                function(data) {
                    return data;
                }
            ]
        }).then(function(response) {
            
            var wellData = JSON.parse(response.data);
            console.log(wellData);
            // Create new wheel object specifying the parameters at creation time.
            localStorage.setItem('number_of_segments', wellData[0].number_of_options);
            localStorage.setItem('orbitweb-wheel-data', JSON.stringify(wellData[1]));
            //Reset the wheel in order to take the localStorage new values
            resetWheel();  
        }, function(response) {
            console.log(response);
        });   
    });
 
</script>
<script>
window.addEventListener("resize", resizeCanvas, false);
        window.addEventListener("DOMContentLoaded", onLoad, false);
        
        window.requestAnimationFrame = 
            window.requestAnimationFrame       || 
            window.webkitRequestAnimationFrame || 
            window.mozRequestAnimationFrame    || 
            window.oRequestAnimationFrame      || 
            window.msRequestAnimationFrame     || 
            function (callback) {
                window.setTimeout(callback, 1000/60);
            };
        
        var canvas, ctx, w, h, particles = [], probability = 0.04,
            xPoint, yPoint;
        
        
        
        
        
        function onLoad() {
            canvas = document.getElementById("canvas-fireworks");
            ctx = canvas.getContext("2d");
            resizeCanvas();
            
            window.requestAnimationFrame(updateWorld);
        } 
        
        function resizeCanvas() {
            if (!!canvas) {
                w = canvas.width = screen.width-100;
                h = canvas.height = '950';
            }
        } 
        
        function updateWorld() {
            update();
            paint();
            window.requestAnimationFrame(updateWorld);
        } 
        
        function update() {
            if (particles.length < 500 && Math.random() < probability) {
                createFirework();
            }
            var alive = [];
            for (var i=0; i<particles.length; i++) {
                if (particles[i].move()) {
                    alive.push(particles[i]);
                }
            }
            particles = alive;
        } 
        
        function paint() {
            ctx.globalCompositeOperation = 'source-over';
            ctx.fillStyle = "rgba(0,0,0,0.4)";
            ctx.fillRect(0, 0, w, h);
            ctx.globalCompositeOperation = 'lighter';
            for (var i=0; i<particles.length; i++) {
                particles[i].draw(ctx);
            }
            ctx.globalAlpha = '0.5';
        } 
        
        function createFirework() {
            xPoint = Math.random()*(w-200)+100;
            yPoint = Math.random()*(h-200)+100;
            var nFire = Math.random()*50+100;
            var c = "rgb("+(~~(Math.random()*200+55))+","
                 +(~~(Math.random()*200+55))+","+(~~(Math.random()*200+55))+")";
            for (var i=0; i<nFire; i++) {
                var particle = new Particle();
                particle.color = c;
                var vy = Math.sqrt(25-particle.vx*particle.vx);
                if (Math.abs(particle.vy) > vy) {
                    particle.vy = particle.vy>0 ? vy: -vy;
                }
                particles.push(particle);
            }
        } 
        
        function Particle() {
            this.w = this.h = Math.random()*4+1;
            
            this.x = xPoint-this.w/2;
            this.y = yPoint-this.h/2;
            
            this.vx = (Math.random()-0.5)*10;
            this.vy = (Math.random()-0.5)*10;
            
            this.alpha = Math.random()*.5+.5;
            
            this.color;
        } 
        
        Particle.prototype = {
            gravity: 0.05,
            move: function () {
                this.x += this.vx;
                this.vy += this.gravity;
                this.y += this.vy;
                this.alpha -= 0.01;
                if (this.x <= -this.w || this.x >= screen.width ||
                    this.y >= screen.height ||
                    this.alpha <= 0) {
                        return false;
                }
                return true;
            },
            draw: function (c) {
                c.save();
                c.beginPath();
                
                c.translate(this.x+this.w/2, this.y+this.h/2);
                c.arc(0, 0, this.w, 0, Math.PI*2);
                c.fillStyle = this.color;
                c.globalAlpha = this.alpha;
                
                c.closePath();
                c.fill();
                c.restore();
            }
        } 
</script>
