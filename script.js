const lienWeb = document.querySelector('.webLink');
const lienAudVis = document.querySelector('.AudVisLink');
const lienCom = document.querySelector('.comLink');

const webProjects = document.querySelector('.web');
const audVisProjects = document.querySelector('.AudVis');
const comProjects = document.querySelector('.com');

const linkMentions = document.querySelector('.toMentions');
const mentions = document.querySelector('.mentions');

linkMentions.addEventListener("click", () => {
    mentions.style.display = "block";
});

lienWeb.addEventListener('click', () => {
    webProjects.style.display = "block";
    lienWeb.style.opacity = "1";
    audVisProjects.style.display = "none";
    lienAudVis.style.opacity = "0.5";
    comProjects.style.display = "none";
    lienCom.style.opacity = "0.5";
});

lienAudVis.addEventListener('click', () => {
    webProjects.style.display = "none";
    lienWeb.style.opacity = "0.5";
    audVisProjects.style.display = "block";
    lienAudVis.style.opacity = "1";
    comProjects.style.display = "block";
    lienCom.style.opacity = "0.5";
});

lienCom.addEventListener('click', () => {
    webProjects.style.display = "none";
    lienWeb.style.opacity = "0.5";
    audVisProjects.style.display = "none";
    lienAudVis.style.opacity = "0.5";
    comProjects.style.display = "block";
    lienCom.style.opacity = "1";
});