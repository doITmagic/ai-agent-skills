# Topic: Main Template & Templating Hierarchy — Analiză Cross-Reference (2019 - 2026)

## 1. Structura Fundamentală (The Big Three)

Orice site Oxygen profesionist pleacă de la un **Main Template** (setat pe "Catch All"), compus din:
- **Header Builder:** Element global pentru logo și navigare.
- **Inner Content:** Elementul-fereastră prin care se vede conținutul paginilor individuale (redenumit **Template Content Area** în v6.0/Breakdance).
- **Footer:** Secțiune globală (recomandare: copyright dinamic via PHP `date('Y')`).

## 2. Ierarhia și Moștenirea (Inheritance)

Sistemul de templating funcționează piramidal:
- **Inherit Design:** Șabloanele secundare (Single Post, Archive, Blog Index) trebuie să moștenească șablonul `Main` pentru a păstra consistența header-ului și footer-ului.
- **Template Priority:** Esențial pentru rezolvarea conflictelor (ex: un `Blog Index` are nevoie de prioritate `1` pentru a înlocui un `All Archives` generic).

## 3. Funcționalități Avansate

- **Protecție cu Parolă (Native WP):** Oxygen necesită un workaround în `Main Template` folosind o condiție personalizată (`has password`). Conținutul este afișat doar dacă condiția este `false`, altfel se afișează un `Code Block` cu `get_password_form()`.
- **Navigator (v4.8):** Permite comutarea instantanee între pagini și șabloane (`Main`, `Single`, etc.) direct din interfață, eliminând timpii de încărcare WordPress Admin.

## 4. Indexul Analizei

| Fișier | Focus | Versiune |
| :--- | :--- | :--- |
| `Newbie_Guide_Templating...` | Bazele moștenirii, Inner Content și priorități. | Classic |
| `How_to_Build_a_WordPress_Blog...` | Crearea structurii Header/Footer/Single. | Classic |
| `How_To_Use_Native_WP_Password...` | Workaround condiții pentru pagini protejate. | Classic |
| `Whats_New_In_Oxygen_48...` | Eficiența Navigatorului în gestionarea șabloanelor. | v4.8 |

---
**Standard Antigravity:** Folosiți întotdeauna **Main Template** pentru elementele globale. Nu stilizați direct elementul `Inner Content`. Pentru bloguri, folosiți "6 Template Plan": Main, All Archives, Blog Index, Single Post, Search Results și 404.
