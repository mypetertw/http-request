# http-request
### Php script with Curl to send or get json with API.

---

## Getting Started

Put `HttpRequest.php` to your project.

## Usage

### Include HTTP_REQUEST function and post $data with json
```php
$data = [
    "id" => $id,
    "field" => $field
];
$data = HTTP_REQUEST('<https-api-url>', json_encode($data));
```

### Render data

```php
echo $data['message']
```

### Render array data

```php
foreach ($data as $value) {
    echo $value['message'];
}
```
