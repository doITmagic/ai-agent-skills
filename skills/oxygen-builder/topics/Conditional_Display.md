# Analiză Cross-Reference: Conditional Display

## Fișiere incluse:
- [Advanced_Custom_Fields_-_Show_Field_Only_if_Not_Empty.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Advanced_Custom_Fields_-_Show_Field_Only_if_Not_Empty.md) (2019-09-17)
- [21_Oxygens_Shortcode_Wrapper_Element.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/21_Oxygens_Shortcode_Wrapper_Element.md) (2018-10-20)

## Analiza Relațiilor:

1. **Metode de Implementare (Complementaritate)**:
   - `Advanced_Custom_Fields...` (2019) prezintă utilizarea **motorului de condiții nativ** al Oxygen pentru a verifica dacă un câmp ACF este populat ("is not blank").
   - `21_Oxygens_Shortcode_Wrapper_Element.md` (2018) prezintă o metodă de **integrare cu plugin-uri terțe** (ex: Restrict Content) prin învelirea elementelor Oxygen în shortcode-uri WordPress (`[restrict]...[/restrict]`).

## Concluzii RAG / Key Insights:
- **ACF Workflow**: Operatorul "is not blank" este universal; funcționează pentru imagini, text, checkbox-uri, etc. Previne afișarea unor containere goale care ar strica layout-ul.
- **Shortcode Wrapper**: Este soluția de rezervă pentru orice logică de condiționare oferită de plugin-uri externe care nu sunt integrate nativ în Oxygen. Permite nesting-ul oricărui element Oxygen în interiorul shortcode-ului.
- **Impact asupra DOM**: Ambele metode asigură că elementele condiționate nu sunt randate deloc în HTML-ul final dacă condiția nu este îndeplinită, optimizând performanța și SEO.

## Recomandări:
- Utilizați condițiile native Oxygen ori de câte ori este posibil (mai performante și mai ușor de gestionat vizual).
- Rezervați Shortcode Wrapper pentru integrări complexe cu plugin-uri de membership sau e-commerce care nu expun API-uri simple.
