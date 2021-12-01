window.onscroll = function() {
    let scrolled = window.pageYOffset || document.documentElement.scrollTop,
        but = document.body.offsetHeight * 0.1,
        butt = document.querySelector('.skip-link');

    if (scrolled >= but) {
        butt.classList.add('active');
    } else {
        butt.classList.remove('active');
    }
};

let trigger = document.getElementById('hamburger'),
    menu = document.querySelector('.navigation-header'),
    isClosed = false;

trigger.onclick = () => {
    if (isClosed) {
        trigger.classList.remove('open');
        trigger.classList.add('closed');
        menu.classList.toggle('active');
        isClosed = false;
    } else {
        trigger.classList.remove('closed');
        trigger.classList.add('open');
        menu.classList.toggle('active');
        isClosed = true;
    }
};

let faqItem = document.querySelectorAll('.faq-item');
if(faqItem) {
    faqItem.forEach( (i, index) => {
        let faqAnswer = i.querySelector('.faq-answer');
        let h = faqAnswer.scrollHeight;

        i.onclick = () => {
            let closeFaqItem = document.querySelector('[data-full="true"]');

            if(i.dataset.full === 'true') {
                i.dataset.full = 'false';
            } else if(closeFaqItem) {
                closeFaqItem.dataset.full = 'false';
                i.dataset.full = 'true';
            } else {
                i.dataset.full = 'true';
            }
        }
    });
}

let list = document.querySelectorAll("header li.menu-item");
list.forEach(l => {

    if(l.childElementCount === 2){
        let btn = document.createElement('div');
        btn.classList.add('button');

        l.insertBefore(btn, l.children[1]);
        if(window.innerWidth <= 1024) {
            l.querySelector('.button').onclick = () => {
                l.children[2].classList.toggle('active');
                l.classList.toggle('active');
            }
        }
    }
});