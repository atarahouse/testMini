<!-- 
    /**
     * View : manage/services/index
     * This method handles what happens when you move to http://yourproject/manage/services
     */
 -->
<content>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <H1 class="page-header">Our Services</H1>
                        <p>
                            <small>
                                <a  href="<?php echo URL; ?>services/addnew" class="btn btn-xs btn-success">[+]new service</a>
                            </small>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <td>Title</td>
                                        <td>Content</td>
                                        <td>Last Modify</td>
                                        <td>Details</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->services as $service) { ?>
                                        <tr>
                                            <td><?php if (isset($service->title)) echo htmlspecialchars($service->title, ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td><?php if (isset($service->story)) echo htmlspecialchars(substr($service->story, 0, 25), ENT_QUOTES, 'UTF-8') . ' ...'; ?></td>
                                            <td><?php if (isset($service->modifydate)) echo htmlspecialchars($service->modifydate, ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td>
                                                <a href="<?php echo URL; ?>services/detail/<?php echo $service->id; ?>" class="btn btn-xs btn-primary">
                                                    <i class="fa fa-list fa-1x"></i>
                                                </a>
                                                <a href="<?php echo URL; ?>services/edit/<?php echo $service->id; ?>" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-pencil fa-1x"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</content>
