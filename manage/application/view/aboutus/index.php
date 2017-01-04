
<?php 
/**
* View Manage/AboutUs/Index - 
*
*/
?> 
<main>
	<div class="container">
		<div>
			<H1><?php  if (isset($this->aboutus[0]->title)) echo htmlspecialchars($this->aboutus[0]->title, ENT_QUOTES, 'UTF-8'); ?></H1>
			<p><?php if (isset($this->aboutus[0]->story)) echo $this->aboutus[0]->story; ?></p>	 
		</div>
		<div>
			<a href="<?php echo URL; ?>aboutus\edit\">Edit</a>
		</div>
		
	</div>
</main>