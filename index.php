<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1'>
<meta http-equiv='X-UA-Compatible' content='chrome=1' />
<base target='_blank'>
<title>Multi Cam Gif-inator</title>

	<style>
  div.select {
    margin: 0 0 1em 0;
  }
  label {
    color: white;
  }
  </style>

</head>
<body>
<div id='container'>



  <div class='select'>
    <label for='videoSource'>Video source: </label><select id='videoSource'></select>
  </div>

  <video muted autoplay></video>

  <script src='script.js'></script>

  <p>This demo requires Chrome 30 or later.</p>


</div>
</body>
</html>
