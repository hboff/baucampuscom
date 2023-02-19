<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Read More Beispiel</title>
    <style>
      #more {
        display: none;
      }
    </style>
  </head>
  <body>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, quam sed tristique convallis, est libero euismod velit, in varius nulla dui id arcu. Sed sit amet mauris mauris. Sed eget tellus sed odio hendrerit aliquet. <span id="dots">...</span><span id="more">Suspendisse ullamcorper tincidunt massa, non gravida orci blandit ac. In non mauris sed enim dictum faucibus. Fusce eu nisi magna. Nullam tincidunt augue auctor risus semper bibendum. Integer ut sem sit amet velit interdum consectetur a a nulla. Nullam laoreet porttitor elit. Morbi suscipit sapien id dui eleifend, vel tincidunt ipsum volutpat.</span></p>
    <button onclick="myFunction()" id="myBtn">Read more</button>
    <script>
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }
    </script>
  </body>
</html>
