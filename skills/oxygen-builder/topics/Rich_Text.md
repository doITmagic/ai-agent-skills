# Topic: Rich Text Element — Analiză Cross-Reference

## 1. Utilizare și Flexibilitate
Elementul Rich Text este conceput pentru blocuri mari de conținut (articole de blog, descrieri lungi) unde este necesară stilizarea mixtă a textului (bold, liste, link-uri interne) într-un singur element.

## 2. Stilizarea Globală vs. Locală
- **Selector Engine:** Oxygen permite targetarea elementelor de tip `p`, `ul`, `li` sau `a` *din interiorul* blocului Rich Text folosind selectorii de tip descendent în CSS-ul clasei aplicate blocului.
- **WordPress Integration:** Este elementul principal folosit pentru a reda câmpul `Post Content` din WordPress, preluând automat formatarea din editorul Gutenberg sau Classic.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Oxygen_Basics_Creating_Content_Sections...md` | Content Blocks | **Main Source** (Standard text elements) |

---
**Standard Antigravity:** Folosiți Rich Text doar pentru conținut editorial. Pentru elemente de UI (butoane, tag-uri, titluri de card), utilizați elementele atomice `Text` sau `Heading` pentru un control granular și o performanță superioară a DOM-ului.
