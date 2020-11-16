<?php
session_start();
session_destroy();
?>
<html>
<style>
    body {
        min-height: 100vh;
        padding: 0 10%;
        background-color: #111;
        color: #FFF;
        font-size: 2em;
        display: flex;
        align-items: center;
    }

    .blinking-cursor {
        pointer-events: none;
        user-select: none;
        animation: blink 1s steps(2, start) infinite;
    }
    @keyframes blink {
        to {
            visibility: hidden;
        }
    }

</style>
<head>

</head>
<body>
<span id="type-text">...</span>
<span class="blinking-cursor">_</span>

</body>

<script>
    function init () {

        wait(1000).then(() => {
            clearText()
            typeText('U bent uitgelogd.');
        })


    }


    // Source code 🚩

    const elementNode = document.getElementById('type-text')
    let text = ''

    function updateNode () {
        elementNode.innerText = text
    }

    function pushCharacter (character) {
        text += character
        updateNode()
    }

    function popCharacter () {
        text = text.slice(0, text.length -1)
        updateNode()
    }

    function clearText () {
        text = ''
        updateNode()
    }


    function wait (time) {
        if (time === undefined) {
            const randomMsInterval = 100 * Math.random()
            time = randomMsInterval < 50 ? 10 : randomMsInterval
        }

        return new Promise(resolve => {
            setTimeout(() => {
                requestAnimationFrame(resolve)
            }, time)
        })
    }

    function typeCharacter (character) {
        return new Promise(resolve => {
            pushCharacter(character)
            wait().then(resolve)
        })
    }

    function removeCharacter () {
        return new Promise(resolve => {
            popCharacter()
            wait().then(resolve)
        })
    }

    function typeText (text) {
        return new Promise(resolve => {

            function type ([ character, ...text ]) {
                typeCharacter(character)
                    .then(() => {
                        if (text.length) type(text)
                        else resolve()
                    })
            }

            type(text)
        })
    }

    function removeText ({ length:amount }) {
        return new Promise(resolve => {

            function remove (count) {
                removeCharacter()
                    .then(() => {
                        if (count > 1) remove(count - 1)
                        else resolve()
                    })
            }

            remove(amount)
        })
    }


    init()
    setTimeout(function () {
        window.location.href= 'https://mobiauth.nl'; // the redirect goes here

    },6000); // 5 seconds
</script>
</html>