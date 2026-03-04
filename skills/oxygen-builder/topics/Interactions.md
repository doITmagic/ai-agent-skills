# Topic: Interactions — Analiză Cross-Reference (2025 - 2026)

## 1. Conceptul de Interactions Engine

Oxygen Interactions reprezintă vârful de lance al animațiilor no-code în ecosistemul Oxygen Builder, permițând crearea de UI complex (stickers, tabs, sliders, galerii dinamice) fără JavaScript personalizat.

- **Filozofie:** "Design Motion Visually". Orice element poate deveni un trigger sau o țintă (target) pentru o animație.
- **Triggers (Evenimente):** 
    - Mouse: Click, Mouse Enter, Mouse Leave.
    - Scroll: Scroll into View, Page Scrolled.
    - Keyboard/Page: Key Up/Down, Page Loaded.
- **Actions (Răspunsuri):** Show/Hide Element, Manipulate Class (Add/Remove/Toggle), Set Attribute, Scroll to Element, Fire JS Function.

## 2. Targeting și BEM Naming Convention

Pentru interacțiuni precise, Oxygen utilizează selecția bazată pe clase CSS.

- **BEM (Block Element Modifier):** Este standardul recomandat pentru a asigura unicitatea selectorilor (ex: `.gallery__item--active`).
- **Selector Matching:**
    - `Match Everywhere`: Afectează toate elementele cu acea clasă de pe pagină.
    - `Children of Targeted Element`: Limitează efectul la descendenții elementului trigger.
    - `Closest Parent`: Targetează cel mai apropiat strămoș (util în liste/repeatere).

## 3. Tipuri de Animații Avansate (v6.0+)

Interfața modernă de animație include trei categorii majore:

1. **Sticky Animations:** Permite fixarea elementelor (ex: Menu) cu offset specific și control pe breakpoint-uri (dezactivare pe mobile).
2. **Scrolling Animations:** Proprietăți animate în funcție de poziția scroll-ului.
    - *Exemple:* Blur (de la 100px la 0px), Poziție Orizontală/Verticală, Opacitate.
    - *Trigger point:* Controlat prin offset pentru a finaliza animația exact când elementul ajunge în centrul viewport-ului.
3. **Entrance Animations:** Animații care rulează o singură dată (sau repetat) când elementul intră în vizibilitate (Zoom, Flip, Fade, Slide).

## 4. Indexul Analizei

| Fișier | An | Focus Principal | Tehnica Cheie |
| :--- | :--- | :--- | :--- |
| `Deep_Dive_into_Interactions...` | 2025 | Logică & Triggers | Class Manipulation |
| `Design_Motion_Visually...` | 2026 | Vizual & Scroll | Sticky + Blur scroll effects |

---
**Standard Antigravity:** Utilizați `Interactions` pentru componente funcționale (Tabs/Accordions) și `Scrolling Animations` pentru efecte premium tip Apple-style. Respectați BEM pentru a evita conflictele de targeting în Repeatere.
