# Analiză Cross-Reference: Global Settings & Design System

## Fișiere incluse:
- [Oxygens_Global_Styles_-_Headings_Text_Colors_Links_Fonts.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Oxygens_Global_Styles_-_Headings_Text_Colors_Links_Fonts.md) (2018)
- [How_to_Change_Global_Styles_that_Apply_to_Your_Entire_Website.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_to_Change_Global_Styles_that_Apply_to_Your_Entire_Website.md) (2019)
- [How_to_Create_A_Design_System_For_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_to_Create_A_Design_System_For_Oxygen.md) (2020)

## Relații între fișiere:

### 1. Evoluția Conceptului (2018 -> 2020)
- **Documentele din 2018/2019**: Se concentrează pe interfața nativă `Manage > Settings > Global Styles`. Explică moștenirea (inheritance) — cum setările de pe H1 cascadează către H2-H6 dacă nu sunt suprascrise.
- **Documentul din 2020**: Introduce un nivel superior de organizare — **Design System-ul**. Nu mai este vorba doar de a seta culori în panou, ci de a crea o pagină dedicată de referință vizuală și a stabili reguli stricte de spacing (sistemul de 8px) și clase utilitare (`box-shadow`, `rounded-corners`).

## Concepte Cheie:

### A. Ierarhia și Moștenirea (Inheritance)
- **Cascading Styles**: Oxygen folosește o logică de tip "parent-child" pentru headere. Orice schimbare de font sau greutate pe H1 se aplică automat și celorlalte tag-uri (H2-H6) dacă acestea nu au valori proprii.
- **Body Text impacts Headings**: Line-height-ul setat la nivel de "Body Text" afectează și headerele, fiind un punct critic de control pentru ritmul vertical al paginii.

### B. Sistemul de Design (Bune Practici 2020)
- **8-Pixel Increment System**: Utilizarea multiplilor de 8 pentru spacing (8, 16, 32, 64, 128) pentru a asigura claritatea pe ecranele Retina și consistența matematică.
- **Global Colors & PALX**: Recomandarea de a genera palete de culori saturate cu "base color" pentru a evita gri-urile "fără viață".
- **Design System Page**: Crearea unei pagini `inventory` unde sunt listate vizual toate elementele (culori, spacing, tipografie, umbre). Aceasta servește drept "single source of truth" pentru echipă și client.

### C. Optimizare și Performanță
- **Google Fonts Optimization**: Selecția granulară a greutăților (ex: doar 400 și 600) pentru a reduce timpul de încărcare, evitând încărcarea întregii familii de fonturi.
- **Mobile Hardening**: Setarea unui padding lateral implicit (ex: 20px) la nivel global pentru a preveni contactul textului cu marginile ecranului pe mobil.

## Concluzie:
Tranziția de la "Global Styles" la "Design System" marchează maturizarea fluxului de lucru în Oxygen. Utilizatorul nu doar configurează un builder, ci construiește un framework personalizat. Abordarea bazată pe pagini de referință vizuală și clase utilitare documentate este acum standardul de aur pentru agențiile care livrează proiecte B2B complexe.
