# Simple PHP SlideShow Site

Dirt simple PHP file that will allow a user to loop through a slideshow with audio files

## Installation

1. Copy [index.html](./public-html/index.php) to your web server
2. Create a folder called `audio` in the same directory as `index.php`
3. Copy your audio files into the `audio` folder and number them 1.mp3, 2.mp3, etc.
4. Create a folder called `img` in the same directory as `index.php`
5. Copy your image files into the `img` folder and number them 1.jpg, 2.jpg, etc.

## Settings

To change the file extensions update the following lines in `index.php` (lines 7-8)

```php
    $img_ext = 'jpg'; // replace me
    $audio_ext = 'm4a'; // replace me
```

Note that if you update the audio you may also have to update it in the HTML

```html

```