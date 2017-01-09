<?php 
/**
 * Class Services - CONTROLLER
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Services extends Controller
{
	 /**
     * @var null serviceModel
     */
	private $serviceModel = null;
	public $services = null; 


	function __construct()
	{
		// load Module
		$this->serviceModel = $this->loadModel('Article');  
	}

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/manage/services/index
     */
	public function index()
	{
		// get all services articles
		$this->services = $this->serviceModel->getArticleByCategory('services');
		
		// load views
        $this->loadView('services/index');
	}

    /**
     * PAGE: services/detail/{$article_id}
     * This method handles what happens when you move to http://yourproject/manage/services/detail/{$article_id}
     */
	public function detail($article_id=0)
	{
		if (isset($article_id)) {
			// get article by Title
			$this->service = $this->serviceModel->getArticleByID($article_id);

			// load view 
			$this->loadView('services/detail');	
		}else{ header('location: ' . URL ); }
	}

    /**
     * PAGE: services/addnew
     * This method handles what happens when you move to http://yourproject/manage/services/addnew
     */
    public function addNew()
    {
	    $this->loadView('services/addNew');  	
    }


	/**
     * PAGE: services/save
     * This method handles what happens when you move to http://yourproject/manage/services/save
     */
    public function save()
    {
        if (isset($_POST["submit_add_service"])) {
           $data = array(
                'category' => $_POST["category"],
                'title' => $_POST["title"],
                'story' => $_POST["story"],
                'metakeyword' => $_POST["metakeyword"],
                'metadescription' => $_POST["metadescription"],
                'createby' => $_POST["createby"],
                'createdate' => $_POST["createdate"],
                'modifyby' => $_POST["createby"],
                'modifydate' => $_POST["createdate"]);
            
            $this->serviceModel->addArticle($data);
        }

        // where to go after song has been added
        header('location: ' . URL . 'services');
    }



    /**
     * PAGE: services/edit/{$article_id}
     * This method handles what happens when you move to http://yourproject/manage/services/edit/{$id}
     */
    public function edit($article_id=0)
    {
    	if (isset($article_id)) {
	        // get article Article
	        $this->service = $this->serviceModel->getArticleByID($article_id);

	        // load view
	        $this->loadView('services/edit');
    	}else{ header('location: ' . URL ); }
    }

    /**
     * PAGE: services/update
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
            
            $this->serviceModel->updateArticle($data);
        }

        // where to go after about us has been updated
        header('location: ' . URL . 'services');
    }

    /**
     * PAGE: services/delete
     * This method handles what happens when you move to http://yourproject/manage/aboutus/update
     */    
    public function delete($article_id)
    {
        // if we have an id of a song that should be deleted
        if (isset($article_id)) {
            // do deleteSong() in model/model.php
            $this->serviceModel->deleteArticle($article_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'services');
    }
}