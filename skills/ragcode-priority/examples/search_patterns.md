# 📚 Ragcode Search Patterns for rag-code-mcp

Exemple practice pentru căutarea în codebase-ul rag-code-mcp.

> **ATENȚIE:** Tool-urile corecte sunt `mcp_ragcode_rag_*` — nu există `search_code`, `hybrid_search`, `get_function_details`, `find_type_definition`, `find_implementations` sau `get_code_context`.

---

## 🔍 Explorare semantică cu `rag_search`

### Găsește toți analyzerii de limbaje
```json
{
  "tool": "mcp_ragcode_rag_search",
  "query": "language analyzer implementation CodeAnalyzer",
  "mode": "strict_code",
  "limit": 10,
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp"
}
```

### Găsește analyzer-ul Go
```json
{
  "tool": "mcp_ragcode_rag_search",
  "query": "Go AST parsing analyzer",
  "mode": "strict_code",
  "limit": 5
}
```

### Caută un tip/struct specific
```json
{
  "tool": "mcp_ragcode_rag_search",
  "query": "Symbol struct definition codetypes",
  "mode": "strict_code",
  "include_full_content": true
}
```

### Caută cu termen exact (funcție, eroare, constantă)
```json
{
  "tool": "mcp_ragcode_rag_search",
  "query": "func IndexWorkspace",
  "mode": "strict_code",
  "min_score": 0.7
}
```

---

## 🔗 Găsire utilizări cu `rag_find_usages`

### Unde este apelat IndexWorkspace?
```json
{
  "tool": "mcp_ragcode_rag_find_usages",
  "symbol_name": "IndexWorkspace",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/pkg/indexer/index_status.go"
}
```

### Cine implementează interfața PathAnalyzer?
```json
{
  "tool": "mcp_ragcode_rag_find_usages",
  "symbol_name": "PathAnalyzer",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/..."
}
```

### Unde este folosit tipul Symbol?
```json
{
  "tool": "mcp_ragcode_rag_find_usages",
  "symbol_name": "Symbol"
}
```

---

## 📞 Ierarhie de apeluri cu `rag_call_hierarchy`

### Cine apelează IndexWorkspace? (incoming)
```json
{
  "tool": "mcp_ragcode_rag_call_hierarchy",
  "symbol_name": "IndexWorkspace",
  "direction": "incoming",
  "depth": 2,
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/pkg/indexer/index_status.go"
}
```

### Ce apelează funcția AnalyzePackage? (outgoing)
```json
{
  "tool": "mcp_ragcode_rag_call_hierarchy",
  "symbol_name": "AnalyzePackage",
  "direction": "outgoing",
  "depth": 3
}
```

---

## 📦 Explorare pachete cu `rag_list_package_exports`

### Ce exportă pachetul ragcode?
```json
{
  "tool": "mcp_ragcode_rag_list_package_exports",
  "package": "ragcode",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/..."
}
```

### Ce tipuri are pachetul codetypes?
```json
{
  "tool": "mcp_ragcode_rag_list_package_exports",
  "package": "codetypes",
  "symbol_type": "type"
}
```

### Ce funcții are pachetul workspace?
```json
{
  "tool": "mcp_ragcode_rag_list_package_exports",
  "package": "workspace",
  "symbol_type": "function"
}
```

---

## 📄 Context precis cu `rag_read_file_context`

### Citește codul în jurul unei linii
```json
{
  "tool": "mcp_ragcode_rag_read_file_context",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/internal/service/engine/engine.go",
  "line_number": 42,
  "context_lines": 15
}
```

### Citește un range specific
```json
{
  "tool": "mcp_ragcode_rag_read_file_context",
  "file_path": "/home/razvan/go/src/github.com/doITmagic/rag-code-mcp/pkg/parser/python/extract.go",
  "start_line": 100,
  "end_line": 150
}
```

---

## 🔄 Workflow-uri comune

### Workflow 1: Înțelegerea unei funcționalități
```
# Pas 1: Caută semantic conceptul
rag_search → query: "language detection workspace indexing"

# Pas 2: Găsește unde e utilizată funcția principală
rag_find_usages → symbol_name: "DetectLanguages"

# Pas 3: Înțelege ierarhia de apeluri
rag_call_hierarchy → symbol_name: "DetectLanguages", direction: "incoming"

# Pas 4: Citește codul precis
rag_read_file_context → file_path: <fișier din pas 1>, line_number: <linia>
```

### Workflow 2: Debugging
```
# Pas 1: Caută codul relevant
rag_search → query: "indexing error handling workspace", mode: "strict_code"

# Pas 2: Găsește mesajul exact de eroare
rag_search → query: "workspace not indexed", min_score: 0.8

# Pas 3: Citește contextul din jurulfișierului
rag_read_file_context → file_path: <din pas 2>, line_number: <linia>, context_lines: 20
```

### Workflow 3: Adăugarea unei funcționalități noi
```
# Pas 1: Găsește implementări similare
rag_search → query: "analyzer implementation for language"

# Pas 2: Înțelege interfața
rag_search → query: "PathAnalyzer interface", mode: "strict_code", include_full_content: true

# Pas 3: Găsește implementările existente
rag_find_usages → symbol_name: "PathAnalyzer"
```

---

## 📝 Sfaturi

1. **Fii semantic**: `"authentication middleware"` nu `"auth"`
2. **Începe larg**: `rag_search` mai întâi, narrowing cu celelalte tool-uri
3. **Specifică file_path**: ajută MCP-ul să detecteze workspace-ul mai rapid
4. **Folosește `include_full_content: true`**: când vrei codul complet al funcțiilor găsite
5. **`min_score`**: setează `0.7+` pentru potriviri exacte, lasă implicit pentru explorare
