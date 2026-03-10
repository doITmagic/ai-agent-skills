---
name: trello-status-updater
description: Use when a feature is successfully implemented, a PR is created, or a bug is declared fixed, to move the Trello card to the Done list
---

# Trello Status Updater

## Overview

Close the loop. When a task is finished, a PR is merged, or a bug is confirmed fixed, the Trello card must reflect this reality to keep the board accurate and historically meaningful.

**Core principle:** A completed task with no Trello update is invisible to the team.

## Process

### Step 1: Identify Completion Event
Triggered after the agent has verified success — tests pass, a PR has been opened, or the user confirms the fix works. This skill should always be paired with `verification-before-completion`.

### Step 2: Ensure Board is Ready
If `.trello.json` does not exist or the board is unverified:
- **REQUIRED SUB-SKILL:** Use `trello-board-initializer`

### Step 3: Find the Associated Card
Use `mcp_trello_search` to locate the Trello card related to the current task or bug. Search by the task name, feature name, or bug title used when the card was created.

### Step 4: Propose the Status Update
Ask the user ONE concise question:
> "The current work appears complete and verified. Should I move the card '[Card Name]' to the 'Done' list on Trello?"

Wait for explicit approval. Do NOT move the card without user consent.

### Step 5: Update the Card
Once approved:
- Call `mcp_trello_update_card` to change `idList` to the `Done` list ID.
- Optionally add a closing comment via `mcp_trello_comment_on_card` with:
  - The relevant Git commit SHA (if available)
  - A one-line summary of the resolution

### Step 6: Confirm
Report back that the card has been moved and provide the card name.

## Red Flags

- Never move a card to Done without running verification first (`verification-before-completion`).
- Never move the wrong card. If unsure which card matches the current work, ask the user.
- If the card cannot be found, inform the user rather than skipping silently.
