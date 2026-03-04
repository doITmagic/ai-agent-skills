# Topic: Lazy Loading — Analiză Cross-Reference (v4.0 - v4.6)

## 1. Implementare Nativă (v4.0+)

Oxygen a introdus suport nativ pentru **Lazy Loading** începând cu versiunea 4.0, vizând îmbunătățirea scorurilor Core Web Vitals (în special LCP - Largest Contentful Paint):
- **Imagini și Galerii:** Toate imaginile adăugate prin elementele native beneficiază de `loading="lazy"` prin intermediul WordPress Core, dar Oxygen optimizează modul de redare.
- **Lightbox (PhotoSwipe 5.0):** Trecerea la PhotoSwipe 5.0 în versiunea 4.0 a adus un sistem de lightbox mult mai rapid și care încarcă resursele doar la cerere.

## 2. Optimizarea Asset-urilor Media

Pentru ca Lazy Loading-ul să fie cu adevărat eficient, Oxygen recomandă:
- **Utilizarea Media Library:** Alegerea imaginilor din biblioteca WordPress (în loc de URL extern) permite Oxygen să genereze automat atributul `srcset`, oferind browserului dimensiunea optimă de imagine.
- **Eliminarea Blocajelor:** Lazy loading-ul este activat implicit pentru elementele de tip Gallery, Videoclip-uri și Imagini sub "fold".

## 3. Indexul Analizei

| Fișier | Versiune | Contribuție Cheie |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_40` | v4.0 | Introducerea PhotoSwipe 5.0 și suport îmbunătățit pentru lazy loading. |
| `Whats_New_In_Oxygen_46` | v4.6 | Rafinarea performanței prin fix-uri la nivel de Repeater IDs. |

---
**Standard Antigravity:** Asigurați-vă că imaginile din Hero section NU sunt lazy-loaded (pentru LCP optim). Pentru restul paginii, utilizați setările native Oxygen și evitați scripturile externe de lazy loading care pot crea conflicte.
