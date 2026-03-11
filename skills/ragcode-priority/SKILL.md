---
name: ragcode-priority
description: Use when searching code in this project - mandates ragcode MCP tools over grep or manual navigation
---

# 🎯 Skill: Ragcode MCP Priority Usage

Reguli **OBLIGATORII** pentru căutarea codului în proiectul **rag-code-mcp**.

---

## ✅ Tool-uri disponibile și ordinea de utilizare

| Prioritate | Tool MCP (nume exact) | Când se folosește |
|------------|----------------------|-------------------|
| 🥇 **1** | `mcp_ragcode_rag_search` | Explorare semantică, concepte, cod necunoscut |
| 🥈 **2** | `mcp_ragcode_rag_find_usages` | Cine/unde folosește un simbol (funcție, tip, struct) |
| 🥉 **3** | `mcp_ragcode_rag_list_package_exports` | Ce exportă un pachet |
| 4️⃣ | `mcp_ragcode_rag_call_hierarchy` | Lanțul de apeluri (caller/callee) al unei funcții |
| 5️⃣ | `mcp_ragcode_rag_read_file_context` | Context precis dintr-un fișier la o linie dată |

> **IMPORTANT:** `mcp_ragcode_rag_search` este singurul tool care face atât căutare **semantică** cât și **exactă** (mode: `all`, `strict_code`, `strict_docs`). Nu există `hybrid_search` sau `search_code` separate — acestea nu există.

---

## 🔧 Parametri recomandați

### `mcp_ragcode_rag_search`
```json
{
  "query": "<descriere semantică sau termen exact>",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp",
  "limit": 5,
  "mode": "strict_code",
  "include_full_content": true
}
```
- `mode: "strict_code"` — doar cod sursă, ignoră docs
- `mode: "strict_docs"` — doar documentație/README
- `mode: "all"` (default) — tot

### `mcp_ragcode_rag_find_usages`
```json
{
  "symbol_name": "IndexWorkspace",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/internal/..."
}
```

### `mcp_ragcode_rag_call_hierarchy`
```json
{
  "symbol_name": "IndexWorkspace",
  "direction": "incoming",
  "depth": 2,
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/..."
}
```
- `direction: "incoming"` — cine apelează funcția
- `direction: "outgoing"` — ce apelează funcția

### `mcp_ragcode_rag_list_package_exports`
```json
{
  "package": "codetypes",
  "symbol_type": "type",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/..."
}
```

### `mcp_ragcode_rag_read_file_context`
```json
{
  "file_path": "/home/razvan/.../engine.go",
  "line_number": 42,
  "context_lines": 10
}
```

---

## ⛔ INTERZIS

| Tool interzis | De ce | Excepție |
|---------------|-------|----------|
| `grep_search` | Fără context semantic | doar pentru fișiere ne-indexate |
| `find_by_name` | Caută fișiere, nu cod | OK pentru a localiza fișiere |
| `view_file` fără context | Pierdere de timp | NUMAI după un search ragcode |

### Comportamente interzise:
1. ❌ **NU presupune** structura codului fără să cauți
2. ❌ **NU folosi grep** când ragcode poate răspunde
3. ❌ **NU naviga manual** prin directoare
4. ❌ **NU folosi tool-uri inexistente** (`mcp_ragcode_search_code`, `mcp_ragcode_hybrid_search`, `mcp_ragcode_get_function_details`, `mcp_ragcode_find_type_definition`, `mcp_ragcode_find_implementations`, `mcp_ragcode_get_code_context`) — **acestea nu există**

---

## 📋 Workflow standard

```
rag_search (înțelegere concept)
    ↓
rag_find_usages (impact analysis)
    ↓
rag_read_file_context (detalii precise)
    ↓
view_file (opțional, linii specifice)
```

---

## 🌐 Suport limbaje

### ✅ Complet indexate (folosește NUMAI ragcode):
- **Go** — parser complet, toate tool-urile funcționează
- **Python** — parser complet
- **PHP/Laravel** — parser complet cu suport Laravel
- **JavaScript/TypeScript** — indexare completă cu Tree-sitter

### ⚠️ Fallback permis:
- Fișiere generate sau ne-indexate explicit → `grep_search` ca backup

---

## ⚡ Quick Reference

```
🔍 Explorare semantică     → rag_search (mode: all)
🎯 Exact / cod pur         → rag_search (mode: strict_code)
📝 Documentație            → rag_search (mode: strict_docs)
🔗 Unde e folosit          → rag_find_usages
📞 Cine/ce apelează        → rag_call_hierarchy
📦 Exporturi pachet        → rag_list_package_exports
📄 Context linie exactă    → rag_read_file_context
```

---

## 📚 Exemple

Vezi [examples/search_patterns.md](examples/search_patterns.md) pentru exemple specifice proiectului.
