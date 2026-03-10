---
name: trello-board-initializer
description: Use when needing to determine the correct Trello board for a project or ensuring the required lists (Bugs, To Do, Doing, Done) exist before using other Trello skills
---

# Trello Board Initializer

## Overview

Ensure the agent knows which Trello board corresponds to the current project and that the board has the necessary list structure to support proactive task and bug tracking.

Called by other Trello skills whenever the board context is unknown or unverified.

## Phase 1: Board Identification

1. Check if a `.trello.json` file exists in the repository root.
2. If it exists, read `"board_id"` from it and proceed to Phase 2.
3. If it does **not** exist:
   - Call `mcp_trello_search` using the repository folder name to find a matching board.
   - If a distinct match is found, ask the user: "I found a Trello board named [Board Name]. Should I link this project to it?"
   - If no match is found or the user declines, ask the user to provide the Trello Board ID or URL directly.
   - Create `.trello.json` locally with the content: `{ "board_id": "the-id" }`.
   - **Do NOT commit this file automatically.**

## Phase 2: Structure Validation

Once the `board_id` is known, use `mcp_trello_get_lists` to verify the board's list structure.

1. The board MUST have lists logically matching:
   - `To Do` (or `Backlog`)
   - `Doing` (or `In Progress`)
   - `Bugs` (or `Issues`)
   - `Done` (or `Completed`, `Tested`)

2. If the user's board has lists that semantically fit (e.g. `URGENT TO DO` instead of `To Do`), map your actions to those existing lists without creating duplicates.

3. If a critical list (e.g. `Bugs`) is completely absent, ask the user:
   > "I noticed the board has no list for 'Bugs'. Would you like me to create it for better issue tracking?"

**Stop here and return control to the orchestrator (`using-trello`) or the calling skill.**

## Notes

- This skill is a utility, not an action skill. It discovers and validates — it does not create cards.
- The `.trello.json` file should be added to `.gitignore` if it contains sensitive board IDs.
