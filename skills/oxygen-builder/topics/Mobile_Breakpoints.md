# Topic: Mobile Breakpoints & Visual Control — Analiză Cross-Reference (2019 - 2026)

## 1. Gestiunea Punctelor de Întrerupere (Breakpoints)

Oxygen folosește un sistem de "Cascade Down", unde modificările făcute pe un breakpoint afectează toate ecranele mai mici:
- **Default Breakpoints:** `All Devices` (Desktop), `992px` (Tablet), `768px` (Mobile Landscape), `480px` (Mobile Portrait).
- **Control Selectiv:** Se pot schimba culori, dimensiuni de font și layout-uri (Flex/Grid) pentru fiecare breakpoint în parte, fără a afecta ecranele mai mari.
- **Hiding Elements:** Utilizarea `display: none` la breakpoints specifice pentru a elimina elemente redundante pe mobil (ex: butoane secundare).

## 2. Animații și Performanță pe Mobil (v6.0+)

Odată cu versiunile moderne (2026), animațiile vizuale au devenit parte integrantă din workflow:
- **Scrolling Animations:** Permite efecte de blur, deplasare orizontală și fade declanșate de scroll.
- **Sticky Elements:** Implementare nativă pentru meniuri care rămân fixate la scroll, cu posibilitatea de a le dezactiva pe mobil pentru a economisi spațiu vertical.
- **LCP & Mobile Offset:** Se recomandă dezactivarea animațiilor complexe pe mobil (din tab-ul Advanced) pentru a menține un scor Core Web Vitals (LCP/INP) optim.

## 3. Tehnici de Ajustare Layout

- **Reverse Column Order:** O funcție critică pentru menținerea ierarhiei vizuale. Permite ca la stacking (≤992px), coloana din dreapta să apară prima (deasupra), util pentru layout-urile de tip "Z-pattern".
- **Background Positioning:** Ajustarea poziției imaginilor de fundal (ex: de la `center` la `top 100%`) pentru a asigura vizibilitatea subiectului pe ecrane înguste.

## 4. Indexul Analizei

| Fișier | Focus | Versiune | Relație |
| :--- | :--- | :--- | :--- |
| `Making_A_Mobile_Friendly...` | Bazele responsive: fonturi, culori, column reverse. | Classic | **Fundament** |
| `Design_Motion_Visually...` | Animații avansate, sticky menu și control mobil. | v6.0 | **Advanced Design** |

---
**Standard Antigravity:** Folosiți întotdeauna **Reverse Column Order** pentru secțiunile de tip "Feature" cu imagini alternate. Dezactivați animațiile de intrare (Entrance Animations) pe ecranele `< 480px` pentru a asigura o experiență de navigare rapidă și fără lag-uri de randare.
