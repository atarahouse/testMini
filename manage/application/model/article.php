<?php
/**
 * Class Article - MODEL
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
     * Get Article by Title from database
     */
    public function getArticleByID($article_id)
    {
        $sql = "SELECT id, category, title, story, metakeyword, metadescription, 
                    createby, createdate, modifyby, modifydate, enabled 
                FROM articles 
                WHERE id = :id";

        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $article_id);

        // debugging: 
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        
        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();   
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

        // debugging: 
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

        // debugging: 
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        
        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetchAll();   
    }

    /**
     * Add new Article in database
     * @param array $data Article
     */
   public function addArticle($data)
    {
        $sql = "INSERT INTO articles (
                    category, 
                    title, 
                    story,
                    metakeyword,
                    metadescription,
                    createby,
                    createdate, 
                    modifyby,
                    modifydate) 
                VALUES (
                    :category, 
                    :title, 
                    :story,
                    :metakeyword,
                    :metadescription,
                    :createby,
                    :createdate, 
                    :modifyby,
                    :modifydate)";

        $query = $this->db->prepare($sql);
        $parameters = array(
                        ':category' => $data["category"],
                        ':title' => $data["title"],
                        ':story' => $data["story"], 
                        ':metakeyword' => $data["metakeyword"], 
                        ':metadescription' => $data["metadescription"], 
                        ':createby' => $data["createby"], 
                        ':createdate' => $data["createdate"], 
                        ':modifyby' => $data["modifyby"], 
                        ':modifydate' => $data["modifydate"]);

        // debugging: 
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Update an Article in database
     * @param array $data Article
     */
   public function updateArticle($data)
    {
        $sql = "UPDATE articles
                SET 
                    title = :title,
                    story = :story, 
                    metakeyword = :metakeyword, 
                    metadescription = :metadescription, 
                    modifyby = :modifyby,
                    modifydate = :modifydate
                WHERE id = :id";

        $query = $this->db->prepare($sql);
        $parameters = array(
                        ':title' => $data["title"],
                        ':story' => $data["story"], 
                        ':metakeyword' => $data["metakeyword"], 
                        ':metadescription' => $data["metadescription"], 
                        ':modifyby' => $data["modifyby"], 
                        ':modifydate' => $data["modifydate"], 
                        ':id' => $data["id"]);

        // debugging: 
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete an article in the database
     * @param int $article_id Id of song
     */
    public function deleteArticle($article_id)
    {
        $sql = "DELETE FROM articles WHERE id = :article_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':article_id' => $article_id);

        // debugging: 
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
}