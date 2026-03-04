# Topic: Oxygen 3.6 — Analiză Cross-Reference (2020)

## 1. Design de Precizie: Unități REM și Custom
Oxygen 3.6 a introdus suportul pentru unități de măsură moderne, esențiale pentru design-ul scalabil:
- **REM Units:** Suport nativ pentru unități bazate pe mărimea fontului elementului HTML (root viewport). Recomandat pentru tipografie fluidă.
- **Custom Units (None):** Opțiunea "None" în dropdown-ul de unități permite introducerea manuală a oricărei funcții CSS: `calc()`, `clamp()`, `min()` sau `max()`. Aceasta deblochează un control total asupra layout-urilor dinamice.

## 2. Controlul Clienților: Edit Mode
- **Edit Mode (Client Control):** O facilitate majoră pentru agenții, permițând restricționarea accesului clienților la builder.
- **Permisiuni Granulare:** Se pot defini roluri (ex: Editor) care au acces DOAR la editarea conținutului (text, imagini), fără a putea șterge elemente, modifica clase, accesa Code Blocks sau trage elementele prin drag-and-drop.
- **Acces per Utilizator:** Posibilitatea de a suprascrie setările de rol pentru utilizatori individuali, oferind flexibilitate maximă în predarea proiectului.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_36.md` | Feature Overview | **Main Release Doc** |
| `Oxygen_36_Alpha_1...` | Pre-release testing | **Technical Preview** |

---
**Standard Antigravity:** Utilizați unități **REM** pentru tipografie și **Edit Mode** pentru a proteja integritatea design-ului la predarea site-ului. Recomandăm configurarea unui rol de "Content Editor" în Oxygen Settings > Client Control, limitând accesul la Advanced Tab și Code Blocks.
