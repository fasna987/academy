<section class="activity-area section">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="padding: 60px 10px 1px 1px">
				<h2 class="section-title">Avilable Courses</h2>
			</div>
			<?php
			if(!empty($courses))
			{
				foreach($courses as $row)
				{
					?>
					<div class="col-md-4 col-sm-6 col-xs-12" style="padding: 10px 10px 10px 10px">
						<div class="activity-item">
<!--						<img src="--><?php //echo base_url('assets/img/CS.jpg'); ?><!--" class="img-responsive">-->
							<img src="<?php echo $row['image']; ?>">
						<h5><?php echo $row['coursename']; ?></h5>
						<p>Duration: <?php echo $row['duration']; ?></p>
						<p>Fees:  <?php echo $row['amount']; ?></p>
						<p><?php echo $row['discription']; ?></p>
						<p>Lecturer :  <?php echo $row['lecturer']; ?></p>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>


