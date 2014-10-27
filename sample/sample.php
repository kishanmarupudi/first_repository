<!DOCTYPE HTML>
<html>
  <head>
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
    </style>
  </head>
  <body>
    <canvas id="myCanvas" width="578" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      // butt line cap (top line)
      context.beginPath();
      context.moveTo(200, canvas.height / 2 - 50);
      context.lineTo(canvas.width - 200, canvas.height / 2 - 50);
      context.lineWidth = 20;
      context.strokeStyle = '#454545';
      context.lineCap = 'butt';
      context.stroke();

      // round line cap (middle line)
      context.beginPath();
      context.moveTo(200, canvas.height / 2);
      context.lineTo(canvas.width - 200, canvas.height / 2);
      context.lineWidth = 20;
      context.strokeStyle = '#676767';
      context.lineCap = 'round';
      context.stroke();

      // square line cap (bottom line)
      context.beginPath();
      context.moveTo(200, canvas.height / 2 + 50);
      context.lineTo(canvas.width - 200, canvas.height / 2 + 50);
      context.lineWidth = 20;
      context.strokeStyle = '#898989';
      context.lineCap = 'square';
      context.stroke();
    </script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html> 