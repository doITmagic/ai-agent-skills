---
name: trello-bug-reporter
description: Use when a bug is encountered, an error logs, or tests fail, to proactively track the issue in Trello
---

# Proactive Bug Reporter

## Overview

Never lose track of a bug. When an exception is thrown, a test fails unexpectedly, or the user reports anomalous behavior, capture it in Trello immediately — before starting to fix it.

**Core principle:** Track first, fix second.

## Process

### Step 1: Identify the Bug
Analyze the error or failure provided by the user or terminal. Extract:
- Error message / stack trace
- File and line number affected
- Reproduction conditions (if known)

### Step 2: Ensure Board is Ready
If `.trello.json` does not exist or the board is unverified:
- **REQUIRED SUB-SKILL:** Use `trello-board-initializer`

### Step 3: Propose Trello Action
Ask the user ONE concise question before doing anything:
> "I detected a bug related to [X]. Would you like me to create a card on the Bugs list in Trello to track it?"

Wait for explicit approval. Do NOT create the card if the user declines.

### Step 4: Create the Bug Card
Once approved, call `mcp_trello_create_card` on the `Bugs` list:
- **Title:** `[BUG] Short description of the error`
- **Description:** Include:
  - Full stack trace or error log
  - Relevant file paths and line numbers
  - Initial hypothesis or suspected root cause (apply principles from `systematic-debugging`)

### Step 5: Report and Continue
- Confirm to the user that the card was created (show its title).
- Resume normal debugging workflow from where you left off.

## Red Flags

- Never create a bug card without user approval.
- Never create duplicate cards for the same bug — search first if in doubt.
- Do not skip this skill when a bug is obvious. "Simple bugs" need tracking too.
