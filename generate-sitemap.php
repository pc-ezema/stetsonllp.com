<?php
// Run this file once to generate sitemap.xml
// Then delete this file

$base_url = "https://stetsonllp.com"; // Changed from www.stetsonllp.com to stetsonllp.com
$current_date = date('Y-m-d');

$pages = [
    // Main pages
    ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'daily'],
    ['loc' => '/index.php', 'priority' => '0.9', 'changefreq' => 'daily'],
    
    // Attorney pages
    ['loc' => '/jane-okoye.php', 'priority' => '0.8', 'changefreq' => 'monthly', 'image' => '/assets/images/Jane-Okoye-01.jpeg'],
    ['loc' => '/obinna-ubani.php', 'priority' => '0.8', 'changefreq' => 'monthly', 'image' => '/assets/images/Obinna-Ubani-02.jpg'],
    ['loc' => '/praise-anyaoha.php', 'priority' => '0.8', 'changefreq' => 'monthly', 'image' => '/assets/images/praise-anyaoha.jpeg'],
    ['loc' => '/uzodimma-danny-dubem.php', 'priority' => '0.8', 'changefreq' => 'monthly', 'image' => '/assets/images/Uzodimma-Danny-Dubem.jpeg'],
    
    // Practice areas (anchors on homepage)
    ['loc' => '/index.php#practiceAreas', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/index.php#aboutUs', 'priority' => '0.6', 'changefreq' => 'monthly'],
    ['loc' => '/index.php#attorneys', 'priority' => '0.6', 'changefreq' => 'monthly'],
    ['loc' => '/index.php#testimonials', 'priority' => '0.3', 'changefreq' => 'yearly'],
];

// Build XML content
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"';
$xml .= ' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
$xml .= ' xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"';
$xml .= ' xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";

foreach ($pages as $page) {
    $xml .= '    <url>' . "\n";
    $xml .= '        <loc>' . $base_url . $page['loc'] . '</loc>' . "\n";
    $xml .= '        <lastmod>' . $current_date . '</lastmod>' . "\n";
    $xml .= '        <changefreq>' . $page['changefreq'] . '</changefreq>' . "\n";
    $xml .= '        <priority>' . $page['priority'] . '</priority>' . "\n";
    
    if (isset($page['image'])) {
        $xml .= '        <image:image>' . "\n";
        $xml .= '            <image:loc>' . $base_url . $page['image'] . '</image:loc>' . "\n";
        $xml .= '        </image:image>' . "\n";
    }
    
    $xml .= '    </url>' . "\n";
}

$xml .= '</urlset>';

// Save to file
file_put_contents('sitemap.xml', $xml);

echo "sitemap.xml has been generated successfully!\n";
echo "Visit: https://stetsonllp.com/sitemap.xml\n";
?>