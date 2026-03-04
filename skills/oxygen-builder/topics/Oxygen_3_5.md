# Topic: Oxygen 3.5 — Analiză Cross-Reference (2020)

## 1. Managementul Stilurilor: Copy & Clear
Oxygen 3.5 a rezolvat problema "blocajului de specificitate" prin introducerea a două unelte critice în selector dropdown:
- **Copy Styles:** Permite copierea întregului set de stiluri de pe un selector (de obicei ID) pe alt selector (de obicei o clasă). Este soluția ideală pentru a trece de la styling specific la styling reutilizabil (DRY - Don't Repeat Yourself).
- **Clear Styles (Erase):** Elimină toate stilurile de pe selectorul curent, fără a șterge selectorul în sine. Este util pentru a curăța stilurile de pe ID după ce au fost mutate pe clasă, permițând prioritizarea stilurilor globale.

## 2. Flexibilitate HTML: Custom Attributes
- **Advanced > Attributes:** Permite adăugarea de atribute HTML personalizate pe orice element Oxygen.
- **Dynamic Data:** Atributele pot fi populate cu date dinamice (cheie și/sau valoare), fiind esențiale pentru integrări cu librării JavaScript externe (ex: `data-*` attributes) sau pentru îmbunătățirea accesibilității (ARIA attributes).

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_35.md` | Feature Overview | **Main Release Doc** |
| `Oxygen_35_Alpha_1...` | Feature testing | **Technical Preview** |

---
**Standard Antigravity:** Atunci când observați că stilizați un element pe ID care urmează a fi duplicat, folosiți imediat **Copy Styles** pe o clasă nouă și **Clear Styles** pe ID pentru a asigura scalabilitatea Proiectului. Utilizați **Custom Attributes** pentru a comunica date către scripturile personalizate din `Code Blocks`.
