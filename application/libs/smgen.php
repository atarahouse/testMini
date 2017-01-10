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
     */    
    private function generateSM($data)
    {
        header('Content-type: application/xml');

        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<?xml-stylesheet type="text/xsl" href="sitemap.xsl"?>';
        echo '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'

        if (isset($data))
        {
            foreach ($data as $page)
            {
                echo "<url>";
                echo '<loc>' . $page->url . '</loc>';
                echo '<lastmod>'. $page->lastmod . '</lastmod>';
                echo '<changefreq>weekly</changefreq>';
                echo '<priority>0.6</priority>';
                echo "</url>";
            }
        }
        
        echo '</urlset>';
    }

    /**
     * Generate Site Map Index
     * @param string $data
     */
    private function generateSMI($data)
    {
        header('Content-type: application/xml');

        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<?xml-stylesheet type="text/xsl" href="sitemap.xsl"?>';
        echo '<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'

        if (isset($data))
        {
            foreach ($data as $page)
            {
                echo "<url>";
                echo '<loc>' . $page->url . '</loc>';
                echo '<lastmod>'. $page->date . '</lastmod>';
                echo "</url>";
            }
        }
        
        echo '</sitemapindex>';
    }
}
