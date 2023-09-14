
# New Pin

Model to create a new pin.

## Structure

`NewPin`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | ID of the new pin. | getId(): string | setId(string id): void |
| `createdAt` | `string` | Required | Timestamp at which the pin is created. | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `link` | `string` | Required | Link to the created pin. | getLink(): string | setLink(string link): void |
| `title` | `string` | Required | Title of the created pin. | getTitle(): string | setTitle(string title): void |
| `description` | `string` | Required | Describes what the pin is about. | getDescription(): string | setDescription(string description): void |
| `dominantColor` | `string` | Required | States the dominant color of the created pin. | getDominantColor(): string | setDominantColor(string dominantColor): void |
| `altText` | `string` | Required | ALT text of the created pin. | getAltText(): string | setAltText(string altText): void |
| `boardId` | `string` | Required | This is the board ID of the board in which the pin was created. | getBoardId(): string | setBoardId(string boardId): void |
| `boardSectionId` | `string` | Required | This is the board section ID of the parent board. | getBoardSectionId(): string | setBoardSectionId(string boardSectionId): void |
| `boardOwner` | [`Owner`](../../doc/models/owner.md) | Required | States the owner of the board in which the pin is created. | getBoardOwner(): Owner | setBoardOwner(Owner boardOwner): void |
| `media` | [`Media`](../../doc/models/media.md) | Required | Defines the type of media. | getMedia(): Media | setMedia(Media media): void |
| `parentPinId` | `string` | Required | This is the ID of parent pin. | getParentPinId(): string | setParentPinId(string parentPinId): void |

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

