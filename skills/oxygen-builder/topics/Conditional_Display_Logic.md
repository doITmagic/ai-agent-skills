# Analiză Cross-Reference: Conditional Display Logic

## Fișiere incluse:
- [Oxygen_Conditional_Display_Logic_The_Cleanest_Way_to_Do_Dynamic_Layouts.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Oxygen_Conditional_Display_Logic_The_Cleanest_Way_to_Do_Dynamic_Layouts.md) (2026-02-18)
- [How_to_Create_a_Transparent_Overlay_Header_Effect_with_Oxygen_WordPress.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_to_Create_a_Transparent_Overlay_Header_Effect_with_Oxygen_WordPress.md) (2018-11-02)

## Analiza Relațiilor:

1. **Teorie vs. Aplicație Practică (Complementaritate)**:
   - `Oxygen_Conditional_Display_Logic...` (2026) definește **standardul modern** de lucru: utilizarea tab-ului "Conditions" pentru a face layout-urile "inteligente" (ex: ascunderea secțiunii de Case Studies dacă un ACF Repeater este gol).
   - `How_to_Create_a_Transparent_Overlay...` (2018) prezintă o **aplicație specifică** a logicii condiționate în cadrul Header Builder-ului, utilizând setările "Overlay Display" pentru a alterna între variante de design (logo alb vs. negru) fără a multiplica template-urile.

2. **Evoluția Logicii**:
   - De la setări dedicate (cum este Overlay Header din 2018), Oxygen a evoluat spre un sistem universal de condiții (2026) care include Date/Time, User Role, Browser, și cel mai important, **Custom PHP**.

## Concluzii RAG / Key Insights:
- **Clean Layouts**: Logica "is not empty" pe Dynamic Data (ACF) este cheia pentru site-uri "resilient", unde design-ul se adaptează automat la conținutul introdus de client.
- **Header Overlay Logic**: Nu este nevoie de template-uri diferite pentru Homepage; se folosesc două rânduri în același Header Builder, controlate prin "Only Show in Overlay" / "Hide in Overlay".
- **Custom PHP**: Condițiile PHP permit verificări avansate (ex: `get_the_title() === 'Sample Page'`) care nu sunt disponibile în interfața vizuală standard.

## Recomandări:
- Fișierul din 2026 este referința principală pentru logica de afișare dinamică a site-ului.
- Fișierul din 2018 rămâne util ca "blueprint" pentru design-ul de headere complexe.
