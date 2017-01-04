<?php 
/**
 * Class Services/Details - View
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
 ?>
 <main>
 	
 	<div class="container">
		<H1><?php  if (isset($this->services[0]->title)) echo htmlspecialchars($this->services[0]->title, ENT_QUOTES, 'UTF-8'); ?></H1>
		<p><?php if (isset($this->services[0]->story)) echo $this->services[0]->story; ?></p>	
		<a href="<?php echo URL; ?>services">Back to Services</a> 
	</div>
 	
 </main>

