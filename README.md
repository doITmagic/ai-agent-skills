# 🧠 doITmagic / ai-agent-skills

> **A community registry of AI agent skill packs for [rag-code-mcp](https://github.com/doITmagic/rag-code-mcp).**

Each skill transforms an AI agent into a domain expert — providing structured rules, code examples, executable scripts, diagnostic workflows and a localized knowledge base, all packaged as a portable folder.

---

## 📦 Available Skills

| ID | Description | Tags |
|----|-------------|------|
| [`oxygen-builder`](skills/oxygen-builder/) | Advanced Oxygen Builder development guide: OxyEl API, Conditions API, Dynamic Data, WooCommerce integration, CSS patterns. | `wordpress` `oxygen` `php` |

---

## 🚀 How to Install a Skill

### Option 1: Via rag-code-mcp MCP Tool (Recommended)
When `rag-code-mcp` adds remote registry support, use:
```json
{ "tool": "rag_install_skill", "skill_id": "oxygen-builder" }
```

### Option 2: Manual Install
Clone or download the desired skill folder directly into your project's `.agent/skills/` directory:

```bash
# Clone only the specific skill you need (sparse checkout)
git clone --filter=blob:none --sparse https://github.com/doITmagic/ai-agent-skills.git
cd ai-agent-skills
git sparse-checkout set skills/oxygen-builder

# Copy to your project
cp -r skills/oxygen-builder /path/to/your-project/.agent/skills/oxygen-builder
```

---

## 📁 Skill Structure Convention

Each skill **must** follow this folder structure to be compatible with `rag-code-mcp`:

```
skills/
└── {skill-id}/
    ├── SKILL.md          # REQUIRED: Main knowledge file with YAML frontmatter (name, description)
    ├── examples/         # OPTIONAL: Ready-to-use code snippets
    ├── workflows/        # OPTIONAL: Step-by-step procedural guides for AI agents
    ├── scripts/          # OPTIONAL: Bash/Python utilities the AI can execute
    └── topics/           # OPTIONAL: Deep-dive knowledge base (Markdown files for RAG indexing)
```

### SKILL.md Required Frontmatter
```yaml
---
name: skill-id
description: Short description of what this skill teaches the AI.
---
```

---

## 🤝 Contributing

1. Fork this repository.
2. Create your skill folder under `skills/{your-skill-id}/`.
3. Ensure `SKILL.md` has the required YAML frontmatter.
4. Add your skill entry to `registry.json`.
5. Open a Pull Request!

---

## 📄 License

MIT © [doITmagic](https://github.com/doITmagic)
