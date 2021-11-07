<?php
/**
 * Template part for displaying shortcode generator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unsere-schule
 */

?>

<center>
	<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="school" width="120px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="tomato" d="M0 224v272c0 8.84 7.16 16 16 16h80V192H32c-17.67 0-32 14.33-32 32zm360-48h-24v-40c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v64c0 4.42 3.58 8 8 8h48c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zm137.75-63.96l-160-106.67a32.02 32.02 0 0 0-35.5 0l-160 106.67A32.002 32.002 0 0 0 128 138.66V512h128V368c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v144h128V138.67c0-10.7-5.35-20.7-14.25-26.63zM320 256c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm288-64h-64v320h80c8.84 0 16-7.16 16-16V224c0-17.67-14.33-32-32-32z"></path></svg>
	
	<form action="" method="post">
		<input type="text" name="url" placeholder="Adresse eingeben..." autocomplete="off">
		<input type="submit" name ="short_url" value="Code erstellen" style="margin-top:0.5em;">
	</form>
		
	<?php		
		$code_url = '';			
		
		//is short_url submitted
		if(isset($_POST['short_url'])){
			
			//get ip adress
			$clientIP = $_SERVER['HTTP_CLIENT_IP'] 
				?? $_SERVER["HTTP_CF_CONNECTING_IP"]
				?? $_SERVER['HTTP_X_FORWARDED'] 
				?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
				?? $_SERVER['HTTP_FORWARDED'] 
				?? $_SERVER['HTTP_FORWARDED_FOR'] 
				?? $_SERVER['REMOTE_ADDR'] 
				?? '0.0.0.0';
			if (isset($_SERVER['HTTP_CLIENT_IP'])) {
				$clientIP = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
				$clientIP = $_SERVER['HTTP_CF_CONNECTING_IP']; 
			} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
				$clientIP = $_SERVER['HTTP_X_FORWARDED'];
			} elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
				$clientIP = $_SERVER['HTTP_FORWARDED_FOR'];
			} elseif (isset($_SERVER['HTTP_FORWARDED'])) {
				$clientIP = $_SERVER['HTTP_FORWARDED'];
			} elseif (isset($_SERVER['REMOTE_ADDR'])) {
				$clientIP = $_SERVER['REMOTE_ADDR'];
			}
			
			//hash ip
			$clientIP = md5($clientIP);
			
			//prepare parameters
			$url = $_POST['url'];
			$signature = '....';
			$api_url =  'https://website.de/yourls-api.php';
			$action = "shorturl";
			
			// validate url
			$url = checkUrl($url);
			if(!is_null($url)){
				$current_url = $url;
			
				// init the CURL session
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $api_url);
				curl_setopt($ch, CURLOPT_HEADER, 0);            // No header in the result
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return, do not echo result
				curl_setopt($ch, CURLOPT_POST, 1);              // This is a POST request
				curl_setopt($ch, CURLOPT_POSTFIELDS, array(     // Data to POST
					'url' => $url,
					'format'   => 'json',
					'action'   => $action,
					'signature' => $signature,
					'user_ip' => $clientIP
				));
				
				// Fetch and return content
				$data = curl_exec($ch);
				curl_close($ch);
				
				// Do something with the result.
				$json_data = json_decode( $data );				
				if(isset($json_data)){
					$code_url = $json_data->shorturl;
	?>
					<div style="width:15.3em; height:5em; background-color:#a2d471; color:white; display:flex; align-items:center; justify-content:center; margin-top:1em;">
						<h1><?php echo str_replace('https://website.de/', '', $json_data->shorturl); ?></h1>					
					</div>
					<div id="code-qrcode"></div>
					<a href="<?php echo $current_url; ?>" target="_blank"><?php echo $current_url; ?></a>
	<?php 		} 
				else{
					echo("<p style='color:red;'>Sie können leider nur alle 5 Sekunden eine Webseitencode erstellen.</p>");
				}
			
			} else {
				echo("<p style='color:red;'>Es wurde ist keine valide Webseitenadresse eingegeben.</p>");
	
			}
		}
	?>
</center>

<?php if($code_url != ''){ ?>
	<script>
		jQuery(document).ready(function () {		
			var QR_CODE = new QRCode("code-qrcode", {
				width: 500,
				height: 500,
				colorDark: "#000000",
				colorLight: "#ffffff",
				correctLevel: QRCode.CorrectLevel.M,
			});
			QR_CODE.makeCode("<?php echo $current_url; ?>");
		});
		
	</script>
<?php } ?>
<!-- .shortcode -->