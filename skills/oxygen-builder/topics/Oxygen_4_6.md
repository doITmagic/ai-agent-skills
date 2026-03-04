# Topic: Oxygen 4.6 — Analiză Cross-Reference (2023)

## 1. Semantică și Performanță: Repeater Custom Tags
Oxygen 4.6 a adus îmbunătățiri de structură pentru elementul Repeater:
- **Custom Tags:** Suport complet pentru tag-uri de tip listă (`<ul>` pentru container și `<li>` pentru item-uri) direct în setările Repeater-ului. Acest lucru elimină nevoia de cod custom pentru liste semantice corecte.

## 2. Media Optimization: Lazy Loading
- **Lazy Loading for Gallery & Video:** Introducerea opțiunii de lazy load nativ pentru galeriile Masonry/Grid și pentru elementul Video. Îmbunătățește semnificativ metricile LCP (Largest Contentful Paint) pe pagini bogate în media.

## 3. Backend: JSON Cleanup
- **Shortcodes to JSON Transition:** v4.6 marchează o etapă de curățenie majoră, eliminând dependențele de cod legacy care se bazau pe shortcodes, consolidând arhitectura bazată pe JSON lansată în v4.0.
- **WPCLI Compatibility:** Comandă dedicată pentru actualizări sigure pe infrastructura Cloudways.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_46_-_Bug_fixes_Polish_Custom_Tags_For_Repeaters_And_More.md` | General Overview | **Main Release Doc** |

---
**Standard Antigravity:** Utilizați întotdeauna tag-uri **UL/LI** în Repeater-ele de ingrediente, testimoniale sau liste de servicii pentru SEO și accesibilitate. Activați **Lazy Loading** pentru orice element Video aflat sub "fold", reducând timpul inițial de încărcare al paginii.
