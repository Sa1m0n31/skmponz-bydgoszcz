/* Otwieranie menu */

const menuOpen = () => {
    gsap.to(".menuMobile", { height: window.screen.height, duration: 1 })
        .then(() => {
            document.querySelector(".container").classList.add("overflow");
            //gsap.set(".container", { overflowY: "hidden", height: window.screen.height });
        });
}

const menuClose = () => {
    gsap.to(".menuMobile", { height: 0, duration: 1 })
        .then(() => {
           document.querySelector(".container").classList.remove("overflow");
           //gsap.set(".container", { overflowY: "default", height: "auto" });
        });
}

/* Usuwanie orderow przy scrollowaniu */

window.addEventListener("scroll", () => {
    if(window.innerWidth <= 900) {
        if(window.pageYOffset > 50) {
            if(document.querySelector(".headerLeft") !== null) {
                document.querySelector(".headerLeft").style.opacity = "0";
            }
        }
        else {
            if(document.querySelector(".headerLeft") !== null) {
                document.querySelector(".headerLeft").style.opacity = "1";
            }
        }
    }
});

/* Smooth scroll w posiedzeniach zarzadu */

const goTo = (n) => {
    const el = document.querySelector(`#pos${n}`);

    el.scrollIntoView({
        top: -50,
        behavior: "smooth"
    });
}

/* Add visits from old site to views counter */

const addToViewCounter = () => {
    const el = document.querySelector(".avc_visit_counter_front");
    const textAll = document.querySelector(".avc_visit_counter_front").textContent;
    /* Get number after ':' */
    let number = parseInt(textAll.split(":")[1]) + 2431142;
    el.textContent = "Licznik odwiedzin: " + number;
}

if(document.querySelector(".avc_visit_counter_front") !== null) {
    addToViewCounter();
}