<?php 
/**
 * RSSGen / RSS generator
 * @author AtaraHouse github.com\atarahouse
 */
class RssGen
{
    /**
     * Generate RSS 2.0 Map
     * @param string $header = array(
                            'title'=>'My Title RSS';
                            'link'=>'http://mywebsite.com';
                            'description'=>'Your Web site description...... (max 90char)';
                            'language'=>'en-us';
                            'copyright'=>'Copyright (C) 2016 github.com\atarahouse';
            )
     * @param string $items = array(
                                    'title'=>'',
                                    'description'=>'',
                                    'link'=> '',
                                    'pubDate'=>date('Y-m-d\Th:i:s')
                                    );
     */    
    public static function generateRSS2($header,$items)
    {        
        header('Content-Type: application/rss+xml');

        echo '<?xml version="1.0" encoding="UTF-8"?>';        
        echo '<rss version="2.0">';
        echo '<channel>';
            // HEADER
                if (isset($header))
                {
                    echo '<title>' . $header['title'] . '</title>';
                    echo '<link>' . $header['link'] . '</link>';
                    echo '<description>' . $header['description'] . '</description>';
                    echo '<language>' . $header['language'] . '</language>';
                    echo '<copyright>' . $header['copyright'] . '</copyright>';
                }  

            // Items
                if (isset($items))
                {
                    foreach ($items as $page)
                    {
                        echo "<item>";
                            echo '<title>' . $page['title'] . '</title>';
                            echo '<description>'. $page['description'] . '</description>';
                            echo '<link>'. $page['link'] . '</link>';
                            echo '<pubDate>'. $page['pubDate'] . '</pubDate>';
                        echo "</items>";
                    }
                }     
        echo '</channel>';  
        echo '</rss>';
    }


    /**
     * Generate atom 1.0 Map
     * based on https://validator.w3.org/feed/docs/atom.html
     * 
     * @param string $header = array(
                            'title'=>'My Title RSS';
                            'link'=>'http://mywebsite.com';
                            'description'=>'Your Web site description...... (max 90char)';
                            'language'=>'en-us';
                            'copyright'=>'Copyright (C) 2016 github.com\atarahouse';
            )
     * @param string $items = array(
                                    'title'=>'',
                                    'description'=>'',
                                    'link'=> '',
                                    'pubDate'=>date('Y-m-d\Th:i:s')
                                    );
     */     
    public static function generateAtom($header,$items)
    {
        header('Content-Type:application/atom+xml');

        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<feed xmlns="http://www.w3.org/2005/Atom">';
        // HEADER
        if (isset($header))
        {
            echo '<title>' . $header['title'] . '</title>';
            echo '<link>' . $header['link'] . '</link>';
            echo '<updated>' . $header['updated'] . '</updated>';
            echo '<author><name>' . $header['author'] . '</name></author>';
            echo '<id>' . $header['id'] . '</id>';
        }    
        // Items
        if (isset($items))
        {
            foreach ($items as $entry)
            {
                echo "<entry>";
                    echo '<title>' . $entry['title'] . '</title>';                    
                    echo '<link>'. $entry['link'] . '</link>';
                    echo '<id>' . $entry['id'] . '</id>';
                    echo '<updated>'. $entry['updated'] . '</updated>';
                    echo '<summary>'. $entry['summary'] . '</summary>';
                echo "</entry>";
            }
        }  

        echo '</feed>';
        
        /*
        <?xml version="1.0" encoding="utf-8"?>
        <feed xmlns="http://www.w3.org/2005/Atom">

          <title>Example Feed</title>
          <link href="http://example.org/"/>
          <updated>2003-12-13T18:30:02Z</updated>
          <author>
            <name>John Doe</name>
          </author>
          <id>urn:uuid:60a76c80-d399-11d9-b93C-0003939e0af6</id>

          <entry>
            <title>Atom-Powered Robots Run Amok</title>
            <link href="http://example.org/2003/12/13/atom03"/>
            <id>urn:uuid:1225c695-cfb8-4ebb-aaaa-80da344efa6a</id>
            <updated>2003-12-13T18:30:02Z</updated>
            <summary>Some text.</summary>
          </entry>
        </feed>
        */
    }
}
