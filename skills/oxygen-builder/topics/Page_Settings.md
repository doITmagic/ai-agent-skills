# Topic: Page Settings — Analiză Cross-Reference

## 1. Lățimea Paginii (Page Width)
Setările de lățime controlează dimensiunea containerelor interioare pentru Secțiuni, Header Builder și alte elemente de tip container.
- **Ierarhia Setărilor:**
    1. **Manage Settings > Page Settings:** Se aplică doar paginii curente.
    2. **Settings > Global Styles > Page Width:** Se aplică site-wide.
    3. **Template Context:** Când editați un șablon, setările din `Page Settings` se aplică tuturor paginilor care randeză acel șablon (suprascriind setările globale).
- **Valoare Implicită:** 1,120 pixeli.

## 2. Relația cu Alte Elemente
Setările de pagină influențează direct comportamentul responsiv al elementelor de tip `Section` (care au containerul centrat implicit la lățimea paginii).

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Oxygen_-_Global_Page_Width.md` | Core Settings | **Main Technical Doc** |
| `Whats_New_In_Oxygen_40.md` | UI Updates | **Contextual Update** (mutarea selectorului în top bar) |

---
**Standard Antigravity:** Mențineți lățimea implicită de **1120px** pentru majoritatea proiectelor B2B. Folosiți suprascrierea la nivel de **Template** pentru secțiuni speciale (ex: Landing Pages cu lățime totală sau dashboard-uri late). Verificați mereu `Global Styles` înainte de a face modificări locale pentru a asigura consistența designului pe întregul site.
