<main>
	<div class="container">
    	
    <!-- add song form -->    
	        <h2>Edit About US</h2>
	        <form action="<?php echo URL; ?>aboutus/update" method="POST">
	        	
	            <label>About Us</label>
	            <input autofocus type="text" name="story" value="<?php echo htmlspecialchars($this->aboutus[0]->story, ENT_QUOTES, 'UTF-8'); ?>" required />
	            <label>Meta Keyword</label>
	            <input autofocus type="text" name="metakeyword" value="<?php echo htmlspecialchars($this->aboutus[0]->metakeyword, ENT_QUOTES, 'UTF-8'); ?>" required />
	            <label>Meta Description</label>
	            <input autofocus type="text" name="metadescription" value="<?php echo htmlspecialchars($this->aboutus[0]->metadescription, ENT_QUOTES, 'UTF-8'); ?>" required />
	            <input type="hidden" name="id" value="<?php echo $this->aboutus[0]->id; ?>">
	            <input type="submit" name="submit_update_aboutus" value="Update" />
	        </form>	    
	</div>
</main>