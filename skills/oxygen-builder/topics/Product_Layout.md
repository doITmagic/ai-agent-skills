# Topic: Product Layout — Analiză Cross-Reference

## 1. Arhitectura Product Builder
În Oxygen, designul paginii de produs WooCommerce nu este un bloc monolitic, ci o structură atomică construită în jurul elementului **Product Builder**.
- **Wrapper-ul Product Builder:** Acționează ca un container care "anunță" Oxygen că elementele din interior trebuie să tragă date dinamice de tip produs.
- **Elemente Atomice:** Permite plasarea individuală a componentelor: Product Images, Product Title, Product Price, Product Cart Button, Product Tabs și Related Products.

## 2. Design Pattern: Single Product Template
- **Structura recomandată:** O secțiune principală (Section) cu un layout de tip coloane (Columns). Un pattern comun este split-ul 40/60, unde imaginile ocupă coloana mai îngustă, iar detaliile și tab-urile ocupă restul spațiului.
- **Elemente de Stil:** Utilizarea `border-radius` (ex: 8-12px) pentru imagini și containere white-background pentru a crea un aspect de "card" premium.
- **Sincronizare Globală:** Recomandarea de a folosi **Manage Settings > Global Styles > WooCommerce** pentru a controla culorile butoanelor (`Cart Button`) la nivel de site, asigurând consistența brandului.

## 3. Elemente Dinamice și Tab-uri
- **Product Tabs:** Include automat Description și Reviews. Stilul acestora poate fi personalizat (fundal, culori hover, tipografie) direct din panoul de proprietăți al elementului.
- **Related Products:** Se plasează de obicei sub layout-ul principal pentru a încuraja cross-selling-ul.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `How_to_Customize_the_WooCommerce_Single_Product...md` | Practical Case | **Main Source** (Tutorial complet de layout) |
| `How_To_Use_Oxygen_With_WooCommerce.md` | Overview | **Foundational Doc** (Integrare generală) |

---
**Standard Antigravity:** Utilizați întotdeauna **columns** în interiorul **Product Builder** pentru a crea layout-uri non-standard care depășesc design-ul basic de WooCommerce. Setați o prioritate mai mare (ex: 10) pentru template-ul Single Product pentru a fi siguri că acesta suprascrie template-urile generale de tip "Singular".
