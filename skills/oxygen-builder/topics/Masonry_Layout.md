# Topic: Masonry Layout — Analiză Cross-Reference (2018 - 2026)

## 1. Implementare în Galeria Nativă

Masonry Layout a fost disponibil inițial în elementul **Gallery** (2018):
- **Funcționare:** Stivuiește imaginile în funcție de lățimea disponibilă, fără a impune o înălțime de rând uniformă (ideal pentru imagini de diverse proporții).
- **Control:** Permite setarea numărului de coloane și a spațierii (gap) între elemente.

## 2. Masonry în Post Loop Builder (v6.0+)

Odată cu versiunea 6.0, suportul pentru Masonry a fost extins:
- **Post Loop:** Poate fi aplicat direct pe buclele de postări, creând layout-uri de tip "Pinterest" pentru bloguri.
- **Design Tab:** Toggle-ul între Grid și Masonry se află în tab-ul de Design al elementului Post Loop Builder.
- **Spacing Control:** Se recomandă setarea `post padding` la `0` și utilizarea `grid spacing` (ex: `15px`) pentru un control precis.

## 3. Indexul Analizei

| Fișier | Context | Versiune |
| :--- | :--- | :--- |
| `Oxygens_Gallery_Element...` | Utilizare în galerii foto responsive. | Classic |
| `Whats_New_In_Oxygen_60_Beta_2...` | Integrare în Post Loop Builder și Breakdance elements. | v6.0 |

---
**Standard Antigravity:** Utilizați **Masonry Layout** pentru portofolii de imagini sau bloguri cu conținut vizual variat. Asigurați-vă că setați unități de măsură consistente (preferabil `rem`) pentru spacing pentru a menține alinierea pe dispozitive mobile.
