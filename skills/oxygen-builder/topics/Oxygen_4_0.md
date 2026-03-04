# Topic: Oxygen 4.0 — Analiză Cross-Reference (2022)

## 1. Fundamente: Tranziția JSON
Oxygen 4.0 reprezintă cel mai important moment tehnologic de la lansarea builder-ului, eliminând dependența de shortcodes pentru stocarea datelor:
- **JSON Storage:** Design-ul este acum stocat în format JSON, un standard mult mai eficient care îmbunătățește performanța builderului și permite funcții avansate de tip Clipboard.
- **Copy/Paste Inter-pagini:** Datorită stocării JSON, elementele pot fi copiate (`Cmd+C`) și lipite (`Cmd+V`) între pagini diferite sau chiar site-uri diferite prin clipboard.
- **PHP 8.x Compatibility:** Suport complet pentru cele mai noi versiuni de PHP.

## 2. UI/UX Modernizat
- **Breakpoint-uri la nivel superior:** Selectorul de dimensiuni de ecran a fost mutat în bara de top, fiind mereu accesibil.
- **Color-Coded Style Indicators:** Puncte verzi/albastre în dreptul proprietăților indică dacă stilizarea vine de pe o clasă (green) sau de pe ID (blue), facilitând depanarea vizuală a specificității CSS.
- **Inherited Values:** Valorile setate pe ecrane mai mari sunt afișate transparent în ecranele mai mici ("Inherited"), eliminând confuzia privind originea stilurilor.
- **Searchable Selectors:** Posibilitatea de a căuta clase/ID-uri în panoul de stiluri.

## 3. Elementul Image (Performance Focus)
- **Media Library Default:** Imaginile folosesc acum automat ID-ul din Media Library, preluând textul alternativ (Alt Text) și integrând `srcset` pentru imagini responsive.
- **Lazy Loading:** Opțiune nativă de activare a încărcării întârziate pentru imagini, esențială pentru optimizarea Core Web Vitals.
- **Object-Fit & Aspect-Ratio:** Controale vizuale noi pentru raportul de aspect și modul de scalare a imaginilor.

## 4. Item-uri Fixate (Critice)
- **Repeater Unique IDs:** Rezolvarea problemelor istorice cu ID-uri duplicate în Repeater; v4.0 generează ID-uri unice pentru fiecare item din listă.

## 5. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_40.md` | General Overview | **Main Release Doc** |
| `Oxygen_40_Alpha_1...` | Structural Changes | **Technical Documentation** |
| `JSON_Storage.md` | Deep Architecture | **Architecture Analysis** |

---
**Standard Antigravity:** Upgrade-ul la v4.0 necesită testare în staging pentru a verifica compatibilitatea add-on-urilor terțe cu noul format JSON. Regenerarea cache-ului CSS este mandatorie după migrare pentru a activa noile ID-uri unice ale Repeater-ului.
