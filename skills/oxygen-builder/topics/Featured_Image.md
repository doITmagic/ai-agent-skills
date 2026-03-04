# Analiză Cross-Reference: Featured Image (Dynamic Data & Conditional Layouts)

## Fișiere incluse:
- [How_to_Make_a_WordPress_Blog_Post_Layout_That_Adapts_to_Featured_Image.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_to_Make_a_WordPress_Blog_Post_Layout_That_Adapts_to_Featured_Image.md) (2019)
- [Visually_Insert_Dynamic_Data_From_WordPress_Into_Your_Oxygen_Templates.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Visually_Insert_Dynamic_Data_From_WordPress_Into_Your_Oxygen_Templates.md) (2018)

## Relații între fișiere:

### 1. Evoluție: De la Inserare la Logică (2018 -> 2019)
- **Documentul din 2018**: Prezintă bazele tehnice — cum se leagă un element de tip "Section Background" la `Featured Image` folosind butonul "Data" din panoul de proprietăți.
- **Documentul din 2019**: Ridică nivelul de complexitate, utilizând **Oxygen Conditions** pentru a crea layout-uri adaptive. Dacă o postare are imagine, se afișează un header vizual; dacă nu, se afișează o variantă minimalistă, evitând spațiile goale sau background-urile lipsă.

## Concepte Cheie:

### A. Integrarea Featured Image ca Background
- **Metoda vizuală**: Utilizarea butonului "Data" pentru a mapa URL-ul imaginii direct pe background-ul unei secțiuni.
- **Optimizare vizuală**: Utilizarea **Overlay Colors** (ex: albastru semi-transparent) pentru a asigura contrastul textului alb peste imagini de culori variate.
- **Poziționare**: Setări standard recomadate: `no-repeat`, `50% 50%` (centrat).

### B. Layout-uri Adaptive (Conditional Logic)
- Utilizarea condiției `Post has featured image = true/false`.
- **Handoff Friendly**: Această abordare permite clienților să publice postări fără a se îngrijora de aspectul site-ului dacă uită să adauge o imagine reprezentativă. Layout-ul se "restrânge" automat (ex: setarea padding-ului la 0 pentru varianta fără imagine).

### C. Dynamic Data Extra
- În afara imaginii, fișierele tratează și inserarea restului de metadate: `Title`, `Date`, `Author`.
- **Extensibilitate**: Menționarea opțiunii "PHP Function Return Value" pentru a aduce date pe care Oxygen nu le vede nativ (ex: metadate complexe din baza de date).

## Concluzie:
Topicul "Featured Image" ilustrează tranziția Oxygen de la un simplu instrument de design la un motor de template-uri inteligent. Combinația dintre Dynamic Data și Conditional Logic permite crearea de experiențe de utilizare rezistente la erori umane (client-proof), unde design-ul se adaptează organic la conținutul disponibil.
