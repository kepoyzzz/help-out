<!doctype html>
<html>
<head>
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../images/123750_copy_PbH_icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Out</title>
</head>
<body>
    <div class="header-judul">
        <img src="..\images\123750 copy.png">
    </div>
    <div class="navbar">
        <a href=""><b>Home</b></a>
        <a href=""><b>Volunteer</b></a>
        <a href=""><b>Donation</b></a>
        <a href=""><b>Contact US</b></a>
    </div>

    <div class="w3-content w3-display-container" style="max-width:800px">
        <img class="mySlides" src="images/value.jpg" style="width:100%">
        <img class="mySlides" src="images/vision-and-mission.jpg" style="width:100%">
        <img class="mySlides" src="images/123750 copy.png" style="width:100%">
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
    </div>

    <div class="body">

        <div class="row-aboutUs">
            <div class="column-aboutUs">
                <div class="card-aboutUs">
                    <img src="images/vision-and-mission.jpg" alt="visionAndMission">
                    <div class="container-aboutUs">
                        <h2>Our Mission and Vision</h2>

                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>

                    </div>
                </div>
            </div>

            <div class="column-aboutUs">
                <div class="card-aboutUs">
                    <img src="images/value.jpg" alt="value">
                    <div class="container-aboutUs">
                        <h2>Our Value</h2>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    </div>
                </div>
            </div>

            <div class="column-aboutUs">
                <div class="card-aboutUs">
                    <img src="images/target_audience.jpg" alt="target">
                    <div class="container-aboutUs">
                        <h2>Our Target</h2>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-left">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="footer-right">
            test
        </div>
    </div>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }

        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-white";
        }
    </script>
</body>
</html>