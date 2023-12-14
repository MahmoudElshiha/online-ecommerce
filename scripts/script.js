const bar = document.getElementById("bar");
const close = document.getElementById("close");
const cross = document.getElementById("cross");
const nav = document.getElementById("navbar");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}
if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}
if (cross) {
  cross.onclick = () => {
    profile.classList.toggle("show");
  };
}
let profile = document.querySelector(".profile");

document.querySelector("#user-circle").onclick = () => {
  profile.classList.toggle("show");
};
