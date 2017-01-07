
<content>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <table>
                            <thead style="background-color: #ddd; font-weight: bold;">
                            <tr>
                                <td>Title</td>
                                <!-- <td>Story</td> -->
                                <td>Create By</td>
                                <td>Create Date</td>
                                <td>View Details</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->services as $service) { ?>
                                <tr>
                                    <td><?php if (isset($service->title)) echo htmlspecialchars($service->title, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <!-- <td><?php if (isset($service->story)) echo substr($service->story, 0, 80) . ' ...'; ?></td> -->
                                    <td><?php if (isset($service->createby)) echo htmlspecialchars($service->createby, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php if (isset($service->createdate)) echo htmlspecialchars($service->createdate, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td>
                                        <a href="<?php echo URL; ?>services\detail\<?php echo str_replace(' ' , '-', $service->title); ?>">Detail</a>
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
</content>
