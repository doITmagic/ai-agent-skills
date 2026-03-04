# Topic: Query Builder — Analiză Cross-Reference

## 1. Evoluția Sistemului de Interogare (Oxygen 3.8+)
Introducerea **Advanced Query** în versiunea 3.8 a reprezentat un salt major de la interogările simple ("Easy Posts" default) la interogări complexe bazate pe `WP_Query`, fără a necesita PHP custom.

## 2. Caracteristici Cheie
- **Visual Query Editor:** Permite construirea interogărilor folosind parametri standard WordPress sub formă de array-uri (ex: `tax_query`, `meta_query`).
- **Dynamic Data in Queries:** Posibilitatea de a folosi tag-uri dinamice (ex: `[post_id]`, `[post_type]`, `[post_terms:category]`) direct în parametrii interogării.
- **Presetări Utile:**
  - *Related posts by terms:* Afișează postări din aceeași categorie cu cea curentă.
  - *Posts of the same type as current:* Util pentru template-uri de arhivă sau single post.
  - *Exclude current post:* Folosind `post__not_in`: `[post_id]`.

## 3. SEO și Integrare
- **Rank Math:** Oxygen 3.8 a introdus un script nativ de compatibilitate care permite Rank Math să analizeze corect conținutul generat de Oxygen și să includă imaginile în sitemap-ul XML.

## 4. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_38.md` | Feature Launch | **Main Source** (Advanced Query & Visual Editor) |
| `Whats_New_In_Oxygen_39.md` | Enhancements | **Update** (Integrare MetaBox în interogări) |

---
**Standard Antigravity:** Folosiți întotdeauna **Advanced Query** pentru secțiunile de "Related Posts" sau "More from this category". Evitați hard-coding-ul ID-urilor; utilizați tag-urile de date dinamice pentru a menține template-urile flexibile și reutilizabile.
