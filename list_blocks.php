<?php
/**
 * Add body field to footer_column and newsletter, then populate content.
 * Note: must be run inside the Drupal container.
 */
use Drupal\block_content\Entity\BlockContent;
use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

chdir('/var/www/html/web');
$autoloader = require '/var/www/html/web/autoload.php';
$request = Request::createFromGlobals();
$kernel = DrupalKernel::createFromRequest($request, $autoloader, 'prod');
$kernel->boot();
\Drupal::setContainer($kernel->getContainer());
$kernel->getContainer()->get('request_stack')->push($request);

// 1. Add body field to footer_column bundle
$entity_type = 'block_content';

// Check if field storage exists 
$storage = \Drupal\field\Entity\FieldStorageConfig::loadByName($entity_type, 'body');
if (!$storage) {
    $storage = \Drupal\field\Entity\FieldStorageConfig::create([
        'field_name' => 'body',
        'entity_type' => $entity_type,
        'type' => 'text_with_summary',
        'cardinality' => 1,
    ]);
    $storage->save();
    echo "Created body field storage\n";
} else {
    echo "Body field storage already exists\n";
}

// Add to footer_column
$fc = \Drupal\field\Entity\FieldConfig::loadByName($entity_type, 'footer_column', 'body');
if (!$fc) {
    $fc = \Drupal\field\Entity\FieldConfig::create([
        'field_storage' => $storage,
        'bundle' => 'footer_column',
        'label' => 'Body',
        'settings' => [
            'display_summary' => FALSE,
        ],
    ]);
    $fc->save();
    echo "Added body field to footer_column\n";
} else {
    echo "footer_column already has body field\n";
}

// Add to newsletter
$nl = \Drupal\field\Entity\FieldConfig::loadByName($entity_type, 'newsletter', 'body');
if (!$nl) {
    $nl = \Drupal\field\Entity\FieldConfig::create([
        'field_storage' => $storage,
        'bundle' => 'newsletter',
        'label' => 'Body',
        'settings' => [
            'display_summary' => FALSE,
        ],
    ]);
    $nl->save();
    echo "Added body field to newsletter\n";
} else {
    echo "newsletter already has body field\n";
}

// 2. Populate footer column blocks
$footer_content = [
    5 => '<p>CPG Matters is a leading resource for consumer packaged goods industry news, analysis, and insights.</p>',
    6 => '<ul><li><a href="/archive">Article Archive</a></li><li><a href="/whitepapers">Whitepapers</a></li><li><a href="/dictionary">CPG Dictionary</a></li><li><a href="/directory">Industry Directory</a></li></ul>',
    7 => '<ul><li><a href="/">Industry Trends</a></li><li><a href="/">Sustainability</a></li><li><a href="/">Innovation</a></li><li><a href="/">Market Analysis</a></li><li><a href="/">E-Commerce</a></li></ul>',
    8 => '<ul><li><a href="/contact">Contact Us</a></li><li><a href="https://twitter.com">Twitter</a></li><li><a href="https://linkedin.com">LinkedIn</a></li><li><a href="/register">Subscribe</a></li></ul>',
];

foreach ($footer_content as $id => $body) {
    $block = BlockContent::load($id);
    if ($block) {
        $block->set('body', [
            'value' => $body,
            'format' => 'basic_html',
        ]);
        $block->save();
        echo "Updated block $id: " . $block->label() . "\n";
    } else {
        echo "Block $id not found\n";
    }
}

// Update newsletter body
$newsletter = BlockContent::load(1);
if ($newsletter) {
    $newsletter->set('body', [
        'value' => '<p>Get the latest CPG news delivered to your inbox</p>',
        'format' => 'basic_html',
    ]);
    $newsletter->save();
    echo "Updated newsletter\n";
}

echo "\nAll done!\n";
