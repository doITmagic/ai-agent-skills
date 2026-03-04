# Topic: Quiz & Online Courses (LearnDash) — Analiză Cross-Reference

## 1. Structura LMS în Oxygen
Integrarea cu **LearnDash** permite transformarea WordPress într-o platformă educațională completă. Oxygen gestionează designul vizual, în timp ce LearnDash oferă logica de curs.

## 2. Ierarhia Elementelor
- **Courses → Lessons → Topics:** Structura standard LearnDash care trebuie reflectată în template-urile Oxygen.
- **Quizzes:** Pot fi plasate la nivel de lecție sau ca o evaluare globală la finalul cursului.

## 3. Implementare Tehnică
- **Template Inheritance:** Se recomandă crearea unui template părinte (ex: `All Pages`) și a unui template specific `LearnDash` care să îl moștenească. Template-ul `LearnDash` trebuie să se aplice tuturor post-type-urilor specifice (courses, lessons, quizzes, assignments).
- **Shortcodes:** Utilizarea shortcode-urilor LearnDash (ex: `[ld_course]`, `[ld_profile]`) în interiorul elementului **WP Content** pentru a afișa logica LMS.
- **Dynamic Headers:** Afișarea titlului cursului/lecției curente folosind `Insert Data > Post Title` pentru o navigare intuitivă.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Online_Course_Website_using_LearnDash...md` | Full Site Build | **Main Source** (Workflow complet de cursuri și plăți) |

---
**Standard Antigravity:** Pentru toate proiectele LMS, asigurați-vă că folosiți un template de tip "Inner Content" cu `min-height: 65vh` pentru a preveni ridicarea footer-ului pe paginile cu conținut puțin (ex: Quizzes). Activați Stripe/PayPal în modul "Test" pentru validarea întregului flux înainte de lansare.
