
# Board

Model of type board that creates a new board.

## Structure

`Board`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | This is the board ID. | getId(): string | setId(string id): void |
| `name` | `string` | Required | This is the name of the board. | getName(): string | setName(string name): void |
| `description` | `string` | Required | Describe what the board is about. | getDescription(): string | setDescription(string description): void |
| `owner` | [`Owner`](../../doc/models/owner.md) | Required | State who the owner of the board is. | getOwner(): Owner | setOwner(Owner owner): void |
| `privacy` | `string` | Required | Set privacy setting of the board. | getPrivacy(): string | setPrivacy(string privacy): void |

## Example (as JSON)

```json
{
  "id": "549755885175",
  "name": "Summer Recipes",
  "description": "My favorite summer recipes",
  "owner": {
    "username": "string"
  },
  "privacy": "PUBLIC"
}
```

