# Topic: Background Options

## Fișiere incluse
- `All_Background_Options_Including_Gradients_Video_Backgrounds.md` (2019)
- `Oxygen_All_Backgrounds_Options_Including_Video_Parallax_and_Tinting.md` (2018)

## Analiză Relații

### Superseded & Expansion
- Fișierul din 2019 (**`All_Background_Options_Including_Gradients...`**) este versiunea extinsă care o înlocuiește pe cea din 2018. Deși repetă bazele (culori, imagini, parallax), introduce trei concepte noi majore:
    1.  **Blending Modes**: Integrarea proprietății CSS `background-blend-mode` (ex: `multiply`) direct în interfață pentru efecte creative de colorare.
    2.  **Advanced Gradients**: Unelte noi pentru gradienți liniari și radiali cu multiple puncte de oprire (color stops) și unghiuri personalizate.
    3.  **Video optimization**: Reguli mai stricte pentru limitarea videoclipurilor pe mobil (hiding below 768px).

## Inovații Tehnice & Reguli de Aur
- **Pattern Optimization**: Utilizați întotdeauna `background-size: auto` pentru pattern-uri repetitive (SubtlePatterns) pentru a evita deformarea cauzată de `cover`.
- **Responsive Centering**: Utilizarea valorilor `50%` (Left) și `50%` (Top) pentru a menține punctul focal al imaginii în centru pe toate rezoluțiile.
- **Video Fallback**: Când un video este ascuns pe mobil (via setările Oxygen), browser-ul va folosi automat culoarea sau imaginea de fundal setată anterior.
- **Performance**: Documentația insistă pe utilizarea CompressJPEG pentru imagini (reducere de ~50% a dimensiunii) înainte de upload.

## Resurse Externe Recomandate (Standard Agenție)
- **Imagini**: Unsplash.com, Pexels.com.
- **Pattern-uri**: subtlepatterns.com.
- **Video**: cover.co, videos.pexels.com.

## Concluzii RAG
Controlul fundalurilor în Oxygen este un proces în straturi:
1.  **Culoare/Gradient** ca strat de bază.
2.  **Imagine/Video** ca strat superior.
3.  **Overlay & Blending** ca strat de finisare pentru contrast și branding.
Atenție: Parallax-ul (`fixed attachment`) poate avea comportamente inconsistente pe anumite dispozitive mobile și ar trebui testat riguros.
