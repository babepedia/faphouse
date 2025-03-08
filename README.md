# FapHouse Data Scraper

A PHP-based web scraper for collecting and managing video metadata from FapHouse.

## Overview

This tool is designed to scrape and organize video data from FapHouse, including:
- Video metadata (titles, slugs, durations, quality)
- Category/studio information
- Premium content detection
- Content organization and storage

## Features

- Studio and category crawling
- Video metadata extraction
- Database storage of scraped content
- Content organization by categories and studios
- Premium content detection
- Efficient handling of pagination
- Avoids re-scraping existing content

## Requirements

- PHP 7.0+
- MySQL/MariaDB
- PHP Extensions:
  - mysqli
  - curl
  - mbstring
  - Simple HTML DOM Parser

## Database Structure

The script uses several database tables:
- `faphouse`: Stores video metadata
- `faphouse_studios`: Stores studio information
- `faphouse_cats`: Stores category information

## Configuration

Before using, update the database connection parameters:

```php
$mysqli = new mysqli("your_db_host", "your_username", "your_password", "your_database");
```

## Usage

The script has several operational modes that can be toggled by editing the control flags at the top of the script:

### Studio Scraping
Enable by setting the studio scraping flag to `1`:

```php
// channels list
if(1) {
    // Studio scraping code
}
```

### Category Scraping
Enable by setting the category scraping flag to `1`:

```php
// cat list
if(1) {
    // Category scraping code
}
```

### Video Data Collection
Enable by setting the video data collection flag to `1`:

```php
if(1) {
    // Video data collection code
}
```

## Functions

### `fh_chkvdo_exist($videoid)`
Checks if a video already exists in the database.

### `fh_findvideo($resp, $cardq)`
Parses HTML to extract video information from pages.

### `fh_get_video_data($videoslug)`
Scrapes detailed information for a specific video.

## Notes

- The script includes error reporting and performance timing
- User-Agent and cookies are set to mimic browser behavior
- Rate limiting is not implemented, consider adding delays between requests
- This is for educational and personal use only

## Disclaimer

This tool is intended for educational purposes only. Users are responsible for complying with all applicable laws and website terms of service when using this scraper.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
