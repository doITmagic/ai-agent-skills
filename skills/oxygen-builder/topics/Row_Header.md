# Topic: Row & Header Architecture — Analiză Cross-Reference

## 1. Elementul Header Builder
Header Builder este un element specializat care oferă o structură tripartită (Stânga, Centru, Dreapta) în interiorul rândurilor (`Header Rows`).

### Funcționalități Row:
- **Multi-Row Layout:** Posibilitatea de a adăuga mai multe rânduri (ex: un rând de top pentru info contact și un rând principal pentru logo/navigație).
- **Responsive Stacking:** Opțiunea "Stack vertically below [breakpoint]" permite transformarea layout-ului orizontal într-unul vertical pe mobil.
- **Hide Row:** Posibilitatea de a ascunde rânduri specifice sub un anumit breakpoint pentru a economisi spațiu.

## 2. Sticky Header Logic
Performanța și UX-ul headerelor sticky depind de setările din Header Builder:
- **Sticky Toggle:** Activează fixarea header-ului la scroll.
- **Sticky Background Color:** **CRUCIAL** — Trebuie setată o culoare solidă pentru a evita suprapunerea textului din pagină peste textul din header (transparență nedorită).
- **Hide Row when Sticky:** Permite ascunderea rândurilor secundare (ex: top bar) atunci când utilizatorul scrollează, păstrând doar navigația esențială.
- **Sticky Above [breakpoint]:** Limitează comportamentul sticky la ecrane mari (desktop), conform recomandărilor UX de a lăsa maximul de spațiu pe mobil.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `How_To_Build_Sticky_Headers...md` | Builder Tool | **Main Source** (Header Builder components) |
| `How_To_Build_A_Responsive_WordPress_Site...md` | Implementation | **Complementary** (Overlay Header technique) |
| `Pro_Menu.md` | Navigation | **Integration** (Advanced menus in headers) |

---
**Standard Antigravity:** Pentru proiectele agency, evitați sticky headers pe mobil (sub 768px). Folosiți întotdeauna un `Sticky Background Color` identic cu cel de fundal al site-ului sau un contrast puternic pentru a asigura lizibilitatea navigației în orice punct al paginii.
