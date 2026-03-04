# Analiză Cross-Reference: Dashboard Tabs (Composite Elements Library)

## Fișiere incluse:
- [Add-on_Spotlight_Composite_Elements_Library.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Add-on_Spotlight_Composite_Elements_Library.md) (2021-02-26)
- [Composite_Elements_Library.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Composite_Elements_Library.md) (2021-02-23)

## Analiza Relațiilor:

1. **Duplicate / Overlap Major**:
   - Cele două fișiere sunt aproape identice în conținut (ambele prezintă Table of Contents, Mega Menu și Dashboard Tabs). Versiunea din **26 februarie 2021** (Spotlight) este o rafinare a celei din **23 februarie**, punând un accent mai mare pe fluxul de lucru pas-cu-pas și pe "deconstruirea" elementelor.

2. **Context Tehnologic**:
   - Acest topic marchează introducerea "Composite Elements" în ecosistemul Oxygen (v3.7+), o schimbare de paradigmă de la elemente statice, codate rigid în plugin, la elemente dinamice servite din cloud.

## Concluzii RAG / Key Insights:
- **Arhitectură "Cloud-to-Local"**: Elementele sunt stocate pe serverul de Design Sets, permițând echipei Oxygen să le actualizeze sau să adauge elemente noi fără a lansa o versiune nouă de plugin. Odată importate, acestea nu mai au dependențe externe.
- **Transparența Structurii**: Spre deosebire de un widget standard dintr-un alt builder, un Composite Element este o colecție de **div-uri, butoane și iconițe native**. Acest lucru permite utilizatorului să șteargă sau să modifice orice parte a elementului.
- **Componente Cheie**:
  - **Mega Menu**: Include triggere de hover și containere multi-coloană, eliminând necesitatea unor plugin-uri terțe.
  - **Table of Contents (ToC)**: Utilizează un sistem de placeholderi (`.primary`, `.sub-1`) care detectează automat ierarhia heading-urilor (H2-H6) de pe pagină și le randează dinamic.
  - **Dashboard Tabs**: Oferă un layout premium pentru interfețe de utilizator, incluzând tranziții fluide între tab-uri.
- **Licențiere**: Accesul este condiționat de o licență Agency (cumpărată înainte de februarie 2021) sau de un add-on plătit, fiind validat în setările globale Oxygen.

## Recomandări:
- Utilizați **Table of Contents** pentru pagini de blog lungi sau documentații pentru a îmbunătăți SEO și experiența de utilizare (anchor links automate).
- Când stilizați Composite Elements, lucrați la nivel de **Clasă** (ex: `.primary`) pentru a vă asigura că modificările se aplică tuturor itemilor generați dinamic.
- Dacă doriți să creați un element similar, studiați structura unui Composite Element importat – este cea mai bună resursă de învățare pentru layout-uri complexe în Oxygen.
- Nu vă temeți de `Code Block`-urile incluse în aceste elemente; ele conțin de obicei CSS-ul specific (variabile, animații) care face elementul să funcționeze "pro", dar pot fi editate dacă este necesar.
