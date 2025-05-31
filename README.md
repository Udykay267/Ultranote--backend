# UltraNote Backend Optimization

This PHP + MySQL backend simulates load-aware API responses.
It throttles heavy requests when system load exceeds the limit.

## Features:
- Dynamic load balancing using `sys_getloadavg()`
- Modular, testable codebase
- Sample MySQL data with demo API

## API Endpoints:
- `/index.php` → returns data + current load
- `/simulate_load.php` → manually overloads CPU (for testing throttling)

## Installation:
1. Import `sql/sample_data.sql` into your MySQL server.
2. Configure DB in `config/database.php`
3. Run the app in your PHP server (e.g., XAMPP, MAMP)

## Sample Output:
```json
{
  "status": "success",
  "load": 31,
  "results": [
    {"id": 1, "name": "Node Alpha", "data": "Payload optimized"},
    ...
  ]
}
```