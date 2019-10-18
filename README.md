# http-request
### Php Script for Git Pull in your web server

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
<?=$data['message'];?>
```

### Render array data

foreach ($data as $value) {
    echo $value['message'];
}
