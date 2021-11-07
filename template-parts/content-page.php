<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unsere-schule
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 		
			echo '<h1 class="entry-title">';
			echo the_title(); 
			$tempPageCode = getPageCode(get_post()->ID);
			if($tempPageCode != ""){
				echo ' <span class="code-badge">'.$tempPageCode.'</span>';
				echo '<span id="showCodeModal" style="cursor:pointer; margin-left:0.2em;"><svg xmlns="http://www.w3.org/2000/svg" width="0.6em" height="0.6em" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/></svg></span>';				
			}
			echo '</h1>'; 
		?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'unsere-schule' ),
				'after'  => '</div>',
			)
		);
		?>
		
		<div id="myCodeModal" class="code-modal">		
			<div class="code-modal-content">
			<center>
				<div id="code-modal-header">				
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="school" width="60px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="white" d="M0 224v272c0 8.84 7.16 16 16 16h80V192H32c-17.67 0-32 14.33-32 32zm360-48h-24v-40c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v64c0 4.42 3.58 8 8 8h48c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zm137.75-63.96l-160-106.67a32.02 32.02 0 0 0-35.5 0l-160 106.67A32.002 32.002 0 0 0 128 138.66V512h128V368c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v144h128V138.67c0-10.7-5.35-20.7-14.25-26.63zM320 256c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm288-64h-64v320h80c8.84 0 16-7.16 16-16V224c0-17.67-14.33-32-32-32z"></path></svg>
					<h2 id="code-modal-url">unsere-schule.org</h2>
					<span id="codeClose" class="code-close">&times;</span>	
				</div>
			

				<h1 id="code-modal-title"><?php echo the_title(); ?></h1>
				<div style="width:80%; height:5em; background-color:#a2d471; color:white; display:flex; align-items:center; justify-content:center; margin-top:1em;">
					<h1>Code: <?php echo $tempPageCode; ?></h1>					
				</div>
				<div id="code-modal-qrcode"></div>
				<div>Infos: 
					<a href="https://unsere-schule.org/allgemeines/tools/unsere-schule-codes/" target="_blank">unsere-schule Codes</a>
				</div>
			</center>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'unsere-schule' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>			
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	
</article><!-- #post-<?php the_ID(); ?> -->

<?php if($tempPageCode != ""){ ?>
	<script>
		jQuery(document).ready(function () {		
			var codeModal = document.getElementById("myCodeModal");
			var codeModalClose = document.getElementById("codeClose");
			var showCodeModal = document.getElementById("showCodeModal");
			
			var QR_CODE = new QRCode("code-modal-qrcode", {
				width: 500,
				height: 500,
				colorDark: "#000000",
				colorLight: "#ffffff",
				correctLevel: QRCode.CorrectLevel.M,
			});
			QR_CODE.makeCode(window.location.href);
			
			showCodeModal.addEventListener("click", function(){ 	
				codeModal.style.display = "block";
				
			});
								
			codeModalClose.addEventListener("click", function(){ 
				codeModal.style.display = "none";
			});			
		});
		
	</script>
<?php } ?>