<?php

use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;

// 1. Fix Sitemap Node
$sitemap = Node::load(36);
if ($sitemap) {
  $sitemap->setTitle('Sitemap');
  $sitemap->save();
  echo "Renamed Node 36 to 'Sitemap'.\n";
  
  // Update alias
  $path_alias = \Drupal::entityTypeManager()->getStorage('path_alias')->create([
    'path' => '/node/36',
    'alias' => '/sitemap',
  ]);
  try { $path_alias->save(); } catch (\Exception $e) {}
}

// 2. Prepare Contact Node
// Delete old if exists
$query = \Drupal::entityQuery('node')->condition('title', 'Contact')->accessCheck(FALSE);
foreach ($query->execute() as $nid) {
  if ($nid != 36) Node::load($nid)->delete();
}

// Create Sidebar paragraph with EXACT mockup text
$sidebar_html = '
<div class="contact-info-card">
  <h3>Contact Information</h3>
  
  <div class="contact-info-item">
    <div class="icon">📍</div>
    <div class="content">
      <strong>Office Address</strong>
      <p>CPG Matters<br>123 Market Street, Suite 500<br>New York, NY 10001<br>United States</p>
    </div>
  </div>

  <div class="contact-info-item">
    <div class="icon">✉️</div>
    <div class="content">
      <strong>Email</strong>
      <p>General: <a href="mailto:info@cpgmatters.com">info@cpgmatters.com</a><br>
      Editorial: <a href="mailto:editorial@cpgmatters.com">editorial@cpgmatters.com</a><br>
      Advertising: <a href="mailto:advertising@cpgmatters.com">advertising@cpgmatters.com</a></p>
    </div>
  </div>

  <div class="contact-info-item">
    <div class="icon">📞</div>
    <div class="content">
      <strong>Phone</strong>
      <p>Main: <a href="tel:2125551234">(212) 555-1234</a><br>
      Toll-Free: <a href="tel:8005551234">(800) 555-1234</a></p>
    </div>
  </div>

  <div class="contact-info-item">
    <div class="icon">🕒</div>
    <div class="content">
      <strong>Office Hours</strong>
      <div class="hours-row"><span>Monday - Friday</span> <span>9:00 AM - 6:00 PM EST</span></div>
      <div class="hours-row"><span>Saturday</span> <span>10:00 AM - 2:00 PM EST</span></div>
      <div class="hours-row"><span>Sunday</span> <span>Closed</span></div>
    </div>
  </div>

  <div class="contact-info-item">
    <div class="icon">🌐</div>
    <div class="content">
      <strong>Follow Us</strong>
      <div class="social-links">
        <a href="#" class="social-pill">in</a>
        <a href="#" class="social-pill">X</a>
        <a href="#" class="social-pill">f</a>
        <a href="#" class="social-pill">✉️</a>
      </div>
    </div>
  </div>

  <hr class="contact-divider" />

  <div class="contact-quick-links">
    <strong>Quick Links</strong>
    <ul>
      <li><a href="#">→ Frequently Asked Questions</a></li>
      <li><a href="#">→ Submit a Story or Press Release</a></li>
      <li><a href="#">→ Advertise With Us</a></li>
      <li><a href="#">→ Career Opportunities</a></li>
    </ul>
  </div>
</div>';

$p = Paragraph::create([
  'type' => 'cpg_text',
  'field_p_body' => [
    'value' => $sidebar_html,
    'format' => 'full_html',
  ],
]);
$p->save();

$contact = Node::create([
  'type' => 'page',
  'title' => 'Contact',
  'field_cpg_paragraphs' => [
    [
      'target_id' => $p->id(),
      'target_revision_id' => $p->getRevisionId(),
    ],
  ],
]);
$contact->save();

// Set alias so it overrides the core contact module
$path_alias2 = \Drupal::entityTypeManager()->getStorage('path_alias')->create([
  'path' => '/node/' . $contact->id(),
  'alias' => '/contact',
]);
try { $path_alias2->save(); } catch (\Exception $e) {}

echo "Created new Contact node (ID: " . $contact->id() . ") with paragraphs.\n";
