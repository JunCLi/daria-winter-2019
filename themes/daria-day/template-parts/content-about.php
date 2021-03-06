<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package daria-day
 */

?>

<?php 
// Variables
$header1 = get_field('header1');
$subheader1 = get_field('subheader_1');
$body1 = get_field('body_text_1');
$subheader2 = get_field('subheader_2');
$body2 = get_field('body_text_2');
$photo1text = get_field('photo_text_1');
$photo2text = get_field('photo_text_2');

?>


<section class = 'ourstory'>
	<div class="content-wrapper">
		<div class='copy'>
			<div>
				<h2 class="header"><?php echo $header1 ?></h2>
			</div>
			<div>
				<h4 class="subheader1"><?php echo $subheader1 ?></h4>
				<p class="body1"><?php echo $body1 ?></p>
			</div>
			<div>
				<h4 class="subheader2"><?php echo $subheader2 ?></h4>
				<p class="body2"><?php echo $body2 ?></p>
			</div>
		</div>              
		<div class='skewedphotos'>
			<div class="photo1"> 
				<img class="photo1img" src="<?php echo get_template_directory_uri();?>/images/MeettheArtisans.png" alt="Meet Artisans">      
				<p class='wordfont'><?php echo $photo1text ?></p>  
			</div>
			<div class='photo2'> 
				<img class="photo2img" src="<?php echo get_template_directory_uri();?>/images/Pakistantrip18.png" alt="Meet Artisans">
				<p class='wordfont'><?php echo $photo2text ?></p> 
			</div> 
		</div>
	</div>
</section>
