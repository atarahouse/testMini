<content>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<H1 class="page-header">
							<?php  if (isset($this->aboutus[0]->title)) echo htmlspecialchars($this->aboutus[0]->title, ENT_QUOTES, 'UTF-8'); ?>
							<small>
								<a  href="<?php echo URL; ?>aboutus/edit" class="btn btn-xs btn-warning">
									<i class="fa fa-pencil fa-1x"></i>
								</a>
							</small>							
						</H1>
						<p><?php if (isset($this->aboutus[0]->story)) echo $this->aboutus[0]->story; ?></p>	 

					</div>
				</div>
			</div>
		</div>
	</div>
</content>