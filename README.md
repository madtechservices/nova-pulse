# Nova Pulse

Nova Pulse is a custom tool for Laravel Nova that integrates Laravel Pulse, allowing you to debug your Laravel application directly from the Nova dashboard. This tool loads Laravel Pulse in a lightweight popup/lightbox style interface for quick access. Use at your own risk I am still learning. Very open for people to help me make this better like making it look like part of the nova dashboard instead of a popup.

## Features

- Integrates Laravel Pulse into Nova
- Simple installation and configuration
- Lightweight and easy to use

## Requirements

- Laravel: ^11.0
- Laravel Nova: ^4.0
- Laravel Pulse: ^1.0
- PHP: ^8.1

## Installation

1. **Install via Composer:**

   ```bash
   composer require madtechservices/nova-pulse
    ```

2. **Register the Tool:**

Add the tool to your NovaServiceProvider:

```php
public function tools()
{
    return [
        // Other tools...
        \Madtechservices\NovaPulse\NovaPulse::make(),
    ];
}
```

3. **Publish Configuration (optional)**
If the tool requires specific configuration, you can publish it with:

```bash
php artisan vendor:publish --tag=nova-pulse-config
```

## Usage
After installation, you'll find a "Nova Pulse" menu item in the Nova dashboard. Click it to open Laravel Pulse in a popup/lightbox style.

## Development
Would love this to just be a part of the dashboard and not in a popup style iframe. But I am not that good and still learning.
To contribute or report issues, follow the steps below:

### Clone the repository:

```bash
git clone https://github.com/madtechservices/nova-pulse.git
```

### Install dependencies:

```bash
npm install
composer install
```

### Compile assets:

```bash
npm run dev
```

### Contributing
We welcome contributions! Please follow these steps:

- Fork the repository.
- Create a feature branch.
- Submit a pull request with a clear description of your changes.

## License
Nova Pulse is open-sourced software licensed under the MIT license.