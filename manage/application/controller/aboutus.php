<?php 
/**
 * Class Manage/AboutUs - CONTROLLER
 * This is a demo class.
 *
 */
class AboutUs extends Controller
{
    /**
     * @var null articleModel
     */
	private $articleModel = null;

    /**
     * @var null aboutus
     */
    public $aboutus = null;

   /**
     * @param object $db A PDO database connection
     */
    function __construct()
    {
    	$this->titlePage = "Manage | About Us";
        $this->articleModel = $this->loadModel('Article');   
    }

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/manage/aboutus/index
     */
	public function index()
    {
		// get About Us Article
		$this->aboutus = $this->articleModel->getArticleByCategory('aboutus');
		
        // load view
        $this->loadView('aboutus/index');
	}

    /**
     * PAGE: edit
     * This method handles what happens when you move to http://yourproject/manage/aboutus/edit
     */
    public function edit()
    {
        // get About Us Article
        $this->aboutus = $this->articleModel->getArticleByCategory('aboutus');
        
        // load view
        $this->loadView('aboutus/edit');
    }

   /**
     * PAGE: update
     * This method handles what happens when you move to http://yourproject/manage/aboutus/update
     */
    public function update()
    {
        // if submit has been click
        if (isset($_POST["submit_update_aboutus"])) {
            $data = array(
                'id' => $_POST["id"], 
                'title' => $_POST["title"],
                'story' => $_POST["story"],
                'metakeyword' => $_POST["metakeyword"],
                'metadescription' => $_POST["metadescription"],
                'modifyby' => $_POST["modifyby"],
                'modifydate' => $_POST["modifydate"]);
            
            $this->articleModel->updateArticle($data);
        }

        // where to go after about us has been updated
        header('location: ' . URL . 'aboutus');
    }
}
