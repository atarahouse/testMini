<?php 
/**
 * SmGen / Sitemap generator
 * @author AtaraHouse github.com\atarahouse
 */
class SmGen
{
    /**
     * Generate Site Map
     * @param string $data = array[] {'url'=>'http://url', 'lastmod'=>'date'}      
     * @param string $isSMI = Site Map INdex
     */    
    public static function generateSM($data,$isSMI=null)
    {        
        header('Content-type: application/xml');

        $xmlTag= array();
        if (isset($isSMI))
        {
            $xmlTag=array('header' => '<sitemapindex ', 'footer'=>'</sitemapindex>');
        }else{
            $xmlTag=array('header' => '<urlset ', 'footer'=>'</urlset>');
        }

        echo '<?xml version="1.0" encoding="UTF-8"?>';
        /* echo '<?xml-stylesheet type="text/xsl" href="sitemap.xsl"?>';*/
        echo $xmlTag['header'] . ' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        if (isset($data))
        {
            foreach ($data as $page)
            {
                echo "<url>";
                echo '<loc>' . $page['url'] . '</loc>';
                echo '<lastmod>'. $page['lastmod'] . '</lastmod>';
                echo '<changefreq>weekly</changefreq>';
                echo '<priority>0.6</priority>';
                echo "</url>";
            }
        }       
        echo $xmlTag['footer'];
    }
}
