# Topic: Performance — Analiză Cross-Reference

## 1. Arhitectură "Bloat-Free"
Oxygen se diferențiază de competitori (Divi, Elementor, Beaver Builder) printr-un cod curat și minimalist:
- **Fără Nesting Excesiv:** HTML-ul produs este similar cu cel scris manual (ex: `Section > Div > Heading`), spre deosebire de alte containere care pot avea peste 10 nivele de adâncime.
- **Încărcare Condiționată:** Oxygen încarcă CSS/JS doar pentru elementele prezente pe pagină (ex: scriptul de Slider se încarcă doar dacă există un Slider).
- **Shortcodes vs JSON:** Tranziția la stocarea JSON (v4.0+) a eliminat procesarea greoaie a shortcode-urilor, accelerând atât builder-ul, cât și randarea front-end.

## 2. Optimizarea Imaginilor (Core Web Vitals)
- **Lazy Loading Nativ:** Utilizarea atributului `loading="lazy"` pentru elementele de tip Image și Video (v4.6+). Imaginile "above-the-fold" trebuie setate pe `eager`.
- **Prevenire CLS (Cumulative Layout Shift):** Adăugarea obligatorie a atributelor `width` și `height` corespunzătoare dimensiunilor randate.
- **Formate Moderne:** Utilizarea formatului **AVIF** sau **WebP** pentru o compresie superioară (până la 90% economie de spațiu față de JPEG).
- **Source Set:** Integrarea nativă cu Media Library (WordPress) permite browserului să aleagă dimensiunea optimă a imaginii în funcție de dispozitiv.

## 3. Eliminarea Bloat-ului WordPress
Prin setările **Oxygen > Settings > Performance**, se pot dezactiva:
- Gutenberg Block CSS (dacă nu se folosește editorul de blocuri).
- Emojis, Pingbacks, Dashicons (pentru vizitatorii deconectați).
- **Scripts Management:** Deconectarea jQuery pentru vizitatorii deconectați (via WP Code Box) și utilizarea pluginului `Asset Cleanup` pentru a elimina scripturile WooCommerce de pe pagini neesențiale.

## 4. Tipografie și Fonturi
- **Localizare Google Fonts:** Recomandarea de a descărca și găzdui fonturile local (folosind *Google Web Fonts Helper*) pentru a elimina request-urile externe și a îmbunătăți timpul de încărcare.

## 5. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `WordPress_Speed_Optimization...md` | Checklist complet | **Master Optimization Guide** |
| `Image_Performance...md` | Media | **Technical Deep Dive (Images)** |
| `Oxygens_Incredible_Performance...md` | Benchmarks | **Comparative Analysis** (vs Elementor/Divi) |
| `JSON_Storage.md` | Architecture | **Structural Performance Doc** |

---
**Standard Antigravity:** Orice site trebuie să atingă scoruri de **95+ pe mobil** în PageSpeed Insights. Aplicăm obligatoriu: **AVIF** pentru imagini, **dimensiuni explicite** pentru CLS și **dezactivarea jQuery** pentru paginile de prezentare. Utilizăm **Navigator** (v4.8) pentru a elimina timpii de așteptare în workflow-ul de editare.
