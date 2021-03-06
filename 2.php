<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Menu Toggle button with flat menu</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      /* Important styles */
#toggle {
  display: block;
  width: 28px;
  height: 30px;
  margin-left: 40px;
  margin-top:150px;
}

#toggle span:after,
#toggle span:before {
  content: "";
  position: absolute;
  left: 0;
  top: -9px;
}
#toggle span:after{
  top: 9px;
}
#toggle span {
  position: relative;
  display: block;
}

#toggle span,
#toggle span:after,
#toggle span:before {
  width: 100%;
  height: 5px;
  background-color: #00c2ea;
  transition: all 0.3s;
  backface-visibility: hidden;
  border-radius: 2px;
}

/* on activation */
#toggle.on span {
  background-color: transparent;
}
#toggle.on span:before {
  transform: rotate(45deg) translate(5px, 5px);
}
#toggle.on span:after {
  transform: rotate(-45deg) translate(7px, -8px);
}
#toggle.on + #menu {
  opacity: 1;
  visibility: visible;
}

/* menu appearance*/
#menu {
  position: relative;
  color: #999;
  width: 200px;
  padding: 10px;
  margin-left: 50px;
  font-family: "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", "Trebuchet MS", Verdana, "Verdana Ref", sans-serif;
  text-align: center;
  border-radius: 4px;
  background: rgba(17, 17, 17, 0.753);
  box-shadow: 0 1px 8px rgba(0,0,0,0.05);
  /* just for this demo */
  opacity: 0;
  visibility: hidden;
  transition: opacity .4s;
}

.toy {
  list-style-type: none;
  
  margin: 0;
  padding: 0;
}
.tot {
  padding: 5px;
  color: #fffafa;
  text-decoration: none;
  transition: all .2s;
  font-size: 15px;
}


/* demo styles */


    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <a href="#menu" id="toggle"><span></span></a>

<div id="menu">
  <ul class="toy tot ror sss">
    <li class="toy tot ror uou"><a   class="toy tot " href="#home">Home</a></li>
    <li class="toy tot ror uou"><a  class="toy tot " href="#about">Location</a></li>
    <li class="toy tot ror uou"><a  class="toy tot " href="#contact">Add location</a></li>
  </ul>
</div>








  
  

    <script src="js/1.js"></script>




</body>

</html>
