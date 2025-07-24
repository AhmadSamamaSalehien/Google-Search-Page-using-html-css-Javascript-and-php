# Google-Search-Page-using-html-css-Javascript-and-php
I made this website using html, css, javascript and php

Google Search Clone with Voice Input Project

Overview

This project is a Google Search clone built using PHP, HTML, CSS, and JavaScript, with advanced features like voice input and dark mode. It integrates the Google Custom Search JSON API to fetch and display search results, mimicking Google's interface with a responsive design, animated loading indicators, and a dynamic top bar with a Google-inspired gradient. The project supports voice search with wake word detection ("ok") and includes a toggle for light and dark themes.

Features

Responsive Design: Adapts to various screen sizes using CSS media queries and flexible layouts (flex, percentage-based widths) for desktops, tablets, and mobiles.
Search Functionality: Fetches results from the Google Custom Search JSON API (search.php) and displays them with titles, URLs, and snippets (results-container, result).
Voice Input: Supports voice search (toggleVoiceSearch) using Web Speech API with wake word detection ("ok") via webkitSpeechRecognition.
Dark Mode: Toggleable light/dark themes (dark-mode-toggle) with CSS custom properties (--bg-color, --text-color, etc.) and local storage persistence.
Animated UI:
Google-inspired gradient top bar (animate) with animation (animateBackground).
Loading animation with colored dots (loading-container, dot) during API requests.


Navigation: Top navigation bar (top-nav) with links and buttons for Google Apps, Sign In, and Dark Mode toggle.
Footer: Fixed footer (footer) with links to About, Advertising, Business, Privacy, Terms, and Settings.
Error Handling: Displays user-friendly messages for empty queries, API errors, or microphone permission issues (status-message, error-message).

Technologies Used

PHP: Backend script (search.php) to handle API requests and JSON responses.
HTML5: For semantic structure and content.
CSS3: For styling, responsive design, animations (@keyframes), and custom properties (:root, .dark-mode).
JavaScript: For client-side interactivity, voice recognition, and API integration (index.php).
External Resources:
Google Custom Search JSON API (https://www.googleapis.com/customsearch/v1).
API Key: AIzaSyBTCZBDrgxOYstLSrXisxm23RqfDXPp0Q0.
Custom Search Engine ID: 66c11f09da19446ce.
Font Awesome CDN (https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css) for icons (fa-magnifying-glass, fa-user).
Images: Google logo (https://i.postimg.cc/QCFhZpz3/google-logo.png), microphone icon (https://i.postimg.cc/7YTwBn71/mic.png), Google Apps icon (https://i.postimg.cc/WbMbN73N/993522.avif).



File Structure

index.php: Main file containing HTML, inline CSS, and JavaScript for the search interface, dark mode toggle, and voice input.
search.php: Backend PHP script to handle API requests to Google Custom Search JSON API.
No additional folders: Images and Font Awesome are loaded via external URLs; no local images/ folder is required.

Naming Conventions

Classes:
google-main-container: Main content wrapper.
top-nav, main, logo-container, search, results-container, footer: Structural components.
animate, dot: Animated elements for top bar and loading indicators.
signbtn, dark-mode-toggle, search-btn: Interactive buttons.
result, url, status-message, error-message: Search results and status messages.
left-footer, right-footer: Footer navigation sections.


IDs: searchInput, results, statusMessage, microphone, virtualAssistant, google-apps for JavaScript interactions.
CSS Variables: --bg-color, --text-color, --search-bg, --link-color, etc., for theming.
Other: fa-* for Font Awesome icons (e.g., fa-magnifying-glass, fa-user).

Setup Instructions

Clone or Download:
Clone the repository or download index.php and search.php.


File Placement:
Place index.php and search.php in the project root.


Dependencies:
Ensure a PHP server (e.g., Apache, XAMPP) is running to serve index.php and search.php.
Requires an internet connection to load:
Google Custom Search JSON API (https://www.googleapis.com/customsearch/v1).
Font Awesome CDN (https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css).
External images for logo, microphone, and Google Apps.




API Configuration:
The API key (AIzaSyBTCZBDrgxOYstLSrXisxm23RqfDXPp0Q0) and Custom Search Engine ID (66c11f09da19446ce) are embedded in search.php. Replace with your own from Google Cloud Console for production use.


Run the Project:
Deploy on a PHP-enabled server (e.g., localhost via XAMPP).
Access index.php in a browser (preferably Chrome for voice input) to view the search interface.
Ensure HTTPS or localhost for voice input, as Web Speech API requires a secure context.



Usage

Search: Enter a query in the search bar (searchInput) and press "Enter" to fetch results via search.php. Results display in results-container with clickable titles, URLs, and snippets.
Voice Input:
Say "ok" to activate voice search (listens via wakeWordRecognition).
Click the microphone icon (microphone) to toggle voice input (toggleVoiceSearch).
Speak your query; the transcript appears in searchInput, and results are fetched automatically.


Dark Mode: Click "Toggle Dark Mode" (dark-mode-toggle) to switch between light and dark themes, with state saved in localStorage.
Navigation: Use top-nav links or footer links for static navigation (e.g., About, Privacy).
Status Messages: View feedback (status-message) for voice input status, errors (error-message), or empty query warnings.

Customization

Styling: Modify CSS in index.php to adjust colors, fonts, or layout.
Light theme: --bg-color: #fff, --text-color: #000, --search-bg: #fff.
Dark theme: --bg-color: #202124, --text-color: #bdc1c6, --search-bg: #303134.
Gradient: --google-gradient for animated top bar.


Content: Update images, links, or placeholder text in index.php.
API: Replace API key and Custom Search Engine ID in search.php with your own.
Voice Input: Adjust wakeWordRecognition in index.php to change the wake word (e.g., from "ok" to another phrase).
Animations: Modify @keyframes animateBackground or .loading-container .dot animations for different effects.

Notes

API Limits: The Google Custom Search JSON API has a free quota (100 queries/day). Monitor usage or upgrade to a paid plan for production.
Voice Input: Requires Chrome (or WebKit browsers) and a secure context (HTTPS or localhost). Microphone permission must be granted for webkitSpeechRecognition to work.
PHP Server: Requires a PHP-enabled server for search.php to handle API requests.
Security: Replace the embedded API key and CSE ID with your own to avoid unauthorized usage.
Browser Compatibility: Optimized for modern browsers, with voice input best supported in Chrome.
Static Links: Top-nav and footer links (e.g., About, Privacy) are static and require additional pages for functionality.

Credits

Designed by: Ahmad Samama
API: Google Custom Search JSON API
Icons: Font Awesome
Images: Google logo, microphone, and Google Apps icon (hosted on postimg.cc)
Fonts: Arial (system font)

License
© Copyright 2025 Ahmad Samama. All Rights Reserved.


I am sharing Some Images of the project below:

1. Lightmode

<img width="1208" height="679" alt="GoogleL" src="https://github.com/user-attachments/assets/c11ae65b-4d16-4ce8-824a-ba62c33560ec" />

2. Darkmode

<img width="1440" height="811" alt="GoogleD" src="https://github.com/user-attachments/assets/fdc7ecbb-f5fa-4d30-b08f-d26809df7489" />

3. Search Interface

<img width="1440" height="812" alt="Search" src="https://github.com/user-attachments/assets/5758561d-4ab7-4901-ad59-672bd8a1ced2" />

4. Voice Search

<img width="1087" height="614" alt="VoiceSearch" src="https://github.com/user-attachments/assets/49c6f355-4bb1-43c5-b6f0-513dbdeb6b9d" />






