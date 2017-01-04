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
		// set html meta
		$this->titlePage = "Our Services";
		$this->metaDescription = $this->metaDescription . " Services";

		// load Module
		$this->serviceModel = $this->loadModel('Article');  
	}

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/services/index
     */
	public function index()
	{
		// get all services articles
		$this->services = $this->serviceModel->getArticleByCategory('services');
		
		// load views
        $this->loadView('services/index');
	}

    /**
     * PAGE: info
     * This method handles what happens when you move to http://yourproject/services/info/{{title}}
     */
	public function detail($title='all')
	{
		// replace - on URL
		$title = str_replace('-' , ' ', $title);
		
		// get article by Title
		$this->services = $this->serviceModel->getArticleByTitle($title);
		
		// set HTML Meta
		$this->titlePage = $title;
		$this->metaDescription = $this->metaDescription . " " . $title;

		// load view 
		$this->loadView('services/detail');
		
	}
}