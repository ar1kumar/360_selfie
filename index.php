<!DOCTYPE html>
<html>
<head>
<meta name='keywords' content='Sam Dutton, HTML5, JavaScript' />
<meta name='description' content='Simplest possible examples of HTML, CSS and JavaScript.' />
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1'>
<meta http-equiv='X-UA-Compatible' content='chrome=1' />
<base target='_blank'>
<title>MediaStreamTrack.getSources()</title>
<link rel='stylesheet' href='../../css/main.css' />

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

  <h1><a href='../../index.html' title='simpl.info home page'>simpl.info</a> MediaStreamTrack.getSources</h1>

  <div class='select'>
    <label for='audioSource'>Audio source: </label><select id='audioSource'></select>
  </div>

  <div class='select'>
    <label for='videoSource'>Video source: </label><select id='videoSource'></select>
  </div>

  <video muted autoplay></video>

  <script src='script.js'></script>

  <p>This demo requires Chrome 30 or later.</p>

  <p>For more information, see <a href='http://www.html5rocks.com/en/tutorials/getusermedia/intro/' title='Media capture article by Eric Bidelman on HTML5 Rocks'>Capturing Audio &amp; Video in HTML5</a> on HTML5 Rocks.</p>

<a href='https://github.com/samdutton/simpl/blob/master/getusermedia/sources/js/main.js' title='View source for this page on GitHub' id='viewSource'>View source on github</a>
</div>
<script src='../../js/lib/ga.js'></script>
</body>
</html>
