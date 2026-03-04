# Topic: Oxygen 3.8 — Analiză Cross-Reference (2021)

## 1. Putere Dinamică: Advanced Query
Oxygen 3.8 a introdus un sistem de interogare revoluționar pentru elementele de tip listă (Repeater, Easy Posts):
- **Visual Query Builder:** Permite configurarea parametrilor `WP_Query` printr-o interfață vizuală, suportând argumente complexe precum `tax_query`, `meta_query` sau `post__not_in`.
- **Integrare Dynamic Data:** Parametrii de query pot fi populați cu date dinamice (ex: `post_type`, `post_id`), facilitând afișarea postărilor corelate (Related Posts) sau a elementelor din câmpuri de tip `ACF Relationship`.
- **Presets:** Include șabloane gata de utilizat pentru "Related posts by terms" sau "Posts by author".

## 2. SEO și Semantică
- **Rank Math Compatibility:** Includerea unui script nativ care permite Rank Math să analizeze conținutul și imaginile create în Oxygen pentru SEO.
- **Custom HTML Tags:** Orice element (ex: Div) poate primi un tag HTML5 personalizat (ex: `<ol>`, `<li>`, `<main>`, `<footer>`), îmbunătățind structura semantică și accesibilitatea fără cod custom.

## 3. Productivitate
- **Selector Locking:** Posibilitatea de a bloca un selector (clasă) pentru a preveni modificările accidentale; esențial pentru utilizarea claselor de utilitate (ex: `BG-black`).
- **Gallery Memory:** Elementul Gallery reține acum selecțiile de imagini la editare, eliminând necesitatea reselectării întregii librării pentru a adăuga o poză.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_38.md` | Feature Overview | **Main Release Doc** |
| `Oxygen_38_Alpha_1...` | Feature testing | **Technical Preview** |

---
**Standard Antigravity:** Folosiți **Advanced Query** pentru a elimina necesitatea codului PHP custom pentru postări corelate. Utilizați **Selector Locking** pentru a securiza framework-ul de design (clasele globale de culori și spațiere) împotriva modificărilor neintenționate ale clienților sau editorilor.
