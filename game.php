<!DOCTYPE html>
  
<head>
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
  
    <!-- CSS file Included -->
    <link rel="stylesheet" 
        type="text/css" href="tic.css">
  
    <!-- JavaScript file included -->
    <script src="tic.js"></script>
</head>
  
<body>
    <div id="main">
        <h1>piškôrky</h1>
  
        
  
  
        <br><br>
        <!-- 3*3 grid of Boxes -->
        <input type="text" id="b1" onclick=
            "myfunc_3(); myfunc();" readonly>
  
        <input type="text" id="b2" onclick=
            "myfunc_4(); myfunc();" readonly>
  
        <input type="text" id="b3" onclick=
            "myfunc_5(); myfunc();" readonly>
        <br><br>
  
        <input type="text" id="b4" onclick=
            "myfunc_6(); myfunc();" readonly>
              
        <input type="text" id="b5" onclick=
            "myfunc_7(); myfunc();" readonly>
  
        <input type="text" id="b6" onclick=
            "myfunc_8(); myfunc();" readonly>
        <br><br>
  
        <input type="text" id="b7" onclick=
            "myfunc_9(); myfunc();" readonly>
  
        <input type="text" id="b8" onclick=
            "myfunc_10();myfunc();" readonly>
  
        <input type="text" id="b9" onclick=
            "myfunc_11();myfunc();" readonly>
  
        <!-- Grid end here  -->
        <br><br><br>
        <!-- Button to reset game -->
        <button id="but" onclick="myfunc_2()">
            RESET
        </button>

        <button id="butt">
            HOME
        </button>

        <script type="text/javascript">
        document.getElementById("butt").onclick = function () {
        location.href = "index.php";
        };
        </script>
  
        <br><br>
        <!-- Space to show player turn -->
        <p id="print"></p>
  
  
    </div>
</body>
  
</html>
