# Topic: BEM (Block Element Modifier)

## Fișiere incluse
- `Deep_Dive_into_Interactions_Create_Dynamic_Animations_Effortlessly.md` (2025)
- `How_To_Make_A_Split_Slider_In_Oxygen.md` (2021)

## Analiză Relații

### Complementary - Best Practice Application
Ambele fișiere tratează BEM nu ca pe un element nativ Oxygen, ci ca pe o **metodologie esențială** pentru organizarea proiectelor complexe.
- **`How_To_Make_A_Split_Slider_In_Oxygen.md`** (2021): Utilizează BEM pentru a structura un element complex (Split Slider) format din mai multe Slider-uri și navigație custom. Exemplu: `.split-slider-wrap__slider`, `.split-slider-wrap__navigation__button--left`.
- **`Deep_Dive_into_Interactions...`** (2025): Utilizează BEM în contextul motorului de **Interactions**. Convenția permite targetarea elementelor individuale dintr-o galerie (ex: `image--1`, `image--2`) pentru acțiuni de tip Show/Hide sau manipulare de clase fără a depinde de ID-uri generate automat care pot fi instabile.

## Concluzii RAG
BEM în Oxygen Builder servește două scopuri principale documentate aici:
1.  **Scalabilitate**: Permite duplicarea elementelor complexe păstrând ierarhia claselor clară.
2.  **Precizie în Interacțiuni**: Facilitează utilizarea selectorilor CSS în motorul de Interactions (v4.x+) pentru a crea galerii, tab-uri și slide-uri animate fără a scrie JavaScript custom (sau folosind JS minimal).

**Cerință Agenție**: Folosirea BEM este obligatorie pentru orice componentă custom care necesită mai mult de 3 div-uri imbricate sau care folosește motorul de Interactions.
