# Topic: Background Image

## Fișiere incluse
- `Advanced_Custom_Fields_-_Show_Field_Only_if_Not_Empty.md` (2019)
- `Responsive_Big_Testimonial_w_Tinted_Background.md` (2016)

## Analiză Relații

### Complementary - Static vs Dynamic
Cele două fișiere tratează implementarea imaginilor de fundal din perspective diferite, oferind o viziune completă asupra elementului:
1.  **Perspective Statice & Design (2016)**: `Responsive_Big_Testimonial...` se concentrează pe setările clasice de design: Overlay (tintă neagră semi-transparentă pentru contrast), `background-size: cover` și `background-position: 50% 50%` pentru centrare.
2.  **Perspective Dinamice & Logică (2019)**: `Advanced_Custom_Fields...` aplică aceleași principii de design (cover, centrare), dar introduce sursa de date dinamică (ACF) și **condiția critică de afișare**: utilizarea operatorului "is not blank" pe container pentru a evita "găurile" în layout dacă imaginea lipsește din backend.

## Inovații Tehnice & Reguli de Aur
- **Overlay Tint**: Esențial pentru lizibilitatea textului alb peste imagini (utilizează `Image Overlay Color` în setările Background).
- **Conditional Display**: Regula de aur pentru fundaluri dinamice — aplicați condiția "is not blank" pe elementul părinte (Section/Div) care conține imaginea ACF.
- **Font Smoothing**: O notă interesantă în documentația din 2016 sugerează utilizarea `-webkit-font-smoothing: antialiased` pe containerele cu text alb pe fundal întunecat pentru o redare mai curată.

## Concluzii RAG
Imaginile de fundal în Oxygen ar trebui gestionate astfel:
- În mod static, pentru secțiuni Hero sau testimoniale (cu Overlay obligatoriu).
- În mod dinamic, via ACF, folosind întotdeauna operatorul de condiție "is not blank" pentru a menține integritatea designului.
- Setarea `background-size: cover` este standardul de facto pentru a asigura acoperirea completă a containerului indiferent de aspect ratio-ul imaginii.
