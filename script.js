const menuTrigger = document.querySelector('.trigger'),
      closeTrigger = document.querySelector('.mini-close'),
      giveClass = document.querySelector('.site');

// Check if elements exist before adding event listeners
if (menuTrigger) {
    menuTrigger.addEventListener('click', function() {
        giveClass.classList.toggle('showmenu');
    });
}

if (closeTrigger) {
    closeTrigger.addEventListener('click', function() {
        giveClass.classList.remove('showmenu');
    });
}

// submenu
const buttons = document.querySelectorAll('.has-child > a'),
      modalHeight = document.querySelector('.menu-list');

// Check if the buttons NodeList is not empty
if (buttons.length > 0) {
    buttons.forEach((button) => {
        // Remove expand class from all items initially
        button.parentNode.classList.remove('expand');

        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior

            let modal = document.querySelector('.menu-list');
            modal.classList.toggle('show');

            if (!this.parentNode.classList.contains('expand')) {
                this.parentNode.classList.toggle('expand');
            }

            if (!modal.classList.contains('show')) {
                modal.style.height = modalHeight.offsetHeight + 'px'; // Ensure modalHeight is a number
            } else {
                modal.style.height = (this.parentNode.querySelector('ul').offsetHeight + 45) + 'px';
            }

            // back button handling
            const backButton = this.parentNode.querySelector('.back');
            if (backButton) {
                backButton.addEventListener('click', function() { // Corrected missing comma before function
                    modal.style.height = 'auto';
                    modal.classList.remove('show');
                    button.parentNode.classList.remove('expand');
                });
            }
        });
    });
}

// Mini Menu
const topmenu = document.querySelectorAll('.top li a'); 

for(let i = 0; i < topmenu.length; i++) {
    topmenu[i].addEventListener('click', function() {
        // Get currently active element
        let current = document.querySelectorAll('.top li a.active');

        // Remove active class from current element if clicked element is active
        if(this.classList.contains('active')){
            this.classList.remove('active');
            document.querySelector(`#${this.dataset.target}`).classList.remove('active');
            return;
        }

        // Remove active class from previously active element
        if(current.length > 0) {
            current[0].classList.remove('active');
            let targetId = current[0].getAttribute('data-target');
            document.querySelector(`#${targetId}`).classList.remove('active');
        }

        // Add active class to clicked element and corresponding target
        this.classList.add('active');
        document.querySelector(`#${this.dataset.target}`).classList.add('active');
    })
}
