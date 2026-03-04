# Topic: Advanced Custom Fields

## Fișiere incluse
- `Advanced_Custom_Fields_-_Show_Field_Only_if_Not_Empty.md` (2019)
- `Building_a_Car_Dealership_Website_with_FacetWP_Advanced_Custom_Fields_and_Oxygen.md` (2018)
- `21_Easily_Display_Advanced_Custom_Fields_Data_Inside_Oxygen.md` (2018)
- `A_Quick_Look_At_Oxygen_Advanced_Custom_Fields_CPTs.md` (2018)

## Analiză Perechi (Pairwise Analysis)

### 1. `Show_Field_Only_if_Not_Empty.md` & `Building_a_Car_Dealership.md`
**Relație:** Complementare. Primul se concentrează pe un detaliu fin de UX (ascunderea câmpurilor goale prin CSS), în timp ce al doilea este un studiu de caz amplu (Car Dealership) care folosește ACF și FacetWP pentru volume mari de date. Împreună oferă o soluție completă pentru site-uri de tip director/catalog.

### 2. `Show_Field_Only_if_Not_Empty.md` & `21_Easily_Display_ACF_Data.md`
**Relație:** Complementare. Unul arată *cum să afișezi* datele simplu prin Dynamic Data dialog, celălalt arată *cum să gestionezi absența* acelor date pentru a menține un design curat.

### 3. `Show_Field_Only_if_Not_Empty.md` & `A_Quick_Look_At_Oxygen_ACF_CPTs.md`
**Relație:** Complementare. `A Quick Look` arată recuperarea datelor prin PHP (`get_field`), pe când `Show Field Only` oferă un trick specific de design/logică pentru stările null/empty.

### 4. `Building_a_Car_Dealership.md` & `21_Easily_Display_ACF_Data.md`
**Relație:** Suprapunere Parțială / Învățare Progresivă. Ambele folosesc ACF și CPT UI. Fișierul `21` este un ghid de bază ("Getting Started") pentru Real Estate, în timp ce `Car Dealership` este o implementare avansată care introduce FacetWP și Easy Posts. Sunt recomandate ca pași succesivi în învățare.

### 5. `Building_a_Car_Dealership.md` & `A_Quick_Look_At_Oxygen_ACF_CPTs.md`
**Relație:** Complementare. `A Quick Look` este o prezentare conceptuală sumară (site de documentație), în timp ce `Car Dealership` este un tutorial de 47 minute care intră în profunzimea filtrării și a layout-urilor complexe.

### 6. `21_Easily_Display_ACF_Data.md` & `A_Quick_Look_At_Oxygen_ACF_CPTs.md`
**Relație:** Evoluție Tehnologică / Supersedence Parțial. În `A Quick Look` (Iunie 2018) se menționează că Oxygen va avea în viitor o selecție vizuală pentru ACF. În `21` (Octombrie 2018) este demonstrată exact această funcție: dialogul Dynamic Data. Din perspectiva utilizatorului modern, fișierul `21` înlocuiește nevoia de a cunoaște metoda manuală PHP prezentată în iunie.

## Concluzii RAG
Baza de cunoștințe ACF pentru Oxygen s-a maturizat rapid în 2018.
- **Fișier de referință pentru începători**: `21_Easily_Display_Advanced_Custom_Fields_Data_Inside_Oxygen.md`.
- **Fișier de referință pentru proiecte complexe**: `Building_a_Car_Dealership_Website_with_FacetWP_Advanced_Custom_Fields_and_Oxygen.md`.
- **Notă tehnică**: Metoda `get_field` (PHP) este prezentată ca fiind necesară inițial, dar devine opțională după implementarea interfeței vizuale native Oxygen.
