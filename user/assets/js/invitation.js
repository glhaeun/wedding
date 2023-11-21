let currentIndex = 0;

AOS.init({
  offset: 0,
});

document.addEventListener("DOMContentLoaded", () => {
  window.scrollTo(0, 0);
  setTimeout(() => {
    window.scrollTo(0, 0);
  }, 200);
});

var audio = document.getElementById("invitationAudio");
// audio.autoplay = true;
audio.loop = true;
audio.load();

var first = true;

document.addEventListener("click", () => {
  if (first) {
    audio.play();
    let frame1 = document.getElementById("frame-1");
    let frame2 = document.getElementById("frame-2");
    let middleCircle = document.querySelector(".middle-circle-inv");
    let invContainer = document.querySelector(".container-inv");
    let sparkleInv = document.querySelector(".sparkle-inv");
    let circleText = document.querySelectorAll(".invitation-title");
    circleText.forEach((element) => {
      element.style.animation = "openTextCircle 2s ease-in-out 1";
    });
    document.querySelector(".tap-to-open").innerHTML = "";

    document.querySelector(".tap-to-open").style.animation =
      "openTextCircle 2s ease-in-out 1";
    document.querySelector(".dear-title").style.animation =
      "openTextCircle 2s ease-in-out 1";
    middleCircle.style.animation = "openMiddleCircle 2s ease-in-out 1";
    frame1.style.animation = "openCardFrame 2s ease-in-out 1";
    frame2.style.animation = "openCardFrame-2 2s ease-in-out 1";
    sparkleInv.style.animation = "openCardFrame 2s ease-in-out 1";

    document
      .querySelectorAll(
        ".flower-1, .flower-2, .leave-1, .leave-2, .leave-3, .leave-4, .golden-blur, .tap-to-open"
      )
      .forEach((element) => {
        // element.style.animation = "openRemove 2s ease-in-out 1";
      });

    setTimeout(function () {
      setTimeout(() => {
        document.body.style.overflow = "auto";
      }, 1000);
      document.querySelector(".spinning-cd").style.display = "block";
      document.querySelector(".landing-inv").style.animation =
        "reverseBlur 0.3s linear 1";
      invContainer.remove();
    }, 2000);
    first = false;
  }
});
function playInvitationSong() {
  var audio = document.getElementById("invitationAudio");
  if (audio.paused) {
    audio.play();
    document.querySelector(".spinning-cd").style.animation =
      "frameRotation 10s linear infinite";
  } else {
    document.querySelector(".spinning-cd").style.animation =
      "frameRotation 99999s linear infinite";
    audio.pause();
  }
}
