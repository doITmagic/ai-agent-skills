# Topic: PHP 8 — Analiză Cross-Reference

## 1. Compatibilitate Arhitecturală
Introducerea **Oxygen 4.0** a marcat trecerea oficială la compatibilitatea cu **PHP 8.x**. Aceasta a fost posibilă prin:
- **Tranziția JSON Storage:** Înlocuirea shortcode-urilor cu structuri JSON a eliminat multe dintre limitările de procesare ale versiunilor vechi de PHP.
- **Refactoring Core:** Optimizarea codului intern pentru a respecta standardele mai stricte ale PHP 8.

## 2. Implementare și Siguranță
- **Mediul de Staging:** Recomandarea critică de a testa upgrade-ul la PHP 8 într-un mediu de staging, nu neapărat pentru Oxygen în sine, ci pentru addon-urile terțe (integrări ACF, MetaBox, diverse plugin-uri de design sets) care ar putea folosi funcții deprecated.
- **Workflow:** Utilizatorii pot activa acum PHP 8 pe serverele lor (Cloudways, Kinsta, etc.) pentru a beneficia de îmbunătățirile de performanță ale motorului PHP fără a compromite funcționalitatea Builder-ului.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_in_Oxygen_40.md` | Release Notes | **Main Source** (Anunțul compatibilității PHP 8.x) |

---
**Standard Antigravity:** Toate proiectele noi sunt configurate pe **PHP 8.2+**. Dacă un proiect vechi (Oxygen < 4.0) necesită upgrade, prima etapă este migrarea la JSON Storage în v4.0+, urmată de schimbarea versiunii PHP pe server.
