
# Board Request

## Structure

`BoardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `privacy` | `string` | Required | **Default**: `'SECRET'` | getPrivacy(): string | setPrivacy(string privacy): void |

## Example (as JSON)

```json
{
  "name": "Summer Recipes",
  "description": "My favorite summer recipes",
  "privacy": "SECRET"
}
```

