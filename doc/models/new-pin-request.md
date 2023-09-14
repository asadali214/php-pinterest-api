
# New Pin Request

## Structure

`NewPinRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `link` | `?string` | Optional | - | getLink(): ?string | setLink(?string link): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `dominantColor` | `?string` | Optional | - | getDominantColor(): ?string | setDominantColor(?string dominantColor): void |
| `altText` | `?string` | Optional | - | getAltText(): ?string | setAltText(?string altText): void |
| `boardId` | `string` | Required | - | getBoardId(): string | setBoardId(string boardId): void |
| `boardSectionId` | `?string` | Optional | - | getBoardSectionId(): ?string | setBoardSectionId(?string boardSectionId): void |
| `mediaSource` | [`MediaSourceFile`](../../doc/models/media-source-file.md) | Required | - | getMediaSource(): MediaSourceFile | setMediaSource(MediaSourceFile mediaSource): void |
| `parentPinId` | `?string` | Optional | - | getParentPinId(): ?string | setParentPinId(?string parentPinId): void |

## Example (as JSON)

```json
{
  "link": "https://www.pinterest.com/",
  "title": "string",
  "description": "string",
  "dominant_color": "#6E7874",
  "alt_text": "string",
  "board_id": "string",
  "board_section_id": "string",
  "media_source": {
    "source_type": "image_url",
    "url": "some public url"
  },
  "parent_pin_id": "string"
}
```

