const navMenu = document.getElementById('nav_menu'),
    navToggle = document.getElementById('nav_toggle'),
    navClose = document.getElementById('nav_close')

// MENU SHOW
if (navToggle) {
    navToggle.addEventListener('click', () => {
        // console.log('tes')
        navMenu.classList.add('show-menu')
    })
}

// MENU HIDDEN
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

// REMOVE MENU WHEN CLICK LINK

const navLink = document.querySelectorAll('.nav-link')

function linkAction() {
    const navMenu = document.getElementById('nav_menu')
    navMenu.classList.remove('show-menu')
}

navLink.forEach(n => n.addEventListener('click', linkAction))


//Video

const videoFile = document.getElementById('video-play'),
    videoButton = document.getElementById('btn-play'),
    videoIcon = document.getElementById('btn-play-icon')

function playPause() {
    if (videoFile.paused) {
        //play video
        videoFile.play()

        // merubah Icon
        videoIcon.classList.add('ri-pause-line')
        videoIcon.classList.remove('ri-play-line')
    } else {
        videoFile.pause()

        // merubah Icon
        videoIcon.classList.add('ri-play-line')
        videoIcon.classList.remove('ri-pause-line')
    }
}


videoButton.addEventListener('click', playPause)

function finalVideo() {
    // merubah Icon
    videoIcon.classList.add('ri-play-line')
    videoIcon.classList.remove('ri-pause-line')
}

videoFile.addEventListener('ended', finalVideo)