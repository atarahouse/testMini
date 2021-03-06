<!-- 
    /**
     * View : manage/services/edit/{id}
     * This method handles what happens when you move to http://yourproject/manage/services/edit/{id}
     */
 -->
<content>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
				        <H1 class="page-header">Edit Service</H1>
				        <form role="form" action="<?php echo URL; ?>services/update" method="POST">
				        	<div class="form-group">
                                <label>Title</label>
                                <input  class="form-control" name="title" value="<?php echo htmlspecialchars($this->service->title, ENT_QUOTES, 'UTF-8'); ?>" required />
                            </div>
							<div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="story" rows="5"><?php echo htmlspecialchars($this->service->story, ENT_QUOTES, 'UTF-8'); ?></textarea>
                                <script>
						            CKEDITOR.replace( 'story' );
						        </script>
                            </div>
							<div class="form-group">
                                <label>Description : <small>[meta]</small></label>
                                <textarea class="form-control" name="metadescription" rows="3"><?php echo htmlspecialchars($this->service->metadescription, ENT_QUOTES, 'UTF-8'); ?></textarea>
                            </div>   
							<div class="form-group">
                                <label>Keyword : <small>[meta]</small></label>
                                <input  class="form-control" name="metakeyword" value="<?php echo htmlspecialchars($this->service->metakeyword, ENT_QUOTES, 'UTF-8'); ?>" required />
                            </div>
                                                                                 
				            <div class="form-group">
					            <input type="hidden" name="id" value="<?php echo $this->service->id; ?>" />
                                <input type="hidden" name="modifyby" value="test" />
                                <input type="hidden" name="modifydate" value="<?php echo date('Y/m/d'); ?>" />
					            <input type="submit" name="submit_update_aboutus" value="Update" class="btn btn-sm btn-success"/>
                            </div>
				        </form>	    
					</div>
				</div>
			</div>
		</div>
	</div>
</content>