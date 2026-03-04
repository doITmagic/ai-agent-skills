# Analiză Cross-Reference: Custom Fonts

## Fișiere incluse:
- [How_to_Load_Google_Fonts_Locally_in_Oxygen_Improve_Core_Web_Vitals.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_to_Load_Google_Fonts_Locally_in_Oxygen_Improve_Core_Web_Vitals.md) (2026-02-25)
- [How_To_Use_Adobe_Typekit_Fonts_With_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_To_Use_Adobe_Typekit_Fonts_With_Oxygen.md) (2018-06-08)
- [Using_Typekit_with_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Using_Typekit_with_Oxygen.md) (2017-01-22)

## Analiza Relațiilor:

1. **Evoluția Priorităților (Adobe vs. Google Local)**:
   - **2017-2018**: Accentul era pe integrarea serviciilor premium externe precum **Adobe Typekit** (acum Adobe Fonts) pentru designuri de înaltă calitate, folosind API Tokens pentru sincronizare.
   - **2026**: Prioritatea s-a mutat radical spre **performanță și Core Web Vitals**. Documentația recentă se concentrează pe eliminarea cererilor externe prin găzduirea locală a subseturilor Google Fonts în format `.woff2`.

2. **Metodologii Complementare**:
   - Adobe Typekit este o soluție "set-it-and-forget-it" (Oxygen se ocupă de whitelisting).
   - Google Fonts Local necesită un workflow manual (download -> conversie -> upload per greutate/stil), dar oferă control total asupra scorurilor LCP (Largest Contentful Paint).

## Concluzii RAG / Key Insights:
- **Core Web Vitals Strategy**: Încărcarea fonturilor din surse externe (fonts.googleapis.com) este identificată ca un blocaj major în testările GTmetrix/PageSpeed. Soluția locală elimină latența conectării la servere terțe.
- **Workflow-ul Google Web Fonts Helper**: Este instrumentul recomandat pentru obținerea fișierelor `.woff2` corect formatate, fiind mai stabil decât Font Squirrel pentru fonturi variabile.
- **Managementul prin Variabile**: În Oxygen, cea mai eficientă metodă de implementare este definirea fonturilor sub formă de variabile globale (ex: `font-family: var(--body-font)`), permițând comutarea de la fonturi externe la cele locale dintr-un singur loc.
- **Adobe Typekit Sync**: Oxygen adaugă automat domeniul site-ului în setările kit-ului Adobe după introducerea API Token-ului, simplificând workflow-ul care anterior necesita whitelisting manual.

## Recomandări:
- Utilizați sufixul `-local` (ex: `Inter-local`) la încărcarea fonturilor personalizate pentru a evita confuzia cu sugestiile automate din Builder.
- Pentru site-uri B2B cu cerințe stricte de GDPR, găzduirea locală a fonturilor este obligatorie pentru a evita transferul de IP-uri către Google.
- Definește font weights specifice în panoul `Preferences > Custom Fonts` pentru a preveni "faux bold" (simulare de către browser a îngroșării literelor), care afectează calitatea vizuală.
