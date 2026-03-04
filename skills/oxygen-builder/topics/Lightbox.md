# Topic: Lightbox — Analiză Cross-Reference (2018 - 2026)

## 1. Elementul Nativ Gallery (PhotoSwipe)

Cea mai simplă metodă de a implementa un Lightbox este elementul **Gallery**:
- **Tehnologie:** Folosește **PhotoSwipe 5.0** (din v4.0), oferind navigare rapidă, gesturi touch și performanță ridicată.
- **Setări:** Activarea se face prin checkbox-ul "Add Lightbox" din setările galeriei.
- **Layout:** Suportă Masonry și Flex (grid), cu caption-uri afișabile la hover sau permanent.

## 2. Lightbox Personalizat (via Modal Element)

Pentru elemente care nu fac parte dintr-o galerie (ex: o singură imagine sau un element de tip Post), se folosește elementul **Modal**:
- **Workflow:** 
  - Se aplică o clasă trigger (ex: `.lightbox-trigger`) imaginii.
  - Se utilizează un Code Block cu jQuery pentru a captura `src`-ul imaginii și a-l injecta ca `background-image` în Modal.
- **Avantaj:** Permite animații complexe de tip "fly-in" (Animate on Scroll) și stilizarea totală a ferestrei modal de tip lightbox fără biblioteci externe.

## 3. Lightbox Lightweight (Featherlight)

Pentru proiecte unde se dorește o integrare minimalistă (doar 11KB):
- **Integrare:** Adăugarea CDN-urilor Featherlight într-un Code Block.
- **Atribute:** Utilizarea atributelor HTML `data-featherlight="image"` pe imagini pentru a activa funcționalitatea automat la click.

## 4. Indexul Analizei

| Fișier | Tehnica | Complexitate |
| :--- | :--- | :--- |
| `Oxygens_Gallery_Element...` | Elementul nativ Gallery (PhotoSwipe). | Scăzută |
| `Building_A_Lightbox_With_Modal...` | Implementare custom via Modal + jQuery. | Medie |
| `Creating_A_Vintage_Photo_Layout...` | Integrare Featherlight (external library). | Scăzută |

---
**Standard Antigravity:** Preferăm elementul nativ **Gallery** pentru galerii standard. Pentru nevoi artistice deosebite, utilizați abordarea cu **Modal** pentru a avea control total asupra animațiilor de intrare/ieșire.
