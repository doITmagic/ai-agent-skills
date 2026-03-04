# Topic: Oxygen 4.2 — Analiză Cross-Reference (2022)

## 1. Workflow Facilitat: Auto-Unit Switching
Oxygen 4.2 a introdus o mică, dar crucială îmbunătățire de UX:
- **Switching automat:** Scrierea unității (ex: `rem`, `em`, `none`) direct în câmpul de input (fără a da click pe dropdown-ul de unități) comută automat selectorul pe acea unitate. Este un "time-saver" major pentru dezvoltatorii care nu folosesc pixeli.

## 2. Developer Power: Code Block Unwrap
- **Unwrap Option:** Posibilitatea de a șterge wrapper-ul `div` implicit generat de Oxygen în jurul unui Code Block în front-end.
- **Raw Output:** Permite output-ul de PHP/HTML "curat", esențial pentru scripturi care necesită o structură DOM specifică sau pentru dezvoltarea de componente custom unde controlul total asupra ID-urilor și claselor este critic.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_42.md` | Feature Overview | **Main Release Doc** |

---
**Standard Antigravity:** Activați **Unwrap** în Code Blocks atunci când scrieți layout-uri HTML complexe sau când integrați librării JS care sunt sensibile la elementele părinte. Atenție: stilurile aplicate pe ID în builder nu se vor mai aplica pe front-end pentru elementele unwrapped.
