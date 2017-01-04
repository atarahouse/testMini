
<?php 
/**
 * Class Services/Index - View
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
 ?>
<main>
    <div class="container">
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Title</td>
                <td>Story</td>
                <td>Create By</td>
                <td>Create Date</td>
                <td>View Details</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->services as $service) { ?>
                <tr>
                    <td><?php if (isset($service->title)) echo htmlspecialchars($service->title, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($service->story)) echo $service->story; ?></td>
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
</main>
