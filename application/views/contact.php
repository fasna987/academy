<section id="contact" class="section-padding">
	<div class="container" style="padding: 20px 10px 1px 1px">
		<div class="row" >
			<div class="col-md-12" style="padding: 60px 10px 1px 1px">
				<h2 class="section-title">Contact Us</h2>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="activity-item">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="<?php echo base_url('assets/img/azda.JPG'); ?>" alt="Card image cap" >
						<div class="card-body">
							<h3>AZDA Education Center</h3>
							<p class="card-text">256/2, Galle Road Colombo-06,<br>Sri Lanka.<br>Tel +94 112 36 44 58</p>
						</div>
					</div>
				</div>
			</div>
			<div class="header-section text-center">
			</div>
			<form action="" method="post" role="form" class="contactForm">
				<div class="col-md-6 col-sm-6 col-xs-12 right">
					<div class="form-group">
						<input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
						<div class="validation"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 right">
					<div class="form-group">
						<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
						<div class="validation"></div>
					</div>
				</div>
				<div class="col-xs-12">
					<!-- Button -->
					<button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
				</div>
			</form><br>
		</div>
	</div>
</section>

