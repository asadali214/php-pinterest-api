
# All Boards

## Structure

`AllBoards`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`Board[]`](../../doc/models/board.md) | Required | - | getItems(): array | setItems(array items): void |
| `bookmark` | `string` | Required | - | getBookmark(): string | setBookmark(string bookmark): void |

## Example (as JSON)

```json
{
  "items": [
    {
      "id": "549755885175",
      "name": "Summer Recipes",
      "description": "My favorite summer recipes",
      "owner": {
        "username": "string"
      },
      "privacy": "PUBLIC"
    }
  ],
  "bookmark": "string"
}
```

