

		</div><!-- #content -->

		<section id="contact">
			<div class="section-intro">
				<p>Life - and usually deadlines - are too short to waste not taking action! Send me a message and we'll discuss awesome projects to embark on together.</p>
				<p>Or just say hello. That's cool too!</p>
			</div>
			<div class="form">
				<form>
					<span class="input input--hoshi">
						<input class="input__field input__field--hoshi" type="text">
						<label class="input__label input__label--hoshi">
							<span class="input__label-content input__label-content--hoshi">Name</span>
						</label>
					</span>
					<span class="input input--hoshi">
						<input class="input__field input__field--hoshi" type="email">
						<label class="input__label input__label--hoshi">
							<span class="input__label-content input__label-content--hoshi">Email</span>
						</label>
					</span>
					<span class="input input--hoshi">
						<textarea class="input__field input__field--hoshi" rows="4"></textarea>
						<label class="input__label input__label--hoshi">
							<span class="input__label-content input__label-content--hoshi">Message</span>
						</label>
					</span>
					<a href="javascript:void(0);" class="cta-red">Send me a message!</a>
				</form>
			</div>
			<div class="form-footnote">
				<p>All information send to me will never be shared with anyone else. It'll only be used to contact you in reply to your message.</p>
			</div>
		</section>

		<footer>
			<div class="ft-text">
				<p>&copy; 2005-2017 Victor Burnett. All rights reserved.</p>
			</div>
			<div class="ft-logo">
				<a href="<?php echo get_site_url(); ?>">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
			 			<g>
							<polygon class="vcb-logo-part-1" points="165,275.3 75.4,185.7 40,221 147.3,328.3 174,328.3 140,294.3"/>
							<polygon class="vcb-logo-part-2" points="290,221 254.6,185.7 165,275.3 140,294.3 174,328.3 182.7,328.3"/>
							<path class="vcb-logo-part-3" d="M182.7,294.3H140V1.7l50,49.9V119l33.7-33.7l66.3,66.3V187L182.7,294.3zM190,122.4v93.9l47-47L190,122.4z"/>
						</g>
					</svg>
				</a>
			</div>
		</footer>

	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
<script>
	(function() {
		// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
		if (!String.prototype.trim) {
			(function() {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( '.input__field' ) ).forEach( function( inputEl ) {
			// in case the input is already filled..
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// events:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		} );

		function onInputFocus( ev ) {
			classie.add( ev.target.parentNode, 'input--filled' );
		}

		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
				classie.remove( ev.target.parentNode, 'input--filled' );
			}
		}
	})();
</script>
<!-- end/ Scripts -->

</body>
</html>
