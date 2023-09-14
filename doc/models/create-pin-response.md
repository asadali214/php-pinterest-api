
# Create Pin Response

## Structure

`CreatePinResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `link` | `string` | Required | - | getLink(): string | setLink(string link): void |
| `title` | `string` | Required | - | getTitle(): string | setTitle(string title): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `dominantColor` | `string` | Required | - | getDominantColor(): string | setDominantColor(string dominantColor): void |
| `altText` | `string` | Required | - | getAltText(): string | setAltText(string altText): void |
| `boardId` | `string` | Required | - | getBoardId(): string | setBoardId(string boardId): void |
| `boardSectionId` | `string` | Required | - | getBoardSectionId(): string | setBoardSectionId(string boardSectionId): void |
| `boardOwner` | [`Owner`](../../doc/models/owner.md) | Required | - | getBoardOwner(): Owner | setBoardOwner(Owner boardOwner): void |
| `media` | [`Media`](../../doc/models/media.md) | Required | - | getMedia(): Media | setMedia(Media media): void |
| `parentPinId` | `string` | Required | - | getParentPinId(): string | setParentPinId(string parentPinId): void |

## Example (as JSON)

```json
{
  "id": "813744226420795884",
  "created_at": "01/01/2020 20:10:40",
  "link": "https://www.pinterest.com/",
  "title": "string",
  "description": "string",
  "dominant_color": "#6E7874",
  "alt_text": "string",
  "board_id": "string",
  "board_section_id": "string",
  "board_owner": {
    "username": "string"
  },
  "media": {
    "media_type": "string"
  },
  "parent_pin_id": "string"
}
```

