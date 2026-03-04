# Topic: Oxygen 4.4 — Analiză Cross-Reference (2023)

## 1. CSS Editing in Admin
Oxygen 4.4 a introdus posibilitatea de a edita foile de stil fără a deschide builder-ul:
- **Style Sheets Screen:** O pagină dedicată în WordPress Admin (`Oxygen > Style Sheets`) pentru managementul integral al CSS-ului.
- **Hot Reload:** Modificările salvate în admin se reflectă instantaneu în front-end (browser sync/refresh automat), accelerând procesul de debug și styling.

## 2. Colaborare: Lock Sheets
- **Lock Sheets Option:** O setare care blochează editarea foilor de stil în interiorul builder-ului atunci când acestea sunt deschise sau gestionate din admin.
- **Limited Collaboration:** Aceasta permite unui dezvoltator să scrie CSS în Admin în timp ce un designer lucrează la structura paginii în Oxygen, fără riscul de a suprascrie codul reciproc.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_44_-_Edit_Stylesheets_from_WP_Admin.md` | Admin CSS Editing | **Main Release Doc** |

---
**Standard Antigravity:** Utilizați **Hot Reload** și **Style Sheets Admin** pentru corecții rapide de CSS sau pentru scrierea de framework-uri custom. Activați **Lock Sheets** în mediile de producție/dezvoltare multi-agent pentru a asigura o singură sursă de adevăr pentru codul CSS (Admin vs. Builder).
