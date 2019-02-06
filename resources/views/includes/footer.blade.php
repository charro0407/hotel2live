<div class="container margin_60_35">
	<div class="row">
		<div class="col-lg-5 col-md-12 p-r-5">
			<p><img src="{{ asset('_assets/img/logo.png') }}" width="200" data-retina="true" alt=""></p>
			<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
			<div class="follow_us">
				<ul>
					<li>Follow us</li>
					<li><a href="#0"><i class="ti-facebook"></i></a></li>
					<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
					<li><a href="#0"><i class="ti-google"></i></a></li>
					<li><a href="#0"><i class="ti-pinterest"></i></a></li>
					<li><a href="#0"><i class="ti-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 ml-lg-auto">
			<h5>Useful links</h5>
			<ul class="links">
				<li><a href="#0">About</a></li>
				<li><a href="#0">Login</a></li>
				<li><a href="#0">Register</a></li>
				<li><a href="#0">News &amp; Events</a></li>
				<li><a href="#0">Contacts</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-6">
			<h5>Contact with Us</h5>
			<ul class="contacts">
				<li><a href="tel://+17867287695"><i class="ti-mobile"></i> +1 (786) 728-7695</a> <- Hire Me!</li>
				<li><a href="mailto:charro0407@gmail.com"><i class="ti-email"></i> charro0407@gmail.com</a></li>
			</ul>
			<div id="newsletter">
			<h6>Newsletter</h6>
			<div id="message-newsletter"></div>
			{{ Form::open(array('url' => '/', 'name' => 'newsletter_form', 'id' => 'newsletter_form')) }}
				<div class="form-group">
					<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
					<input type="submit" value="Submit" id="submit-newsletter">
				</div>
			{{ Form::close() }}
			</div>
		</div>
	</div>
	<!--/row-->
	<hr>
	<div class="row">
		<div class="col-lg-6">
			<ul id="footer-selector">
				<li>
					<div class="styled-select" id="lang-selector">
						<select>
							<option value="English" selected>English</option>
							<option value="French">French</option>
							<option value="Spanish">Spanish</option>
							<option value="Russian">Russian</option>
						</select>
					</div>
				</li>
				<li>
					<div class="styled-select" id="currency-selector">
						<select>
							<option value="US Dollars" selected>US Dollars</option>
							<option value="Euro">Euro</option>
						</select>
					</div>
				</li>
				<li><img src="{{asset('_assets/img/cards_all.svg')}}" alt=""></li>
			</ul>
		</div>
		<div class="col-lg-6">
			<ul id="additional_links">
				<li><a href="#0">Terms and conditions</a></li>
				<li><a href="#0">Privacy</a></li>
				<li><span>© By Javier Rocha for Work2Live.com</span></li>
			</ul>
		</div>
	</div>
</div>