<content>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">   
				        <H2>Edit About US</H2>
				        <form role="form" action="<?php echo URL; ?>aboutus/update" method="POST">
				        	<!-- 
				            <label>About Us</label>
				            <input autofocus type="text" name="story" value="<?php echo htmlspecialchars($this->aboutus[0]->story, ENT_QUOTES, 'UTF-8'); ?>" required />                                              
				            <label>Meta Keyword</label>
				            <input autofocus type="text" name="metakeyword" value="<?php echo htmlspecialchars($this->aboutus[0]->metakeyword, ENT_QUOTES, 'UTF-8'); ?>" required />

				            <label>Meta Description</label>
				            <input autofocus type="text" name="metadescription" value="<?php echo htmlspecialchars($this->aboutus[0]->metadescription, ENT_QUOTES, 'UTF-8'); ?>" required />
							-->
							<div class="form-group">
                                <label>Content</label>
                                <input autofocus class="form-control" name="story" value="<?php echo htmlspecialchars($this->aboutus[0]->story, ENT_QUOTES, 'UTF-8'); ?>" required />
                            </div>

							<div class="form-group">
                                <label>Content</label>
                                <input  class="form-control" name="metakeyword" value="<?php echo htmlspecialchars($this->aboutus[0]->metakeyword, ENT_QUOTES, 'UTF-8'); ?>" required />
                            </div>
                            
							<div class="form-group">
                                <label>Content</label>
                                <input  class="form-control" name="metadescription" value="<?php echo htmlspecialchars($this->aboutus[0]->metadescription, ENT_QUOTES, 'UTF-8'); ?>" required />
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

