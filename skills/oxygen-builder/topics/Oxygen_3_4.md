# Topic: Oxygen 3.4 — Analiză Cross-Reference (2020)

## 1. Control Creativ: Shape Dividers
Lansarea Oxygen 3.2 a introdus **Shape Dividers**, o facilitate ce permite tranziții vizuale complexe între secțiuni folosind SVG-uri:
- **Librărie nativă:** Peste 30 de forme predefinite (valuri, munți, curbe).
- **Custom SVG:** Posibilitatea de a insera cod SVG personalizat (ex: din `GetWaves.io`).
- **Configurare avansată:** Control asupra Z-index (pentru stratificare), opacitate, lățime (până la 200%) și flipping. Stratificarea mai multor Shape Dividers permite efecte de design "premium" fără cod CSS manual.

## 2. Productivitate: Undo/Redo (Multi-Step)
- Introducerea unui sistem veritabil de **Undo/Redo** care înregistrează aproape orice acțiune din builder (nu doar ștergerile, ca în versiunile anterioare).
- **History Pane:** O fereastră dedicată care permite navigarea prin istoricul sesiunii curente, facilitând revenirea la o stare anterioară a designului. *Notă: Istoricul se resetează după salvare și ieșire din builder.*

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_34.md` | Feature Overview | **Main Release Doc** |
| `Oxygen_34_Alpha_1...` | Pre-release testing | **Technical Preview** |

---
**Standard Antigravity:** Utilizați **Shape Dividers** cu moderație pentru a nu supraîncărca paginile (recomandat: maxim 2-3 straturi per secțiune). Utilizați **Z-index** pentru a asigura ordinea corectă de afișare a straturilor suprapuse, menținând mereu design-ul curat.
