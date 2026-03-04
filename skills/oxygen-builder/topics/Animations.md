# Topic: Animations

## Fișiere incluse
- `Oxygens_Site_Navigation_Element_Accessible_WordPress_Menus_Made_Easy.md` (2022)
- `Exit_Intent_Popup_in_WordPress.md` (2019)
- `Oxygens_Slider_Element_-_Put_ANYTHING_In_Sliders_Fullscreen_Sliders.md` (2018)
- `Oxygens_Progress_Bar_Element.md` (2018)
- `Oxygens_Slider_Element_-_Put_ANYTHING_In_Sliders.md` (2018)

## Analiză Relații

### Evolution & Expansion (Slider)
- **`Oxygens_Slider_Element_-_Put_ANYTHING_In_Sliders_Fullscreen_Sliders.md`** (Oct 2018) extinde funcționalitățile descrise în versiunea din Iunie 2018. Introduce tehnica specifică pentru "Fullscreen Sliders" (utilizarea `100 VH` pe secțiune și setarea "All slides stretch to same height"). Fișierul din Octombrie este considerat versiunea de referință pentru implementări profesionale.

### Complementary (Elemente Specifice)
- **`Oxygens_Progress_Bar_Element.md`**: Documentează elementul nativ de bară de progres. *Notă*: Acesta este diferit de metoda "hacked" văzută în topicul AOS (unde se foloseau Div-uri). Metoda nativă include animații de "Stripes" și "Width" predefinite.
- **`Exit_Intent_Popup_in_WordPress.md`**: Detaliază utilizarea animației "Flip" în corelație cu trigger-ul de Exit Intent pentru modal.
- **`Oxygens_Site_Navigation_Element_...`**: Introduce animațiile moderne pentru meniurile mobile și dropdown-uri (ex: "Slide Up", "Drop In") disponibile în noul element de navigație (v4.x+).

## Concluzii RAG
Animațiile în Oxygen sunt împărțite în trei categorii documentate aici:
1.  **Tranziții de element (Slider/Progress Bar)**: Setări interne ale elementului pentru Fade/Slide sau progresie de lățime.
2.  **Animații de intrare (Modal/AOS)**: Controlate prin librăria AOS integrată, declanșate de scroll sau triggere specifice (Exit Intent).
3.  **Animații de Navigație**: Specifice meniului Site Navigation, optimizate pentru accesibilitate.

**Rule of Thumb**: Pentru Sliders, folosiți întotdeauna imagini de background (Advanced Background) în locul elementelor de imagine pentru a menține consistența în modurile Fullscreen.
