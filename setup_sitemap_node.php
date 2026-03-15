<?php

/**
 * @file
 * Creates the Sitemap node with the full HTML from the twig template.
 */

use Drupal\node\Entity\Node;
use Drupal\path_alias\Entity\PathAlias;

// The full HTML for the sitemap page
$sitemap_html = <<<HTML
<div class="sitemap-page">
  <div class="sitemap-hero">
    <h1 class="sitemap-hero__title">Site Map</h1>
    <p class="sitemap-hero__subtitle">Navigate through all sections of CPG Matters. Find articles, resources, tools, and more.</p>
  </div>

  <div class="sitemap-container">
    <div class="sitemap-popular">
      <h2 class="sitemap-popular__title">Most Popular Destinations</h2>
      <div class="sitemap-popular__grid">
        <a href="/" class="sitemap-popular__card">
          <span class="sitemap-popular__icon">🏠</span>
          <span class="sitemap-popular__label">Home Page</span>
        </a>
        <a href="/articles" class="sitemap-popular__card">
          <span class="sitemap-popular__icon">📰</span>
          <span class="sitemap-popular__label">Latest News</span>
        </a>
        <a href="/white-papers" class="sitemap-popular__card">
          <span class="sitemap-popular__icon">📋</span>
          <span class="sitemap-popular__label">White Papers</span>
        </a>
        <a href="/dictionary" class="sitemap-popular__card">
          <span class="sitemap-popular__icon">📖</span>
          <span class="sitemap-popular__label">Industry Dictionary</span>
        </a>
      </div>
    </div>

    <!-- Main Sections Grid -->
    <div class="sitemap-grid">
      <div class="sitemap-section-card">
        <div class="sitemap-section-header">
          <span class="sitemap-section-icon">🌐</span>
          <h3 class="sitemap-section-title">Main Navigation</h3>
        </div>
        <ul class="sitemap-links">
          <li><a href="/">Home</a></li>
          <li><a href="/articles">News &amp; Articles</a></li>
          <li><a href="/about-us">About CPG Matters</a></li>
          <li><a href="/contact">Contact Us</a></li>
          <li><a href="/register-step1">Register / Sign Up</a></li>
          <li><a href="/user/login">Sign In</a></li>
        </ul>
      </div>

      <div class="sitemap-section-card">
        <div class="sitemap-section-header">
          <span class="sitemap-section-icon">📰</span>
          <h3 class="sitemap-section-title">Content</h3>
        </div>
        <ul class="sitemap-links">
          <li><a href="/articles">All Articles</a></li>
          <li><a href="/articles?featured=1">Featured Articles</a></li>
        </ul>
      </div>

      <div class="sitemap-section-card">
        <div class="sitemap-section-header">
          <span class="sitemap-section-icon">📚</span>
          <h3 class="sitemap-section-title">Resources</h3>
        </div>
        <ul class="sitemap-links">
          <li><a href="/white-papers">White Papers</a></li>
          <li><a href="/dictionary">Industry Dictionary</a></li>
        </ul>
      </div>
    </div>

    <div class="sitemap-grid">
      <div class="sitemap-section-card">
        <div class="sitemap-section-header">
          <span class="sitemap-section-icon">🏢</span>
          <h3 class="sitemap-section-title">Directory</h3>
        </div>
        <ul class="sitemap-links">
          <li><a href="/directory">Company Directory</a></li>
          <li><a href="/directory/claim">Claim Your Profile</a></li>
        </ul>
      </div>
      
      <div class="sitemap-section-card">
        <div class="sitemap-section-header">
          <span class="sitemap-section-icon">ℹ️</span>
          <h3 class="sitemap-section-title">About</h3>
        </div>
        <ul class="sitemap-links">
          <li><a href="/about-us">About CPG Matters</a></li>
          <li><a href="/careers">Careers</a></li>
          <li><a href="/press">Press Room</a></li>
        </ul>
      </div>

      <div class="sitemap-section-card">
        <div class="sitemap-section-header">
          <span class="sitemap-section-icon">⚖️</span>
          <h3 class="sitemap-section-title">Legal</h3>
        </div>
        <ul class="sitemap-links">
          <li><a href="/privacy-policy">Privacy Policy</a></li>
          <li><a href="/terms-of-use">Terms of Use</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
HTML;

// Delete existing sitemap nodes if any
$query = \Drupal::entityQuery('node')
  ->condition('title', 'Site Map')
  ->accessCheck(FALSE);
$nids = $query->execute();
if (!empty($nids)) {
  $nodes = Node::loadMultiple($nids);
  foreach ($nodes as $node) {
    // Check if it's the sitemap
    if ($node->getType() === 'page') {
      $node->delete();
    }
  }
}

// Ensure Full HTML exists and allows div with classes (it usually does by default if no filters strip it)
// We will just use 'full_html'

$node = Node::create([
  'type' => 'page',
  'title' => 'Site Map Node Format',
  'body' => [
    'value' => $sitemap_html,
    'format' => 'full_html',
  ],
  'status' => 1,
  'uid' => 1,
]);
$node->save();

$alias = PathAlias::create([
  'path' => '/node/' . $node->id(),
  'alias' => '/sitemap',
]);
$alias->save();

echo "Sitemap node created successfully with ID " . $node->id() . " and alias /sitemap!\n";
