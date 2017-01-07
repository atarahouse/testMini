<content>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<H1 class="page-header">
							<?php  if (isset($this->services[0]->title)) echo htmlspecialchars($this->services[0]->title, ENT_QUOTES, 'UTF-8'); ?>
						</H1>
						<p>
							<?php if (isset($this->services[0]->story)) echo $this->services[0]->story; ?>
						</p>	
						<a href="<?php echo URL; ?>services">Back to Services</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</content>

