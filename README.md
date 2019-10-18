# http-request
### Php script with Curl to send or get json with API.

---

## Getting Started

Put `HttpRequest.php` to your project.

## Usage

Include `HTTP_REQUEST` function and `POST` your `$data` with json

```php
$data = [
    'id' => $id,
    'field' => $field
];
$data = HTTP_REQUEST('<https-api-url>', json_encode($data));
```

Output:

```php
echo $data['message']
```

Output array:

```php
foreach ($data as $value) {
    echo $value['message'];
}
```
