# Topic: Mega Menu & Composite Elements — Analiză Cross-Reference (2021 - 2026)

## 1. Conceptul de "Composite Elements"

Lansată în 2021, biblioteca de elemente compuse reprezintă o colecție de componente avansate găzduite pe serverul Oxygen (Design Set server), dar care devin complet independente de server după import.
- **Construcție:** Spre deosebire de elementele core, acestea sunt asamblate din blocuri de bază Oxygen (Div-uri, Link Wrappers, Icons, Code Blocks).
- **Avantaj:** Pot fi actualizate rapid fără a necesita o nouă versiune de Oxygen.

## 2. Mega Menu (Implementare și Structură)

Mega Menu-ul din bibliotecă este soluția "standard" pentru meniuri complexe:
- **Structură:** Un link trigger plasat de obicei în Header și un container care devine vizibil la hover.
- **Conținut:** Implicit vine cu un layout pe 3 coloane (links, slider, social icons), dar fiind construit din elemente Oxygen, poate fi modificat nelimitat.
- **Workflow:** Se inserează elementul, se trage link-ul trigger în Header, iar restul elementului poate sta oriunde pe pagină (Oxygen gestionează poziționarea absolută).

## 3. Alte Elementele Cheie din Biblioteca Composite

- **Dashboard Tabs:** Sistem de tab-uri pre-stilizat cu tranziții fluide, excelent pentru interfețe SaaS sau conturi de utilizator.
- **Table of Contents (ToC):** Element dinamic care scanează automat titlurile (H2-H6) din pagină.
  - *Notă:* Folosește clasele `.primary` și `.sub one` pentru stilizare globală.
- **Horizontal Divider:** Alternativă stilizată (cu iconiță centrală) pentru tag-ul `<hr>`.

## 4. Licențiere și Activare

Accesul necesită o licență Oxygen activă (Agency/Ultimate achiziționată înainte de feb. 2021) sau un cod de licență separat pentru Composite Elements. Activarea se face în `Oxygen > Settings > License`.

## 5. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Composite_Elements_Library.md` | Activare + Demo (Tabs, Mega Menu, ToC). | **Principal (Master)** |
| `Add-on_Spotlight_Composite...` | Prezentare funcționalități (Fără partea de licențiere). | **Partial-Overlap** |

---
**Standard Antigravity:** Utilizați **Mega Menu** din Composite Elements pentru orice meniu care depășește o listă simplă de link-uri. Pentru articole lungi (Knowledge Base), implementați întotdeauna **Table of Contents** pentru a îmbunătăți experiența utilizatorului și SEO (anchor links).
