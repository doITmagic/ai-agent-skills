# Topic: Responsive Design & Typography — Analiză Cross-Reference

## 1. Fundamentele Design-ului Responsiv (2021+)
Abordarea modernă în Oxygen Builder pune accent pe scalabilitate și evitarea ajustărilor manuale repetitive pe fiecare breakpoint.

### A. Tipografie Scalabilă cu `clamp()`
- **Concept:** Utilizarea funcției CSS `clamp(min, preferred, max)` pentru headere (H1-H6).
- **Exemplu H1:** `clamp(2rem, 5vw + 1rem, 6rem)`. Acest setup permite textului să se micsoreze fluid pe tablete și telefoane fără a schimba unitatea de măsură manual.
- **Beneficiu:** Reduce drastic numărul de intervenții pe breakpoint-urile de 992px, 768px și 480px.

### B. Layout Dinamic (Mobile-First mindset)
- **Min-Height vs Height:** Folosirea `min-height: 100vh` pe secțiunile Hero în loc de `height: 100vh` pentru a permite conținutului să se extindă pe verticală pe ecrane înguste unde textul se poate suprapune.
- **Global Spacing:** Setarea padding-ului de secțiune (ex: 64px top/bottom) la nivel global pentru a asigura consistența vizuală pe toate paginile.

## 2. Navigare și Header
- **Overlay Header:** Tehnica de a suprapune header-ul peste Hero section (transparent pe desktop) și configurarea acestuia pentru a rămâne lizibil pe mobil.
- **Pro Menu (Mobile):** Utilizarea toggle-ului "Always" pentru a forța un meniu hamburger pe ecrane mici, oferind o experiență de navigare optimizată (Full Screen sau Off-Canvas).

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `How_To_Build_A_Responsive_Site_2021...md` | System Setup | **Main Source** (clamp(), Global Styles, Hero) |
| `Media_Queries_&_Responsive_Design.md` | Core Concepts | **Foundational** (Cascade Down, REM/Clamp) |
| `Mobile_Breakpoints_&_Visual_Control.md` | UI Controls | **Workflow** (Reverse Column Order, Animation) |

---
**Standard Antigravity:** Începeți orice proiect Oxygen prin definirea `clamp()` în *Global Settings > Headings*. Aceasta este singura metodă sustenabilă de a obține un design premium care arată impecabil pe orice dimensiune de ecran (inclusiv ecrane ultra-wide sau ultra-narrow).
