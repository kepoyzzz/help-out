<!doctype html>
<html>
<head>
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../images/123750_copy_PbH_icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<div class="body">
    <div class="body-left">
        test
    </div>
    <div class="body-right">
        <H1>Volunteer Needed !!</H1>
        <button class="collapsible">Gempa Palu</button>
        <div class="content">
            <p>Lorem ipsum...</p>
        </div>
        <button class="collapsible">Gempa NTB</button>
        <div class="content">
            <p>Lorem ipsum...</p>
        </div>
        <button class="collapsible">Asian Games 2018</button>
        <div class="content">
            <p>Lorem ipsum...</p>
        </div>
        <button class="collapsible">Asian Para Games 2018</button>
        <div class="content">
            <p>Lorem ipsum...</p>
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
</script>
</body>
</html>