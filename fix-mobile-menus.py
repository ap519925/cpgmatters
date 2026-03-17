import glob

files = glob.glob(r'c:\Users\thean\.gemini\antigravity\scratch\cpg_project\web\themes\custom\cpg_theme\templates\layout\page*.html.twig')

hamburger_html = """        {# Actions (Subscribe + Search) #}
        <div class="header-actions">
          {# Mobile-only hamburger for main nav #}
          <button class="mobile-nav-hamburger" aria-label="Open navigation" aria-expanded="false">
            <span class="mobile-nav-hamburger__bar"></span>
            <span class="mobile-nav-hamburger__bar"></span>
            <span class="mobile-nav-hamburger__bar"></span>
          </button>
          {% if page.header_actions %}{{ page.header_actions }}{% endif %}
        </div>"""

drawer_html = """    {# ===== FLOATING TOPIC ICON SIDEBAR (Dynamically rendered from block) ===== #}
    {% if page.mobile_topics %}
      {{ page.mobile_topics }}
    {% endif %}

    {# ===== MOBILE NAV DRAWER ===== #}
    <div class="mobile-nav-overlay"></div>
    <nav class="mobile-nav-drawer" aria-label="Mobile navigation">
      <div class="mobile-nav-drawer__header">
        <span class="mobile-nav-drawer__title">Navigation</span>
        <button class="mobile-nav-drawer__close" aria-label="Close navigation">&times;</button>
      </div>
      {% if page.mobile_nav %}
        {{ page.mobile_nav }}
      {% endif %}
    </nav>
  {% endif %}"""

for f in files:
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    
    # 1. Add hamburger
    if '<button class="mobile-nav-hamburger"' not in content:
        # replace the generic actions block
        content = content.replace('        {# Actions (Subscribe + Search) #}\n        <div class="header-actions">\n          {% if page.header_actions %}{{ page.header_actions }}{% endif %}\n        </div>', hamburger_html)
    
    # 2. Add drawer
    if 'mobile-nav-drawer' not in content:
        # It's currently replacing where topics end.
        old_topic = """    {# ===== FLOATING TOPIC ICON SIDEBAR (Dynamically rendered from block) ===== #}
    {% if page.mobile_topics %}
      {{ page.mobile_topics }}
    {% endif %}
  {% endif %}"""
        content = content.replace(old_topic, drawer_html)
        
    with open(f, 'w', encoding='utf-8') as file:
        file.write(content)

print("Added hamburger and mobile nav drawer to all templates.")
