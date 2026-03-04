# Topic: Installation & Setup — Analiză Cross-Reference (2016 - 2025)

## 1. Evoluție Arhitecturală: De la Temă la Plugin

Cea mai importantă schimbare în istoria Oxygen Builder este modul de instalare și integrare cu WordPress.

- **Legacy (2016):** Oxygen se instala ca o **Temă WordPress** (`Appearance > Themes`). Utiliza conceptul de "OxygenApp.com" pentru a încărca componente externe.
- **Modern (2018+):** Oxygen este un **Plugin**. Odată activat, acesta **dezactivează complet sistemul de teme WordPress**. Orice temă activă este ignorată, eliminând conflictele și oferind control total asupra output-ului HTML.

## 2. Workflow-ul de Configurare Inițială

La prima activare, utilizatorul este întâmpinat cu trei opțiuni critice:
1. **Blank Install:** Recomandat pentru developeri/agenții (standardul Antigravity). Oferă o pânză goală fără stiluri predefinite.
2. **Default Install:** Instalează setul de design "Atomic".
3. **Browse Library:** Permite alegerea unui set de design complet din librăria Oxygen.

**Pas Obligatoriu:** Activarea licenței în `Oxygen > Settings > License` pentru update-uri automate și securitate.

## 3. Sistemul de Revisions (Rollback)

Oxygen include un sistem propriu de salvări automate, independent de cel al WordPress.

- **Funcționare:** O versiune este salvată la fiecare click pe "Save" (după prima salvare).
- **Limită:** Se păstrează maxim **20 de versiuni** per pagină/template.
- **Atenție (Limitări):** Sistemul de Revisions stochează doar structura elementelor de pe pagină. **NU** include modificările aduse **Setărilor Globale** (Culori Globale, Fonturi Globale sau proprietăți ale Clatelor CSS).

## 4. Migrarea Site-urilor

Migrarea unui site construit cu Oxygen necesită pași specifici de securitate.

- **Instrument Recomandat:** *All-in-One WP Migration* (datorită compatibilității native cu Oxygen începând cu 2020).
- **Workflow Post-Migrare:**
  1. Salvare Permalinks (`Settings > Permalinks`).
  2. **Semnarea Shortcode-urilor:** Critic! Trebuie accesat `Oxygen > Settings > Security > Sign All Shortcodes`. Fără acest pas, elementele Oxygen pot să nu se afișeze sau să fie blocate din motive de securitate (verificarea integrității semnăturii).
  3. Regenerare Cache/CSS dacă apare notificarea în dashboard.

## 5. Indexul Analizei

| Fișier | An | Concept Principal | Context |
| :--- | :--- | :--- | :--- |
| `[Old] How_to_Install...` | 2016 | Instalare ca Temă | Arhivă / Istoric |
| `Installing_Oxygen...` | 2018 | Instalare Plugin + Visual Editor | Foundation |
| `How_to_Install...` | 2019 | Blank vs Atomic Install | Workflow Standard |
| `How_To_Roll_Back...` | 2019 | Sistem Revisions (20 limit) | Maintenance |
| `How_To_Easily_Migrate...` | 2020 | All-in-One Migration + Signing | Deployment |

---
**Notă pentru Agenție:** În toate proiectele noi, utilizați exclusiv **Blank Install** pentru a respecta standardele de performanță și custom design ale agenției, evitând bloat-ul din design set-urile implicite.
