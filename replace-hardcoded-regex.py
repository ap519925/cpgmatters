import glob
import re

files = glob.glob(r'c:\Users\thean\.gemini\antigravity\scratch\cpg_project\web\themes\custom\cpg_theme\templates\layout\page*.html.twig')

dynamic_nav = """    {# ===== FLOATING TOPIC ICON SIDEBAR (Dynamically rendered from block) ===== #}
    {% if page.mobile_topics %}
      {{ page.mobile_topics }}
    {% endif %}"""

for f in files:
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    
    # regex to match from <nav class="topic-sidebar" to </nav>
    pattern = re.compile(r'    <nav class="topic-sidebar" aria-label="Browse by topic">.*?</nav>', re.DOTALL)
    
    if pattern.search(content):
        content = pattern.sub(dynamic_nav, content)
        with open(f, 'w', encoding='utf-8') as file:
            file.write(content)
        print(f"Updated {f}")

print("Done patching remaining topic sidebars.")
