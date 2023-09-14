# Boards

```php
$boardsController = $client->getBoardsController();
```

## Class Name

`BoardsController`

## Methods

* [Create Board](../../doc/controllers/boards.md#create-board)
* [Get All Boards](../../doc/controllers/boards.md#get-all-boards)


# Create Board

Endpoint to create a new board

```php
function createBoard(BoardRequest $boardRequest): Board
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `boardRequest` | [`BoardRequest`](../../doc/models/board-request.md) | Body, Required | name of the board |

## Response Type

[`Board`](../../doc/models/board.md)

## Example Usage

```php
$boardRequest = BoardRequestBuilder::init(
    'Summer Recipes',
    'My favorite summer recipes',
    'SECRET'
)->build();

$result = $boardsController->createBoard($boardRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The board name is invalid or duplicate. | `ApiException` |


# Get All Boards

List all Pinterest boards

```php
function getAllBoards(): AllBoards
```

## Response Type

[`AllBoards`](../../doc/models/all-boards.md)

## Example Usage

```php
$result = $boardsController->getAllBoards();
```

## Example Response *(as JSON)*

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

