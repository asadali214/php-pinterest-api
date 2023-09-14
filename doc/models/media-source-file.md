
# Media Source File

Type to define media input.

## Structure

`MediaSourceFile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceType` | `string` | Required, Constant | States the type of the media input.<br>**Default**: `'image_url'` | getSourceType(): string | setSourceType(string sourceType): void |
| `url` | `string` | Required | This is the URL of the media. | getUrl(): string | setUrl(string url): void |

## Example (as JSON)

```json
{
  "source_type": "image_url",
  "url": "url4"
}
```

