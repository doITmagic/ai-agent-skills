# Topic: Load Times — Analiză Cross-Reference (v4.0 - v4.8)

## 1. Evoluția Performanței Builder-ului

Performanța la încărcare a fost o prioritate constantă pentru echipa Oxygen, culminând cu versiunea 4.8:
- **Navigator (v4.8):** Introducerea acestui drop-down în interfața builder-ului permite comutarea aproape instantanee între pagini, postări și template-uri. Această funcționalitate elimină necesitatea de a reveni în WordPress Admin, reducând drastic "context switching" și timpii morți de așteptare.
- **Tranziția JSON (v4.0):** Prin eliminarea shortcodes-urilor și trecerea la stocarea JSON, timpul de procesare a paginilor complexe în builder a fost redus semnificativ.

## 2. Optimizări la Nivel de Workflow

- **Editare Directă a Template-urilor:** Navigatorul permite saltul rapid de la o pagină la template-ul `Main` (pentru Header/Footer) și înapoi, făcând actualizările globale să pară instantanee.
- **Dependențe de Server:** Deși Oxygen a optimizat codul intern, viteza Navigatorului rămâne dependentă de performanța serverului/host-ului utilizat.

## 3. Indexul Analizei

| Fișier | Versiune | Inovație Cheie |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_48...` | v4.8 | Navigatorul pentru eliminarea timpilor de încărcare între pagini. |
| `JSON_Storage` (Referință) | v4.0 | Arhitectură JSON pentru parsing rapid al structurii DOM. |

---
**Standard Antigravity:** Utilizați **Navigatorul** (v4.8+) ca metodă principală de navigare între elementele site-ului în timpul dezvoltării. Aceasta este cea mai eficientă metodă de a menține un flux de lucru rapid ("Zero Distractions").
