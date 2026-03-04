# Analiză Cross-Reference: Conditions

## Fișiere incluse:
- [How_To_Use_Native_WordPress_Password_Protection_On_Pages_In_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_To_Use_Native_WordPress_Password_Protection_On_Pages_In_Oxygen.md) (2022-12-11)
- [Oxygen_Conditions_Feature_-_Show_Content_Based_on_Cookies.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Oxygen_Conditions_Feature_-_Show_Content_Based_on_Cookies.md) (2019-08-01)
- [How_to_Use_Oxygens_Conditions_Feature_to_Add_Coming_Soon_Maintenance_Mode_Screen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_to_Use_Oxygens_Conditions_Feature_to_Add_Coming_Soon_Maintenance_Mode_Screen.md) (2019-07-25)
- [24_Oxygen_Conditions.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/24_Oxygen_Conditions.md) (2019-07-08)

## Analiza Relațiilor:

1. **Manual vs. Studii de Caz (Complementaritate)**:
   - `24_Oxygen_Conditions.md` servește ca **referință tehnică** pentru interfața și operatorii (AND/OR) introduși în v2.4.
   - Celelalte trei fișiere sunt **implementări avansate**:
     - `...Show_Content_Based_on_Cookies` (Marketing/Retargeting).
     - `...Coming_Soon_Maintenance_Mode` (Workflow/Site Management).
     - `...Password_Protection` (Securitate/Integrare Core WP).

2. **Evoluție și Patching**:
   - Fișierul din 2022 (`Password Protection`) este o **extensie critică**, abordând o limitare cunoscută a Oxygen (faptul că design-ul Oxygen ignoră nativ statusul "Password Protected" al postării fără un workaround custom PHP).

## Concluzii RAG / Key Insights:
- **Behavioral Targeting**: Utilizarea `setcookie()` combinată cu condiția "Cookie List" permite personalizarea experienței fără un motor extern de marketing.
- **Global States**: Modul "Coming Soon" se implementează cel mai curat într-un template "Catch-all" prin învelirea întregului site într-un Div condiționat de `User Logged In`.
- **Custom PHP integration**: Pentru a repara protecția cu parolă, se folosește funcția `post_password_required()` într-o condiție custom definită via API-ul Oxygen.

## Recomandări:
- Utilizați ghidul din 2022 pentru orice site care necesită pagini protejate cu parolă.
- Pentru moduri de mentenanță, tehnica din 2019 este validă, dar trebuie dezactivată prudent (prin eliminarea condiției sau setarea uneia imposibile).
