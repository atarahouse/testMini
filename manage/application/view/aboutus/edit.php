<content>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">   
				        <H2 class="page-header">About US</H2>
				        <form role="form" action="<?php echo URL; ?>aboutus/update" method="POST">
							<div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="story" rows="5"><?php echo htmlspecialchars($this->aboutus[0]->story, ENT_QUOTES, 'UTF-8'); ?>
                                </textarea>
                                <script>
						            CKEDITOR.replace( 'story' );
						        </script>
                            </div>
							<div class="form-group">
                                <label>Meta Description</label>
                                <textarea class="form-control" name="metadescription" rows="3"><?php echo htmlspecialchars($this->aboutus[0]->metadescription, ENT_QUOTES, 'UTF-8'); ?>
                                </textarea>
                            </div>   
							<div class="form-group">
                                <label>Meta Keyword :</label>
                                <input  class="form-control" name="metakeyword" value="<?php echo htmlspecialchars($this->aboutus[0]->metakeyword, ENT_QUOTES, 'UTF-8'); ?>" required />
                            </div>
                                                                                 
				            <div class="form-group">
				            <input type="hidden" name="id" value="<?php echo $this->aboutus[0]->id; ?>" />
				            <input type="submit" name="submit_update_aboutus" value="Update" />
                            </div>
				        </form>	    
					</div>
				</div>
			</div>
		</div>
	</div>
</content>

