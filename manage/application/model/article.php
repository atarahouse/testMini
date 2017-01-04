<?php
/**
 * Class Article - MODEL
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Article extends Model
{
    /**
     * Get all articles from database
     */
    public function getAllArticles()
    {
        $sql = "SELECT id, category, title, story, metakeyword, metadescription, 
                    createby, createdate, modifyby, modifydate, enabled 
                FROM articles";

        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Get Article by Category from database
     */
    public function getArticleByCategory($category)
    {
        $sql = "SELECT id, category, title, story, metakeyword, metadescription, 
                    createby, createdate, modifyby, modifydate, enabled 
                FROM articles 
                WHERE category = :category";

        $query = $this->db->prepare($sql);
        $parameters = array(':category' => $category);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        
        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetchAll();   
    }

    /**
     * Get Article by Title from database
     */
    public function getArticleByTitle($title)
    {
        $sql = "SELECT id, category, title, story, metakeyword, metadescription, 
                    createby, createdate, modifyby, modifydate, enabled 
                FROM articles 
                WHERE title = :title";

        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        
        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetchAll();   
    }

    /**
     * Update a about us in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param array $data Article
     */
   public function updateArticle($data)
    {
        $sql = "UPDATE articles
                SET story = :story, 
                    metakeyword = :metakeyword, 
                    metadescription = :metadescription 
                WHERE id = :id";

        $query = $this->db->prepare($sql);
        $parameters = array(
                        ':story' => $data["story"], 
                        ':metakeyword' => $data["metakeyword"], 
                        ':metadescription' => $data["metadescription"], 
                        ':id' => $data["id"]);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
}