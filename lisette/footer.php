<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lisette
 */

?>      	<?PHP if( is_home() || is_category() ) { ?>
      	
      	      <!-- Controls -->
      <div class="carouselButtonWrapper">
        <a class="left carousel-control prevButton" href="#carousel-example-generic" role="button" data-slide="prev">
          <p class="carouselText2">Prev</p>
          <svg class="svgCarouselButtonPrev" xmlns="http://www.w3.org/2000/svg" width="7.5" height="100.8" viewBox="0 0 7.5 100.8">
            <g id="83f57ec9-c007-42b6-8479-9ee944ee5772" data-name="Layer 2">
                <g id="72b0b049-4695-443c-a75b-b13e5fcb0873" data-name="Layer 1">
                    <rect class="f1463263-3125-40e2-bc4c-54ae80005572" x="2.5" width="2" height="90" />
                    <rect class="f1463263-3125-40e2-bc4c-54ae80005572 prevVierkant" y="83.2" width="7" height="7" />
                </g>
            </g>
        </svg>
        </a>
        <a class="left carousel-control nextButton" href="#carousel-example-generic" role="button" data-slide="next">
          <svg class="svgCarouselButtonNext" xmlns="http://www.w3.org/2000/svg" width="7.5" height="100.8" viewBox="0 0 7.5 100.8">
            <g id="83f57ec9-c007-42b6-8479-9ee944ee5772" data-name="Layer 2">
                <g id="72b0b049-4695-443c-a75b-b13e5fcb0873" data-name="Layer 1">
                    <rect class="f1463263-3125-40e2-bc4c-54ae80005572" x="2.5" width="2" height="90" />
                    <rect class="f1463263-3125-40e2-bc4c-54ae80005572 nextVierkant" y="83.2" width="7" height="7" />
                </g>
            </g>
        </svg>
          <p class="carouselText">Next</p>
        </a>
      </div>
</div>
<?PHP } ?>

	</div><!-- #content -->

</div>

	<footer id="colophon" class="site-footer footerbottom">
		<div class="footer-widgets clearfix">
			<?php if (is_active_sidebar('footer1')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer1'); ?>
				</div>

			<?php endif; ?>
						<?php if (is_active_sidebar('footer2')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer2'); ?>
				</div>

			<?php endif; ?>
		</div><!-- /footer-widgets -->
	</footer><!-- #colophon -->
</div><!-- #page -->

 <?php // wp_footer(); ?> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
<script>
jQuery(".widget_categories ul li:nth-last-child(2), .widget_categories ul li:last-child").css("display", "none");
  
  jQuery('.item:first-child').addClass('active');
  
      jQuery(".post-template-default article a").click(function(event){
        event.preventDefault();
    });
  
</script>
</body>
</html>
