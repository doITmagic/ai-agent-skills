# Topic: Opacity & Overlay — Analiză Cross-Reference (2016 - 2019)

## 1. Controlul Opacității și Efectelor (Viziune Globală)
Oxygen oferă un control granular asupra opacității și efectelor vizuale în secțiunea **Advanced > Effects**. Documentația subliniază:
- **Opacity (0-1):** Utilizarea valorilor zecimale pentru transparența elementelor. Recomandat pentru imagini de fundal sau stări de hover.
- **Superbox Element:** Un helper dedicat pentru tranziții de conținut pe hover, utilizând logică de opacitate (`initial opacity 0` -> `hover opacity 1`) și scalare (`initial scale 1` -> `hover scale 1.2`).
- **Shadows & Filters:** Box Shadow, Text Shadow și CSS Filters (Blur, Sepia, Grayscale) pot fi aplicate global sau pe stări de hover pentru micro-interacțiuni.

## 2. Tehnici de Overlay
Overlay-ul în Oxygen este tratat în două contexte principale:
- **Background Tinting:** Aplicarea unei culori de fundal peste o imagine (Background Overlay Color) pentru a crește contrastul textului. Standardul este `black` cu opacitate variabilă (ex: `0.5`).
- **Functional Overlay (Notification Bars):** Utilizarea elementului **Modal** configurat ca o bară `100% width`, poziționată la bază (`bottom center`), cu un `backdrop-color: transparent`. Aceasta permite crearea de bare de notificare (GDPR/Promo) fără plugin-uri adiționale.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Oxygens_Effects_Opacity...` | CSS Effects (Shadows/Filters) | **Core Feature Guide** |
| `Superbox_Element...` | Hover Transitions | **Helper Element Guide** |
| `Sticky_Notification_Bar...` | Notification Overlay | **Use-Case (Modal Integration)** |
| `Responsive_Big_Testimonial...` | Background Tinting | **Design Pattern (Legibility)** |

---
**Standard Antigravity:** Folosiți întotdeauna culori `rgba()` pentru umbre (shadows) pentru a obține un aspect premium ("soft shadows"). Pentru overlay-ul de text pe imagini, utilizați funcția nativă de Background Overlay a secțiunii în loc de elemente absolute suprapuse manual, pentru a menține un DOM curat.
