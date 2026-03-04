# Analiză Cross-Reference: Edit Mode (Client Handoff & Restricted Access)

## Fișiere incluse:
- [Preparing_Your_Oxygen_Site_For_Client_Handoff.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Preparing_Your_Oxygen_Site_For_Client_Handoff.md) (2020)
- [Whats_New_In_Oxygen_36.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Whats_New_In_Oxygen_36.md) (2020)
- [Oxygen_36_Alpha_1_-_Ready_For_Testing.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Oxygen_36_Alpha_1_-_Ready_For_Testing.md) (2020)

## Relații între fișiere:

### 1. Lansare și Implementare Practică
- `Whats_New_In_Oxygen_36` și versiunea `Alpha 1` definesc specificațiile tehnice ale "Edit Mode", în timp ce `Preparing_Your_Oxygen_Site...` oferă metodologia de aplicare a acestora pentru o agenție (Handoff Strategy).
- Documentul de handoff extinde teoria prin utilizarea **Design Library** ca soluție de mijloc: clientul nu poate "desena" liber, dar poate adăuga blocuri pre-stilizate și categorisite de dezvoltator.

## Concepte Cheie:

### A. Edit Mode (v3.6+)
- **Restricții implicite**: Utilizatorii cu acces "Edit Only" nu pot vedea Code Blocks, Advanced Tab, Conditions, sau butoanele de Duplicate/Delete (implicit). De asemenea, drag-and-drop-ul este dezactivat pentru a păstra integritatea layout-ului.
- **Control Per User/Role**: Oxygen permite setarea accesului la nivel de rol WordPress (ex: Editor) sau suprascriere la nivel de utilizator individual (chiar și pentru Administratori).
- **Locking**: Introducerea funcției "Lock post in edit mode" care permite blocarea template-urilor globale (Main Content, Header/Footer) pentru a preveni modificările accidentale de către client.

### B. Strategia de Client Handoff
- **Curated Experience**: Dezvoltatorul transformă site-ul curent într-un "Design Set", categorisește secțiunile (ex: Testimonials, Info Boxes) și oferă clientului acces doar la "Design Library". Astfel, clientul poate construi pagini noi folosind "caramizi" sigure.
- **Efort minim de mentenanță**: Prin dezactivarea claselor pentru client, se previne situația în care acesta modifică o clasă globală fără să realizeze impactul asupra întregului site.

### C. Evoluție Tehnică Adiacentă (v3.6)
- **Unități REM**: Introducerea suportului nativ pentru REM, permițând scalarea tipografiei în funcție de dimensiunea fontului HTML.
- **Custom CSS Functions**: Adăugarea unității "None" care permite utilizarea de funcții CSS moderne direct în câmpurile de input: `calc()`, `clamp()`, `min()`, `max()`. Aceasta reprezintă un pas major către design-ul fluid (văzut și în topicul Dynamic Layouts).

## Concluzie:
Topicul "Edit Mode" marchează rezolvarea uneia dintre cele mai mari critici aduse Oxygen: riscul de a lăsa un client într-un builder care permite scrierea de cod PHP. Versiunea 3.6 a transformat Oxygen dintr-un instrument exclusiv pentru dezvoltatori într-o soluție viabilă pentru agenții care au nevoie să predea site-uri "client-proof", menținând în același timp controlul total asupra design-ului și performanței.
