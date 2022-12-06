class MobileNavbar {
    constructor(mobileMenu, navlist, navlinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navlist = document.querySelector(navlist);
        this.navlinks = document.querySelectorAll(navlinks);
        this.activeCalss = "active";

        this.handleClick = this.handleClick.bind();
    }

    animateLinks() {
        this.navlinks.forEach((link) => {
            console.log();
          link.style.animation  
          ? (link.style.animation = "")
          : (link.style.animation = 'navLinkFade 0.5s ease forwards $ {index / 7 + 0.3}s');
        });
    }

    handleClick() {
        this.navlist.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks()
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }
}

const MobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);
MobileNavbar.init();