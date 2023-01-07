const lienWeb = document.querySelector('.webLink');
const lienAudVis = document.querySelector('.AudVisLink');
const lienCom = document.querySelector('.comLink');

const webProjects = document.querySelector('.web');
const audVisProjects = document.querySelector('.AudVis');
const comProjects = document.querySelector('.Com');

const linkMentions = document.querySelector('.toMentions');
const mentions = document.querySelector('.mentions');
const openMentions = document.querySelector(".openMentions");

const loader = document.querySelector(".preloader");

if (loader) {
    window.addEventListener("load", () => {
        loader.style.display = "none";
    });
}

if (linkMentions) {
    linkMentions.addEventListener("click", () => {
        mentions.style.display = "block";
    });
}

if (lienWeb) {
    lienWeb.addEventListener('click', () => {
        webProjects.style.display = "block";
        lienWeb.style.opacity = "1";
        audVisProjects.style.display = "none";
        lienAudVis.style.opacity = "0.5";
        comProjects.style.display = "none";
        lienCom.style.opacity = "0.5";
    });
}

if (lienAudVis) {
    lienAudVis.addEventListener('click', () => {
        webProjects.style.display = "none";
        lienWeb.style.opacity = "0.5";
        audVisProjects.style.display = "block";
        lienAudVis.style.opacity = "1";
        comProjects.style.display = "none";
        lienCom.style.opacity = "0.5";
    });
}

if (lienCom) {
    lienCom.addEventListener('click', () => {
        webProjects.style.display = "none";
        lienWeb.style.opacity = "0.5";
        audVisProjects.style.display = "none";
        lienAudVis.style.opacity = "0.5";
        comProjects.style.display = "block";
        lienCom.style.opacity = "1";
    });
}
AOS.init();