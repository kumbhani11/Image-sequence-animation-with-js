<html>
<head>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
    <img src="img/1.png" alt="rotating image" width="50%" id="rotator">
    <script>
        (function() {
            var rotator = document.getElementById('rotator'), //get the element
                dir = 'img/',                              //images folder
                delayInSeconds = 1,                           //delay in seconds
                num = 1,                                      //start number
                len = 14;                                      //limit
            setInterval(function(){                           //interval changer
                rotator.src = dir +'horse-'+ num+'.png';               //change picture
                num = (num === len) ? 1 : ++num;              //reset if last image reached
            }, delayInSeconds * 50);
        }());
    </script>
</body>
</html>