
document.addEventListener('DOMContentLoaded', () => {
    let triggers = document.querySelectorAll('[data-trigger]')
    if (triggers.length > 0) {
        triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                let id = trigger.getAttribute('data-trigger')
                let target = document.querySelector(`[data-target="${id}"]`)

                // Toggle not working, debug
                if(trigger.classList.contains('open')) {
                    trigger.classList.remove('open')
                } else {
                    trigger.classList.add('open')
                }

                if(target.classList.contains('open')) {
                    target.classList.remove('open')
                } else {
                    target.classList.add('open')
                }
            })
        })
    }
});

