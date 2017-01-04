<?php 
/**
 * Class AboutUs - CONTROLLER
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
    	$this->titlePage = "About Us";
        $this->articleModel = $this->loadModel('Article');   
    }

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/aboutus/index
     */
	public function index()
    {
		// get About Us Article
		$this->aboutus = $this->articleModel->getArticleByCategory('aboutus');

		$this->metaDescription = $this->aboutus[0]->metadescription;
        $this->metaKeyword = $this->aboutus[0]->metakeyword;

        // load view
        $this->loadView('aboutus/index');
	}
}
