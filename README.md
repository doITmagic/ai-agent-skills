# ai-agent-skills

> **A curated collection of skill packs for AI coding assistants. Each skill is a self-contained folder of structured knowledge — architectural rules, ready-to-use code examples, diagnostic workflows, and domain-specific documentation — designed to make any AI model significantly more accurate and useful when working in a specific technology stack.**

Skills work with **any AI assistant** that can read files from your project. You don't need any particular tool installed to benefit from them.

## Compatible AI Tools

Skills are automatically detected in the standard directories used by popular AI tools:

| AI Tool | Skills Directory | Auto-detected |
|---------|-----------------|---------------|
| **[Antigravity](https://github.com/doITmagic/rag-code-mcp)** (rag-code-mcp) | `.agent/skills/` | ✅ |
| **[Cursor](https://cursor.com)** | `.cursor/skills/` | ✅ |
| **[Claude](https://claude.ai)** (Anthropic) | `.claude/skills/` | ✅ |
| **[Windsurf](https://codeium.com/windsurf)** (Codeium) | `.windsurf/skills/` | ✅ |
| **[GitHub Copilot](https://github.com/features/copilot)** / VS Code | `.agents/skills/` | ✅ |
| **[OpenCode](https://opencode.ai)** | `.agent/skills/` | ✅ |

Drop a skill folder into any of these directories and your AI assistant will find it automatically on the next session.

---

## The Problem Skills Solve

AI models are general-purpose. They know a little about everything, which means they also hallucinate a lot about specific, niche tools. When you ask a model to help you build something in Oxygen Builder, WooCommerce, or any other specialized platform, you'll often get plausible-sounding answers that are simply wrong — wrong API methods, wrong conventions, wrong assumptions about how the tool works.

Skills fix this by giving the AI a curated reference point before it starts working. Instead of guessing based on pre-training data, the model reads a concise, verified knowledge base and produces answers grounded in actual reality for that tool.

The result: fewer hallucinations, less back-and-forth, faster development.

---

## How Skills Work

A skill is just a folder. Drop it into your project under `.agent/skills/<skill-name>/`, and any AI assistant with access to your file system can read it.

The key file is `SKILL.md` — a structured markdown document that tells the AI:
- How the technology works architecturally
- What conventions and patterns to follow
- What common mistakes to avoid
- Where to find deeper examples and code snippets

Additional subfolders extend the skill further:

```
.agent/skills/
└── oxygen-builder/
    ├── SKILL.md         # Core rules and architecture guide
    ├── examples/        # Copy-paste code snippets
    ├── workflows/       # Step-by-step checklists for common tasks
    ├── scripts/         # Utility scripts the AI can run on your behalf
    └── topics/          # Deep knowledge base (indexed documentation)
```

---

## Available Skills

| Skill | Description | Tags |
|-------|-------------|------|
| [oxygen-builder](skills/oxygen-builder/) | Oxygen Builder for WordPress — OxyEl API, Conditions API, Dynamic Data, WooCommerce integration, CSS architecture, templating engine internals | `wordpress` `oxygen` `php` |
| [go-best-practices](skills/go-best-practices/) | Go development patterns, project structure, idiomatic practices, concurrency and testing conventions | `go` `golang` |
| [php-laravel](skills/php-laravel/) | PHP and Laravel patterns — Service Providers, Eloquent, Controllers, Feature & Unit testing | `php` `laravel` |
| [python-best-practices](skills/python-best-practices/) | Python clean code patterns, type hinting, async usage, pytest, and dependency management | `python` |
| [debugging-guide](skills/debugging-guide/) | Workflow for fast root-cause analysis using ragcode tools — locate, contextualize, analyze | `debugging` `workflow` |
| [ragcode-priority](skills/ragcode-priority/) | Instructs the AI to prioritize ragcode MCP tools over generic search for all code lookups | `ragcode` `mcp` |
| [ragcode-sse](skills/ragcode-sse/) | How to call RagCode MCP over SSE transport without additional MCP configuration | `ragcode` `sse` |
| [ragcode-update](skills/ragcode-update/) | Guide for managing ragcode updates, health checks, and skill management | `ragcode` `maintenance` |
| **— Trello Integration —** | | |
| [using-trello](skills/using-trello/) | Master orchestrator for the Trello MCP workflow — routes bug reports, task creation, and status updates to the correct sub-skill | `trello` `mcp` `workflow` |
| [trello-board-initializer](skills/trello-board-initializer/) | Identifies the correct Trello board for the project and validates that the required lists (Bugs, To Do, Doing, Done) exist | `trello` `mcp` `setup` |
| [trello-bug-reporter](skills/trello-bug-reporter/) | Proactively creates a Trello bug card when an error is thrown, a test fails, or the user reports anomalous behavior | `trello` `mcp` `debugging` |
| [trello-task-creator](skills/trello-task-creator/) | Extracts actionable tasks from plans or feature discussions and proposes creating Trello cards in the To Do list | `trello` `mcp` `planning` |
| [trello-status-updater](skills/trello-status-updater/) | Moves Trello cards to Done when a feature is implemented, a PR is created, or a bug is confirmed fixed | `trello` `mcp` `workflow` |

---

## Using a Skill

### Without any tooling (manual)

Download or clone the skill folder you need and place it in your project:

```bash
# Sparse-clone only the skill you need
git clone --filter=blob:none --sparse https://github.com/doITmagic/ai-agent-skills.git
cd ai-agent-skills
git sparse-checkout set skills/oxygen-builder

# Place it in your project
cp -r skills/oxygen-builder /path/to/your-project/.agent/skills/oxygen-builder
```

From this point, any AI assistant working in your project can read the skill files when relevant. Tell it to look at `.agent/skills/oxygen-builder/SKILL.md` at the start of a session, or simply mention the technology — most context-aware assistants will find it automatically.

### With rag-code-mcp

[rag-code-mcp](https://github.com/doITmagic/rag-code-mcp) handles the entire installation automatically. No directory creation, no cloning, no copying. You tell your AI assistant which skill you need, and it takes care of the rest — downloading the skill files, placing them in the right location inside your project, and indexing the knowledge base into a local vector database.

```json
{ "tool": "rag_install_skill", "skill_id": "oxygen-builder" }
```

That single instruction is all it takes. From that point forward, the AI works with indexed, on-demand retrieval. Instead of loading the entire skill into the context window at once, it fetches only the sections relevant to the current task. The practical effect is meaningful: fewer tokens consumed per interaction, faster responses, and a model that stays focused rather than getting buried in irrelevant context.

Whether you use rag-code-mcp or install manually, the skill itself is identical. rag-code-mcp is an optimization layer, not a requirement.

---

## Contributing

If you've built something with a specialized tool and want to share what you've learned — the real architectural rules, the real gotchas, the patterns that actually work — consider turning it into a skill.

The format is simple. The `SKILL.md` frontmatter requires only a `name` and `description`:

```yaml
---
name: your-skill-name
description: One sentence describing what this skill covers.
---
```

Add your skill under `skills/your-skill-name/`, update `registry.json`, and open a pull request.

---

## License

MIT © [doITmagic](https://github.com/doITmagic)
