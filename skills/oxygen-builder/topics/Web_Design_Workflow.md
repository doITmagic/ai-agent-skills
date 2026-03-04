# Topic: Web Design Workflow — Analiză Cross-Reference

## 1. Metodologia "Power of Classes"
Viteza de lucru în Oxygen Builder este direct proporțională cu utilizarea corectă a claselor CSS în detrimentul ID-urilor elementelor.

### Conceptul de Eficiență:
- **Centralizarea Stilului:** Orice modificare făcută pe o clasă (ex: `.my-testimonial`) se propagă instantaneu pe toate elementele care partajează acea clasă, indiferent de pagină.
- **Evitarea Repetiției:** Spre deosebire de alte containere unde stilurile sunt adesea "hard-coded" pe element, Oxygen încurajează un flux de lucru similar cu scrierea de cod CSS pur, dar într-o interfață vizuală.
- **Portabilitate:** Clasele pot fi reapelate pe pagini noi, importând automat întregul set de proprietăți (typography, spacing, effects).

## 2. Bune Practici de Automatizare
- **Emmet Integration:** Utilizarea scurtăturilor de tip Emmet pentru a genera structuri complexe (ex: `div.card>h2+p+button`) direct în builder.
- **Global Styles Setup:** Configurarea culorilor și a fonturilor globale *înainte* de a începe design-ul propriu-zis.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Use_The_Power_Of_Classes...md` | Workflow Speed | **Main Source** (Global class superpowers) |
| `Introduction_to_Web_Design...md` | Foundational | **Context** (Basic builder principles) |
| `Using_Utility_Classes...md` | Rapid Design | **Complementary** (Utility-first approach) |

---
**Standard Antigravity:** Nu editați niciodată direct pe ID (selectorul albastru) exceptând cazurile de poziționare absolută unică. Folosiți clase (selectorul galben) pentru orice element repetitiv. Un flux de lucru sănătos implică crearea a maxim 5-10 clase utilitare care guvernează 80% din design-ul site-ului.
