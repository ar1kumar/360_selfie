<?php
	
	include_once ('src/GifCreator.php');
	$images = $_POST;
	
	// Create an array containing file paths, resource var (initialized with imagecreatefromXXX), 
	// image URLs or even binary code from image files.
	// All sorted in order to appear.
	$frames = array();
	$durations = array();
	$i = 0;
	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
	$filename = generateRandomString();
	foreach($images as $key => $value){
		if (strpos($key,'image') !== false) {
			$img = str_replace('data:image/png;base64,', '', $value);
			$img = str_replace(' ', '+', $img);
			$data = base64_decode($img);
			$file = 'uploads/img_'.$filename.$i.".png";
			$success = file_put_contents($file, $data);
			$frames[$i] = $file;
		   $durations[$i] = 20;
		   $i += 1;
		}
		
	}
	
	// Create an array containing the duration (in millisecond) of each frames (in order too)	
	
	// Initialize and create the GIF !
	$gc = new GifCreator();
	$gc->create($frames, $durations, 0);

	$gifBinary = $gc->getGif();
	file_put_contents('gifs/gif_'.$filename.'.gif', $gifBinary);
	header('Content-type: image/gif');
	header('Content-Disposition: filename="temp.gif"');
	echo $gifBinary;
	//exit;

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Here's Your Gif</title>
</head>
<body>
	<h1>swipe to shoot, But take out before you splash!!</h1>
</body>
</html>