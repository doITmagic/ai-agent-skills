# Topic: Section Layout (Hero & Content) — Analiză Cross-Reference

## 1. Structura Secțiunii Hero (Above the Fold)
Secțiunea Hero este critică pentru conversie și trebuie să răspundă la: *Ce este acest site?*, *De ce sunt aici?* și *Ce pot face?*.

### Elemente Esențiale:
- **Heading (H1):** Mesaj clar și concis (recomandat: font-weight 800+).
- **Overline/Subtext:** Context suplimentar, de multe ori stilizat cu `letter-spacing` mare.
- **CTA Button:** Link Wrapper cu padding generos și contrast ridicat.
- **Visuals:** Imagini de produs sau screenshots, adesea suprapuse (z-index) sau rotite (`transform: rotate`) pentru dinamism.

## 2. Tehnici de Design și Lizibilitate
- **Gradient Overlays:** Utilizarea gradienților de la solid la transparent (ex: `linear-gradient(90deg, #000 50%, transparent)`) pentru a păstra vizibilitatea imaginii în timp ce textul rămâne lizibil.
- **Spacing:** Gap-ul de secțiune recomandat este de `32px` - `64px` între elementele majore.
- **Z-index Management:** Folosirea valorilor 1-10 pentru a controla suprapunerea elementelor aero (ex: imagini care ies din secțiune).

## 3. Row & Section Basics
- **Section Padding:** Menținerea unui padding consistent (global) pentru a evita layout-ul "înghesuit".
- **Inner Content Width:** Controlul lățimii conținutului prin Global Settings (Page Width).

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Oxygen_Basics_Creating_Hero_Sections...md` | UI/UX Strategy | **Main Source** (Hero components & layout) |
| `Oxygen_Basics_Creating_Content_Sections...md` | Implementation | **Complementary** (Body sections patterns) |
| `Part_2_Designing_The_Hero_Section.md` | Design Workflow | **Case Study** (Step-by-step build) |

---
**Standard Antigravity:** Toate secțiunile Hero trebuie să aibă un contrast ratio de minim 4.5:1 (WCAG AA). Folosiți gradienți selectivi pentru a "întuneca" doar zona de sub text, nu întreaga imagine.
