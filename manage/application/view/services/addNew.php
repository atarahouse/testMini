<!-- 
    /**
     * View : manage/services/new
     * This method handles what happens when you move to http://yourproject/manage/services/new
     */
 -->
<content>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <H1 class="page-header">New Service</H1>
                        <form role="form" action="<?php echo URL; ?>services/save" method="POST">
                            <div class="form-group">
                                <label>Title</label>
                                <input  class="form-control" name="title" value="" required />
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="story" rows="5" required></textarea>
                                <script>
                                    CKEDITOR.replace( 'story' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Description : <small>[meta]</small></label>
                                <textarea class="form-control" name="metadescription" rows="3" required></textarea>
                            </div>   
                            <div class="form-group">
                                <label>Keyword : <small>[meta]</small></label>
                                <input  class="form-control" name="metakeyword" value="" required />
                            </div>
                                                                                 
                            <div class="form-group">
                                <input type="hidden" name="category" value="services" />
                                <input type="hidden" name="createby" value="bapak" />
                                <input type="hidden" name="createdate" value="<?php echo date('Y/m/d'); ?>" />
                                <input type="submit" name="submit_add_service" value="Save" class="btn btn-sm btn-success"/>
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</content>