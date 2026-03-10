---
name: trello-task-creator
description: Use when a new feature is discussed, an implementation plan is created, or tasks are identified, to extract them into Trello cards
---

# Proactive Task Creator

## Overview

Whenever a new feature is discussed, an architectural document is created, or a plan is mapped out, extract the actionable steps and propose placing them as Trello cards in the `To Do` list.

**Core principle:** Every agreed plan should have a corresponding Trello trail.

## Process

### Step 1: Observe Plan Completion
Wait until the design or brainstorming phase concludes and a concrete list of steps or tasks is established. Do not interrupt mid-brainstorm.

### Step 2: Ensure Board is Ready
If `.trello.json` does not exist or the board is unverified:
- **REQUIRED SUB-SKILL:** Use `trello-board-initializer`

### Step 3: Propose Trello Action
Ask the user ONE concise question:
> "The plan is ready. Should I automatically create Trello cards on the 'To Do' list for each task above?"

Wait for explicit approval. Do NOT create any cards without user consent.

### Step 4: Create the Cards
Once approved, loop through the identified tasks and call `mcp_trello_create_card` for each on the `To Do` list:
- **Title:** `Task N: [Component / Feature Name]`
- **Description:** Include:
  - Brief summary of what needs to be done
  - Files to create or modify (if known)
  - Relevant tests to write or run

### Step 5: Confirm
Report back the list of created card titles so the user can verify everything was captured correctly.

## Notes

- One card per task. Do not bundle unrelated work into a single card.
- If the plan has sub-tasks, nest them in the card description as a checklist.
- Cards created here will be moved to `Doing` and then `Done` by `trello-status-updater` as work progresses.
