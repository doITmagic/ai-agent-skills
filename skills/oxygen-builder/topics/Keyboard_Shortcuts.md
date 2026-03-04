# Topic: Keyboard Shortcuts — Analiză Cross-Reference (v4.0 - v6.0)

## 1. Eficiența Fluxului de Lucru (Workflow)

Oxygen a evoluat constant pentru a oferi o experiență de editare rapidă, similară cu un IDE, prin introducerea scurtăturilor de tastatură și a instrumentelor de prototipare rapidă.

- **Scurtături de Bază (Introduse în v4.0):**
  - `Cmd/Ctrl + C` / `Cmd/Ctrl + V`: Copiere și lipire elemente (funcționează și între diferite pagini ale aceluiași site).
  - `Cmd/Ctrl + D`: Duplicare element selectat.
  - `Cmd/Ctrl + S`: Salvare rapidă a design-ului.
  - `Cmd/Ctrl + Backspace / Delete`: Ștergere element.
  - `Cmd/Ctrl + Z` / `Cmd/Ctrl + Y`: Undo / Redo îmbunătățit.

- **Scurtături Avansate (v6.0 și updates):**
  - Ciclarea prin breakpoints direct de la tastatură.
  - Adăugarea rapidă de elemente.
  - **Copy/Paste Control Settings:** Posibilitatea de a copia setările unui întreg tab de control (ex: toate marginile/padding-ul) și de a le aplica altui element via click-dreapta sau shortcuts.

## 2. Emmet Integration (v4.5)

Lansată în **Oxygen 4.5**, integrarea Emmet permite crearea unor structuri complexe de layout prin tastarea unor abrevieri CSS-like.
- **Shortcut Cheie:** `Cmd/Ctrl + Shift + E` pentru accesarea input-ului Emmet.
- **Putere de Lucru:** Permite inserarea simultană a structurii (ex: `section>div.container>h1+p`), a claselor CSS și a conținutului de text (folosind `{}`).
- **Limitări:** Nu suportă elemente complexe precum Reusables, Composites sau Repeaters.

## 3. Managementul Claselor și Selectoarelor (v6.0)

- **Renaming Global:** v6.0 permite redenumirea unei clase direct în editor, actualizând automat toate instanțele de utilizare de pe site.
- **Searchable Selectors:** Căutare rapidă în lista de selectoare pentru a localiza și edita stilurile specifice fără scroll infinit.

## 4. Analiza și Beneficii

| Funcție | Versiune | Impact |
| :--- | :--- | :--- |
| Clipboard Copy/Paste | v4.0 | Transfer rapid de design între pagini fără a folosi Reusable Parts. |
| Emmet Support | v4.5 | Reducerea timpului de creare a structurii inițiale cu până la 70%. |
| Global Class Renaming | v6.0 | Flexibilitate extremă în refactoring-ul design-ului în faze avansate. |
| Quick Navigator | v6.0 | Comutare rapidă între postări și template-uri fără a părăsi editorul. |

---
**Standard Antigravity:** Încurajați utilizarea Emmet pentru structura inițială a paginilor și folosiți `Cmd+C/V` pentru a menține consistența între secțiuni similare. Documentați clasele CSS globale înainte de începerea implementării pentru a profita de funcția de global renaming la nevoie.
