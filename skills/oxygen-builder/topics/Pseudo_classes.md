# Topic: Pseudo-classes — Analiză Cross-Reference

## 1. Element States (Pseudo-clase)
În Oxygen, pseudo-clasele CSS sunt gestionate prin dropdown-ul **State** din partea de sus a panoului de proprietăți.
- **Stări Native:** `:hover` este cea mai utilizată stare pentru butoane și link-uri.
- **Custom States:** Utilizatorii pot adăuga manual orice pseudo-clasă validă CSS (ex: `:active`, `:focus`, `:visited`).
- **Indicator Vizual:** Când un element sau o clasă are stiluri aplicate pe o altă stare decât cea implicită, butonul "State" luminează în albastru.

## 2. Advanced States (:last-child, :first-child)
Oxygen permite utilizarea selectorilor de structură pentru a rezolva probleme comune de design:
- **Exemplu Meniuri/Tab-uri:** Eliminarea bordurii din partea dreaptă pentru toate elementele dintr-o listă și reaplicarea ei doar pentru ultimul element folosind `:last-child`. Această tehnică evită "double borders" între elemente.
- **Pseudo-elemente:** Deși documentația se concentrează pe pseudo-clase, interfața permite și lucrul cu `:before` și `:after` pentru inserarea de conținut decorativ.

## 3. Animații și Tranziții
Pentru ca trecerea între stări (ex: de la default la hover) să fie fluidă, se recomandă utilizarea tab-ului **Advanced > Effects > Transition**. O durată de **0.3s - 0.5s** este considerată standard pentru un UX optim.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Oxygen_-_Editing_Element_States...md` | Core Feature | **Main Source** (Tutorial de stări și selectori) |

---
**Standard Antigravity:** Utilizați întotdeauna **Classes** atunci când aplicați pseudo-clase pentru elemente repetitive (butoane, iteme de listă). Verificați indicatorul albastru de pe butonul "State" pentru a depana stiluri "fantomă" care nu par să vină din starea implicită a elementului. Pentru documentare avansată, consultați **MDN Web Docs**, resursa recomandată oficial de echipa Oxygen.
