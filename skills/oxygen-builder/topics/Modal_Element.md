# Topic: Modal Element & Popups — Analiză Cross-Reference (2019 - 2021)

## 1. Natura Elementului Modal în Oxygen

Elementul Modal a fost introdus în versiunea **2.3** și este format din două componente critice:
- **Modal Container:** Zona de conținut care poate găzdui orice element Oxygen.
- **Modal Backdrop:** Overlay-ul transparent care acoperă restul paginii.

## 2. Tipuri de Declanșatori (Triggers)

Documentația identifică o suită versatilă de evenimente care pot lansa modalul:
- **User Clicks Element:** Lansare la click pe un ID sau Clasă specifică (util pentru butoane "Book Now").
- **Exit Intent:** Detectează mișcarea cursorului în afara viewport-ului (ideal pentru oferte de retenție).
- **After Specified Time / Inactive:** Lansare bazată pe timp sau lipsă de activitate.
- **On Scroll to Element:** Afișare când un anumit element devine vizibil în scroll.
- **On Page Scroll (Up/Down):** Bazat pe procentul de navigare în pagină.

## 3. Implementări Specializate (Use Cases)

Analiza relevă patru direcții majore de utilizare documentate:
- **Lightbox Personalizat:** Folosirea unui singur Modal pentru a înlocui librării externe de tip Lightbox, utilizând jQuery pentru a injecta dinamic `src` imaginii și textul captio-ului în modal.
- **Notification Bar:** Reconfigurarea modalului pentru a apărea la baza paginii (bottom center, 100% width) ca o bară de notificare/cookie-uri.
- **Exit Intent Full-Screen:** Design vizual de impact (40/60 split cu imagini și gradient blend modes) pentru a opri utilizatorii care părăsesc site-ul.
- **WooCommerce Integration:** Utilizarea de condiții PHP personalizate pentru a detecta pagina "Thank You" (`is_checkout() && !empty($_GET['order-received'])`) și a afișa coduri de reducere post-achiziție.

## 4. Funcționalități și Clasa Magică

- **`.oxy-close-modal`**: Clasa obligatorie care trebuie adăugată oricărui element (iconiță "X", buton "Închide") pentru a-i oferi funcționalitatea de a închide modalul.
- **Animate on Scroll:** Modalul se integrează nativ cu librăria de animații, permițând efecte complexe de tip "Flip", "Fade" sau "Slide" atât pentru container, cât și pentru elementele interne.

## 5. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `23_Oxygens_Modal_Element.md` | Prezentare generală v2.3, triggers și logică. | **Core Reference** |
| `Building_A_Lightbox_With...` | Lightbox fără librării externe (jQuery dinamic). | **Technical Enhancement** |
| `How_To_Add_A_Popup_To_Woo...` | Integrare WooCommerce și Custom Conditions. | **Integration Pattern** |
| `Exit_Intent_Popup...` | Strategie de marketing (Exit Intent UI). | **Complementary UI** |
| `Sticky_Notification_Bar...` | Notificări stil bară (Layout reconfigurat). | **Complementary UI** |

---
**Standard Antigravity:** Pentru performanță maximă, evitați plugin-urile de tip "Popup Maker". Elementul Modal din Oxygen este suficient de puternic pentru a acoperi 95% din scenariile B2B, inclusiv integrarea cu baze de date (via Dynamic Data) sau condiții complexe de afișare.
