# Topic: Recipe Checklist — Analiză Cross-Reference

## 1. Concept: Checklist-uri Interactive fără JS
Documentația prezintă o metodă inovatoare de a crea elemente interactive (ex: bifarea ingredientelor într-o rețetă) folosind pur CSS și pseudo-clase, evitând complexitatea JavaScript-ului pentru funcționalități simple de UI.

## 2. Implementare cu ACF Repeater
- **ACF Pro:** Utilizat pentru a stoca lista de ingrediente ca un field de tip "Repeater".
- **Elementul Repeater (Oxygen):** Interoghează datele ACF și generează rândurile checklist-ului.
- **Input Custom:** Folosirea unui de tip `Div` cu tag personalizat `input` și atribut `type="checkbox"` pentru a crea trigger-ul vizual.

## 3. Logica CSS (:checked)
- **Strikethrough:** Aplicarea stilului `text-decoration: line-through` asupra titlului ingredientului folosind selectorul de tip "sibling":
  `.checkbox:checked + .ingredient-title { text-decoration: line-through; }`
- **Utility Classes:** Utilizarea claselor `.rounded` și `.narrow` pentru a menține design-ul curat și responsiv la nivel global.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Building_A_Recipe_Checklist...md` | UI/UX Pattern | **Main Source** (Integrare ACF + CSS Interactivity) |

---
**Standard Antigravity:** Această metodă este ideală pentru landing page-uri sau site-uri de nișă unde performanța este critică. Pentru a păstra starea de "bifat" după refresh, este necesar un script minim de `localStorage`, dar pentru UX-ul de bază, abordarea CSS-only este superioară prin simplitate.
