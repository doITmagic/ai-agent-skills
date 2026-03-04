# Topic: Scroll Animations (AOS) — Analiză Cross-Reference

## 1. Sistemul Nativ Animate on Scroll
Oxygen include un motor nativ de animații bazat pe biblioteca AOS, accesibil via **Advanced > Effects > Animate on Scroll**.

## 2. Configurații și Tehnici
- **Tipuri de Animație:** Fade Up, Zoom, Flip, Slide.
- **Efecte Staggered (In cascadă):** Se obțin prin aplicarea unor delay-uri incrementale pe elemente similare (ex: 4 carduri cu delay-uri de 0ms, 250ms, 500ms, 750ms).
- **Animații pe Container:** Aplicarea animației pe un `Div` părinte pentru a anima întregul bloc de conținut simultan.
- **Setări Globale:** Accesibile în *Manage Settings > Global Styles > Animate on Scroll*, permit definirea unor durate și easing-uri implicite pentru întreg site-ul.

## 3. Optimizare Performanță
- **Animate Once:** Se recomandă activarea opțiunii "Animate only once" pentru a evita distragerea utilizatorului la scroll-back.
- **Mobile UX:** Evitați animațiile complexe sau delay-urile lungi pe mobil, unde pot apărea desincronizări sau lag vizual.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Oxygens_Animations_-_Animate_Any_Element_On_Scroll.md` | Core Feature | **Main Source** (AOS native controls) |
| `How_To_Make_Scroll_Activated_Animated_Progress_Bars...md` | Custom JS/CSS | **Special Case** (Manual scroll triggers) |

---
**Standard Antigravity:** Folosiți animațiile cu moderație (sub 500ms durată) pentru a menține site-ul fluid. Pentru secțiunile de tip "Features", efectul staggered este obligatoriu pentru un look premium.
