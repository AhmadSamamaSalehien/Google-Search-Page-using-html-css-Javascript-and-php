<?php

    ob_start();

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <title>Google Clone</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <style>

            :root {
                --bg-color: #fff;
                --text-color: #000;
                --search-bg: #fff;
                --search-border: rgb(184, 163, 163);
                --link-color: #000;
                --hover-link-color: #1a0dab;
                --button-border: #5695f4;
                --button-text: #5695f4;
                --button-bg: transparent;
                --footer-bg: #fff;
                --footer-border: #ccc;
                --error-color: #d93025;
                --google-gradient: linear-gradient(
                    90deg,
                    #4285fa 0% 5%,
                    #34a853 5% 12%,
                    #fbbc05 12% 20%,
                    #ea4335 20% 30%,
                    #4285fa 30% 35%,
                    #34a853 35% 52%,
                    #fbbc05 52% 66%,
                    #ea4335 66% 70%,
                    #4285fa 70% 95%,
                    #34a853 95% 112%,
                    #fbbc05 112% 120%,
                    #ea4335 120% 140%,
                    #4285fa 140% 155%,
                    #34a853 155% 172%,
                    #fbbc05 172% 190%,
                    #ea4335 190% 210%,
                    #4285fa 210% 225%,
                    #34a853 225% 252%,
                    #fbbc05 252% 270%,
                    #ea4335 270% 290%,
                    #4285fa 290% 305%,
                    #34a853 305% 322%,
                    #fbbc05 322% 350%,
                    #ea4335 350% 370%,
                    #4285fa 370% 385%,
                    #34a853 385% 400%
                );
                --google-gradient-shadow: linear-gradient(
                    90deg,
                    #4285fa 0%,
                    #34a853 12%,
                    #fbbc05 20%,
                    #ea4335 30%,
                    #4285fa 35%,
                    #34a853 52%,
                    #fbbc05 66%,
                    #ea4335 80%,
                    #4285fa 95%,
                    #34a853 112%,
                    #fbbc05 120%,
                    #ea4335 140%,
                    #4285fa 155%,
                    #34a853 172%,
                    #fbbc05 190%,
                    #ea4335 210%,
                    #4285fa 225%,
                    #34a853 252%,
                    #fbbc05 270%,
                    #ea4335 290%,
                    #4285fa 305%,
                    #34a853 322%,
                    #fbbc05 350%,
                    #ea4335 370%,
                    #4285fa 385%,
                    #34a853 400%
                );
            }
            .dark-mode {
                --bg-color: #202124;
                --text-color: #bdc1c6;
                --search-bg: #303134;
                --search-border: #5f6368;
                --link-color: #8ab4f8;
                --hover-link-color: #8ab4f8;
                --button-border: #8ab4f8;
                --button-text: #8ab4f8;
                --button-bg: #303134;
                --footer-bg: #171717;
                --footer-border: #5f6368;
                --error-color: #f28b82;
            }
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                transition: background-color 0.3s, color 0.3s;
            }
            body {
                font-family: arial, sans-serif;
                background-color: var(--bg-color);
                color: var(--text-color);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            .animate {
                position: absolute;
                top: 0;
                width: 100%;
                height: 5px;
                background: var(--google-gradient);
                background-size: 200%;
                animation: animateBackground 6s ease-in infinite;
                display: none;
            }
            .animate.active {
                display: block;
            }
            @keyframes animateBackground {
                0% {
                    background-position: 0%;
                }
                100% {
                    background-position: 200%;
                }
            }
            .animate::before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 20px;
                transform: translateY(100%);
                background: var(--google-gradient-shadow);
                background-size: 200%;
                animation: animateBackground 6s ease-in infinite;
            }
            .animate::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 200px;
                transform: translateY(100%);
                backdrop-filter: blur(30px);
            }
            .google-main-container {
                padding-top: 20px;
                position: relative;
                margin: 0 auto;
                flex: 1;
            }
            .top-nav {
                width: 100%;
                display: flex;
                justify-content: flex-end;
                padding: 0 30px;
            }
            .top-nav ul {
                display: flex;
                align-items: center;
                list-style: none;
            }
            .top-nav ul li {
                margin: 2px 10px;
                display: inline-block;
                vertical-align: middle;
            }
            .top-nav ul li a {
                text-decoration: none;
                color: var(--link-color);
            }
            .top-nav ul li a:hover {
                text-decoration: underline;
                color: var(--hover-link-color);
            }
            #google-apps {
                background-image: url("https://i.postimg.cc/WbMbN73N/993522.avif");
                background-repeat: no-repeat;
                background-size: contain;
                height: 15px;
                width: 15px;
                cursor: pointer;
            }
            .signbtn, .dark-mode-toggle {
                display: inline-block;
                padding: 10px 20px;
                border: 1px solid var(--button-border);
                outline: none;
                color: var(--button-text);
                background: var(--button-bg);
                cursor: pointer;
            }
            .main {
                width: 80%;
                margin: 0 auto;
            }
            .logo-container {
                padding-top: 50px;
            }
            .logo img {
                display: block;
                margin: 0 auto;
                width: 250px;
            }
            .search {
                width: 80%;
                border: 1px solid var(--search-border);
                display: flex;
                padding: 4px 20px;
                align-items: center;
                margin: 2rem auto;
                border-radius: 50px;
                background-color: var(--search-bg);
            }
            .search input {
                width: 100%;
                outline: none;
                border: none;
                padding: 10px;
                background: transparent;
                color: var(--text-color);
            }
            .search i, .search img#microphone {
                width: 15px;
                cursor: pointer;
                color: var(--text-color);
            }
            .search img#microphone.mic-active {
                background-color: var(--button-bg);
                border-radius: 50%;
                padding: 5px;
            }
            button.search-btn {
                border: 1px solid transparent;
                color: #757575;
                font-weight: bold;
                padding: 15px;
                cursor: pointer;
                background: transparent;
            }
            button.search-btn:hover {
                border: 1px solid #b8b8b8;
            }
            .results-container {
                width: 80%;
                margin: 2rem auto;

            }
            .result {
                margin-bottom: 20px;
                border-bottom: 1px solid lightgrey;
            }
            .result h3 {
                margin: 0;
                font-size: 20px;
                color: var(--hover-link-color);
            }
            .result a {
                text-decoration: none;
                color: var(--hover-link-color);
            }
            .result a:hover {
                text-decoration: underline;
            }
            .result p {
                margin: 5px 0;
                color: var(--text-color);
            }
            .result .url {
                color: var(--link-color);
                font-size: 14px;
            }
            .loading-container {
                display: flex;
                column-gap: 20px;
                justify-content: center;
            }
            .loading-container .dot {
                width: 30px;
                height: 30px;
                background-color: black;
                border-radius: 50%;
                animation: loading 1s infinite alternate;
            }
            .loading-container .dot:nth-child(1) {
                background-color: #4285f4;
                animation-delay: -0.25s;
            }
            .loading-container .dot:nth-child(2) {
                background-color: #ea4335;
                animation-delay: -0.5s;
            }
            .loading-container .dot:nth-child(3) {
                background-color: #fbbc05;
                animation-delay: -0.75s;
            }
            .loading-container .dot:nth-child(4) {
                background-color: #34a853;
                animation-delay: -1s;
            }
            @keyframes loading {
                0% {
                    transform: translateY(-15px);
                }
                100% {
                    transform: translateY(5px);
                }
            }
            .status-message {
                color: var(--text-color);
                font-size: 14px;
                margin-top: 10px;
                text-align: center;
                max-width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
            .error-message {
                color: var(--error-color);
                font-weight: 500;
            }
            .footer {
                width: 100%;
                position: fixed;
                bottom: 0;
                background-color: var(--footer-bg);
                display: flex;
                justify-content: space-between;
                align-items: center;
                left: 0;
                border-top: 1px solid var(--footer-border);
                padding: 20px 0;
            }
            .footer ul li {
                display: inline-block;
                padding: 0 15px;
                color: var(--text-color);
            }
            .footer a {
                text-decoration: none;
                color: var(--text-color);
                font-size: 15px;
                height: 40px;
            }
            .footer a:hover {
                text-decoration: underline;
            }
            .left-footer {
                float: left;
            }
            .right-footer {
                float: right;
            }
            @media screen and (max-width: 573px) {
                .logo img {
                    width: 80%;
                    margin: 0 auto;
                }
                .main {
                    width: 100%;
                }
                .search {
                    width: 90%;
                }
                .results-container {
                    width: 90%;
                }
                .footer {
                    flex-direction: column;
                    justify-content: center;
                    row-gap: 20px;
                }
            }
        </style>

    </head>

    <body>

        <div class="animate" id="virtualAssistant"></div>

        <div class="google-main-container">

            <div class="top-nav">

                <ul>

                    <!-- <li id="google-apps"><a href="#"></a></li> -->
                    <li><button class="dark-mode-toggle" onclick="toggleDarkMode()">Toggle Dark Mode</button></li>
                    <li><button class="signbtn"><i class="fa fa-user"></i> SIGN IN</button></li>

                </ul>

            </div>

            <div class="main">

                <div class="logo-container">

                    <div class="logo">

                        <img src="https://i.postimg.cc/QCFhZpz3/google-logo.png" alt="Google Logo">

                    </div>

                    <div class="search">

                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="searchInput" placeholder="Search...">
                        <img id="microphone" src="https://i.postimg.cc/7YTwBn71/mic.png" onclick="toggleVoiceSearch()">
                        <!-- <button class="search-btn" onclick="search()">Search</button> -->

                    </div>

                </div>

            </div>

            <div class="results-container" id="results"></div>

            <div class="status-message" id="statusMessage"></div>

            <div class="footer">

                <ul class="left-footer">

                    <li><a href="#">About</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">How Search Works</a></li>

                </ul>

                <ul class="right-footer">

                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Settings</a></li>

                </ul>

            </div>

        </div>

        <script>

            function toggleDarkMode() {
                document.body.classList.toggle('dark-mode');
                if (document.body.classList.contains('dark-mode')) {
                    localStorage.setItem('darkMode', 'enabled');
                } else {
                    localStorage.setItem('darkMode', 'disabled');
                }
            }

            window.addEventListener('DOMContentLoaded', function() {
                if (localStorage.getItem('darkMode') === 'enabled') {
                    document.body.classList.add('dark-mode');
                }
            });

            let recognition = null;
            let wakeWordRecognition = null;

            const micButton = document.getElementById('microphone');
            const searchInput = document.getElementById('searchInput');
            const statusMessage = document.getElementById('statusMessage');
            const virtualAssistant = document.getElementById('virtualAssistant');

            async function checkMicrophonePermission()
            
                {

                    if (!navigator.permissions || !navigator.permissions.query) 
                        
                        {

                            return 'unknown';
                    
                        }

                    try 
                    
                        {

                            const permissionStatus = await navigator.permissions.query({ name: 'microphone' });
                            return permissionStatus.state;
                    
                        } 
                        
                    catch (error)
                    
                        {

                            console.error('Permission query error:', error);
                            return 'unknown';
                    
                        }

                }

            function startWakeWordListener() 
            
                {

                    if (!('webkitSpeechRecognition' in window))
                        
                        {

                            console.log('Wake word detection not supported in this browser.');
                            return;
                    
                        }

                    wakeWordRecognition = new webkitSpeechRecognition();
                    wakeWordRecognition.continuous = true;
                    wakeWordRecognition.interimResults = true;
                    wakeWordRecognition.lang = 'en-US';

                    wakeWordRecognition.onresult = (event) => {
                        let interimTranscript = '';
                        let finalTranscript = '';
                        for (let i = event.resultIndex; i < event.results.length; i++) {
                            const transcript = event.results[i][0].transcript;
                            if (event.results[i].isFinal) {
                                finalTranscript += transcript;
                            } else {
                                interimTranscript += transcript;
                            }
                        }
                        const combinedTranscript = (finalTranscript + interimTranscript).toLowerCase();
                        // Trigger voice input when user says "ok"
                        if (combinedTranscript.includes('ok')) {
                            wakeWordRecognition.stop();
                            toggleVoiceSearch();
                        }
                    };

                    wakeWordRecognition.onerror = (event) => {

                        console.error('Wake word recognition error:', event.error);

                        if (event.error === 'not-allowed') 
                            
                            {

                                statusMessage.className = 'status-message error-message';
                                statusMessage.textContent = 'Microphone access denied for wake word. Please allow it in browser settings.';
                        
                            }

                        if (event.error !== 'not-allowed')
                            
                            {

                                setTimeout(startWakeWordListener, 1000);
                        
                            }

                    };

                    wakeWordRecognition.onend = () => {

                        if (wakeWordRecognition)
                            
                            {

                                setTimeout(startWakeWordListener, 1000);
                        
                            }

                    };

                    try 
                    
                        {

                            wakeWordRecognition.start();
                            console.log('Wake word listener started.');
                    
                        }
                        
                    catch (error)
                    
                        {

                            console.error('Error starting wake word listener:', error);

                        }

                }

            async function toggleVoiceSearch()
            
                {

                    if (!('webkitSpeechRecognition' in window)) 
                        
                        {

                            statusMessage.className = 'status-message error-message';
                            statusMessage.textContent = 'Voice input is not supported in this browser. Please use Chrome.';

                            return;
                    
                        }

                    if (!window.location.protocol.includes('https') && window.location.hostname !== 'localhost')
                        
                        {

                            statusMessage.className = 'status-message error-message';
                            statusMessage.textContent = 'Voice input requires a secure connection (HTTPS or localhost).';

                            return;
                    
                        }

                    const permissionState = await checkMicrophonePermission();

                    if (permissionState === 'denied') 
                        
                        {

                            statusMessage.className = 'status-message error-message';
                            statusMessage.textContent = 'Microphone access is blocked. Please allow it in browser settings.';

                            return;
                    
                        }

                    if (recognition && recognition.running)
                        
                        {

                            recognition.stop();
                            return;
                    
                        }

                    recognition = new webkitSpeechRecognition();

                    recognition.continuous = false;
                    recognition.interimResults = true;
                    recognition.lang = 'en-US';

                    recognition.onstart = () => {

                        micButton.classList.add('mic-active');
                        statusMessage.className = 'status-message';
                        statusMessage.textContent = 'Listening... Speak now.';
                        virtualAssistant.classList.add('active');

                    };

                    recognition.onresult = (event) => {

                        let interimTranscript = '';
                        let finalTranscript = '';

                        for (let i = event.resultIndex; i < event.results.length; i++)
                            
                            {

                                const transcript = event.results[i][0].transcript;
                                if (event.results[i].isFinal) {
                                    finalTranscript += transcript;
                                } else {
                                    interimTranscript += transcript;
                                }
                        
                            }

                        searchInput.value = finalTranscript || interimTranscript;
                        statusMessage.textContent = finalTranscript ? 'Voice input received!' : 'Processing...';

                    };

                    recognition.onend = () => {

                        micButton.classList.remove('mic-active');
                        statusMessage.textContent = '';
                        virtualAssistant.classList.remove('active');

                        recognition = null;

                        if (searchInput.value) search();
                        if (!wakeWordRecognition) startWakeWordListener();

                    };

                    recognition.onerror = (event) => {

                        micButton.classList.remove('mic-active');
                        virtualAssistant.classList.remove('active');
                        recognition = null;
                        statusMessage.className = 'status-message error-message';
                        let errorMsg = 'Voice input error: ';
                        switch (event.error) {
                            case 'no-speech':
                                errorMsg += 'No speech detected. Try speaking clearly.';
                                break;
                            case 'not-allowed':
                                errorMsg += 'Microphone access denied. Please allow it in browser settings.';
                                break;
                            case 'network':
                                errorMsg += 'Network error. Check your internet connection.';
                                break;
                            default:
                                errorMsg += event.error;
                        }
                        statusMessage.textContent = errorMsg;
                        if (!wakeWordRecognition && event.error !== 'not-allowed') startWakeWordListener();
                    };

                    try {
                        recognition.start();
                        if (wakeWordRecognition) wakeWordRecognition.stop();
                    } catch (error) {
                        console.error('Error starting recognition:', error);
                        statusMessage.className = 'status-message error-message';
                        statusMessage.textContent = 'Error starting voice input. Please ensure microphone access is allowed.';
                        virtualAssistant.classList.remove('active');
                        if (!wakeWordRecognition) startWakeWordListener();
                    }
            }

            async function search() {
                const query = searchInput.value.trim();
                if (!query) {
                    document.getElementById('results').innerHTML = '<p>Please enter a search query.</p>';
                    return;
                }

                const resultsContainer = document.getElementById('results');
                resultsContainer.innerHTML = `
                    <div class="loading-container">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                `;

                try {
                    const response = await fetch(`search.php?q=${encodeURIComponent(query)}`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    if (!response.ok) {
                        console.error('Fetch error:', response.status, response.statusText);
                        throw new Error(`HTTP error! status: ${response.status} ${response.statusText}`);
                    }
                    const text = await response.text();
                    console.log('Raw API Response:', text);
                    let data;
                    try {
                        data = JSON.parse(text);
                    } catch (jsonError) {
                        console.error('JSON parse error:', jsonError);
                        throw new Error(`Invalid JSON response: ${jsonError.message}`);
                    }
                    console.log('Parsed API Response:', data);

                    resultsContainer.innerHTML = '';
                    if (data.error) {
                        resultsContainer.innerHTML = `<p class="error-message">Error: ${data.error.message || data.error}</p>`;
                    } else if (data.items && data.items.length > 0) {
                        data.items.forEach(result => {
                            const resultDiv = document.createElement('div');
                            resultDiv.className = 'result';
                            resultDiv.innerHTML = `
                                <h3><a href="${result.link}" target="_blank">${result.title}</a></h3>
                                <p class="url">${result.displayLink}</p>
                                <p>${result.snippet}</p>
                            `;
                            resultsContainer.appendChild(resultDiv);
                        });
                    } else {
                        resultsContainer.innerHTML = '<p>No results found.</p>';
                    }
                } catch (error) {
                    console.error('Search error:', error);
                    resultsContainer.innerHTML = `<p class="error-message">Error fetching results: ${error.message}. Please try again.</p>`;
                }
            }

            searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    search();
                }
            });

            window.addEventListener('load', () => {
                checkMicrophonePermission().then(permissionState => {
                    if (permissionState !== 'denied') {
                        startWakeWordListener();
                    } else {
                        statusMessage.className = 'status-message error-message';
                        statusMessage.textContent = 'Microphone access is blocked. Please allow it to enable wake word detection.';
                    }
                });
            });
        </script>
    </body>
</html>

<?php

    ob_end_flush();

?>
