# Topic: Integrations — Analiză Cross-Reference (2017 - 2026)

## 1. WooCommerce Integration Evolution

Integrarea cu WooCommerce a trecut printr-o transformare radicală, de la o compatibilitate limitată la un set de elemente dedicate.

- **Legacy (2018):** Utiliza elementul `Inner Content` pentru a afișa output-ul WooCommerce. Stilul se făcea manual cu `Selector Detector`, o metodă anevoiasă care necesita CSS specific pentru a suprascrie stilurile default ale plugin-ului.
- **Modern (2019+):** Introducerea a peste 20 de elemente dedicate WooCommerce. 
    - **Product Builder:** Elementul rădăcină obligatoriu pentru template-urile de produs (Single Product). Permite poziționarea vizuală a elementelor precum `Product Title`, `Product Price`, `Product Tabs` etc.
    - **Product List:** Element flexibil pentru arhive, cu setări avansate de query (filtru dupa ID, SKU, On Sale, Best Selling).
    - **Global Styles:** Toate stilurile WooCommerce (butoane, link-uri, input-uri) pot fi controlate centralizat din `Manage > Settings > Global Styles > WooCommerce`.

## 2. Dynamic Data: ACF & MetaBox

Oxygen oferă una dintre cele mai profunde integrări cu field-urile custom (Custom Fields).

- **Standard Data Insertion:** Orice element de text poate trage date din ACF sau MetaBox via butonul "Insert Data".
- **Repeater Field Element:** Un element specializat (diferit de Repeater-ul standard) creat exclusiv pentru field-urile de tip Repeater din ACF/MetaBox. Utilizează "Oxygen Components" ca șabloane pentru rândurile repetate.
- **Relații Bi-direcționale:** Pentru a afișa relații complexe (ex: Autor <-> Carte), este necesar un snippet PHP (pentru logica ACF) și utilizarea unui `EasyPost` sau `Repeater` cu un `Advanced Query` bazat pe `post__in` (trăgând ID-urile din field-ul de relație).

## 3. Multilingual Support: WPML

Integrarea cu WPML a fost lansată în fază beta în 2017, permițând traducerea string-urilor direct din interfața WordPress.

- **Workflow:** Se salvează pagina în Oxygen, apoi se folosește editorul de traducere WPML. 
- **Limitări:** Istoric, integrarea a avut dificultăți cu `Reusable Parts` și suportul parțial pentru template-uri. Se recomandă verificarea compatibilității la zi pentru proiecte complexe multilingve.

## 4. Indexul Analizei (Componente Cheie)

| Fișier | An | Tehnologie | Concept Cheie |
| :--- | :--- | :--- | :--- |
| `Easy_Translation_with...` | 2017 | WPML | Traducere string-uri (Beta) |
| `How_To_Use_Oxygen_With_Woo...` | 2018 | WooCommerce | Inner Content + Selector Detector (Legacy) |
| `30_Oxygen_WooCommerce...` | 2019 | WooCommerce | Product Builder + 20 Elements (Modern) |
| `Oxygens_Dynamic_Data...` | 2019 | ACF | Dynamic Data + Repeater Element |
| `Using_ACF_Bi-directional...` | 2021 | ACF | Advanced Query (post__in) |
| `3.9_Easily_Display_Meta_Box...` | 2021 | MetaBox | Integrare nativă field-uri custom |

---
**Standard Antigravity:** Pentru toate proiectele e-commerce, utilizați **Product Builder** și **Global Styles**. Pentru date structurate, preferați **MetaBox** (conform regulilor globale) și utilizați **Advanced Query** pentru relații complexe.
