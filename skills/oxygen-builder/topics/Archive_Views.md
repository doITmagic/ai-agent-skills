# Topic: Archive Views

## Fișiere incluse
- `Part_5_Styling_WooCommerce_-_Shop_Single_Product_Views.md` (2016)
- `Part_7_Using_Widgets_to_Build_a_Shop_Sidebar.md` (2016)

## Analiză Relații

### Legacy / Superseded (Critic)
Ambele fișiere din acest topic sunt considerate **Legacy**.
- **`Part_5...`** și **`Part_7...`** utilizează metoda arhaică de afișare a conținutului WooCommerce prin funcția PHP `<?php woocommerce_content(); ?>` plasată într-un Code Block.
- Această metodă este **complet înlocuită (superseded)** de integrarea modernă (v3.0+) care folosește elementul `Product Builder` și componente dedicate (Product Title, Product Price, etc.), așa cum este documentat în topicul *Archive Templates* (fișierul `30_Oxygen_WooCommerce_Integration.md`).

### Tehnici Depășite
- **Layout**: Utilizarea `float: left` și `float: right` pentru crearea sidebarelor, în loc de Flexbox sau Grid (standardele actuale în Oxygen).
- **Terminologie**: Utilizarea termenului "Views" în loc de "Templates".

## Concluzii RAG
Această documentație are doar valoare istorică pentru mentenanța unor site-uri extrem de vechi.
- **Recomandare**: NU utilizați metodele din aceste fișiere pentru proiecte noi.
- **Tranziție**: Pentru orice implementare de magazin, referențiați documentația din 2019/2021 care utilizează `Product Builder`.
- **Widgets**: Singura informație încă parțial relevantă este utilizarea widget-urilor native WordPress/WooCommerce în Oxygen, deși elementele native Oxygen sunt acum preferate pentru control granular.
