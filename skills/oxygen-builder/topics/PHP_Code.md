# Topic: PHP Code — Analiză Cross-Reference

## 1. Code Block: IDE în interiorul Oxygen
Elementul `Code Block` este inima extensibilității Oxygen, oferind un editor PHP/HTML/CSS/JS complet.
- **Acces API WordPress:** Orice funcție nativă WordPress (`get_the_ID()`, `the_post()`, `get_post_meta()`) este disponibilă direct în editorul PHP.
- **Execuție "The Loop":** Înainte de elementul Repeater (sau pentru logici foarte complexe), Code Block-ul era utilizat pentru a rula loop-uri `WP_Query` personalizate.

## 2. Modele de Implementare (Pattern-uri)
- **Filtrare Dinamică (Isotope.js):** Utilizarea PHP pentru a extrage slug-urile categoriilor și a le afișa ca metadate (`<span>`), urmată de JavaScript care transformă aceste metadate în clase CSS pe elementul părinte (`grid-item`).
- **Sisteme de Review (URL Parameters):** Utilizarea super-globalei `$_GET` pentru a activa funcționalități condiționate (ex: injectarea de CSS pentru borduri roșii pe elementele marcate cu clasa `.review` când `?content-review=true` este în URL).
- **Dynamic Data Overrides:** Utilizarea PHP pentru a returna valori care nu sunt suportate nativ de selectorul de date dinamice (ex: formatări complexe de dată sau calcule matematice).

## 3. Bune Practici
- **Plasarea Codului:** Pentru logică la nivel de pagină, Code Block-ul se plasează de obicei în partea de sus a structurii.
- **Curățenie DOM:** Elementele folosite pentru transferul de date din PHP în JS (cum ar fi span-urile de categorie) trebuie setate pe `display: none` sau eliminate via JS după utilizare.
- **Securitate:** Deconectarea jQuery pentru vizitatori (când nu este necesar) și utilizarea snippets-urilor securizate via `WP Code Box`.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Using_Isotope_To_Sort_Filter...md` | Practical Case | **Advanced PHP Logic Pattern** |
| `How_To_Set_Up_A_Simple_Content_Review...md` | Conditional CSS | **URL Parameter Pattern** |
| `Where_To_Put_Code_Instead_of...md` | Architecture | **Structural Doc** (Snippets vs Code Block) |
| `Custom_PHP.md` | Overview | **Parent Topic Analysis** |

---
**Standard Antigravity:** Preferați **PHP Function Return Value** pentru a injecta date în elemente native (Heading, Text) pentru a păstra controlul vizual. Code Block-ul se folosește doar pentru logică structurală sau integrări complexe de biblioteci JS (Isotope, Splide, GSAP).
