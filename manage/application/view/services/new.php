
<?php 
/**
 * VIEW Services/New
 */
 ?>

 <main>
 	<div class="container"> 
 		 <div class="box">
            <h3>Add a service</h3>
            <form action="<?php echo URL; ?>services/new" method="POST">
                <label>Artist</label>
                <input type="text" name="artist" value="" required />
                <label>Track</label>
                <input type="text" name="track" value="" required />
                <label>Link</label>
                <input type="text" name="link" value="" />
                <input type="submit" name="submit_add_song" value="Submit" />
            </form>
        </div>
 	</div>
 </main>