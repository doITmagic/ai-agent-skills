# Topic: MetaBox Integration — Analiză Cross-Reference (2021 - 2026)

## 1. Integrare Nativă (Oxygen v3.9+)

Introduasă în versiunea 3.9 Alpha 1, integrarea cu MetaBox este acum un standard în Oxygen, oferind o paritate funcțională aproape completă cu ACF:
- **Dialog Date Dinamice:** Câmpurile MetaBox apar ca opțiune directă în butonul "Insert Data".
- **Suport Element Image:** Permite maparea automată a câmpurilor de tip "photo" sau "featured image" din MetaBox către elementele Image din Oxygen.
- **Default Output Format:** Opțiune crucială care permite redarea datelor exact așa cum sunt configurate în MetaBox (ex: liste bulleted sau tabele HTML), fără a necesita stilizare manuală element cu element.

## 2. MetaBox ca Sursă pentru Repeater

Una dintre cele mai puternice funcționalități este utilizarea **Clonable Groups** din MetaBox ca sursă de date pentru elementul **Repeater Field** din Oxygen:
- **Funcționare:** Permite crearea de rânduri dinamice (ex: o listă de servicii, echipa, orar) fără a crea Post Types separate pentru fiecare element repetitiv.
- **Templating:** Se pot folosi componente Oxygen pre-stilizate ca șablon pentru fiecare rând al repetitorului.

## 3. Workflow de Implementare Recomandat

1. **Definire Date:** Crearea CPT-ului (ex: `property`, `project`) și a Field Groups în interfața MetaBox.
2. **Template Oxygen:** Crearea unui template dedicat pentru noul CPT (Inherit Main, Priority 10).
3. **Mapare:** Inserarea elementelor vizuale și maparea lor via "MetaBox field".
4. **Validare:** Testarea cu mai multe instanțe de postări pentru a verifica consistența afișării.

## 4. Indexul Analizei

| Fișier | Focus | Versiune | Relație |
| :--- | :--- | :--- | :--- |
| `Oxygen_39_Alpha_1...` | Anunțul integrării și performanță cache. | v3.9 | **Master (Origine)** |
| `39_Easily_Display_Meta_Box...` | Tutorial practic: CPT Property + Template. | v3.9 | **Core Tutorial** |
| `Oxygens_Dynamic_Data...` | Utilizarea Repeater-ului cu date MetaBox/ACF. | v4.x/v6.0 | **Advanced Use-Case** |

---
**Standard Antigravity:** MetaBox este stack-ul nostru obligatoriu. Utilizați **Clonable Groups** pentru secțiuni repetitive care nu necesită Query-uri complexe de tip WP_Query. Folosiți întotdeauna **Template Priority 10** pentru a evita conflictele cu șabloanele de arhivă generale.
