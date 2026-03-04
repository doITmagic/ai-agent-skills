# Topic: Animate On Scroll (AOS)

## Fișiere incluse
- `How_To_Make_Scroll_Activated_Animated_Progress_Bars_In_WordPress_With_Oxygen.md` (2020)
- `Sticky_Notification_Bar_in_WordPress.md` (2019)
- `23_Oxygens_Modal_Element.md` (2019)
- `How_to_Change_Global_Styles_that_Apply_to_Your_Entire_Website.md` (2019)

## Analiză Relații

### Foundational (Configurare)
- **`How_to_Change_Global_Styles_that_Apply_to_Your_Entire_Website.md`**: Definește setările globale AOS în Oxygen (Manage > Settings > Global Styles). Include parametri critici ca: animation type, duration, anchor, easing, trigger offset și opțiunea de dezactivare pe mobile.
- **`23_Oxygens_Modal_Element.md`**: Demonstrează activarea AOS la nivel de element individual și elemente imbricate (nested elements inside a modal).

### Complementary (Soliții Practice)
- **`Sticky_Notification_Bar_in_WordPress.md`**: Un studiu de caz care utilizează AOS (Slide Up) pentru a anima o bară de notificare creată cu elementul Modal. Arată cum animația transformă un popup static într-un element dinamic de intervenție.
- **`How_To_Make_Scroll_Activated_Animated_Progress_Bars_In_WordPress_With_Oxygen.md`**: Cea mai avansată utilizare a AOS din acest grup. Arată cum animația "Slide Right" combinată cu `overflow: hidden` pe container creează efectul de "umplere" progresivă a unei bare de date.

## Concluzii RAG
Funcția Animate On Scroll din Oxygen este o integrare a librăriei AOS.
- **Setări Globale**: Sunt recomandate pentru consistența site-ului (easing, mobile disable).
- **Control**: Animațiile pot fi suprascrie la nivel de element.
- **Performance**: Documentația recomandă dezactivarea animațiilor sub un anumit breakpoint (ex: mobile) pentru a economisi resurse.
- **Trick de design**: Pentru bare de progres, AOS trebuie aplicat elementului de "fill", nu containerului principal.
