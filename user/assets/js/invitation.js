temp = ["Tap to open", "Tap to open.", "Tap to open..", "Tap to open..."];
let currentIndex = 0;

document.addEventListener("DOMContentLoaded", () => {
  setInterval(() => {
    document.querySelector(".tap-to-open").innerHTML = temp[currentIndex];
    currentIndex = (currentIndex + 1) % temp.length;
  }, 1000);
});

var audio = document.getElementById("invitationAudio");
audio.autoplay = true;
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
      element.style.animation = "openTextCircle 4s ease-in-out 1";
    });

    middleCircle.style.animation = "openMiddleCircle 4s ease-in-out 1";
    frame1.style.animation = "openCardFrame 4s ease-in-out 1";
    frame2.style.animation = "openCardFrame-2 4s ease-in-out 1";
    sparkleInv.style.animation = "openCardFrame 4s ease-in-out 1";
    temp = ["&nbsp", "&nbsp", "&nbsp", "&nbsp"];

    document
      .querySelectorAll(
        ".flower-1, .flower-2, .leave-1, .leave-2, .leave-3, .leave-4, .golden-blur"
      )
      .forEach((element) => {
        element.style.animation = "openRemove 4s ease-in-out 1";
      });

    setTimeout(function () {
      setTimeout(() => {
        document.body.style.overflow = "auto";
      }, 300);
      document.querySelector(".landing-inv").style.animation =
        "reverseBlur 4s linear 1";
      invContainer.remove();
    }, 4000);
    first = false;
  }
});
function playInvitationSong() {
  var audio = document.getElementById("invitationAudio");
  if (audio.paused) {
    audio.play();
  } else {
    audio.pause();
  }
}