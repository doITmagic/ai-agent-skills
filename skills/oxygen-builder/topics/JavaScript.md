# Topic: JavaScript — Analiză Cross-Reference (2018 - 2026)

## 1. Implementarea Scripts în Oxygen

Oxygen oferă două metode principale pentru adăugarea de JavaScript personalizat, ambele fiind stocate în baza de date și executate în frontend.

- **Element-Level JS:** Disponibil în `Advanced > JavaScript` pentru orice element. Util pentru scripturi mici, specifice unui singur obiect (ex: un toggle pe un buton).
- **Code Block JS:** Metoda recomandată pentru scripturi complexe sau care necesită biblioteci externe. Tab-ul de JS din Code Block beneficiază de contextul HTML/PHP din tab-urile adiacente.

## 2. Bune Practici și "Gotchas" (Esențial pentru Agenție)

### Evitarea Duplicării Event-urilor
În editorul Oxygen, scripturile sunt re-executate la fiecare "Apply Code" sau modificare de element. Acest lucru poate duce la atașarea multiplă a aceluiași event listener.
- **Soluție:** Utilizați `.off()` înainte de `.on()` (ex: `jQuery('#%% element id %%').off('click').on('click', ...)`).

### Identificatori Dinamici
Pentru a face codul portabil și reutilizabil, Oxygen oferă placeholder-ul `%% element id %%`.
- **Utilizare:** `jQuery('#%% element id %%')`. Acesta va fi înlocuit automat cu ID-ul real al elementului (ex: `#_button-15-12`).

### jQuery în No-Conflict Mode
Fiind integrat în WordPress, Oxygen respectă regula `no-conflict`.
- **Regulă:** NU folosiți simbolul `$`. Folosiți întotdeauna `jQuery` (ex: `jQuery(document).ready(...)`).

## 3. Integrarea Bibliotecilor Externe (CDN)

Bibliotecile precum **Vue.js**, **Vuetify** sau **Tippy.js** pot fi integrate rapid via CDN.
- **Workflow:** Scripturile de import (tags `<script>` și `<link>`) se inserează în tab-ul **PHP/HTML** al Code Block-ului.
- **Limitare Builder:** Resursele externe adesea nu se încarcă în interiorul editorului Oxygen din motive de securitate/performanță. Validarea finală se face obligatoriu în frontend.

## 4. Aplicații Avansate (Prototyping & Filtering)
- **Vue.js Apps:** Oxygen poate servi ca host pentru aplicații Single Page (SPA) simple, utilizând `v-app` și logică reactivă pentru dashboard-uri sau calculatoare complexe.
- **Client-Side Filtering:** Filtrarea rapidă a postărilor dintr-un Repeater folosind jQuery (selector custom `:ciContains` pentru case-insensitive search). Ideal pentru liste sub 1000 de itemi.

## 5. Indexul Analizei

| Fișier | An | Bibliotecă | Tehnica Cheie |
| :--- | :--- | :--- | :--- |
| `How_To_Write_JavaScript...` | 2018 | jQuery | `%% element id %%` + `.off()` |
| `How_To_Easily_Create_Tooltips...` | 2020 | Tippy.js | `data-tippy-content` attributes |
| `Easy_Filtering_In_WordPress...` | 2021 | jQuery | Case-insensitive search filter |
| `How_To_Create_A_Vue_App...` | 2021 | Vue.js | SPA Prototyping în Oxygen |

---
**Standard Antigravity:** Toate scripturile custom trebuie să fie prefixate (comment) cu scopul lor. Folosiți întotdeauna `%% element id %%` pentru elementele locale și documentați orice bibliotecă externă adăugată via CDN în header-ul Code Block-ului.
