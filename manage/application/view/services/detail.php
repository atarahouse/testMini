<!-- 
    /**
     * View : manage/services/detail/{id}
     * This method handles what happens when you move to http://yourproject/manage/services/detail/{id}
     */
 -->
<content>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<H1 class="page-header">
							<?php  if (isset($this->service->title)) echo htmlspecialchars($this->service->title, ENT_QUOTES, 'UTF-8'); ?>
							<small>
								<a  href="<?php echo URL; ?>services/edit/<?php echo $this->service->id; ?>" class="btn btn-xs btn-warning">
									<i class="fa fa-pencil fa-1x"></i>
								</a>

								<a  href="<?php echo URL; ?>services/delete/<?php echo $this->service->id; ?>" class="btn btn-xs btn-danger">
									<i class="fa fa-close fa-1x"></i>
								</a>
							</small>
						</H1>
						<p>
							<?php if (isset($this->service->story)) echo $this->service->story; ?>
						</p>	
						<small>[<a href="<?php echo URL; ?>services">Back to Services</a>]</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</content>

