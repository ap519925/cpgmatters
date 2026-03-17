import glob

files = glob.glob(r'c:\Users\thean\.gemini\antigravity\scratch\cpg_project\web\themes\custom\cpg_theme\templates\layout\page*.html.twig')

hardcoded_title = '<h1 class="site-title">CPG Matters</h1>'
dynamic_title = '<h1 class="site-title">{{ site_name|default(\'CPG Matters\') }}</h1>'

hardcoded_slogan = '<div class="site-slogan">A brand marketing magazine for the 21st century</div>'
dynamic_slogan = '{% if site_slogan %}\n            <div class="site-slogan">{{ site_slogan }}</div>\n          {% endif %}'

hardcoded_nav = """    {# ===== FLOATING TOPIC ICON SIDEBAR ===== #}
    <nav class="topic-sidebar" aria-label="Browse by topic">
      <a href="/search?topic=sustainability" class="topic-sidebar__icon" data-topic="sustainability" aria-label="Sustainability">
        <span class="topic-sidebar__emoji">🌱</span>
        <span class="topic-sidebar__tooltip">Sustainability</span>
      </a>
      <a href="/search?topic=e-commerce" class="topic-sidebar__icon" data-topic="e-commerce" aria-label="E-Commerce">
        <span class="topic-sidebar__emoji">🛒</span>
        <span class="topic-sidebar__tooltip">E-Commerce</span>
      </a>
      <a href="/search?topic=innovation" class="topic-sidebar__icon" data-topic="innovation" aria-label="Innovation">
        <span class="topic-sidebar__emoji">💡</span>
        <span class="topic-sidebar__tooltip">Innovation</span>
      </a>
      <a href="/search?topic=supply-chain" class="topic-sidebar__icon" data-topic="supply-chain" aria-label="Supply Chain">
        <span class="topic-sidebar__emoji">📦</span>
        <span class="topic-sidebar__tooltip">Supply Chain</span>
      </a>
      <a href="/search?topic=marketing" class="topic-sidebar__icon" data-topic="marketing" aria-label="Marketing">
        <span class="topic-sidebar__emoji">📱</span>
        <span class="topic-sidebar__tooltip">Marketing</span>
      </a>
      <a href="/search?topic=finance" class="topic-sidebar__icon" data-topic="finance" aria-label="Finance">
        <span class="topic-sidebar__emoji">💰</span>
        <span class="topic-sidebar__tooltip">Finance</span>
      </a>
      <a href="/search?topic=technology" class="topic-sidebar__icon" data-topic="technology" aria-label="Technology">
        <span class="topic-sidebar__emoji">🔧</span>
        <span class="topic-sidebar__tooltip">Technology</span>
      </a>
      <a href="/search?topic=leadership" class="topic-sidebar__icon" data-topic="leadership" aria-label="Leadership">
        <span class="topic-sidebar__emoji">👔</span>
        <span class="topic-sidebar__tooltip">Leadership</span>
      </a>
      <a href="/search?topic=retail" class="topic-sidebar__icon" data-topic="retail" aria-label="Retail">
        <span class="topic-sidebar__emoji">🏪</span>
        <span class="topic-sidebar__tooltip">Retail</span>
      </a>
      <a href="/search?topic=manufacturing" class="topic-sidebar__icon" data-topic="manufacturing" aria-label="Manufacturing">
        <span class="topic-sidebar__emoji">🏭</span>
        <span class="topic-sidebar__tooltip">Manufacturing</span>
      </a>
    </nav>"""

dynamic_nav = """    {# ===== FLOATING TOPIC ICON SIDEBAR (Dynamically rendered from block) ===== #}
    {% if page.mobile_topics %}
      {{ page.mobile_topics }}
    {% endif %}"""

for f in files:
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    
    content = content.replace(hardcoded_title, dynamic_title)
    content = content.replace(hardcoded_slogan, dynamic_slogan)
    content = content.replace(hardcoded_nav, dynamic_nav)
    
    with open(f, 'w', encoding='utf-8') as file:
        file.write(content)

print("Updated 8 page templates to replace hardcoded strings with Dynamic Twig tags.")
